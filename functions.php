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
 * Replace any old staging domain (iptv.playxtram.store) with the production domain (https://deutschkaufeniptv.de).
 *
 * @param mixed $value URL or HTML string to sanitize.
 * @return mixed
 */
function fast_iptv_replace_staging_domain( $value ) {
    if ( is_string( $value ) ) {
        $value = str_replace(
            array( 'https://iptv.playxtram.store', 'http://iptv.playxtram.store' ),
            'https://deutschkaufeniptv.de',
            $value
        );
        $value = str_replace(
            array( 'href="/pricing-page"', 'href="#order"' ),
            'href="/checkout/"',
            $value
        );
    }
    return $value;
}

$fast_iptv_url_filters = array(
    'option_home',
    'option_siteurl',
    'home_url',
    'site_url',
    'content_url',
    'plugins_url',
    'theme_root_uri',
    'template_directory_uri',
    'stylesheet_directory_uri',
    'stylesheet_uri',
    'theme_file_uri',
    'wp_get_attachment_url',
    'the_content',
    'widget_text',
);

foreach ( $fast_iptv_url_filters as $filter_name ) {
    add_filter( $filter_name, 'fast_iptv_replace_staging_domain', 99 );
}

add_action(
    'template_redirect',
    function() {
        ob_start( 'fast_iptv_replace_staging_domain' );
    }
);

/**
 * Ensure custom theme routes (/checkout/, /iptv-tarife-germany/, etc.) resolve to their
 * dedicated theme templates even if the WordPress page slug or template assignment differs.
 */
add_filter(
    'template_include',
    function( $template ) {
        $request_path = isset( $_SERVER['REQUEST_URI'] ) ? parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '';
        $normalized   = $request_path !== '/' ? rtrim( (string) $request_path, '/' ) : '/';

        $route_map = array(
            '/checkout'                                           => 'page-checkout.php',
            '/kasse'                                              => 'page-checkout.php',
            '/bestellen'                                          => 'page-checkout.php',
            '/iptv-tarife-germany'                                => 'page-pricing.php',
            '/pricing'                                            => 'page-pricing.php',
            '/pricing-page'                                       => 'page-pricing.php',
            '/tarife'                                             => 'page-pricing.php',
            '/24h-iptv-kostenlos-testen-premium-testzugang'       => 'page-free-trial.php',
            '/free-trial'                                         => 'page-free-trial.php',
            '/installationsanleitung'                             => 'page-installation.php',
            '/installation'                                       => 'page-installation.php',
            '/dmca-hinweis'                                       => 'page-dmca.php',
            '/dmca'                                               => 'page-dmca.php',
            '/kontakt-support-premium-iptv-kundenservice'         => 'page-contact.php',
            '/contact'                                            => 'page-contact.php',
            '/iptv-faq-hilfe-haufig-gestellte-fragen'             => 'page-faq.php',
            '/faq'                                                => 'page-faq.php',
            '/agb-nutzungsbedingungen-premium-iptv'               => 'page-terms.php',
            '/datenschutzerklarung-sicherheit-fur-ihre-daten'     => 'page-privacy.php',
            '/geld-zuruck-garantie-ruckerstattung-premium-iptv'   => 'page-refund.php',
            '/haftungsausschluss-disclaimer-premium-iptv'         => 'page-disclaimer.php',
        );

        if ( isset( $route_map[ $normalized ] ) ) {
            $custom_template = get_template_directory() . '/' . $route_map[ $normalized ];
            if ( file_exists( $custom_template ) ) {
                global $wp_query;
                if ( isset( $wp_query ) && is_object( $wp_query ) ) {
                    $wp_query->is_404 = false;
                }
                status_header( 200 );
                return $custom_template;
            }
        }

        return $template;
    },
    99
);

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
