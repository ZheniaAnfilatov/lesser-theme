<?php
// добавление разширенных возможностей
if ( ! function_exists( 'lesser_theme_setup' ) ) :
  function lesser_theme_setup() {
    // добавление тега title
    add_theme_support( 'title-tag' );

    // добовление логотипа
    add_theme_support( 'custom-logo', [
      'width'       => 105,
      'flex-height' => true,
      'header-text' => 'Universal',
      'unlink-homepage-logo' => false, // WP 5.5
    ] );    

// регистрация меню
    register_nav_menus( [
      'header_menu' => 'Меню в шапке',
      'footer_menu' => 'Меню в подвале'
    ] );  
  }
endif;
add_action( 'after_setup_theme', 'lesser_theme_setup' );

/*==============================================================================*/

// подключение стилей и скриптов
function enqueue_lesser_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'lesser-theme', get_template_directory_uri() . '/assets/css/lesser-theme.css', 'style', time());
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', 'style', time());
  wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', 'style', time());
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', 'style', time());
  wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css', 'style', time());
  wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
}
add_action( 'wp_enqueue_scripts', 'enqueue_lesser_style' );
