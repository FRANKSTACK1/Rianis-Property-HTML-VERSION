<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Rianis Property Admin Playbook</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Smooth Sidebar Transition */
        .sidebar-transition {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#003527",
                        "secondary": "#006c4a",
                        "on-surface-variant": "#404944",
                        "outline-variant": "#bfc9c3",
                        "background": "#f8faf6",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f4f1",
                        "surface-container": "#eceeeb",
                        "primary-fixed": "#b0f0d6",
                        "secondary-container": "#82f5c1",
                        "secondary-fixed": "#85f8c4"
                    },
                    "spacing": {
                        "stack-lg": "48px",
                        "stack-md": "24px",
                        "stack-sm": "12px",
                        "gutter": "24px"
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background font-inter text-on-background min-h-screen flex overflow-x-hidden">

    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-[45] hidden opacity-0 transition-opacity duration-300 md:hidden"></div>

    <?php
include '../inc/document-sidebar.php';
?>
    <main class="flex-1 md:ml-64 min-w-0 transition-all duration-300">
        
        <header class="bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-sm flex justify-between items-center px-4 md:px-8 h-16 w-full sticky top-0 z-40">
            <div class="flex items-center gap-2 md:gap-8">
                <button id="mobile-menu-btn" class="p-2 md:hidden hover:bg-emerald-50 rounded-lg text-emerald-900" aria-label="Open Menu">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="text-base md:text-lg font-bold text-emerald-900 truncate">Admin Playbook</div>
                
                <div class="hidden lg:flex items-center gap-6">
                    <a class="text-emerald-600 font-medium hover:text-emerald-900 transition-colors" href="#">Documents</a>
                    <a class="text-emerald-600 font-medium hover:text-emerald-900 transition-colors" href="#">Reports</a>
                </div>
            </div>

            <div class="flex items-center gap-2 md:gap-4 shrink-0">
                <div class="relative p-2 rounded-full hover:bg-emerald-50 transition-all cursor-pointer">
                    <span class="material-symbols-outlined text-emerald-900">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-amber-500 rounded-full border-2 border-white"></span>
                </div>
                <div class="p-2 rounded-full hover:bg-emerald-50 transition-all cursor-pointer hidden sm:block">
                    <span class="material-symbols-outlined text-emerald-900">settings</span>
                </div>
                <div class="h-8 w-px bg-emerald-100 mx-1"></div>
                <img alt="Admin" class="w-8 h-8 md:w-10 md:h-10 rounded-full border-2 border-amber-500/30 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLRKOr6X3Tfnuj6vY7fWziWV33J5UetyIEpN4HnoPUb-z28bdfy5DCzmDvx1CviC59zuVqLwp-R0sVvvrzYnNaY6icN2pib32D5Cc_LDaGgkG-FjSroW4O1zKzh6uuE40m4fjKQjByzYSnJ3EMDGwFf_yPK9C5jJg21ND9l-Db2D1w51BrTZdXDISdbjtZO8_oyMj4aNV49mAAGUXmFySj_a3R61cBXv2psaCo6onerThlSaAVZA5R_-On5hHJyN27lQXr71_Maa9u"/>
            </div>
        </header>

        <div class="p-4 md:p-8 max-w-[1440px] mx-auto space-y-8 md:space-y-stack-lg">
            
            <section class="space-y-3">
                <h2 class="text-3xl md:text-5xl font-extrabold text-primary leading-tight">Overview Dashboard</h2>
                <p class="text-base md:text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    Monitor your high-value assets and strategic growth vectors across the Onitsha property market.
                </p>
            </section>

            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-gutter">
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex flex-col justify-between min-h-[160px]">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">Properties Managed</span>
                        <div class="bg-secondary-container p-2 rounded-xl text-on-secondary-container">
                            <span class="material-symbols-outlined">real_estate_agent</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-primary">124</div>
                        <div class="flex items-center gap-1 text-emerald-600 text-xs font-bold mt-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span> +4%
                        </div>
                    </div>
                </div>

                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex flex-col justify-between min-h-[160px]">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">Active Tenants</span>
                        <div class="bg-primary-fixed p-2 rounded-xl text-on-primary-fixed">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-primary">89</div>
                        <div class="flex items-center gap-1 text-emerald-600 text-xs font-bold mt-1">
                            <span class="material-symbols-outlined text-sm">verified</span> 98% Retention
                        </div>
                    </div>
                </div>

                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex flex-col justify-between min-h-[160px] sm:col-span-2 md:col-span-1">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">Monthly Revenue</span>
                        <div class="bg-secondary-fixed p-2 rounded-xl text-on-secondary-fixed">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-primary">₦12M</div>
                        <p class="text-xs text-on-surface-variant mt-1 italic">Current billing cycle</p>
                    </div>
                </div>
            </section>

            <section class="space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <h3 class="text-xl md:text-2xl font-bold text-primary">Operational Framework</h3>
                    <button class="text-secondary font-bold text-sm flex items-center gap-2 hover:translate-x-1 transition-transform">
                        View Full Roadmap <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                    <div class="glass-card p-8 rounded-2xl border-white hover:border-amber-400/50 transition-all group cursor-pointer relative overflow-hidden">
                        <div class="relative z-10">
                            <div class="w-12 h-12 bg-emerald-900 rounded-xl flex items-center justify-center mb-6 text-white group-hover:bg-amber-500 transition-colors">
                                <span class="material-symbols-outlined text-2xl">list_alt</span>
                            </div>
                            <h4 class="text-xl font-bold text-primary mb-3">Daily Operations</h4>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">Standard operating procedures and checklists for client relations.</p>
                            <span class="flex items-center gap-2 text-primary font-black text-sm">
                                Access Procedures <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">east</span>
                            </span>
                        </div>
                    </div>

                    <div class="glass-card p-8 rounded-2xl border-white hover:border-amber-400/50 transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-emerald-900 rounded-xl flex items-center justify-center mb-6 text-white">
                            <span class="material-symbols-outlined text-2xl">trending_up</span>
                        </div>
                        <h4 class="text-xl font-bold text-primary mb-3">Scaling Strategies</h4>
                        <p class="text-sm text-on-surface-variant mb-6">Advanced growth models and marketing dominance for Onitsha market.</p>
                        <span class="flex items-center gap-2 text-primary font-black text-sm">
                            Explore Models <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">east</span>
                        </span>
                    </div>

                    <div class="glass-card p-8 rounded-2xl border-white hover:border-amber-400/50 transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-emerald-900 rounded-xl flex items-center justify-center mb-6 text-white">
                            <span class="material-symbols-outlined text-2xl">gavel</span>
                        </div>
                        <h4 class="text-xl font-bold text-primary mb-3">Legal Framework</h4>
                        <p class="text-sm text-on-surface-variant mb-6">Guides on local property laws and compliance within Anambra State.</p>
                        <span class="flex items-center gap-2 text-primary font-black text-sm">
                            View Compliance <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">east</span>
                        </span>
                    </div>
                </div>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-2 gap-6 pb-12">
                <div class="bg-surface-container-low p-6 rounded-2xl border border-gray-100">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="material-symbols-outlined text-secondary">history</span>
                        <h4 class="font-bold text-primary">Recent Playbook Updates</h4>
                    </div>
                    <div class="space-y-4">
                        <div class="flex gap-4 items-start p-3 hover:bg-white rounded-xl transition-all cursor-pointer shadow-sm sm:shadow-none">
                            <div class="w-2 h-2 mt-2 rounded-full bg-amber-500 shrink-0"></div>
                            <div>
                                <p class="font-bold text-primary text-sm">New Lease Agreement Template</p>
                                <p class="text-[11px] text-on-surface-variant uppercase">Legal • 2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start p-3 hover:bg-white rounded-xl transition-all cursor-pointer">
                            <div class="w-2 h-2 mt-2 rounded-full bg-emerald-500 shrink-0"></div>
                            <div>
                                <p class="font-bold text-primary text-sm">Onboarding Checklist Optimized</p>
                                <p class="text-[11px] text-on-surface-variant uppercase">Operations • Yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-primary text-white p-6 md:p-8 rounded-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10">
                        <span class="material-symbols-outlined text-[80px] md:text-[120px]" style="font-variation-settings: 'FILL' 1;">analytics</span>
                    </div>
                    <div class="relative z-10 flex flex-col justify-between h-full">
                        <div>
                            <h4 class="text-xl font-bold">Operational Health</h4>
                            <p class="text-emerald-200 mt-2 text-sm leading-relaxed">All administrative systems are currently performing at 100% capacity.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div class="bg-white/10 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                                <p class="text-[10px] text-emerald-300 font-bold tracking-widest">SERVER LOAD</p>
                                <p class="text-2xl font-black">12%</p>
                            </div>
                            <div class="bg-white/10 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                                <p class="text-[10px] text-emerald-300 font-bold tracking-widest">LAST BACKUP</p>
                                <p class="text-2xl font-black">04:00 AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const openBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('sidebar-close');

        function toggleSidebar(open) {
            if (open) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.add('opacity-100'), 10);
                document.body.classList.add('overflow-hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.remove('opacity-100');
                setTimeout(() => overlay.classList.add('hidden'), 300);
                document.body.classList.remove('overflow-hidden');
            }
        }

        openBtn.addEventListener('click', () => toggleSidebar(true));
        closeBtn.addEventListener('click', () => toggleSidebar(false));
        overlay.addEventListener('click', () => toggleSidebar(false));

        // Auto-close on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                toggleSidebar(false);
            }
        });
    </script>
</body>
</html>