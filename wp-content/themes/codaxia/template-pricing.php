<?php
/*
Template Name: Pricing
*/
?>
<?php get_header()?>

<!-- Pricing bloc section -->
<section id="pricing-plans" class="pt-120 text-light pricing">
	<div class="container">
		<!-- Title and Description -->
		<div class="row ">
			<div class="col-lg-12">
                <div class="header section-title text-center mb-60">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('pricing_primary_title'); ?></h1>
					<p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('pricing_secondary_title_1'); ?></p>
                    <p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('pricing_secondary_title_2'); ?></p>
				</div>
			</div>
		</div>
		<!-- Pricing Toggle -->
        <div>
            <p><?= get_field('toggle_title') ?></p>
        </div>
		<div class="row">
			<div class="col-12 mb-4">
				<div class="pricing-switch d-flex align-items-center">
					<label class="form-check-label me-2" for="starter-toggle"><?= get_field('first_part_toggle') ?></label>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="starter-toggle">
						<label class="form-check-label" for="starter-toggle"></label>
					</div>
					<label class="form-check-label ms-2" for="starter-toggle"><?= get_field('second_part_toggle') ?></label>
				</div>
			</div>
		</div>
		<!-- Pricing Cards -->
		<div class="row pt-15">
			<!-- Basic, pro and premium -->
            <?php if (have_rows('pricing_bloc')) : ?>
				<?php while (have_rows('pricing_bloc')) : the_row(); ?>		
            		<div class="col-xl-3 col-lg-4 col-sm-6 mb-70">
                        <?php if (!empty(get_sub_field('pricing_recommanded'))) : ?>
                                <!-- Contenu de votre élément avec la classe ajoutée si la condition est remplie -->
                                <div class="single-bloc-pricing recommanded h-100">
                                    <div class="content padding">
                                        <div class="recommanded text-white">
                                            <p><?= get_sub_field('pricing_recommanded')?></p>
                                        </div>
                                        <div class="row icon">
                                            <div>
                                                <i class="lni <?= get_sub_field('pricing_icon')?>"></i>
                                            </div>
                                            <div class="col-11 col-sm-12">
                                                <h4><?= get_sub_field('pricing_type')?></h4>
                                                <p class="text-white"><?= get_sub_field('pricing_description')?></p>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <p class="text-success"><?= get_sub_field('pricing_price_amount_title')?></p>
                                            <h3 class="text-white"><?= get_sub_field('pricing_price_amount')?></h3>
                                            <?php if (have_rows('pricing_website_package')) : ?>
                                                <?php while (have_rows('pricing_website_package')) : the_row(); ?>
                                                    <ul class="list-unstyled text-start">
                                                            <li><i class="lni lni-checkmark-circle"></i><?= get_sub_field('pricing_website_package_description')?></li>
                                                    </ul>           
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="first">
                                                <div class="second">
                                                    <button class="glow-button">
                                                        <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                                        <?= get_field('contact_button', 'option'); ?></a></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php else: ?>
                                <div class="single-bloc-pricing h-100">
                                    <div class="content">
                                            <div class="row icon">
                                                <div>
                                                    <i class="lni <?= get_sub_field('pricing_icon')?>"></i>
                                                </div>
                                                <div class="col-11 col-sm-12">
                                                    <h4><?= get_sub_field('pricing_type')?></h4>
                                                    <p class="text-white"><?= get_sub_field('pricing_description')?></p>
                                                    <hr>
                                                </div>
                                            </div>
                                        <div class="card-body d-flex flex-column">
                                            <p class="text-success"><?= get_sub_field('pricing_price_amount_title')?></p>
                                            <h3 class="text-white"><?= get_sub_field('pricing_price_amount')?></h3>
                                            <?php if (have_rows('pricing_website_package')) : ?>
                                                <?php while (have_rows('pricing_website_package')) : the_row(); ?>
                                                    <ul class="list-unstyled text-start">
                                                            <li><i class="lni lni-checkmark-circle"></i><?= get_sub_field('pricing_website_package_description')?></li>
                                                    </ul>           
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="first">
                                                <div class="second">
                                                    <button class="glow-button">
                                                        <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                                        <?= get_field('contact_button', 'option'); ?></a></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>

			<!-- Ultimate -->
			<div class="col-xl-3 col-lg-4 col-sm-6 mb-70">
				<div class="single-bloc-pricing h-100">
                    <div class="content">
                        <div class="row icon">
                            <div>
                                <i class="lni lni-stats-up"></i>
                            </div>
                            <div class="col-11 col-sm-12">
                                <h4>ULTIMATE</h4>
                                <p class="text-white">Large scale enterprises</p>
                                <hr>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column padding-body">
                            </br>
                            <h1 class="text-white">We are open to negotiations.</h1> 
                            </br>
                            <ul class="list-unstyled text-start margin">
                                    <li><i class="lni lni-checkmark-circle"></i>Unlimited Page</li>
                                    <li><i class="lni lni-checkmark-circle"></i>Mobile Ready Design</li>
                                    <li><i class="lni lni-checkmark-circle"></i>Custom features </li>  
                            </ul>
                            </br>
                            <h1 class="text-white"> Contact us to find a solution tailored to your needs!</h1>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="first">
                                <div class="second">
                                    <button class="glow-button">
                                        <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                        <?= get_field('contact_button', 'option'); ?></a></span>
                                    </button>
                                </div>
                            </div>                        
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Process section -->
<section class="pt-90 pb-100 text-light website-process">
    <div class="container">
        <div class="col">
            <div class="header section-title text-center mb-60 primary-title">
                <h1 class="mb-20 wow fadeInUp" data-wow-delay=".3s">WHERE DO WE START</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-0 d-flex justify-content-center pt-60">
            <div class="col-lg-2 col-md-4">
                <div class="icon"><i class="lni lni-bulb"></i></div>
                <div class="bloc-light-blue left-border d-none d-lg-block"></div>
                <div>
                    <h1>DEFINE YOUR NEEDS</h1>
                    <div class="bloc-small"></div>
                    <p>We are going to ask you different questions to target what is your complete project.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="icon"><i class="lni lni-graph"></i></div>
                <div class="bloc-dark-blue d-none d-lg-block"></div>
                <div>
                    <h1>DESIGN</h1>
                    <div class="bloc-small"></div>
                    <p>According to our exchange we are destining a template of the website.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="icon"><i class="lni lni-rocket"></i></div>
                <div class="bloc-light-blue d-none d-lg-block"></div>
                <div>
                    <h1> PROGRAMMING</h1>
                    <div class="bloc-small"></div>
                    <p>We are developing the architecture and the code to transform the template in real website.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="icon"><i class="lni lni-alarm-clock"></i></div>
                <div class="bloc-dark-blue d-none d-lg-block"></div>
                <div>
                    <h1> RELEASE</h1>
                    <div class="bloc-small"></div>
                    <p>Once the website is done and approved we reveal it to the world.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="icon"><i class="lni lni-cog"></i></div>
                <div class="bloc-light-blue right-border d-none d-lg-block"></div>
                <div>
                    <h1> MAINTENANCE</h1>
                    <div class="bloc-small"></div>
                    <p>We are here for the maintenance and updating of your website. New ideas? We'll be here to support you every step of the way.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_contact() ?>
<?php get_footer() ?>