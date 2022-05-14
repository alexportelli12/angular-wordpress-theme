<?php

// Add classes custom post type
function add_class_custom_post_type()
{
    $labels = array(
        'name'                  => _x('Classes', 'Post type general name', 'class'),
        'singular_name'         => _x('Class', 'Post type singular name', 'class'),
        'menu_name'             => _x('Classes', 'Admin Menu text', 'class'),
        'name_admin_bar'        => _x('Class', 'Add New on Toolbar', 'class'),
        'add_new'               => __('Add New', 'class'),
        'add_new_item'          => __('Add New recipe', 'class'),
        'new_item'              => __('New class', 'class'),
        'edit_item'             => __('Edit class', 'class'),
        'view_item'             => __('View class', 'class'),
        'all_items'             => __('All classes', 'class'),
        'search_items'          => __('Search classes', 'class'),
        'parent_item_colon'     => __('Parent classes:', 'class'),
        'not_found'             => __('No classes found.', 'class'),
        'not_found_in_trash'    => __('No classes found in Trash.', 'class'),
        'featured_image'        => _x('Class Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'class'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'class'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'class'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'class'),
        'archives'              => _x('Class archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'class'),
        'insert_into_item'      => _x('Insert into class', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'class'),
        'uploaded_to_this_item' => _x('Uploaded to this class', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'class'),
        'filter_items_list'     => _x('Filter classes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'class'),
        'items_list_navigation' => _x('Classes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'class'),
        'items_list'            => _x('Classes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'class'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Class custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'classes'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true,
        'rest_base'          => 'classes',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );

    register_post_type('Class', $args);
}

add_action('init', 'add_class_custom_post_type');

// Add custom fields for the classes custom post type
// add_filter('rwmb_meta_boxes', function ($meta_boxes) {
//     $meta_boxes[] = [
//         'title'      => 'Class Benefits',
//         'post_types' => 'class',
//         'fields'     => [
//             [
//                 'name' => 'Strength',
//                 'id'   => 'strength',
//                 'type' => 'number',
//                 'min'  => 0,
//                 'max' => 100,
//             ],
//             [
//                 'name' => 'Cardio',
//                 'id'   => 'cardio',
//                 'type' => 'number',
//                 'min'  => 0,
//                 'max' => 100,
//             ], [
//                 'name' => 'Fat Burning',
//                 'id'   => 'fat_burning',
//                 'type' => 'number',
//                 'min'  => 0,
//                 'max' => 100,
//             ], [
//                 'name' => 'Flexibility',
//                 'id'   => 'flexibility',
//                 'type' => 'number',
//                 'min'  => 0,
//                 'max'      => 100,
//             ], [
//                 'name' => 'Testing Key Value',
//                 'id' => 'testing',
//                 'type' => 'key_value',
//                 'desc' => 'IMPORTANT DO NOT EDIT'
//             ]
//         ],
//     ];

//     return $meta_boxes;
// });
