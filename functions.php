<?php

//ajout des css et js dans le header


function scripts() {
  wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style( 'general', get_template_directory_uri().'/css/site.css');
  //wp_enqueue_script(); si besoin de js
}
add_action( 'wp_enqueue_scripts', 'scripts' );
