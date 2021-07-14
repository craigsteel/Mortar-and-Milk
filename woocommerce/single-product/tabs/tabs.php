<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see   https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

  <div class="woocommerce-tabs wc-tabs-wrapper">
    <ul class="accordion-menu animated">

    <?php
      $id = 0;
      foreach ( $tabs as $key => $tab ) : ?>
      <li><input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $id; ?>" class="hidden"><span class="icon icon-arrow-down"></span><label for="<?php echo $id; ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></label><div class="accordion-menu-item">
            <?php call_user_func( $tab['callback'], $key, $tab ); ?>
      </div></li>
    <?php 
    $id++;
    endforeach; ?>
    </ul> <!-- accordion-menu -->
  </div>

<?php endif; ?>

