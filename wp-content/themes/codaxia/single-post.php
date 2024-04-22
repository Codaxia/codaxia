<?php get_header() ?>
<!-- /* Start the Loop */ -->
<?php while (have_posts()) : the_post() ?>
	<section id="post" class="hero-section blog-page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 mb-2">
					<div class="row single-bloc-blog single-blog bg-white col-xl-12 col-md-10 p-4 mb-4 mr-n5">
						<div class="content col-xl-6">
							<h1 class="text-dark text-center"> <?php the_title() ?> </h1>
							</br>
							<div class="text-dark fs-7">
								<p><?php the_excerpt() ?></p>
								</br>
								<p> By: <?= get_field('autor_name'); ?> </p>
								<p><?php echo get_the_date(); ?></p>
								</br>
							</div>
						</div>
						<div class="image-article col-xl-6" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
						</div>
					</div>
					<div class="content-article">
					<p> <?php the_content() ?> </p>
					</br>
					<hr>
					</div>
					<div class="row">
						<div class="image-autor col-2 col-md-1 me-4">
							<img src="<?= get_field('autor_image'); ?>" alt="">
						</div>
						<div class="col-8 col-md-3 fs-4 ms-4">
							<div>
								<p class="text-white fw-bolder"> <?= get_field('autor_name'); ?> </p>
								<p class="mb-1 text-white"> <?= get_field('role_autor'); ?> </p>
							</div>
							<ul class="socials d-flex align-items-center">
    							<li class="me-3">
									<a href="<?= get_field('linkedin_autor'); ?>" class="bg-white d-flex justify-content-center align-items-center"> <i class="lni lni-linkedin-original"></i> </a> 
    							</li>
    							<li class="me-3">
									<a href="<?= get_field('mail_autor'); ?>" class="bg-white d-flex justify-content-center align-items-center"> <i class="lni lni-envelope"></i> </a>
    							</li>
    						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // End of the loop.

get_contact() ;
get_footer(); ?>