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
    <title>Contact - OSHA COUNCIL</title>
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
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">contact</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- contact form html start -->
            <div class="contact-page-section">
                <div class="container">
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="400" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="contact-form-inner">
                        <div class="pattern-overlay zigzag-patten"></div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="contact-detail-container">
                                    <div class="section-head">
                                        <div class="title-divider"></div>
                                        <h2 class="section-title">Feel Free To Contact And Reach Us !</h2>
                                        <div class="section-disc">
                                            <p>Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumens deserunt.</p>
                                        </div>
                                    </div>
                                    <div class="contact-details-list">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Phone Number :</h5>
                                                    <span>Head-Office : (+011) 948-5481 //</span>
                                                    <span>Branch-Office : (+011) 948-56487</span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Location Address :</h5>
                                                    <span>34th Bridge Road, San Francisco //</span>
                                                    <span>3th New Street Road, London</span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-envelope3"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Email address :</h5>
                                                    <span><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b0bbb9b5bdba94b7bbb9a4b5baadfab7bbb9">qwert@gmail.com</a> //</span>
                                                    <span><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7ded9d1d8e8cfcecdf7d3d8dad6ded999d4d8da">qwert@gmail.com</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-from-wrap">
                                    <div class="pattern-overlay circle-patten"></div>
                                    <form class="contact-from" action="{{url('/contact/submit')}}" method="POST">
                                        @csrf
                                        <p>
                                            <input type="text" name="name" placeholder="Enter Name*">
                                        </p>
                                        <p>
                                            <input type="email" name="email" placeholder="Enter Email*">
                                        </p>
                                        <p>
                                            <input type="text" name="subject" placeholder="Enter Subject*">
                                        </p>
                                        <p>
                                            <input type="text" name="mobile" placeholder="Enter Number*">
                                        </p>
                                        <p class="width-full">
                                            <textarea name="message" rows="8" placeholder="Enter Message*"></textarea>
                                        </p>
                                        <p class="width-full">
                                            <input type="submit" name="submit" value="Submit Now">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact form html end -->
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
                                        <a href="{{ url('/course') }}">Course</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/verification') }}">Verification</a>
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
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
    @include('sweetalert::alert')
<script>(function(){var js = "window['__CF$cv$params']={r:'81c367eaf94083f3',t:'MTY5ODMzMDcxOC4wNjgwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

</html>
