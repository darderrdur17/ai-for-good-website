<?php
/**
 * AI for Good Theme — Functions
 *
 * Handles theme setup, asset registration, and helper functions.
 * Compatible with WordPress 5.8+ / PHP 7.4+
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ============================================================
   THEME CONSTANTS
   ============================================================ */
define( 'AFG_VERSION',   '1.0.0' );
define( 'AFG_DIR',       get_template_directory() );
define( 'AFG_URI',       get_template_directory_uri() );
define( 'AFG_ASSETS',    AFG_URI . '/assets' );

/* ============================================================
   THEME SETUP
   ============================================================ */
function afg_setup() {
    // Make translations available
    load_theme_textdomain( 'ai-for-good', AFG_DIR . '/languages' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable post thumbnails
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup support
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );

    // Custom logo support
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    // Gutenberg / block editor colour palette (mirrors our CSS tokens)
    add_theme_support( 'editor-color-palette', [
        [ 'name' => __( 'Primary Orange', 'ai-for-good' ), 'slug' => 'primary',    'color' => '#E05D24' ],
        [ 'name' => __( 'Accent Red',     'ai-for-good' ), 'slug' => 'accent',     'color' => '#B83808' ],
        [ 'name' => __( 'Foreground',     'ai-for-good' ), 'slug' => 'foreground', 'color' => '#1A1A1A' ],
        [ 'name' => __( 'Muted',          'ai-for-good' ), 'slug' => 'muted',      'color' => '#666666' ],
        [ 'name' => __( 'Background',     'ai-for-good' ), 'slug' => 'background', 'color' => '#FFFFFF' ],
        [ 'name' => __( 'Card',           'ai-for-good' ), 'slug' => 'card',       'color' => '#F8F8F8' ],
    ] );

    // Wide / full-width block alignment
    add_theme_support( 'align-wide' );

    // Responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Register navigation menus
    register_nav_menus( [
        'primary'   => __( 'Primary Navigation', 'ai-for-good' ),
        'footer'    => __( 'Footer Navigation',  'ai-for-good' ),
    ] );
}
add_action( 'after_setup_theme', 'afg_setup' );

/* ============================================================
   ENQUEUE STYLES & SCRIPTS
   ============================================================ */
function afg_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'afg-style',
        get_stylesheet_uri(),
        [],
        AFG_VERSION
    );

    // Google Fonts — Inter (clean, professional, great on all screens)
    wp_enqueue_style(
        'afg-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // Main JavaScript (defer so it doesn't block rendering)
    wp_enqueue_script(
        'afg-main',
        AFG_ASSETS . '/js/main.js',
        [],
        AFG_VERSION,
        true  // load in footer
    );

    // Pass localised data to JS if needed
    wp_localize_script( 'afg-main', 'afgData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'afg_nonce' ),
        'siteUrl' => esc_url( home_url( '/' ) ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'afg_enqueue_assets' );

/* ============================================================
   REMOVE UNNECESSARY DEFAULT SCRIPTS/STYLES
   ============================================================ */
function afg_cleanup_head() {
    // Remove RSD link
    remove_action( 'wp_head', 'rsd_link' );
    // Remove Windows Live Writer link
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // Remove WordPress version meta (security)
    remove_action( 'wp_head', 'wp_generator' );
    // Remove shortlink
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'afg_cleanup_head' );

/* ============================================================
   WIDGETS / SIDEBARS
   ============================================================ */
function afg_register_sidebars() {
    register_sidebar( [
        'name'          => __( 'Primary Sidebar', 'ai-for-good' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets appear in the blog sidebar.', 'ai-for-good' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget Area', 'ai-for-good' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets appear in the footer.', 'ai-for-good' ),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'afg_register_sidebars' );

/* ============================================================
   BODY CLASS HELPERS
   ============================================================ */
function afg_body_classes( $classes ) {
    if ( is_singular() && ! is_front_page() ) {
        $classes[] = 'singular';
    }
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'has-sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'afg_body_classes' );

/* ============================================================
   CUSTOM EXCERPT LENGTH
   ============================================================ */
function afg_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'afg_excerpt_length', 999 );

function afg_excerpt_more( $more ) {
    return '&hellip; <a class="read-more" href="' . get_permalink() . '">' . __( 'Read more', 'ai-for-good' ) . '</a>';
}
add_filter( 'excerpt_more', 'afg_excerpt_more' );

/* ============================================================
   THEME COLOUR — KADENCE PALETTE COMPATIBILITY
   Kadence uses palette1–palette9. Map our tokens to those.
   ============================================================ */
function afg_kadence_palette_compatibility() {
    // palette3 ≈ primary (orange) | palette9 ≈ background/white | palette2 ≈ accent
    ?>
    <style>
        :root {
            --global-palette1: #E05D24;
            --global-palette2: #B83808;
            --global-palette3: #E05D24;
            --global-palette4: #1A1A1A;
            --global-palette5: #666666;
            --global-palette6: #E2E2E2;
            --global-palette7: #F8F8F8;
            --global-palette8: #FEF5F0;
            --global-palette9: #FFFFFF;
        }
        .has-theme-palette-3-color { color: #E05D24; }
        .has-theme-palette-9-background-color { background-color: #FFFFFF; }
        .theme-palette3  { color: #E05D24; }
        .theme-palette9  { background-color: #FFFFFF; }
    </style>
    <?php
}
add_action( 'wp_head', 'afg_kadence_palette_compatibility' );

/* ============================================================
   SECURITY — HIDE WP VERSION
   ============================================================ */
add_filter( 'the_generator', '__return_empty_string' );

/* ============================================================
   HELPER: SVG ICONS
   Returns an inline SVG icon string for use in templates.
   ============================================================ */
function afg_icon( $name, $extra_classes = '' ) {
    $class = 'icon' . ( $extra_classes ? ' ' . esc_attr( $extra_classes ) : '' );
    $icons = [
        'users'    => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'globe'    => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'graduate' => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'arrow-right' => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
        'calendar' => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
        'building'   => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M9 21V9"/></svg>',
        'mail'       => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'external'   => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>',
        'map-pin'    => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'quote'      => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>',
        'chevron-down' => '<svg class="' . $class . '" viewBox="0 0 24 24" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>',
    ];

    return $icons[ $name ] ?? '';
}

/* ============================================================
   CUSTOM WALKER — Clean nav_menu output
   ============================================================ */
class AFG_Walker_Nav extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = implode( ' ', $item->classes );
        $url     = esc_url( $item->url );
        $title   = esc_html( $item->title );
        $target  = $item->target ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $rel     = $item->xfn ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
        $output .= '<a href="' . $url . '"' . $target . $rel . '>' . $title . '</a>';
    }
    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}
