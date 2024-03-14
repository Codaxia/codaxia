<?php
/*
Template Name: Contact Form
*/
?>
<?php get_header()?>

<section class="form-section pt-50">
    <div class= "row pb-50">
    <div class="title-section pb-30">
                <span class="title">
                    <?= get_field('contact_title_contact_title'); ?>
                </span>
                <p>
                    <?= get_field('contact_title_contact_subtitle'); ?>
                </p>
    </div>
        <div class="col-lg-6">
                <?php echo do_shortcode(get_field('shortcode')); ?> 
        </div>
        <div class="col-lg-6">
            <div class="info">
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
                    <iframe id="gmap-canvas-form" src="<?= get_field('contact_info_contact_map_key'); ?>">
                    </iframe>   
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<?php get_footer()?>



