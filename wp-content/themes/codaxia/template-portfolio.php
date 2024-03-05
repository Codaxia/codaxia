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
	  

		  <!-- ========================= filter start ========================= -->
	
		<div class="btn-container d-flex justify-content-center align-items-center mt-2 pt-40 pb-20">
			<?php if (have_rows('portfolio_filter_bloc')) : ?>
				<?php while (have_rows('portfolio_filter_bloc')) : the_row(); ?>
				<?php $data =  get_sub_field('portfolio_filter_name');?>
				<button data-filter="<?= strtolower($data); ?>" class="filter-btn btn"><?= $data ?></button>
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
		  <!-- ========================= portfolio-section end ========================= -->

		<!-- ========================= portfolio-section end ========================= -->
		<?php get_footer()?>

<?php get_contact()?>
<?php get_footer()?>

