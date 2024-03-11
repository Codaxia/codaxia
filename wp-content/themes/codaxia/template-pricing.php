<?php
/*
Template Name: Pricing
*/
?>
<?php get_header()?>

<section id="pricing-plans" class="pt-120 pb-100 text-light pricing">
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
            		<div class="col-lg-3 col-md-6 mb-4">
                        <?php if (!empty(get_sub_field('pricing_recommanded'))) : ?>
                                <!-- Contenu de votre élément avec la classe ajoutée si la condition est remplie -->
                                <div class="single-bloc-pricing recommanded text-white h-100">
                                    <div class="subtitle">
                                        <div class="recommanded">
                                            <p><?= get_sub_field('pricing_recommanded')?></p>
                                        </div>
                                        <div class="row icon">
                                            <i class="lni <?= get_sub_field('pricing_icon')?>"></i>
                                            <h4 class="col-lg-1"><?= get_sub_field('pricing_type')?></h4>
                                            <p><?= get_sub_field('pricing_description')?></p>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <p><?= get_sub_field('pricing_price_amount_title')?></p>
                                            <h3><?= get_sub_field('pricing_price_amount')?></h3>
                                            <?php if (have_rows('pricing_website_package')) : ?>
                                                <?php while (have_rows('pricing_website_package')) : the_row(); ?>
                                                    <ul class="list-unstyled text-start">
                                                            <li><i class="lni lni-checkmark-circle"></i><?= get_sub_field('pricing_website_package_description')?></li>
                                                    </ul>           
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                        <a href="<?= get_field('contact_mail', 'option'); ?>" class="btn button-buy btn-block fw-bold text-white"><?= get_field('contact_button', 'option'); ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php else: ?>
                                <div class="single-bloc-pricing text-white h-100">
                                    <div class="subtitle">
                                            <div class="row icon">
                                                <i class="lni <?= get_sub_field('pricing_icon')?>"></i>
                                                <h4 class="col-lg-1"><?= get_sub_field('pricing_type')?></h4>
                                                <p><?= get_sub_field('pricing_description')?></p>
                                            </div>
                                        <div class="card-body d-flex flex-column">
                                            <p><?= get_sub_field('pricing_price_amount_title')?></p>
                                            <h3><?= get_sub_field('pricing_price_amount')?></h3>
                                            <?php if (have_rows('pricing_website_package')) : ?>
                                                <?php while (have_rows('pricing_website_package')) : the_row(); ?>
                                                    <ul class="list-unstyled text-start">
                                                            <li><i class="lni lni-checkmark-circle"></i><?= get_sub_field('pricing_website_package_description')?></li>
                                                    </ul>           
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                        <a href="<?= get_field('contact_mail', 'option'); ?>" class="btn button-buy btn-block fw-bold text-white"><?= get_field('contact_button', 'option'); ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>

			<!-- Ultimate -->
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="single-bloc-pricing text-white h-100">
                    <div class="subtitle">
                        <div class="row icon">
                            <i class="lni lni-stats-up"></i>
                            <h4 class="col-lg-1">ULTIMATE</h4>
                            <p>Large scale enterprises</p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            </br>
                            <h1>We are open to negotiations.</h1> 
                            </br>
                            <ul class="list-unstyled text-start">
                                    <li><i class="lni lni-checkmark-circle"></i> Unlimited Page</li>
                                    <li><i class="lni lni-checkmark-circle"></i> Mobile Ready Design</li>
                                    <li><i class="lni lni-checkmark-circle"></i> Custom features </li>  
                            </ul>
                            </br>
                            <h1> Contact us to find a solution tailored to your needs!</h1>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="<?= get_field('contact_mail', 'option'); ?>" class="btn button-buy btn-block fw-bold text-white"><?= get_field('contact_button', 'option'); ?></a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_contact() ?>
<?php get_footer() ?>