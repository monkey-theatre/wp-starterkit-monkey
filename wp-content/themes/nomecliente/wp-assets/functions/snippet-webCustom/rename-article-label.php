<?php
/**
 * Rename "Posts" to "News"
 *
 * @link http://new2wp.com/snippet/change-wordpress-posts-post-type-news/
 * @link https://gist.github.com/gyrus/3155982
 */
 
add_action( 'admin_menu', 'pilau_change_post_menu_label' );
add_action( 'init', 'pilau_change_post_object_label' );
function pilau_change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
    if (array_key_exists('edit.php', $submenu)) {
        $submenu['edit.php'][5][0]  = 'News';

        if (count($submenu['edit.php']) >= 11) {
        $submenu['edit.php'][10][0] = 'Add News';
        }

        if (count($submenu['edit.php']) >= 17) {
        $submenu['edit.php'][16][0] = 'News Tags';
        }
    }
	echo '';
}
function pilau_change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}
?>