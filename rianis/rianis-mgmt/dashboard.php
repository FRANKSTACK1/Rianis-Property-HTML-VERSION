<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Dashboard | Rianis Property</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#ea9e93",
                        "surface-container": "#eceeeb",
                        "inverse-on-surface": "#eff1ee",
                        "surface-container-low": "#f2f4f1",
                        "inverse-primary": "#95d3ba",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#2e312f",
                        "on-secondary-container": "#00714e",
                        "on-surface-variant": "#404944",
                        "tertiary-fixed-dim": "#ffb4a9",
                        "tertiary": "#4f1f19",
                        "primary-container": "#064e3b",
                        "primary-fixed-dim": "#95d3ba",
                        "surface-bright": "#f8faf6",
                        "on-error": "#ffffff",
                        "surface-tint": "#2b6954",
                        "secondary-fixed": "#85f8c4",
                        "on-secondary": "#ffffff",
                        "secondary": "#006c4a",
                        "on-secondary-fixed-variant": "#005137",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#e1e3e0",
                        "on-primary-fixed-variant": "#0b513d",
                        "on-surface": "#191c1b",
                        "on-secondary-fixed": "#002114",
                        "tertiary-fixed": "#ffdad5",
                        "on-primary-container": "#80bea6",
                        "outline-variant": "#bfc9c3",
                        "error-container": "#ffdad6",
                        "primary": "#003527",
                        "primary-fixed": "#b0f0d6",
                        "on-background": "#191c1b",
                        "tertiary-container": "#6b342d",
                        "surface-container-high": "#e7e9e5",
                        "secondary-container": "#82f5c1",
                        "on-tertiary-fixed-variant": "#6e372f",
                        "on-primary-fixed": "#002117",
                        "secondary-fixed-dim": "#68dba9",
                        "outline": "#707974",
                        "surface-container-highest": "#e1e3e0",
                        "on-tertiary-fixed": "#380d08",
                        "surface": "#f8faf6",
                        "surface-dim": "#d8dbd7",
                        "background": "#f8faf6",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "container-max": "1280px",
                        "margin-desktop": "48px",
                        "stack-md": "24px",
                        "unit": "8px",
                        "stack-sm": "12px",
                        "stack-lg": "48px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "h2": ["Inter"],
                        "h3": ["Inter"],
                        "label-caps": ["Inter"],
                        "h1": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        /* Mobile Sidebar Transitions */
        #sidebar-container { transition: transform 0.3s ease-in-out; }
        .sidebar-open #sidebar-container { transform: translateX(0); }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">

    <div class="lg:hidden fixed top-0 left-0 right-0 h-16 bg-white z-[60] flex items-center justify-between px-4 border-b">
    <button onclick="toggleSidebar()" class="p-2 text-primary">
        <span class="material-symbols-outlined text-3xl">menu</span>
    </button>
    <h1 class="font-bold text-primary">Onitsha Admin</h1>
    <div class="w-10 h-10">
        <img alt="Admin" class="h-10 w-10 rounded-full border-2 border-emerald-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAxYKnGLQU5K0XFmdspKWHBM9liXj1z7HT5rbjsbrkndLSYITAD_5_Gbu5oMgqcWO1qWGM9Rp8ELk4n384Y96F7m6-E9WiO6K9cow2eA370FuihpjTJqdTXJ2vRQN9wdAwk2VsJrf9Awjl2df_0qJC1e-kj2AQnn-lrgvplS4ZIpkYAppGbq5Z5wRC01VLyj5lp5sRQViZpWaqUdoaf1y_cYEQnCp1LCU6ujf7Q0qW4hqoa4sEbR4GeByg-OpcP-4bbPcKLUpgEqxZ"/>
    </div>
