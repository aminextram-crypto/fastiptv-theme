<?php
/**
 * The footer for Fast IPTV Store theme (German Market)
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer bg-[#0a0a0a] text-gray-400 relative overflow-hidden font-sans border-t border-gray-800">
    
    <!-- Slanted German Flag Stripes (Left Edge) -->
    <div class="absolute left-[-3rem] top-0 bottom-0 w-32 flex -skew-x-12 opacity-60 z-0 pointer-events-none">
        <div class="w-1/3 bg-black"></div>
        <div class="w-1/3 bg-[#DD0000]"></div>
        <div class="w-1/3 bg-[#FFCE00]"></div>
    </div>

    <!-- Main Content Grid -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
        
        <!-- Column 1: Brand (col-span-2) -->
        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <!-- FASTIPTV Logo -->
            <div class="flex items-center gap-2.5 mb-5">
                <span class="text-2xl font-black text-white tracking-tight">FAST<span class="text-[#DD0000]">IPTV</span></span>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-[#DD0000]/20 text-[#DD0000] border border-[#DD0000]/30 uppercase tracking-widest">DE</span>
            </div>
            
            <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-sm">
                Deutschlands Premium IPTV Service. Erleben Sie 4K Streaming mit maximaler Zuverlässigkeit.
            </p>

            <!-- Support Email / Kontakt -->
            <div id="kontakt" class="flex items-center gap-2.5 text-sm text-gray-300 scroll-mt-24">
                <svg class="w-4 h-4 text-[#DD0000] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <a href="mailto:support@fastiptv.de" class="hover:text-white transition-colors">support@fastiptv.de</a>
            </div>
        </div>

        <!-- Column 1: UNTERNEHMEN -->
        <div>
            <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">UNTERNEHMEN</h4>
            <nav class="space-y-1">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Startseite</a>
                <a href="/pricing-page" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Tarife</a>
                <a href="/free-trial" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Kostenloser 24h Test</a>
                <a href="/blog" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Blog</a>
                <a href="/about" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Über uns</a>
                <a href="/reseller" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Reseller</a>
            </nav>
        </div>

        <!-- Column 2: SUPPORT -->
        <div>
            <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">SUPPORT</h4>
            <nav class="space-y-1">
                <a href="/contact" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Kontakt</a>
                <a href="/installation" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Installationsanleitung</a>
                <a href="/faq" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">FAQ</a>
                <a href="/help-center" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Hilfe-Center</a>
            </nav>
        </div>

        <!-- Column 3: RECHTLICHES -->
        <div>
            <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">RECHTLICHES</h4>
            <nav class="space-y-1">
                <a href="/dmca" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">DMCA-Hinweis</a>
                <a href="/terms" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">AGB</a>
                <a href="/privacy" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Datenschutz</a>
                <a href="/refund" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Rückerstattungsrichtlinie</a>
                <a href="/disclaimer" class="block mb-3 text-gray-400 hover:text-[#DD0000] hover:translate-x-1 transition-all duration-300 text-sm">Haftungsausschluss</a>
            </nav>
        </div>

    </div>

    <!-- Bottom Disclaimer Bar -->
    <div class="border-t border-gray-800 mt-12 py-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600 relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 gap-4 text-center md:text-left">
        <div id="dmca" class="scroll-mt-24">
            FASTIPTV hostet keine urheberrechtlich geschützten Inhalte. Alle Inhalte werden von Drittanbietern bereitgestellt. <a href="/dmca" class="hover:text-gray-400 underline ml-1">DMCA-Richtlinie lesen</a>
        </div>
        <div class="whitespace-nowrap">
            &copy; 2026 FASTIPTV Deutschland. Alle Rechte vorbehalten.
        </div>
    </div>

</footer>

<!-- PREMIUM 10% DISCOUNT EMAIL CAPTURE POPUP -->
<div id="discount-popup" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-500 font-sans p-4" aria-modal="true" role="dialog">
    <div id="discount-popup-container" class="relative w-[90%] max-w-lg bg-[#0a0a0a] rounded-2xl shadow-[0_0_50px_rgba(0,0,0,0.5)] border border-gray-800 overflow-hidden transform scale-95 transition-transform duration-500">
        
        <!-- The German Accent: 3-color border at the very top -->
        <div class="h-1 w-full flex">
            <div class="w-1/3 bg-black"></div>
            <div class="w-1/3 bg-[#DD0000]"></div>
            <div class="w-1/3 bg-[#FFCE00]"></div>
        </div>

        <!-- Close Button -->
        <button type="button" data-dismiss="discount-popup" class="absolute top-4 right-4 text-gray-500 hover:text-white transition-colors cursor-pointer p-1.5 rounded-lg focus:outline-none" aria-label="Schließen">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Badge/Icon: Stylish glowing 10% badge in center top -->
        <div class="w-16 h-16 mx-auto mt-8 mb-4 bg-gray-900 rounded-full flex items-center justify-center border border-[#FFCE00] shadow-[0_0_20px_rgba(255,206,0,0.2)] text-[#FFCE00] font-black text-xl select-none">
            10%
        </div>

        <!-- H2 Title -->
        <h2 class="text-white text-3xl font-extrabold text-center mb-2 tracking-tight">
            10% Rabatt sichern!
        </h2>

        <!-- Description -->
        <p class="text-gray-400 text-center px-8 mb-8 text-sm leading-relaxed">
            Melden Sie sich für unseren Newsletter an und erhalten Sie sofort einen 10% Gutscheincode für Ihren ersten IPTV-Tarif.
        </p>

        <!-- The Input Form -->
        <form id="discount-form" class="px-8 pb-8">
            <input type="email" id="discount-email-input" required placeholder="Ihre E-Mail-Adresse" class="w-full bg-[#1a1a1a] border border-gray-700 text-white placeholder-gray-500 rounded-lg px-4 py-3 mb-4 focus:outline-none focus:border-[#DD0000] focus:ring-1 focus:ring-[#DD0000] transition-all text-sm">
            
            <button type="submit" class="w-full bg-[#DD0000] hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg transition-colors flex items-center justify-center gap-2 text-sm shadow-md cursor-pointer">
                <!-- Gift / Present SVG Icon -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 12 20 22 4 22 4 12"/>
                    <rect x="2" y="7" width="20" height="5"/>
                    <line x1="12" y1="22" x2="12" y2="7"/>
                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/>
                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
                </svg>
                <span>Gutschein anfordern</span>
            </button>

            <!-- Dismiss Link -->
            <a href="#" data-dismiss="discount-popup" class="block text-center mt-4 text-xs text-gray-500 hover:text-gray-400 cursor-pointer underline">
                Nein danke, ich möchte den vollen Preis zahlen.
            </a>
        </form>

        <!-- Success confirmation message -->
        <div id="discount-success" class="hidden px-8 pb-8 text-center">
            <div class="p-4 rounded-xl bg-gray-900 border border-emerald-500/30 text-emerald-400 mb-4">
                <span class="block text-xs uppercase font-bold tracking-widest text-emerald-500 mb-1">Gutscheincode aktiviert!</span>
                <span class="text-xl font-black text-white tracking-widest bg-black/60 px-4 py-1.5 rounded border border-gray-700 inline-block my-2 select-all">WILLKOMMEN10</span>
                <p class="text-xs text-gray-400 mt-1">Ihr 10% Rabattcode wurde zusätzlich an Ihre E-Mail-Adresse gesendet.</p>
            </div>
            <button type="button" data-dismiss="discount-popup" class="text-xs text-gray-500 hover:text-white underline cursor-pointer">
                Fenster schließen
            </button>
        </div>

    </div>
</div>

<!-- POPUP JAVASCRIPT LOGIC (localStorage & 5000ms delay) -->
<script>
(function() {
    const popup = document.getElementById('discount-popup');
    const container = document.getElementById('discount-popup-container');
    const form = document.getElementById('discount-form');

    if (!popup || !container) return;

    function showPopup() {
        popup.classList.remove('opacity-0', 'pointer-events-none');
        container.classList.remove('scale-95');
        container.classList.add('scale-100');
    }

    function closePopup() {
        container.classList.remove('scale-100');
        container.classList.add('scale-95');
        popup.classList.add('opacity-0', 'pointer-events-none');
        try {
            localStorage.setItem('hasSeenDiscountPopup', 'true');
        } catch(e) {}
    }

    // Check localStorage (show once after 5000ms if not seen)
    try {
        if (!localStorage.getItem('hasSeenDiscountPopup')) {
            setTimeout(showPopup, 5000);
        }
    } catch(e) {
        setTimeout(showPopup, 5000);
    }

    // Close handlers for X button, dismiss link and close button
    const closeElements = popup.querySelectorAll('[data-dismiss="discount-popup"]');
    closeElements.forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            closePopup();
        });
    });

    // Close on backdrop click
    popup.addEventListener('click', function(e) {
        if (e.target === popup) {
            closePopup();
        }
    });

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !popup.classList.contains('pointer-events-none')) {
            closePopup();
        }
    });

    // Handle form submit
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const successDiv = document.getElementById('discount-success');
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Code wird generiert...</span>';
            }
            setTimeout(function() {
                if (form) form.classList.add('hidden');
                if (successDiv) successDiv.classList.remove('hidden');
                try {
                    localStorage.setItem('hasSeenDiscountPopup', 'true');
                } catch(e) {}
                setTimeout(closePopup, 3500);
            }, 500);
        });
    }

    // Global helper for testing
    window.showDiscountPopup = showPopup;
    window.closeDiscountPopup = closePopup;
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
