<?php
/*
Template Name: Audit
*/
?>
<?php get_header()?>

<section class="pt-120 pb-50 why-audit">
    <div class="container">
        <div class="title text-center">
            <h5><?= get_field('why_audit_why_audit_big_title'); ?></h5>
            <p><?= get_field('why_audit_why_audit_subtitle'); ?></p>
            <a href="<?= get_field('why_audit_why_audit_icon_url'); ?>"><i class="<?= get_field('why_audit_why_audit_icon'); ?>"></i></a>
        </div>
        <div class="row single-bloc-why col-12 col-xxl-10 col-xl-12 col-lg-12 col-sm-10 p-4 mb-4 mr-n5">
            <div class="col-11 col-xxl-8 col-xl-8 col-lg-7 col-sm-12">
                <h4><?= get_field('why_audit_why_audit_title'); ?></h4>
                <p><?= get_field('why_audit_why_audit_description'); ?></p>
                <div class="row padding-all-button">
                    <div class="col-0 col-xxl-2 col-xl-2 col-lg-0 col-sm-1"></div>
                    <div class="first col-6 col-xxl-4 col-xl-4 col-lg-4 col-sm-5 mb-10 me-2">
                        <div class="second">
                            <button class="glow-button">
                                <span><a href="<?= get_field('why_audit_why_audit_example_url_button'); ?>" class="text-white fs-5 fw-bold"><?= get_field('why_audit_why_audit_example_button'); ?></a></span>                            
                            </button>
                        </div>
                    </div>
                    <div class="first col-4 col-xxl-5 col-xl-5 col-lg-5 col-sm-4">
                        <div class="second">
                            <button class="glow-button">
                                <span><a href="<?= get_field('why_audit_why_audit_packages_url_button'); ?>" class="text-white fs-5 fw-bold"><?= get_field('why_audit_why_audit_packages_button'); ?></a></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-xxl-4 col-xl-4 col-lg-3 col-sm-2">
                <img class="col-6 col-xxl-12 col-xl-5 col-lg-5 col-sm-5 image" src="http://localhost/Codaxia/wp-content/uploads/2024/02/image audit 2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pt-130 audit-information">
    <div class="container">
        <div class="row">
			<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-11">
				<div class="audit-img mb-50">
					<img src="<?= get_field('information_audit_audit_image'); ?>" alt="about">
				</div>
			</div>
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-11">
				<div class="audit-content mb-50">
					<div class="section-title mb-50">
						<h1 class="mb-25"><?= get_field('information_audit_audit_title'); ?></h1>
						<p><?= get_field('information_audit_audit_description'); ?></p>
					</div>
					<div class="accordion pb-55" id="accordionExample">
						<?php $i = 1;
						if (have_rows('information_audit_audit_bloc')) : ?>
							<?php while (have_rows('information_audit_audit_bloc')) : the_row(); ?>
								<div class="single-faq">
									<button class="w-100 text-start <?= ($i != 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?= ($i != 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i ?>">
										<?= get_sub_field('audit_bloc_title'); ?>
									</button>

									<div id="collapse<?= $i ?>" class="collapse <?= ($i != 1) ? '' : 'show'; ?>" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
										<div class="faq-content">
											<?= get_sub_field('audit_bloc_content'); ?>
										</div>
									</div>
								</div>
						<?php $i++;
							endwhile;
						endif; ?>
					</div>
					<div class="first">
						<div class="second">
							<button class="glow-button">
								<span><a href="<?= get_field('audit_button_url'); ?>" class="text-white fs-5 fw-bold"><?= get_field('audit_button'); ?></a></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

