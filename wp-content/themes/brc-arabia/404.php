<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package brc-arabia
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container-theme">
			<div class="row flxdir_col_mob">
				<div class="page-content w-100-mob">
					<div class="titleArea">
						<h4 class="fnfsubTitle text-uppercase" data-aos="fade-up" data-aos-duration="1200">That's an error</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/media/404.svg" alt="404 images" data-aos="fade-up" data-aos-duration="1500">
					</div>
					<div class="desc" data-aos="fade-up" data-aos-duration="1600">
						<p class="btn_yellow mb-0">We're sorry, the request URL could not be found.<br />
							Please return to the homepage.</p>
					</div>
					<div class="ctaBtn maxCont" data-aos="fade-up" data-aos-duration="1800">
						<a href="<?php echo home_url('/'); ?>" class="btn_yellow hover_white">return to homepage</a>
					</div>
				</div><!-- .page-content -->
				<div class="navLinkArea w-100-mob">
					<div class="navLinkCol" data-aos="fade-up" data-aos-duration="1200">
						<h4 class="text-white text-uppercase">Quick Links</h4>
						<ul>
							<li><a href="<?php echo home_url('/'); ?>">Home page</a></li>
							<li><a href="<?php echo home_url('/'); ?>about/#brc-story">About BRC Arabia</a></li>
							<li><a href="<?php echo home_url('/') ?>about/#algurg-group">Know more of Al Gurg Group</a></li>
						</ul>
					</div>
					<div class="navLinkCol" data-aos="fade-up" data-aos-duration="1800">
						<h4 class="text-white text-uppercase">OTHER</h4>
						<ul>
							<li><a href="<?php echo home_url('/') ?>products/">Our Products</a></li>
							<li><a href="<?php echo home_url('/') ?>news/">News</a></li>
							<li><a href="<?php echo home_url('/') ?>resources/">Resources</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
