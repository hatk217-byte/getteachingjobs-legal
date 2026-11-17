@extends('layouts.v2')

@section('title', 'Vietnam Visa Services for Teachers · Get Teaching Jobs')
@section('meta_description', 'Reliable Vietnam visa services for teachers: E-visas, DN1 Business Visas, in-country status adjustments, and urgent extensions.')

@section('content')
<section class="bg-brand-navy text-white py-20 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-amber-300">
                    <i class="fa-solid fa-passport"></i> Service 02 &bull; Fast-Track Available
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Vietnam Visa Services for Foreign Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Hassle-free visa solutions for international educators: 90-day E-visas, employer-sponsored DN1 Business Visas, legal extensions, and smooth Work Permit transitions.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Fast-track processing options</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> In-country extension guidance</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Legitimate school sponsorship</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#visa-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Get Visa Assistance
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Primary Categories Handled</div>
                <ul class="space-y-2 text-slate-300">
                    <li>&bull; <strong>90-Day E-Visa:</strong> Single or Multiple entry</li>
                    <li>&bull; <strong>DN1 Business Visa:</strong> Employer sponsorship letter</li>
                    <li>&bull; <strong>Working Visa Extension:</strong> In-country stay renewals</li>
                    <li>&bull; <strong>Border Run Advisory:</strong> Smooth transition via Moc Bai / Lao Bao</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <h3 class="font-bold text-base text-brand-navy">E-Visa Support</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Accurate application filing without name order errors or photo rejections. Standard turnaround 3–5 working days; emergency 24–48hr rush options.
                </p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <h3 class="font-bold text-base text-brand-navy">DN1 / Business Visa</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Official Vietnamese immigration approval letters sponsored by verified schools and educational institutions for official employment readiness.
                </p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <h3 class="font-bold text-base text-brand-navy">Extensions & Status Changes</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Evaluate whether in-country status adjustments are legally viable for your current visa stamp, preventing costly overstay fines and blacklisting.
                </p>
            </div>
        </div>

        <div id="visa-form" class="max-w-xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Request Visa Guidance</h3>
                <p class="text-xs text-slate-500 mt-1">Get an assessment of your visa options within 2 hours</p>
            </div>
            <form onsubmit="handleVisaSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Full Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Nationality *</label>
                        <input type="text" required placeholder="e.g. UK, USA, SA, PH" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Current Visa Expiry Date</label>
                        <input type="date" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">WhatsApp / Phone *</label>
                        <input type="tel" required placeholder="+84..." class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
                        <input type="email" required placeholder="email@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                    Check Visa Feasibility
                </button>
            </form>
            <div id="visaSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Enquiry Sent!</h4>
                <p class="text-xs text-slate-500">Our visa specialist will message you shortly on WhatsApp.</p>
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
