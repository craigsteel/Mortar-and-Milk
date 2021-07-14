<?php
/*
Template Name: Grid Demo
*/
?>

<?php get_header(); ?>


<section class="hero row">
<div class="container">

<h1><?php the_title(); ?></h1>
<?php echo types_render_field('page-intro'); ?>

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

<section class="main row show-grid">

  <div class="block half">block half</div><div class="block half">block half</div>
  
  <div class="block third">block third</div><div class="block third">block third</div><div class="block third">block third</div>
  
  <div class="block quarter">block quarter</div><div class="block quarter">block quarter</div><div class="block quarter">block quarter</div><div class="block quarter">block quarter</div>
  
  <div class="block third">block third</div><div class="block twothirds">block twothirds</div>
  
  <div class="block quarter">block quarter</div><div class="block threequarters">block threequarters</div>


</section>


<?php if(!empty(types_render_field('call-to-action', array('raw'=>'true')))) { ?>
<section class="call-to-action">
<div class="container">

<?php echo types_render_field('call-to-action'); ?>

</div> <!-- / .container -->
</section> <!-- / .call-to-action -->
<?php } ?>


<?php get_footer(); ?>