<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Get Teaching Jobs · Teacher Placement, Visas & Expat Support in Vietnam')</title>
    <meta name="description" content="@yield('meta_description', 'Dedicated expat support for international teachers in Vietnam: job placement, visa services, consular legalization, COE support for Filipino teachers, and relocation assistance.')">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#0B1528',
                            dark: '#0F1D36',
                            slate: '#1E293B',
                            primary: '#1E40AF',
                            accent: '#D97706',
                            emerald: '#059669',
                            warmBg: '#F8FAFC',
                            cardBg: '#FFFFFF',
                            border: '#E2E8F0'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1E293B;
            background-color: #F8FAFC;
        }
        .serif-quote {
            font-family: 'Playfair Display', Georgia, serif;
        }
        .trust-badge-pill {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
    @yield('styles')
</head>
<body class="antialiased selection:bg-amber-100 selection:text-amber-900 flex flex-col min-h-screen">

    <!-- TOP ANNOUNCEMENT BAR -->
    <div class="bg-brand-navy border-b border-white/10 text-slate-300 text-xs py-2 px-4">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span> Nationwide Support
                </span>
                <span>Hanoi &bull; Da Nang &bull; Ho Chi Minh City & All Provinces &bull; Overseas Assistance</span>
            </div>
            <div class="flex items-center gap-4 text-slate-400">
                <a href="mailto:support@getteachingjobs.com" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-regular fa-envelope text-[11px]"></i> support@getteachingjobs.com
                </a>
                <span class="text-white/20">|</span>
                <a href="https://wa.me/84946682798" target="_blank" class="hover:text-emerald-400 text-slate-300 transition flex items-center gap-1 font-medium">
                    <i class="fa-brands fa-whatsapp text-emerald-400"></i> WhatsApp / Zalo Support
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR (With Active Route Highlighting) -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 transition-all">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/v2') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-brand-navy flex items-center justify-center text-amber-400 font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-graduation-cap text-base"></i>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="font-extrabold text-lg text-brand-navy tracking-tight">get<span class="text-blue-700">teachingjobs</span></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest px-1.5 py-0.5 rounded bg-blue-50 text-blue-700 border border-blue-200">Legal & Expat Desk</span>
                    </div>
                    <p class="text-[11px] text-slate-500">Teacher Placement, Visas & Document Support</p>
                </div>
            </a>

            <!-- Navigation Links (Individual Dedicated Pages) -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-medium">
                <a href="{{ url('/v2/services') }}" class="{{ request()->is('v2/services*') ? 'text-blue-700 font-bold' : 'text-slate-600 hover:text-blue-700' }} transition">Services</a>
                <a href="{{ url('/v2/your-case') }}" class="{{ request()->is('v2/your-case*') ? 'text-blue-700 font-bold' : 'text-slate-600 hover:text-blue-700' }} transition">Your Case</a>
                <a href="{{ url('/v2/why-us') }}" class="{{ request()->is('v2/why-us*') ? 'text-blue-700 font-bold' : 'text-slate-600 hover:text-blue-700' }} transition">Why Us</a>
                <a href="{{ url('/v2/useful-guide') }}" class="{{ request()->is('v2/useful-guide*') ? 'text-blue-700 font-bold' : 'text-slate-600 hover:text-blue-700' }} transition">Useful Guide</a>
                <a href="{{ url('/v2/faqs') }}" class="{{ request()->is('v2/faqs*') ? 'text-blue-700 font-bold' : 'text-slate-600 hover:text-blue-700' }} transition">FAQs</a>
            </nav>

            <!-- Header CTA -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/v2/your-case') }}" class="hidden sm:inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-brand-navy hover:bg-blue-900 text-white shadow-sm hover:shadow transition-all duration-200">
                    Request Consultation
                    <i class="fa-solid fa-arrow-right ml-2 text-xs text-amber-400"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN PAGE CONTENT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER (Nationwide Coverage: Hanoi, Da Nang, HCMC & All Provinces) -->
    <footer class="bg-brand-navy text-slate-400 text-xs py-14 border-t border-white/10 mt-auto">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                
                <!-- Col 1: Brand Info -->
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-extrabold text-base text-white tracking-tight">get<span class="text-blue-400">teachingjobs</span></span>
                        <span class="text-[9px] font-bold uppercase tracking-widest px-1 py-0.5 rounded bg-white/10 text-slate-300">Desk</span>
                    </div>
                    <p class="text-[11px] text-slate-400 leading-relaxed">
                        Dedicated teacher placement, visa solutions, and expat documentation support for international educators across Vietnam.
                    </p>
                    <div class="flex items-center gap-3 pt-2 text-slate-300">
                        <a href="#" class="w-7 h-7 rounded-lg bg-white/5 flex items-center justify-center hover:bg-blue-600 transition"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                        <a href="#" class="w-7 h-7 rounded-lg bg-white/5 flex items-center justify-center hover:bg-blue-600 transition"><i class="fa-brands fa-linkedin-in text-xs"></i></a>
                        <a href="https://wa.me/84946682798" target="_blank" class="w-7 h-7 rounded-lg bg-white/5 flex items-center justify-center hover:bg-emerald-600 transition"><i class="fa-brands fa-whatsapp text-xs"></i></a>
                    </div>
                </div>

                <!-- Col 2: Services List -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Our Services</h4>
                    <ul class="space-y-2 text-[11px]">
                        <li><a href="{{ url('/v2/services') }}#job-placement" class="hover:text-white transition">1. Job Placement for Teachers</a></li>
                        <li><a href="{{ url('/v2/services') }}#visa-services" class="hover:text-white transition">2. Vietnam Visa (Evisa, DN1, Working)</a></li>
                        <li><a href="{{ url('/v2/services') }}#legalization" class="hover:text-white transition">3. Apostille & Consular Legalization</a></li>
                        <li><a href="{{ url('/v2/services') }}#coe-support" class="hover:text-white transition">4. COE Support (Filipino Teachers)</a></li>
                        <li><a href="{{ url('/v2/services') }}#work-permit-trc" class="hover:text-white transition">5. Work Permit & TRC Consultation</a></li>
                        <li><a href="{{ url('/v2/services') }}#other-supports" class="hover:text-white transition">6. Housing, Flight & Airport Pick-up</a></li>
                    </ul>
                </div>

                <!-- Col 3: Useful Guide & Practical Resources -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Pages & Guides</h4>
                    <ul class="space-y-2 text-[11px]">
                        <li><a href="{{ url('/v2/services') }}" class="hover:text-white transition">All Services Overview</a></li>
                        <li><a href="{{ url('/v2/your-case') }}" class="hover:text-white transition">Submit Your Case (Consultation)</a></li>
                        <li><a href="{{ url('/v2/why-us') }}" class="hover:text-white transition">Why Teachers Choose Us</a></li>
                        <li><a href="{{ url('/v2/useful-guide') }}" class="hover:text-white transition">Useful 4-Step Guide & Process</a></li>
                        <li><a href="{{ url('/v2/faqs') }}" class="hover:text-white transition">Frequently Asked Questions</a></li>
                    </ul>
                </div>

                <!-- Col 4: Verified Contact & Nationwide Coverage -->
                <div class="space-y-2">
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider mb-3">Nationwide Support</h4>
                    <div class="text-[11px] space-y-1.5">
                        <p><i class="fa-solid fa-location-dot text-amber-400 mr-1.5"></i> <strong>Hanoi &bull; Da Nang &bull; HCMC</strong></p>
                        <p class="text-slate-500 pl-4">Covering all provinces across Vietnam</p>
                        <p><i class="fa-solid fa-phone text-blue-400 mr-1.5"></i> (+84) 946 682 798 (Teacher Desk)</p>
                        <p><i class="fa-regular fa-envelope text-emerald-400 mr-1.5"></i> support@getteachingjobs.com</p>
                        <p><i class="fa-regular fa-clock text-slate-400 mr-1.5"></i> Mon – Fri: 8:30 – 17:30 (GMT+7)</p>
                    </div>
                </div>
            </div>

            <!-- Disclaimer & Copyright -->
            <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-[11px]">
                <p>&copy; 2026 Get Teaching Jobs Desk. All rights reserved.</p>
                <p class="text-slate-500 text-[10px] max-w-md text-center sm:text-right">
                    Disclaimer: We provide recruitment coordination, relocation guidance, and administrative document preparation assistance. For complex litigation, we collaborate with licensed Vietnamese law firms.
                </p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
