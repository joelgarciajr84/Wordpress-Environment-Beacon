<?php 
/*
* Plugin Name: Wordpress Environment Beacon
* Plugin URL: https://github.com/joelgarciajr84/guijaste
* Description: Plugin who shows complete localhost + php (enviroment) Information
* Author: Joel Garcia Jr
* Version: 1.1
* Author URL: https://www.facebook.com/joel.garciajr
*/
?>
<?php 
	require_once dirname( __FILE__ ) . '/custom-post-types/cpt-show-status.php';
	require_once dirname( __FILE__ ) . '/custom-post-types/cpt-phpinfo.php';
	require_once dirname( __FILE__ ) . '/confs/menu-page.php';
	require_once dirname( __FILE__ ) . '/confs/save-button.php';
	require_once dirname( __FILE__ ) . '/confs/remove-publish-metabox.php';
?>