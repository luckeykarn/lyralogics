@extends('layouts.layout4')
@section('title', 'Products || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/shop.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Products" subtitle="Products" />


    <!--Page Header End-->

    <!--Product Start-->
    <section class="product">
        <div class="container">
            <div class="row">


                <div class="col-xl-9 col-lg-12">
                    <div class="product__items">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product__showing-result">
                                    <div class="product__showing-text-box">
                                        <p class="product__showing-text">Showing 1–12/14 of 14 results</p>
                                    </div>
                                    <div class="product__showing-sort">
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Sort by popular">Sort by popular</option>
                                                <option value="1">Sort by popular</option>
                                                <option value="2">Sort by Price</option>
                                                <option value="3">Sort by Ratings</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product__all">
                            <div class="product__all-tab">
                                <div class="product__all-tab-button">
                                    <ul class="tabs-button-box clearfix">
                                        <li data-tab="#grid" class="tab-btn-item active-btn-item">
                                            <div class="product__all-tab-button-icon one">
                                                <i class="fa fa-solid fa-bars"></i>
                                            </div>
                                        </li>
                                        <li data-tab="#list" class="tab-btn-item">
                                            <div class="product__all-tab-button-icon">
                                                <i class="fa fa-solid fa-list-ul"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!--Start Tabs Content Box-->
                                <div class="tabs-content-box">
                                    <!--Start Tab-->
                                    <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                        <div class="product__all-tab-content-box-item">
                                            <div class="product__all-tab-single">
                                                <div class="row">

                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>New</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            rendering metallic ai
                                                                        </a>
                                                                    </h4>
                                                                    <p>$33.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.9</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            3d render robot
                                                                        </a>
                                                                    </h4>
                                                                    <p>$50.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>5.0</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            motorcycle helmet
                                                                        </a>
                                                                    </h4>
                                                                    <p><del>$33.00</del> $28.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.5</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            robot gesturing
                                                                        </a>
                                                                    </h4>
                                                                    <p>$40.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.8</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-5.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-5.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            ski helmet with visor
                                                                        </a>
                                                                    </h4>
                                                                    <p><del>$25.00</del>$20.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.9</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-6.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-6.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            snowboard boot
                                                                        </a>
                                                                    </h4>
                                                                    <p>$35.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.7</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>New</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            rendering metallic ai
                                                                        </a>
                                                                    </h4>
                                                                    <p>$33.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.9</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            3d render robot
                                                                        </a>
                                                                    </h4>
                                                                    <p>$50.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>5.0</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            motorcycle helmet
                                                                        </a>
                                                                    </h4>
                                                                    <p><del>$33.00</del> $28.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.5</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            robot gesturing
                                                                        </a>
                                                                    </h4>
                                                                    <p>$40.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.8</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-5.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-5.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__overlay">
                                                                    <li>
                                                                        <p>5% Off</p>
                                                                    </li>
                                                                </ul>
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            ski helmet with visor
                                                                        </a>
                                                                    </h4>
                                                                    <p><del>$25.00</del>$20.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.9</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                                        <div class="single-product-style1">
                                                            <div class="single-product-style1__img">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-6.png') }}"
                                                                    alt="">
                                                                <img src="{{ asset('assets/images/shop/shop-product-1-6.png') }}"
                                                                    alt="">
                                                                <ul class="single-product-style1__info">
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">
                                                                            <i class="fa fa-regular fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Add to cart">
                                                                            <i class="fa fa-solid fa-cart-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Quick View">
                                                                            <i class="fa fa-regular fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" title="Compare">
                                                                            <i class="fa fa-solid fa-repeat"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-product-style1__content">
                                                                <div class="single-product-style1__content-left">
                                                                    <h4>
                                                                        <a href="{{ route('product-details') }}">
                                                                            snowboard boot
                                                                        </a>
                                                                    </h4>
                                                                    <p>$35.00</p>
                                                                </div>
                                                                <div class="single-product-style1__content-right">
                                                                    <div class="single-product-style1__review">
                                                                        <i class="fa fa-star"></i>
                                                                        <p>4.7</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single End-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Tab-->
                                    <!--Start Tab-->
                                    <div class="tab-content-box-item" id="list">
                                        <div class="product__all-tab-content-box-item">
                                            <div class="product__all-tab-single">
                                                <div class="row">

                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                        <ul class="single-product-style1__overlay">
                                                                            <li>
                                                                                <p>New</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    rendering metallic ai
                                                                                </a>
                                                                            </h4>
                                                                            <p>$33.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    3d render robot
                                                                                </a>
                                                                            </h4>
                                                                            <p>$50.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-3.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-3.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    motorcycle helmet
                                                                                </a>
                                                                            </h4>
                                                                            <p>$40.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-4.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-4.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    robot gesturing
                                                                                </a>
                                                                            </h4>
                                                                            <p><del>$33.00</del>$28.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-5.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-5.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    ski helmet with visor
                                                                                </a>
                                                                            </h4>
                                                                            <p><del>$25.00</del>$20.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-6.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-6.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    snowboard boot
                                                                                </a>
                                                                            </h4>
                                                                            <p>$35.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                        <ul class="single-product-style1__overlay">
                                                                            <li>
                                                                                <p>New</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    rendering metallic ai
                                                                                </a>
                                                                            </h4>
                                                                            <p>$33.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    3d render robot
                                                                                </a>
                                                                            </h4>
                                                                            <p>$50.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-3.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-3.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    motorcycle helmet
                                                                                </a>
                                                                            </h4>
                                                                            <p>$40.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-4.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-4.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    robot gesturing
                                                                                </a>
                                                                            </h4>
                                                                            <p><del>$33.00</del>$28.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-5.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-5.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    ski helmet with visor
                                                                                </a>
                                                                            </h4>
                                                                            <p><del>$25.00</del>$20.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-6.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-6.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    snowboard boot
                                                                                </a>
                                                                            </h4>
                                                                            <p>$35.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-1.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    rendering metallic ai
                                                                                </a>
                                                                            </h4>
                                                                            <p><del>$25.00</del>$20.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->
                                                    <!--Product All Single Start-->
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="single-product-style2">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__img">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                        <img src="{{ asset('assets/images/shop/shop-product-2-2.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                                    <div class="single-product-style2__content">
                                                                        <div class="single-product-style2__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="single-product-style2__text">
                                                                            <h4>
                                                                                <a href="{{ route('product-details') }}">
                                                                                    3d render robot
                                                                                </a>
                                                                            </h4>
                                                                            <p>$35.00</p>
                                                                        </div>
                                                                        <ul class="single-product-style2__info">
                                                                            <li>
                                                                                <a href="#" title="Add to Wishlist">
                                                                                    <i class="fa fa-regular fa-heart">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Add to cart">
                                                                                    <i class="fa fa-solid fa-cart-plus">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Quick View">
                                                                                    <i class="fa fa-regular fa-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title="Compare">
                                                                                    <i class="fa fa-solid fa-repeat">
                                                                                    </i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product All Single Start-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Tab-->
                                </div>
                                <!--End Tabs Content Box-->
                            </div>
                            <ul class="styled-pagination text-center clearfix list-unstyled">
                                <li class="arrow prev active">
                                    <a href="#">
                                        <span class="icon-left-arrow"></span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="arrow next">
                                    <a href="#">
                                        <span class="icon-right-arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-12">
                    <div class="product__sidebar">
                        <div class="shop-search product__sidebar-single">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="product__price-ranger product__sidebar-single">
                            <h3 class="product__sidebar-title">Price</h3>
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <input type="text" readonly class="min">
                                    <span>-</span>
                                    <input type="text" readonly class="max">
                                    <input type="submit" value="Filter">
                                </div>
                            </div>
                        </div>

                        <div class="shop-category product__sidebar-single">
                            <h3 class="product__sidebar-title">Categories</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">A Tradition of Healing</a></li>
                                <li class="active"><a href="#">Compassionate Care</a></li>
                                <li><a href="#">Caring for You, Always</a></li>
                                <li><a href="#">Where Health Matters</a></li>
                                <li><a href="#">Environtment Recyle</a></li>
                            </ul>
                        </div>

                        <div class="shop-product-recent-products product__sidebar-single">
                            <h3 class="product__sidebar-title">Recent Products</h3>
                            <ul class="clearfix list-unstyled">
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-1.png') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">metallic ai</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$33.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-2.png') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">3d render robot</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$39.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-3.png') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">motorcycle helmet</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$54.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets/images/shop/product-thumb-4.png') }}" alt="Product">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h5><a href="#">robot gesturing</a></h5>
                                        </div>
                                        <div class="price">
                                            <p>$44.00</p>
                                        </div>
                                        <div class="review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star color"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-product-tags product__sidebar-single">
                            <h3 class="product__sidebar-title">Product Tags</h3>
                            <div class="shop-product__tags-list">
                                <a href="#">Development</a>
                                <a href="#">Innovation</a>
                                <a href="#">Analytics</a>
                                <a href="#">Marketing</a>
                                <a href="#">Innovation</a>
                                <a href="#">Technology</a>
                            </div>
                        </div>

                        <!--Start Products Style1 Single Sidear -->
                        <div class="shop-product-rating product__sidebar-single style">
                            <h3 class="product__sidebar-title">Reviews</h3>
                            <div class="sidebar-rating-box sidebar-rating-box--style2">
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="radio" id="fivestar" name="rating" checked="checked">
                                        <label for="fivestar">
                                            <i></i>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="fourstar" name="rating">
                                        <label for="fourstar">
                                            <i></i>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star gray"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="threestar" name="rating">
                                        <label for="threestar">
                                            <i></i>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="twostar" name="rating">
                                        <label for="twostar">
                                            <i></i>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="onestar" name="rating">
                                        <label for="onestar">
                                            <i></i>
                                            <span class="icon-star"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                            <span class="icon-star gray"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End Products Style1 Single Sidear -->





                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--Product End-->

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
