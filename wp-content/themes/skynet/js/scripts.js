(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
    function getUrlVars(thing) {
      var vars = {};
      var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
      });
      return vars[thing];
    }

    if(getUrlVars('thanks') == 'true') {
      $('#thanks').show();
    }
		
		$('#scroll-me').on('click', function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("article").offset().top
      }, 500);
    });
        
    $('#menu-item-19').hover(function(){
      $(this).find('ul.sub-menu').addClass('active');
    }, function(){
      $(this).find('ul.sub-menu').removeClass('active');
    })
    
    $('.close-and-open-contact').on('click', function(e){
      e.preventDefault();
      var $currentModal = $('.modal.in');
      $currentModal.modal('hide');
      var $contactModal = $('#contact-modal');
      $contactModal.modal('show');
    });   
		
	});
	
})(jQuery, this);
