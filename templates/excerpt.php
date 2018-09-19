<?php
/**
 * Loop content from index.php
 *
 * @package AquaTech\Templates
 */

?>
<article id="<?php the_ID(); ?>" class="ms-all ml2-ml5 d2-d7 boxed-aqua">
<?php if ( is_single() || is_page() ) : ?>
	<h1><?php the_title(); ?></h1>
<?php else : ?>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>
	<div class="content">
		<?php if ( is_single() ) : ?>
			<time datetime="<?php echo the_date( 'c' ); ?>"><?php echo the_date(); ?></time>
		<?php endif; ?>
		<?php the_excerpt(); ?>
	</div>
</article>

