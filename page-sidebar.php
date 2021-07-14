<?php
/*
Template Name: Two Thirds, with sidebar
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

<div class="main-content col span12_8">

<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php endwhile; ?>

</div> <!-- / .main-content -->


<aside class="sidebar col span12_4 last">

<?php get_sidebar('page'); ?>

</aside> <!-- / .sidebar -->

</div> <!-- / .container -->
</section> <!-- / .main.row -->


<?php if(!empty(types_render_field('call-to-action', array('raw'=>'true')))) { ?>
<section class="call-to-action row">
<div class="container">

<?php echo types_render_field('call-to-action'); ?>

</div> <!-- / .container -->
</section> <!-- / .call-to-action.row -->
<?php } ?>


<?php get_footer(); ?>