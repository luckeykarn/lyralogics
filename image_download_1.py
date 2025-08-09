import os
import re
import time
import random
import requests
from urllib.parse import urlparse, unquote
from pathlib import Path
import hashlib

# Configuration
INPUT_FILE = "image_files_url.txt"
DOWNLOAD_DIR = "downloaded_images"
MAX_RETRIES = 3
DELAY_RANGE = (0.5, 2.0)  # Random delay between downloads (seconds)
TIMEOUT = 30
CHUNK_SIZE = 8192

# User agents for rotation
USER_AGENTS = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
    "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/121.0",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:109.0) Gecko/20100101 Firefox/121.0"
]

def get_path_and_filename(url):
    """Extract folder path and filename from URL to mirror website structure."""
    parsed = urlparse(url)
    path = unquote(parsed.path)
    
    # Remove leading slash
    if path.startswith('/'):
        path = path[1:]
    
    # Split into directory and filename
    if '/' in path:
        directory, filename = os.path.split(path)
    else:
        directory = ''
        filename = path
    
    # If no filename or extension, generate one
    if not filename or '.' not in filename:
        url_hash = hashlib.md5(url.encode()).hexdigest()[:8]
        # Try to detect extension from URL
        if any(ext in url.lower() for ext in ['.jpg', '.jpeg']):
            filename = f"image_{url_hash}.jpg"
        elif '.png' in url.lower():
            filename = f"image_{url_hash}.png"
        elif '.gif' in url.lower():
            filename = f"image_{url_hash}.gif"
        elif '.svg' in url.lower():
            filename = f"image_{url_hash}.svg"
        elif '.webp' in url.lower():
            filename = f"image_{url_hash}.webp"
        else:
            filename = f"image_{url_hash}.jpg"  # Default
    
    # Clean filename and directory names
    filename = re.sub(r'[<>:"|?*]', '_', filename)  # Remove problematic chars but keep /\ for paths
    directory = re.sub(r'[<>:"|?*]', '_', directory)
    
    # Truncate filename if too long
    if len(filename) > 100:
        name, ext = os.path.splitext(filename)
        filename = name[:95] + ext
    
    return directory, filename

def get_random_headers():
    """Generate random HTTP headers."""
    return {
        'User-Agent': random.choice(USER_AGENTS),
        'Accept': 'image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
        'Accept-Language': 'en-US,en;q=0.9',
        'Accept-Encoding': 'gzip, deflate, br',
        'DNT': '1',
        'Connection': 'keep-alive',
        'Upgrade-Insecure-Requests': '1',
        'Sec-Fetch-Dest': 'image',
        'Sec-Fetch-Mode': 'no-cors',
        'Sec-Fetch-Site': 'cross-site',
        'Cache-Control': 'no-cache',
        'Pragma': 'no-cache'
    }

def download_image(url, download_path, session):
    """Download a single image with retry logic."""
    for attempt in range(MAX_RETRIES):
        try:
            # Random delay to appear human-like
            if attempt > 0:
                delay = random.uniform(2, 5)  # Longer delay for retries
                print(f"      ⏳ Retry {attempt + 1}/{MAX_RETRIES} after {delay:.1f}s delay...")
                time.sleep(delay)
            
            # Update headers for each attempt
            session.headers.update(get_random_headers())
            
            # Make request
            response = session.get(url, timeout=TIMEOUT, stream=True)
            response.raise_for_status()
            
            # Check if it's actually an image
            content_type = response.headers.get('content-type', '').lower()
            if not any(img_type in content_type for img_type in ['image/', 'application/octet-stream']):
                print(f"      ⚠ Not an image: {content_type}")
                return False
            
            # Download with progress
            total_size = int(response.headers.get('content-length', 0))
            downloaded = 0
            
            with open(download_path, 'wb') as f:
                for chunk in response.iter_content(chunk_size=CHUNK_SIZE):
                    if chunk:
                        f.write(chunk)
                        downloaded += len(chunk)
            
            # Verify download
            if os.path.getsize(download_path) > 0:
                size_kb = os.path.getsize(download_path) / 1024
                print(f"      ✅ Downloaded {size_kb:.1f}KB")
                return True
            else:
                print(f"      ❌ Empty file downloaded")
                os.remove(download_path)
                return False
                
        except requests.exceptions.RequestException as e:
            error_type = type(e).__name__
            print(f"      ❌ Attempt {attempt + 1} failed: {error_type}")
            if attempt == MAX_RETRIES - 1:
                print(f"      💀 All {MAX_RETRIES} attempts failed")
                return False
        except Exception as e:
            print(f"      ❌ Unexpected error: {str(e)[:50]}...")
            return False
    
    return False

