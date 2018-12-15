@extends('frontend.layouts.master')

@section('content')
<section class="cta overlay-primary py-50 text-center text-lg-left" style="padding: 0;">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-12 no-padding" style="margin-bottom: -6px;">
                <video autoplay loop width="100%" muted>
                    <source src="{{ URL::asset('video/iot2.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

<section class="cta py-50 text-center text-lg-left" style="background-image: url({{ URL::asset('images/cta.jpg') }});">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h3 class="text-white">KAME Engineering give the smart solution for your business</h3>
            </div>
            <div class="col-lg-6 text-lg-right align-self-center">
                <a href="#" class="btn btn-light">GET INSTANT QUOTE</a>
            </div>
        </div>
    </div>
</section>
@endsection