<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Inconsolata|Montserrat:500,600" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner" data-sticky-container>
		<div class="site-title-bar title-bar sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;" style="z-index: 1000;" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<ul id="menu-main-navigation" class="dropdown menu desktop-menu" role="menubar" >
					<?php if(!is_front_page()) : ?>
						<li class="menu-item" role="menuitem"><a href="<?php home_url(); ?>/#projects">Projects</a></li>
						<li class="menu-item" role="menuitem"><a href="<?php home_url(); ?>/#experience">Experience</a></li>
						<li class="menu-item" role="menuitem"><a href="<?php home_url(); ?>/#about">About</a></li>
						<li class="menu-item" role="menuitem"><a href="<?php home_url(); ?>/#contact">Contact</a></li>
					<?php else: ?>
						<li class="menu-item" role="menuitem"><a data-smooth-scroll href="#projects">Projects</a></li>
						<li class="menu-item" role="menuitem"><a data-smooth-scroll href="#experience">Experience</a></li>
						<li class="menu-item" role="menuitem"><a data-smooth-scroll href="#about">About</a></li>
						<li class="menu-item" role="menuitem"><a data-smooth-scroll href="#contact">Contact</a></li>
					<?php endif; ?>
				</ul>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
