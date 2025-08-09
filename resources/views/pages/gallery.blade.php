@extends('layouts.layout4')
@section('title', 'Gallery || LyraLogics || IT Solutions & Technology  ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/gallery.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Gallery" subtitle="Gallery" />


    <!--Page Header End-->

    <!--Gallery Page Start-->
    <section class="gallery-page">
        <div class="container">
            <div class="row masonary-layout">
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-1.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-1.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-2.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-2.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-3.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-3.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-4.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-4.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-5.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-5.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-6.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-6.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-7.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-7.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-8.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-8.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-9.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-9.jpg') }}"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
            </div>
        </div>
    </section>
    <!--Gallery Page End-->

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
