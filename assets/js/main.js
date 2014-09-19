/* ----------------------------------------------------------------------------------- *\
      	BOOTSTRAP - Enable ScrollSpy
\* ----------------------------------------------------------------------------------- */
jQuery('body').scrollspy({ target: '.navbar', offset: 100 });

/* ----------------------------------------------------------------------------------- *\
      	LittleBigAgency - Smooth scrolling for bootstrap single-page website
\* ----------------------------------------------------------------------------------- */
jQuery('#nav').strapscroll({
	navWrap: '#nav',
	affixWrap: '.l-header',
	scrollOffset: jQuery('#nav').outerHeight()
});

/* ----------------------------------------------------------------------------------- *\
		OWL-carousel
\* ----------------------------------------------------------------------------------- */
$(document).ready(function() {
	$("#owl-example").owlCarousel({
		items: 1,
		singleItem: true,
		pagination: false,
		navigation: true,
		navigationText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>']
	});
});