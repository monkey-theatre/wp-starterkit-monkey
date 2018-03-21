<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* VALUTARE SE SERVE BOOTSTRAP 4 NAVWALKER
*
*/ 
?>


<?php 
$menus_options = array(
	'theme_location'  => 'main',
	'depth'           => 3,
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => 'site_nav',
	'menu_class'      => '',
	'menu_id'         => '',    
); 
wp_nav_menu($menus_options);
?>