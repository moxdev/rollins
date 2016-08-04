/*
* Loads the Flexslider JS for the Photo Gallery Page
 */
(function($) {
  $(window).load(function() {
    // front-page slider
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        maxItems: 12
    });
  });
})(jQuery);