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


<div class="container">
	<div class="row">
		<div class="col-sm-8">
			

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dcv3' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dcv3' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );



	/*
	* Custom post navigation (optional)
	*/



	echo '<div class="post-navigation"><div class="row">';
	$prevPost = get_previous_post(true);
	$prevThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $prevPost->ID ), 'single-post-thumbnail' );
	if($prevPost) {
		$args = array(
			'posts_per_page' => 1,
			'include' => $prevPost->ID
		);
		$prevPost = get_posts($args);
		foreach ($prevPost as $post) {
			setup_postdata($post);
		?>
			<div class="col-sm-6">
				<h5>Previous Post:</h5>
				<img src="<?php echo $prevThumbnail[0]; ?>">
				<a class="previous" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		<?php
			wp_reset_postdata();
		} //end foreach
	} // end if

	$nextPost = get_next_post(true);
	$nextThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $nextPost->ID ), 'single-post-thumbnail' );
	if($nextPost) {
		$args = array(
			'posts_per_page' => 1,
			'include' => $nextPost->ID
		);
		$nextPost = get_posts($args);
		foreach ($nextPost as $post) {
			setup_postdata($post);
		?>
			<div class="col-sm-6">
				<h5>Next Post:</h5>
				<img src="<?php echo $nextThumbnail[0]; ?>">
				<a class="next" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		<?php
			wp_reset_postdata();
		} //end foreach
	} // end if
	echo '</div></div>';
	wp_reset_query(); 






	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
		$category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 4, // Number of related posts that will be shown.
			'caller_get_posts'=>1
		);
		$tidepool_query = new wp_query( $args );
		if( $tidepool_query->have_posts() ) {
			echo '<div id="related_posts" class="related-posts"><h3>Related Posts</h3><div class="row">';
			while( $tidepool_query->have_posts() ) {
				$tidepool_query->the_post();?>
				<div class="col-sm-6 mb-4">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>




				<a class="next" href="<?php the_permalink(); ?>"><img src="<?php echo $thumb['0'];?>"></a>
				<a class="next" href="<?php the_permalink(); ?>">Related Post: <?php the_title(); ?></a>



				</div>
			<?php }
			echo '</div></div>';
		}
	}
	$post = $orig_post;
	wp_reset_query(); 






			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


		</div>
		<div class="col-sm-4">
			
<?php get_sidebar(); ?>

		</div>
	</div>
</div>






<?php

get_footer();
