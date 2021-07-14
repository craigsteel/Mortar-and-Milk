<?php
/*
Template Name: Men & Women
*/
?>

<?php get_header('shop'); ?>

<style>

.womens .r1-b1 {background: url(<?php echo types_render_field('womens-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.womens .r1-b2 {background: url(<?php echo types_render_field('womens-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.womens .r1-b3 {background: url(<?php echo types_render_field('womens-1st-row-3rd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.womens .r2-b1 {background: url(<?php echo types_render_field('womens-2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.womens .r2-b2 {background: url(<?php echo types_render_field('womens-2nd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}

.mens .r1-b1 {background: url(<?php echo types_render_field('mens-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.mens .r1-b2 {background: url(<?php echo types_render_field('mens-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.mens .r1-b3 {background: url(<?php echo types_render_field('mens-1st-row-3rd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.mens .r2-b1 {background: url(<?php echo types_render_field('mens-2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.mens .r2-b2 {background: url(<?php echo types_render_field('mens-2nd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}

</style>


<section class="hero men-and-women row">
<div class="container">

<div class="superwidth">

<div class="womens">
<a href="#" class="women">
  <h1>Women</h1>
  <span class="icon icon-arrow-left"></span>
  <div class="links">
    A link<br>
    A link<br>
    A link<br>
    A link<br>
    A link<br>
    A link<br>
  </div>
</a>
</div>
<div class="mens">
<a href="#" class="men">
  <span class="icon icon-arrow-right"></span>
  <h1>Men</h1>
  <div class="links">
    A link<br>
    A link<br>
    A link<br>
    A link<br>
    A link<br>
    A link<br>
  </div>
</a>
</div>

</div>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->

<section class="main men-and-women row woocommerce">
<div class="container">

<div class="superwidth">

<div class="womens">

<div class="col span12_4">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('womens-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('womens-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('womens-1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('womens-1st-row-1st-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('womens-1st-row-1st-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('womens-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('womens-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('womens-1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('womens-1st-row-2nd-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('womens-1st-row-2nd-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r1-b3">
<a class="vert-align" href="<?php echo types_render_field('womens-1st-row-3rd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('womens-1st-row-3rd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('womens-1st-row-3rd-box-description'); ?></p>
<?php if  (types_render_field('womens-1st-row-2nd-3rd-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('womens-1st-row-2nd-3rd-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r2-b1">
<a class="vert-align" href="<?php echo types_render_field('womens-2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('womens-2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('womens-2nd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('womens-2nd-row-1st-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('womens-2nd-row-1st-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_8 last">

<div class="panel r2-b2">
<a class="vert-align" href="<?php echo types_render_field('womens-2nd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('womens-2nd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('womens-2nd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('womens-2nd-row-2nd-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('womens-2nd-row-2nd-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<div class="col span12_12 products-womens">
<?php echo do_shortcode( '[featured_product_categories cats="38" per_cat="6" columns="5"]' ); ?>
<?php wp_reset_query(); ?>
</div>

</div> <!-- .womens -->


<div class="mens">

<div class="col span12_4">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('mens-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('mens-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('mens-1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('mens-1st-row-1st-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('mens-1st-row-1st-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('mens-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('mens-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('mens-1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('mens-1st-row-2nd-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('mens-1st-row-2nd-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r1-b3">
<a class="vert-align" href="<?php echo types_render_field('mens-1st-row-3rd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('mens-1st-row-3rd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('mens-1st-row-3rd-box-description'); ?></p>
<?php if  (types_render_field('mens-1st-row-2nd-3rd-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('mens-1st-row-2nd-3rd-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r2-b1">
<a class="vert-align" href="<?php echo types_render_field('mens-2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('mens-2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('mens-2nd-row-1st-box-description'); ?></p>
<?php if  (types_render_field('mens-2nd-row-1st-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('mens-2nd-row-1st-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_8 last">

<div class="panel r2-b2">
<a class="vert-align" href="<?php echo types_render_field('mens-2nd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('mens-2nd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('mens-2nd-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('mens-2nd-row-2nd-box-cta') !== '') { ?>
<span class="btn"><?php echo types_render_field('mens-2nd-row-2nd-box-cta'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<div class="col span12_12 products-womens">
<?php echo do_shortcode( '[featured_product_categories cats="39" per_cat="6" columns="5"]' ); ?>
<?php wp_reset_query(); ?>
</div>

</div> <!-- .mens -->

</div> <!-- .superwidth -->


</div> <!-- / .container -->
</section> <!-- / .row .main -->



<section class="about-video row">
<div class="container">

<div class="col span12_7 centered">

<?php
$post_id = 246;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>
<?php wp_reset_query(); ?>

<a href="<?php bloginfo('url'); ?>/category/videos/" class="mini-link right video-link">All Videos <span class="icon icon-plus"></span></a>

</div>

</div> <!-- / .container -->
</section> <!-- / .row .about-video -->


<?php get_footer('shop'); ?>