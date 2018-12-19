@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/contact/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Project</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Our Project</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-2">Our Projects</h2>
                    <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        <br> tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-12">
                    <div class="project-menu text-center">
                        <ul class="controls list-inline">
                            <!-- filter item list -->
                            <li class="list-inline-item control active" data-filter="all">All</li>
                            <li class="list-inline-item control" data-filter=".Marketing-Online">Mechanical Design</li>
                            <li class="list-inline-item control" data-filter=".Business-Strategy">Automation Production</li>
                            <li class="list-inline-item control" data-filter=".Ecomerce-Advice">Outsourcing</li>
                            <li class="list-inline-item control" data-filter=".Dynamic-Development">Consulting</li>
                            {{--<li class="list-inline-item control" data-filter=".Financing">Financing</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" data-ref="mixitup-container">
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Business-Strategy" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-1.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Marketing-Online Dynamic-Development" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-2.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Financing" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-3.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Marketing-Online" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-4.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Ecomerce-Advice" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-5.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Marketing-Online Business-Strategy" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-6.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Ecomerce-Advice" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-7.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Dynamic-Development" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-8.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Business-Strategy Ecomerce-Advice" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-9.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Dynamic-Development Financing" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-1.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Financing" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-5.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 Business-Strategy Ecomerce-Advice" data-ref="mixitup-target">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="images/project/project-2.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="{{ route('home') }}" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection