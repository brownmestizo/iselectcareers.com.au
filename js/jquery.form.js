 var mycallback = function(value, segment) {
    $segment = $('.optional' + segment);
    if (value) $segment.show();
    else $segment.hide();
  }