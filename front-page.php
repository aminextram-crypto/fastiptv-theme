<?php
/**
 * The front page template file (Clean Modern Typography & German Brand Identity)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- SEO Schema Markup (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Product",
      "name": "Fast IPTV Store Premium Abonnement (Deutschland)",
      "description": "Zuverlässiger IPTV Premium Service für Deutschland, Österreich und die Schweiz. Über 25.000 Live-Sender, Bundesliga, Champions League und 120.000 Filme & Serien in 4K & Full HD ohne Ruckeln.",
      "brand": {
        "@type": "Brand",
        "name": "Fast IPTV"
      },
      "offers": {
        "@type": "AggregateOffer",
        "priceCurrency": "EUR",
        "lowPrice": "19.00",
        "highPrice": "75.00",
        "offerCount": "4"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Was ist Premium IPTV und warum ist es besser als herkömmliches Kabelfernsehen?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IPTV (Internet Protocol Television) überträgt hochauflösende Fernsehsignale direkt über Ihre Internetverbindung. Im Gegensatz zum Kabelfernsehen profitieren Sie von einer gigantischen Sendervielfalt, flexibler Nutzung auf allen Geräten und weltweitem Zugriff auf über 25.000 Sender und VODs."
          }
        },
        {
          "@type": "Question",
          "name": "Bieten Sie einen kostenlosen IPTV-Testzugang an?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ja, wir bieten eine unverbindliche 24-Stunden-Testphase an. So können Sie unsere 4K-Bildqualität, die Server-Stabilität und die Sendervielfalt in Ruhe auf Ihrem eigenen Gerät testen, bevor Sie sich für einen Premium-Tarif entscheiden."
          }
        },
        {
          "@type": "Question",
          "name": "Wie schnell erhalte ich die Zugangsdaten nach dem Kauf?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unser System arbeitet vollautomatisch. Unmittelbar nach der erfolgreichen Zahlung erhalten Sie Ihre M3U-URL, Xtream Codes und eine Schritt-für-Schritt-Anleitung direkt per E-Mail."
          }
        },
        {
          "@type": "Question",
          "name": "Ist der Service in Deutschland, Österreich und der Schweiz verfügbar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolut. Unser Server-Netzwerk ist speziell für den DACH-Raum optimiert, um blitzschnelle Ladezeiten, null Buffering und maximale Zuverlässigkeit in diesen Regionen zu garantieren."
          }
        },
        {
          "@type": "Question",
          "name": "Welche Smart-TVs und Geräte werden unterstützt?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unser IPTV-Abonnement ist plattformübergreifend. Es läuft perfekt auf Smart-TVs (Samsung Tizen, LG webOS), Fire TV Sticks, Apple TV, Android TV-Boxen, MAG-Geräten, Smartphones (iOS/Android) sowie über Webbrowser am PC."
          }
        },
        {
          "@type": "Question",
          "name": "Benötige ich ein VPN für sicheres Streaming?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ein VPN ist für die Nutzung unseres Services nicht zwingend erforderlich, da unsere Server bereits hochgradig gesichert sind. Wir sind jedoch zu 100% VPN-freundlich, falls Sie Ihre Verbindung zusätzlich anonymisieren möchten."
          }
        },
        {
          "@type": "Question",
          "name": "Welche Internetgeschwindigkeit (Mbit/s) wird für 4K-Streaming benötigt?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Für flüssiges Streaming in Standard- und HD-Qualität reichen 16 Mbit/s. Für ein optimales Erlebnis bei 4K Ultra HD Inhalten und Live-Sport empfehlen wir eine stabile Internetverbindung von mindestens 50 Mbit/s."
          }
        },
        {
          "@type": "Question",
          "name": "Kann ich mein Abonnement auf mehreren Geräten gleichzeitig nutzen?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standardmäßig ist ein Abonnement für ein Gerät zur selben Zeit ausgelegt. Wir bieten jedoch günstige Multiroom-Pakete an (z.B. für 2 oder 3 Geräte), die Sie bei der Tarifwahl flexibel hinzubuchen können."
          }
        },
        {
          "@type": "Question",
          "name": "Welche sicheren Zahlungsmethoden werden akzeptiert?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Wir legen großen Wert auf Sicherheit und bieten 100% verschlüsselte Zahlungen an. Sie können bequem per PayPal, Kreditkarte (Visa/Mastercard) oder mit verschiedenen Kryptowährungen bezahlen."
          }
        },
        {
          "@type": "Question",
          "name": "Gibt es versteckte Kosten oder eine automatische Vertragsverlängerung?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nein, bei uns gibt es absolute Transparenz. Es handelt sich um Prepaid-Tarife ohne versteckte Gebühren, ohne Bonitätsprüfung und ohne automatische Verlängerung (keine Abofalle). Nach Ablauf entscheiden Sie selbst, ob Sie verlängern möchten."
          }
        },
        {
          "@type": "Question",
          "name": "Gibt es eine Geld-zurück-Garantie?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ja, Ihre Zufriedenheit steht an erster Stelle. Wir bieten eine 7-Tage-Geld-zurück-Garantie an, falls unser technischer Support ein anhaltendes Problem mit Ihrem Service nicht lösen kann."
          }
        }
      ]
    }
  ]
}
</script>

<!-- 1. HERO SECTION — Wide, Edge-to-Edge Desktop Layout -->

<section class="relative bg-white pt-10 sm:pt-14 pb-16 sm:pb-20 border-b border-gray-100 overflow-hidden font-sans">
    <div class="w-full max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 2-COLUMN GRID (Precisely aligned with 'So funktioniert\'s' and 'Kostenlos Testen') -->
        <div class="grid grid-cols-1 lg:grid-cols-[43.3%_1fr] gap-y-10 lg:gap-0 items-center">

            <!-- LEFT COLUMN: Circular visual — strictly left-aligned with FASTIPTV logo -->
            <div class="flex items-center justify-center lg:justify-start w-full lg:justify-self-start">
                <div class="relative w-[280px] h-[280px] sm:w-[360px] sm:h-[360px] md:w-[420px] md:h-[420px] lg:w-[28rem] lg:h-[28rem] xl:w-[30rem] xl:h-[30rem] rounded-full overflow-hidden shadow-2xl p-2 bg-white border border-gray-100 shrink-0">

                    <!-- 4 Quadrants Grid -->
                    <div class="grid grid-cols-2 grid-rows-2 w-full h-full gap-2 rounded-full overflow-hidden bg-white">

                        <!-- Quadrant 1: Top-Left (Anime) -->
                        <div class="relative overflow-hidden w-full h-full bg-gray-900 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1578632767115-351597cf2477?auto=format&fit=crop&w=600&q=80" alt="Anime & Series" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent flex flex-col items-center justify-center text-center p-3 sm:p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                                <div class="transform translate-y-6 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out delay-75 flex flex-col items-center justify-center">
                                    <span class="font-bold text-white text-base sm:text-lg leading-tight">Anime & Manga</span>
                                    <p class="text-xs sm:text-sm text-gray-200 mt-1 leading-snug">Klassiker & Neuerscheinungen in 4K</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quadrant 2: Top-Right (TV/Screen) -->
                        <div class="relative overflow-hidden w-full h-full bg-gray-900 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&w=600&q=80" alt="Smart TV Remote Control" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent flex flex-col items-center justify-center text-center p-3 sm:p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                                <div class="transform translate-y-6 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out delay-75 flex flex-col items-center justify-center">
                                    <span class="font-bold text-white text-base sm:text-lg leading-tight">Premium Sender</span>
                                    <p class="text-xs sm:text-sm text-gray-200 mt-1 leading-snug">25.000+ Live-TV-Kanäle</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quadrant 3: Bottom-Left (Cinema) -->
                        <div class="relative overflow-hidden w-full h-full bg-gray-900 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?auto=format&fit=crop&w=600&q=80" alt="Cinema Movies" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent flex flex-col items-center justify-center text-center p-3 sm:p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                                <div class="transform translate-y-6 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out delay-75 flex flex-col items-center justify-center">
                                    <span class="font-bold text-white text-base sm:text-lg leading-tight">Filme & Serien</span>
                                    <p class="text-xs sm:text-sm text-gray-200 mt-1 leading-snug">120.000+ VODs & Blockbuster</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quadrant 4: Bottom-Right (Sports) -->
                        <div class="relative overflow-hidden w-full h-full bg-gray-900 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1515523110800-9415d13b84a8?auto=format&fit=crop&w=600&q=80" alt="Live Sports Arena" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-110">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent flex flex-col items-center justify-center text-center p-3 sm:p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                                <div class="transform translate-y-6 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-out delay-75 flex flex-col items-center justify-center">
                                    <span class="font-bold text-white text-base sm:text-lg leading-tight">Live-Sport</span>
                                    <p class="text-xs sm:text-sm text-gray-200 mt-1 leading-snug">Alle Ligen & PPV-Events</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Center Red Badge -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 sm:w-48 sm:h-48 lg:w-56 lg:h-56 rounded-full bg-[#DD0000] text-white flex flex-col items-center justify-center text-center shadow-lg border-4 border-white z-20 pointer-events-none">
                        <div class="absolute inset-2 sm:inset-2.5 rounded-full border-2 border-dashed border-white/70 pointer-events-none"></div>
                        <span class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight leading-none text-white">15+</span>
                        <span class="text-[11px] sm:text-xs lg:text-sm font-semibold uppercase tracking-wider mt-1.5 text-white/95 max-w-[130px] leading-tight">Jahre Erfahrung</span>
                    </div>


                </div>
            </div>

            <!-- RIGHT COLUMN: German content — full width stretching to button right edge, starting at 'So funktioniert\'s' -->
            <div class="flex flex-col items-start text-left w-full">

                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-2 text-[13px] font-semibold uppercase tracking-widest text-[#DD0000] mb-3">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M5 9.2h3V19H5zM10.6 5h2.8v14h-2.8zm5.6 8H19v6h-2.8z"></path>
                    </svg>
                    <span>PREMIUM IPTV DEUTSCHLAND</span>
                </div>

                <!-- H1 -->
                <h1 class="text-3xl sm:text-4xl lg:text-[42px] xl:text-[46px] font-bold text-gray-950 tracking-tight leading-[1.15] w-full">
                    Der beste IPTV Service in Deutschland 2026
                </h1>

                <!-- Supporting text -->
                <p class="mt-4 text-[15px] sm:text-base font-normal text-gray-600 leading-relaxed w-full">
                    Erhalten Sie sofortigen Zugriff auf über 25.000 Live-TV-Sender und eine riesige Mediathek auf Abruf. Schauen Sie in gestochen scharfem 4K und Full HD mit Deutschlands zuverlässigem IPTV-Abonnement.
                </p>

                <!-- Benefits -->
                <ul class="mt-5 space-y-2.5 text-[15px] font-medium text-gray-800 w-full">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Sichere Zahlung</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Premium Qualität</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Kein Ruckeln</span>
                    </li>
                </ul>

                <!-- Secondary paragraph -->
                <p class="mt-5 text-sm sm:text-[15px] font-normal text-gray-500 leading-relaxed w-full">
                    Erleben Sie Live-Sport, Nachrichten, Filme und Serien aus aller Welt. Fast IPTV bietet modernes Streaming mit deutschem 24/7 Support und ohne lange Vertragslaufzeiten.
                </p>

                <!-- CTA -->
                <div class="mt-7 w-full sm:w-auto">
                    <a href="/pricing-page" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-10 py-4 rounded-lg text-sm font-bold uppercase tracking-widest text-white bg-[#DD0000] hover:bg-[#b80000] shadow-md hover:shadow-lg transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                        <span>JETZT TARIFE ANSEHEN</span>
                    </a>
                </div>

            </div>

        </div>

        <!-- STATISTICS ROW — Stretched edge-to-edge matching Header boundaries -->
        <div class="mt-12 sm:mt-16 pt-8 sm:pt-10 border-t border-gray-100 w-full">
            <div class="flex flex-wrap items-center justify-between gap-6 sm:gap-8 w-full">

                <!-- Stat 1: 25.000+ Sender -->
                <div class="flex items-center gap-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-950 tracking-tight leading-none">25.000+</span>
                        <span class="text-sm sm:text-base font-normal text-gray-500 mt-1.5">Sender</span>
                    </div>
                </div>

                <!-- Stat 2: 5.000+ Nutzer -->
                <div class="flex items-center gap-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 16.5a5 5 0 010-9M15.5 7.5a5 5 0 010 9M6 19a8.5 8.5 0 010-14M18 5a8.5 8.5 0 010 14"></path>
                        <circle cx="12" cy="12" r="2" fill="currentColor"></circle>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-950 tracking-tight leading-none">5.000+</span>
                        <span class="text-sm sm:text-base font-normal text-gray-500 mt-1.5">Nutzer</span>
                    </div>
                </div>

                <!-- Stat 3: 120.000+ Filme/Serien -->
                <div class="flex items-center gap-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                        <polygon points="22 7 16 12 22 17 22 7"></polygon>
                        <circle cx="6" cy="10" r="1.5" fill="currentColor"></circle>
                        <circle cx="10" cy="10" r="1.5" fill="currentColor"></circle>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-950 tracking-tight leading-none">120.000+</span>
                        <span class="text-sm sm:text-base font-normal text-gray-500 mt-1.5">Filme/Serien</span>
                    </div>
                </div>

                <!-- Stat 4: 1.000+ Bewertungen -->
                <div class="flex items-center gap-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="6"></circle>
                        <polyline points="8.21 13.89 7 22 12 19 17 22 15.79 13.88"></polyline>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-950 tracking-tight leading-none">1.000+</span>
                        <span class="text-sm sm:text-base font-normal text-gray-500 mt-1.5">Bewertungen</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- 2. PRICING MATRIX SECTION (Section 2 - Premium Dark UI & Red Pill Design) -->
<section id="preise" class="bg-gray-200 pt-20 sm:pt-24 pb-16 sm:pb-20 border-b border-gray-300 font-sans">
    <div class="max-w-[95rem] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-[#DD0000] mb-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                </svg>
                <span>IPTV DEUTSCHLAND TARIFE</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-semibold text-black tracking-tight">
                Wählen Sie Ihren passenden IPTV Tarif
            </h2>
            <p class="mt-2 text-base sm:text-lg font-normal text-gray-800">
                Alle Tarife mit über 25.000 Live-Sendern, 4K Streaming und schneller Aktivierung in unter 5 Minuten. Keine versteckten Kosten.
            </p>
        </div>

        <!-- Device Selector Tabs (Grand & Imposing) -->
        <div class="flex items-center justify-center mt-6 mb-8">
            <div id="pricing-device-tabs" class="inline-flex flex-wrap sm:flex-nowrap p-1.5 sm:p-2 rounded-2xl bg-gray-900 text-gray-300 shadow-2xl border border-gray-800 max-w-4xl w-full justify-between gap-1" role="tablist">
                <button type="button" data-device="1" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl bg-[#DD0000] text-white text-base sm:text-lg font-bold shadow-md transition-all text-center whitespace-nowrap cursor-pointer">1 Gerät</button>
                <button type="button" data-device="2" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">2 Geräte</button>
                <button type="button" data-device="3" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">3 Geräte</button>
                <button type="button" data-device="4" class="device-tab-btn flex-1 py-3.5 sm:py-4 px-4 sm:px-8 rounded-xl hover:text-white hover:bg-gray-800/60 text-base sm:text-lg font-bold transition-all text-center whitespace-nowrap cursor-pointer text-gray-300">4 Geräte</button>
            </div>
        </div>

        <!-- 4-Column Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-5 max-w-[95rem] mx-auto w-full items-stretch pt-4">
            
            <!-- Card 1: 1 Monat (Premium Dark UI) -->
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
                            <span>120.000+ Filme & Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- & PPV-Events</span>
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
                            <span>Smart EPG & Catch-Up TV</span>
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

                <!-- Regular Button (Transparent with Red border) -->
                <div class="mt-8">
                    <a href="/pricing-page" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 2: 3 Monate (Premium Dark UI) -->
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
                            <span>120.000+ Filme & Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- & PPV-Events</span>
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
                            <span>Smart EPG & Catch-Up TV</span>
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

                <!-- Regular Button (Transparent with Red border) -->
                <div class="mt-8">
                    <a href="/pricing-page" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 3: 6 Monate (Premium Dark UI) -->
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
                            <span>120.000+ Filme & Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded bg-gray-800 border border-gray-700 flex items-center justify-center shrink-0 text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- & PPV-Events</span>
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
                            <span>Smart EPG & Catch-Up TV</span>
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

                <!-- Regular Button (Transparent with Red border) -->
                <div class="mt-8">
                    <a href="/pricing-page" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider border-2 border-[#DD0000] text-[#DD0000] hover:bg-[#DD0000] hover:text-white transition-all shadow-sm">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

            <!-- Card 4: 12 Monate (HIGHLIGHTED CARD: Pure White, Gold Badge, Scale-105) -->
            <div class="bg-white rounded-2xl border-2 border-[#DD0000] px-6 sm:px-8 py-12 sm:py-14 min-h-[640px] flex flex-col justify-between shadow-2xl relative transform xl:scale-105 z-10 group transition-all duration-300 hover:scale-[1.05] hover:shadow-2xl hover:border-red-600">
                
                <!-- Bester Preis Badge (Gold/Yellow #FFCE00) - Combined & Non-overlapping -->
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
                    <span class="bg-[#FFCE00] text-black text-xs font-semibold px-5 py-1.5 rounded-full uppercase tracking-wider whitespace-nowrap shadow-sm border border-yellow-400">
                        BESTER PREIS
                    </span>
                </div>

                <div>
                    <div class="text-xs font-medium text-[#DD0000] uppercase tracking-wider mb-1 mt-1">Hochleistungs-Server</div>
                    <h3 class="text-2xl font-semibold text-gray-900">12 Monate</h3>
                    
                    <!-- Red Price Pill (Inside White Card) -->
                    <div class="my-6 -ml-6 sm:-ml-8 mr-2 bg-[#DD0000] text-white py-3.5 px-4 sm:px-6 rounded-r-full shadow-md flex flex-row items-baseline justify-center gap-1.5">
                        <span id="price-card-4" class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-none">75</span>
                        <span class="text-lg sm:text-xl font-bold text-white leading-none">€</span>
                    </div>

                    <!-- Features List (Dark text text-gray-700 with Red Checkmarks) -->
                    <ul class="space-y-5 text-sm font-normal text-gray-700">
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
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
                            <span>120.000+ Filme & Serien (VOD)</span>
                        </li>
                        <li class="flex items-center gap-3 font-medium text-gray-900">
                            <span class="w-4 h-4 rounded bg-red-50 border border-red-200 flex items-center justify-center shrink-0 text-[#DD0000]">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span>Alle Premium Sport- & PPV-Events</span>
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
                            <span>Smart EPG & Catch-Up TV</span>
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
                    <a href="/pricing-page" class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-lg text-xs font-semibold uppercase tracking-wider text-white bg-[#DD0000] hover:bg-[#b80000] transition-all shadow-md">
                        TARIF WÄHLEN +
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 3. DEVICE COMPATIBILITY SECTION (Section 3 - Premium Dark Grid Layout with Ambient Glow) -->
<section id="geraete" class="relative overflow-hidden bg-[#0a0a0a] py-20 sm:py-24 border-b border-gray-800 font-sans">
    
    <!-- Ambient Background Glows (Subtle German Flag Colors: Red & Gold) -->
    <div class="absolute -top-[10%] -left-[10%] w-[40rem] h-[40rem] bg-[#DD0000] rounded-full mix-blend-screen filter blur-[120px] opacity-10 pointer-events-none z-0"></div>
    <div class="absolute -bottom-[10%] -right-[10%] w-[40rem] h-[40rem] bg-[#FFCE00] rounded-full mix-blend-screen filter blur-[120px] opacity-10 pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-[#DD0000]">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7l-2 3v1h8v-1l-2-3h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H3V4h18v10z"/>
                </svg>
                <span>ÜBERALL UND JEDERZEIT STREAMEN</span>
            </div>
            <h2 class="text-white text-3xl md:text-4xl font-bold mt-3 tracking-tight">
                Auf allen Ihren Geräten verfügbar
            </h2>
            <p class="text-gray-400 text-base max-w-3xl mx-auto mt-4 leading-relaxed">
                Ihr IPTV-Abonnement funktioniert reibungslos auf allen Smart-Geräten, von Fire Stick und Smart-TVs bis hin zu Android, Apple, MAG und Roku. Genießen Sie flüssiges Streaming, egal was Sie nutzen.
            </p>
        </div>

        <!-- The Device Grid (12 Items) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 px-4 mt-12">
            
            <!-- 1. Fire TV -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="13" rx="2.5"></rect>
                    <path d="M12 17v4M8 21h8"></path>
                    <path d="M12 7c-1.5 1.5-2 3-1 4.5 0-1 1.5-1.5 1.5-2.5 1 1.5 2.5 2.5 1.5 4.5-.5.8-1.2 1-2 1-1.7 0-2.5-1.3-2.5-2.5 0-2 1.5-3.5 2.5-5z" fill="currentColor"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Fire TV</span>
            </div>

            <!-- 2. Android TV -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M6 18c0 .55.45 1 1 1h1v3.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V19h2v3.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V19h1c.55 0 1-.45 1-1V8H6v10zM3.5 8C2.67 8 2 8.67 2 9.5v6c0 .83.67 1.5 1.5 1.5S5 16.33 5 15.5v-6C5 8.67 4.33 8 3.5 8zm17 0c-.83 0-1.5.67-1.5 1.5v6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-6c0-.83-.67-1.5-1.5-1.5zm-4.97-4.32l1.3-1.3c.2-.2.2-.51 0-.71a.495.495 0 0 0-.71 0l-1.48 1.48C13.68 2.42 12.87 2.25 12 2.25c-.87 0-1.68.17-2.36.43L8.16 1.2c-.2-.2-.51-.2-.71 0-.2.2-.2.51 0 .71l1.3 1.3C7.03 4.24 6 5.86 6 7.75h12c0-1.89-1.03-3.51-2.47-4.57zM9.5 6a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zm5 0a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5z"/>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Android TV</span>
            </div>

            <!-- 3. Apple TV -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.61-.75 1.04-1.8 1.01-2.87-.96.04-2.08.66-2.73 1.42-.56.64-1.06 1.7-1.01 2.72 1.07.08 2.14-.56 2.73-1.27z"/>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Apple TV</span>
            </div>

            <!-- 4. Samsung Smart TV -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="13" rx="2"></rect>
                    <path d="M8 21l4-5 4 5"></path>
                    <circle cx="12" cy="9.5" r="2.5" fill="currentColor"></circle>
                    <path d="M9 13.5h6"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Samsung Smart TV</span>
            </div>

            <!-- 5. LG webOS -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="12" rx="2"></rect>
                    <line x1="12" y1="16" x2="12" y2="20"></line>
                    <line x1="7" y1="20" x2="17" y2="20"></line>
                    <circle cx="9" cy="10" r="1.5" fill="currentColor"></circle>
                    <circle cx="12" cy="10" r="1.5" fill="currentColor"></circle>
                    <circle cx="15" cy="10" r="1.5" fill="currentColor"></circle>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">LG webOS</span>
            </div>

            <!-- 6. Roku -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="5" width="18" height="14" rx="3"></rect>
                    <path d="M8 9h4a2 2 0 0 1 0 4H8V9z" fill="currentColor"></path>
                    <path d="M12 13l3 3"></path>
                    <line x1="8" y1="9" x2="8" y2="16"></line>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Roku</span>
            </div>

            <!-- 7. Chromecast -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8A13 13 0 0 1 15 20"></path>
                    <line x1="2" y1="20" x2="2.01" y2="20" stroke-width="2.5"></line>
                    <path d="M21 16.5V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v1"></path>
                    <path d="M21 16.5a2 2 0 0 1-2 2h-1"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Chromecast</span>
            </div>

            <!-- 8. Nvidia Shield -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l8 4v6c0 5.5-3.5 10-8 11-4.5-1-8-5.5-8-11V6l8-4z"></path>
                    <path d="M9 11l3 3 5-5" stroke-width="2"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Nvidia Shield</span>
            </div>

            <!-- 9. Windows / Mac -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                    <path d="M7 8h4v4H7zM13 8h4v4h-4zM7 13h4v1H7zM13 13h4v1h-4z" fill="currentColor"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Windows / Mac</span>
            </div>

            <!-- 10. VIDAA -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="13" rx="2.5"></rect>
                    <path d="M8 21h8M12 17v4"></path>
                    <polygon points="10 8 16 10.5 10 13 10 8" fill="currentColor"></polygon>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">VIDAA</span>
            </div>

            <!-- 11. Formuler -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="7" width="18" height="10" rx="2"></rect>
                    <circle cx="7" cy="12" r="1.5" fill="currentColor"></circle>
                    <circle cx="11" cy="12" r="1.5" fill="currentColor"></circle>
                    <path d="M15 12h3"></path>
                    <path d="M7 4l3 3M17 4l-3 3"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">Formuler</span>
            </div>

            <!-- 12. MAG Box -->
            <div class="bg-[#1E1E1E] border border-gray-800 rounded-xl flex flex-col items-center justify-center p-6 text-center group transition-all duration-300 hover:border-[#DD0000] hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                <svg class="w-10 h-10 text-gray-300 group-hover:text-[#DD0000] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="8" width="20" height="9" rx="2.5"></rect>
                    <circle cx="6" cy="12.5" r="1.2" fill="currentColor"></circle>
                    <line x1="10" y1="12.5" x2="18" y2="12.5" stroke-dasharray="2 2"></line>
                    <path d="M19 17v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-2"></path>
                </svg>
                <span class="text-sm text-gray-300 group-hover:text-white transition-colors mt-3 font-medium">MAG Box</span>
            </div>

        </div>

    </div>
</section>

<!-- 4. HOW IT WORKS SECTION -->
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

<!-- 5. COMPARISON SECTION -->
<section id="vergleich" class="hidden lg:block bg-[#0a0a0a] py-20 lg:py-24 border-b border-gray-800 font-sans">
    <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 w-full">
        
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">
                Der direkte Vergleich
            </h2>
            <p class="mt-3 text-base sm:text-lg font-normal text-gray-400">
                Sehen Sie selbst, warum Kunden in Deutschland von teuren Kabelverträgen zu unserem Premium-Dienst wechseln.
            </p>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-gray-800 bg-[#111111]/80 shadow-2xl backdrop-blur-sm">
            <table class="w-full text-left border-collapse bg-transparent table-fixed min-w-[760px]">
                <thead>
                    <tr class="border-b border-gray-800">
                        <th class="p-5 text-xs sm:text-sm font-semibold text-gray-400 uppercase tracking-wider w-1/4">Leistungsmerkmal</th>
                        <th class="p-5 text-base font-semibold bg-[#1a1a1a] border-x border-gray-800 w-1/3 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-[4px] bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)]"></div>
                            <div class="flex items-center gap-2.5">
                                <span class="text-white font-bold">Unser Premium Service</span>
                                <span class="text-xs bg-[#FFCE00] text-black px-2 py-0.5 rounded font-bold border border-yellow-400 shadow-sm">Testsieger</span>
                            </div>
                        </th>
                        <th class="p-5 text-sm font-semibold text-gray-400 w-1/5">Kabelfernsehen</th>
                        <th class="p-5 text-sm font-semibold text-gray-400 w-1/5">Andere IPTV-Anbieter</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/80 text-sm">
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Sender & Mediathek</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>25.000+ Sender & 120.000+ VODs</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Nur ca. 80–120 Sender</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Oft unvollständig & wechselhaft</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Live-Sport & Bundesliga</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>Alle Spiele & PPV ohne Aufpreis</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Teure Zusatzpakete (Sky/DAZN)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Häufige Ausfälle bei Topspielen</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Bildqualität</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>Echtes 4K Ultra HD & 60 FPS</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Meist Aufpreis für HD</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Oft stark komprimiert (720p)</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Anti-Freeze-Technologie</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>Ja (10-Gbit/s-Servernetzwerk)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Nein (Wetteranfälliger Empfang)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Nein (Ständiges Ruckeln & Buffering)</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Vertragslaufzeit</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>Keine Bindung (1 bis 12 Monate flexibel)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>12 bis 24 Monate Knebelvertrag</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Oft unklare Abofallen</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Hardware- & Receiver-Zwang</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-semibold">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span>Nein (Läuft auf allen Ihren Geräten)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Ja (Miet-Receiver, Smartcards)</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-rose-500/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                <span>Eingeschränkte App-Unterstützung</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="p-5 font-medium text-white">Monatliche Kosten</td>
                        <td class="p-5 bg-[#1a1a1a] border-x border-gray-800 text-white font-bold text-base">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                <span class="text-white font-bold text-base">Ab 29 € / 3 Monate</span>
                            </div>
                        </td>
                        <td class="p-5 text-gray-300 font-medium">50 € bis 95 € / Monat</td>
                        <td class="p-5 text-gray-300">Billig, aber unzuverlässig</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- 6. TECHNOLOGY / IPTV EXPLAINED SECTION -->
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
                    <a href="/pricing-page" class="inline-flex items-center justify-center mt-6 px-6 py-3 bg-[#DD0000] hover:bg-red-700 text-white font-medium rounded-lg transition-colors shadow-sm">
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

<!-- 7. PREMIUM FEATURES GRID SECTION -->
<section id="features" class="bg-[#0a0a0a] py-24 relative overflow-hidden font-sans border-b border-gray-800">
    <!-- Subtle Ambient Glows -->
    <div class="absolute -top-[10%] -left-[10%] w-[40rem] h-[40rem] bg-[#DD0000] rounded-full mix-blend-screen filter blur-[120px] opacity-10 pointer-events-none z-0"></div>
    <div class="absolute -bottom-[10%] -right-[10%] w-[40rem] h-[40rem] bg-[#FFCE00] rounded-full mix-blend-screen filter blur-[120px] opacity-10 pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-[#DD0000] text-sm font-bold tracking-widest uppercase">PREMIUM FEATURES</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 tracking-tight">
                Alles für Ihr Perfektes TV-Erlebnis
            </h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto text-lg leading-relaxed">
                Entdecken Sie unübertroffene Streaming-Qualität, gigantische Sendervielfalt und erstklassigen Kundenservice.
            </p>
        </div>

        <!-- 6 Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-family-tv.jpg" 
                         alt="Premium IPTV Deutschland" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="13" rx="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">Premium IPTV Deutschland</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Erleben Sie gestochen scharfes 4K Ultra HD Streaming ohne Ruckeln.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="/pricing-page" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            TARIFE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-cinema.jpg" 
                         alt="Filme & Serien auf Abruf" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <line x1="2" y1="9" x2="22" y2="9"></line>
                        <line x1="2" y1="15" x2="22" y2="15"></line>
                        <line x1="7" y1="4" x2="7" y2="9"></line>
                        <line x1="17" y1="4" x2="17" y2="9"></line>
                        <line x1="7" y1="15" x2="7" y2="20"></line>
                        <line x1="17" y1="15" x2="17" y2="20"></line>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">Filme & Serien auf Abruf</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Über 120.000 VODs, aktuelle Blockbuster und Serien jederzeit verfügbar.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="/pricing-page" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            TARIFE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-football.jpg" 
                         alt="25.000+ Live-Sender" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="2"></circle>
                        <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">25.000+ Live-Sender</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Weltweites Fernsehen aus Deutschland, Österreich, Schweiz und mehr.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="/pricing-page" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            TARIFE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-fans.jpg" 
                         alt="Live-Sport & Bundesliga" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2"></path>
                        <path d="M18 9h2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2"></path>
                        <path d="M4 5h16v4a7 7 0 0 1-7 7 7 7 0 0 1-7-7V5z"></path>
                        <path d="M12 16v4"></path>
                        <path d="M8 20h8"></path>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">Live-Sport & Bundesliga</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Verpassen Sie kein Spiel. Alle Ligen und PPV-Events in bester Qualität.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="/pricing-page" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            TARIFE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-smart-tv.jpg" 
                         alt="Einfache Einrichtung" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">Einfache Einrichtung</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Funktioniert auf allen Smart-TVs, Fire TV, Apple TV und Android Geräten.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="#geraete" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            GUIDE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-gray-600 relative group flex flex-col">
                <div class="relative w-full h-48 overflow-hidden bg-gray-900">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-support.jpg" 
                         alt="24/7 Premium Support" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] via-transparent to-transparent opacity-60"></div>
                </div>
                <!-- Overlapping Icon -->
                <div class="bg-[#DD0000] text-white w-10 h-10 rounded flex items-center justify-center absolute top-40 left-6 shadow-lg z-20">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                    </svg>
                </div>
                <!-- Content Area -->
                <div class="p-6 pt-10 flex flex-col flex-grow text-left">
                    <h3 class="text-xl font-bold text-white mb-2">24/7 Premium Support</h3>
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                        Unser engagiertes Team hilft Ihnen jederzeit bei der Einrichtung.
                    </p>
                    <div class="mt-auto pt-6">
                        <a href="#faq" class="inline-block px-4 py-2 border border-gray-600 rounded text-gray-300 text-sm font-semibold uppercase tracking-wider group-hover:border-[#DD0000] group-hover:text-[#DD0000] transition-colors">
                            KONTAKT
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 8. FAQ ACCORDION SECTION -->
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
                    Hier finden Sie Antworten auf die wichtigsten Fragen zu unserem Premium IPTV-Service.
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
                            <span>Wie schnell erhalte ich die Zugangsdaten nach dem Kauf?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser System arbeitet vollautomatisch. Unmittelbar nach der erfolgreichen Zahlung erhalten Sie Ihre M3U-URL, Xtream Codes und eine Schritt-für-Schritt-Anleitung direkt per E-Mail.
                        </p>
                    </details>

                    <!-- Q4 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Ist der Service in Deutschland, Österreich und der Schweiz verfügbar?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Absolut. Unser Server-Netzwerk ist speziell für den DACH-Raum optimiert, um blitzschnelle Ladezeiten, null Buffering und maximale Zuverlässigkeit in diesen Regionen zu garantieren.
                        </p>
                    </details>
                </div>

                <!-- Category 2: Technik & Geräte -->
                <div id="faq-cat-technik" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="technik">
                    <!-- Q5 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche Smart-TVs und Geräte werden unterstützt?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Unser IPTV-Abonnement ist plattformübergreifend. Es läuft perfekt auf Smart-TVs (Samsung Tizen, LG webOS), Fire TV Sticks, Apple TV, Android TV-Boxen, MAG-Geräten, Smartphones (iOS/Android) sowie über Webbrowser am PC.
                        </p>
                    </details>

                    <!-- Q6 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Benötige ich ein VPN für sicheres Streaming?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Ein VPN ist für die Nutzung unseres Services nicht zwingend erforderlich, da unsere Server bereits hochgradig gesichert sind. Wir sind jedoch zu 100% VPN-freundlich, falls Sie Ihre Verbindung zusätzlich anonymisieren möchten.
                        </p>
                    </details>

                    <!-- Q7 -->
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

                    <!-- Q8 -->
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
                            Standardmäßig ist ein Abonnement für ein Gerät zur selben Zeit ausgelegt. Wir bieten jedoch günstige Multiroom-Pakete an (z.B. für 2 oder 3 Geräte), die Sie bei der Tarifwahl flexibel hinzubuchen können.
                        </p>
                    </details>
                </div>

                <!-- Category 3: Zahlung & Tarife -->
                <div id="faq-cat-zahlung" class="faq-cat-group divide-y divide-gray-200 hidden" data-cat="zahlung">
                    <!-- Q9 -->
                    <details class="group border-b border-gray-200 py-2" open>
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Welche sicheren Zahlungsmethoden werden akzeptiert?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Wir legen großen Wert auf Sicherheit und bieten 100% verschlüsselte Zahlungen an. Sie können bequem per PayPal, Kreditkarte (Visa/Mastercard) oder mit verschiedenen Kryptowährungen bezahlen.
                        </p>
                    </details>

                    <!-- Q10 -->
                    <details class="group border-b border-gray-200 py-2">
                        <summary class="flex justify-between items-center py-4 cursor-pointer font-bold text-gray-900 text-lg md:text-xl list-none transition-colors hover:text-[#DD0000] [&::-webkit-details-marker]:hidden">
                            <span>Gibt es versteckte Kosten oder eine automatische Vertragsverlängerung?</span>
                            <span class="ml-4 shrink-0 transition-transform duration-300 group-open:rotate-45 text-gray-400 group-hover:text-[#DD0000] group-open:text-[#DD0000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-gray-600 pb-6 leading-relaxed pt-2">
                            Nein, bei uns gibt es absolute Transparenz. Es handelt sich um Prepaid-Tarife ohne versteckte Gebühren, ohne Bonitätsprüfung und ohne automatische Verlängerung (keine Abofalle). Nach Ablauf entscheiden Sie selbst, ob Sie verlängern möchten.
                        </p>
                    </details>

                    <!-- Q11 -->
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
                            Ja, Ihre Zufriedenheit steht an erster Stelle. Wir bieten eine 7-Tage-Geld-zurück-Garantie an, falls unser technischer Support ein anhaltendes Problem mit Ihrem Service nicht lösen kann.
                        </p>
                    </details>
                </div>

            </div>

        </div>
    </div>
</section>

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
                    t.className = 'faq-tab-btn px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition-all cursor-pointer';
                });
                this.setAttribute('aria-selected', 'true');
                this.className = 'faq-tab-btn px-5 py-2 rounded-full bg-[#DD0000] text-white text-sm font-semibold shadow-md transition-all cursor-pointer';

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

<!-- 9. WHY CHOOSE US SECTION (German Football Theme & Glassmorphism) -->
<section id="warum-wir" class="relative py-24 overflow-hidden bg-black font-sans">
    <!-- Top German Flag Gradient Anchor Stripe -->
    <div class="absolute top-0 left-0 w-full h-[4px] bg-[linear-gradient(to_right,_#000000_33.33%,_#DD0000_33.33%,_#DD0000_66.66%,_#FFCE00_66.66%)] z-20"></div>

    <!-- Left Background Image -->
    <div class="absolute top-0 left-0 w-full md:w-1/2 h-full z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_7541fb.jpg" 
             alt="Deutsche Nationalmannschaft" 
             class="w-full h-full object-cover opacity-30 object-left" 
             loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 via-black/80 to-black"></div>
    </div>

    <!-- Right Background Image -->
    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_753d62.jpg" 
             alt="WM Torjubel" 
             class="w-full h-full object-cover opacity-30 object-right" 
             loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-l from-black/40 via-black/80 to-black"></div>
    </div>

    <!-- Safety Center Blend -->
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <span class="text-[#DD0000] text-sm font-bold tracking-widest uppercase">DEUTSCHLANDS #1 IPTV</span>
            <h2 class="text-white text-3xl md:text-5xl font-extrabold mt-2 tracking-tight">
                Warum FASTIPTV wählen?
            </h2>
        </div>

        <!-- 2x2 Glassmorphism Grid -->
        <div class="max-w-7xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="bg-[#DD0000]/20 text-[#DD0000] p-3 rounded-full w-12 h-12 flex items-center justify-center mb-6 border border-[#DD0000]/30 shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 3h12l4 6-10 12L2 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Premium IPTV Erlebnis</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Genießen Sie erstklassiges Streaming mit 99,9% Uptime. Unsere Server sind für den DACH-Raum optimiert und garantieren ein ruckelfreies Erlebnis in 4K und Full HD.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="bg-[#DD0000]/20 text-[#DD0000] p-3 rounded-full w-12 h-12 flex items-center justify-center mb-6 border border-[#DD0000]/30 shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Höchste Sicherheit &amp; Anonymität</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Ihre Daten sind bei uns sicher. Wir bieten verschlüsselte Zahlungen und unterstützen VPN-Verbindungen für maximale Privatsphäre beim Streamen Ihrer Lieblingsinhalte.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="bg-[#DD0000]/20 text-[#DD0000] p-3 rounded-full w-12 h-12 flex items-center justify-center mb-6 border border-[#DD0000]/30 shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Modernste Server-Technologie</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Blitzschnelle Umschaltzeiten (Zapping), vollständiger EPG (Programmführer) und Catch-Up TV Funktion. Nutzen Sie modernste Technik für das beste Fernseherlebnis.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="bg-[#DD0000]/20 text-[#DD0000] p-3 rounded-full w-12 h-12 flex items-center justify-center mb-6 border border-[#DD0000]/30 shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                            <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                            <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"></path>
                            <path d="M15 9v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"></path>
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Aktivierung in unter 5 Minuten</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Keine langen Wartezeiten. Direkt nach Ihrer Bestellung erhalten Sie Ihre Zugangsdaten vollautomatisch per E-Mail. Ohne versteckte Kosten und ohne Knebelverträge.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 10. SPORTS STREAMING SHOWCASE SECTION -->
<section id="live-sport" class="relative py-24 overflow-hidden bg-[#f8f9fa] font-sans">
    <!-- Abstract German Flag Ambient Glow (Black, Red, Gold) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <!-- Black Ambient Glow (Top Left) -->
        <div class="absolute -top-32 -left-20 w-[600px] h-[600px] rounded-full bg-black opacity-5 blur-[120px]"></div>
        <!-- Red Ambient Glow (Center / Behind TV) -->
        <div class="absolute top-1/4 right-1/4 w-[650px] h-[650px] rounded-full bg-[#DD0000] opacity-5 blur-[140px]"></div>
        <!-- Gold Ambient Glow (Bottom Right) -->
        <div class="absolute -bottom-32 -right-20 w-[600px] h-[600px] rounded-full bg-[#FFCE00] opacity-10 blur-[130px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column (Content & CTA) -->
            <div>
                <!-- Overline -->
                <div class="text-[#DD0000] font-bold text-sm tracking-widest uppercase mb-2">LIVE-SPORT IN 4K</div>

                <!-- H2 Headline -->
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight tracking-tight">
                    Verpassen Sie nie wieder ein Top-Spiel!
                </h2>

                <!-- Subtitle / Paragraph -->
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Erleben Sie jeden spannenden Moment in brillanter 4K-Qualität. Von der Bundesliga und Champions League bis hin zur NFL – genießen Sie alle großen Sportevents ohne Ruckeln.
                </p>

                <!-- Features Mini-Grid -->
                <div class="grid grid-cols-3 gap-4 mb-10">
                    <!-- Feature 1: Live HD/4K -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100 shadow-sm">
                            <svg class="w-5 h-5 text-[#DD0000]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-sm sm:text-base leading-tight">Live HD/4K</div>
                            <div class="text-xs text-gray-500 mt-0.5">Gestochen scharf</div>
                        </div>
                    </div>

                    <!-- Feature 2: 24/7 Sport -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100 shadow-sm">
                            <svg class="w-5 h-5 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-sm sm:text-base leading-tight">24/7 Sport</div>
                            <div class="text-xs text-gray-500 mt-0.5">Rund um die Uhr</div>
                        </div>
                    </div>

                    <!-- Feature 3: Alle Ligen -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-[#DD0000] flex items-center justify-center shrink-0 border border-red-100 shadow-sm">
                            <svg class="w-5 h-5 text-[#DD0000]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M6 9H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2"/>
                                <path d="M18 9h2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2"/>
                                <path d="M4 3h16v6a8 8 0 0 1-16 0V3z"/>
                                <path d="M12 17v4"/>
                                <path d="M8 21h8"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-sm sm:text-base leading-tight">Alle Ligen</div>
                            <div class="text-xs text-gray-500 mt-0.5">Bundesliga &amp; mehr</div>
                        </div>
                    </div>
                </div>

                <!-- Action Card (CTA) -->
                <div class="bg-white p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 max-w-md">
                    <div>
                        <span class="block text-sm text-gray-500 mb-0.5">Jetzt streamen ab</span>
                        <div class="text-3xl font-black text-gray-900 tracking-tight">29 € <span class="text-sm font-semibold text-gray-500">/ 3 Monate</span></div>
                    </div>
                    <a href="/pricing-page" class="inline-flex items-center justify-center bg-[#DD0000] hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold transition-colors whitespace-nowrap shadow-md hover:shadow-lg">
                        TARIFE WÄHLEN
                    </a>
                </div>
            </div>

            <!-- Right Column (Clean Floating Transparent PNG - Desktop Only) -->
            <div class="hidden lg:flex relative items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/your-transparent-sports-image.png" 
                     alt="Live Sports" 
                     class="hidden lg:block relative z-10 w-full max-w-2xl scale-110 mx-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
            </div>

        </div>
    </div>
</section>

<!-- 11. CUSTOMER FEEDBACKS / TESTIMONIALS SECTION -->
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

<!-- 12. BLOGS / ARTICLES SECTION -->
<section id="blog" class="relative py-24 bg-white font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="flex items-center justify-center gap-2 text-[#DD0000] font-bold text-sm tracking-widest uppercase mb-3">
                <!-- Pen / Edit SVG Icon -->
                <svg class="w-4 h-4 text-[#DD0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 20h9"/>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                </svg>
                <span>AKTUELLE NEWS</span>
            </div>
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                IPTV Deutschland Updates
            </h2>
        </div>

        <!-- The Blog Grid (3 Columns) -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 px-4">
            
            <!-- Card 1 -->
            <article class="bg-white border border-gray-100 shadow-[0_4px_24px_rgb(0,0,0,0.06)] rounded-xl p-8 flex flex-col hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-snug">
                    Internetgeschwindigkeit für IPTV: Wie viele Mbit/s brauchen Sie für 4K?
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Erfahren Sie, welche Bandbreite für ruckelfreies SD, HD und 4K Streaming benötigt wird und wie Sie Buffering vermeiden.
                </p>
                <a href="#blog-1" class="mt-auto text-sm font-bold text-gray-500 hover:text-[#DD0000] transition-colors uppercase tracking-wide">
                    MEHR LESEN &raquo;
                </a>
            </article>

            <!-- Card 2 -->
            <article class="bg-white border border-gray-100 shadow-[0_4px_24px_rgb(0,0,0,0.06)] rounded-xl p-8 flex flex-col hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-snug">
                    IPTV Kostenloser Test in Deutschland: So bekommen Sie ihn (2026)
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Wie Sie in drei einfachen Schritten ohne Kreditkarte einen IPTV-Testzugang erhalten und seriöse Anbieter erkennen.
                </p>
                <a href="#blog-2" class="mt-auto text-sm font-bold text-gray-500 hover:text-[#DD0000] transition-colors uppercase tracking-wide">
                    MEHR LESEN &raquo;
                </a>
            </article>

            <!-- Card 3 -->
            <article class="bg-white border border-gray-100 shadow-[0_4px_24px_rgb(0,0,0,0.06)] rounded-xl p-8 flex flex-col hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-snug">
                    IPTV auf mehreren Geräten nutzen: Der ultimative Guide
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Wie viele gleichzeitige Verbindungen Ihr Haushalt wirklich braucht, was es kostet und wie Sie Smart TV und Handy gleichzeitig nutzen.
                </p>
                <a href="#blog-3" class="mt-auto text-sm font-bold text-gray-500 hover:text-[#DD0000] transition-colors uppercase tracking-wide">
                    MEHR LESEN &raquo;
                </a>
            </article>

        </div>

        <!-- Global CTA Button -->
        <div class="flex justify-center mt-12">
            <a href="#blog" class="inline-flex items-center gap-2 bg-[#DD0000] hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-sm hover:shadow-md">
                <span>Alle Beiträge ansehen</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- Interactive Scripts for Pricing (Device Selector & Dynamic Volume Discount Pricing) -->
<script>
(function() {
    'use strict';
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

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDeviceTabs);
    } else {
        initDeviceTabs();
    }
})();
</script>

<?php
get_footer();
