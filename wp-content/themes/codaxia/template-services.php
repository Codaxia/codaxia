<?php
/*
Template Name: Services
*/
?>
<?php get_header()?>

<section class="pt-150 pb-40 black">
    <h1 class="fs-3 text-center blue"><?= get_field('main_title_title'); ?></h1>
</section>

<section class="pt-40 pb-30 how-does-it-work">
    <div class="text-white text-center">
        <h1 class="fs-3"><span class="red"> <?= get_field('how_does_it_work_title_first_part'); ?> </span><?= get_field('how_does_it_work_title_second_part'); ?></h1>
        <p class="fs-4 pt-10"> <?= get_field('how_does_it_work_subtitle'); ?> </p>
        <a href="<?= get_field('how_does_it_work_icon_url'); ?>"><i class="pt-10 fs-3 text-white lni <?= get_field('how_does_it_work_icon'); ?>"></i></a>
    </div>
</section>

<section class="pt-40 hour-bank">
    <div class="container">
        <p class="text-center fs-4 text-white pb-70"><?= get_field('hour_bank_main_title'); ?></p>
        <div class="row justify-content-around">
                        <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-3 mb-70 p-4">
                            <div class="single-bloc-audit-pricing text-center recommanded h-80">
                                <div class="content d-flex flex-column h-100 align-items-center padding">
                                    <div class="row icon">
                                        <div>
                                            <i class="fs-4 rounded-circle d-flex justify-content-center align-items-center lni <?= get_field('hour_bank_icon'); ?>"></i>
                                        </div>
                                        <div>
                                            <h4><?= get_field('hour_bank_title'); ?></h4>
                                            <p class="text-white"><?= get_field('hour_bank_subtitle'); ?></p>
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
                                                <p class="fw-bold"><?= get_field('hour_bank_duration'); ?></p>
                                            </div>
                                        </div>
                                        <div class="separation">
                                            <h1 class="text-white fs-4"><?= get_field('hour_bank_price'); ?></h1>
                                            <hr class="separation">
                                            </br>
                                        </div>
                                        <?php if (have_rows('hour_bank_options_bloc')) : ?>
                                                <?php while (have_rows('hour_bank_options_bloc')) : the_row(); ?>
                                                    <ul class="list-unstyled text-start margin">
                                                        <li class="pb-20"><i class="lni lni-checkmark-circle"></i><?= get_sub_field('options')?></li>  
                                                    </ul>           
                                                <?php endwhile; ?>
                                         <?php endif; ?>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <?php custom_button(home_url('/' . get_field('contact_link', 'option')), get_field('hour_bank_button'), 'fs-6'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</section>

<section id="description" class="pt-100 pb-50 description grey">
    <div class="container">
    <?php if (have_rows('service_description')) : ?>
		<?php while (have_rows('service_description')) : the_row(); ?>
        <div class="row single-bloc-description bg-white ms-auto me-auto col-lg-11 col-xl-12 col-xxl-10 p-3 mb-70">
            <div class="col-11 col-lg-6 col-xl-3 mb-10">
                <img class="image img-fluid pt-10" src="<?= get_sub_field('image'); ?>" alt="">
            </div>
            <div class="col-lg-6 col-xl-9">
                <h1 class="pb-20 fs-2"><?= get_sub_field('title'); ?></h1>
                <p class="pb-20"><?= get_sub_field('description'); ?></p>
            </div>
        </div>
        <?php endwhile;
	endif; ?>
    </div>
</section>

<!-- Process section -->
<section class="pt-90 pb-100 text-light website-process">
    <div class="container">
        <div class="col">
            <div class="header section-title mb-60 primary-title">
                <h1 class="mb-20 wow fadeInUp fs-2 text-center" data-wow-delay=".3s">HOW DOES IT WORK ?</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-0 d-flex justify-content-center pt-60">
            <div class="col-md-4 col-lg-2">
                <div class="icon rounded-circle mx-auto"><i class="d-flex justify-content-center align-items-center lni lni-bulb"></i></div>
                <div class="bloc-light-blue left-border d-none d-lg-block"></div>
                <div>
                    <h1 class="mx-auto text-center">DEFINE YOUR NEEDS</h1>
                    <div class="bloc-small mx-auto"></div>
                    <p class="text-center fs-6">We are going to ask you different questions during a call to target what are the needs and to have an estimate of the work to do to create the contract.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="icon rounded-circle mx-auto"><i class="d-flex justify-content-center align-items-center lni lni-magnifier"></i></div>
                <div class="bloc-dark-blue d-none d-lg-block"></div>
                <div>
                    <h1 class="mx-auto text-center">AUDIT</h1>
                    <div class="bloc-small mx-auto"></div>
                    <p class="text-center fs-6">Depending on your needs we will start with an audit for a clearer view of the situation, or if its just a quick fix or small feature we will start directly!</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="icon rounded-circle mx-auto"><i class="d-flex justify-content-center align-items-center lni lni-control-panel"></i></div>
                <div class="bloc-light-blue d-none d-lg-block"></div>
                <div>
                    <h1 class="mx-auto text-center">ORGANIZATION</h1>
                    <div class="bloc-small mx-auto"></div>
                    <p class="text-center fs-6">Once the tasks are define we create them all with you in our management software for quotation (ClickUp) with the team, with time and due date.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="icon rounded-circle mx-auto"><i class="d-flex justify-content-center align-items-center lni lni-cog"></i></div>
                <div class="bloc-dark-blue d-none d-lg-block"></div>
                <div>
                    <h1 class="mx-auto text-center">PROGRAMMING</h1>
                    <div class="bloc-small mx-auto"></div>
                    <p class="text-center fs-6">Once the quotation is approved and the hour bank paid, we start to code. We code in a separate environment for you to follow the advancement in real time.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="icon rounded-circle mx-auto"><i class="d-flex justify-content-center align-items-center lni lni-rocket"></i></div>
                <div class="bloc-light-blue right-border d-none d-lg-block"></div>
                <div>
                    <h1 class="mx-auto text-center">RELEASE</h1>
                    <div class="bloc-small mx-auto"></div>
                    <p class="text-center fs-6">After your validation, we release the adjustments or functionalities on your platform. We stay with you within 30 days* after going live to make sure everything works as expected.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_contact() ?>
<?php get_footer() ?>