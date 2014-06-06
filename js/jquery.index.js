$(document).ready(function() {

  $('#menu li').hover(function() {
      $(this).stop().animate({ paddingBottom: '35px' },400,'easeOutCirc');
  }, function() {
      $(this).stop().animate({ paddingBottom: '10px' },400,'easeOutBounce');
  });

});