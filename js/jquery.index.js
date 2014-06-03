$(document).ready(function() {

  $('#menu li').hover(function() {
      $(this).stop().animate({ paddingBottom: '80px' },200,'easeOutCirc');
  }, function() {
      $(this).stop().animate({ paddingBottom: '50px' },500,'easeOutBounce');
  });

});