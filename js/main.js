// Front Page Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  MAIN
	// ===================================================

	var mainController = new ScrollMagic.Controller();

	var NavBarScroll = new ScrollMagic.Scene({
		triggerElement: '.hero',
		offset: 50,
		triggerHook: 0
	})
	.on('enter', function() {
		$('#mainheader').removeClass('top-position');
	})
	.on('leave', function() {
		$('#mainheader').addClass('top-position');
	})
	// .addIndicators()
	.addTo(mainController);
	

});