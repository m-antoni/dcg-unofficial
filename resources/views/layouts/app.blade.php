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
    
    <!-- app.css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- poppins font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200&display=swap" rel="stylesheet">
     <!-- libraries -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bttn.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/iziModal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.default.css') }}" rel="stylesheet">
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
  <script src="{{ asset('/js/wow.min.js') }}"></script>
  <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/iziModal.min.js') }}"></script>
  <script src="{{ asset('/js/navbar-fixed.js') }}"></script>
  <script src="{{ asset('/js/backtotop.js') }}"></script>

<script>
  $( document ).ready(function() {
      console.log( "ready!" );

    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        // style when scroll down
        document.getElementById("navbar").style.padding = "3px 3px";
        document.getElementById("logo").style.fontSize = "1rem";
         document.getElementById("logoImage").style.width = "45px";
      } else {
        // default style
        document.getElementById("navbar").style.padding = "10px 10px";
        document.getElementById("logo").style.fontSize = "1.4rem";
        document.getElementById("logoImage").style.width = "50px";
      }
    }  

    // Carousel at homepage
    $('.carousel').carousel({
      interval: 2000,
      height: '20%'
    });

    // iziModal script
    $("#triggerHome").iziModal();
    $(document).on('click', '.triggerHome', function (event) {
          event.preventDefault();
          $('#triggerHome').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#triggerHome').iziModal('setWidth', 800);
          $('#triggerHome').iziModal('setHeaderColor', '#ff5964');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

 
    // OWL.CAROUSEL
    $('.owl-carousel').owlCarousel({
      items: 5,
      loop: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsiveClass: true,
    });

    // additional if need buttons
    // $('.play').on('click',function(){
    //     owl.trigger('play.owl.autoplay',[1000])
    // })
    // $('.stop').on('click',function(){
    //     owl.trigger('stop.owl.autoplay')
    // })


    // WOW 
    new WOW().init();
  });
</script>
</body>
</html>
