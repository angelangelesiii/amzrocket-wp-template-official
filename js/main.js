// Front Page Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  MAIN
	// ===================================================

	var mainController = new ScrollMagic.Controller();


	// ===================================================
	//  NAVBAR SCENE
	// ===================================================

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


	// ===================================================
	//  MOBILE MENU
	// ===================================================

	$('#mainheader button.mobile-menu').on('click', function(e) {
		$('#mobileMenuPane').removeClass('menu-closed');
	});

	$('#mobileMenuPane button.mobile-menu-close-button').on('click', function(e) {
		$('#mobileMenuPane').addClass('menu-closed');
	});
	

	// ===================================================
	//  SLICK INIT
	// ===================================================

	$('.testimonials').slick({
		speed: 1000,
		centerMode: false,
		slidesToShow: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 8000,
		pauseOnFocus: false,
		pauseOnHover: false,

		// BREAKPOINTS
		responsive: [
			// Medium (<1024)
			{
				breakpoint: 1023,
				settings: {
					slidesToShow: 1,
					centerMode: false
				}
			},
			// Small (<640)
			{
				breakpoint: 639,
				settings: {
					slidesToShow: 1,
					centerMode: false
				}
			}
		]
		// END BREAKPOINTS
	});

});