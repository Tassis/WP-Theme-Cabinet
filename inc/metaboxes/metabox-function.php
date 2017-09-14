<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

 if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
 	require_once dirname( __FILE__ ) . '/cmb2/init.php';
 } elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
 	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

add_action('cmb2_admin_init', 'Cabinet_register_post_metabox');

function Cabinet_register_post_metabox(){
	$prefix = 'cabinet_post_';

	$cmb_box = new_cmb2_box(
		array(
		'id' 						=> $prefix . 'picbox',
		'title' 			 	=> esc_html__('Featured Pictures'),
		'object_types'  => array('post'),
	));

	$cmb_box->add_field(array(
		'id'						=> $prefix . 'url',
		'name'					=> esc_html__('Image Link' , 'Cabinet'),
		'desc'					=> esc_html__('Insert image url or upload image, recommand size 200x200.'),
		'type' 					=> 'file',
	));
}
