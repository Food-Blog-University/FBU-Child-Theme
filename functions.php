<?php
/*
 * enqueue css for the child theme
 * Thanks to http://www.boxoft.net/ for this
 */
 function puresimple_child_enqueue_scripts_styles() {
  wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'puresimple_child_enqueue_scripts_styles' );

/*
* Add your own functions to this file. You can also copy some of the theme functions into this file.
* Wordpress will use those functions instead of the original functions then.
*/

/*Allow SVG Uploads*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/*End Allow SVG Uploads*/