<section id="audit" class="pt-50 audit-pricing">
    <div class="container">
        <div class="title text-center pb-90 justify-content-center">
            <h5><?= get_field('audit_pricing_audit_pricing_main_title');?></h5>
            <p><?= get_field('audit_pricing_audit_pricing_main_subtitle');?></p>
            <a href="<?= get_field('audit_pricing_audit_pricing_link_icon_url');?>" class="text-white fs-5 fw-bold"><i class="<?= get_field('audit_pricing_audit_pricing_link_icon');?>"></i></a>
        </div>
        <div class="row justify-content-center">
            <?php if (have_rows('audit_pricing_audit_pricing_bloc')) : ?>
				<?php while (have_rows('audit_pricing_audit_pricing_bloc')) : the_row(); ?>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10 mb-70">
                        <?php if (!empty(get_sub_field('audit_pricing_recommanded'))) : ?>
                            <div class="single-bloc-audit-pricing recommanded h-80">
                                <div class="content padding">
                                    <div class="recommanded">
                                        <p class="text-white"><?= get_sub_field('audit_pricing_recommanded'); ?></p>
                                    </div>
                                    <div class="row icon">
                                        <div>
                                            <i class="lni <?= get_sub_field('audit_pricing_icon'); ?>"></i>
                                        </div>
                                        <div class="col-11 col-sm-12">
                                            <h4><?= get_sub_field('audit_pricing_title'); ?> </h4>
                                            <p class="text-white"><?= get_sub_field('audit_pricing_subtitle'); ?></p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column padding-body">
                                        </br>
                                        <div class="row">
                                            <div class="col space">
                                                <svg class="needle clock" fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-alarmclock" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                                    <g>
                                                        <path class="needle" d="M43.4,34.8h-9.1v-9.3c0-1.2-1-2.3-2.3-2.3c-1.2,0-2.3,1-2.3,2.3v9.3h-0.3c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h0.3v0.3
                                                            c0,1.2,1,2.3,2.3,2.3c1.2,0,2.3-1,2.3-2.3v-0.3h9.1c1.2,0,2.3-1,2.3-2.3S44.6,34.8,43.4,34.8z"/>
                                                        <path class="clock" d="M59.5,19.1c0-5.5-4.4-9.9-9.9-9.9c-2.6,0-5,1-6.8,2.7c-2.7-1.2-5.5-2-8.6-2.2V6.3h2.8c1.2,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
                                                            H26.9c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.8v3.5c-3,0.3-5.9,1-8.6,2.2c-1.8-1.7-4.2-2.7-6.8-2.7c-5.5,0-9.9,4.4-9.9,9.9
                                                            c0,2.7,1.1,5.3,3.1,7.1c-1.2,3-1.9,6.3-1.9,9.7c0,14.5,11.8,26.3,26.3,26.3s26.3-11.8,26.3-26.3c0-3.4-0.7-6.7-1.9-9.7
                                                            C58.4,24.4,59.5,21.8,59.5,19.1z M49.6,13.7c3,0,5.4,2.4,5.4,5.4c0,1-0.3,2-0.8,2.8c-1.9-3-4.3-5.5-7.2-7.5
                                                            C47.8,13.9,48.7,13.7,49.6,13.7z M9,19.1c0-3,2.4-5.4,5.4-5.4c0.9,0,1.8,0.2,2.6,0.7c-2.9,2-5.3,4.6-7.2,7.5C9.3,21,9,20.1,9,19.1z
                                                            M32,57.8c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8s21.8,9.8,21.8,21.8C53.8,48,44,57.8,32,57.8z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="col-4 time">
                                                <p class="fw-bold"><?= get_sub_field('audit_pricing_duration'); ?></p>
                                            </div>
                                        </div>
                                        <div class="separation">
                                            <h1 class="text-white fs-4"><?= get_sub_field('audit_pricing_price'); ?></h1> 
                                            <hr class="separation">
                                            </br>
                                        </div>
                                        <h2 class="text-decoration-underline"> <?= get_sub_field('audit_pricing_bloc_title'); ?></h3>
                                        <?php if (have_rows('audit_pricing_options_bloc')) : ?>
                                            <?php while (have_rows('audit_pricing_options_bloc')) : the_row(); ?>
                                                <ul class="list-unstyled text-start margin-recommanded ml-10">
                                                        <li class="pb-20">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                            <?= get_sub_field('audit_pricing_options'); ?>
                                                            <span class="bubble">
                                                                <i class="lni lni-question-circle text-white margin"></i>
                                                                <div class="bubble-text">
                                                                    <?php if (have_rows('audit_pricing_options_secondary_bloc')) : ?>
                                                                        <?php while (have_rows('audit_pricing_options_secondary_bloc')) : the_row(); ?>
                                                                        <div class="pb-10"><i class="lni lni-checkmark text-white"></i><?= get_sub_field('audit_pricing_options_details'); ?>  </div>
                                                                        <?php endwhile; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </span>
                                                        </li>     
                                                </ul>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="first">
                                            <div class="second">
                                                <button class="glow-button">
                                                    <span><a href="<?= get_field('contact_mail', 'option'); ?>" class="fw-bold text-white fs-6">
                                                    <?= get_sub_field('audit_pricing_button'); ?></a></span>
                                                </button>
                                            </div>
                                        </div>                        
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="single-bloc-audit-pricing h-100">
                                <div class="content">
                                    <div class="row icon">
                                        <div>
                                            <i class="lni <?= get_sub_field('audit_pricing_icon'); ?>"></i>
                                        </div>
                                        <div class="col-11 col-sm-12">
                                            <h4><?= get_sub_field('audit_pricing_title'); ?> </h4>
                                            <p class="text-white"><?= get_sub_field('audit_pricing_subtitle'); ?></p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column padding-body">
                                        </br>
                                        <div class="row">
                                            <div class="col space">
                                                <svg class="needle clock" fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-alarmclock" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                                    <g>
                                                        <path class="needle" d="M43.4,34.8h-9.1v-9.3c0-1.2-1-2.3-2.3-2.3c-1.2,0-2.3,1-2.3,2.3v9.3h-0.3c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h0.3v0.3
                                                            c0,1.2,1,2.3,2.3,2.3c1.2,0,2.3-1,2.3-2.3v-0.3h9.1c1.2,0,2.3-1,2.3-2.3S44.6,34.8,43.4,34.8z"/>
                                                        <path class="clock" d="M59.5,19.1c0-5.5-4.4-9.9-9.9-9.9c-2.6,0-5,1-6.8,2.7c-2.7-1.2-5.5-2-8.6-2.2V6.3h2.8c1.2,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3
                                                            H26.9c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.8v3.5c-3,0.3-5.9,1-8.6,2.2c-1.8-1.7-4.2-2.7-6.8-2.7c-5.5,0-9.9,4.4-9.9,9.9
                                                            c0,2.7,1.1,5.3,3.1,7.1c-1.2,3-1.9,6.3-1.9,9.7c0,14.5,11.8,26.3,26.3,26.3s26.3-11.8,26.3-26.3c0-3.4-0.7-6.7-1.9-9.7
                                                            C58.4,24.4,59.5,21.8,59.5,19.1z M49.6,13.7c3,0,5.4,2.4,5.4,5.4c0,1-0.3,2-0.8,2.8c-1.9-3-4.3-5.5-7.2-7.5
                                                            C47.8,13.9,48.7,13.7,49.6,13.7z M9,19.1c0-3,2.4-5.4,5.4-5.4c0.9,0,1.8,0.2,2.6,0.7c-2.9,2-5.3,4.6-7.2,7.5C9.3,21,9,20.1,9,19.1z
                                                            M32,57.8c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8s21.8,9.8,21.8,21.8C53.8,48,44,57.8,32,57.8z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="col-4 time-bloc">
                                                <p class="fw-bold"><?= get_sub_field('audit_pricing_duration'); ?></p>
                                            </div>
                                        </div>
                                        <div class="separation">
                                            <h1 class="text-white fs-4"><?= get_sub_field('audit_pricing_price'); ?></h1> 
                                            <hr>
                                            </br>
                                        </div>
                                        <h2 class="text-decoration-underline margin-analyse"> <?= get_sub_field('audit_pricing_bloc_title'); ?></h3>
                                        <?php if (have_rows('audit_pricing_options_bloc')) : ?>
                                            <?php while (have_rows('audit_pricing_options_bloc')) : the_row(); ?>
                                                <ul class="list-unstyled text-start margin">
                                                        <li class="pb-20">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                            <?= get_sub_field('audit_pricing_options'); ?>
                                                            <span class="bubble">
                                                                <i class="lni lni-question-circle text-white margin"></i>
                                                                <div class="bubble-text">
                                                                    <?php if (have_rows('audit_pricing_options_secondary_bloc')) : ?>
                                                                        <?php while (have_rows('audit_pricing_options_secondary_bloc')) : the_row(); ?>
                                                                        <div class="pb-10"><i class="lni lni-checkmark text-white"></i><?= get_sub_field('audit_pricing_options_details'); ?>  </div>
                                                                        <?php endwhile; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </span>
                                                        </li>  
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
        </div>
    </div>                
