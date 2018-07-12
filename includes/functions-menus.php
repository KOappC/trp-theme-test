<?php
/* Example use of wp_nav_menu with class support on li and a elements
wp_nav_menu([
	 'theme_location' => 'header-menu',
	 'container' => false,
	 'items_wrap' => '%3$s', // this removes the ul wrapper
	 'li_classes' => '',
	 'a_classes' => ''
]);
*/

// register menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus( [
		'header-nav' => 'Header Nav',
		'footer-one' => 'Footer One',
		'footer-two' => 'Footer Two',
		'footer-three' => 'Footer Three'
	]);
}