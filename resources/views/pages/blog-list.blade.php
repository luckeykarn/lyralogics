@extends('layouts.layout4')
@section('title', 'Blog List || LyraLogics || IT Solutions & Technology  ')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Blog List" subtitle="Blog List" />


        <!--Page Header End-->

        <!--Blog List Start-->
        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-list__left">
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img">
                                    <img src="{{ asset('assets/images/blog/blog-list-1-1.jpg') }}" alt="">
                                    <div class="blog-list__tags">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <div class="blog-list__user">
                                        <div class="blog-list__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-user-1.jpg') }}" alt="">
                                        </div>
                                        <p class="blog-list__user-title">Thomas Alison</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March
                                                18, 2025</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>89
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Top IT Trends in 2025: What
                                            Businesses Need to Know</a></h3>
                                    <p class="blog-list__text">Understand the key differences between cloud-based and
                                        on-premise IT solutions to make the best choice for your business needs.</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single blog-list__single-2">
                                <div class="blog-list__content">
                                    <div class="blog-list__user">
                                        <div class="blog-list__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-user-2.jpg') }}" alt="">
                                        </div>
                                        <p class="blog-list__user-title">Mitchel Stack</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March
                                                18, 2025</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>89
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Why Cybersecurity Should Be
                                            Your Top Priority in 2025</a></h3>
                                    <p class="blog-list__text">Learn how to protect your business from cyber threats
                                        with the latest security solutions, best practices, and expert insights. </p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img">
                                    <img src="{{ asset('assets/images/blog/blog-list-1-2.jpg') }}" alt="">
                                    <div class="blog-list__tags">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <div class="blog-list__user">
                                        <div class="blog-list__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-user-3.jpg') }}" alt="">
                                        </div>
                                        <p class="blog-list__user-title">David Watson</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March
                                                15, 2025</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>60
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Cloud vs. On-Premise: Which
                                            IT Infrastructure Is Right for You?</a></h3>
                                    <p class="blog-list__text">A detailed comparison of cloud and on-premise solutions
                                        to help businesses choose the best IT infrastructure for their needs.</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img">
                                    <img src="{{ asset('assets/images/blog/blog-list-1-3.jpg') }}" alt="">
                                    <div class="blog-list__tags">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <div class="blog-list__user">
                                        <div class="blog-list__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-user-4.jpg') }}" alt="">
                                        </div>
                                        <p class="blog-list__user-title">Thomas Alison</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April
                                                1, 2025</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>45
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">The Role of AI in IT
                                            Support: Enhancing Efficiency and Security</a></h3>
                                    <p class="blog-list__text">Discover how artificial intelligence is transforming IT
                                        support by automating processes, improving security, and reducing downtime.</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <div class="blog-page__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="prev">
                                        <a href="#" aria-label="prev"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                    <li class="count active"><a href="#">01</a></li>
                                    <li class="count"><a href="#">02</a></li>
                                    <li class="count"><a href="#">...</a></li>
                                    <li class="count"><a href="#">10</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next"><span class="icon-left-arrow-1"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__search">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape"></div>
                                    <h3 class="sidebar__title">Search </h3>
                                </div>
                                <p class="sidebar__search-text">Search blogs to discover a vast world of online content
                                    on countless topics.</p>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search Blogs">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__category">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape"></div>
                                    <h3 class="sidebar__title">Category </h3>
                                </div>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="#">Web Design & Development <span>(15)</span></a></li>
                                    <li class="active"><a href="#">Products Design
                                            <span>(20)</span></a></li>
                                    <li><a href="#">Artificial Intelligence <span>(42)</span></a></li>
                                    <li><a href="#">Technology <span>(89)</span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__post">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape"></div>
                                    <h3 class="sidebar__title">Recent Post </h3>
                                </div>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/blog-lp-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>March 18,
                                                2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">Adapting to
                                                    Digital Marketing Trends: Staying Ahead</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/blog-lp-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>April 18,
                                                2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">Standing Out in
                                                    a Competitive Market: </a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/blog-lp-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jun 18,
                                                2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">The Importance
                                                    of Accurate Performance Reporting </a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tags">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape"></div>
                                    <h3 class="sidebar__title">Keywords </h3>
                                </div>
                                <ul class="sidebar__tags-list clearfix list-unstyled">
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Innovation</a></li>
                                    <li><a href="#">Analytics</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Innovation</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Ui Design</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__newsletter">
                                <div class="sidebar__title-box">
                                    <div class="sidebar__title-shape"></div>
                                    <h3 class="sidebar__title">Subscribe </h3>
                                </div>
                                <p class="sidebar__newsletter-text">Subscribe our newsletter to get everyday update
                                    about our blogs</p>
                                <form action="#" class="sidebar__newsletter-form">
                                    <div class="sidebar__newsletter-input">
                                        <div class="sidebar__newsletter-input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="search" placeholder="Email">
                                    </div>
                                    <button type="submit" class="thm-btn">Subcribe Now<i
                                            class="icon-right-arrow-1"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__client-info-box">
                                <div class="sidebar__client-img-box">
                                    <div class="sidebar__client-img">
                                        <img src="{{ asset('assets/images/blog/sidebar-client-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <h3 class="sidebar__client-title">Jordan M. Walk</h3>
                                <p class="sidebar__client-sub-title">Digital Marketer</p>
                                <p class="sidebar__client-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="sidebar__client-social-box">
                                    <p class="sidebar__client-social-title">Follow Me</p>
                                    <div class="sidebar__client-social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog List End-->



        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection