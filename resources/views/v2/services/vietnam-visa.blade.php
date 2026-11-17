@extends('layouts.v2')

@section('title', 'Vietnam Visa Services for Teachers · Get Teaching Jobs')
@section('meta_description', 'Reliable Vietnam visa services for teachers: E-visas, DN1 Business Visas, in-country status adjustments, and urgent extensions.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">Vietnam Visa Services</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-passport"></i> Service 02 &bull; Fast-Track Available
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Vietnam Visa Solutions for Educators
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Hassle-free entry and stay: 90-day E-visas, official employer-sponsored DN1 Business Visas, in-country extensions, and smooth Work Permit transitions without costly border runs.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Fast-track (24h/48h) or Standard</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Full name order verification</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Legitimate school sponsorship</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> In-country renewal guidance</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#visa-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Visa Assistance
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Consultation
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Primary Options</span>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">90-Day Electronic Visa (E-visa)</strong>
                        <span class="text-slate-300 text-[11px]">Single or multiple entry for initial arrival & interviews.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">DN1 Business Visa</strong>
                        <span class="text-slate-300 text-[11px]">Official immigration approval letter sponsored by hiring school.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Working Visa (LD2) Extension</strong>
                        <span class="text-slate-300 text-[11px]">Tied directly to your approved Work Permit in Vietnam.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Visa Types -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Visa Categories</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Which Visa Do You Need?</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Clear breakdown to ensure legal compliance from your first day in Vietnam.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">90-Day E-Visa</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Ideal for teachers entering Vietnam to attend in-person interviews, explore schools, and prepare initial document legalization. Available for all nationalities.
                </p>
                <div class="pt-2 text-[11px] text-slate-500 border-t border-slate-200">
                    Turnaround: 3–5 working days (or 24h express)
                </div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">DN1 Business Visa</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Required when entering with an employer-sponsored approval letter from the Vietnamese Immigration Department. Directly converts into Work Permit upon arrival.
                </p>
                <div class="pt-2 text-[11px] text-slate-500 border-t border-slate-200">
                    Turnaround: 5–7 working days
                </div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Extensions & Status Changes</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Evaluate in-country stay extensions or border-run protocols (via Moc Bai or Lao Bao border gates) when transitioning between school contracts.
                </p>
                <div class="pt-2 text-[11px] text-slate-500 border-t border-slate-200">
                    Case-by-case legal review
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Important Pitfalls & Pro Tips -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-600">Avoid Common Traps</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Critical Visa Advice for Teachers</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold shrink-0">
                    <i class="fa-solid fa-triangle-exclamation text-base"></i>
                </div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Full Name Order Discrepancies</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">
                        A tiny mismatch between the passport machine-readable line (MRZ) and your E-visa application can result in boarding denial at departure airports. We review every field before filing.
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold shrink-0">
                    <i class="fa-solid fa-clock text-base"></i>
                </div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Overstay Penalties in Vietnam</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">
                        Overstaying your visa in Vietnam triggers escalating fines from 1,250,000 VND to 16,000,000+ VND and risk of entry bans. Always begin extension or departure arrangements 10–14 days in advance.
                    </p>
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
                <p class="text-xs text-slate-500 mt-1">Receive an expert assessment and transparent itemized quote within 2 hours.</p>
            </div>

            <form onsubmit="handleVisaSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name (as in passport) *</label>
                    <input type="text" required placeholder="John Mark Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Passport Nationality *</label>
                        <input type="text" required placeholder="e.g. UK, South Africa, USA, Philippines" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Service Needed *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
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
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Current Location & Visa Expiry (if already in Vietnam)</label>
                    <textarea rows="3" placeholder="Tell us your current location, existing visa stamp date, and intended travel timeline..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Request Visa Assessment & Free Review &rarr;
                    </button>
                </div>
            </form>

            <div id="visaSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Visa Inquiry Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our immigration coordinator will check the current regulations for your nationality and reach out via WhatsApp / Email with next steps.
                </p>
            </div>
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
