<?php
/* Add styles and scripts */
add_action( 'wp_enqueue_scripts',  function() {
	// load styles
	trp_enqueue_style( 'theme-global', TRP_THEME_URL . '/assets/css/styles.css');
	trp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
	
	// let's switch out jQuery with the latest
	wp_deregister_script( 'jquery' );
	trp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', [], '3.2.1' );
	
	// load scripts
	trp_enqueue_script( 'theme-global', TRP_THEME_URL . '/assets/js/app.js', ['jquery'] );
});