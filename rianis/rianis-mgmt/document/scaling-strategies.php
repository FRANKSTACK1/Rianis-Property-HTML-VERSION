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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface overflow-x-hidden">
<!-- SideNavBar (Shared Component) -->
<?php
include '../inc/document-sidebar.php';
?>
<!-- Main Content Canvas -->
<main class="md:ml-64 min-h-screen relative">
<!-- TopNavBar (Shared Component) -->
<header class="bg-white/80 backdrop-blur-xl flex justify-between items-center px-8 h-16 w-full sticky top-0 z-40 border-b border-white/20 shadow-[0_8px_32px_rgba(6,78,59,0.1)]">
<div class="flex items-center gap-12">
<div class="text-lg font-bold text-emerald-900 tracking-tighter">Rianis Property Admin</div>
<nav class="hidden lg:flex items-center gap-8 font-inter text-sm tracking-tight">
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Documents</a>
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Reports</a>
<a class="text-emerald-600 font-medium hover:text-emerald-900 transition-all" href="#">Archive</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="relative cursor-pointer">
<span class="material-symbols-outlined text-emerald-900" data-icon="notifications">notifications</span>
<span class="absolute top-0 right-0 w-2 h-2 bg-amber-500 rounded-full"></span>
</div>
<span class="material-symbols-outlined text-emerald-900 cursor-pointer" data-icon="settings">settings</span>
<div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center overflow-hidden border-2 border-white shadow-sm">
<img alt="Administrator Profile" data-alt="professional portrait of an executive male in his 40s with sharp features and warm professional lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACewxrUkTJph9rSSytn6ir6HIfNLWYjrQH_L0I-sUahfHfJ7vVWJBx5AYwOQmYjZYcPrIdunJTwJCcnv5qhqyDapEEAZKCNxorJ0bV4JIbSCqo6RH3tv-hIcp6xCS3YFF_FUhf9o03f6k26fCUiICDPWxS_cBGM95znDkVDF8RfO-X04STqLsKdZSUmBcmZTYz5VOVQcQeFc1zJ5hwe7JKLtObAgcK4rg6jpeTo_SOO2FKU-ESx9m6qEakslwx02T0Jv6V0YqlRQEw"/>
</div>
</div>
</header>
<div class="p-8 max-w-container-max mx-auto space-y-stack-lg">
<!-- Page Header -->
<section>
<div class="flex items-center gap-2 mb-2">
<span class="text-emerald-900 font-label-caps text-label-caps bg-emerald-50 px-2 py-1 rounded">INTERNAL RESOURCE</span>
<span class="text-outline text-xs">•</span>
<span class="text-outline text-xs">Updated 2 days ago</span>
</div>
<h1 class="font-h1 text-h1 text-primary tracking-tight">Scaling Strategies Hub</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-4 max-w-2xl">
                    Comprehensive playbook for market expansion in Onitsha. Levering automation and architectural prestige to maximize stakeholder ROI.
                </p>
</section>
<!-- 1. Growth Strategy (Bento/Visual Cards) -->
<section class="space-y-stack-sm">
<h2 class="font-h2 text-h2 text-primary flex items-center gap-3">
<span class="material-symbols-outlined text-amber-500" data-icon="rocket_launch">rocket_launch</span>
                    Growth Strategy
                </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<div class="glass-card rounded-xl p-8 shadow-sm flex flex-col justify-between min-h-[300px] border border-outline-variant/30 overflow-hidden relative group">
