<?php
function menu (){

// Attach options on menu
add_menu_page( 'Host Info',
    'Host Info',
    '6',
    'host',
    '',
    plugins_url('wordpress-enviroment-beacon/images/server.png'),
    '101');
add_menu_page( 'All WP Settings',
    'All WP Settings',
    '6',
    'options.php',
    '',
    plugins_url('wordpress-enviroment-beacon/images/server.png'),
    '102');
add_menu_page( 'php info',
    'php info',
    '6',
    'post-new.php?post_type=phpinfo',
    '',
    plugins_url('wordpress-enviroment-beacon/images/server.png'),
    '103');
}
add_action( 'admin_menu','menu' );
?>