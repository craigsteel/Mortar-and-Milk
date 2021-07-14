<?php
/*
Template Name: Magazine
*/
?>

<?php get_header(); ?>

<style>

.hero {background: #ccc url(<?php echo img; ?>) no-repeat center center; background-size: cover;}
.feature-slot {background: url(<?php echo types_render_field('shop-feature-slot-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
</style>

<section class="categories row">
<div class="container">

<h2>Categories</h2>
<ul class="categories">
  <?php wp_list_categories('title_li='); ?>
</ul>


 <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>

</div> <!-- / .container -->
</section> <!-- / .row.categories -->


<section class="main row">
<div class="container">

<?php
// OTHER FEATURED POSTS 
// -------------------------------------------------------------- ?> 


<div class="col span12_8">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>
<?php the_post_thumbnail(); ?>
<header>  
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<small>Published on <?php echo get_the_date('l j F Y'); ?></small>
</header>
 <p><?php the_excerpt(); ?></p>
<?php wp_link_pages(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" class="btn">Read more</a>
</article>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div>


<?php
// TOP SIDEBAR 
// -------------------------------------------------------------- ?> 

<div class="col span12_4 last">

<h2>Most Recent</h2>
<?php
  query_posts( array(

    'posts_per_page' => 6,

  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="most-recent">
<div class="col span12_6">
<?php the_post_thumbnail('thumbnail'); ?>
</div>
<div class="col span12_6 last">
<?php the_category( ' ' ); ?>

<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<small><?php echo get_the_date('l j F Y'); ?></small>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div>

</div> <!-- .main -->

</div> <!-- / .container -->
</section> <!-- / .row .main -->


<?php get_footer(); ?>