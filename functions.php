<?php

//ajout de css et de js dans le header
function scripts() {

  wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style( 'index', get_template_directory_uri().'/css/index.css');
  wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css');
  wp_enqueue_style( 'header.responsive', get_template_directory_uri().'/css/header.responsive.css');
  wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css');
  wp_enqueue_style( 'footer.responsive', get_template_directory_uri().'/css/footer.responsive.css');
  wp_enqueue_style( 'page-fexible', get_template_directory_uri().'/css/page-flexible.css');
  wp_enqueue_style( 'page-realisations', get_template_directory_uri().'/css/page-realisations.css');
  wp_enqueue_style( 'page-contact', get_template_directory_uri().'/css/page-contact.css');
  //wp_enqueue_script(); si besoin de js
}
add_action( 'wp_enqueue_scripts', 'scripts' );
add_theme_support('menus');
register_nav_menu('main_menu', 'Menu principal');;
