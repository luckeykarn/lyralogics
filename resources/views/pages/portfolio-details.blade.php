@extends('layouts.layout4')
@section('title', 'Portfolios Details || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Portfolios Details" subtitle="Portfolios Details" />


        <!--Page Header End-->

        <!--Portfolios Details Start-->
        <section class="portfolio-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-details__top">
                            <div class="portfolio-details__title-and-social">
                                <h3 class="portfolio-details__top-title">Future-Ready IT Solutions for<br> Every
                                    Industry
                                </h3>
                                <div class="portfolio-details__social-box">
                                    <p>Share now</p>
                                    <div class="portfolio-details__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-details__get-touch">
                                <a href="#">Get in touch<span class="icon-right-up"></span></a>
                                <div class="portfolio-details__get-touch-shape"></div>
                            </div>
                        </div>
                        <div class="portfolio-details__portfolio-list-inner">
                            <ul class="portfolio-details__portfolio-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-add-friend"></span>
                                    </div>
                                    <div class="content">
                                        <span>Clients</span>
                                        <p>Innovate Interiors<br> group</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-earning"></span>
                                    </div>
                                    <div class="content">
                                        <span>Budget</span>
                                        <p>$10,000.00 USD </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <span>Locations</span>
                                        <p>1234 Innovation<br> Street</p>
                                    </div>
                                </li>
                            </ul>
                            <ul
                                class="portfolio-details__portfolio-list portfolio-details__portfolio-list-2 list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-real-estate-agency"></span>
                                    </div>
                                    <div class="content">
                                        <span>Industries</span>
                                        <p>real Estate Agency</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-calendar"></span>
                                    </div>
                                    <div class="content">
                                        <span>Projects End</span>
                                        <p>September 21, 2025 </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="portfolio-details__portfolio-page list-unstyled">
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <h4 class="portfolio-details__title-1">Project Overviews</h4>
                                    <p class="portfolio-details__text-1">In today's fast-evolving digital landscape,
                                        businesses need innovative and scalable IT solutions to stay ahead. Our project
                                        delivers cutting-edge technology tailored for various industries, ensuring
                                        seamless
                                        operations, enhanced security, and optimal performance. From cloud computing and
                                        AI-driven automation to cybersecurity and enterprise software, we provide
                                        future-proof solutions that empower businesses to thrive in a competitive world.
                                        Whether you're in healthcare, finance, retail, or manufacturing, our IT
                                        expertise
                                        helps you drive efficiency, innovation, and growth.</p>
                                    <div class="portfolio-details__img-1">
                                        <img src="{{ asset('assets/images/project/portfolio-details-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <h4 class="portfolio-details__title-2">Future-Ready IT Solutions for Every Industry
                                    </h4>
                                    <p class="portfolio-details__text-2">In an era where digital transformation is
                                        essential
                                        for business success, our project focuses on delivering scalable, secure, and
                                        cutting-edge IT solutions tailored to diverse industries. We help businesses
                                        harness
                                        the power of cloud computing, artificial intelligence (AI), automation,
                                        cybersecurity, and enterprise software to stay ahead of the competition. </p>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <div class="portfolio-details__points-box-two">
                                        <div class="portfolio-details__points-two">
                                            <div class="portfolio-details__points-two-single">
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Cloud Solu tions – Scalable and secure<br> cloud infrastructures for
                                                    seamless<br>
                                                    operations.</p>
                                            </div>
                                            <div class="portfolio-details__points-two-single">
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Cybersecurity – Advanced security<br> solutions to protect against
                                                    cyber
                                                    threats</p>
                                            </div>
                                            <div class="portfolio-details__points-two-single">
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>IT Consulting & Support – Expert guidance<br> to optimize IT
                                                    infrastructure
                                                    and<br> workflows.</p>
                                            </div>
                                        </div>
                                        <div class="portfolio-details__points-two">
                                            <div class="portfolio-details__points-two-single">
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>AI & Automation – Smart automation tools<br> that enhance
                                                    productivity
                                                    and
                                                    decision-<br>making.</p>
                                            </div>
                                            <div class="portfolio-details__points-two-single">
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Software Development – Tailor-<br>made software solutions for
                                                    industry-<br>specific needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <div class="portfolio-details__img-box">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="portfolio-details__img-box-img">
                                                    <img src="{{ asset('assets/images/project/portfolio-details-img-box-img-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="portfolio-details__img-box-img">
                                                    <img src="{{ asset('assets/images/project/portfolio-details-img-box-img-2.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="portfolio-details__img-box-img">
                                                    <img src="{{ asset('assets/images/project/portfolio-details-img-box-img-3.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <h4 class="portfolio-details__title-3">Case Study:</h4>
                                    <p class="portfolio-details__text-3">In an era where digital transformation is
                                        essential
                                        for business success, our project focuses on delivering scalable, secure, and
                                        cutting-edge IT solutions tailored to diverse industries. We help businesses
                                        harness
                                        the power of cloud computing, artificial intelligence (AI), automation,
                                        cybersecurity, and enterprise software to stay ahead of the competition. </p>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <div class="portfolio-details__portfolio-list-three">
                                        <div class="portfolio-details__portfolio-list-three-single">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Cloud-Based Inventory System </h5>
                                                <p>Real-time stock updates across all stores and online platforms.</p>
                                            </div>
                                        </div>
                                        <div class="portfolio-details__portfolio-list-three-single">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Cloud-Based Inventory System </h5>
                                                <p>Optimized stock replenishment based on purchasing trends.</p>
                                            </div>
                                        </div>
                                        <div class="portfolio-details__portfolio-list-three-single">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Personalized Customer Engagement</h5>
                                                <p>AI-driven product recommendations and loyalty programs.</p>
                                            </div>
                                        </div>
                                        <div class="portfolio-details__portfolio-list-three-single">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h5>Personalized Customer Engagement</h5>
                                                <p>AI-driven product recommendations and loyalty programs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <div class="portfolio-details__img-box-2">
                                        <img src="{{ asset('assets/images/project/portfolio-details-img-box-2-img.jpg') }}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-details__count"></div>
                                <div class="portfolio-details__portfolio-content">
                                    <p class="portfolio-details__text-4">By integrating future-ready technologies, we
                                        ensure
                                        businesses remain agile, efficient, and secure in an ever-changing digital
                                        world.
                                        Whether you’re a startup, SME, or enterprise, our end-to-end IT solutions will
                                        help
                                        you achieve sustainable growth and innovation.</p>
                                    <p class="portfolio-details__text-5">By integrating AI and cloud computing, we
                                        helped
                                        the retailer streamline operations, reduce costs, and enhance customer
                                        experiences.
                                        This transformation positioned them for long-term growth in an increasingly
                                        digital
                                        market.</p>
                                    <p class="portfolio-details__text-6">🚀 Empower your business with the technology of
                                        tomorrow—today!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolios Details End-->



        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection