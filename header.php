<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class('body'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'dcv3' ); ?></a>





<div class="navbar-wrap fixed-top">
  <?php /* if alert box is not empty and it's the homepage, show the alert */ ?>
  <?php if (($footerTagline = get_option('dcv3_options')['dcv3-header-alert']) && (is_front_page())) { 
    echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">' . $footerTagline . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>  ';
  } else { /* do nothing */ } ?>



  

  <nav class="navbar navbar-expand-lg navbar-light bg-white" id="mainNav">

    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colby-libraries.svg" />
    </a>

    <?php /*
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    */ ?>

    <button class="btn btn-link ml-auto order-lg-last search-toggler" id="navbarSearchToggler" type="button" aria-label="Toggle search"><i class="fa fa-lg fa-search"></i></button>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <?php
    wp_nav_menu([
      'menu'            => 'top',
      'theme_location'  => 'menu-1',
      'container'       => 'div',
      'container_id'    => 'navbarResponsive',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => 'primary-menu',
      'menu_class'      => 'navbar-nav ml-auto',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
    ?>
  </nav>

  <div class="nav-search bg-white" id="navbarSearch">
    <div class="nav-search-inner">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <form role="search" method="get" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
              <input name="s" type="text" class="form-control" placeholder="Search this site">
              <span class="input-group-btn">
                <button type="submit" value="Search" class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
              </span>
            </div>
          </form>
          <button id="navbarSearchClose" class="btn btn-primary">Close</button>
        </div>
      </div>
    </div>
  </div>

</div><?php /* /navbar-wrap */ ?>






<div class="site-content">
  
  <header class="masthead" 
    <?php if ( is_front_page() ) : ?>
      <?php if(get_field('homepage_banner_image')) { echo 'style="background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.6)),url(' . get_field('homepage_banner_image') . ');"'; } ?>

    <?php elseif ( is_home() ): ?>
      <?php 
        $featuredImagePostsPage = get_the_post_thumbnail_url( get_option( 'page_for_posts' ), 'large' );
        if  ( ! empty( $featuredImagePostsPage ) ) {
          echo 'style="background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.6)),url(' . $featuredImagePostsPage . ');"';
        }
      ?>

    <?php elseif ( has_post_thumbnail() ): ?>
      <?php 
        $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); 
        if  ( ! empty( $featuredImage ) ) {
          echo 'style="background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.6)),url(' . $featuredImage[0] . ');"';
        }
      ?>

    <?php else : ?>

    <?php endif; ?>
  >
  
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-sm-12 align-self-center">

          <?php if ( is_front_page() ) : ?>

                <?php if(get_field('homepage_banner_title'))
                  { echo '<h1>' . get_field('homepage_banner_title') . '</h1>'; } ?>

                <div class="lead">
                  <?php
                  while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                  endwhile; 
                  ?>
                </div>

          <?php else : ?>

                <?php if ( is_single() ) : ?>
                  <?php the_title( '<h1 class="entry-title"><span class="sr-only">Article Title: </span>', '</h1>' ); ?>
                  <?php /*
                  <div class="blog-author-date">
                    <span class="blog-date">Posted on <?php echo get_the_date('M j, Y'); ?></span>
                    <?php 
                      $temp_post = get_post($post_id);
                      $user_id = $temp_post->post_author;
                      $user_url = get_author_posts_url($user_id);
                      $first_name = get_the_author_meta('first_name',$user_id);
                      $last_name = get_the_author_meta('last_name',$user_id);
                      $full_name = "{$first_name} {$last_name}";
                      echo '<span class="blog-author">by <a href="' . $user_url . '">' . $full_name . '</a></span>';
                    ?>
                  </div>
                  */ ?>

                <?php elseif ( is_author() ) : ?>
                  <?php
                    $temp_post = get_post($post_id);
                    $user_id = $temp_post->post_author;
                    $first_name = get_the_author_meta('first_name',$user_id);
                    $last_name = get_the_author_meta('last_name',$user_id);
                    $full_name = "{$first_name} {$last_name}";
                    echo '<h1 class="entry-title">Posts by ' . $full_name . ' </h1>';
                  ?>

                <?php elseif ( is_category() ) : ?>
                  <?php single_cat_title( '<h1 class="entry-title">Category: ', '</h1>' ); ?>

                <?php elseif ( is_tag() ) : ?>
                  <?php single_tag_title( '<h1 class="entry-title">Tag: ', '</h1>' ); ?>

                <?php elseif ( is_month() ) : ?>
                  <?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <?php elseif ( is_post_type_archive() ) : ?>
                  <?php post_type_archive_title( '<h1 class="entry-title">Archives: ', '</h1>' ); ?>

                <?php elseif ( is_search() ) : ?>
                  <?php echo '<h1 class="entry-title">Search Results for: ' . get_search_query() .  '</h1>'; ?>

                <?php elseif ( is_home() ) : ?>
                  <h1 class="entry-title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>

                <?php elseif ( is_404() ) : ?>
                  <h1>Oops! That page can&rsquo;t be found.</h1>

                <?php elseif ( is_page_template( 'contact.php' ) ) : ?>
                  <h1>Get in Touch</h1>

                <?php else : ?>
                  <?php the_title( '<h1 class="entry-title"><span class="sr-only">Article Title: </span>', '</h1>' ); ?>

                <?php endif; ?>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </header>




