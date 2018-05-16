<?php
/**
 * @package Beuplugin
*/
/*
Plugin Name: BeuPlugin
Plugin URI: https://Beuplugin.com/
Description: This is my first plugin
Version: 1.0.0
Author: Beula
Author URI: https://beula.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: beuplugin
*/

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


if ( ! defined( 'ABSPATH' ) ) {
	die;
}

defined( 'ABSPATH' ) or die( 'you can\'t access this file!' );

if (!function_exists('add_action')) {
	echo 'you can\'t access this file';
	exit;
}