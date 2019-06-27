<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DC Group') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <!-- app.css -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- poppins font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200&display=swap" rel="stylesheet">
    <!-- libraries -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bttn.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/iziModal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/imagehover.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
  
  <div id="app">
      <!-- navigation bar -->
      @include('partials.navbar')
          
      <!-- content goes here --> 
      @yield('content')
      
      @if(!Request::is('/'))
        <!-- footer on every pages --> 
        @include('partials.footer')  
      @endif

  </div><!-- app -->   

  <!-- Scripts -->
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="{{ asset('/js/wow.min.js') }}"></script>
  <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/iziModal.min.js') }}"></script>
  <script src="{{ asset('/js/navbar-fixed.js') }}"></script>
   <!-- script custom -->
  <script src="{{ asset('/js/script.js') }}"></script>
  
</body>
</html>
