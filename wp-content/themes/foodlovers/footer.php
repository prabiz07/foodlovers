<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foodlovers
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="footer-top no-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6">
						<div class="site-branding">
							<a href= "<?php echo site_url(); ?>">
								<img src="<?php echo get_template_directory_uri();?>/apps/img/logo.png" alt="">	
							</a>
						</div>
					</div>
					<div class="col-6">
						<ul class="social-media">
							<li class="sicon facebook"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="sicon twitter"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="sicon insta"><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<div class="updates">
							<h3 class="footer-title">Sign up for updates</h3>
							<p>Stay up-to-date on our promotions, discounts, sales, special offers and many more.</p>
							<form class="default-form">
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
							</form>
						</div>
					</div>
					<div class="col-4">
						<div class="sitemap">
							<h3 class="footer-title">Sitemap</h3>
							<nav id="site-navigation" class="footer-navigation">
								<?php 
									wp_nav_menu(array(
										'theme_location'    => 'footer',
										'container'         => false,
										'menu_class'        => 'footer-menu',
									));
								?>
							</nav>
						</div>
					</div>
					<div class="col-4">
						<div class="contacts">
							<h3 class="footer-title">Contact us</h3>
							<ul class="contact-detail">
								<li class="call">
									<a href="tel:88000000000">8 (800) 000 00 00</a>
								</li>
								<li class="time">
									Monday-Friday: 9:00 am - 6:00 pm <br>
									Saturday: 9:00 am - 4:00 pm
								</li>
								<li class="mail">
									<a href="mailto:hello@foodlovers.com">hello@foodlovers.com</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="wrapper">© 2020 Foodlovers - Theme by <a href="http://prabizshakya.com.np/" target="_blank">Prabiz<a></div>
					</div>
				</div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
