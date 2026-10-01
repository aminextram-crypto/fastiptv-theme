<?php
/**
 * Template Name: 24h Free Trial
 *
 * Dedicated 24h Free Trial (Kostenloser Testzugang) Page for Fast IPTV Store (German Market)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<style>
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-14px);
    }
}
.animate-float {
    animation: float 6s ease-in-out infinite;
}
</style>

<!-- 1. HERO SECTION (Clean Light Mode - 2 Columns) -->
<section class="bg-white py-20 md:py-24 font-sans relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Content -->
            <div class="lg:col-span-7 text-left">
                <!-- Overline -->
                <div class="text-[#DD0000] font-bold text-sm tracking-widest uppercase mb-4 inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#DD0000] animate-pulse"></span>
                    <span>100% RISIKOFREI • KEINE KREDITKARTE</span>
                </div>

                <!-- H1 (SEO Optimized) -->
                <h1 class="text-4xl sm:text-5xl lg:text-[3.25rem] font-extrabold text-gray-900 leading-tight tracking-tight">
                    IPTV 24 Stunden <span class="text-[#DD0000]">Kostenlos Testen</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-gray-600 mt-6 text-lg sm:text-xl leading-relaxed max-w-2xl">
                    Erleben Sie Premium IPTV in Deutschland. Überzeugen Sie sich selbst von unserer 4K-Qualität und Stabilität – völlig unverbindlich und ohne automatische Verlängerung.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mt-8">
                    <button type="button" onclick="openTrialModal()" class="inline-flex items-center justify-center bg-[#DD0000] hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 text-base text-center">
                        Jetzt Kostenlos Testen
                    </button>
                    <a href="/installation" class="inline-flex items-center justify-center bg-white border-2 border-gray-200 hover:border-gray-900 text-gray-900 font-bold py-4 px-8 rounded-lg transition-all duration-300 text-base text-center">
                        Installationsanleitung
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="flex items-center gap-6 mt-8 pt-6 border-t border-gray-100 text-xs text-gray-500 font-medium">
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Keine Zahlungsdaten</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Automatisches Ende</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>In 5 Min. aktiv</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Transparent PNG Floating Composition -->
            <div class="lg:col-span-5 flex justify-center items-center relative">
                <div class="relative w-full max-w-lg lg:max-w-none animate-float animate-[float_6s_ease-in-out_infinite]">
                    <img src="/trial-hero-devices.png" alt="IPTV 24 Stunden Testzugang auf Smart TV und Smartphone" class="w-full h-auto object-contain drop-shadow-2xl" loading="eager" width="600" height="600">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. WHAT DO YOU GET GRID (Features) -->
<section id="features" class="bg-gray-50 py-20 font-sans border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Was beinhaltet der IPTV Testzugang?
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                Erhalten Sie 24 Stunden lang uneingeschränkten Vollzugriff auf unsere gesamte Premium-Infrastruktur.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- 6 Minimalist White Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Card 1 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"/>
                        <polyline points="17 2 12 7 7 2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Über 25.000 Live-Sender
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    inkl. DACH-Region (Deutschland, Österreich, Schweiz) sowie alle internationalen Premium-Sender.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="23 7 16 12 23 17 23 7"/>
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Riesige VOD-Mediathek
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Filme &amp; Serien auf Abruf in deutscher Synchronisation, stetig aktualisiert mit den neuesten Blockbustern.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 12h8"/>
                        <path d="M12 8v8"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    4K &amp; Full HD Qualität
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Gestochen scharfe Bilder mit bis zu 60 Bildern pro Sekunde (60 FPS) für flüssigen Spitzen-Sport.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Kein Buffering
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Optimierte High-Speed Server in Frankfurt und Zürich mit 99,9% Uptime ohne Drosselung.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    EPG &amp; Catch-Up
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Integrierter elektronischer TV-Guide (EPG) und 7-Tage-Replay zum zeitversetzten Fernsehen.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white p-7 rounded-xl border border-gray-100 shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    Auf allen Geräten
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Kompatibel mit Smart TV (Samsung, LG), Amazon Fire TV Stick, Apple iOS, Android TV &amp; Boxen sowie PC.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- 3. 3-STEP PROCESS (How to get it) -->
<section id="how-it-works" class="bg-white py-20 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Wie erhalte ich meinen kostenlosen Test?
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                In drei einfachen Schritten innerhalb weniger Minuten auf Ihrem Fernseher oder Smartphone streamen.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- 3 Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            
            <!-- Step 1 -->
            <div class="border border-gray-100 p-8 rounded-2xl relative bg-white shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300">
                <span class="absolute top-4 right-6 text-5xl font-black text-gray-100 select-none pointer-events-none">1</span>
                <div class="w-12 h-12 rounded-xl bg-black text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    01
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Formular ausfüllen
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Geben Sie einfach Ihre E-Mail und Ihr Gerät an. Keine Kreditkarte oder Zahlungsangaben erforderlich.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="border border-gray-100 p-8 rounded-2xl relative bg-white shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300">
                <span class="absolute top-4 right-6 text-5xl font-black text-gray-100 select-none pointer-events-none">2</span>
                <div class="w-12 h-12 rounded-xl bg-[#DD0000] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    02
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Zugangsdaten erhalten
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Wir senden Ihnen die Daten in wenigen Minuten per E-Mail oder WhatsApp mit Ihrer persönlichen M3U / Xtream API.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="border border-gray-100 p-8 rounded-2xl relative bg-white shadow-sm hover:border-[#DD0000] hover:shadow-md transition-all duration-300">
                <span class="absolute top-4 right-6 text-5xl font-black text-gray-100 select-none pointer-events-none">3</span>
                <div class="w-12 h-12 rounded-xl bg-amber-500 text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    03
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Sofort streamen
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Anleitung befolgen und 24 Stunden unverbindlich genießen. Der Zugang endet automatisch ohne Verpflichtung.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- 4. MID-PAGE VISUAL (Large Centered Realistic Mockup) -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 my-12 md:my-20 font-sans">
    <div class="rounded-2xl overflow-hidden shadow-2xl border border-gray-200 bg-white group">
        <img src="/trial-devices-mockup.jpg" alt="IPTV Multi-Device Streaming Setup: Smart TV, Laptop und Smartphone" class="w-full h-auto object-cover group-hover:scale-102 transition-transform duration-700" loading="lazy" width="1280" height="720">
    </div>
</section>

<!-- 5. FREE TRIAL FAQ (Mini Accordion) -->
<section id="trial-faq" class="bg-gray-50 py-20 font-sans border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Häufige Fragen zum Testzugang
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                Transparente Antworten für Ihren risikofreien 24-Stunden-Start.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- 4 Split-Layout <details> Accordions -->
        <div class="max-w-4xl mx-auto space-y-4">
            
            <!-- Accordion 1 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base sm:text-lg">
                    <span class="pr-4">Brauche ich eine Kreditkarte?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Nein, der Test ist zu 100% kostenlos und erfordert keine Zahlungsdaten.
                </div>
            </details>

            <!-- Accordion 2 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base sm:text-lg">
                    <span class="pr-4">Muss ich den Test kündigen?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Nein. Der Zugang läuft nach 24 Stunden automatisch ab. Es gibt keine Abofalle.
                </div>
            </details>

            <!-- Accordion 3 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base sm:text-lg">
                    <span class="pr-4">Kann ich bei wichtigen Sport-Events testen?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Wir deaktivieren Testzugänge manchmal während großer Live-Events, um die Server für zahlende Kunden stabil zu halten.
                </div>
            </details>

            <!-- Accordion 4 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base sm:text-lg">
                    <span class="pr-4">Auf welchen Geräten kann ich testen?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Auf allen! Smart TV, Firestick, Apple TV, PC und Smartphones.
                </div>
            </details>

        </div>

    </div>
</section>

<!-- 6. FINAL CTA BANNER (Bottom) -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 my-16 md:my-20 font-sans">
    <div class="bg-[#0a0a0a] rounded-3xl p-10 sm:p-14 text-center relative overflow-hidden shadow-2xl border border-gray-800">
        
        <!-- Slanted German Flag Stripes on Left Background Edge -->
        <div class="absolute left-[-3rem] top-0 bottom-0 w-32 flex -skew-x-12 opacity-40 z-0 pointer-events-none">
            <div class="w-1/3 bg-black"></div>
            <div class="w-1/3 bg-[#DD0000]"></div>
            <div class="w-1/3 bg-[#FFCE00]"></div>
        </div>

        <!-- Ambient Glow -->
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10">
            <div class="text-[#DD0000] font-bold text-xs tracking-widest uppercase mb-3">
                SOFORTIGER TESTZUGANG
            </div>
            <h2 class="text-white font-extrabold text-2xl sm:text-3xl md:text-4xl tracking-tight max-w-xl mx-auto">
                Starten Sie Ihren 24h Test noch heute
            </h2>
            <p class="text-gray-400 mt-3 text-sm sm:text-base max-w-lg mx-auto leading-relaxed">
                In wenigen Minuten erhalten Sie Ihre Zugangsdaten per E-Mail oder WhatsApp.
            </p>
            <button type="button" onclick="openTrialModal()" class="inline-flex items-center justify-center bg-[#DD0000] hover:bg-red-700 text-white font-bold py-4 px-10 rounded-lg mt-6 shadow-lg hover:shadow-red-600/30 transition-all duration-300 text-base">
                Zugangsdaten anfordern
            </button>
        </div>

    </div>
</section>

<!-- INTERACTIVE TRIAL REQUEST MODAL -->
<div id="trial-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/75 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300" aria-modal="true" role="dialog">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl relative transform scale-95 transition-transform duration-300" id="trial-modal-content">
        
        <!-- Close Button -->
        <button type="button" onclick="closeTrialModal()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors" aria-label="Schließen">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Header -->
        <div class="text-center mb-6">
            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-[#DD0000] uppercase tracking-wider mb-2">
                24H TESTZUGANG
            </span>
            <h3 class="text-2xl font-extrabold text-gray-900">
                Kostenlosen Test anfordern
            </h3>
            <p class="text-xs text-gray-500 mt-1">
                Keine Kreditkarte erforderlich • Automatischer Ablauf nach 24h
            </p>
        </div>

        <!-- Form -->
        <form onsubmit="handleTrialSubmit(event)" class="space-y-4">
            <div>
                <label for="trial-email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    E-Mail-Adresse <span class="text-[#DD0000]">*</span>
                </label>
                <input type="email" id="trial-email" required placeholder="ihre-email@beispiel.de" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#DD0000] focus:border-transparent">
            </div>

            <div>
                <label for="trial-device" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                    Ihr bevorzugtes Gerät <span class="text-[#DD0000]">*</span>
                </label>
                <select id="trial-device" required class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#DD0000] focus:border-transparent bg-white">
                    <option value="firetv">Amazon Fire TV (Stick / Cube)</option>
                    <option value="smarttv">Smart TV (Samsung / LG / Hisense)</option>
                    <option value="androidtv">Android TV / Box (Nvidia Shield, Xiaomi)</option>
                    <option value="apple">Apple iOS / Apple TV</option>
                    <option value="pc">Windows PC / Mac OS</option>
                    <option value="mag">MAG Box / Stalker Portal</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-[#DD0000] hover:bg-red-700 text-white font-bold py-3.5 px-6 rounded-lg transition-colors text-sm shadow-md flex items-center justify-center gap-2">
                <span>Jetzt Testdaten erhalten</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </form>

        <div id="trial-success" class="hidden mt-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm text-center">
            <strong>Vielen Dank!</strong> Ihre Anfrage wurde registriert. Ihre Zugangsdaten werden in wenigen Minuten per E-Mail versendet.
        </div>

        <!-- WhatsApp Alternative -->
        <div class="mt-6 pt-5 border-t border-gray-100 text-center">
            <span class="text-xs text-gray-500 block mb-2">Oder noch schneller direkt per WhatsApp erhalten:</span>
            <a href="https://wa.me/4915212345678?text=Hallo%20FASTIPTV,%20ich%20m%C3%B6chte%20einen%20kostenlosen%2024h%20Testzugang%20anfordern." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg text-xs font-bold text-white bg-[#25D366] hover:bg-[#20ba5a] transition-all w-full">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.777.879 2.796.879 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.768c0 5.485-4.464 9.949-9.969 9.949-1.749 0-3.385-.453-4.819-1.246l-5.212 1.357 1.385-5.068c-.902-1.499-1.423-3.253-1.423-5.022 0-5.484 4.464-9.95 9.969-9.95 5.505 0 9.969 4.466 9.969 9.982z"/>
                </svg>
                <span>Per WhatsApp anfordern</span>
            </a>
        </div>

    </div>
</div>

<script>
function openTrialModal() {
    const modal = document.getElementById('trial-modal');
    const content = document.getElementById('trial-modal-content');
    modal.classList.remove('hidden');
    setTimeout(function() {
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }, 10);
    document.body.style.overflow = 'hidden';
}

function closeTrialModal() {
    const modal = document.getElementById('trial-modal');
    const content = document.getElementById('trial-modal-content');
    modal.classList.add('opacity-0');
    content.classList.remove('scale-100');
    content.classList.add('scale-95');
    setTimeout(function() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }, 300);
}

function handleTrialSubmit(e) {
    e.preventDefault();
    document.getElementById('trial-success').classList.remove('hidden');
    setTimeout(function() {
        closeTrialModal();
    }, 3000);
}

document.getElementById('trial-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeTrialModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeTrialModal();
    }
});
</script>

<?php
get_footer();
