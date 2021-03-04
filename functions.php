<?php

//ajout de css et de js dans le header
function scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri().'/header/js/scripts.js');
  wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style( 'index', get_template_directory_uri().'/css/index.css');
  wp_enqueue_style( 'header', get_template_directory_uri().'/header/css/header.css');
  wp_enqueue_style( 'footer', get_template_directory_uri().'/footer/css/footer.css');
  wp_enqueue_style( 'page-fexible', get_template_directory_uri().'/aproposetsavoirfaire/css/page-flexible.css');
  wp_enqueue_style( 'page-realisations', get_template_directory_uri().'/realisation/css/page-realisations.css');
  wp_enqueue_style( 'page-contact', get_template_directory_uri().'/contact/css/page-contact.css');
  wp_enqueue_style( 'page-mentionl', get_template_directory_uri().'/contact/css/page-mentionl.css');
  wp_enqueue_script('main-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
}
add_action( 'wp_enqueue_scripts', 'scripts' );
add_theme_support('menus');
register_nav_menu('main_menu', 'Menu principal');
