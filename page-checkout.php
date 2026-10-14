<?php
/**
 * Template Name: Checkout Page
 *
 * Minimalist, High-Converting German Checkout Page — Monochrome Design
 *
 * Features:
 * - Premium black, white, gray monochrome palette
 * - Clean, spacious, trustworthy UI with subtle borders (#eaeaea)
 * - System UI font stack (-apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui)
 * - Tarif selector grid (1/3/6/12 months) with black highlight on active
 * - Ablauf info box with checkmark steps
 * - Inline SVG icons throughout (no external libraries)
 * - GDPR/DSGVO compliant checkbox
 * - AJAX/Fetch to n8n webhook
 * - Mobile-first: order summary appears FIRST on mobile, side-by-side on desktop
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ========================================================================= -->
<!-- CHECKOUT PAGE — MINIMALIST MONOCHROME DESIGN                              -->
<!-- ========================================================================= -->

<style>
    /* Override system font for checkout page */
    .checkout-page,
    .checkout-page * {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, Roboto, 'Helvetica Neue', Arial, sans-serif;
    }
    /* Clean focus ring */
    .checkout-input:focus {
        border-color: #111 !important;
        box-shadow: 0 0 0 3px rgba(0,0,0,0.06) !important;
        outline: none !important;
    }
    /* Plan card hover */
    .plan-card {
        transition: all 0.2s ease;
    }
    .plan-card:hover {
        border-color: #999;
    }
    .plan-card.active {
        border-color: #111 !important;
        border-width: 2px !important;
        background: #fafafa;
    }
    .plan-card.active .plan-price {
        color: #111;
    }
    /* CTA button hover */
    .cta-btn {
        transition: all 0.25s ease;
    }
    .cta-btn:hover {
        background: #333 !important;
        transform: translateY(-1px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    .cta-btn:active {
        transform: translateY(0);
    }
    /* Checkbox accent override */
    .checkout-checkbox {
        accent-color: #111;
    }
    /* Smooth transitions */
    .checkout-card {
        transition: box-shadow 0.2s ease;
    }
    .checkout-card:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.06);
    }
    /* Select arrow styling */
    .select-wrapper select {
        background-image: none;
    }
</style>

