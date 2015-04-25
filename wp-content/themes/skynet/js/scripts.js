(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('#scroll-me').on('click', function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("article").offset().top
      }, 500);
    });
    
    $('#menu-item-19').on('click', function(e){
      e.preventDefault();
      var $menu = $(this).find('ul.sub-menu');
      $menu.toggleClass('active');
    });
    
    $('#menu-item-19 ul.sub-menu a').on('click', function(){
      window.location = $(this).attr('href');
    });
    
    $('.close-and-open-contact').on('click', function(e){
      e.preventDefault();
      var $currentModal = $('.modal.in');
      $currentModal.modal('hide');
      var $contactModal = $('#contact-modal');
      $contactModal.modal('show');
    });   
		
	});
	
})(jQuery, this);
