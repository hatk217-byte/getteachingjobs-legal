@extends('layouts.v2')

@section('title', 'Expat Relocation & Housing Support in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Practical relocation assistance for teachers in Vietnam: Vietnamese police clearance (Lý Lịch Tư Pháp), apartment rentals, airport pick-up, and settling in.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">Other Expat & Relocation Supports</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-rose-300">
                    <i class="fa-solid fa-house-user"></i> Service 06 &bull; Settle in Comfortably
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Practical Relocation & Expat Support
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Moving to a new country shouldn't be overwhelming. We assist international teachers with local police checks (Lý Lịch Tư Pháp), vetted apartment rentals near your school, airport transfers, and banking setup across Vietnam.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> VN Police Check No. 1 expedited</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Vetted expat housing & English leases</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Reliable airport pick-up</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Local ward police registration</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#relocate-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Get Relocation Assistance
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Coordinator
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Relocation Modules</span>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Vietnam Police Check (LLTP)</strong>
                        <span class="text-slate-300 text-[11px]">Expedited 7–10 days without standing in long queues at the Department of Justice.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Apartment Search & Lease Vetting</strong>
                        <span class="text-slate-300 text-[11px]">Fair pricing, English translation, landlord temporary residence registration guarantee.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Private Airport Transfers</strong>
                        <span class="text-slate-300 text-[11px]">Driver waiting with name board at Noi Bai, Da Nang, or Tan Son Nhat.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Relocation Modules -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-700 bg-rose-50 px-3 py-1 rounded-full border border-rose-200">On-the-ground Services</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">What We Help You Arrange</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Comprehensive local assistance handled by our bilingual ground team.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-stamp"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">Vietnam Police Check</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Phiếu Lý Lịch Tư Pháp Số 1 or Số 2. Crucial for teachers residing in Vietnam applying for new Work Permits or school transfers.
                </p>
                <div class="text-[11px] font-semibold text-blue-700">7–10 days turnaround</div>
            </div>

            <div class="p-6 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">Expat Apartment Rentals</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Tay Ho & Cau Giay in Hanoi, Thao Dien & Binh Thanh in HCMC, or An Thuong in Da Nang. Transparent rent and English lease contracts.
                </p>
                <div class="text-[11px] font-semibold text-rose-700">Verified landlord network</div>
            </div>

            <div class="p-6 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-car"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">Airport Meet & Greet</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Private air-conditioned car waiting at international arrivals. Direct transfer with large luggage space to your apartment.
                </p>
                <div class="text-[11px] font-semibold text-amber-800">Fixed rate, no scams</div>
            </div>

            <div class="p-6 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-sim-card"></i>
                </div>
                <h3 class="font-bold text-sm text-brand-navy">SIM & Banking Setup</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Assistance getting high-speed Viettel / Vinaphone 5G data SIMs and opening an official VPBank, Techcombank, or HSBC account.
                </p>
                <div class="text-[11px] font-semibold text-emerald-700">Day 1 readiness</div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Important Advice for Renting & Police Registration -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-600">Crucial Expat Know-How</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Ward Police Registration (Tạm Trú)</h2>
            <p class="text-xs text-slate-500 mt-1">Why this single document is indispensable for your legal stay in Vietnam:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold shrink-0">
                    <i class="fa-solid fa-id-badge text-base"></i>
                </div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">Mandatory for Work Permit & TRC</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">
                        To issue a Vietnamese Police Check or Temporary Residence Card, the government requires proof of online temporary residence registration from your local ward police (Công an phường). If your landlord fails to register you, your TRC is delayed.
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold shrink-0">
                    <i class="fa-solid fa-file-contract text-base"></i>
                </div>
                <div>
                    <h4 class="font-bold text-brand-navy text-sm">English Lease Review</h4>
                    <p class="text-slate-600 mt-1 leading-relaxed">
                        We review rental contracts before you place your deposit, ensuring fair refund clauses, transparent electricity rates (avoiding inflated private sub-meters), and guaranteed registration compliance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Relocation Inquiry Form -->
<section id="relocate-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-rose-700">Ground Assistance</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Request Relocation Support</h3>
                <p class="text-xs text-slate-500 mt-1">Select the services you need and our local coordinator will get back to you within 2 hours.</p>
            </div>

            <form onsubmit="handleRelocateSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Sarah Jenkins" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Destination City *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option value="Hanoi">Hanoi</option>
                            <option value="Da Nang">Da Nang</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                            <option value="Hai Phong">Hai Phong / Ha Long</option>
                            <option value="Other">Other Province</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Services Needed (Select Primary) *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>Vietnam Police Clearance (Lý Lịch Tư Pháp)</option>
                            <option>Apartment Rental & Lease Review</option>
                            <option>Airport Pick-up & Transport</option>
                            <option>Comprehensive Relocation Package</option>
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
                        <input type="email" required placeholder="sarah@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Target Move-in Date / Additional Details</label>
                    <textarea rows="3" placeholder="Tell us about your flight arrival time, budget for housing, or urgent police clearance requirements..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
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
                    Our local relocation coordinator will reach out to you via WhatsApp with accommodation options and guidance for your arrival city.
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
