<?php

// General settings
add_theme_support( 'post-thumbnails' );

// Register nav support
function mytheme_register_nav_menu(){
        register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'Основно меню' ),
        'footer_menu'  => __( 'Footer Menu', 'Меню футър' ),
        ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );


/*
function qode_register_custom_post_type() {
    register_post_type( 'movie',
        array(
            'labels' => array(
            'name' => esc_html__( 'Movies', 'your-translate-domain' ),
            'singular_name' => esc_html__( 'Movie', 'your-translate-domain' )
        ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action( 'init', 'qode_register_custom_post_type' );*/

/*
function wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' ) {
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	$wp_styles = wp_styles();

	if ( $src ) {
		$_handle = explode( '?', $handle );
		$wp_styles->add( $_handle[0], $src, $deps, $ver, $media );
	}

	$wp_styles->enqueue( $handle );
}
*/

wp_enqueue_style( 'styles.css', get_template_directory_uri() . '/assets/styles/styles.css' , $deps = array(), $ver = false, $media = 'all' );

wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/scripts/main.js', $deps = array(), $ver = false, $in_footer = true );



function my_post_time_ago_function() {
    return sprintf( esc_html__( '%s ago', 'textdomain' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter( 'the_time', 'my_post_time_ago_function' );