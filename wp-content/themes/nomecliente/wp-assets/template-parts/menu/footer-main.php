<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*
*/ 
?>


<?php 
$menus_options = array(
	'theme_location'  => 'footer',
	'depth'           => 1,
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',    
); 
wp_nav_menu($menus_options);
?>