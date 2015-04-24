(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('#scroll-me').on('click', function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("article").offset().top
      }, 500);
    });
		
	});
	
})(jQuery, this);
