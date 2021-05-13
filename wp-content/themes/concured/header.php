<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-light.ico?light" media="(prefers-color-scheme:no-preference)">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-dark.ico?dark"  media="(prefers-color-scheme:dark)">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-light.ico?light" media="(prefers-color-scheme:light)">
    <?php wp_head(); ?>
</head>

<body>
	<header class="flex">
		<div class="container-main">
			<div class="container-inner flex">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo">
				</div>
				<div class="menu">Menu</div>
				<nav class="flex ml-auto">
					<?php
						$menuParameters = [
								'theme_location'  => '',
								'menu'            => 'top',
								'container'       => false,
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => false,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => '',
						];

						echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
					?>
					<a href="#" data-toggle="modal-contacts" class="modal-toggle">Let's Connect!</a>
				</nav>
			</div>
		</div>
	</header>