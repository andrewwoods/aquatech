<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
	if ( is_home() || is_front_page() ) {
		bloginfo( 'description' );
		echo ' | ';
	} else {
		wp_title( '|', 'true', 'right' );
	}
		?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="openid.server" href="http://www.myopenid.com/server">
	<link rel="openid.delegate" href="http://awoods.myopenid.com/">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" charset="utf-8" />
</head>

<body class="error-page">
<div id="page">
<div class="content">
	<div id="masthead">
		<a id="brand" href="<?php echo site_url(); ?>">Andrew Woods<span>Seattle WordPress Developer</span></a>

		<nav id="nav">
		<?php
		$main_menu_defaults = array(
			'container'      => '<ul>',
			'echo'           => true,
			'menu'           => 'main_menu',
			'theme_location' => 'main_menu',
		);

		wp_nav_menu( $main_menu_defaults );
		?>
		</nav>
	</div>
<!-- [/HEADER]  -->
