<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KAME Engineering</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">

    <!-- themify icon -->
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">

    <!-- animate -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

    <!-- Aos -->
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>

<body>

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
                        <li class="nav-item @if (Route::currentRouteName() === 'home') active @endif">
                            <a class="nav-link" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() === 'services') active @endif">
                            <a class="nav-link" href="{{ route('services') }}">
                                Service & Support
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() === 'projects') active @endif">
                            <a class="nav-link" href="{{ route('projects') }}">
                                Projects
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() === 'about') active @endif">
                            <a class="nav-link" href="{{ route('about') }}" role="button">
                                About
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() === 'contact') active @endif">
                            <a class="nav-link btn btn-primary btn-sm" href="{{ route('contact') }}">get instant quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>