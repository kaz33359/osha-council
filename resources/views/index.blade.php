<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/educator-fabicon-300x300.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css') }}">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/progressbar-fill-visible/css/progressBar.css') }}">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.css') }}">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/modal-video/modal-video.min.css') }}">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fancybox/dist/jquery.fancybox.min.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick/slick-theme.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <title>Home - OSHA COUNCIL</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="{{asset('assets/img/loader1.gif')}}" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <header class="site-header site-header-transparent">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <a href="tel:+01-977-2599-12"><i class="fas fa-phone-alt"></i> +01 (977) 2599 12</a>
                                    </li>
                                    <li>
                                        <a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection#a6c5c9cbd6c7c8dfe6c2c9cbc7cfc888c5c9cb"><i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="d1b2bebca1b0bfa891b5bebcb0b8bfffb2bebc">qwert@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> 3146 Koontz Lane, California
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                            <div class="header-social social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header" id="masthead">
                <div class="container">
                    <div class="hb-group d-flex align-items-center justify-content-between">
                        <div class="site-identity col-lg-3">
                            <p class="site-title">
                                <a href="{{ url('/') }}">
                                    <img src="{{asset('assets/img/educator-logo1.png')}}" alt="logo">
                                </a>
                            </p>
                        </div>
                        <div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
                            <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a href="{{ url('/about') }}">About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">30-Hours</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/general_safety') }}">General Safety</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/construction_and_safety') }}">Construction Safety</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/food_and_hygeine') }}">Food and Hygiene</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/environment_safety') }}">Environment Safety</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/fire_and_safety') }}">Fire and Safety</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/course') }}">Course</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ url('/verification') }}">Verification</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- <div class="header-btn d-inline-block">
                                <a href="{{ url('/contact') }}" class="button-round-secondary">JOIN US NOW</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        <main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner d-flex align-items-end">
                <div class="container">
                    <div class="row align-items-end">
                        <div class=" banner-left col-md-6">
                            <div class="image-overlay pattern-overlay"></div>
                            <div class="banner-content">
                                <div class="title-divider"></div>
                                <div class="banner-title">
                                    <h1>SAFETY COMES FIRST</h1>
                                </div>
                                <div class="banner-text">
                                    <h3 style="color: #F24080;">ARRIVE SAFE. <br> WORK SAFE. <br> GO HOME SAFE.</h3>
                                </div>
                                <div class="banner-button">
                                    <a href="{{ url('/contact') }}" class="button-round-secondary">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class=" banner-right col-md-6">
                            <figure class="banner-img">
                                <div class="image-overlay-oval pattern-overlay"></div>
                                <img src="{{asset('assets/img/pngwing.com (6).png')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="overlay-image pattern-overlay"></div>
            </section>
            <!-- home about section html start -->
            <section class="home-course-section">
                <div class="container">
                    <div class="overlay-wrapper">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="title-divider"></div>
                                <h2 class="section-title">Most Featured Courses</h2>
                                <p class="course-section-info">Epic Learning Journeys Start Here: Dive into Our Most Featured Courses!</p>
                            </div>
                        </div>
                        <div class="inner-course-wrap">
                            <div class="row d-flex justify-content-center justify-content-xl-start">
                                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                                    <article class="post">
                                        <figure class="feature-image">
                                            <img src="{{asset('assets/img/construction1.jpg')}}" alt="">
                                            <!-- <a href="course-detail.html" class="bookmark-icon">
                                                <i aria-hidden="true" class="far fa-bookmark"></i>
                                            </a> -->
                                        </figure>
                                        <div class="entry-content">
                                            <h4>
                                                <a href="{{ url('/certificates/certificate_in_general_industry') }}">Certificate in General Industry</a>
                                            </h4>
                                            <div class="rating-content">
                                                <span class="rating-info">(4.5 ratings)</span>
                                                <div class="rating-start-wrap">
                                                    <div class="rating-start">
                                                        <span style="width: 88%"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="author-content">
                                                <!-- <figure class="author-img">
                                                    <img src="assets/img/educator-img21.jpg" alt="">
                                                </figure>
                                                <h6 class="author-name">Prof. Sammy James</h6> -->
                                            </div>
                                            <div class="entry-meta">
                                                <span class="student-number">
                                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                                    60+ students
                                                </span>
                                                <a href="{{ url('/contact') }}">
                                                    ENROLL COURSE
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                                    <article class="post">
                                        <figure class="feature-image">
                                            <img src="{{asset('assets/img/construction3.jpg')}}" alt="">
                                            <!-- <a href="course-detail" class="bookmark-icon">
                                                <i aria-hidden="true" class="far fa-bookmark"></i>
                                            </a> -->
                                        </figure>
                                        <div class="entry-content">
                                            <h4>
                                                <a href="{{ url('/certificates/certificate_in_construction_industry') }}">Certificate in Construction Industry</a>
                                            </h4>
                                            <div class="rating-content">
                                                <span class="rating-info">(4 ratings)</span>
                                                <div class="rating-start-wrap">
                                                    <div class="rating-start">
                                                        <span style="width: 80%"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="author-content">
                                                <!-- <figure class="author-img">
                                                    <img src="assets/img/educator-img24.jpg" alt="">
                                                </figure>
                                                <h6 class="author-name">Prof. Alison White</h6> -->
                                            </div>
                                            <div class="entry-meta">
                                                <span class="student-number">
                                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                                    55+ students
                                                </span>
                                                <a href="{{ url('/contact') }}">
                                                    ENROLL COURSE
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                                    <article class="post">
                                        <figure class="feature-image">
                                            <img src="{{asset('assets/img/healthandenvirmnt.jpg')}}" alt="">
                                            <!-- <a href="course-detail.html" class="bookmark-icon">
                                                <i aria-hidden="true" class="far fa-bookmark"></i>
                                            </a> -->
                                        </figure>
                                        <div class="entry-content">
                                            <h4>
                                                <a href="{{ url('/certificates/certificate_hand_environment') }}">Certificate in Safety Health and Environment</a>
                                            </h4>
                                            <div class="rating-content">
                                                <span class="rating-info">(4.7 ratings)</span>
                                                <div class="rating-start-wrap">
                                                    <div class="rating-start">
                                                        <span style="width: 91%"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="author-content">
                                                <!-- <figure class="author-img">
                                                    <img src="assets/img/educator-img25.jpg" alt="">
                                                </figure>
                                                <h6 class="author-name">Prof. George Hobbs</h6> -->
                                            </div>
                                            <div class="entry-meta">
                                                <span class="student-number">
                                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                                    40+ students
                                                </span>
                                                <a href="{{ url('/contact') }}">
                                                    ENROLL COURSE
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="course-bhn">
                            <a href="course.html" class="button-round-primary">VIEW ALL COURSES</a>
                        </div>
                        <div class="overlay overlay-circle"></div>
                        <div class="pattern-overlay"></div>
                    </div>
                </div>
            </section>
            <!-- home fact section html start -->
            <!-- <section class="home-fact-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="fact-section-head">
                                <div class="title-divider"></div>
                                <h2 class="fact-section-title">Limitless Learning, Limitless Possibilities !</h2>
                                <p class="fact-section-info">
                                    Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumens.
                                </p>
                                <div class="fact-list">
                                    <ul>
                                        <li>Aliqua est exercitationem quod sunt ipsum dolor.</li>
                                        <li>Expedita fugiat earum, voluptatem init sec smithquas.</li>
                                        <li>Nam porro cumque justo quas jingle swatto sec.</li>
                                    </ul>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ url('/contact') }}" class="button-round-secondary">JOIN US NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fact-right-inner-wrap">
                                <div class="fact-inner-box">
                                    <div class="fact-content top-left-content">
                                        <div class="pattern-overlay circle-patten"></div>
                                        <h4>Our Expertise Is Best Earned Through
                                            Our Experience</h4>
                                    </div>
                                    <figure class="fact-image top-right-image"></figure>
                                    <figure class="fact-image bottom-left-image"></figure>
                                    <div class="fact-content bottom-right-content">
                                        <div class="pattern-overlay circle-c-patten"></div>
                                        <h4>Our Best Team For Your Any Advice For Your Education</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- home feature section html start -->
            <section class="home-feature-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="title-divider"></div>
                            <h2 class="feature-section-title text-center">Our Best Features</h2>
                            <p class="feature-section-info text-center">Unleash Your Best: Explore Our Finest Features Today!</p>
                        </div>
                    </div>
                    <div class="feature-wrapper">
                        <div class="feature-type">
                            <div class="feature-icon">
                                <h5 class="meta-no">1</h5>
                                <i aria-hidden="true" class="icon icon-atomic"></i>
                            </div>
                            <h4 class="feature-heading">Code of Ethics</h4>
                            <p class="feature-info">Act safely, Responsibly, Honerably, Honestly, Justly & Legally.Read Here Furthure About The OCHA COUNCIL Code of Conduct.</p>
                            <a href="{{ url('/contact') }}" class="right-arrow-link">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </a>
                        </div>
                        <div class="feature-type">
                            <div class="feature-icon">
                                <h5 class="meta-no">2</h5>
                                <i aria-hidden="true" class="icon icon-Money-2"></i>
                            </div>
                            <h4 class="feature-heading">Value of Certification</h4>
                            <p class="feature-info">Apart From Any Entry Into One of The Large Communities of recognized Safely Proffessionals In The World, know More About The value of a OSHA COUNCIL Certification.</p>
                            <a href="{{ url('/contact') }}" class="right-arrow-link">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </a>
                        </div>
                        <div class="feature-type">
                            <div class="feature-icon">
                                <h5 class="meta-no">3</h5>
                                <i aria-hidden="true" class="icon icon-management"></i>
                            </div>
                            <h4 class="feature-heading">Membership</h4>
                            <p class="feature-info">Know More About Becaming a member, Graduate to Different Levels of Membership & CPE.</p>
                            <a href="{{ url('/contact') }}" class="right-arrow-link">
                                <i aria-hidden="true" class="icon icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home team section html start -->
            <!-- home goal section html start -->
            <section class="home-goal-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="inner-goal-image">
                                <figure class="video-play-image">
                                    <img src="{{asset('assets/img/construction1.jpg')}}" alt="">
                                    <div class="overlay02 overlay"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="goal-content">
                                <div class="pattern-overlay"></div>
                                <div class="title-divider"></div>
                                <h2 class="goal-title">Committed To The Best Results !</h2>
                                <p class="goal-info">Infomation about this qualification, eligibility, career opportunities,topics covered in these modules and the framework.</p>
                                <a href="{{ url('/contact') }}" class="button-round-secondary">JOIN US NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home progress section html start -->
            <div class="home-progress-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="counter-inner">
                        <div class="counter-item-wrap row">
                            <div class="col-lg-3 col-sm-6 counter-item">
                                <div class="counter-no">
                                    <span class="counter">45</span>k+
                                </div>
                                <div class="Completed">
                                    Active Students
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 counter-item">
                                <div class="counter-no">
                                    <span class="counter">72</span>+
                                </div>
                                <div class="Completed">
                                    Faculty Courses
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 counter-item">
                                <div class="counter-no">
                                    <span class="counter">90</span>+
                                </div>
                                <div class="Completed">
                                    Best Professors
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 counter-item">
                                <div class="counter-no">
                                    <span class="counter">35</span>
                                </div>
                                <span class="Completed">
                                    Award Achieved
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- home testimonial section html start -->
            <section class="home-testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="title-divider-center"></div>
                            <h2 class="testimonial-section-title text-center">Review's From Students</h2>
                            <p class="testimonial-section-info text-center">Saepe quo labore aenean dictumst expedita commodi auctor, nisl, lorem iusto feugiat nemo reiciendis laboris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="client-content left-content">
                                <div class="pattern-overlay circle-patten"></div>
                                <p class="client-review">
                                    “Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumenda? Aute praesentium fugiat. Perspiciatis, ultrices deserunt convallis, eius at non.”
                                </p>
                                <div class="author-content">
                                    <div class="author-info">
                                        <h5 class="author-name">Jenny Wilson</h5>
                                        <span class="author-title">SCIENCE STUDENT</span>
                                    </div>
                                    <figure class="author-img">
                                        <img src="{{asset('assets/img/placeholdder1.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="client-content right-content">
                                <div class="pattern-overlay circle-patten"></div>
                                <p class="client-review">
                                    “Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumenda? Aute praesentium fugiat. Perspiciatis, ultrices deserunt convallis, eius at non.”
                                </p>
                                <div class="author-content">
                                    <div class="author-info">
                                        <h5 class="author-name">William Wright</h5>
                                        <span class="author-title">ART STUDENT</span>
                                    </div>
                                    <figure class="author-img">
                                        <img src="{{asset('assets/img/placeholder3.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="testimonial-btn text-center">
                        <a href="testimonial.html" class="button-round-primary">MORE REVIEWS NOW</a>
                    </div> -->
                </div>
            </section>
        </main>
        <!-- footer part -->
        <footer id="colophon" class="site-footer">
            <div class="footer-overlay"></div>
            <div class="subscribe-section">
                <div class="container">
                </div>
            </div>
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <aside class="widget widget_text img-textwidget">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img src="{{asset('assets/img/educator-logo1.png')}}" alt="logo"></a>
                                </div>
                                <div class="textwidget widget-text">
                                    The mission of the OSHA Council is to ensure that workers have safe and healthy working conditions by establishing and supporting American safety standards and by offering outreach, education, and support to the safety industry globally.
                                </div>
                            </aside>
                            <div class="footer-social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget">
                                <h5 class="widget-title">Quick LInks</h5>
                                <ul>
                                    <li>
                                        <a href="{{ url('/about') }}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/course') }}">Course</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/verification') }}">Verification</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text school-time">
                                <h5 class="widget-title">School Hours</h5>
                                <span>
                                    <i aria-hidden="true" class="far fa-clock"></i>
                                    8 AM - 5 PM , Monday - Saturday
                                </span>
                                <p>Aut, quae convallis minim cum ornare! Pede dictum convallis.</p>
                                <a href="{{ url('/contact') }}" class="button-round-secondary ">JOIN US NOW</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right">Copyright &copy; 2023 OSHA Council. All rights reserved.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="legal-list">
                                <ul>
                                    <li>
                                        <a href="legal-notice.html">PRIVACY POLICY</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">SUPPORT</a>
                                    </li>
                                    <li>
                                        <a href="legal-notice.html">TERMS & CONDITION</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendors/waypoint/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{asset('assets/vendors/progressbar-fill-visible/js/progressBar.min.js') }}"></script>
    <script src="{{asset('assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
    <script src="{{asset('assets/vendors/counterup/jquery.counterup.js') }}"></script>
    <script src="{{asset('assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
    <script src="{{asset('assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{asset('assets/vendors/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{asset('assets/vendors/slick/slick.min.js') }}"></script>
    <script src="{{asset('assets/vendors/slick-nav/jquery.slicknav.js') }}"></script>
    <script src="{{asset('assets/js/custom.js') }}"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'81c367a4eae83c13',t:'MTY5ODMzMDcwNy4xNzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


</html>