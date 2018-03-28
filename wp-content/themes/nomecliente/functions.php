<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/*******************************************************************************
* SNIPPET FUNCTIONS FILES (snippets of code for setup/WP, extend core or plugin functions)
*******************************************************************************/
require_once get_template_directory() . '/wp-assets/functions/snippet-functions-loader.php';


/*******************************************************************************
* TGM Plugin Activation (manage require and recommend plugins for WordPress themes) 
*******************************************************************************/
//CLASS KICK!
require_once get_template_directory() . '/wp-assets/functions/tgm/class-tgm-plugin-activation.php';
//PLUGINS TO ACTIVATE AND CONFIG
require_once get_template_directory() . '/wp-assets/functions/tgm/tgm-reqplugins-config.php';


/*******************************************************************************
* TITAN FRAMEWORK (Titan Checker) - Global options/fields
*******************************************************************************/
if ( file_exists( get_template_directory() .'/wp-assets/framework/titan-framework/titan-init.php') ) {
	require_once get_template_directory() . '/wp-assets/framework/titan-framework/titan-init.php';
		require_once get_template_directory() . '/wp-assets/framework/titan-framework/options/adminpanel-options-init.php';
}
?>