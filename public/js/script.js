  $( document ).ready(function() {
    console.log( "ready!" );

    // WOW JS
    new WOW().init();


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

    // OWL.CAROUSEL CORPORATE
    $('.owl-corporate').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsiveClass: true,
    });

    // OWL.CAROUSEL CLIENTS
    $('.owl-carousel').owlCarousel({
      items: 4,
      loop: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsiveClass: true,
    });

  });