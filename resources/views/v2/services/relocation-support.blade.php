@extends('layouts.v2')

@section('title', 'Expat Relocation & Housing Support in Vietnam · Complete Practical Guide')
@section('meta_description', 'Practical expat relocation guide for foreign teachers in Vietnam: Vietnamese Police Clearance No. 1 (Lý Lịch Tư Pháp), vetted apartment rentals, airport pick-up, SIM cards, and banking.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">6. Other Expat & Relocation Supports</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-rose-300">
                    <i class="fa-solid fa-house-user"></i> Service 06 &bull; On-the-Ground Practical Relocation &bull; Settle In Smoothly
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Practical Relocation & Expat Support
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Moving to a new country shouldn't be stressful or confusing. We assist international teachers with fast-track Vietnamese police clearances (Phiếu Lý Lịch Tư Pháp Số 1), vetted apartment rentals near your campus, private airport meet-and-greet transfers, and banking setup across Hanoi, Da Nang, and Ho Chi Minh City.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Vietnam Police Check No. 1 expedited (7–10 days)</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Expat apartment rentals with English lease vetting</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Guaranteed ward police registration (Tạm Trú)</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Reliable airport private driver transfers</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#relocate-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Request Relocation Assistance
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Our Ground Coordinator
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-7 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Ground Network</span>
                    <span class="px-2 py-0.5 rounded bg-rose-500/30 text-rose-200 text-[10px] font-semibold">Nationwide</span>
                </div>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Vietnam Police Clearance (LLTP)</strong>
                        <span class="text-slate-300 text-[11px]">Expedited 7–10 days without long lines at the Department of Justice.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Safe Housing & English Leases</strong>
                        <span class="text-slate-300 text-[11px]">Vetted expat landlords with guaranteed police registration.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Private Airport Transfers</strong>
                        <span class="text-slate-300 text-[11px]">Fixed rate, air-conditioned vehicle waiting at arrivals gate.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 1: VIETNAM POLICE CLEARANCE (LÝ LỊCH TƯ PHÁP SỐ 1) -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-700 bg-rose-50 px-3 py-1 rounded-full border border-rose-200">Essential Document</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Vietnamese Criminal Record No. 1 (LLTP)</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Why foreign teachers already in Vietnam need this local police certificate:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-stamp"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">When Do You Need It?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    If you have resided in Vietnam for 6 months or more, Vietnamese labor authorities (DOLISA) will demand a Vietnamese Police Check (Phiếu Lý Lịch Tư Pháp Số 1) when applying for a new Work Permit or renewing an existing contract.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-blue-700">Replaces ordering costly home country police checks</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-building-user"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">What Is Required?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    1. Original passport & valid visa stamp. 2. Official temporary residence registration printout (Xác nhận tạm trú) verified by your local ward police station (Công an phường) where you live.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-amber-800">Must have valid ward police registration</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-2">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Expedited Turnaround</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Normal government processing takes 15 to 25 business days and requires queueing in person at the provincial Department of Justice (Sở Tư Pháp). Our expedited service delivers your sealed record in just <strong>7 to 10 working days</strong>.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-emerald-700">Door-to-door courier delivery nationwide</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: EXPAT HOUSING & NEIGHBORHOOD GUIDES -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-700">Where to Rent</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Top Expat Neighborhoods for Teachers</h2>
            <p class="text-xs text-slate-500 mt-1">Our vetted housing partners assist with rental searches and English lease vetting:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <!-- Hanoi -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <strong class="text-brand-navy text-sm font-bold block">Hanoi Neighborhoods</strong>
                <ul class="space-y-2 text-slate-600">
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">Tây Hồ (West Lake):</strong>
                        Expat cultural hub, lakeside walks, Western cafes, gyms, and teacher communities. Rent: $350 – $700/mo.
                    </li>
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">Ba Đình / Cầu Giấy:</strong>
                        Close to public schools and bilingual centers. Modern high-rise apartment towers with swimming pools. Rent: $300 – $600/mo.
                    </li>
                </ul>
            </div>

            <!-- HCMC -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <strong class="text-brand-navy text-sm font-bold block">Ho Chi Minh City Areas</strong>
                <ul class="space-y-2 text-slate-600">
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">Thảo Điền / District 2:</strong>
                        The heart of international education, bilingual academies, craft beer bars, and expat families. Rent: $450 – $850/mo.
                    </li>
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">Bình Thạnh / District 7:</strong>
                        Bình Thạnh is 5 minutes from D1. D7 Phu My Hung features tree-lined avenues and Korean/international schools. Rent: $350 – $650/mo.
                    </li>
                </ul>
            </div>

            <!-- Da Nang -->
            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <strong class="text-brand-navy text-sm font-bold block">Da Nang Coastal Living</strong>
                <ul class="space-y-2 text-slate-600">
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">An Thượng (My Khe Beach):</strong>
                        Beachside living, walkable streets, digital nomads, and healthy food cafes. Rent: $250 – $500/mo.
                    </li>
                    <li class="p-2.5 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-brand-navy block">Sơn Trà & Hải Châu:</strong>
                        City center convenience, close to bridges, night markets, and local bilingual centers. Rent: $200 – $400/mo.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WARD POLICE REGISTRATION & LEASE ADVICE -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-600">Avoid Costly Traps</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Why Ward Police Registration (Tạm Trú) Matters</h2>
            <p class="text-xs text-slate-500 mt-1">Don't sign a lease until your landlord agrees to this condition:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-rose-200 bg-rose-50/40 space-y-2">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h4 class="font-bold text-rose-950 text-sm">Mandatory for Work Permit & TRC</h4>
                <p class="text-rose-900 leading-relaxed">
                    Vietnamese law requires foreign residents to be officially registered with the ward police (Công an phường) within 24 hours of moving in. If your landlord refuses or fails to register you online, your school cannot submit your Work Permit or TRC dossier!
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-emerald-200 bg-emerald-50/40 space-y-2">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <h4 class="font-bold text-emerald-950 text-sm">English Lease Review by Our Desk</h4>
                <p class="text-emerald-900 leading-relaxed">
                    We review rental contracts before you transfer your deposit. We ensure state-regulated electricity rates (avoiding inflated private sub-meter rates), clear 1-month deposit refund clauses, and a written landlord commitment to complete police registration.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: AIRPORT PICK-UP & LOCAL ESSENTIALS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Smooth Arrival</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Arrival & Day 1 Onboarding</h2>
            <p class="text-xs text-slate-500 mt-1">Get settled from the minute you step out of international baggage claim:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-car"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">Private Airport Transfers</h3>
                <p class="text-slate-600 leading-relaxed">
                    Fixed-rate private vehicle waiting with your name board at Noi Bai (Hanoi), Da Nang, or Tan Son Nhat (HCMC). Large trunk space for multiple teaching luggage bags. Zero meter scam risks.
                </p>
            </div>

            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-sim-card"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">High-Speed 5G SIM Cards</h3>
                <p class="text-slate-600 leading-relaxed">
                    Official passport-registered Viettel or Vinaphone SIM cards with unlimited 4G/5G data packages (4GB–6GB/day). Ready immediately so you can message family and access Grab ride-hailing.
                </p>
            </div>

            <div class="bg-white p-7 rounded-3xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">Local Bank Account Setup</h3>
                <p class="text-slate-600 leading-relaxed">
                    Guidance on opening a local VND bank account (VPBank, Techcombank, HSBC, or Shinhan) once your Work Permit or TRC is issued, enabling hassle-free monthly salary direct deposits.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: INQUIRY FORM -->
<section id="relocate-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-rose-700">On-the-Ground Coordination</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Request Expat Relocation Assistance</h3>
                <p class="text-xs text-slate-500 mt-1">Select the services you need and our local ground team will contact you within 2 hours.</p>
            </div>

            <form onsubmit="handleRelocateSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Sarah Jenkins" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Destination City in Vietnam *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option value="Hanoi">Hanoi (Tay Ho, Ba Dinh, Cau Giay)</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City (Thao Dien, D7, Binh Thanh)</option>
                            <option value="Da Nang">Da Nang (An Thuong, Son Tra)</option>
                            <option value="Hai Phong">Hai Phong / Quang Ninh</option>
                            <option value="Other">Other Provincial City</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Primary Service Needed *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>Vietnam Police Check No. 1 (Lý Lịch Tư Pháp)</option>
                            <option>Apartment Search & English Lease Review</option>
                            <option>Airport Pick-up & Private Transfer</option>
                            <option>Complete Arrival & Settling-in Package</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone Number *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="sarah@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Target Flight Arrival Date / Housing Budget / Specific Needs</label>
                    <textarea rows="3" placeholder="Tell us your flight arrival time, monthly housing budget, school location, or specific police clearance requirements..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-rose-600 hover:bg-rose-700 text-white transition shadow-sm">
                        Submit Relocation Request &rarr;
                    </button>
                </div>
            </form>

            <div id="relocateSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Relocation Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our local ground coordinator will message you via WhatsApp / Email with verified housing options and relocation scheduling.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleRelocateSubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('relocateSuccess').classList.remove('hidden');
    }
</script>
@endsection
