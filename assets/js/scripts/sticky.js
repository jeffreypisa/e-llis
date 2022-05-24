(function($) {
  $(document).ready(function(){
    
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 5) {
        $("body").addClass("is-scrolled");
      } else {
        $("body").removeClass("is-scrolled");
      }
    });

    function stickyheader() {
      $("header").sticky({topSpacing:0});  
    }

    stickyheader();

    $( window ).resize(function() {
      stickyheader();
    });
  });
}(jQuery));