<?php
/**
 * DubstrapX7 Theme Functions
 *
 * 2026 evolution of Dewitech Dubstrap
 * Dark-mode by default, local Alpine.js & Lucide, Tailwind CSS stack.
 *
 * @package DubstrapX7
 * @since 7.0.0
 */

declare( strict_types=1 );

// Load AI compatibility layer
require_once get_template_directory() . '/inc/class-dubstrapx7-ai.php';
\DubstrapX7\AI\Compatibility::init();

if ( ! function_exists( 'dubstrapx7_setup' ) ) :
function dubstrapx7_setup() {
    load_theme_textdomain( 'dubstrapx7', get_template_directory() . '/languages' );

    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    add_image_size( 'dubstrap-carousel', 1170, 480, true );
    add_image_size( 'dubstrap-featured', 640, 360, true );
    add_image_size( 'dubstrap-portfolio', 380, 260, true );

    add_theme_support( 'menus' );
    register_nav_menus( array(
        'primary'       => __( 'Primary Navigation', 'dubstrapx7' ),
        'footer'        => __( 'Footer Navigation', 'dubstrapx7' ),
        'footer_legal'  => __( 'Footer Legal Links', 'dubstrapx7' ),
    ) );

    add_editor_style( 'assets/build/output.css' );
}
endif;
add_action( 'after_setup_theme', 'dubstrapx7_setup' );

function dubstrapx7_widgets_init() {
    $sidebars = array(
        'sidebar-page'           => __( 'Main Sidebar', 'dubstrapx7' ),
        'footer-sidebar-left'    => __( 'Footer Column 1 (Left)', 'dubstrapx7' ),
        'footer-sidebar-center1' => __( 'Footer Column 2', 'dubstrapx7' ),
        'footer-sidebar-center2' => __( 'Footer Column 3', 'dubstrapx7' ),
        'footer-sidebar-right'   => __( 'Footer Column 4 (Right)', 'dubstrapx7' ),
    );

    foreach ( $sidebars as $id => $name ) {
        register_sidebar( array(
            'name'          => $name,
            'id'            => $id,
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-base font-bold uppercase text-white mb-4 border-b border-gray-700 pb-2">',
            'after_title'   => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'dubstrapx7_widgets_init' );

function dubstrapx7_fallback_menu() {
    echo '<li class="menu-item"><a href="' . esc_url( home_url( '/' ) ) . '" class="text-gray-300 hover:text-white transition-colors">' . esc_html__( 'Beranda', 'dubstrapx7' ) . '</a></li>';
}

function dubstrapx7_scripts() {
    // Compiled Tailwind CSS
    wp_enqueue_style(
        'dubstrapx7-tailwind',
        get_template_directory_uri() . '/assets/build/output.css',
        array(),
        '7.0.0'
    );

    // Theme metadata stylesheet
    wp_enqueue_style(
        'dubstrapx7-meta',
        get_stylesheet_uri(),
        array( 'dubstrapx7-tailwind' ),
        '7.0.0'
    );

    // Local Alpine.js (installed via npm)
    wp_enqueue_script(
        'alpinejs',
        get_template_directory_uri() . '/assets/js/vendor/alpine.min.js',
        array(),
        '3.14.3',
        true
    );
    wp_script_add_data( 'alpinejs', 'defer', true );

    // Local Lucide (installed via npm)
    wp_enqueue_script(
        'lucide',
        get_template_directory_uri() . '/assets/js/vendor/lucide.min.js',
        array(),
        'latest',
        true
    );

    // Custom theme JS
    wp_enqueue_script(
        'dubstrapx7-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'lucide', 'alpinejs' ),
        '7.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'dubstrapx7_scripts' );

function dubstrapx7_register_pattern_category() {
    register_block_pattern_category(
        'dubstrap-sections',
        array(
            'label'       => __( 'Dubstrap Framework Sections', 'dubstrapx7' ),
            'description' => __( 'Dark-mode ready Bootstrap 2.3 classic sections styled with Tailwind CSS.', 'dubstrapx7' ),
        )
    );
}
add_action( 'init', 'dubstrapx7_register_pattern_category' );

function dubstrapx7_register_patterns_from_directory() {
    $pattern_dir = get_template_directory() . '/patterns/';
    if ( ! is_dir( $pattern_dir ) ) {
        return;
    }

    $files = glob( $pattern_dir . '*.php' );
    if ( empty( $files ) ) {
        return;
    }

    foreach ( $files as $file ) {
        $headers = array();
        $content = file_get_contents( $file );
        if ( false === $content ) {
            continue;
        }

        // Only process files with standard WP pattern headers.
        if ( ! preg_match( '/^\/\*\*\s*\n\s*\*\s+Title:/m', $content ) ) {
            continue;
        }

        // Extract headers from docblock.
        preg_match_all( '/^\s*\*\s+([A-Za-z-]+):\s*(.+)$/m', $content, $matches, PREG_SET_ORDER );
        foreach ( $matches as $match ) {
            $headers[ strtolower( $match[1] ) ] = trim( $match[2] );
        }

        if ( empty( $headers['title'] ) || empty( $headers['slug'] ) ) {
            continue;
        }

        // Capture pattern output via output buffering (PHP + HTML).
        ob_start();
        include $file;
        $pattern_content = ob_get_clean();

        if ( empty( trim( $pattern_content ) ) ) {
            continue;
        }

        $categories = isset( $headers['categories'] )
            ? array_map( 'trim', explode( ',', $headers['categories'] ) )
            : array( 'dubstrap-sections' );

        register_block_pattern(
            'dubstrapx7/' . $headers['slug'],
            array(
                'title'       => $headers['title'],
                'description' => isset( $headers['description'] ) ? $headers['description'] : '',
                'categories'  => $categories,
                'content'     => $pattern_content,
            )
        );
    }
}
add_action( 'init', 'dubstrapx7_register_patterns_from_directory', 20 );
