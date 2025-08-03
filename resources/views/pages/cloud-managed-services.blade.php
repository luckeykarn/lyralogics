@extends('layouts.layout4')
@section('title', 'Cloud managed services || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Cloud Managed Services" subtitle="Cloud Managed Services" />


    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="services-details">
        <div class="services-details__shape-1"></div>
        <div class="services-details__shape-2">
            <img src="{{ asset('assets/images/shapes/services-details-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__left">
                        <div class="services-details__services-list-box">
                            <h3 class="services-details__services-list-title">More Services</h3>
                            <ul class="services-details__services-list list-unstyled">
                                <li>
                                    <a href="{{ route('threat-detection-prevention') }}">Threat Detection & Prevention<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('endpoint-device-security') }}">Endpoint & Device Security<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('data-protection-privacy') }}">Data Protection & Privacy<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('backup-recovery') }}">Backup & Recovery<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('advanced-technology') }}">Advanced Technology<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('cloud-managed-services') }}">Cloud managed services<span
                                            class="icon-right-arrow-2"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="services-details__need-help">
                            <div class="services-details__need-help-img">
                                <img src="{{ asset('assets/images/services/services-details-need-help-img.jpg') }}"
                                    alt="">
                                <div class="services-details__need-help-content">
                                    <div class="services-details__need-help-bdr"></div>
                                    <h3 class="services-details__need-help-title">Need Help?</h3>
                                    <p class="services-details__need-help-number"><a href="tel:1200345789034"> 12
                                            (00) 345 789034</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <h3 class="services-details__title-1">Innovative Strategies for Online Branding and Content
                            Marketing</h3>
                        <div class="services-details__bdr"></div>
                        <p class="services-details__text-1">This approach encompasses online branding, content
                            marketing, and SEO, offering customized solutions to drive impactful results and
                            long-term success in the digital landscape.</p>
                        <p class="services-details__text-2"> A full suite of services designed to enhance online
                            campaigns, boost audience engagement, and implement creative strategies tailored to meet
                            the unique needs of your brand.</p>
                        <div class="services-details__img-1">
                            <img src="{{ asset('assets/images/services/services-details-img-3.jpg') }}" alt="">
                        </div>
                        <h4 class="services-details__title-2">Services Core Features</h4>
                        <p class="services-details__text-3">Tailored marketing strategies aligned with your business
                            goals. Competitor analysis and market research for actionable insights. Roadmaps for
                            short-term campaigns and long-term growth. content creation and scheduling for maximum
                            engagement. Community management to interact with your audience.</p>
                        <div class="services-details__points-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="services-details__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>On-page and off-page optimization for better search rankings.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>Targeted ad campaigns on platforms like Google Ads, Facebook, and
                                                Instagram</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>Development of a unique tone of voice for your brand. Brand Identity
                                                Creation</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul
                                        class="services-details__points-list services-details__points-list--two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>Regular performance audits to stay ahead of competitors.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>Detailed reports on campaign performance and user engagement.</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>Insights-driven recommendations for continuous improvement.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="services-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="services-details__img-box-img">
                                        <img src="{{ asset('assets/images/services/services-details-img-box-img-1.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="services-details__img-box-img">
                                        <img src="{{ asset('assets/images/services/services-details-img-box-img-2.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="services-details__title-3">Your Partner in Digital Success</h4>
                        <p class="services-details__text-4">Our services go beyond traditional marketing—offering
                            innovative, data-driven, and tailored strategies to help your business thrive in the
                            digital landscape. With a team of experts committed to creativity, precision, and
                            measurable results, we deliver solutions that elevate your brand, engage your audience
                        </p>
                        <div class="services-details__points-box-2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="services-details__points-two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-idea"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Tailored Strategies</h5>
                                                <p>Customized marketing plans designed specifically for your
                                                    business goals and target audience.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-strategy"></span>
                                            </div>
                                            <div class="content">
                                                <h5>End-to-End Solutions</h5>
                                                <p>From brand identity to advertising and content creation, we cover
                                                    all aspects of digital marketing.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul
                                        class="services-details__points-two services-details__points-two--two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-target"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Data-Driven Decisions</h5>
                                                <p>Comprehensive analytics and insights to optimize campaigns and
                                                    ensure measurable results.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-transparency"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Transparent Reporting</h5>
                                                <p>Regular performance updates and easy-to-understand reports to
                                                    keep you informed every step of the way.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="services-details__bottom-img">
                            <img src="{{ asset('assets/images/services/services-details-bottom-img.jpg') }}"
                                alt="">
                        </div>
                        <h4 class="services-details__title-4">Get Started</h4>
                        <p class="services-details__text-5">Bring your vision to life with our tailored solutions,
                            creative strategies, and professional support. Whether you're launching a new brand,
                            enhancing your online presence, or driving growth, we provide the tools, expertise, and
                            guidance you need to achieve success. Let’s turn your ideas into reality today!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

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
                                <p><a href="tel:9900567780">99 (00) 567 780</a></p>
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

    <!-- Testimonial Two Start -->
    <section class="testimonial-two">
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

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
