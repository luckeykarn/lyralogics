<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <p class="main-menu-two__top-text">LyraLogics That Ensures Your IT Runs Seamlessly, Anytime and Every
                Time</p>
            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                        <p>4721 Rosebud Drive GA, Snellville , 30039</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-search-mail"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:info@lyralogics.com">info@lyralogics.com</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:6785236569">+1 (678) 523 6569</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu-two__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <x-menuList />
                </div>
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-box">
                        <a href="#"
                            class="main-menu-two__search searcher-toggler-box icon-search-interface-symbol"></a>
                    </div>
                    <div class="main-menu-two__btn-box">
                        <a href="{{ route('contact') }}" class="thm-btn">Get in Touch<span
                                class="icon-right-arrow"></span></a>
                    </div>
                    <div class="main-menu-two__nav-sidebar-icon">
                        <a class="navSidebar-button" href="#">
                            <span class="icon-dots-menu-one"></span>
                            <span class="icon-dots-menu-two"></span>
                            <span class="icon-dots-menu-three"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
