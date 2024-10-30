<?php
/**
* Plugin Name: Menuio
* Plugin URI: http://webovyprojekt.4fan.cz
* Description: Plugin for sharing posts to social sites
* Version: 0.0.1
* Author: Rostislav Viskot
* Author URI: http://rostislavviskot.4fan.cz
* License: GPL2
**/


//ICONS MADE BY FREPEPIK
function mcio_ico_scripts() {
	wp_register_script( 'main_javascript', plugins_url( '/functions/scroll.js', __FILE__ ) );
	wp_register_style( 'main_style', plugins_url( '/style/style.css', __FILE__ ) );
	wp_enqueue_style('main_style');
	wp_enqueue_script('main_javascript');
}
add_action("admin_enqueue_scripts", "mcio_ico_scripts");
add_action("wp_enqueue_scripts", "mcio_ico_scripts");
//add_action( 'wp_enqueue_scripts', 'scriptstr' );
add_action('admin_menu', 'create_mcio_ico');

add_action('admin_init', 'mcio_ico_settings');

function mcio_ico_settings() {
	register_setting('menu_settings','setting_1');
	register_setting("menu_settings","setting_2");
	register_setting('menu_settings','facebook');
	register_setting('menu_settings','twitter');
	register_setting('menu_settings','gplus');
	register_setting('menu_settings','pinterest');
	register_setting('menu_settings','linkedin');
	register_setting('menu_settings','size');
	register_setting('menu_settings','design');
	register_setting('menu_settings', 'animation');
	register_setting('menu_settings', 'scroll_background');
	register_setting('menu_settings', 'scroll_text');
	register_setting('menu_settings', 'scroll_ico');
	register_setting('menu_settings', 'custom_url');
	register_setting('menu_settings', 'custom_name');
	register_setting('menu_settings', 'custom_url2');
	register_setting('menu_settings', 'custom_name2');
	register_setting('menu_settings', 'custom_url3');
	register_setting('menu_settings', 'custom_name3');
}


function create_mcio_ico() {
	add_menu_page('Menuio', 'Menuio', 'administrator', 'menuio', 'mcio_ico_main'/*, plugin_dir_url( __FILE__ ) . 'img/menuio.png'*/);
}
include( plugin_dir_path( __FILE__ ) . 'functions/menuioadmin.php');
include( plugin_dir_path( __FILE__ ) . 'functions/menuiopost.php');


add_filter( "the_content", "mcio_ico_post" );

?>