<?php
/*
 *  GLOBAL VARIABLES
 */
define('theme_url',get_stylesheet_directory());
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());

/*
 *  INCLUDED FILES
 */

$file_includes = [
    'models/inc/theme-assets.php',         // Style and JS
    'models/inc/theme-setup.php',          // Setup
    'models/inc/short-code.php',          // Short code
];

foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }

    require_once $filePath;
}

unset($file, $filePath);
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {  
        register_nav_menu( 'primary-bar', __( 'Primary bar', 'wptuts' ) );
    }
endif;
add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
	
add_theme_support('menus');
add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
    register_nav_menus(
        array(
            'main-nav' => 'Main Navigation'
        ));
}

function custom_excerpt_length( $length ) {
    return 20;
} 
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// function get_all_category_by_post(){
// 	// $categories = get_the_category();
// 	// if( ! empty( $categories ) ) {
// 	// 	foreach ($categories as $categorie) {
// 	// 		echo esc_html($categorie->name).' , ';
// 	// 	}
// 	// }

// 	$id = get_the_id();
// 	var_dump($id);die;
//     $terms = get_the_terms( $id, 'category' );
//     foreach($terms as $term) {
// 	    echo'<pre>';var_dump($term->name);
//         echo $term->cat_ID;   
//     }
// }