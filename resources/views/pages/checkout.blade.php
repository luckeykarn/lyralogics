@extends('layouts.layout4')
@section('title', 'Checkout || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/shop.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Checkout" subtitle="Checkout" />


    <!--Page Header End-->

    <!--Start Checkout Page-->
    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-6">
                    <div class="billing_details">
                        <div class="billing_title">
                            <p>Returning Customer? <a href="#">Click here to Login</a></p>
                            <h2>Billing details</h2>
                        </div>
                        <form class="billing_details_form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Select a country">Select a country</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="first_name" value="" placeholder="First name"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="last_name" value="" placeholder="Last name"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value="" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value=""
                                            placeholder="Appartment, unit, etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Town/City" value="" placeholder="Town / City"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="State" value="" placeholder="State"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="email" type="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                            required="" placeholder="Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <textarea placeholder="Type your note" name="form_order_notes"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checked-box">
                                        <input type="checkbox" name="skipper1" id="skipper" checked="">
                                        <label for="skipper"><span></span>Create an account?</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_details_form-btns">
                                        <div class="billing_details_form-btn-1">
                                            <button type="submit" class="thm-btn">Continue Shopping <span
                                                    class="icon-right-arrow"></span>
                                            </button>
                                        </div>
                                        <div class="billing_details_form-btn-2">
                                            <button type="submit" class="thm-btn">Return To Cart<span
                                                    class="icon-right-arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="sidebar-order-summary">
                        <div class="title-box">
                            <h3>Your Order</h3>
                        </div>

                        <ul class="sidebar-order-summary__list list-unstyled">
                            <li>
                                <div class="left-text">
                                    <p>Bolt Sweatshirt</p>
                                </div>

                                <div class="right-text">
                                    <p>$88.00</p>
                                </div>
                            </li>

                            <li>
                                <div class="left-text">
                                    <p>Cock Kat Kitten <br> Milk X 02</p>
                                </div>

                                <div class="right-text">
                                    <p>$188.00</p>
                                </div>
                            </li>

                            <li>
                                <div class="left-text">
                                    <p>Sub total</p>
                                </div>

                                <div class="right-text">
                                    <p>$288.00</p>
                                </div>
                            </li>

                            <li>
                                <div class="left-text">
                                    <p>Shipping</p>
                                </div>

                                <div class="right-text">
                                    <ul>
                                        <li>
                                            <input type="radio" id="flat" name="rating" checked="checked">
                                            <label for="flat">
                                                <i></i>
                                                Flat Rate: $9.00
                                            </label>
                                        </li>

                                        <li>
                                            <input type="radio" id="free" name="rating">
                                            <label for="free">
                                                <i></i>
                                                Free Shipping
                                            </label>
                                        </li>

                                        <li>
                                            <input type="radio" id="local" name="rating">
                                            <label for="local">
                                                <i></i>
                                                Local Pickup
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="left-text">
                                    <p>Total</p>
                                </div>

                                <div class="right-text">
                                    <p>$388.00</p>
                                </div>
                            </li>
                        </ul>

                        <div class="sidebar-order-summary__Payment">
                            <div class="title-box">
                                <h3>Payment Method</h3>
                            </div>

                            <div class="checkout__payment">
                                <div class="checkout__payment__item checkout__payment__item--active">
                                    <h3 class="checkout__payment__title">Direct bank transfer</h3>
                                    <div class="checkout__payment__content">
                                        A Direct Bank Transfer is a method of sending money from one
                                        bank account to another without using cash, checks, or third-party payment
                                        services.
                                    </div>
                                </div>
                                <div class="checkout__payment__item">
                                    <h3 class="checkout__payment__title">Paypal payment</h3>
                                    <div class="checkout__payment__content">
                                        PayPal is an online payment system that allows users to send and receive
                                        money securely. It supports personal and business transactions, including
                                        shopping, invoicing, and international transfers.
                                    </div>
                                </div>
                                <div class="checkout__payment__item">
                                    <h3 class="checkout__payment__title">Cheque Payment</h3>
                                    <div class="checkout__payment__content">
                                        A cheque payment is a written, dated, and signed document that instructs a
                                        bank to pay a specific amount of money from the issuer’s account to the
                                        payee.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-order-summary__bottom">
                            <p class="text1">your personal data will be used to process your order your support
                                experience throughout this website and for other purposes described in our <a
                                    href="#">privacy policy</a></p>

                            <div class="sidebar-order-summary__checked">
                                <input type="checkbox" name="skipper1" id="skipper2" checked="">
                                <label for="skipper2"><span></span>I have read and agree to the website <a
                                        href="#">terms and conditions</a></label>
                            </div>

                            <div class="sidebar-order-summary__btn">
                                <a class="thm-btn" href="{{ route('checkout') }}">Place your order <span
                                        class="icon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Checkout Page-->

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
