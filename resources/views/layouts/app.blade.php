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
<body @if(Request::is('payment')) class="bg-dark" @endif>
  <div id="app">
      @include('partials.navbar')
          
      @yield('content')
      
      <!-- backtotop -->
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


    // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (function() {
    //   'use strict';
    //   window.addEventListener('load', function() {
    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //     var forms = document.getElementsByClassName('needs-validation');
    //     // Loop over them and prevent submission
    //     var validation = Array.prototype.filter.call(forms, function(form) {
    //       form.addEventListener('submit', function(event) {
    //         if (form.checkValidity() === false) {
    //           event.preventDefault();
    //           event.stopPropagation();
    //         }
    //         form.classList.add('was-validated');
    //       }, false);
    //     });
    //   }, false);
    // })();


    // payment
    $("#payment").iziModal();
    $(document).on('click', '.payment', function (event) {
          event.preventDefault();
          $('#payment').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#payment').iziModal('setWidth', 800);
          $('#payment').iziModal('setHeaderColor', '#37474F');
          // $('#payment').iziModal('setBackground', 'dimgrey');
          // $('#payment').iziModal('setColor', 'white');
    });

    // homepage
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

    // Agriculture
    $("#agri").iziModal();
    $(document).on('click', '.agri', function (event) {
          event.preventDefault();
          $('#agri').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#agri').iziModal('setWidth', 900);
          $('#agri').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // Legal
    $("#legal").iziModal();
    $(document).on('click', '.legal', function (event) {
          event.preventDefault();
          $('#legal').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#legal').iziModal('setWidth', 900);
          $('#legal').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // Food
    $("#food").iziModal();
    $(document).on('click', '.food', function (event) {
          event.preventDefault();
          $('#food').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#food').iziModal('setWidth', 900);
          $('#food').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // Leisure
    $("#leisure").iziModal();
    $(document).on('click', '.leisure', function (event) {
          event.preventDefault();
          $('#leisure').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#leisure').iziModal('setWidth', 900);
          $('#leisure').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // Healthcare
    $("#health").iziModal();
    $(document).on('click', '.health', function (event) {
          event.preventDefault();
          $('#health').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#health').iziModal('setWidth', 900);
          $('#health').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // IT
    $("#it").iziModal();
    $(document).on('click', '.it', function (event) {
          event.preventDefault();
          $('#it').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#it').iziModal('setWidth', 900);
          $('#it').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // PRINT
    $("#print").iziModal();
    $(document).on('click', '.print', function (event) {
          event.preventDefault();
          $('#print').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#print').iziModal('setWidth', 900);
          $('#print').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // REAL
    $("#real").iziModal();
    $(document).on('click', '.real', function (event) {
          event.preventDefault();
          $('#real').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#real').iziModal('setWidth', 900);
          $('#real').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // TRADING
    $("#trading").iziModal();
    $(document).on('click', '.trading', function (event) {
          event.preventDefault();
          $('#trading').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#trading').iziModal('setWidth', 900);
          $('#trading').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // VENTURE
    $("#venture").iziModal();
    $(document).on('click', '.venture', function (event) {
          event.preventDefault();
          $('#venture').iziModal('open');
          //$('#gallery-01').iziModal('setZindex', 99999);
          //$('#gallery-01').iziModal('open', { zindex: 99999 });
          $('#venture').iziModal('setWidth', 900);
          $('#venture').iziModal('setHeaderColor', '#37474F');
          //$('#gallery-01').iziModal('setBackground', 'dimgrey');
    });

    // OWL.CAROUSEL BENEFICIARY
    $('.owl-beneficiary').owlCarousel({
      items: 4,
      loop: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsiveClass: true,
    });

    // OWL.CAROUSEL CLIENTS
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
