<?php
/**
 * @package BeuPlugin
*/
class BeuPlugindeActivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}