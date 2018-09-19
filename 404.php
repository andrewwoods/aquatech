<?php
/**
 * Page Not Found - 404 Error Page
 *
 * @package Aquatech
 * @subpackage Error Pages
 * @author awoods
 */

get_header( 'error' );
?>
<section class="main">
	<div class="content">
		<article>
			<h1>Page Not Found</h1>

			<p class="special">Well shucks! The page you tried to reach can't be located.
				Perhaps you'd like to <a href="/about">learn about me</a>, or some
				<a href="/projects">cool software projects</a>, or just go back to my
				<a href="/">homepage</a> to browse my website content.</p>

		</article>
	</div>
</section>
<?php
get_footer();

