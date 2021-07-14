<?php get_header(); ?>


<section class="hero row">
<div class="container blog-hero" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) no-repeat center center; background-size: cover;">

<?php
  foreach((get_the_category()) as $category) { ?>
  <span class="overlay category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>

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



<aside class="sidebar sidebar-left col span12_2">

<h4>Author</h4>
<div class="avatar">
<?php echo get_avatar( get_the_author_email(), '92' ); ?>
</div>
<div class="author">
<?php the_author(); ?>
</div>

<a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>/" class="btn">All Articles</a>

<?php get_sidebar('post'); ?>

</aside> <!-- / .sidebar -->

<div class="main-content col span12_8">



<article>
<p><?php the_content(); ?></p>
<?php wp_link_pages(); ?>

<div class="share-links">
   <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><span class="icon icon-facebook"></span></a><a href="http://twitter.com/share?url=<?php the_permalink(); ?>"><span class="icon icon-twitter"></span></a>
</div>

</article>





</div> <!-- / .main-content -->


<aside class="sidebar sidebar-right col span12_2 last">

<h4>Categories</h4>
<ul class="categories">
  <?php wp_list_categories('title_li='); ?>
</ul>

<?php get_sidebar('post'); ?>

</aside> <!-- / .sidebar -->


</div> <!-- / .container -->
</section> <!-- / .row.main -->
<?php endwhile; ?>  
<?php endif; ?>


<?php get_footer(); ?>