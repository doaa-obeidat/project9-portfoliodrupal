(function ($, Drupal) {
  Drupal.behaviors.CustomJS = {
    attach: function (context, settings) {
      var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
      is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
      is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

        //Mobile menu toggle
			$('.navbar-toggle').once().on('click', function(){
				console.log('test');
				$('#main-menu').slideToggle();
			});

			$('.menu li .caret').once().on('click', function(){
				$(this).next().slideToggle("open-menu");
			});

			//Mobile dropdown menu
			if ( $(window).width() < 767) {
				$(".region-main-navigation li a:not(.has-submenu)").click(function () {
					$('.region-main-navigation').hide();
					});
			}
			jQuery(".scroll-top").hide();

			jQuery('.path-frontpage #particles-js').css('height', jQuery(window).height());
			// sticky header
			jQuery(window).scroll(function () { // this will work when your window scrolled.
				var height = jQuery(window).scrollTop(); //getting the scrolling height of window
				if (height > 100) {
					jQuery(".scroll-top").show();
					jQuery(".site-header").addClass("sticky-header");
					jQuery(".site-header").removeClass("header-with-banner");
				} else {
					jQuery(".scroll-top").hide();
					jQuery(".site-header").removeClass("sticky-header");
					jQuery(".site-header").addClass("header-with-banner");
				}
			});
			jQuery(".scroll-top").once().on('click',(function () {
				jQuery(".site-header").removeClass("sticky-header");
				jQuery('html,body').animate({
					scrollTop: jQuery("#top").offset().top /*class you want to scroll to!!*/
				}, 1000); /*animation time length*/
			}));
			jQuery(window).resize(function () {
				jQuery('#particles-js').css('height', jQuery(window).height());
			});
    },
  };
}(jQuery, Drupal));