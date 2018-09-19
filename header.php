<?php
/**
 * Primary HTML header
 *
 * The main file use to create the HTML chrome of the page.
 *
 * @package AquaTech
 * @subpackage HTML
 * @since 5.6.24
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ||
		 (
			 function_exists( '_wp_render_title_tag' ) &&
			 ! current_theme_supports( 'title-tag' )
		 )
	) :
	?>
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<?php
	endif;
	?>

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen"
		  charset="utf-8"/>
</head>

<body <?php body_class(); ?>>
<div class="skip">
	<a href="#main">Skip to Main Content</a>
</div>
<div id="page">
<div class="page-content">
	<header id="masthead">
		<div class="masthead-content">
		<a id="brand" class="" href="<?php echo esc_url( site_url() ); ?>"><img
			src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-ring.png"
			alt="Andrew Woods Seattle WordPress Developer"/></a>
		<?php
		$main_menu_defaults = [
			'container' => 'nav',
			'container_id' => 'nav',
			'container_class' => 'main-nav',
			'echo' => true,
			'menu' => '<ul>',
			'menu_class' => 'menu',
			'theme_location' => 'main_menu',
		];

		wp_nav_menu( $main_menu_defaults );
		?>
		</div>
	</header>
	<!-- [/HEADER]  -->
