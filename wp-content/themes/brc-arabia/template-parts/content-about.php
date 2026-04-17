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
    <section class="bannerSec innerBanner abtBannerSec">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="bannerTitleArea">
                        <div class="secHead">
                            <h4 class="subTitle color-theme text-capitalize">About BRC Arabia</h4>
                            <h1 class="xlTitle text-black mb-0">Reinforcing the foundations of progress</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bannerImgArea">
                        <!-- <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/about_banner_image.png" alt="About BRC">
                    </div> -->
                        <div class="vidArea">
                            <?php $abtvidposter = get_stylesheet_directory_uri() . '/assets/media/about/about_banner_image.png'; ?>
                            <video class="abtVideo" autoplay="" muted="" loop="false" playsinline="" poster="<?php echo esc_url($abtvidposter); ?>">
                                <source src="<?php bloginfo('template_directory'); ?>/assets/media/about/about_banner_video.mp4" type="video/mp4">
                                <source src="<?php bloginfo('template_directory'); ?>/assets/media/about/about_banner_video.mp4" type="video/ogg">
                                No video support.
                            </video>
                        </div>
                        <div class="desc">
                            <p class="subTitle mb-0">Delivering precision steel reinforcement solutions across the UAE and Gulf region with certified quality, advanced facilities, and decades of expertise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner section end -->

    <!-- Our story section start -->

    <section class="ourStory">
        <div class="container-fluid p-0">
            <div class="abtMainImg position-relative">
                <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/brc_building.png" alt="">
            </div>
            <div class="abtstorySec primary_bg flxdir_col_mob">
                <div class="storycontArea mw-100-mob">
                    <div class="vertLine" data-aos="fade-left" data-aos-duration="2000"></div>
                    <div class="secHead">
                        <h4 class="subTitle text-white mb-3">our story</h4>
                        <h1 class="mainTitle text-white mb-0" data-aos="fade-up" data-aos-duration="2000">Since 1997, the company has delivered high quality steel reinforcement solutions across the UAE and Gulf.</h1>
                    </div>
                    <div class="desc" data-aos="fade-up" data-aos-duration="2000">
                        <p class="mb-0 text-white">BRC Arabia began operations at Sharjah Airport Free Zone before elevating its presence with a purpose built facility in Dubai Industrial Park in 2011, alongside the launch of its Abu Dhabi branch.</p>
                    </div>
                    <div class="horzLine" data-aos="fade-up" data-aos-duration="2000"></div>
                </div>
                <div class="storyImgArea mw-100-mob">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/brc_story.png" alt="">
                </div>
            </div>
            <div class="abtgrpSec abtstorySec1 primary_bg flxdir_col_mob">
                <div class="horzLine" data-aos="fade-up" data-aos-duration="2000"></div>
                <div class="storyImgArea grpImgArea position-relative mw-100-mob">
                    <div class="vertLine" data-aos="fade-left" data-aos-duration="2000"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/about_algurg.png" alt="">
                </div>
                <div class="storycontArea mw-100-mob">
                    <div class="secHead">
                        <h4 class="subTitle text-white mb-3" data-aos="fade-up" data-aos-duration="1800">Al gurg group</h4>
                        <h1 class="mainTitle text-white mb-0" data-aos="fade-up" data-aos-duration="2000">Since 1960, Al Gurg Group is one of the UAE’s eminent family businesses, comprising over 30 companies.</h1>
                        <div class="maxCont ctaBtn" data-aos="fade-up" data-aos-duration="2200"><a href="#" class="text-white">Know more</a></div>
                    </div>
                    <!-- <div class="desc">
                    <p class="mb-0 text-white">BRC Arabia began operations at Sharjah Airport Free Zone before elevating its presence with a purpose built facility in Dubai Industrial Park in 2011, alongside the launch of its Abu Dhabi branch.</p>
                </div> -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Our story section end -->

<!-- Stats section start -->

<section class="statsSec abtStatSec">
    <div class="container-theme">
        <div class="row justify-content-between flxdir_col_mob statsRow">
            <div class="col-lg-7 col-12">
                <div class="statsList">
                    <div class="statItem">
                        <h4 class="color-theme">28+ years</h4>
                        <p class="text-black">Industry experience</p>
                    </div>
                    <div class="statItem">
                        <h4 class="color-theme">30,000m<sup>2</sup></h4>
                        <p class="text-black">Industrial area</p>
                    </div>
                    <div class="statItem">
                        <h4 class="color-theme">16,000m<sup>2</sup></h4>
                        <p class="text-black">Build-up production facility</p>
                    </div>
                    <div class="statItem">
                        <h4 class="color-theme">ISO 9001:2015</h4>
                        <p class="text-black">Certified Quality Management</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="secHead">
                    <h2 class="mainTitle text-black mb-0">Built on scale. Backed by experience.</h2>
                    <div class="desc">
                        <p>Since 1997, BRC Arabia has supplied precision-engineered steel reinforcement to some of the region's most demanding construction projects. Our world-class facility in Dubai Industrial Park combines advanced production technology with decades of accumulated expertise, enabling us to deliver consistently, at scale, without compromise.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row keyIndusRow">
            <div class="secHead">
                <h2 class="mainTitle text-black mb-0">Delivering across<br /> key industries</h2>
            </div>
            <div class="indusList flexHead flxdir_col_mob">
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/infrastructure_icon.gif" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Infrastructure</h4>
                    </div>
                </div>
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/infrastructure_icon.gif" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Power <br />plants</h4>
                    </div>
                </div>
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/rail.svg" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Rail <br />infrastructure</h4>
                    </div>
                </div>
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/oil_gas.gif" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Oil, Gas & <br />Energy</h4>
                    </div>
                </div>
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/commercial.gif" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Commercial & <br />residential towers</h4>
                    </div>
                </div>
                <div class="indusItem">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/housing.gif" alt="">
                    </div>
                    <div class="titleArea">
                        <h4 class="indusTitle text-center">Housing</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats section end -->

<!-- Vision & mission section start -->

<section class="vismisSec">
    <div class="container-fluid pe-0">
        <div class="vismisMain d-flex">
            <div class="vismisContArea">
                <div class="secHead">
                    <h4 class="subTitle color-theme mb-2">integrity, collaboration, and accountability.</h4>
                    <div class="desc">
                        <p class="text-black">Our experienced team delivers intelligent solutions while adapting to changing market needs, ensuring excellence through ethical practices and measurable results.</p>
                    </div>
                </div>
                <div class="visCont expandCol">
                    <div class="contCard">
                        <h3 class="mainTitle color-theme">Our vision</h3>
                        <div class="desc">
                            <p class="text-black">To be the leading reinforcing steel company in the region and beyond, driven by expertise, quality, innovation and strong ethical values.</p>
                        </div>
                    </div>
                </div>
                <div class="misCont expandCol">
                    <div class="contCard">
                        <div class="imgArea">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/brc_mission.png" alt="">
                        </div>
                        <h3 class="mainTitle color-theme">Our mission</h3>
                        <div class="desc">
                            <p class="text-black">To deliver sustainable excellence by combining skilled people, advanced facilities, and innovative engineering solutions that meet customer needs while ensuring long term value for our stakeholders.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vismisImgArea">
                <div class="imgArea">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/brc_vision_mission.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & mission section end -->

<!-- Sustainability section start -->

<section class="sustainSec">
    <div class="sustainImgArea">
        <div class="imgArea">
            <img src="<?php bloginfo('template_directory'); ?>/assets/media/about/brc_sustainability.png" alt="">
        </div>
    </div>
    <div class="sustainContArea container-theme">
        <div class="secHead">
            <h4 class="subTitle color-theme">Sustainability</h4>
            <div class="desc">
                <p>Steel built to endure. Practices built to last. We combine responsible sourcing, waste-reducing precision manufacturing, and long-term thinking, because lasting infrastructure demands lasting commitment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability section end -->

<!-- Certifications section start -->

<section class="certifSec">
    <div class="container-theme">
        <div class="row align-items-center">
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

<section class="seemoreSec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12 p-0">
                <div class="seemoreLinks position-relative">
                    <div class="seemoreLink">
                        <div class="ctaArea">
                            <h4 class="subTitle color-theme">See more</h4>
                            <a href="#" class="text-black">Products</a>
                        </div>
                    </div>
                    <div class="seemoreLink">
                        <div class="ctaArea">
                            <a href="#" class="text-black">Downloads</a>
                        </div>
                    </div>
                    <div class="seemoreLink">
                        <div class="ctaArea">
                            <a href="#" class="text-black">Contact us</a>
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