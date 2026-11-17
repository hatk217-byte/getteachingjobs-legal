@extends('layouts.v2')

@section('title', 'Teacher Job Placement in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Connect with verified international schools, bilingual academies, and language centers across Vietnam. Free job placement support for foreign teachers.')

@section('content')
<!-- Hero -->
<section class="bg-brand-navy text-white py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-blue-300">
                    <i class="fa-solid fa-briefcase"></i> Service 01 &bull; 100% Free for Teachers
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Find Your Ideal Teaching Job in Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Direct placement with accredited public schools, reputable international academies, and English centers in Hanoi, Da Nang, Ho Chi Minh City, and provincial cities.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> No salary deductions</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Native & Non-native positions</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Direct school interviews</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#apply" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Apply for Teaching Positions
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Salary & Benefits Benchmark</div>
                <div class="text-2xl font-extrabold text-white">$1,200 – $2,500+ <span class="text-xs font-normal text-slate-300">/ month</span></div>
                <ul class="space-y-2 text-slate-300 pt-2 border-t border-white/10">
                    <li>&bull; Work Permit & TRC sponsorship by hiring school</li>
                    <li>&bull; Paid annual leave & Vietnamese national holidays</li>
                    <li>&bull; Housing allowance or accommodation support</li>
                    <li>&bull; Completion bonuses & contract renewal perks</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Teaching Opportunities Overview -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">School Types</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Teaching Environments We Place In</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-school"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Public & Primary Schools</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Daytime Monday–Friday schedule (typically 7:30 AM to 4:30 PM). Consistent hours, fixed weekends off, and large classroom experiences.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Bilingual & International Academies</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    High compensation, structured curriculum (Cambridge, IB, or US standards), state-of-the-art facilities, and comprehensive benefits.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">English Language Centers</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Evening & weekend shifts. Smaller class sizes, multimedia learning tools, energetic young learners, and flexible hourly or full-time contracts.
                </p>
            </div>
        </div>

        <!-- Application Form Card -->
        <div id="apply" class="max-w-2xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50 shadow-xs">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Apply for Teaching Roles</h3>
                <p class="text-xs text-slate-500 mt-1">Submit your profile to receive matching school offers</p>
            </div>
            <form onsubmit="handleJobSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Full Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Nationality *</label>
                        <input type="text" required placeholder="e.g. Philippines, South Africa, UK, USA" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Preferred Location in Vietnam</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                            <option value="Hanoi">Hanoi</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                            <option value="Da Nang">Da Nang</option>
                            <option value="Any City">Flexible / Open to all provinces</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Phone / WhatsApp *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Teaching Background & Qualifications</label>
                    <textarea rows="3" placeholder="Tell us about your Bachelor's degree, TEFL certificate status, and target start date..." class="w-full p-3 rounded-xl border border-slate-200 bg-white"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-blue-600 hover:bg-blue-700 text-white transition">
                    Submit Profile for Review
                </button>
            </form>
            <div id="jobSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Profile Submitted!</h4>
                <p class="text-xs text-slate-500">Our recruitment coordinator will contact you via WhatsApp / email with matching offers.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleJobSubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('jobSuccess').classList.remove('hidden');
    }
</script>
@endsection
