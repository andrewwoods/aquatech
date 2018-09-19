<?php
/*
Template Name: Projects
*/

get_header();
?>
<main id="main" class="wrapper">
<div>
<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<article class="boxed-aqua ms-all ml2-ml5 d3-d6">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php
	endwhile;
	wp_reset_query();

	/*
		The content about projects needs to be migrated to the CPT.
		Only text that describes the projects should be viewable from this loop.
	*/
endif;
?>

<?php

$project_args = array(
	'post_type' => 'project',
	'showposts' => 5,
	'orderby'  => 'modified',
	'order' => 'desc',
);

$project_loop = new WP_Query( $project_args );
if ( $project_loop->have_posts() ) :
	while ( $project_loop->have_posts() ) :
		$project_loop->the_post();
		$post_id = get_the_ID();

		$website_url = get_post_meta( $post_id, '_project_website_url', true );
		$code_url = get_post_meta( $post->ID, '_project_source_code_url', true );
		$link_text = get_post_meta( $post->ID, '_project_source_link_text', true );

		$website_link = '<a href="' . $website_url . '">' . $website_url . '</a>';

		if ( empty( $link_text ) ) {
			$link_text = $code_url;
		}
		?>
		<article class="ms-all ml2-ml5 d3-d6 boxed" >
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if ( $website_url ) : ?>
		<?php echo 'Project URL: ' . $website_link; ?><br />
		<?php endif; ?>

			<?php the_excerpt(); ?>
		</article>
	<?php
	endwhile;
	wp_reset_query();

else :
?>

	<article class="m-all d3 message">
	<h2 class="center">Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	</article>
	<?php get_search_form(); ?>

<?php endif; ?>
</div>
</main>

<?php get_sidebar( 'blog' ); ?>

<?php
get_footer();
?>
