<?php
/**
 * Template Name: Blog Page
 *
 * Dedicated Minimalist Blog Page for Fast IPTV Store
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- 1. BLOG HERO SECTION (Minimalist Dark with Slanted German Flag) -->
<section class="bg-[#0a0a0a] py-20 font-sans relative overflow-hidden">
    
    <!-- Large, slanted, interactive German flag element on the left edge -->
    <div class="absolute left-[-4rem] md:left-[-2rem] top-0 bottom-0 w-40 md:w-56 flex -skew-x-12 opacity-30 hover:opacity-80 hover:-translate-x-2 transition-all duration-500 z-0 cursor-pointer">
        <div class="w-1/3 bg-black"></div>
        <div class="w-1/3 bg-[#DD0000]"></div>
        <div class="w-1/3 bg-[#FFCE00]"></div>
    </div>

    <!-- Main Hero Text Content (relative z-10 to stay clearly above stripes) -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-white text-4xl md:text-5xl font-extrabold text-center tracking-tight">
            IPTV News &amp; Ratgeber
        </h1>
        <p class="text-gray-400 text-center mt-4 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
            Bleiben Sie auf dem Laufenden mit den neuesten Updates, Tipps und Anleitungen rund um Premium IPTV in Deutschland.
        </p>
    </div>
</section>

<!-- 2. THE BLOG GRID SECTION (Clean Light Mode) -->
<section class="bg-white py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- 3. Minimalist Blog Cards (6 Cards with Thumbnails) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?w=800&q=80" alt="Live-Sport Streaming" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">IPTV TIPPS • 12. Okt 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-1" class="hover:text-[#DD0000] transition-colors">Wie man Buffering beim Live-Sport vermeidet</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Ruckler und Ladezeiten während Bundesliga- oder Champions-League-Spielen sind frustrierend. Mit diesen einfachen Router- und Player-Einstellungen optimieren Sie Ihre Verbindung für garantiert ruckelfreies 4K-Streaming.
                    </p>
                    <a href="#post-1" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1593789382576-54f489cea51d?w=800&q=80" alt="Smart TV Apps" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">APP RATGEBER • 08. Okt 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-2" class="hover:text-[#DD0000] transition-colors">Die besten Smart TV Apps für IPTV 2026</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        TiviMate, IBO Player oder IPTV Smarters Pro? Wir vergleichen die besten IPTV-Player für Samsung Tizen, LG webOS, Fire TV und Android TV hinsichtlich Umschaltzeiten und EPG-Support.
                    </p>
                    <a href="#post-2" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&q=80" alt="VPN & Privatsphäre" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">SICHERHEIT • 03. Okt 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-3" class="hover:text-[#DD0000] transition-colors">VPN vs. kein VPN: Was ist besser beim IPTV-Streaming?</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Benötigen Sie ein VPN für IPTV in Deutschland? Erfahren Sie, wie Sie ISP-Bandbreitendrosselung bei Top-Events umgehen und Ihre Privatsphäre beim Streamen wirksam schützen.
                    </p>
                    <a href="#post-3" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&q=80" alt="Fire TV Stick Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">HARDWARE • 28. Sep 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-4" class="hover:text-[#DD0000] transition-colors">Fire TV Stick 4K Max optimal für IPTV einrichten</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Schritt-für-Schritt-Setup für den Amazon Fire TV Stick. Aktivieren Sie die Downloader-App, konfigurieren Sie den DNS-Server und holen Sie das absolute Maximum an Bildqualität heraus.
                    </p>
                    <a href="#post-4" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=800&q=80" alt="Internet & Router Speed" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">TECHNIK • 22. Sep 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-5" class="hover:text-[#DD0000] transition-colors">Internetgeschwindigkeit: Wie viel MBit/s für 4K IPTV?</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Reicht eine 50 MBit/s Leitung für gleichzeitiges Streaming auf mehreren Geräten? Warum ein stabiler Ping und LAN-Kabel oft mehr bewirken als ein teures Bandbreiten-Upgrade.
                    </p>
                    <a href="#post-5" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="group border border-gray-200 rounded-lg flex flex-col h-full hover:border-[#DD0000] hover:shadow-xl transition-all duration-300 overflow-hidden bg-white">
                <div class="w-full h-48 md:h-56 overflow-hidden relative bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?w=800&q=80" alt="EPG & Catch-Up TV" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-3">EPG &amp; FEATURES • 15. Sep 2026</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#DD0000] transition-colors">
                        <a href="#post-6" class="hover:text-[#DD0000] transition-colors">Smart EPG und Catch-Up TV richtig nutzen</a>
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Verpassen Sie nie wieder Ihre Lieblingssendung. So laden Sie den elektronischen Programmführer (EPG) für alle DACH-Sender und nutzen die 7-Tage-Rückspulfunktion mühelos.
                    </p>
                    <a href="#post-6" class="mt-auto text-[#DD0000] text-sm font-bold flex items-center gap-1">
                        Weiterlesen &rarr;
                    </a>
                </div>
            </article>

        </div>

        <!-- 4. Pagination (Simple) -->
        <div class="mt-16 flex justify-center gap-2 items-center">
            <span class="px-4 py-2 text-sm font-semibold rounded-md bg-[#DD0000] text-white">1</span>
            <a href="#page-2" class="px-4 py-2 text-sm font-medium rounded-md border border-gray-200 text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-colors">2</a>
            <a href="#page-3" class="px-4 py-2 text-sm font-medium rounded-md border border-gray-200 text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-colors">3</a>
            <a href="#page-2" class="px-4 py-2 text-sm font-medium rounded-md border border-gray-200 text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-colors flex items-center gap-1">
                <span>Next</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>

<?php
get_footer();
