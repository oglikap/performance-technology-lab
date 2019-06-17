<?php

// Add scripts and stylesheets
function techlab_scripts() {
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit.min.css' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
  wp_enqueue_style( 'rubik_mono', 'https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap' );
  wp_enqueue_style( 'merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,900&display=swap' );
  // wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit-icons.min.js' );
  wp_enqueue_script( 'uikit_lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/components/lightbox.min.js' );
  wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'techlab_scripts' );

// Custom menu's
function bs_hoofd_menu() {
  register_nav_menu( 'bs_hoofd_menu', __('Hoofdmenu') );
}
add_action( 'init', 'bs_hoofd_menu' );


/**********************************************************************************
bs_techlab_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function bs_techlab_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'producties' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'bs_techlab_theme_support' );
