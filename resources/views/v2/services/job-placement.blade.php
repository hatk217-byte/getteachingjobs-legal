@extends('layouts.v2')

@section('title', 'Teacher Job Placement in Vietnam · Comprehensive Guide & School Matching')
@section('meta_description', 'Complete teacher placement guide for Vietnam: salary benchmarks ($1,200-$2,500+), school types, contract benefits, legal requirements, and 100% free placement for foreign teachers.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">1. Job Placement for Teachers</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-blue-300">
                    <i class="fa-solid fa-briefcase"></i> Service 01 &bull; 100% Free for Teachers &bull; Direct School Contracts
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Find Your Ideal Teaching Job in Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Direct placement with verified public schools, prestigious bilingual academies, and accredited language centers across Hanoi, Da Nang, Ho Chi Minh City, and provincial cities. No salary cuts, transparent contracts, and full legal visa sponsorship.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> 100% Free — Schools pay our fee</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Native & Non-native English teachers</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Guaranteed Work Permit & TRC sponsorship</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Direct interview with school leaders</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#apply" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Submit Profile for School Matching
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp (+84 946 682 798)
                    </a>
                </div>
            </div>

            <!-- Quick Benchmark Highlight Card -->
            <div class="lg:col-span-4 bg-white/10 p-7 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Salary Benchmark</span>
                    <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 text-[10px] font-semibold">2026 Updated</span>
                </div>
                <div class="text-3xl font-extrabold text-white">$1,200 – $2,500+ <span class="text-xs font-normal text-slate-300">/ month</span></div>
                <p class="text-slate-300 leading-relaxed text-[11px]">
                    Average net salary across Vietnam based on qualifications, school tier, and teaching schedule.
                </p>
                <div class="space-y-2 pt-3 border-t border-white/10 text-slate-200">
                    <div class="flex justify-between items-center">
                        <span>Public & Primary:</span>
                        <strong class="text-white">$1,200 – $1,800/mo</strong>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Bilingual & Academies:</span>
                        <strong class="text-white">$1,800 – $2,600+/mo</strong>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Language Centers:</span>
                        <strong class="text-white">$18 – $25/hour</strong>
                    </div>
                </div>
                <div class="pt-3 border-t border-white/10 text-[11px] text-amber-200 flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved"></i> Includes full legal Work Permit sponsorship.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 1: DETAILED SALARY & TEACHING ENVIRONMENT COMPARISON -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Teaching Environments</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Where You Can Teach in Vietnam</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Every educational institution offers distinct working hours, lifestyles, and compensation models.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- 1. Public Schools -->
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 flex flex-col justify-between space-y-4 hover:shadow-md transition">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg mb-4">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="text-[11px] font-bold uppercase text-blue-700 tracking-wider">Daytime Consistency</div>
                    <h3 class="font-bold text-lg text-brand-navy mt-1">Public Primary & High Schools</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mt-2">
                        Teaching energetic Vietnamese students in formal school environments. Fixed Monday to Friday daytime shifts (typically 7:30 AM to 4:30 PM) with completely free evenings and weekends.
                    </p>
                    <ul class="space-y-2 mt-4 text-xs text-slate-600 border-t border-slate-200 pt-3">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Hours:</strong> 18–22 teaching hours/week</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Salary:</strong> $1,200 – $1,800 net/month</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Vacation:</strong> Paid Tet holidays, summer break options</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Class size:</strong> 30–45 students with Vietnamese co-teacher</li>
                    </ul>
                </div>
                <div class="pt-2">
                    <span class="inline-block w-full text-center py-2 px-3 rounded-xl bg-blue-50 text-blue-700 font-semibold text-xs">Best for: Work-life balance & stability</span>
                </div>
            </div>

            <!-- 2. Bilingual & International Academies -->
            <div class="p-7 rounded-3xl border-2 border-purple-200 bg-white flex flex-col justify-between space-y-4 shadow-xs hover:shadow-md transition">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg mb-4">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="text-[11px] font-bold uppercase text-purple-700 tracking-wider">Premium Package</div>
                    <h3 class="font-bold text-lg text-brand-navy mt-1">Bilingual & International Academies</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mt-2">
                        Teaching subjects (English, Science, Math) following Cambridge, IB, or US standards. Modern air-conditioned campuses, smart classrooms, and comprehensive expat benefits.
                    </p>
                    <ul class="space-y-2 mt-4 text-xs text-slate-600 border-t border-slate-200 pt-3">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Hours:</strong> 20–25 contact hours (Full-time M–F)</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Salary:</strong> $1,800 – $2,800+ net/month</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Perks:</strong> Private health insurance, housing allowance, flight reimbursement</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Class size:</strong> 18–25 students, rich multimedia support</li>
                    </ul>
                </div>
                <div class="pt-2">
                    <span class="inline-block w-full text-center py-2 px-3 rounded-xl bg-purple-50 text-purple-700 font-semibold text-xs">Best for: High earnings & career progression</span>
                </div>
            </div>

            <!-- 3. English Language Centers -->
            <div class="p-7 rounded-3xl border border-slate-200 bg-slate-50/50 flex flex-col justify-between space-y-4 hover:shadow-md transition">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-4">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="text-[11px] font-bold uppercase text-emerald-700 tracking-wider">Flexible Schedule</div>
                    <h3 class="font-bold text-lg text-brand-navy mt-1">English Language Centers</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mt-2">
                        Teaching young learners, teens, or adults in modern after-school settings. Work during weekday evenings (5:30 PM – 9:00 PM) and weekend mornings/afternoons. Days are free for exploring.
                    </p>
                    <ul class="space-y-2 mt-4 text-xs text-slate-600 border-t border-slate-200 pt-3">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Hours:</strong> 15–25 hours/week (Full-time or Part-time)</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Pay:</strong> $18 – $25/hour ($1,300 – $2,100/mo)</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Curriculum:</strong> Pre-planned lesson plans, digital games</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> <strong>Class size:</strong> 12–16 students</li>
                    </ul>
                </div>
                <div class="pt-2">
                    <span class="inline-block w-full text-center py-2 px-3 rounded-xl bg-emerald-50 text-emerald-700 font-semibold text-xs">Best for: Daytime freedom & flexibility</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: TOP DESTINATIONS IN VIETNAM -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Where Will You Live?</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Top Teaching Cities in Vietnam</h2>
            <p class="text-xs text-slate-500 mt-1">Each region has a unique vibe, cost of living, and community:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-xs">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="flex items-center justify-between">
                    <strong class="text-brand-navy text-sm font-bold">Hanoi (Capital)</strong>
                    <span class="px-2 py-0.5 rounded bg-blue-50 text-blue-700 text-[10px] font-bold">Highest Demand</span>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Rich cultural heritage, thousands of schools, thriving expat communities in Tay Ho & Ba Dinh. Lower rent costs with strong saving potential.
                </p>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500">
                    Monthly living cost: $600 – $900
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="flex items-center justify-between">
                    <strong class="text-brand-navy text-sm font-bold">Ho Chi Minh City</strong>
                    <span class="px-2 py-0.5 rounded bg-amber-50 text-amber-800 text-[10px] font-bold">Dynamic</span>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Vietnam’s economic powerhouse. Cosmopolitan nightlife, international cuisine, warm weather all year, and the largest bilingual school network.
                </p>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500">
                    Monthly living cost: $800 – $1,200
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="flex items-center justify-between">
                    <strong class="text-brand-navy text-sm font-bold">Da Nang (Coastal)</strong>
                    <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-bold">Beach Life</span>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Clean seaside living, surfing at My Khe Beach, close to ancient Hoi An. Relaxed teaching pace and high quality of life.
                </p>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500">
                    Monthly living cost: $550 – $850
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="flex items-center justify-between">
                    <strong class="text-brand-navy text-sm font-bold">Provinces (Hai Phong, etc.)</strong>
                    <span class="px-2 py-0.5 rounded bg-purple-50 text-purple-700 text-[10px] font-bold">Free Housing</span>
                </div>
                <p class="text-slate-600 leading-relaxed">
                    Cities like Hai Phong, Bac Ninh, Binh Duong, and Ha Long often provide free modern housing, higher base pay, and genuine Vietnamese hospitality.
                </p>
                <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-500">
                    Monthly living cost: $400 – $600
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: 6-STAGE RECRUITMENT ROADMAP -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Clear & Transparent</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">Our 6-Step Placement Process</h2>
            <p class="text-xs text-slate-500 mt-1">From your first message to stepping into your classroom</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 text-xs">
            <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-xs">1</div>
                <strong class="block text-brand-navy text-sm">CV & Audit</strong>
                <p class="text-slate-500 leading-relaxed">Submit your resume. We check degree & TEFL eligibility within 24h.</p>
            </div>
            <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-xs">2</div>
                <strong class="block text-brand-navy text-sm">Target Match</strong>
                <p class="text-slate-500 leading-relaxed">We match you with 2–3 suitable schools fitting your desired city & salary.</p>
            </div>
            <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-xs">3</div>
                <strong class="block text-brand-navy text-sm">Interview Prep</strong>
                <p class="text-xs text-slate-500 leading-relaxed">Briefing on typical school questions, demo lesson guidelines, and salary negotiation.</p>
            </div>
            <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-xs">4</div>
                <strong class="block text-brand-navy text-sm">School Interview</strong>
                <p class="text-xs text-slate-500 leading-relaxed">Direct 20–30 minute Zoom or in-person interview with the school principal.</p>
            </div>
            <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-xs">5</div>
                <strong class="block text-brand-navy text-sm">Contract Review</strong>
                <p class="text-slate-500 leading-relaxed">We review your official offer letter to protect your rights, hours, and bonus clauses.</p>
            </div>
            <div class="p-5 rounded-2xl border-2 border-emerald-500 bg-emerald-50/40 space-y-2">
                <div class="w-8 h-8 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-xs">6</div>
                <strong class="block text-emerald-900 text-sm">Visa & Onboarding</strong>
                <p class="text-emerald-800 leading-relaxed">Seamless transition into DN1 Visa / Work Permit processing with your school.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: QUALIFICATIONS & DETAILED FAQS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <!-- Left: Eligibility Checklist -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">Legal Criteria</span>
                    <h3 class="text-xl font-bold text-brand-navy mt-3">Teaching Requirements in Vietnam</h3>
                    <p class="text-xs text-slate-500 mt-1">To qualify for legal school contracts and Work Permit sponsorship:</p>
                </div>

                <div class="space-y-3 text-xs">
                    <div class="p-4 rounded-2xl border border-slate-200 bg-white space-y-1">
                        <div class="flex items-center gap-2 text-brand-navy font-bold">
                            <i class="fa-solid fa-graduation-cap text-blue-600 text-base"></i>
                            <span>Bachelor's Degree (or Higher)</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px] pl-6">
                            Must be from an accredited university. Any major is accepted for ESL centers and public schools. Education/English majors preferred for bilingual academies.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl border border-slate-200 bg-white space-y-1">
                        <div class="flex items-center gap-2 text-brand-navy font-bold">
                            <i class="fa-solid fa-certificate text-amber-600 text-base"></i>
                            <span>120-Hour TEFL / TESOL / CELTA</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px] pl-6">
                            Mandatory certification. Online courses are accepted as long as they carry a verifiable accreditation code. Cambridge CELTA & Trinity CertTESOL grant higher tier pay.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl border border-slate-200 bg-white space-y-1">
                        <div class="flex items-center gap-2 text-brand-navy font-bold">
                            <i class="fa-solid fa-passport text-purple-600 text-base"></i>
                            <span>Valid Passport (6+ Months)</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px] pl-6">
                            At least two blank pages for entry visas and residence stamps.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl border border-slate-200 bg-white space-y-1">
                        <div class="flex items-center gap-2 text-brand-navy font-bold">
                            <i class="fa-solid fa-shield text-emerald-600 text-base"></i>
                            <span>Clean Police Clearance</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-[11px] pl-6">
                            Issued within the last 6 months by your home country (FBI, ACRO, SAPS, NBI) or Vietnamese Criminal Record No. 1.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right: In-Depth FAQs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">Common Concerns</span>
                    <h3 class="text-xl font-bold text-brand-navy mt-3">Frequently Asked Questions</h3>
                </div>

                <div class="space-y-3 text-xs">
                    <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                        <h4 class="font-bold text-brand-navy text-sm">Is this job placement really 100% free for teachers?</h4>
                        <p class="text-slate-600 leading-relaxed">
                            Yes, absolutely zero cost to teachers. Our recruiting fee is paid directly by our partnered schools upon successful contract signing. We never deduct any commission, salary cut, or monthly fee from your earnings.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                        <h4 class="font-bold text-brand-navy text-sm">Can non-native English speaking teachers get hired?</h4>
                        <p class="text-slate-600 leading-relaxed">
                            Yes! We regularly place qualified educators from the Philippines, South Africa, and Europe. Filipino teachers are in extremely high demand across Vietnam due to strong pedagogy and classroom engagement, provided you have a Bachelor's degree and TEFL certificate.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                        <h4 class="font-bold text-brand-navy text-sm">What happens if I haven't legalized my documents yet?</h4>
                        <p class="text-slate-600 leading-relaxed">
                            You can still interview and receive an official school offer letter! While the hiring process is underway, our document desk can concurrently handle the consular legalization and translation of your degree and TEFL so you are ready for Work Permit filing.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                        <h4 class="font-bold text-brand-navy text-sm">When is the best hiring season in Vietnam?</h4>
                        <p class="text-slate-600 leading-relaxed">
                            Peak hiring for public schools and bilingual academies runs from <strong>May to August</strong> (for the August/September semester start) and <strong>December to January</strong> (for the spring semester). Language centers hire actively all year round.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: APPLICATION FORM -->
