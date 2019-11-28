<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('partials.head')
  <body>
    @include('partials.header')
      @yield('content')
    @include('partials.testimonial')
    @include('partials.footer')
    @include('partials.scripts')
    @include('partials.preloader')
  </body>
</html>
