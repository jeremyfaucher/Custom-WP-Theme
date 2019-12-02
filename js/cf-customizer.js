/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Custom Header Background Color
	wp.customize( 'header_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-header' ).css( {
				'background-color': to 
			});
		} );
	} );

	// Custom Header Text Color
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			$( 'h1.site-title a' ).css( {
				'color': to 
			});
		} );
	} );

// Custom Header Background Color
	wp.customize( 'footer_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				'background-color': to 
			});
		} );
	} );
	
} )( jQuery );