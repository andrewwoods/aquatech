<?php
/*
Template Name: Category
*/

get_header();
?>
<main id="main">
<div class="main-content">
	<?php
	$categories = get_the_category();
	$category   = $categories[0];
	?>
	<div class="boxed-aqua">
		<h1><?php echo $category->cat_name; ?></h1>
		<p><?php echo $category->description; ?></p>
	</div>
	<?php

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="<?php the_ID(); ?>" class="boxed">
				<?php get_template_part( 'templates/excerpt', 'category' ); ?>
			</article>
			<?php if ( is_single() ) : ?>
			<section class="comments">
				<?php comments_template(); ?>
			</section>
		<?php endif; ?>
			<?php
		endwhile;

		$pagination_links = '';
		if ( get_previous_posts_link() ) {
			$pagination_links .= get_previous_posts_link();
		}
		if ( get_next_posts_link() ) {
			if ( $pagination_links ) {
				$pagination_links .= '&nbsp; &mdash; &nbsp;';
			}
			$pagination_links .= get_next_posts_link();
		}
		echo $pagination_links;

	else :
	?>
		<article class="boxed">
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		</article>

		<?php
	endif;
	?>
</div>
</main>

<?php
get_footer();
?>
