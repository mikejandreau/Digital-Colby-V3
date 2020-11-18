<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Colby_V3
 */

get_header();
?>

	<main id="primary" class="site-main">


    <section class="featured-section triple-feature">
      <div class="container">
        <div class="row">







          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation1">
              <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_image_1'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_1') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_1') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_heading_1'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_heading_1') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_1'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_1') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_link_text_1'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_link_text_1') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation2">
              <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_image_2'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_2') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_2') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_heading_1'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_2') . '">' . get_field('triple_feature_heading_1') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_1'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_1') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_link_text_2'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_2') . '">' . get_field('triple_feature_link_text_2') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation3">
              <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_image_3'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_3') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_3') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_heading_3'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_heading_3') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_3'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_3') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_link_text_3'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_3') . '">' . get_field('triple_feature_link_text_3') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation4">
              <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_image_1'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_1') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_1') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_heading_1'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_heading_1') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_1'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_1') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_1') && get_field('triple_feature_link_text_1'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_link_text_1') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation5">
              <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_image_2'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_2') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_2') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_heading_1'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_2') . '">' . get_field('triple_feature_heading_1') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_1'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_1') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_2') && get_field('triple_feature_link_text_2'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_2') . '">' . get_field('triple_feature_link_text_2') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0 animation6">
              <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_image_3'))
                { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_3') . '"><img class="card-img-top" src="' . get_field('triple_feature_image_3') . '" alt="Card image"></a>'; }?>
              <div class="card-body px-0">
              <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_heading_3'))
                  { echo '<h3><a href="' . get_field('triple_feature_url_1') . '">' . get_field('triple_feature_heading_3') . '</a></h3>'; } ?>
                <?php if(get_field('triple_feature_copy_3'))
                  { echo '<p class="card-text">' . get_field('triple_feature_copy_3') . '</p>'; } ?>
              </div>
              <?php /*<div class="card-footer p-0 border-0 bg-white">
                <?php if(get_field('triple_feature_url_3') && get_field('triple_feature_link_text_3'))
                  { echo '<a class="triple-feature-link" href="' . get_field('triple_feature_url_3') . '">' . get_field('triple_feature_link_text_3') . ' <i class="fas fa-arrow-right"></i></a>'; } ?>
              </div>*/ ?>
            </div>
          </div>

        </div>


      </div>

    </section>





                <?php /**/ ?>
                

    <section class="featured-section search-feature">
      <div class="container bg-dark pt-3">

        <h2>Do a search</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe, asperiores amet quibusdam. Accusamus hic, commodi facilis eum nemo dolorem mollitia accusantium doloribus recusandae facere impedit quo blanditiis aliquid odio quibusdam!</p>

        <div class="row">
          <div class="col-sm-9 mb-3">
            <form role="search" method="get" class="form search-form" action="/index.php">
              <div class="input-group">
                <input name="s" type="text" class="form-control" placeholder="Search this site">
                <span class="input-group-btn">
                  <button type="submit" value="Search" class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
                </span>
              </div>
            </form>
          </div>

          <div class="col-sm-3 mb-3">
            <a href="#" class="btn btn-primary btn-block">Blah blah</a>
          </div>
        </div>

      </div>
    </section>




    <div class=home-banner data-flickity='{ "wrapAround": true }'>

      <div class=home-banner-cell>
        <section class="special-feature" <?php if(get_field('carousel_image_1')) { echo 'style="background: url(' . get_field('carousel_image_1') . ');"'; }?>>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 offset-md-6 p-0">
                <div class="featured-block">

                  <?php if(get_field('carousel_heading_1'))
                    { echo '<h3>' . get_field('carousel_heading_1') . '</h3>'; } ?>

                  <?php if(get_field('carousel_copy_1'))
                    { echo '<p>' . get_field('carousel_copy_1') . '</p>'; } ?>

                  <?php if(get_field('carousel_button_url_1') && get_field('carousel_button_text_1'))
                    { echo '<a class="btn btn-secondary" href="' . get_field('carousel_button_url_1') . '">' . get_field('carousel_button_text_1') . '</a>'; } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class=home-banner-cell>
        <section class="special-feature" <?php if(get_field('carousel_image_2')) { echo 'style="background: url(' . get_field('carousel_image_2') . ');"'; }?>>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 offset-md-6 p-0">
                <div class="featured-block">

                  <?php if(get_field('carousel_heading_2'))
                    { echo '<h3>' . get_field('carousel_heading_2') . '</h3>'; } ?>

                  <?php if(get_field('carousel_copy_2'))
                    { echo '<p>' . get_field('carousel_copy_2') . '</p>'; } ?>

                  <?php if(get_field('carousel_button_url_2') && get_field('carousel_button_text_2'))
                    { echo '<a class="btn btn-secondary" href="' . get_field('carousel_button_url_2') . '">' . get_field('carousel_button_text_2') . '</a>'; } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class=home-banner-cell>
        <section class="special-feature" <?php if(get_field('carousel_image_3')) { echo 'style="background: url(' . get_field('carousel_image_3') . ');"'; }?>>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 offset-md-6 p-0">
                <div class="featured-block">

                  <?php if(get_field('carousel_heading_3'))
                    { echo '<h3>' . get_field('carousel_heading_3') . '</h3>'; } ?>

                  <?php if(get_field('carousel_copy_3'))
                    { echo '<p>' . get_field('carousel_copy_3') . '</p>'; } ?>

                  <?php if(get_field('carousel_button_url_3') && get_field('carousel_button_text_3'))
                    { echo '<a class="btn btn-secondary" href="' . get_field('carousel_button_url_3') . '">' . get_field('carousel_button_text_3') . '</a>'; } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>




    <?php /*

        <section class="special-feature" <?php if(get_field('carousel_image_1')) { echo 'style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(' . get_field('carousel_image_1') . ');"'; }?>>
      */ ?>




<?php /*

  <section class="featured-section">
    <div class="container">
    <h2>Featured Collecions</h2>
      <div class="row">


        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="https://source.unsplash.com/WLUHO9A_xik/1920x1080" alt="Card image">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="https://source.unsplash.com/WLUHO9A_xik/1920x1080" alt="Card image">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="https://source.unsplash.com/WLUHO9A_xik/1920x1080" alt="Card image">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

      </div>
    </div>


  </section>

*/ ?>











<!--
<div class="home-banner" data-flickity='{ "wrapAround": true }'>

          <div class="home-banner-cell">
            <div class="container-fluid h-100 d-flex">
              <div class="col-sm-8 my-auto">
                <div class="large-block">
                  <div class="header-content-inner" style="background:url(https://via.placeholder.com/1600x450.jpg?text=Placeholder+1);">
                    <h1 class="display-4">asdfasdfad</h1>
                    <hr class="light">
                    <p class="lead">asdfasdfasdfasdfasdfad ad fasd dfadf adf adf aasdf</p>
                    <a href="#services" class="btn btn-scroll js-scroll-trigger"><i class="fa fa-chevron-down"></i>scroll down</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 my-auto">
                <div class="small-block">
                  <p>something</p>
                  <img src="https://via.placeholder.com/600x900.jpg?text=Placeholder+1" alt="">
                  <p>something else</p>
                </div>
              </div>
            </div>
          </div>

          <div class="home-banner-cell">
            <div class="container-fluid h-100 d-flex">
              <div class="col-sm-8 my-auto">
                <div class="large-block">
                  <div class="header-content-inner" style="background:url(https://via.placeholder.com/1600x450.jpg?text=Placeholder+1);">
                    <h1 class="display-4">asdfasdfad</h1>
                    <hr class="light">
                    <p class="lead">asdfasdfasdfasdfasdfad ad fasd dfadf adf adf aasdf</p>
                    <a href="#services" class="btn btn-scroll js-scroll-trigger"><i class="fa fa-chevron-down"></i>scroll down</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 my-auto">
                <div class="small-block">
                  <p>something</p>
                  <img src="https://via.placeholder.com/800x450.jpg?text=Placeholder+1" alt="">
                  <p>something else</p>
                </div>
              </div>
            </div>
          </div>

          <div class="home-banner-cell">
            <div class="container-fluid h-100 d-flex">
              <div class="col-sm-8 my-auto">
                <div class="large-block">
                  <div class="header-content-inner" style="background:url(https://via.placeholder.com/1600x450.jpg?text=Placeholder+1);">
                    <h1 class="display-4">asdfasdfad</h1>
                    <hr class="light">
                    <p class="lead">asdfasdfasdfasdfasdfad ad fasd dfadf adf adf aasdf</p>
                    <a href="#services" class="btn btn-scroll js-scroll-trigger"><i class="fa fa-chevron-down"></i>scroll down</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 my-auto">
                <div class="small-block">
                  <p>something</p>
                  <img src="https://via.placeholder.com/800x450.jpg?text=Placeholder+1" alt="">
                  <p>something else</p>
                </div>
              </div>
            </div>
          </div>

</div> /home-banner -->


















































<?php /*

  <div class="section about-section">
    <div class="container">
      <div class="row justify-content-center">




    <div class="col-sm-4 my-auto">
      <div class="about-section-image">
      <img src="https://via.placeholder.com/400x500.jpg?text=Placeholder+1" alt="">
</div>
    </div>

    <div class="col-sm-5 my-auto">
      <div class="about-section-text">
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
        <a class="button" href="/about/">Read More</a>
      </div>


    </div>



      </div>
    </div>
  </div>

*/ ?>

  






















  <div class="featured-section">
    <div class="container">
      <div class="feature-block-container">


        <div class="row">


          <div class="col-md-12 col-lg-8">
            <?php if(get_field('bottom_feature_url_1'))
            { echo '<a class="feature-block-link feature-wide" href="' . get_field('bottom_feature_url_1') . '">'; } ?>
            <div class="feature-block" <?php if(get_field('bottom_feature_image_1')) { echo 'style="background: url(' . get_field('bottom_feature_image_1') . ');"'; }?>>
              <div class="feature-block-info">
                <?php if(get_field('bottom_feature_heading_1'))
                { echo '<h3>' . get_field('bottom_feature_heading_1') . '</h3>'; } ?>
                <?php if(get_field('bottom_feature_description_1'))
                { echo '<p>' . get_field('bottom_feature_description_1') . '</p>'; } ?>
              </div>
            </div>
            <?php if(get_field('bottom_feature_url_1'))
            { echo '</a>'; } ?>

            <div class="row">
              <div class="col-md-6">
                <?php if(get_field('bottom_feature_url_2'))
                { echo '<a class="feature-block-link" href="' . get_field('bottom_feature_url_2') . '">'; } ?>
                <div class="feature-block" <?php if(get_field('bottom_feature_image_2')) { echo 'style="background: url(' . get_field('bottom_feature_image_2') . ');"'; }?>>
                  <div class="feature-block-info">
                    <?php if(get_field('bottom_feature_heading_2'))
                    { echo '<h3>' . get_field('bottom_feature_heading_2') . '</h3>'; } ?>
                    <?php if(get_field('bottom_feature_description_2'))
                    { echo '<p>' . get_field('bottom_feature_description_2') . '</p>'; } ?>
                  </div>
                </div>
                <?php if(get_field('bottom_feature_url_2'))
                { echo '</a>'; } ?>
              </div>
              <div class="col-md-6">
                <?php if(get_field('bottom_feature_url_3'))
                { echo '<a class="feature-block-link" href="' . get_field('bottom_feature_url_3') . '">'; } ?>
                <div class="feature-block" <?php if(get_field('bottom_feature_image_3')) { echo 'style="background: url(' . get_field('bottom_feature_image_3') . ');"'; }?>>
                  <div class="feature-block-info">
                    <?php if(get_field('bottom_feature_heading_3'))
                    { echo '<h3>' . get_field('bottom_feature_heading_3') . '</h3>'; } ?>
                    <?php if(get_field('bottom_feature_description_3'))
                    { echo '<p>' . get_field('bottom_feature_description_3') . '</p>'; } ?>
                  </div>
                </div>
                <?php if(get_field('bottom_feature_url_3'))
                { echo '</a>'; } ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-4">
            <?php if(get_field('bottom_feature_url_4'))
            { echo '<a class="feature-block-link feature-tall" href="' . get_field('bottom_feature_url_4') . '">'; } ?>
            <div class="feature-block" <?php if(get_field('bottom_feature_image_4')) { echo 'style="background: url(' . get_field('bottom_feature_image_4') . ');"'; }?>>
              <div class="feature-block-info">
                    <?php if(get_field('bottom_feature_heading_4'))
                    { echo '<h3>' . get_field('bottom_feature_heading_4') . '</h3>'; } ?>
                <?php if(get_field('bottom_feature_description_4'))
                { echo '<p>' . get_field('bottom_feature_description_4') . '</p>'; } ?>
              </div>
            </div>
            <?php if(get_field('bottom_feature_url_4'))
            { echo '</a>'; } ?>
          </div>

        </div>









        <?php /*
        <div class="column col-sm-12">
          <h2>Featured Collections</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis explicabo accusantium atque repudiandae distinctio esse, porro ullam recusandae, tenetur perspiciatis beatae odit maxime facilis reprehenderit pariatur repellat quaerat magni, a.</p>

          <!-- <div class="feature portfolio-feature">
            <h2>Portfolio</h2>
            <div class="row"> -->
              <?php 
                // $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 4 );
                // $loop = new WP_Query( $args );

                // while ( $loop->have_posts() ) : $loop->the_post();
                // echo '<div class="column col-sm-6 lg-3">';
                // echo '<a href="' . get_permalink() . '"><img src="' . get_the_post_thumbnail() . '</a>';
                // echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
                // echo '<p>' . get_the_excerpt() . '</p>';
                // echo '</div>';
                // endwhile;
              ?>
            <!-- </div>
            <a class="button button-primary" href="<?php // echo get_post_type_archive_link( 'portfolio' ); ?>">View All of Our Horses</a>
          </div> -->
          <?php // wp_reset_query(); ?>

          <?php // the filter buttons can be used for all categories, or for specific category or post type ?>
          <div class="button-group filter-buttons">
            <button class="is-checked" data-filter="*">Show All</button>
            <?php 
              $terms = get_terms("category"); // get all categories, but you can use any taxonomy
              // $terms = get_terms('category', array('parent' => 37)); // get specific parent category by ID
              // $terms = get_terms("portfolio-categories"); // get portfolio items, taxonomy set in functions.php
              $count = count($terms); //How many are they?
              if ( $count > 0 ){  //If there are more than 0 terms
                foreach ( $terms as $term ) {  //for each term:
                  echo "<button data-filter='.".$term->slug."'>" . $term->name . "</button>\n";
                  //create a list item with the current term slug for sorting, and name for label
                }
              }
            ?>
          </div>


          <div class="grid row row-cols-1 row-cols-sm-2 row-cols-md-3">

            <?php // Query the custom post type only
              $args = array( 
                // 'post_type' => 'portfolio', 
                'posts_per_page' => 12, // change 12 to -1 to get ALL posts
                'offset' => 0,  // Set this to 1 to skip over first post, 2 to skip the first two, etc.
               );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post(); 
                // pull category for each unique post using the ID 
                $terms = get_the_terms( $post->ID, 'category' ); 
                // $terms = get_the_terms( $post->ID, 'portfolio-categories' ); 
                if ( $terms && ! is_wp_error( $terms ) ) : 
                  $links = array();
                  foreach ( $terms as $term ) {
                    $links[] = $term->name;
                  }
                  $tax_links = join( " ", str_replace(' ', '-', $links));          
                  $tax = strtolower($tax_links);
                else : 
                  $tax = '';         
                endif; 
                // Insert category name into portfolio-item class 

                // grab the url for the full size featured image
                  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

                echo '
                <div class="grid-item col mb-4 '. $tax .'">
                <div class="card h-100 text-left">
                <img src="' . $featured_img_url . '" class="card-img-top" alt="' . $the_title . '">
                <div class="card-body">
                ';

                // echo '<a href="'. get_permalink() .'">';
                // echo the_post_thumbnail();
                // echo '</a>'; 

                echo the_title( '<h5 class="card-title">', '</h5>' );
                echo the_excerpt( '<p class="card-text">', '</p>' );
                echo '<a href="' . get_permalink( get_the_ID() ) . '">View Project</a>';

                echo '
                </div>
                </div>
                </div>'; 
                
              endwhile;
              wp_reset_postdata(); 
            ?>
          </div>

          <a class="btn btn-primary" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All</a>
        </div>
        */ ?>


      </div>
    </div>
  </div>



















	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
