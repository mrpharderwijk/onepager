(function($){
	$.fn.strapscroll = function (options) {
		var defaults = {
				navWrap: '.navbar',	// give the navigation container
				scrollOffSet: 0,	// give the scrollOffset
				scrollSpeed: 1000,	// give the speed of scrolling
				affixWrap: false	// if a affix is needed give the element id/class
			},
			settings = $.extend({}, defaults, options);

		this.each(function() {
			var self = this,
				navEl = jQuery(settings.navWrap);

			jQuery('a.strapscroll[href^="#"]').on('click', function(e) {
			   // prevent default anchor click behavior
			   e.preventDefault();

			   // store hash
			   var hash = this.hash;

			   self.scrollToID(hash, settings.scrollSpeed);
			});

			if (settings.affixWrap) {
				var affixEl = jQuery(settings.affixWrap),
					affixOffset = affixEl.outerHeight();

				navEl.affix({
					offset: {
						top: affixOffset
					}
				});
			}

      this.scrollToID = function(id, speed) {
  			var targetOffset = jQuery(id).offset().top;

        jQuery('html, body').animate({
					scrollTop: targetOffset
				}, speed);
      };
    });
		// returns the jQuery object to allow for chainability.
		return this;
	}
})(jQuery);