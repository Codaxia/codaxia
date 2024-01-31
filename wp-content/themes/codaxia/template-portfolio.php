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
				  <span class="wow fadeInLeft" data-wow-delay=".2s">XAVIER DE LISLE | FULL STACK DEVELOPMENT</span>
					<h1 class="wow fadeInUp" data-wow-delay=".4s">
					  Portfolio
				  </h1>
				  <p class="wow fadeInUp" data-wow-delay=".6s">Here is Several project I worked on as developer, team lead or CTO.</p>
				  <p class="wow fadeInUp" data-wow-delay=".6s">Saas | Site web | Applications web | React | Vue | Laravel | Javascript | PHP | Wordpress</p>
			  </div>
				  </div>
				  <div class="col-lg-6">
					  <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
						  <img src="assets/img/profil/profile.png" alt="">
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
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Project made as developer</h1>
							<p class="mb-20 wow fadeInUp" data-wow-delay=".4s">Example of project I coded myself or with a team.</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/atuvu.jpg" alt="">
							</div>
							<a href="https://www.atuvu.ca" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>
									<div class="info">
										<h4>atuvu.ca</h4>
										<p>Show booking platform for Quebec</p>
										<p>Laravel - HyperappJS - custom css - html</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/wristband.jpg" alt="">
							</div>
							<a  class="overlay d-block" target="_blank">
								<div class="content">
									<!-- <div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div> -->
									<div class="info">
										<h4>Wristband app</h4>
										<p>Wristband charging application for festival terminal</p>
										<p>ReactJS - Jsx - custom css</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/g8a.jpg" alt="">
							</div>
							<a href="https://g8a-architects.com/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>G8a</h4>
										<p>Architect organization website</p>
										<p>100% Custom Wordpress</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/toilette.jpg" alt="">
							</div>
							<a href="https://toilettequebec.com/en/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Toilette Quebec</h4>
										<p>Sanitary equipment rental Website</p>
										<p>100% Custom Wordpress</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/medical-design.jpg" alt="">
							</div>
							<a href="https://medicaldesign.ca/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Medical design</h4>
										<p>Medical equipment website</p>
										<p>100% Custom Wordpress</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/cocoapp.jpg" alt="">
							</div>
							<a href="https://www.appwapp.com/en/our-projects/cocoapp/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Cocoapp</h4>
										<p>Social aggregator - part of the team</p>
										<p>Laravel - Lumen - VueJS</p>
									</div>
								</div>
							</a>
						</div>
					</div>

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
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Project made as Team lead or cto</h1>
							<p class="mb-20 wow fadeInUp" data-wow-delay=".4s">Example of project I supervised as team lead or CTO.</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/acunote.jpg" alt="">
							</div>
							<a href="https://acunotereactapp.azurewebsites.net/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>
									<div class="info">
										<h4>Acunote</h4>
										<p>Website for the medical record app</p>
										<p>Typescript - ReduxJS - ReactJS - Stripe</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/recyc-blur.png" alt="">
							</div>
							<a href="https://www.recyc-auto.com/en/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>
									<div class="info">
										<h4>Recyc-auto</h4>
										<p>API connection between Square and the app</p>
										<p>Symphony - Square - API</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/glocal_robotics_blur.png" alt="">
							</div>
							<a href="https://www.youtube.com/watch?v=xixVZ06qdNA&ab_channel=GlocalRobotics" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Glocal robotics</h4>
										<p>Front end for the app that controls the robot </p>
										<p>VueJS - ReduxJS</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/plakk.jpg" alt="">
							</div>
							<a href="https://plakk-ai.com/solution/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Plakk ia</h4>
										<p>Web app to analyze medical image</p>
										<p>laravel - VueJS</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="assets/img/portfolio/neurolens.jpg" alt="">
							</div>
							<a href="https://www.neurolens.ca/en/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Neurolens</h4>
										<p>Duplication of the website</p>
										<p>Hubspot website - javasript</p>
									</div>
								</div>
							</a>
						</div>
					</div> -->
					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/ergo.jpg" alt="">
							</div>
							<a href="https://equilibre.net/prendre-rendez-vous" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Ergosearch</h4>
										<p>Form to reserve medical equipment in the website</p>
										<p>VueJs - CraftCms</p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-portfolio">
							<div class="image">
								<img src="<?= home_url() ?>/wp-content/themes/codaxia/assets/img/portfolio/pedlex.jpg" alt="">
							</div>
							<a href="https://www.pedlex.com/" class="overlay d-block" target="_blank">
								<div class="content">
									<div class="link-btn">
										<span> <i class="lni lni-link"></i> </span>
									</div>

									<div class="info">
										<h4>Pedlex</h4>
										<p>Several new features on the website</p>
										<p>php - OpenCart</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= portfolio-section end ========================= -->

		<!-- ========================= cta-section start ========================= -->
		<section id="contact" class="cta-section img-bg pt-110 pb-60">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7">
						<div class="section-title mb-50">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">How can I help you?</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">We can discuss your projects in more detail and determine your needs together.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5">
						<div class="cta-btn text-lg-end mb-50">
							<a href="mailto:xdelisle@codaxia.com" class="main-btn btn-hover text-uppercase">Contact me</a>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer()?>
