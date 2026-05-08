<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brc-arabia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'brc-arabia'); ?></a>

		<!-- Header Start -->
		<?php if (is_front_page()) {
			$headercls = "absoluteHeader";
		} else {
			$headercls = '';
		} ?>
		<header id="headerMain" class="mainHeader <?php echo $headercls; ?>">
			<div class="container-fluid">
				<div class="headerInner">
					<div class="navWrap navLeft">
						<nav id="site-navigation" class="main-navigation mainNav leftNav">
							<?php wp_nav_menu([
								'menu' => 'Main Menu Left'
							]); ?>
							<!-- <div class="menu-preview">
								<a href="#" class="btn">
									<img src="" alt="">
								</a>
								<a href="#" class="btn knowmore_btn">Know More</a>
							</div> -->
						</nav>
					</div>
					<div class="logo_area logo">
						<a href="<?php echo home_url(); ?>">
							<?php //the_custom_logo(); 
							?>
							<?php if (is_front_page()) { ?>
								<img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_logo.svg" alt="BRC Logo" class="logoLight">
								<img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_logo_dark.svg" alt="BRC Logo" class="logoDark">
							<?php } elseif (is_page_template('template-parts/content-contact.php') || is_404()) { ?>
								<img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_logo_white.svg" alt="BRC Logo" class="logoLight">
								<img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_logo_dark.svg" alt="BRC Logo" class="logoDark">
							<?PHP } else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_logo_dark.svg" alt="BRC Logo" class="">
							<?PHP } ?>
						</a>
					</div>
					<div class="navWrap navRight">
						<nav id="site-navigation" class="main-navigation mainNav">
							<?php wp_nav_menu([
								'menu' => 'Main Menu Right'
							]); ?>
							<div class="megaToggleIcon d-lg-flex d-none" aria-label="Toggle Menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="toggleIcon d-lg-none">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
		<!-- <div class="megaMenu">

		</div> -->