<?php
function tbinorwich_scripts() {
	wp_enqueue_style( 'tbinorwich', get_stylesheet_uri() );
	wp_enqueue_script( array( 'json2', 'jquery' ) );
	wp_enqueue_script( 'tbinorwich', get_template_directory_uri() . '/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tbinorwich_scripts' );
