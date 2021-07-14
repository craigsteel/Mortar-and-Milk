<?php get_header(); ?>


<?php 
  $url=strtok($_SERVER["REQUEST_URI"],'?');
  $querystring = $_SERVER['QUERY_STRING'];
  $cate = get_queried_object();
  $cateID = $cate->term_id;
  $cate_slug = $cate->slug;

  
?>

<?php if (!is_product()) { ?>

<section class="hero hero-shop rev row">
<div class="container">

<div class="hide-mobile">
<?php if ($cateID == '') { ?>

<div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( 155 ) ); ?>) center center no-repeat !important; background-size: cover  !important; padding: 1rem !important;">

        <div>
        
          <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1>Welcome<br>to our Store</h1>
          <a href="<?php bloginfo('url'); ?>/shop" class="btn">Shop Now</a>
          </span>
          </div>

        </div>

    </div>

<?php } else { ?>


<script>
jQuery(document).ready(function() {
 
  jQuery(".owl-carousel").owlCarousel({
    items : 1,
    itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      slideSpeed :  2400,
    navigation: true,
    navigationText : ["<span class='icon icon-arrow-left'></span>","<span class='icon icon-arrow-right'></span>"],
  });
 
});
</script>
<div class="owl-carousel">
  
 <?php 
  if (is_product_category()){
    global $wp_query;
    $cat = $wp_query->get_queried_object();
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 
    $image = wp_get_attachment_url( $thumbnail_id ); ?>

    
    <div style="background: url(<?php echo $image; ?>) center center no-repeat; background-size: cover; padding: 1rem !important;">

    <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1><?php echo $cat->name; ?></h1>
          </span>
          </div>

    </div>

    <?php } ?>
  
  <?php 
    if (!empty($cateID)) {

     $herosub_args = array(
          'taxonomy' => 'product_cat',
          'parent' => $cateID, 
          'hierarchical' => 0,
          'show_option_none' => '',
          'hide_empty' => 0
          );
     $herosub_terms = get_terms('product_cat', $herosub_args);

     if (count($herosub_terms) > 0) { ?>

      <?php foreach ($herosub_terms as $herosub_term): 

      $herothumbnail_id = get_woocommerce_term_meta( $herosub_term->term_id, 'thumbnail_id', true ); 
      $heroimage = wp_get_attachment_url( $herothumbnail_id ); ?>

      <div style="background: url(<?php echo $heroimage; ?>) center center no-repeat; background-size: cover; padding: 1rem !important;">
      <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1><?php echo $herosub_term->name; ?></h1>
          <a href="<?php bloginfo('url'); ?>/product-category/<?php echo $herosub_term->slug; ?>" class="btn">Shop Now</a>
          </span>
          </div>
      </div>

    <?php 
      wp_reset_query();
      endforeach; } 
    } ?> 


</div> <!-- /.owl-carousel --> 

<?php } ?>



<?php 
if (is_tax( 'product_brand' )) {

      $term = get_term_by( 'slug', get_query_var( 'term' ), 'product_brand' );
$thumbnail = get_brand_thumbnail_url( $term->term_id, 'full' );
 ?>

     <div style="background: url(<?php echo $thumbnail; ?>) center center no-repeat; background-size: cover; padding: 1rem !important;">
      <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1><?php echo $term->name; ?></h1>
          <p><?php echo $term->description; ?></p>
          </span>
          </div>
      </div>
  <?php  } ?>

</div>

<div class="hide-desktop">

<?php 

  $xcate = get_queried_object();
  $xcateID = $cate->term_id;
  $xcate_slug = $xcate->slug;
  
?>


  <?php if (is_product()) { ?>
<h1>Item</h1> 
<?php } elseif ($xcateID == '') { ?>
          <h1>Welcome<br>to our Store</h1>


<?php } else { ?>


 <?php 
  if (is_product_category()){
    global $wp_query;
    $xcat = $wp_query->get_queried_object(); ?>

          <h1 style="color: #424242;"><?php echo $xcat->name; ?></h1>

    <?php } ?>
  

    <?php 
      wp_reset_query();

    } ?> 


</div>



</div> <!-- / .container -->
</section> <!-- / .row.hero -->
<?php } ?> 


<section class="main-shop row">
<div class="container">


<?php if (!is_product()) { ?>
<?php if (is_shop()); { ?>
<?php 
 $args = array('taxonomy' => 'product_cat','parent' => 0, "hide_empty" => 0);
 $terms = get_terms('product_cat', $args);
 if (count($terms) > 0) {
   echo'<div class="cat-container"><ul>';
   foreach ($terms as $term):
    echo'<li class="item '.$term->slug.'">'; ?>

 <div class="title">
  <a href="<?php bloginfo('url'); ?>/product-category/<?php echo $term->slug; ?>" class="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
 </div>

<?php 
  wp_reset_query();
  echo '</li>';
  endforeach;
  echo '</ul></div>';
} ?> 


<?php 



if (!empty($cateID)) {

 $sub_args = array(
      'taxonomy' => 'product_cat',
      'parent' => $cateID, 
      'hierarchical' => 0,
      'show_option_none' => '',
      'hide_empty' => 0
      );
 $sub_terms = get_terms('product_cat', $sub_args);

 if (count($sub_terms) > 0) { ?>


     <div class="cat-container sub-cat-container">
    <ul>
    <li class="item is-bold"><a href="<?php bloginfo('url'); ?>/product-category/<?php echo $cate->slug; ?>" class="selected"><?php echo $cate->name; ?>:</a></li>

  <?php 
   foreach ($sub_terms as $sub_term):
    echo'<li class="item '.$sub_term->slug.'">'; ?>

 <div class="title">
  <a href="<?php bloginfo('url'); ?>/product-category/<?php echo $sub_term->slug; ?>" class="<?php echo $sub_term->slug; ?>"><?php echo $sub_term->name; ?></a>
 </div>

<?php 
  wp_reset_query();
  echo '</li>';
  endforeach;
  echo '</ul></div>';

}

} ?> 

<!--
<div class="sortby-container"><ul>
<li class="li-title">Sort by:</li>
<li class="li-first"><a href="<?php echo $url ?>?order_by=date" class="sortby_link<?php if ( $querystring == 'order_by=date' ) { ?> selected<?php } ?>">New</a></li>
<li><a href="<?php echo $url ?>?order_by=popularity" class="sortby_link<?php if ( $querystring == 'order_by=popularity' ) { ?> selected<?php } ?>">Best Sellers</a></li>
<li><a href="<?php echo $url ?>?order_by=rating" class="sortby_link<?php if ( $querystring == 'order_by=rating' ) { ?> selected<?php } ?>">Top Rated</a></li>
<li><a href="<?php echo $url ?>?order_by=menu_order" class="sortby_link<?php if ( $querystring == 'order_by=menu-order' ) { ?> selected<?php } ?>">Product Name</a></li>
<li><a href="<?php echo $url ?>?order_by=price" class="sortby_link<?php if ( $querystring == 'order_by=price' ) { ?> selected<?php } ?>">Price (Low-High)</a></li>
<li><a href="<?php echo $url ?>?order_by=price-desc" class="sortby_link<?php if ( $querystring == 'order_by=price-desc' ) { ?> selected<?php } ?>">Price (High-Low)</a></li>
</ul></div>
-->

<?php } // if is_shop ?> 
<?php wp_reset_query(); ?>
<?php } ?>

<?php woocommerce_content(); ?>

</div> <!-- / .container -->
</section> <!-- / .row .main -->

<?php get_footer(); ?>