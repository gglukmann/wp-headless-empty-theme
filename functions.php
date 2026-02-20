<?php
function remove_menus()
{
  remove_menu_page('edit-comments.php');          //Comments
}
add_action('admin_menu', 'remove_menus');

add_theme_support('post-thumbnails');
add_theme_support( 'menus' );

add_filter('rest_post_collection_params', function ($params) {
  if (isset($params['per_page'])) {
    $params['per_page']['maximum'] = 250;
  };
  return $params;
}, 10, 2);
add_filter('rest_page_collection_params', function ($params) {
  if (isset($params['per_page'])) {
    $params['per_page']['maximum'] = 250;
  };
  return $params;
}, 10, 2);

// Change the default email address
// function change_default_sender_email( $original_email_address ) {
//     return 'info@skpk.ee';
// }
// add_filter( 'wp_mail_from', 'change_default_sender_email' );