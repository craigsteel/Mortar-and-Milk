<?php
/*
Template Name: Treatments
*/
?>

<?php get_header(); ?>

<section class="hero row">
<div class="container">


  <div class="hide-mobile">
    <div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) center center no-repeat !important; background-size: cover  !important; padding: 1rem;">

        <div>
        
          <div class="roundel-clear is-centered">
          <span class="vert-align">
          <h1><?php the_title(); ?></h1>
          </span>
          </div>

        </div>

    </div>

</div>
    <div class="hide-desktop">


          <h1 style="color: #424242;"><?php echo the_title(); ?></h1>


</div>

 <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<section class="main row">
<div class="container">

<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php endwhile; ?>

</div> <!-- / .container -->
</section> <!-- / .row .main -->


<section class="booking-header row" id="booking">
<div class="container">

<h2>Treatment Request</h2>
<p>If you are interested in having a treatment, please give us a call at 020 7731 3415, or fill in the details below and we will get back to shortly.</p>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<section class="booking-form row">
<div class="container">

<div class="col span12_10 centered">
<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
</div>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<?php get_footer(); ?>