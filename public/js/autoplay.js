var wfAutoplayDotClass = wfCoBlocksAutoplaySettings.cssClass ? '.' + wfCoBlocksAutoplaySettings.cssClass : '';

jQuery( function() {
	window.setInterval( function() {
		jQuery( '.wp-block-' + wfCoBlocksAutoplaySettings.carouselClass + wfAutoplayDotClass + ' .slick-next.slick-arrow' ).click();
	}, 1000 * wfCoBlocksAutoplaySettings.interval );

	if ( wfCoBlocksAutoplaySettings.pauseOnHover ) {
		jQuery( '.wp-block-' + wfCoBlocksAutoplaySettings.carouselClass + wfAutoplayDotClass ).on( 'mouseenter', function() {
			jQuery( '.wp-block-' + wfCoBlocksAutoplaySettings.carouselClass + wfAutoplayDotClass + ' .slick-next' ).removeClass( 'slick-arrow' );
		} ).on( 'mouseleave', function() {
			jQuery( '.wp-block-' + wfCoBlocksAutoplaySettings.carouselClass + wfAutoplayDotClass + ' .slick-next' ).   addClass( 'slick-arrow' );
		} );
	}
} );
