<?php

/**
 * The template for displaying all single products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php while (have_posts()) :
        the_post(); ?>

        <!-- Banner section start -->
        <section class="projectIntroSec">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-12 projContCol">
                        <div class="projMainInfo position-relative">
                            <div class="backCta">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/backto_arrow.svg" alt="Back Arrow">
                                <a href="<?php echo home_url('/') ?>projects" class="text-black">Back to projects</a>
                            </div>
                            <div class="secHead">
                                <h1 class="xlTitle mb-0"><?php the_title(); ?></h1>
                                <div class="desc">
                                    <?php the_content(); ?>
                                    <!-- <p>Amet lorem viverra vestibulum ut fames morbi. Aliquam hac ultrices tellus ac neque. Vestibulum pellentesque condimentum egestas phasellus.</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="solutionInfo">
                            <div class="titleArea pb-2">
                                <h4>solutions provided:</h4>
                            </div>
                            <div class="solList">
                                <div class="solItem position-relative">Cut & bent rebar</div>
                                <div class="solItem position-relative">Welded wire mesh</div>
                                <div class="solItem position-relative">Cold drawn wire</div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-7 col-12">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="projFeatImg">
                                <div class="imgArea position-relative">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner section end -->

        <!-- Project content start -->
        <?php if (get_field('_project_detail_content') || get_field('_project_detail_image')): ?>
            <section class="projectIntroSec">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-12 projContCol">
                            <div class="projDetImg">
                                <?php $_project_detail_image = get_field('_project_detail_image'); ?>
                                <?php if ($_project_detail_image) : ?>
                                    <div class="imgArea">
                                        <img src="<?php echo esc_url($_project_detail_image['url']); ?>" alt="<?php echo esc_attr($_project_detail_image['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="projDetCont">
                                <div class="desc">
                                    <?php the_field('_project_detail_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Project content start -->

        <!-- Other projects section start -->

        <?php
        $current_proj_id = get_the_ID();

        $args = [
            'post_type'      => 'project', // change this
            'posts_per_page' => 4,
            'post__not_in'   => [$current_proj_id],
        ];

        $projquery = new WP_Query($args);

        if ($projquery->have_posts()): ?>
            <section class="relProjSec otherProjSec bg_theme_grey">
                <div class="container-left">
                    <div class="secHead">
                        <h3 class="mainTitle">Other projects with BRC</h3>
                    </div>
                    <div class="relProjList swiper">
                        <div class="swiper-wrapper">
                            <?php while ($projquery->have_posts()): $projquery->the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="relProjItem prodItem">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="projImg">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="prodInfo">
                                            <p><a href="<?php the_permalink(); ?>" class="linkInherit"><?php the_title(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <!-- <div class="swiper-slide">
                            <div class="relProjItem prodItem">
                                <div class="projImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_3.png" alt="">
                                </div>
                                <div class="prodInfo">
                                    <p>Yas marina formula 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relProjItem prodItem">
                                <div class="projImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_2.png" alt="">
                                </div>
                                <div class="prodInfo">
                                    <p>Dubai maktoum airport</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relProjItem prodItem">
                                <div class="projImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_4.png" alt="">
                                </div>
                                <div class="prodInfo">
                                    <p>Ruwais refinery expansion</p>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                    <div class="projSwiperNav">
                        <div class="swiper-button-prev">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-left-theme.svg" alt="Next" />
                        </div>
                        <div class="swiper-button-next">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Next" />
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Other projects section end -->

        <!-- Seemore section start -->

        <section class="seemoreSec borderTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12 p-0">
                        <div class="seemoreLinks position-relative">
                            <div class="seemoreLink">
                                <div class="ctaArea">
                                    <h4 class="subTitle color-theme">See more</h4>
                                    <a href="#" class="text-black">Cut & bent</a>
                                </div>
                            </div>
                            <div class="seemoreLink">
                                <div class="ctaArea">
                                    <a href="#" class="text-black">Cold drawn wire</a>
                                </div>
                            </div>
                            <div class="seemoreLink">
                                <div class="ctaArea">
                                    <a href="#" class="text-black">Engineering service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="seemoreImgArea">
                            <div class="imgArea">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/seemore_bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seemore section end -->

    <?php endwhile; // End of the loop.
    ?>
</main><!-- #main -->

<?php get_footer(); ?>