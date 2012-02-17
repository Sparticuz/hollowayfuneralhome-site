<?php
/* Our navigation menu.
 * If one isn't filled out, wp_nav_menu falls back to wp_page_menu.
 * The menu assiged to the primary position is the one used.
 * If none is assigned, the menu with the lowest ID is used.
 */

$args = array(
	//'depth' => 1,
	'container' => 'nav',
	'container_class' => 'two columns'
);

wp_nav_menu( $args ); ?>