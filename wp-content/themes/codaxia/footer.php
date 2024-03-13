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
    						<div class="contact-map" style="width: 100%; height: 150px; margin-top: 25px;">
    							<div class="gmap-canvas">
    								<iframe id="gmap-canvas" src="https://maps.google.com/maps?q=Montreal&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="width: 100%;"></iframe>
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

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
    	<i class="lni lni-chevron-up"></i>
    </a>
    <?php wp_footer() ?>
    </body>

    </html>