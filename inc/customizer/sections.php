<?php
/**
 * Customizer sections.
 *
 * @package Thea House
 */

/**
 * Register the section sections.
 */
function th_doc_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'th_doc_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'thea-house' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'th_doc_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'thea-house' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'th_doc_customize_sections' );
