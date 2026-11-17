@extends('layouts.v2')

@section('title', 'Services · Get Teaching Jobs Vietnam')
@section('meta_description', 'Explore our 6 core services for foreign teachers in Vietnam: Job placement, Visa services, Consular Legalization, COE support for Filipinos, Work Permit & TRC, and Relocation support.')

@section('content')
<!-- Page Header -->
<div class="bg-brand-navy text-white py-16 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-medium text-amber-300 mb-4">
            <i class="fa-solid fa-layer-group"></i> All Services Overview
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our Core Services for Teachers</h1>
        <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl">
            Everything you need for a smooth teaching career and legal stay in Vietnam — from school placement to visas, legal paperwork, and settling down.
        </p>
    </div>
</div>

<!-- Detailed Services Section -->
<div class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-16">
        
        <!-- 1. JOB PLACEMENT -->
        <div id="job-placement" class="p-8 sm:p-10 rounded-3xl border-2 border-blue-600/30 bg-slate-50/50 shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Service 01 &bull; Core Expertise</span>
                            <h2 class="text-2xl font-bold text-brand-navy">Job Placement for Teachers</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        As our name <strong>getteachingjobs</strong> suggests, our primary mission is connecting international educators with accredited public schools, prestigious bilingual academies, and reputable language centers across Vietnam.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700 pt-2">
                        <div class="flex items-center gap-2 bg-white p-3 rounded-xl border border-slate-200">
                            <i class="fa-solid fa-check text-emerald-600"></i>
                            <span>Matchings based on degree, TEFL & experience</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white p-3 rounded-xl border border-slate-200">
                            <i class="fa-solid fa-check text-emerald-600"></i>
                            <span>Open to Native & Non-native English educators</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white p-3 rounded-xl border border-slate-200">
                            <i class="fa-solid fa-check text-emerald-600"></i>
                            <span>Direct interview scheduling with verified schools</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white p-3 rounded-xl border border-slate-200">
                            <i class="fa-solid fa-check text-emerald-600"></i>
                            <span>Locations: Hanoi, Da Nang, HCMC & provinces</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-white p-6 rounded-2xl border border-slate-200 text-center space-y-4 shadow-sm">
                    <span class="text-xs font-bold uppercase text-slate-400">Available Teaching Offers</span>
                    <div class="text-3xl font-extrabold text-blue-700">100% Free</div>
                    <p class="text-xs text-slate-500">No recruitment commission deducted from teacher salaries.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-blue-600 hover:bg-blue-700 text-white transition">
                        Apply for Jobs Now
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. VIETNAM VISA SERVICES -->
        <div id="visa-services" class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-passport"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Service 02 &bull; Immigration</span>
                            <h2 class="text-2xl font-bold text-brand-navy">Vietnam Visa Services</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Navigating Vietnamese immigration requires precise timing and valid sponsorship. We assist international teachers with standard and express visa applications to prevent border run disruptions.
                    </p>
                    <div class="space-y-3 pt-2 text-xs">
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                            <h4 class="font-bold text-brand-navy mb-1">&bull; E-visa Support (Tourist & Working entry)</h4>
                            <p class="text-slate-600">Fast 90-day multi/single entry approvals for pre-arrival preparation.</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                            <h4 class="font-bold text-brand-navy mb-1">&bull; DN1 / Business Visa Sponsoring Letters</h4>
                            <p class="text-slate-600">Official business visa letters coordinated with your hiring education sponsor.</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                            <h4 class="font-bold text-brand-navy mb-1">&bull; Working Visa & Legal Extensions</h4>
                            <p class="text-slate-600">Legal extensions and in-country status adjustments to prevent overstay fines.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-slate-50 p-6 rounded-2xl border border-slate-200 text-center space-y-4">
                    <span class="text-xs font-bold uppercase text-slate-400">Processing Time</span>
                    <div class="text-2xl font-extrabold text-brand-navy">Fast & Standard</div>
                    <p class="text-xs text-slate-500">Expedited options available for urgent departures or renewals.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Get Visa Guidance
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. APOSTILLE & CONSULAR LEGALIZATION -->
        <div id="legalization" class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Service 03 &bull; Paperwork</span>
                            <h2 class="text-2xl font-bold text-brand-navy">Apostille & Consular Legalization</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        To teach legally in Vietnam, all foreign educational credentials and background checks must undergo diplomatic authentication and certified judicial Vietnamese translation.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700 pt-2">
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Bachelor's & Master's Degrees</strong>
                            <p class="text-slate-500 mt-1">Authentication with embassy stamps & Vietnamese MOFA legalization.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>TEFL / TESOL / CELTA</strong>
                            <p class="text-slate-500 mt-1">Authenticating UK, US, Australian, or international teaching certificates.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Judicial Translation</strong>
                            <p class="text-slate-500 mt-1">Vietnamese certified translation with official notary public seals.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Exemption Verification</strong>
                            <p class="text-slate-500 mt-1">Checking bilateral agreements for 30+ eligible exempt countries.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-slate-50 p-6 rounded-2xl border border-slate-200 text-center space-y-4">
                    <span class="text-xs font-bold uppercase text-slate-400">Turnaround Options</span>
                    <div class="text-2xl font-extrabold text-brand-navy">7–10 Days</div>
                    <p class="text-xs text-slate-500">Express processing available upon request.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-emerald-600 hover:bg-emerald-700 text-white transition">
                        Check Document Viability
                    </a>
                </div>
            </div>
        </div>

        <!-- 4. COE SUPPORT (FILIPINO ONLY) -->
        <div id="coe-support" class="p-8 sm:p-10 rounded-3xl border-2 border-amber-500/40 bg-amber-50/20 shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-800">Service 04 &bull; High Demand Niche</span>
                            <h2 class="text-2xl font-bold text-brand-navy">COE Support <span class="text-sm font-normal text-amber-800">(Filipino Teachers Only)</span></h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">
                        Traveling from the Philippines to Vietnam as an English teacher involves rigorous departure checks. We specialize in coordinating genuine Certificate of Employment (COE) requirements, contract verification, and departure clearance to prevent airport offloading in Manila, Cebu, or Clark.
                    </p>
                    <div class="space-y-2 text-xs text-slate-700 pt-2">
                        <div class="flex items-start gap-2 bg-white p-3 rounded-xl border border-amber-200">
                            <i class="fa-solid fa-check text-amber-600 mt-0.5"></i>
                            <span>Comprehensive departure checklist tailored to Bureau of Immigration (BI) standards.</span>
                        </div>
                        <div class="flex items-start gap-2 bg-white p-3 rounded-xl border border-amber-200">
                            <i class="fa-solid fa-check text-amber-600 mt-0.5"></i>
                            <span>Direct alignment with your Vietnamese hiring center for employer compliance.</span>
                        </div>
                        <div class="flex items-start gap-2 bg-white p-3 rounded-xl border border-amber-200">
                            <i class="fa-solid fa-check text-amber-600 mt-0.5"></i>
                            <span>Safe transition guidance from flight departure to arrival in Vietnam.</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-white p-6 rounded-2xl border border-amber-200 text-center space-y-4 shadow-sm">
                    <span class="text-xs font-bold uppercase text-amber-700">Dedicated Filipino Desk</span>
                    <div class="text-2xl font-extrabold text-brand-navy">Hassle-Free</div>
                    <p class="text-xs text-slate-500">Avoid airport delays and travel with complete peace of mind.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Consult on Filipino COE
                    </a>
                </div>
            </div>
        </div>

        <!-- 5. WORK PERMIT & TRC CONSULTATION -->
        <div id="work-permit-trc" class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Service 05 &bull; Long-term Residency</span>
                            <h2 class="text-2xl font-bold text-brand-navy">Work Permit & TRC Consultation</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        While your hiring school acts as the official applicant for your Work Permit, preparing compliant personal records is your responsibility. We audit your credentials and provide case-by-case assistance for new applications, renewals, and Temporary Residence Cards (1–2 years).
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700 pt-2">
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Work Permit Preparation</strong>
                            <p class="text-slate-500 mt-1">Pre-submission check of university diplomas, TEFL certificates, and health checks.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>TRC (1–2 Years Stay)</strong>
                            <p class="text-slate-500 mt-1">Live and travel freely without repetitive visa runs across borders.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-slate-50 p-6 rounded-2xl border border-slate-200 text-center space-y-4">
                    <span class="text-xs font-bold uppercase text-slate-400">Case Evaluation</span>
                    <div class="text-2xl font-extrabold text-brand-navy">Case-by-Case</div>
                    <p class="text-xs text-slate-500">Every employer sponsorship has distinct province-level criteria.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-purple-600 hover:bg-purple-700 text-white transition">
                        Submit Your Documents
                    </a>
                </div>
            </div>
        </div>

        <!-- 6. OTHER SUPPORTS -->
        <div id="other-supports" class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-xs">
            <div class="flex flex-col lg:flex-row gap-8 items-start justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-rose-700">Service 06 &bull; Relocation</span>
                            <h2 class="text-2xl font-bold text-brand-navy">Other Supports: Housing, Flights & Police Checks</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Settling into a new country should be exciting, not stressful. We connect you with vetted local specialists for all secondary relocation necessities.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs text-slate-700 pt-2">
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Police Clearance</strong>
                            <p class="text-slate-500 mt-1">Vietnam Criminal Record No. 1 (Phiếu Lý Lịch Tư Pháp Số 1) processing.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Accommodation</strong>
                            <p class="text-slate-500 mt-1">Apartment search and verified lease agreements near your campus.</p>
                        </div>
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <strong>Flight & Car Pick-up</strong>
                            <p class="text-slate-500 mt-1">Safe airport private transfers directly to your hotel or apartment.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-72 w-full shrink-0 bg-slate-50 p-6 rounded-2xl border border-slate-200 text-center space-y-4">
                    <span class="text-xs font-bold uppercase text-slate-400">On-the-ground Help</span>
                    <div class="text-2xl font-extrabold text-brand-navy">Nationwide</div>
                    <p class="text-xs text-slate-500">Hanoi, Da Nang, HCMC & suburban teaching locations.</p>
                    <a href="{{ url('/v2/your-case') }}" class="block w-full py-3 rounded-xl text-xs font-bold bg-rose-600 hover:bg-rose-700 text-white transition">
                        Ask About Relocation
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
