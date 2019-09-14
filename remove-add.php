<?php
/**
 * @package Remove Add 
 * @version 1.0
 */
/*
Plugin Name: Remove Add 
Plugin URI: https://github.com/caionorder/Remove-Add
Description: This plugin removes the add button again within the web page in the post.
Author: Jorge Eduardo Sato
Version: 1.0
Author URI: http://mobimkt.com.br/
*/

// We need some CSS to position the paragraph
function remove_add_new() {

	echo "
	<style type='text/css'>
	.add-new-h2,
	.page-title-action {
		display:none !important;
	}
	</style>
	";
}

add_action( 'admin_head', 'remove_add_new' );

?>
