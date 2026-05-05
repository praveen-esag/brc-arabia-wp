<?php

/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->

<?php if (get_field('_hm_banner_video') || get_field('_hm_banner_image') || get_field('_hm_ban_main_title') || have_rows('_hm_ban_cta_links')) : ?>
    <section class="bannerSec homeBanner py-0">
        <div class="container-fluid p-0">
            <?php if (get_field('_hm_banner_video') || get_field('_hm_banner_image')) : ?>
                <div class="bannerVid position-relative">
                    <?php $homevidPoster = get_field('_hm_banner_video_thumb');
                    if (get_field('_hm_banner_video')) : ?>
                        <video class="bannerVideo d-none1" autoplay="" muted="" loop="false" playsinline="" poster="<?php echo $homevidPoster; ?>">
                            <source src="<?php the_field('_hm_banner_video'); ?>" type="video/mp4">
                            <source src="<?php the_field('_hm_banner_video'); ?>" type="video/ogg">
                            No video support.
                        </video>
                    <?php else :
                        $_hm_banner_image = get_field('_hm_banner_image'); ?>
                        <div class="bannerImg h-100">
                            <img src="<?php echo esc_url($_hm_banner_image['url']); ?>" alt="<?php echo esc_attr($_hm_banner_image['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    <div class="bannerBottom" data-aos="fade-up" data-aos-duration="1000">
                        <div class="textCol">
                            <h1 class="text-white"><?php the_field('_hm_ban_main_title') ?></h1>
                        </div>
                        <?php if (have_rows('_hm_ban_cta_links')): ?>
                            <div class="flexNav">
                                <?php while (have_rows('_hm_ban_cta_links')) : the_row(); ?>
                                    <?php $_hm_ban_btn_link = get_sub_field('_hm_ban_btn_link'); ?>
                                    <?php if ($_hm_ban_btn_link) : ?>
                                        <div class="flexNavItem ctaBtn">
                                            <a href="<?php echo esc_url($_hm_ban_btn_link['url']); ?>" target="<?php echo esc_attr($_hm_ban_btn_link['target']); ?>" class="text-white">
                                                <?php the_sub_field('_hm_ban_btn_txt'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif ?>

<!-- Banner section end -->

<!-- About section start -->

<?php if (get_field('_hm_abt_subtitle') || get_field('_hm_abt_title') || have_rows('_hm_abt_cta_links') || get_field('_hm_abt_img')) : ?>
    <section id="about-us" class="abtSec primary_bg">
        <div class="container-fluid p-0">
            <div class="abtCont">
                <div class="abtHead">
                    <h4 class="subTitle text-white" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_hm_abt_subtitle'); ?></h4>
                    <h2 class="largeTitle text-white mb-0" data-aos="fade-up" data-aos-duration="1400"><?php the_field('_hm_abt_title'); ?></h2>
                </div>
                <?php if (have_rows('_hm_abt_cta_links')) : ?>
                    <div class="abtNav">
                        <div class="flexNav">
                            <?php while (have_rows('_hm_abt_cta_links')) : the_row(); ?>
                                <div class="flexNavItem ctaBtn" data-aos="fade-up" data-aos-duration="1300">
                                    <?php $_hm_abt_btn_link = get_sub_field('_hm_abt_btn_link'); ?>
                                    <?php if ($_hm_abt_btn_link) : ?>
                                        <a href="<?php echo esc_url($_hm_abt_btn_link['url']); ?>" target="<?php echo esc_attr($_hm_abt_btn_link['target']); ?>" class="btn_yellow hover_white">
                                            <?php the_sub_field('_hm_abt_btn_txt'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $_hm_abt_img = get_field('_hm_abt_img'); ?>
            <?php if ($_hm_abt_img) : ?>
                <div class="abtImg">
                    <div class="imgArea">
                        <img src="<?php echo esc_url($_hm_abt_img['url']); ?>" alt="<?php echo esc_attr($_hm_abt_img['alt']); ?>" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- About section end -->

<!-- Quality section start -->

<section class="qualSec">
    <div class="container-fluid">
        <div class="qualCont">
            <div class="qualHead secHead">
                <h4 class="subTitle color-theme" data-aos="fade-up" data-aos-duration="1200">reliable quality</h4>
                <h2 class="mainTitle text-black mb-0" data-aos="fade-up" data-aos-duration="1400">High-performance steel reinforcement through strict quality control</h2>
            </div>
        </div>
        <div class="qualDemo">
            <div class="qualDemoImg position-relative">
                <div class="imgArea">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/quality_demo.png" alt="Reliable Quality">
                </div>
                <div class="qualInfo">
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Vertical <br />reinforcment</h4>
                        <div class="qualDesc">
                            <p>Advanced facilities handle complex BBS accurately. Full material traceability ensures consistent performance.</p>
                        </div>
                        <div class="imgArea qualItemImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/vertical_reinforcement.png" alt="">
                        </div>
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Precision <br />Stirrups</h4>
                        <div class="qualDesc">
                            <p>Our modern machinery delivers angular precision. Strict quality control eliminates manual bending risks.</p>
                        </div>
                        <!-- <div class="imgArea qualItemImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/vertical_reinforcement.png" alt="">
                        </div> -->
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Structural Wall Reinforcement</h4>
                        <div class="qualDesc">
                            <p>Our modern machinery guarantees exact grid alignment for consistent structural performance.</p>
                        </div>
                        <div class="imgArea qualItemImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/structural_wall_reinforcement.png" alt="">
                        </div>
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Horizontal Slab Reinforcement</h4>
                        <div class="qualDesc">
                            <p>Strict quality control ensures uniform grids for consistent performance.</p>
                        </div>
                        <div class="imgArea qualItemImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/horizontal_slab_reinforcement.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="qualDemoNote">
                    <div class="noteBox">
                        <p class="text-white mb-0">NOTE: Hover on names to interact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality section end -->

<!-- Stats section start -->

<section class="statsSec">
    <div class="container-fluid">
        <div class="row justify-content-between flxdir_col_mob">
            <?php if (have_rows('_hm_stats_head')) : ?>
                <?php while (have_rows('_hm_stats_head')) : the_row(); ?>
                    <?php if (get_sub_field('_hm_stats_sec_title') || get_sub_field('_hm_stats_sec_desc')): ?>
                        <div class="col-1 offset-lg-1 col-12">
                            <div class="secHead">
                                <h2 class="mainTitle text-black mb-0" data-aos="fade-up" data-aos-duration="1200"><?php the_sub_field('_hm_stats_sec_title'); ?></h2>
                                <div class="desc" data-aos="fade-up" data-aos-duration="1400">
                                    <p><?php the_sub_field('_hm_stats_sec_desc'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('_hm_stats_list')) : ?>
                <div class="col-2 col-12">
                    <div class="statsList">
                        <div class="statsList">
                            <?php while (have_rows('_hm_stats_list')) : the_row(); ?>
                                <div class="statItem" data-aos="fade-up" data-aos-duration="1200">
                                    <h4 class="color-theme"><?php the_sub_field('_hm_stats_value'); ?></h4>
                                    <p class="text-black"><?php the_sub_field('_hm_stats_label'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Stats section end -->

<!-- Products section start -->

<?php $prodargs = array(
    'post_type'      => 'product',
    'posts_per_page' => 4,
);
$prod_query = new WP_Query($prodargs);

if ($prod_query->have_posts()) : ?>
    <section class="prodsSec">
        <div class="container-fluid">
            <?php if (get_field('_hm_prod_sec_title') || get_field('_hm_prod_btn_link')): ?>
                <div class="row">
                    <div class="secHead flexHead">
                        <h2 class="mainTitle text-black mb-0" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_hm_prod_sec_title'); ?></h2>
                        <?php $_hm_prod_btn_link = get_field('_hm_prod_btn_link'); ?>
                        <?php if ($_hm_prod_btn_link) : ?>
                            <div class="flexNavItem ctaBtn" data-aos="fade-up" data-aos-duration="1300">
                                <a href="<?php echo esc_url($_hm_prod_btn_link['url']); ?>" target="<?php echo esc_attr($_hm_prod_btn_link['target']); ?>" class="text-black">
                                    <?php the_field('_hm_prod_btn_txt'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="prodsList">
                    <?php while ($prod_query->have_posts()) : $prod_query->the_post(); ?>
                        <div class="prodItem" data-aos="fade-up" data-aos-duration="1200">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="prodImg">
                                    <a href="<?php the_permalink(); ?>" class="linkInherit">
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
    </section>
<?php endif; ?>

<!-- Products section end -->

<!-- Projects section start -->

<?php $projargs = array(
    'post_type'      => 'project',
    'posts_per_page' => 6,
);
$proj_query = new WP_Query($projargs);

if ($proj_query->have_posts()) : ?>
    <section class="projSec">
        <div class="container-fluid">
            <div class="projGrid">
                <?php if (get_field('_hm_proj_sec_title') || get_field('_hm_proj_btn_link')): ?>
                    <div class="projHead projGridItem">
                        <div class="titleArea">
                            <h3 class="mainTitle" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_hm_proj_sec_title'); ?></h3>
                        </div>
                        <?php $_hm_proj_btn_link = get_field('_hm_proj_btn_link'); ?>
                        <?php if ($_hm_proj_btn_link) : ?>
                            <div class="ctaBtn" data-aos="fade-up" data-aos-duration="1400">
                                <a href="<?php echo esc_url($_hm_proj_btn_link['url']); ?>" target="<?php echo esc_attr($_hm_proj_btn_link['target']); ?>">
                                    <?php the_field('_hm_proj_btn_txt'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php while ($proj_query->have_posts()) : $proj_query->the_post(); ?>
                    <div class="projItem projGridItem" data-aos="fade-up" data-aos-duration="1300">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="projImg">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="projInfo">
                            <p class="text-white">
                                <a href="<?php the_permalink(); ?>" class="linkInherit hover_white"><?php the_title(); ?></a>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Projects section end -->

<!-- News section start -->

<?php $newsargs = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
);
$news_query = new WP_Query($newsargs);

if ($news_query->have_posts()) : ?>
    <section class="newsSec">
        <div class="container-fluid">
            <?php if (get_field('_hm_news_sec_title')): ?>
                <div class="row">
                    <div class="secHead flexHead" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="mainTitle text-black mb-0"><?php the_field('_hm_news_sec_title'); ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="1300">
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
            <?php $_hm_news_btn_link = get_field('_hm_news_btn_link'); ?>
            <?php if ($_hm_news_btn_link) : ?>
                <div class="row justify-content-end viewAllNews">
                    <div class="flexNavItem ctaBtn maxCont" data-aos="fade-up" data-aos-duration="1200">
                        <a href="<?php echo esc_url($_hm_news_btn_link['url']); ?>" target="<?php echo esc_attr($_hm_news_btn_link['target']); ?>" class="color-theme">
                            <?php the_field('_hm_news_btn_txt'); ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- News section end -->

<?php get_footer(); ?>