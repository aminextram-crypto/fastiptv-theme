<?php
/**
 * Fast IPTV Store functions and definitions (German Brand Identity & Modern Inter Typography)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'fast_iptv_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function fast_iptv_setup() {
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'fast_iptv_setup' );

/**
 * Enqueue scripts and styles with Inter Google Font and German Brand Color Palette.
 */
function fast_iptv_scripts() {
    // Enqueue Google Font: Inter (Weights 400, 500, 600, 700)
    wp_enqueue_style(
        'fast-iptv-font-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Enqueue theme primary stylesheet.
    wp_enqueue_style( 'fast-iptv-style', get_stylesheet_uri(), array( 'fast-iptv-font-inter' ), '1.2' );

    // Enqueue Tailwind CSS via CDN in the <head>.
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // Configure Tailwind CDN script with Inter font and German (DE) Color Palette.
    $tailwind_config = "
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        brand: '#DD0000',          /* German Flag Red - Primary Action */
                        'brand-red': '#DD0000',
                        gold: '#FFCE00',           /* German Flag Gold/Yellow - Secondary Accents & Badges */
                        'brand-gold': '#FFCE00',
                        'de-red': '#DD0000',
                        'de-gold': '#FFCE00',
                        'de-black': '#000000',     /* German Flag Black - Headings */
                        primary: '#DD0000',
                        secondary: '#FFCE00',
                        'main-bg': '#FFFFFF',
                        'alt-bg': '#F8F9FA',
                        'main-text': '#374151',
                    }
                }
            }
        };
    ";
    wp_add_inline_script( 'tailwind-cdn', $tailwind_config );
}
add_action( 'wp_enqueue_scripts', 'fast_iptv_scripts' );
