<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/****************************************************
* PAGINAZIONE - STEP 3
****************************************************/ 
// da utilizzare assieme al file "snippet-webCustom/paginazione-custom-wpquery.php"      
?>

<?php // PAGINATION Step3 - LOOK AT FUNCTION FILE for the function
    if (function_exists(custom_pagination)) {
    custom_pagination($postloop_cpt_query->max_num_pages,"",$paged);
    } 
?>