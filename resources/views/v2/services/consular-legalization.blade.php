@extends('layouts.v2')

@section('title', 'Consular Legalization & Apostille in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Fast consular legalization and certified Vietnamese translation for foreign degrees, TEFL certificates, and criminal checks. Standard & express processing.')

@section('content')
<section class="bg-brand-navy text-white py-20 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-emerald-300">
                    <i class="fa-solid fa-stamp"></i> Service 03 &bull; Certified Authentication
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Consular Legalization & Apostille for Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Make your overseas qualifications legally recognized in Vietnam. Complete authentication, embassy consular stamps, and certified judicial Vietnamese translations.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Standard 7–10 days & Express options</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Bachelor's, Master's, TEFL, CELTA</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Official certified translations</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#legalize-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Get Legalization Quote
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Originals vs. Notarized Copies</div>
                <ul class="space-y-2 text-slate-300">
                    <li>&bull; <strong>Degrees & Diplomas:</strong> Certified true copy legalized by embassy / MOFA.</li>
                    <li>&bull; <strong>TEFL / CELTA:</strong> Certified copy authentication.</li>
                    <li>&bull; <strong>Criminal Records:</strong> Must be original document within 6 months.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">1</div>
                <h3 class="font-bold text-sm text-brand-navy">Embassy Authentication</h3>
                <p class="text-xs text-slate-600">Verification by your issuing country's embassy or consulate in Vietnam (US, UK, SA, AU, CA, PH, etc.).</p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">2</div>
                <h3 class="font-bold text-sm text-brand-navy">MOFA Consular Seal</h3>
                <p class="text-xs text-slate-600">Official stamp from the Vietnamese Ministry of Foreign Affairs (Sở Ngoại Vụ) certifying diplomatic authenticity.</p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">3</div>
                <h3 class="font-bold text-sm text-brand-navy">Judicial Translation</h3>
                <p class="text-xs text-slate-600">Certified translation into Vietnamese with official notary public stamp (bản dịch công chứng tư pháp).</p>
            </div>
        </div>

        <div id="legalize-form" class="max-w-xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Check Your Document Viability</h3>
                <p class="text-xs text-slate-500 mt-1">Get an upfront checklist & quote for your certificates</p>
            </div>
            <form onsubmit="handleLegalizeSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Your Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Issuing Country of Degree *</label>
                        <input type="text" required placeholder="e.g. UK, South Africa, USA" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Where are the documents now?</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                            <option>With me in Vietnam</option>
                            <option>In my home country</option>
                        </select>
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
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-emerald-600 hover:bg-emerald-700 text-white transition">
                    Get Document Checklist & Quote
                </button>
            </form>
            <div id="legalizeSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Details Received!</h4>
                <p class="text-xs text-slate-500">We will review your issuing country and send the exact legalization protocol shortly.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function handleLegalizeSubmit(e) {
        e.preventDefault();
        e.target.classList.add('hidden');
        document.getElementById('legalizeSuccess').classList.remove('hidden');
    }
</script>
@endsection
