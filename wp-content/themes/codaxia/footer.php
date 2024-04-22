    <!-- ========================= footer start ========================= -->
    <footer class="footer">
    	<div class="container">
    		<div class="widget-wrapper">
    			<div class="row">
    				<div class="col-xl-3 col-md-6">
    					<div class="footer-widget">
    						<div class="logo mb-35">
    							<a href="index.html"> <img src="<?= the_field('logo', 'option'); ?>" alt=""> </a>
    						</div>
    						<p class="desc mb-35"><?= the_field('footer_description', 'option'); ?></p>
    						<ul class="socials">
    							<li>
    								<a href="https://www.facebook.com/Codaxia-100709959191352"> <i class="lni lni-facebook-filled"></i> </a>
    							</li>
    							<li>
    								<a href="https://www.linkedin.com/company/81719620"> <i class="lni lni-linkedin-original"></i> </a>
    							</li>
    							<li>
    								<a href="https://www.youtube.com/@codaxia5162"> <i class="lni lni lni-youtube"></i> </a>
    							</li>
    						</ul>
    					</div>
    				</div>

    				<div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
    					<div class="footer-widget">
    						<h3>Link</h3>
    						<ul class="links">
							<?php wp_nav_menu([
                    'container' => false ,
                    'menu_class' => 'navbar-nav ms-auto',
                    'walker' => new Custom_Walker_footer_Menu()]);
                    ?>
    						</ul>
    					</div>
    				</div>
    				<div class="col-xl-3 col-md-6">
    					<div class="footer-widget">
    						<h3>Contact</h3>
    						<ul>
    							<li>+1 514 561 1299</li>
    							<li>xdelisle@codaxia.com</li>
    							<li>Montreal</li>
    						</ul>
    						<div class="contact-map-form" style="width: 100%; height: 150px; margin-top: 25px;">
    							<div class="gmap-canvas">
    								<iframe title="localization of the company in google map" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11181.844318091675!2d-73.566081!3d45.5209263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bd7ccaf2125%3A0x295597803e1369bc!2sCodaxia!5e0!3m2!1sfr!2sca!4v1709612719491!5m2!1sfr!2sca" style="width: 100%;"></iframe>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="copy-right">
    			<p>CODAXIA 2023 Copyright. All Rights Reserved.</p>
    		</div>
    	</div>
    </footer>
    <!-- ========================= footer end ========================= -->

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FD49VBFJS0"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-FD49VBFJS0');
	</script>

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
    	<i class="lni lni-chevron-up"></i>
    </a>
    <?php wp_footer() ?>
    </body>

    </html>