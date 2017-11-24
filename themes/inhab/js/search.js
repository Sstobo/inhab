(function($) {

  $('.search-form').hide();

$('.search-button').on('click', function(e) {
  e.preventDefault();
  
  $('.search-form').toggle().focus();


});


  $('search-form').on('blur', function(){

    $(this).toggle();


  });
})(jQuery);