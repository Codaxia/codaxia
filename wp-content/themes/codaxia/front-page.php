<?php

/**
 * @package WordPress
 * @subpackage Coadaxia subpackage
 * @since Codaxia version 0.1
 */


get_header() ?>

<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="hero-content">
					<span class="wow fadeInLeft" data-wow-delay=".2s"><?= get_field('hero_section_title'); ?></span>
					<h1 class="wow fadeInUp" data-wow-delay=".4s">
						<?= get_field('hero_section_title_2'); ?>
					</h1>
					<p class="wow fadeInUp" data-wow-delay=".6s">
						<?= get_field('hero_section_description'); ?>
					</p>
					<a href="<?= get_field('hero_section_url_button'); ?>" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">
						<?= get_field('hero_section_button'); ?></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
					<img src="<?= get_field('hero_section_image'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================= hero-section end ========================= -->

<!-- ========================= about-section start ========================= -->
<section id="about" class="about-section pt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-img mb-50">
					<img src="<?= get_field('about_image'); ?>" alt="about">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-content mb-50">
					<div class="section-title mb-50">
						<h1 class="mb-25"><?= get_field('about_title'); ?></h1>
						<p><?= get_field('about_description'); ?></p>
					</div>
					<div class="accordion pb-15" id="accordionExample">
						<?php $i = 1;
						if (have_rows('about_bloc')) : ?>
							<?php while (have_rows('about_bloc')) : the_row(); ?>
								<div class="single-faq">
									<button class="w-100 text-start <?= ($i != 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?= ($i != 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i ?>">
										<?= get_sub_field('about_bloc_title'); ?>
									</button>

									<div id="collapse<?= $i ?>" class="collapse <?= ($i != 1) ? '' : 'show'; ?>" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
										<div class="faq-content">
											<?= get_sub_field('about_bloc_content'); ?>
										</div>
									</div>
								</div>
						<?php $i++;
							endwhile;
						endif; ?>
					</div>
					<a href="<?= get_field('about_button_url'); ?>" class="main-btn btn-hover"><?= get_field('about_button'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================= about-section end ========================= -->

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
<!-- ========================= service-section start ========================= -->
<section id="service" class="service-section img-bg pt-100 pb-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
				<div class="section-title text-center mb-50">
					<h1><?= get_field('service_title'); ?></h1>
					<p><?= get_field('service_description'); ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
			if (have_rows('service_bloc')) : ?>
				<?php while (have_rows('service_bloc')) : the_row(); ?>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="d-flex">
								<?php if (get_sub_field('service_bloc_icon_1')) : ?>
									<div class="icon color-3">
										<i class="lni <?= get_sub_field('service_bloc_icon_1'); ?>"></i>
									</div>
								<?php endif; ?>
								<div class="icon color-2">
									<i class="lni <?= get_sub_field('service_bloc_icon_2'); ?>"></i>
								</div>
							</div>
							<div class="content">
								<?= get_sub_field('service_bloc_content'); ?>
							</div>

						</div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</section>
<!-- ========================= service-section end ========================= -->

<!-- ========================= counter-up-section start ========================= -->
<section id="informations" class="counter-up-section pt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="counter-up-content mb-50">
					<div class="section-title mb-40">
						<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('why_us_title'); ?></h1>
						<?= get_field('why_us_content'); ?>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class="counter-up-img mb-50">
					<img src="<?= get_field('why_us_image'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================= counter-up-section end ========================= -->

<!-- ========================= team-section start ========================= -->
<section id="team" class="bloc-section team pt-150">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xxl-5 col-xl-6 col-lg-7">
				<div class="section-title text-center mb-60">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('team_bloc_title'); ?></h1>
					<p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('team_bloc_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">

			<?php if (have_rows('team_bloc')) : ?>
				<?php while (have_rows('team_bloc')) : the_row(); ?>
					<div class="col-xl-3 col-md-6 col-sm-10">
						<div class="single-bloc">
							<div class="image">
								<img src="<?= get_sub_field('team_bloc_image'); ?>" alt="">
							</div>
							<div class="content">
								<h3><?= get_sub_field('team_bloc_name'); ?></h3>
								<p><?= get_sub_field('team_bloc_function'); ?></p>
								<a href="<?= get_sub_field('team_bloc_linkedin'); ?>"> <i class="lni lni-linkedin-original"></i> </a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ========================= team-section end ========================= -->

<!-- ========================= cta-section start ========================= -->
<section id="contact" class="cta-section img-bg pt-110 pb-60">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-7">
				<div class="section-title mb-50">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('contact_title'); ?></h1>
					<p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('contact_description'); ?></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-5">
				<div class="cta-btn text-lg-end mb-50">
					<a href="<?= get_field('contact_mail'); ?>" class="main-btn btn-hover text-uppercase">
						<?= get_field('contact_button'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================= cta-section end ========================= -->

<?php get_footer() ?>