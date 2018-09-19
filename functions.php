<?php
require_once 'class-social-walker.php';
require_once 'functions/actions.php';
require_once 'functions/filters.php';
require_once 'functions/sidebars.php';

add_filter( 'body_class', 'aquatech_body_class_filter', 11 );
add_action( 'wp_enqueue_scripts', 'aquatech_load_js_scripts' );
add_action( 'wp_enqueue_scripts', 'aquatech_load_icomoon' );
add_action( 'after_setup_theme', 'aquatech_theme_support' );
add_action( 'init', 'aquatech_check_title_support' );

add_action( 'pre_get_posts', 'aquatech_modify_main_query' );

/* -------------------------------------------------------------------------- */


/**
 * Provide a fallback if theme-support for title-tag not avaiable
 *
 * On the homepage, it add the site description to the site name. On
 * other pages, it add the site name to the standard page title
 *
 * @since 1.0
 * @uses wp_title filter
 *
 * @param string $title the title of the page
 * @param string $sep a separator. one or more characters to divide the
 *        page title
 * @param string $seplocation can be 'left' or 'right'. default: left.
 * @return string
 */
/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                    MENUS AND SIDEBARS                   *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
) );


