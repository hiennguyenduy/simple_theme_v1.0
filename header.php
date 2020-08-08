<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h1><?php bloginfo('title'); ?></h1>
			<span><?php bloginfo('description'); ?></span>
		</div>
	</header>
	<nav class="main-nav">
		<div class="container">
			<?php
			$args = [
				'theme_location' => 'main-menu'
			];
			wp_nav_menu($args);
			?>
		</div>
	</nav>