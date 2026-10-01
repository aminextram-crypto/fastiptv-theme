<?php
/**
 * Template Name: Privacy Policy
 *
 * Dedicated Privacy Policy (Datenschutzerklärung) Page for Fast IPTV Store (German Market)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- 1. PAGE HERO (Premium Dark Mode with German Touch) -->
<section class="bg-[#0a0a0a] py-20 relative overflow-hidden font-sans border-b border-gray-800">
    
    <!-- The German Touch: Subtle, slanted German flag stripes on the left edge -->
    <div class="absolute left-[-4rem] md:left-[-2rem] top-0 bottom-0 w-40 md:w-56 flex -skew-x-12 opacity-30 z-0 pointer-events-none">
        <div class="w-1/3 bg-black"></div>
        <div class="w-1/3 bg-[#DD0000]"></div>
        <div class="w-1/3 bg-[#FFCE00]"></div>
    </div>

    <!-- Subtle Ambient Glows -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-red-600/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Shield / Lock SVG Icon -->
        <svg class="text-white w-12 h-12 mx-auto mb-4 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <rect x="9" y="11" width="6" height="5" rx="1"/>
            <path d="M10 11V9a2 2 0 1 1 4 0v2"/>
        </svg>

        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            Datenschutzerklärung
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg relative z-10 mt-4 leading-relaxed">
            Ihre Daten sind bei uns sicher. Erfahren Sie, wie wir Ihre Informationen schützen (DSGVO-konform).
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT WRAPPER -->
<section class="bg-gray-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 md:p-12 text-gray-700 leading-relaxed">
        
        <!-- Section 1 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                1. Datenerhebung und -speicherung
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Wir erheben nur die Daten, die für die Bereitstellung unseres Dienstes absolut notwendig sind (E-Mail-Adresse für den Versand der Zugangsdaten, Zahlungsreferenz). Wir speichern keine vollständigen Namen oder physischen Adressen, es sei denn, Sie geben diese freiwillig an.
            </p>
        </div>

        <!-- Section 2 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                2. Zahlungsdaten
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Wir speichern keine sensiblen Kreditkartendaten auf unseren Servern. Alle Zahlungen werden verschlüsselt über zertifizierte Drittanbieter (Payment Gateways) abgewickelt.
            </p>
        </div>

        <!-- Section 3 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                3. Cookies und Tracking
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Unsere Webseite verwendet essenzielle Cookies, um die Funktionalität (z.B. den Warenkorb) zu gewährleisten. Wir nutzen keine aggressiven Tracking-Tools von Drittanbietern, um Ihre Privatsphäre zu schützen.
            </p>
        </div>

        <!-- Section 4 -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                4. Ihre Rechte
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Sie haben das Recht auf Auskunft, Löschung und Sperrung Ihrer gespeicherten Daten. Kontaktieren Sie uns hierfür jederzeit unter <a href="mailto:support@fastiptv.de" class="text-[#DD0000] font-semibold hover:underline">support@fastiptv.de</a>.
            </p>
        </div>

    </div>
</section>

<?php
get_footer();