<div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity">
<img class="w-full h-full object-cover" data-alt="modern glass architectural skyscraper reaching towards a clear blue sky with golden sunlight reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAes_Wswnp3XakLQKK-QESHrBk-cPKGnvzTQDfwqc1qirVKngpG-j3Xpp-79uSyvXXuHH_QCclEgq4tyxIYHpSppKmKcbvoe9NBvfuQx5u3txY7A4X146itZnW4icx93aipi62RxCTl2vA_6UBPq88_F1--D4vCKpyReEBxt_SbTuTYY1itChoptARUD_NF9AfUOK3vSLY2WY8qkj-7ZOOmcKagyZ56HiQLy5aTw5iPwTLlk0O3HLCZ9a9UgoCyEEyBno40QLO0FXqm"/>
</div>
<div class="relative z-10">
<span class="bg-primary text-white font-label-caps text-[10px] px-2 py-1 rounded mb-4 inline-block">STRATEGY 01</span>
<h3 class="font-h3 text-h3 text-primary mb-2">Portfolio Expansion</h3>
<p class="text-on-surface-variant">Targeting emerging residential districts with premium 5-unit developments and vertical density optimization.</p>
</div>
<div class="relative z-10 pt-4 flex gap-4">
<div class="text-center">
<div class="text-amber-600 font-bold text-xl">12%</div>
<div class="text-[10px] font-label-caps text-outline">Q3 TARGET</div>
</div>
<div class="text-center border-l border-outline-variant/30 pl-4">
<div class="text-emerald-900 font-bold text-xl">Onitsha North</div>
<div class="text-[10px] font-label-caps text-outline">PRIMARY ZONE</div>
</div>
</div>
</div>
<div class="glass-card rounded-xl p-8 shadow-sm flex flex-col justify-between min-h-[300px] border border-outline-variant/30 overflow-hidden relative group">
<div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity">
<img class="w-full h-full object-cover" data-alt="two professionals in suits shaking hands in a high-end bright corporate office with glass walls" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDe_SjtOIqQzVZ-eUp0E11bYzyGRf3xOWLGO7WSGA43h5J5efLHK-Y-2gnJy4CXoovagT9V7HTSrfVOi0DC0kpgKX6YdEmSc9-L4POkA46ZbIRbXewjbi4w6D_wGZUsr8dsqnnw0wOAxlLxsYHWTNTdtzhD8M29vp5TCiVaa9eaSePWjkdnb2lxibC8sO-AK0WTMeHNI5LENY_Zmfz6hv-W7UcxcP74W18Wp93jXpxnireDBIDDc8iDa0PhmvVT0c2H0ToMZ6iAVlUr"/>
</div>
<div class="relative z-10">
<span class="bg-primary text-white font-label-caps text-[10px] px-2 py-1 rounded mb-4 inline-block">STRATEGY 02</span>
<h3 class="font-h3 text-h3 text-primary mb-2">Partnership Models</h3>
<p class="text-on-surface-variant">Joint venture frameworks with local landholders to minimize capital expenditure while securing prime locations.</p>
</div>
<ul class="relative z-10 space-y-2 mt-4">
<li class="flex items-center gap-2 text-sm text-on-surface">
<span class="material-symbols-outlined text-amber-500 text-sm" data-icon="check_circle">check_circle</span>
                                Equity-Sharing Legal Templates
                            </li>
<li class="flex items-center gap-2 text-sm text-on-surface">
<span class="material-symbols-outlined text-amber-500 text-sm" data-icon="check_circle">check_circle</span>
                                High-Yield Revenue Splits
                            </li>
