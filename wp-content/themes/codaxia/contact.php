<!-- ========================= cta-section start ========================= -->
<section id="contact" class="cta-section img-bg pt-55 pb-10">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-7">
				<div class="section-title mb-50">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s"><?= get_field('contact_title', 'option'); ?></h1>
					<p class="wow fadeInUp" data-wow-delay=".4s"><?= get_field('contact_description', 'option'); ?></p>
				</div>
			</div>
			<div class="col-1 col-xl-6 col-lg-5">
				<div class="cta-btn text-lg-end mb-50 button-margin">
					<?php custom_button(home_url('/' . get_field('contact_link', 'option')), get_field('contact_button', 'option'), 'fs-4'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================= cta-section end ========================= -->