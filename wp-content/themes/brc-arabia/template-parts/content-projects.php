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
                        <h4 class="subTitle color-theme">Projects</h4>
                        <h1 class="xlTitle mb-0">Reinforcing the foundations of progress</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Projects list section start -->

<section class="allprojectsSec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="projFilters flexHead justify-content-end">
                    <div class="filterItem">
                        <div class="ctaBtn">
                            <a href="#" class="text-black">product</a>
                        </div>
                    </div>
                    <div class="filterItem">
                        <div class="ctaBtn">
                            <a href="#" class="text-black">sector</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="prodsList allprojList">
                    <div class="prodItem allprojItem">
                        <div class="prodImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_1.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Dubai metro</p>
                        </div>
                    </div>
                    <div class="prodItem allprojItem">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects list section end -->

<!-- Certifications section start -->

<section class="certifSec certifContSec bg-white1">
    <div class="container-theme">
        <div class="row align-items-center certRow1">
            <div class="col-lg-4 col-12">
                <div class="secHead">
                    <h2 class="mainTitle">Certifications</h2>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="certLogos flexHead">
                    <div class="certLogo">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/product_conformity.svg" alt="">
                        </div>
                    </div>
                    <div class="certLogo">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/dubai_chamber.svg" alt="">
                        </div>
                    </div>
                    <div class="certLogo">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/ministry_energy.svg" alt="">
                        </div>
                    </div>
                    <div class="certLogo">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/smg.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications section end -->

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

<?php get_footer(); ?>