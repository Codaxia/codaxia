<?php

get_header();
?>

<section id="404" class="hero-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="hero-content">
				<h1 class="wow fadeInUp" data-wow-delay=".4s">
					404.
				</h1>
				<span class="wow fadeInLeft" data-wow-delay=".2s">Sorry this page does not exist</span> <br>
				<a href="<?php echo (get_home_url()) ?>" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Back to home page</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
