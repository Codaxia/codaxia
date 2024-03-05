<?php
/*
Template Name: Pricing
*/
?>
<?php get_header()?>

<section id="pricing-plans" class="pt-120 pb-100 text-light">
	<div class="container">
		<!-- Title and Description -->
		<div class="row ">
			<div class="col-lg-12">
				<div class="section-title text-center mb-60">
					<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Pricing Plans For Everyone</h1>
					<p class="wow fadeInUp" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		<!-- Pricing Toggle -->
		<div class="row">
			<div class="col-12 mb-4">
				<div class="pricing-switch d-flex align-items-center">
					<label class="form-check-label me-2" for="starter-toggle">Monthly</label>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="starter-toggle">
						<label class="form-check-label" for="starter-toggle"></label>
					</div>
					<label class="form-check-label ms-2" for="starter-toggle">Yearly (25% OFF)</label>
				</div>
			</div>
		</div>
		<!-- Pricing Cards -->
		<div class="row">
			<!-- Starter Plan -->
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card bg-dark text-white rounded h-100">
					<div class="card-header">
						<h4 class="text-primary">Single page website</h4>
						<p>Great for personal websites and projects</p>
					</div>
					<div class="card-body d-flex flex-column justify-content-between">
						<h3 class="text-success">2000<span>cad +tx</span></h3>
						<ul class="list-unstyled text-start">
							<li><i class="lni lni-checkmark-circle"></i> 1 Page</li>
							<li><i class="lni lni-checkmark-circle"></i> Mobile Ready Design</li>
							<li><i class="lni lni-checkmark-circle"></i> 3 to 6 sections * </li>
							<li><i class="lni lni-checkmark-circle"></i> up to 2 features* </li>
							<li><i class="lni lni-checkmark-circle"></i> 1 Year FREE Hosting!</li>
						</ul>
					</div>
					<div class="card-footer bg-transparent">
						<a href="#" class="btn btn-success btn-block">BUY NOW</a>
					</div>
				</div>
			</div>
			<!-- Premium Plan -->
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card bg-dark text-white rounded h-100">
					<div class="card-header">
						<h4 class="text-primary">Company website</h4>
						<p>For small businesses.</p>
					</div>
					<div class="card-body d-flex flex-column justify-content-between">
						<h3 class="text-success">3000<span>cad + tx</span></h3>
						<ul class="list-unstyled text-start">
							<li><i class="lni lni-checkmark-circle"></i> 3 Page</li>
							<li><i class="lni lni-checkmark-circle"></i> Mobile Ready Design</li>
							<li><i class="lni lni-checkmark-circle"></i> up to 4 features* </li>
							<li><i class="lni lni-checkmark-circle"></i> 1 Year FREE Hosting!</li>
						</ul>
					</div>
					<div class="card-footer bg-transparent">
						<a href="#" class="btn btn-success btn-block">BUY NOW</a>
					</div>
				</div>
			</div>
			<!-- Ultimate Plan -->
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card bg-dark text-white rounded h-100">
					<div class="card-header">
						<h4 class="text-primary">Ultimate</h4>
						<p>For large scale enterprises.</p>
					</div>
					<div class="card-body d-flex flex-column justify-content-between">
						<h3 class="text-success">4500<span>cad + tx</span></h3>
						<ul class="list-unstyled text-start">
							<li><i class="lni lni-checkmark-circle"></i> 5 Page</li>
							<li><i class="lni lni-checkmark-circle"></i> Mobile Ready Design</li>
							<li><i class="lni lni-checkmark-circle"></i> up to 6 features* </li>
							<li><i class="lni lni-checkmark-circle"></i> 1 Year FREE Hosting!</li>
						</ul>
					</div>
					<div class="card-footer bg-transparent">
						<a href="#" class="btn btn-success btn-block">BUY NOW</a>
					</div>
				</div>
			</div>
			<!-- Custom Plan -->
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card bg-dark text-white rounded h-100">
					<div class="card-header">
						<h4 class="text-primary">Custom website</h4>
						<p>For large scale enterprises.</p>
					</div>
					<div class="card-body d-flex flex-column justify-content-between">
						<h3 class="text-success">4500<span>cad + tx</span></h3>
						<ul class="list-unstyled text-start">
							<li><i class="lni lni-checkmark-circle"></i> unlimited Page</li>
							<li><i class="lni lni-checkmark-circle"></i> Mobile Ready Design</li>
							<li><i class="lni lni-checkmark-circle"></i> Custom features </li>
						</ul>
					</div>
					<div class="card-footer bg-transparent">
						<a href="#" class="btn btn-success btn-block">BUY NOW</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_contact() ?>
<?php get_footer() ?>