<?php get_header(); ?>


<section class="main row">
<div class="container">

<div class="main-content">

<?php while ( have_posts() ) : the_post(); ?>

<nav class="posts-nav">
<p class="previous-link"><?php previous_image_link( false, '&larr; Previous Image' ); ?></p>
<p class="next-link"><?php next_image_link( false, 'Next Image &rarr;' ); ?></p>
</nav>

<h1 class="entry-title"><?php the_title(); ?></h1>

<?php
/**
* Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
* or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
*/
$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
foreach ( $attachments as $k => $attachment ) :
if ( $attachment->ID == $post->ID )
	break;
endforeach;

$k++;
// If there is more than 1 attachment in a gallery
if ( count( $attachments ) > 1 ) :
if ( isset( $attachments[ $k ] ) ) :
	// get the URL of the next image attachment
	$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
else :
	// or get the URL of the first image attachment
	$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
endif;
else :
// or, if there's only 1 image, get the URL of the image
$next_attachment_url = wp_get_attachment_url();
endif;
?>

<a href="<?php echo esc_url( $next_attachment_url ); ?>" title="<?php the_title_attribute(); ?>" rel="attachment">
<?php // echo wp_get_attachment_image( $post->ID ); ?>
<?php echo wp_get_attachment_image( $post->ID,  $size='large' ); ?>
</a>

<?php if ( ! empty( $post->post_excerpt ) ) : ?>
<?php the_excerpt(); ?>
<?php endif; ?>

<?php the_content(); ?>
<?php the_excerpt(); ?>
<?php wp_link_pages(); ?>

<nav class="posts-nav">
<p class="previous-link"><?php previous_image_link( false, '&larr; Previous Image' ); ?></p>
<p class="next-link"><?php next_image_link( false, 'Next Image &rarr;' ); ?></p>
</nav>

<?php endwhile; ?>

</div> <!-- / .main-content -->

</div> <!-- / .container -->
</section> <!-- / .row.main -->


<?php get_footer(); ?>