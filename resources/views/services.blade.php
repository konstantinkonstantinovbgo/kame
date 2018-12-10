<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>KAME Engineering</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    {{--<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <!-- Slick Carousel -->
    {{--<link rel="stylesheet" href="plugins/slick/slick.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">

    {{--<link rel="stylesheet" href="plugins/slick/slick-theme.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">

    <!-- themify icon -->
    {{--<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">

    <!-- animate -->
    {{--<link rel="stylesheet" href="plugins/animate/animate.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

    <!-- Aos -->
    {{--<link rel="stylesheet" href="plugins/aos/aos.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <!-- Stylesheets -->
    {{--<link href="css/style.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>

<body>

{{--#009E4F--}}
<!-- preloader start -->
<div class="preloader">
    <img src="{{ URL::asset('images/preloader.gif') }}" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:support@kameengineering.com">Email:
                                <span class="ml-2">support@kameengineering.com</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:00359897919217">Call Us Now:
                                <span class="ml-2"> +359 897 919 217</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('images/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/services">
                                Service & Support
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-sm" href="#">get instant quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<section>
    <div class="hero-slider position-relative">
        <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-1.jpg') }});" data-icon="ti-comments" data-text="Mechanical Design">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            {{--<h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">We are here to</h4>--}}
                            <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">Mechanical Design</h4>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-2.jpg') }});" data-icon="ti-bar-chart" data-text="Automation Production">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            {{--<h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".1">Get your</h4>--}}
                            <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">Automation Production</h4>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-3.jpg') }});" data-icon="ti-money" data-text="Outsourcing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            {{--<h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">Start your</h4>--}}
                            <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">Outsourcing</h4>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-4.jpg') }});" data-icon="ti-package" data-text="Consulting">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            {{--<h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".1">We are always</h4>--}}
                            <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">Consulting</h4>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url({{ URL::asset('images/cta.jpg') }});">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h3 class="text-white">KAME Engineering give the smart solution for your business</h3>
            </div>
            <div class="col-lg-6 text-lg-right align-self-center">
                <a href="#" class="btn btn-light">GET INSTANT QUOTE</a>
            </div>
        </div>
    </div>
</section>

<!-- client logo slider -->
<section class="bg-white py-4">
    <div class="container">
        <div class="client-logo-slider align-self-center">
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-4.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-2.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-3.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-6.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-8.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-9.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-7.png') }}" alt="client-logo">
            </a>
        </div>
    </div>
</section>
<!-- /client logo slider -->

<!-- footer -->
<footer class="bg-secondary">
<!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-primary">KAME Engineering</span> &copy; {{ now()->year }} All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
{{--<script src="plugins/jQuery/jquery.min.js"></script>--}}
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap JS -->
{{--<script src="plugins/bootstrap/bootstrap.min.js"></script>--}}
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!-- magnific popup -->
{{--<script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>--}}
<script src="{{ URL::asset('js/jquery.magnific.popup.min.js') }}"></script>

<!-- slick slider -->
{{--<script src="plugins/slick/slick.min.js"></script>--}}
<script src="{{ URL::asset('js/slick.min.js') }}"></script>

<!-- mixitup filter -->
{{--<script src="plugins/mixitup/mixitup.min.js"></script>--}}
<script src="{{ URL::asset('js/mixitup.min.js') }}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
{{--<script  src="plugins/google-map/gmap.js"></script>--}}
<script src="{{ URL::asset('js/gmap.js') }}"></script>

<!-- Syo Timer -->
{{--<script src="plugins/syotimer/jquery.syotimer.js"></script>--}}
<script src="{{ URL::asset('js/jquery.syotimer.js') }}"></script>

<!-- aos -->
{{--<script src="plugins/aos/aos.js"></script>--}}
<script src="{{ URL::asset('js/aos.js') }}"></script>

<!-- Video -->
<script src="{{ URL::asset('js/video.js') }}"></script>

<!-- Main Script -->
{{--<script src="js/script.js"></script>--}}
<script src="{{ URL::asset('js/script.js') }}"></script>

</body>
</html>