<?php
/**
* Triger this file on Pugin uninstall
*
* @package BeuPlugin
*/

if (!defined('WP_UNINSTALL_PLUGIN')){
	die;
}
//clear database storage
$books=get_posts(array('post_type' =>'book','numberposts' => -1 ) );

for each ( $books as $book) {
	wp_delete_post($book->ID, true);
}
//Access the database via SQL
global $wpdb;
$wpdb->query("DELETE FROM wp_posts where post_type='book'");
$wpdb->query("DELETE FROM wp_postmeta where post_id NOT IN (select id from wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships where object_id NOT in (select id from wp_posts)");