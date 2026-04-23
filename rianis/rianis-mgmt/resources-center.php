<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Resource Center | Onitsha Premier Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
          tailwind.config = {
            darkMode: "class",
            theme: {
              extend: {
                "colors": {
                        "tertiary-fixed-dim": "#ffb4a9",
                        "secondary-fixed": "#85f8c4",
                        "on-tertiary-fixed-variant": "#6e372f",
                        "outline": "#707974",
                        "inverse-primary": "#95d3ba",
                        "surface-container": "#eceeeb",
                        "primary-fixed-dim": "#95d3ba",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#68dba9",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed": "#380d08",
                        "primary": "#003527",
                        "on-tertiary": "#ffffff",
                        "on-background": "#191c1b",
                        "surface": "#f8faf6",
                        "surface-container-high": "#e7e9e5",
                        "on-error": "#ffffff",
                        "surface-tint": "#2b6954",
                        "inverse-on-surface": "#eff1ee",
                        "on-surface-variant": "#404944",
                        "surface-dim": "#d8dbd7",
                        "on-secondary-fixed": "#002114",
                        "surface-container-low": "#f2f4f1",
                        "surface-variant": "#e1e3e0",
                        "on-primary-fixed": "#002117",
                        "secondary-container": "#82f5c1",
                        "inverse-surface": "#2e312f",
                        "tertiary": "#4f1f19",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#ffdad5",
                        "secondary": "#006c4a",
                        "on-tertiary-container": "#ea9e93",
                        "on-surface": "#191c1b",
                        "on-secondary-fixed-variant": "#005137",
                        "primary-fixed": "#b0f0d6",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "background": "#f8faf6",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#0b513d",
                        "on-primary-container": "#80bea6",
                        "primary-container": "#064e3b",
                        "tertiary-container": "#6b342d",
                        "surface-container-highest": "#e1e3e0",
                        "on-secondary-container": "#00714e",
                        "surface-bright": "#f8faf6",
                        "outline-variant": "#bfc9c3"
                },
                "spacing": {
                        "unit": "8px",
                        "stack-lg": "48px",
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "container-max": "1280px",
                        "stack-md": "24px",
                        "stack-sm": "12px",
                        "gutter": "24px"
                },
                "fontSize": {
                        "h1": ["2.25rem", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "h2": ["1.875rem", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "h3": ["1.5rem", {"lineHeight": "1.3", "fontWeight": "700"}],
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
        .ambient-shadow {
            box-shadow: 0 10px 30px -5px rgba(0, 53, 39, 0.1);
        }
        /* Fluid typography for small screens */
        @media (max-width: 640px) {
            h1 { font-size: 1.8rem !important; }
            .text-h1 { font-size: 1.8rem !important; }
            .text-body-lg { font-size: 1rem !important; }
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased overflow-x-hidden">

    <?php include 'inc/sidebar.php'; ?>

    <div class="lg:ml-72 min-h-screen flex flex-col transition-all duration-300">
        <header class="bg-white/80 backdrop-blur-xl border-b border-emerald-100/20 shadow-lg shadow-emerald-900/5 flex justify-between items-center px-4 md:px-8 h-16 w-full sticky top-0 z-30">
            <div class="flex items-center gap-4">
                <div class="relative group hidden sm:block">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-emerald-600 text-sm">search</span>
                    <input class="pl-10 pr-4 py-1.5 bg-surface-container-low border-none rounded-full w-48 md:w-64 focus:ring-2 focus:ring-primary/20 text-xs transition-all" placeholder="Search files..." type="text"/>
                </div>
                <button class="lg:hidden p-2 text-primary">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
            
            <div class="flex items-center gap-2 md:gap-4">
                <div class="flex items-center">
                    <button class="p-2 text-emerald-600 hover:bg-emerald-50/50 rounded-full">
                        <span class="material-symbols-outlined text-xl">notifications</span>
                    </button>
                    <button class="p-2 text-emerald-600 hover:bg-emerald-50/50 rounded-full hidden xs:block">
                        <span class="material-symbols-outlined text-xl">settings</span>
                    </button>
                </div>
                <div class="h-8 w-px bg-emerald-100 mx-1"></div>
                <div class="flex items-center gap-2">
                    <img alt="Admin" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover border-2 border-primary-container" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ9qFQW1lFuFp10rR5SiHJwGEPx1PP0SbBu0eaLAqHVJXfh08cpcrACtKZb5YjoMaCHNzPzjnYauIxBUghfa36fnthWaus-OA7YM8ezYYA90zonXGV8kN90lWIDrS3LrZAGg7VKD56ca72nTJjoRxgimIP5WzbCSZ3SVLc4X3LMTrkxebMu1E4Cntcw753gL-QUdXMC3gdUOu6zNfvJ0uO8Jt3zz0dDn-4ZJTm253M_x2YM06vSkxTXlfhUvmLk08f3D5fbNn_3BmU"/>
                    <div class="hidden md:block text-left">
                        <p class="font-bold text-emerald-900 leading-none text-xs">Admin Profile</p>
                        <p class="text-[10px] text-emerald-600">Onitsha Elite</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="px-4 py-8 md:p-12 flex-1">
            <div class="max-w-container-max mx-auto">
                
                <section class="mb-8 md:mb-12">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                        <div>
                            <span class="text-[10px] md:text-label-caps font-semibold text-secondary uppercase tracking-widest mb-2 block">Premium Learning Center</span>
                            <h1 class="text-h1 text-primary mb-2">Resource Center</h1>
                            <p class="text-sm md:text-body-lg text-outline max-w-2xl">Learn how to manage, grow, and scale your property business with elite industry insights.</p>
                        </div>
                        <button class="w-fit px-5 py-2.5 bg-surface-container-high rounded-xl font-bold text-primary text-sm hover:bg-surface-variant transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">tune</span> Filter
                        </button>
                    </div>
                </section>

                <section class="mb-12">
                    <div class="glass-card ambient-shadow rounded-2xl p-4 md:p-8 flex flex-col lg:flex-row items-center gap-4 md:gap-6">
                        <div class="relative flex-1 w-full">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-primary text-xl" data-icon="search">search</span>
                            <input class="w-full bg-white border border-outline-variant rounded-xl h-12 md:h-16 pl-12 md:pl-14 pr-6 focus:ring-2 focus:ring-primary text-sm md:text-body-lg placeholder-outline/50 transition-all" placeholder="What would you like to learn?" type="text"/>
                        </div>
                        <div class="flex flex-wrap gap-2 justify-center lg:justify-start">
                            <div class="bg-secondary text-white px-3 py-1.5 rounded-full font-bold text-[10px] md:text-xs">#Legal</div>
                            <div class="bg-primary text-white px-3 py-1.5 rounded-full font-bold text-[10px] md:text-xs">#Scaling</div>
                            <div class="bg-amber-500 text-white px-3 py-1.5 rounded-full font-bold text-[10px] md:text-xs">#Sales</div>
                        </div>
                        <button class="w-full lg:w-auto h-12 md:h-16 px-8 bg-primary text-white rounded-xl font-bold text-sm hover:bg-emerald-800 transition-all">
                            Find Results
                        </button>
                    </div>
                </section>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-gutter">
                    
                    <div class="glass-card ambient-shadow rounded-xl p-6 transition-all hover:-translate-y-1 flex flex-col">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-primary-fixed rounded-lg flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">auto_stories</span>
                            </div>
                            <span class="bg-primary-container text-white text-[9px] font-black px-2 py-1 rounded uppercase">PDF</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg md:text-h3 text-primary mb-2">Admin Playbook</h3>
                            <p class="text-xs md:text-body-md text-outline mb-6">Daily property management operations and scaling techniques.</p>
                        </div>
                        <div class="flex items-center justify-between mt-auto gap-4">
                            <div class="flex items-center gap-1 text-primary">
                                <span class="material-symbols-outlined text-sm">download</span>
                                <span class="text-[10px] font-bold">120 downloads</span>
                            </div>
                            <button class="px-4 py-2 bg-primary text-white rounded-lg font-bold text-xs hover:bg-emerald-800 transition-all whitespace-nowrap">
                                Download
                            </button>
                        </div>
                    </div>

                    <div class="glass-card ambient-shadow rounded-xl p-6 transition-all border-l-4 border-amber-500 hover:-translate-y-1 flex flex-col">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center text-amber-600">
                                <span class="material-symbols-outlined text-2xl">gavel</span>
                            </div>
                            <span class="bg-amber-100 text-amber-700 text-[9px] font-black px-2 py-1 rounded uppercase">2024</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg md:text-h3 text-primary mb-2">Legal Framework</h3>
                            <p class="text-xs md:text-body-md text-outline mb-6">Onitsha market regulations and landlord-tenant property laws.</p>
                        </div>
                        <button class="mt-auto py-2.5 border-2 border-primary text-primary rounded-lg font-bold text-xs hover:bg-primary hover:text-white transition-all">
                            Read More
                        </button>
                    </div>

                    <div class="glass-card ambient-shadow rounded-xl overflow-hidden transition-all hover:-translate-y-1 flex flex-col group">
                        <div class="relative h-40 md:h-48 w-full overflow-hidden bg-emerald-900">
                            <img alt="Tutorial" class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCE1MF7_8O81pbjgpKET-s9FlBsNVta9_schq25b9vjwwzhKCZmWrO2Fn2ACyNOJ_s94Of5wJYLK7ib3vis9dt0qNqZ9X10SBgR_pQ-hSarOCckeZmyN8Zv2Ow0qIk0cojLAlu5rCv2L-Y_dMLFZKk78wPYpMbGe5bb5_X_q4BAtO2IKX2kuRpK5DZC9hlEFwOFctznDAy5jkTvWyGKeZMxNsCpTyKSe7BTITqF6ILSCZx_V3J_isoi7Mb2RG_WpuMJVGooctu5OVMp"/>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-xl">
                                    <span class="material-symbols-outlined text-2xl">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-2 left-2 bg-black/60 px-2 py-0.5 rounded text-[10px] text-white backdrop-blur-sm">14:32</div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-lg md:text-h3 text-primary mb-1">Video Tutorials</h3>
                            <p class="text-xs text-outline mb-4">HD platform walkthroughs.</p>
                            <button class="mt-auto py-2.5 bg-secondary-container text-on-secondary-container rounded-xl font-bold text-xs hover:bg-secondary-fixed transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-base">smart_display</span> Watch
                            </button>
                        </div>
                    </div>
                </div>

                <footer class="mt-12 md:mt-20 py-8 border-t border-emerald-100 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-6 md:gap-8">
                        <div class="text-center md:text-left">
                            <span class="text-[10px] font-semibold text-outline uppercase block mb-1">TOTAL</span>
                            <span class="text-xl md:text-h3 font-bold text-primary">1,248</span>
                        </div>
                        <div class="h-8 w-px bg-emerald-100"></div>
                        <div class="text-center md:text-left">
                            <span class="text-[10px] font-semibold text-outline uppercase block mb-1">NEW</span>
                            <span class="text-xl md:text-h3 font-bold text-secondary">+12</span>
                        </div>
                    </div>
                    <div class="text-outline text-xs text-center md:text-right">
                        © 2024 Onitsha Market Elite. All rights reserved.
                    </div>
                </footer>
            </div>
        </main>
    </div>
</body>
</html>