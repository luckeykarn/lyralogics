@extends('layouts.layout4')
@section('title', 'Product Details || LyraLogics || IT Solutions & Technology  ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/shop.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Product Details" subtitle="Product Details" />


    <!--Page Header End-->

    <!--Start Product Details-->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="product-details__left">
                        <div class="product-details__left-inner">
                            <div class="product-details__content-box">
                                <div class="swiper-container" id="shop-details-one__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-details__img">
                                                <img src="{{ asset('assets/images/shop/product-details-img-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="product-details__img">
                                                <img src="{{ asset('assets/images/shop/product-details-img-2.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="product-details__img">
                                                <img src="{{ asset('assets/images/shop/product-details-img-3.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                                <div class="product-details__nav">
                                    <div class="swiper-button-prev" id="product-details__swiper-button-next">
                                        <i class="icon-left-arrow"></i>
                                    </div>
                                    <div class="swiper-button-next" id="product-details__swiper-button-prev">
                                        <i class="icon-right-arrow"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details__thumb-box">
                                <div class="swiper-container" id="shop-details-one__thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-details__thumb-img">
                                                <img src="{{ asset('assets/images/shop/product-details-thumb-img-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="product-details__thumb-img">
                                                <img src="{{ asset('assets/images/shop/product-details-thumb-img-2.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="product-details__thumb-img">
                                                <img src="{{ asset('assets/images/shop/product-details-thumb-img-3.png') }}"
                                                    alt="">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <div class="product-details__right">
                        <div class="product-details__top">
                            <h3 class="product-details__title">
                                3d rendering metallic ai <span>$86.00</span>
                            </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="icon-pointed-star"></i>
                            <i class="icon-pointed-star"></i>
                            <i class="icon-pointed-star"></i>
                            <i class="icon-pointed-star"></i>
                            <i class="icon-pointed-star"></i>
                            <span>55 customer reviews</span>
                        </div>
                        <div class="product-details__content">
                            <p class="product-details__content-text1">The power to be found between the pages of a
                                book
                                is formidable, indeed. And these 80 inspiring quotes about books and importance of
                                reading are here to remind you of that. From beloved bestsellers to iconic
                                celebrities,
                                these quotes exemplify the benefits of reading and of a good books to comfort,
                                challenge, and inspire you.</p>
                            <p class="product-details__content-text2">REF. 4231/406 <br>
                                Available in store</p>
                        </div>
                        <div class="product-details__select">
                            <div class="product-details__select-size">
                                <h3>Size:</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="radio" id="size1" name="rating" checked="checked">
                                        <label for="size1">
                                            <i></i>
                                            <span>XXL</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size2" name="rating">
                                        <label for="size2">
                                            <i></i>
                                            <span>XL</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size3" name="rating">
                                        <label for="size3">
                                            <i></i>
                                            <span>XS</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size4" name="rating">
                                        <label for="size4">
                                            <i></i>
                                            <span>M</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size5" name="rating">
                                        <label for="size5">
                                            <i></i>
                                            <span>L</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size6" name="rating">
                                        <label for="size6">
                                            <i></i>
                                            <span>S</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details__inner">
                            <div class="product-details__quantity">
                                <h3 class="product-details__quantity-title">Quantity</h3>
                                <div class="quantity-box">
                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                    <input type="number" id="1" value="1" />
                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="product-details__buttons-boxes">
                                <div class="product-details__buttons-1">
                                    <a href="{{ route('wishlist') }}" class="thm-btn">Add to
                                        Wishlist<span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                                <div class="product-details__buttons-2">
                                    <a href="{{ route('cart') }}" class="thm-btn">Add to
                                        Cart<span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__social">
                            <div class="title">
                                <h3>Share with friends:</h3>
                            </div>
                            <div class="product-details__social-link">
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-facebook"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Product Details-->


    <!--Shop Details Start-->
    <section class="product-description">
        <div class="container">
            <div class="product-details__description">
                <div class="product-details__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#description" class="tab-btn active-btn"><span>Description</span></li>
                        <li data-tab="#additional-information" class="tab-btn"><span>Additional
                                information</span></li>
                        <li data-tab="#reviews" class="tab-btn"><span>Reviews (1)</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="description">
                            <div class="product-details__tab-content-inner">
                                <div class="product-details__description-content">
                                    <p class="product-details__description-text-1">I must explain to you how all
                                        this mistaken idea of denouncing pleasure and praising pain was born and
                                        I will give you a complete account of the system, and expound the actual
                                        teachings of the great explorer of the truth, the master-builder of
                                        human happiness. No one rejects, dislikes, or avoids pleasure itself,
                                        because it is pleasure, but because those who do not know how to pursue
                                        pleasure rationally encounter consequences</p>
                                    <div class="product-description__list">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><span class="icon-right-arrow"></span> Nam at elit nec neque
                                                    suscipit gravida.</p>
                                            </li>
                                            <li>
                                                <p><span class="icon-right-arrow"></span> Aenean egestas orci eu
                                                    maximus tincidunt.</p>
                                            </li>
                                            <li>
                                                <p><span class="icon-right-arrow"></span> Curabitur vel turpis id
                                                    tellus cursus laoreet.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="product-details__description-text-2">Quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia
                                        deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                        nobis est eligendi optio cumque nihil impedit quo</p>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="additional-information">
                            <div class="product-details__tab-content-inner">
                                <div class="product-details__additional-information-content">
                                    <p class="product-details__additional-information-text-1">Lorem ipsum dolor sit
                                        amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of
                                        passages of Lorem Ipsum available, but the majority have alteration in some
                                        injected or words which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                        anything embarrang hidden in the middle of text.</p>
                                    <p class="product-details__additional-information-text-2">Quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in
                                        culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                        fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                        quo</p>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="reviews">
                            <div class="product-details__tab-content-inner">
                                <!--Review One Start-->
                                <div class="review-one">
                                    <div class="comments-area">
                                        <div class="review-one__title">
                                            <h3>2 Reviews</h3>
                                        </div>
                                        <!--Start Comment Box-->
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <figure class="thumb"><img
                                                            src="{{ asset('assets/images/shop/review-1-1.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>

                                                <div class="review-one__content">
                                                    <div class="review-one__content-top">
                                                        <div class="info">
                                                            <h2>Kevin martin <span>20 Oct, 2022 . 4:00
                                                                    pm</span></h2>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="review-one__content-bottom">
                                                        <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci
                                                            phaedrum. There are many variations of passages of Lorem
                                                            Ipsum available, but the majority have alteration in
                                                            some injected or words which don't look even slightly
                                                            believable. If you are going to use a passage of Lorem
                                                            Ipsum, you need to be sure there isn't anything
                                                            embarrang hidden in the middle of text.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Comment Box-->

                                        <!--Start Comment Box-->
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <figure class="thumb"><img
                                                            src="{{ asset('assets/images/shop/review-1-2.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>

                                                <div class="review-one__content">
                                                    <div class="review-one__content-top">
                                                        <div class="info">
                                                            <h2>Sarah albert <span>20 Oct, 2022 . 4:00
                                                                    pm</span></h2>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="review-one__content-bottom">
                                                        <p>It has survived not only five centuries, but also
                                                            the leap into electronic
                                                            typesetting unchanged. It was popularised in the
                                                            sheets containing lorem ipsum
                                                            is simply free text. Class aptent taciti
                                                            sociosqu ad litora torquent per conubia
                                                            nostra, per inceptos himenaeos. Vestibulum
                                                            sollicitudin varius mauris non
                                                            dignissim.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Comment Box-->
                                    </div>
                                </div>
                                <!--Review One End-->

                                <!--Start Review Form-->
                                <div class="review-form-one">
                                    <div class="review-form-one__inner">
                                        <h3 class="review-form-one__title">Add a review</h3>
                                        <div class="review-form-one__rate-box">
                                            <p class="review-form-one__rate-text">Rate this product?</p>
                                            <div class="review-form-one__rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <form action="assets/inc/sendemail.php"
                                            class="review-form-one__form contact-form-validated" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="review-form-one__input-box text-message-box">
                                                        <textarea name="message" placeholder="Write a comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="review-form-one__input-box">
                                                        <input type="text" placeholder="Your name" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="review-form-one__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <button type="submit" class="thm-btn review-form-one__btn">Submit a
                                                        review <span class="icon-right-arrow"></span></button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="result"></div>
                                    </div>
                                </div>
                                <!--End Review Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shop Details End-->

    <!-- Start Related Products -->
    <section class="related-products">
        <div class="container">
            <div class="related-products__title">
                <h3>Related Products</h3>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
            <div class="row">
                <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1">
                    <!--Product All Single Start-->
                    <div class="item">
                        <div class="single-product-style1">
                            <div class="single-product-style1__img">
                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}" alt="">
                                <img src="{{ asset('assets/images/shop/shop-product-1-1.png') }}" alt="">
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
                    <div class="item">
                        <div class="single-product-style1">
                            <div class="single-product-style1__img">
                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}" alt="">
                                <img src="{{ asset('assets/images/shop/shop-product-1-2.png') }}" alt="">
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
                    <div class="item">
                        <div class="single-product-style1">
                            <div class="single-product-style1__img">
                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}" alt="">
                                <img src="{{ asset('assets/images/shop/shop-product-1-3.png') }}" alt="">
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
                    <div class="item">
                        <div class="single-product-style1">
                            <div class="single-product-style1__img">
                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}" alt="">
                                <img src="{{ asset('assets/images/shop/shop-product-1-4.png') }}" alt="">
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Related Products -->

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
