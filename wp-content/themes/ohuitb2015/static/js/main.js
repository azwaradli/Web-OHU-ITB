$(function () {
  new WOW().init();
  
  if ($(window).width() >= 1200) {
    skrollr.init({
      forceHeight: false
    });
  }

  // disable skrollr if the window is resized below 768px wide
  $(window).on('resize', function () {
    if ($(window).width() < 1200) {
      skrollr.init().destroy();
    } else {
      skrollr.init({
        forceHeight: false
      }); 
    }
  });
});