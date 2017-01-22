<?php
namespace Local;

add_filter( 'webit_setup_menus', '\Local\setup_menus' );
add_action( 'after_setup_theme', '\Local\setup_images' );
add_action( 'widgets_init', '\Local\sidebars', 999 );
// add_action( 'init', '\Local\setup_roles' );

/**
* Add custom menus to webit menus
* 
* @hooked webit_setup_menus
* @param array $menus
* @return array $menus
*/

function setup_menus( $menus )
{
	# ADD A MENU
	$menus['menu-top'] = __( 'Top Menu', TD );
//    $menus['menu-bottom'] = __( 'Bottom Menu', TD );
	# REMOVE A MENU
	unset( $menus['footer'] );
	return $menus;
} 
/**
* Add custom image sizes
* 
* @hooked after_setup_theme
* @return void
*/

function setup_images()
{
	add_image_size( 'sliders', 1980, 1080, true );
	add_image_size( 'blog-thumb', 1200, 550, true );
	add_image_size( 'blog-home', 370, 208, true );
	//add_image_size( 'home-items', 900, 540, true );
	//add_image_size( 'single-destination', 1200, 481, true );
}
/**
* Add custom sidebars
* 
* @hooked after_setup_theme
* @return void
*/
function sidebars()
{
	unregister_sidebar( 'sidebar-bottom' );
	 register_sidebar( array(
		 'name' => __( 'Entire Sidebar', TD ),
		 'id' => 'sidebar-bottom',
		 'description' => __( 'Contact', TD ),
		 'before_widget' => '<div class="contact-sidebar f-box">',
		 'after_widget' => '</div>',
		 'before_title' => '<h3 class="widget-title title">',
		 'after_title' => '</h3>',

	 ) );
	 register_sidebar( array(
		 'name' => __( 'Entire Sidebar 2', TD ),
		 'id' => 'sidebar-bottom 2',
		 'description' => __( 'Contact', TD ),
		 'before_widget' => '<div class="contact-sidebar f-box">',
		 'after_widget' => '</div>',
		 'before_title' => '<h3 class="widget-title title">',
		 'after_title' => '</h3>',
	 ) );
	register_sidebar( array(
		'name' => __( 'WOO SIDEBAR FOR SHOP PAGE', TD ),
		'id' => 'woo_side_bar',
		'description' => __( 'Sidebar For Woo shop Page', TD ),
		'before_widget' => '<div class="contact-sidebar f-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'WOO SIDEBAR FOR HOME PAGE', TD ),
		'id' => 'home_woo_side_bar',
		'description' => __( 'Sidebar For HOME WOO Page', TD ),
		'before_widget' => '<div class="contact-sidebar f-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title title">',
		'after_title' => '</h3>',
	) );
}
/**
* Add custom roles for customers
* 
* @hooked after_setup_theme
* @return void
*/
function setup_roles()
{
	$role = 'new';
	if( get_role( $role ) == null ) {
		$result = add_role(
			$role,
			__( 'New account (unapproved)' ),
			array(
				'read'         => false,  // true allows this capability
				'edit_posts'   => false,
				'delete_posts' => false, // Use false to explicitly deny
			)
		);
	}
}