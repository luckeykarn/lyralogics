
        <!-- Newsletter Two Start -->
        <section class="newsletter-two">
            <div class="newsletter-two__shape-1">
                <img src="{{ asset('assets/images/shapes/newsletter-two-shape-1.png') }}" alt="">
            </div>
            <div class="newsletter-two__shape-2 float-bob-x">
                <img src="{{ asset('assets/images/shapes/newsletter-two-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="newsletter-two__inner">
                    <div class="newsletter-two__left">
                        <h2 class="newsletter-two__title">Subcribe to Our Newsletter</h2>
                        <p class="newsletter-two__text">Get the latest SEO tips and software insights straight to your
                            inbox.</p>
                    </div>
                    <div class="newsletter-two__right">
                        <form class="contact-form-validated newsletter-two__form" action="assets/inc/sendemail.php" method="post" novalidate="novalidate">
                            <div class="newsletter-two__input">
                                <input type="email" name="email" placeholder="Enter email address">
                            </div>
                            <button type="submit" class="thm-btn">Subscribe Now <span class="icon-right-arrow"></span>
                            </button>
                            <div class="checked-box">
                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                <label for="skipper"><span></span>by Subscribing. Your Accept Privacy
                                    policy</label>
                            </div>
                            <div class="result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Two End -->



        <!--Site Footer Two Start-->
        <footer class="site-footer-two">
            <div class="site-footer-two__shape-1"></div>
            <div class="site-footer-two__shape-2"></div>
            <div class="site-footer-two__shape-3"></div>
            <div class="site-footer-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="site-footer-two__about">
                                <div class="site-footer-two__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/footer-logo.png') }}" alt=""></a>
                                </div>
                                <ul class="list-unstyled site-footer-two__contact-list">
                                    <li>
                                        <div class="site-footer-two__contact-icon">
                                            <span class="icon-contact"></span>
                                        </div>
                                        <div class="site-footer-two__contact-content">
                                            <h5 class="site-footer-two__contact-title">Contact Info</h5>
                                            <p class="site-footer-two__contact-info">
                                                <a href="mailto:info@domain.com"
                                                    class="site-footer-two__contact-mail">info@domain.com</a>
                                                <a href="tel:9900567780" class="site-footer-two__contact-phone">+99 (00)
                                                    567 780</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="site-footer-two__contact-icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="site-footer-two__contact-content">
                                            <h5 class="site-footer-two__contact-title">Location</h5>
                                            <p class="site-footer-two__contact-info">
                                                123 Main Street, Apt 4BNew <br> York, NY 10001USA
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget-two__quick-links">
                                <h4 class="footer-widget-two__title">Pages</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="{{ route('index') }}"><span class="icon-right-arrow-2"></span>Home</a></li>
                                    <li><a href="{{ route('about') }}"><span class="icon-right-arrow-2"></span>About Us</a></li>
                                    <li><a href="{{ route('pricing') }}"><span class="icon-right-arrow-2"></span>Pricing</a></li>
                                    <li><a href="{{ route('portfolio') }}"><span class="icon-right-arrow-2"></span>Portfolio</a>
                                    </li>
                                    <li><a href="{{ route('blog') }}"><span class="icon-right-arrow-2"></span>Blogs</a></li>
                                    <li><a href="{{ route('contact') }}"><span class="icon-right-arrow-2"></span>Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-two__support">
                                <h4 class="footer-widget-two__title">Support</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="{{ route('about') }}"><span class="icon-right-arrow-2"></span>Terms &
                                            Condition</a></li>
                                    <li><a href="{{ route('faq') }}"><span class="icon-right-arrow-2"></span>FAQs</a></li>
                                    <li><a href="{{ route('contact') }}"><span class="icon-right-arrow-2"></span>Contact Us</a>
                                    </li>
                                    <li><a href="{{ route('404') }}"><span class="icon-right-arrow-2"></span>404 Page</a></li>
                                    <li><a href="{{ route('contact') }}"><span class="icon-right-arrow-2"></span>Live Chat</a>
                                    </li>
                                    <li><a href="{{ route('services') }}"><span class="icon-right-arrow-2"></span>Our Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget-two__services">
                                <h4 class="footer-widget-two__title">Our Services</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="{{ route('services') }}"><span class="icon-right-arrow-2"></span>UI/UX Design</a>
                                    </li>
                                    <li><a href="{{ route('about') }}"><span class="icon-right-arrow-2"></span>Website Design</a>
                                    </li>
                                    <li><a href="{{ route('pricing') }}"><span class="icon-right-arrow-2"></span>Web
                                            Development</a></li>
                                    <li><a href="{{ route('about') }}"><span class="icon-right-arrow-2"></span>Product Design</a>
                                    </li>
                                    <li><a href="{{ route('blog') }}"><span class="icon-right-arrow-2"></span>Online Branding</a>
                                    </li>
                                    <li><a href="{{ route('contact') }}"><span class="icon-right-arrow-2"></span>Personal
                                            Branding</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <div class="site-footer-two__copyright">
                                    <p class="site-footer-two__copyright-text">
                                        ⓒ Copyright {{ date('Y') }} <a href="#">LyraLogics</a> All rights reserved
                                    </p>
                                </div>
                                <div class="site-footer-two__social-box">
                                    <h4 class="site-footer-two__social-title">Follow Us:</h4>
                                    <div class="site-footer-two__social-box-inner">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer Two End-->
    </div><!-- /.page-wrapper -->
