<?php 

// Register Custom Post Type
function speakers_custom_post_type() {
  
  $labels = array(
  'name'                  => _x( 'Speakers', 'Post Type General Name', 'gui-customers' ),
  'singular_name'         => _x( 'Speaker', 'Post Type Singular Name', 'gui-customers' ),
  'menu_name'             => __( 'Speakers', 'gui-customers' ),
  'name_admin_bar'        => __( 'Film', 'gui-customers' ),
  'archives'              => __( 'Item Archives', 'gui-customers' ),
  'attributes'            => __( 'Item Attributes', 'gui-customers' ),
  'parent_item_colon'     => __( 'Parent Item:', 'gui-customers' ),
  'all_items'             => __( 'All Speakers', 'gui-customers' ),
  'add_new_item'          => __( 'Add new Speaker', 'gui-customers' ),
  'add_new'               => __( 'Add new Speaker', 'gui-customers' ),
  'new_item'              => __( 'New Speaker', 'gui-customers' ),
  'edit_item'             => __( 'Edit Speaker', 'gui-customers' ),
  'update_item'           => __( 'Update Speaker', 'gui-customers' ),
  'view_item'             => __( 'View Speaker', 'gui-customers' ),
  'view_items'            => __( 'View all Speakers', 'gui-customers' ),
  'search_items'          => __( 'Search Speakers', 'gui-customers' ),
  'not_found'             => __( 'Speakers not found', 'gui-customers' ),
  'not_found_in_trash'    => __( 'Not found in Trash', 'gui-customers' ),
  'insert_into_item'      => __( 'Insert into item', 'gui-customers' ),
  'uploaded_to_this_item' => __( 'Uploaded to this item', 'gui-customers' ),
  'items_list'            => __( 'Items list', 'gui-customers' ),
  'items_list_navigation' => __( 'Items list navigation', 'gui-customers' ),
  'filter_items_list'     => __( 'Filter items list', 'gui-customers' ),
  );
  $args = array(
  'label'                 => __( 'Speakers', 'gui-customers' ),
  'menu_icon'           => 'dashicons-microphone',
  'description'           => __( 'Add new Speakers', 'gui-customers' ),
  'labels'                => $labels,
  'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
  'taxonomies'            => array( 'post_tag', 'category' ),
  'hierarchical'          => true,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 10,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => false,
  'can_export'            => true,
  'has_archive'           => false,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'capability_type'       => 'post',
  'show_in_rest' => true,
  'rewrite' => array('slug' => 'speakers','with_front' => false)
  
  );
  register_post_type( 'speakers', $args );
  
  }
  add_action( 'init', 'speakers_custom_post_type', 0 );