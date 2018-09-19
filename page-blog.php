<?php
/*
Template Name: Blog Home
*/

get_header();
?>
<main id="main" class="seventy">
<div class="content">
<?php
$blog_loop = new WP_Query( 'showposts=5&orderby=date' );
if ( $blog_loop->have_posts() ) :
	while ( $blog_loop->have_posts() ) :
		$blog_loop->the_post();
		?>
		<article>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
		</article>
	<?php
	endwhile;
	wp_reset_query();

else :
?>

	<h2 class="center">Not Found</h2>
	<article class="center">
	Sorry, but you are looking for something that isn't here.
	</article>
	<?php get_search_form(); ?>

<?php
endif;
?>
</div>
</main>

<?php get_sidebar( 'blog' ); ?>

<?php
get_footer();
?>
