@extends('layouts.v2')

@section('title', 'COE Support for Filipino Teachers · Get Teaching Jobs Vietnam')
@section('meta_description', 'Dedicated COE and departure assistance for Filipino teachers traveling from the Philippines to teach in Vietnam. Prevent airport offloading and travel safely.')

@section('content')
<section class="bg-brand-navy text-white py-20 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-file-circle-check"></i> Service 04 &bull; Filipino Teachers Only
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    COE & Departure Support for Filipino Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Avoid airport offloading at NAIA, Clark, or Cebu. We coordinate verified Certificate of Employment (COE) requirements, contract verification, and departure documentation with your hiring Vietnamese school.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Bureau of Immigration (BI) compliance</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> School contract verification</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Smooth departure to Vietnam</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#coe-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Consult on Filipino COE
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Why Filipino Teachers Need This</div>
                <p class="text-slate-300 leading-relaxed">
                    Philippine immigration imposes strict departure protocols on overseas teachers. Having an unverified job offer or incomplete documentation leads to high offloading rates. We ensure every document is verified before departure.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <h3 class="font-bold text-sm text-brand-navy">1. Contract & COE Verification</h3>
                <p class="text-xs text-slate-600">Reviewing your Vietnamese school's Certificate of Employment and labor contract to ensure it meets Philippine departure standards.</p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <h3 class="font-bold text-sm text-brand-navy">2. Pre-Departure Checklist</h3>
                <p class="text-xs text-slate-600">Guidance on return tickets, accommodation vouchers, entry approval letters, and immigration questioning preparation.</p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <h3 class="font-bold text-sm text-brand-navy">3. Arrival & School Handover</h3>
                <p class="text-xs text-slate-600">Coordinating your safe arrival in Hanoi, Da Nang, or HCMC, with immediate handover to your school for Work Permit processing.</p>
            </div>
        </div>

        <div id="coe-form" class="max-w-xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Filipino Teacher Departure Consultation</h3>
                <p class="text-xs text-slate-500 mt-1">Speak directly with our coordinator regarding your travel schedule</p>
            </div>
            <form onsubmit="handleCOESubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Full Name *</label>
                    <input type="text" required placeholder="Maria Santos" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Current City in Philippines *</label>
                        <input type="text" required placeholder="Manila, Cebu, Davao..." class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Do you have a Vietnam job offer? *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                            <option>Yes, official offer signed</option>
                            <option>Currently in interviews</option>
                            <option>Looking for teaching jobs in Vietnam</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">WhatsApp / Phone *</label>
                        <input type="tel" required placeholder="+63 912 345 6789" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
                        <input type="email" required placeholder="maria@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Target Flight Date / Notes</label>
                    <textarea rows="3" placeholder="Tell us about your flight plans, school name in Vietnam, or any concerns about departure..." class="w-full p-3 rounded-xl border border-slate-200 bg-white"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                    Get Filipino COE Guidance
                </button>
            </form>
            <div id="coeSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Consultation Request Sent!</h4>
                <p class="text-xs text-slate-500">Our coordinator will connect with you on WhatsApp within 2 hours.</p>
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
