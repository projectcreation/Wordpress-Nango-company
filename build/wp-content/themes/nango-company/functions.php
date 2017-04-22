<?php

function nango_styles_loader() {
  wp_enqueue_style( 'semantic-UI-styles', get_template_directory_uri() .        '/sources/vendor/frameworks/SemanticUI/semantic.css' );
  
  wp_enqueue_style( 'flexgrid-styles', get_template_directory_uri() .           '/sources/vendor/libs/flexboxgrid/flexboxgrid-12-cols-15-gutter.css' );

  wp_enqueue_style( 'swiper-styles', get_template_directory_uri() .             '/sources/vendor/libs/swiper/swiper.min.css' );
  
  wp_enqueue_style( 'mobile-menu-button-styles', get_template_directory_uri() . '/sources/vendor/libs/Mobile-menu-buttons/mobile-menu-buttons.css' );

  wp_enqueue_style( 'normalize-styles', get_template_directory_uri() .          '/sources/vendor/libs/normalizeCSS/normalize-5.0.0.css' );

  wp_enqueue_style( 'nango-layout-styles', get_template_directory_uri() .       '/sources/theme/styles/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'nango_styles_loader' );




function nango_scripts_loader() {
  wp_enqueue_script( 'semantic-UI-scripts', get_template_directory_uri() .           '/sources/vendor/frameworks/SemanticUI/semantic.js', array(), false, true );
  
  wp_enqueue_script( 'semantic-UI-settings-scripts', get_template_directory_uri() .  '/sources/theme/scripts/scripts-semanticUI.js', array(), false, true );

  
  wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() .                '/sources/vendor/libs/swiper/swiper.min.js', array(), false, true );
  
  wp_enqueue_script( 'swiper-settings-scripts', get_template_directory_uri() .       '/sources/theme/scripts/scripts-swiper.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'nango_scripts_loader' );







function nango_theme_setup() {
  add_theme_support( 'title-tag' );

  add_theme_support( 'custom-logo' , array(
      'height' => 60,
      'width'  => 60,
      'flex-height' => true
  ));

  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 120, 120 );

  add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
  ));

  add_theme_support( 'post-formats', array(
      'aside',
      'image',
      'video',
      'gallery'
  ));

  register_nav_menu('main_nav', 'Main nav');
}
add_action( 'after_setup_theme', 'nango_theme_setup' );




