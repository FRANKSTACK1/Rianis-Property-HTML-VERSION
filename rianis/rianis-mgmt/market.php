<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Onitsha Admin - Market Trends</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#005137",
                        "on-primary-container": "#80bea6",
                        "on-error-container": "#93000a",
                        "secondary-container": "#82f5c1",
                        "on-tertiary-fixed": "#380d08",
                        "on-surface": "#191c1b",
                        "on-error": "#ffffff",
                        "tertiary": "#4f1f19",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e1e3e0",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#95d3ba",
                        "secondary": "#006c4a",
                        "on-tertiary-fixed-variant": "#6e372f",
                        "surface-container-high": "#e7e9e5",
                        "on-surface-variant": "#404944",
                        "surface-container": "#eceeeb",
                        "inverse-surface": "#2e312f",
                        "primary-container": "#064e3b",
                        "tertiary-container": "#6b342d",
                        "on-secondary-fixed": "#002114",
                        "surface": "#f8faf6",
                        "on-primary-fixed-variant": "#0b513d",
                        "outline-variant": "#bfc9c3",
                        "tertiary-fixed": "#ffdad5",
                        "on-secondary-container": "#00714e",
                        "on-background": "#191c1b",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#eff1ee",
                        "surface-container-highest": "#e1e3e0",
                        "primary": "#003527",
                        "outline": "#707974",
                        "on-primary-fixed": "#002117",
                        "surface-tint": "#2b6954",
                        "primary-fixed-dim": "#95d3ba",
                        "surface-dim": "#d8dbd7",
                        "surface-container-low": "#f2f4f1",
                        "secondary-fixed-dim": "#68dba9",
                        "on-tertiary-container": "#ea9e93",
                        "surface-bright": "#f8faf6",
                        "tertiary-fixed-dim": "#ffb4a9",
                        "secondary-fixed": "#85f8c4",
                        "surface-container-lowest": "#ffffff",
                        "background": "#f8faf6",
                        "primary-fixed": "#b0f0d6",
                        "error-container": "#ffdad6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "stack-sm": "12px",
                        "stack-lg": "48px",
                        "unit": "8px",
                        "stack-md": "24px",
                        "gutter": "24px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "h3": ["Inter"], "label-caps": ["Inter"], "h1": ["Inter"], "body-md": ["Inter"], "h2": ["Inter"], "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { background-color: #f8faf6; color: #191c1b; overflow-x: hidden; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="font-body-md antialiased">

    <?php include 'inc/sidebar.php'; ?>

    <header class="fixed top-0 right-0 left-0 lg:left-64 h-16 border-b border-gray-100 bg-white/80 backdrop-blur-xl flex justify-between items-center px-4 md:px-8 shadow-sm z-40">
        <div class="flex items-center flex-1">
            <div class="lg:hidden w-10"></div>
            <div class="relative w-full max-w-xs md:w-96">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-xs md:text-sm focus:ring-2 focus:ring-secondary/20" placeholder="Search trends..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-2 md:gap-4 ml-2">
            <button class="hover:bg-gray-50 rounded-full p-2 hidden xs:block">
                <span class="material-symbols-outlined text-gray-500">notifications</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden border border-emerald-100 flex-shrink-0">
                <img alt="Admin" class="h-full w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDB1JlFNNMA1q1zuw0eBwXyVH-2IbHok2CD09S0Ub1XLWkxLDfEWzFt1Ni97Je0_ahr51p3STv1eWO3SA04F-62JpAKHavfDk5TLGdzsEE6ywmTaYQoL6oUtWGXRUm6OBSF7CkHzHAmAncfwZlHGYBkpiLVCbSFBA4wNUCFJA3MdEiq-3Ko_VGgeQBJszSezpM1LIdGd0iHCLU528r83CYf5bOrlBKM523qZjVtQD3ImPk_x-ieyxwpAMvSkAphM7JNSbYxBhOzKsuK"/>
            </div>
        </div>
    </header>

    <main class="lg:ml-64 pt-20 md:pt-24 pb-12 px-4 md:px-8 transition-all">
        <div class="max-w-container-max mx-auto">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 md:mb-stack-lg gap-4">
                <div>
                    <h2 class="text-2xl md:text-h2 font-h2 text-primary tracking-tight">Market Intelligence</h2>
                    <p class="text-sm md:text-body-lg text-outline mt-1 md:mt-2">Comprehensive performance analytics for Onitsha's elite property sector.</p>
                </div>
                <div class="flex gap-2 w-full md:w-auto">
                    <button class="flex-1 md:flex-none flex items-center justify-center gap-2 bg-white px-3 py-2 rounded-lg border border-outline-variant text-xs font-semibold hover:bg-gray-50">
                        <span class="material-symbols-outlined text-sm">calendar_today</span> Last 30 Days
                    </button>
                    <button class="flex-1 md:flex-none flex items-center justify-center gap-2 bg-secondary text-white px-4 py-2 rounded-lg text-xs font-semibold shadow-md">
                        <span class="material-symbols-outlined text-sm">file_download</span> Export
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-gutter mb-stack-lg">
                <div class="glass-panel p-5 rounded-xl shadow-sm border border-white/50">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-emerald-100 rounded-lg"><span class="material-symbols-outlined text-secondary">visibility</span></div>
                        <span class="text-on-secondary-container text-[10px] font-bold bg-secondary-container/50 px-2 py-1 rounded-full">+12.4%</span>
                    </div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider">Total Property Views</p>
                    <p class="text-xl md:text-h3 font-h3 text-primary mt-1">142,830</p>
                </div>
                <div class="glass-panel p-5 rounded-xl shadow-sm border border-white/50">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-amber-100 rounded-lg"><span class="material-symbols-outlined text-amber-700">person_search</span></div>
                        <span class="text-amber-800 text-[10px] font-bold bg-amber-200 px-2 py-1 rounded-full">+8.1%</span>
                    </div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider">New Inquiries</p>
                    <p class="text-xl md:text-h3 font-h3 text-primary mt-1">1,248</p>
                </div>
                <div class="glass-panel p-5 rounded-xl shadow-sm border border-white/50">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-blue-100 rounded-lg"><span class="material-symbols-outlined text-blue-700">sell</span></div>
                        <span class="text-blue-800 text-[10px] font-bold bg-blue-200 px-2 py-1 rounded-full">+4.2%</span>
                    </div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider">Conversion Rate</p>
                    <p class="text-xl md:text-h3 font-h3 text-primary mt-1">3.8%</p>
                </div>
                <div class="glass-panel p-5 rounded-xl shadow-sm border border-white/50">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-purple-100 rounded-lg"><span class="material-symbols-outlined text-purple-700">payments</span></div>
                        <span class="text-purple-800 text-[10px] font-bold bg-purple-200 px-2 py-1 rounded-full">+15.7%</span>
                    </div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider">Market Value Growth</p>
                    <p class="text-xl md:text-h3 font-h3 text-primary mt-1">₦4.2B</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-gutter">
                <div class="lg:col-span-2 glass-panel rounded-xl shadow-sm border border-white/50 overflow-hidden flex flex-col">
                    <div class="p-4 md:p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                        <h3 class="font-h3 text-lg md:text-xl text-primary">Engagement Velocity</h3>
                        <div class="flex gap-4">
                            <span class="flex items-center gap-1 text-[10px] font-bold text-secondary uppercase"><span class="w-2 h-2 bg-secondary rounded-full"></span> This Year</span>
                            <span class="flex items-center gap-1 text-[10px] font-bold text-outline uppercase"><span class="w-2 h-2 bg-outline-variant rounded-full"></span> Last Year</span>
                        </div>
                    </div>
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="p-8 flex-1 relative min-h-[300px] md:min-h-[400px] min-w-[600px]">
                            <div class="absolute inset-x-8 bottom-12 top-8 flex items-end justify-between gap-4 z-10">
                                <div class="w-full bg-surface-container-low rounded-t-lg h-[40%] relative">
                                    <div class="absolute bottom-0 w-full bg-secondary/20 h-full rounded-t-lg"></div>
                                    <div class="absolute bottom-0 w-full bg-secondary h-[70%] rounded-t-lg"></div>
                                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] text-outline font-bold uppercase">Jan</span>
                                </div>
                                <div class="w-full bg-surface-container-low rounded-t-lg h-[55%] relative">
                                    <div class="absolute bottom-0 w-full bg-secondary/20 h-full rounded-t-lg"></div>
                                    <div class="absolute bottom-0 w-full bg-secondary h-[65%] rounded-t-lg"></div>
                                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] text-outline font-bold uppercase">Feb</span>
                                </div>
                                <div class="w-full bg-surface-container-low rounded-t-lg h-[75%] relative">
                                    <div class="absolute bottom-0 w-full bg-secondary/20 h-full rounded-t-lg"></div>
                                    <div class="absolute bottom-0 w-full bg-secondary h-[90%] rounded-t-lg"></div>
                                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] text-outline font-bold uppercase">Mar</span>
                                </div>
                                <div class="w-full bg-surface-container-low rounded-t-lg h-[60%] relative">
                                    <div class="absolute bottom-0 w-full bg-secondary/20 h-full rounded-t-lg"></div>
                                    <div class="absolute bottom-0 w-full bg-secondary h-[75%] rounded-t-lg"></div>
                                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] text-outline font-bold uppercase">Apr</span>
                                </div>
                                <div class="w-full bg-surface-container-low rounded-t-lg h-[100%] relative">
                                    <div class="absolute bottom-0 w-full bg-secondary/20 h-full rounded-t-lg"></div>
                                    <div class="absolute bottom-0 w-full bg-secondary h-[95%] rounded-t-lg"></div>
                                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] text-outline font-bold uppercase">May</span>
                                </div>
                            </div>
                            <div class="absolute inset-x-8 bottom-12 top-8 border-b border-gray-100 flex flex-col justify-between">
                                <div class="w-full border-t border-gray-100/50"></div>
                                <div class="w-full border-t border-gray-100/50"></div>
                                <div class="w-full border-t border-gray-100/50"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass-panel rounded-xl shadow-sm border border-white/50 overflow-hidden flex flex-col">
                    <div class="p-5 border-b border-gray-100">
                        <h3 class="font-h3 text-lg md:text-xl text-primary">Hot Listings</h3>
                        <p class="text-[10px] font-bold text-outline uppercase tracking-wider">This Week's Top Assets</p>
                    </div>
                    <div class="divide-y divide-gray-50 flex-1">
                        <div class="p-4 hover:bg-white/40 flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg overflow-hidden flex-shrink-0">
                                <img class="h-full w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtLOhJUAVOnkWuBfxrBjzTri-CC8TcMRW4bK_nMaae_6pPe6r0D6wLMU5D84Bi__1OT1Wo9j9aOb5p4bUHqQat2vKMdYfKbL2MRCU9bpsL1qiD2heqfnSDlUu50jvBjKYTb15td-O4lvfud_1yOvHwTI8P1kd7GaUal54ZKkuU7GhpxqrnyNDm39KY9PgReJG3AGHJRzMl-BICeFhsbM7Fkov22PYnDPy2IC_DEhrUtHQU6NlvTHmk1AnHwpC16ubeL7ChBYC--rHQ" alt="Villa"/>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-primary text-xs truncate">River-view Penthouse</h4>
                                <p class="text-[9px] text-outline">Upper Iweka Road</p>
                                <div class="mt-1 flex items-center gap-2">
                                    <span class="text-[9px] font-bold text-secondary">₦850M</span>
                                    <span class="text-[9px] text-outline">• 4.2k views</span>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
                        </div>
                        <div class="p-4 hover:bg-white/40 flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg overflow-hidden flex-shrink-0">
                                <img class="h-full w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmfdFjmCbu-pfgftCrXJHMr8_i4T__w6Y-wu8tdjrQ9Jd9Js9v1AXBRdXfSTaRfSzoRY852DKg4CxL4QDCoPFMwTe_eUdC4_qbWEhTXWcL-od7gxvvMURnhQJxUVrhWr1VBHcm4mO5F_EppyhyWFvJDB3dyuEd8o3lPogXASEp6OTeUFIRLv8sgI7o9S4Dl0x1pkRm6a3ymr7OM1vJ0LPyg54wC1Ps-R_gNnKcsOhumr3BCPMH7PyFKu_BrZj9WHxJSA6sbW6tV6EB" alt="Estate"/>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-primary text-xs truncate">Emerald Terrace</h4>
                                <p class="text-[9px] text-outline">GRA Onitsha</p>
                                <div class="mt-1 flex items-center gap-2">
                                    <span class="text-[9px] font-bold text-secondary">₦420M</span>
                                    <span class="text-[9px] text-outline">• 3.8k views</span>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
                        </div>
                    </div>
                    <div class="p-3 bg-surface-container/30 text-center">
                        <a class="text-[10px] font-bold text-secondary uppercase tracking-widest hover:underline" href="#">View All Listings</a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-stack-lg">
                <div class="glass-panel p-5 rounded-xl border border-white/50">
                    <h4 class="text-[10px] font-bold text-outline uppercase tracking-wider mb-4">Traffic Sources</h4>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center text-[10px] font-bold uppercase"><span class="text-outline">Search</span><span>45%</span></div>
                        <div class="w-full bg-surface-container rounded-full h-1.5"><div class="bg-secondary h-full rounded-full w-[45%]"></div></div>
                        <div class="flex justify-between items-center text-[10px] font-bold uppercase"><span class="text-outline">Social</span><span>32%</span></div>
                        <div class="w-full bg-surface-container rounded-full h-1.5"><div class="bg-secondary h-full rounded-full w-[32%]"></div></div>
                    </div>
                </div>
                
                <div class="glass-panel p-5 rounded-xl border border-white/50 lg:col-span-2">
                    <h4 class="text-[10px] font-bold text-outline uppercase tracking-wider mb-4">Market Outlook</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 bg-white/50 rounded-lg border border-gray-100">
                            <p class="text-[8px] text-outline uppercase font-bold">Demand</p>
                            <p class="text-xs font-bold text-primary">Luxury Residential</p>
                            <p class="text-[10px] text-secondary">Rising</p>
                        </div>
                        <div class="p-3 bg-white/50 rounded-lg border border-gray-100">
                            <p class="text-[8px] text-outline uppercase font-bold">Price Index</p>
                            <p class="text-xs font-bold text-primary">₦45M/Plot</p>
                            <p class="text-[10px] text-secondary">Stable</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-5 rounded-xl border border-white/50 flex flex-col items-center justify-center">
                    <div class="relative w-20 h-20 rounded-full border-4 border-surface-container border-t-secondary rotate-45 flex items-center justify-center">
                        <span class="text-lg font-bold text-primary -rotate-45">82%</span>
                    </div>
                    <p class="text-[9px] font-bold text-outline uppercase tracking-widest mt-4">Lead Quality</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>