import os
import re
import time
import random
import requests
from urllib.parse import urljoin, urlparse
from playwright.sync_api import sync_playwright

BASE_URL = "https://techguru-laravel.scriptfusions.com"

# List of all pages from your menu
PAGES = [
    "/index", "/index-one-page", "/index2", "/index2-one-page", "/index3", "/index3-one-page",
    "/about",
    "/team", "/team-carousel", "/team-details", "/portfolio", "/portfolio-details",
    "/testimonials", "/testimonials-carousel", "/pricing", "/gallery", "/faq", "/404", "/coming-soon",
    "/services", "/services-carousel", "/threat-detection-prevention", "/endpoint-device-security",
    "/data-protection-privacy", "/backup-recovery", "/advanced-technology", "/cloud-managed-services",
    "/products", "/product-details", "/cart", "/checkout", "/wishlist", "/sign-up", "/login",
    "/blog", "/blog-carousel", "/blog-list", "/blog-list-2", "/blog-details",
    "/contact"
]

# Valid image extensions
IMAGE_EXTENSIONS = (".jpg", ".jpeg", ".png", ".gif", ".svg", ".webp", ".avif", ".bmp", ".ico")

all_img_urls = set()  # store all unique image URLs here
css_cache = {}  # Cache for analyzed CSS files: {url: [image_urls]}
analyzed_css_count = 0  # Track how many CSS files we've analyzed


def is_image_url(url):
    """Check if a URL ends with a known image extension."""
    if not url:
        return False
    
    # Remove query parameters and fragments for extension check
    parsed = urlparse(url.split("?")[0].split("#")[0])
    return parsed.path.lower().endswith(IMAGE_EXTENSIONS)


