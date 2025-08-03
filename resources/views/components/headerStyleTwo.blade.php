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
                                <x-menuList />
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