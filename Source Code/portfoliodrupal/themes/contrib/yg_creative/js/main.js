 (function ($, Drupal, drupalSettings) {
    'use strict';
    Drupal.behaviors.zombizallbehavior = {
    attach: function (context, settings) {

    $(".testimonial").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    nav: true,
    responsive: { 0: { items: 1 }, 768: { items: 1 }, 900: { items: 1 }
    }
    });
    $( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
    $( ".owl-next").html('<i class="fa fa-arrow-right"></i>');

      
    // $('.counter').counterUp({
    //   delay: 10,
    //   time: 1000
    // });

    $(".latest-blog").owlCarousel({
    autoplay: false,
    dots: true,
    loop: true,
    nav: false,
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 3 }
    }
    });

    new WOW().init();
    jQuery(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("#header").addClass("sticky");
    } else {
        $("#header").removeClass("sticky");
    }

    });

    $(document).click(function(e) {
        if (!$(e.target).is('.panel-body')) {
          $('.collapse').collapse('hide');      
        }
    });
    $('.carousel-item:first-child').addClass('active');
    }
  };
})(jQuery, Drupal,drupalSettings);
