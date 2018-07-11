<?php
/***************
 * This file should not be manipulated!  This is a core file to the theme.
 * Please make changes to the files in the /includes folder.
 * Add template files in the root theme folder
 ***************/

// global variable
define('TRP_THEME_PATH', get_template_directory());
define('TRP_THEME_URL', get_template_directory_uri());

// do not load the admin bar
show_admin_bar( false );

// proxy function for registering styles (helps with cachebusting)
function trp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all' ) {
	wp_enqueue_style( $handle, $src, $deps, ($ver ? $ver : filemtime( str_replace(TRP_THEME_URL, TRP_THEME_PATH, $src) )), $media);
}

// proxy function for registering styles (helps with cachebusting)
function trp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = true ) {
	wp_enqueue_script( $handle, $src, $deps, ($ver ? $ver : filemtime( str_replace(TRP_THEME_URL, TRP_THEME_PATH, $src) )), $in_footer);
}

// this will add css classes to nav menu items
add_filter('nav_menu_css_class',function($classes, $item, $args) {
	if(isset($args->li_classes)) {
		$classes[] = $args->li_classes;
	}
	return $classes;
},1,3);
	
// this will add css classes to nav menu links
add_filter('nav_menu_link_attributes',function($atts, $item, $args) {
	$classes = $item->classes;
	if(isset($args->a_classes)) {
		$classes[] = $args->a_classes;
	}
	$atts['class'] = implode(' ', $classes);
	return $atts;
},1,3);
		
// customizer loading
require_once TRP_THEME_PATH . '/includes/functions-customizer.php';
	
// media loading
require_once TRP_THEME_PATH . '/includes/functions-media.php';

// asset loading
require_once TRP_THEME_PATH . '/includes/functions-assets.php';

// menu loading
require_once TRP_THEME_PATH . '/includes/functions-menus.php';

// import page classes
require_once TRP_THEME_PATH . '/includes/page_classes/_Page_Template.class.php';
foreach (glob(TRP_THEME_PATH . '/includes/page_classes/*.class.php') as $filename) { require_once $filename; }