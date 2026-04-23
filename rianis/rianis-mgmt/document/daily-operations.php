<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-fixed-dim": "#ffb4a9",
                    "primary-fixed": "#b0f0d6",
                    "inverse-surface": "#2e312f",
                    "on-tertiary-container": "#ea9e93",
                    "surface": "#f8faf6",
                    "tertiary-fixed": "#ffdad5",
                    "secondary-fixed": "#85f8c4",
                    "on-primary": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "surface-dim": "#d8dbd7",
                    "inverse-on-surface": "#eff1ee",
                    "surface-container-highest": "#e1e3e0",
                    "on-tertiary-fixed-variant": "#6e372f",
                    "primary": "#003527",
                    "surface-container-low": "#f2f4f1",
                    "tertiary": "#4f1f19",
                    "surface-bright": "#f8faf6",
                    "error-container": "#ffdad6",
                    "background": "#f8faf6",
                    "primary-fixed-dim": "#95d3ba",
                    "on-primary-container": "#80bea6",
                    "inverse-primary": "#95d3ba",
                    "on-secondary-container": "#00714e",
                    "on-error-container": "#93000a",
                    "error": "#ba1a1a",
                    "outline": "#707974",
                    "tertiary-container": "#6b342d",
                    "secondary-fixed-dim": "#68dba9",
                    "on-primary-fixed": "#002117",
                    "on-surface": "#191c1b",
                    "on-surface-variant": "#404944",
                    "primary-container": "#064e3b",
                    "surface-tint": "#2b6954",
                    "surface-container-high": "#e7e9e5",
                    "on-background": "#191c1b",
                    "secondary": "#006c4a",
                    "on-secondary": "#ffffff",
                    "on-secondary-fixed-variant": "#005137",
                    "outline-variant": "#bfc9c3",
                    "on-tertiary-fixed": "#380d08",
                    "surface-variant": "#e1e3e0",
                    "secondary-container": "#82f5c1",
                    "on-secondary-fixed": "#002114",
                    "on-error": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#eceeeb",
                    "on-primary-fixed-variant": "#0b513d"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "48px",
                    "margin-mobile": "16px",
                    "container-max": "1280px",
                    "stack-sm": "12px",
                    "unit": "8px",
                    "stack-md": "24px",
                    "margin-desktop": "48px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "label-caps": ["Inter"],
                    "h3": ["Inter"],
                    "h2": ["Inter"],
                    "h1": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0", "fontWeight": "700"}],
                    "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 20px -2px rgba(0, 53, 39, 0.05);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- SideNavBar -->
<?php
include '../inc/document-sidebar.php';
?>
<!-- Main Canvas -->
<main class="md:ml-64 min-screen relative">
<!-- TopNavBar -->
<header class="flex justify-between items-center px-8 h-16 w-full sticky top-0 bg-white/80 dark:bg-emerald-950/80 backdrop-blur-xl border-b border-white/20 dark:border-emerald-800/30 shadow-[0_8px_32px_rgba(6,78,59,0.1)] z-40 font-inter text-sm tracking-tight">
<div class="flex items-center gap-8">
<span class="text-lg font-bold text-emerald-900 dark:text-emerald-50 tracking-tighter">Rianis Property Admin</span>
<div class="hidden lg:flex items-center gap-6">
<a class="text-emerald-600 dark:text-emerald-400 font-medium hover:bg-emerald-50/50 dark:hover:bg-emerald-900/50 transition-all cursor-pointer active:scale-95" href="#">Documents</a>
<a class="text-emerald-600 dark:text-emerald-400 font-medium hover:bg-emerald-50/50 dark:hover:bg-emerald-900/50 transition-all cursor-pointer active:scale-95" href="#">Reports</a>
<a class="text-emerald-600 dark:text-emerald-400 font-medium hover:bg-emerald-50/50 dark:hover:bg-emerald-900/50 transition-all cursor-pointer active:scale-95" href="#">Archive</a>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-emerald-50/50 dark:hover:bg-emerald-900/50 text-emerald-900 dark:text-emerald-50 transition-all cursor-pointer active:scale-95">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 rounded-full hover:bg-emerald-50/50 dark:hover:bg-emerald-900/50 text-emerald-900 dark:text-emerald-50 transition-all cursor-pointer active:scale-95">
<span class="material-symbols-outlined">settings</span>
</button>
<img alt="Administrator Profile" class="w-8 h-8 rounded-full border-2 border-amber-400 object-cover" data-alt="professional portrait of a confident male property administrator in a charcoal suit with modern office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJLN4JMyY2h7x1nvHRMHTIKUqnYWjH-KL2W-uhmwyl9SJwrRjTG6EY81qW1cxsL9jsMkkrRwPovPso-__jmV6U_t5g5FOrvmp2XfxxMCzOWrfdlGAP_yNXaNER5u0De21CZ714pyTPhosCikR3gwLwf7hve3Ck3gtaxk6UIpqtWPFY129Wp4_1s5He7up_TsTuexS35XANduCEkvOBrcLj-QfCtyaTsLUUv0aWRnQ91q035UCUWNnVE7_iDt0OuSpXSVRKTlob19ki"/>
</div>
</header>
<!-- Content Content -->
<div class="p-margin-desktop space-y-stack-lg max-w-container-max mx-auto">
<!-- Page Hero / Header -->
<section class="flex flex-col md:flex-row justify-between items-end gap-stack-md">
<div class="space-y-stack-sm">
<span class="font-label-caps text-label-caps text-secondary uppercase">Operational Excellence</span>
<h2 class="font-h2 text-h2 text-primary">Daily Operations Management</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Streamlining the rhythm of high-end property oversight in Onitsha's premium real estate market.</p>
</div>
<div class="flex gap-3">
<button class="px-6 py-3 rounded-xl bg-surface-container-high text-primary font-bold hover:bg-surface-container-highest transition-colors flex items-center gap-2">
<span class="material-symbols-outlined">download</span> Export Report
                    </button>
