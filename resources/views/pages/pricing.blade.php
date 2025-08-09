@extends('layouts.layout4')
@section('title', 'Pricing || LyraLogics || IT Solutions & Technology  ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Pricing" subtitle="Pricing" />


    <!--Page Header End-->

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

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
