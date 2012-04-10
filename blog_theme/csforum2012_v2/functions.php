<?php
	add_theme_support('post-thumbnails'); 
	
	function register_my_menus() {
		register_nav_menus(
			array(
				'primary' => __( 'Main Menu' ),
				'social' => __( 'Social links' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );
?>