def load_urls_from_file(filepath):
    """Load URLs from text file, ignoring comments and empty lines."""
    urls = []
    if not os.path.exists(filepath):
        print(f"❌ File not found: {filepath}")
        return urls
    
    with open(filepath, 'r', encoding='utf-8') as f:
        for line_num, line in enumerate(f, 1):
            line = line.strip()
            # Skip empty lines and comments
            if not line or line.startswith('#'):
                continue
            
            # Basic URL validation
            if line.startswith(('http://', 'https://')):
                urls.append(line)
            else:
                print(f"⚠ Line {line_num}: Invalid URL format: {line[:50]}...")
    
    return urls

def main():
    print("🚀 Starting Anti-Detection Image Downloader")
    print("=" * 50)
    
    # Load URLs from file
    print(f"📖 Loading URLs from: {INPUT_FILE}")
    urls = load_urls_from_file(INPUT_FILE)
    
    if not urls:
        print("❌ No valid URLs found in file!")
        return
    
    print(f"📊 Found {len(urls)} image URLs to download")
    
    # Create download directory
    os.makedirs(DOWNLOAD_DIR, exist_ok=True)
    print(f"📁 Download directory: {DOWNLOAD_DIR}")
    
    # Setup session with connection pooling
    session = requests.Session()
    
    # Statistics
    successful = 0
    failed = 0
    skipped = 0
    
    print(f"\n🎯 Starting downloads...")
    print("=" * 50)
    
    for i, url in enumerate(urls, 1):
        try:
            print(f"\n📥 [{i}/{len(urls)}] Downloading:")
            print(f"    🔗 {url}")
            
            # Get folder structure and filename from URL
            directory, filename = get_path_and_filename(url)
            
            # Create full path maintaining directory structure
            if directory:
                full_dir = os.path.join(DOWNLOAD_DIR, directory)
                os.makedirs(full_dir, exist_ok=True)
                download_path = os.path.join(full_dir, filename)
                relative_path = os.path.join(directory, filename)
            else:
                download_path = os.path.join(DOWNLOAD_DIR, filename)
                relative_path = filename
            
            print(f"    📁 Path: {relative_path}")
            
            # Skip if already exists
            if os.path.exists(download_path):
                size_kb = os.path.getsize(download_path) / 1024
                print(f"    ⏭ Already exists ({size_kb:.1f}KB)")
                skipped += 1
                continue
            
            print(f"    💾 Saving to: {relative_path}")
            
            # Download the image
            if download_image(url, download_path, session):
                successful += 1
            else:
                failed += 1
            
            # Human-like delay between downloads (except for last item)
            if i < len(urls):
                delay = random.uniform(*DELAY_RANGE)
                print(f"    ⏳ Waiting {delay:.1f}s before next download...")
                time.sleep(delay)
                
        except KeyboardInterrupt:
            print(f"\n\n⏹ Download interrupted by user")
            break
        except Exception as e:
            print(f"    💥 Unexpected error: {str(e)[:100]}...")
            failed += 1
    
    # Final statistics
    print(f"\n" + "=" * 50)
    print(f"🎉 DOWNLOAD COMPLETED!")
    print(f"📊 Statistics:")
    print(f"   ✅ Successful: {successful}")
    print(f"   ⏭ Skipped (already exist): {skipped}")
    print(f"   ❌ Failed: {failed}")
    print(f"   📁 Total files in folder: {len(os.listdir(DOWNLOAD_DIR))}")
    
    # Show download directory info
    total_size = 0
    total_files = 0
    
    # Count files recursively in all subdirectories
    for root, dirs, files in os.walk(DOWNLOAD_DIR):
        for file in files:
            file_path = os.path.join(root, file)
            if os.path.isfile(file_path):
                total_size += os.path.getsize(file_path)
                total_files += 1
    
    print(f"   📁 Total files downloaded: {total_files}")
    print(f"   💾 Total size: {total_size / (1024*1024):.1f} MB")
    print(f"\n📂 Images saved with folder structure in: {os.path.abspath(DOWNLOAD_DIR)}")
    
    # Show folder structure sample
    print(f"\n🌳 Folder structure created:")
    structure_count = 0
    for root, dirs, files in os.walk(DOWNLOAD_DIR):
        if structure_count >= 10:  # Limit display
            print(f"   ... and more folders")
            break
        level = root.replace(DOWNLOAD_DIR, '').count(os.sep)
        indent = '  ' * level
        folder_name = os.path.basename(root) or DOWNLOAD_DIR
        print(f"   {indent}📁 {folder_name}")
        subindent = '  ' * (level + 1)
        for file in files[:3]:  # Show max 3 files per folder
            print(f"   {subindent}📄 {file}")
        if len(files) > 3:
            print(f"   {subindent}... and {len(files) - 3} more files")
        structure_count += 1

if __name__ == "__main__":
    main()