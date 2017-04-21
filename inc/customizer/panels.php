<?php
/**
 * Customizer panels.
 *
 * @package Thea House
 */

/**
 * Add a custom panels to attach sections too.
 */
function th_doc_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel( 'site-options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Site Options', 'thea-house' ),
		'description'    => esc_html__( 'Other theme options.', 'thea-house' ),
	) );
}
add_action( 'customize_register', 'th_doc_customize_panels' );
