@extends('layouts.layout4')
@section('title', 'Team Details || LyraLogics || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/skill.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Team Details" subtitle="Team Details" />


    <!--Page Header End-->

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__left">
                        <div class="team-details__img-box">
                            <div class="team-details__img">
                                <img src="{{ asset('assets/images/team/team-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="team-details__experience-box">
                                <div class="team-details__experience-icon">
                                    <img src="{{ asset('assets/images/icon/team-details-experience-icon.png') }}"
                                        alt="">
                                </div>
                                <h3 class="team-details__experience-title">12 Years <br>Experience</h3>
                                <p class="team-details__experience-text">crafting intuitive</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <h3 class="team-details__title">David Smith</h3>
                        <p class="team-details__sub-title">Professional UI/UX Design</p>
                        <p class="team-details__text">David Smith is a seasoned UI/UX designer with a keen eye for
                            detail and a passion for crafting seamless digital experiences. With years of experience
                            in user-centered design, he specializes in creating intuitive interfaces that enhance
                            usability and engagement.</p>
                        <div class="team-details__points-box">
                            <ul class="team-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Location</h5>
                                        <p>1629 N. Dixie Avenue,
                                            <br> Kentucky, 42701
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-graduation-cap"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Education</h5>
                                        <p>Tel: <a href="tel:1200456789000"> 12 (00) 456 7890 00</a></p>
                                        <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="team-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-contact"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Contact Info</h5>
                                        <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                        <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Office Time</h5>
                                        <p>Sunday - Friday</p>
                                        <p>10:00 AM - 5:00 PM</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details__social-box">
                            <p>Follow Me</p>
                            <div class="team-details__social-list">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-dribble"></span></a>

                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    <!--Skill One Start-->
    <section class="skill-one">
        <div class="skill-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/skill-one-shape-1.png') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="skill-one__left">
                        <h3 class="skill-one__title">Design Skills Hub</h3>
                        <p class="skill-one__text">Design Expertise – Proficient in crafting user-friendly, visually
                            appealing, and highly functional digital experiences. With a strong focus on usability,
                            accessibility, and modern design trends, David ensures seamless interactions that
                            enhance user engagement</p>
                        <ul class="skill-one__progress-list list-unstyled">
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">User research</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">Product Design</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="80%">
                                            <div class="count-text">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">Prototyep & Lunch</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="85%">
                                            <div class="count-text">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="skill-one__right">
                        <div class="skill-one__img">
                            <img src="{{ asset('assets/images/resources/skill-one-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Skill One End-->

    <!-- Team One Start -->
    <section class="team-one">
        <div class="team-one__shape-1">
            <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">
        </div>
        <div class="team-one__shape-2"></div>
        <div class="team-one__shape-3">
            <img src="{{ asset('assets/images/shapes/team-one-shape-3.png') }}" alt="">
        </div>
        <div class="team-one__shape-4"></div>
        <div class="team-one__shape-5">
            <img src="{{ asset('assets/images/shapes/team-one-shape-5.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Our Team Member</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">How We've
                    <span>Empowered Businesses</span><br><span>with Innovative</span> Tech Solutions
                </h2>
            </div>
            <div class="team-one__carousel owl-theme owl-carousel">
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
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
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
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
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
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Sophia Reynolds</a>
                                </h3>
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
            </div>
        </div>
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode-2">
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team One End -->


    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
