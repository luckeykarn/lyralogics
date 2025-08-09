@extends('layouts.layout1')
@section('title', 'Home One || LyraLogics || IT Solutions & Technology  ')


@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->

    <!--Main Slider Two Start-->
    <section class="main-slider-two">
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
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-1.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="{{ route('about') }}">Help</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                        <li><a href="{{ route('faq') }}">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-dribble"></span></a>

                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                    <!--Brand Two Start -->
                    <div class="brand-two">
                        <div class="brand-two__wrapper">
                            <div class="brand-two__inner">
                                <div class="brand-two__left">
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
                                <div class="brand-two__right">
                                    <div class="brand-two__carousel owl-theme owl-carousel">
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
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
                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">
                                        LyraLogics - Smart<br> Solutions for a <br><span>Connected world</span>
                                    </h2>
                                    <p class="main-slider-two__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider-two__btn-box-2">
                                            <a href="{{ route('about') }}" class="thm-btn">Read More<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-2.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="{{ route('about') }}">Help</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                        <li><a href="{{ route('faq') }}">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-dribble"></span></a>

                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                    <!--Brand Two Start -->
                    <div class="brand-two">
                        <div class="brand-two__wrapper">
                            <div class="brand-two__inner">
                                <div class="brand-two__left">
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
                                <div class="brand-two__right">
                                    <div class="brand-two__carousel owl-theme owl-carousel">
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
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
                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">
                                        <span>LyraLogics -</span> Empowering<br> Innovation Delivering<br> Solutions
                                    </h2>
                                    <p class="main-slider-two__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider-two__btn-box-2">
                                            <a href="{{ route('about') }}" class="thm-btn">Read More<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-3.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="{{ route('about') }}">Help</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                        <li><a href="{{ route('faq') }}">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-dribble"></span></a>

                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                    <!--Brand Two Start -->
                    <div class="brand-two">
                        <div class="brand-two__wrapper">
                            <div class="brand-two__inner">
                                <div class="brand-two__left">
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
                                <div class="brand-two__right">
                                    <div class="brand-two__carousel owl-theme owl-carousel">
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
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
                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">IT Solutions Designed for Your Success
                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">Tailored IT <span>Strategies</span> <br>
                                        <span>to Drive Your Business</span> <br> Forward
                                    </h2>
                                    <p class="main-slider-two__text">From strategic IT consulting to seamless <br>
                                        implementation, we deliver tailored solutions <br> that drive efficiency</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider-two__btn-box-2">
                                            <a href="{{ route('about') }}" class="thm-btn">Read More<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- If we need navigation buttons -->
            <div class="main-slider-two__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-up"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-up"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider Two End-->

    <!--About Two Start -->
    <section class="about-two">
        <div class="about-two__shape-2"></div>
        <div class="about-two__shape-3">
            <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-two__img-2">
                                <img src="{{ asset('assets/images/resources/about-two-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-two__shape-1"></div>
                        </div>
                        <div class="about-two__client-box">
                            <ul class="about-two__client-img-list list-unstyled">
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-1.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-2.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-3.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-plus"></span></a>
                                </li>
                            </ul>
                            <p class="about-two__client-text"><span class="odometer"
                                    data-count="1">00</span><span>K</span> Satisfied Client</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Unlock Your Business
                                <span>Potential</span><br><span>with Our best Cutting-Edge</span> IT<br> Solutions
                                to grow
                            </h2>
                        </div>
                        <p class="about-two__text">Transform your business with our innovative IT solutions,
                            tailored to address your unique challenges and drive growth in today’s digital
                            landscape.</p>
                        <div class="about-two__points-box">
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Customized Solutions for<br> Every Business</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Enhanced Security and Data<br> Protection</p>
                                </li>
                            </ul>
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Scalable Infrastructure for<br> Growth</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Continuous system<br> monitoring and expert<br> support</p>
                                </li>
                            </ul>
                        </div>
                        <div class="about-two__experience-contact-and-btn">
                            <div class="about-two__experience-box">
                                <div class="about-two__experience-count-box">
                                    <h3 class="odometer" data-count="1">00</h3>
                                    <span> </span>
                                </div>
                                <p class="about-two__experience-text">Years of
                                    <br> Experience
                                </p>
                            </div>
                            <div class="about-two__call-box">
                                <div class="about-two__call-icon">
                                    <span class="icon-customer-service-headset"></span>
                                </div>
                                <div class="about-two__call-content">
                                    <span>call us for inquiry</span>
                                    <p><a href="tel:00123456767"> 00 (123) 456767</a></p>
                                </div>
                            </div>
                            <div class="about-two__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">Learn More<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="counter-two__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/counter-two-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-trophy"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="120">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">Creative Plus award</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-user"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="300">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">Expert Team Members</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-chat"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="1">00</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-two__text">Happy Clients Review</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-folder"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="1.5">00</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-two__text">Project Completed</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
            </div>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Services Two Start -->
    <section class="services-two">
        <div class="services-two__shape-1"></div>
        <div class="container">
            <div class="services-two__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Our Services</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Your Business with Cutting-Edge IT<br>
                        Solutions <img src="{{ asset('assets/images/services/section-title-img.jpg') }}" alt="">
                        <span>Innovative IT Services</span><br><span>Tailored for Your Success</span>
                    </h2>
                </div>
                <a href="{{ route('services') }}" class="services-two__round-text-box">
                    <div class="services-two__round-text-box-outer">
                        <div class="services-two__round-text-box-inner">
                            <div class="services-two__curved-circle">
                                View All Project View All Services
                            </div>
                            <div class="services-two__round-icon">
                                <img src="{{ asset('assets/images/icon/services-two-round-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-two__bottom">
                <div class="services-two__services-list">
                    <div class="services-two__services-list-single services-two__services-list-single-1">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('advanced-technology') }}">Software
                                    Development
                                    <br> Solutions</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>UI/UX Design</p>
                                    <p><span class="icon-plus"></span>Mobile Application</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Mobile Application</p>
                                    <p><span class="icon-plus"></span>Research</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Research</p>
                                    <p><span class="icon-plus"></span>UI/UX Design</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-1.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a
                                    href="{{ route('data-protection-privacy') }}">Cybersecurity
                                    Risk
                                    <br> Management</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Security</p>
                                    <p><span class="icon-plus"></span>Performance</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Scalability</p>
                                    <p><span class="icon-plus"></span>Reliability</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Innovation</p>
                                    <p><span class="icon-plus"></span>Efficiency</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-2.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('cloud-managed-services') }}">Cloud
                                    Solutions
                                    <br> Provider</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Cloud Security</p>
                                    <p><span class="icon-plus"></span>Cloud Scalability</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Cloud Integration</p>
                                    <p><span class="icon-plus"></span>Cloud Performance</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Cloud Backup</p>
                                    <p><span class="icon-plus"></span>Cloud Optimization</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-3.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('backup-recovery') }}">Data Analytics
                                    <br> Consulting</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Data Insights</p>
                                    <p><span class="icon-plus"></span>Predictive Analytics</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Big Data</p>
                                    <p><span class="icon-plus"></span>Business Intelligence</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Data Visualization</p>
                                    <p><span class="icon-plus"></span>Data Strategy</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-4.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Two End -->

    <!-- Why Choose One Start -->
    <section class="why-choose-one">
        <div class="why-choose-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">
        </div>
        <div class="why-choose-one__shape-4"></div>
        <div class="why-choose-one__shape-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Why Chooses Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Elevate Growth <span>with
                                    Our</span><br><span>Cutting-Edge IT</span>
                                Solutions<br> for Success
                            </h2>
                        </div>
                        <p class="why-choose-one__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering </p>
                        <ul class="why-choose-one__progress-list list-unstyled">
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Camping Launches</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="86%">
                                            <div class="count-text">86%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Innovation Design</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="76%">
                                            <div class="count-text">76%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="why-choose-one__btn-and-client-info">
                            <div class="why-choose-one__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">About Us<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                            <div class="why-choose-one__client-box">
                                <div class="why-choose-one__client-img">
                                    <img src="{{ asset('assets/images/resources/why-choose-one-client-img.jpg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-one__client-content">
                                    <h3>Sachin Sharma </h3>
                                    <span>Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="{{ asset('assets/images/resources/why-choose-one-img-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-one__shape-1 img-bounce">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-one__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose One End -->

    <!-- Sliding Text Three Start -->
    <section class="sliding-text-three">
        <div class="sliding-text-three__wrap">
            <ul class="sliding-text-three__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Product Design" class="sliding-text-three__title">Product Design</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Web Development" class="sliding-text-three__title">Web Development</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="BRANDING" class="sliding-text-three__title">BRANDING</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Cyber Security" class="sliding-text-three__title">Cyber Security</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Website design" class="sliding-text-three__title">Website design</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Digital Marketing" class="sliding-text-three__title">Digital Marketing</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                    <span class="icon-star"></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

    <!-- Process Two Start -->
    <section class="process-two">
        <div class="process-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/process-two-bg.jpg') }});">
        </div>
        <div class="process-two__bg-shape float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/process-two-bg-shape.png') }});">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Working Process</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Our Seamless Process <br><span>From Concept to
                        Creation</span>
                </h2>
            </div>
            <ul class="row list-unstyled">
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Research & Discovery</h3>
                        <p class="process-two__text">We begin by understanding your needs,<br> goals, and vision.
                            Through brainstorming<br> sessions and strategic planning,</p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="process-two__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-2.png') }}" alt="">
                        </div>
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Design and Development</h3>
                        <p class="process-two__text">Once the strategy is in place, we move to<br> designing and
                            developing your vision. Our<br> team collaborates closely to bring your<br> ideas</p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Testing and Launch</h3>
                        <p class="process-two__text">Before going live, we rigorously test to<br> ensure optimal
                            functionality. After<br> thorough quality checks, we launch your<br> project </p>
                    </div>
                </li>
                <li>
                    <!--Process Two Single End-->
                </li>
            </ul>
        </div>
    </section>
    <!-- Process Two End -->

    <!-- Portfolio Two Start -->
    <section class="portfolio-two">
        <div class="portfolio-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/portfolio-two-shape-1.png') }}" alt="">
        </div>
        <div class="portfolio-two__shape-2"></div>
        <div class="portfolio-two__shape-3"></div>
        <div class="portfolio-two__shape-4"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Portfolio</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Explore Our Creative <span>Journey</span><br>
                    <span> Crafting Success Through</span>
                </h2>
            </div>
            <div class="portfolio-two__carousel-container">
                <div class="portfolio-two__carousel owl-carousel owl-theme">
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                    Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Transforming Ideas Into<br>
                                                    Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Empowering Businesses with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                    Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Transforming Ideas Into<br>
                                                    Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Empowering Businesses
                                                        with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                    Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Transforming Ideas Into<br>
                                                    Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg"
                                            style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="{{ route('portfolio-details') }}">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}"
                                                    class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a
                                                        href="{{ route('portfolio-details') }}">Empowering Businesses
                                                        with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Two End -->

    <!-- Pricing Two Start -->
    <section class="pricing-two">
        <div class="pricing-two__sec-shape-1"></div>
        <div class="pricing-two__sec-shape-2"></div>
        <div class="pricing-two__sec-shape-3"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Pricing & Plan</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Select the Perfect
                    <span>Plan for Your</span><br><span>Needs That Fits You</span>
                </h2>
            </div>
            <div class="pricing-two__main-tab-box tabs-box">
                <ul class="tab-buttons list-unstyled">
                    <li data-tab="#monthly" class="tab-btn"><span>Monthly</span>
                    </li>
                    <li data-tab="#yearly" class="tab-btn active-btn"><span>Yearly</span></li>
                    <li data-tab="#packges" class="tab-btn"><span>Packges</span></li>
                </ul>
                <div class="tabs-content">
                    <div class="tab" id="monthly">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5000</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$9999</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
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
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$50000.45</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                    <div class="tab active-tab" id="yearly">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5000</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$9999</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
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
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$50000.45</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="packges">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5000</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$9999</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
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
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$50000.45</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
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
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Two End -->

    <!-- Contact Two Start -->
    <section class="contact-two">
        <ul class="contact-two__sliding-text-list list-unstyled marquee_mode-2">
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
        </ul>
        <div class="contact-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/contact-two-bg.jpg') }});">
        </div>
        <div class="contact-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/contact-two-shape-1.png') }}" alt="">
        </div>
        <div class="contact-two__shape-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Get In Touch</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Conversation
                                <span>– Reach</span><br><span>Out Anytime</span>
                            </h2>
                        </div>
                        <p class="contact-two__text">We're here to listen! Whether you have<br> questions, feedback,
                            or just want to say hello,<br> feel free to reach out. </p>
                        <ul class="contact-two__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <span>Email Us</span>
                                    <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <span>Contact US</span>
                                    <p><a href="tel:6785236569"> +1 (678) 523 6569</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <span>Our Address</span>
                                    <p>4721 Rosebud Drive GA, Snellville , 30039</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-two__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Full Name</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="Sachin Sharma "
                                            required="">
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
                                                <option selected>Sachin Sharma 
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
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Two End -->

    <!-- Event One Start -->
    <section class="event-one">
        <div class="event-one__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/event-one-shape-1.png') }}" alt="">
        </div>
        <div class="event-one__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/event-one-shape-2.png') }}" alt="">
        </div>
        <div class="event-one__shape-3"></div>
        <div class="event-one__shape-4"></div>
        <div class="event-one__shape-2"></div>
        <div class="container">
            <div class="event-one__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Upcoming Events</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Exciting Events <span>on the
                        </span> <span>Horizon</span></h2>
                </div>
                <div class="event-one__top-btn-box">
                    <a href="{{ route('contact') }}" class="thm-btn">Contact Us<span
                            class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="event-one__bottom">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="event-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/resources/event-one-img-1.jpg') }}" alt="">
                                <div class="event-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="event-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="event-one__right">
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="100ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Innovation Meets</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/05/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 18, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInRight" data-wow-delay="200ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Unlock Your Potential</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/07/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 25, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="300ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Tech Talks Live</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/09/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 30, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event One End -->

    <!-- Testimonial Two Start -->
<section class="testimonial-two">
    <div class="testimonial-two__shape-1"></div>
    <div class="testimonial-two__shape-2"></div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <div class="section-title__tagline-shape-1"></div>
                <span class="section-title__tagline">Testimonials</span>
                <div class="section-title__tagline-shape-2"></div>
            </div>
            <h2 class="section-title__title title-animation">Customer Experiences <br> That <span>Speak
                    Volumes</span></h2>
        </div>
        <div class="testimonial-two__carousel owl-theme owl-carousel">
            <!-- Testimonial Two Single Start -->
            <div class="item">
                <div class="testimonial-two__single">
                    <div class="testimonial-two__single-inner">
                        <div class="testimonial-two__star">
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-two__text">The UI/UX design they crafted was intuitive, modern, and perfectly aligned with our brand. It significantly improved our user engagement.</p>
                    </div>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-two__client-content">
                            <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Thomas Alison</a></h4>
                            <p class="testimonial-two__sub-title">UI/UX Designer</p>
                        </div>
                    </div>
                    <div class="testimonial-two__quote">
                        <span class="icon-right-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial Two Single End -->

            <!-- Testimonial Two Single Start -->
            <div class="item">
                <div class="testimonial-two__single">
                    <div class="testimonial-two__single-inner">
                        <div class="testimonial-two__star">
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-two__text">Their marketing strategies brought a noticeable boost in our brand’s visibility. Campaign results exceeded expectations within weeks.</p>
                    </div>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-two__client-content">
                            <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Sarah Williams</a></h4>
                            <p class="testimonial-two__sub-title">Marketing Manager</p>
                        </div>
                    </div>
                    <div class="testimonial-two__quote">
                        <span class="icon-right-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial Two Single End -->

            <!-- Testimonial Two Single Start -->
            <div class="item">
                <div class="testimonial-two__single">
                    <div class="testimonial-two__single-inner">
                        <div class="testimonial-two__star">
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-pointed-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-two__text">From concept to final design, their product development approach was creative and user-focused. We couldn’t have asked for better results.</p>
                    </div>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-two__client-content">
                            <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">James Anderson</a></h4>
                            <p class="testimonial-two__sub-title">Product Designer</p>
                        </div>
                    </div>
                    <div class="testimonial-two__quote">
                        <span class="icon-right-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial Two Single End -->

            <!-- Repeat for other duplicates with unique content per role -->
        </div>
    </div>
</section>

    <!-- Testimonial Two End -->

    <!-- Blog Two Start -->
    <section class="blog-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="blog-two__left wow fadeInLeft" data-wow-delay="100ms">
                        <div class="section-title text-left sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Our Blogs</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Explore Our Latest
                                <span>Blogs for Expert Insights</span>
                            </h2>
                        </div>
                        <p class="blog-two-text">Dive into our collection of blogs where we share expert insights,
                            helpful tips, and the latest trends in the industry</p>
                        <div class="blog-two__top-btn-box">
                            <a href="{{ route('blog-details') }}" class="thm-btn">View All Blogs<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                        <div class="blog-two__left-content-box">
                            <div class="blog-two__single">
                                <div class="blog-two__img">
                                    <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                                    <div class="blog-two__tags">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__user">
                                        <div class="blog-two__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-two-user-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="blog-two__user-title">Jordan Walk</p>
                                    </div>
                                    <ul class="blog-two__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span
                                                    class="far fa-calendar-alt"></span>April 5,
                                                2025</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span
                                                    class="fal fa-comments"></span>80
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">The Future is
                                            Now: A
                                            2025 Guide to Digital Transformation</a></h3>
                                    <p class="blog-two__text">Winning the Digital Race: The 2025 Transformation
                                        Roadmap. Next-Gen Digital Transformation</p>
                                    <div class="blog-two__btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-two__right">
                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="100ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-2.jpg') }}"
                                            alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">John Smith</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                                <h3 class="blog-two__title-two"><a href="{{ route('blog-details') }}">5 Key Trends
                                        Shaping the
                                        Future of Technology</a></h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span
                                                class="far fa-calendar-alt"></span>Jan 13,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>12
                                            Comments</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->
                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInRight" data-wow-delay="200ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-3.jpg') }}"
                                            alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">Alisa Olivia</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                                <h3 class="blog-two__title-two"><a href="{{ route('blog-details') }}">How to Maximize
                                        Efficiency with Smart Business</a></h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span
                                                class="far fa-calendar-alt"></span>Jan 13,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>12
                                            Comments</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->
                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="300ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/blog/blog-2-4.jpg') }}" alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-4.jpg') }}"
                                            alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">Jordan Walk</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                                <h3 class="blog-two__title-two"><a href="{{ route('blog-details') }}">The Ultimate
                                        Guide to
                                        Digital Transformation in 2025</a></h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span
                                                class="far fa-calendar-alt"></span>Jan 13,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>12
                                            Comments</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Two End -->
    <x-footer />
@endsection
