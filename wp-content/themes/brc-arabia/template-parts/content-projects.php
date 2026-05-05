<?php

/**
 * Template Name: Projects Page
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
                        <h4 class="subTitle color-theme" data-aos="fade-up" data-aos-duration="1200">Projects</h4>
                        <h1 class="xlTitle mb-0" data-aos="fade-up" data-aos-duration="1400">Reinforcing the foundations of progress</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Projects list section start -->

<?php $projargs = array(
    'post_type'      => 'project',
    'posts_per_page' => -1,
);
$proj_query = new WP_Query($projargs);

if ($proj_query->have_posts()) : ?>
    <section class="allprojectsSec">
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
                    <div class="prodsList allprojList">
                        <?php while ($proj_query->have_posts()) : $proj_query->the_post();
                            $projcontent = get_the_content();
                            $sollist = get_field('_sol_prov_list'); // ACF repeater
                            $is_projcontent_empty = empty(trim(strip_tags($projcontent)));
                            $is_sollist_empty = empty($sollist);
                            $disable_link = $is_projcontent_empty || $is_sollist_empty;
                            if ($disable_link):
                                $nolink = 'no-link';
                            else :
                                $nolink = '';
                            endif;
                        ?>
                            <div class="prodItem allprojItem" data-aos="fade-up" data-aos-duration="1200">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="prodImg">
                                        <a href="<?php the_permalink(); ?>" class="<?php echo $nolink; ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="prodInfo">
                                    <p>
                                        <a href="<?php the_permalink(); ?>" class="linkInherit <?php echo $nolink; ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <!-- <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_3.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Yas marina formula 1</p>
                        </div>
                    </div>
                    <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_2.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Dubai maktoum airport</p>
                        </div>
                    </div>
                    <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_4.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Ruwais refinery expansion</p>
                        </div>
                    </div>
                    <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_1.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Etihad Rail</p>
                        </div>
                    </div>
                    <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_2.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Saadiyat beach villas, Abu dhabi</p>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Projects list section end -->

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