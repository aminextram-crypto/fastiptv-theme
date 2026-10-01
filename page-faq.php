<?php
/**
 * Template Name: FAQ Page
 *
 * Dedicated FAQ Page for Fast IPTV Store (German Market - 30 Comprehensive SEO Questions)
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
        <div class="text-[#DD0000] text-sm font-bold tracking-widest uppercase mb-4 text-center">
            HILFE-CENTER
        </div>
        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center mb-6 tracking-tight">
            Häufig gestellte Fragen
        </h1>
        <p class="text-gray-400 text-center max-w-2xl mx-auto text-lg leading-relaxed">
            Finden Sie schnelle Antworten auf Ihre Fragen zu Tarifen, Technik und Einrichtung unseres IPTV-Services.
        </p>
    </div>
</section>

<!-- 2. THE MAIN FAQ CONTENT (Premium Split-Layout with 3 Category Tabs & 30 SEO-Optimized Questions) -->
<section id="faq" class="bg-white py-24 font-sans border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Sticky Title & Info -->
            <div class="col-span-1 lg:col-span-4 lg:sticky lg:top-24 h-fit">
                <span class="text-[#DD0000] text-sm font-bold tracking-widest uppercase">FAQ</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-3 tracking-tight">
                    Häufig gestellte Fragen
                </h2>
                <p class="text-gray-500 mt-4 text-base sm:text-lg leading-relaxed">
                    Hier finden Sie Antworten auf die wichtigsten 30 Fragen zu unserem Premium IPTV-Service in Deutschland, Österreich und der Schweiz.
                </p>
                <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mt-6 rounded-full"></div>
            </div>

            <!-- Right Column: Category Tabs & Semantic FAQ List -->
            <div class="col-span-1 lg:col-span-8">
                
                <!-- Category Tabs UI -->
                <div class="flex flex-wrap gap-2 mb-8" role="tablist" aria-label="FAQ Kategorien">
                    <button type="button" 
                            data-faq-tab="allgemein" 
                            class="faq-tab-btn px-5 py-2.5 rounded-full bg-[#DD0000] text-white text-sm font-semibold shadow-md transition-all cursor-pointer"
                            aria-selected="true">
                        Allgemein (10)
                    </button>
                    <button type="button" 
                            data-faq-tab="technik" 
                            class="faq-tab-btn px-5 py-2.5 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer"
                            aria-selected="false">
                        Technik &amp; Geräte (10)
                    </button>
                    <button type="button" 
                            data-faq-tab="zahlung" 
                            class="faq-tab-btn px-5 py-2.5 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer"
                            aria-selected="false">
                        Zahlung &amp; Tarife (10)
                    </button>
                </div>

                <!-- CATEGORY 1: ALLGEMEIN (10 Questions) -->
                <div id="faq-cat-allgemein" class="faq-cat-group divide-y divide-gray-200 animate-fade-in" data-cat="allgemein">
                    
                    <!-- Q1.1 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Was genau ist Premium IPTV?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            IPTV (Internet Protocol Television) überträgt hochauflösende Fernsehsignale direkt über Ihre Internetverbindung. Sie benötigen keine Satellitenschüssel oder Kabelanschluss mehr.
                        </p>
                    </details>

                    <!-- Q1.2 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Ist die Nutzung dieses IPTV-Services legal?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser Service stellt die technische Infrastruktur zum Streamen bereit. Die Legalität hängt von den in Ihrem Land geltenden Gesetzen zum Streamen von Inhalten ab.
                        </p>
                    </details>

                    <!-- Q1.3 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Bieten Sie einen kostenlosen Testzugang an?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, wir bieten eine unverbindliche 24-Stunden-Testphase an, damit Sie unsere 4K-Qualität und Server-Stabilität auf Ihrem eigenen Gerät testen können.
                        </p>
                    </details>

                    <!-- Q1.4 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Wie schnell erhalte ich meine Zugangsdaten?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser System arbeitet vollautomatisch 24/7. Direkt nach der erfolgreichen Zahlung erhalten Sie eine E-Mail mit Ihren Zugangsdaten (M3U/Xtream) und Anleitungen.
                        </p>
                    </details>

                    <!-- Q1.5 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Sender und Inhalte sind verfügbar?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Sie erhalten Zugriff auf über 25.000 Live-TV Sender weltweit (inklusive DACH-Region) sowie eine riesige VOD-Bibliothek mit über 120.000 Filmen und Serien.
                        </p>
                    </details>

                    <!-- Q1.6 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Kann ich den Service auch im Urlaub oder Ausland nutzen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Absolut! Unser Service ist nicht standortgebunden. Solange Sie eine stabile Internetverbindung haben, können Sie weltweit auf Ihr Abonnement zugreifen.
                        </p>
                    </details>

                    <!-- Q1.7 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Gibt es einen Programmführer (EPG)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, wir bieten einen integrierten, elektronischen Programmführer (EPG) an, der sich automatisch aktualisiert, damit Sie immer wissen, was gerade läuft.
                        </p>
                    </details>

                    <!-- Q1.8 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Ist Catch-Up TV (zeitversetztes Fernsehen) verfügbar?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, bei vielen Premium-Sendern bieten wir eine Catch-Up Funktion von bis zu 7 Tagen an, damit Sie verpasste Sendungen nachträglich ansehen können.
                        </p>
                    </details>

                    <!-- Q1.9 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Brauche ich eine spezielle Antenne oder Satellitenschüssel?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein, es wird keinerlei zusätzliche Hardware wie Satellitenschüsseln benötigt. Eine einfache, stabile Internetverbindung reicht völlig aus.
                        </p>
                    </details>

                    <!-- Q1.10 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Werden auch Pay-Per-View (PPV) Events übertragen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, alle großen internationalen Sport-Events, Boxkämpfe und PPV-Übertragungen sind in unseren Tarifen ohne zusätzliche Kosten enthalten.
                        </p>
                    </details>

                </div>

                <!-- CATEGORY 2: TECHNIK & GERÄTE (10 Questions) -->
                <div id="faq-cat-technik" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="technik">
                    
                    <!-- Q2.1 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Geräte werden unterstützt?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser Service läuft auf fast allen Geräten: Smart TVs (Samsung, LG, Sony), Fire TV Stick, Apple TV, Android TV-Boxen, Smartphones, Tablets und PCs.
                        </p>
                    </details>

                    <!-- Q2.2 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Internetgeschwindigkeit wird benötigt?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Für normales HD-Streaming empfehlen wir mindestens 16 Mbit/s. Für ein ruckelfreies 4K Ultra HD Erlebnis sollten Sie über eine stabile Leitung von 50 Mbit/s verfügen.
                        </p>
                    </details>

                    <!-- Q2.3 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Muss ich zwingend ein VPN nutzen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein, ein VPN ist nicht zwingend erforderlich, da unsere Server hochgradig gesichert sind. Wir sind jedoch zu 100% VPN-freundlich.
                        </p>
                    </details>

                    <!-- Q2.4 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche App empfehlen Sie für Samsung oder LG Smart TVs?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wir empfehlen Premium-Apps wie IBO Player, Tivimate, IPTV Smarters Pro oder SET IPTV. Eine genaue Anleitung erhalten Sie nach dem Kauf.
                        </p>
                    </details>

                    <!-- Q2.5 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Funktioniert der Service auf dem Amazon Fire TV Stick?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, der Fire TV Stick (insbesondere die 4K Max Version) ist eines der besten und beliebtesten Geräte für unseren IPTV-Service.
                        </p>
                    </details>

                    <!-- Q2.6 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Kann ich mein Abonnement auf mehreren Geräten gleichzeitig nutzen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Standard-Tarife gelten für eine (1) gleichzeitige Verbindung. Sie können den Service auf mehreren Geräten installieren, aber nicht zeitgleich schauen (außer Sie buchen ein Multiroom-Paket).
                        </p>
                    </details>

                    <!-- Q2.7 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Was kann ich tun, wenn das Bild ruckelt oder puffert (Buffering)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Buffering liegt meist an Schwankungen im WLAN. Wir empfehlen, Ihr Gerät (z.B. Smart TV) wenn möglich per LAN-Kabel direkt mit dem Router zu verbinden.
                        </p>
                    </details>

                    <!-- Q2.8 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Unterstützen Sie MAG-Boxen (MAC-Adresse)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, wir unterstützen MAG-Boxen, Formuler-Geräte und andere Set-Top-Boxen über das Stalker-Portal (MAC-Adresse) oder Xtream Codes.
                        </p>
                    </details>

                    <!-- Q2.9 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Wie halte ich meine Senderliste aktuell?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wenn Sie Xtream Codes oder unsere M3U-URL nutzen, aktualisiert sich Ihre Sender- und VOD-Liste bei jedem App-Neustart automatisch.
                        </p>
                    </details>

                    <!-- Q2.10 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Bekomme ich technischen Support, wenn ich bei der Einrichtung Hilfe brauche?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Selbstverständlich. Unser deutscher Support hilft Ihnen per E-Mail oder WhatsApp Schritt-für-Schritt bei der Einrichtung Ihres Geräts.
                        </p>
                    </details>

                </div>

                <!-- CATEGORY 3: ZAHLUNG & TARIFE (10 Questions) -->
                <div id="faq-cat-zahlung" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="zahlung">
                    
                    <!-- Q3.1 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche sicheren Zahlungsmethoden werden akzeptiert?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wir legen großen Wert auf Sicherheit und bieten 100% verschlüsselte Zahlungen an. Sie können bequem per PayPal, Kreditkarte (Visa/Mastercard) oder Kryptowährungen bezahlen.
                        </p>
                    </details>

                    <!-- Q3.2 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Ist das ein Abonnement mit automatischer Verlängerung (Abofalle)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein! Bei unseren Tarifen handelt es sich um Prepaid-Zahlungen. Es gibt keine automatische Verlängerung und keine versteckten Verträge.
                        </p>
                    </details>

                    <!-- Q3.3 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Gibt es versteckte Kosten oder Einrichtungsgebühren?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein, der angezeigte Preis für Ihren Tarif ist der Endpreis. Es fallen keine Aktivierungs-, Einrichtungs- oder sonstigen versteckten Gebühren an.
                        </p>
                    </details>

                    <!-- Q3.4 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Bieten Sie eine Geld-zurück-Garantie an?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, Ihre Zufriedenheit ist uns wichtig. Wir bieten eine 7-Tage-Geld-zurück-Garantie an, falls wir ein anhaltendes technisches Problem nicht lösen können.
                        </p>
                    </details>

                    <!-- Q3.5 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Kann ich meinen Tarif später upgraden (z.B. von 3 auf 12 Monate)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, Sie können Ihren Tarif jederzeit nach Ablauf verlängern oder upgraden. Kontaktieren Sie einfach unseren Support für Treue-Rabatte.
                        </p>
                    </details>

                    <!-- Q3.6 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Sind meine Zahlungsdaten bei Ihnen sicher?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Absolut. Wir speichern keine sensiblen Kreditkartendaten. Alle Transaktionen werden über verifizierte, externe und sichere Zahlungsanbieter abgewickelt.
                        </p>
                    </details>

                    <!-- Q3.7 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Erhalte ich nach dem Kauf eine Rechnung?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, nach erfolgreicher Zahlung erhalten Sie automatisch eine Kaufbestätigung und Rechnung per E-Mail.
                        </p>
                    </details>

                    <!-- Q3.8 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Gibt es Rabatte für Langzeit-Tarife?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, unsere 6-Monats- und 12-Monats-Tarife bieten erhebliche Rabatte im Vergleich zur monatlichen Zahlung. Das 12-Monats-Paket ist unser Bestseller.
                        </p>
                    </details>

                    <!-- Q3.9 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Wie kann ich mit Kryptowährungen (Bitcoin, USDT) bezahlen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wählen Sie beim Checkout einfach "Krypto" als Zahlungsmethode. Sie erhalten dann eine Wallet-Adresse, an die Sie den genauen Betrag senden können.
                        </p>
                    </details>

                    <!-- Q3.10 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Was passiert, wenn meine gebuchte Laufzeit abgelaufen ist?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ihr Zugang wird nach Ablauf der Zeit automatisch deaktiviert. Wir erinnern Sie vorher per E-Mail, sodass Sie Ihren Zugang nahtlos verlängern können, ohne Ihre Favoriten zu verlieren.
                        </p>
                    </details>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- 3. 'STILL HAVE QUESTIONS?' CTA (Light & Clean) -->
<section class="bg-gray-50 py-16 font-sans border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white border border-gray-200 shadow-sm rounded-2xl p-8 sm:p-10 text-center">
            
            <!-- Support / Headset Icon -->
            <div class="w-16 h-16 rounded-2xl bg-red-50 text-[#DD0000] flex items-center justify-center mx-auto mb-4 border border-red-100 shadow-sm">
                <svg class="w-8 h-8 fill-none stroke-currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                </svg>
            </div>

            <!-- H3 -->
            <h3 class="text-2xl font-bold text-gray-900 mb-3 tracking-tight">
                Haben Sie nicht gefunden, wonach Sie suchen?
            </h3>

            <!-- Paragraph -->
            <p class="text-gray-600 mb-8 max-w-xl mx-auto leading-relaxed">
                Unser Support-Team ist 24/7 für Sie da und hilft Ihnen gerne weiter.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <!-- Button 1: WhatsApp -->
                <a href="https://wa.me/?text=Hallo%20FastIPTV%20Support%2C%20ich%20habe%20eine%20Frage" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#1da851] text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-sm">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19.01L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67ZM8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7.02 8.48 7.02 9.68C7.02 10.89 7.9 12.06 8.02 12.22C8.14 12.39 9.75 14.88 12.21 15.94C12.8 16.19 13.25 16.34 13.61 16.46C14.2 16.65 14.74 16.62 15.16 16.56C15.63 16.49 16.61 15.97 16.82 15.39C17.02 14.8 17.02 14.3 16.96 14.2C16.9 14.1 16.74 14.04 16.49 13.92C16.25 13.79 15.05 13.2 14.83 13.12C14.61 13.04 14.45 13 14.28 13.25C14.12 13.49 13.65 14.04 13.51 14.2C13.37 14.37 13.23 14.39 12.98 14.27C12.74 14.14 11.95 13.88 11.02 13.05C10.29 12.4 9.8 11.6 9.66 11.36C9.52 11.11 9.64 10.98 9.77 10.85C9.88 10.74 10.02 10.56 10.14 10.41C10.26 10.27 10.3 10.16 10.38 10C10.46 9.84 10.42 9.7 10.36 9.58C10.3 9.46 9.83 8.3 9.63 7.82C9.44 7.36 9.24 7.42 9.09 7.41L8.63 7.33H8.53Z"/>
                    </svg>
                    <span>WhatsApp Support</span>
                </a>

                <!-- Button 2: Contact Page -->
                <a href="/contact" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white border-2 border-gray-200 hover:border-gray-900 text-gray-900 font-bold py-3 px-8 rounded-lg transition-colors shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>Zum Kontaktformular</span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Google-compliant Structured Data (Schema.org / FAQPage JSON-LD for rich snippets) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Was genau ist Premium IPTV?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "IPTV (Internet Protocol Television) überträgt hochauflösende Fernsehsignale direkt über Ihre Internetverbindung. Sie benötigen keine Satellitenschüssel oder Kabelanschluss mehr."
      }
    },
    {
      "@type": "Question",
      "name": "Ist die Nutzung dieses IPTV-Services legal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Unser Service stellt die technische Infrastruktur zum Streamen bereit. Die Legalität hängt von den in Ihrem Land geltenden Gesetzen zum Streamen von Inhalten ab."
      }
    },
    {
      "@type": "Question",
      "name": "Bieten Sie einen kostenlosen Testzugang an?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, wir bieten eine unverbindliche 24-Stunden-Testphase an, damit Sie unsere 4K-Qualität und Server-Stabilität auf Ihrem eigenen Gerät testen können."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell erhalte ich meine Zugangsdaten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Unser System arbeitet vollautomatisch 24/7. Direkt nach der erfolgreichen Zahlung erhalten Sie eine E-Mail mit Ihren Zugangsdaten (M3U/Xtream) und Anleitungen."
      }
    },
    {
      "@type": "Question",
      "name": "Welche Sender und Inhalte sind verfügbar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sie erhalten Zugriff auf über 25.000 Live-TV Sender weltweit (inklusive DACH-Region) sowie eine riesige VOD-Bibliothek mit über 120.000 Filmen und Serien."
      }
    },
    {
      "@type": "Question",
      "name": "Kann ich den Service auch im Urlaub oder Ausland nutzen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolut! Unser Service ist nicht standortgebunden. Solange Sie eine stabile Internetverbindung haben, können Sie weltweit auf Ihr Abonnement zugreifen."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es einen Programmführer (EPG)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, wir bieten einen integrierten, elektronischen Programmführer (EPG) an, der sich automatisch aktualisiert, damit Sie immer wissen, was gerade läuft."
      }
    },
    {
      "@type": "Question",
      "name": "Ist Catch-Up TV (zeitversetztes Fernsehen) verfügbar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, bei vielen Premium-Sendern bieten wir eine Catch-Up Funktion von bis zu 7 Tagen an, damit Sie verpasste Sendungen nachträglich ansehen können."
      }
    },
    {
      "@type": "Question",
      "name": "Brauche ich eine spezielle Antenne oder Satellitenschüssel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nein, es wird keinerlei zusätzliche Hardware wie Satellitenschüsseln benötigt. Eine einfache, stabile Internetverbindung reicht völlig aus."
      }
    },
    {
      "@type": "Question",
      "name": "Werden auch Pay-Per-View (PPV) Events übertragen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, alle großen internationalen Sport-Events, Boxkämpfe und PPV-Übertragungen sind in unseren Tarifen ohne zusätzliche Kosten enthalten."
      }
    },
    {
      "@type": "Question",
      "name": "Welche Geräte werden unterstützt?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Unser Service läuft auf fast allen Geräten: Smart TVs (Samsung, LG, Sony), Fire TV Stick, Apple TV, Android TV-Boxen, Smartphones, Tablets und PCs."
      }
    },
    {
      "@type": "Question",
      "name": "Welche Internetgeschwindigkeit wird benötigt?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Für normales HD-Streaming empfehlen wir mindestens 16 Mbit/s. Für ein ruckelfreies 4K Ultra HD Erlebnis sollten Sie über eine stabile Leitung von 50 Mbit/s verfügen."
      }
    },
    {
      "@type": "Question",
      "name": "Muss ich zwingend ein VPN nutzen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nein, ein VPN ist nicht zwingend erforderlich, da unsere Server hochgradig gesichert sind. Wir sind jedoch zu 100% VPN-freundlich."
      }
    },
    {
      "@type": "Question",
      "name": "Welche App empfehlen Sie für Samsung oder LG Smart TVs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wir empfehlen Premium-Apps wie IBO Player, Tivimate, IPTV Smarters Pro oder SET IPTV. Eine genaue Anleitung erhalten Sie nach dem Kauf."
      }
    },
    {
      "@type": "Question",
      "name": "Funktioniert der Service auf dem Amazon Fire TV Stick?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, der Fire TV Stick (insbesondere die 4K Max Version) ist eines der besten und beliebtesten Geräte für unseren IPTV-Service."
      }
    },
    {
      "@type": "Question",
      "name": "Kann ich mein Abonnement auf mehreren Geräten gleichzeitig nutzen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard-Tarife gelten für eine (1) gleichzeitige Verbindung. Sie können den Service auf mehreren Geräten installieren, aber nicht zeitgleich schauen (außer Sie buchen ein Multiroom-Paket)."
      }
    },
    {
      "@type": "Question",
      "name": "Was kann ich tun, wenn das Bild ruckelt oder puffert (Buffering)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Buffering liegt meist an Schwankungen im WLAN. Wir empfehlen, Ihr Gerät (z.B. Smart TV) wenn möglich per LAN-Kabel direkt mit dem Router zu verbinden."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützen Sie MAG-Boxen (MAC-Adresse)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, wir unterstützen MAG-Boxen, Formuler-Geräte und andere Set-Top-Boxen über das Stalker-Portal (MAC-Adresse) oder Xtream Codes."
      }
    },
    {
      "@type": "Question",
      "name": "Wie halte ich meine Senderliste aktuell?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wenn Sie Xtream Codes oder unsere M3U-URL nutzen, aktualisiert sich Ihre Sender- und VOD-Liste bei jedem App-Neustart automatisch."
      }
    },
    {
      "@type": "Question",
      "name": "Bekomme ich technischen Support, wenn ich bei der Einrichtung Hilfe brauche?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Selbstverständlich. Unser deutscher Support hilft Ihnen per E-Mail oder WhatsApp Schritt-für-Schritt bei der Einrichtung Ihres Geräts."
      }
    },
    {
      "@type": "Question",
      "name": "Welche sicheren Zahlungsmethoden werden akzeptiert?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wir legen großen Wert auf Sicherheit und bieten 100% verschlüsselte Zahlungen an. Sie können bequem per PayPal, Kreditkarte (Visa/Mastercard) oder Kryptowährungen bezahlen."
      }
    },
    {
      "@type": "Question",
      "name": "Ist das ein Abonnement mit automatischer Verlängerung (Abofalle)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nein! Bei unseren Tarifen handelt es sich um Prepaid-Zahlungen. Es gibt keine automatische Verlängerung und keine versteckten Verträge."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es versteckte Kosten oder Einrichtungsgebühren?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nein, der angezeigte Preis für Ihren Tarif ist der Endpreis. Es fallen keine Aktivierungs-, Einrichtungs- oder sonstigen versteckten Gebühren an."
      }
    },
    {
      "@type": "Question",
      "name": "Bieten Sie eine Geld-zurück-Garantie an?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Ihre Zufriedenheit ist uns wichtig. Wir bieten eine 7-Tage-Geld-zurück-Garantie an, falls wir ein anhaltendes technisches Problem nicht lösen können."
      }
    },
    {
      "@type": "Question",
      "name": "Kann ich meinen Tarif später upgraden (z.B. von 3 auf 12 Monate)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Sie können Ihren Tarif jederzeit nach Ablauf verlängern oder upgraden. Kontaktieren Sie einfach unseren Support für Treue-Rabatte."
      }
    },
    {
      "@type": "Question",
      "name": "Sind meine Zahlungsdaten bei Ihnen sicher?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolut. Wir speichern keine sensiblen Kreditkartendaten. Alle Transaktionen werden über verifizierte, externe und sichere Zahlungsanbieter abgewickelt."
      }
    },
    {
      "@type": "Question",
      "name": "Erhalte ich nach dem Kauf eine Rechnung?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, nach erfolgreicher Zahlung erhalten Sie automatisch eine Kaufbestätigung und Rechnung per E-Mail."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es Rabatte für Langzeit-Tarife?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, unsere 6-Monats- und 12-Monats-Tarife bieten erhebliche Rabatte im Vergleich zur monatlichen Zahlung. Das 12-Monats-Paket ist unser Bestseller."
      }
    },
    {
      "@type": "Question",
      "name": "Wie kann ich mit Kryptowährungen (Bitcoin, USDT) bezahlen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wählen Sie beim Checkout einfach \"Krypto\" als Zahlungsmethode. Sie erhalten dann eine Wallet-Adresse, an die Sie den genauen Betrag senden können."
      }
    },
    {
      "@type": "Question",
      "name": "Was passiert, wenn meine gebuchte Laufzeit abgelaufen ist?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ihr Zugang wird nach Ablauf der Zeit automatisch deaktiviert. Wir erinnern Sie vorher per E-Mail, sodass Sie Ihren Zugang nahtlos verlängern können, ohne Ihre Favoriten zu verlieren."
      }
    }
  ]
}
</script>

<!-- Inline Style & Vanilla JS for FAQ Tab Switching with Smooth Fade-in -->
<style>
@keyframes faqFadeIn {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.animate-fade-in {
    animation: faqFadeIn 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>

<script>
(function() {
    function initFaqTabs() {
        const tabs = document.querySelectorAll('.faq-tab-btn');
        const groups = document.querySelectorAll('.faq-cat-group');
        if (!tabs.length || !groups.length) return;

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetCat = this.getAttribute('data-faq-tab');

                // Update active/inactive tab appearance
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.className = 'faq-tab-btn px-5 py-2.5 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer';
                });
                this.setAttribute('aria-selected', 'true');
                this.className = 'faq-tab-btn px-5 py-2.5 rounded-full bg-[#DD0000] text-white text-sm font-semibold shadow-md transition-all cursor-pointer';

                // Display targeted category group with smooth animation
                groups.forEach(g => {
                    if (g.getAttribute('data-cat') === targetCat) {
                        g.classList.remove('hidden');
                        g.classList.remove('animate-fade-in');
                        void g.offsetWidth; // Trigger DOM reflow
                        g.classList.add('animate-fade-in');
                    } else {
                        g.classList.add('hidden');
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFaqTabs);
    } else {
        initFaqTabs();
    }
})();
</script>

<?php
get_footer();
