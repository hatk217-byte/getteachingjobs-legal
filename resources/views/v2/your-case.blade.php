@extends('layouts.v2')

@section('title', 'Your Case & Consultation · Get Teaching Jobs Vietnam')
@section('meta_description', 'Submit your teaching or legal case for direct 1-on-1 consultation. Tell us your location, required services, and get transparent guidance within hours.')

@section('content')
<!-- Page Header -->
<div class="bg-brand-navy text-white py-16 border-b border-white/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-medium text-amber-300 mb-4">
            <i class="fa-solid fa-clipboard-check"></i> Direct Support Enquiry
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Tell Us About Your Case</h1>
        <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-xl mx-auto">
            Fill in your details below. Our specialist will review your situation and contact you via your preferred chat app (WhatsApp or Zalo) with a tailored consultation.
        </p>
    </div>
</div>

<!-- Form Section -->
<div class="py-16 bg-slate-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="bg-white text-slate-800 rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200">
            
            <div class="text-center mb-8 pb-4 border-b border-slate-100">
                <h2 class="text-2xl font-bold text-brand-navy tracking-tight">Request a Consultation</h2>
                <p class="text-xs text-slate-500 mt-1">Direct review & support from our teacher desk &bull; No sensitive passport numbers required</p>
            </div>

            <form id="assessmentForm" onsubmit="handleAssessmentSubmit(event)" class="space-y-6">
                
                <!-- 1. WHERE ARE YOU CURRENTLY LOCATED? -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        1. Where are you currently located? <span class="text-rose-500">*</span>
                    </label>
                    <select id="locationSelect" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-slate-800">
                        <option value="" disabled selected>-- Select your current location --</option>
                        <optgroup label="Inside Vietnam">
                            <option value="Hanoi">Inside Vietnam — Hanoi</option>
                            <option value="Ho Chi Minh City">Inside Vietnam — Ho Chi Minh City</option>
                            <option value="Da Nang">Inside Vietnam — Da Nang</option>
                            <option value="Other VN Province">Inside Vietnam — Other Province</option>
                        </optgroup>
                        <optgroup label="Outside Vietnam">
                            <option value="Philippines">Outside Vietnam — Philippines</option>
                            <option value="South Africa">Outside Vietnam — South Africa</option>
                            <option value="UK / US / Australia / Canada">Outside Vietnam — Native English Countries (UK, US, AU, CA...)</option>
                            <option value="Other Overseas">Outside Vietnam — Other Country / Overseas</option>
                        </optgroup>
                    </select>
                </div>

                <!-- 2. WHAT DO YOU NEED HELP WITH? -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        2. What do you need help with? (Select all that apply) <span class="text-rose-500">*</span>
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-job-placement" name="service" value="Job Placement" checked class="rounded text-blue-600">
                            <span>1. Job Placement Assistance</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-visa-service" name="service" value="Vietnam Visa" class="rounded text-blue-600">
                            <span>2. Vietnam Visa (Evisa / DN1 / Working)</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-legalization" name="service" value="Legalization" class="rounded text-blue-600">
                            <span>3. Apostille & Consular Legalization</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-coe-filipino" name="service" value="Filipino COE" class="rounded text-blue-600">
                            <span>4. COE Support (Filipino Teachers Only)</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-work-permit-trc" name="service" value="Work Permit & TRC" class="rounded text-blue-600">
                            <span>5. Work Permit & TRC Consultation</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">
                            <input type="checkbox" id="srv-other-supports" name="service" value="Other Supports" class="rounded text-blue-600">
                            <span>6. Other Supports (Police Check, Housing, Flight)</span>
                        </label>
                    </div>
                </div>

                <!-- 3. CONTACT INFORMATION -->
                <div class="pt-4 border-t border-slate-100 space-y-4">
                    
                    <!-- Full Name -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Your Full Name <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="fullNameInput" required placeholder="e.g. John Michael Doe" class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Phone Number & Chat App Selection -->
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                        <div class="sm:col-span-6">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                                Phone Number (with country code) <span class="text-rose-500">*</span>
                            </label>
                            <input type="tel" id="phoneInput" required placeholder="e.g. +84 946 682 798 or +63 912 345 6789" class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Chat App: WhatsApp / Zalo / None -->
                        <div class="sm:col-span-6">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                                Preferred Chat App <span class="text-rose-500">*</span>
                            </label>
                            <div class="grid grid-cols-3 gap-2 pt-1 text-xs">
                                <label class="p-2.5 rounded-xl border border-slate-200 flex items-center justify-center gap-1.5 cursor-pointer hover:bg-slate-50">
                                    <input type="radio" name="chat_app" value="whatsapp" checked class="text-emerald-600">
                                    <span class="font-medium text-slate-700">WhatsApp</span>
                                </label>
                                <label class="p-2.5 rounded-xl border border-slate-200 flex items-center justify-center gap-1.5 cursor-pointer hover:bg-slate-50">
                                    <input type="radio" name="chat_app" value="zalo" class="text-blue-600">
                                    <span class="font-medium text-slate-700">Zalo</span>
                                </label>
                                <label class="p-2.5 rounded-xl border border-slate-200 flex items-center justify-center gap-1.5 cursor-pointer hover:bg-slate-50">
                                    <input type="radio" name="chat_app" value="none" class="text-slate-600">
                                    <span class="font-medium text-slate-700">Email only</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Email Address <span class="text-rose-500">*</span>
                        </label>
                        <input type="email" id="emailInput" required placeholder="john@example.com" class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Your Message -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Your Message & Specific Requirements
                        </label>
                        <textarea id="messageInput" rows="4" placeholder="Tell us about your teaching qualifications, current visa validity, target start date, or any specific challenges..." class="w-full text-xs p-3.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-slate-800"></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-sm bg-brand-navy hover:bg-blue-900 text-white shadow-lg transition-all flex items-center justify-center gap-2">
                        <span>Send Consultation Request</span>
                        <i class="fa-solid fa-arrow-right text-amber-400 text-xs"></i>
                    </button>
                    <p class="text-[11px] text-center text-slate-500 mt-3">
                        <i class="fa-solid fa-shield-halved text-emerald-600 mr-1"></i> Your information is protected and strictly confidential. Response within 2 to 4 business hours.
                    </p>
                </div>

            </form>

            <!-- Success Confirmation Message -->
            <div id="formSuccessMessage" class="hidden text-center py-10 space-y-4">
                <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl mx-auto">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="text-xl font-bold text-brand-navy">Thank you for submitting your case!</h3>
                <p class="text-xs text-slate-600 max-w-md mx-auto">
                    Our teacher support coordinator will review your information and reach out directly via your chosen chat app or email shortly.
                </p>
                <div class="pt-4">
                    <a href="https://wa.me/84946682798" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs font-bold bg-emerald-600 text-white hover:bg-emerald-700 transition">
                        <i class="fa-brands fa-whatsapp text-sm"></i> Connect immediately on WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleAssessmentSubmit(event) {
        event.preventDefault();
        document.getElementById('assessmentForm').classList.add('hidden');
        document.getElementById('formSuccessMessage').classList.remove('hidden');
    }
</script>
@endsection
