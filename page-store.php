<?php
/*
Template Name: Store Page
*/
?>

<?php get_header(); ?>


<style>
/* .hero .container {background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat center center !important; background-size: cover !important; max-width: 1244px; } */
.feature-slot {background: url(<?php echo types_render_field('shop-feature-slot-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b1 {background: url(<?php echo types_render_field('shops-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b2 {background: url(<?php echo types_render_field('shops-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b1 {background: url(<?php echo types_render_field('shops-2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b2 {background: url(<?php echo types_render_field('shops-2nd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b1 {background: url(<?php echo types_render_field('shops-3rd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b2 {background: url(<?php echo types_render_field('shops-3rd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
</style>


<section class="hero row">
<div class="container">

<div class="hide-mobile">
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
  
   
    <div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important; padding: 1rem !important;">

        <div>
        
          <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1>Welcome<br>to our Store</h1>
          <a href="<?php bloginfo('url'); ?>/shop" class="btn">Shop Now</a>
          </span>
          </div>

        </div>

    </div>

    
  
  <?php 
     $herosub_args = array(
          'taxonomy' => 'product_cat',
          'parent' => 0, 
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
      endforeach; } ?> 

</div>
</div>


    <div class="hide-desktop">


          <h1 style="color: #424242;"><?php echo the_title(); ?></h1>


</div>


 <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<section class="categories row">
<div class="container">

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
  echo '</ul></div>'; } ?> 

</div>
</section>


<section class="feature row">
<div class="container">



<div class="col span12_12">

<div class="panel feature-slot">
<a class="vert-align" href="<?php echo types_render_field('shop-feature-slot-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shop-feature-slot-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shop-feature-slot-description'); ?></p>
<?php if  (types_render_field('shop-feature-slot-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shop-feature-slot-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

</div>
</section>


<section class="product-slider row">
<div class="container">

<h3>New Products</h3>
<?php echo do_shortcode('[recent_products per_page="5" columns="5"]'); ?>
<a href="<?php bloginfo('url'); ?>/shop/" class="mini-link right">All Products <span class="icon icon-plus"></span></a>

</div> <!-- / .container -->
</section> <!-- / .row .product-slider -->



<section class="main row">
<div class="container">

<div class="col panels span12_8">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('shops-1st-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-1st-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_4 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('shops-1st-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-1st-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_4">

<div class="panel r2-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-2nd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('shops-2nd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-2nd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_8 last">

<div class="panel r2-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-2nd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-2nd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-2nd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('shops-2nd-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-2nd-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_8">

<div class="panel r3-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-3rd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-3rd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-3rd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('shops-3rd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-3rd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_4 last">

<div class="panel r3-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-3rd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-3rd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-3rd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('shops-3rd-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('shops-3rd-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<div class="divider"></div>

</div> <!-- / .container -->
</section> <!-- / .row .main -->




<?php get_footer(); ?>