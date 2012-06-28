$(document).bind("mobileinit", function(){
  $.extend(  $.mobile , {
    $.mobile.page.prototype.options.addBackBtn= true;
  });
});