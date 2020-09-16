<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Digital_Colby_V3
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php /*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dcv3' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dcv3' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. */
		?>






<?php
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', get_post_type() );
	// the_post_navigation(); // default wp post nav
?>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	endwhile; // End of the loop.
?>

<?php
if(get_field('portfolio_video'))
	{ echo '<div class="video-container">' . get_field('portfolio_video') . '</div>'; }
?>





	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


