<?php

/**
 * Template Name: Engineering Services Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<section class="projectIntroSec1 engIntroSec">
    <div class="container-fluid">
        <div class="row justify-content-between borderTop">
            <div class="col-lg-5 col-12 engContCol">
                <div class="engMainInfo position-relative">
                    <div class="secHead">
                        <?php if (get_field('_eng_sec_subtitle')): ?>
                            <h4 class="subTitle color-theme mb-2"><?php the_field('_eng_sec_subtitle'); ?></h4>
                        <?php endif; ?>
                        <h1 class="xlTitle mb-5"><?php the_title(); ?></h1>
                        <div class="desc">
                            <!-- <p class="text-dark">BRC Arabia provides reinforcement detailing services based on approved construction drawings, utilizing advanced AutoCAD and specialised CAD RC software to produce precise bar detailing and Bar Bending Schedules for client and consultant approval.</p>
                            <p class="text-dark">While not involved in structural design, the Engineering team supports clients by identifying discrepancies, coordinating with consultants, and ensuring clarity through continuous engagement to maintain smooth project execution and avoid delays.</p> -->
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php $_eng_bansec_btn_link = get_field('_eng_bansec_btn_link'); ?>
                    <?php if ($_eng_bansec_btn_link) : ?>
                        <div class="ctaArea mt-5">
                            <div class="ctaBtn maxCont">
                                <a href="<?php echo esc_url($_eng_bansec_btn_link); ?>" class="color-theme"><?php the_field('_eng_bansec_btn_txt'); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (has_post_thumbnail()): ?>
                <div class="col-lg-7 col-12">
                    <div class="engFeatImg">
                        <div class="imgArea position-relative">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Project content start -->
<section class="projectIntroSec">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <?php $_eng_img_col = get_field('_eng_img_col'); ?>
            <?php if ($_eng_img_col) : ?>
                <div class="col-lg-6 col-12 projContCol">
                    <div class="engProdImg">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/engineering/engineering_products_col.png" alt="">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (have_rows('_eng_cont_col')) : ?>
                <?php while (have_rows('_eng_cont_col')) : the_row(); ?>
                    <div class="col-lg-6 col-12">
                        <div class="engProdCont">
                            <div class="titleArea">
                                <h4 class="subTitle"><?php the_sub_field('_eng_cont_title'); ?></h4>
                            </div>
                            <div class="desc">
                                <?php the_sub_field('_eng_cont_box'); ?>
                            </div>
                            <?php $_eng_cont_btnlink = get_sub_field('_eng_cont_btnlink'); ?>
                            <?php if ($_eng_cont_btnlink) : ?>
                                <div class="ctaArea mt-5">
                                    <div class="ctaBtn maxCont">
                                        <a href="<?php echo esc_url($_eng_cont_btnlink); ?>" class="color-theme"><?php the_sub_field('_eng_cont_btntxt'); ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Project content start -->

<!-- Resources section start -->

<?php if (get_field('_eng_res_sec_title') || have_rows('_eng_resources_list')): ?>
    <section class="resourceSec">
        <div class="resBanImg">
            <?php if (get_field('_eng_res_sec_bg')) : ?>
                <div class="imgArea">
                    <img src="<?php the_field('_eng_res_sec_bg'); ?>" alt="">
                </div>
            <?php endif ?>
        </div>
        <div class="container-theme resCont">
            <div class="secHead position-relative">
                <h2 class="xlTitle text-white"><?php the_field('_eng_res_sec_title'); ?></h2>
                <?php if (have_rows('_eng_resources_list')): ?>
                <div class="ctaArea flexNav">
                    <?php while (have_rows('_eng_resources_list')) : the_row(); ?>
                        <div class="ctaBtn">
                            <a href="<?php the_sub_field('_eng_resource_file'); ?>" class="btn_yellow"><?php the_sub_field('_eng_resourse_name'); ?></a>
                        </div>
                    <?php endwhile; ?>
                    <!-- <div class="ctaBtn">
                        <a href="#" class="btn_yellow">certificates</a>
                    </div>
                    <div class="ctaBtn">
                        <a href="#" class="btn_yellow">qualification documents</a>
                    </div> -->
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Resources section end -->

<?php get_footer(); ?>