@extends('layouts.layout4')
@section('title', 'Portfolio || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Portfolio" subtitle="Portfolio" />


        <!--Page Header End-->

        <!-- Portfolio Page Start -->
        <section class="portfolio-page">
            <h2 class="portfolio-one__big-text">portfolio</h2>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">See Our Works</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">How We've
                        <span>Empowered Businesses with</span> <br> <span>Innovative</span> Tech Solutions</h2>
                </div>
                <div class="portfolio-one__bottom">
                    <div class="container">
                        <div class="row">
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>Web Development</span>
                                                <span>Branding</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Innovative
                                                    Digital
                                                    Solutions for a Smarter Future</a></h3>
                                            <p class="portfolio-one__text">Pioneering next-gen IT solutions that enhance
                                                efficiency and innovation.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Empowering
                                                    Businesses with Cutting-Edge Technology</a></h3>
                                            <p class="portfolio-one__text">Delivering smart, scalable, and future-proof
                                                tech
                                                solutions for growth.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Cyber Security</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a
                                                    href="{{ route('portfolio-details') }}">Transforming
                                                    Ideas
                                                    into Scalable IT Solutions</a></h3>
                                            <p class="portfolio-one__text">Turning complex challenges into streamlined,
                                                high-performance systems.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>Branding</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Driving
                                                    Digital
                                                    Excellence with Custom IT Services</a></h3>
                                            <p class="portfolio-one__text">Tailor-made IT solutions designed to optimize
                                                and
                                                elevate your business.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Seamless
                                                    Tech
                                                    Innovations for Business Growth</a></h3>
                                            <p class="portfolio-one__text">Bridging the gap between technology and
                                                success
                                                with
                                                seamless integration.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <!--Portfolio One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" alt="">
                                            <div class="portfolio-one__tag">
                                                <span>UI/UX Design</span>
                                                <span>Product Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-one__content">
                                        <div class="portfolio-one__title-box">
                                            <h3 class="portfolio-one__title"><a
                                                    href="{{ route('portfolio-details') }}">Future-Ready
                                                    IT
                                                    Solutions for Every Industry</a></h3>
                                            <p class="portfolio-one__text">Adaptive and robust IT services built to
                                                thrive
                                                in a
                                                dynamic landscape.</p>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" class="img-popup"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="portfolio-one__year">
                                            <span>2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio One Single End-->
                            <div class="blog-page__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="prev">
                                        <a href="#" aria-label="prev"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                    <li class="count active"><a href="#">01</a></li>
                                    <li class="count"><a href="#">02</a></li>
                                    <li class="count"><a href="#">...</a></li>
                                    <li class="count"><a href="#">10</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Page End -->

        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection