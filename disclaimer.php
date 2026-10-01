<?php
/**
 * Template Name: Disclaimer
 *
 * Dedicated Disclaimer (Haftungsausschluss) Page for Fast IPTV Store (German Market)
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
        <!-- Alert Triangle / Info SVG Icon -->
        <svg class="text-white w-12 h-12 mx-auto mb-4 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
            <line x1="12" y1="9" x2="12" y2="13"/>
            <line x1="12" y1="17" x2="12.01" y2="17"/>
        </svg>

        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            Haftungsausschluss (Disclaimer)
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg relative z-10 mt-4 leading-relaxed">
            Rechtliche Hinweise zu unseren Inhalten und Dienstleistungen.
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT WRAPPER -->
<section class="bg-gray-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 md:p-12 text-gray-700 leading-relaxed">
        
        <!-- Section 1 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                1. Keine Hosting-Verantwortung
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                FASTIPTV hostet, speichert oder überträgt keine urheberrechtlich geschützten Medien (Videodateien, Live-Streams) auf eigenen Servern. Wir fungieren ausschließlich als Reseller für Netzwerke von Drittanbietern und stellen lediglich die Zugangsdaten (M3U/Xtream) zur Verfügung.
            </p>
        </div>

        <!-- Section 2 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                2. Verantwortung des Nutzers
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Der Endnutzer ist allein dafür verantwortlich, sicherzustellen, dass er das Recht hat, die bereitgestellten Inhalte in seinem jeweiligen Land oder seiner Gerichtsbarkeit anzusehen.
            </p>
        </div>

        <!-- Section 3 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                3. Externe Links
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Unsere Webseite kann Links zu externen Webseiten Dritter enthalten. Auf deren Inhalte haben wir keinen Einfluss und übernehmen dafür keine Gewähr.
            </p>
        </div>

        <!-- Section 4 -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                4. Verfügbarkeit
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Wir bemühen uns um eine ständige Verfügbarkeit des Dienstes. Wartungsarbeiten, Serverausfälle bei Drittanbietern oder höhere Gewalt können jedoch zu temporären Ausfällen führen, für die keine Haftung übernommen wird.
            </p>
        </div>

    </div>
</section>

<?php
get_footer();
