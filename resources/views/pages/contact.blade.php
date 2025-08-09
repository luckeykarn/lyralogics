@extends('layouts.layout4')
@section('title', 'Contact Us || LyraLogics || IT Solutions & Technology  ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/skill.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Contact Us" subtitle="Contact Us" />


    <!--Page Header End-->

    <!-- Contact One Start -->
    <section class="contact-one">
        <div class="contact-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/contact-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="contact-one__left-shape-1"></div>
                        <div class="contact-one__left-shape-2"></div>
                        <h3 class="contact-one__from-title">How Can We Help You?</h3>
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"  method="post" novalidate="novalidate">
                            @csrf
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
                                        <input type="email" name="email" placeholder="thomas@domain.com" required="">
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
                                                <option selected="selected">Thomas Alison</option>
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
                            <div class="result mt-2">
                        </form>
                        </div>
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
                                    <p>4721 Rosebud Drive,
                                        <br> GA, Snellville , 30039
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
                                    <p><a href="mailto:ceo@lyralogics.com">ceo@lyralogics.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Contact</h4>
                                    <p>Tel: <a href="tel:6785236569"> +1 (678) 523 6569</a></p>
                                    <p>Mob: <a href="tel:6785236569"> +1 (678) 523 6569</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact One End -->

    <!--FAQ Two Start-->
    <section class="faq-two">
        <div class="faq-two__shape-1">
            <img src="{{ asset('assets/images/shapes/faq-two-shape-1.png') }}" alt="">
        </div>
        <div class="faq-two__shape-2">
            <img src="{{ asset('assets/images/shapes/faq-two-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">FAQS</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Frequently Asked
                                <span>Questions</span>
                            </h2>
                        </div>
                        <p class="faq-two__text">Get answers to the most common questions <br>about our products,
                            services, and policies.</p>
                        <div class="faq-two__bdr"></div>
                        <div class="faq-two__contact">
                            <div class="icon">
                                <span class="icon-customer-service-headset"></span>
                            </div>
                            <div class="content">
                                <span>Get Support</span>
                                <p><a href="tel:6785236569">+1 (678) 523 6569</a></p>
                            </div>
                        </div>
                        <div class="faq-two__btn-box">
                            <a href="#" class="thm-btn">Get in Touch<span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-two__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What services does your IT consultancy agency provide?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">We offer a wide range of IT consulting
                                            services, including software
                                            development, cloud computing solutions, cybersecurity, IT infrastructure
                                            management, and digital transformation strategies tailored to your
                                            business needs.</p>
                                        <p class="accrodion-content__text-2">Our IT consulting services help
                                            businesses improve efficiency, enhance
                                            security, reduce operational costs, and stay ahead of technology trends.
                                            We provide expert guidance to optimize your IT infrastructure and
                                            implement innovative solutions.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>How can IT consulting benefit my business?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">We offer a wide range of IT consulting
                                            services, including software
                                            development, cloud computing solutions, cybersecurity, IT infrastructure
                                            management, and digital transformation strategies tailored to your
                                            business needs.</p>
                                        <p class="accrodion-content__text-2">Our IT consulting services help
                                            businesses improve efficiency, enhance
                                            security, reduce operational costs, and stay ahead of technology trends.
                                            We provide expert guidance to optimize your IT infrastructure and
                                            implement innovative solutions.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you offer customized IT solutions?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">We offer a wide range of IT consulting
                                            services, including software
                                            development, cloud computing solutions, cybersecurity, IT infrastructure
                                            management, and digital transformation strategies tailored to your
                                            business needs.</p>
                                        <p class="accrodion-content__text-2">Our IT consulting services help
                                            businesses improve efficiency, enhance
                                            security, reduce operational costs, and stay ahead of technology trends.
                                            We provide expert guidance to optimize your IT infrastructure and
                                            implement innovative solutions.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How do you ensure data security and compliance?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="accrodion-content__text-1">We offer a wide range of IT consulting
                                            services, including software
                                            development, cloud computing solutions, cybersecurity, IT infrastructure
                                            management, and digital transformation strategies tailored to your
                                            business needs.</p>
                                        <p class="accrodion-content__text-2">Our IT consulting services help
                                            businesses improve efficiency, enhance
                                            security, reduce operational costs, and stay ahead of technology trends.
                                            We provide expert guidance to optimize your IT infrastructure and
                                            implement innovative solutions.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Two End-->

    <!--Google Map Start-->
    <section class="google-map-one">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619:0xba03efb7998eef6d!2sCostco Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>
        </div>
    </section>
    <!--Google Map End-->


    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
