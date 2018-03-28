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
* ENQUEUE FILES 
*******************************************************************************/

//ENQUEUE
require_once get_template_directory() . '/wp-assets/functions//snippet-enqueue/enqueue-style.php';
require_once get_template_directory() . '/wp-assets/functions//snippet-enqueue/enqueue-script.php';

//ENQUEUE IE 9 Condition
require_once get_template_directory() . '/wp-assets/functions//snippet-enqueue/enqueue-script-conditional.php';

//DEQUEUE USELESS PLUGIN STYLES
require_once get_template_directory() . '/wp-assets/functions//snippet-enqueue/dequeue-style.php';
require_once get_template_directory() . '/wp-assets/functions//snippet-enqueue/dequeue-script.php';


/*******************************************************************************
* SETTINGS 
*******************************************************************************/
//WP UNDERSTRAP SETUP
require_once get_template_directory() . '/wp-assets/functions/snippet-setup/setup.php';

//MENU
require_once get_template_directory() . '/wp-assets/functions/snippet-setup/menu.php';

/* 
require_once get_template_directory() . '/wp-assets/functions/snippet-setup/shortcode.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-setup/sidebars.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-setup/widgets.php'; */


/**************************************************
* Utilizzo questo file per richiamare gli snippet
* che estendono o modificano determinate funzioni 
* di plugin o del core. 
**************************************************/

/*******************************************************************************
* EXTEND FUNCTIONALITIES 
*******************************************************************************/
/*******************************************************************************
* require once, se c'è un errore genera errore 500. 
*******************************************************************************/ 
require_once get_template_directory() . '/wp-assets/functions/snippet-webCustom/admin-styles.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-webCustom/terms-lista-no-links.php';

?>