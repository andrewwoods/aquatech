<?php
/**
* Sidebar for the Blog page
*
* @package Aquatech
* @subpackage Sidebars
* @author Andrew Woods
*/

?>
<aside id="sidebar-blog">
<div class="content">
<?php if ( ! dynamic_sidebar( 'blog' ) ) : ?>
	&nbsp;
<?php endif; ?>
</div>
</aside>
