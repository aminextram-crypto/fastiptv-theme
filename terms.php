<?php
/**
 * Template Name: Terms & Conditions
 *
 * Dedicated Terms & Conditions (AGB) Page for Fast IPTV Store (German Market)
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
        <!-- Document / Contract SVG Icon -->
        <svg class="text-white w-12 h-12 mx-auto mb-4 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="16" y1="13" x2="8" y2="13"/>
            <line x1="16" y1="17" x2="8" y2="17"/>
            <line x1="10" y1="9" x2="8" y2="9"/>
        </svg>

        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            Allgemeine Geschäftsbedingungen (AGB)
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg relative z-10 mt-4 leading-relaxed">
            Bitte lesen Sie unsere Nutzungsbedingungen sorgfältig durch.
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT WRAPPER -->
<section class="bg-gray-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 md:p-12 text-gray-700 leading-relaxed">
        
        <!-- Section 1 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                1. Geltungsbereich
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Diese Allgemeinen Geschäftsbedingungen gelten für alle Verträge, die zwischen FASTIPTV und dem Kunden über unsere Webseite abgeschlossen werden.
            </p>
        </div>

        <!-- Section 2 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                2. Vertragsabschluss und Leistungen
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Der Vertrag kommt zustande, sobald der Kunde den Bestellvorgang abschließt und die Zahlung erfolgreich autorisiert wurde. Wir stellen Zugang zu IPTV-Streams (Live-TV &amp; VOD) bereit. Eine 100%ige Uptime kann aufgrund technischer Abhängigkeiten vom Internet-Provider des Kunden nicht garantiert werden.
            </p>
        </div>

        <!-- Section 3 -->
        <div class="mb-10 pb-8 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                3. Nutzungsrechte und Account-Sharing
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Das Abonnement ist ausschließlich für den privaten Gebrauch bestimmt. Account-Sharing (das Teilen der Zugangsdaten mit Dritten) ist strengstens untersagt und führt zur sofortigen und dauerhaften Sperrung des Accounts ohne Anspruch auf Rückerstattung.
            </p>
        </div>

        <!-- Section 4 -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                4. Zahlungsbedingungen
            </h2>
            <p class="text-gray-600 leading-relaxed text-base">
                Alle Preise sind Endpreise. Wir akzeptieren Zahlungen per Kreditkarte, PayPal und ausgewählten Kryptowährungen. Es handelt sich um Prepaid-Dienste ohne automatische Vertragsverlängerung (keine Abofalle).
            </p>
        </div>

    </div>
</section>

<?php
get_footer();
