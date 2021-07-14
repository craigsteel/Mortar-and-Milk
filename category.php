<?php get_header(); ?>


<section class="categories row">
<div class="container">

<h2>Categories</h2>
<ul class="categories">
  <?php wp_list_categories('title_li='); ?>
</ul>

</div> <!-- / .container -->
</section> <!-- / .row.categories -->


<section class="main row">
<div class="container">

<div class="main-content col span12_8">

<h1>Category: <?php echo single_cat_title('',false); ?></h1>

<?php if ( category_description() ) : ?>
<p><?php echo category_description(); ?></p>
<?php endif; ?>

<?php if (have_posts()) : ?> 
<?php while (have_posts()) : the_post(); ?>

<article>
<?php the_post_thumbnail(); ?>
<?php
  foreach((get_the_category()) as $category) { ?>
  <span class="overlay category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>
<header>  
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<small>By <?php the_author(); ?> | <?php echo get_the_date('l j F Y'); ?></small>
</header>
 <p><?php the_excerpt(); ?></p>
<?php wp_link_pages(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" class="btn">Read more</a>
</article>

<?php endwhile; ?>  
<?php endif; ?>

<nav class="posts-nav">
<p class="previous-link"><?php previous_posts_link('<span>&larr;</span> Newer posts'); ?></p>
<p class="next-link"><?php next_posts_link('Older posts <span>&rarr;</span>'); ?></p>
</nav>

</div> <!-- / .main-content -->


<div class="col span12_4 last">

<h2>Most Recent</h2>


<?php

$cat_name = single_cat_title( '', false );
$cat_id = get_cat_ID ( single_cat_title( '', false ) );

  query_posts( array(
    'cat' => $cat_id,
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
<small><?php echo get_the_date('l j F Y'); ?></small>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

<?php get_sidebar('post'); ?>

</div> <!-- / .sidebar -->

</div> <!-- / .container -->
</section> <!-- / .row.main -->


<?php get_footer(); ?> 