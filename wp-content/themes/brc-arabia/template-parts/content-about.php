<?php

/**
 * Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<div class="sticky_wrapper position-relative">
    <?php if (get_field('_abt_ban_subtitle') || get_field('_abt_ban_title') || get_field('_about_ban_video') || get_field('_abt_ban_desc')): ?>
        <section class="bannerSec innerBanner abtBannerSec">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="bannerTitleArea">
                            <div class="secHead">
                                <h4 class="subTitle color-theme text-capitalize" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_abt_ban_subtitle'); ?></h4>
                                <h1 class="xlTitle text-black mb-0" data-aos="fade-up" data-aos-duration="1400"><?php the_field('_abt_ban_title'); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bannerImgArea">
                            <!-- <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/about_banner_image.png" alt="About BRC">
                    </div> -->
                            <?php if (get_field('_about_ban_video')) : ?>
                                <div class="vidArea" data-aos="fade-up" data-aos-duration="1200">
                                    <?php $abtvidposter = get_field('_abt_ban_vid_thumb'); ?>
                                    <video class="abtVideo" autoplay="" muted="" loop="false" playsinline="" poster="<?php echo esc_url($abtvidposter); ?>">
                                        <source src="<?php the_field('_about_ban_video'); ?>" type="video/mp4">
                                        <source src="<?php the_field('_about_ban_video'); ?>" type="video/ogg">
                                        No video support.
                                    </video>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('_abt_ban_desc')): ?>
                                <div class="desc" data-aos="fade-up" data-aos-duration="1800">
                                    <p class="subTitle mb-0"><?php the_field('_abt_ban_desc'); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Banner section end -->

    <!-- Our story section start -->

    <section class="ourStory">
        <div class="container-fluid p-0">
            <?php $_story_sec_img_ = get_field('_story_sec_img_'); ?>
            <?php if ($_story_sec_img_) : ?>
                <div class="abtMainImg position-relative">
                    <img src="<?php echo esc_url($_story_sec_img_['url']); ?>" alt="<?php echo esc_attr($_story_sec_img_['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php if (have_rows('_our_story_cont_area')) : ?>
                <?php while (have_rows('_our_story_cont_area')) : the_row(); ?>
                    <?php if (get_sub_field('_story_cont_subtitle') || get_sub_field('_story_cont_title') || get_sub_field('_story_cont_desc') || get_sub_field('_story_cont_img')): ?>
                        <div id="brc-story" class="abtstorySec primary_bg flxdir_col_mob">
                            <div class="storycontArea mw-100-mob">
                                <div class="vertLine" data-aos="fade-left" data-aos-duration="2000"></div>
                                <div class="secHead">
                                    <h4 class="subTitle text-white mb-3"><?php the_sub_field('_story_cont_subtitle'); ?></h4>
                                    <h1 class="mainTitle text-white mb-0" data-aos="fade-up" data-aos-duration="2000">
                                        <?php the_sub_field('_story_cont_title'); ?>
                                    </h1>
                                </div>
                                <div class="desc" data-aos="fade-up" data-aos-duration="2000">
                                    <p class="mb-0 text-white"><?php the_sub_field('_story_cont_desc'); ?></p>
                                </div>
                                <div class="horzLine" data-aos="fade-up" data-aos-duration="2000"></div>
                            </div>
                            <?php $_story_cont_img = get_sub_field('_story_cont_img'); ?>
                            <?php if ($_story_cont_img) : ?>
                                <div class="storyImgArea mw-100-mob">
                                    <img src="<?php echo esc_url($_story_cont_img['url']); ?>" alt="<?php echo esc_attr($_story_cont_img['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('_grp_info_area')) : ?>
                <?php while (have_rows('_grp_info_area')) : the_row(); ?>
                    <?php if (get_sub_field('_grp_cont_subtitle') || get_sub_field('_grp_cont_title') || get_sub_field('_grp_info_btn_link') || get_sub_field('_grp_cont_img')): ?>
                        <div id="algurg-group" class="abtgrpSec abtstorySec1 primary_bg flxdir_col_mob">
                            <div class="horzLine" data-aos="fade-up" data-aos-duration="2000"></div>
                            <?php $_grp_cont_img = get_sub_field('_grp_cont_img'); ?>
                            <?php if ($_grp_cont_img) : ?>
                                <div class="storyImgArea grpImgArea position-relative mw-100-mob">
                                    <div class="vertLine" data-aos="fade-left" data-aos-duration="2000"></div>
                                    <img src="<?php echo esc_url($_grp_cont_img['url']); ?>" alt="<?php echo esc_attr($_grp_cont_img['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="storycontArea mw-100-mob">
                                <div class="secHead">
                                    <h4 class="subTitle text-white mb-3" data-aos="fade-up" data-aos-duration="1800"><?php the_sub_field('_grp_cont_subtitle'); ?></h4>
                                    <h1 class="mainTitle text-white mb-0" data-aos="fade-up" data-aos-duration="2000"><?php the_sub_field('_grp_cont_title'); ?></h1>
                                    <?php $_grp_info_btn_link = get_sub_field('_grp_info_btn_link'); ?>
                                    <?php if ($_grp_info_btn_link) : ?>
                                        <div class="maxCont ctaBtn" data-aos="fade-up" data-aos-duration="2200">
                                            <a href="<?php echo esc_url($_grp_info_btn_link['url']); ?>" target="<?php echo esc_attr($_grp_info_btn_link['target']); ?>" class="text-white">
                                                <?php the_sub_field('_grp_info_btntxt'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- Our story section end -->

<!-- Stats section start -->
<?php if (have_rows('_statistics_list') || have_rows('_industries_list')) : ?>
    <section class="statsSec abtStatSec">
        <div class="container-theme">
            <?php if (have_rows('_statistics_list') || get_field('_stat_sec_title') || get_field('_stat_sec_desc')) : ?>
                <div class="row justify-content-between flxdir_col_mob statsRow">
                    <div class="col-lg-7 col-12">
                        <div class="statsList">
                            <?php while (have_rows('_statistics_list')) : the_row(); ?>
                                <div class="statItem" data-aos="fade-up" data-aos-duration="1200">
                                    <h4 class="color-theme"><?php the_sub_field('_stat_value'); ?></h4>
                                    <p class="text-black"><?php the_sub_field('_stat_label'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="secHead">
                            <h2 class="mainTitle text-black mb-0" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_stat_sec_title'); ?></h2>
                            <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                <p><?php the_field('_stat_sec_desc'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (have_rows('_industries_list')) : ?>
                <div id="sectors" class="row keyIndusRow">
                    <div class="secHead" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="mainTitle text-black mb-0"><?php the_field('_indus_sec_title'); ?></h2>
                    </div>
                    <div class="indusList flexHead flxdir_col_mob">
                        <?php while (have_rows('_industries_list')) : the_row(); ?>
                            <div class="indusItem" data-aos="fade-up" data-aos-duration="1200">
                                <?php $_indus_img = get_sub_field('_indus_img'); ?>
                                <?php if ($_indus_img) : ?>
                                    <div class="imgArea">
                                        <img src="<?php echo esc_url($_indus_img['url']); ?>" alt="<?php echo esc_attr($_indus_img['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="titleArea">
                                    <h4 class="indusTitle text-center"><?php the_sub_field('_indus_title'); ?></h4>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Stats section end -->

<!-- Vision & mission section start -->

<section class="vismisSec">
    <div class="container-fluid pe-0">
        <div class="vismisMain d-flex">
            <div class="vismisContArea">
                <?php if (get_field('_vismis_sec_title') || get_field('_vismis_sec_desc')) : ?>
                    <div class="secHead">
                        <h4 class="subTitle color-theme mb-2"><?php the_field('_vismis_sec_title'); ?></h4>
                        <div class="desc">
                            <p class="text-black"><?php the_field('_vismis_sec_desc'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('_vis_cont_area')) : ?>
                    <?php while (have_rows('_vis_cont_area')) : the_row(); ?>
                        <?php if (get_sub_field('_vis_cont_title') || get_sub_field('_vis_cont_desc')): ?>
                            <div class="visCont expandCol">
                                <div class="contCard">
                                    <h3 class="mainTitle color-theme"><?php the_sub_field('_vis_cont_title'); ?></h3>
                                    <div class="desc">
                                        <p class="text-black"><?php the_sub_field('_vis_cont_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('_mis_cont_area')) : ?>
                    <?php while (have_rows('_mis_cont_area')) : the_row(); ?>
                        <?php if (get_sub_field('_mis_cont_title') || get_sub_field('_mis_cont_desc') || get_sub_field('_mis_cont_img')): ?>
                            <div class="misCont expandCol">
                                <div class="contCard">
                                    <?php $_mis_cont_img = get_sub_field('_mis_cont_img'); ?>
                                    <?php if ($_mis_cont_img) : ?>
                                        <div class="imgArea">
                                            <img src="<?php echo esc_url($_mis_cont_img['url']); ?>" alt="<?php echo esc_attr($_mis_cont_img['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="mainTitle color-theme"><?php the_sub_field('_mis_cont_title'); ?></h3>
                                    <div class="desc">
                                        <p class="text-black"><?php the_sub_field('_mis_cont_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php $_vismis_sec_col_img = get_field('_vismis_sec_col_img'); ?>
            <?php if ($_vismis_sec_col_img) : ?>
                <div class="vismisImgArea">
                    <div class="imgArea">
                        <img src="<?php echo esc_url($_vismis_sec_col_img['url']); ?>" alt="<?php echo esc_attr($_vismis_sec_col_img['alt']); ?>" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Vision & mission section end -->

<!-- Sustainability section start -->

<?php if (get_field('_sust_sec_subtitle') || get_field('_sust_sec_desc') || get_field('_sust_sec_bg')): ?>
    <section id="sustainability" class="sustainSec">
        <?php $_sust_sec_bg = get_field('_sust_sec_bg'); ?>
        <?php if ($_sust_sec_bg) : ?>
            <div class="sustainImgArea">
                <div class="imgArea">
                    <img src="<?php echo esc_url($_sust_sec_bg['url']); ?>" alt="<?php echo esc_attr($_sust_sec_bg['alt']); ?>" />
                </div>
            </div>
        <?php endif; ?>
        <div class="sustainContArea container-theme">
            <div class="secHead">
                <h4 class="subTitle color-theme" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_sust_sec_subtitle'); ?></h4>
                <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                    <p><?php the_field('_sust_sec_desc'); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Sustainability section end -->

<!-- Certifications section start -->

<section id="certification" class="certifSec1">
    <div class="container-theme">
        <?php get_template_part('template-parts/sections/certificates-section'); ?>
    </div>
</section>

<!-- Certifications section end -->

<!-- Seemore section start -->
 
<section class="seemoreSec">
    <div class="container-fluid">
        <?php get_template_part('template-parts/sections/seemore-section'); ?>
    </div>
</section>

<!-- Seemore section end -->

<?php get_footer(); ?>