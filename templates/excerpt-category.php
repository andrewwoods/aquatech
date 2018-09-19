
<div class="h-entry">
	<h2 class="p-name"><a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<time class="dt-published" datetime="<?php echo the_date( 'c' ); ?>"><?php echo the_date(); ?></time>
	<div class="p-summary">
	<?php the_excerpt(); ?>
	</div>
</div>


