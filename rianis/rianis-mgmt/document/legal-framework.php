<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 24px -1px rgba(6, 78, 59, 0.05);
        }
        .sidebar-item-active {
            background: rgba(6, 78, 59, 0.5);
            color: #fbbf24; /* amber-400 equivalent */
            border-left: 4px solid #f59e0b; /* amber-500 */
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- Sidebar Navigation Shell -->
<?php
include '../inc/document-sidebar.php';
?>
<!-- Main Canvas -->
<main class="md:ml-64 min-h-screen">
<!-- Top Navigation Bar Shell -->
<header class="bg-white/80 dark:bg-emerald-950/80 backdrop-blur-xl flex justify-between items-center px-8 h-16 w-full sticky top-0 border-b border-white/20 dark:border-emerald-800/30 shadow-[0_8px_32px_rgba(6,78,59,0.1)] z-40">
<div class="flex items-center gap-8">
<span class="text-lg font-bold text-emerald-900 tracking-tighter">Rianis Property Admin</span>
<nav class="hidden lg:flex items-center gap-6 font-inter text-sm tracking-tight">
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Documents</a>
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Reports</a>
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Archive</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600 text-lg">search</span>
<input class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-sm focus:ring-2 focus:ring-emerald-500 w-64" placeholder="Search laws or codes..." type="text"/>
</div>
<span class="material-symbols-outlined text-emerald-900 cursor-pointer p-2 hover:bg-emerald-50/50 rounded-full transition-all" data-icon="notifications">notifications</span>
<span class="material-symbols-outlined text-emerald-900 cursor-pointer p-2 hover:bg-emerald-50/50 rounded-full transition-all" data-icon="settings">settings</span>
<div class="w-8 h-8 rounded-full bg-emerald-100 overflow-hidden border border-emerald-200">
<img alt="Administrator Profile" class="w-full h-full object-cover" data-alt="professional portrait of a confident african male property executive in a crisp white shirt with soft office background lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVR59YrXaatc5jr-321bTITBYJ3W5QmZQ35UB08IRGfHYrjsevbbPs1akB5SAphfxf0eWSVjZWYhmZxsd-Hf05WdHGLnDDbh_lqKlxOy26ByUzj_I4bBvMb1l8Mnu0u_v-_Oa0u1UU-D5egFW0PJBFhLUxXcS2G6x6wkxKr9ReTrGwvOMgVHOYqHQboT_CiH1N6-uqKg6yZN_R_YjHX0BCtPK5QaFT3_GLUKzc02mxMo2NVripxTnju709USfzEkR2-bA-eUIHxDeq"/>
</div>
</div>
</header>
<!-- Content Section -->
<div class="px-8 py-10 max-w-container-max mx-auto space-y-stack-lg">
<!-- Header Section -->
<section class="space-y-stack-sm">
<div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-100 text-amber-900 rounded-full">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="font-label-caps text-label-caps">Compliance Hub 2024</span>
</div>
<h1 class="font-h1 text-h1 text-primary tracking-tight">Legal Framework <br/>&amp; Property Laws</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">Comprehensive administrative guide for property management within Onitsha, Anambra State. Navigate local regulations, land titles, and tenancy mandates with elite precision.</p>
</section>
<!-- Disclaimer Box -->
<div class="bg-error-container/40 border border-error/20 p-6 rounded-2xl flex gap-4 items-start">
<span class="material-symbols-outlined text-error text-2xl">info</span>
<div>
<p class="font-h3 text-body-md font-bold text-on-error-container">Disclaimer: Not Legal Advice</p>
<p class="text-on-error-container text-sm mt-1">This documentation serves as an internal operational guide for Rianis Property staff. It does not constitute formal legal counsel. For specific litigation or complex acquisitions, consult with the company's retained legal department in Awka or Onitsha.</p>
</div>
</div>
<!-- Accordion Grid / Content -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Main Accordion List -->
<div class="lg:col-span-8 space-y-4">
<!-- Section 1: Tenancy Agreements -->
<div class="glass-card rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-emerald-50/30">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center">
<span class="material-symbols-outlined">description</span>
</div>
<div>
<h3 class="font-h3 text-h3">1. Tenancy Agreements</h3>
<p class="text-on-surface-variant text-sm">Overview of contractual structures</p>
</div>
</div>
<span class="material-symbols-outlined text-emerald-900 transition-transform group-focus:rotate-180">expand_more</span>
</button>
<div class="px-6 pb-6 pt-2 border-t border-emerald-50/50">
<div class="prose prose-emerald max-w-none text-on-surface-variant space-y-4">
<p>Standard Rianis agreements must include fixed terms for duration, maintenance covenants, and clear utility settlement protocols. Agreements exceeding 3 years must be executed as a Deed of Lease under Anambra State Law.</p>
<ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
<li class="flex items-center gap-2 p-3 bg-surface-container-low rounded-xl">
<span class="material-symbols-outlined text-emerald-700 text-sm">check_circle</span>
<span class="text-sm font-medium">Fixed-term provision</span>
</li>
<li class="flex items-center gap-2 p-3 bg-surface-container-low rounded-xl">
<span class="material-symbols-outlined text-emerald-700 text-sm">check_circle</span>
<span class="text-sm font-medium">Repair responsibilities</span>
</li>
</ul>
</div>
</div>
</div>
<!-- Section 2: Rent Laws & Payment -->
<div class="glass-card rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-emerald-50/30">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center">
<span class="material-symbols-outlined">payments</span>
</div>
<div>
<h3 class="font-h3 text-h3">2. Rent Laws &amp; Payment Structure</h3>
<p class="text-on-surface-variant text-sm">Onitsha-specific fiscal compliance</p>
</div>
</div>
<span class="material-symbols-outlined text-emerald-900">expand_more</span>
</button>
</div>
<!-- Section 3: Eviction Rules -->
<div class="glass-card rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-emerald-50/30">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center">
<span class="material-symbols-outlined">balance</span>
</div>
<div>
<h3 class="font-h3 text-h3">3. Eviction Rules &amp; Legal Process</h3>
<p class="text-on-surface-variant text-sm">Step-by-step recovery of premises</p>
</div>
</div>
<span class="material-symbols-outlined text-emerald-900">expand_more</span>
</button>
</div>
<!-- Section 4: Landlord/Tenant Rights -->
<div class="glass-card rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-emerald-50/30">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center">
<span class="material-symbols-outlined">group</span>
</div>
<div>
<h3 class="font-h3 text-h3">4. Landlord &amp; Tenant Rights</h3>
<p class="text-on-surface-variant text-sm">Mutual responsibilities &amp; ethical conduct</p>
</div>
</div>
<span class="material-symbols-outlined text-emerald-900">expand_more</span>
</button>
</div>
<!-- Section 5: Property Documentation -->
<div class="glass-card rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-emerald-50/30">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center">
<span class="material-symbols-outlined">article</span>
</div>
<div>
<h3 class="font-h3 text-h3">5. Property Documentation Requirements</h3>
<p class="text-on-surface-variant text-sm">C of O, Survey Plans, and Deeds</p>
</div>
</div>
<span class="material-symbols-outlined text-emerald-900">expand_more</span>
</button>
</div>
<!-- Section 6: Onitsha Market Practices -->
<div class="glass-card border-amber-200 bg-amber-50/30 rounded-2xl overflow-hidden group">
<button class="w-full px-6 py-5 flex items-center justify-between text-left transition-all hover:bg-amber-100/50">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center">
<span class="material-symbols-outlined">storefront</span>
</div>
<div>
<h3 class="font-h3 text-h3">6. Onitsha Market Practices</h3>
<p class="text-amber-800 text-sm">Local insights &amp; commercial customs</p>
</div>
</div>
<span class="material-symbols-outlined text-amber-900">expand_more</span>
</button>
</div>
</div>
<!-- Right Side Widgets -->
<div class="lg:col-span-4 space-y-6">
<!-- Quick Links Card -->
<div class="glass-card rounded-2xl p-6">
<h4 class="font-h3 text-body-md font-bold mb-4">Regulatory Bodies</h4>
<div class="space-y-3">
<a class="flex items-center justify-between p-3 bg-surface-container-low rounded-xl hover:bg-emerald-50 transition-colors" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-emerald-900 text-lg">account_balance</span>
<span class="text-sm font-semibold">Anambra State Min. of Lands</span>
</div>
<span class="material-symbols-outlined text-xs">open_in_new</span>
</a>
<a class="flex items-center justify-between p-3 bg-surface-container-low rounded-xl hover:bg-emerald-50 transition-colors" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-emerald-900 text-lg">gavel</span>
<span class="text-sm font-semibold">High Court of Anambra</span>
</div>
<span class="material-symbols-outlined text-xs">open_in_new</span>
</a>
</div>
</div>
<!-- Market Insight Map Mini -->
<div class="glass-card rounded-2xl p-6">
<h4 class="font-h3 text-body-md font-bold mb-4">Zonal Coverage</h4>
<div class="aspect-square rounded-xl overflow-hidden bg-emerald-100 relative group cursor-pointer">
<img alt="Onitsha Map Area" class="w-full h-full object-cover" data-alt="abstract satellite view of a bustling riverfront city with dense urban structure and bridges over water in soft cinematic lighting" data-location="Onitsha" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChQSfitYAjVlo7J61wRc3bKF4bpwlvSclKEOuKDeonbvVVGcb_dzn6KoyGJdAoJYatrUKM_VMuM1aKQdd7O8de2DH42mKC-BWcAQqacth5UXTxJlEDW4tYi38m1ftYHkaMbCss6u3kCszi2GP1UhP56dwA93upNDwiA9JzruN3yPjhoj8cj2QVP8SfZnXPdXp6TPynV9RkQwZSAd2LcAxIBU7u6FgBX3C35H32wgaevpUYjAKxwZCKwOtvYTaWrZl_IgXin9khArwV"/>
<div class="absolute inset-0 bg-emerald-900/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="bg-white text-emerald-900 px-4 py-2 rounded-full font-bold text-sm">View Law Zones</span>
</div>
</div>
</div>
<!-- Help Support -->
<div class="bg-emerald-900 rounded-2xl p-6 text-white text-center">
<span class="material-symbols-outlined text-amber-400 text-4xl mb-4" data-weight="fill">support_agent</span>
<h4 class="font-h3 text-body-md font-bold mb-2">Legal Support Desk</h4>
<p class="text-emerald-100/70 text-sm mb-4">Have a complex legal query regarding a property in Onitsha?</p>
<button class="w-full bg-white text-emerald-900 font-bold py-3 rounded-xl hover:bg-emerald-50 transition-colors active:scale-95">Contact Legal Team</button>
</div>
</div>
</div>
</div>
</main>
<!-- Bottom Navigation for Mobile -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-md border-t border-emerald-100 flex justify-around items-center py-3 z-50 px-4">
<div class="flex flex-col items-center gap-1 text-emerald-600">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="text-[10px] font-bold">Home</span>
</div>
<div class="flex flex-col items-center gap-1 text-emerald-600">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span class="text-[10px] font-bold">Ops</span>
</div>
<div class="flex flex-col items-center gap-1 text-amber-600">
<span class="material-symbols-outlined" data-icon="gavel" style="font-variation-settings: 'FILL' 1;">gavel</span>
<span class="text-[10px] font-bold">Legal</span>
</div>
<div class="flex flex-col items-center gap-1 text-emerald-600">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="text-[10px] font-bold">Settings</span>
</div>
</nav>
</body></html>