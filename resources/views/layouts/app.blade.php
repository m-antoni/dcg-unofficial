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
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app" >
      @include('partials.navbar')
          
      @yield('content')

     <!--  backtotop   -->
      <a href="#0" class="cd-top js-cd-top">Top</a>

  </div><!-- app -->    
<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/backtotop.js') }}"></script>
<!-- <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script> -->
<script>
  $( document ).ready(function() {
      console.log( "ready!" );

    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "10px 10px";
        // document.getElementById("logo").style.fontSize = "25px";
      } else {
        document.getElementById("navbar").style.padding = "20px 10px";
        // document.getElementById("logo").style.fontSize = "25px";
      }
    }  

    // Carousel at homepage
    $('.carousel').carousel({
      interval: 2000
    });

    // AOS
    // AOS.init({
    //   duration: 2000
    // });

  });
</script>
</body>
</html>
