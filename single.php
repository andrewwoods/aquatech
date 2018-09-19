<?php
/*
Template Name: Single
*/
$args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'show_option_none'   => '',
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'walker'             => null,
);

$project_technologies_args = $args;
$project_technologies_args['title_li'] = __('Technologies:', 'aquatech' );
$project_technologies_args['taxonomy'] = 'technology';

$project_contributions_args = $args;
$project_contributions_args['title_li'] = __( 'Contributions:', 'aquatech' );
$project_contributions_args['taxonomy'] = 'contribution';


get_header();
?>
<main id="main">
<div class="main-content">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

?>
	<?php get_template_part( 'templates/content', 'single' ); ?>

		<section class="comments boxed">
		<?php comments_template(); ?>
		</section>
<?php
	endwhile;

else :
?>
	<article class="message">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>
	</article>

<?php endif; ?>
</div>
</main>

<?php get_footer(); ?>
