<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brc-arabia
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="defaultTemp newsMain">
		<div class="container-theme">
			<div class="row col_rev_mob">
				<?php
				while (have_posts()) :
					the_post(); ?>
					<div class="col-lg-7 col-12">
						<div class="postCont">
							<div class="titleArea">
								<div class="backBtn mb-2" data-aos="fade-up" data-aos-duration="1200">
									<a href="#" class="subTitle linkInherit">News & insights</a>
								</div>
								<h1 class="mainTitle" data-aos="fade-up" data-aos-duration="1500"><?php the_title(); ?></h1>
								<h4 class="postDate color-theme" data-aos="fade-up" data-aos-duration="1200"><?php the_date(); ?></h4>
							</div>
							<div class="pageCont" data-aos="fade-up" data-aos-duration="1600">
								<?php				// get_template_part( 'template-parts/content', 'page' );
								the_content(); ?>
							</div>
						</div>
						<div class="postNav" data-aos="fade-up" data-aos-duration="1500">
							<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous', 'brc-arabia') . '</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__('Next', 'brc-arabia') . '</span>',
								)
							);
							?>
							<div class="readAll">
								<div class="ctaBtn maxCont">
									<a href="<?php echo home_url('/') ?>news/" class="text-black text-uppercase">Read all</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-12">
						<?php if (has_post_thumbnail()): ?>
							<div class="postThumb postThumb pb-lg-5 pb-3">
								<div class="imgArea" data-aos="fade-up" data-aos-duration="1500">
									<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
								</div>
							</div>
						<?php endif; ?>
					</div>

					<?php //get_template_part( 'template-parts/content', get_post_type() );

					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'brc-arabia') . '</span> <span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'brc-arabia') . '</span> <span class="nav-title">%title</span>',
					// 	)
					// );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif; 
					?>
				<?php endwhile; // End of the loop.
				?>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
