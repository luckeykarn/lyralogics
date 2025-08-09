@extends('layouts.layout4')
@section('title', 'Services Carousel || LyraLogics || IT Solutions & Technology  ')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Services Carousel" subtitle="Services Carousel" />


        <!--Page Header End-->

        <!--Services Carosuel Page Start -->
        <section class="services-carousel-page">
            <div class="container">
                <div class="services-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-technical-support"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('advanced-technology') }}">All Kind Of <br> IT
                                        Services</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('advanced-technology') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-idea"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('data-protection-privacy') }}">Cybersecurity
                                        <br> Solutions</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('data-protection-privacy') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-strategy"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('threat-detection-prevention') }}">Software
                                        Development <br> &
                                        Integration</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('threat-detection-prevention') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-earning"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('cloud-managed-services') }}">Cloud Solutions
                                        <br> Provider</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('cloud-managed-services') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-transparency"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('backup-recovery') }}">Data Analytics <br>
                                        Consulting</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('backup-recovery') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-earning"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('cloud-managed-services') }}">Cloud Solutions
                                        <br> Provider</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('cloud-managed-services') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-transparency"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('backup-recovery') }}">Data Analytics <br>
                                        Consulting</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('backup-recovery') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="item">
                        <div class="services-three__single">
                            <div class="services-three__icon-and-title">
                                <div class="services-three__icon">
                                    <span class="icon-strategy"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('threat-detection-prevention') }}">Software
                                        Development <br> &
                                        Integration</a></h3>
                            </div>
                            <p class="services-three__text">Comprehensive IT management, including network
                                monitoring, data backup</p>
                            <ul class="list-unstyled services-three__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Web Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>App Development</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <div class="text">
                                        <p>Graphics Design</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('threat-detection-prevention') }}" class="services-three__btn">Read More <span
                                    class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                </div>
            </div>
        </section>
        <!--Services Carosuel End Start -->

        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection