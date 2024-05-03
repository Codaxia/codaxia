<?php
/*
Template Name: Audit
*/
?>
<?php get_header()?>

<section class="pt-120 pb-50 why-audit">
    <div class="container">
        <div class="title text-center">
            <h5 class="fs-3"><?= get_field('why_audit_why_audit_big_title'); ?></h5>
            <p><?= get_field('why_audit_why_audit_subtitle'); ?></p>
            <a href="<?= get_field('why_audit_why_audit_icon_url'); ?>"><i class="<?= get_field('why_audit_why_audit_icon'); ?>"></i></a>
        </div>
        <div class="col-11 col-lg-12 col-xxl-10 row d-flex justify-content-center single-bloc-why bg-white ms-auto me-auto">
            <div class="col-11 col-lg-7 col-xxl-8">
                <h4 class="pt-65 pb-30 text-dark fs-2"><?= get_field('why_audit_why_audit_title'); ?></h4>
                <p><?= get_field('why_audit_why_audit_description'); ?></p>
                <div class="row d-flex justify-content-center align-items-center pt-40">
                    <div class="col-2 col-lg-12"></div>
                    <div class="col-lg-5 col-xxl-2 mb-3 d-flex justify-content-center align-items-center">
                        <?php custom_button(get_field('why_audit_why_audit_example_url_button'), get_field('why_audit_why_audit_example_button'), 'fs-5'); ?>
                    </div>
                    <div class="col-9 col-lg-6 mb-3 d-flex justify-content-center align-items-center">
                        <?php custom_button(get_field('why_audit_why_audit_packages_url_button'), get_field('why_audit_why_audit_packages_button'), 'fs-5'); ?>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xxl-3 d-flex justify-content-center align-items-center pt-20 pb-20">
                <img class="image img-fluid pt-10" src="<?= get_field('why_audit_why_audit_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pt-130 about-section">
    <div class="container">
        <div class="row">
			<div class="col-lg-7 col-xxl-5">
				<div class="about-img mb-50">
					<img class="w-100" src="<?= get_field('information_audit_audit_image'); ?>" alt="about">
				</div>
			</div>
			<div class="col-lg-5 col-xxl-6">
				<div class="about-content mb-50">
					<div class="section-title mb-50">
						<h1 class="mb-25"><?= get_field('information_audit_audit_title'); ?></h1>
						<p><?= get_field('information_audit_audit_description'); ?></p>
					</div>
					<div class="accordion pb-55" id="accordionExample">
						<?php $i = 1;
						if (have_rows('information_audit_audit_bloc')) : ?>
							<?php while (have_rows('information_audit_audit_bloc')) : the_row(); ?>
								<div class="single-faq bg-white">
									<button class="w-100 text-start fs-5 <?= ($i != 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?= ($i != 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i ?>">
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
                    <?php custom_button(get_field('information_audit_audit_button_url'), get_field('information_audit_audit_button'), 'fs-5'); ?>
				</div>
			</div>
		</div>
    </div>
</section>

