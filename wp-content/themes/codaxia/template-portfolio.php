<?php 
/*
Template Name: Portfolio 
*/
?>
<?php get_header()?>

<section id="home" class="hero-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content">
                  <span class="wow fadeInLeft" data-wow-delay=".2s"><?= get_field('portfolio_description_portfolio_name_of_the_person'); ?></span>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">
                    <?= get_field('portfolio_description_portfolio_title'); ?>
                  </h1>
                  <p class="wow fadeInUp" data-wow-delay=".6s"><?= get_field('portfolio_description_portfolio_several_projects_title'); ?></p>
                  <p class="wow fadeInUp" data-wow-delay=".6s"><?= get_field('portfolio_description_portfolio_languages_title'); ?></p>
              </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="hero-img-portfolio wow fadeInUp" data-wow-delay=".5s">
                          <img src="<?= get_field('portfolio_description_portfolio_image_of_the_person'); ?>" alt="">
                      </div>
                  </div>
          </div>
              </div>
      </section>
	  
		  <!-- ========================= hero-section end ========================= -->

		<!-- ========================= portfolio-section-de start ========================= -->
		<section id="portfolio-dev" class="portfolio-section dev img-bg pt-120 pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7">
						<div class="section-title text-center mb-60">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('portfolio_project_made_dev_portfolio_project_made_dev_title'); ?></h1>
							<p class="mb-20 wow fadeInUp" data-wow-delay=".4s"><?= get_field('portfolio_project_made_dev_portfolio_project_made_dev_title_2'); ?></p>
						</div>
					</div>
				</div>

				<div class="row">
					<?php if (have_rows('portfolio_project_made_dev_portfolio_project_made_dev_bloc')) : ?>
						<?php while (have_rows('portfolio_project_made_dev_portfolio_project_made_dev_bloc')) : the_row(); ?>
							<div class="col-lg-4 col-md-6">
								<div class="single-portfolio">
									<div class="image">
										<img src="<?= get_sub_field('portfolio_image_project'); ?>" alt="">
									</div>
									<a href="<?= get_sub_field('portfolio_link_project'); ?>" class="overlay d-block" target="_blank">
										<div class="content">
											<div class="link-btn">
												<span> <i class="lni lni-link"></i> </span>
											</div>
											<div class="info">
												<h4><?= get_sub_field('portfolio_project_name'); ?></h4>
												<p><?= get_sub_field('portfolio_description_of_the_client_project'); ?></p>
												<p><?= get_sub_field('portfolio_languages_used_project'); ?></p>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
		  <!-- ========================= portfolio-section-dev end ========================= -->

		  
		<!-- ========================= portfolio-section-cto start ========================= -->
		<section id="portfolio-cto" class="portfolio-section cto img-bg pt-120 pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7">
						<div class="section-title text-center mb-60">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('portfolio_project_made_team_portfolio_project_made_team_title'); ?></h1>
							<p class="mb-20 wow fadeInUp" data-wow-delay=".4s"><?= get_field('portfolio_project_made_team_portfolio_project_made_team_title_2'); ?></p>
						</div>
					</div>
				</div>

				<div class="row">
					<?php if (have_rows('portfolio_project_made_team_portfolio_project_made_team_bloc')) : ?>
						<?php while (have_rows('portfolio_project_made_team_portfolio_project_made_team_bloc')) : the_row(); ?>
							<div class="col-lg-4 col-md-6">
								<div class="single-portfolio">
									<div class="image">
										<img src="<?= get_sub_field('portfolio_team_image_project'); ?>" alt="">
									</div>
									<a href="<?= get_sub_field('portfolio_team_link_project'); ?>" class="overlay d-block" target="_blank">
										<div class="content">
											<div class="link-btn">
												<span> <i class="lni lni-link"></i> </span>
											</div>
											<div class="info">
												<h4><?= get_sub_field('portfolio_team_project_name'); ?></h4>
												<p><?= get_sub_field('portfolio_team_description_of_the_client_project'); ?></p>
												<p><?= get_sub_field('portfolio_team_languages_used_project'); ?></p>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<!-- ========================= portfolio-section end ========================= -->

<?php get_contact()?>
<?php get_footer()?>
