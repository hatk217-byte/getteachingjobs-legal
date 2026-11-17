@extends('layouts.v2')

@section('title', 'Get Teaching Jobs · Teacher Placement, Visas & Expat Support in Vietnam')
@section('meta_description', 'Dedicated expat support for international teachers in Vietnam: job placement, visa services, consular legalization, COE support for Filipino teachers, and relocation assistance.')

@section('content')
<!-- SECTION 01: HERO (Value Proposition + Direct Conversion) -->
<section class="relative bg-brand-navy text-white pt-16 pb-24 overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full trust-badge-pill text-xs font-medium text-slate-200">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span>For International Teachers & Educators in Vietnam</span>
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-[1.18] text-white">
                    Your teaching & expat journey in Vietnam, <br class="hidden sm:inline">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-400">without the paperwork confusion.</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal max-w-xl">
                    Job placements, visa applications, consular legalization, COE support for Filipino teachers, and complete relocation assistance — handled with personal care and transparent guidance.
                </p>

                <!-- Trust Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-sm text-slate-200">
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                        <span><strong>Fast-track & standard</strong> options available</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                        <span>Direct 1-on-1 specialist via WhatsApp & Zalo</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                        <span>Clear upfront scope & case-by-case quote</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                        <span>Strict data privacy & document security</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    <a href="{{ url('/v2/your-case') }}" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl text-base font-semibold bg-amber-500 hover:bg-amber-400 text-slate-950 shadow-lg shadow-amber-500/20 hover:shadow-amber-500/30 transition-all">
                        Submit Your Case Details
                        <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                    </a>
                    <a href="{{ url('/v2/services') }}" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl text-sm font-medium text-slate-200 hover:text-white border border-white/20 hover:border-white/40 transition-colors">
                        Explore All Services
                        <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <p class="text-xs text-slate-400 italic">
                    * Free initial review. Direct consultation via WhatsApp or Zalo within 2 to 4 business hours.
                </p>
            </div>

            <!-- Right Column: Case Snapshot -->
            <div class="lg:col-span-5">
                <div class="bg-white/10 border border-white/15 rounded-2xl p-6 sm:p-7 backdrop-blur-md shadow-2xl relative">
                    <div class="flex items-center justify-between border-b border-white/10 pb-4 mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-600/30 border border-blue-400/40 flex items-center justify-center text-amber-300 font-bold">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Your Dedicated Case Coordinator</h4>
                                <p class="text-xs text-slate-300">Teacher & Expat Documentation Desk</p>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Available</span>
                    </div>

                    <div class="space-y-4 text-xs">
                        <div class="bg-brand-navy/60 p-3.5 rounded-xl border border-white/5 space-y-2">
                            <div class="flex justify-between items-center text-slate-400">
                                <span>Active Teacher Case:</span>
                                <span class="text-white font-medium">Manila &rarr; Hanoi &bull; Filipino ESL</span>
                            </div>
                            <div class="text-slate-200 font-medium text-[13px]">
                                COE Support + Working Visa & School Match
                            </div>
                            <div class="w-full bg-slate-700/60 rounded-full h-2 mt-2">
                                <div class="bg-gradient-to-r from-amber-400 to-emerald-400 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-400 pt-1">
                                <span>COE Verification & Visa Filing</span>
                                <span class="text-emerald-300">Fast-track processed</span>
                            </div>
                        </div>

                        <div class="space-y-2 text-slate-300 pt-1">
                            <div class="flex items-start gap-2">
                                <i class="fa-solid fa-shield-halved text-amber-400 mt-0.5"></i>
                                <span><strong>Transparent Scope:</strong> Government official charges itemized separately from our service fee.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <i class="fa-solid fa-comments text-amber-400 mt-0.5"></i>
                                <span><strong>Direct Chat Support:</strong> Real-time progress updates via your preferred chat app (Zalo/WhatsApp).</span>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-slate-300">
                            <span class="text-[11px]">Nationwide Teacher Desk:</span>
                            <span class="font-semibold text-white">(+84) 946 682 798</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 02: SERVICES HIGHLIGHT (Links to Dedicated Services Page) -->
