<?php
/**
 * Template Name: DMCA Notice
 *
 * Dedicated DMCA Notice Page for Fast IPTV Store (German Market)
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
        <!-- Sleek SVG Shield Icon -->
        <svg class="text-white w-12 h-12 mx-auto mb-4 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <circle cx="12" cy="11.5" r="3"/>
            <path d="M13.2 10.3a1.8 1.8 0 1 0 0 2.4"/>
        </svg>

        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            DMCA-Urheberrechtsrichtlinie
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg relative z-10 mt-4 leading-relaxed">
            Informationen zur Meldung von Urheberrechtsverletzungen und unserer Richtlinie für FASTIPTV.
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT WRAPPER -->
<section class="bg-gray-50 py-16 font-sans">
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 md:p-12">
        
        <!-- 3. COPYRIGHT PROTECTION POLICY -->
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 border-b border-gray-200 pb-3">
                Urheberrechtsschutz-Richtlinie
            </h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                FASTIPTV respektiert das geistige Eigentum anderer und erwartet dies auch von seinen Nutzern. Gemäß dem Digital Millennium Copyright Act (DMCA) reagieren wir zügig auf berechtigte Meldungen über Urheberrechtsverletzungen.
            </p>

            <!-- Important Notice Box -->
            <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mb-10 text-sm text-gray-700 rounded-r-lg">
                <strong>Wichtiger Hinweis:</strong> FASTIPTV hostet keine eigenen Medien oder Streams. Wir stellen lediglich die technische Infrastruktur bereit.
            </div>
        </div>

        <!-- 4. HOW TO FILE A DMCA COMPLAINT -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 border-b border-gray-200 pb-3">
                So reichen Sie eine DMCA-Beschwerde ein
            </h2>
            <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                Um eine rechtsgültige Meldung gemäß 17 U.S.C. § 512(c)(3) einzureichen, übermitteln Sie unserem Rechtsteam bitte eine schriftliche Mitteilung mit folgenden Angaben:
            </p>

            <!-- Vertical Steps List -->
            <div class="space-y-4">
                
                <!-- Step 1: User SVG -->
                <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 bg-gray-50/70 hover:bg-gray-50 transition-colors">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 mt-0.5" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">1. Ihre Kontaktdaten</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Name, Telefonnummer, Adresse und E-Mail des Rechteinhabers oder des autorisierten Vertreters.</p>
                    </div>
                </div>

                <!-- Step 2: Document SVG -->
                <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 bg-gray-50/70 hover:bg-gray-50 transition-colors">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 mt-0.5" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">2. Beschreibung des urheberrechtlich geschützten Werks</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Genaue Details zum Werk, das angeblich verletzt wurde (Titel, Urheberrechtsregistrierungsnummer oder Link zur Originalquelle).</p>
                    </div>
                </div>

                <!-- Step 3: Link SVG -->
                <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 bg-gray-50/70 hover:bg-gray-50 transition-colors">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 mt-0.5" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">3. Standort des verletzenden Materials</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">URLs oder exakte IP-Angaben zur Lokalisierung und eindeutigen Identifizierung des Inhalts auf unserer Plattform.</p>
                    </div>
                </div>

                <!-- Step 4: Checkmark / Shield SVG -->
                <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 bg-gray-50/70 hover:bg-gray-50 transition-colors">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 mt-0.5" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <polyline points="9 12 11 14 15 10"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">4. Erklärung nach bestem Wissen</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Eine eidesstattliche Erklärung über die Richtigkeit der Angaben sowie darüber, dass Sie in gutem Glauben handeln und zur Durchsetzung der Rechte bevollmächtigt sind.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- 5. DMCA REVIEW PROCESS (Horizontal Grid) -->
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 border-b border-gray-200 pb-3 mt-12">
                Unser Überprüfungsprozess
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-gray-50 p-6 rounded-xl border border-gray-200">
                
                <!-- Column 1: Mail SVG -->
                <div class="text-center p-4 bg-white rounded-lg border border-gray-100 shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-[#DD0000] flex items-center justify-center mx-auto mb-3" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base mb-2">1. Eingang der Meldung</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Eingangsbestätigung innerhalb von 24 Stunden nach Erhalt Ihrer vollständigen schriftlichen DMCA-Mitteilung.</p>
                </div>

                <!-- Column 2: Search SVG -->
                <div class="text-center p-4 bg-white rounded-lg border border-gray-100 shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-[#DD0000] flex items-center justify-center mx-auto mb-3" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base mb-2">2. Überprüfung</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Sorgfältige juristische und technische Prüfung des Hinweises auf Berechtigung und Vollständigkeit aller Pflichtangaben.</p>
                </div>

                <!-- Column 3: Action SVG -->
                <div class="text-center p-4 bg-white rounded-lg border border-gray-100 shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-[#DD0000] flex items-center justify-center mx-auto mb-3" aria-hidden="true">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base mb-2">3. Maßnahme ergriffen</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Bei berechtigten Ansprüchen: Unverzügliche Deaktivierung oder Sperrung des Zugriffs gemäß DMCA-Vorgaben.</p>
                </div>

            </div>
        </div>

        <!-- 6. FALSE CLAIMS WARNING (Red Alert Box) -->
        <div class="bg-red-50 border border-red-200 text-red-800 p-6 rounded-xl mt-10 shadow-xs">
            <h3 class="font-bold mb-2 text-base md:text-lg text-red-900 flex items-center gap-2">
                <svg class="w-5 h-5 text-red-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                    <line x1="12" y1="9" x2="12" y2="13"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
                <span>Warnung vor falschen Ansprüchen</span>
            </h3>
            <p class="text-sm text-red-700 leading-relaxed">
                Bitte beachten Sie, dass Sie gemäß § 512(f) des DMCA schadensersatzpflichtig gemacht werden können, wenn Sie absichtlich fälschlicherweise behaupten, dass Material urheberrechtlich geschützt ist.
            </p>
        </div>

        <!-- 7. SUBMIT CTA -->
        <div class="bg-[#0a0a0a] rounded-xl p-8 text-center mt-12 relative overflow-hidden shadow-lg">
            <h3 class="text-white text-xl font-bold mb-3">
                Senden Sie Ihre DMCA-Meldung
            </h3>
            <p class="text-gray-400 text-sm max-w-lg mx-auto mb-4 leading-relaxed">
                Senden Sie Ihre vollständige Mitteilung mit allen erforderlichen Angaben direkt an unsere Rechtsabteilung.
            </p>
            <div>
                <a href="mailto:legal@fastiptv.de?subject=DMCA%20Notice" class="inline-flex items-center gap-2 bg-[#DD0000] hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg mt-2 transition-colors shadow-md text-sm">
                    <svg class="w-4 h-4 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>E-Mail an Legal Team</span>
                </a>
            </div>
            <p class="text-xs text-gray-500 mt-4">
                Hinweis: Bitte geben Sie im Betreff stets &quot;DMCA NOTICE&quot; an, um eine sofortige Priorisierung zu gewährleisten.
            </p>
        </div>

    </div>
</section>

<?php
get_footer();
