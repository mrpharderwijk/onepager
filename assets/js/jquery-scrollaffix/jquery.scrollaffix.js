(function($){
	$.fn.scrollAffix = function (options) {
		var defaults = {
				navWrap: '.navbar',	// give the navigation container
				affixWrap: false	// if a affix is needed give the element id/class
			},
			settings = $.extend({}, defaults, options);

		this.each(function() {
			var navEl = jQuery(settings.navWrap);

			if (settings.affixWrap) {
				var affixEl = jQuery(settings.affixWrap),
					affixOffset = affixEl.outerHeight();

				navEl.affix({
					offset: {
						top: affixOffset - 80
					}
				});
			}
    	});
		// returns the jQuery object to allow for chainability.
		return this;
	}
})(jQuery);