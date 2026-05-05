<?php

/**
 * Template Name: QHSE Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->

<section class="qhseIntroSec">
    <div class="container-theme">
        <div class="row">
            <div class="secHead">
                <h4 class="subTitle mb-2" data-aos="fade-up" data-aos-duration="1200">QHSE</h4>
                <h1 class="xlTitle" data-aos="fade-up" data-aos-duration="1600"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row qhseContRow">
            <div class="col-lg-6 col-12">
                <div class="qhseMainCont">
                    <div class="desc" data-aos="fade-up" data-aos-duration="1200">
                        <?php the_content(); ?>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="imgArea" data-aos="fade-up" data-aos-duration="1600">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (have_rows('_qhse_policy_accomlist')) : ?>
                <div class="col-lg-6 col-12 px-lg-0">
                    <div class="qhseHowCont">
                        <?php if (get_field('_qhse_policy_accom_title')): ?>
                            <div class="titleArea">
                                <h4 class="subTitle" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_qhse_policy_accom_title'); ?></h4>
                            </div>
                        <?php endif; ?>
                        <div class="qhseList">
                            <?php while (have_rows('_qhse_policy_accomlist')) : the_row(); ?>
                                <div class="qhseItem" data-aos="fade-up" data-aos-duration="1400">
                                    <?php $_qhse_policy_accom_icon = get_sub_field('_qhse_policy_accom_icon'); ?>
                                    <?php if ($_qhse_policy_accom_icon) : ?>
                                        <div class="imgArea">
                                            <img src="<?php echo esc_url($_qhse_policy_accom_icon['url']); ?>" alt="<?php echo esc_attr($_qhse_policy_accom_icon['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="desc">
                                        <p class="mb-0 text-dark"><?php the_sub_field('_qhse_policy_accom_desc'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Content section start -->
<?php if (get_field('_qhse_cont_box') || get_field('_qhse_img_col')): ?>
    <section class="commitSec mb-5">
        <div class="container-fluid">
            <div class="bg_theme_grey">
                <div class="container-theme">
                    <div class="row">
                        <?php if (get_field('_qhse_cont_box')): ?>
                            <div class="col-1 col-12">
                                <div class="plainCont" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="desc">
                                        <?php the_field('_qhse_cont_box'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $_qhse_img_col = get_field('_qhse_img_col'); ?>
                        <?php if ($_qhse_img_col) : ?>
                            <div class="col-2 col-12">
                                <div class="commitImgArea" data-aos="fade-up" data-aos-duration="1600">
                                    <div class="imgArea">
                                        <img src="<?php echo esc_url($_qhse_img_col['url']); ?>" alt="<?php echo esc_attr($_qhse_img_col['alt']); ?>" />
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Content section end -->

<?php get_footer(); ?>