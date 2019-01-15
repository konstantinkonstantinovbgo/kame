<!-- client logo slider -->
<section class="bg-white py-4">
    <div class="container">
        <div class="client-logo-slider align-self-center">
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-4.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-2.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-3.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-6.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-8.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-9.png') }}" alt="client-logo">
            </a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2">
                <img class="d-unset" src="{{ URL::asset('images/clients/client-logo-7.png') }}" alt="client-logo">
            </a>
        </div>
    </div>
</section>
<!-- /client logo slider -->

<!-- footer -->
<footer class="bg-secondary">
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-5">
                    <p class="text-white text-center">
                        <span class="text-primary">KAME Engineering</span> &copy; {{ now()->year }} {{ trans('messages.all-right-reserved') }}
                    </p>
                </div>
                {{--<div class="col-lg-6 col-md-7">--}}
                    {{--<ul class="list-inline text-center text-md-right">--}}
                        {{--<li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">--}}
                            {{--<a class="font-secondary text-white" href="#">Privacy Policy</a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">--}}
                            {{--<a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer -->

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- magnific popup -->
    <script src="{{ URL::asset('js/jquery.magnific.popup.min.js') }}"></script>

    <!-- slick slider -->
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>

    <!-- mixitup filter -->
    <script src="{{ URL::asset('js/mixitup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}"></script>
    <script src="{{ URL::asset('js/gmap.js') }}"></script>

    <!-- Syo Timer -->
    <script src="{{ URL::asset('js/jquery.syotimer.js') }}"></script>

    <!-- aos -->
    <script src="{{ URL::asset('js/aos.js') }}"></script>

    <!-- Video -->
    <script src="{{ URL::asset('js/video.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ URL::asset('js/script.js') }}"></script>

</body>
</html>