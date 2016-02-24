<?php

function front_splash_include_script(){
	wp_enqueue_script('front_splash_script', get_template_directory_uri().'/js/front-splash.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'front_splash_include_script');

/* Add Nav Menus to Theme */
function theme_tutorials_menu_setup(){
	add_theme_support('menus');
	register_nav_menu('main_nav', 'Main Navigation Menu');
	register_nav_menu('footer_nav', 'Footer Navigation Menu');
}
add_action('init', 'theme_tutorials_menu_setup');

/* Add Sidebars to Theme */
function theme_tutorials_sidebar_setup(){
	register_sidebar([
		'name'=>'Main Sidebar',
		'id'=>'sidebar-1',
		'class'=>'main',
		'description'=>'The Main Sidebar',
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="sidebar-title">',
		'after_title'=>'</h1>'
	]);
}
add_action('widgets_init', 'theme_tutorials_sidebar_setup');

/* Add Theme Support Options */
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails', ['post']);
add_theme_support('post-formats',['image', 'video']);

/* Add filter for wp_title to fix title on front page */
add_filter( 'wp_title', 'fix_title_for_front', 10, 2 );
function fix_title_for_front( $title, $sep = ' | ' ){
	if( empty( $title ) && (is_home() || is_front_page()) )
		return __( 'Home' ) . $sep . ' ' . $seploc;
	return $title;
}
?>