<?php
/*
Template Name: Blog
*/
get_header() ?>

<!-- ========================= Blog section ========================= -->
<section id="blog" class="bloc-section blog pt-150">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xxl-5 col-xl-6 col-lg-7">
				<div class="section-title text-center mb-60">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('blog_title'); ?></h1>
					<p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('blog_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php
			$query = new WP_Query(['']);
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-10">
						<div class="single-bloc single-blog bg-white">
							<a class="w-100"href="<?php the_permalink() ?>">
								<div class="image-blog" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
								</div>
                                <div class="content">
									</br>
									<h3 class="fs-4 mb-1 text-dark"><?php the_title() ?> </h3>
									</br>
									<div class="text-secondary">
										<p><?php the_excerpt() ?></p>
										</br>
										<p><?php echo get_the_date(); ?></p>
									</div>
                                </div>
							</a>
						</div>
					</div>
			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
<!-- // End of the loop.  -->
	</div>
</section>

<?php get_contact() ?>
<?php get_footer() ?>