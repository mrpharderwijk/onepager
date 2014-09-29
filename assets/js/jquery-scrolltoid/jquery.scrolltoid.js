(function($){
	$.fn.scrollToID = function (options) {
		var defaults = {
				scrollOffset: 0,	// give the scrollOffset
				scrollSpeed: 1000,	// give the speed of scrolling
			},
			settings = $.extend({}, defaults, options),
			self = this;

			jQuery(this).on('click', function(e) {
			   // prevent default anchor click behavior
			   e.preventDefault();

			   // store hash
			   var hash = this.hash;

			   self.scrollToID(hash, settings.scrollSpeed);
			});

      	this.scrollToID = function(id, speed) {
	  		var targetOffset = jQuery(id).offset().top;

	        jQuery('html, body').animate({
				scrollTop: targetOffset - settings.scrollOffset
			}, speed);
      	};

		// returns the jQuery object to allow for chainability.
		return this;
	}
})(jQuery);