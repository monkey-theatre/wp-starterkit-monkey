<?php

/*********************************************************************
 * SHORTCODE
 ********************************************************************/
/* ------- Line Break Shortcode --------*/
function line_break_shortcode() {
  return '<br />';
}
add_shortcode( 'br', 'line_break_shortcode' );
?>