/* ----------------------------------------------------------------------------------- *\
      Smooth scrolling for bootstrap single-page website
\* ----------------------------------------------------------------------------------- */
jQuery('#nav').strapscroll({
	navWrap: '#nav',
	affixWrap: '.header-section',
	scrollOffSet: jQuery('#nav').outerHeight()
});

// Owl carousel
$("#theme-carousel").owlCarousel({

    autoPlay: 4000, //Set AutoPlay to 3 seconds
     
    items : 3,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [979,2],
    pagination : true,
    slideSpeed : 1000,
    paginationSpeed : 800
    
  });