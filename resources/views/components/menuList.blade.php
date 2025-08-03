<ul class="main-menu__list">
    <li class="dropdown megamenu @if (request()->is(['index', 'index-one-page', 'index2', 'index2-one-page', 'index3', 'index3-one-page'])) current @endif">
        <a href="#">Home </a>
        <ul>
            <li>

                <section class="home-showcase">
                    <div class="container">
                        <div class="home-showcase__inner">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="home-showcase__item">
                                        <div class="home-showcase__image">
                                            <img src="{{ asset('assets/images/home-showcase/home-showcase-1-1.jpg') }}"
                                                alt="">
                                            <div class="home-showcase__buttons">
                                                <a href="{{ route('index') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    Multi Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                                <a href="{{ route('index-one-page') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    One Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                            <!-- /.home-showcase__buttons -->
                                        </div><!-- /.home-showcase__image -->
                                        <h3 class="home-showcase__title">Home
                                            Page
                                            01</h3>
                                        <!-- /.home-showcase__title -->
                                    </div><!-- /.home-showcase__item -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-4">
                                    <div class="home-showcase__item">
                                        <div class="home-showcase__image">
                                            <img src="{{ asset('assets/images/home-showcase/home-showcase-1-2.jpg') }}"
                                                alt="">
                                            <div class="home-showcase__buttons">
                                                <a href="{{ route('index2') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    Multi Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                                <a href="{{ route('index2-one-page') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    One Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                            <!-- /.home-showcase__buttons -->
                                        </div><!-- /.home-showcase__image -->
                                        <h3 class="home-showcase__title">Home
                                            Page
                                            02
                                        </h3><!-- /.home-showcase__title -->
                                    </div><!-- /.home-showcase__item -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-4">
                                    <div class="home-showcase__item">
                                        <div class="home-showcase__image">
                                            <img src="{{ asset('assets/images/home-showcase/home-showcase-1-3.jpg') }}"
                                                alt="">
                                            <div class="home-showcase__buttons">
                                                <a href="{{ route('index3') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    Multi Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                                <a href="{{ route('index3-one-page') }}"
                                                    class="thm-btn home-showcase__buttons__item">
                                                    One Page
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                            <!-- /.home-showcase__buttons -->
                                        </div><!-- /.home-showcase__image -->
                                        <h3 class="home-showcase__title">Home
                                            Page
                                            03
                                        </h3><!-- /.home-showcase__title -->
                                    </div><!-- /.home-showcase__item -->
                                </div><!-- /.col-lg-3 -->


                            </div><!-- /.row -->
                        </div><!-- /.home-showcase__inner -->

                    </div><!-- /.container -->
                </section>

            </li>
        </ul>
    </li>
    <li @if (request()->is(['about'])) class="current" @endif>
        <a href="{{ route('about') }}">About</a>
    </li>
    <li class="dropdown @if (request()->is([
            'team',
            'team-carousel',
            'team-details',
            'portfolio',
            'portfolio-details',
            'testimonials',
            'testimonials-carousel',
            'pricing',
            'gallery',
            'faq',
            '404',
            'coming-soon',
        ])) current @endif">
        <a href="#">Pages</a>
        <ul class="shadow-box">
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('team-carousel') }}">Team Carousel</a></li>
            <li><a href="{{ route('team-details') }}">Team Details</a></li>
            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
            <li><a href="{{ route('portfolio-details') }}">Portfolio Details</a></li>
            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('testimonials-carousel') }}">Testimonial Carousel</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('faq') }}">FAQs</a></li>
            <li><a href="{{ route('404') }}">404 Error</a></li>
            <li><a href="{{ route('coming-soon') }}">Coming Soon</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is([
            'services',
            'services-carousel',
            'threat-detection-prevention',
            'endpoint-device-security',
            'data-protection-privacy',
            'backup-recovery',
            'advanced-technology',
            'cloud-managed-services',
        ])) current @endif">
        <a href="#">Services</a>
        <ul class="shadow-box">
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('services-carousel') }}">Services Carousel</a></li>
            <li><a href="{{ route('threat-detection-prevention') }}">Threat Detection</a></li>
            <li><a href="{{ route('endpoint-device-security') }}">Device Security</a></li>
            <li><a href="{{ route('data-protection-privacy') }}">Data Protection</a></li>
            <li><a href="{{ route('backup-recovery') }}">Backup & Recovery</a></li>
            <li><a href="{{ route('advanced-technology') }}">Advanced Technology</a></li>
            <li><a href="{{ route('cloud-managed-services') }}">Cloud managed services</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is(['products', 'product-details', 'cart', 'checkout', 'wishlist', 'sign-up', 'login'])) current @endif">
        <a href="#">Shop</a>
        <ul class="shadow-box">
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('product-details') }}">Product Details</a></li>
            <li><a href="{{ route('cart') }}">Cart</a></li>
            <li><a href="{{ route('checkout') }}">Checkout</a></li>
            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
            <li><a href="{{ route('sign-up') }}">Sign Up</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </li>
    <li class="dropdown @if (request()->is(['blog', 'blog-carousel', 'blog-list', 'blog-list-2', 'blog-details'])) current @endif">
        <a href="#">Blog</a>
        <ul class="shadow-box">
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('blog-carousel') }}">Blog Carousel</a></li>
            <li><a href="{{ route('blog-list') }}">Blog List</a></li>
            <li><a href="{{ route('blog-list-2') }}">Blog List Two</a></li>
            <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
        </ul>
    </li>
    <li @if (request()->is(['contact'])) class="current" @endif>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
