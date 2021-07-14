<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

<style>
.r1-b1 {background: url(<?php echo types_render_field('events-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b2 {background: url(<?php echo types_render_field('events-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
</style>

<?php
// FEATURED BANNER
// -------------------------------------------------------------- ?> 
<section class="featured-hero featured-events row">
 
<div class="featured">
<div class="cd-image-block">
  <ul class="cd-images-list">

    <?php
     query_posts( array(
      'post_type' => 'event',
      'posts_per_page' => 3,
      'meta_key' => 'wpcf-featured-post',
      'meta_value' => 1
      ) );
     if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <li style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) no-repeat center center; background-size: cover;">
      <a href="#0">
       
        
      </a>
    </li>
    <?php endwhile; ?> <?php wp_reset_query(); ?>

  </ul> <!-- .cd-images-list -->
</div> <!-- .cd-image-block -->

<div class="cd-content-block">
  <ul>

   <?php
     query_posts( array(
      'post_type' => 'event',
      'posts_per_page' => 3,
      'meta_key' => 'wpcf-featured-post',
      'meta_value' => 1
      ) );
     if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    

      <li>
        
      <div class="is-centered">
        <h2><?php the_title(); ?></h2>
        
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
      </div> 
    </li>
    <?php endwhile; ?> <?php wp_reset_query(); ?>

  </ul>

  <button class="cd-close">Close</button>
</div> <!-- .cd-content-block -->

<ul class="block-navigation">
  <li><button class="cd-prev inactive"><span class="icon icon-arrow-left"></span> Prev</button></li>
  <li><button class="cd-next">Next <span class="icon icon-arrow-right"></span></button></li>
</ul> <!-- .block-navigation -->

</div> <!-- .featured -->


</section> <!-- / .row.hero -->


<section class="main row">
<div class="container">


<?php while (have_posts()) : the_post(); ?>

<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php endwhile; ?>

</div> <!-- / .container -->
</section> <!-- / .row .main -->


<section class="main row">
<div class="container">

<?php
// OTHER FEATURED POSTS 
// -------------------------------------------------------------- ?> 


<h2>Forthcoming Events</h2>


<div class="col span12_4">
<?php
  query_posts( array(
    'post_type' => 'event',
    'posts_per_page' => 1,
    
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="panel event-1" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important;">
<a class="vert-align" href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<small><?php the_excerpt(); ?></small>
<span class="btn">Read More</span>
</a>
</div>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div>  <!-- / .col -->


<div class="col span12_4">
<?php
  query_posts( array(
    'post_type' => 'event',
    'posts_per_page' => 1,
    'offset' => 2
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="panel event-2" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important;">
<a class="vert-align" href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<small><?php the_excerpt(); ?></small>
<span class="btn">Read More</span>
</a>
</div>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div>  <!-- / .col -->


<div class="col span12_4 last">
<?php
  query_posts( array(
    'post_type' => 'event',
    'posts_per_page' => 1,
    'offset' => 3
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="panel event-3" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important;">
<a class="vert-align" href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<small><?php the_excerpt(); ?></small>
<span class="btn">Read More</span>
</a>
</div>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div> <!-- / .col -->



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


<section class="events-extras row">
<div class="container">

<h2 class="lighter">Mortar &amp; Milk Magazine</h2>
<div class="col panels span12_4">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('events-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('events-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('events-1st-row-1st-box-description'); ?></p>
<?php if  (types_render_field('events-1st-row-1st-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('events-1st-row-1st-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>
<div class="col panels span12_8 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('events-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('events-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('events-1st-row-2nd-box-description'); ?></p>
<?php if  (types_render_field('events-1st-row-2nd-box-call-to-action') !== '') { ?>
<span class="btn"><?php echo types_render_field('events-1st-row-2nd-box-call-to-action'); ?></span>
<?php } ?>
</a>
</div> <!-- / .panel -->

</div>

<a href="<?php bloginfo('url'); ?>/magazine/" class="mini-link right">Our Magazine <span class="icon icon-plus"></span></a>

</div> <!-- / .container -->
</section> <!-- / .row .evetns-extras -->


<?php get_footer(); ?>