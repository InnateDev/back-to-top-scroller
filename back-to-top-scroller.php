<?php
/*
Plugin Name: Back to top scroller
Plugin URI: http://innate.co.za
Description: Display a back to top icon on your web site allowing users to click to scroll to the top of the page
Author: Laurence Tuck
Version: 0.1
Author URI: http://www.innate.co.za
*/

// toggle editor script
add_action( 'wp_enqueue_scripts', 'add_back_to_top_script' );

/// load neccesary scripts
function add_back_to_top_script() {
		// css
		wp_enqueue_style( 'backtotopscrollercss', plugin_dir_url( __FILE__ ) . 'css/backtotopscroller.css' );    
        // needs jquery
        wp_enqueue_script( 'jquery' );
        // load toggle function
        wp_enqueue_script( 'backtotopscrollerjs', plugin_dir_url( __FILE__ ) . 'js/backtotopscroller.js' );		         
}
