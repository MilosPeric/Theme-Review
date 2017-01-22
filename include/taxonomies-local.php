<?php

namespace Local\Taxonomies;

add_action( 'init', 'Local\Taxonomies\init' );

/**
* Create custom taxonomies
*
* @return void
*/
function init()
{
    // Destinations Tax
        $singular = 'Destination Type';
        $plural = 'Destinations Types';
        $singular_lc = strtolower( $singular );
        $plural_lc = strtolower( $plural );
        
        $labels = array(
            'name'                       => _x( $plural, 'taxonomy general name', TD ),
            'singular_name'              => _x( $singular, 'taxonomy singular name', TD ),
            'search_items'               => __( "Search " . $plural, TD ),
            'popular_items'              => __( 'Popular ' . $plural, TD ),
            'all_items'                  => __( 'All ' . $plural, TD ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __( 'Edit ' . $singular, TD ),
            'update_item'                => __( 'Update ' . $singular, TD ),
            'add_new_item'               => __( 'Add New ' . $singular, TD ),
            'new_item_name'              => __( 'New '.$singular.' Name', TD ),
            'separate_items_with_commas' => __( 'Separate '.$plural_lc.' with commas', TD ),
            'add_or_remove_items'        => __( 'Add or remove '.$plural_lc, TD ),
            'choose_from_most_used'      => __( 'Choose from the most used '.$plural_lc, TD ),
            'not_found'                  => __( 'No '.$plural_lc.' found.', TD ),
            'menu_name'                  => __( $plural, TD ),
        );

        $tag_slug = 'destination-type';

        $args = array(
            'has_archive'           => true,
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => $tag_slug ),
        );

        register_taxonomy( 'destination_type', 'destinations', $args );


    // Home Page Taxonomy 
        $singular = 'Featured on Home Page';
        $plural = 'Featured on Home Page';
        $singular_lc = strtolower( $singular );
        $plural_lc = strtolower( $plural );
        
        $labels = array(
            'name'                       => _x( $plural, 'taxonomy general name', TD ),
            'singular_name'              => _x( $singular, 'taxonomy singular name', TD ),
            'search_items'               => __( "Search " . $plural, TD ),
            'popular_items'              => __( 'Popular ' . $plural, TD ),
            'all_items'                  => __( 'All ' . $plural, TD ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __( 'Edit ' . $singular, TD ),
            'update_item'                => __( 'Update ' . $singular, TD ),
            'add_new_item'               => __( 'Add New ' . $singular, TD ),
            'new_item_name'              => __( 'New '.$singular.' Name', TD ),
            'separate_items_with_commas' => __( 'Separate '.$plural_lc.' with commas', TD ),
            'add_or_remove_items'        => __( 'Add or remove '.$plural_lc, TD ),
            'choose_from_most_used'      => __( 'Choose from the most used '.$plural_lc, TD ),
            'not_found'                  => __( 'No '.$plural_lc.' found.', TD ),
            'menu_name'                  => __( $plural, TD ),
        );

        $tag_slug = 'destinations';

        $args = array(
            'has_archive'           => true,
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => $tag_slug ),
        );

        register_taxonomy( 'home_page', array( 'destinations', 'best_deals' ), $args );
    
}
    
