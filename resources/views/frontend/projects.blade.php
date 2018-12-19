@extends('frontend.layouts.master')

@section('content')
    <section class="page-title overlay" style="background-image: url({{ URL::asset('images/contact/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white font-weight-bold">Projects</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Projects</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- project single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- overview -->
                    <div class="p-4 rounded border mb-50">
                        <h4 class="text-color mb-20">Overview</h4>
                        <ul class="pl-0 mb-20">
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Project Name:</span>Apollo</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Client:</span>Baximco Ltd.</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Category:</span>Market Strategy</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Expertise:</span>Mobile App</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Date:</span>April, 2017</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Watch Live Demo</a>
                    </div>
                    <!-- case study -->
                    <div class="rounded bg-gray border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Complete Case Study</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                </aside>
                <!-- project content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <img class="img-fluid w-100 mb-60" src="{{ URL::asset('images/projects/project-single.jpg') }}" alt="project image">
                    <h3 class="mb-10">Apollo For Baximco Inc. Australia</h3>
                    <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- overview -->
                    <div class="p-4 rounded border mb-50">
                        <h4 class="text-color mb-20">Overview</h4>
                        <ul class="pl-0 mb-20">
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Project Name:</span>Apollo</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Client:</span>Baximco Ltd.</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Category:</span>Market Strategy</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Expertise:</span>Mobile App</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Date:</span>April, 2017</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Watch Live Demo</a>
                    </div>
                    <!-- case study -->
                    <div class="rounded bg-gray border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Complete Case Study</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                </aside>
                <!-- project content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <img class="img-fluid w-100 mb-60" src="{{ URL::asset('images/projects/project-single.jpg') }}" alt="project image">
                    <h3 class="mb-10">Apollo For Baximco Inc. Australia</h3>
                    <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- overview -->
                    <div class="p-4 rounded border mb-50">
                        <h4 class="text-color mb-20">Overview</h4>
                        <ul class="pl-0 mb-20">
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Project Name:</span>Apollo</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Client:</span>Baximco Ltd.</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Category:</span>Market Strategy</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Expertise:</span>Mobile App</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Date:</span>April, 2017</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Watch Live Demo</a>
                    </div>
                    <!-- case study -->
                    <div class="rounded bg-gray border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Complete Case Study</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                </aside>
                <!-- project content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <img class="img-fluid w-100 mb-60" src="{{ URL::asset('images/projects/project-single.jpg') }}" alt="project image">
                    <h3 class="mb-10">Apollo For Baximco Inc. Australia</h3>
                    <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
@endsection