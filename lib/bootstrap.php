<?php

  function tp_enqueue_styles() {
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'tp_enqueue_styles');
  
?>