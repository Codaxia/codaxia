<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header()?>

<section class="hero-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content">
                  <span class="wow fadeInLeft title" data-wow-delay=".2s"><?= get_field('portfolio_description_portfolio_name_of_the_person'); ?></span>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">
                    <?= get_field('portfolio_description_portfolio_title'); ?>
                  </h1>
                  <p class="wow fadeInUp" data-wow-delay=".6s"><?= get_field('portfolio_description_portfolio_several_projects_title'); ?></p>
                  <p class="wow fadeInUp" data-wow-delay=".6s"><?= get_field('portfolio_description_portfolio_languages_title'); ?></p>
              </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="hero-img-portfolio text-center wow fadeInUp" data-wow-delay=".5s">
                          <img class="w-50" src="<?= get_field('portfolio_description_portfolio_image_of_the_person'); ?>" alt="">
                      </div>
                  </div>
          	</div>
        </div> 
      </section>
	  
		  <!-- ========================= filter start ========================= -->
	
		<div class="btn-container d-flex justify-content-center align-items-center mt-2 pt-40 pb-20">
			<?php if (have_rows('portfolio_filter_bloc')) : ?>
				<?php while (have_rows('portfolio_filter_bloc')) : the_row(); ?>
				<?php $data =  get_sub_field('portfolio_filter_name');?>
				<button data-filter="<?= strtolower($data); ?>" class="text-white filter-btn btn"><?= $data ?></button>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		  <!-- ========================= filter end ========================= -->

		<!-- ========================= portfolio-section-de start ========================= -->
		<section class="portfolio-section img-bg pt-40 pb-100">
			<div class="container">
				<div class="row">
					<?php if (have_rows('portfolio_project_made_portfolio_project_made_bloc')) : ?>
						<?php while (have_rows('portfolio_project_made_portfolio_project_made_bloc')) : the_row(); ?>					
            					<div class="col-lg-4 col-md-6">
									<div 
									class="single-portfolio filter-div"
									id="<?= get_sub_field('portfolio_project_type'); ?>"
									data-category="<?= get_sub_field('portfolio_project_type'); ?>" >
										<div class="image <?= get_sub_field('portfolio_project_privacy'); ?>">
											<img src="<?= get_sub_field('portfolio_image_project'); ?>" class="image w-100 <?= get_sub_field('portfolio_project_privacy'); ?>" alt="">
										</div>
										<?php if (get_sub_field('portfolio_project_privacy')=='private') : ?>
											<a href="../contact-form/" class="overlay d-block" target="_blank">
												<div class="content d-flex flex-column justify-content-end w-100 h-100">
													<div class="link-btn">
														<span class="text-center bg-white fs-2"> <i class="lni lni-link"></i> </span>
													</div>
													<div class="info-portfolio">
														<h4 class="text-white"><?= get_field('portfolio_contact_message'); ?></h4>
													</div>
												</div>
											</a>
										<?php else : ?>
											<a href="<?= get_sub_field('portfolio_link_project'); ?>" class="overlay d-block" target="_blank">
												<div class="content d-flex flex-column justify-content-end w-100 h-100">
													<div class="link-btn">
														<span class="text-center bg-white fs-2"> <i class="lni lni-link"></i> </span>
													</div>
													<div class="info-portfolio">
														<h4 class="text-white"><?= get_sub_field('portfolio_project_name'); ?></h4>
														<p><?= get_sub_field('portfolio_description_of_the_client_project'); ?></p>
														<p><?= get_sub_field('portfolio_languages_used_project'); ?></p>
													</div>
												</div>
											</a>
										<?php endif ?>
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