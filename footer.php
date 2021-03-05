<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V3
 */

?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-4 col-lg-3">
					<div class="footer-block">
						<h4>Digital Colby</h4>
						<?php if ($footerTagline = get_option('dcv3_options')['dcv3-footer-info']) { 
							echo '<p>' . $footerTagline . '</p>';
						} else { /* do nothing */ } ?>

					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="footer-block">
						<h4>Browse</h4>
						<?php // footer menu
							wp_nav_menu( 
								array( 
								'theme_location' => 'menu-2', 
								'container'       => 'div',
								'container_id'    => 'footer-menu-wrap',
								'container_class' => 'footer-menu-wrap',
								'menu_id'         => 'footer-menu',
								'menu_class'      => 'footer-menu-ul' 
								)
							); 
						?>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="footer-block">
						<h4>Visit</h4>
						<p>
							<?php if ($footerAddressName = get_option('dcv3_options')['dcv3-footer-address-name']) { 
								echo '<span><strong>' . $footerAddressName. '</strong></span><br>';
							} else { /* do nothing */ } ?>

							<?php if ($footerStreetAddress = get_option('dcv3_options')['dcv3-footer-street-address']) { 
								echo '<span>' . $footerStreetAddress. '</span><br>';
							} else { /* do nothing */ } ?>

							<?php if ($footerPoBox = get_option('dcv3_options')['dcv3-footer-po-box']) { 
								echo '<span>' . $footerPoBox. '</span><br>';
							} else { /* do nothing */ } ?>

							<?php if ($footerCityStateZip = get_option('dcv3_options')['dcv3-footer-city-state-zip']) { 
								echo '<span>' . $footerCityStateZip. '</span><br>';
							} else { /* do nothing */ } ?>
						</p>

						<?php if ($footerPhone = get_option('dcv3_options')['dcv3-footer-phone']) { 
							echo '<span><a href="tel:+1-' . $footerPhone . '"><i class="fas fa-phone"></i> ' . $footerPhone . '</a></span><br>';
						} else { /* do nothing */ } ?>

						<?php if ($footerFax = get_option('dcv3_options')['dcv3-footer-fax']) { 
							echo '<span><a href="tel:+1-' . $footerFax . '"><i class="fas fa-fax"></i> ' . $footerFax . '</a></span><br>';
						} else { /* do nothing */ } ?>

						<?php if ($footerEmail = get_option('dcv3_options')['dcv3-footer-email']) { 
							echo '<span><a href="mailto:' . $footerEmail . '"><i class="fas fa-envelope"></i> ' . $footerEmail . '</a><br></span>';
						} else { /* do nothing */ } ?>
					</div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="footer-block">
						<h4>Connect</h4>
						<div class="social-block">
							<?php  // These fields are controlled using the theme options located in Appearance -> Theme Options

							if ($instagram = get_option('dcv3_options')['dcv3-social-instagram']) { 
								echo '<a id="instagram" class="footer-social-icon" title="Instagram" target="_blank" href="' . $instagram . '"><i class="fab fa-instagram fa-2x"></i></a>';
							} else { /* do nothing */ }
							
							if ($twitter = get_option('dcv3_options')['dcv3-social-twitter']) { 
								echo '<a id="twitter" class="footer-social-icon" title="Twitter" target="_blank" href="' . $twitter . '"><i class="fab fa-twitter fa-2x"></i></a>';
							} else { /* do nothing */ }

							if ($facebook = get_option('dcv3_options')['dcv3-social-facebook']) { 
								echo '<a id="facebook" class="footer-social-icon" title="Facebook" target="_blank" href="' . $facebook . '"><i class="fab fa-facebook-f fa-2x"></i></a>';
							} else { /* do nothing */ }

							if ($youtube = get_option('dcv3_options')['dcv3-social-youtube']) { 
								echo '<a id="youtube" class="footer-social-icon" title="YouTube" target="_blank" href="' . $youtube . '"><i class="fab fa-youtube fa-2x"></i></a>';
							} else { /* do nothing */ }

							if ($vimeo = get_option('dcv3_options')['dcv3-social-vimeo']) { 
								echo '<a id="vimeo" class="footer-social-icon" title="Vimeo" target="_blank" href="' . $vimeo . '"><i class="fab fa-vimeo-v fa-2x"></i></a>';
							} else { /* do nothing */ }

							if ($rssfeed = get_option('dcv3_options')['dcv3-social-rss']) { 
								echo '<a id="rss" class="footer-social-icon" title="RSS" target="_blank" href="' . $rssfeed . '"><i class="fas fa-rss fa-2x"></i></a>';
							} else { /* do nothing */ }
							?>
						</div>
					</div>
				</div>

			</div>

			<div class="copyright">
				&copy; Copyright <?php echo date("Y"); ?> Colby College Libraries
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page .site -->

<a class="scrollup js-scroll-trigger" id="scrollUpButton" href="#page-top"><svg class="scrollup-chevron" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg><span class="sr-only">to top</span></a>

<?php wp_footer(); ?>

</body>
</html>
