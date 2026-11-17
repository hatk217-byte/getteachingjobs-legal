@extends('layouts.v2')

@section('title', 'Teacher Relocation & Expat Support in Vietnam · Get Teaching Jobs')
@section('meta_description', 'Complete relocation support for international teachers in Vietnam: apartment search, airport pickup, flight assistance, and Vietnam police clearance.')

@section('content')
<section class="bg-brand-navy text-white py-20 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-semibold text-rose-300">
                    <i class="fa-solid fa-house-user"></i> Service 06 &bull; Relocation & Settlement
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Teacher Relocation & Expat Support in Vietnam
                </h1>
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl font-normal leading-relaxed">
                    Settle into your new Vietnamese city with ease. We connect you with trusted local partners for apartment rentals near your campus, private airport transfers, and Vietnamese Police Clearance No. 1.
                </p>
                <div class="flex flex-wrap gap-4 text-xs text-slate-200 pt-2">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Hanoi, Da Nang & Ho Chi Minh City</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Verified expat housing leases</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400"></i> Safe private airport pick-up</span>
                </div>
                <div class="pt-4 flex gap-3">
                    <a href="#relocate-form" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                        Request Relocation Assistance
                    </a>
                    <a href="{{ url('/v2/services') }}" class="px-5 py-3.5 rounded-xl text-sm font-medium border border-white/20 hover:border-white/40 text-slate-200 transition">
                        Back to All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white/10 p-6 rounded-2xl border border-white/15 backdrop-blur-md text-xs space-y-3">
                <div class="text-amber-300 font-bold uppercase tracking-wider text-[11px]">Core Relocation Services</div>
                <ul class="space-y-2 text-slate-300">
                    <li>&bull; <strong>Police Clearance:</strong> VN Criminal Record (Lý Lịch Tư Pháp No. 1)</li>
                    <li>&bull; <strong>Housing:</strong> Vetted rental apartments near school</li>
                    <li>&bull; <strong>Airport Pickup:</strong> Safe private driver to your door</li>
                    <li>&bull; <strong>Flight Support:</strong> Domestic & regional flight bookings</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Expat Apartment Rentals</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Preview apartments located within comfortable commuting distance to your school. Bilingual contract review to protect your deposit.
                </p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-car-side"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Private Airport Pick-up</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Avoid airport taxi scams. A vetted driver waits for you at Noi Bai (Hanoi), Da Nang, or Tan Son Nhat (HCMC) with direct delivery to your hotel or residence.
                </p>
            </div>
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50 space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-shield-cat"></i>
                </div>
                <h3 class="font-bold text-base text-brand-navy">Vietnam Police Clearance (No. 1)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Processing Phiếu Lý Lịch Tư Pháp Số 1 via local Departments of Justice (Sở Tư Pháp) for teachers already residing in Vietnam.
                </p>
            </div>
        </div>

        <div id="relocate-form" class="max-w-xl mx-auto p-8 rounded-3xl border border-slate-200 bg-slate-50">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-brand-navy">Enquire About Relocation Support</h3>
                <p class="text-xs text-slate-500 mt-1">Let us know what assistance you need upon arrival</p>
            </div>
            <form onsubmit="handleRelocateSubmit(event)" class="space-y-4 text-xs">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Your Full Name *</label>
                    <input type="text" required placeholder="John Doe" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Target City in Vietnam *</label>
                        <select class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                            <option value="Hanoi">Hanoi</option>
                            <option value="Da Nang">Da Nang</option>
                            <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                            <option value="Other">Other Province</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Expected Arrival Date</label>
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
                        <input type="email" required placeholder="john@example.com" class="w-full p-3 rounded-xl border border-slate-200 bg-white">
                    </div>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">What do you need help with?</label>
                    <textarea rows="3" placeholder="Apartment search budget, airport pickup date & flight number, or police check..." class="w-full p-3 rounded-xl border border-slate-200 bg-white"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm bg-rose-600 hover:bg-rose-700 text-white transition">
                    Submit Relocation Enquiry
                </button>
            </form>
            <div id="relocateSuccess" class="hidden text-center py-6 space-y-2">
                <i class="fa-solid fa-circle-check text-emerald-500 text-2xl"></i>
                <h4 class="font-bold text-brand-navy">Enquiry Submitted!</h4>
                <p class="text-xs text-slate-500">Our relocation coordinator will reach out via WhatsApp with details.</p>
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
