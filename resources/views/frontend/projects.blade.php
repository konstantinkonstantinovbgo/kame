@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/contact/page-title.jpg') }});">
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
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj1') }}</h3>
                        <img src="{{ URL::asset('images/projects/1.png') }}" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/1a.png') }}" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/1b.png') }}" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/1c.png') }}" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40 text-left">{!! nl2br(trans('messages.proj1-tech-data')) !!}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj3') }}</h3>
                        <img src="{{ URL::asset('images/projects/3.png') }}" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/3a.png') }}" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/3b.png') }}" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40">{{ trans('messages.proj3-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj4') }}</h3>
                        <img src="{{ URL::asset('images/projects/4.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40">{{ trans('messages.proj4-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj7') }}</h3>
                        <img src="{{ URL::asset('images/projects/7.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40">{{ trans('messages.proj7-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj8') }}</h3>
                        <img src="{{ URL::asset('images/projects/8.png') }}" class="img-center" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/8a.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40">{{ trans('messages.proj8-tech-data') }}</p>
                    </div>
                </div>

                <div class="col-lg-12 order-lg-2 order-1 margin-10">
                    <div class="card text-center">
                        <h3 class="mb-10 margin-10">{{ trans('messages.proj10') }}</h3>
                        <img src="{{ URL::asset('images/projects/10.png') }}" class="img-center" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/11.png') }}" class="img-center" style="width: 50%;">
                        <img src="{{ URL::asset('images/projects/12.png') }}" class="img-center" style="width: 50%;">
                        <p class="mb-40">{{ trans('messages.technical-data') }}:</p>
                        <p class="mb-40">{{ trans('messages.proj10-tech-data') }}</p>
                    </div>
                </div>

                {{--@for ($i = 1; $i <= 13; $i++)--}}
                    {{--<!-- project content -->--}}
                    {{--<div class="col-lg-12 order-lg-2 order-1 margin-10">--}}
                        {{--<div class="card text-center">--}}
                            {{--<h3 class="mb-10 margin-10">{{ trans('messages.proj' . $i) }}</h3>--}}
                            {{--<img class="img-fluid w-100 mb-60" src="{{ URL::asset('images/projects/'.$i.'.png') }}">--}}
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