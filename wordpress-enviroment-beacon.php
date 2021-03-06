<?php 
/*
* Plugin Name: Wordpress Environment Beacon
* Plugin URL: https://github.com/joelgarciajr84/guijaste
* Description: Plugin who shows complete localhost + php (enviroment) Information.UPDATED: 1. Warnings fixed. 2. Internationalization support. 3. Portuguese - Brazil language support.
* Author: Joel Garcia Jr
* Version: 1.2
* Author URL: https://www.facebook.com/joel.garciajr
* Text Domain: wpeb
*/
?>
<?php 
	require_once dirname( __FILE__ ) . '/custom-post-types/cpt-show-status.php';
	require_once dirname( __FILE__ ) . '/custom-post-types/cpt-phpinfo.php';
	require_once dirname( __FILE__ ) . '/confs/menu-page.php';
	require_once dirname( __FILE__ ) . '/confs/save-button.php';
	require_once dirname( __FILE__ ) . '/confs/remove-publish-metabox.php';

	/* Adding support for I18n */
	function wpeb_init() {

	 $plugin_dir = basename(dirname(__FILE__));

	 load_plugin_textdomain( 'wpeb', false, $plugin_dir.'/lang' );
	}

	add_action('plugins_loaded', 'wpeb_init');
?>