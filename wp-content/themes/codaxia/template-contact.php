<?php
/*
Template Name: Contact Form
*/
?>
<?php get_header()?>

<section class="form-section w-100 pt-150">
    <div class= "container">
        <div class="pb-30">
                    <span class="title">
                        <?= get_field('contact_title_section_contact_title'); ?>
                    </span>
                        <p>
                            <?= get_field('contact_title_section_contact_subtitle'); ?>
                        </p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 pt-30">
                <?php echo do_shortcode(get_field('shortcode')); ?>
            </div>
            <div class="col-lg-6 col-md-6 pt-30">
                <div class="info-contact text-white text-decoration-underline">
                    <span class="title">
                    <?= get_field('contact_info_contact_title'); ?>
                    </span>
                    <div class="pt-20">
                    <i class="pe-2 lni lni-envelope"></i>
                    <?= get_field('contact_info_contact_email'); ?>
                    </div>
                    <div class="pt-30">
                    <i class="pe-2 lni lni-phone"></i>
                    <?= get_field('contact_info_contact_tel_number'); ?>
                    </div>
                    <div class="pt-30">
                    <i class="pe-2 lni lni-map-marker"></i>
                    <?= get_field('contact_info_contact_location'); ?>
                    </div>
                    <div class="contact-map-form pt-45">
                        <div class="gmap-canvas-form">
                        <iframe title="localization of the company in google map" id="gmap-canvas-form" src="<?= get_field('map_key', 'option'); ?>">
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>