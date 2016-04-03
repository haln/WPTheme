<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--&#91;if lt IE 9&#93;>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<!&#91;endif&#93;-->
	<?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>
<header class="header">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2>This is the customized theme.</h2>
      <div id="logo">
          <img class = "logoImg" alt="League of Legend" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
      </div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				   <?php wp_nav_menu( array( 'theme_location' => 'in_header',
           'menu_class' => 'nav-menu',
           'menu_id' => 'primary-menu' ) ); ?>
			</nav>
</header>
