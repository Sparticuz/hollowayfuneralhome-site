<?php
	
	/*Add Menu Management, Thumbnail support and RSS to head*/
	if (function_exists('add_theme_support')){
		add_theme_support('menus');
		add_theme_support('automatic-feed-links');
	}

	//Register Main Menu
	add_action('init', 'register_main_menu');
	function register_main_menu(){
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu' )
			)
		);
	}
	
	// Disable the admin bar, set to true if you want it to be visible.
	show_admin_bar( false );
	
	// Load jQuery from Google
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
		wp_register_script('foundation', (get_stylesheet_directory_uri()."/javascripts/foundation.js"), false);
		wp_register_script('app', (get_stylesheet_directory_uri()."/javascripts/app.js"), false);
		wp_register_script('modernizr', (get_stylesheet_directory_uri()."/javascripts/modernizr.foundation.js"), false);
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr');
		wp_enqueue_script('foundation');
		wp_enqueue_script('app');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
	//Add the 'nice' class to the contact form <form> tag
	function your_custom_form_class_attr( $class ) {
		return $class .= ' nice';
	}
	add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );
    
?>