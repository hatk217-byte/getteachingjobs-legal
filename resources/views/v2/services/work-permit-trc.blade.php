@extends('layouts.v2')

@section('title', 'Work Permit & TRC Consultation · Get Teaching Jobs Vietnam')
@section('meta_description', 'Expert guidance for Vietnam Work Permits and Temporary Residence Cards (TRC) for foreign teachers. Pre-submission document auditing and renewal assistance.')

@section('content')
<section class="bg-brand-navy text-white py-20 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-purple-300">
                    <i class="fa-solid fa-id-card-clip"></i> Service 05 &bull; Long-Term Residency
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Work Permit & TRC Consultation for Teachers
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Live and teach legally in Vietnam without frequent border runs. We audit your diplomas and background records so your hiring school can submit your Work Permit and 1–2 year Temporary Residence Card (TRC) with ease.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> New Work Permit & Renewal auditing</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> 1–2 Year Temporary Residence Cards</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Dependent cards for spouse & children</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#wp-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Audit My Work Permit Documents
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Key Requirements Checklist</div>
                <ul class="space-y-2 text-slate-300">
                    <li>&bull; Bachelor's Degree (legalized & translated)</li>
                    <li>&bull; 120-hour TEFL / TESOL / CELTA certificate</li>
                    <li>&bull; Police Clearance check (valid within 6 months)</li>
                    <li>&bull; Vietnam local hospital health check</li>
                    <li>&bull; Verified school sponsoring contract</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3 class="font-bold text-lg text-brand-navy">Vietnam Work Permit (Giấy Phép Lao Động)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    By Vietnamese law, only schools or educational companies with approved foreign labor demand can sponsor a Work Permit. We act as your liaison to ensure all personal paperwork adheres to provincial Department of Labour (DOLISA) requirements.
                </p>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <h3 class="font-bold text-lg text-brand-navy">Temporary Residence Card (Thẻ Tạm Trú - TRC)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Once your Work Permit is issued, you qualify for a 1–2 year TRC. A TRC replaces the need for tourist visa renewals or frequent border crossings, granting multiple entry and resident status across Vietnam.
                </p>
            </div>
        </div>

        <div id="wp-form" class="max-w-xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Submit Case for Work Permit Review</h3>
                <p class="text-xs text-slate-500 mt-1">We will check whether your documents are ready for school submission</p>
            </div>
            <form onsubmit="handleWpSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Your Full Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Nationality *</label>
                        <input type="text" required placeholder="e.g. South Africa, UK" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Current Teaching Province</label>
                        <input type="text" placeholder="Hanoi, Da Nang, HCMC..." class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">WhatsApp / Phone *</label>
                        <input type="tel" required placeholder="+84..." class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Current Status of Documents</label>
                    <textarea rows="3" placeholder="Tell us if your degree has consular legalization, if you have a police check, or if your school is requesting documents..." class="w-full p-3 rounded-xl border border-slate-200 bg-white"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-purple-600 hover:bg-purple-700 text-white transition">
                    Request Document Audit
                </button>
            </form>
            <div id="wpSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Case Submitted!</h4>
                <p class="text-xs text-slate-500">We will review your documentation status and contact you via WhatsApp / Email.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleWpSubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('wpSuccess').classList.remove('hidden');
    }
</script>
@endsection
