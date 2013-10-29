<?php
// Create phpinfo post type
add_action( 'init', 'register_cpt_phpinfo' );

function register_cpt_phpinfo() {

$labels = array( 
    'name' => __('','wpeb'),
    'singular_name' => __('','wpeb'),
    'add_new' => __('','wpeb'),
    'add_new_item' => __('','wpeb'),
    'edit_item' => __('','wpeb'),
    'new_item' => __('','wpeb'),
    'view_item' => __('','wpeb'),
    'search_items' =>__('Search','wpeb'),
    'not_found' => __('Nothing Found','wpeb'),
    'not_found_in_trash' =>__('Nothing Found','wpeb'),
    'parent_item_colon' => __('Host Infos','wpeb'),
    'menu_name' => __('PHP Info','wpeb'),

);

$args = array( 
    'labels' => $labels,
    'hierarchical' => true,
    'description' => __('Show PHP Info','wpeb'),
    'supports' => array( ''),
    'taxonomies' => array( ''),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'phpinfo',
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'phpinfo', $args );
}
?>
<?php
// metabox to show phpinfo()

add_action( 'add_meta_boxes', 'phpinfo_add_meta_box' );
 
function phpinfo_add_meta_box() {
add_meta_box(
  'phpinfo_metaboxid',
  __('All Php Settings from this Server','wpeb'),
  'phpinfo_inner_meta_box',
  'phpinfo',
  'normal'
);
}
 
function phpinfo_inner_meta_box( $phpinfo ) {
 phpinfo();

}
?>