console.log($(window).scroll());


/* ----------------------------------------------------------------------------------- *\
      Smooth scrolling for bootstrap single-page website
\* ----------------------------------------------------------------------------------- */
jQuery('#nav').strapscroll({
	navWrap: '#nav',
	affixWrap: '.l-header',
	scrollOffSet: jQuery('#nav').outerHeight()
});

jQuery('body').scrollspy({ target: '.navbar', scrollOffSet: +100 });
