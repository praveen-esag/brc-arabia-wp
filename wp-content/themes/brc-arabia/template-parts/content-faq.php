<?php

/**
 * Template Name: FAQs Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<section class="bannerSec faqsSec">
    <div class="container-theme">
        <div class="row justify-content-between">
            <div class="col-lg-9 col-12">
                <div class="faqBanInfo secHead position-relative">
                    <div class="titleArea">
                        <h4 class="subTitle color-theme" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_faq_ban_sec_subtitle'); ?></h4>
                        <?php if (get_field('_faq_ban_sec_title')): ?>
                            <h1 class="xlTitle mb-0" data-aos="fade-up" data-aos-duration="1400"><?php the_field('_faq_ban_sec_title'); ?></h1>
                        <?php else: ?>
                            <h1 class="xlTitle mb-0" data-aos="fade-up" data-aos-duration="1400"><?php the_title(); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (have_rows('_faqs_list')) : ?>
                    <div class="faqData justify-content-between">
                        <div class="faqsList">
                            <?php
                            $faq = 1;
                            while (have_rows('_faqs_list')) : the_row(); ?>
                                <div class="faqItem <?php if ($faq == 1) {
                                                        echo 'activeFaq';
                                                    } ?>" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="faqHead">
                                        <h4 class="">
                                            <?php the_sub_field('_faqs_question'); ?>
                                            <div class="plusminus ">
                                                <img class="down" src="<?php echo get_template_directory_uri(); ?>/assets/media/faq_arrow_down.svg" alt="Arrow Down">
                                                <img class="up" src="<?php echo get_template_directory_uri(); ?>/assets/media/faq_arrow_up.svg" alt="Arrow Up">
                                            </div>
                                        </h4>
                                    </div>
                                    <div class="faqDesc desc <?php if ($faq == 1) {
                                                                    echo 'show';
                                                                } ?>">
                                        <p><?php the_sub_field('_faqs_answers'); ?></p>
                                    </div>
                                </div>
                            <?php $faq++;
                            endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
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

<?php get_footer(); ?>