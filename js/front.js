// Front Page Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  INIT
	// ===================================================

	var fpController = new ScrollMagic.Controller();

	// ===================================================
	//  ICONS ANIMATION
	// ===================================================

	var iconScene = new ScrollMagic.Scene({
		triggerElement: '.icons',
	})
	.setTween(TweenMax.staggerFrom('.icons .icon', 1.4, {
		y: '30px',
		autoAlpha: 0,
		ease: Power3.easeOut
	}, 0.5))
	// .addIndicators()
	.addTo(fpController);


});