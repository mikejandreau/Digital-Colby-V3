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
					<p>Digital Colby presents the intellectual, creative and scholarly culture of the Colby College Community.</p>
				</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="footer-block">
					<h4>Browse</h4>
					<ul>
					<li><a href="#">Link to Something</a></li>
					<li><a href="#">Link to Something</a></li>
					<li><a href="#">Link to Something</a></li>
					<li><a href="#">Link to Something</a></li>
					<li><a href="#">Link to Something</a></li>
					</ul>
				</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="footer-block">
					<h4>Visit</h4>
					<p><strong>Colby College</strong> <br>
					Mayflower Hill Drive <br>
					Waterville, ME 04901</p>
					<a href="tel:207-859-4000"><i class="fas fa-phone"></i> 207-859-4000</a> <br>
					<a href="https://www.colby.edu/contact-colby-college/"><i class="fas fa-envelope"></i> Contact us</a>
				</div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="footer-block">
					<h4>Connect</h4>
					<div class="social-block">
						<a id="twitter" title="Twitter" href="http://www.twitter.com/colbycollege"><i class="fab fa-twitter fa-2x"></i></a>
						<a id="facebook" title="Facebook" href="http://www.facebook.com/colbycollege"><i class="fab fa-facebook-f fa-2x"></i></a>
						<a id="youtube" title="YouTube" href="http://www.youtube.com/colbycollege"><i class="fab fa-youtube fa-2x"></i></a>
						<a id="vimeo" title="Vimeo" href="http://vimeo.com/colbycollege"><i class="fab fa-vimeo-v fa-2x"></i></a>
						<a id="rss" title="RSS" href="/news/?feed=rss"><i class="fas fa-rss fa-2x"></i></a>
					</div>
					</div>
				</div>








			</div>

			<div class="copyright">&copy; Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page .site -->

<a class="scrollup js-scroll-trigger" id="scrollUpButton" href="#page-top"><svg class="scrollup-chevron" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg><span class="sr-only">to top</span></a>

<?php wp_footer(); ?>

</body>
</html>
