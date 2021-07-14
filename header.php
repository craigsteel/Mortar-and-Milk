<!doctype html>
<html lang="en-GB">
<head>

<!-- Page Title -->
  <title><?php wp_title(''); ?></title>

<!-- Meta Data -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="initial-scale=1">
  <meta name="format-detection" content="telephone=no">

<!-- Wordpress wp_head Output -->
<?php wp_head(); ?>
<!-- / Wordpress wp_head Output -->

<!-- Fonts / Typekit -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/screen.min.css">
  
</head>

<body <?php body_class(); ?> id="top">



  <section class="top-nav row">
  <div class="container">
  <nav class="top">
    <ul id="menu-top-menu" class="top-menu"><li class="menu-item menu-login-register"><a href="<?php bloginfo('url'); ?>/my-account/"><span class="icon icon-user"></span> <span class="hide-mobile">Login / Register</span></a></li><li class="menu-item menu-wishlist"><a href="<?php bloginfo('url'); ?>/my-lists/"><span class="icon icon-wish"></span> <span class="hide-mobile">Wishlist</span></a></li><li class="menu-item menu-cart"><a href="<?php bloginfo('url'); ?>/cart/"><span class="icon icon-cart"></span> <span class="hide-mobile">Cart (<?php echo WC()->cart->get_cart_contents_count(); ?>)</span></a></li></ul>
  </nav>
  </div> <!-- / .container -->
  </section>

  <header class="page-header header row">

    <a href="<?php bloginfo('url'); ?>" class="branding"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Mortar_And_Milk_Logo.svg"></a>

    <a href="<?php bloginfo('url'); ?>" class="hide-desktop mobile-logo"><span class="icon icon-MnM"></span></a>

    <input id="mobile-menu" type="checkbox">
    <label for="mobile-menu"><span class="icon icon-menu"></span></label>

       <nav id="menu-the-main-menu" class="primary">
  <div class="nav-container">
    <ul id="menu-main-menu" class="nav cf">

      <li class="menu-item menu-home"><a href="<?php bloginfo('url'); ?>/">Home</a></li>

<!-- //------------------ STORE ------------------// -->

      <li class="menu-item menu-store"><a href="<?php bloginfo('url'); ?>/store/" class="hide-mobile">Store</a>
        <ul class="custom-nav sub-menu">
            
                
                        
                 <li>
                    <a href="<?php bloginfo('url'); ?>/product-category/skincare/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sjdwp/assets/img/cat-womens-skincare-menu-image.jpg">
                    <div class="text bg-colored">
                    <div class="text-container"><span class="title">Women's Skincare</span></div>
                    </div>
                    </a>
                  </li><li>
                    <a href="<?php bloginfo('url'); ?>/product-category/make-up/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sjdwp/assets/img/cat-womens-makeup-menu-image.jpg">
                    <div class="text bg-colored">
                    <div class="text-container"><span class="title">Women's Makeup</span></div>
                    </div>
                    </a>
                  </li><li>                  
                    <a href="<?php bloginfo('url'); ?>/product-category/for-men/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sjdwp/assets/img/cat-men-menu-image.jpg">
                    <div class="text bg-colored">
                    <div class="text-container"><span class="title">Men</span></div>
                    </div>
                    </a>
                  </li><li>                 
                    <a href="<?php bloginfo('url'); ?>/product-category/teens/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sjdwp/assets/img/cat-teens-menu-image.jpg">
                    <div class="text bg-colored">
                    <div class="text-container"><span class="title">Teens</span></div>
                    </div>
                    </a>
                  </li><li>
                    <a href="<?php bloginfo('url'); ?>/product-category/accessories/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sjdwp/assets/img/cat-accessories-menu-image.jpg">
                    <div class="text bg-colored">
                    <div class="text-container"><span class="title">Accessories</span></div>
                    </div>
                    </a>
                  </li>
          
          <li class="sub-menu-header colored"><span class="heading">Store</span></li>
        </ul>
      </li>

