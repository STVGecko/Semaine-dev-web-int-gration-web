<?php function scripts() {
  wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style( 'general', get_template_directory_uri().'/css/site.css');
  wp_enqueue_style( 'index', get_template_directory_uri().'/css/index.css');
  wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css');
  wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css');
  //wp_enqueue_script(); si besoin de js
}
?>
