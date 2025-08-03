@extends('layouts.layout4')
@section('title', 'Services || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Our Services" subtitle="Our Services" />


        <!--Page Header End-->

        <!-- Services Two Start -->
        <section class="services-two">
            <div class="services-two__shape-1"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">Our Services</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <h2 class="section-title__title title-animation">Your Business with Cutting-Edge IT<br>
                            Solutions <img src="{{ asset('assets/images/services/section-title-img.jpg') }}" alt="">
                            <span>Innovative IT Services</span><br><span>Tailored for Your Success</span>
                        </h2>
                    </div>
                    <div class="services-two__round-text-box">
                        <div class="services-two__round-text-box-inner">
                            <div class="services-two__curved-circle">
                                View All Project View All Services
                            </div>
                            <div class="services-two__round-icon">
                                <img src="{{ asset('assets/images/icon/services-two-round-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-two__bottom">
                    <div class="services-two__services-list">
                        <div class="services-two__services-list-single services-two__services-list-single-1">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="{{ route('advanced-technology') }}">Software Development
                                        <br> Solutions</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="icon-plus"></span>UI/UX Design</p>
                                        <p><span class="icon-plus"></span>Mobile Application</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Mobile Application</p>
                                        <p><span class="icon-plus"></span>Research</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Research</p>
                                        <p><span class="icon-plus"></span>UI/UX Design</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('assets/images/services/services-2-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="{{ route('data-protection-privacy') }}">Cybersecurity
                                        Risk
                                        <br> Management</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="icon-plus"></span>Security</p>
                                        <p><span class="icon-plus"></span>Performance</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Scalability</p>
                                        <p><span class="icon-plus"></span>Reliability</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Innovation</p>
                                        <p><span class="icon-plus"></span>Efficiency</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('assets/images/services/services-2-2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="{{ route('cloud-managed-services') }}">Cloud Solutions
                                        <br> Provider</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="icon-plus"></span>Cloud Security</p>
                                        <p><span class="icon-plus"></span>Cloud Scalability</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Cloud Integration</p>
                                        <p><span class="icon-plus"></span>Cloud Performance</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Cloud Backup</p>
                                        <p><span class="icon-plus"></span>Cloud Optimization</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('assets/images/services/services-2-3.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="{{ route('backup-recovery') }}">Data Analytics
                                        <br> Consulting</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="icon-plus"></span>Data Insights</p>
                                        <p><span class="icon-plus"></span>Predictive Analytics</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Big Data</p>
                                        <p><span class="icon-plus"></span>Business Intelligence</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-plus"></span>Data Visualization</p>
                                        <p><span class="icon-plus"></span>Data Strategy</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('assets/images/services/services-2-4.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Two End -->

        <!-- Services Four Start -->
        <section class="services-four">
            <div class="services-four__bg-shape float-bob-y"
                style="background-image: url({{ asset('assets/images/shapes/services-four-bg-shape.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="services-four__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/services/services-four-img-1.jpg') }}" alt="">
                                </div>
                                <div class="services-four__img-2">
                                    <img src="{{ asset('assets/images/services/services-four-img-2.jpg') }}" alt="">
                                    <div class="services-four__qualified-box">
                                        <div class="services-four__qualified-icon">
                                            <img src="{{ asset('assets/images/icon/services-four-qualified-icon.png') }}" alt="">
                                        </div>
                                        <h3 class="services-four__qualified-title">Qualified services</h3>
                                        <p class="services-four__qualified-text">Transform your <br>business with
                                            our<br>
                                            innovative</p>
                                    </div>
                                </div>
                                <div class="services-four__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-four-shape-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="services-four__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Services Features</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Supercharge<span>Your Business
                                    </span><br><span>Growth with Our </span>Cutting-Edge IT Solutions
                                </h2>
                            </div>
                            <p class="services-four__text">Transform your business with our innovative IT solutions,
                                tailored to address your unique challenges and drive growth in today’s digital
                                landscape.</p>
                            <ul class="services-four__points-box list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-technical-support"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Innovative IT Solutions</h4>
                                        <p>Stay ahead with cutting-edge technology tailored to your business needs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-real-estate-agency"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Innovative IT Solutions</h4>
                                        <p>Stay ahead with cutting-edge technology tailored to your business needs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Four End -->

        <!-- Contact One Start -->
        <section class="contact-one">
            <div class="contact-one__bg-shape"
                style="background-image: url({{ asset('assets/images/shapes/contact-one-bg-shape.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="contact-one__left-shape-1"></div>
                            <div class="contact-one__left-shape-2"></div>
                            <h3 class="contact-one__from-title">How Can We Help You?</h3>
                            <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
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
                                            <input type="email" name="email" placeholder="thomas@domain.com"
                                                required="">
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
                                                    <option selected="selected">Thomas Alison
                                                    </option>
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
                            </form>
                            <div class="result"></div>
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
                                        <p>1629 N. Dixie Avenue,
                                            <br> Kentucky, 42701</p>
                                    </div>
                                </li>
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
        <!-- Contact One End -->

        <!-- Process One Start -->
        <section class="process-one">
            <div class="process-one__shape-1">
                <img src="{{ asset('assets/images/shapes/process-one-shape-1.png') }}" alt="">
            </div>
            <div class="process-one__shape-2"></div>
            <div class="process-one__shape-3"></div>
            <div class="process-one__bg-shape"
                style="background-image: url({{ asset('assets/images/shapes/process-one-bg-shape.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="process-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Working Process</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">How We've
                                    <span>Empowered</span><br><span>Businesses with Innovative</span><br>Tech Solutions
                                </h2>
                            </div>
                            <p class="process-one__text">From personalized solutions to expert<br> execution, we
                                prioritize
                                quality, reliability, and<br> customer satisfaction </p>
                            <div class="process-one__btn-box">
                                <a href="#" class="thm-btn">Get in Touch<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="process-one__right">
                            <ul class="process-one__process-list list-unstyled">
                                <li>
                                    <div class="process-one__process-count"></div>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Discovery & Strategy</h3>
                                        <p class="process-one__process-text">We analyze your business needs,<br>
                                            identify
                                            challenges, and craft a<br> strategic roadmap for the best IT<br> solutions.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Development</h3>
                                        <p class="process-one__process-text">Our expert team designs, develops,<br> and
                                            integrates cutting-edge<br> technology tailored to your goals.</p>
                                    </div>
                                    <div class="process-one__process-count"></div>
                                </li>
                                <li>
                                    <div class="process-one__process-count"></div>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Optimization & Support</h3>
                                        <p class="process-one__process-text">We ensure seamless performance with<br>
                                            continuous improvements,<br> maintenance, and dedicated support.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process One End -->

        <!-- Pricing Two Start -->
        <section class="pricing-two">
            <div class="pricing-two__sec-shape-1"></div>
            <div class="pricing-two__sec-shape-2"></div>
            <div class="pricing-two__sec-shape-3"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Pricing & Plan</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Select the Perfect
                        <span>Plan for Your</span><br><span>Needs That Fits You</span>
                    </h2>
                </div>
                <div class="pricing-two__main-tab-box tabs-box">
                    <ul class="tab-buttons list-unstyled">
                        <li data-tab="#monthly" class="tab-btn"><span>Monthly</span>
                        </li>
                        <li data-tab="#yearly" class="tab-btn active-btn"><span>Yearly</span></li>
                        <li data-tab="#packges" class="tab-btn"><span>Packges</span></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab" id="monthly">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
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
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="yearly">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
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
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="packges">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
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
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}" alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
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
                                                    <p>website Design & Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Two End -->

        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection