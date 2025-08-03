@extends('layouts.layout4')
@section('title', 'Team Carousel || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Team Carousel" subtitle="Team Carousel" />


        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="team-carousel-page">
            <div class="container">
                <div class="team-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Team One Single Start-->
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <!--Team One Single Start-->
                    <div class="item">
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
                </div>
            </div>
        </section>
        <!--Team Page End-->


        <!-- Newsletter Two Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection