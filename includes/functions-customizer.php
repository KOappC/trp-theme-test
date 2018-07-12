<?php

add_filter( 'wp_title', function($title, $sep) { 
	if(empty($title)) {
		return get_bloginfo('name') . ' ' . $sep . ' ' . get_bloginfo('description');
	}
		
	return $title;
}, 10, 3);

// remove unused customizer sections
function remove_customizer_settings( $wp_customize ){
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('custom_css');
}
add_action( 'customize_register', 'remove_customizer_settings', 20 );

// initialize theme-customizer.js
add_action( 'customize_preview_init', function() {
	wp_enqueue_script( 'trp-themecustomizer', TRP_THEME_URL .'/assets/js/theme-customizer.js', [ 'jquery','customize-preview' ] );
} );

add_action( 'customize_register', function( $wp_customize ) {

//	header
//

	// add header section
    $wp_customize->add_section( 'trp_header' , array(
        'title' => 'Header',
        'description' => 'Customize the header content.',
    ) );

	// header logo image
	//
	$wp_customize->add_setting( 'header-logo-image' , array(
		'default'   => '//:0',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header-logo-image', array(
		'label'      => __( 'Logo Image', 'TRP' ),
		'section'    => 'trp_header',
		'settings'   => 'header-logo-image',
		'priority'	 => 20,
		'type'		 => 'image'
	)));

	// header button text
	//
	$wp_customize->add_setting( 'header-btn-text' , array(
		'default'   => 'Apply',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header-btn-text', array(
		'label'      => __( 'Apply Button Text', 'TRP' ),
		'section'    => 'trp_header',
		'settings'   => 'header-btn-text',
		'priority'	 => 21,
		'type'		 => 'text'
	)));



//	footer
//

	// add footer section
	$wp_customize->add_section( 'trp_footer' , array(
		'title' => 'Footer',
		'description' => 'Customize the footer content.',
	) );

	// hfooter logo image
	//
	$wp_customize->add_setting( 'footer-logo-image' , array(
		'default'   => '//:0',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-logo-image', array(
		'label'      => __( 'Logo Image', 'TRP' ),
		'section'    => 'trp_footer',
		'settings'   => 'footer-logo-image',
		'priority'	 => 40,
		'type'		 => 'image'
	)));

	// footer nav heading one
	//
	$wp_customize->add_setting( 'footer-nav-heading-one' , array(
		'default'   => 'Games',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-nav-heading-one', array(
		'label'      => __( 'Menu Heading One', 'TRP' ),
		'section'    => 'trp_footer',
		'settings'   => 'footer-nav-heading-one',
		'priority'	 => 41,
		'type'		 => 'text'
	)));

	// footer nav heading two
	//
	$wp_customize->add_setting( 'footer-nav-heading-two' , array(
		'default'   => 'Community',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-nav-heading-two', array(
		'label'      => __( 'Menu Heading Two', 'TRP' ),
		'section'    => 'trp_footer',
		'settings'   => 'footer-nav-heading-two',
		'priority'	 => 42,
		'type'		 => 'text'
	)));

	// footer nav heading three
	//
	$wp_customize->add_setting( 'footer-nav-heading-three' , array(
		'default'   => 'Rules',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-nav-heading-three', array(
		'label'      => __( 'Menu Heading Three', 'TRP' ),
		'section'    => 'trp_footer',
		'settings'   => 'footer-nav-heading-three',
		'priority'	 => 43,
		'type'		 => 'text'
	)));


} );