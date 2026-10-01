<?php
/**
 * Template Name: Refund Policy
 *
 * Dedicated Refund Policy (Rückerstattungsrichtlinie) Page for Fast IPTV Store (German Market)
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
        <!-- Credit Card / Money Return SVG Icon -->
        <svg class="text-white w-12 h-12 mx-auto mb-4 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="2" y="4" width="20" height="13" rx="2"/>
            <line x1="2" y1="9" x2="22" y2="9"/>
            <path d="M6 13h4"/>
            <path d="M16 21l-3-3 3-3"/>
            <path d="M13 18h6a2 2 0 0 0 2-2v-1"/>
        </svg>

        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            Rückerstattungsrichtlinie
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg relative z-10 mt-4 leading-relaxed">
            Unsere fairen Bedingungen für Rückgaben und Stornierungen.
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT WRAPPER -->
<section class="bg-gray-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 md:p-12 text-gray-700 leading-relaxed">
        
        <!-- Section 1 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                1. 7-Tage-Geld-zurück-Garantie
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Wir bieten eine 7-Tage-Geld-zurück-Garantie an, falls unser Service auf Ihren Geräten nachweislich nicht funktioniert und unser technischer Support das Problem nicht innerhalb von 48 Stunden lösen kann.
            </p>
        </div>

        <!-- Section 2 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                2. Ausnahmen von der Rückerstattung
            </h2>
            <ul class="space-y-3 mt-4 text-gray-600 text-base">
                <li class="flex items-start gap-3">
                    <span class="inline-block w-2 h-2 rounded-full bg-[#DD0000] mt-2 shrink-0"></span>
                    <span>Wenn Sie den Service einfach nicht mehr nutzen möchten, ohne dass ein technischer Defekt unsererseits vorliegt.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="inline-block w-2 h-2 rounded-full bg-[#DD0000] mt-2 shrink-0"></span>
                    <span>Wenn Ihr Internetanbieter (ISP) IPTV-Dienste blockiert und Sie sich weigern, ein VPN zu nutzen.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="inline-block w-2 h-2 rounded-full bg-[#DD0000] mt-2 shrink-0"></span>
                    <span>Wenn Ihr Account wegen Verstoßes gegen unsere AGB (z.B. Account-Sharing) gesperrt wurde.</span>
                </li>
            </ul>
        </div>

        <!-- Section 3 -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                3. Beantragung einer Rückerstattung
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Um eine Rückerstattung zu beantragen, kontaktieren Sie uns per E-Mail oder WhatsApp mit Ihrer Bestellnummer. Die Bearbeitung genehmigter Rückerstattungen dauert in der Regel 3 bis 5 Werktage.
            </p>
        </div>

    </div>
</section>

<?php
get_footer();
