@extends('frontend.layouts.master')

@section('content')
    <section>
        <div class="hero-slider position-relative">
            <div class="hero-slider-item py-160"
                 style="background-image: url({{ URL::asset('images/services/banner-1.jpg') }});"
                 data-icon="ti-comments" data-text="Mechanical Design">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="text-white font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                    {{ trans('messages.mechanical-design') }}
                                </h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                   data-delay-in=".9">
                                    <a href="#mechanical-design">{{ trans('messages.mechanical-design-title') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                 style="background-image: url({{ URL::asset('images/services/banner-2.jpg') }});"
                 data-icon="ti-bar-chart" data-text="{{ trans('messages.automation-production') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".5">{{ trans('messages.automation-production') }}</h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInDown"
                                   data-delay-in=".9">
                                    <a href="#automation-production">{{ trans('messages.food-industry-reengineering') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                 style="background-image: url({{ URL::asset('images/services/banner-3.jpg') }});" data-icon="ti-money"
                 data-text="{{ trans('messages.outsourcing') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".5">{{ trans('messages.outsourcing') }}</h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                   data-delay-in=".9">
                                    <a href="#outsourcing">{{ trans('messages.outsourcing-title') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                 style="background-image: url({{ URL::asset('images/services/banner-4.jpg') }});" data-icon="ti-package"
                 data-text="{{ trans('messages.consulting') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".5">Consulting</h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInDown"
                                   data-delay-in=".9">
                                    <a href="#consulting">{{ trans('messages.consulting-title') }}</a>
                                </p>
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
                    <h5 class="section-title-sm">{{ trans('messages.best-service') }}</h5>
                    <h2 class="section-title section-title-border">{{ trans('messages.service-we-provide') }}</h2>
                </div>

                <!-- service item -->
                <div class="col-lg-12 col-sm-12 mb-5">
                    <a id="mechanical-design"></a>
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/md1.jpg') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{ trans('messages.mechanical-design') }}</h4>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.mechanical-design-title') }}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.mechanical-design-text-1')) !!}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/md2.jpg') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{ trans('messages.mechanical-design-text-2') }}</h4>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.mechanical-design-electrical-design') }}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.mechanical-design-text-3')) !!}</p>
                        </div>

                    </div>
                </div>

                <!-- service item -->
                <div class="col-lg-12 col-sm-12 mb-5">
                    <a id="automation-production"></a>
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap1.jpg') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{ trans('messages.automation-production') }}</h4>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.food-industry-reengineering') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap2.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap3.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.chocolate') }}</p>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.donut') }}</p>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.glass') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap4.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap5.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.gripper') }}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.gripper-tech')) !!}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap6.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap7.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.gripper-tech2')) !!}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.assembling')) !!}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap8.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap9.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap10.png') }}"
                                 alt="service-image">
                        </div>

                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.heavy-duty-industry') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap11.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap12.png') }}"
                                 alt="service-image">
                        </div>

                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.belt-conveyor-mining-industry') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap13.png') }}"
                                 alt="service-image">
                        </div>

                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.automation') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap14.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap15.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap16.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap17.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap18.png') }}"
                                 alt="service-image">
                        </div>

                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.automated-drilling') }}</p>
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ URL::asset('images/services/ap19.png') }}"
                                 alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0">{{ trans('messages.automated-drilling-tech') }}</p>
                        </div>
                    </div>
                </div>

                <!-- service item -->
                <div class="col-lg-12 col-sm-12 mb-5">
                    <a id="outsourcing"></a>
                    <div class="card text-center">
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{ trans('messages.outsourcing') }}</h4>
                            <p class="card-text mx-2 mb-0">{{ trans('messages.outsourcing-title') }}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.outsourcing-text-1')) !!}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.outsourcing-text-2')) !!}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.outsourcing-text-3')) !!}</p>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.outsourcing-text-4')) !!}</p>
                        </div>
                    </div>
                </div>

                <!-- service item -->
                <div class="col-lg-12 col-sm-12 mb-5">
                    <a id="consulting"></a>
                    <div class="card text-center">
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{ trans('messages.consulting') }}</h4>
                            <p class="card-text mx-2 mb-0">{!! nl2br(trans('messages.consulting-text')) !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /service -->
@endsection