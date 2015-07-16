(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();
    $('.tooltipped').tooltip({delay: 10});
    $('.slider').slider({full_width: true});
    $('.tabs-wrapper .row').pushpin({ top: $('.tabs-wrapper').offset().top });

  }); // end of document ready
})(jQuery); // end of jQuery name space