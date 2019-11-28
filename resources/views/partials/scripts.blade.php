    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    {{-- {{ URL::asset('assets/js/jquery-min.js') }} --}}
    <script src="{{ URL::asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    @stack('scripts')
