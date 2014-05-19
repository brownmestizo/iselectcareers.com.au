/* jquerydemo.com */

$(document).ready(function() {

  $('#menu li').hover(function() {
      $(this).stop().animate({ paddingBottom: '50px' },500,'easeOutCirc');
  }, function() {
      $(this).stop().animate({ paddingBottom: '5px' },500,'easeOutBounce');
  });

});