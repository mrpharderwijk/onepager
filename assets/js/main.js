/* ----------------------------------------------------------------------------------- *\
      	BOOTSTRAP - Enable ScrollSpy
\* ----------------------------------------------------------------------------------- */
jQuery('body').scrollspy({ target: '.navbar', offset: 100 });
jQuery(document).on('click','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a') ) {
        jQuery(this).collapse('hide');
		jQuery('.navbar').toggleClass('menu-open');
		jQuery('.navbar-toggle').toggleClass('collapsed');
    }
});
jQuery('.navbar-toggle').on('click', function () {
	jQuery('.navbar').toggleClass('menu-open');
});

/* ----------------------------------------------------------------------------------- *\
      	LittleBigAgency - Smooth scrolling for bootstrap single-page website
\* ----------------------------------------------------------------------------------- */
jQuery('.scroll-to-id').scrollToID({
	scrollOffset: 0
	// jQuery('#nav').outerHeight()
});
jQuery('#nav').scrollAffix({
	affixWrap: '.l-header'
});

/* ----------------------------------------------------------------------------------- *\
      	CMN TOGGLE
\* ----------------------------------------------------------------------------------- */
jQuery('#cmn-toggle-1').on('click', function() {
	if ( jQuery(this).hasClass('checked') ) {
		jQuery(this).toggleClass('checked');
		jQuery('.cmn-toggle-1').slideToggle();
		jQuery('.entree-kosten').html('499');
	} else {
		jQuery(this).toggleClass('checked');
		jQuery('.cmn-toggle-1').slideToggle();
		jQuery('.entree-kosten').html('799');
	}
});
/* ----------------------------------------------------------------------------------- *\
		OWL-carousel
\* ----------------------------------------------------------------------------------- */
jQuery(document).ready(function() {
	jQuery("#owl-example").owlCarousel({
		items: 1,
		singleItem: true,
		pagination: false,
		navigation: true,
		navigationText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>']
	});
});