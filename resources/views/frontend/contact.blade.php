@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/home/I4.0-topics.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>{{ trans('messages.contact-us') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <h2 class="section-title">{{ trans('messages.contact-us') }}</h2>
                    <ul class="pl-0">
                        <!-- contact items -->
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-mobile"></i>

                            <div class="align-self-center font-primary">
                                <p>+359 897 919 217</p>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-email"></i>
                            <div class="align-self-center font-primary">
                                <a href="mailto:office@kameengineering.com">
                                    <p>office@kameengineering.com</p>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-map-alt"></i>
                            <div class="align-self-center font-primary">
                                <p>{{ trans('messages.office-address') }}</p>
                                <p>{{ trans('messages.production-address') }}</p>
                                <p>{{ trans('messages.country') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7">
                    <h2 class="section-title">Contact Form</h2>
                    <!-- form -->
                    <div class="rounded">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert alert-error">
                                <ul>
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @else
                            {!! Form::open(['url' => route('send-email'), 'class' => 'row']) !!}
                            <div class="col-lg-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ trans('messages.name') }}" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{ trans('messages.email-address') }}" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="{{ trans('messages.subject') }}" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control p-2" name="message" id="message" placeholder="{{ trans('messages.your-message') }}" required style="height: 200px;"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" value="send">{{ trans('messages.submit-now') }}</button>
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <!-- Google Map -->
        <div id="map_canvas"></div>
    </section>
@endsection