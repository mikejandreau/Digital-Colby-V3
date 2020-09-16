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

	<footer id="colophon" class="site-footer py-4">
		<div class="container">
			&copy; Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page .site -->

<a class="scrollup js-scroll-trigger" id="scrollUpButton" href="#page-top"><svg class="scrollup-chevron" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg><span class="sr-only">to top</span></a>

<?php wp_footer(); ?>

</body>
</html>
