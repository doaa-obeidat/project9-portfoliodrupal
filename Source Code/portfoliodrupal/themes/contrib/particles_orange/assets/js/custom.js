(function ($, Drupal) {
  Drupal.behaviors.CustomJS = {
    attach: function (context, settings) {
            jQuery('#navigation ul.sf-js-enabled').slicknav();
            jQuery('.particle-bg').each(function(){
            var image = jQuery(this).find('img').attr('src');
            jQuery(this).css('backgroundImage',"url("+image+")");
          })
      var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
      is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
      is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

      if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
        var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
        window[ eventMethod ]( 'hashchange', function() {
          var element = document.getElementById( location.hash.substring( 1 ) );

          if ( element ) {
            if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
              element.tabIndex = -1;

            element.focus();
          }
        }, false );
      }

 
        
        //Mobile menu toggle
        jQuery('.navbar-toggle').click(function(){
          jQuery('#main-menu').slideToggle();
        });

        jQuery('.menu li .caret').click(function(){
          jQuery(this).next().slideToggle("open-menu");
        });

        //Mobile dropdown menu
        if ( jQuery(window).width() < 767) {
          jQuery(".region-main-navigation li a:not(.has-submenu)").click(function () {
            jQuery('.region-main-navigation').hide();
            });
        }
    },
  };
}(jQuery, Drupal));