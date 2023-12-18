<?php 
add_action( 'wp_enqueue_scripts', 'travelblog_scripts' );
function travelblog_scripts() {
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"');
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', array('main') );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array('main') );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
}

if(! function_exists('travelblog_setup')) {
    function travelblog_setup() {
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'title-tag');
        add_theme_support( 'custom-logo');
    };

    add_action('after_setup_theme', 'travelblog_setup');
};

// Регистрируем несколько областей меню

function travelblog_menus() {

	$locations = array(
		'header'  => __( 'Header Menu', 'travelblog' ),
		'footer' => __( 'Footer Menu', 'travelblog' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'travelblog_menus' );

add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);
function custom_nav_menu_css_class($classes) {
    $classes[] = 'menu__list-item';
    return $classes;
}


add_filter('wpcf7_autop_or_not', '__return_false');
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    if( $dosvg ){
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }

    return $data;
}

