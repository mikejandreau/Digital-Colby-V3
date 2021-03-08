<?php
/**
 * Template Name: Unique Collections Page Template
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

					
					<?php 
			        // the query
			        $the_query = new WP_Query(array(
			            'category_name' => 'unique-collections',
			            'post_status' => 'publish',
			            'posts_per_page' => -1,
			        ));
			        ?>

			        <?php if ($the_query->have_posts()) : ?>
			            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<header class="entry-header">
									<?php
										the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									?>
								</header><!-- .entry-header -->
								
								<div class="entry-content">
									<?php
									the_content(
										sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dcv3' ),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											wp_kses_post( get_the_title() )
										)
									);

									wp_link_pages(
										array(
											'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dcv3' ),
											'after'  => '</div>',
										)
									);
									?>
								</div><!-- .entry-content -->

								<footer class="entry-footer">
									<?php dcv3_entry_footer(); ?>
								</footer><!-- .entry-footer -->
							</article>

			            <?php endwhile; ?>
			            <?php wp_reset_postdata(); ?>

			        <?php else : ?>
			            <p><?php __('No News'); ?></p>
			        <?php endif; ?>


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
