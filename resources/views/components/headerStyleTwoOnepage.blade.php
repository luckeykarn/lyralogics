<header class="main-header">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <div class="main-menu__top-social">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-dribble"></span></a>

                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-pin"></i>
                                </div>
                                <div class="text">
                                    <p>1629 N. Dixie Avenue, Kentucky, 42701</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-search-mail"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:example@domain.com">example@domain.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:1212345678900">+12 (123) 456 78900</a></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled main-menu__top-menu">
                            <li><a href="{{ route('about') }}">Help</a></li>
                            <li><a href="{{ route('contact') }}">Support</a></li>
                            <li><a href="{{ route('faq') }}">Faqs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="dropdown megamenu scrollToLink">
                                        <a href="#home">Home </a>
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
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
                                                                                </a>
                                                                                <a href="{{ route('index-one-page') }}"
                                                                                    class="thm-btn home-showcase__buttons__item">
                                                                                    One Page
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
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
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
                                                                                </a>
                                                                                <a href="{{ route('index2-one-page') }}"
                                                                                    class="thm-btn home-showcase__buttons__item">
                                                                                    One Page
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
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
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
                                                                                </a>
                                                                                <a href="{{ route('index3-one-page') }}"
                                                                                    class="thm-btn home-showcase__buttons__item">
                                                                                    One Page
                                                                                    <span
                                                                                        class="icon-right-arrow"></span>
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
                                    <li class="scrollToLink">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#about">About</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#portfolio">Portfolio</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#contact">Contact</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#team">Team</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__search-box">
                                    <a href="#"
                                        class="main-menu__search searcher-toggler-box icon-search-interface-symbol"></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn">Get in Touch<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>