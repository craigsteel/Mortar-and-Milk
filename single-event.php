<?php get_header(); ?>


<section class="hero row">
<div class="container blog-hero"  style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) no-repeat center center; background-size: cover;">



<div class="roundel-white no-circle is-centered">
          <span class="vert-align">
          <h1><?php the_title(); ?></h1>
 <small><?php echo get_the_date('l j F Y'); ?></small>
          </span>
          </div>


		
</div> <!-- / .container -->
</section> <!-- / .row.hero -->

 
<?php if (have_posts()) : ?> 
<?php while (have_posts()) : the_post(); ?>

<section class="main">
<div class="container">

<nav class="posts-nav">
<p class="previous-link"><?php previous_post_link('<span class="icon icon-arrow-left"></span> %link'); ?></p>
<p class="next-link"><?php next_post_link('%link <span class="icon icon-arrow-right"></span>'); ?></p>
</nav>


<div class="main-content col span12_8">

<article>
<p><?php the_content(); ?></p>
<?php wp_link_pages(); ?>

<div class="share-links">
   <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><span class="icon icon-facebook"></span></a><a href="http://twitter.com/share?url=<?php the_permalink(); ?>"><span class="icon icon-twitter"></span></a>
</div>

</article>


</div> <!-- / .main-content -->


<aside class="sidebar col span12_4 last">

<h2>Other Events</h2>
<?php
  query_posts( array(
    'post_type' => 'event',
    'posts_per_page' => 6,
  ) );
  
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="most-recent">
<div class="col span12_6">
<?php the_post_thumbnail('thumbnail'); ?>
</div>
<div class="col span12_6 last">
<?php
          foreach((get_the_category()) as $category) { ?>
          <span class="category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
<small><?php the_excerpt(); ?></small>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</aside> <!-- / .sidebar -->


</div> <!-- / .container -->
</section> <!-- / .row.main -->
<?php endwhile; ?>  
<?php endif; ?>


<?php get_footer(); ?>