def scrape_page_images(page, page_url):
    """Extract all image URLs from one loaded page."""
    print(f"   🔍 Scanning for images...")
    
    # 1. <img src="..."> and <img data-src="..."> (for lazy loading)
    img_elements = page.query_selector_all("img")
    img_count = 0
    for img in img_elements:
        # Check multiple attributes for image sources
        for attr in ["src", "data-src", "data-lazy-src", "data-original"]:
            src = img.get_attribute(attr)
            if src and src != "":
                full_url = urljoin(page_url, src)
                if is_image_url(full_url):
                    all_img_urls.add(full_url)
                    img_count += 1
    
    print(f"   📸 Found {img_count} images in <img> tags")

    # 2. Inline styles: style="background-image:url(...)" and all url() patterns
    style_count = 0
    # Get ALL elements with style attributes (not just background)
    style_elements = page.query_selector_all("[style]")
    for elem in style_elements:
        style = elem.get_attribute("style") or ""
        # Match ALL url() patterns in CSS (background-image, background, mask, etc.)
        matches = re.findall(r'url\s*\(\s*["\']?([^"\')\s]+)["\']?\s*\)', style, re.IGNORECASE)
        for match in matches:
            if not match.lower().startswith("data:"):  # Skip base64 images
                full_url = urljoin(page_url, match)
                if is_image_url(full_url):
                    all_img_urls.add(full_url)
                    style_count += 1
    
    # Also check common slider/carousel elements specifically
    slider_elements = page.query_selector_all(".swiper-slide, .carousel-item, .slide, [class*='slider'], [class*='banner']")
    for elem in slider_elements:
        style = elem.get_attribute("style") or ""
        if style:
            matches = re.findall(r'url\s*\(\s*["\']?([^"\')\s]+)["\']?\s*\)', style, re.IGNORECASE)
            for match in matches:
                if not match.lower().startswith("data:"):
                    full_url = urljoin(page_url, match)
                    if is_image_url(full_url):
                        all_img_urls.add(full_url)
                        style_count += 1
    
    print(f"   🎨 Found {style_count} images in inline styles")

    # 3. External CSS files (with caching)
    css_count = 0
    new_css_files = 0
    cached_css_files = 0
    
    try:
        css_files = page.evaluate("""
            () => {
                return Array.from(document.styleSheets)
                    .map(sheet => {
                        try {
                            return sheet.href;
                        } catch(e) {
                            return null;
                        }
                    })
                    .filter(href => href && href.includes('.css'));
            }
        """)
        
        print(f"   📄 Found {len(css_files)} CSS files to check")
        
        for css_url in css_files:
            # Check if we've already analyzed this CSS file
            if css_url in css_cache:
                # Use cached results
                cached_images = css_cache[css_url]
                for img_url in cached_images:
                    all_img_urls.add(img_url)
                    css_count += 1
                cached_css_files += 1
                continue
            
            # New CSS file - analyze it
            css_images = []  # Store images found in this CSS file
            try:
                # Add random delay and better headers for CSS requests
                time.sleep(random.uniform(0.05, 0.15))  # Reduced delay
                
                session = requests.Session()
                session.headers.update({
                    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                    'Accept': 'text/css,*/*;q=0.1',
                    'Accept-Language': 'en-US,en;q=0.9',
                    'Accept-Encoding': 'gzip, deflate, br',
                    'Cache-Control': 'no-cache',
                    'Referer': page_url,
                    'Connection': 'keep-alive'
                })
                
                response = session.get(css_url, timeout=8, allow_redirects=True)  # Reduced timeout
                if response.status_code == 200:
                    css_text = response.text
                    
                    # Find all url() references in CSS
                    matches = re.findall(r'url\s*\(\s*["\']?([^"\')\s]+)["\']?\s*\)', css_text, re.IGNORECASE)
                    for match in matches:
                        if not match.lower().startswith("data:"):  # Skip base64 images
                            # Resolve relative to CSS file location
                            full_url = urljoin(css_url, match)
                            if is_image_url(full_url):
                                all_img_urls.add(full_url)
                                css_images.append(full_url)
                                css_count += 1
                    
                    # Cache the results
                    css_cache[css_url] = css_images
                    new_css_files += 1
                    
                else:
                    print(f"   ⚠ CSS returned status {response.status_code}: {css_url}")
                    css_cache[css_url] = []  # Cache empty result
                    
            except requests.exceptions.RequestException as e:
                print(f"   ⚠ CSS fetch failed: {css_url} ({type(e).__name__})")
                css_cache[css_url] = []  # Cache empty result to avoid retrying
            except Exception as e:
                print(f"   ⚠ CSS processing error: {css_url} ({e})")
                css_cache[css_url] = []  # Cache empty result
    
    except Exception as e:
        print(f"   ⚠ Could not analyze CSS files: {e}")
    
    if new_css_files > 0 or cached_css_files > 0:
        print(f"   🖼 Found {css_count} images in CSS files (📁 {new_css_files} new, ⚡ {cached_css_files} cached)")
    else:
        print(f"   🖼 Found {css_count} images in CSS files")

            # Check for CSS background images set via JavaScript/computed styles (reduced scope)
        js_bg_count = 0
        try:
            # Only check slider elements for better performance
            dynamic_elements = page.query_selector_all("""
                .swiper-slide, .carousel-item, .slide, 
                [class*='slider'], [class*='banner'], [class*='hero']
            """)
            
            for elem in dynamic_elements[:20]:  # Reduced from 100 to 20
                try:
                    bg_image = page.evaluate("(element) => window.getComputedStyle(element).backgroundImage", elem)
                    if bg_image and bg_image != "none":
                        matches = re.findall(r'url\s*\(\s*["\']?([^"\')\s]+)["\']?\s*\)', bg_image)
                        for match in matches:
                            if not match.lower().startswith("data:"):
                                full_url = urljoin(page_url, match)
                                if is_image_url(full_url):
                                    all_img_urls.add(full_url)
                                    js_bg_count += 1
                    
                    # Also check data-bg attributes (common in sliders)
                    data_bg = elem.get_attribute("data-bg")
                    if data_bg:
                        full_url = urljoin(page_url, data_bg)
                        if is_image_url(full_url):
                            all_img_urls.add(full_url)
                            js_bg_count += 1
                            
                except:
                    continue  # Skip elements that can't be processed
        except Exception as e:
            print(f"   ⚠ Could not check computed background images: {e}")
        
        if js_bg_count > 0:
            print(f"   🔧 Found {js_bg_count} images in computed/dynamic styles")


