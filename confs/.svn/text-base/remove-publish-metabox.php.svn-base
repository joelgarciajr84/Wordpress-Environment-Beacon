<?php 
//Remove publish metabox from phpinfo custom post type
	add_action( 'add_meta_boxes', 'my_remove_publish_metabox' );
	
	function my_remove_publish_metabox() {
    	
    	remove_meta_box( 'submitdiv', 'phpinfo', 'side' );
	}
?>