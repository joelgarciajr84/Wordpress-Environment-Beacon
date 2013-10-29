<?php
// Create whoami cpt
add_action( 'init', 'register_cpt_show_status' );

function register_cpt_show_status() {

$labels = array( 
    'name' => __('Enviroment Informations','wpeb'),
    'singular_name' => __('Enviroment Informations','wpeb'),
    'add_new' => __('View current settings of the environment','wpeb'),
    'add_new_item' => __('Enviroment Informations','wpeb'),
    'edit_item' => __('Enviroment Informations','wpeb'),
    'new_item' => __('New/Save - Configuration','wpeb'),
    'view_item' => __('See configuration','wpeb'),
    'search_items' => __('Search','wpeb'),
    'not_found' => __('Nothing Found','wpeb'),
    'not_found_in_trash' => __('Nothing Found','wpeb'),
    'parent_item_colon' => __('Host Infos','wpeb'),
    'menu_name' => __('Enviroment Settings','wpeb')

);

$args = array( 
    'labels' => $labels,
    'hierarchical' => true,
    'description' => __('Show LocalHost Informations','wpeb'),
    'supports' => array( 'title','thumbnail'),
    'taxonomies' => array( 'category'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'host',
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
    register_post_type( 'whoami', $args );
}
?>
<?php
// METABOX TO SHOW RESULTS

add_action( 'add_meta_boxes', 'whoami2_add_meta_box' );
 
function whoami2_add_meta_box() {
add_meta_box(
  'whoami2_metaboxid',
  __('LocalHost Informations','wpeb'),
  'whoami2_inner_meta_box',
  'whoami',
  'normal'
);
}
 
function whoami2_inner_meta_box( $whoami ) {

?>
<p>
  <label for="http_host"><?php _e('HTTP_HOST:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_host" value="<?php if (empty( $whoami->ID['_http_host'] )) echo $_SERVER['HTTP_HOST']; else  echo get_post_meta( $whoami->ID, '_http_host', true ); ?>"/>


</p>
<p>
  <label for="user_agent"><?php _e('HTTP_USER_AGENT:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="user_agent" value="<?php if (empty( $whoami->ID['_user_agent'] )) echo $_SERVER['HTTP_USER_AGENT']; else  echo get_post_meta( $whoami->ID, '_user_agent', true );?>"/>
</p>
<p>
  <label for="php_self"><?php _e('PHP_SELF:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="php_self" value="<?php if (empty( $whoami->ID['_php_self'] )) echo $_SERVER['PHP_SELF']; else  echo get_post_meta( $whoami->ID, '_php_self', true );?>"/>
</p>
<p>
  <label for="gateway_interface"><?php _e('GATEWAY_INTERFACE:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="gateway_interface" value="<?php if (empty( $whoami->ID['_gateway_interface'] )) echo $_SERVER['GATEWAY_INTERFACE']; else  echo get_post_meta( $whoami->ID, '_gateway_interface', true );?>"/>
</p>
<p>
  <label for="server_addr"><?php _e('SERVER_ADDR:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_addr" value="<?php if (empty( $whoami->ID['_server_addr'] )) echo $_SERVER['SERVER_ADDR']; else  echo get_post_meta( $whoami->ID, '_server_addr', true );?>"/>
</p>
<p>
  <label for="server_name"><?php _e('SERVER_NAME:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_name" value="<?php if (empty( $whoami->ID['_server_name'] )) echo $_SERVER['SERVER_NAME']; else  echo get_post_meta( $whoami->ID, '_server_name', true );?>"/>
</p>
<p>
  <label for="server_protocol"><?php _e('SERVER_PROTOCOL:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_protocol" value="<?php if (empty( $whoami->ID['_server_protocol'] )) echo $_SERVER['SERVER_PROTOCOL']; else  echo get_post_meta( $whoami->ID, '_server_protocol', true );?>"/>
</p>
<p>
  <label for="http_accept"><?php _e('HTTP_ACCEPT:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept" value="<?php if (empty( $whoami->ID['_http_accept'] )) echo $_SERVER['HTTP_ACCEPT']; else  echo get_post_meta( $whoami->ID, '_http_accept', true );?>"/>
</p>
<p>
  <label for="http_accept_charset"><?php _e('HTTP_ACCEPT_CHARSET:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept_charset" value="<?php if (empty( $whoami->ID['_http_accept_charset'] )) echo $_SERVER['HTTP_ACCEPT_CHARSET'
]; else  echo get_post_meta( $whoami->ID, '_http_accept_charset', true );?>"/>
</p>
<p>
  <label for="http_accept_encoding"><?php _e('HTTP_ACCEPT_ENCODING:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept_encoding" value="<?php if (empty( $whoami->ID['_http_accept_encoding'] )) echo $_SERVER['HTTP_ACCEPT_ENCODING'
]; else  echo get_post_meta( $whoami->ID, '_http_accept_encoding', true );?>"/>
</p>
<p>
  <label for="http_accept_language"><?php _e('HTTP_ACCEPT_LANGUAGE:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept_language" value="<?php if (empty( $whoami->ID['_http_accept_language'] )) echo $_SERVER['HTTP_ACCEPT_LANGUAGE'
]; else  echo get_post_meta( $whoami->ID, '_http_accept_language', true );?>"/>
</p>
<p>
  <label for="http_accept_connection"><?php _e('HTTP_ACCEPT_CONNECTION:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept_connection" value="<?php if (empty( $whoami->ID['_http_accept_connection'] )) echo $_SERVER['HTTP_ACCEPT_CONNECTION'
]; else  echo get_post_meta( $whoami->ID, '_http_accept_connection', true );?>"/>
</p>
<p>
  <label for="http_accept_referer"><?php _e('HTTP_ACCEPT_REFERER:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_accept_referer" value="<?php if (empty( $whoami->ID['_http_accept_referer'] )) echo $_SERVER['HTTP_REFERER'
]; else  echo get_post_meta( $whoami->ID, '_http_accept_referer', true );?>"/>
</p>
<p>
  <label for="https"><?php _e('HTTPS:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="https" value="<?php if (empty( $whoami->ID['_https'] )) echo $_SERVER['HTTP_REFERER'
]; else  echo get_post_meta( $whoami->ID, '_https', true );?>"/>
</p>
<p>
  <label for="http_remote_addr"><?php _e('HTTP_REMOTE_ADDR:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="http_remote_addr" value="<?php if (empty( $whoami->ID['_http_remote_addr'] )) echo $_SERVER['REMOTE_ADDR'
]; else  echo get_post_meta( $whoami->ID, '_http_remote_addr', true );?>"/>
</p>
<p>
  <label for="remote_port"><?php _e('REMOTE_PORT:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="remote_port" value="<?php if (empty( $whoami->ID['_remote_port'] )) echo $_SERVER['REMOTE_PORT'
]; else  echo get_post_meta( $whoami->ID, '_remote_port', true );?>"/>
</p>
<p>
  <label for="script_filename"><?php _e('SCRIPT_FILENAME:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="script_filename" value="<?php if (empty( $whoami->ID['_script_filename'] )) echo $_SERVER['SCRIPT_FILENAME'
]; else  echo get_post_meta( $whoami->ID, '_script_filename', true );?>"/>
</p>
<p>
  <label for="server_admin"><?php _e('SERVER_ADMIN:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_admin" value="<?php if (empty( $whoami->ID['_server_admin'] )) echo $_SERVER['SERVER_ADMIN'
]; else  echo get_post_meta( $whoami->ID, '_server_admin', true );?>"/>
</p>
<p>
  <label for="server_admin"><?php _e('SERVER_PORT:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_port" value="<?php if (empty( $whoami->ID['_server_port'] )) echo $_SERVER['SERVER_PORT'
]; else  echo get_post_meta( $whoami->ID, '_server_port', true );?>"/>
</p>
<p>
  <label for="server_signature"><?php _e('SERVER_SIGNATURE:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="server_signature" value="<?php if (empty( $whoami->ID['_server_signature'] )) echo $_SERVER['SERVER_SIGNATURE'
]; else  echo get_post_meta( $whoami->ID, '_server_signature', true );?>"/>
</p>
<p>
  <label for="script_name"><?php _e('SCRIPT_NAME:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="script_name" value="<?php if (empty( $whoami->ID['_script_name'] )) echo $_SERVER['SCRIPT_NAME'
]; else  echo get_post_meta( $whoami->ID, '_script_name', true );?>"/>
</p>
<p>
  <label for="request_uri"><?php _e('REQUEST_URI:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="request_uri" value="<?php if (empty( $whoami->ID['_request_uri'] )) echo $_SERVER['REQUEST_URI'
]; else  echo get_post_meta( $whoami->ID, '_request_uri', true );?>"/>
</p>
<p>
  <label for="php_auth_digest"><?php _e('PHP_AUTH_DIGEST:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="php_auth_digest" value="<?php if (empty( $whoami->ID['_php_auth_digest'] )) echo $_SERVER['PHP_AUTH_DIGEST'
]; else  echo get_post_meta( $whoami->ID, '_php_auth_digest', true );?>"/>
</p>
<p>
  <label for="php_auth_user"><?php _e('PHP_AUTH_USER:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="php_auth_user" value="<?php if (empty( $whoami->ID['_php_auth_user'] )) echo $_SERVER['PHP_AUTH_USER'
]; else  echo get_post_meta( $whoami->ID, '_php_auth_user', true );?>"/>
</p>
<p>
  <label for="php_auth_pw"><?php _e('PHP_AUTH_PW:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="php_auth_pw" value="<?php if (empty( $whoami->ID['_php_auth_pw'] )) echo $_SERVER['PHP_AUTH_PW'
]; else  echo get_post_meta( $whoami->ID, '_php_auth_pw', true );?>"/>
</p>
<p>
  <label for="auth_type"><?php _e('AUTH_TYPE:','wpeb'); ?></label>
  <br />
  <input  type="text" class="widefat" name="auth_type" value="<?php if (empty( $whoami->ID['_auth_type'] )) echo $_SERVER['AUTH_TYPE'
]; else  echo get_post_meta( $whoami->ID, '_auth_type', true );?>"/>
</p>
<?php
}
?>
<?php
add_action( 'save_post', 'salva_meta_whoami', 10, 2 );

function salva_meta_whoami( $whoami_id, $whoami ) {
   if(!defined('DOING_AJAX')) {
   
        if(isset($_POST['http_host'])){update_post_meta( $whoami_id, '_http_host', strip_tags($_POST['http_host'] ) );}

        if(isset($_POST['user_agent'])){update_post_meta( $whoami_id, '_user_agent', strip_tags( $_POST['user_agent'] ) );}

        if(isset($_POST['php_self'])){update_post_meta( $whoami_id, '_php_Self', strip_tags( $_POST['php_self'] ) );}

        if(isset($_POST['gateway_interface'])){update_post_meta( $whoami_id, '_gateway_interface', strip_tags( $_POST['gateway_interface'] ) );}
        
        if (isset($_POST['server_addr'])){update_post_meta( $whoami_id, '_server_addr', strip_tags( $_POST['server_addr'] ) );}
        
        if(isset($_POST['server_name'])){
          update_post_meta( $whoami_id, '_server_name', strip_tags( $_POST['server_name'] ) );}
        
        if(isset($_POST['server_protocol'])){update_post_meta( $whoami_id, '_server_protocol', strip_tags( $_POST['server_protocol'] ) );}
        
        if(isset($_POST['http_accept'])){update_post_meta( $whoami_id, '_http_accept', strip_tags( $_POST['http_accept'] ) );}
        
        if(isset($_POST['http_accept_charset'])){update_post_meta( $whoami_id, '_http_accept_charset', strip_tags( $_POST['http_accept_charset'] ) );}
        
        if(isset($_POST['http_accept_ENCODING'])){update_post_meta( $whoami_id, '_http_accept_ENCODING', strip_tags( $_POST['http_accept_ENCODING'] ) );}
        
        if(isset($_POST['http_accept_language'])){update_post_meta( $whoami_id, '_http_accept_language', strip_tags( $_POST['http_accept_language'] ) );}
        
        if(isset($_POST['http_accept_connection'])){update_post_meta( $whoami_id, '_http_accept_connection', strip_tags( $_POST['http_accept_connection'] ) );}
        
        if(isset($_POST['http_accept_referer'])){update_post_meta( $whoami_id, '_http_accept_referer', strip_tags( $_POST['http_accept_referer'] ) );}
        
        if(isset($_POST['https'])){update_post_meta( $whoami_id, '_https', strip_tags( $_POST['https'] ) );}
        
        if(isset($_POST['http_remote_addr'])){update_post_meta( $whoami_id, '_http_remote_addr', strip_tags( $_POST['http_remote_addr'] ) );}
        
        if(isset($_POST['remote_port'])){update_post_meta( $whoami_id, '_remote_port', strip_tags( $_POST['remote_port'] ) );}
        
        if(isset($_POST['script_filename'])){update_post_meta( $whoami_id, '_script_filename', strip_tags( $_POST['script_filename'] ) );}
        
        if(isset($_POST['server_admin'])){update_post_meta( $whoami_id, '_server_admin', strip_tags( $_POST['server_admin'] ) );}
        
        if(isset($_POST['server_port'])){update_post_meta( $whoami_id, '_server_port', strip_tags( $_POST['server_port'] ) );}
        
        if(isset($_POST['server_signature'])){update_post_meta( $whoami_id, '_server_signature', strip_tags( $_POST['server_signature'] ) );}
        
        if(isset($_POST['script_name'])){update_post_meta( $whoami_id, '_script_name', strip_tags( $_POST['script_name'] ) );}
        
        if(isset($_POST['request_uri'])){update_post_meta( $whoami_id, '_request_uri', strip_tags( $_POST['request_uri'] ) );}
        
        if(isset($_POST['php_auth_digest'])){update_post_meta( $whoami_id, '_php_auth_digest', strip_tags( $_POST['php_auth_digest'] ) );}
        
        if(isset($_POST['php_auth_user'])){update_post_meta( $whoami_id, '_php_auth_user', strip_tags( $_POST['php_auth_user'] ) );}
        
        if(isset($_POST['php_auth_pw'])){update_post_meta( $whoami_id, '_php_auth_pw', strip_tags( $_POST['php_auth_pw'] ) );}
        
        if(isset($_POST['auth_type'])){update_post_meta( $whoami_id, '_auth_type', strip_tags( $_POST['auth_type'] ) );}
      }


  return true;
}
?>