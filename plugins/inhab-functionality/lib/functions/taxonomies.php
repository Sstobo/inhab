<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Register Custom Taxonomy
function inhab_tax_product_type() {
  
    $labels = array(
      'name'                       => 'Product Types',
      'singular_name'              => 'Product Type',
      'menu_name'                  => 'Product Type',
      'all_items'                  => 'All Product Types',
      'parent_item'                => 'Parent Product',
      'parent_item_colon'          => 'Parent Product :',
      'new_item_name'              => 'New Product Name',
      'add_new_item'               => 'Add New Product',
      'edit_item'                  => 'Edit Product',
      'update_item'                => 'Update Product',
      'view_item'                  => 'View Product',
      'separate_items_with_commas' => 'Separate Products with commas',
      'add_or_remove_items'        => 'Add or remove Products',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular Products',
      'search_items'               => 'Search Products',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No Products',
      'items_list'                 => 'Products list',
      'items_list_navigation'      => 'Products list navigation',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'product-type', array( 'product' ), $args );
  
  }
  add_action( 'init', 'inhab_tax_product_type', 0 );