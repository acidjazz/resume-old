
var k = {

  i: function() {

    k.handlers();

  },

  handlers: function() {

    $('.contact .email').click(k.email.i);
    $('.work .item').click(k.item.i);
    $('.close, .overlay').click(k.item.close);

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
      k.center(modal, {noTop: true});
      modal.addClass('modal_on');
    },

    close: function() {
      k.overlay(true);
      $('.modal').removeClass('modal_on');
    }

  },

  overlay: function(close) {

    if (close == true) {
      $('.overlay').removeClass('overlay_on');
      return true;
    }

    $('.overlay').addClass('overlay_on');

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


}
