
var clock = {

  max: {h: 12, m: 60, s: 60},

  i: function() {
    setInterval(clock.tick, 1000);
  },

  tick: function() {
    
    var  d = new Date();

    var time = {
      h: d.getHours() < 12 ? d.getHours() : (d.getHours()-12),
      m: d.getMinutes(),
      s: d.getSeconds()
    };

    var types = ['-moz-transform', '-webkit-transform', 'transform'];

    for (var j in time) {
      for (var i = 0, ilen = types.length; i != ilen; i++) {
        $('.clock .hand.' + j).css(types[i], 'rotate(' + (time[j]*360/clock.max[j]) + 'deg)');
        $('.clock .hand.' + j).html(time[j]);
      }
    }

  }

}
