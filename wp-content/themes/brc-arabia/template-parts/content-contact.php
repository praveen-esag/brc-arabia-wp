<?php

/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->

<section class="contHeadSec">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-end flxdir_col_mob">
            <div class="infoCol col-12">
                <div class="secHead">
                    <div class="titleArea">
                        <h4 class="subTitle text-white" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_cont_ban_sec_subtitle'); ?></h4>
                        <h1 class="xlTitle text-white mb-0" data-aos="fade-up" data-aos-duration="1400"><?php the_field('_cont_ban_sec_title'); ?></h1>
                    </div>
                </div>
                <?php if (have_rows('office_info', 'option')) : ?>
                    <div class="addrsInfo">
                        <?php while (have_rows('office_info', 'option')) : the_row(); ?>
                            <div class="adrsBox">
                                <h4 class="subTitle text-white" data-aos="fade-up" data-aos-duration="1200"><?php the_sub_field('_office_name'); ?></h4>
                                <div class="desc adrs" data-aos="fade-up" data-aos-duration="1400">
                                    <p class="mb-0"><?php the_sub_field('_office_address'); ?>
                                        <a href="<?php the_sub_field('_direction_link'); ?>" target="_blank">Get direction</a>
                                    </p>
                                </div>
                                <div class="desc phone" data-aos="fade-up" data-aos-duration="1600">
                                    <?php if (have_rows('_office_phone')) : ?>
                                        <?php while (have_rows('_office_phone')) : the_row(); ?>
                                            <p class="mb-0"><a href="tel:<?php esc_attr(the_sub_field('_phone_number')); ?>"><?php the_sub_field('_phone_number'); ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <!-- <div class="adrsBox">
                                <h4 class="subTitle text-white">Abu Dhabi</h4>
                                <div class="desc adrs">
                                    <p class="mb-0">5th Floor, Makeen tower - Ajman Bank<br />
                                        Salaam St. Abu Dhabi - UAE
                                        <a href="#">Get direction</a>
                                    </p>
                                </div>
                                <div class="desc phone">
                                    <p class="mb-0"><a href="#">+971 50 6321 173</a></p>
                                    <p class="mb-0"><a href="#">+971 50 4629 907</a></p>
                                </div>
                            </div> -->
                    </div>
                <?php endif; ?>
            </div>
            <div class="formVidCol col-12">
                <div class="contFormArea flxdir_col_mob">
                    <div class="formCol formWhite" data-aos="fade-up" data-aos-duration="1200">
                        <?php echo do_shortcode('[contact-form-7 id="3e5fbd3" title="Contact Page Form"]'); ?>
                    </div>
                    <?php if (get_field('_cont_ban_sec_vid')) : ?>
                        <div class="vidArea" data-aos="fade-up" data-aos-duration="1500">
                            <?php $contvidposter = get_field('_cont_ban_sec_vidthumb');
                            $contvid = get_field('_cont_ban_sec_vid'); ?>
                            <video class="abtVideo" autoplay="" muted="" loop="false" playsinline="" poster="<?php echo esc_url($contvidposter); ?>">
                                <source src="<?php echo $contvid; ?>" type="video/mp4">
                                <source src="<?php echo $contvid; ?>" type="video/ogg">
                                No video support.
                            </video>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Resources section start -->
<?php if (get_field('_cont_res_sec_title') || have_rows('_cont_resources_list')): ?>
    <section class="resourceSec">
        <div class="resBanImg">
            <?php if (get_field('_cont_res_sec_bg')) : ?>
                <div class="imgArea">
                    <img src="<?php the_field('_cont_res_sec_bg'); ?>" alt="Resources section">
                </div>
            <?php endif ?>
        </div>
        <div class="container-theme resCont">
            <div class="secHead position-relative">
                <h2 class="xlTitle text-white" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_cont_res_sec_title'); ?></h2>
                <div class="ctaArea flexNav">
                    <?php while (have_rows('_cont_resources_list')) : the_row(); ?>
                        <div class="ctaBtn" data-aos="fade-up" data-aos-duration="1400">
                            <a href="<?php the_sub_field('_cont_resource_file'); ?>" class="btn_yellow"><?php the_sub_field('_cont_resourse_name'); ?></a>
                        </div>
                    <?php endwhile; ?>
                    <!-- <div class="ctaBtn">
                        <a href="#" class="btn_yellow">certificates</a>
                    </div>
                    <div class="ctaBtn">
                        <a href="#" class="btn_yellow">qualification documents</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Resources section end -->

<!-- Seemore section start -->

<section class="seemoreSec borderTop">
    <div class="container-fluid">
        <?php get_template_part('template-parts/sections/seemore-section'); ?>
    </div>
</section>

<!-- Seemore section end -->

<?php get_footer(); ?>