@extends('frontend.layouts.master')

@section('content')
    <section class="cta py-50 text-center text-lg-left">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 no-padding font-size-21">
                    {!! nl2br(trans('messages.introduction')) !!}
                </div>
            </div>
        </div>
    </section>

    <section class="cta py-50 text-center text-lg-left">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <img src="{{ URL::asset('images/home/plamen-kamenarov.jpg') }}" alt="Plamen Kamenarov" height="200" width="200">
                </div>
                <div class="col-lg-9 text-center text-lg-left font-size-21">
                    {!! nl2br(trans('messages.introduction2')) !!}
                </div>
            </div>
        </div>
    </section>

    {{--<section class="cta overlay-primary py-50 text-center text-lg-left" style="padding: 0;">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row justify-content-between">--}}
                {{--<div class="col-lg-12 no-padding" style="margin-bottom: -6px;">--}}
                    {{--<video autoplay loop width="100%" muted>--}}
                        {{--<source src="{{ URL::asset('video/iot2.mp4') }}" type="video/mp4">--}}
                    {{--</video>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/home/I4.0-topics.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{--<h2 class="text-white font-weight-bold">About Us</h2>--}}
                    <ol class="breadcrumb">
                        {{--<li>--}}
                            {{--<a href="{{ route('home') }}">Home</a>--}}
                        {{--</li>--}}
                        {{--<li>Home</li>--}}
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="cta py-50 text-center text-lg-left" style="background-image: url({{ URL::asset('images/cta.jpg') }});">--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-between">--}}
                {{--<div class="col-lg-6">--}}
                    {{--<h3 class="text-white">--}}
                        {{--{{ trans('messages.smart-solution') }}--}}
                    {{--</h3>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 text-lg-right align-self-center">--}}
                    {{--<a href="{{ route('contact') }}" class="btn btn-light">GET INSTANT QUOTE</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection