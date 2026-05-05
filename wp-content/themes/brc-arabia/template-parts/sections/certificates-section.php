<?php $_cert_imgs_images = get_field('_cert_imgs'); ?>
<?php if ($_cert_imgs_images) :  ?>
    <div class="row align-items-center certRow">
        <div class="col-lg-4 col-12">
            <div class="secHead">
                <h2 class="mainTitle" data-aos="fade-up" data-aos-duration="1200"><?php the_field('_cert_sec_title'); ?></h2>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div class="certLogos flexHead" data-aos="fade-up" data-aos-duration="1600">
                <?php foreach ($_cert_imgs_images as $_cert_imgs_image): ?>
                    <div class="certLogo">
                        <div class="imgArea">
                            <img src="<?php echo esc_url($_cert_imgs_image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($_cert_imgs_image['alt']); ?>" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>