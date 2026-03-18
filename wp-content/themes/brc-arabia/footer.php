<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brc-arabia
 */

?>

<footer id="colophon" class="site-footer mainFooter position-relative">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5 col-12">
				<div class="footLogo">
					<div class="imgArea">
						<img src="<?php bloginfo('template_directory'); ?>/assets/media/footer-logo-brc.svg" alt="BRC Arabia">
					</div>
				</div>
				<div class="locations">
					<div class="location">
						<h4 class="text-white">Dubai</h4>
						<p class="text-white mb-0">PO Box 490008<br/>
							Dubai Industrial Park<br/>
							Dubai - UAE</p>
					</div>
					<div class="location">
						<h4 class="text-white">abu dhabi</h4>
						<p class="text-white mb-0">PO Box 490008<br/>
							Dubai Industrial Park<br/>
							Dubai - UAE</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div class="footNav">
					<div class="footNavItem">
						<h4 class="text-white">BRC Arabia</h4>
						<?php wp_nav_menu([
							'menu' => 'BRC Arabia'
						]); ?>
					</div>
					<div class="footNavItem">
						<h4 class="text-white">Products & Solutions</h4>
						<?php wp_nav_menu([
							'menu' => 'Products & Solutions'
						]); ?>
					</div>
					<div class="footNavItem">
						<h4 class="text-white">quick links</h4>
						<?php wp_nav_menu([
							'menu' => 'Quick Links'
						]); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footerBottom">
			<div class="grpLogo">
				<div class="imgArea">
					<img src="<?php bloginfo('template_directory'); ?>/assets/media/algurg_group_logo.svg" alt="Al Gurg Group">
				</div>
			</div>
			<div class="copyright">
				<p class="mb-0">©<?php echo date('Y'); ?> BRC ARABIA. All rights reserved</p>
			</div>
			<div class="social">
				<a href="#">
					Follow us on <img src="<?php bloginfo('template_directory'); ?>/assets/media/linkedin_icon.svg" alt="LinkedIn">
				</a>
			</div>
			<div class="credits">
				<p class="mb-0 text-end">built by Born28</p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	AOS.init({
		disable: 'mobile'
	});
</script>
</body>

</html>