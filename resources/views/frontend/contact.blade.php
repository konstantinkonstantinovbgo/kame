@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/contact/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Contact Us</li>
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
                    <h2 class="section-title">Contact Us</h2>
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
                                <a href="mailto:support@kameengineering.com">
                                    <p>support@kameengineering.com</p>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-map-alt"></i>
                            <div class="align-self-center font-primary">
                                <p>24/B Garden Street.</p>
                                <p>Northambia, Weals, UK</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- form -->
                <div class="col-lg-6 col-md-7">
                    <div class="p-5 rounded box-shadow">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(['url' => route('send-email'), 'class' => 'row']) !!}
                            <div class="col-lg-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 200px;"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Now</button>
                            </div>
                        {!! Form::close() !!}
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