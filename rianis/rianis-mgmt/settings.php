<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Onitsha Admin - Settings</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e1e3e0",
                        "on-tertiary-fixed-variant": "#6e372f",
                        "surface-dim": "#d8dbd7",
                        "inverse-on-surface": "#eff1ee",
                        "surface-container-low": "#f2f4f1",
                        "primary": "#003527",
                        "surface-bright": "#f8faf6",
                        "tertiary": "#4f1f19",
                        "tertiary-fixed-dim": "#ffb4a9",
                        "on-tertiary-container": "#ea9e93",
                        "inverse-surface": "#2e312f",
                        "primary-fixed": "#b0f0d6",
                        "on-tertiary": "#ffffff",
                        "surface": "#f8faf6",
                        "secondary": "#006c4a",
                        "on-background": "#191c1b",
                        "surface-tint": "#2b6954",
                        "surface-container-high": "#e7e9e5",
                        "on-secondary-fixed-variant": "#005137",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e1e3e0",
                        "secondary-container": "#82f5c1",
                        "on-tertiary-fixed": "#380d08",
                        "outline-variant": "#bfc9c3",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#eceeeb",
                        "on-primary-fixed-variant": "#0b513d",
                        "on-secondary-fixed": "#002114",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#00714e",
                        "primary-fixed-dim": "#95d3ba",
                        "on-primary-container": "#80bea6",
                        "inverse-primary": "#95d3ba",
                        "background": "#f8faf6",
                        "on-primary-fixed": "#002117",
                        "tertiary-container": "#6b342d",
                        "secondary-fixed-dim": "#68dba9",
                        "outline": "#707974",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "primary-container": "#064e3b",
                        "on-surface-variant": "#404944",
                        "on-surface": "#191c1b"
                    },
                    "spacing": {
                        "container-max": "1280px"
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 53, 39, 0.08);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .input-focus:focus {
            border-color: #006c4a;
            box-shadow: 0 0 0 4px rgba(0, 108, 74, 0.1);
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">

    <?php include 'inc/sidebar.php'; ?>

    <header class="fixed top-0 right-0 left-0 lg:left-64 h-16 z-40 bg-white/80 backdrop-blur-md border-b border-gray-200 flex justify-between items-center px-4 md:px-8">
        <div class="flex items-center gap-4 flex-1">
            <div class="relative w-full max-w-[240px] md:max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-xs md:text-sm focus:ring-2 focus:ring-secondary/20 input-focus transition-all" placeholder="Search settings..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-2 md:gap-6">
            <button class="relative p-2 text-gray-500 hover:bg-gray-50 rounded-full transition-all hidden sm:block">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
            </button>
            <div class="h-8 w-px bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-3">
                <div class="text-right hidden md:block">
                    <p class="text-sm font-semibold text-primary leading-none">Admin User</p>
                    <p class="text-[10px] text-on-surface-variant font-medium uppercase tracking-wider mt-1">Super Admin</p>
                </div>
                <img alt="Profile" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover border-2 border-emerald-50 shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjQ0gXWadyys6Q8N25PJrHrVTOor7rrPkt1tJcwWYO8ePwO6oyCOKWmGkLDewZCD_1gIQmal_XLIQlKHof3gjI7FWqmzaDOWUxLbt1XC4jkqHvmmVUKpuGx3MPa4OL8VPNGzI0xwB1-1W25AkIkUG0PgLalOJnjNIXt_K1_-jshl3Jk-gq2OK5GOZdEW1Z-1qFQ1sh3TSdM7AwtBKgGNMUtqfqEd2wMtB35swv5CeFguF2GizVgNKJp4skwX4JwWFvXnctSFbx_BOT"/>
            </div>
        </div>
    </header>

    <main class="lg:ml-64 pt-20 md:pt-24 pb-16 px-4 md:px-12 transition-all duration-300">
        <div class="max-w-[1200px] mx-auto">
            <div class="mb-8 md:mb-12">
                <h2 class="text-2xl md:text-4xl font-bold text-primary mb-2">Settings</h2>
                <p class="text-sm md:text-lg text-on-surface-variant">Manage your account and preferences</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start">
                
                <div class="lg:col-span-8 space-y-6 md:space-y-8">
                    
                    <section class="glass-panel rounded-xl p-5 md:p-8">
                        <div class="flex items-center gap-3 mb-6 md:mb-8">
                            <span class="material-symbols-outlined text-secondary">person</span>
                            <h3 class="text-lg md:text-xl font-bold text-primary">Profile Information</h3>
                        </div>
                        
                        <form action="" class="space-y-6" method="POST">
                            <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center mb-8">
                                <div class="relative">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden border-4 border-white shadow-lg">
                                        <img alt="Preview" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAafPgxCLPOK7Sflr2RIec50eF9rE3c89IahjbrYVNff_16ybOK5ZSsFukRmxMr_VxnKEOAU3v87ZYsd3HuSzEPwTzSX77skUiUkyaOTxou24nGFYMgJ0uRs5xhgfMRD1b-uU2-1Xg4kHKTCOJpOrL-UtuT236Q6XO0cRWwdDs3jnFzzcmmPqAmliQP0zNBCRNh8OFR6V5lyIBRylEITHQGod63j58cQwqCDONAs3N5Zpix5BlkfkRp22olpnKd4iDbI2fcgAWC9rKs"/>
                                    </div>
                                    <label class="absolute bottom-0 right-0 p-1.5 bg-secondary text-white rounded-full cursor-pointer shadow-md hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined text-sm">photo_camera</span>
                                        <input class="hidden" type="file"/>
                                    </label>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary">Profile Picture</h4>
                                    <p class="text-xs text-on-surface-variant">JPG, GIF or PNG. Max size 800K</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">Full Name</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" type="text" value="Chidi Okeke"/>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">Email Address</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" type="email" value="chidi.okeke@rianis.com"/>
                                </div>
                                <div class="space-y-2 md:col-span-2">
                                    <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">Phone Number</label>
                                    <div class="flex gap-2">
                                        <span class="px-3 md:px-4 py-3 bg-gray-100 rounded-lg text-sm border border-gray-200 font-medium">+234</span>
                                        <input class="flex-1 px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" type="tel" value="803 123 4567"/>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 flex justify-end">
                                <button class="w-full sm:w-auto px-8 py-3 bg-primary text-white rounded-lg font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">Save Changes</button>
                            </div>
                        </form>
                    </section>

                    <section class="glass-panel rounded-xl p-5 md:p-8">
                        <div class="flex items-center gap-3 mb-6 md:mb-8">
                            <span class="material-symbols-outlined text-secondary">security</span>
                            <h3 class="text-lg md:text-xl font-bold text-primary">Account Security</h3>
                        </div>
                        <form action="" class="space-y-6" method="POST">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">Current Password</label>
                                <div class="relative">
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" placeholder="••••••••" type="password"/>
                                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400" type="button"><span class="material-symbols-outlined">visibility</span></button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">New Password</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" type="password"/>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-primary uppercase tracking-wider px-1">Confirm New Password</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 input-focus transition-all text-sm" type="password"/>
                                </div>
                            </div>
                            <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                                <p class="text-[10px] md:text-xs text-on-surface-variant flex items-center gap-2 italic">
                                    <span class="material-symbols-outlined text-sm">info</span> At least 8 characters required
                                </p>
                                <button class="w-full sm:w-auto px-6 py-3 border-2 border-secondary text-secondary rounded-lg font-bold hover:bg-secondary/5 transition-all text-sm">Update Password</button>
                            </div>
                        </form>
                    </section>
                </div>

                <div class="lg:col-span-4 space-y-6 md:space-y-8">
                    <section class="glass-panel rounded-xl p-5 md:p-8">
                        <h3 class="text-lg font-bold text-primary mb-6">Preferences</h3>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <div class="pr-4">
                                    <p class="font-bold text-primary text-sm">Email Notifications</p>
                                    <p class="text-[10px] text-on-surface-variant">Daily summary</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                    <input checked class="sr-only peer" type="checkbox"/>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="pr-4">
                                    <p class="font-bold text-primary text-sm">Inquiry Alerts</p>
                                    <p class="text-[10px] text-on-surface-variant">Instant push</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                    <input checked class="sr-only peer" type="checkbox"/>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                                </label>
                            </div>
                                                        <div class="flex items-center justify-between">
                            <div>
                            <p class="font-semibold text-primary text-sm">Marketing Updates</p>
                            <p class="text-xs text-on-surface-variant">News and promotional offers</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                            <input class="sr-only peer" type="checkbox"/>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary"></div>
                            </label>
                            </div>
                            </div>
                        </div>
                    </section>

                    
                    <!-- System Settings -->
                    <section class="glass-panel rounded-xl p-8">
                    <h3 class="font-h3 text-xl text-primary mb-6">System Settings</h3>
                    <div class="space-y-4">
                    <div class="space-y-1">
                    <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Currency</label>
                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-surface-container-lowest text-sm focus:ring-2 focus:ring-secondary/20 input-focus outline-none">
                    <option selected="">₦ Nigerian Naira (NGN)</option>
                    <option>$ US Dollar (USD)</option>
                    <option>£ British Pound (GBP)</option>
                    </select>
                    </div>
                    <div class="space-y-1">
                    <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Timezone</label>
                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-surface-container-lowest text-sm focus:ring-2 focus:ring-secondary/20 input-focus outline-none">
                    <option selected="">(GMT+01:00) West Africa Time</option>
                    <option>(GMT+00:00) UTC</option>
                    <option>(GMT-05:00) Eastern Time</option>
                    </select>
                    </div>
                    <div class="space-y-1">
                    <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Language</label>
                    <select class="w-full px-4 py-2.5 rounded-lg border border-gray-200 bg-surface-container-lowest text-sm focus:ring-2 focus:ring-secondary/20 input-focus outline-none">
                    <option selected="">English (UK)</option>
                    <option>English (US)</option>
                    <option>Igbo</option>
                    <option>French</option>
                    </select>
                    </div>
                    </div>
                    </section>

                    <section class="border border-error/20 bg-error/5 rounded-xl p-5 md:p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-outlined text-error">warning</span>
                            <h3 class="text-lg font-bold text-error">Danger Zone</h3>
                        </div>
                        <p class="text-xs text-on-surface-variant mb-6 leading-relaxed">Deleting your account is permanent. All property listings and history will be lost.</p>
                        <button class="w-full py-3 bg-white border border-error text-error rounded-lg font-bold hover:bg-error hover:text-white transition-all text-sm">Delete Account</button>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>
</html>