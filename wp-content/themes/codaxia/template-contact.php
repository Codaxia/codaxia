<?php
/*
Template Name: Contact Form
*/
?>
<?php get_header()?>

<section class="form-section pt-50">
    <div class= "row pb-50 info-img">
    <div class="title-section pb-30">
                <span class="title">
                    <?= get_field('contact_title_contact_title'); ?>
                </span>
                    </br>
                    <?= get_field('contact_title_contact_subtitle'); ?>
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
                    <iframe id="gmap-canvas-form" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11181.844318091675!2d-73.566081!3d45.5209263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bd7ccaf2125%3A0x295597803e1369bc!2sCodaxia!5e0!3m2!1sfr!2sca!4v1709612719491!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>   
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<?php get_footer()?>



