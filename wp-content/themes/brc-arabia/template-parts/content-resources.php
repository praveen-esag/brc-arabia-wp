<?php

/**
 * Template Name: Resources Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<section class="resoIntroSec">
    <div class="container-theme">
        <div class="row1">
            <div class="secHead">
                <h4 class="subTitle mb-0" data-aos="fade-up" data-aos-duration="1200">BRC Arabia</h4>
                <h1 class="xlTitle" data-aos="fade-up" data-aos-duration="1500"><?php the_title(); ?></h1>
            </div>
            <?php if (have_rows('_resources_types')) : ?>
                <div class="resoTabArea">
                    <div class="resoList" data-aos="fade-up" data-aos-duration="1800">
                        <?php
                        $reso_main = 1;
                        while (have_rows('_resources_types')) : the_row(); ?>
                            <div class="resoItem <?php echo ($reso_main === 1) ? 'active' : ''; ?>" data-tab="reso<?php echo $reso_main ?>">
                                <div class="resoItemHead">
                                    <h4 class="resoTitle mb-0"><?php the_sub_field('_resource_name'); ?></h4>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Arrow Right">
                                </div>
                            </div>
                        <?php
                            $reso_main++;
                        endwhile; ?>
                        <!-- <div class="resoItem" data-tab="reso2">
                            <div class="resoItemHead">
                                <h4 class="resoTitle mb-0">License</h4>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Arrow Right">
                            </div>
                        </div>
                        <div class="resoItem" data-tab="reso3">
                            <div class="resoItemHead">
                                <h4 class="resoTitle mb-0">Qualification documents</h4>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Arrow Right">
                            </div>
                        </div>
                        <div class="resoItem" data-tab="reso4">
                            <div class="resoItemHead">
                                <h4 class="resoTitle mb-0">Data sheets</h4>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Arrow Right">
                            </div>
                        </div>
                        <div class="resoItem" data-tab="reso5">
                            <div class="resoItemHead">
                                <h4 class="resoTitle mb-0">Company profile</h4>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Arrow Right">
                            </div>
                        </div> -->
                    </div>
                    <div class="resoSubList position-relative" data-aos="fade-up" data-aos-duration="1600">
                        <?php
                        $reso_sub = 1;
                        while (have_rows('_resources_types')) : the_row(); ?>
                            <div class="resoSubItem <?php echo ($reso_sub === 1) ? 'active' : ''; ?>" data-tab="reso<?php echo $reso_sub; ?>">
                                <?php while (have_rows('_resource_files')) : the_row(); ?>
                                    <div class="dwnldReso <?php echo ($reso_sub === 1) ? 'active' : ''; ?>">
                                        <h5 class="mb-0"><?php the_sub_field('_resource_file_name'); ?></h5>
                                        <?php if (get_sub_field('_upload_resource_file')) : ?>
                                            <div class="ctaBtn">
                                                <a href="#" class="color-theme">Download</a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                                <!-- <div class="dwnldReso">
                                    <h5 class="mb-0">Wire Mesh - DCL</h5>
                                    <div class="ctaBtn">
                                        <a href="#" class="color-theme">Download</a>
                                    </div>
                                </div>
                                <div class="dwnldReso">
                                    <h5 class="mb-0">Ministry of Infrastructure development</h5>
                                    <div class="ctaBtn">
                                        <a href="#" class="color-theme">Download</a>
                                    </div>
                                </div>
                                <div class="dwnldReso">
                                    <h5 class="mb-0">C&B - DCl</h5>
                                    <div class="ctaBtn">
                                        <a href="#" class="color-theme">Download</a>
                                    </div>
                                </div>
                                <div class="dwnldReso">
                                    <h5 class="mb-0">Dubai Chamber Membership</h5>
                                    <div class="ctaBtn">
                                        <a href="#" class="color-theme">Download</a>
                                    </div>
                                </div>
                                <div class="dwnldReso">
                                    <h5 class="mb-0">VAT certificate</h5>
                                    <div class="ctaBtn">
                                        <a href="#" class="color-theme">Download</a>
                                    </div>
                                </div> -->
                            </div>
                        <?php
                            $reso_sub++;
                        endwhile; ?>
                        <!-- <div class="resoSubItem" data-tab="reso2">
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates2</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="resoSubItem" data-tab="reso3">
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates3</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="resoSubItem" data-tab="reso4">
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates4</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="resoSubItem" data-tab="reso5">
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates5</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                            <div class="dwnldReso">
                                <h5 class="mb-0">Certificates</h5>
                                <div class="ctaBtn">
                                    <a href="#" class="color-theme">Download</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Seemore section start -->

<section class="seemoreSec">
    <div class="container-fluid">
        <?php get_template_part('template-parts/sections/seemore-section'); ?>
    </div>
</section>

<!-- Seemore section end -->

<?php get_footer(); ?>