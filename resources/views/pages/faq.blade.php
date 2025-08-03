@extends('layouts.layout4')
@section('title', 'FAQ’s || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/skill.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/cta.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="FAQ’s" subtitle="FAQ’s" />


    <!--Page Header End-->

    <!--FAQ Page Start-->
    <section class="faq-two faq-page">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">FAQS</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Get answers to the most common<br> questions about
                    our products, services,<br> and policies.
                </h2>
            </div>
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
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>What IT services do you provide?</h4>
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
                            <h4>How do I get started with your IT solutions?</h4>
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
    </section>
    <!--FAQ Page End-->

    <!--CTA Two Start-->
    <section class="cta-two">
        <div class="cta-two__bg-color">
            <div class="cta-two__shape-1 img-bounce">
                <img src="{{ asset('assets/images/shapes/cta-two-shape-1.png') }}" alt="">
            </div>
            <div class="cta-two__shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/cta-two-shape-2.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="cta-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Get In Touch</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">If you have any questions,<br> please
                                contact us.
                            </h2>
                        </div>
                        <div class="cta-two__btn-box">
                            <a href="{{ route('contact') }}" class="thm-btn">Get in Touch<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="cta-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <h3 class="cta-two__title">Quick Support </h3>
                        <p class="cta-two__text">Get Instant and Reliable Support Anytime, Anywhere with Ease</p>
                        <ul class="cta-two__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                    <p><a href="mailto:support@domain.com">support@domain.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Contact</h4>
                                    <p>Tel: <a href="tel:1200456789000"> 12 (00) 456 7890 00</a></p>
                                    <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Two End-->


    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
