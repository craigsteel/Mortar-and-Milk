<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<style>
.hero .container {background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat center center !important; background-size: cover !important; max-width: 1244px; }
@media only screen and (max-width: 767px) { .hero .container {background: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/mobile_header_background.jpg) no-repeat center center !important; background-size: cover !important; } }
/* .panel.about-video {background: url(<?php echo types_render_field('about-video-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;} */
.r1-b1 {background: url(<?php echo types_render_field('1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b2 {background: url(<?php echo types_render_field('1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b3 {background: url(<?php echo types_render_field('1st-row-3rd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b1 {background: url(<?php echo types_render_field('2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b1 {background: url(<?php echo types_render_field('3rd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b2 {background: url(<?php echo types_render_field('3rd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.rb-b1 {background: url(<?php echo types_render_field('bottom-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.rb-b2 {background: url(<?php echo types_render_field('bottom-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
</style>


<section class="hero rev row">
<div class="container">

<div class="home-intro">
<img class="hide-desktop logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Mortar_And_Milk_Logo.png">
<?php while (have_posts()) : the_post(); ?>
<h1 class="didot hide-mobile"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
</div>


 <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<section class="main row" id="start">
<div class="container">

<div class="col span12_4">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('1st-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('1st-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('1st-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('1st-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r1-b3">
<a class="vert-align" href="<?php echo types_render_field('1st-row-3rd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('1st-row-3rd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('1st-row-3rd-box-description'); ?></p>
<?php if  (types_render_field('1st-row-3rd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('1st-row-3rd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_12 last">

<div class="panel r2-b1">
<a class="vert-align" href="<?php echo types_render_field('2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('2nd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('2nd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('2nd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_8">

<div class="panel r3-b1">
<a class="vert-align" href="<?php echo types_render_field('3rd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('3rd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('3rd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('3rd-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('3rd-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r3-b2">
<a class="vert-align" href="<?php echo types_render_field('3rd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('3rd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('3rd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('3rd-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('3rd-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<div class="divider"></div>

</div> <!-- / .container -->
</section> <!-- / .row .main -->


<section class="product-slider row">
<div class="container">

<h3>New Products</h3>
<?php echo do_shortcode('[recent_products per_page="5" columns="5"]'); ?>
<a href="<?php bloginfo('url'); ?>/shop/" class="mini-link right">All Products <span class="icon icon-plus"></span></a>

</div> <!-- / .container -->
</section> <!-- / .row .product-slider -->


<section class="about-video row">
<div class="container">

<div class="col span12_12 centered">



<a href="<?php bloginfo('url'); ?>/category/videos/" class="mini-link right video-link">All Videos <span class="icon icon-plus"></span></a>

</div>

</div> <!-- / .container -->
</section> <!-- / .row .about-video -->


<section class="magazine row">
<div class="container">

<div class="col span12_8">

<div class="panel rb-b1">
<a class="vert-align" href="<?php echo types_render_field('bottom-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('bottom-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('bottom-row-1st-box-description'); ?></p>
<?php if  (types_render_field('bottom-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('bottom-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel rb-b2">
<a class="vert-align" href="<?php echo types_render_field('bottom-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('bottom-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('bottom-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('bottom-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('bottom-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

</div> <!-- / .container -->
</section> <!-- / .row .magazine -->


<?php get_footer(); ?>