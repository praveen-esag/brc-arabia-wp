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
        <section class="bannerSec prodBannerSec">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-12 col-12">
                        <div class="breadcrumb" data-aos="fade-up" data-aos-duration="1200">
                            <ul class="breadcrumbList">
                                <li class="breadcrumbItem home">
                                    <a href="<?php echo home_url('/'); ?>">Home</a>
                                </li>
                                <li class="breadcrumbItem">
                                    <a href="<?php echo home_url('/'); ?>products/">Products</a>
                                </li>
                                <li class="breadcrumbItem current">
                                    <a href="#" class="text-upper1"><?php the_title(); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="prodBanInfo position-relative">
                            <div class="prodBanImg imgArea position-relative gradOverlayImg" data-aos="fade-up" data-aos-duration="1200">
                                <?php $bannerImg = get_field('_hm_banner_image'); ?>
                                <img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>">
                            </div>
                            <div class="titleArea">
                                <h1 class="xlTitle text-white mb-0" data-aos="fade-up" data-aos-duration="1600"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner section end -->

        <!-- Product detail main start -->

        <?php $avail_type = get_field('_avail_type');
        $avail_label = $avail_type['label'];
        $avail_value = $avail_type['value']; ?>
        <div class="productMain">
            <div class="productMainWrap">
                <div class="floatNav">
                    <div class="floatNavList">
                        <div class="floatNavItem"><a href="#overview"><span>Overview</span></a></div>
                        <?php if ($avail_value !== 'none'): ?>
                            <div class="floatNavItem"><a href="#<?php echo $avail_value; ?>" class="hover_theme"><span><?php echo $avail_label; ?></span></a></div>
                        <?php endif; ?>
                        <div class="floatNavItem"><a href="#faq" class="hover_theme"><span>FAQ</span></a></div>
                        <div class="floatNavItem"><a href="#projects" class="hover_theme"><span>Projects</span></a></div>
                        <div class="floatNavItem"><a href="#contact" class="hover_theme"><span>Contact</span></a></div>
                    </div>
                </div>
                <div class="productInner">
                    <div class="container-theme">
                        <section id="overview">
                            <div class="descWithCta justify-content-between">
                                <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                    <?php the_content(); ?>
                                </div>
                                <div class="ctaArea flexNav" data-aos="fade-up" data-aos-duration="1800">
                                    <?php if ($avail_value !== 'none'): ?>
                                        <div class="ctaBtn">
                                            <a href="#<?php echo $avail_value; ?>" class="text-black hover_theme">Available <?php echo $avail_label; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="ctaBtn">
                                        <a href="#projects" class="text-black hover_theme">projects</a>
                                    </div>
                                    <div class="ctaBtn">
                                        <a href="#contact" class="text-black hover_theme">contact us</a>
                                    </div>
                                    <div class="ctaBtn">
                                        <a href="<?php echo home_url('/'); ?>resources" class="text-black hover_theme">resources</a>
                                    </div>
                                </div>
                            </div>
                            <?php if (get_field('_hm_dualimg_1') || get_field('_hm_dualimg_2') || get_field('_hm_dualimg_desc')) : ?>
                                <div class="dualImgDesc">
                                    <div class="dualImgArea">
                                        <?php $_hm_dualimg_1 = get_field('_hm_dualimg_1'); ?>
                                        <?php if ($_hm_dualimg_1) : ?>
                                            <div class="imgArea" data-aos="fade-up" data-aos-duration="1200">
                                                <img src="<?php echo esc_url($_hm_dualimg_1['url']); ?>" alt="<?php echo esc_attr($_hm_dualimg_1['alt']); ?>" />
                                            </div>
                                        <?php endif; ?>
                                        <?php $_hm_dualimg_2 = get_field('_hm_dualimg_2'); ?>
                                        <?php if ($_hm_dualimg_2) : ?>
                                            <div class="imgArea" data-aos="fade-up" data-aos-duration="1500">
                                                <img src="<?php echo esc_url($_hm_dualimg_2['url']); ?>" alt="<?php echo esc_attr($_hm_dualimg_2['alt']); ?>" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (get_field('_hm_dualimg_desc')): ?>
                                        <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                            <p><?php echo get_field('_hm_dualimg_desc'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (have_rows('_specs_tables')): ?>
                                <?php while (have_rows('_specs_tables')): the_row(); ?>
                                    <div class="prodTechDet">
                                        <div class="techTable" data-aos="fade-up" data-aos-duration="1200">
                                            <!-- COMPLEX TABLE -->
                                            <?php if (get_row_layout() === 'table_complex'): ?>
                                                <table>
                                                    <?php if (have_rows('table_header')): ?>
                                                        <thead>
                                                            <?php while (have_rows('table_header')): the_row(); ?>
                                                                <tr>
                                                                    <?php while (have_rows('header_row')): the_row(); ?>
                                                                        <th colspan="<?php echo get_sub_field('colspan') ?: 1; ?>"
                                                                            rowspan="<?php echo get_sub_field('rowspan') ?: 1; ?>">
                                                                            <?php the_sub_field('cell_text'); ?>
                                                                        </th>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endwhile; ?>
                                                        </thead>
                                                    <?php endif; ?>

                                                    <?php if (have_rows('table_body')): ?>
                                                        <tbody>
                                                            <?php while (have_rows('table_body')): the_row(); ?>
                                                                <tr>
                                                                    <?php while (have_rows('body_row')): the_row(); ?>
                                                                        <td><?php the_sub_field('cell_value'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endwhile; ?>
                                                        </tbody>
                                                    <?php endif; ?>
                                                </table>
                                            <?php endif; ?>

                                            <!-- SIMPLE TABLE -->
                                            <?php if (get_row_layout() === 'table_simple'): ?>
                                                <table>
                                                    <?php if (get_sub_field('has_header')): ?>
                                                        <thead>
                                                            <?php if (have_rows('rows')): the_row(); ?>
                                                                <tr>
                                                                    <?php while (have_rows('cells')): the_row(); ?>
                                                                        <th><?php the_sub_field('value'); ?></th>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endif; ?>
                                                        </thead>
                                                    <?php endif; ?>
                                                    <tbody>
                                                        <?php if (have_rows('rows')):
                                                            $row_index = 0; ?>

                                                            <?php while (have_rows('rows')): the_row();
                                                                $row_index++;
                                                                if (get_sub_field('has_header') && $row_index === 1) continue;
                                                            ?>
                                                                <tr>
                                                                    <?php while (have_rows('cells')): the_row(); ?>
                                                                        <td><?php the_sub_field('value'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                        <?php if (get_field('_avail_sec_title') || get_field('_avail_short_desc') || get_field('_avail_btn_link')) : ?>
                            <section id="<?php echo $avail_value; ?>" class="availSec">
                                <div class="availMesh">
                                    <?php if (have_rows('_avail_table')) : ?>
                                        <?php while (have_rows('_avail_table')) : the_row(); ?>
                                            <?php
                                            $contCol = '';
                                            if (get_sub_field('_avail_table_need') == 1) : ?>
                                                <?php $contCol = 'flex-1'; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <div class="availContCol <?php echo $contCol; ?>">
                                        <div class="titleArea">
                                            <h3 class="mainTitle mb-3" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_avail_sec_title'); ?></h3>
                                        </div>
                                        <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                            <p><?php the_field('_avail_short_desc'); ?></p>
                                        </div>
                                        <?php $_avail_btn_link = get_field('_avail_btn_link'); ?>
                                        <?php if ($_avail_btn_link) : ?>
                                            <div class="ctaArea" data-aos="fade-up" data-aos-duration="1600">
                                                <div class="ctaBtn maxCont">
                                                    <a href="<?php echo esc_url($_avail_btn_link); ?>" class="color-theme hover_black"><?php the_field('_avail_btn_text'); ?></a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (have_rows('_avail_table')) : ?>
                                        <?php while (have_rows('_avail_table')) : the_row(); ?>
                                            <?php if (get_sub_field('_avail_table_need') == 1) : ?>
                                                <div class="availTableCol" data-aos="fade-up" data-aos-duration="1600">
                                                    <?php if (have_rows('_other_table')): ?>
                                                        <?php while (have_rows('_other_table')): the_row(); ?>
                                                            <div class="titleArea">
                                                                <h4 class="subTitle"><?php echo get_sub_field('_oth_table_title'); ?></h4>
                                                            </div>
                                                            <div class="techTable">
                                                                <!-- SIMPLE TABLE -->
                                                                <?php if (get_row_layout() === '_oth_table_simple'): ?>
                                                                    <table>
                                                                        <?php if (get_sub_field('_oth_has_header')): ?>
                                                                            <thead>
                                                                                <?php if (have_rows('_oth_rows')): the_row(); ?>
                                                                                    <tr>
                                                                                        <?php while (have_rows('_oth_cells')): the_row(); ?>
                                                                                            <th><?php the_sub_field('_oth_value'); ?></th>
                                                                                        <?php endwhile; ?>
                                                                                    </tr>
                                                                                <?php endif; ?>
                                                                            </thead>
                                                                        <?php endif; ?>
                                                                        <tbody>
                                                                            <?php if (have_rows('_oth_rows')):
                                                                                $row_index = 0; ?>

                                                                                <?php while (have_rows('_oth_rows')): the_row();
                                                                                    $row_index++;
                                                                                    if (get_sub_field('_oth_has_header') && $row_index === 1) continue;
                                                                                ?>
                                                                                    <tr>
                                                                                        <?php while (have_rows('_oth_cells')): the_row(); ?>
                                                                                            <td><?php the_sub_field('_oth_value'); ?></td>
                                                                                        <?php endwhile; ?>
                                                                                    </tr>
                                                                                <?php endwhile; ?>
                                                                            <?php endif; ?>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="table_note">
                                                                        <p><?php echo get_sub_field('table_note'); ?></p>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php if (have_rows('_avail_items')) : ?>
                                    <div class="availDualImg dualImgArea justify-content-between">
                                        <?php while (have_rows('_avail_items')) : the_row(); ?>
                                            <div class="imgArea">
                                                <div class="titleArea">
                                                    <h3 class="mainTitle mb-4" data-aos="fade-up" data-aos-duration="1000"><?php the_sub_field('_avail_item_title'); ?></h3>
                                                </div>
                                                <?php $_avail_item_img = get_sub_field('_avail_item_img'); ?>
                                                <?php if ($_avail_item_img) : ?>
                                                    <img src="<?php echo esc_url($_avail_item_img['url']); ?>" alt="<?php echo esc_attr($_avail_item_img['alt']); ?>" data-aos="fade-up" data-aos-duration="1200" />
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (have_rows('_avail_extra_cont_area')) : ?>
                                    <?php while (have_rows('_avail_extra_cont_area')) : the_row(); ?>
                                        <?php if (get_sub_field('_avail_extra_cont_need') == 1) : ?>
                                            <div class="genPurp">
                                                <div class="desc" data-aos="fade-up" data-aos-duration="1200">
                                                    <?php the_sub_field('_avail_extra_cont_box'); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </section>
                        <?php endif; ?>
                        <?php if (have_rows('_faq_list')) : ?>
                            <section id="faq" class="faqSec">
                                <div class="faqData justify-content-between">
                                    <?php if (get_field('_faq_sec_title') || get_field('_faq_sec_desc')): ?>
                                        <div class="secHead">
                                            <h4 class="mainTitle" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_faq_sec_title'); ?></h4>
                                            <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                                <p><?php the_field('_faq_sec_desc'); ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="faqList">
                                        <?php
                                        $faq = 1;
                                        while (have_rows('_faq_list')) : the_row(); ?>
                                            <div class="faqItem <?php if ($faq == 1) {
                                                                    echo 'activeFaq';
                                                                } ?>" data-aos="fade-up" data-aos-duration="1200">
                                                <div class="faqHead">
                                                    <h4 class="">
                                                        <?php the_sub_field('_faq_question'); ?>
                                                        <div class="plusminus ">
                                                            <img class="down" src="<?php echo get_template_directory_uri(); ?>/assets/media/faq_arrow_down.svg" alt="Arrow Down">
                                                            <img class="up" src="<?php echo get_template_directory_uri(); ?>/assets/media/faq_arrow_up.svg" alt="Arrow Up">
                                                        </div>
                                                    </h4>
                                                </div>
                                                <div class="faqDesc desc <?php if ($faq == 1) {
                                                                                echo 'show';
                                                                            } ?>">
                                                    <p><?php the_sub_field('_faq_answer'); ?></p>
                                                </div>
                                            </div>
                                        <?php $faq++;
                                        endwhile; ?>
                                        <!-- <div class="faqItem">
                                            <div class="faqHead">
                                                <h4 class="">What is the difference between standard & engineered welded wire mesh?</h4>
                                            </div>
                                            <div class="faqDesc desc">
                                                <p>Blandit semper at sit lectus vitae amet orci pulvinar.</p>
                                            </div>
                                        </div>
                                        <div class="faqItem">
                                            <div class="faqHead">
                                                <h4 class="">What is the difference between standard & engineered welded wire mesh?</h4>
                                            </div>
                                            <div class="faqDesc desc">
                                                <p>Blandit semper at sit lectus vitae amet orci pulvinar.</p>
                                            </div>
                                        </div>
                                        <div class="faqItem">
                                            <div class="faqHead">
                                                <h4 class="">What is the difference between standard & engineered welded wire mesh?</h4>
                                            </div>
                                            <div class="faqDesc desc">
                                                <p>Blandit semper at sit lectus vitae amet orci pulvinar.</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (have_rows('_dblcol_data')) : ?>
                            <?php while (have_rows('_dblcol_data')) : the_row(); ?>
                                <?php if (get_field('_dblcol_sec_need') == 1) : ?>
                                    <section class="dualColInfoSec">
                                        <div class="container-theme1">
                                            <div class="row justify-content-between">
                                                <div class="dualcolCont col-lg-5 col-12">
                                                    <div class="titleArea" data-aos="fade-up" data-aos-duration="1200">
                                                        <h3 class="mainTitle mb-3"><?php the_sub_field('_dblcol_sec_title'); ?></h3>
                                                    </div>
                                                    <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                                        <p><?php the_sub_field('_dblcol_sec_desc'); ?></p>
                                                    </div>
                                                    <?php $_dblcol_btn_link = get_sub_field('_dblcol_btn_link'); ?>
                                                    <?php if ($_dblcol_btn_link) : ?>
                                                        <div class="ctaArea" data-aos="fade-up" data-aos-duration="1600">
                                                            <div class="ctaBtn maxCont">
                                                                <a href="<?php echo esc_url($_dblcol_btn_link); ?>" class="color-theme hover_black">
                                                                    <?php the_sub_field('_dblcol_btn_txt'); ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php $_dblcol_img = get_sub_field('_dblcol_img'); ?>
                                                <?php if ($_dblcol_img) : ?>
                                                    <div class="dualcontImg col-lg-7 col-12">
                                                        <div class="imgArea gradOverlayImg position-relative" data-aos="fade-up" data-aos-duration="1500">
                                                            <img src="<?php echo esc_url($_dblcol_img['url']); ?>" alt="<?php echo esc_attr($_dblcol_img['alt']); ?>" />
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php $_prod_related_projects = get_field('_prod_related_projects');
                    if (empty($_prod_related_projects)) {
                        $_prod_related_projects = get_posts([
                            'post_type'      => 'project',
                            'posts_per_page' => 4,
                            'post_status'    => 'publish'
                        ]);
                    } ?>
                    <?php if ($_prod_related_projects) : ?>
                        <section id="projects" class="relProjSec">
                            <div class="container-left">
                                <div class="secHead" data-aos="fade-up" data-aos-duration="1200">
                                    <?php if (get_field('_prodproj_sec_title')): ?>
                                        <h3 class="mainTitle"><?php the_field('_prodproj_sec_title'); ?></h3>
                                    <?php else : ?>
                                        <h3 class="mainTitle">BRC projects</h3>
                                    <?php endif; ?>
                                </div>
                                <div class="relProjList swiper" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($_prod_related_projects as $post) : ?>
                                            <?php setup_postdata($post); ?>
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
                                                        <p><a href="<?php the_permalink(); ?>" class="linkInherit"><?php the_title(); ?></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                </div>
                                <div class="projSwiperNav" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="swiper-button-prev">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-left-theme.svg" alt="Previous" />
                                    </div>
                                    <div class="swiper-button-next">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Next" />
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Certifications section start -->

                    <?php if (get_field('_git_form_shortcode') || get_field('_git_sec_image') || get_field('_cert_imgs')): ?>
                        <section id="contact" class="certifSec1 certifContSec bg-white">
                            <div class="container-theme">
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-12">
                                        <div class="secHead">
                                            <h4 class="mainTitle" data-aos="fade-up" data-aos-duration="1200"><?php echo get_field('_git_sec_title'); ?></h4>
                                            <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                                <p><?php echo get_field('_git_sec_desc'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div class="contFormArea">
                                            <?php
                                            $form_shortcode = get_field('_git_form_shortcode');
                                            if ($form_shortcode) : ?>
                                                <div class="formCol" data-aos="fade-up" data-aos-duration="1400">
                                                    <?php
                                                    echo do_shortcode($form_shortcode); ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php $_git_sec_image = get_field('_git_sec_image'); ?>
                                            <?php if ($_git_sec_image) : ?>
                                                <div class="imgArea" data-aos="fade-up" data-aos-duration="1600">
                                                    <img src="<?php echo esc_url($_git_sec_image['url']); ?>" alt="<?php echo esc_attr($_git_sec_image['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Certifications section start -->

                                <?php get_template_part('template-parts/sections/certificates-section'); ?>

                                <!-- Certifications section end -->
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Seemore section start -->

        <section id="seemore" class="seemoreSec borderTop">
            <div class="container-fluid">
                <?php get_template_part('template-parts/sections/seemore-section'); ?>
            </div>
        </section>

        <!-- Seemore section end -->

    <?php endwhile; // End of the loop.
    ?>
</main><!-- #main -->

<?php get_footer(); ?>