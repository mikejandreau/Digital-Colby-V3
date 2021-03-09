<?php
/**
 * The template for displaying archive pages
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

			<div class="col-sm-8">
				<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php /*
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			*/ ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// the_posts_navigation();
			dcv3_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

				</main><!-- #main -->
			</div>

			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</div>

<?php
get_footer();

