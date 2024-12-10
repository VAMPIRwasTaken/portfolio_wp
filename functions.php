<?php

function theme_scripts_method(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts_method');

add_filter( 'auto_update_plugin', '__return_true' );

add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') )

register_sidebar();

?>