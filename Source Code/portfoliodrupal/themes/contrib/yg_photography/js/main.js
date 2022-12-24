(function ($) {
 Drupal.behaviors.yg_photography = {
   attach: function (context, settings) {
	
		"use strict";
		// $(".insta-image-list" ).wrapAll( "<div class='instagram owl-carousel owl-theme' />");
			
	
	jQuery(document).ready(function( $ ) {	
			$('.portfolio-popup').magnificPopup({
		    type: 'image',
		    removalDelay: 300,
		    mainClass: 'mfp-fade',
		    gallery: {
		      enabled: true
		    },
		    zoom: {
		      enabled: false,
		      duration: 300,
		      easing: 'ease-in-out',
		      opener: function(openerElement) {
		        return openerElement.is('img') ? openerElement : openerElement.find('img');
		      }
		    }

			});
			$('.testimonial').owlCarousel({
			    loop: true,
			    margin: 10,
			    responsive: {
			      0:{
			          items:1
			      },
			      600:{
			          items:1
			      },
			      1000:{
			          items:1
			      }    
			    }
			  });
			$('.instagram').owlCarousel({
			    loop: true,
		    	dotsEach: true,
			    responsive: {
			      0:{
			          items:1
			      },
			      600:{
			          items:3
			      },
			      1000:{
			          items:5
			      }    
			    }
			  });
	});	
	$("#block-instagramwithoutapi h2").html(function(){
	  var text= $(this).text().trim().split(" ");
	  var last = text.pop();
	  return text.join(" ") + (text.length > 0 ? " <span>" + last + "</span>" : last);
	});
	

	$(window).on('load', function(){
	    var $container = $('.portfolioContainer');
	    $container.isotope({
	        filter: '*',
	        animationOptions: {
	            duration: 750,
	            easing: 'linear',
	            queue: false
	        }
	    });

	$('.portfolioFilter a').click(function(){
	               $('.portfolioFilter .current').removeClass('current');
	               $(this).addClass('current');
	               $(".portfolioContainer .hide").addClass("portfolio-item");
	               $(".portfolioContainer .portfolio-item").removeClass("hide");
	               var selector = $(this).attr('data-filter');
	               if(selector != "*")
	               {
	                   $(".portfolioContainer .categories:not( "
	                   +selector+") .portfolio-item").addClass('hide');
	                   $(".portfolioContainer .categories:not( "
	                   +selector+") .hide").removeClass('portfolio-item');

	               }
	               $('.portfolio-item .portfolio-popup').magnificPopup({
	                   type: 'image',
	                   removalDelay: 300,
	                   mainClass: 'mfp-fade',
	                   gallery: {
	                       enabled: true
	                   },
	                   zoom: {
	                       enabled: false,
	                       duration: 300,
	                       easing: 'ease-in-out',
	                       opener: function(openerElement) {
	                           return openerElement.is('img') ? openerElement : openerElement.find('img');
	                       }
	                   }
	               });

	               $container.isotope({
	                   filter: selector,
	                   animationOptions: {
	                       duration: 750,
	                       easing: 'linear',
	                       queue: false
	                   }
	                });
	                return false;
	           });
	 }); 
			$(document).click(function(e) {
			    if (!$(e.target).is('.panel-body')) {
			      $('.collapse').collapse('hide');      
			    }
			});
 	$('.carousel-item:first-child').addClass('active');

           $("ul.tabs").addClass("tabs-top");
	jQuery(window).scroll(function(){
       var scroll = $(window).scrollTop();
       if (scroll >= 90) {
           $("#main-menu").addClass("fixed-top ");
           $("ul.tabs").addClass("tabs-top");
       } else {
           $("#main-menu").removeClass("fixed-top");
           $("ul.tabs").removeClass("tabs-top");
       }

    });

}}})(jQuery, Drupal);// End of use strict