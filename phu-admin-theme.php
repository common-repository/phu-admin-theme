<?php
/**
 * Plugin Name: Phu Admin Theme
 * Description: Give you WordPress admin area that Phu feel. Made with lots of love and little bit of Phu.
 * Version: 1.3
 * Author: Phu Concepts Inc
 * Author URI: http://phuconcepts.com/
 */

/*
Copyright 2014 Phu Concepts Inc

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function phu_admin_color_scheme() {
	wp_admin_css_color( 'phu', __( 'Phu' ),
		plugins_url('phu/colors.css', __FILE__),
		array( '#25282B', '#3c3c3c', '#fc6218', '#FF8145' )
	);
}
add_action('admin_init', 'phu_admin_color_scheme');

function set_default_to_phu($user_id) {
	$args = array(
		'ID' => $user_id,
		'admin_color' => 'phu'
	);
	wp_update_user( $args );
}
add_action('user_register', 'set_default_to_phu');

function rename_fresh_color_scheme() {
	global $_wp_admin_css_colors;
	$color_name = $_wp_admin_css_colors['fresh']->name;

	if( $color_name == 'Default' ) {
		$_wp_admin_css_colors['fresh']->name = 'Fresh';
	}
	return $_wp_admin_css_colors;
}
add_filter('admin_init', 'rename_fresh_color_scheme');

include( plugin_dir_path( __FILE__ ) . 'inc/welcome-panel.php');
remove_action('welcome_panel','wp_welcome_panel');
add_action('welcome_panel','phuadmin_welcome_panel');

function phuadmin_welcome_init() {
	global $wpdb;
	$wpdb->update($wpdb->usermeta,array('meta_value'=>1),array('meta_key'=>'show_welcome_panel'));
}
add_action('after_switch_theme','phuadmin_welcome_init');