<main class="checkout-page bg-white text-gray-900 min-h-screen">

    <!-- Subtle top border line -->
    <div class="h-px w-full bg-[#eaeaea]"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14 lg:py-16">

        <!-- Page Title -->
        <div class="text-center mb-10 sm:mb-12">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 tracking-tight">
                Bestellung abschließen
            </h1>
            <p class="text-gray-500 text-sm sm:text-base mt-2 max-w-lg mx-auto">
                Füllen Sie das Formular aus und erhalten Sie Ihren sicheren Zahlungslink sofort.
            </p>
        </div>

        <!-- ============================================================= -->
        <!-- 2-COLUMN GRID — Mobile: Summary first, Desktop: Side-by-side  -->
        <!-- ============================================================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">

            <!-- ========================================================= -->
            <!-- RIGHT COLUMN (ORDER SUMMARY) — Shows FIRST on mobile      -->
            <!-- ========================================================= -->
            <div class="lg:col-span-5 order-first lg:order-last space-y-6 lg:sticky lg:top-28">

                <!-- Paket auswählen Card -->
                <div class="checkout-card bg-white rounded-2xl border border-[#eaeaea] p-6 sm:p-7">
                    <h3 class="font-bold text-gray-900 text-lg mb-5">Paket auswählen</h3>

                    <!-- Plan Selection Grid (2x2) -->
                    <div class="grid grid-cols-2 gap-3" id="checkout-plan-selector">
                        <button type="button" data-plan="1 Monat" data-price="19 €" class="plan-card plan-btn p-4 rounded-xl border border-[#eaeaea] text-left cursor-pointer">
                            <div class="text-xs font-medium text-gray-500 mb-0.5">1 Monat</div>
                            <div class="plan-price text-lg font-bold text-gray-900">19 €</div>
                        </button>
                        <button type="button" data-plan="3 Monate" data-price="29 €" class="plan-card plan-btn p-4 rounded-xl border border-[#eaeaea] text-left cursor-pointer">
                            <div class="text-xs font-medium text-gray-500 mb-0.5">3 Monate</div>
                            <div class="plan-price text-lg font-bold text-gray-900">29 €</div>
                        </button>
                        <button type="button" data-plan="6 Monate" data-price="49 €" class="plan-card plan-btn p-4 rounded-xl border border-[#eaeaea] text-left cursor-pointer">
                            <div class="text-xs font-medium text-gray-500 mb-0.5">6 Monate</div>
                            <div class="plan-price text-lg font-bold text-gray-900">49 €</div>
                        </button>
                        <button type="button" data-plan="12 Monate" data-price="75 €" class="plan-card plan-btn active p-4 rounded-xl border-2 border-[#111] bg-[#fafafa] text-left cursor-pointer relative">
                            <!-- Best Value Badge -->
                            <span class="absolute -top-2.5 right-3 bg-black text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Beliebt</span>
                            <div class="text-xs font-medium text-gray-500 mb-0.5">12 Monate</div>
                            <div class="plan-price text-lg font-bold text-gray-900">75 €</div>
                        </button>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="mt-6 space-y-3 pt-5 border-t border-[#eee]">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Abonnement</span>
                            <span id="summary-plan-title" class="font-semibold text-gray-900">12 Monate Premium IPTV</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Geräte</span>
                            <span id="summary-devices-label" class="font-medium text-gray-900">1 Gerät</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Aktivierung</span>
                            <span class="font-medium text-gray-900">Kostenlos</span>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="mt-4 pt-4 border-t border-[#eee] flex items-baseline justify-between">
                        <span class="text-sm font-bold text-gray-900">Gesamt</span>
                        <span id="summary-total-price" class="text-2xl font-bold text-gray-900 tracking-tight">75 €</span>
                    </div>
                </div>

                <!-- Features List Card -->
                <div class="checkout-card bg-white rounded-2xl border border-[#eaeaea] p-6 sm:p-7">
                    <h4 class="font-bold text-gray-900 text-sm mb-4">Im Paket enthalten</h4>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li class="flex items-center gap-2.5">
                            <!-- Checkmark SVG -->
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>4K & Ultra HD Qualität</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>25.000+ Live-Sender</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Alle Premium Sport-Übertragungen</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Anti-Freeze-Technologie</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>120.000+ Filme & Serien</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>24/7 Deutscher Support</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- ========================================================= -->
            <!-- LEFT COLUMN (FORM) — "Kundendaten eingeben"               -->
            <!-- ========================================================= -->
            <div class="lg:col-span-7 order-last lg:order-first">

                <!-- Form Card -->
                <div class="checkout-card bg-white rounded-2xl border border-[#eaeaea] overflow-hidden">

                    <div class="p-6 sm:p-8 lg:p-10">

                        <!-- FORM VIEW WRAPPER -->
                        <div id="checkout-form-wrapper">

                            <!-- Card Header -->
                            <div class="mb-7">
                                <h2 class="text-xl sm:text-2xl font-bold text-gray-900 tracking-tight">
                                    Kundendaten eingeben
                                </h2>
                                <p class="text-gray-500 text-sm mt-1">
                                    Alle Felder mit * sind Pflichtfelder.
                                </p>
                            </div>

                            <!-- The Checkout Form -->
                            <form id="german-checkout-form" class="space-y-5" novalidate>

                                <!-- Hidden inputs for metadata -->
                                <input type="hidden" id="checkout-plan-id" name="plan" value="12 Monate">
                                <input type="hidden" id="checkout-plan-price" name="price" value="75 €">
                                <input type="hidden" id="checkout-plan-devices" name="devices_count" value="1 Gerät">

                                <!-- Field 1: Vorname & Nachname -->
                                <div>
                                    <label for="checkout-name" class="block text-sm font-semibold text-gray-800 mb-1.5">
                                        Vorname & Nachname <span class="text-gray-400">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                            <!-- User SVG Icon -->
                                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            id="checkout-name"
                                            name="name"
                                            required
                                            placeholder="z. B. Max Mustermann"
                                            autocomplete="name"
                                            class="checkout-input w-full bg-white border border-[#e0e0e0] text-gray-900 text-sm rounded-lg pl-11 pr-4 py-3.5 transition-all placeholder-gray-400">
                                    </div>
                                </div>

                                <!-- Field 2: E-Mail Adresse -->
                                <div>
                                    <label for="checkout-email" class="block text-sm font-semibold text-gray-800 mb-1.5">
                                        E-Mail Adresse <span class="text-gray-400">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                            <!-- Mail SVG Icon -->
                                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <input
                                            type="email"
                                            id="checkout-email"
                                            name="email"
                                            required
                                            placeholder="z. B. max@beispiel.de"
                                            autocomplete="email"
                                            class="checkout-input w-full bg-white border border-[#e0e0e0] text-gray-900 text-sm rounded-lg pl-11 pr-4 py-3.5 transition-all placeholder-gray-400">
                                    </div>
                                </div>

                                <!-- Field 3: WhatsApp-Nummer -->
                                <div>
                                    <label for="checkout-whatsapp" class="block text-sm font-semibold text-gray-800 mb-1.5">
                                        WhatsApp-Nummer <span class="text-gray-400">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                            <!-- Phone SVG Icon -->
                                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                        </div>
                                        <input
                                            type="tel"
                                            id="checkout-whatsapp"
                                            name="whatsapp"
                                            required
                                            placeholder="+49 151 ..."
                                            autocomplete="tel"
                                            class="checkout-input w-full bg-white border border-[#e0e0e0] text-gray-900 text-sm rounded-lg pl-11 pr-4 py-3.5 transition-all placeholder-gray-400">
                                    </div>
                                    <p class="text-xs text-gray-400 mt-1.5">Hierüber erhalten Sie Ihren Zahlungslink.</p>
                                </div>

                                <!-- Field 4: Gerätetyp -->
                                <div>
                                    <label for="checkout-device" class="block text-sm font-semibold text-gray-800 mb-1.5">
                                        Gerätetyp <span class="text-gray-400">*</span>
                                    </label>
                                    <div class="relative select-wrapper">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                            <!-- TV/Monitor SVG Icon -->
                                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                                <line x1="12" y1="17" x2="12" y2="21"></line>
                                            </svg>
                                        </div>
                                        <select
                                            id="checkout-device"
                                            name="device"
                                            required
                                            class="checkout-input w-full bg-white border border-[#e0e0e0] text-gray-900 text-sm rounded-lg pl-11 pr-10 py-3.5 appearance-none transition-all cursor-pointer">
                                            <option value="" disabled selected>Bitte wählen...</option>
                                            <option value="Smart TV">Smart TV</option>
                                            <option value="Amazon Fire TV">Amazon Fire TV</option>
                                            <option value="Apple TV">Apple TV</option>
                                            <option value="Android Box">Android Box</option>
                                            <option value="Smartphone/Tablet">Smartphone/Tablet</option>
                                            <option value="Mag Box/Receiver">Mag Box/Receiver</option>
                                            <option value="PC/Mac">PC/Mac</option>
                                        </select>
                                        <!-- Dropdown Arrow SVG -->
                                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-gray-400">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- ABLAUF INFO BOX -->
                                <div class="mt-1">
                                    <div class="p-4 rounded-xl bg-[#f9f9f9] border border-[#eee]">
                                        <div class="text-xs font-bold text-gray-900 mb-2.5 uppercase tracking-wider">Ablauf:</div>
                                        <div class="space-y-2 text-sm text-gray-600">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                                <span>Daten eingeben</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                                <span>Zahlungslink sofort per WhatsApp erhalten</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                                <span>Nach Zahlung automatische Freischaltung</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- GDPR / DSGVO CHECKBOX -->
                                <div class="pt-1">
                                    <label class="flex items-start gap-2.5 cursor-pointer group select-none">
                                        <input
                                            type="checkbox"
                                            id="checkout-terms"
                                            name="terms_accepted"
                                            required
                                            class="checkout-checkbox mt-0.5 w-4 h-4 rounded border-gray-300 cursor-pointer">
                                        <span class="text-xs text-gray-500 group-hover:text-gray-700 leading-snug">
                                            Ich stimme den <a href="https://deutschkaufeniptv.de/agb-nutzungsbedingungen-premium-iptv/" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-semibold underline underline-offset-2 hover:text-black">AGB</a> und der <a href="https://deutschkaufeniptv.de/datenschutzerklarung-sicherheit-fur-ihre-daten/" target="_blank" rel="noopener noreferrer" class="text-gray-900 font-semibold underline underline-offset-2 hover:text-black">Datenschutzerklärung</a> zu. <span class="text-gray-400">*</span>
                                        </span>
                                    </label>
                                </div>

                                <!-- Error Alert Box (Hidden by default) -->
                                <div id="checkout-error" class="hidden p-3.5 rounded-lg bg-red-50 border border-red-200 text-red-700 text-sm flex items-start gap-2.5">
                                    <!-- Alert Circle SVG -->
                                    <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                    </svg>
                                    <span id="checkout-error-text">Bitte füllen Sie alle Pflichtfelder korrekt aus.</span>
                                </div>

                                <!-- SUBMIT BUTTON — Solid black with white text -->
                                <div class="pt-2">
                                    <button
                                        type="submit"
                                        id="checkout-submit-btn"
                                        class="cta-btn w-full bg-black text-white font-semibold py-4 px-6 rounded-xl flex items-center justify-center gap-2.5 text-base cursor-pointer disabled:opacity-60 disabled:cursor-not-allowed">

                                        <span class="btn-text">Jetzt Zugangslink anfordern</span>

                                        <!-- Arrow Right SVG -->
                                        <svg class="btn-arrow w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                        </svg>

                                        <!-- Loading Spinner SVG -->
                                        <svg class="btn-spinner w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                        </svg>
                                    </button>

                                    <!-- Trust Badges (muted gray) -->
                                    <div class="mt-3 text-center text-[11px] text-gray-400">
                                        🔒 256-Bit SSL &bull; 100% DSGVO-Konform
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- ============================================================= -->
                        <!-- SUCCESS VIEW (Displayed after successful AJAX submission)     -->
                        <!-- ============================================================= -->
                        <div id="checkout-success" class="hidden py-6 sm:py-8 text-center">

                            <!-- Animated Checkmark Icon -->
                            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-emerald-50 border border-emerald-200 flex items-center justify-center text-emerald-600">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>

                            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight mb-4">
                                Vielen Dank für Ihr Vertrauen!
                            </h2>

                            <!-- Exact Required Success Message -->
                            <div class="p-5 sm:p-6 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-base leading-relaxed mb-6 text-left">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-emerald-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="leading-relaxed">Vielen Dank für Ihre Bestellung! Wir haben Ihr Paket reserviert. Sie erhalten in wenigen Sekunden Ihren sicheren Zahlungslink per WhatsApp und E-Mail.</span>
                                </div>
                            </div>

                            <!-- Next Steps -->
                            <div class="bg-[#f9f9f9] border border-[#eee] rounded-xl p-5 text-sm text-gray-600 text-left space-y-3 mb-6">
                                <div class="font-bold text-gray-900">Nächste Schritte:</div>
                                <p>1. Öffnen Sie WhatsApp oder Ihr E-Mail-Postfach (bitte auch den Spam-Ordner prüfen).</p>
                                <p>2. Klicken Sie auf den erhaltenen gesicherten Zahlungslink zur Aktivierung.</p>
                                <p>3. Nach Zahlungseingang erhalten Sie Ihre Zugangsdaten sofort per WhatsApp.</p>
                            </div>

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center justify-center bg-black hover:bg-gray-800 text-white font-semibold py-3.5 px-8 rounded-xl transition-colors text-sm">
                                Zurück zur Startseite
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<!-- ========================================================================= -->
<!-- JAVASCRIPT LOGIC (AJAX Fetch API + Dynamic Plan Switching)                -->
<!-- ========================================================================= -->
<script>
(function() {
    'use strict';

    // Webhook URL
    const WEBHOOK_URL = 'https://n8n.playxtram.store/webhook-test/geramny-pay';

    // DOM Elements
    const form = document.getElementById('german-checkout-form');
    const formWrapper = document.getElementById('checkout-form-wrapper');
    const successView = document.getElementById('checkout-success');
    const submitBtn = document.getElementById('checkout-submit-btn');
    const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;
    const btnArrow = submitBtn ? submitBtn.querySelector('.btn-arrow') : null;
    const btnSpinner = submitBtn ? submitBtn.querySelector('.btn-spinner') : null;
    const errorBox = document.getElementById('checkout-error');
    const errorText = document.getElementById('checkout-error-text');

    // Summary Elements
    const summaryTitle = document.getElementById('summary-plan-title');
    const summaryTotal = document.getElementById('summary-total-price');
    const hiddenPlan = document.getElementById('checkout-plan-id');
    const hiddenPrice = document.getElementById('checkout-plan-price');
    const hiddenDevices = document.getElementById('checkout-plan-devices');
    const planButtons = document.querySelectorAll('#checkout-plan-selector .plan-btn');

    if (!form) return;

    /**
     * Plan Selector Handler — Monochrome active state
     */
    function selectPlan(planName, planPrice) {
        if (summaryTitle) summaryTitle.textContent = planName + ' Premium IPTV';
        if (summaryTotal) summaryTotal.textContent = planPrice;
        if (hiddenPlan) hiddenPlan.value = planName;
        if (hiddenPrice) hiddenPrice.value = planPrice;

        planButtons.forEach(btn => {
            if (btn.getAttribute('data-plan') === planName) {
                btn.classList.add('active', 'border-[#111]', 'bg-[#fafafa]');
                btn.classList.remove('border-[#eaeaea]');
                btn.style.borderWidth = '2px';
            } else {
                btn.classList.remove('active', 'border-[#111]', 'bg-[#fafafa]');
                btn.classList.add('border-[#eaeaea]');
                btn.style.borderWidth = '1px';
            }
        });
    }

    planButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const p = this.getAttribute('data-plan');
            const pr = this.getAttribute('data-price');
            selectPlan(p, pr);
        });
    });

    // Parse URL parameter if coming from a pricing link (e.g. ?plan=1-monat)
    try {
        const urlParams = new URLSearchParams(window.location.search);
        const planParam = urlParams.get('plan');
        if (planParam) {
            if (planParam.includes('1-monat') || planParam === '1') selectPlan('1 Monat', '19 €');
            else if (planParam.includes('3-monat') || planParam === '3') selectPlan('3 Monate', '29 €');
            else if (planParam.includes('6-monat') || planParam === '6') selectPlan('6 Monate', '49 €');
            else if (planParam.includes('12-monat') || planParam === '12') selectPlan('12 Monate', '75 €');
        }
    } catch(e) {}

    /**
     * Show Error Message
     */
    function showError(message) {
        if (!errorBox) return;
        if (errorText) errorText.textContent = message || 'Bitte überprüfen Sie Ihre Eingaben.';
        errorBox.classList.remove('hidden');
        errorBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    /**
     * Hide Error Message
     */
    function hideError() {
        if (errorBox) errorBox.classList.add('hidden');
    }

    /**
     * Loading State
     */
    function setLoading(isLoading) {
        if (!submitBtn) return;
        submitBtn.disabled = isLoading;
        if (isLoading) {
            if (btnText) btnText.textContent = 'Wird verarbeitet...';
            if (btnArrow) btnArrow.classList.add('hidden');
            if (btnSpinner) btnSpinner.classList.remove('hidden');
        } else {
            if (btnText) btnText.textContent = 'Jetzt Zugangslink anfordern';
            if (btnArrow) btnArrow.classList.remove('hidden');
            if (btnSpinner) btnSpinner.classList.add('hidden');
        }
    }

    /**
     * Success State
     */
    function showSuccess() {
        if (formWrapper) formWrapper.classList.add('hidden');
        if (successView) successView.classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    /**
     * AJAX Form Submit
     */
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        hideError();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const nameVal = (document.getElementById('checkout-name')?.value || '').trim();
        const emailVal = (document.getElementById('checkout-email')?.value || '').trim();
        const whatsappVal = (document.getElementById('checkout-whatsapp')?.value || '').trim();
        const deviceVal = document.getElementById('checkout-device')?.value || '';
        const termsAccepted = document.getElementById('checkout-terms')?.checked;

        if (!termsAccepted) {
            showError('Bitte stimmen Sie den AGB und der Datenschutzerklärung zu.');
            return;
        }

        if (!deviceVal) {
            showError('Bitte wählen Sie Ihren Gerätetyp aus.');
            return;
        }

        const payload = {
            name: nameVal,
            email: emailVal,
            whatsapp: whatsappVal,
            device: deviceVal,
            plan: hiddenPlan?.value || '12 Monate',
            price: hiddenPrice?.value || '75 €',
            devices_count: hiddenDevices?.value || '1 Gerät',
            timestamp: new Date().toISOString(),
            source_url: window.location.href,
            referrer: document.referrer || ''
        };

        setLoading(true);

        try {
            const response = await fetch(WEBHOOK_URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            if (response.ok) {
                showSuccess();
            } else {
                console.warn('Webhook Response:', response.status);
                if (response.status === 404) {
                    showError('Der n8n Test-Webhook wartet auf das Test-Ereignis ("Listen for test event"). Bitte starten Sie das Ereignis in n8n.');
                } else {
                    showError('Es gab ein Problem beim Übermitteln des Formulars. Bitte versuchen Sie es in wenigen Sekunden erneut.');
                }
            }
        } catch (networkError) {
            console.error('Fetch error:', networkError);
            showError('Verbindungsfehler. Bitte überprüfen Sie Ihre Internetverbindung und versuchen Sie es erneut.');
        } finally {
            setLoading(false);
        }
    });

})();
</script>

<?php
get_footer();