def main():
    with sync_playwright() as p:
        browser = p.chromium.launch(
            headless=False,  # Show browser window
            slow_mo=300,     # Slow down actions for visibility (reduced from 500)
            args=[
                '--disable-blink-features=AutomationControlled',
                '--disable-dev-shm-usage',
                '--disable-extensions',
                '--no-sandbox',
                '--disable-web-security',
                '--disable-gpu',
                '--disable-setuid-sandbox',
                '--disable-background-timer-throttling',
                '--disable-backgrounding-occluded-windows',
                '--disable-renderer-backgrounding',
                '--disable-features=TranslateUI,VizDisplayCompositor',
                '--user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
            ]
        )
        
        # Create new context with better stealth settings
        context = browser.new_context(
            viewport={'width': 1920, 'height': 1080},
            user_agent='Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            extra_http_headers={
                'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
                'Accept-Language': 'en-US,en;q=0.9',
                'Accept-Encoding': 'gzip, deflate, br',
                'DNT': '1',
                'Connection': 'keep-alive',
                'Upgrade-Insecure-Requests': '1',
                'Sec-Fetch-Dest': 'document',
                'Sec-Fetch-Mode': 'navigate',
                'Sec-Fetch-Site': 'none',
                'Cache-Control': 'max-age=0'
            }
        )
        
        page = context.new_page()
        
        # Enhanced anti-detection
        page.add_init_script("""
            // Remove webdriver traces
            Object.defineProperty(navigator, 'webdriver', {get: () => undefined});
            delete window.cdc_adoQpoasnfa76pfcZLmcfl_Array;
            delete window.cdc_adoQpoasnfa76pfcZLmcfl_Promise;
            delete window.cdc_adoQpoasnfa76pfcZLmcfl_Symbol;
            
            // Override permissions
            const originalQuery = window.navigator.permissions.query;
            window.navigator.permissions.query = (parameters) => (
                parameters.name === 'notifications' ?
                    Promise.resolve({ state: Notification.permission }) :
                    originalQuery(parameters)
            );
            
            // Override plugins
            Object.defineProperty(navigator, 'plugins', {
                get: () => [1, 2, 3, 4, 5]
            });
            
            // Override languages
            Object.defineProperty(navigator, 'languages', {
                get: () => ['en-US', 'en']
            });
        """)
        
        page.set_default_timeout(90000)  # Increased timeout
        
        total_pages = len(PAGES)
        retry_pages = []
        
        for i, path in enumerate(PAGES, 1):
            url = urljoin(BASE_URL, path)
            success = False
            
            for attempt in range(3):  # Try each page up to 3 times
                try:
                    if attempt > 0:
                        print(f"   🔄 Retry attempt {attempt + 1}/3")
                        # Longer wait between retries
                        time.sleep(random.uniform(3, 6))
                    
                    print(f"\n🌐 [{i}/{total_pages}] Visiting: {url}")
                    
                    # Navigate with multiple wait strategies
                    response = page.goto(url, wait_until="domcontentloaded", timeout=90000)
                    
                    if response and response.status >= 400:
                        print(f"   ⚠ HTTP {response.status} - trying different approach")
                        continue
                    
                    # Wait for network to be idle
                    try:
                        page.wait_for_load_state("networkidle", timeout=15000)
                    except:
                        print(f"   ⏳ Network not idle, continuing anyway...")
                    
                    # More human-like behavior with random variations
                    page.mouse.move(
                        random.randint(200, 800), 
                        random.randint(200, 600)
                    )
                    
                    # Random scrolling pattern
                    scroll_positions = [300, 600, 900, 600, 300, 0]
                    for pos in scroll_positions:
                        page.evaluate(f"window.scrollTo(0, {pos})")
                        page.wait_for_timeout(random.randint(200, 500))
                    
                    # Extra wait for dynamic content
                    page.wait_for_timeout(3000)
                    
                    # Scrape images from this page
                    scrape_page_images(page, url)
                    
                    print(f"   ✅ Total unique images so far: {len(all_img_urls)}")
                    success = True
                    break
                    
                except Exception as e:
                    print(f"   ❌ Attempt {attempt + 1} failed: {str(e)[:100]}...")
                    if attempt < 2:  # Don't wait after last attempt
                        time.sleep(random.uniform(2, 4))
            
            if not success:
                retry_pages.append((i, path, url))
                print(f"   💀 All attempts failed for {url}")
            
            # Variable wait between pages (2-4 seconds)
            if i < total_pages:
                wait_time = random.uniform(2, 4)
                print(f"   ⏳ Waiting {wait_time:.1f} seconds before next page...")
                time.sleep(wait_time)
        
        # Retry failed pages once more
        if retry_pages:
            print(f"\n🔄 Retrying {len(retry_pages)} failed pages...")
            for i, path, url in retry_pages:
                try:
                    print(f"\n🔄 Final retry [{i}/{total_pages}]: {url}")
                    time.sleep(random.uniform(3, 5))
                    
                    response = page.goto(url, wait_until="domcontentloaded", timeout=60000)
                    page.wait_for_timeout(3000)
                    scrape_page_images(page, url)
                    print(f"   ✅ Retry successful! Total images: {len(all_img_urls)}")
                    
                except Exception as e:
                    print(f"   ❌ Final retry failed: {str(e)[:100]}...")

        browser.close()

    # Save all collected URLs to a text file
    output_file = "image_files_url.txt"
    with open(output_file, "w", encoding="utf-8") as f:
        f.write(f"# Image URLs scraped from {BASE_URL}\n")
        f.write(f"# Total images found: {len(all_img_urls)}\n")
        f.write(f"# Scraped on: {time.strftime('%Y-%m-%d %H:%M:%S')}\n\n")
        
        for img_url in sorted(all_img_urls):
            f.write(img_url + "\n")

    print(f"\n🎉 COMPLETED!")
    print(f"📊 Total unique image URLs found: {len(all_img_urls)}")
    print(f"🗂️ CSS cache stats: {len(css_cache)} files analyzed total")
    print(f"💾 All URLs saved to: {output_file}")
    
    # Show some sample URLs
    if all_img_urls:
        print(f"\n📋 Sample URLs found:")
        for i, url in enumerate(sorted(all_img_urls)[:5]):
            print(f"   {i+1}. {url}")
        if len(all_img_urls) > 5:
            print(f"   ... and {len(all_img_urls) - 5} more")


if __name__ == "__main__":
    main()