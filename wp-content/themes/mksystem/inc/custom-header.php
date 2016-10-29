<?php
/**
 *
 * @package Mksystem
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses jeweltheme_polmo_header_style()
 * @uses jeweltheme_polmo_admin_header_style()
 * @uses jeweltheme_polmo_admin_header_image()
 */
function jeweltheme_mksystem_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'jeweltheme_polmo_custom_header_args', array(
		'default-image'          =>  get_template_directory_child() . '/images/logo/logo_maro3d.png',
		'default-text-color'     => '000000',
		'width'                  => 185,
		'height'                 => 194,
		'flex-height'            => true
	) ) );
}
add_action( 'after_setup_theme', 'jeweltheme_mksystem_custom_header_setup' );
