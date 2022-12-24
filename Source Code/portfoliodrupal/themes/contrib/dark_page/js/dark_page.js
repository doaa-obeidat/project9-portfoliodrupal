
(function ($, Drupal) {
    Drupal.behaviors.banner = {
        attach: function attach(context)
        {
            // On Load hide extra slides.
            $(".slide-show").hide();
            var no_of_slide = $("#no_of_slide").val();
            for (let i = 1; i <= no_of_slide; i++) {
                $("#slide"+i).show();
            }
            $("#no_of_slide").change(
                function () {
                    $(".slide-show").hide();
                    var no_of_slide = $("#no_of_slide").val();
                    for (let i = 1; i <= no_of_slide; i++) {
                        $("#slide"+i).show();
                    }
                }
            );      
        }
    };
})(jQuery, Drupal);


