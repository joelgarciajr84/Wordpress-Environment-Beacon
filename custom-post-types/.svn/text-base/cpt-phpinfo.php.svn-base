<?php
// Create phpinfo post type
add_action( 'init', 'register_cpt_phpinfo' );

function register_cpt_phpinfo() {

$labels = array( 
    'name' => _x( '', ''),
    'singular_name' => _x( '',''),
    'add_new' => _x('',''),
    'add_new_item' => _x('',''),
    'edit_item' => _x('',''),
    'new_item' => _x('',''),
    'view_item' => _x( '','' ),
    'search_items' => _x( 'Search','' ),
    'not_found' => _x( 'Nothing Found','' ),
    'not_found_in_trash' => _x( 'Nothing Found','' ),
    'parent_item_colon' => _x( 'Host Infos','' ),
    'menu_name' => _x( 'php info','' ),

);

$args = array( 
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'Show php info',
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
  'All Php Settings from this Server',
  'phpinfo_inner_meta_box',
  'phpinfo',
  'normal'
);
}
 
function phpinfo_inner_meta_box( $phpinfo ) {
 phpinfo();

}
?>