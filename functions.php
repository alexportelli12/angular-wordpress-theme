<?php

/**
 * Angular WordPress functions and definitions
 */

// Custom Post Types
require_once get_template_directory() . '/cpt/classes.php';

// *******************************************************
// FIGURE OUT WHERE IT WOULD BE BEST TO ADD THE BELOW CODE
// *******************************************************
// register_rest_field( 'page', 'metadata', array(
//     'get_callback' => function ( $data ) {
//         return get_post_meta( $data['id'], '', '' );
//     }, ));
