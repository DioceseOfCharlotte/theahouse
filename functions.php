<?php
/**
 * Functions and definitions.
 *
 * @package theahouse
 */

add_action( 'init', function() {
	add_post_type_support( 'sc_event', 'archive' );
} );
