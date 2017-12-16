<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cpMetal
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cpmetal_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'cpmetal_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cpmetal_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cpmetal_pingback_header' );


/**
 * mrb Customisations
 */
function cpMetal_googlefonts() {
	$query_args = array(
		'family' => 'Raleway:400,600,700|Open+Sans',
		'subset' => 'latin,latin-ext'
	);
	wp_register_style( 'cpMetal_googlefonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}        
add_action('wp_enqueue_scripts', 'cpMetal_googlefonts');

function cpMetal_stylesheets() {
    wp_enqueue_style( 'cpMetal-reset', get_template_directory_uri() .'/css/reset.css', array(), null, 'all' );    
    wp_enqueue_style( 'cpMetal-bootstrap-min',  '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), null, 'all' );
    wp_enqueue_style( 'cpMetal-layout',  get_template_directory_uri() .'/css/layout.css', array(), null, 'all' );
    wp_enqueue_style( 'cpMetal-responsive', get_template_directory_uri() .'/css/responsive.css', array(), null, 'all' );
    wp_enqueue_style( 'cpMetal-print', get_template_directory_uri() .'/css/print.css', array(), null, 'print' );    
}    
add_action( 'wp_enqueue_scripts', 'cpMetal_stylesheets' );

function cpMetal_jscripts() {
// true = load in the footer
     wp_enqueue_script( 'cpMetal-responsive', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js', array(), null, 'true' );
}    
add_action( 'wp_enqueue_scripts', 'cpMetal_jscripts' );

function change_menus_position() {
    remove_submenu_page( 'themes.php', 'nav-menus.php' );
    add_menu_page(
       'Menus',
       'Menus',
       'edit_theme_options',
       'nav-menus.php',
       '',
       'dashicons-list-view',
       68
    );
}
add_action('admin_menu', 'change_menus_position');


function addAdminMenu(){
add_menu_page('Admin Settings', 'cpMetal Admin', 'manage_options', 'cpMetal_admin_settings_page', 'admin_pg_function', '', 3);
add_submenu_page('cpMetal_admin_settings_page','User Role Editor', 'Edit User Roles','manage_options', 'user_role_editor_slug', 'edit_user_roles_function');
}
add_action( 'admin_menu', 'addAdminMenu' );
