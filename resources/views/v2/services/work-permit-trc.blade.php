@extends('layouts.v2')

@section('title', 'Work Permit & TRC Consultation in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Expert guidance for foreign teachers on Vietnam Work Permits and 1–2 year Temporary Residence Cards (TRC). Case-by-case document auditing and compliance.')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-brand-navy border-b border-white/5 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 text-xs text-slate-400 flex items-center gap-2">
        <a href="{{ url('/v2') }}" class="hover:text-white transition">Home</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <a href="{{ url('/v2/services') }}" class="hover:text-white transition">Services</a>
        <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
        <span class="text-amber-400 font-medium">Work Permit & TRC Consultation</span>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-brand-navy text-white py-16 sm:py-20 border-b border-white/10 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-purple-300">
                    <i class="fa-solid fa-id-card-clip"></i> Service 05 &bull; Long-Term Legal Stay
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Work Permit & Temporary Residence Card (TRC)
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Personalized guidance and document auditing for foreign educators. Secure your official Work Permit (Giấy Phép Lao Động) and 1–2 year TRC (Thẻ Tạm Trú) to live and teach legally without recurring visa runs.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Pre-submission credential audit</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Health check & police record advice</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Decree 152/2020 & 70/2023 compliance</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> 1–2 year multi-entry TRC</span>
                </div>
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="#wp-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition shadow-sm">
                        Consult on Work Permit & TRC
                    </a>
                    <a href="https://wa.me/84946682798" target="_blank" class="px-5 py-3.5 rounded-xl text-sm font-medium bg-emerald-600/90 hover:bg-emerald-600 text-white transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Our Specialist
                    </a>
                </div>
            </div>

            <!-- Quick Specs Card -->
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-3xl border border-white/15 backdrop-blur-md text-xs space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Residency Benefits</span>
                    <span class="px-2 py-0.5 rounded bg-purple-500/30 text-purple-200 text-[10px] font-semibold">1–2 Years</span>
                </div>
                <ul class="space-y-2.5 text-slate-200 text-xs">
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">No More Border Runs</strong>
                        <span class="text-slate-300 text-[11px]">Exit and enter Vietnam freely during your card's validity period.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Bank Account & Lease Legalization</strong>
                        <span class="text-slate-300 text-[11px]">Open local bank accounts, receive international salary transfers legally.</span>
                    </li>
                    <li class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                        <strong class="text-white block">Driving License Conversion</strong>
                        <span class="text-slate-300 text-[11px]">Qualify to convert your foreign driver's license to a Vietnamese license.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: Work Permit vs TRC Explained -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-50 px-3 py-1 rounded-full border border-purple-200">Legal Definitions</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-3">Understanding the Work Permit & TRC</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-2">These are two distinct documents issued by two different Vietnamese government departments:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <h3 class="font-bold text-lg text-brand-navy">1. Work Permit (Giấy Phép Lao Động)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Issued by the Department of Labour, Invalids and Social Affairs (DOLISA). It authorizes you to work legally for your specific employing school or center for up to 2 years.
                </p>
                <div class="space-y-1.5 text-xs text-slate-600 pt-2 border-t border-slate-200">
                    <div>&bull; Sponsored and applied for by your employer</div>
                    <div>&bull; Requires legalized degree, TEFL, health check & police record</div>
                    <div>&bull; Must be obtained before applying for a TRC</div>
                </div>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <h3 class="font-bold text-lg text-brand-navy">2. Temporary Residence Card (Thẻ Tạm Trú)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Issued by the Vietnamese Immigration Department (Cục Quản Lý Xuất Nhập Cảnh). Once your Work Permit is issued, this plastic residency card replaces your visa.
                </p>
                <div class="space-y-1.5 text-xs text-slate-600 pt-2 border-t border-slate-200">
                    <div>&bull; Valid for 1 to 2 years, aligned with your Work Permit</div>
                    <div>&bull; Completely eliminates need for monthly or 90-day visa runs</div>
                    <div>&bull; Grants multiple entries and exits through all international borders</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Application Checklist & Criteria -->
<section class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-10">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Dossier Preparation</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-navy mt-2">What Foreign Teachers Must Provide</h2>
            <p class="text-xs text-slate-500 mt-1">Your 5 essential personal documents for Work Permit submission:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-brand-navy">1. Legalized Degree</div>
                <p class="text-slate-600 leading-relaxed">Original or certified copy, with embassy stamp + Vietnamese MOFA legalization + Vietnamese judicial translation.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-brand-navy">2. Legalized TEFL / CELTA</div>
                <p class="text-slate-600 leading-relaxed">120-hour certificate, authenticated and translated. CELTA and Trinity CertTESOL are universally recognized.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-brand-navy">3. Clean Criminal Record</div>
                <p class="text-slate-600 leading-relaxed">Home country police check (legalized within 6 months) OR Vietnamese Criminal Record No. 1 (Lý Lịch Tư Pháp).</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-brand-navy">4. Designated Health Check</div>
                <p class="text-slate-600 leading-relaxed">Conducted at approved hospitals in Vietnam (e.g. Bach Mai, E Hospital, Cho Ray) within the last 6 months.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-brand-navy">5. Passport & Digital Photos</div>
                <p class="text-slate-600 leading-relaxed">Valid for at least 1–2 years with blank visa pages, plus 4x6cm white background passport photos.</p>
            </div>
            <div class="p-6 rounded-2xl bg-purple-50 border border-purple-200 shadow-xs space-y-2">
                <div class="font-bold text-sm text-purple-900">Our Pre-Audit Guarantee</div>
                <p class="text-purple-800 leading-relaxed">We verify your dossier before submission to prevent costly rejection notices or official delays.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Consultation Form -->
<section id="wp-form" class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-slate-50/50 shadow-sm">
            <div class="text-center max-w-lg mx-auto mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Case-by-Case Review</span>
                <h3 class="text-2xl font-bold text-brand-navy mt-1">Audit Your Work Permit Dossier</h3>
                <p class="text-xs text-slate-500 mt-1">Every province and school has slightly different criteria. Let us evaluate your credentials upfront.</p>
            </div>

            <form onsubmit="handleWpSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Full Name *</label>
                    <input type="text" required placeholder="Michael Brown" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Nationality *</label>
                        <input type="text" required placeholder="e.g. USA, UK, South Africa, Ireland" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Current Province in Vietnam *</label>
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
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">WhatsApp / Phone *</label>
                        <input type="tel" required placeholder="+84 946 682 798" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" required placeholder="michael@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1.5">Your Sponsoring School & Current Document Status</label>
                    <textarea rows="3" placeholder="Tell us if you have an active employer sponsor, which documents are already legalized, and your target completion timeline..." class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-blue-600 transition"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-purple-600 hover:bg-purple-700 text-white transition shadow-sm">
                        Submit for Work Permit Feasibility Audit &rarr;
                    </button>
                </div>
            </form>

            <div id="wpSuccess" class="hidden text-center py-8 space-y-3">
                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-xl font-bold">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="font-bold text-lg text-brand-navy">Feasibility Request Received!</h4>
                <p class="text-xs text-slate-500 max-w-md mx-auto">
                    Our Work Permit specialist will evaluate your province regulations and contact you on WhatsApp / Email within 2–4 hours.
                </p>
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
