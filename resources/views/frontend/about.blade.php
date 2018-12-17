@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/contact/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">About Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- philosophy -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <h5 class="section-title-sm">Know About</h5>
                    <h2 class="section-title section-title-border-half">Our Philosophy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt laboris nisi ut aliquip
                        ex commodo consequat. duis aute irure dolor in reprehenderivoluptate velit esse cillum dolore fugiat
                        nulla pariatur.Excepteur sint ocaecat cupidatat noproident sunt culpa qui officia deserunt mollit anim
                        id est laborum.</p>
                    <p>Sed perspiciatis unde omnisiste natus error sit voluptatem accusantium.doloremque ladantium totam rem aperieaque
                        ipsa quae ab illo inventore.veritatis. et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="#" class="btn btn-primary">Explore More</a>
                </div>
                <!-- philosophy image -->
                <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                    <img class="img-fluid w-100" src="{{ URL::asset('images/about/philosophy.jpg') }}" alt="philosophy-image">
                </div>
            </div>
        </div>
    </section>
    <!-- /philosophy -->

    <!-- ceo section -->
    <section>
        <div class="container">
            <div class="row rounded bg-secondary">
                <!-- ceo image -->
                <div class="col-lg-5 rounded-left ceo-image" style="background-image: url({{ URL::asset('images/about/ceo.jpg') }});"></div>
                <div class="col-lg-7">
                    <!-- ceo content -->
                    <div class="p-5">
                        <h2 class="section-title section-title-border-half-white text-white">We are efficient to
                            <br> make your business rise </h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt laboris nisi ut aliquip
                            ex commodo consequat. duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat
                            nulla pariatur.Excepteur sint ocaecat cupidatat non proident sunt culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                        <img src="{{ URL::asset('images/about/ceo-signature.png') }}" alt="ceo-signature">
                        <h5 class="text-white">John Doe</h5>
                        <h6 class="text-white">CEO</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /ceo section -->
@endsection