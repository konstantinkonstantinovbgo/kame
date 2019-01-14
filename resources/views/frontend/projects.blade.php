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
                @for ($i = 1; $i <= 13; $i++)
                    <!-- project content -->
                    <div class="col-lg-12 order-lg-2 order-1 margin-10">
                        <div class="card text-center">
                            <h3 class="mb-10 margin-10">{{ trans('messages.proj' . $i) }}</h3>
                            <img class="img-fluid w-100 mb-60" src="{{ URL::asset('images/projects/'.$i.'.png') }}">
                            {{--<p class="mb-40">--}}
                                {{--some text--}}
                            {{--</p>--}}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection