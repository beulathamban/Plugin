<?php 
/**
* @package BeuPlugin
*/
/*
Plugin Name: beuplugin
Plugin URI:  http://beulaplugin.com
Description: This is my first plugin.
Version: 1.0.0
Author: Beula
Author URI: http:// beula.com
License: GPLv2 or later
Text Domain: Beuplugin
*/
//https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

//security

defined ('ABSPATH') or die('You dont have permission to access this file');


class BeuPlugin
{
	function __construct() {
		add_action( 'init', array( $this, 'custom_post_type' ) );
	}

	function activate() {
		// generated a CPT
		$this->custom_post_type();
		// flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}

	

	function custom_post_type() {
		register_post_type( 'book', array( 'public' => true, 'label' => 'Books' ) );
	}
}

if ( class_exists( 'BeuPlugin' ) ) {
	$beuPlugin = new BeuPlugin();
}

// activation
register_activation_hook( __FILE__, array( $beuPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $beuPlugin, 'deactivate' ) );





























