@extends('layouts.v2')

@section('title', 'FAQs · Get Teaching Jobs Vietnam')
@section('meta_description', 'Frequently asked questions regarding teaching English, visa transitions, consular legalization, COE support for Filipinos, and work permits in Vietnam.')

@section('content')
<!-- Page Header -->
<div class="bg-brand-navy text-white py-16 border-b border-white/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-medium text-amber-300 mb-4">
            <i class="fa-solid fa-circle-question"></i> Clear Answers
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Frequently Asked Questions</h1>
        <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-xl mx-auto">
            Practical, up-to-date answers regarding recruitment, visa procedures, document legalization, and relocation to Vietnam.
        </p>
    </div>
</div>

<!-- Main Q&A Content -->
<div class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-12">
        
        <!-- Category 1: Job Placement -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                <i class="fa-solid fa-briefcase text-blue-700"></i>
                <h2 class="text-lg font-bold text-brand-navy">1. Job Placement & Teaching Offers</h2>
            </div>
            
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">How does your Job Placement service work for foreign teachers?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We partner with certified public schools, bilingual academies, and language centers nationwide. Based on your educational qualifications, nationality, and salary expectations, we present your profile to verified hiring partners and coordinate interview schedules. There are no fees or salary deductions charged to the teacher for job placement.
                </p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">Do I need prior teaching experience to get hired in Vietnam?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    While international and bilingual schools generally prefer 1–2 years of formal teaching experience, many reputable English language centers and public school programs welcome fresh graduates with a valid Bachelor's degree and an accredited 120-hour TEFL/TESOL certificate.
                </p>
            </div>
        </div>

        <!-- Category 2: Visas & Immigration -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                <i class="fa-solid fa-passport text-amber-600"></i>
                <h2 class="text-lg font-bold text-brand-navy">2. Vietnam Visa & Status Transitions</h2>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">Can I enter Vietnam on a Tourist Visa (E-visa) and convert it to a Work Visa?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Under Vietnamese immigration rules, converting your visa status inside the country requires an official corporate sponsorship from your hiring school or company. Depending on your entry stamp and passport, we advise whether an in-country conversion is permitted or assist with a quick, cost-effective border run to activate your business visa.
                </p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">What is a DN1 Business Visa?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    A DN1 visa is granted to foreign experts entering Vietnam to work directly with Vietnamese businesses or licensed educational institutions. It serves as the standard legal stepping stone while your official Work Permit and Temporary Residence Card (TRC) are being processed.
                </p>
            </div>
        </div>

        <!-- Category 3: Legalization & Apostille -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                <i class="fa-solid fa-stamp text-emerald-600"></i>
                <h2 class="text-lg font-bold text-brand-navy">3. Consular Legalization & Translations</h2>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">Do I need my original certificates or are notarized copies accepted?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    For University Degrees and TEFL certificates, certified copies authenticated by your home country's foreign affairs department or embassy are typically accepted. However, Police Clearance checks (Criminal Records) almost always require the original physical document issued within the past 6 months.
                </p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">How long does Consular Legalization take?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Standard turnaround for diplomatic authentication and certified Vietnamese judicial translation is 7 to 10 working days. We also offer fast-track express processing for urgent school start dates.
                </p>
            </div>
        </div>

        <!-- Category 4: Filipino COE Support -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                <i class="fa-solid fa-file-circle-check text-amber-700"></i>
                <h2 class="text-lg font-bold text-brand-navy">4. COE Support for Filipino Teachers</h2>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">Why is COE Support needed for teachers departing the Philippines?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Philippine immigration authorities strictly scrutinize departing overseas workers to prevent human trafficking and unverified employment. A valid, verified Certificate of Employment (COE), confirmed school contract, and proper departure protocols ensure you avoid being offloaded at Philippine airports.
                </p>
            </div>
        </div>

        <!-- Category 5: Work Permit & TRC -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                <i class="fa-solid fa-id-card-clip text-purple-700"></i>
                <h2 class="text-lg font-bold text-brand-navy">5. Work Permit & Temporary Residence Cards (TRC)</h2>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                <h3 class="text-sm font-bold text-brand-navy">Does my school apply for my Work Permit or do I apply myself?</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    By Vietnamese law, your hiring school is the legal applicant for your Work Permit. However, you are personally responsible for providing legally compliant documents (legalized degree, criminal record, local health check). We prepare and audit your file so it is ready for your school HR to submit without delays.
                </p>
            </div>
        </div>

        <!-- Still have questions? -->
        <div class="p-8 rounded-3xl bg-white border border-slate-200 text-center space-y-3">
            <h3 class="text-lg font-bold text-brand-navy">Have a specific question not covered here?</h3>
            <p class="text-xs text-slate-500 max-w-md mx-auto">
                Our support desk is available to answer your specific case details via Zalo, WhatsApp, or email.
            </p>
            <div class="pt-2">
                <a href="{{ url('/v2/your-case') }}" class="inline-flex items-center px-6 py-3 rounded-xl text-xs font-bold bg-brand-navy hover:bg-blue-900 text-white transition">
                    Ask Our Coordinator <i class="fa-solid fa-arrow-right ml-2 text-amber-400"></i>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
