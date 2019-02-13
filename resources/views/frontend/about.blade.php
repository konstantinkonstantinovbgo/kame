@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/home/I4.0-topics.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">{{ trans('messages.about-us') }}</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>{{ trans('messages.about-us') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- philosophy -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-2 order-lg-1 font-size-20">
                    <h5 class="section-title-sm">{{ trans('messages.know-about') }}</h5>
                    <h2 class="section-title section-title-border-half">{{ trans('messages.our-philosophy') }}</h2>
                    @for ($i = 1; $i <= 20; $i++)
                        <p>{!! trans('messages.about-us-text-' . $i) !!}</p>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <h5 class="section-title-sm">{{ trans('messages.dipl-eng') }}</h5>
                    <h6 class="section-title-sm">CTO</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- /philosophy -->
@endsection