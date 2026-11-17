@extends('layouts.v2')

@section('title', 'Consular Legalization & Apostille in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Fast consular legalization and certified Vietnamese translation for foreign degrees, TEFL certificates, and criminal checks. Standard & express processing.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">Apostille & Consular Legalization</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-emerald-300">
                    <i class="fa-solid fa-stamp"></i> Service 03 &bull; Diplomatic Authentication
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Consular Legalization & Certified Translation
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Make your overseas qualifications legally recognized by the Vietnamese Ministry of Labour (DOLISA). Full handling of embassy consular seals, MOFA stamps, and official judicial translations.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Standard 7–10 days & Express</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Free pre-submission document audit</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Certified Vietnamese judicial notary</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Safe door-to-door courier</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#legalize-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Legalization Quote
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Send Photos for Free Review
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Documents Processed</span>
                    <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 text-[10px] font-semibold">Nationwide</span>
                </div>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">University Degrees & Transcripts</strong>
                        <span class="text-slate-300 text-[11px]">Bachelor's, Master's, PGCE from USA, UK, SA, PH, AU, CA, etc.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Teaching Certificates</strong>
                        <span class="text-slate-300 text-[11px]">120-hr TEFL, TESOL, and Cambridge CELTA certificates.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Criminal Background Checks</strong>
                        <span class="text-slate-300 text-[11px]">Police Clearance Certificates (FBI, ACRO, SAPS, NBI, etc.).</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: The 3-Step Legalization Pipeline -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">The Legalization Pipeline</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">How Documents Are Certified for Vietnam</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Every foreign paper must complete these 3 consecutive authentications to be accepted by DOLISA.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg">1</div>
                <h3 class="font-bold text-base text-brand-navy">Embassy / Apostille Seal</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Authentication by your home country's foreign ministry or designated embassy/consulate in Vietnam, verifying the notary signature and educational credential.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-blue-700">Official Diplomatic Stamp</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg">2</div>
                <h3 class="font-bold text-base text-brand-navy">Vietnamese MOFA Stamp</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Official legalization stamp from the Vietnamese Ministry of Foreign Affairs (Cục Lãnh Sự Hanoi or Sở Ngoại Vụ HCMC), recognizing the foreign consular seal.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-emerald-700">Vietnamese State Legalization</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">3</div>
                <h3 class="font-bold text-base text-brand-navy">Judicial Translation</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Certified judicial translation into Vietnamese bound with official red notary seals (Bản dịch công chứng tư pháp), ready for immediate Work Permit filing.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-purple-700">DOLISA-Ready Document</div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Country-Specific Notes & Pro Tips -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Insider Practical Guidance</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Country-Specific Legalization Rules</h2>
            <p class="text-xs text-slate-500 mt-1">Requirements vary significantly depending on your nationality:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-xs">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <strong class="text-brand-navy text-sm block">United Kingdom (UK)</strong>
                <p class="text-slate-600 leading-relaxed">Requires solicitor notarization, FCDO Apostille in the UK, followed by the Vietnam Embassy in London or MOFA in Vietnam.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <strong class="text-brand-navy text-sm block">United States (USA)</strong>
                <p class="text-slate-600 leading-relaxed">State-level authentication or US Embassy affidavit in Hanoi/HCMC, followed by Vietnamese MOFA consular legalization.</p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <strong class="text-brand-navy text-sm block">South Africa (RSA)</strong>
                <p class="text-slate-600 leading-relaxed">DIRCO authentication in Pretoria + South African High Commission / Vietnam Embassy legalization.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <strong class="text-brand-navy text-sm block">Philippines</strong>
                <p class="text-slate-600 leading-relaxed">CHED Cav / DFA Apostille in the Philippines, directly recognized for Vietnamese MOFA legalization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Document Viability & Quote Form -->
<section id="legalize-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Free Assessment</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Get an Itemized Legalization Quote</h3>
                <p class="text-xs text-slate-500 mt-1">Tell us your documents and issuing country. We will check DOLISA compliance and send an exact breakdown.</p>
            </div>

            <form onsubmit="handleLegalizeSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Jane Smith" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Issuing Country of Degree *</label>
                        <input type="text" required placeholder="e.g. UK, South Africa, USA, Australia" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Where are your documents currently?</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>With me in Vietnam (Hanoi, Da Nang, HCMC)</option>
                            <option>In my home country (need overseas assistance)</option>
                            <option>Partially legalized (have Apostille only)</option>
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
                        <input type="email" required placeholder="jane@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">List of Documents to Legalize</label>
                    <textarea rows="3" placeholder="e.g. Bachelor's Diploma in English, 120-hour TEFL Certificate, Police Background Check..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-emerald-600 hover:bg-emerald-700 text-white transition shadow-sm">
                        Get Free Viability Check & Itemized Quote &rarr;
                    </button>
                </div>
            </form>

            <div id="legalizeSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Documents Received for Audit!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our document authentication specialist will inspect the stamping protocol for your home country and send the exact pricing and timeline breakdown shortly.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleLegalizeSubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('legalizeSuccess').classList.remove('hidden');
    }
</script>
@endsection
