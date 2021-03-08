<?php
/**
 * Template Name: Full Width Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Colby_V3
 */

get_header();
?>

<div class="section mt-4">
	<div class="container">
		<div class="row">

			<div class="col-sm-12">
				<main id="primary" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</main><!-- #main -->
			</div>
			
		</div>
	</div>
</div>

<?php
get_footer();
