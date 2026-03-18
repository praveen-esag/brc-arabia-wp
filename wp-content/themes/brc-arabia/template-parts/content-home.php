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

<section class="bannerSec homeBanner py-0">
    <div class="container-fluid p-0">
        <div class="bannerVid position-relative">
            <video class="bannerVideo d-none" autoplay="" muted="" loop="false" playsinline="" poster="<?php //the_field('_home_banner_video_thumb'); 
                                                                                                        ?>">
                <source src="<?php bloginfo('template_directory'); ?>/assets/media/brc-banner-video.mp4" type="video/mp4">
                <source src="<?php bloginfo('template_directory'); ?>/assets/media/brc-banner-video.mp4" type="video/ogg">
                No video support.
            </video>
            <div class="bannerImg h-100">
                <img src="<?php bloginfo('template_directory'); ?>/assets/media/brc_banner.png" />
            </div>
            <div class="bannerBottom" data-aos="fade-up" data-aos-duration="1000">
                <div class="textCol">
                    <h1 class="text-white">Delivering <br />structural confidence</h1>
                </div>
                <div class="flexNav">
                    <div class="flexNavItem ctaBtn"><a href="#" class="text-white">reliable quality</a></div>
                    <div class="flexNavItem ctaBtn"><a href="#" class="text-white">full traceability</a></div>
                    <div class="flexNavItem ctaBtn"><a href="#" class="text-white">stability</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- About section start -->

<section id="about-us" class="abtSec primary_bg">
    <div class="container-fluid p-0">
        <div class="abtCont">
            <div class="abtHead">
                <h4 class="subTitle text-white">Inside BRC Arabia</h4>
                <h2 class="largeTitle text-white mb-0">BRC Arabia sets the benchmark for quality, reliability and operational excellence.</h2>
            </div>
            <div class="abtNav">
                <div class="flexNav">
                    <div class="flexNavItem ctaBtn"><a href="#" class="btn_yellow">Who we are</a></div>
                    <div class="flexNavItem ctaBtn"><a href="#" class="btn_yellow">About Al Gurg Group</a></div>
                    <div class="flexNavItem ctaBtn"><a href="#" class="btn_yellow">Certifications</a></div>
                </div>
            </div>
        </div>
        <div class="abtImg">
            <div class="imgArea">
                <img src="<?php bloginfo('template_directory'); ?>/assets/media/about-brc.png" alt="About BRC">
            </div>
        </div>
    </div>
</section>

<!-- About section end -->

<!-- Quality section start -->

<section class="qualSec">
    <div class="container-fluid">
        <div class="qualCont">
            <div class="qualHead secHead">
                <h4 class="subTitle color-theme">reliable quality</h4>
                <h2 class="mainTitle text-black mb-0">High-performance steel reinforcement through strict quality control</h2>
            </div>
        </div>
        <div class="qualDemo">
            <div class="qualDemoImg position-relative">
                <div class="imgArea">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/quality_demo.png" alt="Reliable Quality">
                </div>
                <div class="qualInfo">
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Vertical reinforcment</h4>
                        <div class="qualDesc">
                            <p>Advanced facilities handle complex BBS accurately. Full material traceability ensures consistent performance.</p>
                        </div>
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Precision <br />Stirrups</h4>
                        <div class="qualDesc">
                            <p>Our modern machinery delivers angular precision. Strict quality control eliminates manual bending risks.</p>
                        </div>
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Structural Wall Reinforcement</h4>
                        <div class="qualDesc">
                            <p>Our modern machinery guarantees exact grid alignment for consistent structural performance.</p>
                        </div>
                    </div>
                    <div class="qualItem">
                        <h4 class="subTitle position-relative">Horizontal Slab Reinforcement</h4>
                        <div class="qualDesc">
                            <p>Strict quality control ensures uniform grids for consistent performance.</p>
                        </div>
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
            <div class="col-1 offset-lg-1 col-12">
                <div class="secHead">
                    <h2 class="mainTitle text-black mb-0">Built on scale. Backed by experience.</h2>
                    <div class="desc">
                        <p>Odio ipsum dignissim imperdiet morbi quisque consectetur leo sodales nullam. Viverra et egestas molestie maecenas ut vel etiam.</p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-12">
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
        </div>
    </div>
</section>

<!-- Stats section end -->

<?php get_footer(); ?>