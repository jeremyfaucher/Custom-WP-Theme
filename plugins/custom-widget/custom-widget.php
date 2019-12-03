<?php
/**
 * Plugin Name: Custom Widget
 * Plugin URI:
 * Description: Simple plugin to show Custom Widgets
 * Version: 1.0
 * Author: Jeremy Faucher
 * Author URI:
 * License: GPL2
 */
 
 //Add JavaScript
 //function add_scripts(){
	//wp_enqueue_script('custom-scripts',plugins_url().'/custom/js/custom-widget.js',false);
 //}
 //add_action('wp_enqueue_scripts','add_scripts');
 
 //Include Class
 include('class.custom-widget.php');
 
 // register Foo_Widget widget
function register_custom_widget() {
    register_widget( 'Custom_Widget' );
}
add_action( 'widgets_init', 'register_custom_widget' );