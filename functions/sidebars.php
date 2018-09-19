<?php
/**
 * Sidebar Registration
 */

register_sidebar(
	array(
		'id' => 'cta',
		'name' => __( 'Call to Actions', 'aquatech' ),
		'description' => __( 'Area for Calls to Action', 'aquatech' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	)
);

register_sidebar(
	array(
		'id' => 'blog',
		'name' => __( 'Blog Sidebar', 'aquatech' ),
		'description' => __( 'Sidebar on the blog page', 'aquatech' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	)
);

register_sidebar(
	array(
		'id' => 'home',
		'name' => __( 'Home Sidebar', 'aquatech' ),
		'description' => __( 'Sidebar in the Homepage', 'aquatech' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	)
);


