@extends('layouts.v2')

@section('title', 'Vietnam Visa Services for Teachers · Complete Guide: E-visa, DN1 & Border Runs')
@section('meta_description', 'Detailed Vietnam visa guide for foreign teachers: 90-day E-visas, DN1 Business Visa approval letters, working visa extensions, border runs (Moc Bai/Lao Bao), and overstay prevention.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">2. Vietnam Visa Services</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-passport"></i> Service 02 &bull; Fast-Track (24h/48h) & Standard &bull; Zero Name Errors
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Vietnam Visa Solutions for Foreign Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Clear, reliable visa assistance for every stage of your teaching career in Vietnam: 90-day E-visas for initial arrival, employer-sponsored DN1 Business Visas, in-country extensions, and coordinated border runs to prevent costly overstay fines.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Strict Machine-Readable Zone (MRZ) name audit</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Official school sponsorship letters (DN1)</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Fast-track urgent 24h & 48h options</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> VIP border run coordination (Moc Bai / Lao Bao)</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#visa-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Request Visa Consultation & Quote
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Urgent Desk (+84 946 682 798)
                    </a>
                </div>
            </div>

            <!-- Quick Alert Card -->
            <div class="lg:col-span-4 bg-white/10 p-7 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Visa Fast-Track</span>
                    <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 text-[10px] font-semibold">Rush Service</span>
                </div>
                <div class="text-2xl font-extrabold text-white">Need a Visa Urgently?</div>
                <p class="text-slate-300 leading-relaxed text-[11px]">
                    If your flight is in 1–2 days and your E-visa is stuck on "in processing", our expedited desk can push emergency approvals directly through immigration channels.
                </p>
                <div class="space-y-2 pt-3 border-t border-white/10 text-slate-200">
                    <div class="flex justify-between items-center">
                        <span>Standard Turnaround:</span>
                        <strong class="text-white">3–5 working days</strong>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Emergency Rush:</span>
                        <strong class="text-amber-300">24h – 48h rush</strong>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Same-Day Airport:</span>
                        <strong class="text-emerald-300">Case-by-case</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- SECTION 1: COMPREHENSIVE VISA COMPARISON TABLE -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Visa Breakdown</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Which Visa Do You Need to Teach in Vietnam?</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Understanding the legal purpose and restrictions of each category:</p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-xs text-left border-collapse bg-white rounded-2xl shadow-xs border border-slate-200">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 uppercase tracking-wider text-[11px]">
                        <th class="py-4 px-5">Visa Type</th>
                        <th class="py-4 px-5">Validity</th>
                        <th class="py-4 px-5">Primary Purpose</th>
                        <th class="py-4 px-5">Sponsor Required?</th>
                        <th class="py-4 px-5">Processing Time</th>
                        <th class="py-4 px-5">Can Convert to WP?</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-600">
                    <tr class="hover:bg-slate-50/50">
                        <td class="py-4 px-5 font-bold text-brand-navy">
                            <span class="block text-sm">90-Day E-Visa (EV)</span>
                            <span class="text-[10px] text-slate-400 font-normal">Single or Multiple Entry</span>
                        </td>
                        <td class="py-4 px-5 font-semibold text-slate-700">90 Days</td>
                        <td class="py-4 px-5">Initial entry, in-person interviews, demo lessons, and document legalization prep.</td>
                        <td class="py-4 px-5 text-slate-500">None (Self-applied)</td>
                        <td class="py-4 px-5">3–5 working days (or 24h rush)</td>
                        <td class="py-4 px-5">
                            <span class="px-2 py-0.5 rounded bg-amber-50 text-amber-800 text-[10px] font-semibold">Requires Border Run or Exit</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/50 bg-blue-50/20">
                        <td class="py-4 px-5 font-bold text-brand-navy">
                            <span class="block text-sm text-blue-700">DN1 Business Visa</span>
                            <span class="text-[10px] text-blue-600 font-normal">Official School Letter</span>
                        </td>
                        <td class="py-4 px-5 font-semibold text-slate-700">1 – 3 Months</td>
                        <td class="py-4 px-5">Working preparation with verified educational institution sponsor before Work Permit issue.</td>
                        <td class="py-4 px-5 font-semibold text-blue-700">Yes (Hiring School in VN)</td>
                        <td class="py-4 px-5">5–7 working days</td>
                        <td class="py-4 px-5">
                            <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-semibold">Directly in Vietnam</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/50">
                        <td class="py-4 px-5 font-bold text-brand-navy">
                            <span class="block text-sm">Working Visa (LĐ2)</span>
                            <span class="text-[10px] text-slate-400 font-normal">Tied to Work Permit</span>
                        </td>
                        <td class="py-4 px-5 font-semibold text-slate-700">Up to 1–2 Years</td>
                        <td class="py-4 px-5">Official long-term employment status for foreign teachers with approved Work Permit.</td>
                        <td class="py-4 px-5 font-semibold text-brand-navy">Yes (Approved School)</td>
                        <td class="py-4 px-5">5–7 working days</td>
                        <td class="py-4 px-5">
                            <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-semibold">Converts to TRC</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- SECTION 2: BORDER RUN GUIDE (MOC BAI / LAO BAO) -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Status Transition</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">The Complete Border Run Guide</h2>
            <p class="text-xs text-slate-500 mt-1">Why foreign teachers do border runs and how we arrange VIP same-day runs:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-7 rounded-3xl border border-slate-200 bg-white space-y-3 shadow-xs">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-car-side"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Mộc Bài (Cambodia Border)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Most popular route for teachers in <strong>Ho Chi Minh City, Binh Duong, and Vung Tau</strong>. 2.5-hour private car drive each way. Exit Vietnam, enter Cambodia, stamp return visa, and return to HCMC within 6–7 hours total.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-amber-800">Private VIP car + Fast-track border clearance</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-white space-y-3 shadow-xs">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-mountain"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Lao Bảo / Cha Lo (Laos Border)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Primary land border for teachers based in <strong>Da Nang, Hoi An, and Hue</strong>. Scenic journey through central Vietnam into Savannakhet, Laos, with express return stamps back into Vietnam.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-emerald-700">Same-day return for Central Vietnam</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-white space-y-3 shadow-xs">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Flight Runs (Bangkok / KL / Singapore)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Preferred route for teachers in <strong>Hanoi</strong> or those who want a weekend getaway. Quick 1.5–2 hour flight to Thailand or Malaysia, activate your new E-visa or DN1 visa letter upon return.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-blue-700">Airport fast-track assistance available</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: PITFALLS & OVERSTAY PENALTIES WARNING -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-600">Legal Protection</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Critical Traps to Avoid</h2>
            <p class="text-xs text-slate-500 mt-1">Immigration mistakes can lead to heavy fines, detention, or blacklisting:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-rose-200 bg-rose-50/40 space-y-2">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <h4 class="font-bold text-rose-900 text-sm">MRZ Full Name Order Mismatch</h4>
                <p class="text-rose-800 leading-relaxed">
                    The #1 reason teachers get denied boarding at foreign airports. Vietnamese E-visa systems follow strict First Name / Middle Name / Surname protocols. A single omitted middle name invalidates the visa.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-rose-200 bg-rose-50/40 space-y-2">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    <div class="pt-2 text-[11px] text-slate-500 border-t border-slate-200">
                        Turnaround: 5–7 working days
                    </div>
                </div>
                <h4 class="font-bold text-rose-900 text-sm">Decree 144 Overstay Fines</h4>
                <p class="text-rose-800 leading-relaxed">
                    Overstaying in Vietnam incurs automatic administrative fines: 1–15 days (~$20 to $80), 16–29 days (~$150 to $300), and 30+ days (~$400 to $800+ plus forced exit and 3-year entry bans).
                </p>

            <div class="p-6 rounded-2xl border border-rose-200 bg-rose-50/40 space-y-2">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-ban"></i>
                </div>
                <h4 class="font-bold text-rose-900 text-sm">Fake Sponsor Approval Letters</h4>
                <p class="text-rose-800 leading-relaxed">
                    Unlicensed Facebook agents frequently sell DN1 letters from shell companies. If DOLISA detects your visa sponsor does not match your teaching employer, your Work Permit will be rejected.
                </p>
            </div>
        </div>
    </section>

<!-- SECTION 4: DETAILED VISA FAQS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-8">
        <div class="text-center">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Answers to Your Questions</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Frequently Asked Visa Questions</h2>
        </div>

        <div class="space-y-4 text-xs">
            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Can I teach legally in Vietnam on a 90-day E-visa?</h4>
                <p class="text-slate-600 leading-relaxed">
                    No. The E-visa is strictly for initial entry, sightseeing, and attending recruitment interviews. To teach legally, your school must sponsor a Work Permit and either a DN1/LD2 visa or Temporary Residence Card (TRC). Working on a tourist E-visa without a Work Permit violates immigration laws.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Can I convert my E-visa into a Work Permit without leaving Vietnam?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Under Vietnamese immigration law, converting directly from a tourist E-visa to a working status inside Vietnam is only permitted under narrow legal exceptions (e.g. immediate investment or verified family ties). In almost all teaching cases, once your school issues your DN1 approval letter, you perform a quick 1-day border run (to Moc Bai, Cambodia or Lao Bao, Laos) to activate your new business visa.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">How early should I apply for my E-visa before flying?</h4>
                <p class="text-slate-600 leading-relaxed">
                    We strongly recommend applying at least <strong>10 to 14 days</strong> before your intended flight date. While standard turnaround is 3 to 5 business days, Vietnamese immigration portals often slow down during national holidays or experience technical processing delays.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">What should I do if my visa is expiring in 3 days?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Contact our WhatsApp desk immediately (+84 946 682 798). We can evaluate your case within 30 minutes, arrange an emergency border run transfer, or assist with urgent in-country extensions to prevent overstay penalties on your passport.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: INQUIRY FORM -->
<section id="visa-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Get Expert Assessment</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Request Visa Assistance & Quote</h3>
                <p class="text-xs text-slate-500 mt-1">We verify your passport details and send an upfront transparent quote within 2 hours.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                    <div
                        class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold shrink-0">
                        <i class="fa-solid fa-triangle-exclamation text-base"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-navy text-sm">Full Name Order Discrepancies</h4>
                        <p class="text-slate-600 mt-1 leading-relaxed">
                            A tiny mismatch between the passport machine-readable line (MRZ) and your E-visa application can
                            result in boarding denial at departure airports. We review every field before filing.
                        </p>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                    <div
                        class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold shrink-0">
                        <i class="fa-solid fa-clock text-base"></i>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Service Required *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>90-Day E-Visa (Single Entry)</option>
                            <option>90-Day E-Visa (Multiple Entry)</option>
                            <option>DN1 Business Visa Approval Letter</option>
                            <option>VIP Border Run (Moc Bai / Lao Bao)</option>
                            <option>Emergency 24h / 48h Visa Rush</option>
                            <option>Overstay Resolution Advisory</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Visa Consultation Form -->
    <section id="visa-form" class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
                <div class="text-center max-w-lg mx-auto mb-8">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Quick Assessment</span>
                    <h3 class="text-2xl font-bold text-brand-navy mt-1">Check Your Visa Options</h3>
                    <p class="text-xs text-slate-500 mt-1">Receive an expert assessment and transparent itemized quote
                        within 2 hours.</p>
                </div>

                <form onsubmit="handleVisaSubmit(event)" class="space-y-4 text-xs">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone Number *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-bold text-slate-700 mb-1.5">Passport Nationality *</label>
                            <input type="text" required placeholder="e.g. UK, South Africa, USA, Philippines"
                                class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                        </div>
                        <div>
                            <label class="block font-bold text-slate-700 mb-1.5">Service Needed *</label>
                            <select
                                class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                                <option>90-Day E-Visa (Single / Multiple)</option>
                                <option>DN1 Business Visa Approval Letter</option>
                                <option>In-Country Visa Extension</option>
                                <option>Border Run Consultation</option>
                                <option>Urgent / Emergency Rush Processing</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone *</label>
                            <input type="tel" required placeholder="+84 946 682 798"
                                class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                        </div>
                        <div>
                            <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                            <input type="email" required placeholder="john@example.com"
                                class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                        </div>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Current Location & Visa Expiry (if already in
                            Vietnam)</label>
                        <textarea rows="3"
                            placeholder="Tell us your current location, existing visa stamp date, and intended travel timeline..."
                            class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                    </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Current Location & Visa Expiry (if currently in Vietnam)</label>
                    <textarea rows="3" placeholder="Tell us if you are inside Vietnam or abroad, your current visa expiry stamp date, and target travel schedule..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Request Free Visa Audit & Price Breakdown &rarr;
                    </button>
                </div>
            </form>

            <div id="visaSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Visa Assessment Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our immigration coordinator is checking current consular criteria for your nationality and will message you on WhatsApp / Email within 2 hours.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function handleVisaSubmit(e) {
            e.preventDefault();
            e.target.classList.add('hidden');
            document.getElementById('visaSuccess').classList.remove('hidden');
        }
    </script>
@endsection