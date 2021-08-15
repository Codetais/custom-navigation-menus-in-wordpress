<?php
function menu_scripts(){
	$uri                 =get_template_directory_uri();
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_style('all_css',$uri.'/assets/css/all.min.css',[],true,'all');
	wp_enqueue_script('all_jss',$uri.'/assets/js/all.min.js',[],true,true);
	wp_enqueue_script('menu_jss',$uri.'/assets/js/menu.js',[],true,true);
};
function menu_setup(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	register_nav_menu('primary',__('Primary Menu','menu'));
};
add_action('wp_enqueue_scripts','menu_scripts');
add_action('after_setup_theme','menu_setup');