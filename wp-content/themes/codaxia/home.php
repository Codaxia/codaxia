<?php get_header() ?>

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
					<div class="col-xl-4 col-md-6 col-sm-10">
						<div class="single-bloc single-blog">
							<a class="w-100"href="<?php the_permalink() ?>">
								<div class="image">
									<?php the_post_thumbnail('medium') ?>
								</div>
								<div class="content">
									<h3><?php the_title() ?> </h3>
									<p><?php the_excerpt() ?></p>
							</a>
						</div>
					</div>
		</div>
<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
<!-- // End of the loop.  -->
	</div>
</section>
<?php get_footer() ?>