<!-- [FOOTER] -->
	<div id="footer">
		<div id="footer-content">

			<nav class="social-links">
			<?php
			$social_walker = new Social_Walker();
			$footer_menu_defaults = array(
				'container'      => '<ul>',
				'echo'           => true,
				'menu'           => 'footer_menu',
				'theme_location' => 'footer_menu',
				'walker'         => $social_walker,
			);
			?>
			<?php
			wp_nav_menu( $footer_menu_defaults );
			?>
			</nav>

			<p class="copyright clear">
				Andrew Woods &copy; <?php echo date( 'Y' ); ?>
			</p>

		</div>
		<br class="clear" />
	</div>
	<?php wp_footer(); ?>
</div> <!-- /.page-content -->
</div> <!-- /#page -->
</body>
</html>
