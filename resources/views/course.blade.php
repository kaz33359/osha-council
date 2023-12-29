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
    <title>Course - OSHA COUNCIL</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="assets/img/loader1.gif" alt="">
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
                                    <img src="assets/img/educator-logo1.png" alt="logo">
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
        <!-- main part -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap mb-0">
                <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Course</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- feature page html start -->
            <!-- home Course section html start -->
            <div class="home-course-section feature-page-section">
                <div class="container">
                    <div class="inner-course-wrap">
                        <div class="row d-flex justify-content-center justify-content-xl-start">
                            <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                                <article class="post">
                                    <figure class="feature-image">
                                        <img src="assets/img/construction6.jpg" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="course-detail.html">Management</a>
                                        </span> -->
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
                                        <img src="assets/img/construction3.jpg" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="course-detail.html">Busniess</a>
                                        </span> -->
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
                                                <img src="assets/img/educator-img22.jpg" alt="">
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
                                        <img src="assets/img/healthandenvirmnt.jpg" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="course-detail.html">Technology</a>
                                        </span> -->
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
                            <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                                <article class="post">
                                    <figure class="feature-image">
                                        <img src="assets/img/FireSafety1.jpg" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="course-detail.html">Literature</a>
                                        </span> -->
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="{{ url('/certificates/certificate_in_fire_safety') }}">Certificate in Fire Safety</a>
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
                                                <img src="assets/img/educator-img26.jpg" alt="">
                                            </figure>
                                            <h6 class="author-name">Prof. Alita Smith</h6> -->
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
                                        <img src="assets/img/OilandGas.jpg" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="course-detail.html">Architect</a>
                                        </span> -->
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="{{ url('/certificates/certificate_in_oil_and_gas') }}">Certificate in Oil and Gas</a>
                                        </h4>
                                        <div class="rating-content">
                                            <span class="rating-info">(4.5 ratings)</span>
                                            <div class="rating-start-wrap">
                                                <div class="rating-start">
                                                    <span style="width: 89%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="author-content">
                                            <!-- <figure class="author-img">
                                                <img src="assets/img/educator-img23.jpg" alt="">
                                            </figure>
                                            <h6 class="author-name">Prof. William Howard</h6> -->
                                        </div>
                                        <div class="entry-meta">
                                            <span class="student-number">
                                                <i aria-hidden="true" class="fas fa-user-friends"></i>
                                                35+ students
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
                </div>
            </div>
            <!-- feature coure result html start -->
            <section class="course-result-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 left-content">
                            <div class="pattern-overlay zigzag-patten"></div>
                            <div class="feature-left-content">
                                <div class="title-divider"></div>
                                <h2 class="feature-course-title">Committed To The Best Results. Join Us Now !</h2>
                                <p class="feature-course-desc">
                                    Professional safety certifications from the OSHA Council enable applicants to gain new skills in certain industries and to hone safety competencies that gauge performance, competence, and ability. This gives workers a competitive edge and aids in professional advancement.
                                </p>
                                <div class="skill-container">
                                    <div class="skill-wrapper">
                                        <h6 class="skill-titile">Practical Knowledge</h6>
                                        <div class="progress-wrapper">
                                            <div class="ab-progress example" data-progress data-value="92"></div>
                                        </div>
                                    </div>
                                    <div class="skill-wrapper">
                                        <h6 class="skill-titile">Passed Percentage</h6>
                                        <div class="progress-wrapper">
                                            <div class="ab-progress example" data-progress data-value="98"></div>
                                        </div>
                                    </div>
                                    <div class="skill-wrapper">
                                        <h6 class="skill-titile">Happy Students</h6>
                                        <div class="progress-wrapper">
                                            <div class="ab-progress example" data-progress data-value="90"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-course-btn">
                                    <a href="{{ url('/contact') }}" class="button-round-secondary">JOIN US NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-right-content">
                                <div class="pattern-overlay c-patten"></div>
                                <div class="pattern-overlay circle-patten"></div>
                                <figure class="feature-image">
                                    <img src="assets/img/construction5.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature coure result html end -->
            <!-- feature page html end -->
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
                                    <a href="{{ url('/') }}"><img src="assets/img/educator-logo1.png" alt="logo"></a>
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
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">About us</a>
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
<script>(function(){var js = "window['__CF$cv$params']={r:'81c367c71a5383f3',t:'MTY5ODMzMDcxMi4zMjIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


</html>