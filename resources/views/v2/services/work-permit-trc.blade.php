@extends('layouts.v2')

@section('title', 'Work Permit & TRC Consultation in Vietnam · Complete Guide for Teachers')
@section('meta_description', 'Comprehensive guide to Vietnam Work Permits (Giấy phép lao động) and 1–2 year Temporary Residence Cards (TRC / Thẻ tạm trú). Decree 152/2020 compliance, hospital health checks, and family visas.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">5. Work Permit & TRC Consultation</span>
    </div>
</div>

<!-- HERO SECTION -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-purple-300">
                    <i class="fa-solid fa-id-card-clip"></i> Service 05 &bull; Long-Term Legal Residency &bull; Decree 152 & 70 Compliance
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Work Permit & Temporary Residence Card (TRC)
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Clear guidance and pre-submission credential auditing for foreign teachers and educational institutions. Secure your official Work Permit (Giấy Phép Lao Động) and 1–2 year multi-entry TRC (Thẻ Tạm Trú) to live, travel, and teach legally in Vietnam without monthly border runs.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Pre-submission dossier audit before DOLISA filing</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Approved hospital health check coordination</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> 1–2 year multi-entry plastic TRC card</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Family dependent TRC (Spouse & Children)</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#wp-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Audit My Work Permit Eligibility
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Our Specialist (+84 946 682 798)
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-7 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Residency Privileges</span>
                    <span class="px-2 py-0.5 rounded bg-purple-500/30 text-purple-200 text-[10px] font-semibold">1–2 Years Multi-Entry</span>
                </div>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Zero Border Runs</strong>
                        <span class="text-slate-300 text-[11px]">Exit and re-enter Vietnam freely without requesting additional visas.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Official Local Bank Account</strong>
                        <span class="text-slate-300 text-[11px]">Receive monthly salary via official bank transfers (VPBank, Techcombank, HSBC).</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Family Sponsoring Rights</strong>
                        <span class="text-slate-300 text-[11px]">Sponsor your spouse and dependent children for matching multi-year TRCs (TT).</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<!-- SECTION 1: WORK PERMIT VS TRC COMPARISON -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-50 px-3 py-1 rounded-full border border-purple-200">Legal Distinction</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Work Permit vs. TRC: How They Differ</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">Many foreign teachers confuse these two documents. They are issued by two separate government bodies:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 rounded-3xl border-2 border-purple-200 bg-purple-50/20 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xl">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <div class="text-[11px] font-bold uppercase text-purple-700 tracking-wider">Department of Labour (DOLISA)</div>
                <h3 class="font-bold text-xl text-brand-navy">1. Work Permit (Giấy Phép Lao Động)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    This is your <strong>legal authorization to work</strong> as an English teacher for a specific employer in Vietnam. It is issued in the form of a physical blue book by the provincial Department of Labour, Invalids and Social Affairs (DOLISA).
                </p>
                <ul class="space-y-2 text-xs text-slate-700 pt-2 border-t border-purple-100">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-purple-700"></i> Valid for up to <strong>2 years</strong> (tied to your employment contract).</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-purple-700"></i> Sponsored and officially submitted by your hiring school.</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-purple-700"></i> <strong>Crucial rule:</strong> A Work Permit is NOT a travel visa. You cannot enter Vietnam with just a Work Permit book.</li>
                </ul>
            </div>

            <div class="p-8 rounded-3xl border-2 border-blue-200 bg-blue-50/20 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xl">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <div class="text-[11px] font-bold uppercase text-blue-700 tracking-wider">Immigration Department (Xuất Nhập Cảnh)</div>
                <h3 class="font-bold text-xl text-brand-navy">2. Temporary Residence Card (Thẻ Tạm Trú)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    This is your <strong>long-term residency card</strong> issued by the Vietnamese Immigration Department. It is a hard plastic card with your photo and chip that completely replaces normal entry visas for the duration of its validity.
                </p>
                <ul class="space-y-2 text-xs text-slate-700 pt-2 border-t border-blue-100">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-700"></i> Valid for <strong>1 to 2 years</strong>, matching your Work Permit date.</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-700"></i> Applied for <em>after</em> your official Work Permit has been granted.</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-700"></i> Allows unlimited exits and entries through all Vietnamese airports and borders.</li>
                </ul>
            </div>
        </div>
    </section>

<!-- SECTION 2: CHECKLIST OF 5 MANDATORY REQUIREMENTS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Decree 152 & 70 Compliance</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">The 5 Mandatory Work Permit Requirements</h2>
            <p class="text-xs text-slate-500 mt-1">What every foreign teacher must prepare for a flawless submission:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-xs">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">1</div>
                <strong class="text-brand-navy text-sm block">Legalized University Degree</strong>
                <p class="text-slate-600 leading-relaxed">
                    Must be a Bachelor's degree or higher. Stamped with embassy authentication, Vietnamese MOFA consular seal, and certified Vietnamese judicial translation.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">2</div>
                <strong class="text-brand-navy text-sm block">120-Hour TEFL / TESOL / CELTA</strong>
                <p class="text-slate-600 leading-relaxed">
                    Accredited English teaching certificate. Must be legalized and judicially translated into Vietnamese. CELTA and Trinity CertTESOL receive immediate approval.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">3</div>
                <strong class="text-brand-navy text-sm block">Approved Hospital Health Check</strong>
                <p class="text-slate-600 leading-relaxed">
                    Must be conducted at Circular 14-approved hospitals in Vietnam (e.g. Bạch Mai, Bệnh Viện E in Hanoi; Chợ Rẫy, FV in HCMC) within the last 6 months.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">4</div>
                <strong class="text-brand-navy text-sm block">Clean Police Clearance</strong>
                <p class="text-slate-600 leading-relaxed">
                    Home country police certificate (FBI, ACRO, SAPS, NBI) legalized within 6 months OR Vietnamese Criminal Record No. 1 (Phiếu Lý Lịch Tư Pháp Số 1).
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">5</div>
                <strong class="text-brand-navy text-sm block">Ward Police Registration (Tạm Trú)</strong>
                <p class="text-slate-600 leading-relaxed">
                    Proof of official online temporary residence registration from your local ward police (Công an phường) where you rent your apartment.
                </p>
            </div>

            <div class="bg-purple-50 p-6 rounded-2xl border border-purple-200 shadow-xs space-y-3">
                <div class="w-8 h-8 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold">✓</div>
                <strong class="text-purple-900 text-sm block">Pre-Audit by Our Desk</strong>
                <p class="text-purple-800 leading-relaxed">
                    We cross-check all 5 items against your hiring school's corporate registration before submission to ensure zero rejection notices.
                </p>
            </div>
        </div>
    </section>

<!-- SECTION 3: STEP-BY-STEP OFFICIAL PROCESSING TIMELINE -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Realistic Roadmap</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">The Official 4–6 Week Timeline</h2>
            <p class="text-xs text-slate-500 mt-1">Why honest timelines matter in Vietnamese labor administration:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-xs">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <span class="text-[10px] font-bold uppercase text-purple-700">Weeks 1 – 2</span>
                <h4 class="font-bold text-brand-navy text-sm">Labor Demand Approval</h4>
                <p class="text-slate-600 leading-relaxed">
                    Your school files Form No. 01/PLI (Giải trình nhu cầu sử dụng lao động nước ngoài) with the provincial People's Committee or DOLISA. Standard wait: 10–15 working days.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <span class="text-[10px] font-bold uppercase text-purple-700">Weeks 3 – 4</span>
                <h4 class="font-bold text-brand-navy text-sm">Work Permit Submission</h4>
                <p class="text-slate-600 leading-relaxed">
                    Once demand is approved, the teacher's full legalized dossier is submitted to DOLISA. Official review time is 7–10 working days.
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <span class="text-[10px] font-bold uppercase text-purple-700">Week 5</span>
                <h4 class="font-bold text-brand-navy text-sm">Work Permit Book Granted</h4>
                <p class="text-slate-600 leading-relaxed">
                    Physical blue Work Permit book is issued by DOLISA. Labor contract is formally signed and reported to authorities.
                </p>
            </div>

            <div class="p-6 rounded-2xl border-2 border-emerald-500 bg-emerald-50/40 space-y-2">
                <span class="text-[10px] font-bold uppercase text-emerald-800">Week 6</span>
                <h4 class="font-bold text-emerald-950 text-sm">TRC Plastic Card Issued</h4>
                <p class="text-emerald-900 leading-relaxed">
                    Immigration Department prints your 1–2 year Temporary Residence Card. Passports returned with full resident status.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: IN-DEPTH FAQS -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-8">
        <div class="text-center">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Work Permit FAQs</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-4 text-xs">
            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Can I apply for a Work Permit independently without a school?</h4>
                <p class="text-slate-600 leading-relaxed">
                    No. Under Vietnamese labor law, a foreign employee cannot self-sponsor a Work Permit. The applicant must be a legally registered educational institution, language center, or company in Vietnam that employs you and submits the corporate dossier. Our desk audits your personal paperwork and coordinates directly with your school's HR.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">What happens if my university degree is not in English or Education?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Under Decree 70/2023, if your Bachelor's degree is in an unrelated field (e.g. Business, Science, Engineering), you can still qualify to teach English at language centers if you hold an accredited 120-hour TEFL / CELTA certificate and documented teaching experience certificate.
                </p>
            </div>

            <div class="p-5 rounded-2xl border border-slate-200 bg-white space-y-2">
                <h4 class="font-bold text-brand-navy text-sm">Can I bring my spouse and children on my TRC?</h4>
                <p class="text-slate-600 leading-relaxed">
                    Yes! Once your Work Permit and TRC are issued, you are legally entitled to sponsor your legal spouse and children under 18 years of age for a Dependent Temporary Residence Card (Symbol: TT). They receive matching 1–2 year residence cards allowing them to reside in Vietnam freely.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: ELIGIBILITY AUDIT FORM -->
<section id="wp-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Audit Your Dossier</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Audit Your Work Permit Eligibility</h3>
                <p class="text-xs text-slate-500 mt-1">Every province (Hanoi, HCMC, Da Nang) has distinct DOLISA guidelines. Let us verify your papers upfront.</p>
            </div>

            <form onsubmit="handleWpSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Michael Brown" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <form onsubmit="handleWpSubmit(event)" class="space-y-4 text-xs">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Passport Nationality *</label>
                        <input type="text" required placeholder="e.g. USA, UK, South Africa, Ireland" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Teaching Province in Vietnam *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                            <option value="Hanoi">Hanoi</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                            <option value="Da Nang">Da Nang</option>
                            <option value="Hai Phong">Hai Phong / Quang Ninh</option>
                            <option value="Binh Duong">Binh Duong / Dong Nai</option>
                            <option value="Other Province">Other Provincial City</option>
                            <option value="Overseas">Currently Overseas</option>
                        </select>
                    </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone Number *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Your Sponsoring School & Current Document
                            Status</label>
                        <textarea rows="3"
                            placeholder="Tell us if you have an active employer sponsor, which documents are already legalized, and your target completion timeline..."
                            class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                    </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Your Sponsoring School & Document Status</label>
                    <textarea rows="3" placeholder="Tell us if you already have an employer sponsor, whether your degree & TEFL are legalized, and your target completion timeline..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-purple-600 hover:bg-purple-700 text-white transition shadow-sm">
                        Submit for Free Work Permit & TRC Feasibility Audit &rarr;
                    </button>
                </div>
            </form>

            <div id="wpSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Feasibility Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our Work Permit specialist will evaluate your credentials against current provincial DOLISA regulations and reach out via WhatsApp / Email within 2–4 hours.
                </p>
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