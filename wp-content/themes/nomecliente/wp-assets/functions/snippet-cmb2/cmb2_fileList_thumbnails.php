<?php
/*******************************************************************************
* PASSA THMBNAIL NAME E MISURA  
* https://github.com/CMB2/CMB2/wiki/Field-Types#sample-function-for-getting-and-outputting-file_list-images
*******************************************************************************/
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'small' ) {

  // Get the list of files
  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  $default_attr = array(
    'class' => "img_full_responsive",
  );

  echo ' ';
  // Loop through them and output an image
  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    echo '<div class="col-md-4">';
    echo wp_get_attachment_image( $attachment_id, $img_size, '', $default_attr );
    echo '</div>';
  }
  echo ' ';
}