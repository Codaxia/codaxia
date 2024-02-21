<?php get_header() ?>
test
<!-- /* Start the Loop */ -->
<?php while (have_posts()) : the_post() ?>
	<section id="post" class="hero-section blog-page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12 col-12 mb-2">
					<h1> <?php the_title() ?> </h1>
					<div class="image col-lg-6">
						<?php the_post_thumbnail() ?>
						<p><?php the_excerpt() ?></p>
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