</ul>
</div>
</div>
</section>
<!-- 2. Automation (Tech Stack List) -->
<section class="space-y-stack-sm">
<h2 class="font-h2 text-h2 text-primary">Automation Stack</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<div class="bg-surface-container rounded-xl p-6 border border-outline-variant/30 hover:border-amber-400 transition-colors">
<div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4 shadow-sm">
<span class="material-symbols-outlined text-emerald-900" data-icon="payments">payments</span>
</div>
<h4 class="font-bold text-lg text-emerald-950 mb-1">Rent Reminders</h4>
<p class="text-sm text-on-surface-variant mb-4">Automated WhatsApp &amp; Email dispatching 5 days prior to due date.</p>
<div class="flex items-center justify-between text-xs font-bold text-emerald-700">
<span>API INTEGRATED</span>
<span class="bg-emerald-100 px-2 py-1 rounded-full">98% Success</span>
</div>
</div>
<div class="bg-surface-container rounded-xl p-6 border border-outline-variant/30 hover:border-amber-400 transition-colors">
<div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4 shadow-sm">
<span class="material-symbols-outlined text-emerald-900" data-icon="build_circle">build_circle</span>
</div>
<h4 class="font-bold text-lg text-emerald-950 mb-1">Maintenance Tracking</h4>
<p class="text-sm text-on-surface-variant mb-4">Vendor ticket system with priority routing and SLA monitoring.</p>
<div class="flex items-center justify-between text-xs font-bold text-emerald-700">
<span>WEB APP READY</span>
<span class="bg-emerald-100 px-2 py-1 rounded-full">v4.2.0</span>
</div>
</div>
<div class="bg-surface-container rounded-xl p-6 border border-outline-variant/30 hover:border-amber-400 transition-colors">
<div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4 shadow-sm">
<span class="material-symbols-outlined text-emerald-900" data-icon="groups">groups</span>
</div>
<h4 class="font-bold text-lg text-emerald-950 mb-1">CRM Integration</h4>
<p class="text-sm text-on-surface-variant mb-4">Unified lead tracking from PropertyPro and local referrals.</p>
<div class="flex items-center justify-between text-xs font-bold text-emerald-700">
<span>HUBSPOT LINKED</span>
<span class="bg-amber-100 px-2 py-1 rounded-full text-amber-800">Pending Sync</span>
</div>
</div>
</div>
</section>
<!-- 3. Revenue Optimization (Grid Comparison) -->
<section class="space-y-stack-sm bg-primary-container p-8 rounded-2xl text-on-primary">
<div class="flex justify-between items-end mb-6">
<div>
<h2 class="font-h2 text-h2 text-white">Revenue Optimization</h2>
<p class="text-primary-fixed-dim">Comparative Yield Analysis: 2024 Market Forecast</p>
</div>
<button class="bg-amber-400 text-emerald-950 px-6 py-2 rounded-full font-bold text-sm">Download Full PDF</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="bg-white/5 border border-white/10 rounded-xl p-6">
<div class="flex justify-between items-center mb-4">
<h4 class="text-amber-400 font-bold uppercase tracking-widest text-xs">Short-let Analysis</h4>
<span class="text-xs text-white/50">High Volatility</span>
</div>
<div class="space-y-4">
<div class="flex justify-between border-b border-white/5 pb-2">
<span class="text-white/70">Avg. Daily Rate</span>
<span class="font-bold">₦45,000</span>
</div>
<div class="flex justify-between border-b border-white/5 pb-2">
<span class="text-white/70">Monthly Occ.</span>
<span class="font-bold text-emerald-400">65%</span>
</div>
<div class="flex justify-between">
<span class="text-white/70">Annual ROI Est.</span>
<span class="font-bold text-amber-400 text-lg">22.4%</span>
</div>
</div>
</div>
<div class="bg-white/5 border border-white/10 rounded-xl p-6">
<div class="flex justify-between items-center mb-4">
<h4 class="text-amber-400 font-bold uppercase tracking-widest text-xs">Long-term Analysis</h4>
<span class="text-xs text-white/50">High Stability</span>
</div>
<div class="space-y-4">
<div class="flex justify-between border-b border-white/5 pb-2">
<span class="text-white/70">Avg. Annual Rent</span>
<span class="font-bold">₦3,200,000</span>
</div>
<div class="flex justify-between border-b border-white/5 pb-2">
<span class="text-white/70">Collection Rate</span>
<span class="font-bold text-emerald-400">96%</span>
</div>
<div class="flex justify-between">
<span class="text-white/70">Annual ROI Est.</span>
<span class="font-bold text-amber-400 text-lg">11.8%</span>
</div>
</div>
</div>
</div>
</section>
<!-- 4. Marketing (Strategy Blocks) -->
<section class="space-y-stack-sm">
<h2 class="font-h2 text-h2 text-primary">Marketing Channels</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="p-6 border-l-4 border-emerald-900 bg-white shadow-sm flex flex-col items-start gap-4">
<span class="material-symbols-outlined text-primary" data-icon="share">share</span>
<h4 class="font-bold text-primary">Social Media</h4>
<p class="text-sm text-on-surface-variant">Instagram &amp; TikTok walkthroughs featuring "Luxury in Onitsha" cinematic edits.</p>
<span class="text-[10px] font-label-caps text-outline bg-surface px-2 py-1">24k Reach / Mo</span>
</div>
<div class="p-6 border-l-4 border-amber-500 bg-white shadow-sm flex flex-col items-start gap-4">
<span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
<h4 class="font-bold text-primary">Local Outreach</h4>
<p class="text-sm text-on-surface-variant">Direct billboards at Upper Iweka and partnership with premium car dealerships.</p>
<span class="text-[10px] font-label-caps text-outline bg-surface px-2 py-1">Direct Market Penetration</span>
</div>
<div class="p-6 border-l-4 border-emerald-900 bg-white shadow-sm flex flex-col items-start gap-4">
<span class="material-symbols-outlined text-primary" data-icon="card_giftcard">card_giftcard</span>
<h4 class="font-bold text-primary">Referral Systems</h4>
<p class="text-sm text-on-surface-variant">Tiered cash rewards for existing tenants who refer high-intent qualified leads.</p>
<span class="text-[10px] font-label-caps text-outline bg-surface px-2 py-1">7% Conversion Rate</span>
</div>
</div>
</section>
<!-- 5. Staff Scaling (Org-chart visualization) -->
<section class="pb-16">
<h2 class="font-h2 text-h2 text-primary mb-8">Administrative Hierarchy</h2>
<div class="relative p-12 border-2 border-dashed border-outline-variant/30 rounded-3xl bg-surface-container-low overflow-hidden">
<div class="flex flex-col items-center gap-12 relative z-10">
<!-- Founder Level -->
<div class="bg-emerald-900 text-white p-4 rounded-xl shadow-lg w-64 text-center">
<div class="font-bold text-sm tracking-widest uppercase mb-1">Executive Office</div>
<div class="text-amber-400 font-bold">Principal Director</div>
</div>
<!-- Line connectors (CSS approach) -->
<div class="w-1 h-12 bg-emerald-800"></div>
<!-- Management Level -->
<div class="flex flex-wrap justify-center gap-12 w-full">
<div class="flex flex-col items-center gap-6">
<div class="bg-white border-2 border-emerald-900 p-4 rounded-xl shadow w-56 text-center">
<div class="text-emerald-900 font-bold text-sm">Operations Lead</div>
</div>
<div class="flex gap-4">
<div class="bg-surface-container p-2 rounded-lg text-[10px] font-bold text-outline border border-outline-variant">Facility Manager</div>
<div class="bg-surface-container p-2 rounded-lg text-[10px] font-bold text-outline border border-outline-variant">IT Ops</div>
</div>
</div>
<div class="flex flex-col items-center gap-6">
<div class="bg-white border-2 border-emerald-900 p-4 rounded-xl shadow w-56 text-center">
<div class="text-emerald-900 font-bold text-sm">Growth Manager</div>
</div>
<div class="flex gap-4">
<div class="bg-surface-container p-2 rounded-lg text-[10px] font-bold text-outline border border-outline-variant">Sales Agent</div>
<div class="bg-surface-container p-2 rounded-lg text-[10px] font-bold text-outline border border-outline-variant">Legal Rep</div>
</div>
</div>
</div>
</div>
<!-- Decorative architectural grid -->
<div class="absolute inset-0 opacity-5 pointer-events-none">
<svg height="100%" width="100%">
<defs>
<pattern height="40" id="grid" patternunits="userSpaceOnUse" width="40">
<path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1"></path>
</pattern>
</defs>
<rect fill="url(#grid)" height="100%" width="100%"></rect>
</svg>
</div>
</div>
</section>
</div>
<!-- Footer Overlay (Subtle) -->
<footer class="px-8 py-6 text-center text-outline text-[10px] font-label-caps">
            © 2024 RIANIS PROPERTY GROUP • CONFIDENTIAL INTERNAL DOCUMENT • AUTHORIZED ACCESS ONLY
        </footer>
</main>
<!-- FAB (Suppressed on this task-focused/sub-page screen as per instructions) -->
</body></html>