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
    });
    
    $('#menu-item-19').on('click', function(e){
      e.preventDefault();
    });
    
    $('#menu-item-19 ul.sub-menu a').on('click', function(e){
      window.location = $(this).attr('href');
    });
    
    $('.close-and-open-contact').on('click', function(e){
      e.preventDefault();
      var $currentModal = $('.modal.in');
      $currentModal.modal('hide');
      setTimeout(function(){
        var $contactModal = $('#contact-modal');
        $contactModal.modal('show');        
      }, 500);

    });   
		
	});
	
})(jQuery, this);
