/*
* Loads the Flexslider JS for the Photo Gallery Page
 */
(function($) {
  $(window).load(function() {
    // front-page slider
    $("#thumbnail-slider").flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        asNavFor: "#slider"
    });
    $("#slider").flexslider({
        slideshow: true,
        slideshowSpeed: 5000,
        animation: "fade",
        animationSpeed: 1000,
        animationLoop: true,
        controlNav: false,
        sync: "#carousel"
    });
  });
})(jQuery);