<button class="px-6 py-3 rounded-xl bg-primary text-white font-bold hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center gap-2">
<span class="material-symbols-outlined">sync</span> Refresh Data
                    </button>
</div>
</section>
<!-- Grid: Operations Bento -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- 1. Property Inspection Routine -->
<div class="lg:col-span-4 space-y-gutter">
<div class="glass-card rounded-xl p-stack-md h-full">
<div class="flex items-center justify-between mb-stack-md">
<h3 class="font-h3 text-h3 text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">fact_check</span>
                                Inspections
                            </h3>
<span class="bg-primary-fixed text-on-primary-fixed text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-tighter">Live Tracker</span>
</div>
<div class="space-y-6">
<!-- Category: Daily -->
<div>
<h4 class="font-label-caps text-label-caps text-on-surface-variant mb-3 uppercase">Daily Routine</h4>
<div class="space-y-2">
<label class="flex items-center gap-3 p-3 bg-white/50 rounded-lg border border-outline-variant hover:border-secondary transition-colors cursor-pointer group">
<input checked="" class="rounded text-secondary focus:ring-secondary" type="checkbox"/>
<span class="font-medium text-on-surface group-hover:text-secondary">Perimeter Security Check</span>
</label>
<label class="flex items-center gap-3 p-3 bg-white/50 rounded-lg border border-outline-variant hover:border-secondary transition-colors cursor-pointer group">
<input class="rounded text-secondary focus:ring-secondary" type="checkbox"/>
<span class="font-medium text-on-surface group-hover:text-secondary">Lobby &amp; Common Area Sanitize</span>
</label>
</div>
</div>
<!-- Category: Weekly -->
<div>
<h4 class="font-label-caps text-label-caps text-on-surface-variant mb-3 uppercase">Weekly Deep-Dive</h4>
<div class="space-y-2">
<label class="flex items-center gap-3 p-3 bg-white/50 rounded-lg border border-outline-variant hover:border-secondary transition-colors cursor-pointer group">
<input checked="" class="rounded text-secondary focus:ring-secondary" type="checkbox"/>
<span class="font-medium text-on-surface group-hover:text-secondary">Elevator Safety Testing</span>
</label>
<label class="flex items-center gap-3 p-3 bg-white/50 rounded-lg border border-outline-variant hover:border-secondary transition-colors cursor-pointer group">
<input class="rounded text-secondary focus:ring-secondary" type="checkbox"/>
<span class="font-medium text-on-surface group-hover:text-secondary">Generator Fuel &amp; Load Audit</span>
</label>
</div>
</div>
<!-- Category: Monthly -->
<div>
<h4 class="font-label-caps text-label-caps text-on-surface-variant mb-3 uppercase">Monthly Compliance</h4>
<div class="space-y-2">
<label class="flex items-center gap-3 p-3 bg-white/50 rounded-lg border border-outline-variant hover:border-secondary transition-colors cursor-pointer group">
<input class="rounded text-secondary focus:ring-secondary" type="checkbox"/>
<span class="font-medium text-on-surface group-hover:text-secondary">HVAC System Maintenance</span>
</label>
</div>
</div>
</div>
</div>
</div>
<!-- 2. Tenant Management & Financial Cards -->
<div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Tenant Management Sub-section -->
<div class="md:col-span-2 glass-card rounded-xl p-stack-md">
<div class="flex items-center justify-between mb-stack-md">
<h3 class="font-h3 text-h3 text-primary">Tenant Management</h3>
<div class="flex gap-2">
<span class="bg-secondary-container text-on-secondary-container text-xs font-bold px-3 py-1 rounded-full">14 Active Requests</span>
</div>
</div>
<!-- Mini Tabs / Sub-sections -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-stack-md">
<div class="space-y-3">
<h4 class="font-label-caps text-label-caps text-on-surface-variant uppercase border-b border-outline-variant pb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">payments</span> Rent Tracking
                                </h4>
