<?php

add_filter( 'wp_title', function($title, $sep) { 
	if(empty($title)) {
		return get_bloginfo('name') . ' ' . $sep . ' ' . get_bloginfo('description');
	}
		
	return $title;
}, 10, 3);

/*
// initialize theme-customizer.js
add_action( 'customize_preview_init', function() {
	wp_enqueue_script( 'trp-themecustomizer', TRP_THEME_URL .'/assets/js/theme-customizer.js', [ 'jquery','customize-preview' ] );
} );
*/

add_action( 'customize_register', function( $wp_customize ) {

//	header
//

	// add header section
    $wp_customize->add_section( 'trp_header' , array(
        'title' => 'Header',
        'description' => 'Customize the header content.',
    ) );



//	footer
//

	// add footer section
	$wp_customize->add_section( 'trp_footer' , array(
		'title' => 'Footer',
		'description' => 'Customize the footer content.',
	) );


} );