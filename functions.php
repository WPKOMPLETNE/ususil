<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
add_filter( 'generate_typography_default_fonts', function( $fonts ) {
    $fonts[] = 'Play';

    return $fonts;
} );
// END ENQUEUE PARENT ACTION
add_action( 'widgets_init', 'wpk_widgets_init' );
function wpk_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Lišta 1', 'ususil' ),
        'id'            => 'lista-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title'  => '<h3 class="lista-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Lišta 2', 'ususil' ),
        'id'            => 'lista-2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title'  => '<h3 class="lista-title">',
        'after_title'   => '</h3>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'Lišta 3', 'ususil' ),
        'id'            => 'lista-3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title'  => '<h3 class="lista-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'woocommerce_before_shop_loop_item_title', function() {
	
		echo '<div class="woo-entry-new-badge">' . esc_html__( 'New', 'total' ) . '</div>';
	
}, 20 );