<?php
/*
* Plugin Name:       MyPlugin
* Plugin URI:        http://52.86.136.18/
* Description:       Stuff
* Version:           1.0
* Author:            Michael S, Damar S, Benji D, Jasmine B
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Domain Path:       /languages
*/
// EOF
// exit if file is called directly
// Testing to see if the php works

function jmdb_darkmode_css() {
    echo '
        <style>
        * {
			margin: 0; 
			padding: 30px; 
			text-align: center; 

			color: #E0E1DD;
			background: #1B263B;
			border-color: #0D1B2A;
			outline-color: #0D1B2A;
		}
		a {
			color: #778DA9;
		}
        </style>
    ';
}


function jmdb_modify_darkmode() {
    return '<button class="more-link" href="' . jmdb_darkmode_css() . '">Click to Read!</button>';
}

add_action( 'the_content_more_link', 'jmdb_modify_darkmode' );

?>