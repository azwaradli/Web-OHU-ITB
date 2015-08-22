jQuery(function () {
  new WOW().init();
  
  if (jQuery(window).width() >= 1200) {
    skrollr.init({
      forceHeight: false
    });
  }

  // disable skrollr if the window is resized below 768px wide
  jQuery(window).on('resize', function () {
    if (jQuery(window).width() < 1200) {
      skrollr.init().destroy();
    } else {
      skrollr.init({
        forceHeight: false
      }); 
    }
  });
});