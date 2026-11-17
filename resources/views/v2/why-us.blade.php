@extends('layouts.v2')

@section('title', 'Why Us · Get Teaching Jobs Vietnam')
@section('meta_description', 'Discover why international teachers choose our boutique support desk in Vietnam: dedicated 1-on-1 coordinators, transparent fee breakdowns, and nationwide coverage.')

@section('content')
<!-- Page Header -->
<div class="bg-brand-navy text-white py-16 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full trust-badge-pill text-xs font-medium text-amber-300 mb-4">
            <i class="fa-solid fa-heart-circle-check"></i> The Boutique Difference
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Why International Teachers Choose Us</h1>
        <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-2xl">
            We don't pretend to be an impersonal corporate tower. We are a specialized, dedicated team that understands the real hurdles foreign educators face in Vietnam.
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-16">
        
        <!-- 4 Core Pillars -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <h3 class="text-lg font-bold text-brand-navy">1. A Dedicated Coordinator, Not a Ticket Number</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Instead of generic email tickets and automated chatbots, you get direct 1-on-1 support from a real coordinator via WhatsApp or Zalo. You always know who is handling your case from day one to completion.
                </p>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <h3 class="text-lg font-bold text-brand-navy">2. Upfront Viability Checks</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We review your degrees, transcripts, background checks, and current entry status before asking for any fee. If a document cannot be legalized or does not qualify for a Work Permit, we tell you frankly.
                </p>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-receipt"></i>
                </div>
                <h3 class="text-lg font-bold text-brand-navy">3. 100% Itemized Fee Transparency</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We separate official Government state stamping fees from our agency handling fee. Every cost is explained before you proceed — zero hidden surcharges and zero last-minute surprise fees.
                </p>
            </div>

            <div class="p-8 rounded-3xl border border-slate-200 bg-slate-50/50 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-earth-americas"></i>
                </div>
                <h3 class="text-lg font-bold text-brand-navy">4. Nationwide Coverage Across Vietnam</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Whether you are based in Hanoi, Da Nang, Ho Chi Minh City, or teaching in provincial schools, our network handles provincial Department of Labour (DOLISA) and Immigration submissions smoothly.
                </p>
            </div>

        </div>

        <!-- Comparison Table: Standard Agency vs. Get Teaching Jobs Boutique Desk -->
        <div class="p-8 sm:p-10 rounded-3xl border border-slate-200 bg-white shadow-xs">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-700">Clear Comparison</span>
                <h2 class="text-2xl font-bold text-brand-navy mt-1">What Makes Our Support Different</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-xs text-left">
                    <thead>
                        <tr class="border-b border-slate-200 text-slate-500 uppercase tracking-wider text-[11px]">
                            <th class="py-4 px-4">Feature</th>
                            <th class="py-4 px-4 text-slate-400">Typical Large Agencies</th>
                            <th class="py-4 px-4 text-blue-700 font-bold bg-blue-50/60 rounded-t-xl">Get Teaching Jobs Desk</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-4 px-4 font-semibold text-brand-navy">Point of Contact</td>
                            <td class="py-4 px-4 text-slate-500">Call centers, ticket numbers, different staff each time</td>
                            <td class="py-4 px-4 font-semibold text-blue-700 bg-blue-50/60">One dedicated coordinator via WhatsApp / Zalo</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4 font-semibold text-brand-navy">Teacher Feasibility Review</td>
                            <td class="py-4 px-4 text-slate-500">Require upfront payment before reviewing files</td>
                            <td class="py-4 px-4 font-semibold text-blue-700 bg-blue-50/60">Free initial review & viability checklist</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4 font-semibold text-brand-navy">Pricing Structure</td>
                            <td class="py-4 px-4 text-slate-500">Lump-sum packages with hidden costs</td>
                            <td class="py-4 px-4 font-semibold text-blue-700 bg-blue-50/60">Itemized official state fees vs handling fee</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4 font-semibold text-brand-navy">Turnaround Flexibility</td>
                            <td class="py-4 px-4 text-slate-500">Rigid processing timelines</td>
                            <td class="py-4 px-4 font-semibold text-blue-700 bg-blue-50/60">Fast-track & Standard options available</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4 font-semibold text-brand-navy">Job + Paperwork Alignment</td>
                            <td class="py-4 px-4 text-slate-500">Paperwork only; no school coordination</td>
                            <td class="py-4 px-4 font-semibold text-blue-700 bg-blue-50/60">Full coordination with your hiring school & HR</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="bg-gradient-to-r from-brand-navy to-blue-900 text-white rounded-3xl p-8 sm:p-12 text-center shadow-lg">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Experience personal, stress-free support</h2>
            <p class="text-slate-300 text-xs sm:text-sm mt-2 max-w-lg mx-auto">
                Have a question about your teaching offer, visa, or documents? Talk directly with our specialist today.
            </p>
            <div class="pt-6">
                <a href="{{ url('/v2/your-case') }}" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl text-sm font-bold bg-amber-500 hover:bg-amber-400 text-slate-950 transition">
                    Submit Your Case Details <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
