<?php
/**
 * Localhost Live Preview Router
 * Emulates the WordPress template engine for instant standalone theme preview.
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// Allow direct serving of static files (css, js, images)
$request_uri = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
if ( $request_uri !== '/' && file_exists( __DIR__ . $request_uri ) ) {
    return false;
}

// Minimal WordPress helper functions for previewing without full WP installation
if ( ! function_exists( 'language_attributes' ) ) {
    function language_attributes() {
        echo 'lang="de-DE"';
    }
}

if ( ! function_exists( 'bloginfo' ) ) {
    function bloginfo( $show = '' ) {
        if ( $show === 'charset' ) {
            echo 'UTF-8';
        } elseif ( $show === 'name' ) {
            echo 'FAST IPTV';
        }
    }
}

if ( ! function_exists( 'wp_head' ) ) {
    function wp_head() {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">' . "\n";
        echo '<script src="https://cdn.tailwindcss.com"></script>' . "\n";
        echo <<<'EOT'
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif']
                        },
                        colors: {
                            brand: '#DD0000',
                            'brand-red': '#DD0000',
                            gold: '#FFCE00',
                            'brand-gold': '#FFCE00',
                            'de-red': '#DD0000',
                            'de-gold': '#FFCE00',
                            'de-black': '#000000',
                            primary: '#DD0000',
                            secondary: '#FFCE00',
                            'main-bg': '#FFFFFF',
                            'alt-bg': '#F8F9FA',
                            'main-text': '#374151'
                        }
                    }
                }
            };
        </script>

EOT;
        echo '<link rel="stylesheet" href="style.css">' . "\n";
    }
}

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {}
}

if ( ! function_exists( 'body_class' ) ) {
    function body_class( $class = '' ) {
        echo 'class="' . esc_attr( $class ) . '"';
    }
}

if ( ! function_exists( 'wp_footer' ) ) {
    function wp_footer() {}
}

if ( ! function_exists( 'esc_url' ) ) {
    function esc_url( $url ) {
        return htmlspecialchars( (string) $url, ENT_QUOTES, 'UTF-8' );
    }
}

if ( ! function_exists( 'esc_html' ) ) {
    function esc_html( $text ) {
        return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' );
    }
}

if ( ! function_exists( 'esc_attr' ) ) {
    function esc_attr( $text ) {
        return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' );
    }
}

if ( ! function_exists( 'home_url' ) ) {
    function home_url( $path = '' ) {
        return '/' . ltrim( $path, '/' );
    }
}

if ( ! function_exists( 'get_header' ) ) {
    function get_header() {
        require __DIR__ . '/header.php';
    }
}

if ( ! function_exists( 'get_footer' ) ) {
    function get_footer() {
        require __DIR__ . '/footer.php';
    }
}

// Route pricing templates
if ( in_array( $request_uri, [ '/pricing', '/tarife', '/preise', '/pricing-page', '/pricing-page.php', '/page-pricing.php' ], true ) ) {
    require __DIR__ . '/page-pricing.php';
    return;
}

// Route 24h Free Trial templates
if ( in_array( $request_uri, [ '/free-trial', '/free-trial.php', '/page-free-trial.php', '/test', '/testen' ], true ) ) {
    require __DIR__ . '/page-free-trial.php';
    return;
}

// Route blog templates
if ( in_array( $request_uri, [ '/blog', '/blog.php', '/page-blog.php' ], true ) ) {
    require __DIR__ . '/page-blog.php';
    return;
}

// Route contact templates
if ( in_array( $request_uri, [ '/contact', '/contact.php', '/page-contact.php', '/contact-us', '/kontakt' ], true ) ) {
    require __DIR__ . '/page-contact.php';
    return;
}

// Route FAQ templates
if ( in_array( $request_uri, [ '/faq', '/faq.php', '/page-faq.php', '/faq-page', '/faq-page.php' ], true ) ) {
    require __DIR__ . '/page-faq.php';
    return;
}

// Route installation guide templates
if ( in_array( $request_uri, [ '/installation', '/installation.php', '/page-installation.php', '/installation-page', '/installation-page.php', '/anleitung' ], true ) ) {
    require __DIR__ . '/page-installation.php';
    return;
}

// Route DMCA templates
if ( in_array( $request_uri, [ '/dmca', '/dmca.php', '/page-dmca.php', '/dmca-page', '/dmca-page.php' ], true ) ) {
    require __DIR__ . '/page-dmca.php';
    return;
}

// Route Terms & Conditions templates
if ( in_array( $request_uri, [ '/terms', '/terms.php', '/page-terms.php', '/agb' ], true ) ) {
    require __DIR__ . '/terms.php';
    return;
}

// Route Privacy Policy templates
if ( in_array( $request_uri, [ '/privacy', '/privacy.php', '/page-privacy.php', '/datenschutz' ], true ) ) {
    require __DIR__ . '/privacy.php';
    return;
}

// Route Refund Policy templates
if ( in_array( $request_uri, [ '/refund', '/refund.php', '/page-refund.php', '/widerruf' ], true ) ) {
    require __DIR__ . '/refund.php';
    return;
}

// Route Disclaimer templates
if ( in_array( $request_uri, [ '/disclaimer', '/disclaimer.php', '/page-disclaimer.php', '/haftungsausschluss' ], true ) ) {
    require __DIR__ . '/disclaimer.php';
    return;
}

// Render front page template
require __DIR__ . '/front-page.php';
