<?php
function wcs_post_types(){
    // Event post type
    register_post_type('event', array(
         'capability_type' => 'event',
         'map_meta_cap' => true,
        'supports' => array('title', 'editor','excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // Program post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

     // Instructors post type
     register_post_type('instructor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Instructors',
            'add_new_item' => 'Add New Instructor',
            'edit_item' => 'Edit Instructor',
            'all_items' => 'All Instructors',
            'singular_name' => 'Instructor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
// Note Post Type
    register_post_type('note', array(
        'capability_type' => 'note',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Notes',
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'all_items' => 'All Notes',
            'singular_name' => 'Note'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));

    // Like Post Type
    register_post_type('like', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Likes',
            'add_new_item' => 'Add New Like',
            'edit_item' => 'Edit Like',
            'all_items' => 'All Likes',
            'singular_name' => 'Like'
        ),
        'menu_icon' => 'dashicons-heart'
    ));

    // Homepage Slideshow Post Type
    register_post_type('homepage-slideshow', array(
        'supports' => array('title'),
        'public' => false, // not publicly visible
        'show_ui' => true,  // to be visible in the admin panel
        'labels' => array(
            'name' => 'Homepage-slideshow',
            'add_new_item' => 'Add New homepage-slide',
            'edit_item' => 'Edit homepage-slide',
            'all_items' => 'All homepage-slide',
            'singular_name' => 'Homepage-slide'
        ),
        'menu_icon' => 'dashicons-images-alt'
    ));
}

add_action('init', 'wcs_post_types');