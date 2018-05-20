<?php
/**
 * @package BeuPlugin
 */

class BeuPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}