<div class="space-y-2">
<div class="flex justify-between items-center text-sm p-2 bg-white/40 rounded">
<span class="font-semibold">Unit 402</span>
<span class="text-secondary font-bold">Paid</span>
</div>
<div class="flex justify-between items-center text-sm p-2 bg-white/40 rounded">
<span class="font-semibold">Penthouse B</span>
<span class="text-amber-600 font-bold">Pending</span>
</div>
</div>
</div>
<div class="space-y-3">
<h4 class="font-label-caps text-label-caps text-on-surface-variant uppercase border-b border-outline-variant pb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">chat_bubble</span> Complaint Handling
                                </h4>
<div class="bg-secondary-fixed-dim/20 p-3 rounded-lg border border-secondary/20">
<p class="text-xs font-bold text-secondary mb-1">Active Ticket #882</p>
<p class="text-sm font-medium">A/C Failure in East Wing</p>
<div class="mt-2 h-1.5 w-full bg-outline-variant rounded-full overflow-hidden">
<div class="h-full bg-secondary w-2/3"></div>
</div>
</div>
</div>
<div class="space-y-3">
<h4 class="font-label-caps text-label-caps text-on-surface-variant uppercase border-b border-outline-variant pb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">assignment_ind</span> Onboarding
                                </h4>
<div class="space-y-2">
<button class="w-full text-left text-xs p-2 hover:bg-emerald-50 rounded border border-dashed border-emerald-300 text-secondary font-bold">
                                        + Initiate Offboarding
                                    </button>
<button class="w-full text-left text-xs p-2 hover:bg-emerald-50 rounded border border-dashed border-emerald-300 text-secondary font-bold">
                                        + Key Handover Protocol
                                    </button>
