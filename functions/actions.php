<?php
/**
 * Created by PhpStorm.
 * User: awoods
 * Date: 2018-06-06
 * Time: 19:55
 */


/**
 * My function to modify the main query object
 *
 * @param WP_Query $query query object to modify.
 */
function aquatech_modify_main_query( $query ) {
	if ( $query->is_category( [ 'articles', 'journal', 'tutorials' ] ) && $query->is_main_query() ) {
		$query->query_vars['posts_per_archive_page'] = 4;
	}
}



/**
 * Display an id attribute using it's slug for a post
 */
function body_id() {
	echo ' id="' . get_id_slug() . '" ';
}

/**
 * Retrieve the slug from the current post
 *
 * @return string
 */
function get_id_slug() {
	global $wp_query;

	$slug = '';
	if ( is_single() || is_page() ) {
		$post = $wp_query->get_queried_object();
		$slug = $post->post_name;
	}

	if ( is_archive() ) {
		if ( is_post_type_archive() ) {
			$post_type = get_query_var( 'post_type' );
			if ( is_array( $post_type ) ) {
				$post_type = reset( $post_type );
			}
			$slug = sanitize_html_class( $post_type );

		} elseif ( is_author() ) {
			$author = $wp_query->get_queried_object();
			if ( isset( $author->user_nicename ) ) {
				$slug = 'author-' . sanitize_html_class( $author->user_nicename, $author->ID );
			}
		} elseif ( is_category() ) {
			$cat = $wp_query->get_queried_object();
			$slug = 'category';
			if ( isset( $cat->term_id ) ) {
				$slug = 'category-' . sanitize_html_class( $cat->slug, $cat->term_id );
			}
		} elseif ( is_tag() ) {
			$tags = $wp_query->get_queried_object();
			$slug = 'tag';
			if ( isset( $tags->term_id ) ) {
				$slug = 'tag-' . sanitize_html_class( $tags->slug, $tags->term_id );
			}
		} elseif ( is_tax() ) {
			$term = $wp_query->get_queried_object();
			if ( isset( $term->term_id ) ) {
				$slug = 'term-' . sanitize_html_class( $term->slug, $term->term_id );
			}
		}
	}

	return $slug;
}


/**
 * Load Javascript files
 *
 * @return void
 */
function aquatech_load_js_scripts() {
	wp_register_script( 'aquatech', get_template_directory_uri() . '/js/aquatech.js', array( 'modernizr' ) );
	// Register the script like this for a theme.
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array() );

	// For either a plugin or a theme, you can then enqueue the script.
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'aquatech' );
}

/**
 * Load icon sprite file
 */
function aquatech_load_icomoon() {
	$src = get_template_directory_uri() . '/img/my-icons/flaticon.css';

	// Register the script like this for a theme.
	wp_enqueue_style( 'icomoon', $src );
}

/**
 * Print out the content of a variable to help debugging
 *
 * @param mixed $value the variable to debug.
 */
function debug_object( $value ) {
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}


/**
 * Set paging parameters for blog posts page
 *
 * @param WP_Query $query the query object to update.
 * @return WP_Query
 */
function aquatech_page_blog_posts( $query ) {

	if ( is_page( 'blog' ) ) {
		$query->set( 'posts_per_page', 5 );
		$query->set( 'orderby', 'post_date' );
		$query->set( 'order', 'DESC' );
	}

	return $query;
}

function aquatech_theme_support() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats',
		array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status'
		)
	);
}

