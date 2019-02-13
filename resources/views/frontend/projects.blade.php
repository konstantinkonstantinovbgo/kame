@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/home/I4.0-topics.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">{{ trans('messages.projects') }}</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">{{ trans('messages.home') }}</a>
                        </li>
                        <li>{{ trans('messages.projects') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- project single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- project content -->
                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj1') }}</h4>
                        <p><img src="{{ URL::asset('projects/1.png') }}" class="img-center" style="width: 65%;"></p>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('projects/1a.png') }}" style="width: 90%;">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('projects/1b.png') }}" style="width: 90%;">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('projects/1c.png') }}" style="width: 90%;">
                            </div>
                        </div>
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{!! nl2br(trans('projects.proj1-tech-data')) !!}</p>
                    </div>
                </div>
                <!-- project content -->

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj3') }}</h4>
                        <p><img src="{{ URL::asset('projects/3.png') }}" class="img-center" style="width: 50%;"></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('projects/3a.png') }}" style="width: 80%;">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('projects/3b.png') }}" style="width: 80%;">
                            </div>
                        </div>
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{{ trans('projects.proj3-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj4') }}</h4>
                        <img src="{{ URL::asset('projects/4.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{!! nl2br(trans('projects.proj4-tech-data')) !!}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj7') }}</h4>
                        <img src="{{ URL::asset('projects/7.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{{ trans('projects.proj7-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj8') }}</h4>
                        <p><img src="{{ URL::asset('projects/8.png') }}" class="img-center" style="width: 50%;"></p>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ URL::asset('projects/8a.png') }}" style="width: 30%;">
                            </div>
                        </div>
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{{ trans('projects.proj8-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h4 class="mb-10 margin-10">{{ trans('projects.proj10') }}</h4>
                        <p><img src="{{ URL::asset('projects/10.png') }}" class="img-center" style="width: 50%;"></p>

                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('projects/11.png') }}" style="width: 80%;">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('projects/12.png') }}" style="width: 80%;">
                            </div>
                        </div>
                        <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                        <p class="mb-40 text-left">{!! nl2br(trans('projects.proj10-tech-data')) !!}</p>
                    </div>
                </div>

                {{--@for ($i = 1; $i <= 13; $i++)--}}
                    {{--<!-- project content -->--}}
                    {{--<div class="col-lg-12 order-lg-2 order-1 margin-10">--}}
                        {{--<div class="card text-center">--}}
                            {{--<h3 class="mb-10 margin-10">{{ trans('projects.proj' . $i) }}</h3>--}}
                            {{--<img class="img-fluid w-100 mb-60" src="{{ URL::asset('projects/'.$i.'.png') }}">--}}
                            {{--<p class="mb-40">--}}
                                {{--Tech data:--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endfor--}}
            </div>
        </div>
    </section>
@endsection