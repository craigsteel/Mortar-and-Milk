<?php get_header(); ?>


<section class="hero row">
<div class="container">

<h3>Search Results for &ldquo;<?php echo get_search_query(); ?>&rdquo;</h3>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->



<section class="main row">
<div class="container">

<div class="main-content col span12_8">

<?php if (have_posts()) : ?> 
<?php while (have_posts()) : the_post(); ?>

<article>
<header>  
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<small>Published on <?php echo get_the_date('l j F Y'); ?></small>
</header>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</article>

<?php endwhile; ?>  
<?php endif; ?>

<nav class="posts-nav">
<p class="previous-link"><?php previous_posts_link('<span>&larr;</span> Newer posts'); ?></p>
<p class="next-link"><?php next_posts_link('Older posts <span>&rarr;</span>'); ?></p>
</nav>

</div> <!-- / .main-content -->


<aside class="sidebar col span12_4 last">

<?php get_sidebar('post'); ?>

</aside> <!-- / .sidebar -->

</div> <!-- / .container -->
</section> <!-- / .row.main -->


<?php get_footer(); ?> 	