@extends('layouts.layout4')
@section('title', 'Testimonials Carousel || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Testimonials Carousel" subtitle="Testimonials Carousel" />


    <!--Page Header End-->

    <!--Testimonials Carousel Page Start-->
    <section class="testimonials-carousel-page">
        <div class="container">
            <div class="testimonials-carousel-style owl-carousel owl-theme carousel-dot-style">
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
    <!--Testimonials Carousel Page End-->

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
