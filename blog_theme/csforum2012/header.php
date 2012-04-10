<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, "right"); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/csforum.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<body <?php body_class(); ?>>
		<header>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<nav id="site_menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '<menu>%3$s</menu>' ) ); ?>
			</nav>
			<nav id="offsite_links">
				<p>Read more about <abbr title="content strategy">CS</abbr> Forum on these other services:</p>
				<?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => false, 'items_wrap' => '<menu>%3$s</menu>' ) ); ?>
			</nav>
		</header>
