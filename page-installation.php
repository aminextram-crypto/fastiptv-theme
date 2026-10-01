<?php
/**
 * Template Name: Installation Guide
 *
 * Dedicated Installation Guide Page for Fast IPTV Store (German Market)
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
        <div class="text-[#DD0000] text-sm font-bold tracking-widest uppercase mb-4 text-center relative z-10">
            IPTV INSTALLATIONSANLEITUNG
        </div>
        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center relative z-10 tracking-tight">
            Wie man IPTV installiert
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto mt-4 text-base md:text-lg relative z-10 leading-relaxed">
            Schritt-für-Schritt-Anleitungen für alle gängigen Geräte – in weniger als 5 Minuten betriebsbereit.
        </p>
    </div>
</section>

<!-- 2. SETUP TUTORIALS SECTION (Device Grid) -->
<section id="tutorials" class="bg-white py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                IPTV Setup Tutorials
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                Wählen Sie Ihr Gerät aus, um die Schritt-für-Schritt-Anleitung zu öffnen.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- Info Alert Box -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 max-w-4xl mx-auto mb-12 text-sm text-gray-600 text-center shadow-sm">
            <div class="flex items-center justify-center gap-2 mb-2 font-semibold text-gray-900">
                <svg class="w-5 h-5 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span>Bevor Sie beginnen</span>
            </div>
            <p class="leading-relaxed">
                Wir stellen nur das Abonnement zur Verfügung. Sie können jede beliebige IPTV-App verwenden. Ihr Abonnement funktioniert wie eine SIM-Karte, und die App ist das Smartphone.
            </p>
        </div>

        <!-- Device Grid -->
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 px-4">
            
            <!-- 1. Amazon Fire TV -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('firetv')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG Fire TV Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 3z"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    Amazon Fire TV
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    Stick / Cube
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

            <!-- 2. Android TV / Box -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('androidtv')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG Android TV / Box Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4 10a8 8 0 0 1 16 0v1H4v-1z"/>
                    <line x1="7" y1="4" x2="9" y2="7"/>
                    <line x1="17" y1="4" x2="15" y2="7"/>
                    <circle cx="9" cy="9.5" r="1" fill="currentColor"/>
                    <circle cx="15" cy="9.5" r="1" fill="currentColor"/>
                    <rect x="3" y="13" width="18" height="8" rx="2"/>
                    <circle cx="7" cy="17" r="1" fill="currentColor"/>
                    <line x1="11" y1="17" x2="17" y2="17"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    Android TV / Box
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    Nvidia Shield, Xiaomi
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

            <!-- 3. Smart TV -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('smarttv')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG Smart TV Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="2" y="3" width="20" height="14" rx="2"/>
                    <line x1="8" y1="21" x2="16" y2="21"/>
                    <line x1="12" y1="17" x2="12" y2="21"/>
                    <polygon points="10 8 15 10 10 12 10 8" fill="currentColor" stroke="none"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    Smart TV
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    Samsung, LG, Hisense
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

            <!-- 4. Apple / iOS -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('apple')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG Apple Logo Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.61-.75 1.04-1.8 1.01-2.87-.96.04-2.17.65-2.84 1.43-.58.67-1.08 1.74-1.01 2.8 1.08.08 2.23-.61 2.84-1.36z"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    Apple / iOS
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    iPhone, iPad, Apple TV
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

            <!-- 5. Windows / Mac -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('computer')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG Computer / Laptop Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="12" rx="2"/>
                    <path d="M2 19h20"/>
                    <path d="M9 16v3"/>
                    <path d="M15 16v3"/>
                    <line x1="8" y1="10" x2="16" y2="10"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    Windows / Mac
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    PC &amp; Laptops
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

            <!-- 6. MAG Box -->
            <div role="button" tabindex="0" onclick="openDeviceGuide('mag')" class="border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center hover:border-[#DD0000] hover:shadow-lg transition-all duration-300 cursor-pointer bg-white group focus:outline-none focus:ring-2 focus:ring-[#DD0000]">
                <!-- Pure Inline SVG MAG Set-top Box Icon -->
                <svg class="w-12 h-12 mb-4 text-gray-700 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="2" y="8" width="20" height="11" rx="2"/>
                    <line x1="5" y1="13.5" x2="11" y2="13.5"/>
                    <circle cx="15.5" cy="13.5" r="1.5" fill="currentColor"/>
                    <circle cx="19" cy="13.5" r="1.5" fill="currentColor"/>
                    <path d="M6 8V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3"/>
                </svg>
                <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-[#DD0000] transition-colors">
                    MAG Box
                </h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    Stalker Portal
                </p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#DD0000] mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    Anleitung ansehen &rarr;
                </span>
            </div>

        </div>

    </div>
</section>

<!-- 3. TROUBLESHOOTING TIPS SECTION -->
<section id="troubleshooting" class="bg-gray-50 py-16 font-sans border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Tipps zur Fehlerbehebung
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                Häufige Ursachen und schnelle Lösungen für ein stabiles, ruckelfreies Streaming-Erlebnis.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- Stacked Tip Rows -->
        <div class="max-w-4xl mx-auto flex flex-col gap-4 px-4">
            
            <!-- Tip 1: WiFi / Internet -->
            <div class="bg-white border border-gray-200 p-5 rounded-lg flex items-start gap-4 text-sm text-gray-700 shadow-sm hover:border-gray-300 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0" aria-hidden="true">
                    <!-- Inline SVG WiFi Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12.55a11 11 0 0 1 14.08 0"/>
                        <path d="M1.42 9a16 16 0 0 1 21.16 0"/>
                        <path d="M8.53 16.11a6 6 0 0 1 6.95 0"/>
                        <circle cx="12" cy="20" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <div class="flex-grow pt-1">
                    <p class="font-medium text-gray-900">
                        Überprüfen Sie Ihre Internetverbindung. Eine stabile Verbindung von mindestens 16 Mbps wird für reibungsloses Streaming empfohlen.
                    </p>
                </div>
            </div>

            <!-- Tip 2: Key / Password Credentials -->
            <div class="bg-white border border-gray-200 p-5 rounded-lg flex items-start gap-4 text-sm text-gray-700 shadow-sm hover:border-gray-300 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0" aria-hidden="true">
                    <!-- Inline SVG Key / Password Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 2l-2 2m-1.5 1.5L16 7l-2-2-1.5 1.5 2 2-3 3"/>
                        <circle cx="7.5" cy="15.5" r="5.5"/>
                    </svg>
                </div>
                <div class="flex-grow pt-1">
                    <p class="font-medium text-gray-900">
                        Stellen Sie sicher, dass Ihre Xtream Codes (Benutzername &amp; Passwort) korrekt eingegeben wurden. Achten Sie auf Groß- und Kleinschreibung.
                    </p>
                </div>
            </div>

            <!-- Tip 3: Refresh / App Update -->
            <div class="bg-white border border-gray-200 p-5 rounded-lg flex items-start gap-4 text-sm text-gray-700 shadow-sm hover:border-gray-300 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0" aria-hidden="true">
                    <!-- Inline SVG Refresh / Update Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 4v6h-6"/>
                        <path d="M1 20v-6h6"/>
                        <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/>
                    </svg>
                </div>
                <div class="flex-grow pt-1">
                    <p class="font-medium text-gray-900">
                        Aktualisieren Sie Ihre IPTV-Player-App auf die neueste Version, um Wiedergabe- und Ladeprobleme zu vermeiden.
                    </p>
                </div>
            </div>

            <!-- Tip 4: Power / Restart Device & Router -->
            <div class="bg-white border border-gray-200 p-5 rounded-lg flex items-start gap-4 text-sm text-gray-700 shadow-sm hover:border-gray-300 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0" aria-hidden="true">
                    <!-- Inline SVG Power / Restart Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18.36 6.64a9 9 0 1 1-12.73 0"/>
                        <line x1="12" y1="2" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="flex-grow pt-1">
                    <p class="font-medium text-gray-900">
                        Starten Sie Ihr Gerät neu und starten Sie auch Ihren Router/Modem neu.
                    </p>
                </div>
            </div>

            <!-- Tip 5: VPN / Shield Icon -->
            <div class="bg-white border border-gray-200 p-5 rounded-lg flex items-start gap-4 text-sm text-gray-700 shadow-sm hover:border-gray-300 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center shrink-0" aria-hidden="true">
                    <!-- Inline SVG VPN / Shield Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M12 8v4"/>
                        <circle cx="12" cy="15.5" r="0.75" fill="currentColor"/>
                    </svg>
                </div>
                <div class="flex-grow pt-1">
                    <p class="font-medium text-gray-900">
                        Einige Internetanbieter drosseln IPTV-Verkehr. Die Nutzung eines VPN kann helfen, den Zugriff und die Stabilität zu verbessern.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 4. QUICK ANSWERS (Mini FAQ) -->
<section id="faq-mini" class="bg-white py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                IPTV Setup: Schnelle Antworten
            </h2>
            <p class="text-gray-500 mt-3 text-base sm:text-lg max-w-2xl mx-auto">
                Häufige Fragen zur Installation und Konfiguration kurz und bündig beantwortet.
            </p>
            <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mx-auto mt-5 rounded-full"></div>
        </div>

        <!-- 2-Column Accordion Layout (Matches Reference Image) -->
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Question 1 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base">
                    <span class="pr-3">Wie lange dauert die IPTV-Einrichtung?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    In der Regel weniger als 5 Minuten. Nach Erhalt Ihrer Zugangsdaten (per E-Mail oder WhatsApp) installieren Sie einfach Ihre bevorzugte Player-App und tragen die Zugangsdaten einmalig ein.
                </div>
            </details>

            <!-- Question 2 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base">
                    <span class="pr-3">Welche App brauche ich?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Sie können jede gängige IPTV-App verwenden. Für Fire TV &amp; Android empfehlen wir TiviMate oder IPTV Smarters Pro. Für Samsung &amp; LG Smart TVs eignet sich der IBO Player oder IPTV Smarters. Für Apple Geräte empfehlen wir Smarters Player Lite.
                </div>
            </details>

            <!-- Question 3 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base">
                    <span class="pr-3">Welche Internetgeschwindigkeit wird benötigt?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Für Standard- und HD-Sender genügen 16 Mbit/s. Für hochauflösendes 4K Ultra-HD Streaming und unterbrechungsfreien Live-Sport empfehlen wir eine stabile Download-Bandbreite von 30 bis 50 Mbit/s, idealerweise über LAN-Kabel oder 5-GHz-WLAN.
                </div>
            </details>

            <!-- Question 4 -->
            <details class="group bg-white border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-gray-300 open:border-[#DD0000] open:shadow-md">
                <summary class="flex justify-between items-center font-bold text-gray-900 cursor-pointer list-none select-none text-base">
                    <span class="pr-3">Wie installiere ich IPTV auf einem Smart TV?</span>
                    <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 group-open:bg-[#DD0000]/10 group-open:text-[#DD0000] group-open:rotate-180 transition-all duration-300 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </summary>
                <div class="mt-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                    Öffnen Sie den App Store Ihres Samsung (Smart Hub) oder LG Fernsehers (LG Content Store). Suchen Sie nach 'IBO Player' oder 'IPTV Smarters Pro' und installieren Sie die App. Geben Sie anschließend Ihre Xtream Codes Zugangsdaten ein oder hinterlegen Sie die Playlist-URL.
                </div>
            </details>

        </div>

        <!-- Additional Link to Full FAQ -->
        <div class="mt-12 text-center">
            <p class="text-sm text-gray-500 mb-3">Sie haben weitere technische Fragen oder möchten Tarife vergleichen?</p>
            <a href="/faq" class="inline-flex items-center gap-2 text-sm font-bold text-[#DD0000] hover:text-[#b80000] transition-colors">
                <span>Alle 30 Fragen im FAQ-Center lesen</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- STEP-BY-STEP MODAL POPUP FOR DEVICE TUTORIALS -->
<div id="device-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300" aria-modal="true" role="dialog">
    <div class="bg-white rounded-2xl max-w-2xl w-full p-6 sm:p-8 shadow-2xl relative max-h-[90vh] overflow-y-auto transform scale-95 transition-transform duration-300" id="device-modal-content">
        
        <!-- Close Button -->
        <button type="button" onclick="closeDeviceGuide()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors" aria-label="Schließen">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Dynamic Header -->
        <div class="flex items-center gap-4 border-b border-gray-100 pb-5 mb-6">
            <div id="modal-icon" class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0">
                <!-- Injected via JS -->
            </div>
            <div>
                <span class="text-xs font-bold text-[#DD0000] tracking-widest uppercase">SCHRITT-FÜR-SCHRITT ANLEITUNG</span>
                <h3 id="modal-title" class="text-2xl font-bold text-gray-900">Gerät</h3>
            </div>
        </div>

        <!-- Dynamic Content Body -->
        <div id="modal-body" class="space-y-6">
            <!-- Injected via JS -->
        </div>

        <!-- Help / Support Footer Inside Modal -->
        <div class="mt-8 pt-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 bg-gray-50 -mx-6 -mb-6 sm:-mx-8 sm:-mb-8 p-6 rounded-b-2xl">
            <div class="text-xs text-gray-600 text-center sm:text-left">
                <span class="font-bold text-gray-900 block mb-0.5">Brauchen Sie Hilfe bei der Einrichtung?</span>
                Unser 24/7 Support steht Ihnen per WhatsApp zur Seite.
            </div>
            <a href="https://wa.me/4915212345678" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg text-xs font-bold text-white bg-[#25D366] hover:bg-[#20ba5a] shadow-sm transition-all whitespace-nowrap">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.777.879 2.796.879 3.182 0 5.768-2.587 5.768-5.766.001-3.18-2.585-5.766-5.768-5.766zm9.969 5.768c0 5.485-4.464 9.949-9.969 9.949-1.749 0-3.385-.453-4.819-1.246l-5.212 1.357 1.385-5.068c-.902-1.499-1.423-3.253-1.423-5.022 0-5.484 4.464-9.95 9.969-9.95 5.505 0 9.969 4.466 9.969 9.982z"/>
                </svg>
                <span>WhatsApp Support</span>
            </a>
        </div>

    </div>
</div>

<!-- TUTORIALS JAVASCRIPT LOGIC -->
<script>
const deviceGuides = {
    firetv: {
        title: "Amazon Fire TV (Stick / Cube)",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 3z"/></svg>',
        steps: [
            {
                num: "1",
                title: "Downloader App installieren",
                desc: "Öffnen Sie auf Ihrem Fire TV die Suche ('Finden'), suchen Sie nach der kostenlosen App <strong>Downloader</strong> (orangefarbenes Symbol) und installieren Sie diese. Erlauben Sie in den Fire TV Einstellungen unter Entwickleroptionen die Installation aus unbekannten Quellen für den Downloader."
            },
            {
                num: "2",
                title: "IPTV Player herunterladen",
                desc: "Starten Sie die Downloader-App und geben Sie die Download-URL für Ihre bevorzugte App ein (z.&nbsp;B. <strong>IPTV Smarters Pro</strong> oder <strong>TiviMate</strong>). Nach dem Download klicken Sie einfach auf 'Installieren'."
            },
            {
                num: "3",
                title: "Zugangsdaten eingeben & Streamen",
                desc: "Öffnen Sie den installierten Player, wählen Sie <strong>'Xtream Codes API'</strong> und geben Sie die von uns per E-Mail/WhatsApp übermittelten Daten ein (Server-URL, Benutzername und Passwort). Klicken Sie auf Login – Ihre Senderliste lädt sofort!"
            }
        ]
    },
    androidtv: {
        title: "Android TV & TV Boxen",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10a8 8 0 0 1 16 0v1H4v-1z"/><line x1="7" y1="4" x2="9" y2="7"/><line x1="17" y1="4" x2="15" y2="7"/><rect x="3" y="13" width="18" height="8" rx="2"/></svg>',
        steps: [
            {
                num: "1",
                title: "Google Play Store öffnen",
                desc: "Navigieren Sie auf Ihrer Android Box (Nvidia Shield, Xiaomi Mi Box etc.) oder Ihrem Android Smart TV zum offiziellen Google Play Store."
            },
            {
                num: "2",
                title: "TiviMate oder IPTV Smarters laden",
                desc: "Suchen Sie nach <strong>TiviMate IPTV Player</strong> (empfohlen für das beste TV-Erlebnis mit elektronischem Programmführer) oder <strong>IPTV Smarters Pro</strong> und installieren Sie die Anwendung."
            },
            {
                num: "3",
                title: "Playlist einrichten",
                desc: "Wählen Sie 'Playlist hinzufügen' &rarr; 'Xtream Codes Login'. Geben Sie Ihren Benutzernamen, Ihr Passwort und unsere Server-Adresse ein. Schon stehen Ihnen alle Live-Kanäle und VOD-Inhalte zur Verfügung."
            }
        ]
    },
    smarttv: {
        title: "Smart TV (Samsung & LG)",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
        steps: [
            {
                num: "1",
                title: "App Store am Fernseher öffnen",
                desc: "Öffnen Sie den <strong>Samsung Smart Hub</strong> oder den <strong>LG Content Store</strong> direkt über die Fernbedienung Ihres Fernsehers."
            },
            {
                num: "2",
                title: "IBO Player oder IPTV Smarters installieren",
                desc: "Suchen Sie nach <strong>IBO Player</strong>, <strong>IPTV Smarters Pro</strong> oder <strong>Nanomid Player</strong> und installieren Sie die App auf Ihrem Fernseher."
            },
            {
                num: "3",
                title: "Aktivieren & Sender laden",
                desc: "Öffnen Sie die App. Sie können sich entweder direkt mit Ihren Xtream Codes Benutzerdaten einloggen oder über das Online-Portal der App (unter Angabe der angezeigten Device ID &amp; Key) Ihre M3U-Playlist einbinden."
            }
        ]
    },
    apple: {
        title: "Apple iOS & Apple TV",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.61-.75 1.04-1.8 1.01-2.87-.96.04-2.17.65-2.84 1.43-.58.67-1.08 1.74-1.01 2.8 1.08.08 2.23-.61 2.84-1.36z"/></svg>',
        steps: [
            {
                num: "1",
                title: "App Store aufrufen",
                desc: "Öffnen Sie den Apple App Store auf Ihrem iPhone, iPad oder Apple TV 4K."
            },
            {
                num: "2",
                title: "Smarters Player Lite oder GSE herunterladen",
                desc: "Laden Sie die kostenlose App <strong>Smarters Player Lite</strong>, <strong>GSE Smart IPTV</strong> oder <strong>Snappier IPTV</strong> aus dem App Store herunter."
            },
            {
                num: "3",
                title: "Zugangsdaten eintragen",
                desc: "Starten Sie die App, wählen Sie 'Login with Xtream Codes API' und tragen Sie Ihren Accountnamen, Ihr Passwort und unsere Server-URL ein. Sofort startet die Synchronisation Ihrer Sender."
            }
        ]
    },
    computer: {
        title: "Windows PC & Mac OS",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M2 19h20"/><path d="M9 16v3"/><path d="M15 16v3"/></svg>',
        steps: [
            {
                num: "1",
                title: "Player Software wählen",
                desc: "Für Computer empfehlen wir den dedizierten <strong>IPTV Smarters Pro Client</strong> für Windows (.exe) bzw. Mac (.dmg), oder den universellen <strong>VLC Media Player</strong>."
            },
            {
                num: "2",
                title: "Software installieren",
                desc: "Laden Sie die Software auf Ihren Computer herunter und führen Sie die Installation durch."
            },
            {
                num: "3",
                title: "Verbindung herstellen",
                desc: "Melden Sie sich in IPTV Smarters mit Ihren Xtream Codes Zugangsdaten an. Bei VLC klicken Sie einfach auf 'Medien' &rarr; 'Netzwerkstream öffnen' und fügen Ihre persönliche M3U-URL ein."
            }
        ]
    },
    mag: {
        title: "MAG Box (Stalker Portal)",
        icon: '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="8" width="20" height="11" rx="2"/><line x1="5" y1="13.5" x2="11" y2="13.5"/><circle cx="15.5" cy="13.5" r="1.5" fill="currentColor"/><circle cx="19" cy="13.5" r="1.5" fill="currentColor"/><path d="M6 8V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3"/></svg>',
        steps: [
            {
                num: "1",
                title: "Systemeinstellungen aufrufen",
                desc: "Gehen Sie auf Ihrer MAG Box (MAG 254, 322, 524 etc.) zu: <strong>Einstellungen (Settings) &rarr; Systemeinstellungen &rarr; Server &rarr; Portale</strong>."
            },
            {
                num: "2",
                title: "Portal URL eingeben",
                desc: "Geben Sie unter 'Portal 1 Name' z.&nbsp;B. <strong>FAST IPTV</strong> ein und tragen Sie unter 'Portal 1 URL' die Ihnen zugesendete Stalker-Portal-Adresse ein."
            },
            {
                num: "3",
                title: "MAC-Adresse mitteilen & Neustarten",
                desc: "Übermitteln Sie uns beim Bestellvorgang oder per WhatsApp Ihre Geräte-MAC-Adresse (beginnt mit 00:1A:79:...). Wir schalten Ihre Box frei. Starten Sie anschließend das Portal neu."
            }
        ]
    }
};

function openDeviceGuide(deviceKey) {
    const guide = deviceGuides[deviceKey];
    if (!guide) return;

    document.getElementById('modal-title').textContent = guide.title;
    document.getElementById('modal-icon').innerHTML = guide.icon;
    
    let html = '';
    guide.steps.forEach(function(step) {
        html += `
        <div class="flex items-start gap-4">
            <span class="w-8 h-8 rounded-full bg-[#DD0000] text-white font-bold text-sm flex items-center justify-center shrink-0 shadow-sm mt-0.5">${step.num}</span>
            <div>
                <h4 class="font-bold text-gray-900 text-base mb-1">${step.title}</h4>
                <p class="text-sm text-gray-600 leading-relaxed">${step.desc}</p>
            </div>
        </div>`;
    });
    
    document.getElementById('modal-body').innerHTML = html;
    
    const modal = document.getElementById('device-modal');
    const content = document.getElementById('device-modal-content');
    modal.classList.remove('hidden');
    setTimeout(function() {
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }, 10);
    document.body.style.overflow = 'hidden';
}

function closeDeviceGuide() {
    const modal = document.getElementById('device-modal');
    const content = document.getElementById('device-modal-content');
    modal.classList.add('opacity-0');
    content.classList.remove('scale-100');
    content.classList.add('scale-95');
    setTimeout(function() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }, 300);
}

// Close modal on backdrop click or ESC key
document.getElementById('device-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeDeviceGuide();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeDeviceGuide();
    }
});
</script>

<?php
get_footer();