<section class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">
                    What We Offer
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">
                    6 Specialized Services for Teachers
                </h2>
                <p class="text-slate-600 text-sm mt-2 max-w-xl">
                    Tailored recruitment, visa, document authentication, and relocation services for foreign educators.
                </p>
            </div>
            <a href="{{ url('/v2/services') }}" class="inline-flex items-center text-xs font-bold text-blue-700 hover:text-blue-800">
                View In-Depth Service Details <i class="fa-solid fa-arrow-right ml-1.5"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 1. Job Placement -->
            <a href="{{ url('/v2/services/job-placement') }}" class="p-6 rounded-2xl border-2 border-blue-600/30 bg-slate-50/50 hover:bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">1. Job Placement for Teachers</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Connecting teachers with verified public, bilingual, and international schools across Vietnam. 100% free for teachers.
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-blue-700 mt-4">Explore teaching jobs &rarr;</span>
            </a>

            <!-- 2. Visa Services -->
            <a href="{{ url('/v2/services/vietnam-visa') }}" class="p-6 rounded-2xl border border-slate-200 bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">2. Vietnam Visa Services</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Fast & reliable assistance for E-visas, DN1 Business Visas, working visa adjustments, and legal extensions.
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-amber-700 mt-4">View visa options &rarr;</span>
            </a>

            <!-- 3. Legalization -->
            <a href="{{ url('/v2/services/consular-legalization') }}" class="p-6 rounded-2xl border border-slate-200 bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-stamp"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">3. Apostille & Consular Legalization</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Authentication of degrees, TEFL certificates, and background checks with official judicial Vietnamese translations.
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-emerald-700 mt-4">Check legalization steps &rarr;</span>
            </a>

            <!-- 4. COE Support (Filipino) -->
            <a href="{{ url('/v2/services/filipino-coe') }}" class="p-6 rounded-2xl border-2 border-amber-500/40 bg-amber-50/20 hover:bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">4. COE Support (Filipino Teachers)</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Specialized departure verification and contract alignment to avoid airport delays and offloading in the Philippines.
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-amber-800 mt-4">Get Filipino departure support &rarr;</span>
            </a>

            <!-- 5. Work Permit & TRC -->
            <a href="{{ url('/v2/services/work-permit-trc') }}" class="p-6 rounded-2xl border border-slate-200 bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-id-card-clip"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">5. Work Permit & TRC Consultation</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Case-by-case document auditing, employer coordination, and Temporary Residence Cards (1–2 years).
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-purple-700 mt-4">Consult on Work Permit & TRC &rarr;</span>
            </a>

            <!-- 6. Other Supports -->
            <a href="{{ url('/v2/services/relocation-support') }}" class="p-6 rounded-2xl border border-slate-200 bg-white hover:shadow-md transition group">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center text-lg mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-house-user"></i>
                </div>
                <h3 class="font-bold text-brand-navy text-base group-hover:text-blue-700 transition">6. Housing, Flights & Airport Pick-up</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    Practical on-the-ground relocation assistance through vetted local housing and transportation agents.
                </p>
                <span class="inline-flex items-center text-xs font-semibold text-rose-700 mt-4">Ask about relocation &rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- SECTION 03: WHY US TEASER -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">
                    Why Choose Us
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy">
                    Personalized attention. Real coordinators. Transparent fees.
                </h2>
                <p class="text-sm text-slate-600 leading-relaxed">
                    We believe good legal and relocation support starts with listening, explaining your options clearly, and treating every case with genuine care.
                </p>
                <div class="pt-2 flex items-center gap-4">
                    <a href="{{ url('/v2/why-us') }}" class="inline-flex items-center text-xs font-bold text-blue-700 hover:text-blue-800">
                        Learn about our boutique approach <i class="fa-solid fa-arrow-right ml-1.5"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="flex items-center gap-3 pb-3 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div>
                        <div class="font-bold text-sm text-brand-navy">Mutual Accountability</div>
                        <div class="text-[11px] text-slate-400">Official receipts & milestone payments</div>
                    </div>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Government official charges and agency handling fees are itemized separately in every quotation before you proceed.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 04: QUICK CTA BANNER -->
<section class="py-16 bg-brand-navy text-white text-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 space-y-4">
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Need assistance with your teaching case in Vietnam?</h2>
        <p class="text-xs sm:text-sm text-slate-300">
            Submit your information for a complimentary feasibility review from our coordinator.
        </p>
        <div class="pt-3 flex justify-center gap-3">
            <a href="{{ url('/v2/your-case') }}" class="px-6 py-3 rounded-xl text-xs font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                Go to Consultation Form <i class="fa-solid fa-arrow-right ml-1.5"></i>
            </a>
            <a href="{{ url('/v2/faqs') }}" class="px-6 py-3 rounded-xl text-xs font-medium border border-white/20 hover:border-white/40 text-white transition">
                Read FAQs
            </a>
        </div>
    </div>
</section>
@endsection
