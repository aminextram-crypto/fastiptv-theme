<?php
/**
 * The header for Fast IPTV Store theme (German Market - Clean Modern Typography)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-main-bg text-gray-700 antialiased min-h-screen flex flex-col font-sans' ); ?>>
<?php wp_body_open(); ?>

<!-- 1. DARK TOP BAR -->
<div class="bg-black text-white text-xs py-2.5 border-b border-gray-800">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
        <!-- Left Text -->
        <div class="flex items-center gap-2 text-center sm:text-left">
            <span class="inline-block w-2 h-2 rounded-full bg-[#DD0000]"></span>
            <span class="font-normal tracking-wide">Deutschlands bester IPTV-Anbieter – Ihre Suche endet hier!</span>
        </div>
        <!-- Right Features with Icons -->
        <div class="flex items-center gap-4 text-gray-300 font-normal">
            <span class="inline-flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-[#FFCE00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span>Schnell</span>
            </span>
            <span class="text-gray-600">•</span>
            <span class="inline-flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span>Zuverlässig</span>
            </span>
            <span class="text-gray-600">•</span>
            <span class="inline-flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Unbegrenzt</span>
            </span>
        </div>
    </div>
</div>

<?php
$current_page_uri       = isset( $_SERVER['REQUEST_URI'] ) ? parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '';
$is_pricing_active      = in_array( $current_page_uri, array( '/pricing', '/pricing-page', '/pricing-page.php', '/page-pricing.php', '/tarife', '/preise' ), true );
$is_installation_active = in_array( $current_page_uri, array( '/installation', '/installation.php', '/page-installation.php', '/installation-page', '/installation-page.php', '/anleitung' ), true );
$is_blog_active         = in_array( $current_page_uri, array( '/blog', '/blog.php', '/page-blog.php' ), true );
$is_dmca_active         = in_array( $current_page_uri, array( '/dmca', '/dmca.php', '/page-dmca.php', '/dmca-page', '/dmca-page.php' ), true );
$is_contact_active      = in_array( $current_page_uri, array( '/contact', '/contact.php', '/page-contact.php', '/contact-us' ), true );
$is_faq_active          = in_array( $current_page_uri, array( '/faq', '/faq.php', '/page-faq.php', '/faq-page', '/faq-page.php' ), true );
?>
<!-- 2. DARK NAVBAR -->
<header id="masthead" class="site-header bg-[#000000] border-b border-gray-800 sticky top-0 z-50 shadow-md">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        <!-- Logo (Reduced to font-bold, white text) -->
        <div class="site-branding flex items-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flex items-center gap-2.5 text-2xl font-bold text-white tracking-tight">
                <span class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-[#DD0000] text-white shadow-sm font-semibold">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                </span>
                <span>FAST<span class="text-[#DD0000]">IPTV</span></span>
            </a>
        </div>

        <!-- Centered Navigation Links (font-medium, text-white) -->
        <nav id="site-navigation" class="hidden md:flex items-center space-x-5 lg:space-x-7 text-sm font-medium">
            <a href="/pricing-page" class="<?php echo $is_pricing_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">Tarife</a>
            <a href="/installation" class="<?php echo $is_installation_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">Installationsanleitung</a>
            <a href="/blog" class="<?php echo $is_blog_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">Blog</a>
            <a href="/dmca" class="<?php echo $is_dmca_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">DMCA-Hinweis</a>
            <a href="/contact" class="<?php echo $is_contact_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">Kontakt</a>
            <a href="/faq" class="<?php echo $is_faq_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> transition-colors">FAQ</a>
        </nav>

        <!-- Right Side: CTA Button & Mobile Menu Toggle -->
        <div class="flex items-center space-x-3 sm:space-x-4">
            <a href="/free-trial" class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 rounded-lg text-xs sm:text-sm font-medium text-white bg-[#DD0000] hover:bg-[#b80000] shadow-sm transition-all whitespace-nowrap">
                Kostenlos Testen
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" type="button" class="md:hidden text-gray-300 hover:text-white p-2 focus:outline-none" aria-label="Menü umschalten">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/95 border-b border-gray-800 px-6 pt-2 pb-6 space-y-3 font-medium text-sm text-white">
        <a href="/pricing-page" class="block py-2.5 <?php echo $is_pricing_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">Tarife</a>
        <a href="/installation" class="block py-2.5 <?php echo $is_installation_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">Installationsanleitung</a>
        <a href="/blog" class="block py-2.5 <?php echo $is_blog_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">Blog</a>
        <a href="/dmca" class="block py-2.5 <?php echo $is_dmca_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">DMCA-Hinweis</a>
        <a href="/contact" class="block py-2.5 <?php echo $is_contact_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">Kontakt</a>
        <a href="/faq" class="block py-2.5 <?php echo $is_faq_active ? 'text-[#DD0000] font-semibold' : 'text-white hover:text-[#DD0000]'; ?> border-b border-gray-900 transition-colors">FAQ</a>
    </div>
</header>

<script>
    (function() {
        const toggleBtn = document.getElementById('mobile-menu-btn');
        const mobileNav = document.getElementById('mobile-menu');
        if (toggleBtn && mobileNav) {
            toggleBtn.addEventListener('click', function() {
                mobileNav.classList.toggle('hidden');
            });
            mobileNav.querySelectorAll('a').forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileNav.classList.add('hidden');
                });
            });
        }
    })();
</script>

<!-- German Flag Stripe — h-[12px] hard-stop gradient: black | red | gold -->
<div class="w-full h-[12px]" style="background:linear-gradient(to right,#000000 33.33%,#DD0000 33.33%,#DD0000 66.66%,#FFCE00 66.66%)"></div>

<main id="primary" class="site-main flex-grow">

