@extends('layouts.v2')

@section('title', 'Teacher Job Placement in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Connect with verified international schools, bilingual academies, and language centers across Vietnam. Free job placement support for foreign teachers.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">Job Placement for Teachers</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-blue-300">
                    <i class="fa-solid fa-briefcase"></i> Service 01 &bull; 100% Free Placement for Teachers
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Find Your Ideal Teaching Job in Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Direct placement with accredited public schools, prestigious bilingual academies, and reputable language centers in Hanoi, Da Nang, Ho Chi Minh City, and provincial cities.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Zero salary deductions</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Native & Non-native positions</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Direct school interviews</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Full visa & WP coordination</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#apply" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Apply for Teaching Positions
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
            
            <!-- Quick Benchmark Card -->
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Salary Benchmark</span>
                    <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 text-[10px] font-semibold">2026 Updated</span>
                </div>
                <div class="text-3xl font-extrabold text-white">$1,200 – $2,500+ <span class="text-xs font-normal text-slate-300">/ month</span></div>
                <p class="text-slate-300 leading-relaxed text-[11px]">
                    Net take-home compensation depending on qualifications, school tier, and teaching location.
                </p>
                <ul class="space-y-2 text-slate-300 pt-3 border-t border-white/10">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-400"></i> Work Permit & TRC sponsored by school</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-400"></i> Paid annual leave & Tet holidays</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-400"></i> Housing allowance or free accommodation</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-400"></i> End-of-contract completion bonus</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: School Types -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Teaching Environments</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Where You Can Teach in Vietnam</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">We partner exclusively with licensed educational institutions that guarantee legal sponsorship.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-school"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Public & Primary Schools</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Standard daytime Monday–Friday schedule (7:30 AM – 4:30 PM). Evenings and weekends completely free. Excellent stability with young enthusiastic learners.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-blue-700">Schedule: Mon–Fri daytime</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Bilingual & International Academies</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    High compensation, structured curriculum (Cambridge, IB, or American standards), modern facilities, and comprehensive health insurance packages.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-purple-700">Schedule: Mon–Fri daytime</div>
            </div>

            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">English Language Centers</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Evening and weekend teaching hours. Smaller class sizes (12–18 students), interactive technology, and great opportunities for supplemental tutoring.
                </p>
                <div class="pt-2 text-[11px] font-semibold text-emerald-700">Schedule: Evenings & Weekends</div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: 4-Step Placement Process -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Simple & Transparent</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">How Placement Works</h2>
            <p class="text-xs text-slate-500 mt-1">From initial profile review to your first day in the classroom</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-sm mb-4">1</div>
                <h4 class="font-bold text-sm text-brand-navy mb-1.5">CV & Profile Audit</h4>
                <p class="text-xs text-slate-500 leading-relaxed">We review your degree, TEFL certificate, and teaching background within 24 hours.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-sm mb-4">2</div>
                <h4 class="font-bold text-sm text-brand-navy mb-1.5">Target Matches</h4>
                <p class="text-xs text-slate-500 leading-relaxed">We present 2–3 suitable school offers based on your preferred city and schedule.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-sm mb-4">3</div>
                <h4 class="font-bold text-sm text-brand-navy mb-1.5">Direct School Interview</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Interview directly with the school principal or academic director online or in-person.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs">
                <div class="w-10 h-10 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-sm mb-4">4</div>
                <h4 class="font-bold text-sm text-brand-navy mb-1.5">Contract & Legal Visa</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Sign official contract with school and begin Work Permit & TRC processing seamlessly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Requirements & FAQs -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <!-- Left: Requirements Checklist -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Qualifications</span>
                    <h3 class="text-xl font-bold text-brand-navy mt-3">Teaching Requirements in Vietnam</h3>
                    <p class="text-xs text-slate-500 mt-1">To qualify for official Work Permit sponsorship:</p>
                </div>
                <div class="space-y-3 text-xs">
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
                        <i class="fa-solid fa-graduation-cap text-blue-600 mt-1 text-base"></i>
                        <div>
                            <strong class="text-brand-navy">Bachelor's Degree (or higher)</strong>
                            <p class="text-slate-600 mt-0.5">In any field (Education, English, or related degrees preferred for bilingual schools).</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
                        <i class="fa-solid fa-certificate text-amber-600 mt-1 text-base"></i>
                        <div>
                            <strong class="text-brand-navy">120-hour TEFL / TESOL / CELTA Certificate</strong>
                            <p class="text-slate-600 mt-0.5">Accredited certification is mandatory for all ESL positions.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
                        <i class="fa-solid fa-shield text-emerald-600 mt-1 text-base"></i>
                        <div>
                            <strong class="text-brand-navy">Clean Criminal Record</strong>
                            <p class="text-slate-600 mt-0.5">Police check from your home country or Vietnamese criminal record (Lý Lịch Tư Pháp).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Service FAQs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">Got Questions?</span>
                    <h3 class="text-xl font-bold text-brand-navy mt-3">Frequently Asked Questions</h3>
                </div>
                <div class="space-y-3 text-xs">
                    <div class="p-4 rounded-2xl border border-slate-200 bg-white">
                        <h4 class="font-bold text-brand-navy text-sm">Is job placement really 100% free for teachers?</h4>
                        <p class="text-slate-600 mt-1 leading-relaxed">
                            Yes, absolutely. Our recruiting fee is paid directly by our partner schools upon successful placement. We never deduct any commission or salary from teachers.
                        </p>
                    </div>
                    <div class="p-4 rounded-2xl border border-slate-200 bg-white">
                        <h4 class="font-bold text-brand-navy text-sm">Can non-native English speakers apply?</h4>
                        <p class="text-slate-600 mt-1 leading-relaxed">
                            Yes! Qualified educators from the Philippines, Europe, South Africa, and elsewhere are welcome, provided you hold a Bachelor's degree and an accredited English teaching qualification (TEFL/TESOL/CELTA).
                        </p>
                    </div>
                    <div class="p-4 rounded-2xl border border-slate-200 bg-white">
                        <h4 class="font-bold text-brand-navy text-sm">How long does the hiring process take?</h4>
                        <p class="text-slate-600 mt-1 leading-relaxed">
                            Typically 1 to 3 weeks from submitting your profile to signing a contract, depending on the academic calendar and whether you are already in Vietnam or applying from overseas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Application Form -->
<section id="apply" class="py-16 bg-slate-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Start Your Journey</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Submit Your Teaching Profile</h3>
                <p class="text-xs text-slate-500 mt-1">Our coordinator will connect with you via WhatsApp or Email within 2–4 hours.</p>
            </div>

            <form onsubmit="handleJobSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Nationality *</label>
                        <input type="text" required placeholder="e.g. Philippines, South Africa, UK, USA" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Preferred Teaching Location</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                            <option value="Hanoi">Hanoi</option>
                            <option value="Da Nang">Da Nang</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                            <option value="Any City">Flexible / Open to all provinces</option>
                            <option value="Overseas">Currently overseas (planning to arrive)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Teaching Background & Qualifications</label>
                    <textarea rows="3" placeholder="Briefly share your degree major, TEFL status, years of experience, and target start date..." class="w-full p-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-blue-600 hover:bg-blue-700 text-white transition shadow-sm">
                        Submit Profile for Free School Matching &rarr;
                    </button>
                </div>
            </form>

            <div id="jobSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Profile Submitted Successfully!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our teacher placement coordinator is reviewing your details and will message you on WhatsApp or email shortly with suitable positions.
                </p>
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
