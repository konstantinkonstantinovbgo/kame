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
@endsection