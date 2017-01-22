<?php
namespace Local;

add_action( 'init', '\Local\custom_post_types' );

/**
* Create custom post types
*
* @hooked init
* @return void
*/
function custom_post_types()
{
    # Testimonials
        $slug = 'testimonials';
        $singular = 'testimonial';
        $plural = 'testimonials';
        $singular_lower = strtolower( $singular );
        $plural_lower = strtolower( $plural );
      
        $labels = array(
            'name'               => _x( $plural, 'post type general name', TD ),
            'singular_name'      => _x( $singular, 'post type singular name', TD ),
            'menu_name'          => _x( $plural, 'admin menu', TD ),
            'name_admin_bar'     => _x( $plural, 'add new on admin bar', TD ),
            'add_new'            => _x( 'Add new '.$singular, 'company', TD ),
            'add_new_item'       => __( 'Add new '.$singular, TD ),
            'new_item'           => __( 'New '.$singular, TD ),
            'edit_item'          => __( 'Edit '.$singular, TD ),
            'view_item'          => __( 'View '.$plural, TD ),
            'all_items'          => __( 'All '.$plural, TD ),
            'search_items'       => __( 'Search '.$plural, TD ),
            'parent_item_colon'  => __( 'Parent '.$singular.':', TD ),
            'not_found'          => __( 'No '.$plural_lower.' found.', TD ),
            'not_found_in_trash' => __( 'No '.$plural_lower.' found in Trash.', TD ),
        );            
        
        register_post_type( $slug, 
            array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => true,
                //'menu_position' => 115,
                'menu_icon' => 'dashicons-welcome-write-blog',
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail',
                //  'excerpt',
                //  'comments',
                //  'author',
                //  'excerpt',
                //  'revisions',
                //  'formats',
                ),
            )
        );
}