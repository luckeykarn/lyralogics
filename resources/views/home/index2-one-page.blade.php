@extends('layouts.layout2onepage')
@section('title', 'Home Two || LyraLogics || IT Solutions & Technology Laravel Template')
@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->
    <!--Main Slider Start-->
    <section class="main-slider" id="home">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">IT Solutions That Work for You</p>
                                    </div>
                                    <h2 class="main-slider__title">Expert <span>IT Solutions</span> <br> <span>to
                                            Elevate</span> Your <br> Enterprise
                                    </h2>
                                    <p class="main-slider__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span class="odometer"
                                                            data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">IT Solutions That Work for You</p>
                                    </div>
                                    <h2 class="main-slider__title">Expert <span>IT Solutions</span> <br> <span>to
                                            Elevate</span> Your <br> Enterprise
                                    </h2>
                                    <p class="main-slider__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span
                                                            class="odometer" data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">IT Solutions That Work for You</p>
                                    </div>
                                    <h2 class="main-slider__title">Expert <span>IT Solutions</span> <br> <span>to
                                            Elevate</span> Your <br> Enterprise
                                    </h2>
                                    <p class="main-slider__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span
                                                            class="odometer" data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <!-- If we need navigation buttons -->

        </div>
    </section>
    <!--Main Slider End-->


    <!--Services One Start -->
    <section class="servces-one" id="services">
        <div class="servces-one__shape-2"></div>
        <div class="servces-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/services-one-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="servces-one__top">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="servces-one__top-left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Our Services</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Comprehensive, Reliable
                                    <br>Services
                                    <span>Crafted to Exceed</span> Your Expectations
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="servces-one__top-right">
                            <p class="servces-one__top-text">From personalized solutions to expert execution, we
                                prioritize quality, reliability, and customer satisfaction in everything we do. Let
                                us be your trusted partner in achieving success.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="servces-one__bottom">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="servces-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="servces-one__img">
                                <img src="{{ asset('assets/images/services/servces-one-img-1.png') }}" alt="">
                            </div>
                            <div class="servces-one__img-2">
                                <img src="{{ asset('assets/images/services/servces-one-img-2.png') }}" alt="">
                            </div>
                            <div class="servces-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-one-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="servces-one__bottom-right">
                            <ul class="services-one__services-list list-unstyled">
                                <li>
                                    <div class="services-one__services-single">
                                        <div class="services-one__count-and-content">
                                            <div class="services-one__count"></div>
                                            <div class="services-one__content">
                                                <h3 class="services-one__title"><a
                                                        href="{{ route('threat-detection-prevention') }}">Provide All Kind
                                                        Of
                                                        IT
                                                        Services</a></h3>
                                                <p class="services-one__text">Comprehensive IT management, including
                                                    network<br> monitoring, data backup, </p>
                                            </div>
                                        </div>
                                        <div class="services-one__arrow">
                                            <a href="{{ route('threat-detection-prevention') }}"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="services-one__hover-img">
                                        <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="Image">
                                    </div>
                                </li>
                                <li>
                                    <div class="services-one__services-single">
                                        <div class="services-one__count-and-content">
                                            <div class="services-one__count"></div>
                                            <div class="services-one__content">
                                                <h3 class="services-one__title"><a
                                                        href="{{ route('advanced-technology') }}">Cybersecurity
                                                        Solutions</a>
                                                </h3>
                                                <p class="services-one__text">Scalable cloud solutions, including
                                                    migration,<br> storage, and management, enabling secure data<br>
                                                    access </p>
                                            </div>
                                        </div>
                                        <div class="services-one__arrow">
                                            <a href="{{ route('advanced-technology') }}"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="services-one__hover-img">
                                        <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="Image">
                                    </div>
                                </li>
                                <li>
                                    <div class="services-one__services-single">
                                        <div class="services-one__count-and-content">
                                            <div class="services-one__count"></div>
                                            <div class="services-one__content">
                                                <h3 class="services-one__title"><a
                                                        href="{{ route('data-protection-privacy') }}">Cybersecurity
                                                        Solutions</a></h3>
                                                <p class="services-one__text">Comprehensive IT management, including
                                                    network<br> monitoring, data backup, </p>
                                            </div>
                                        </div>
                                        <div class="services-one__arrow">
                                            <a href="{{ route('data-protection-privacy') }}"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="services-one__hover-img">
                                        <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="Image">
                                    </div>
                                </li>
                                <li>
                                    <div class="services-one__services-single">
                                        <div class="services-one__count-and-content">
                                            <div class="services-one__count"></div>
                                            <div class="services-one__content">
                                                <h3 class="services-one__title"><a
                                                        href="{{ route('backup-recovery') }}">Software Development &
                                                        Integration</a></h3>
                                                <p class="services-one__text">Custom software development tailored
                                                    to your<br> business needs, along with seamless integration </p>
                                            </div>
                                        </div>
                                        <div class="services-one__arrow">
                                            <a href="{{ route('backup-recovery') }}"><span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="services-one__hover-img">
                                        <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="Image">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services One End -->

    <!-- Sliding Text Start -->
    <section class="sliding-text">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Front end Development" class="sliding-text__title">Front end Development</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="UI/UX Design" class="sliding-text__title">UI/UX Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Product Design" class="sliding-text__title">Product Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Digital Marketing" class="sliding-text__title">Digital Marketing</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Website Design" class="sliding-text__title">Website Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="APP Development" class="sliding-text__title">APP Development</h2>
                    <span></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text End -->

    <!-- About One Start -->
    <section class="about-one" id="about">
        <div class="about-one__shape-1"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Boost Business
                                <span>with Our<br></span><span> Innovative IT
                                    Solutions</span> for<br> Success story
                            </h2>
                        </div>
                        <p class="about-one__text">Innovating and empowering businesses with tailored solutions for
                            success and growth. </p>
                        <ul class="about-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Shaping Tomorrow, Transforming Today</h3>
                                    <p>Empowering businesses to create meaningful change, driving innovation </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Innovating Today, Empowering Tomorrow</h3>
                                    <p>Partner with us to unlock new possibilities, drive progress, and shape a
                                        future filled with success</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__btn-and-call-box">
                            <div class="about-one__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">Get in Touch<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                            <div class="about-one__call-box">
                                <div class="icon">
                                    <span class="icon-customer-service-headset"></span>
                                </div>
                                <div class="content">
                                    <span>Call Any Time</span>
                                    <p><a href="tel:12345678900">(123) 4567 8900</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="about-one__right">
                        <div class="about-one__left-img-box">
                            <div class="about-one__left-img">
                                <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About One End -->

    <!-- Counter One Start -->
    <section class="counter-one">
        <div class="counter-one__wrap">
            <div class="counter-one__bg-shape float-bob-x"
                style="background-image: url({{ asset('assets/images/shapes/counter-one-bg-shape.png') }});"></div>
            <div class="counter-one__shape-1"></div>
            <div class="counter-one__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">The Numbers Speak</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Exploring Business Growth <span>In
                            IT</span><br><span> Consulting Solutions</span></h2>
                </div>
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="120">00</h3>
                                    <span> </span>
                                </div>
                                <p class="counter-one__text">award Winning</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-user"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="99">00</h3>
                                    <span>%</span>
                                </div>
                                <p class="counter-one__text">Satisfied client</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="10">00</h3>
                                    <span>M</span>
                                </div>
                                <p class="counter-one__text">worldwide reviews</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-laughing"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box">
                                    <h3 class="odometer" data-count="200">00</h3>
                                    <span> </span>
                                </div>
                                <p class="counter-one__text">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Counter One End -->

    <!-- Portfolio One Start -->
    <section class="portfolio-one" id="portfolio">
        <h2 class="portfolio-one__big-text">portfolio</h2>
        <div class="portfolio-one__shape-1">
            <img src="{{ asset('assets/images/shapes/portfolio-one-shape-1.png') }}" alt="">
        </div>
        <div class="portfolio-one__shape-2">
            <img src="{{ asset('assets/images/shapes/portfolio-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="portfolio-one__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">See Our Works</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">How We've
                        <span>Empowered</span><br><span>Businesses with Innovative</span><br>Tech Solutions
                    </h2>
                </div>
                <a href="{{ route('portfolio') }}" class="portfolio-one__round-text-box">
                    <div class="portfolio-one__round-text-box-outer">
                        <div class="portfolio-one__round-text-box-inner">
                            <div class="portfolio-one__curved-circle">
                                View All Project View All Project
                            </div>
                            <div class="portfolio-one__round-icon">
                                <img src="{{ asset('assets/images/icon/portfolio-one-round-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="portfolio-one__bottom">
            <div class="portfolio-one__carousel owl-carousel owl-theme">
                <!--Portfolio One Single Start-->
                <div class="item">
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
                <div class="item">
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
                                <p class="portfolio-one__text">Delivering smart, scalable, and future-proof tech
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
                <div class="item">
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
                                <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Transforming
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
                <div class="item">
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
                                <p class="portfolio-one__text">Tailor-made IT solutions designed to optimize and
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
                <div class="item">
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
                                <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Seamless Tech
                                        Innovations for Business Growth</a></h3>
                                <p class="portfolio-one__text">Bridging the gap between technology and success with
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
                <div class="item">
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
                                <h3 class="portfolio-one__title"><a href="{{ route('portfolio-details') }}">Future-Ready
                                        IT
                                        Solutions for Every Industry</a></h3>
                                <p class="portfolio-one__text">Adaptive and robust IT services built to thrive in a
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
            </div>
        </div>
    </section>
    <!-- Portfolio One End -->

    <!-- Process One Start -->
    <section class="process-one">
        <div class="process-one__shape-1">
            <img src="{{ asset('assets/images/shapes/process-one-shape-1.png') }}" alt="">
        </div>
        <div class="process-one__shape-2"></div>
        <div class="process-one__shape-3"></div>
        <div class="process-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/process-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="process-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Working Process</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">How We've
                                <span>Empowered</span><br><span>Businesses with Innovative</span><br>Tech Solutions
                            </h2>
                        </div>
                        <p class="process-one__text">From personalized solutions to expert<br> execution, we
                            prioritize
                            quality, reliability, and<br> customer satisfaction </p>
                        <div class="process-one__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn">Get in Touch<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="process-one__right">
                        <ul class="process-one__process-list list-unstyled">
                            <li>
                                <div class="process-one__process-count"></div>
                                <div class="process-one__process-content">
                                    <h3 class="process-one__process-title">Discovery & Strategy</h3>
                                    <p class="process-one__process-text">We analyze your business needs,<br>
                                        identify
                                        challenges, and craft a<br> strategic roadmap for the best IT<br> solutions.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="process-one__process-content">
                                    <h3 class="process-one__process-title">Development</h3>
                                    <p class="process-one__process-text">Our expert team designs, develops,<br> and
                                        integrates cutting-edge<br> technology tailored to your goals.</p>
                                </div>
                                <div class="process-one__process-count"></div>
                            </li>
                            <li>
                                <div class="process-one__process-count"></div>
                                <div class="process-one__process-content">
                                    <h3 class="process-one__process-title">Optimization & Support</h3>
                                    <p class="process-one__process-text">We ensure seamless performance with<br>
                                        continuous improvements,<br> maintenance, and dedicated support.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process One End -->

    <!-- Contact One Start -->
    <section class="contact-one" id="contact">
        <div class="contact-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/contact-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="contact-one__left-shape-1"></div>
                        <div class="contact-one__left-shape-2"></div>
                        <h3 class="contact-one__from-title">How Can We Help You?</h3>
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Full Name</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="Thomas Alison" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Email Address</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="thomas@domain.com"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Phone Number</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <input type="text" name="Phone" placeholder=" 12 (00) 123 4567 890"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Subject</h4>
                                    <div class="contact-one__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected>Thomas Alison
                                                </option>
                                                <option>Type Of Service 01</option>
                                                <option>Type Of Service 02</option>
                                                <option>Type Of Service 03</option>
                                                <option>Type Of Service 04</option>
                                                <option>Type Of Service 05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">Inquiry about </h4>
                                <div class="contact-one__input-box text-message-box">
                                    <div class="contact-one__input-icon">
                                        <span class="icon-edit"></span>
                                    </div>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn"><span>Submit
                                            Now</span><i class="icon-right-arrow"></i></button>
                                </div>
                            </div>
                            <div class="result mt-2"></div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Get In Touch</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Start the Conversation
                                <span>–</span><br><span>Reach Out Anytime</span>
                            </h2>
                        </div>
                        <p class="contact-one__text">We're here to listen! Whether you have questions,<br> feedback,
                            or
                            just want to say hello, feel free to reach out. </p>
                        <ul class="contact-one__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <h4>Location</h4>
                                    <p>1629 N. Dixie Avenue,
                                        <br> Kentucky, 42701
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                    <p><a href="mailto:support@domain.com">support@domain.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Contact</h4>
                                    <p>Tel: <a href="tel:1200456789000"> 12 (00) 456 7890 00</a></p>
                                    <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact One End -->

    <!-- Team One Start -->
    <section class="team-one" id="team">
        <div class="team-one__shape-1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">
        </div>
        <div class="team-one__shape-2"></div>
        <div class="team-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/team-one-shape-3.png') }}" alt="">
        </div>
        <div class="team-one__shape-4"></div>
        <div class="team-one__shape-5 img-bounce">
            <img src="{{ asset('assets/images/shapes/team-one-shape-5.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Our Team Member</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">How We've
                    <span>Empowered Businesses</span><br><span>with Innovative</span> Tech Solutions
                </h2>
            </div>
            <div class="team-one__carousel owl-theme owl-carousel">
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode-2">
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team One End -->

    <!-- Pricing One Start -->
    <section class="pricing-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Pricing & Plan</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">How We've
                    <span>Empowered Businesses</span><br><span>with Innovative</span> Tech Solutions
                </h2>
            </div>
            <div class="row">
                <!--Pricing One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="pricing-one__single">
                        <div class="pricing-one__icon">
                            <img src="{{ asset('assets/images/icon/pricing-icon-1.png') }}" alt="">
                        </div>
                        <span class="pricing-one__sub-title">PERSONAL</span>
                        <h2 class="pricing-one__price">$5.60</h2>
                        <p class="pricing-one__text">*free 3 months solutions<br> support*</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Feature Description</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Custom Website Design</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Priority Bug Fixes & Updates</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Basic & Technical SEO </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>System Integration Support</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>24/7 Dedicated IT Assistance</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ route('pricing') }}" class="pricing-one__btn">Choose Plan<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>
                <!--Pricing One Single End-->
                <!--Pricing One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="pricing-one__single active">
                        <div class="pricing-one__icon">
                            <img src="{{ asset('assets/images/icon/pricing-icon-1.png') }}" alt="">
                        </div>
                        <span class="pricing-one__sub-title">ENTERPRISE</span>
                        <h2 class="pricing-one__price">$25.60</h2>
                        <p class="pricing-one__text">*free 6 months solutions<br> support*</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Feature Description</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Custom Website Design</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Priority Bug Fixes & Updates</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Basic & Technical SEO </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>System Integration Support</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>24/7 Dedicated IT Assistance</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ route('pricing') }}" class="pricing-one__btn">Choose Plan<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>
                <!--Pricing One Single End-->
                <!--Pricing One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="pricing-one__single">
                        <div class="pricing-one__icon">
                            <img src="{{ asset('assets/images/icon/pricing-icon-1.png') }}" alt="">
                        </div>
                        <span class="pricing-one__sub-title">Premium</span>
                        <h2 class="pricing-one__price">$120.60</h2>
                        <p class="pricing-one__text">*free 12 months solutions<br> support*</p>
                        <div class="pricing-one__bdr"></div>
                        <h5 class="pricing-one__points-title">Feature Description</h5>
                        <ul class="pricing-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Custom Website Design</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Priority Bug Fixes & Updates</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <p>Basic & Technical SEO </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>System Integration Support</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-plus-circle"></span>
                                </div>
                                <p>24/7 Dedicated IT Assistance</p>
                            </li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ route('pricing') }}" class="pricing-one__btn">Choose Plan<span
                                    class="far fa-plus-circle"></span></a>
                        </div>
                    </div>
                </div>
                <!--Pricing One Single End-->
            </div>
        </div>
    </section>
    <!-- Pricing One End -->

    <!-- Testimonial One Start -->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/testimonial-one-bg-1.jpg') }});"></div>
        <div class="testimonial-one__shape-1"></div>
        <div class="testimonial-one__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-9">
                    <div class="testimonial-one__content-box">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Client Testimonial</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">What Our Clients
                                <span>– Say<br></span><span> About Us</span>
                            </h2>
                        </div>
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="{{ route('testimonials') }}">Sarah Collins</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="{{ route('testimonials') }}">Collins Munro</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="{{ route('testimonials') }}">Sarah James</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand One Start -->
        <div class="brand-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="brand-one__left">
                            <ul class="list-unstyled brand-one__img-list">
                                <li>
                                    <div class="brand-one__img-box">
                                        <img src="{{ asset('assets/images/brand/brand-one-img-1-1.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="brand-one__img-box">
                                        <img src="{{ asset('assets/images/brand/brand-one-img-1-2.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                            <p class="brand-one__text">12K Trusted by clients <br>
                                worldwide
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="brand-one__right">
                            <div class="brand-one__carousel owl-theme owl-carousel">
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-5.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand One End -->
    </section>
    <!-- Testimonial One End -->
    <!-- Newsletter One Start -->
    <section class="newsletter-one">
        <div class="container">
            <div class="newsletter-one__inner">
                <div class="newsletter-one__shape-bg"
                    style="background-image: url({{ asset('assets/images/shapes/newsletter-one-shape-bg.png') }});">
                </div>
                <div class="newsletter-one__shape-1 float-bob-x">
                    <img src="{{ asset('assets/images/shapes/newsletter-one-shape-1.png') }}" alt="">
                </div>
                <div class="newsletter-one__shape-2"></div>
                <div class="newsletter-one__shape-3"></div>
                <div class="newsletter-one__img float-bob-y">
                    <img src="{{ asset('assets/images/resources/newsletter-one-img-1.png') }}" alt="">
                </div>
                <h2 class="newsletter-one__title">Subscribe <span>Newsletter</span></h2>
                <p class="newsletter-one__text">From personalized solutions to expert execution, we prioritize
                    quality, <br> reliability, and customer satisfaction</p>
                <form class="newsletter-one__contact-form">
                    <div class="newsletter-one__contact-input-box">
                        <input type="email" placeholder="Enter email address" name="email">
                        <button type="submit" class="thm-btn">Subscribe Now<span
                                class="icon-arrow-right"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter One End -->

    <!-- Blog One Start -->
    <section class="blog-one" id="blog">
        <div class="blog-one__shape-1"></div>
        <div class="blog-one__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">News & Blog</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">How We've <span>Empowered
                        Businesses</span><br><span> with Innovative</span>Tech Solutions</h2>
            </div>
            <div class="blog-one__carousel owl-carousel owl-theme">
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-1.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Alisa Olivia</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>April 5,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top IT Trends Shaping
                                    the Future
                                    of Business in 2025</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-2.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Alisa Olivia</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>April 5,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cybersecurity Best
                                    Practices
                                    Protecting Your Data </a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-3.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Thomas Alison</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>March 15,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>88
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud Computing vs.
                                    On-Premise
                                    Solutions Which is Right for You?</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-4.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Olivia Emma.</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>March 3,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>20
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">The Role of AI in Modern
                                    Solutions Transforming Industries</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-4.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Thomas Alison</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>April 5,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Why IT Support is
                                    Essential for
                                    Business Success in 2025</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-3.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Thomas Alison</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>March 15,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>88
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud Computing vs.
                                    On-Premise
                                    Solutions Which is Right for You?</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
                <!-- Blog One Single Start -->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
                            <div class="blog-one__tags">
                                <span>Digital</span>
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-one-user-4.jpg') }}" alt="">
                                </div>
                                <p class="blog-one__user-title">Olivia Emma.</p>
                            </div>
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}"><span
                                            class="far fa-calendar-alt"></span>March 3,
                                        2025</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>20
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">The Role of AI in Modern
                                    Solutions Transforming Industries</a></h3>
                            <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                sensitive information and defend against evolving cyber threats.</p>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single Start -->
            </div>
        </div>
    </section>
    <!-- Blog One End -->

    <x-footer2 />
@endsection
