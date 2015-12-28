<?php
function menu (){


// Attach options on menu
add_menu_page( __('Host Infos','wpeb'),
    __('Host Infos','wpeb'),
    'activate_plugins',
    'host',
    '',
    plugins_url('/wp-enviroment-beacon/images/server.png'),
    '101');
add_menu_page( __('All WP Settings','wpeb'),
    __('All WP Settings','wpeb'),
    'activate_plugins',
    'options.php',
    '',
    plugins_url('/wp-enviroment-beacon/images/server.png'),
    '102');
add_menu_page( __('PHP Infos','wpeb'),
    __('PHP Infos','wpeb'),
    'activate_plugins',
    'post-new.php?post_type=phpinfo',
    '',
    plugins_url('/wp-enviroment-beacon/images/server.png'),
    '103');
}
add_action( 'admin_menu','menu' );
