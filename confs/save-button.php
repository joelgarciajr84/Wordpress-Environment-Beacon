<?php 

	// Change save button label on whoami custom post type

	add_filter( 'gettext', 'change_publish_button', 10, 2 );

		function change_publish_button( $translation, $text ) {

		if ( $text == 'Publish' & 'whoami' == get_post_type() ) 
    	return 'Save This Configuration';

		return $translation;
	}
?>