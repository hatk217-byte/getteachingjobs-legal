@extends('layouts.v2')

@section('title', 'COE Support for Filipino Teachers · Get Teaching Jobs Vietnam')
@section('meta_description', 'Dedicated COE and departure assistance for Filipino teachers traveling from the Philippines to teach in Vietnam. Prevent airport offloading and travel safely.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">COE Support (Filipino Teachers)</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-file-circle-check"></i> Service 04 &bull; High Demand Niche Desk
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    COE & Departure Support for Filipino Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Protect your teaching dream and travel with confidence. We coordinate verified Certificates of Employment (COE), school documentation, and departure protocols to prevent immigration offloading at NAIA, Clark, or Cebu.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Philippine Bureau of Immigration (BI) compliance</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Verified Vietnamese school documentation</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Pre-departure questioning orientation</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Safe arrival handover in Hanoi/HCMC</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#coe-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Consult on Filipino Departure
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Our Coordinator
                    </a>
                </div>
            </div>

            <!-- Quick Alert Box -->
            <div class="lg:col-span-4 bg-amber-500/10 p-6 rounded-3xl border border-amber-400/30 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center gap-2 text-amber-300 font-bold uppercase tracking-wider text-[11px]">
                    <i class="fa-solid fa-triangle-exclamation"></i> Why Filipino Teachers Get Offloaded
                </div>
                <p class="text-slate-200 leading-relaxed text-xs">
                    Philippine airport immigration conducts intense scrutiny on educators traveling to Southeast Asia. Flying with unofficial letters, unverified sponsors, or inconsistent interview statements leads to high offloading rates and lost flight tickets.
                </p>
                <div class="pt-3 border-t border-white/10 text-[11px] text-amber-200 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved"></i> Our 100% compliant documentation ensures a safe journey.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: The 3 Core Pillars of Filipino Departure Safety -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">Full Protection</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">What We Prepare for Your Departure</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Everything you need in your physical folder when approaching the Philippine immigration counter.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-file-signature"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">1. Legitimate COE & School Vetting</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We coordinate directly with your hiring Vietnamese school or educational academy to issue a compliant Certificate of Employment (COE) with official red seals, legal representative contact info, and tax code.
                </p>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">2. Pre-Departure Interview Prep</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    A personalized 1-on-1 mock briefing before your flight date. We walk you through typical immigration officer questions at NAIA/Clark to make sure your statements and documentation are completely aligned.
                </p>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-plane-arrival"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">3. Arrival & School Handover</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Upon landing at Noi Bai (Hanoi), Da Nang, or Tan Son Nhat (HCMC), our team tracks your flight and coordinates with your school for immediate accommodation check-in and Work Permit scheduling.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Departure Checklist -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Essential Travel Folder</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">What Must Be in Your Carry-On</h2>
            <p class="text-xs text-slate-500 mt-1">Never pack these documents in your checked luggage:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">1</div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Valid COE & Teaching Contract</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">Original or clear color prints with Vietnamese school seal and designated HR liaison telephone number.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">2</div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">DFA Apostilled Degrees & Transcripts</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">Your CHED CAV + red ribbon / DFA Apostille certificate ready for Vietnamese consular legalization.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">3</div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Valid Vietnam Visa / Approval Code</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">Matching your passport number and full name order exactly.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">4</div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Proof of Accommodation & Onward Travel</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">Hotel voucher or school apartment commitment letter confirming your stay address in Vietnam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Filipino Desk Consultation Form -->
<section id="coe-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Filipino Teacher Desk</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Book Your Departure Consultation</h3>
                <p class="text-xs text-slate-500 mt-1">Share your travel schedule and let our coordinator verify your documents before you head to the airport.</p>
            </div>

            <form onsubmit="handleCOESubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Maria Santos" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Departure City in the Philippines *</label>
                        <input type="text" required placeholder="e.g. Manila (NAIA), Clark (CRK), Cebu (CEB)" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Job Status in Vietnam *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>I have signed a contract / offer letter</option>
                            <option>Currently in interview stage with a school</option>
                            <option>Looking for a teaching position first</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone Number *</label>
                        <input type="tel" required placeholder="+63 912 345 6789" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="maria@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Target Departure Date & Any Specific Concerns</label>
                    <textarea rows="3" placeholder="Tell us your target travel date, school name in Vietnam (if any), or specific questions about NAIA departure..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Filipino Departure Guidance & Free Check &rarr;
                    </button>
                </div>
            </form>

            <div id="coeSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Consultation Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our dedicated Filipino desk coordinator will contact you directly on WhatsApp to review your departure papers and ensure a safe, offload-free flight.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleCOESubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('coeSuccess').classList.remove('hidden');
    }
</script>
@endsection
