@extends('frontend.layouts.master')

@section('content')
    <section>
        <div class="hero-slider position-relative">
            <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-1.jpg') }});" data-icon="ti-comments" data-text="Mechanical Design">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="text-white font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">
                                    <a href="#mechanical-design">{{ trans('messages.mechanical-design') }}</a>
                                </h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">
                                    <a href="#mechanical-design">{{ trans('messages.mechanical-design-title') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-2.jpg') }});" data-icon="ti-bar-chart" data-text="{{ trans('messages.automation-production') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">
                                    <a href="#automation-production">{{ trans('messages.automation-production') }}</a>
                                </h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".9">
                                    <a href="#automation-production">{{ trans('messages.food-industry-reengineering') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider-item py-160" style="background-image: url({{ URL::asset('images/services/banner-3.jpg') }});" data-icon="ti-money" data-text="{{ trans('messages.outsourcing') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">
                                    <a href="#outsourcing">{{ trans('messages.outsourcing') }}</a>
                                </h4>
                                <p class="text-green mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">
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
                                <h4 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".5">
                                    <a href="#consulting">{{ trans('messages.consulting') }}</a>
                                </h4>
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
                    <h3 class="section-title-sm">{{ trans('messages.best-service') }}</h3>
                    <h3 class="section-title section-title-border">{{ trans('messages.service-we-provide') }}</h3>
                </div>

                <!-- service item -->
                <div class="col-xs-12" style="margin: 10px">
                    <a id="mechanical-design"></a>
                    <div class="card">
                        <h4>{{ trans('messages.mechanical-design') }}</h4>
                        <img src="{{ URL::asset('images/services/md2.jpg') }}" alt="service-image" class="img-center" style="width: 65%;"/>
                        <p>{{ trans('messages.mechanical-design-title') }}</p>
                        <p>{!! nl2br(trans('messages.mechanical-design-text-1')) !!}</p>
                        <p>{{ trans('messages.mechanical-design-text-2') }}</p>
                        <p>{!! nl2br(trans('messages.mechanical-design-text-3')) !!}</p>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12" style="margin: 10px">
                    <a id="automation-production"></a>
                    <div class="automation-production">
                        <h4>{{ trans('messages.automation-production') }}</h4>
                        <img src="{{ URL::asset('images/services/industrial-automation.jpg') }}" alt="service-image" class="img-center" style="width:65%;" />
                        <p>{!! nl2br(trans('messages.automation-production-text-4')) !!}</p>
                    </div>
                </div>

                <div class="col-xs-12" style="margin: 10px">
                    <a id="outsourcing"></a>
                    <div class="mechanical-design-electrical-design">
                        <h4 style="text-align: center; margin: 20px 0;">{{ trans('messages.outsourcing') }}</h4>
                        <div class="col-md-12">
                            <img src="{{ URL::asset('images/services/outsourcing.jpg') }}" alt="service-image" class="img-center" style="width:65%;" />
                        </div>
                        <div class="col-md-6" style="float: right;">
                            <p></p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-3')) !!}</p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-4')) !!}</p>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-1')) !!}</p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-2')) !!}</p>
                            <br /><br /><br /><br /><br />
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin: 10px">
                    <a id="consulting"></a>
                    <div class="card">
                        <h4>{{ trans('messages.consulting') }}</h4>
                        <p>
                        <img src="{{ URL::asset('images/services/consulting.png') }}" alt="service-image" class="img-center" style="width:65%;" />
                        </p>
                        <p>{!! nl2br(trans('messages.consulting-text')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service -->
@endsection