<section id="apply" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Get Matched</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Submit Your Profile for Teaching Roles</h3>
                <p class="text-xs text-slate-500 mt-1">Our coordinator will review your profile and contact you via WhatsApp / Email within 2–4 hours with suitable openings.</p>
            </div>

            <form onsubmit="handleJobSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name (as in passport) *</label>
                    <input type="text" required placeholder="John Mark Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Passport Nationality *</label>
                        <input type="text" required placeholder="e.g. Philippines, South Africa, UK, USA" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Preferred Teaching Location in Vietnam</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option value="Hanoi">Hanoi (North)</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City (South)</option>
                            <option value="Da Nang">Da Nang (Central)</option>
                            <option value="Flexible">Flexible / Open to all provinces</option>
                            <option value="Overseas">Currently overseas (planning arrival)</option>
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
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Highest Degree Major</label>
                        <input type="text" placeholder="e.g. BA in English, B.Ed, BS in Business" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">TEFL / Teaching Certificate</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option>120-hour TEFL / TESOL (Completed)</option>
                            <option>Cambridge CELTA / Trinity CertTESOL</option>
                            <option>Licensed Teacher / PGCE</option>
                            <option>Currently in progress / Planning to enroll</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Target Start Date & Teaching Experience</label>
                    <textarea rows="3" placeholder="Tell us about your teaching experience, age group preference, target monthly earnings, and when you can start..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-blue-600 hover:bg-blue-700 text-white transition shadow-sm">
                        Submit Profile for 100% Free School Placement &rarr;
                    </button>
                </div>
            </form>

            <div id="jobSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Profile Submitted Successfully!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our placement coordinator has received your credentials and will reach out via WhatsApp / Email with matching teaching opportunities.
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
