/* 
Plugin Name: My Plugin 
Description: Simple Action and Hook 
Version: 1.0 
Author: Damar Sierra 
License: GPL2 
*/

//placing a index.php file in the directory of the file
//to prevent remote access OR
//exit if file is called directly
if ( ! defined('ABSPATH')){
    exit;
}

function wporg_callback() {
    echo "Hello, World!";
}
add_action( 'init', 'wporg_callback' );