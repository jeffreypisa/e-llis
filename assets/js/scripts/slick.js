(function($) {
  $( document ).ready(function() {
    $('.js-slick').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      variableWidth: true,
      prevArrow: false,
      nextArrow: false,
      settings: "unslick",
      responsive: [
        {
          breakpoint: 992,
          variableWidth: false,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 376,
          variableWidth: true,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  });
}(jQuery));