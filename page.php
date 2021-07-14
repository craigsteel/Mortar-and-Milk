<?php get_header(); ?>


<section class="hero rev grey-bkg no-header row">
<div class="container">

<?php if (is_cart()) { ?>
<h1>Cart</h1>
<?php } elseif (is_checkout()) { ?>
<h1>Checkout</h1>
<?php } elseif (is_shop()) { ?>
<h1>Shop</h1>
<?php } else { ?>
<h1><?php the_title(); ?></h1>
<?php } ?>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->


<section class="main row">
<div class="container">


<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>


</div> <!-- / .container -->
</section> <!-- / .row .main -->

<?php if (is_page(60)) { ?>
<section class="booking-form row">
<div class="container">

<div class="col span12_10 centered">
<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
</div>

</div> <!-- / .container -->
</section>
<?php } ?>


<?php get_footer(); ?>