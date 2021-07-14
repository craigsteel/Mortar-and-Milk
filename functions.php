<?php


/***************************************************
Soil Plugin
***************************************************/

// Cleaner WordPress markup
add_theme_support('soil-clean-up');

// Disable asset versioning
// add_theme_support('soil-disable-asset-versioning');

// Disable trackbacks
// add_theme_support('soil-disable-trackbacks');

// Google Analytics (more info)
// add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');

// Load jQuery from the jQuery CDN
// add_theme_support('soil-jquery-cdn');

// Move all JS to the footer
// add_theme_support('soil-js-to-footer');

// Cleaner walker for navigation menus
add_theme_support('soil-nav-walker');

// Convert search results from /?s=query to /search/query/
add_theme_support('soil-nice-search');

// Root relative URLs
// add_theme_support('soil-relative-urls');


function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 120);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = $excerpt.'...';
return $excerpt;
}

/*************************************************/

// Move product tabs
 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20);


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 50 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 55 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 70 );


 
 // Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 5; // 3 products per row
	}
}

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 20;' ), 20 );

/***************************************************/


add_action( 'wp_enqueue_scripts', 'wcqib_enqueue_polyfill' );
function wcqib_enqueue_polyfill() {
    wp_enqueue_script( 'wcqib-number-polyfill' );
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


add_filter( 'tablepress_use_default_css', '__return_false' );

add_filter("gform_confirmation_anchor", create_function("","return true;"));


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<p>This page is reserved for members. To view, please enter the password:</p>
    <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="protected">
    <input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" />
    <input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

function the_title_trim($title) {
	$title = esc_attr($title);
	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);
	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');


add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}


	/*	Add support for editor-style.css
-------------------------------------------------------------- */
	// add_editor_style();
	

	/*	Add support for post-thumbnails
-------------------------------------------------------------- */
	add_theme_support( 'post-thumbnails' );


/*	Register menus and widgets
-------------------------------------------------------------- */
register_nav_menus( array( 'primary' => __( 'Primary Navigation' ), 'top' => __( 'Top Navigation' ), 'footer-main' => __( 'Footer Main Navigation' ), 'footer-service' => __( 'Footer Service Navigation' ), ) );
	
	register_sidebar( array(
		'name' => __( 'Pages Sidebar Widget Area'),
		'id' => 'pages-sidebar-widget-area',
		'description' => __( 'Appears in the sidebar on pages' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Posts Sidebar Widget Area'),
		'id' => 'posts-sidebar-widget-area',
		'description' => __( 'Appears in the sidebar on posts' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => __('Footer Widget Area'),
		'id' => 'footer-widget-area',
		'description' => __( 'Appears in the footer area at the bottom of the page' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		
		
		
/* WIDGET: SJWP Child Pages Menu
/* List child pages or siblings if has parent with children
-------------------------------------------------------------- */
	class SJWPChildPages extends WP_Widget {
		function SJWPChildPages() {
			$options = array('classname' => 'widget-child-pages', 'description' => 'Get a list of the child pages from the current page.');
			parent::__construct(false, $name = 'SJWP: Proper Pages Menu', $options);
		}

		function widget($args, $instance){
			global $post;
			extract($args);

			if($post->post_parent):
				$ancestors=get_post_ancestors($post->ID);
				$root=count($ancestors)-1;
				$postID = $ancestors[$root];
			else:
				$postID = $post->ID;
			endif;

			$wlp_args = array(
				'child_of' => $postID,
				'title_li' => __('<h3 class="widget-title">'.get_the_title($post->post_parent).'</h3>'),
				'echo' => 0,
			);
			$wp_list_pages = wp_list_pages($wlp_args);

			if($wp_list_pages):
				print $before_widget;
				print '<ul>';
				print $wp_list_pages;
				print '</ul>';
				print $after_widget;
			endif;
		}
	}

	add_action('widgets_init', create_function('', 'return register_widget("SJWPChildPages");'));




/*	Tidy up wp_head
-------------------------------------------------------------- */
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'locale_stylesheet' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
	// remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

	function remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
	add_action( 'widgets_init', 'remove_recent_comments_style' );



function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' ); // wp_enqueue_scripts action hook to link only on the front-end





/*	Hide admin menu items
-------------------------------------------------------------- */
	function hide_menus() {
		echo '<style>#menu-comments { display: none; }</style>';
	}
	
add_action('admin_head', 'hide_menus');
	

/*	Fix gallery styles
-------------------------------------------------------------- */
	add_filter('gallery_style',
		create_function(
			'$css',
			'return preg_replace("#<style type=\'text/css\'>(.*?)</style>#s", "", $css);'
			)
		);

	function html5_gallery($content) {
		//remove space between [ and gallery in the following line
		return str_replace('[gallery', '[gallery itemtag="div" icontag="span" captiontag="p"', $content);
	}

	add_filter('the_content', 'html5_gallery');
	
	function fix_gallery_output( $output ) {
		$output = preg_replace("%<br style=.*clear: both.* />%", "", $output);
		return $output;
	}

	add_filter('the_content', 'fix_gallery_output',11, 1);







// Make the thumbnails link to the 'large' image rather than a Page with the medium sized image
	/*
	function attachment_link( $link, $id ) {
		// The lightbox doesn't function inside feeds obviously, so don't modify anything
		if ( is_feed() || is_admin() )
			return $link;

		$post = get_post( $id );

		if ( 'image/' == substr( $post->post_mime_type, 0, 6 ) )
			return wp_get_attachment_image_src( $id, "large" )[0];
		else
			return $link;
	}
	*/





?>