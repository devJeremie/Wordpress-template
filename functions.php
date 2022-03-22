<?php

  // J'active la prise en compte de la balise <title></title>
  add_theme_support('title-tag');

  // J'active la prise en compte des images de mise en avant des articles
  add_theme_support('post-thumbnails');

  // Je charge mon CSS et mon JS
  add_action('wp_enqueue_scripts', 'loadCSSandJS');

  function loadCSSandJS() {

    // Je charge le style.css
    wp_enqueue_style( 
      'adam',
      get_stylesheet_uri(), 
      array(), 
      '1.0'
    );

    // Je charge mes variables de thème
    wp_enqueue_style(
      'adam_variables',
      get_template_directory_uri() . '/assets/css/variables.css',
      array(),
      '1.0'
    );

    // Je charge le style principal
    wp_enqueue_style(
      'adam_main',
      get_template_directory_uri() . '/assets/css/main.css',
      array('adam_variables'),
      '1.0'
    );

    // Je charge mon fichier de scripts principal
    wp_enqueue_script(
      'adam_main',
      get_template_directory_uri() . '/assets/js/scripts.js',
      array(),
      '1.0',
      true
    );
  
  }

  // Permet l'upload d'un logo par l'utilisateur du thème
  add_action('after_setup_theme', 'custom_logo_setup');

  function custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true
    );
    add_theme_support('custom-logo', $defaults);
  }

  // Création des menus
  register_nav_menus(array(
    'header' => 'Header',
    'footer' => 'Footer',
  ));

  // Création d'une sidebar
  register_sidebar(array(
    'id' => 'bottom-sidebar',
    'name' => 'Bas de page (au dessus du footer)',
    'before_widget'  => '<div id="%1$s" class="sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="sidebar__widget__title">',
    'after_title' => '</p>',
  ));