<section id="audit" class="pt-50 audit-pricing">
    <div class="container">
        <div class="title text-center pb-90 justify-content-center">
            <h5 class="fs-3"><?= get_field('audit_pricing_audit_pricing_main_title');?></h5>
            <p><?= get_field('audit_pricing_audit_pricing_main_subtitle');?></p>
            <a href="<?= get_field('audit_pricing_audit_pricing_link_icon_url');?>" class="text-white fs-5 fw-bold"><i class="<?= get_field('audit_pricing_audit_pricing_link_icon');?>"></i></a>
        </div>
        <div class="row justify-content-around">
            <?php if (have_rows('audit_pricing_audit_pricing_bloc')) : ?>
				<?php while (have_rows('audit_pricing_audit_pricing_bloc')) : the_row(); ?>
                    <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4 mb-70 p-4">
                        <?php if (!empty(get_sub_field('audit_pricing_recommanded'))) : ?>
                            <div class="single-bloc-audit-pricing text-center recommanded h-80">
                                <div class="content d-flex flex-column h-100 align-items-center padding">
                                    <div class="recommanded ms-auto">
                                        <p class="text-white"><?= get_sub_field('audit_pricing_recommanded'); ?></p>
                                    </div>
                                    <div class="row icon">
                                        <div>
                                            <i class="fs-4 rounded-circle d-flex justify-content-center align-items-center lni <?= get_sub_field('audit_pricing_icon'); ?>"></i>
                                        </div>
                                        <div>
                                            <h4 class="fs-4"><?= get_sub_field('audit_pricing_title'); ?> </h4>
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
                                        <h2 class="text-decoration-underline margin-analyse fs-6"> <?= get_sub_field('audit_pricing_bloc_title'); ?></h2>
                                        <?php if (have_rows('audit_pricing_options_bloc')) : ?>
                                            <?php while (have_rows('audit_pricing_options_bloc')) : the_row(); ?>
                                                <ul class="list-unstyled text-start margin">
                                                        <li class="pb-20">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                            <?= get_sub_field('audit_pricing_options'); ?>
                                                            <span class="bubble">
                                                                <i class="lni lni-question-circle text-white margin"></i>
                                                                <div class="bubble-text">
                                                                    <div class="triangle"></div>
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
                                        <?php custom_button(home_url('/' . get_field('contact_link', 'option')), get_sub_field('audit_pricing_button'), 'fs-6'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="single-bloc-audit-pricing text-center h-100">
                                <div class="content d-flex flex-column h-100 align-items-center">
                                    <div class="row icon">
                                        <div>
                                            <i class="fs-4 rounded-circle d-flex justify-content-center align-items-center lni <?= get_sub_field('audit_pricing_icon'); ?>"></i>
                                        </div>
                                        <div>
                                            <h4 class="fs-4"><?= get_sub_field('audit_pricing_title'); ?> </h4>
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
                                        <h2 class="text-decoration-underline margin-analyse fs-6"> <?= get_sub_field('audit_pricing_bloc_title'); ?></h2>
                                        <?php if (have_rows('audit_pricing_options_bloc')) : ?>
                                            <?php while (have_rows('audit_pricing_options_bloc')) : the_row(); ?>
                                                <ul class="list-unstyled text-start margin">
                                                        <li class="pb-20">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                            <?= get_sub_field('audit_pricing_options'); ?>
                                                            <span class="bubble">
                                                                <i class="lni lni-question-circle text-white margin"></i>
                                                                <div class="bubble-text">
                                                                    <div class="triangle"></div>
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
                                        <?php custom_button(home_url('/' . get_field('contact_link', 'option')), get_sub_field('audit_pricing_button'), 'fs-6'); ?>
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

<section class="pt-80 pb-100 audit-example">
    <div class="container">
        <div class="row">
            <div class="row col-lg-7 col-xxl-9 mb-30">
                <div>
                    <h1 class="fs-2"><?= get_field('example_audit_example_audit_title_1'); ?></h1>
                    <h2 class="fs-3"><?= get_field('example_audit_example_audit_title_2'); ?></h2>
                    <p class="text-white"><?= get_field('example_audit_example_audit_text'); ?></p>
                </div>
                <div class="col-lg-9 col-xl-9"></div>
                <div class="col-lg-1 col-xl-1 first pt-20 d-flex justify-content-center">
                    <?php custom_button(get_field('example_audit_example_audit_button_url'), get_field('example_audit_example_audit_button'), 'fs-5'); ?>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-3 d-flex justify-content-center align-items-center">
            <a href="<?= get_field('example_audit_example_audit_link'); ?>"><img class="col-12 image" src="<?= get_field('example_audit_example_audit_image'); ?>" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="audit-type-id" class="pt-100 pb-50 description">
    <div class="container">
    <?php if (have_rows('audit_type')) : ?>
		<?php while (have_rows('audit_type')) : the_row(); ?>
        <div class="row single-bloc-description bg-white ms-auto me-auto col-lg-11 col-xl-12 col-xxl-10 p-3 mb-70">
            <div class="col-11 col-lg-6 col-xl-3 mb-10">
                <img class="image img-fluid pt-10" src="<?= get_sub_field('audit_type_image'); ?>" alt="">
            </div>
            <div class="col-lg-6 col-xl-9">
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