<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>


	<?php
/*
Template Name: Shop Page
*/
?>

<style>
.hero {background: url(<?php echo img; ?>) no-repeat center center; background-size: cover;}
.r1-b1 {background: url(<?php echo types_render_field('shops-1st-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b2 {background: url(<?php echo types_render_field('shops-1st-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r1-b3 {background: url(<?php echo types_render_field('shops-2nd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r2-b1 {background: url(<?php echo types_render_field('shops-2nd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b1 {background: url(<?php echo types_render_field('shops-3rd-row-1st-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
.r3-b2 {background: url(<?php echo types_render_field('shops-3rd-row-2nd-box-image', array('raw'=>'true')); ?>) no-repeat center center; background-size: cover;}
</style>


<section class="hero row">
<div class="container">

<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>

</div> <!-- / .container -->
</section> <!-- / .row.hero -->




<section class="product-slider row">
<div class="container">

<h1>Products Slider Here</h1>

</div> <!-- / .container -->
</section> <!-- / .row .product-slider -->



<section class="main row">
<div class="container">

<div class="col span12_8">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-1st-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-1st-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-1st-row-1st-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-1st-row-1st-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-1st-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-1st-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-1st-row-2nd-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-1st-row-2nd-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-2nd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-2nd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-2nd-row-1st-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-2nd-row-1st-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_8 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-2nd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-2nd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-2nd-row-2nd-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-2nd-row-2nd-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_8">

<div class="panel r1-b1">
<a class="vert-align" href="<?php echo types_render_field('shops-3rd-row-1st-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-3rd-row-1st-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-3rd-row-1st-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-3rd-row-1st-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>
<div class="col span12_4 last">

<div class="panel r1-b2">
<a class="vert-align" href="<?php echo types_render_field('shops-3rd-row-2nd-box-url', array('raw'=>'true')); ?>">
<h3><?php echo types_render_field('shops-3rd-row-2nd-box-title'); ?></h3>
<p class="desc"><?php echo types_render_field('shops-3rd-row-2nd-box-description'); ?></p>
<span class="btn"><?php echo types_render_field('shops-3rd-row-2nd-box-call-to-action'); ?></span>
</a>
</div> <!-- / .panel -->

</div>

<div class="divider"></div>

</div> <!-- / .container -->
</section> <!-- / .row .main -->


<?php get_footer( 'shop' ); ?>
