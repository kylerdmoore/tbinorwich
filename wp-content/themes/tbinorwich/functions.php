<?php
function tbinorwich_enqueue_scripts() {
	wp_enqueue_style( 'tbinorwich', get_stylesheet_uri() );
	wp_enqueue_script( 'json2' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'tbinorwich', get_template_directory_uri() . '/script.js' );
}
add_action( 'wp_enqueue_scripts', 'tbinorwich_enqueue_scripts' );