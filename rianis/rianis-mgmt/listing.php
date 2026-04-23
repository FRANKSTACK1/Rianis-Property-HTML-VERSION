<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#003527",
                        "secondary": "#006c4a",
                        "on-surface": "#191c1b",
                        "on-surface-variant": "#404944",
                        "outline": "#707974",
                        "outline-variant": "#bfc9c3",
                        "surface": "#f8faf6",
                        "surface-container-low": "#f2f4f1",
                        "secondary-container": "#82f5c1",
                        "on-secondary-container": "#00714e",
                        "tertiary": "#4f1f19",
                        "tertiary-fixed": "#ffdad5",
                        "error": "#ba1a1a"
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        /* Custom scrollbar for table */
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-surface font-sans text-on-surface antialiased">

    <?php include 'inc/sidebar.php'; ?>

    <header class="fixed top-0 right-0 left-0 lg:left-64 h-16 bg-white/80 backdrop-blur-xl border-b border-gray-100 z-40 flex justify-between items-center px-4 md:px-8 transition-all">
        <div class="flex items-center gap-4 w-full max-w-xs md:max-w-md ml-12 lg:ml-0">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full pl-9 pr-4 py-1.5 text-xs md:text-sm focus:ring-2 focus:ring-secondary/20 transition-all" placeholder="Search..." type="text"/>
            </div>
        </div>

        <div class="flex items-center gap-2 md:gap-4">
            <button class="relative hover:bg-gray-50 rounded-full p-2 hidden sm:block">
                <span class="material-symbols-outlined text-secondary">notifications</span>
                <span class="absolute top-2 right-2 w-1.5 h-1.5 bg-error rounded-full"></span>
            </button>
            <div class="flex items-center gap-2 pl-2 md:pl-4 border-l border-gray-100">
                <div class="text-right hidden xs:block">
                    <p class="text-[10px] font-bold text-primary leading-none">Admin Officer</p>
                    <p class="text-[8px] text-outline">Super Admin</p>
                </div>
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7tEnkVcXf7Y3zfnLWgJibSGurcEyK3gBv9wF8pD7g_DCO97wXOH6l2keKMof_7BpAtAy2z16rltVBdf3pglJrRwVt-Et4BMDhy0HUkgwActa42lkJY6ZkWdebtjSkXIcqoVX-vxYGLz2-mtQs2SkL0XTPw4gw9zix-xlZx0BoSN2npun6djQJ91IuoQWdvE4F1IlZtcdBAecRfqy6UBDJwk1w7kqHOPQ0F6J2N9JpgnfXeJVLBcdyiH12AUuQuqYan5bYF4btzfji" class="w-8 h-8 md:w-9 md:h-9 rounded-full object-cover ring-2 ring-secondary/5" alt="Profile"/>
            </div>
        </div>
    </header>

    <main class="lg:ml-64 pt-16 min-h-screen transition-all">
        <div class="p-4 md:p-8 lg:p-12 space-y-6 md:space-y-10 max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4">
                <div>
                    <h1 class="text-2xl md:text-4xl font-extrabold text-primary tracking-tight">My Listings</h1>
                    <p class="text-sm md:text-base text-on-surface-variant mt-1">Manage and monitor property performance.</p>
                </div>
                <button class="w-full sm:w-auto bg-secondary text-white px-6 py-3 rounded-xl text-xs font-bold flex items-center justify-center gap-2 shadow-lg shadow-secondary/20 hover:-translate-y-0.5 transition-all">
                    <span class="material-symbols-outlined text-sm">add</span> CREATE NEW LISTING
                </button>
            </div>

            <div class="glass-panel p-4 rounded-2xl flex items-center gap-3 overflow-x-auto no-scrollbar">
                <div class="flex-shrink-0 flex items-center gap-2 bg-white px-3 py-2 rounded-xl border border-gray-100 shadow-sm">
                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Status</span>
                    <select class="border-none focus:ring-0 text-xs font-bold text-secondary bg-transparent p-0 cursor-pointer">
                        <option>All</option>
                        <option>Active</option>
                    </select>
                </div>
                <div class="flex-shrink-0 flex items-center gap-2 bg-white px-3 py-2 rounded-xl border border-gray-100 shadow-sm">
                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Price</span>
                    <select class="border-none focus:ring-0 text-xs font-bold text-secondary bg-transparent p-0 cursor-pointer">
                        <option>Any</option>
                        <option>₦50M+</option>
                    </select>
                </div>
                <div class="ml-auto flex gap-2">
                    <button class="p-2 rounded-lg border border-gray-200 text-secondary hidden md:block">
                        <span class="material-symbols-outlined text-sm">grid_view</span>
                    </button>
                    <button class="p-2 rounded-lg bg-secondary text-white shadow-md">
                        <span class="material-symbols-outlined text-sm">list</span>
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-b border-gray-50">
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Property</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Location</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Price</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-lg overflow-hidden border bg-gray-100"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8Bcp4c-z54mrzmQdMjvms-c1zlpzRBTclC5va0VjioHFd5ax47Hix7zb6Veop2CrvnroSSLPwD7GQloCpa6fBpv_lk_ZqQwLuhLOeOUcQ1WKjtNt0DmJFv3NTGMBvPEMXZ9TXWzMn2oEt0lsgZXZcAUR1D3uzXErG4oPbhySowR02F60FI2Sm5SD9FJcZOn3Ro4uKKok5ZNgPW5Q5HV6R1bxpUvlBy_4WBtuBDMLAMDEIRHoqtuAzE_MtRkx_Kzke04_ztd9MkSqK" class="w-full h-full object-cover"></div>
                                        <div>
                                            <h4 class="text-sm font-bold text-on-surface">The Obsidian Manor</h4>
                                            <p class="text-[10px] text-outline">ORE-2024-001</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-xs text-on-surface-variant">GRA Phase 2, Onitsha</td>
                                <td class="px-6 py-5 text-sm font-bold text-secondary">₦245,000,000</td>
                                <td class="px-6 py-5 text-right flex justify-end gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg text-outline transition-all"><span class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="p-2 hover:bg-error/5 rounded-lg text-error transition-all"><span class="material-symbols-outlined text-sm">delete</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="block md:hidden divide-y divide-gray-100">
                    <div class="p-4 space-y-3">
                        <div class="flex gap-3">
                            <div class="w-16 h-16 rounded-xl bg-gray-100 overflow-hidden"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8Bcp4c-z54mrzmQdMjvms-c1zlpzRBTclC5va0VjioHFd5ax47Hix7zb6Veop2CrvnroSSLPwD7GQloCpa6fBpv_lk_ZqQwLuhLOeOUcQ1WKjtNt0DmJFv3NTGMBvPEMXZ9TXWzMn2oEt0lsgZXZcAUR1D3uzXErG4oPbhySowR02F60FI2Sm5SD9FJcZOn3Ro4uKKok5ZNgPW5Q5HV6R1bxpUvlBy_4WBtuBDMLAMDEIRHoqtuAzE_MtRkx_Kzke04_ztd9MkSqK" class="w-full h-full object-cover"></div>
                            <div class="flex-1">
                                <h4 class="text-sm font-bold text-on-surface">The Obsidian Manor</h4>
                                <p class="text-[10px] text-outline">GRA Phase 2, Onitsha</p>
                                <p class="text-sm font-bold text-secondary mt-1">₦245,000,000</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center bg-gray-50 p-2 rounded-xl">
                            <span class="text-[9px] font-bold text-secondary-container bg-secondary px-2 py-0.5 rounded-full">ACTIVE</span>
                            <div class="flex gap-1">
                                <button class="p-2 text-outline"><span class="material-symbols-outlined text-sm">edit</span></button>
                                <button class="p-2 text-error"><span class="material-symbols-outlined text-sm">delete</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 border-t border-gray-50 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-[10px] text-outline font-bold">Showing 1 - 4 of 24</p>
                    <div class="flex gap-1">
                        <button class="px-3 py-1 rounded-lg border text-outline text-xs"><span class="material-symbols-outlined text-xs">chevron_left</span></button>
                        <button class="px-3 py-1 rounded-lg bg-secondary text-white text-xs font-bold">1</button>
                        <button class="px-3 py-1 rounded-lg border text-outline text-xs"><span class="material-symbols-outlined text-xs">chevron_right</span></button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="glass-panel p-5 rounded-2xl flex items-center gap-4">
                    <div class="p-3 rounded-full bg-secondary-container/20 text-secondary"><span class="material-symbols-outlined">trending_up</span></div>
                    <div><p class="text-[9px] text-outline font-bold uppercase tracking-widest">Valuation</p><p class="text-lg font-extrabold">₦1.24B</p></div>
                </div>
                <div class="glass-panel p-5 rounded-2xl flex items-center gap-4">
                    <div class="p-3 rounded-full bg-blue-50 text-blue-600"><span class="material-symbols-outlined">visibility</span></div>
                    <div><p class="text-[9px] text-outline font-bold uppercase tracking-widest">Total Views</p><p class="text-lg font-extrabold">14.2k</p></div>
                </div>
                <div class="glass-panel p-5 rounded-2xl flex items-center gap-4 sm:col-span-2 lg:col-span-1">
                    <div class="p-3 rounded-full bg-amber-50 text-amber-600"><span class="material-symbols-outlined">verified</span></div>
                    <div><p class="text-[9px] text-outline font-bold uppercase tracking-widest">Market Score</p><p class="text-lg font-extrabold">98.4</p></div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>