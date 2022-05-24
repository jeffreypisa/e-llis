(function($) {
  $( document ).ready(function() {
    $('body').addClass('loaded');
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 1) {
        $("header").addClass("scrolled");
      } else {
        $("header").removeClass("scrolled");
        $(".sticky-wrapper").attr('style', '');
      }
    });
  });
}(jQuery));