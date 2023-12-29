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
    <title>Certificate in Safety Health and Environment - OSHA COUNCIL</title>
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
                            <h1 class="inner-title">Certificate in Safety Health and Environment</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!--  course detail section html start -->
            <div class="course-detail-section">
                <div class="pattern-overlay circle-patten"></div>
                <div class="course-detail-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="course-detail-container">
                                    <div class="course-description">
                                        <div class="course-tag">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-md-4 text-left pink-border">
                                                    <span>Category :</span>
                                                    <h5>Certification - General</h5>
                                                </div>
                                                <div class="col-md-8 text-left pink-border">
                                                    <span>20 Reviews :</span>
                                                    <div class="rating-start-wrap">
                                                        <div class="rating-start">
                                                            <span style="width: 80%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <figure class="course-imgage figure-round-border">
                                            <img src="assets/img/health2.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-container">
                                <div class="responsive-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                                                Overview
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="nav-tab-content" class="tab-content" role="tablist">
                                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                            <div class="card-header" role="tab" id="heading-A">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                        Overview
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-A">
                                                <div class="card-body">
                                                    <h5>COURSE DESCRIPTION</h5>
                                                    <p>
                                                        
A Certificate in Safety, Health, and Environment (SHE) is a credential that signifies successful completion of a specialized training program focusing on the principles and practices of occupational safety, health management, and environmental protection. This certificate equips individuals with the essential knowledge and skills needed to cultivate and sustain a workplace culture that prioritizes safety and environmental responsibility. Participants in these programs typically gain expertise in identifying and addressing workplace hazards, understanding occupational health considerations, and implementing measures to minimize the environmental impact of organizational activities. The curriculum covers a spectrum of topics, including regulatory compliance, emergency response, risk assessment, and legal and ethical considerations related to workplace safety and environmental sustainability. As workplaces across various industries increasingly recognize the importance of SHE practices, this certificate becomes a valuable asset for professionals seeking to enhance their qualifications and contribute to fostering healthier, safer, and more environmentally conscious work environments. Certificate programs are often offered by educational institutions, industry associations, or specialized training providers, allowing individuals to acquire a comprehensive skill set that aligns with the evolving standards of workplace safety and environmental management.
                                                    </p>
                                                    <h5>
                                                        Certificate in Safety Health and Environment
                                                    </h5>
                                                    <p>
                                                        Safety Health and Environment (SHE) Certificate by OSHA Council provides training through our outreach training centres (OTCs) worldwide.
<br>
                                                        Safety Health and Environment (SHE) certificate gives a better foundation for managers, supervisors and staff with health and safety among their day to day responsibilities at their workplaces.
                                                        <br>
                                                        OSHA Council certifications are globally recognized qualifications, widely taken as a first step towards a career in Safety Health and Environment (SHE). This program develops ability to recognition, avoidance, abatement, and prevention of SHE hazards at workplaces.
                                                        <br>
                                                        <br>
                                                        <b>Upon successful completion of the course, participants will receive an Certificate in</b> Safety Health and Environment (SHE) <b>from OSHA Council within 6-8 weeks.</b>                                                    </p>
                                                        <h5>Certificate Course is divided into two Units.</h5>
                                                        <p> <b>UNIT 1</b></p>
                                                    <ul>
                                                        <li>Occupational safety and Health (OSH) – Policy & Planning</li>
                                                        <li>	Occupational safety and Health (OSH) – Organize & Implement</li>
                                                        <li>	Occupational safety and Health (OSH) – Risk Assessment (JSA)</li>
                                                        <li>Occupational safety and Health (OSH) – Review & Improvement</li>
                                                        <li>	Introduction to Occupational safety and Health</li>
                                                        <li>	Fire Safety</li>
                                                        <li>Electrical Safety</li>
                                                        <li>Transport Safety</li>
                                                        <li>	Hazard Communication</li>
                                                        <li>	Physiological & Physical Safety</li>
                                                        <li>Manual and Mechanical Handling Safety</li>
                                                        <li>	Personnel Protective Equipment</li>
                                                    </ul>
                                                    <p><b>UNIT 2</b></p>
                                                    <ul><li>Project</li></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                            <div class="card-header" role="tab" id="heading-B">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                        Instructor
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-B">
                                                <div class="card-body">
                                                    <div class="instructor-detail">
                                                        <figure class="instructor-img">
                                                            <img src="assets/img/educator-img26.jpg" alt="">
                                                        </figure>
                                                        <strong>James Scott</strong>
                                                        <em>Management Instructor</em>
                                                        <p>
                                                            Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Smply dummy text of the printing and typesetting industry
                                                        </p>
                                                    </div>
                                                    <div class="instructor-detail">
                                                        <figure class="instructor-img">
                                                            <img src="assets/img/educator-img21.jpg" alt="">
                                                        </figure>
                                                        <strong>Sammy Alam</strong>
                                                        <em>Business Instructor</em>
                                                        <p>
                                                            Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Smply dummy text of the printing and typesetting industry
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                            <div class="card-header" role="tab" id="heading-C">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                                                        Reviews
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-C">
                                                <div class="card-body">
                                                    <p>
                                                        Veritatis quae necessitatibus provident qui consectetuer, quaerat adipiscing dignissimos? Class penatibus posuere odio ultrices delectus iure, consectetuer mollis eros ut? Sunt ultrices. Euismod parturient corporis, nemo iaculis montes voluptate architecto.
                                                    </p>
                                                    <p>
                                                        ” Montes vel pellentesque amet, viverra officiis. Metus conubia illo aut doloribus exercitation, potenti, cupidatat ullam. “
                                                    </p>
                                                    <p>
                                                        ” Voluptate sapiente. Quibusdam nostrud consectetuer id, architecto tellus placerat veniam enim arcu. “
                                                    </p>
                                                    <p>
                                                        ” Enim dui ipsa egestas tortor cum adipiscing. Natoque magnam ridiculus eaque impedit pellentesque ornare non. “
                                                    </p>
                                                    <p>
                                                        ” Fermentum excepturi. Per, etiam harum sociosqu eu per aperiam commodo ultrices eros voluptates, ligula consectetuer. “
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-first">
                                <div style="padding-top: 150px;" class="sidebar">
                                    <!-- <div class="video-widget">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c" title="video" allowfullscreen=""></iframe>
                                    </div> -->
                                    <div class="widget-bg widget-service icon-list-content brochure">
                                        <ul>
                                            <li>
                                                <i aria-hidden="true" class="far fa-clock"></i>
                                                <span>Time Duration : 6-8 weeks</span>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-book-open"></i>
                                                <span>Study Lecture : 20 Lectures</span>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-list"></i>
                                                <span>Skill Level : Advance Course</span>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-users"></i>
                                                <span>No. Of Students : 120 Students</span>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-percent"></i>
                                                <span>Pass Percentage : 90%</span>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-file-alt"></i>
                                                <span>Certificate : Yes</span>
                                            </li>
                                        </ul>
                                        <div class="enroll-coures-btn">
                                            <a href="{{ url('/contact') }}" class="button-round-primary">Enroll course</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  course detail section html end -->
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
<script>(function(){var js = "window['__CF$cv$params']={r:'81c367c84d6e3c13',t:'MTY5ODMzMDcxMi41MjgwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/c359bc3d/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


</html>