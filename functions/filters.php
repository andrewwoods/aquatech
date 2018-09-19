<?php
/**
 * Filters
 */

function aquatech_check_title_support() {
	if ( ! function_exists( '_wp_render_title_tag' ) ||
	     ! current_theme_supports( 'title-tag' )
	) {
		add_filter( 'wp_title', 'aquatech_wp_title', 11, 3 );
	}
}

/**
 * Adds a date filter
 *
 * @param string $where clause to limit the query.
 * @return string Description
 * @access public
 */
function aquatech_recent_posts_where( $where = '' ) {
	$where .= ' AND post_date > ' . date( 'Y-m-d', strtotime( '-30 days' ) ) . "'";
	return $where;
}


function aquatech_wp_title( $title, $sep = ' : ', $seplocation = 'left' ) {

	// The Site Title under "Settings > General".
	$site_name = get_bloginfo( 'name' );

	// The Tagline under "Settings > General".
	$site_description = get_bloginfo( 'description', 'display' );

	// Add the blog description for the home/front page, if available.
	if ( is_home() || is_front_page() ) {
		if ( $site_description ) {
			$title = "$site_name $sep $site_description";
		} else {
			$title = $site_name;
		}
		return $title;
	}

	if ( 'right' === $seplocation ) {
		$title = $title . $site_name;
	} else {
		$title = $site_name . $title;
	}

	return $title;
}



/**
 * Remove some classes via a filter
 *
 * @param array $classes The array classes to remove.
 *
 * @return array
 */
function aquatech_body_class_filter( $classes ) {
	global $post;

	$classes[] = $post->post_name;

	// the classes get set by the indieweb-post-kinds plugin
	// and messup bridgy parsing.
	$items_to_remove = array( 'h-as-note', 'h-as-article', 'h-as-bookmark' );

	$classes = array_diff( $classes, $items_to_remove );

	return $classes;
}


