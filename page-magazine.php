<?php
/*
Template Name: Magazine
*/
?>

<?php get_header(); ?>

<?php
// FEATURED BANNER
// -------------------------------------------------------------- ?> 
<section class="featured-hero row">
 
<div class="featured">
<div class="cd-image-block">
  <ul class="cd-images-list">

    <?php
     query_posts( array(
      'cat' => -18,
      'posts_per_page' => 3,
      'meta_key' => 'wpcf-featured-post',
      'meta_value' => 1
      ) );
     if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <li style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) no-repeat center center; background-size: cover;">
      <a href="#0">
        <?php
          foreach((get_the_category()) as $category) { ?>
          <span class="category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
        <?php } ?>
        
      </a>
    </li>
    <?php endwhile; ?> <?php wp_reset_query(); ?>

  </ul> <!-- .cd-images-list -->
</div> <!-- .cd-image-block -->

<div class="cd-content-block">
  <ul>

   <?php
     query_posts( array(
      'cat' => -18,
      'posts_per_page' => 3,
      'meta_key' => 'wpcf-featured-post',
      'meta_value' => 1
      ) );
     if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
    <?php
          foreach((get_the_category()) as $category) { ?>
          <li class="cat-item-<?php echo $category->term_id; ?>">
        <?php } ?>
      <div class="is-centered">
        <h2><?php the_title(); ?></h2>
        <small>By <?php the_author(); ?> | <?php echo get_the_date('l j F Y'); ?></small>
        <p><?php echo get_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
      </div> 
    </li>
    <?php endwhile; ?> <?php wp_reset_query(); ?>

  </ul>

  <button class="cd-close">Close</button>
</div> <!-- .cd-content-block -->

<ul class="block-navigation">
  <li><button class="cd-prev inactive"><span class="icon icon-arrow-left"></span> Prev Article</button></li>
  <li><button class="cd-next">Next Article<span class="icon icon-arrow-right"></span></button></li>
</ul> <!-- .block-navigation -->

</div> <!-- .featured -->


</section> <!-- / .row.hero -->


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

<?php
// OTHER FEATURED POSTS 
// -------------------------------------------------------------- ?> 


<div class="col span12_8">
<h2>Featured</h2>
<?php
  query_posts( array(

    'posts_per_page' => 2,
    'meta_key' => 'wpcf-featured-post',
    'meta_value' => 1,
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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
<?php wp_reset_query(); ?>

<div class="col span12_6 nested">
<?php
  query_posts( array(

    'posts_per_page' => 1,
    'meta_key' => 'wpcf-featured-post',
    'meta_value' => 1,
    'offset' => 2

  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>
<?php the_post_thumbnail('thumbnail'); ?>
<?php
  foreach((get_the_category()) as $category) { ?>
  <span class="overlay category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>
<header>  
<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<small>By <?php the_author(); ?> | <?php echo get_the_date('l j F Y'); ?></small>
</header>
 <p><?php the_excerpt(); ?></p>
<?php wp_link_pages(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" class="btn">Read more</a>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div>
<div class="col span12_6 nested last">
<?php
  query_posts( array(
   'posts_per_page' => 1,
    'meta_key' => 'wpcf-featured-post',
    'meta_value' => 1,
    'offset' => 3
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>
<?php the_post_thumbnail('thumbnail'); ?>
<?php
  foreach((get_the_category()) as $category) { ?>
  <span class="overlay category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>
<header>  
<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<small>By <?php the_author(); ?> | <?php echo get_the_date('l j F Y'); ?></small>
</header>
 <p><?php the_excerpt(); ?></p>
<?php wp_link_pages(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" class="btn">Read more</a>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

</div>

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
<?php
          foreach((get_the_category()) as $category) { ?>
          <span class="category cat-item-<?php echo $category->term_id; ?>"><span class="cat-name"><?php echo $category->cat_name; ?></span></span>
<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
<small><?php echo get_the_date('l j F Y'); ?></small>
</article>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>

<div class="follow">
<h2>Follow</h2>
  <a href="https://www.facebook.com/mortarandmilk/"><span class="icon icon-facebook"></span></a>
  <a href="https://twitter.com/mortarandmilk"><span class="icon icon-twitter"></span></a>
</div>

<div class="panel" style="margin-top: 3rem; background: url(<?php bloginfo(url) ?>/wp-content/uploads/Group_Pic_Crop_Type_MG_8809.jpg) no-repeat center center; background-size: cover;">
<a class="vert-align" href="<?php bloginfo(url) ?>/about-us">
<h3>Our Story</h3>
<p class="desc">Making a Difference</p>
<span class="btn">Read More</span>
</a>
</div> <!-- / .panel -->

<div class="beauty-trust">
<div class="border">

<img src="<?php bloginfo(url) ?>/wp-content/themes/sjdwp/assets/img/Mortar_And_Milk_Logo.svg">

<h3>The Beauty of Trust</h3>
<p>A beauty concept store creating lasting relationships with our customers. Sign up for our weekly edit of exclusive offers you won’t want to miss</p>
  <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
    <form action="http://mortarandmilk.us12.list-manage.com/subscribe/post?u=4401e664ee7f01ff1919ce7a9&amp;id=175231e199" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>

        <div id="mc_embed_signup_scroll" class="input">
        <input type="email" value="" placeholder="Enter your email" name="EMAIL" class="required email" id="mce-EMAIL">
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4401e664ee7f01ff1919ce7a9_175231e199" tabindex="-1" value=""></div>
          <button id="mc-embedded-subscribe" class="search-submit"><span class="icon icon-arrow-right"></span></button>
        </div>
    </form>
    </div>
    
  <!--End mc_embed_signup-->
</div>
</div>



</div>



</div> <!-- / .container -->
</section> <!-- / .row .main -->

<section class="product-slider row">
<div class="container">

<h3>New Products</h3>
<?php echo do_shortcode('[recent_products per_page="5" columns="5"]'); ?>
<a href="<?php bloginfo('url'); ?>/shop/" class="mini-link right">All Products <span class="icon icon-plus"></span></a>

</div> <!-- / .container -->
</section> <!-- / .row .product-slider -->


<section class="videos row">
<div class="container">

<h2>Videos</h2>

<div class="col span12_7">
<?php
$post_id = 246;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>
<?php wp_reset_query(); ?>

</div>
<div class="col span12_4 push12_1 last">
  <?php
  query_posts( array(
    'cat' => 18,
    'posts_per_page' => 2,
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
</div>

</div>
</section>

<section class="editors-choice row">
<div class="container">

<h2>Editor's Choice</h2>

<?php
  query_posts( array(
    'cat' => -18,
    'posts_per_page' => 6,
    'meta_key' => 'wpcf-editors-choice',
    'meta_value' => 1
  ) );
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="col span12_4">

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

</div>

<?php endwhile; ?> 
<?php wp_reset_query(); ?>
 
 

</div>
</section>



<?php get_footer(); ?>