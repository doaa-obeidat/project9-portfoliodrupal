(function ($,  Drupal) {
  'use strict';
  
           
          jQuery(window).scroll(function(){
          var scroll = $(window).scrollTop();
          if (scroll >= 100) {
              $("#menu").addClass("sticky");
          } else {
              $("#menu").removeClass("sticky");
          }

          });
            //Function to animate slider captions 
          function doAnimations( elems ) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';    
            elems.each(function () {
              var $this = $(this),
                $animationType = $this.data('animation');
              $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
              });
            });
          } 
          $('.carousel[data-type="multi"] .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));    
            for (var i=0;i<4;i++) {
              next=next.next();
              if (!next.length) {
                  next = $(this).siblings(':first');
              }      
              next.children(':first-child').clone().appendTo($(this));
            }
          });
          //Variables on page load 
          var $myCarousel = $('#carousel-sr'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");    
          //Initialize carousel 
          $myCarousel.carousel();  
          //Animate captions in first slide on page load 
          doAnimations($firstAnimatingElems);  
          //Pause carousel  
          $myCarousel.carousel('pause'); 
          //Other slides to be animated on carousel slide event 
          $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
          });  
            $('#carousel-sr').carousel({
                interval:3000,
                pause: "false"
            }); 



           
            $(window).scroll(function () {
                  if ($(this).scrollTop() > 50) {
                      $('#back-to-top').fadeIn();
                  } else {
                      $('#back-to-top').fadeOut();
                  }
            }); 
          	$('a.page-scroll').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 50
                    }, 900);
                    return false;
                  }
                }
            });
            $('body').scrollspy({ 
                target: '.navbar-default',
                offset: 80
            });
            $('#carousel-portfolio').carousel({wrap:true});
          	// Hide nav on click



       

        $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });

        $(".testimonial-slider").owlCarousel({
                items:1,
                itemsDesktop:[1000,1],
                itemsDesktopSmall:[979,1],
                itemsTablet:[768,1],
                pagination: true,
                autoPlay:true
            });

        $(".insurance-detail-testimonial").owlCarousel({
                autoPlay: true, 
                dots:false,
                slideSpeed:2000,   
                items : 1,
                itemsDesktop : [1199,1],
                itemsDesktopSmall : [980,1],
                itemsTablet: [768,1],
                itemsMobile : [479,1],
            });
        $('.panel-default').click( function(){
           if ( $(this).hasClass('bgcolor') ) {
               $(this).removeClass('bgcolor');
           } else {
               $('.panel-default.bgcolor').removeClass('bgcolor');
               $(this).addClass('bgcolor');
           }
        });

}(jQuery));