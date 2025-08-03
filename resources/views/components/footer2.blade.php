<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-1.png') }}" alt="">
    </div>
    <div class="site-footer__shape-2">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-2.png') }}" alt="">
    </div>
    <div class="site-footer__shape-3"></div>
    <div class="site-footer__shape-4"></div>
    <div class="site-footer__shape-5"></div>
    <div class="site-footer__top">
        <div class="site-footer__top-bg"
            style="background-image: url({{ asset('assets/images/backgrounds/site-footer-top-bg.jpg') }});"></div>
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/footer-logo.png') }}"
                            alt=""></a>
                </div>
                <div class="site-footer__top-text-box">
                    <p class="site-footer__top-text">We are the best creative agency <br>
                        worldwide to brands grow</p>
                </div>
                <div class="site-footer__btn-box">
                    <a href="{{ route('contact') }}" class="site-footer__btn">Get In Touch<span
                            class="icon-right-arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__main-content-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__contact">
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <div class="icon-box">
                                    <span class="icon-pin"></span>
                                    <p>Location</p>
                                </div>
                                <div class="text">
                                    <p>123 Main Street, Apt 4BNew <br>
                                        York, NY 10001USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-clock"></span>
                                    <p>Working Time</p>
                                </div>
                                <div class="text">
                                    <p>Sunday - Monday (Fri - Closed) <br>
                                        10:00 AM - 5:00 PM</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-contact"></span>
                                    <p>Contact Us</p>
                                </div>
                                <div class="text">
                                    <p>
                                        <a href="mailto:support@domain.com" class="mail-box">support@domain.com</a>
                                        <a href="tel:12004567890" class="call-number">+12 (00) 456 7890</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__quick-links">
                        <h4 class="footer-widget__title">Pages</h4>
                        <ul class="footer-widget__quick-links-list list-unstyled">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ route('blog') }}">Blogs</a></li>
                            <li><a href="{{ route('contact') }}">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__support">
                        <h4 class="footer-widget__title">Support</h4>
                        <ul class="footer-widget__quick-links-list list-unstyled">
                            <li><a href="{{ route('about') }}">Terms & Condition</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('404') }}">404 Page</a></li>
                            <li><a href="{{ route('contact') }}">Live Chat</a></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__newsletter">
                        <h4 class="footer-widget__title">Newsletter</h4>
                        <div class="footer-widget__newsletter-box">
                            <p class="footer-widget__newsletter-text">Get the latest SEO tips and software
                                insights straight to your inbox.</p>
                            <form class="site-footer__newsletter-form contact-form-validated" action="assets/inc/sendemail.php" method="post" novalidate="novalidate">
                                <div class="site-footer__newsletter-input">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <button type="submit" class="site-footer__newsletter-btn"> <span
                                        class="icon-right-arrow"></span>
                                </button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper1" id="skipper" checked="">
                                    <label for="skipper"><span></span>by Subscribing. Your Accept Privacy
                                        policy</label>
                                </div>
                                <div class="result mt-2"></div>
                            </form>
                            <div class="site-footer__social-box">
                                <h4 class="site-footer__social-title">Follow Us:</h4>
                                <div class="site-footer__social-box-inner">
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
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text">
                                ⓒ Copyright 2025 <a href="#">LyraLogics</a> All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->
