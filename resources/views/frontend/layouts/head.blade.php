<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
    rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">
<!-- Fancybox -->
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
<!-- Themify Icons -->
<link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/niceselect.css') }}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
<!-- Flex Slider CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/flex-slider.min.css') }}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel.css') }}">
<!-- Slicknav -->
<link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}">
<!-- Jquery Ui -->
<link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">

<!-- Eshop StyleSheet -->
<link rel="stylesheet" href="{{ asset('frontend/css/reset.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons'
    async='async'></script>
<style>
    /* Multilevel dropdown */
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>a:after {
        content: "\f0da";
        float: right;
        border: none;
        font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: 0px;
        margin-left: 0px;
    }

    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        margin-right: 12px;
        border-radius: 50%;
        background-color: #f1f1f1;
        color: #333;
        font-size: 20px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        color: #fff;
        transform: scale(1.1);
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998;
    }

    .social-icons a.twitter:hover {
        background-color: #1da1f2;
    }

    .social-icons a.youtube:hover {
        background-color: #ff0000;
    }

    .social-icons a.instagram:hover {
        background-color: #e4405f;
    }

    .carousel-caption:hover .btn-primary {
        background-color: #E30613;
        /* darker blue on hover */
        border-color: #E30613;
        color: #fff;
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    .carousel-caption .btn-primary {
        color: #fff;
        border: 2px solid #006ad0;
        padding: 10px 16px;
        text-align: center;
        display: inline-block;
        font-size: 14px;
        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: inset 0 0 0 0 #006ad0;
        -webkit-transition: ease-out 1s;
        -moz-transition: ease-out 1s;
        transition: ease-out 1s;
        text-decoration: none;
        z-index: 1;
        transform: skew(-20deg);
        position: relative;
        /* transform: skew(-20deg);
        background-color: #006AD0;
        border-color: #006AD0;
        color: #fff;
        transform: scale(1.05);
        transition: all 0.3s ease-in-out; */
    }

    /* .banner-caption a {
        color: #fff;
        border: 2px solid #006ad0;
        padding: 10px 16px;
        text-align: center;
        display: inline-block;
        font-size: 14px;
        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: inset 0 0 0 0 #006ad0;
        -webkit-transition: ease-out 1s;
        -moz-transition: ease-out 1s;
        transition: ease-out 1s;
        text-decoration: none;
        z-index: 1;
        transform: skew(-20deg);
        position: relative;
    } */
</style>
@stack('styles')
