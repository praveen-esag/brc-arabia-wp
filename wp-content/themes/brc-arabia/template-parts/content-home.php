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
                        <h4 class="subTitle position-relative">Vertical <br/>reinforcment</h4>
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

<!-- Products section start -->

<section class="prodsSec">
    <div class="container-fluid">
        <div class="row">
            <div class="secHead flexHead">
                <h2 class="mainTitle text-black mb-0">Products & solutions</h2>
                <div class="flexNavItem ctaBtn">
                    <a href="#" class="text-black">view all BRC products</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="prodsList">
                <div class="prodItem">
                    <div class="prodImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/cut_bent_steel_rebar.png" alt="">
                    </div>
                    <div class="prodInfo">
                        <p>Cut & bent steel rebar</p>
                    </div>
                </div>
                <div class="prodItem">
                    <div class="prodImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/welded_wire_mesh.png" alt="">
                    </div>
                    <div class="prodInfo">
                        <p>Welded wire mesh</p>
                    </div>
                </div>
                <div class="prodItem">
                    <div class="prodImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/cold_drawn_rolled_steel.png" alt="">
                    </div>
                    <div class="prodInfo">
                        <p>Cold drawn/rolled steel</p>
                    </div>
                </div>
                <div class="prodItem">
                    <div class="prodImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/engineering_services.png" alt="">
                    </div>
                    <div class="prodInfo">
                        <p>Engineering services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products section end -->

<!-- Projects section start -->

<section class="projSec">
    <div class="container-fluid">
        <div class="projGrid">
            <div class="projHead projGridItem">
                <div class="titleArea">
                    <h3 class="mainTitle">Landmark projects across the region</h3>
                </div>
                <div class="ctaBtn">
                    <a href="#" class="">view all brc projects</a>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/dubai_metro.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">Dubai metro</p>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/etihad_rail.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">etihad rail</p>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/yas_marina_formula.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">yas marina formula 1</p>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/dubai_maktoum_airport.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">Dubai Maktoum airport</p>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/ruwais_refinery_expansion_project.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">Ruwais Refinery Expansion Project</p>
                </div>
            </div>
            <div class="projItem projGridItem">
                <div class="projImg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/media/saadiyat_beach_villas.png" alt="">
                </div>
                <div class="projInfo">
                    <p class="text-white">Saadiyat Beach Villas, Abu Dhabi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects section end -->

<!-- News section start -->

<section class="newsSec">
    <div class="container-fluid">
        <div class="row">
            <div class="secHead flexHead">
                <h2 class="mainTitle text-black mb-0">News & insights</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="newsItem">
                    <div class="newsImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/news_card_1.png" alt="">
                    </div>
                    <div class="newsInfo">
                        <div class="titleArea">
                            <h4>Tortor pellentesque nec in vitae convallis nibh</h4>
                        </div>
                        <div class="desc">
                            <p>Aliquet cursus quam eget cras sed nibh enim. Consectetur pulvinar morbi pharetra senectus ac sed neque orci augue. Orci ut tellus id netus. A quam cras enim vulputate...</p>
                        </div>
                        <div class="readMore">
                            <a href="#">Read</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="newsItem">
                    <div class="newsImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/news_card_2.png" alt="">
                    </div>
                    <div class="newsInfo">
                        <div class="titleArea">
                            <h4>Tortor pellentesque nec in vitae convallis nibh</h4>
                        </div>
                        <div class="desc">
                            <p>Aliquet cursus quam eget cras sed nibh enim. Consectetur pulvinar morbi pharetra senectus ac sed neque orci augue. Orci ut tellus id netus. A quam cras enim vulputate...</p>
                        </div>
                        <div class="readMore">
                            <a href="#">Read</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="newsItem">
                    <div class="newsImg">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/news_card_3.png" alt="">
                    </div>
                    <div class="newsInfo">
                        <div class="titleArea">
                            <h4>Tortor pellentesque nec in vitae convallis nibh</h4>
                        </div>
                        <div class="desc">
                            <p>Aliquet cursus quam eget cras sed nibh enim. Consectetur pulvinar morbi pharetra senectus ac sed neque orci augue. Orci ut tellus id netus. A quam cras enim vulputate...</p>
                        </div>
                        <div class="readMore">
                            <a href="#">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end viewAllNews">
            <div class="flexNavItem ctaBtn maxCont">
                <a href="#" class="color-theme">view all news</a>
            </div>
        </div>
    </div>
</section>

<!-- News section end -->

<?php get_footer(); ?>