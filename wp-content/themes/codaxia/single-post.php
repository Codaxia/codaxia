<?php get_header() ?>
<!-- /* Start the Loop */ -->
<?php while (have_posts()) : the_post() ?>
	<section id="post" class="hero-section blog-page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12 col-12 mb-2">
					<div class="row single-bloc-blog single-blog col-lg-14">
						<div class="content col-lg-6">
							<h1> <?php the_title() ?> </h1>
							</br>
							<p><?php the_excerpt() ?></p>
							</br>
							<p> <?= get_field('autor_name'); ?> </p>
							<p><?php echo get_the_date(); ?></p>
						</div>
						<div class="image col-lg-6">
							<?php the_post_thumbnail() ?>
						</div>
					</div>
					<div>
					<?php the_content() ?>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
<?php endwhile; // End of the loop.

get_footer() ?>

