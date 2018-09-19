<article class="h-entry boxed-aqua">
	<header>
		<?php
		$post_id = get_the_ID();

		$website_url  = get_post_meta( $post_id, '_project_website_url', true );
		$code_url = get_post_meta( $post->ID, '_project_source_code_url', true );
		$link_text = get_post_meta( $post->ID, '_project_source_link_text', true );

		if ( empty( $link_text ) ) {
			$link_text = $code_url;
		}

		$category_links = get_the_term_list( $post_id, 'category', '', ', ', '' );
		$tax_links = get_the_term_list( $post_id, 'post_tag', '', ', ', '' );

		$author_id = get_the_author_meta( 'ID' );

		?>
		<h1 class="p-name"><?php the_title(); ?></h1>
		<div class="publishing-info clearfix">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 96, '', get_the_author() ); ?>
			<div class="h-card">
			<span class="p-author"><?php the_author(); ?></span>
			</div>
			<a href="<?php the_permalink(); ?>" class="u-url screen-reader-text"><?php the_permalink(); ?></a>
			<time class="dt-published" datetime="<?php echo the_date( 'Y-m-d h:i:sP' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
		</div>
	</header>
	<div class="e-content entry-content content">
		<?php the_content(); ?>
	</div>
	<footer>
		<div>
		<div class="taxonomy-list">Section: <?php echo $category_links; ?></div>
		<div class="taxonomy-list">Topic: <?php echo $tax_links; ?></div>
		</div>
	</footer>
</article>
