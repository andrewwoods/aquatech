<?php
/**
* Sidebar for the Home page
*
* @package Aquatech
* @subpackage Sidebars
* @author Andrew Woods
*/

?>
<aside id="sidebar-home">
<div class="content">
<?php if ( ! dynamic_sidebar( 'home' ) ) : ?>
	<img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-photo.png" alt="blank photo" />
<?php endif; ?>
</div>
</aside>
