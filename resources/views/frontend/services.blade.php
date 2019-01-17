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
                    <h5 class="section-title-sm">{{ trans('messages.best-service') }}</h5>
                    <h2 class="section-title section-title-border">{{ trans('messages.service-we-provide') }}</h2>
                </div>

                <!-- service item -->
                <div class="col-xs-12" style="margin-bottom: 20px">
                    <a id="mechanical-design"></a>
                    <div class="card">
                        {{--<img src="{{ URL::asset('images/services/md1.jpg') }}" alt="service-image" style="width:100%; height: 600px;" />--}}
                        <h2>{{ trans('messages.mechanical-design') }}</h2>
                        <p>{{ trans('messages.mechanical-design-title') }}</p>
                        <p>{!! nl2br(trans('messages.mechanical-design-text-1')) !!}</p>
                        <img src="{{ URL::asset('images/services/md2.jpg') }}" alt="service-image" style="width:100%; height: 500px;" />
                        <p>{{ trans('messages.mechanical-design-text-2') }}</p>
                    </div>
                </div>

                <div class="col-xs-12" style="margin-bottom: 20px">
                    <div class="mechanical-design-electrical-design">
                        <div class="col-md-6 col-xs-12" style="float: right;">
                            <h2>{{ trans('messages.mechanical-design-electrical-design') }}</h2>
                            <p>{!! nl2br(trans('messages.mechanical-design-text-3')) !!}</p>
                        </div>
                        <div class="col-md-6 col-xs-12" style="padding-left: 0;">
                            <img src="{{ URL::asset('images/services/ap1.jpg') }}" alt="service-image" style="width:100%; height: 300px;" />
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12" style="margin-bottom: 20px">
                    <a id="automation-production"></a>
                    <div class="automation-production">
                        <h2>{{ trans('messages.automation-production') }}</h2>
                        <h4>{{ trans('messages.food-industry-reengineering') }}</h4>
                        <div class="col-md-6 col-xs-12" style="float: right;">
                            <div class="card">
                                <img src="{{ URL::asset('images/services/ap3.png') }}" alt="service-image" style="width:100%; height: 500px;" />
                                <h3>{{ trans('messages.donut') }}</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card">
                                <img src="{{ URL::asset('images/services/ap2.png') }}" alt="service-image" style="width:100%; height: 500px;" />
                                <h3>{{ trans('messages.chocolate') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="automation-production">
                        <h2>{{ trans('messages.glass') }}</h2>

                        <div class="col-md-6" style="float: right;">
                            <img src="{{ URL::asset('images/services/ap4.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/services/ap5.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <h3 style="margin-bottom: 20px;">{{ trans('messages.gripper') }}</h3>
                        <div class="col-md-6" style="float: right;">
                            <div class="card">
                                <img src="{{ URL::asset('images/services/ap7.png') }}" alt="service-image" style="width:100%; height: 500px;" />

                                <p>{!! nl2br(trans('messages.gripper-tech2')) !!}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{ URL::asset('images/services/ap6.png') }}" alt="service-image" style="width:100%; height: 500px;" />

                                <p>{!! nl2br(trans('messages.gripper-tech')) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="automation-production">
                        <h2>{!! nl2br(trans('messages.assembling')) !!}</h2>

                        <div class="col-md-6" style="float: right;">
                            <img src="{{ URL::asset('images/services/ap9.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/services/ap8.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-12" style="margin-top: 20px;">
                            <div class="card" style="padding: 0;">
                                <img src="{{ URL::asset('images/services/ap10.png') }}" alt="service-image" style="width:100%; height: 500px;" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="automation-production">
                        <h3 style="margin-bottom: 20px">{{ trans('messages.heavy-duty-industry') }}</h3>

                        <img src="{{ URL::asset('images/services/ap11.png') }}" alt="service-image" style="width:100%; height: 500px; margin-bottom: 20px" />

                        <h3 style="margin-bottom: 20px">{{ trans('messages.belt-conveyor-mining-industry') }}</h3>

                        <div class="col-md-6" style="float: right;">
                            <img src="{{ URL::asset('images/services/ap13.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/services/ap12.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="automation-production">
                        <img src="{{ URL::asset('images/services/ap14.png') }}" alt="service-image" style="width:100%; height: 500px; margin-bottom: 20px" />

                        <h3 style="margin-bottom: 20px">{{ trans('messages.automation') }}</h3>

                        <div class="col-md-6" style="float: right;">
                            <img src="{{ URL::asset('images/services/ap15.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/services/ap16.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <hr />

                        <div class="col-md-6" style="float: right;">
                            <img src="{{ URL::asset('images/services/ap17.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>

                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/services/ap18.png') }}" alt="service-image" style="width:100%; height: 400px;" />
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="mechanical-design-electrical-design">
                        <div class="col-md-6" style="float: right;">
                            <h3>{{ trans('messages.automated-drilling') }}</h3>

                            <p>{{ trans('messages.automated-drilling-tech') }}</p>
                        </div>

                        <div class="col-md-6" style="padding-left: 0;">
                            <img src="{{ URL::asset('images/services/ap19.png') }}" alt="service-image" style="width:100%; height: 300px;" />
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin-bottom: 20px">
                    <a id="outsourcing"></a>
                    <div class="mechanical-design-electrical-design">
                        <h2 style="text-align: center; margin: 20px 0;">{{ trans('messages.outsourcing') }}</h2>

                        <div class="col-md-6" style="float: right;">
                            <p>{!! nl2br(trans('messages.outsourcing-text-3')) !!}</p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-4')) !!}</p>
                        </div>

                        <div class="col-md-6">
                            <p>{{ trans('messages.automated-drilling-tech') }}</p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-1')) !!}</p>
                            <p>{!! nl2br(trans('messages.outsourcing-text-2')) !!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin-bottom: 20px">
                    <a id="consulting"></a>
                    <div class="card">
                        <h2>{{ trans('messages.consulting') }}</h2>
                        <p>{!! nl2br(trans('messages.consulting-text')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service -->
@endsection