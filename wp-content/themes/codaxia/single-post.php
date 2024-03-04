<?php get_header() ?>
<!-- Start the Loop -->
<?php while (have_posts()) : the_post() ?>
    <section id="post" class="hero-section blog-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 mb-2">
                    <div class="row single-bloc-blog single-blog col-lg-14">
                        <div class="content col-lg-6">
                            <h1><?php the_title() ?></h1>
                            <br>
                            <p><?php the_excerpt() ?></p>
                            <br>
                            <p>By: <?= get_field('autor_name'); ?></p>
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="image-article col-lg-6" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="content-article">
                        <p><?php the_content() ?></p>
                        <br>
                        <hr>
                    </div>
                    <div class="row bloc-border-autor">
                        <div class="image-autor col-lg-1">
                            <img src="<?= get_field('autor_image'); ?>" alt="">
                        </div>
                        <div class="bloc-autor col-lg-2">
                            <p><?= get_field('autor_name'); ?></p>
                            <a href="<?= get_field('linkedin_autor'); ?>"><i class="lni lni-linkedin-original"></i></a>
                            <a href="<?= get_field('mail_autor'); ?>"><i class="lni lni-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // End of the loop.
get_contact();