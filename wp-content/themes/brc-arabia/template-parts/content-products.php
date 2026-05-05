<?php

/**
 * Template Name: Products Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<section class="bannerSec projBannerSec">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-12 col-12">
                <div class="projBanInfo prodsBanInfo secHead position-relative">
                    <div class="titleArea">
                        <h4 class="subTitle color-theme" data-aos="fade-up" data-aos-duration="1200">BRC Arabia solutions</h4>
                        <h1 class="xlTitle mb-0" data-aos="fade-up" data-aos-duration="1400">Our product range</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Products list section start -->

<?php $prodargs = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
);
$prod_query = new WP_Query($prodargs);

if ($prod_query->have_posts()) : ?>
    <section class="allprojectsSec allprodsSec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 d-none">
                    <div class="projFilters flexHead justify-content-end">
                        <div class="filterItem" data-aos="fade-up" data-aos-duration="1200">
                            <div class="ctaBtn">
                                <a href="#" class="text-black">product</a>
                            </div>
                        </div>
                        <div class="filterItem" data-aos="fade-up" data-aos-duration="1400">
                            <div class="ctaBtn">
                                <a href="#" class="text-black">sector</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="allprodList">
                        <?php while ($prod_query->have_posts()) : $prod_query->the_post(); ?>
                            <div class="prodItem allprojItem" data-aos="fade-up" data-aos-duration="1200">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="prodImg position-relative">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="prodInfo">
                                    <p><a href="<?php the_permalink(); ?>" class="linkInherit"><?php the_title(); ?></a></p>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Products list section end -->

<!-- Certifications section start -->

<section class="certifSec1">
    <div class="container-theme">
        <?php get_template_part('template-parts/sections/certificates-section'); ?>
    </div>
</section>

<!-- Certifications section end -->

<!-- Seemore section start -->

<section class="seemoreSec borderTop">
    <div class="container-fluid">
        <?php get_template_part('template-parts/sections/seemore-section'); ?>
    </div>
</section>

<!-- Seemore section end -->

<?php get_footer(); ?>