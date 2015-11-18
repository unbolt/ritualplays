<?php
/* 
 *      THEME SUPPORT SETUP
 */

if( function_exists( 'add_theme_support' ) ) {
    
    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size(  );
}

// Include styles
function ritualplays_styles() {
    // Remote styles first
        // Bootstrap - Used for layout
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' , false, 
                     '3.3.5', 'all' );    
    
        // Font Awesome - Used for various icons around the site
        wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' , false, 
                     '4.4.0', 'all' );   
        
    // Local styles
    wp_enqueue_style( 'global', get_stylesheet_directory_uri() . '/css/style.css' , false, 
                     filemtime( get_stylesheet_directory() . '/css/style.css' ), 'all' );
 
}

// Include scripts
function ritualplays_scripts() {
    // Deregister default WP jQuery just incase it attempts to load locally
    wp_deregister_script('jquery');
    
    // Remote scripts first
        // jQuery - register but not required until something else uses it
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.11.3.min.js', false, 
                           '1.11.3', true );
        wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', false, 
                           '3.3.5', true);
    
    // Local scripts
        // Load all compiled and minified scripts together
        wp_enqueue_script( 'global-compiled', get_template_directory_uri() . '/js/compiled.min.js', array('jquery'), 
                          filemtime( get_template_directory() . '/js/compiled.min.js'), false);
    
}


// Remove functions from run time

// Remove emoji code
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Disable WLW Manifest
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Remove generator tag
remove_action('wp_head', 'wp_generator');

// Add functions to run time

// Include styles
add_action( 'wp_enqueue_scripts', 'ritualplays_styles' );
// Include scripts
add_action( 'wp_enqueue_scripts', 'ritualplays_scripts' );