<?php

/**
 * Template Name: News Page
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
                <div class="projBanInfo secHead position-relative">
                    <div class="titleArea">
                        <!-- <h4 class="subTitle color-theme">Projects</h4> -->
                        <h1 class="xlTitle mb-0" data-aos="fade-up" data-aos-duration="1200">All <?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Products list section start -->

<?php $prodargs = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
);
$prod_query = new WP_Query($prodargs);

if ($prod_query->have_posts()) : ?>
    <section class="allprojectsSec allnewsSec">
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
            </div>
            <div class="row">
                <?php while ($prod_query->have_posts()) : $prod_query->the_post(); ?>
                    <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="1200">
                        <div class="newsItem">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="newsImg">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="newsInfo">
                                <div class="titleArea">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>" class="linkInherit hover_white"><?php the_title(); ?></a>
                                    </h4>
                                </div>
                                <div class="desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="readMore">
                                    <a href="<?php the_permalink(); ?>">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
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