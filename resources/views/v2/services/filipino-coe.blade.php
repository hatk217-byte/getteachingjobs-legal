@extends('layouts.v2')

@section('title', 'COE & Departure Support for Filipino Teachers · Get Teaching Jobs Vietnam')
@section('meta_description', 'Dedicated COE verification and departure protection for Filipino teachers flying to Vietnam. Avoid airport offloading at NAIA, Clark, and Cebu with 100% compliant documentation.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">4. COE Support (Filipino Teachers)</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-file-circle-check"></i> Service 04 &bull; Specialized Filipino Desk &bull; Prevent Airport Offloading
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    COE & Departure Support for Filipino Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Protect your teaching investment and fly with complete peace of mind. We coordinate verified Certificates of Employment (COE), school guarantee letters, and rigorous pre-departure orientation to ensure you pass Philippine Bureau of Immigration (BI) counters at NAIA, Clark, or Cebu without being offloaded.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Genuine Vietnamese school COE & tax code verification</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> 1-on-1 Pre-departure interview orientation</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Standby support on your flight day</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Smooth arrival handover in Hanoi or HCMC</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#coe-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Consult on Filipino Departure
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Our Filipino Desk (+84 946 682 798)
                    </a>
                </div>
            </div>

            <!-- Urgent Reality Box -->
            <div class="lg:col-span-4 bg-amber-500/15 p-7 rounded-3xl border border-amber-400/30 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center gap-2 text-amber-300 font-bold uppercase tracking-wider text-[11px]">
                    <i class="fa-solid fa-triangle-exclamation"></i> The Reality at NAIA & Clark
                </div>
                <p class="text-slate-200 leading-relaxed text-xs">
                    Philippine airport immigration enforces strict anti-trafficking screenings. Hundreds of Filipino teachers are offloaded every month because their invitation letters lack verifiable school licenses, their flight itineraries look suspicious, or their interview answers conflict with their visa type.
                </p>
                <div class="pt-3 border-t border-white/10 text-[11px] text-amber-200 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved"></i> Our verified protocol prevents offloading.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 1: WHY FILIPINO TEACHERS GET OFFLOADED -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-700 bg-rose-50 px-3 py-1 rounded-full border border-rose-200">Understanding the Hurdles</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Why Does the Bureau of Immigration (BI) Offload?</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Under the Inter-Agency Council Against Trafficking (IACAT) guidelines, BI officers look for red flags:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-file-excel"></i>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">1. Unofficial or Incomplete Letters</h4>
                <p class="text-slate-600 leading-relaxed">
                    Generic invitation emails printed off Facebook or letters from unregistered language centers without valid tax codes, official red Vietnamese seals, or designated HR liaisons trigger immediate offloading.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">2. Inconsistent Interview Answers</h4>
                <p class="text-slate-600 leading-relaxed">
                    If an officer asks, "What is your purpose of travel?" and your answer contradicts your documentation (e.g. claiming tourism while holding diplomas and lesson plans in your baggage), you will be pulled for secondary inspection.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-hotel"></i>
                </div>
                <h4 class="font-bold text-brand-navy text-sm">3. Lack of Verified Accommodation</h4>
                <p class="text-slate-600 leading-relaxed">
                    Officers demand proof of where you will reside in Vietnam upon landing. Lack of a formal hotel voucher or school staff housing commitment letter is considered an indicator of undocumented arrival.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: THE COMPLETE FILIPINO DEPARTURE PACKAGE -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-800">Our Comprehensive Solution</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">What We Provide for Your Safe Departure</h2>
            <p class="text-xs text-slate-500 mt-1">A complete travel packet and personalized preparation before boarding:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-xs">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold">1</div>
                <h4 class="font-bold text-brand-navy text-sm">Verified School COE</h4>
                <p class="text-slate-600 leading-relaxed">
                    Official Certificate of Employment stamped by your licensed school in Vietnam, featuring their business license number, tax code, and active phone contacts.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold">2</div>
                <h4 class="font-bold text-brand-navy text-sm">Guarantee & Housing Letter</h4>
                <p class="text-slate-600 leading-relaxed">
                    School commitment letter stating they take full responsibility for your accommodation, Work Permit sponsorship, and return travel arrangements.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">3</div>
                <h4 class="font-bold text-brand-navy text-sm">Mock Interview Briefing</h4>
                <p class="text-slate-600 leading-relaxed">
                    A 30-minute 1-on-1 coaching call walking you through exact immigration officer questions at NAIA or Clark so your answers are crisp and confident.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">4</div>
                <h4 class="font-bold text-brand-navy text-sm">On-Call Flight Standby</h4>
                <p class="text-slate-600 leading-relaxed">
                    Our Vietnamese coordinator is on active WhatsApp phone standby while you queue at airport immigration to verify documentation if the officer calls.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: STEP-BY-STEP DEPARTURE CHECKLIST -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Pre-Flight Verification</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">What Must Be in Your Hand-Carry Folder</h2>
            <p class="text-xs text-slate-500 mt-1">Never check these papers in your baggage. Keep them neatly organized:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">1</div>
                <div>
                    <strong class="text-brand-navy text-sm block">Original Signed Teaching Contract & COE</strong>
                    <p class="text-slate-600 mt-1 leading-relaxed">Clear color prints with original Vietnamese school seal and designated HR liaison mobile phone.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">2</div>
                <div>
                    <strong class="text-brand-navy text-sm block">CHED CAV & DFA Red Ribbon / Apostille</strong>
                    <p class="text-slate-600 mt-1 leading-relaxed">Your bachelor's diploma and transcript of records authenticated by DFA in the Philippines.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">3</div>
                <div>
                    <strong class="text-brand-navy text-sm block">120-hour TEFL / LET License</strong>
                    <p class="text-slate-600 mt-1 leading-relaxed">Teaching certificate or PRC Board Licensure Examination for Teachers (LET) results.</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">4</div>
                <div>
                    <strong class="text-brand-navy text-sm block">Confirmed Round-Trip Flight & Hotel Voucher</strong>
                    <p class="text-slate-600 mt-1 leading-relaxed">Proof of return flight and confirmed accommodation address in Hanoi, Da Nang, or HCMC.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: FILIPINO DESK FAQS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-8">
        <div class="text-center">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Filipino Teacher FAQs</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Answers to Common Departure Questions</h2>
        </div>

        <div class="space-y-4 text-xs">
            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Do I need a POEA / DMW OEC before leaving the Philippines?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Under Philippine regulations, an Overseas Employment Certificate (OEC) via DMW is required for direct overseas employment contracts. However, most foreign teachers enter Vietnam initially on an E-visa or DN1 business invitation for in-person demonstration, credential legalization, and medical examination before their official Work Permit is issued by the Vietnamese government. We prepare the complete legal paper trail so immigration officers understand your legitimate status.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">What happens if the immigration officer takes me to secondary inspection?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Stay completely calm. Secondary inspection is routine for first-time outbound educators. Present your physical folder with our structured documents. The officer will verify your school's tax code and may call the contact number provided in your COE. Because our coordinator is on standby, we answer promptly to confirm your schedule.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Which Philippine airport is easiest to depart from?</h4>
                <p class="text-slate-600 leading-relaxed">
                    While NAIA (Terminals 1, 2, and 3) handles the highest volume of flights to Vietnam (Cebu Pacific, Philippine Airlines, VietJet), Clark International Airport (CRK) and Mactan-Cebu International Airport (CEB) often have shorter immigration queues. However, the documentation standards enforced by the Bureau of Immigration are strictly uniform across all terminals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: INQUIRY & BOOKING FORM -->
<section id="coe-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Dedicated Filipino Desk</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Book Your Departure Consultation</h3>
                <p class="text-xs text-slate-500 mt-1">Share your travel plans and let our specialist review your school documents to ensure an offload-free flight.</p>
            </div>

            <form onsubmit="handleCOESubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name (as in passport) *</label>
                    <input type="text" required placeholder="Maria Elena Santos" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Departure Airport in the Philippines *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>Manila (NAIA Terminal 1/2/3)</option>
                            <option>Clark International (CRK)</option>
                            <option>Mactan-Cebu (CEB)</option>
                            <option>Davao (DVO)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Current Vietnam School Status *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>I have signed a contract / offer letter</option>
                            <option>Currently interviewing with a school</option>
                            <option>Looking for teaching jobs in Vietnam first</option>
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
                    <label class="block font-bold text-slate-700 mb-1.5">Target Travel Date & Specific Departure Concerns</label>
                    <textarea rows="3" placeholder="Tell us your target departure date, school name in Vietnam (if any), and any previous offloading history or questions..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Filipino Departure Guidance & Free Review &rarr;
                    </button>
                </div>
            </form>

            <div id="coeSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Consultation Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our dedicated Filipino desk coordinator will contact you directly on WhatsApp to inspect your COE papers and schedule your pre-flight orientation.
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
