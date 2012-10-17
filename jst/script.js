
var k = {

  i: function() {

    k.handlers();

  },

  handlers: function() {

    $('.contact .email').click(k.email.i);
    $('.work .item').click(k.item.i);
    $('.modal .close, .overlay, .code .close').click(k.item.close);
    $('.gallery img').click(k.zoom.i);
    $('.zoom, .zoom .close').click(k.zoom.d);

    $('.logo_config').click(k.config.i);

    $('.code_view').click(k.code.i);

  },

  email: {

    i: function() {
      if ($(this).html() == 'acidjazz@gmail.com') {
        $(this).html($(this).data('input'));
        $('.contact .email input').unbind('blur').blur(k.email.d);
      }

      $(this).find('input').focus().select();
    },

    d: function() {
      $('.contact .email').html('acidjazz@gmail.com');
    }

  },

  item: {
    i: function() {
      k.overlay();
      var modal = $('.modal.item_' + $(this).data('item'));
      k.center(modal, {height: modal.height()});
      modal.show();
    },

    close: function() {
      k.overlay(true);
      $('.modal').hide();
      $('.code').hide();
      k.zoom.d();
    }

  },

  zoom: {
    
    i: function() {

      $('.zoom').show();
      $('.zoom img').attr('src', $(this).attr('src'));
      k.center($('.zoom'), {height: $('.zoom').height()});

    },

    d: function() {

      $('.zoom').hide();

    }

  },

  overlay: function(close) {

    if (close == true) {
      $('.overlay').hide();
      return true;
    }

    $('.overlay').show();
    $('.overlay').css({height: $(window).height() + 'px'});

  },

  center: function(e, params) {

    var middle = ($(window).width() / 2) - (e.outerWidth() / 2);
    var top = ($(window).scrollTop() + 100*1);

    if (params && params.noTop) {
      $(e).css({left: middle + 'px'});
    } else {

      if (params && params.height) {
        var top = ( $(window).height()/2 - params.height/2 ) + $(window).scrollTop();
      }

      $(e).css({top: top + 'px', left: middle + 'px'});
    }

    return true;

  },

  config: {

    i: function() {

      var config = $('.config');

      if (!config.hasClass('config_open')) {
        config.addClass('config_open');
      } else {
        config.removeClass('config_open');
      }

    }

  },

  code: {

    i: function() {

      k.overlay();
      var modal = $('.code_' + $(this).data('data'));
      k.center(modal);
      modal.show();


    }


  }


}
