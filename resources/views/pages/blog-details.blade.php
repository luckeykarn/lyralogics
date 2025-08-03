@extends('layouts.layout4')
@section('title', 'Blog Details || LyraLogics || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header title="Blog Details" subtitle="Blog Details" />


        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="blog-details__shape-1">
                <img src="{{ asset('assets/images/shapes/blog-details-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ asset('assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="blog-details__single-content">
                                <div class="blog-details__user">
                                    <div class="blog-details__user-img">
                                        <img src="{{ asset('assets/images/blog/blog-details-user-1.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-details__user-title">Thomas Alison</p>
                                </div>
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="far fa-calendar-alt"></span>March
                                            18, 2025</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><span class="fal fa-comments"></span>89
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title"><a href="{{ route('blog-details') }}">Top IT Trends in 2025. What
                                        Businesses Need to Know</a></h3>
                                <p class="blog-details__text">Artificial Intelligence (AI) is set to revolutionize
                                    business operations in 2025, with automation playing a central role in improving
                                    efficiency, reducing costs, and enhancing decision-making. AI-driven tools are
                                    becoming more sophisticated, enabling businesses to automate repetitive tasks,
                                    personalize customer interactions, and optimize workflows.</p>
                            </div>
                            <div class="blog-details__content">
                                <h3 class="blog-details__title-1">Key Trends in AI & Automation:</h3>
                                <p class="blog-details__text-1">Creating a user-friendly website is crucial for engaging
                                    visitors and ensuring a positive user experience. In this blog post, we’ll explore
                                    key strategies.</p>
                                <ul class="blog-details__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p><span>AI-Powered Business Automation:</span> From chatbots handling<br>
                                            customer
                                            support to AI
                                            managing supply chains, businesses are<br> leveraging automation to
                                            streamline
                                            operations and reduce human<br> intervention.</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p><span>Generative AI in Marketing & Content Creation:</span> AI tools like
                                            TextCpg<br> and
                                            ImageJourney are transforming content production, enabling<br> businesses to
                                            generate high-quality marketing copy, images, and <br>videos faster.</p>
                                    </li>
                                </ul>
                                <div class="blog-details__img-box">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="blog-details__img-box-img">
                                                <img src="{{ asset('assets/images/blog/blog-details-img-box-img-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="blog-details__img-box-img">
                                                <img src="{{ asset('assets/images/blog/blog-details-img-box-img-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="blog-details__title-2">Cloud Computing & Edge Computing</h3>
                                <p class="blog-details__text-2">Shift from traditional cloud to hybrid and multi-cloud
                                    strategies. Edge computing gaining momentum for faster processing and reduced
                                    latency. The role of serverless computing in optimizing IT operations.</p>
                                <div class="blog-details__author-box">
                                    <div class="blog-details__author-quote">
                                        <img src="{{ asset('assets/images/icon/quote.png') }}" alt="">
                                    </div>
                                    <div class="blog-details__author-name-box">
                                        <span></span>
                                        <h4 class="blog-details__author-name">Jhon Smith</h4>
                                    </div>
                                    <p class="blog-details__author-text">“<br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
                                        “</p>
                                </div>
                                <h3 class="blog-details__title-3">Quantum Computing Breakthroughs</h3>
                                <p class="blog-details__text-3">ow quantum computing is shaping industries like finance,
                                    healthcare, and logistics. Businesses exploring quantum-safe encryption methods.
                                    Major players investing in quantum technology. Faster networks powering real-time
                                    applications, IoT, and smart cities.</p>
                                <div class="blog-details__points-and-img">
                                    <div class="blog-details__points-2">
                                        <ul class="blog-details__points-list-2 list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Demand for eco-friendly and carbon-<br>neutral IT solutions. </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Rise of energy-efficient data centers and<br> sustainable cloud
                                                    computing.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>How businesses can implement green IT <br>practices.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-details__points-img">
                                        <img src="{{ asset('assets/images/blog/blog-details-points-img.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-details__tag-and-share">
                                    <div class="blog-details__tag">
                                        <h3 class="blog-details__tag-title">Tags:</h3>
                                        <ul class="blog-details__tag-list list-unstyled">
                                            <li>
                                                <a href="#">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="#">Branding</a>
                                            </li>
                                            <li>
                                                <a href="#">SEO</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-details__share-box">
                                        <h3 class="blog-details__share-title">Follow Me:</h3>
                                        <div class="blog-details__share">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-dribble"></span></a>

                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details__prev-and-next">
                                    <div class="blog-details__prev-box">
                                        <div class="blog-details__prev-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-prev-image.jpg') }}" alt="">
                                        </div>
                                        <div class="blog-details__prev-content">
                                            <div class="blog-details__prev-arrow">
                                                <span class="icon-left-arrow"></span>
                                                <a href="#">Prev Blog</a>
                                            </div>
                                            <h4 class="blog-details__prev-title">What Businesses Need to<br> Know</h4>
                                        </div>
                                    </div>
                                    <div class="blog-details__next-box">
                                        <div class="blog-details__next-content">
                                            <div class="blog-details__next-arrow">
                                                <a href="#">Next Blog</a>
                                                <span class="icon-right-arrow"></span>
                                            </div>
                                            <h4 class="blog-details__next-title">Which IT Infrastructure Is<br> Right
                                                for You?</h4>
                                        </div>
                                        <div class="blog-details__next-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-next-image.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one">
                                    <h3 class="comment-one__title">Total Comments</h3>
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__single">
                                            <div class="comment-one__author-inner">
                                                <div class="comment-one__image">
                                                    <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                                </div>
                                                <h3>Mitchell Johnson</h3>
                                                <span> Aug 19, 2024</span>
                                            </div>
                                            <div class="comment-one__content">
                                                <p>AI-powered automation sounds like a game-changer, but I’m concerned
                                                    about
                                                    how it will impact jobs. Will AI replace human employees, or is
                                                    there a
                                                    way for businesses to integrate AI while still maintaining a strong
                                                    workforce?</p>
                                                <div class="comment-one__btn-box">
                                                    <a href="{{ route('blog-details') }}" class="comment-one__btn"><span
                                                            class="fas fa-share"></span>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__single">
                                            <div class="comment-one__author-inner">
                                                <div class="comment-one__image">
                                                    <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                                </div>
                                                <h3>David Andrew</h3>
                                                <span>Sep 20, 2024</span>
                                            </div>
                                            <div class="comment-one__content">
                                                <p>That’s a great point! While AI can enhance decision-making by
                                                    analyzing large datasets quickly, businesses should use it as a
                                                    supporting tool rather than a complete replacement</p>
                                                <div class="comment-one__btn-box">
                                                    <a href="{{ route('blog-details') }}" class="comment-one__btn"><span
                                                            class="fas fa-share"></span>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-one__single comment-one__single-3">
                                            <div class="comment-one__author-inner">
                                                <div class="comment-one__image">
                                                    <img src="{{ asset('assets/images/blog/comment-1-3.jpg') }}" alt="">
                                                </div>
                                                <h3>Alisa Olivia</h3>
                                                <span> Aug 19, 2024</span>
                                            </div>
                                            <div class="comment-one__content">
                                                <p>AI-powered automation sounds promising, but isn’t it risky to rely
                                                    too much on AI for decision-making?</p>
                                                <div class="comment-one__btn-box">
                                                    <a href="{{ route('blog-details') }}" class="comment-one__btn"><span
                                                            class="fas fa-share"></span>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <div class="contact-one__left">
                                        <div class="contact-one__left-shape-1"></div>
                                        <div class="contact-one__left-shape-2"></div>
                                        <h3 class="contact-one__from-title">How Can We Help You?</h3>
                                        <form class="contact-form-validated contact-one__form"
                                            action="assets/inc/sendemail.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <h4 class="contact-one__input-title">Full Name</h4>
                                                    <div class="contact-one__input-box">
                                                        <div class="contact-one__input-icon">
                                                            <span class="icon-user-1"></span>
                                                        </div>
                                                        <input type="text" name="name" placeholder="Thomas Alison"
                                                            required="">
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
                                                        <input type="text" name="Phone"
                                                            placeholder=" 12 (00) 123 4567 890" required="">
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
                                                    <textarea name="message"
                                                        placeholder="Write your message"></textarea>
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
        <!--Blog Details End-->

        <!-- Newsletter One Start -->
        

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection