<?php

/**
 * Template Name: Project Detail Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brc-arabia
 */

get_header(); ?>

<!-- Banner section start -->
<section class="projectIntroSec">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12 projContCol">
                <div class="projMainInfo position-relative">
                    <div class="backCta">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/backto_arrow.svg" alt="Back Arrow">
                        <a href="#" class="text-black">Back to projects</a>
                    </div>
                    <div class="secHead">
                        <h1 class="xlTitle mb-0">Dubai Metro</h1>
                        <div class="desc">
                            <p>Amet lorem viverra vestibulum ut fames morbi. Aliquam hac ultrices tellus ac neque. Vestibulum pellentesque condimentum egestas phasellus.</p>
                        </div>
                    </div>
                </div>
                <div class="solutionInfo">
                    <div class="titleArea pb-2">
                        <h4>solutions provided:</h4>
                    </div>
                    <div class="solList">
                        <div class="solItem position-relative">Cut & bent rebar</div>
                        <div class="solItem position-relative">Welded wire mesh</div>
                        <div class="solItem position-relative">Cold drawn wire</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="projFeatImg">
                    <div class="imgArea position-relative">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/projects/dubai_metro_project.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->

<!-- Project content start -->

<section class="projectIntroSec">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12 projContCol">
                <div class="projDetImg">
                    <div class="imgArea">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/media/projects/project_inner.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="projDetCont">
                    <div class="desc">
                        <p>Feugiat tempor sem viverra id. Dolor nec nam feugiat sed non sagittis ac laoreet sollicitudin. Donec proin massa maecenas consectetur pellentesque. Purus cursus accumsan quisque egestas ut nam senectus amet. Dui sapien est ut mauris gravida faucibus. In rutrum dui sagittis venenatis lectus eu sit velit.</p>
                        <p>Iaculis et leo pharetra consequat gravida vitae nibh mauris. Elit semper ultrices lorem malesuada adipiscing amet urna pretium. Vestibulum nisl nec augue arcu sit ligula consequat eget eu. Pellentesque etiam morbi ornare eu facilisis laoreet molestie fames. Egestas felis tempus quam lobortis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project content start -->

<!-- Other projects section start -->

<section class="relProjSec otherProjSec bg_theme_grey">
    <div class="container-left">
        <div class="secHead">
            <h3 class="mainTitle">Other projects with BRC</h3>
        </div>
        <div class="relProjList swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="relProjItem prodItem">
                        <div class="projImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/projects/etihad_rail_project.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Dubai metro</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relProjItem prodItem">
                        <div class="projImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_3.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Yas marina formula 1</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relProjItem prodItem">
                        <div class="projImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_2.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Dubai maktoum airport</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relProjItem prodItem">
                        <div class="projImg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/media/products/brc_project_4.png" alt="">
                        </div>
                        <div class="prodInfo">
                            <p>Ruwais refinery expansion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projSwiperNav">
            <div class="swiper-button-prev">
                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-left-theme.svg" alt="Next" />
            </div>
            <div class="swiper-button-next">
                <img src="<?php bloginfo('template_directory'); ?>/assets/media/arrow-right-theme.svg" alt="Next" />
            </div>
        </div>
    </div>
</section>

<!-- Other projects section end -->

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