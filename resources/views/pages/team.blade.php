@extends('layouts.layout4')
@section('title', 'Team || LyraLogics || IT Solutions & Technology  ')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Team members" subtitle="Team members" />


        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="team-page">
            <div class="team-page__shape-1">
                <img src="{{ asset('assets/images/shapes/team-page-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">James Carter</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Michael Hayes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Emma Brooks </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="500ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-5.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Marketing Manager</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sarah Johnson </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-6.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Product Designer</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">David Matthews </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-7.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Sales Director</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Olivia Grace</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="800ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-8.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box-inner">
                                    <div class="team-one__social-box">
                                        <div class="team-one__social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>
                                        </div>
                                        <div class="team-one__social">

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow">
                                    <a href="{{ route('team-details') }}"><span class="icon-link"></span></a>
                                </div>
                                <div class="team-one__title-box">
                                    <p class="team-one__sub-title"><span></span>Operations Lead</p>
                                    <h3 class="team-one__title"><a href="{{ route('team-details') }}">Mitchell Marsh </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
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
        </section>
        <!--Team Page End-->



        <!-- Newsletter One Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection