@extends('layouts.layout3onepage')
@section('title', 'Home Three || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/cta.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->


    <!--Banner One Start -->
    <section class="banner-one" id="home">
        <div class="banner-one__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/banner-one-bg.jpg') }});">
        </div>
        <div class="banner-one__shape-bg float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/banner-one-shape-bg.png') }});"></div>
        <div class="container">
            <div class="banner-one__inner">
                <h2 class="banner-one__title">Expert IT Solutions to Elevate <br> <span>Your Enterprise</span>
                </h2>
                <div class="banner-one__btn-box">
                    <a href="{{ route('contact') }}" class="thm-btn">Get Started<span class="icon-right-arrow"></span></a>
                </div>
                <div class="banner-one__img-box">
                    <div class="banner-one__img">
                        <img src="{{ asset('assets/images/resources/banner-one-img-1.jpg') }}" alt="">
                        <div class="banner-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="banner-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner One Start -->


    <!--About Three Start -->
    <section class="about-three" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img-box">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/images/resources/about-three-img-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Any IT Problem Solutions And
                                <span>Grow Your Business</span>
                            </h2>
                        </div>
                        <p class="about-three__text">Transform your business with our innovative IT solutions,
                            tailored
                            to address your unique challenges and drive growth.</p>
                        <div class="about-three__progress-box">
                            <div class="progress-box">
                                <div class="bar-title">Business Problem Solving</div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%">
                                        <div class="count-box">
                                            <span class="count-text" data-stop="70" data-speed="1500">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <div class="bar-title">Camping Launches</div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="80%">
                                        <div class="count-box">
                                            <span class="count-text" data-stop="80" data-speed="1500">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="about-three__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Shaping Tomorrow, Transforming Today</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="content">
                                    <h3>Innovating Today, Empowering Tomorrow</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="about-three__btn-and-call-box">
                            <div class="about-three__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">Get in Touch<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                            <div class="about-three__call-box">
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
            </div>
        </div>
    </section>
    <!--About Three End -->

    <!--Services Three Start -->
    <section class="services-three" id="services">
        <div class="services-three__shape-1"></div>
        <div class="services-three__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Our Services</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Reliable Services
                    <span>Crafted</span> <br> <span>to Exceed</span> Your Expectations
                </h2>
            </div>
            <div class="services-three__carousel owl-theme owl-carousel">
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ route('advanced-technology') }}">All Kind Of
                                    <br> IT
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
                            <h3 class="services-three__title"><a
                                    href="{{ route('data-protection-privacy') }}">Cybersecurity
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
                            <h3 class="services-three__title"><a
                                    href="{{ route('threat-detection-prevention') }}">Software
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
                            <h3 class="services-three__title"><a href="{{ route('cloud-managed-services') }}">Cloud
                                    Solutions
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
                            <h3 class="services-three__title"><a href="{{ route('backup-recovery') }}">Data Analytics
                                    <br>
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
            </div>
        </div>
    </section>
    <!--Services Three End -->

    <!--Why Choose Two Start -->
    <section class="why-choose-two">
        <div class="why-choose-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/why-choose-two-shape-1.png') }}" alt="">
        </div>
        <div class="why-choose-two__shape-2"></div>
        <div class="why-choose-two__shape-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-two__img">
                            <img src="{{ asset('assets/images/resources/why-choose-two-img-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Why Chooses Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Elevate Growth with Our IT Solutions
                                <span>for Success</span>
                            </h2>
                        </div>
                        <p class="why-choose-one__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                        <ul class="list-unstyled why-choose-two__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-earning"></span>
                                </div>
                                <div class="content">
                                    <h4>Industry Experience</h4>
                                    <p>Innovating and empowering businesses with tailored solutions
                                        for success and growth. Innovating and empowering</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-customer-service-headset"></span>
                                </div>
                                <div class="content">
                                    <h4>24/7 Customer Support</h4>
                                    <p>Innovating and empowering businesses with tailored solutions
                                        for success and growth. Innovating and empowering</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-quality"></span>
                                </div>
                                <div class="content">
                                    <h4>Trust & Reliability</h4>
                                    <p>Innovating and empowering businesses with tailored solutions
                                        for success and growth. Innovating and empowering</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Two End -->

    <!--Feature One Start -->
    <section class="feature-one">
        <div class="feature-one__shape-1"></div>
        <div class="feature-one__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Feature One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ asset('assets/images/resources/feature-one-img-1-1.png') }}" alt="">
                        </div>
                        <h3 class="feature-one__title"><a href="{{ route('data-protection-privacy') }}">Security
                                Services</a>
                        </h3>
                        <p class="feature-one__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </div>
                <!--Feature One Single End -->
                <!--Feature One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ asset('assets/images/resources/feature-one-img-1-2.png') }}" alt="">
                        </div>
                        <h3 class="feature-one__title"><a href="{{ route('data-protection-privacy') }}">Data Privary</a>
                        </h3>
                        <p class="feature-one__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </div>
                <!--Feature One Single End -->
                <!--Feature One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ asset('assets/images/resources/feature-one-img-1-3.png') }}" alt="">
                        </div>
                        <h3 class="feature-one__title"><a href="{{ route('backup-recovery') }}">Industry Certified</a>
                        </h3>
                        <p class="feature-one__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </div>
                <!--Feature One Single End -->
            </div>
        </div>
    </section>
    <!--Feature One End -->

    <!--CTA One Start -->
    <section class="cta-one">
        <div class="cta-one__shape-bg float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/cta-one-shape-bg.png') }});">
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <h3 class="cta-one__title">To make requests for further <br> information,
                    contact us</h3>
                <div class="cta-one__contact-info">
                    <div class="cta-one__contact-icon">
                        <span class="icon-customer-service-headset"></span>
                    </div>
                    <div class="cta-one__contact-details">
                        <p>Call Us For Any inquiry</p>
                        <h4><a href="tel:9900567780"> 99 (00) 567 780</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End -->

    <!-- Testimonial Two Start -->
    <section class="testimonial-two" id="testimonial">
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Thomas
                                        Alison</a></h4>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Sarah
                                        Williams</a></h4>
                                <p class="testimonial-two__sub-title">Marketing Manger</p>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">James
                                        Anderson</a></h4>
                                <p class="testimonial-two__sub-title">Product Designer</p>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Thomas
                                        Alison</a></h4>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Sarah
                                        Williams</a></h4>
                                <p class="testimonial-two__sub-title">Marketing Manger</p>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">James
                                        Anderson</a></h4>
                                <p class="testimonial-two__sub-title">Product Designer</p>
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
                            <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                expectations and delivered a solution that perfectly met our needs. Their attention
                                to
                                detail and commitment to quality is unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Sarah
                                        Williams</a></h4>
                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
            </div>
        </div>
    </section>
    <!-- Testimonial Two End -->

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

    <!--Faq One Start -->
    <section class="faq-one">
        <div class="faq-one__shape-1"></div>
        <div class="faq-one__shape-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Our Faqs</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Your Questions Answered <br>
                                <span>Explore Our FAQs</span>
                            </h2>
                        </div>
                        <div class="faq-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="faq-one__img">
                                <img src="{{ asset('assets/images/resources/faq-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="faq-one__experience-box">
                                <div class="faq-one__experience-year">
                                    <h2 class="odometer" data-count="55">00</h2>
                                </div>
                                <p class="faq-one__experience-text">Year of <br> experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What types of IT services do you offer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Are your IT products eco-friendly?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What papers needed for software development?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How to contact the development team?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What types of IT services do you offer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq One End -->

    <!--Feature Two Start -->
    <section class="feature-two">
        <div class="container">
            <ul class="list-unstyled feature-two__list">
                <li class="wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('advanced-technology') }}">
                                Technology Consulting</a></h3>
                        <p class="feature-two__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-technical-support"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('cloud-managed-services') }}">
                                Cloud IT security</a></h3>
                        <p class="feature-two__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('advanced-technology') }}">Software
                                Development</a>
                        </h3>
                        <p class="feature-two__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-earning"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('backup-recovery') }}">
                                Business solutions</a></h3>
                        <p class="feature-two__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-transparency"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('data-protection-privacy') }}">Data Tracking
                                Security</a></h3>
                        <p class="feature-two__text">Innovating and empowering businesses with tailored solutions
                            for success and growth. Innovating and empowering</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Feature Two End -->

    <!-- Blog Two Start -->
    <section class="blog-two blog-three" id="blog">
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
                                            <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">The Future is Now:
                                            A
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
                                        <img src="{{ asset('assets/images/blog/blog-two-user-2.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/blog/blog-two-user-3.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/blog/blog-two-user-4.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">Jordan Walk</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                                <h3 class="blog-two__title-two"><a href="{{ route('blog-details') }}">The Ultimate Guide
                                        to
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

    <!-- Contact Two Start -->
    <section class="contact-two" id="contact">
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
                                    <p><a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <span>Our Address</span>
                                    <p>1629 N. Dixie Avenue, Kentucky, 42701</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
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
            </div>
        </div>
    </section>
    <!-- Contact Two End -->

    <!-- Newsletter Two Start -->

    <x-footer />
@endsection
