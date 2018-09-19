<?php
/*
Template Name: Page
*/

get_header();
?>
<main id="main" >
<div class="main-content">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>
		<article id="<?php the_ID(); ?>" class="h-entry boxed">
			<h1 class="p-name" ><?php the_title(); ?></h1>
			<div class="e-content">
			<?php the_content(); ?>
			</div>
		</article>
<?php
	endwhile;
else :
?>
	<article class="ms-all boxed">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
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
