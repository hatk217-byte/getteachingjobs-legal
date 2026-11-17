@extends('layouts.v2')

@section('title', 'Consular Legalization & Apostille in Vietnam · Complete Guide for Teachers')
@section('meta_description', 'Definitive guide to consular legalization and certified Vietnamese translation for foreign degrees, TEFL certificates, and police clearances. USA, UK, South Africa, Philippines & more.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">3. Apostille & Consular Legalization</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-emerald-300">
                    <i class="fa-solid fa-stamp"></i> Service 03 &bull; Certified MOFA Legalization &bull; Judicial Notary Public
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Apostille & Consular Legalization in Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Make your overseas qualifications 100% legally recognized by the Vietnamese Ministry of Labour (DOLISA). Complete diplomatic authentication, foreign embassy stamps, Vietnamese Ministry of Foreign Affairs (MOFA) seals, and official judicial translations.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Free pre-submission photo audit</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Standard 7–10 days & Express rush</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Certified Vietnamese Judicial translation</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Nationwide door-to-door courier</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#legalize-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Legalization Quote & Checklist
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Send Photos via WhatsApp for Free Review
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-7 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Documents Processed</span>
                    <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 text-[10px] font-semibold">DOLISA Compliant</span>
                </div>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Bachelor's / Master's Diplomas</strong>
                        <span class="text-slate-300 text-[11px]">USA, UK, South Africa, Philippines, Australia, Canada, etc.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">TEFL / TESOL / CELTA Certificates</strong>
                        <span class="text-slate-300 text-[11px]">120-hour certificate verification and diplomatic authentication.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Police Clearances / FBI / ACRO / NBI</strong>
                        <span class="text-slate-300 text-[11px]">Must be original document issued within the last 6 months.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<!-- SECTION 1: THE 3-STEP LEGALIZATION PIPELINE EXPLAINED -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">Official Process</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">The 3-Step Legalization Chain for Vietnam</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Every foreign document must complete these 3 consecutive steps to be accepted for a Work Permit:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xl">1</div>
                <h3 class="font-bold text-lg text-brand-navy">Step 1: Embassy / Apostille Authentication</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Your original document is certified by the issuing government's Foreign Ministry (e.g. FCDO in UK, DIRCO in South Africa, DFA in Philippines) OR authenticated by your country's Embassy / Consulate in Hanoi or Ho Chi Minh City.
                </p>
                <div class="p-3 rounded-xl bg-white border border-slate-200 text-[11px] text-slate-500">
                    <strong>Result:</strong> Official consular sticker & diplomatic red seal on the document back.
                </div>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">2</div>
                <h3 class="font-bold text-lg text-brand-navy">Step 2: Vietnamese MOFA Legalization</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    The document is submitted to the Vietnamese Ministry of Foreign Affairs (Cục Lãnh Sự tại Hà Nội hoặc Sở Ngoại Vụ tại TP.HCM). MOFA verifies the consular officer's signature and applies the Vietnamese Consular Stamp (Tem Hợp Pháp Hóa Lãnh Sự).
                </p>
                <div class="p-3 rounded-xl bg-white border border-slate-200 text-[11px] text-slate-500">
                    <strong>Result:</strong> Official Vietnamese state certification recognized by all 63 provinces.
                </div>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xl">3</div>
                <h3 class="font-bold text-lg text-brand-navy">Step 3: Judicial Translation & Notary Public</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    The legalized credential is professionally translated into Vietnamese by a court-registered judicial translator. The translation is then permanently bound to the original/copy and sealed by the District Department of Justice (Phòng Tư Pháp).
                </p>
                <div class="p-3 rounded-xl bg-white border border-slate-200 text-[11px] text-slate-500">
                    <strong>Result:</strong> Bản dịch công chứng tư pháp ready for immediate Work Permit filing.
                </div>
            </div>
        </div>
    </section>

<!-- SECTION 2: COUNTRY-BY-COUNTRY LEGALIZATION GUIDE -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Country Guidelines</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">How Legalization Works by Nationality</h2>
            <p class="text-xs text-slate-500 mt-1">Each foreign government has specific diplomatic procedures for overseas documents:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-xs">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇬🇧</span>
                    <strong class="text-brand-navy text-sm">United Kingdom (UK)</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Degree & TEFL require certification by a UK practicing solicitor $\rightarrow$ FCDO Apostille in Milton Keynes $\rightarrow$ Legalized by the Vietnam Embassy in London or British Embassy in Hanoi $\rightarrow$ Vietnamese MOFA.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">Turnaround: 10–14 working days</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇺🇸</span>
                    <strong class="text-brand-navy text-sm">United States (USA)</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Option A: US State Secretary Apostille in your degree state $\rightarrow$ Vietnam Embassy in DC. Option B (Fastest in VN): Book an Affidavit of Document Authenticity at the US Embassy in Hanoi or US Consulate in HCMC $\rightarrow$ Vietnamese MOFA.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">Affidavit in VN: 2–3 working days</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇿🇦</span>
                    <strong class="text-brand-navy text-sm">South Africa (RSA)</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Original/Copy verified by SAQA / High Court $\rightarrow$ DIRCO legalisation in Pretoria $\rightarrow$ South African Embassy in Hanoi or Vietnam Embassy in Pretoria $\rightarrow$ Vietnamese MOFA.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">DIRCO process: 2–3 weeks</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇵🇭</span>
                    <strong class="text-brand-navy text-sm">Philippines</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    CHED CAV verification $\rightarrow$ DFA Apostille (Manila, Cebu, Davao) $\rightarrow$ Because the Philippines is an Apostille member, Vietnamese MOFA accepts DFA Apostilled diplomas directly for translation.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">MOFA processing: 3–5 working days</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇦🇺</span>
                    <strong class="text-brand-navy text-sm">Australia</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Notary Public in Australia $\rightarrow$ DFAT Apostille or Authentication $\rightarrow$ Australian Embassy / Consulate in Vietnam $\rightarrow$ Vietnamese MOFA legalization $\rightarrow$ Judicial translation.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">Turnaround: 5–7 working days in VN</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2.5">
                <div class="flex items-center gap-2">
                    <span class="text-base">🇨🇦</span>
                    <strong class="text-brand-navy text-sm">Canada & Ireland</strong>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Canada joined the Apostille convention in 2024! Global Affairs Canada (JLAC) or provincial authorities issue Apostilles directly recognized by Vietnam MOFA for translation.
                </p>
                <div class="text-[11px] text-blue-700 font-medium">Turnaround: 5–8 working days</div>
            </div>
        </div>
    </section>

<!-- SECTION 3: ORIGINALS VS CERTIFIED COPIES & TIMELINE -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Crucial Rules</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Original vs. Certified True Copies</h2>
            <p class="text-xs text-slate-500 mt-1">Which documents can be legalized on copies and which require the original?</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <strong class="text-brand-navy text-sm block">1. University Diplomas</strong>
                <p class="text-slate-600 leading-relaxed">
                    Can be legalized on a <strong>certified true copy</strong> notarized by your home country's embassy or public notary. You do not need to surrender your original irreplaceable parchment.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <strong class="text-brand-navy text-sm block">2. TEFL / TESOL Certificates</strong>
                <p class="text-slate-600 leading-relaxed">
                    Accepted on color certified true copies. For online TEFL courses, the certifying body or an embassy affidavit verifying accreditation is required by DOLISA.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <strong class="text-brand-navy text-sm block">3. Criminal Background Checks</strong>
                <p class="text-slate-600 leading-relaxed">
                    Must be the <strong>original paper</strong>. Copies are strictly rejected by the Department of Labour. Must be dated within 6 months of Work Permit submission.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: INQUIRY & FREE PHOTO AUDIT FORM -->
<section id="legalize-form" class="py-16 bg-slate-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Free Credential Audit</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Get an Itemized Legalization Breakdown</h3>
                <p class="text-xs text-slate-500 mt-1">Tell us your documents and nationality. We check whether they comply with DOLISA standards and send a full quote.</p>
            </div>

            <form onsubmit="handleLegalizeSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Jane Smith" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                </div>

                <form onsubmit="handleLegalizeSubmit(event)" class="space-y-4 text-xs">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Issuing Country of Degree *</label>
                        <input type="text" required placeholder="e.g. United Kingdom, South Africa, USA, Philippines" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Current Document Location *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                            <option>With me in Vietnam (Hanoi, Da Nang, HCMC)</option>
                            <option>In my home country (need overseas assistance)</option>
                            <option>Partially legalized (have Apostille only)</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-3">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone Number *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>
                    <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-emerald-600 hover:bg-emerald-700 text-white transition">
                        Get Document Checklist & Quote
                    </button>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="jane@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">List Documents to Legalize</label>
                    <textarea rows="3" placeholder="e.g. Bachelor's Diploma in English, 120-hour TEFL certificate, Police Clearance check..." class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-emerald-600 hover:bg-emerald-700 text-white transition shadow-sm">
                        Request Document Viability Audit & Quote &rarr;
                    </button>
                </div>
            </form>

            <div id="legalizeSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Document Inquiry Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our document authentication specialist will inspect the stamping protocol for your home country and reach out via WhatsApp / Email shortly.
                </p>
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
