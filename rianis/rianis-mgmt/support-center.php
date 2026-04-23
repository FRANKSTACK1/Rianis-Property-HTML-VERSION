<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Support - Onitsha Admin</title>
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
                        "h3": ["Inter"],
                        "label-caps": ["Inter"],
                        "h1": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "body-lg": ["Inter"]
                },
                "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "h1": ["32px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h2": ["28px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
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
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 24px rgba(6, 78, 59, 0.05);
        }
        @media (min-width: 1024px) {
            .text-h1 { font-size: 48px; }
            .text-h2 { font-size: 36px; }
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">

    <?php include 'inc/sidebar.php'; ?>

    <header class="fixed top-0 right-0 left-0 lg:left-64 h-16 border-b border-gray-200 bg-white/80 backdrop-blur-xl flex justify-between items-center px-4 md:px-8 shadow-sm z-40">
        <div class="flex items-center bg-surface-container-low rounded-full px-4 py-1.5 w-full max-w-[200px] sm:max-w-96 border border-outline-variant/30">
            <span class="material-symbols-outlined text-outline mr-2 text-sm md:text-base">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-xs md:text-sm w-full text-on-surface" placeholder="Search resources..." type="text"/>
        </div>
        <div class="flex items-center gap-2 md:gap-4">
            <button class="hover:bg-gray-50 rounded-full p-2 transition-all duration-300">
                <span class="material-symbols-outlined text-outline">notifications</span>
            </button>
            <div class="h-8 w-8 rounded-full bg-primary-container flex items-center justify-center border border-primary-fixed overflow-hidden">
                <img alt="Admin" class="h-full w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1cJ7CFsM1Ujf5VXi4_dRJmuEwbjnrlVMD5diTiI9YiLFCoReVqj6xvArZTorYXToe7_yR00IV9XQozg2H7ZO0Biu4rkohK8bXqb5DZom3M7B6icohO4Whfd5k73oJJaTDsE9lf0yQya-ddLX65AvHwChhVoq2534__gH1BVaN70MS1Zbw7dCdXx-UYyxoFHnBcmtV2rqzj4M2jG3XzflfjSBl5XkDS_FRaXAgvVFO5FCZ1udMxJSzdMJiPE4TciF4VsBJkTLOnY8X"/>
            </div>
        </div>
    </header>

    <main class="lg:ml-64 pt-16 min-h-screen transition-all duration-300">
        <div class="max-w-[1280px] mx-auto px-6 md:px-12 py-8 md:py-12">
            
            <section class="mb-12">
                <span class="text-label-caps font-label-caps text-secondary mb-2 block tracking-widest text-[10px] md:text-xs">ADMINISTRATOR HELP CENTER</span>
                <h1 class="text-h1 font-h1 text-primary mb-4">How can we assist you today?</h1>
                <p class="text-body-md md:text-body-lg text-outline max-w-2xl">Access our comprehensive guide for elite property management or connect directly with our dedicated concierge support team.</p>
            </section>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-gutter">
                
                <div class="lg:col-span-7 space-y-4 md:space-y-stack-md">
                    <h2 class="text-h2 font-h2 text-primary mb-2">Frequently Asked Questions</h2>
                    
                    <div class="glass-card rounded-xl overflow-hidden border border-outline-variant">
                        <button class="w-full flex justify-between items-center p-5 md:p-6 text-left hover:bg-primary-fixed/10 transition-colors group">
                            <span class="text-sm md:text-body-lg font-h3 text-on-surface">How do I verify a new property listing?</span>
                            <span class="material-symbols-outlined text-secondary transition-transform group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="px-5 md:px-6 pb-6 text-outline text-xs md:text-body-md border-t border-outline-variant/20 pt-4">
                            To maintain the elite status of Onitsha Admin, every listing requires a verified Deed of Assignment or C of O. Navigate to 'My Listings', click 'Add Property', and upload your documentation in the 'Verification' tab. Our team reviews submissions within 24 business hours.
                        </div>
                    </div>

                    <div class="glass-card rounded-xl overflow-hidden border border-outline-variant">
                        <button class="w-full flex justify-between items-center p-5 md:p-6 text-left hover:bg-primary-fixed/10 transition-colors">
                            <span class="text-sm md:text-body-lg font-h3 text-on-surface">What are the featured listing commission rates?</span>
                            <span class="material-symbols-outlined text-secondary">expand_more</span>
                        </button>
                    </div>

                    <div class="glass-card rounded-xl overflow-hidden border border-outline-variant">
                        <button class="w-full flex justify-between items-center p-5 md:p-6 text-left hover:bg-primary-fixed/10 transition-colors">
                            <span class="text-sm md:text-body-lg font-h3 text-on-surface">How to export market trend reports?</span>
                            <span class="material-symbols-outlined text-secondary">expand_more</span>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="glass-card rounded-xl p-6 md:p-8 border border-outline-variant lg:sticky lg:top-24">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="h-10 w-10 md:h-12 md:w-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">mail</span>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-h3 font-h3 text-primary">Contact Concierge</h3>
                                <p class="text-[10px] md:text-label-caps font-label-caps text-outline uppercase tracking-wider">Priority Support Line</p>
                            </div>
                        </div>
                        <form action="#" class="space-y-4 md:space-y-stack-md">
                            <div class="space-y-1 md:space-y-2">
                                <label class="text-[10px] md:text-label-caps font-label-caps text-on-surface-variant">FULL NAME</label>
                                <input class="w-full h-11 md:h-12 px-4 rounded-lg bg-surface-container border-none focus:ring-2 focus:ring-secondary transition-all text-sm" placeholder="Johnathan Doe" type="text"/>
                            </div>
                            <div class="space-y-1 md:space-y-2">
                                <label class="text-[10px] md:text-label-caps font-label-caps text-on-surface-variant">EMAIL ADDRESS</label>
                                <input class="w-full h-11 md:h-12 px-4 rounded-lg bg-surface-container border-none focus:ring-2 focus:ring-secondary transition-all text-sm" placeholder="admin@onitsharealty.com" type="email"/>
                            </div>
                            <div class="space-y-1 md:space-y-2">
                                <label class="text-[10px] md:text-label-caps font-label-caps text-on-surface-variant">MESSAGE</label>
                                <textarea class="w-full p-4 rounded-lg bg-surface-container border-none focus:ring-2 focus:ring-secondary transition-all text-sm" placeholder="How can our experts help?" rows="3 md:4"></textarea>
                            </div>
                            <button class="w-full h-12 md:h-14 bg-primary text-white rounded-lg font-bold text-sm md:text-lg hover:bg-primary-container hover:text-on-primary-container transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                                Send Inquiry <span class="material-symbols-outlined text-sm">send</span>
                            </button>
                        </form>
                        <div class="mt-6 pt-6 border-t border-outline-variant/30 flex flex-col gap-3">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary text-sm md:text-base">phone_iphone</span>
                                <span class="text-xs md:text-body-md font-bold text-on-surface">+234 (0) 800 ONITSHA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="mt-20">
            <h2 class="text-h2 font-h2 text-primary mb-8">Management Resources</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="glass-card p-6 rounded-xl border border-outline-variant group hover:border-secondary transition-colors cursor-pointer">
            <span class="material-symbols-outlined text-4xl text-secondary mb-4">book</span>
            <h4 class="text-h3 font-h3 text-on-surface mb-2">Admin Playbook</h4>
            <p class="text-outline font-body-md">Download our 2024 guide to digital property management in Onitsha.</p>
            <div class="mt-4 flex items-center text-secondary font-label-caps group-hover:gap-2 transition-all">
                                        READ MORE <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
            </div>
            </div>
            <div class="glass-card p-6 rounded-xl border border-outline-variant group hover:border-secondary transition-colors cursor-pointer">
            <span class="material-symbols-outlined text-4xl text-secondary mb-4">gavel</span>
            <h4 class="text-h3 font-h3 text-on-surface mb-2">Legal Framework</h4>
            <p class="text-outline font-body-md">Stay updated with current real estate laws and compliance requirements.</p>
            <div class="mt-4 flex items-center text-secondary font-label-caps group-hover:gap-2 transition-all">
                                        VIEW TERMS <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
            </div>
            </div>
            <div class="glass-card p-6 rounded-xl border border-outline-variant group hover:border-secondary transition-colors cursor-pointer">
            <span class="material-symbols-outlined text-4xl text-secondary mb-4">video_library</span>
            <h4 class="text-h3 font-h3 text-on-surface mb-2">Video Tutorials</h4>
            <p class="text-outline font-body-md">Step-by-step visual guides for managing high-value portfolio listings.</p>
            <div class="mt-4 flex items-center text-secondary font-label-caps group-hover:gap-2 transition-all">
                                        WATCH NOW <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
            </div>
            </div>
            </div>
        </section>
        </div>
    </main>

    <footer class="lg:ml-64 p-6 md:p-12 bg-surface-container-low/50">
        <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4 opacity-60">
            <p class="text-[8px] md:text-label-caps font-label-caps">© 2024 ONITSHA REAL ESTATE ADMIN</p>
            <div class="flex gap-4 md:gap-6 text-[8px] md:text-label-caps">
                <span>PRIVACY POLICY</span>
                <span>SYSTEM STATUS: OPTIMAL</span>
            </div>
        </div>
    </footer>
</body>
</html>