<?php
/*
Template Name: Brands Page
*/
?>

<?php get_header(); ?>

<style>
@media (min-width: 768px) {.hero .container {background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat center center !important; background-size: cover !important; max-width: 1244px; }}
.feature-slot {background: url(<?php echo types_render_field('brands-feature-slot-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b1 {background: url(<?php echo types_render_field('brands-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b2 {background: url(<?php echo types_render_field('brands-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b1 {background: url(<?php echo types_render_field('brands-2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b2 {background: url(<?php echo types_render_field('brands-2nd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b1 {background: url(<?php echo types_render_field('brands-3rd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b2 {background: url(<?php echo types_render_field('brands-3rd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
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
  
   
    <div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important; padding: 1rem;">

        <div>
        
          <div class="roundel-white is-centered">
          <span class="vert-align">
          <h1>Brands</h1>
          <a href="<?php bloginfo('url'); ?>/shop" class="btn">Shop Now</a>
          </span>
          </div>

        </div>

    </div>

</div>

</div>


    <div class="hide-desktop">


          <h1 style="color: #424242;">Brands</h1>


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

<!--

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

  -->


  <div class="cat-container"><ul class="brands">
  <?php echo do_shortcode('[product_brand_list show_empty_brands="true"]'); ?>
  </ul></div>

</div>
</section>


<section class="feature row">
<div class="container">

<div class="col span12_12">

<div class="panel feature-slot">
<a class="vert-align" href="<?php echo types_render_field('brands-feature-slot-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-feature-slot-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-feature-slot-description'); ?></p>
<?php if  (types_render_field('brands-feature-slot-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-feature-slot-call-to-action'); ?></span>
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

<div class="col panels span12_6">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('brands-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('brands-1st-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-1st-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_6 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('brands-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('brands-1st-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-1st-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_6">

<div class="panel r2-b1">
<a class="vert-align" href="<?php echo types_render_field('brands-2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-2nd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('brands-2nd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-2nd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_6 last">

<div class="panel r2-b2">
<a class="vert-align" href="<?php echo types_render_field('brands-2nd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-2nd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-2nd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('brands-2nd-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-2nd-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_6">

<div class="panel r3-b1">
<a class="vert-align" href="<?php echo types_render_field('brands-3rd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-3rd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-3rd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('brands-3rd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-3rd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_6 last">

<div class="panel r3-b2">
<a class="vert-align" href="<?php echo types_render_field('brands-3rd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('brands-3rd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('brands-3rd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('brands-3rd-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('brands-3rd-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<div class="divider"></div>

</div> <!-- / .container -->
</section> <!-- / .row .main -->



<?php get_footer(); ?>