<!-- //------------------ MAGAZINE ------------------// -->

      <li class="menu-item menu-magazine"><a href="<?php bloginfo('url'); ?>/magazine/">Magazine</a>
        <ul class="custom-nav sub-menu">
          
          <?php
          query_posts( array(
            'cat' => -18,
            'posts_per_page' => 5,
            'meta_key' => 'wpcf-featured-post',
            'meta_value' => 1,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); ?><li>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>
              <div class="text bg-colored">
                <div class="text-container"><span class="title"><?php the_title(); ?></span></div>
              </div>
            </a>
          </li><?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <li class="sub-menu-header colored"><span class="heading">Magazine</span></li>
        </ul>
      </li>

<!-- //------------------ Women ------------------// -->



      <li class="menu-item menu-women-men women"><a href="<?php bloginfo('url'); ?>/product-category/for-women/">Women</a>
        <ul class="custom-nav sub-menu">

          
          <?php
          query_posts( array(
            'page_id' => 42,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); 

          ?><li class="women-menu-block" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/img/womens-menu-image.jpg) left center no-repeat; background-size: 50%;">

           <div class="wnm-women-menu-image"></div><div class="mnw-cats right">
            
                <?php 
                $args = array(
                   'hierarchical' => 0,
                   'show_option_none' => '',
                   'hide_empty' => 0,
                   'parent' => 38, // women (39 men)
                   'taxonomy' => 'product_cat'
                );
                $subcats = get_categories($args); 

                foreach ($subcats as $sc) {
                  $link = get_term_link( $sc->slug, $sc->taxonomy ); 

                    echo '<ul class="cat-list">';
                    echo '<li class="cat-list--item"><a href="'. $link .'">'.$sc->name.'</a></li>'; 
 
                    $sub_args = array(
                       'hierarchical' => 0,
                       'show_option_none' => '',
                       'hide_empty' => 0,
                       'parent' => $sc->term_id, // women (39 men)
                       'taxonomy' => 'product_cat'
                    );
                    $sub_subcats = get_categories($sub_args); 

                    foreach ($sub_subcats as $sub_sc) {
                      $sub_link = get_term_link( $sub_sc->slug, $sub_sc->taxonomy ); 

                        echo '<li class="subcat-list--item"><a href="'. $sub_link .'" class="subcat-list--item">'.$sub_sc->name.'</a></li>'; 

                    } 

                    echo '</ul>';

                } ?>


                </div>
            
          </li>

      <?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <li class="sub-menu-header colored"><span class="heading">Women</span></li>
        </ul>
      </li>


<!-- //------------------ Men ------------------// -->



      <li class="menu-item menu-women-men men"><a href="<?php bloginfo('url'); ?>/product-category/for-men/">Men</a>
        <ul class="custom-nav sub-menu">

          
          
         <?php
          query_posts( array(
            'page_id' => 42,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); 

          ?><li class="men-menu-block" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mens-menu-image.jpg) left center no-repeat; background-size: 50%;">



          <div class="wnm-men-menu-image"></div><div class="mnw-cats right">
            
                <?php 
                $args = array(
                   'hierarchical' => 0,
                   'show_option_none' => '',
                   'hide_empty' => 0,
                   'parent' => 39, // women (39 men)
                   'taxonomy' => 'product_cat'
                );
                $subcats = get_categories($args); 

                foreach ($subcats as $sc) {
                  $link = get_term_link( $sc->slug, $sc->taxonomy ); 

                    echo '<ul class="cat-list">';
                    echo '<li class="cat-list--item"><a href="'. $link .'">'.$sc->name.'</a></li>'; 
 
                    $sub_args = array(
                       'hierarchical' => 0,
                       'show_option_none' => '',
                       'hide_empty' => 0,
                       'parent' => $sc->term_id, // women (39 men)
                       'taxonomy' => 'product_cat'
                    );
                    $sub_subcats = get_categories($sub_args); 

                    foreach ($sub_subcats as $sub_sc) {
                      $sub_link = get_term_link( $sub_sc->slug, $sub_sc->taxonomy ); 

                        echo '<li class="subcat-list--item"><a href="'. $sub_link .'" class="subcat-list--item">'.$sub_sc->name.'</a></li>'; 

                    } 

                    echo '</ul>';

                } ?>


                </div>
            
          </li>

      <?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <li class="sub-menu-header colored"><span class="heading">Men</span></li>
        </ul>
      </li>



<!-- //------------------ TREATMENTS ------------------// -->
      
      <li class="menu-item menu-treatments"><a href="<?php bloginfo('url'); ?>/treatments/">Treatments</a>
        <ul class="custom-nav sub-menu">
          
        <?php
          query_posts( array(
            'page_id' => 44,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); ?><li>
            <a href="<?php echo types_render_field('menu-block-1-url', array('raw'=>'true')); ?>">
              <div class="menu-block-50  padding">
                <div class="text bg-colored">
                    <div class="text-container"><?php echo types_render_field('menu-block-1-content', array('raw'=>'true')); ?></div>
                </div>
              </div><div class="menu-block-50">
                <?php echo types_render_field('menu-block-1-image'); ?>
              </div>
            </a>
          </li><li>
           <a href="<?php echo types_render_field('menu-block-2-url', array('raw'=>'true')); ?>">
              <div class="menu-block-50 padding">
                <div class="text bg-colored">
                    <div class="text-container"><?php echo types_render_field('menu-block-2-content', array('raw'=>'true')); ?></div>
                </div>
              </div><div class="menu-block-50">
                <?php echo types_render_field('menu-block-2-image'); ?>
              </div>
            </a>
          </li><?php endwhile; ?>
          <?php wp_reset_query(); ?>
          
          <li class="sub-menu-header colored"><span class="heading">Treatments</span></li>
        </ul>
      </li>

<!-- //------------------ BRANDS ------------------// -->


      
      <li class="menu-item menu-brands"><a href="<?php bloginfo('url'); ?>/brands/">Brands</a>
        <ul class="custom-nav sub-menu">
        
        <li class="brands-menu-block" style="background: url(<?php bloginfo('stylesheet_directory') ?>/assets/img/womens-menu-image.jpg) left center no-repeat; background-size: 50%;">



          <div class="brands-menu-image"></div><div class="mnw-cats right">
            

          <?php echo do_shortcode('[product_brand_list show_empty_brands="true"]') ?>

                </div>
            
          </li>


          <li class="sub-menu-header colored"><span class="heading">Brands</span></li>
        </ul>
      </li>



<!-- //------------------ ABOUT ------------------// -->
      
      <li class="menu-item menu-about-us"><a href="<?php bloginfo('url'); ?>/about-us/">About Us</a>
        <ul class="custom-nav sub-menu">
          
          <?php
          query_posts( array(
            'page_id' => 46,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); ?><li>
            <a href="<?php echo types_render_field('menu-block-1-url', array('raw'=>'true')); ?>">
              <div class="menu-block-50  padding">
                <div class="text bg-colored">
                    <div class="text-container"><?php echo types_render_field('menu-block-1-content', array('raw'=>'true')); ?></div>
                </div>
              </div><div class="menu-block-50">
                <?php echo types_render_field('menu-block-1-image'); ?>
              </div>
            </a>
          </li><li>
           <a href="<?php echo types_render_field('menu-block-2-url', array('raw'=>'true')); ?>">
              <div class="menu-block-50 padding">
                <div class="text bg-colored">
                    <div class="text-container"><?php echo types_render_field('menu-block-2-content', array('raw'=>'true')); ?></div>
                </div>
              </div><div class="menu-block-50">
                <?php echo types_render_field('menu-block-2-image'); ?>
              </div>
            </a>
          </li><?php endwhile; ?>
          <?php wp_reset_query(); ?>
          
          <li class="sub-menu-header colored"><span class="heading">About Us</span></li>
        </ul>
      </li>

<!-- //------------------ EVENTS ------------------// -->
      
      <li class="menu-item menu-events"><a href="<?php bloginfo('url'); ?>/events/">Events</a>
        <ul class="custom-nav sub-menu">
          
          <?php
          query_posts( array(
            'post_type' => 'event',
            'posts_per_page' => 5,
          ) );
          if ( have_posts() ) while ( have_posts() ) : the_post(); ?><li>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>
              <div class="text bg-colored">
                <div class="text-container"><span class="title"><?php the_title(); ?></span></div>
              </div>
            </a>
          </li><?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <li class="sub-menu-header colored"><span class="heading">Events</span></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>

  
  </header> <!-- / .page-header.row -->
