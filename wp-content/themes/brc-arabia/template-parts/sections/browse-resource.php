<?php if (get_field('_bres_sec_title') || get_field('_bres_sec_bg') || have_rows('_bresources_list')): ?>
    <section class="resourceSec">
        <div class="resBanImg">
            <?php if (get_field('_bres_sec_bg')) : ?>
                <div class="imgArea">
                    <img src="<?php the_field('_bres_sec_bg'); ?>" alt="Browse resources">
                </div>
            <?php endif ?>
        </div>
        <div class="container-theme resCont">
            <div class="secHead position-relative">
                <h2 class="xlTitle text-white" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_bres_sec_title'); ?></h2>
                <?php if (have_rows('_bresources_list')): ?>
                    <div class="ctaArea flexNav">
                        <?php if (have_rows('_bres_company_profile')) : ?>
                            <?php while (have_rows('_bres_company_profile')) : the_row(); ?>
                                <?php if (get_sub_field('_bres_comp_prof_file')) : ?>
                                    <div class="ctaBtn" data-aos="fade-up" data-aos-duration="1400">
                                        <a href="<?php the_sub_field('_bres_comp_prof_file'); ?>" target="_blank" class="btn_yellow hover_white">
                                            <?php the_sub_field('_bres_comp_prof_title'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php while (have_rows('_bresources_list')) : the_row(); ?>
                            <div class="ctaBtn" data-aos="fade-up" data-aos-duration="1400">
                                <?php $_bresource_link = get_sub_field('_bresource_link'); ?>
                                <?php if ($_bresource_link) : ?>
                                    <a href="<?php echo esc_url($_bresource_link['url']); ?>" class="btn_yellow hover_white">
                                        <?php the_sub_field('_bresource_name'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>