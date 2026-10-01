<?php
/**
 * Template Name: Pricing Page
 *
 * Dedicated Pricing Page Template for Fast IPTV Store (German Market)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- 1. PAGE HERO (Dark Mode) -->
<section class="bg-[#0a0a0a] pt-20 pb-14 sm:pt-24 sm:pb-16 font-sans relative overflow-hidden border-b border-gray-800">
    <!-- Subtle Ambient Glow -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-red-600/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="text-[#DD0000] text-sm font-bold tracking-widest uppercase mb-4 text-center">WÄHLEN SIE IHREN TARIF</div>
        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center tracking-tight max-w-4xl mx-auto leading-tight">
            Die beliebtesten IPTV-Tarife in Deutschland
        </h1>
        <p class="mt-4 text-gray-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
            Wählen Sie das passende Abonnement für 1 bis 4 Geräte. Jeder Tarif bietet uneingeschränkten 4K-Zugang zu über 25.000 Live-Sendern und 120.000 VODs.
        </p>
    </div>
</section>

<!-- 2. THE PRICING SECTION (Imported from Home Section 2) -->
<section id="preise" class="bg-gray-200 pt-16 pb-20 sm:pb-24 border-b border-gray-300 font-sans">
    <div class="max-w-[95rem] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Device Selector Tabs (Grand & Imposing) -->
        <div class="flex items-center justify-center mb-8">
            <div id="pricing-device-tabs" class="inline-flex flex-wrap sm:flex-nowrap p-1.5 sm:p-2 rounded-2xl bg-gray-900 text-gray-300 shadow-2xl border border-gray-800 max-w-4xl w-full justify-between gap-1" role="tablist">
                <button type="button" data-device="1" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl bg-[#DD0000] text-white text-base sm:text-lg font-bold shadow-md transition-all text-center whitespace-nowrap cursor-pointer">1 Gerät</button>
                <button type="button" data-device="2" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">2 Geräte</button>
                <button type="button" data-device="3" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">3 Geräte</button>
                <button type="button" data-device="4" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">4 Geräte</button>
            </div>
        </div>

        <!-- 4-Column Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-5 max-w-[95rem] mx-auto w-full items-stretch pt-4">
            
            <!-- Card 1: 1 Monat -->
            <div class="bg-gray-900 rounded-2xl border border-gray-800 px-6 sm:px-8 py-12 sm:py-14 min-h-[640px] flex flex-col justify-between shadow-xl relative overflow-hidden group transition-all duration-300 hover:bg-[#252525] hover:-translate-y-2 hover:shadow-2xl hover:border hover:border-red-600">
                <div>
                    <div class="text-xs font-medium text-[#DD0000] uppercase tracking-wider mb-1">Hochleistungs-Server</div>
                    <h3 class="text-2xl font-semibold text-white">1 Monat</h3>
                    
                    <!-- Red Price Pill -->
                    <div class="my-6 -ml-6 sm:-ml-8 mr-2 bg-[#DD0000] text-white py-3.5 px-4 sm:px-6 rounded-r-full shadow-md flex flex-row items-baseline justify-center gap-1.5">
                        <span id="price-card-1" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-none">19</span>
                        <span class="text-lg sm:text-xl font-bold text-white leading-none">€</span>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-5 text-sm font-normal text-gray-300">
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>4K Ultra HD Streaming Qualität</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>25.000+ Live-Sender weltweit</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>120.000+ Filme &amp; Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- &amp; PPV-Events</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Anti-Freeze-Technologie 9.0</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Smart EPG &amp; Catch-Up TV</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>24/7 Deutscher Support</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Multi-Geräte Kompatibilität</span>
                        </li>
                    </ul>
                </div>

                <!-- Regular Button -->
                <div class="mt-8">
                    <a href="#order" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 2: 3 Monate -->
            <div class="bg-gray-900 rounded-2xl border border-gray-800 px-6 sm:px-8 py-12 sm:py-14 min-h-[640px] flex flex-col justify-between shadow-xl relative overflow-hidden group transition-all duration-300 hover:bg-[#252525] hover:-translate-y-2 hover:shadow-2xl hover:border hover:border-red-600">
                <div>
                    <div class="text-xs font-medium text-[#DD0000] uppercase tracking-wider mb-1">Hochleistungs-Server</div>
                    <h3 class="text-2xl font-semibold text-white">3 Monate</h3>
                    
                    <!-- Red Price Pill -->
                    <div class="my-6 -ml-6 sm:-ml-8 mr-2 bg-[#DD0000] text-white py-3.5 px-4 sm:px-6 rounded-r-full shadow-md flex flex-row items-baseline justify-center gap-1.5">
                        <span id="price-card-2" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-none">29</span>
                        <span class="text-lg sm:text-xl font-bold text-white leading-none">€</span>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-5 text-sm font-normal text-gray-300">
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>4K Ultra HD Streaming Qualität</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>25.000+ Live-Sender weltweit</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>120.000+ Filme &amp; Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- &amp; PPV-Events</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Anti-Freeze-Technologie 9.0</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Smart EPG &amp; Catch-Up TV</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>24/7 Deutscher Support</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Multi-Geräte Kompatibilität</span>
                        </li>
                    </ul>
                </div>

                <!-- Regular Button -->
                <div class="mt-8">
                    <a href="#order" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 3: 6 Monate -->
            <div class="bg-gray-900 rounded-2xl border border-gray-800 px-6 sm:px-8 py-12 sm:py-14 min-h-[640px] flex flex-col justify-between shadow-xl relative overflow-hidden group transition-all duration-300 hover:bg-[#252525] hover:-translate-y-2 hover:shadow-2xl hover:border hover:border-red-600">
                <div>
                    <div class="text-xs font-medium text-[#DD0000] uppercase tracking-wider mb-1">Hochleistungs-Server</div>
                    <h3 class="text-2xl font-semibold text-white">6 Monate</h3>
                    
                    <!-- Red Price Pill -->
                    <div class="my-6 -ml-6 sm:-ml-8 mr-2 bg-[#DD0000] text-white py-3.5 px-4 sm:px-6 rounded-r-full shadow-md flex flex-row items-baseline justify-center gap-1.5">
                        <span id="price-card-3" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-none">49</span>
                        <span class="text-lg sm:text-xl font-bold text-white leading-none">€</span>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-5 text-sm font-normal text-gray-300">
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>4K Ultra HD Streaming Qualität</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>25.000+ Live-Sender weltweit</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>120.000+ Filme &amp; Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- &amp; PPV-Events</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Anti-Freeze-Technologie 9.0</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Smart EPG &amp; Catch-Up TV</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>24/7 Deutscher Support</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Multi-Geräte Kompatibilität</span>
                        </li>
                    </ul>
                </div>

                <!-- Regular Button -->
                <div class="mt-8">
                    <a href="#order" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 4: 12 Monate (Highlighted Best Value) -->
            <div class="bg-white rounded-2xl border-2 border-[#DD0000] px-6 sm:px-8 py-12 sm:py-14 min-h-[640px] flex flex-col justify-between shadow-2xl relative overflow-hidden group transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_-12px_rgba(221,0,0,0.25)]">
                <!-- Most Popular Badge -->
                <div class="absolute top-0 right-0 bg-[#DD0000] text-white text-[10px] font-bold uppercase tracking-wider py-1.5 px-6 rounded-bl-xl shadow-md">
                    Beliebteste Wahl
                </div>

                <div>
                    <div class="text-xs font-bold text-[#DD0000] uppercase tracking-wider mb-1">Maximaler Sparvorteil</div>
                    <h3 class="text-2xl font-bold text-gray-950">12 Monate</h3>
                    
                    <!-- Red Price Pill -->
                    <div class="my-6 -ml-6 sm:-ml-8 mr-2 bg-[#DD0000] text-white py-3.5 px-4 sm:px-6 rounded-r-full shadow-lg flex flex-row items-baseline justify-center gap-1.5">
                        <span id="price-card-4" class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-none">75</span>
                        <span class="text-lg sm:text-xl font-bold text-white leading-none">€</span>
                    </div>

                    <!-- Features List -->
                    <ul class="space-y-5 text-sm font-normal text-gray-900">
                        <li class="flex items-center gap-3 font-semibold text-gray-950">
                            <span class="w-4 h-4 rounded bg-red-100 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>4K Ultra HD Streaming Qualität</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>25.000+ Live-Sender weltweit</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>120.000+ Filme &amp; Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- &amp; PPV-Events</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Anti-Freeze-Technologie 9.0</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Smart EPG &amp; Catch-Up TV</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#DD0000] font-semibold">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>24/7 Prioritäts-Support (Deutsch)</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Multi-Geräte Kompatibilität</span>
                        </li>
                    </ul>
                </div>

                <!-- Highlighted Button (Solid Red) -->
                <div class="mt-8">
                    <a href="#order" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider text-white bg-[#DD0000] hover:bg-[#b80000] transition-all shadow-md">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 3. HOW IT WORKS SECTION (Imported from Home Section 4) -->
<section id="so-funktionierts" class="bg-white py-24 border-b border-gray-100 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Area -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 text-[#DD0000] text-sm font-bold tracking-widest uppercase">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                </svg>
                <span>WIE FUNKTIONIERT ES?</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 tracking-tight">
                3 Einfache Schritte zu grenzenloser Unterhaltung!
            </h2>
        </div>

        <!-- 3-Step Layout -->
        <div class="max-w-7xl mx-auto mt-16 relative">
            <!-- Connecting Line (hidden on mobile, visible on md+) -->
            <div class="hidden md:block absolute top-12 left-[16.6%] right-[16.6%] h-0.5 border-t-2 border-dashed border-gray-200 z-0 pointer-events-none"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-24 h-24 rounded-full bg-gray-50 flex items-center justify-center border border-gray-100 shadow-sm relative overflow-hidden group-hover:border-red-200 group-hover:shadow-md transition-all duration-300 mb-6 mx-auto">
                        <span class="absolute text-gray-200/50 text-5xl font-black -translate-y-2 select-none pointer-events-none z-0">01</span>
                        <svg class="w-10 h-10 text-[#DD0000] relative z-10 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="5" width="18" height="14" rx="2.5"></rect>
                            <path d="M3 10h18"></path>
                            <path d="M7 15h3"></path>
                            <path d="M15 14.5l1.5 1.5 3-3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">1. Tarif wählen</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                        Wähle aus unseren Premium-Paketen und spare beim 12-Monats-Tarif.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-24 h-24 rounded-full bg-gray-50 flex items-center justify-center border border-gray-100 shadow-sm relative overflow-hidden group-hover:border-red-200 group-hover:shadow-md transition-all duration-300 mb-6 mx-auto">
                        <span class="absolute text-gray-200/50 text-5xl font-black -translate-y-2 select-none pointer-events-none z-0">02</span>
                        <svg class="w-10 h-10 text-[#DD0000] relative z-10 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">2. Sicher Bezahlen</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                        Schließe deine Bestellung sicher und verschlüsselt in Sekunden ab.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-24 h-24 rounded-full bg-gray-50 flex items-center justify-center border border-gray-100 shadow-sm relative overflow-hidden group-hover:border-red-200 group-hover:shadow-md transition-all duration-300 mb-6 mx-auto">
                        <span class="absolute text-gray-200/50 text-5xl font-black -translate-y-2 select-none pointer-events-none z-0">03</span>
                        <svg class="w-10 h-10 text-[#DD0000] relative z-10 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="14" rx="2.5"></rect>
                            <polygon points="10 8.5 15.5 11 10 13.5" fill="currentColor" fill-opacity="0.15" stroke="currentColor"></polygon>
                            <path d="M8 21h8"></path>
                            <path d="M12 18v3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">3. Sofort Streamen!</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                        Erhalte deine Zugangsdaten per E-Mail und starte sofort auf deinem Lieblingsgerät.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- 4. STREAM SMARTER / FEATURES SECTION (Imported from Home Section 6) -->
<section id="technologie" class="bg-gray-50 py-24 border-b border-gray-200 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto">
            <span class="text-[#DD0000] text-sm font-bold tracking-widest uppercase">TECHNOLOGIE</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 tracking-tight">
                IPTV Service Einfach Erklärt
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg leading-relaxed">
                Verstehen Sie, wie unsere fortschrittliche Technologie Premium-Unterhaltung direkt in Ihr Wohnzimmer liefert.
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="max-w-7xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1: Was ist IPTV? -->
            <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 relative overflow-hidden flex flex-col text-left">
                <svg class="w-10 h-10 text-[#DD0000] mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Was ist IPTV?</h3>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    IPTV überträgt hochauflösende Fernsehinhalte über sichere Internetprotokolle, anstatt über herkömmliche Kabel- oder Satellitenverbindungen. Die Zukunft des Streamings.
                </p>
            </div>

            <!-- Card 2: Wie es funktioniert -->
            <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 relative overflow-hidden flex flex-col text-left">
                <svg class="w-10 h-10 text-[#DD0000] mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="7" rx="2"></rect>
                    <rect x="2" y="14" width="20" height="7" rx="2"></rect>
                    <line x1="6" y1="6.5" x2="6.01" y2="6.5" stroke-width="2.5"></line>
                    <line x1="6" y1="17.5" x2="6.01" y2="17.5" stroke-width="2.5"></line>
                    <line x1="10" y1="6.5" x2="14" y2="6.5"></line>
                    <line x1="10" y1="17.5" x2="14" y2="17.5"></line>
                </svg>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Wie unser Abo funktioniert</h3>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    Unsere Technologie wandelt TV-Signale in digitale Datenpakete um und liefert sie über optimierte europäische Server. Das sorgt für blitzschnelles Umschalten und 4K-Qualität.
                </p>
            </div>

            <!-- Card 3: Warum uns wählen? -->
            <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 relative overflow-hidden flex flex-col justify-between text-left">
                <div>
                    <svg class="w-10 h-10 text-[#DD0000] mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Warum unser Service?</h3>
                    <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                        Wir garantieren 99,9% Server-Verfügbarkeit, kein Buffering und echten 24/7 Support. Perfekt optimiert für den deutschen Markt.
                    </p>
                </div>
                <div>
                    <a href="#preise" class="inline-flex items-center justify-center mt-6 px-6 py-3 bg-[#DD0000] hover:bg-red-700 text-white font-medium rounded-lg transition-colors shadow-sm">
                        <span>Jetzt Tarif wählen</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 5. FAQ SECTION (Imported from Home Section 8) -->
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
                    Hier finden Sie Antworten auf die wichtigsten Fragen zu unseren Tarifen und Funktionen.
                </p>
                <div class="h-1 w-16 bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] mt-6 rounded-full"></div>
            </div>

            <!-- Right Column: Category Tabs & Semantic FAQ List -->
            <div class="col-span-1 lg:col-span-8">
                
                <!-- Category Tabs UI -->
                <div class="flex flex-wrap gap-2 mb-8" role="tablist" aria-label="FAQ Kategorien">
                    <button type="button" 
                            data-faq-tab="allgemein" 
                            class="faq-tab-btn px-5 py-2 rounded-full bg-[#DD0000] text-white text-sm font-semibold shadow-md transition-all cursor-pointer"
                            aria-selected="true">
                        Allgemein
                    </button>
                    <button type="button" 
                            data-faq-tab="technik" 
                            class="faq-tab-btn px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer"
                            aria-selected="false">
                        Technik &amp; Geräte
                    </button>
                    <button type="button" 
                            data-faq-tab="zahlung" 
                            class="faq-tab-btn px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer"
                            aria-selected="false">
                        Zahlung &amp; Tarife
                    </button>
                </div>

                <!-- Category 1: Allgemein -->
                <div id="faq-cat-allgemein" class="faq-cat-group divide-y divide-gray-200 animate-fade-in" data-cat="allgemein">
                    <!-- Q1 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Was ist Premium IPTV und warum ist es besser als herkömmliches Kabelfernsehen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            IPTV (Internet Protocol Television) überträgt hochauflösende Fernsehsignale direkt über Ihre Internetverbindung. Im Gegensatz zum Kabelfernsehen profitieren Sie von einer gigantischen Sendervielfalt, flexibler Nutzung auf allen Geräten und weltweitem Zugriff auf über 25.000 Sender und VODs.
                        </p>
                    </details>

                    <!-- Q2 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Bieten Sie einen kostenlosen IPTV-Testzugang an?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja, wir bieten eine unverbindliche 24-Stunden-Testphase an. So können Sie unsere 4K-Bildqualität, die Server-Stabilität und die Sendervielfalt in Ruhe auf Ihrem eigenen Gerät testen, bevor Sie sich für einen Premium-Tarif entscheiden.
                        </p>
                    </details>

                    <!-- Q3 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Wie schnell nach der Bestellung wird mein Zugang freigeschaltet?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Die Freischaltung erfolgt vollautomatisiert in unter 5 Minuten. Direkt nach Zahlungseingang erhalten Sie Ihre M3U-Playlist, Xtream-Codes und eine bebilderte Installationsanleitung per E-Mail.
                        </p>
                    </details>
                </div>

                <!-- Category 2: Technik & Geräte -->
                <div id="faq-cat-technik" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="technik">
                    <!-- Q4 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Geräte und Apps werden unterstützt?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser Service ist mit nahezu jedem Endgerät kompatibel: Amazon Fire TV Stick, Samsung &amp; LG Smart TVs, Apple TV, Android TV Boxen, Smartphones (iOS &amp; Android), Windows/Mac PC sowie MAG- und Formuler-Boxen. Beliebte Apps wie TiviMate, IBO Player, IPTV Smarters Pro oder XCIPTV laufen einwandfrei.
                        </p>
                    </details>

                    <!-- Q5 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Internetgeschwindigkeit (Mbit/s) wird für 4K-Streaming benötigt?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Für flüssiges Streaming in Standard- und HD-Qualität reichen 16 Mbit/s. Für ein optimales Erlebnis bei 4K Ultra HD Inhalten und Live-Sport empfehlen wir eine stabile Internetverbindung von mindestens 50 Mbit/s.
                        </p>
                    </details>

                    <!-- Q6 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Kann ich mein Abonnement auf mehreren Geräten gleichzeitig nutzen?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja! In unseren Tarifen können Sie flexibel zwischen 1 bis 4 gleichzeitigen Verbindungen wählen. So kann jedes Familienmitglied auf seinem eigenen Smart TV, Tablet oder Smartphone gleichzeitig streamen.
                        </p>
                    </details>
                </div>

                <!-- Category 3: Zahlung & Tarife -->
                <div id="faq-cat-zahlung" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="zahlung">
                    <!-- Q7 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Zahlungsmethoden stehen zur Verfügung und ist die Zahlung sicher?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wir unterstützen sichere und moderne Zahlungsarten: Kreditkarte (Visa, Mastercard), PayPal sowie Kryptowährungen (Bitcoin, USDT). Alle Transaktionen sind mit 256-Bit SSL-Verschlüsselung geschützt.
                        </p>
                    </details>

                    <!-- Q8 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Verlängert sich mein Abonnement automatisch (Abo-Falle)?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein, absolut nicht! Bei uns gibt es keine automatischen Verlängerungen oder versteckten Abbuchungen. Ihr gebuchter Zeitraum läuft nach Ablauf automatisch aus, sofern Sie ihn nicht selbst aktiv verlängern.
                        </p>
                    </details>

                    <!-- Q9 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Gibt es eine Geld-zurück-Garantie?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ja. Sollte unser Service auf Ihrem Gerät nicht zu Ihrer vollsten Zufriedenheit funktionieren, bieten wir innerhalb der ersten 7 Tage eine unkomplizierte Geld-zurück-Garantie an.
                        </p>
                    </details>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- 6. 'EVERYTHING YOU NEED' MINI-SECTION (New 6-Grid Feature Section) -->
<section class="bg-[#f8f9fa] py-20 border-b border-gray-200 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Area -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-[#DD0000] text-sm font-bold tracking-widest uppercase mb-2 block">ALLES INKLUSIVE</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Alles, was Sie zum Streamen brauchen
            </h2>
            <p class="text-gray-600 mt-3 text-base sm:text-lg">
                Jeder Tarif beinhaltet alle Premium-Funktionen für uneingeschränkten Fernsehgenuss in Deutschland.
            </p>
        </div>

        <!-- 6-Grid Feature Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
            
            <!-- Card 1: 99,9% Uptime -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                        <line x1="6" y1="6" x2="6.01" y2="6"></line>
                        <line x1="6" y1="18" x2="6.01" y2="18"></line>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">99,9% Uptime</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">Höchste Server-Stabilität</p>
                </div>
            </div>

            <!-- Card 2: Kein Buffering -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">Kein Buffering</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">Anti-Freeze™ Technologie</p>
                </div>
            </div>

            <!-- Card 3: 4K Ultra HD -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">4K Ultra HD</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">Kristallklares Streaming</p>
                </div>
            </div>

            <!-- Card 4: Live-Sport -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M6 9H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2"></path>
                        <path d="M18 9h2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2"></path>
                        <path d="M4 3h16v6a8 8 0 0 1-16 0V3z"></path>
                        <path d="M12 17v4"></path>
                        <path d="M8 21h8"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">Live-Sport</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">Bundesliga, CL &amp; Events</p>
                </div>
            </div>

            <!-- Card 5: VOD Mediathek -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                        <line x1="7" y1="2" x2="7" y2="22"></line>
                        <line x1="17" y1="2" x2="17" y2="22"></line>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <line x1="2" y1="7" x2="7" y2="7"></line>
                        <line x1="2" y1="17" x2="7" y2="17"></line>
                        <line x1="17" y1="17" x2="22" y2="17"></line>
                        <line x1="17" y1="7" x2="22" y2="7"></line>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">VOD Mediathek</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">120.000+ Filme &amp; Serien</p>
                </div>
            </div>

            <!-- Card 6: 24/7 Support -->
            <div class="bg-white p-5 sm:p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100">
                    <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base leading-snug">24/7 Support</h3>
                    <p class="text-xs text-gray-500 mt-0.5 hidden sm:block">Deutscher Kundenservice</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 7. FEEDBACKS SECTION (Imported from Home Section 11) -->
<section id="bewertungen" class="relative py-24 overflow-hidden bg-[#0a0a0a] font-sans">
    <!-- Subtle Dot Pattern Background -->
    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1.5px, transparent 1.5px); background-size: 24px 24px;"></div>
    
    <!-- Subtle Ambient Accent Glows -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-red-600/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <div class="text-[#DD0000] font-bold text-sm tracking-widest uppercase mb-2">KUNDENSTIMMEN</div>
            <h2 class="text-white text-3xl md:text-4xl font-bold tracking-tight">
                Was unsere Kunden sagen
            </h2>
        </div>

        <!-- Trustworthy Review Cards (Horizontal Carousel on Mobile, Wrapped Grid on Desktop) -->
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-6 pb-8 lg:flex-wrap lg:overflow-visible lg:justify-center scrollbar-hide max-w-7xl mx-auto">
            
            <!-- Review 1: Lukas M. -->
            <div class="bg-white rounded-xl p-6 shadow-xl w-[85vw] sm:w-[60vw] md:w-[45vw] lg:w-[calc(33.333%-16px)] shrink-0 snap-center lg:shrink lg:snap-none flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#FFCE00]">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                    &bdquo;Absolut begeistert! Die 4K-Qualität bei den Bundesliga-Spielen ist überragend. Kein Buffering, selbst bei Top-Spielen am Wochenende. Jeden Cent wert.&ldquo;
                </p>

                <!-- Customer Info -->
                <div class="flex items-center pt-4 border-t border-gray-100 mt-auto">
                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold shrink-0">
                        LM
                    </div>
                    <div class="ml-3 flex items-center flex-wrap gap-2">
                        <span class="font-bold text-gray-900">Lukas M.</span>
                        <span class="inline-flex items-center text-emerald-600 text-xs font-semibold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Verifiziert
                        </span>
                    </div>
                </div>
            </div>

            <!-- Review 2: Sarah K. -->
            <div class="bg-white rounded-xl p-6 shadow-xl w-[85vw] sm:w-[60vw] md:w-[45vw] lg:w-[calc(33.333%-16px)] shrink-0 snap-center lg:shrink lg:snap-none flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#FFCE00]">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                    &bdquo;Sehr einfache Einrichtung. Ich habe die Daten innerhalb von 2 Minuten nach der Zahlung per E-Mail erhalten. Läuft perfekt auf meinem Samsung Smart TV.&ldquo;
                </p>

                <!-- Customer Info -->
                <div class="flex items-center pt-4 border-t border-gray-100 mt-auto">
                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold shrink-0">
                        SK
                    </div>
                    <div class="ml-3 flex items-center flex-wrap gap-2">
                        <span class="font-bold text-gray-900">Sarah K.</span>
                        <span class="inline-flex items-center text-emerald-600 text-xs font-semibold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Verifiziert
                        </span>
                    </div>
                </div>
            </div>

            <!-- Review 3: Michael T. -->
            <div class="bg-white rounded-xl p-6 shadow-xl w-[85vw] sm:w-[60vw] md:w-[45vw] lg:w-[calc(33.333%-16px)] shrink-0 snap-center lg:shrink lg:snap-none flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#FFCE00]">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                    &bdquo;Ich habe schon viele IPTV-Anbieter getestet, aber dieser hier ist mit Abstand der beste. Riesige Auswahl an Filmen und Serien, und der Support ist blitzschnell.&ldquo;
                </p>

                <!-- Customer Info -->
                <div class="flex items-center pt-4 border-t border-gray-100 mt-auto">
                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold shrink-0">
                        MT
                    </div>
                    <div class="ml-3 flex items-center flex-wrap gap-2">
                        <span class="font-bold text-gray-900">Michael T.</span>
                        <span class="inline-flex items-center text-emerald-600 text-xs font-semibold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Verifiziert
                        </span>
                    </div>
                </div>
            </div>

            <!-- Review 4: David R. -->
            <div class="bg-white rounded-xl p-6 shadow-xl w-[85vw] sm:w-[60vw] md:w-[45vw] lg:w-[calc(33.333%-16px)] shrink-0 snap-center lg:shrink lg:snap-none flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#FFCE00]">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                    &bdquo;Habe meinen teuren Kabelvertrag gekündigt. Hier bekomme ich für einen Bruchteil des Preises alle Sender, die ich brauche. Sehr empfehlenswert!&ldquo;
                </p>

                <!-- Customer Info -->
                <div class="flex items-center pt-4 border-t border-gray-100 mt-auto">
                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold shrink-0">
                        DR
                    </div>
                    <div class="ml-3 flex items-center flex-wrap gap-2">
                        <span class="font-bold text-gray-900">David R.</span>
                        <span class="inline-flex items-center text-emerald-600 text-xs font-semibold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Verifiziert
                        </span>
                    </div>
                </div>
            </div>

            <!-- Review 5: Andreas H. -->
            <div class="bg-white rounded-xl p-6 shadow-xl w-[85vw] sm:w-[60vw] md:w-[45vw] lg:w-[calc(33.333%-16px)] shrink-0 snap-center lg:shrink lg:snap-none flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#FFCE00]">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                    &bdquo;Top Service! Nutze es jetzt seit 6 Monaten und hatte nie Probleme. Die Struktur der Sender ist sehr übersichtlich und die Qualität konstant hoch.&ldquo;
                </p>

                <!-- Customer Info -->
                <div class="flex items-center pt-4 border-t border-gray-100 mt-auto">
                    <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold shrink-0">
                        AH
                    </div>
                    <div class="ml-3 flex items-center flex-wrap gap-2">
                        <span class="font-bold text-gray-900">Andreas H.</span>
                        <span class="inline-flex items-center text-emerald-600 text-xs font-semibold bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Verifiziert
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Scripts for Pricing Page (Device Selector & FAQ Tabs) -->
<script>
(function() {
    // 1. Device Selector Tabs & Dynamic Multi-Device Volume Discount Pricing
    const basePrices = {
        1: 19,
        2: 29,
        3: 49,
        4: 75
    };

    const deviceMultipliers = {
        '1': 1.00,
        '2': 1.10,
        '3': 1.18,
        '4': 1.25
    };

    function initDeviceTabs() {
        const buttons = document.querySelectorAll('.device-tab-btn');
        if (!buttons.length) return;

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                const deviceCount = this.getAttribute('data-device');
                if (!deviceMultipliers[deviceCount]) return;

                // Update active tab styles
                buttons.forEach(b => {
                    b.className = 'device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300';
                });
                this.className = 'device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl bg-[#DD0000] text-white text-base sm:text-lg font-bold shadow-md transition-all text-center whitespace-nowrap cursor-pointer';

                // Update price figures smoothly with rounded whole numbers
                const multiplier = deviceMultipliers[deviceCount];
                for (let cardId = 1; cardId <= 4; cardId++) {
                    const el = document.getElementById('price-card-' + cardId);
                    if (el) {
                        el.style.opacity = '0.3';
                        setTimeout(() => {
                            const calculatedPrice = Math.round(basePrices[cardId] * multiplier);
                            el.textContent = calculatedPrice;
                            el.style.opacity = '1';
                        }, 120);
                    }
                }
            });
        });
    }

    // 2. FAQ Tabs
    function initFaqTabs() {
        const tabs = document.querySelectorAll('.faq-tab-btn');
        const groups = document.querySelectorAll('.faq-cat-group');
        if (!tabs.length || !groups.length) return;

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetCat = this.getAttribute('data-faq-tab');

                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.className = 'faq-tab-btn px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer';
                });
                this.setAttribute('aria-selected', 'true');
                this.className = 'faq-tab-btn px-5 py-2 rounded-full bg-[#DD0000] text-white text-sm font-semibold shadow-md transition-all cursor-pointer';

                groups.forEach(g => {
                    if (g.getAttribute('data-cat') === targetCat) {
                        g.classList.remove('hidden');
                        g.classList.remove('animate-fade-in');
                        void g.offsetWidth;
                        g.classList.add('animate-fade-in');
                    } else {
                        g.classList.add('hidden');
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initDeviceTabs();
            initFaqTabs();
        });
    } else {
        initDeviceTabs();
        initFaqTabs();
    }
})();
</script>

<?php
get_footer();