</div>
</div>
</div>
</div>
<!-- 4. Financial Operations -->
<div class="glass-card rounded-xl p-stack-md">
<div class="flex items-center gap-3 mb-6">
<div class="w-12 h-12 bg-secondary-container rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-2xl" data-weight="fill">account_balance_wallet</span>
</div>
<div>
<p class="font-label-caps text-label-caps text-on-surface-variant uppercase">Rent Collection</p>
<p class="text-xl font-black text-primary">₦4.2M <span class="text-xs font-normal text-on-surface-variant">/ May</span></p>
</div>
</div>
<div class="flex items-end justify-between">
<div class="space-y-1">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-secondary"></div>
<span class="text-xs font-medium">88% Collected</span>
</div>
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-amber-400"></div>
<span class="text-xs font-medium">12% Outstanding</span>
</div>
</div>
<button class="text-secondary font-bold text-sm hover:underline">View Ledger</button>
</div>
</div>
<div class="glass-card rounded-xl p-stack-md">
<div class="flex items-center gap-3 mb-6">
<div class="w-12 h-12 bg-tertiary-container/10 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-tertiary text-2xl">trending_down</span>
</div>
<div>
<p class="font-label-caps text-label-caps text-on-surface-variant uppercase">Expense Tracking</p>
<p class="text-xl font-black text-primary">₦842k <span class="text-xs font-normal text-on-surface-variant">/ May</span></p>
</div>
</div>
<div class="w-full bg-surface-container-highest h-2 rounded-full mb-4">
<div class="bg-tertiary-container h-full rounded-full w-[65%]"></div>
</div>
<p class="text-xs text-on-surface-variant font-medium">65% of monthly maintenance budget used.</p>
</div>
</div>
</div>
<!-- 3. Maintenance Workflow Table -->
<section class="glass-card rounded-xl overflow-hidden">
<div class="p-stack-md border-b border-outline-variant flex justify-between items-center">
<h3 class="font-h3 text-h3 text-primary">Maintenance Workflow</h3>
<div class="flex gap-2">
<span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-xs font-bold border border-outline-variant">Filter: All Properties</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-emerald-50/50">
<tr>
<th class="p-4 font-label-caps text-label-caps text-on-surface-variant uppercase">Issue Detail</th>
<th class="p-4 font-label-caps text-label-caps text-on-surface-variant uppercase">Property / Unit</th>
<th class="p-4 font-label-caps text-label-caps text-on-surface-variant uppercase">Assigned Vendor</th>
<th class="p-4 font-label-caps text-label-caps text-on-surface-variant uppercase">Status</th>
<th class="p-4 font-label-caps text-label-caps text-on-surface-variant uppercase">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<tr class="hover:bg-emerald-50/30 transition-colors">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-amber-100 flex items-center justify-center text-amber-700">
<span class="material-symbols-outlined text-sm">plumbing</span>
</div>
<span class="font-semibold text-primary">Master Bath Leakage</span>
</div>
</td>
<td class="p-4 text-on-surface-variant">Rianis Heights, Unit 12</td>
<td class="p-4 font-medium">QuickFix Plumbers Ltd.</td>
<td class="p-4">
<span class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-xs font-bold">Ongoing</span>
</td>
<td class="p-4">
<button class="text-secondary hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-emerald-50/30 transition-colors">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-emerald-100 flex items-center justify-center text-emerald-700">
<span class="material-symbols-outlined text-sm">bolt</span>
</div>
<span class="font-semibold text-primary">External Lighting Fault</span>
</div>
</td>
<td class="p-4 text-on-surface-variant">Zik Avenue Plaza</td>
<td class="p-4 font-medium">Spark Solutions</td>
<td class="p-4">
<span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-bold">Completed</span>
</td>
<td class="p-4">
<button class="text-secondary hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-emerald-50/30 transition-colors">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-tertiary-container/10 flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-sm">pest_control</span>
</div>
<span class="font-semibold text-primary">Annual Pest Control</span>
</div>
</td>
<td class="p-4 text-on-surface-variant">Riverside Villas</td>
<td class="p-4 font-medium">CleanState Services</td>
<td class="p-4">
<span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-xs font-bold">Pending</span>
</td>
<td class="p-4">
<button class="text-secondary hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- 5. Communication Protocol -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<div class="md:col-span-4 rounded-xl overflow-hidden relative min-h-[300px] shadow-lg">
<img alt="modern office boardroom" class="absolute inset-0 w-full h-full object-cover" data-alt="ultra-modern glass boardroom with emerald velvet chairs and view of a high-end cityscape at night" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3e6CfXkq5lGB7kquiYCuzWTbYc_Rzgm5VMDW5HSyPbcddNSPqZmPjcrGaHdwAawcDrEDtBpFDn39Z7LqR_ZgWyRVnq7giLE7t97P3VhcTVyr8WRzlFVP3A0j-D85BgFSvGWAsKgSxRqLksYMSQcBViYj3S2SFyuXR89cyGdKClY1blEPtCEUdtI8rg-hQLRS-Ua_2dapNVeNJD1Csk_zwkKLK2754gQiU8IErcr6Faw6AXSmatEOwtXzpwc5Vfwm-7msKOGZpb-R9"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent p-stack-md flex flex-col justify-end">
<h4 class="text-white font-bold text-xl mb-2">Emergency Hub</h4>
<p class="text-emerald-100 text-sm">Instant access to Onitsha emergency services and elite vendor priority lines.</p>
</div>
</div>
<div class="md:col-span-8 glass-card rounded-xl p-stack-md">
<h3 class="font-h3 text-h3 text-primary mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-error">emergency</span>
                        Communication Protocol: Emergency Handling
                    </h3>
<div class="space-y-6">
<div class="flex gap-4 group">
<div class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">1</div>
<div class="space-y-1">
<h5 class="font-bold text-primary">Verify &amp; Contain</h5>
<p class="text-sm text-on-surface-variant">Immediate site assessment by resident security. Isolate the affected zone within 120 seconds.</p>
</div>
</div>
<div class="flex gap-4 group">
<div class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">2</div>
<div class="space-y-1">
<h5 class="font-bold text-primary">Tier 1 Notification</h5>
<p class="text-sm text-on-surface-variant">Automated broadcast to affected floor tenants via Rianis Tenant App and SMS.</p>
</div>
</div>
<div class="flex gap-4 group">
<div class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">3</div>
<div class="space-y-1">
<h5 class="font-bold text-primary">Dispatch Dispatch</h5>
<p class="text-sm text-on-surface-variant">Engage Gold-tier maintenance vendor. Target arrival: 45 minutes for critical failure.</p>
</div>
</div>
<div class="flex gap-4 group">
<div class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">4</div>
<div class="space-y-1">
<h5 class="font-bold text-primary">Incident Report</h5>
<p class="text-sm text-on-surface-variant">Post-resolution documentation including root cause analysis and financial impact for Board Review.</p>
</div>
</div>
</div>
<div class="mt-8 p-4 bg-emerald-50 border border-secondary/20 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary">support_agent</span>
<span class="font-bold text-primary">Director Priority Line</span>
</div>
<span class="font-black text-secondary">+234 80 RIANIS 00</span>
</div>
</div>
</section>
</div>
<!-- Footer Visual (Optional for canvas depth) -->
<footer class="mt-stack-lg border-t border-outline-variant p-8 text-center text-on-surface-variant opacity-60">
<p class="text-xs font-label-caps uppercase tracking-widest">© 2024 Rianis Property Group • Proprietary Operations Portal</p>
</footer>
</main>
</body></html>