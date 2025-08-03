@extends('layouts.layout4')
@section('title', 'Blog Carousel || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Blog Carousel" subtitle="Blog Carousel" />


        <!--Page Header End-->

        <!--Blog Carousel Page Start-->
        <section class="blog-carousel-page">
            <div class="blog-page__shape-1"></div>
            <div class="blog-page__shape-2"></div>
            <div class="container">
                <div class="blog-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-1.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-1.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Alisa Olivia</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April 5,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top IT Trends Shaping the Future
                                        of Business in 2025</a></h3>
                                <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                    sensitive information and defend against evolving cyber threats.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-2.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-2.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Alisa Olivia</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April 5,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cybersecurity Best Practices
                                        Protecting Your Data </a></h3>
                                <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                    sensitive information and defend against evolving cyber threats.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-3.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-3.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Thomas Alison</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March 15,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>88 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud Computing vs. On-Premise
                                        Solutions Which is Right for You?</a></h3>
                                <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                    sensitive information and defend against evolving cyber threats.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-4.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-4.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Olivia Emma.</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March 3,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>20 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">The Role of AI in Modern
                                        Solutions Transforming Industries</a></h3>
                                <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                    sensitive information and defend against evolving cyber threats.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-5.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-5.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Emily Roberts</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>February
                                            20, 2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>80 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top IT Trends in 2025: What
                                        Businesses Need to Know</a></h3>
                                <p class="blog-one__text">Explore the latest innovations in IT, including AI,
                                    cybersecurity, and cloud computing, and how they can benefit your business.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-6.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-6.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Thomas Alison</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March 15,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>88 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud Computing vs. On-Premise
                                        Solutions Which is Right for You?</a></h3>
                                <p class="blog-one__text">Explore essential cybersecurity strategies to safeguard
                                    sensitive information and defend against evolving cyber threats.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-7.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-7.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">David Johnson</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March 5,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>45 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Why Cybersecurity Should Be Your
                                        Top Priority in 2025</a></h3>
                                <p class="blog-one__text">Learn how to protect your business from cyber threats with the
                                    latest security solutions, best practices..</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-8.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-8.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">Jessica Martinez </p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>April 1,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>45 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cloud vs. On-Premise: Which IT
                                        Infrastructure Is Right for You?</a></h3>
                                <p class="blog-one__text"> A detailed comparison of cloud and on-premise solutions to
                                    help businesses choose the best IT infrastructure.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-page-1-9.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Digital</span>
                                    <span>Technology</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__user">
                                    <div class="blog-one__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-page-user-9.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-one__user-title">David Johnson</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>February
                                            15, 2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>45 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">How Managed IT Services Can
                                        Reduce Costs</a></h3>
                                <p class="blog-one__text">Find out how outsourcing IT services can help businesses cut
                                    costs, improve efficiency, and focus on core.</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">Reed More<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single Start -->
                </div>
            </div>
        </section>
        <!--Blog Carousel Page End-->



        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection