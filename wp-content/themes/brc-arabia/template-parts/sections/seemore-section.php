<?php $_seemore_col_image = get_field('_seemore_col_image'); ?>
<?php if (have_rows('_seemore_links') ||  $_seemore_col_image) : ?>
    <div class="row">
        <div class="col-lg-6 col-12 p-0">
            <div class="seemoreLinks position-relative">
                <?php
                $seemoreCount = 1;
                while (have_rows('_seemore_links')) : the_row(); ?>
                    <div class="seemoreLink" data-aos="fade-up" data-aos-duration="1200">
                        <div class="ctaArea">
                            <?php if ($seemoreCount == 1) : ?>
                                <h4 class="subTitle color-theme">See more</h4>
                            <?php endif; ?>
                            <?php $_seemore_link = get_sub_field('_seemore_link'); ?>
                            <?php if ($_seemore_link) : ?>
                                <a href="<?php echo esc_url($_seemore_link['url']); ?>" target="<?php echo esc_attr($_seemore_link['target']); ?>" class="text-black1 hover_theme">
                                    <?php the_sub_field('_seemore_link_title'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php
                    $seemoreCount++;
                endwhile; ?>
            </div>
        </div>
        <?php if ($_seemore_col_image) : ?>
            <div class="col-lg-6 col-12 p-0">
                <div class="seemoreImgArea" data-aos="fade-up" data-aos-duration="1400">
                    <div class="imgArea">
                        <img src="<?php echo esc_url($_seemore_col_image['url']); ?>" alt="<?php echo esc_attr($_seemore_col_image['alt']); ?>" />
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>