</div>
<?php
include 'inc/sidebar.php';
?>

    <!-- <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/40 z-[65] hidden lg:hidden backdrop-blur-sm transition-opacity"></div> -->

    <main class="lg:ml-64 min-h-screen p-6 md:p-8 lg:p-12 pt-24 lg:pt-12">
        
        <header class="flex flex-col md:flex-row md:items-center justify-between mb-8 lg:mb-12 gap-6">
            <div class="space-y-1">
                <span class="text-[10px] lg:text-label-caps font-label-caps text-secondary uppercase tracking-[0.2em]">Overview</span>
                <h2 class="text-2xl lg:text-h2 font-bold text-primary">Executive Dashboard</h2>
                <p class="text-on-surface-variant text-sm lg:font-body-md">Welcome back, manager. Here's your portfolio status.</p>
            </div>
            
            <div class="flex flex-wrap items-center gap-4">
                <div class="glass-panel p-2 rounded-xl flex items-center gap-3 px-4 shadow-sm border-outline-variant hidden sm:flex">
                    <div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden border-2 border-primary-fixed">
                        <img alt="Admin Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdFj29EbCPKMyFyhRQZmX_3BR5FOEsUkY5QZNN2uAP0sdZTTsGsnXTi-XrioNkvYNHCKQ9AfN5rr_RZLMi0q2Yv-0IM5A42s9Mq0Hg7eJ4xe5UhlZ2JIzOAXXn-re9EBSa4X-oXy5tivjviF0v_8O4VeTucq3Wv8YECcKCYGLL6ZSXLRm4z8d7tLoX60Ve09DI_dr1Ho1GHdD1cXLWlzxu7SmG3JED2jMg_4ZhvuycSTjCMS5mFmnHNxkIjH03SkfMuqWGYcmP-j1d"/>
                    </div>
                    <div class="hidden lg:block">
                        <p class="text-sm font-bold text-primary leading-tight">Admin Profile</p>
                        <p class="text-[10px] text-on-surface-variant uppercase font-semibold">Super Admin</p>
                    </div>
                </div>
                <button class="w-full sm:w-auto bg-primary text-on-primary px-6 py-4 lg:py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-primary-container hover:text-on-primary-container transition-all shadow-lg active:scale-95">
                    <span class="material-symbols-outlined">add_circle</span>
                    Add New Property
                </button>
            </div>
        </header>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm group hover:shadow-xl transition-all">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-primary-fixed rounded-2xl flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <span class="text-emerald-600 bg-emerald-50 px-2 py-1 rounded text-xs font-bold">+12%</span>
                </div>
                <p class="text-[10px] font-label-caps text-on-surface-variant uppercase mb-1">Total Properties</p>
                <h3 class="text-2xl lg:text-h3 font-bold text-primary">1,284</h3>
            </div>
            
            <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm group hover:shadow-xl transition-all">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-secondary-fixed rounded-2xl flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined">visibility</span>
                    </div>
                    <span class="text-emerald-600 bg-emerald-50 px-2 py-1 rounded text-xs font-bold">Active</span>
                </div>
                <p class="text-[10px] font-label-caps text-on-surface-variant uppercase mb-1">Active Listings</p>
                <h3 class="text-2xl lg:text-h3 font-bold text-primary">842</h3>
            </div>
            
            <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm group hover:shadow-xl transition-all sm:col-span-2 lg:col-span-1">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-tertiary-fixed rounded-2xl flex items-center justify-center text-on-tertiary-fixed-variant">
                        <span class="material-symbols-outlined">group</span>
                    </div>
                    <span class="text-on-tertiary-fixed-variant bg-tertiary-fixed/30 px-2 py-1 rounded text-xs font-bold">New</span>
                </div>
                <p class="text-[10px] font-label-caps text-on-surface-variant uppercase mb-1">New Leads</p>
                <h3 class="text-2xl lg:text-h3 font-bold text-primary">48</h3>
            </div>
        </section>

        <section class="bg-white rounded-[24px] lg:rounded-[32px] border border-outline-variant shadow-sm overflow-hidden">
            <div class="p-6 lg:p-8 border-b border-surface-variant flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h3 class="text-xl lg:text-h3 font-bold text-primary">Property Listings</h3>
                    <p class="text-xs text-on-surface-variant">Manage all your real estate assets.</p>
                </div>
                <div class="flex items-center gap-3 w-full md:w-auto">
                    <div class="relative flex-grow md:w-64">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
                        <input class="w-full pl-10 pr-4 py-3 rounded-xl border border-outline-variant bg-surface-container-low text-sm outline-none" placeholder="Search..." type="text"/>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto scrollbar-hide">
                <table class="w-full text-left border-collapse min-w-[700px]">
                    <thead>
                        <tr class="bg-surface-container-lowest">
                            <th class="px-6 lg:px-8 py-5 text-[10px] font-label-caps text-on-surface-variant uppercase border-b border-surface-variant">Property</th>
                            <th class="px-6 lg:px-8 py-5 text-[10px] font-label-caps text-on-surface-variant uppercase border-b border-surface-variant">Price</th>
                            <th class="px-6 lg:px-8 py-5 text-[10px] font-label-caps text-on-surface-variant uppercase border-b border-surface-variant text-center">Status</th>
                            <th class="px-6 lg:px-8 py-5 text-[10px] font-label-caps text-on-surface-variant uppercase border-b border-surface-variant text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-variant">
                        <tr class="group hover:bg-surface-container-lowest/50">
                            <td class="px-6 lg:px-8 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container">
                                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHYQ5iKBrGbWmaXQ-9f0VgE4srsedsf6VTFkX6uTnWwt26hdfhc8fcsB022hC-L7i5FWXsFVuNgfsGG464nPtMx5Pz6kvaR065G5lNn7f1MG1onydXxTUnadE8K1bdF2NXZcELka-XpSh7S47-ZutEquaMyht_yU51aBi4Q2m6Bk8wj_MwnBhy-N3pZCKpd7R5WmUzA73o5SQSN6d4xedJRRz3KTL99x802W_UtFvtgmkqDMAxrudj76A45PKA_ew2LF7Tta6FhF6g" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-primary">Grand Onitsha Heights</p>
                                        <p class="text-[10px] text-on-surface-variant">Awka Road, Onitsha</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 lg:px-8 py-5">
                                <span class="text-sm font-bold text-primary">₦450M</span>
                            </td>
                            <td class="px-6 lg:px-8 py-5 text-center">
                                <span class="px-2 py-1 rounded-full text-[9px] font-bold uppercase bg-secondary-container text-on-secondary-container">Active</span>
                            </td>
                            <td class="px-6 lg:px-8 py-5 text-right">
                                <button class="p-2 text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined text-xl">edit</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-6 bg-surface-container-low flex items-center justify-between">
                <span class="text-[10px] font-bold text-on-surface-variant uppercase">Showing 3 of 1,284</span>
                <div class="flex gap-2">
                    <button class="p-2 rounded-lg border bg-white"><span class="material-symbols-outlined">chevron_left</span></button>
                    <button class="p-2 rounded-lg border bg-white"><span class="material-symbols-outlined">chevron_right</span></button>
                </div>
            </div>
        </section>

        <footer class="mt-12 py-8 border-t flex flex-col md:flex-row justify-between items-center gap-6 text-center md:text-left">
            <p class="text-xs text-on-surface-variant">© 2024 Rianis Property Limited.</p>
            <div class="flex flex-wrap justify-center gap-4 lg:gap-6">
                <a class="text-xs font-semibold text-on-surface-variant hover:text-secondary" href="#">Privacy</a>
                <a class="text-xs font-semibold text-on-surface-variant hover:text-secondary" href="#">Terms</a>
                <a class="text-xs font-semibold text-on-surface-variant hover:text-secondary" href="#">Support</a>
            </div>
        </footer>
    </main>

</body>
</html>