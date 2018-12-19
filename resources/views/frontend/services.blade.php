@extends('frontend.layouts.master')

@section('content')
    <section>
        <div class="hero-slider position-relative">
            <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-1.jpg') }});" data-icon="ti-comments" data-text="Mechanical Design">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                {{--<h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">We are here to</h4>--}}
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">Mechanical Design</h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                {{--<a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>--}}
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
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
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
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                {{--<a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>--}}
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
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                {{--<a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">more details</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h5 class="section-title-sm">Best Service</h5>
                    <h2 class="section-title section-title-border">Service We Provide</h2>
                </div>
                <!-- service item -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            {{--<img class="card-img-top rounded-0" src="images/service/service-1.jpg" alt="service-image">--}}
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Mechanical Design</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam quis nostrud.</p>
                            {{--<a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>--}}
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            {{--<img class="card-img-top rounded-0" src="images/service/service-2.jpg" alt="service-image">--}}
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Automation Production</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam quis nostrud.</p>
                            {{--<a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>--}}
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            {{--<img class="card-img-top rounded-0" src="images/service/service-3.jpg" alt="service-image">--}}
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Outsourcing</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam quis nostrud.</p>
                            {{--<a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>--}}
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            {{--<img class="card-img-top rounded-0" src="images/service/service-3.jpg" alt="service-image">--}}
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Consulting</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam quis nostrud.</p>
                            {{--<a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service -->
@endsection