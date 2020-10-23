<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Colby_V3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	


	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			dcv3_post_thumbnail();
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			// dcv3_post_thumbnail();
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
/*
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				dcv3_posted_on();
				dcv3_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; */?>
	</header><!-- .entry-header -->




	<?php /*
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			dcv3_posted_on();
			dcv3_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	*/ ?>

	<?php // dcv3_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php dcv3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
