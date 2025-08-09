@extends('layouts.layout4')
@section('title', '404 Error || LyraLogics || IT Solutions & Technology  ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
@endpush
@section('content')
    <x-strickyHeader />
    <x-page-header title="404 Error" subtitle="404 Error" />
    <!--Start Error Page-->
    <section class="error-page">
        <div class="container">
            <div class="error-page__inner text-center">
                <div class="error-page__img float-bob-y">
                    <img src="{{ asset('assets/images/resources/error-page-img1.png') }}" alt="">
                </div>

                <div class="error-page__content">
                    <h2>Oops! Page Not Found!</h2>
                    <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('index') }}">Back To
                            Home <span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page-->
    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
