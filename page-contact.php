<?php
/**
 * Template Name: Contact Page
 *
 * Dedicated Clean Light Mode Contact Page for Fast IPTV Store (German Market)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- 1. SECTION SETUP (Clean, Bright & Trustworthy Light Mode) -->
<section id="kontakt" class="bg-white py-24 relative overflow-hidden font-sans min-h-[calc(100vh-140px)] flex flex-col justify-center border-b border-gray-100">
    
    <!-- Large Slanted German Flag Stripes (Left Edge - Highly Visible on White) -->
    <div class="absolute left-[-4rem] md:left-[-2rem] top-0 bottom-0 w-40 md:w-56 flex -skew-x-12 opacity-35 hover:opacity-85 hover:-translate-x-2 transition-all duration-500 z-0 cursor-pointer pointer-events-none">
        <div class="w-1/3 bg-black"></div>
        <div class="w-1/3 bg-[#DD0000]"></div>
        <div class="w-1/3 bg-[#FFCE00]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        
        <!-- 2. HEADER TEXT (Light Mode) -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center justify-center gap-2 text-yellow-600 font-bold text-sm tracking-widest uppercase mb-3">
                <svg class="w-4 h-4 fill-current text-[#FFCE00]" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
                <span>24/7 PREMIUM SUPPORT</span>
            </div>
            
            <h1 class="text-gray-900 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-4">
                Wie können wir Ihnen helfen?
            </h1>
            
            <p class="text-gray-500 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Unser engagiertes Support-Team ist rund um die Uhr für Sie da. Wählen Sie Ihre bevorzugte Kontaktmethode.
            </p>
        </div>

        <!-- 3. CONTACT GRID (Clean & Minimalist Cards) -->
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
            
            <!-- Card 1: WhatsApp (Fast Support) -->
            <div class="bg-white border border-gray-200 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-xl hover:border-[#FFCE00] transition-all duration-300 rounded-2xl p-10 flex flex-col items-center text-center relative group overflow-hidden">
                <!-- Top Glow Hover Line (Gold) -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#FFCE00] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <!-- WhatsApp Status Indicator -->
                <div class="mb-4 inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-green-50 border border-green-200 text-green-700 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-[#25D366] animate-pulse"></span>
                    <span>Jetzt online • Antwort in ca. 15 Min.</span>
                </div>

                <!-- Icon: Large WhatsApp SVG in Light Green Circle -->
                <div class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-6 border border-green-100 group-hover:border-[#25D366] transition-colors shadow-sm text-[#25D366]">
                    <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19.01L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67ZM8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7.02 8.48 7.02 9.68C7.02 10.89 7.9 12.06 8.02 12.22C8.14 12.39 9.75 14.88 12.21 15.94C12.8 16.19 13.25 16.34 13.61 16.46C14.2 16.65 14.74 16.62 15.16 16.56C15.63 16.49 16.61 15.97 16.82 15.39C17.02 14.8 17.02 14.3 16.96 14.2C16.9 14.1 16.74 14.04 16.49 13.92C16.25 13.79 15.05 13.2 14.83 13.12C14.61 13.04 14.45 13 14.28 13.25C14.12 13.49 13.65 14.04 13.51 14.2C13.37 14.37 13.23 14.39 12.98 14.27C12.74 14.14 11.95 13.88 11.02 13.05C10.29 12.4 9.8 11.6 9.66 11.36C9.52 11.11 9.64 10.98 9.77 10.85C9.88 10.74 10.02 10.56 10.14 10.41C10.26 10.27 10.3 10.16 10.38 10C10.46 9.84 10.42 9.7 10.36 9.58C10.3 9.46 9.83 8.3 9.63 7.82C9.44 7.36 9.24 7.42 9.09 7.41L8.63 7.33H8.53Z"/>
                    </svg>
                </div>

                <h2 class="text-gray-900 text-2xl font-bold mb-3">WhatsApp Chat</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Für schnelle Hilfe und direkte Einrichtung. Wir antworten in der Regel innerhalb von 15 Minuten.
                </p>

                <!-- CTA Button (WhatsApp Green) -->
                <a href="https://wa.me/?text=Hallo%20FastIPTV%20Support%2C%20ich%20ben%C3%B6tige%20Hilfe" target="_blank" rel="noopener noreferrer" class="mt-auto w-full inline-flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#1da851] text-white font-bold py-4 px-8 rounded-lg transition-colors shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19.01L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67ZM8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7.02 8.48 7.02 9.68C7.02 10.89 7.9 12.06 8.02 12.22C8.14 12.39 9.75 14.88 12.21 15.94C12.8 16.19 13.25 16.34 13.61 16.46C14.2 16.65 14.74 16.62 15.16 16.56C15.63 16.49 16.61 15.97 16.82 15.39C17.02 14.8 17.02 14.3 16.96 14.2C16.9 14.1 16.74 14.04 16.49 13.92C16.25 13.79 15.05 13.2 14.83 13.12C14.61 13.04 14.45 13 14.28 13.25C14.12 13.49 13.65 14.04 13.51 14.2C13.37 14.37 13.23 14.39 12.98 14.27C12.74 14.14 11.95 13.88 11.02 13.05C10.29 12.4 9.8 11.6 9.66 11.36C9.52 11.11 9.64 10.98 9.77 10.85C9.88 10.74 10.02 10.56 10.14 10.41C10.26 10.27 10.3 10.16 10.38 10C10.46 9.84 10.42 9.7 10.36 9.58C10.3 9.46 9.83 8.3 9.63 7.82C9.44 7.36 9.24 7.42 9.09 7.41L8.63 7.33H8.53Z"/>
                    </svg>
                    <span>Jetzt auf WhatsApp schreiben</span>
                </a>
            </div>

            <!-- Card 2: E-Mail (Formal Support) -->
            <div class="bg-white border border-gray-200 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-xl hover:border-[#FFCE00] transition-all duration-300 rounded-2xl p-10 flex flex-col items-center text-center relative group overflow-hidden">
                <!-- Top Glow Hover Line (Gold) -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#FFCE00] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <!-- Email Status Indicator -->
                <div class="mb-4 inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-yellow-50 border border-yellow-200 text-yellow-800 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
                    <span>Offizieller Support • Antwort &lt; 2 Std.</span>
                </div>

                <!-- Icon: Large Envelope SVG in Light Yellow Circle -->
                <div class="w-20 h-20 rounded-full bg-yellow-50 flex items-center justify-center mb-6 border border-yellow-100 group-hover:border-[#FFCE00] transition-colors shadow-sm text-yellow-600">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="M22 6l-10 7L2 6"></path>
                    </svg>
                </div>

                <h2 class="text-gray-900 text-2xl font-bold mb-3">E-Mail Support</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Für allgemeine Anfragen, Abrechnungen und ausführlichen technischen Support.
                </p>

                <!-- CTA Button (Yellow/Gold with Black Text) -->
                <a href="mailto:support@fastiptv.de" class="mt-auto w-full inline-flex items-center justify-center gap-2 bg-[#FFCE00] hover:bg-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-lg transition-colors shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>E-Mail senden</span>
                </a>
            </div>

        </div>

        <!-- 5. TRUST BADGES (Bottom - Light Mode text-gray-600) -->
        <div class="mt-12 flex flex-wrap justify-center items-center gap-6 sm:gap-12 text-gray-600 text-sm font-medium">
            
            <!-- Item 1: Shield -->
            <div class="inline-flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span>100% Sicher &amp; Privat</span>
            </div>

            <!-- Item 2: Clock -->
            <div class="inline-flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span>24/7 Erreichbarkeit</span>
            </div>

            <!-- Item 3: Globe -->
            <div class="inline-flex items-center gap-2">
                <svg class="w-5 h-5 text-gray-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
                <span>Deutscher Support</span>
            </div>

        </div>

    </div>
</section>

<?php
get_footer();