</section>

<section id="audit-example-id" class="pt-80 pb-100 audit-example">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6">
                <h1><?= get_field('example_audit_example_audit_title_1'); ?></h1>
                <h2><?= get_field('example_audit_example_audit_title_2'); ?></h2>
                <p><?= get_field('example_audit_example_audit_text'); ?></p>
            </div>
            <div class="col-xxl-4 col-xl-7 col-lg-6">
            <a href="<?= get_field('example_audit_example_audit_link'); ?>"><img class="col-12 col-xxl-11 col-xl-10 col-lg-12 col-md-12 col-sm-12 image" src="<?= get_field('example_audit_example_audit_image'); ?>" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="audit-type-id" class="pt-100 pb-50 audit-type">
    <div class="container">
    <?php if (have_rows('audit_type')) : ?>
		<?php while (have_rows('audit_type')) : the_row(); ?>
        <div class="row single-bloc-type col-10 col-xxl-10 col-xl-12 col-lg-11 p-4 mb-70 mr-n5">
            <div class="col-11 col-xxl-3 col-xl-3 col-lg-6 mb-10">
                <img class="col-6 col-xxl-3 col-xl-6 col-lg-11 image" src="<?= get_sub_field('audit_type_image'); ?>" alt="">
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-6">
                <h1 class="pb-20"><?= get_sub_field('audit_type_title'); ?></h1>
                <p class="pb-20"><?= get_sub_field('audit_type_description'); ?></p>
            </div>
        </div>
        <?php endwhile;
	endif; ?>
    </div>
</section>


<?php get_contact() ?>
<?php get_footer() ?>