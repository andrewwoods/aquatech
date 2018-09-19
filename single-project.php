<?php
/*
Template Name: Single
*/


get_header();
?>
<section id="main">
<div class="content wrapper">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		$post_id = get_the_ID();
		$source_text = get_post_meta( $post_id, '_project_source_link_text', true );
		$source_url  = get_post_meta( $post_id, '_project_source_code_url', true );
		$website_url = get_post_meta( $post_id, '_project_website_url', true );

		if ( $source_url ) {
			if ( empty( $source_text ) ) {
				$source_text = $source_url;
			}
			$source_link  = '<a href="' . $source_url . '">' . $source_text . '</a>';
		}

		if ( $website_url ) {
			$website_link = '<a href="' . $website_url . '">' . $website_url . '</a>';
		}

?>
		<article id="<?php echo $post_id; ?>" class="ms-all ml2-ml5 d2-d7 boxed" >
		<h1><?php the_title(); ?></h1>
		<div>
		<?php if ( $website_url ) : ?>
		<?php echo 'Project URL: ' . $website_link; ?><br />
		<?php endif; ?>
		<?php if ( $source_url ) : ?>
		<?php echo 'Source URL: ' . $source_link; ?><br />
		<?php endif; ?>
		</div>
		<div>
		Technologies:
		<?php
		echo get_the_term_list( $post_id, 'technology', '<ul class="flat inline"><li>', ',</li> <li>', '</li></ul>' );
		?>
		</div>

		<?php the_content(); ?>


		</article>
		<section class="comments">
			&nbsp;
		</section>
<?php
	endwhile;

else :
?>
	<article>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>
	</article>

<?php endif; ?>
</div>
</section>

<?php
get_footer();
?>
