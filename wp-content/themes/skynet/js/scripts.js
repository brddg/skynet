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

    $('#menu-item-35').on('click', function(e){
      e.preventDefault();
      $('#contact-modal').modal();
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

    $('#contact-form').on('submit', function(){
      var name = $('#name').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var zip = $('#zip').val();
      var recaptcha = $('#g-recaptcha-response').val();

      if (name === "") {
        $('#name').parent().addClass('has-error');
        $('#name').focus();
        return false;
      }
      if (phone === "") {
        $('#phone').parent().addClass('has-error');
        $('#phone').focus();
        return false;
      }
      if (email === "") {
        $('#email').parent().addClass('has-error');
        $('#email').focus();
        return false;
      }
      if (zip === "") {
        $('#zip').parent().addClass('has-error');
        $('#zip').focus();
        return false;
      }
      if (recaptcha === "") {
        $('#recaptcha-help-text').show();
        return false;
      }
      return true;
    });

    $('#name, #phone, #email, #zip').on('change', function(event){
      $(event.target).parent().removeClass('has-error');
    });

  });

})(jQuery, this);
