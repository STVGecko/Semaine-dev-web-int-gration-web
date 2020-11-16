<?php

//ajout des css et js dans le header


function scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'general', get_template_directory_uri().'/css/site.css');
}
add_action( 'wp_enqueue_scripts', 'scripts' );
