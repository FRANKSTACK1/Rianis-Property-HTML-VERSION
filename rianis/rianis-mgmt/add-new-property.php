<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Onitsha Admin - Add Property</title>
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
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
                }
              },
            },
          }
        </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.2); }
        
        /* Fixed layout transitions */
        #mobile-overlay { transition: opacity 0.3s ease; }
        #sidebar-nav { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    </style>
</head>
<body class="bg-background text-on-background antialiased">

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
<div id="mobile-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/50 z-[65] hidden lg:hidden opacity-0 transition-opacity"></div>

<header class="fixed top-16 lg:top-0 right-0 left-0 lg:left-64 h-16 bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-sm flex justify-between items-center px-4 lg:px-8 z-40">
    <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-full w-full max-w-xs lg:w-96 border border-outline-variant/30">
        <span class="material-symbols-outlined text-outline mr-2" data-icon="search">search</span>
        <input class="bg-transparent border-none focus:ring-0 text-sm w-full font-body-md text-on-surface" placeholder="Search..." type="text"/>
    </div>
    <div class="flex items-center space-x-2 lg:space-x-4 ml-4">
        <button class="hover:bg-gray-50 rounded-full p-2 text-on-surface">
            <span class="material-symbols-outlined">notifications</span>
        </button>
        <div class="h-8 w-px bg-gray-200 mx-2 hidden sm:block"></div>
        <div class="flex items-center">
            <img alt="Admin" class="h-8 w-8 lg:h-10 lg:w-10 rounded-full object-cover border-2 border-emerald-100 hidden sm:block" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAxYKnGLQU5K0XFmdspKWHBM9liXj1z7HT5rbjsbrkndLSYITAD_5_Gbu5oMgqcWO1qWGM9Rp8ELk4n384Y96F7m6-E9WiO6K9cow2eA370FuihpjTJqdTXJ2vRQN9wdAwk2VsJrf9Awjl2df_0qJC1e-kj2AQnn-lrgvplS4ZIpkYAppGbq5Z5wRC01VLyj5lp5sRQViZpWaqUdoaf1y_cYEQnCp1LCU6ujf7Q0qW4hqoa4sEbR4GeByg-OpcP-4bbPcKLUpgEqxZ"/>
            <div class="ml-3 hidden lg:block">
                <p class="font-label-caps text-[10px] text-primary">ADMINISTRATOR</p>
                <p class="font-body-md text-xs text-on-surface-variant">Chukwudi Okafor</p>
            </div>
        </div>
    </div>
</header>

<main class="lg:ml-64 mt-32 lg:mt-16 p-4 lg:p-8 min-h-screen">
    <div class="max-w-container-max mx-auto">
        <section class="mb-6 lg:mb-10">
            <nav class="flex text-on-surface-variant font-label-caps text-[10px] mb-4 overflow-x-auto whitespace-nowrap">
                <a class="hover:text-primary transition-colors" href="#">DASHBOARD</a>
                <span class="mx-2">/</span>
                <span class="text-primary font-bold">ADD NEW PROPERTY</span>
            </nav>
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4">
                <div>
                    <h1 class="font-h1 text-2xl lg:text-h2 text-primary tracking-tight">Create New Listing</h1>
                    <p class="font-body-lg text-sm lg:text-body-lg text-on-surface-variant mt-1">Publish an elite property to the Onitsha market.</p>
                </div>
            </div>
        </section>

        <form action="#" class="grid grid-cols-12 gap-6 lg:gap-8" method="POST">
            <div class="col-span-12 lg:col-span-8 space-y-6 lg:space-y-8">
                <div class="glass-card rounded-xl p-5 lg:p-8 shadow-sm">
                    <div class="flex items-center mb-6">
                        <span class="material-symbols-outlined text-secondary mr-2">edit_note</span>
                        <h2 class="font-h3 text-xl lg:text-h3 text-on-surface">Property Core Details</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4 lg:gap-6">
                        <div class="col-span-2">
                            <label class="font-label-caps text-xs text-on-surface-variant mb-2 block uppercase">Property Title</label>
                            <input class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary outline-none transition-all" placeholder="e.g. Royal Niger View" type="text"/>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label class="font-label-caps text-xs text-on-surface-variant mb-2 block uppercase">Asking Price (₦)</label>
                            <input class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary outline-none" placeholder="0.00" type="number"/>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label class="font-label-caps text-xs text-on-surface-variant mb-2 block uppercase">Location</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-3 text-outline text-sm">location_on</span>
                                <input class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-secondary outline-none" placeholder="G.R.A Onitsha" type="text"/>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label class="font-label-caps text-xs text-on-surface-variant mb-2 block uppercase">Description</label>
                            <textarea class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary outline-none resize-none" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="glass-card rounded-xl p-5 lg:p-8 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 gap-2">
                        <div class="flex items-center">
                            <span class="material-symbols-outlined text-secondary mr-2">photo_library</span>
                            <h2 class="font-h3 text-xl lg:text-h3 text-on-surface">Property Imagery</h2>
                        </div>
                        <span class="text-[10px] font-label-caps text-on-surface-variant">MINIMUM 5 PHOTOS</span>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 lg:gap-4">
                        <div class="col-span-2 aspect-video bg-surface-container-lowest border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center cursor-pointer group">
                            <span class="material-symbols-outlined text-3xl text-outline group-hover:text-secondary mb-1">add_a_photo</span>
                            <p class="text-[10px] font-bold text-outline uppercase group-hover:text-secondary">Upload Cover</p>
                        </div>
                        <div class="aspect-square bg-surface-container rounded-xl overflow-hidden relative border border-outline-variant/20">
                            <img alt="Preview" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxVqfC3x45J1ZXXbvUERvBXM9gmuQC2MCceq62cOWlYfX_VweGRSZInpYxkCCTXP0txO4A083TJ0aDCjv4e8K5eVoQLEOpJNUpq9ACbI70vl10mOYSp6UMG9yGg_GxklTSM44d4f8xzCIXgGxS3RzSQmp4HNBwZiPyr8MkENCkPSW4KvoHpr1odgyiMym2bm9y2bGUFDKOwf5BX0g9sSmv_zIeTXSBoSmvg4H0OH7yLcbzzcwmgfwOtxjEd2GoKwUv3S_OZNSCDi9"/>
                        </div>
                        <div class="aspect-square bg-surface-container rounded-xl border-2 border-dashed border-outline-variant flex items-center justify-center text-outline">
                            <span class="material-symbols-outlined text-xl">add</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-4 space-y-6 lg:space-y-8">
                <div class="glass-card rounded-xl p-5 lg:p-8 shadow-sm">
                    <h2 class="font-h3 text-xl mb-6">Classification</h2>
                    <div class="space-y-4">
                        <select class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-3 outline-none">
                            <option>Residential Villa</option>
                            <option>Luxury Penthouse</option>
                        </select>
                        <div class="space-y-2">
                            <label class="flex items-center p-3 bg-secondary-container/30 border border-secondary/20 rounded-lg">
                                <input checked class="text-secondary" name="status" type="radio"/>
                                <span class="ml-3 text-sm font-semibold">Active Listing</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <button class="w-full bg-secondary text-white font-bold py-4 rounded-xl shadow-lg hover:bg-on-secondary-container transition-all flex items-center justify-center" type="submit">
                        <span class="material-symbols-outlined mr-2">save</span> Save Property
                    </button>
                    <button class="w-full bg-white border border-secondary/30 text-secondary font-bold py-4 rounded-xl hover:bg-secondary/5 transition-all" type="button">
                        Cancel
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>

<section class="lg:ml-64 px-4 lg:px-8 pb-12">
    <div class="max-w-container-max mx-auto">
        <div class="glass-card rounded-xl overflow-hidden h-48 lg:h-64 relative border border-outline-variant/30">
            <img alt="Map" class="w-full h-full object-cover brightness-75 contrast-75" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9aJ9t5kETZbVvf1MFgw9crWJkC6wa-y4LfCod-8GaGNHMw_JiFPq6RYOzubNMcqHx9KRWNAGHZh0T6l1AB7ziGqKNqxv1JwKIGyqeN4lSeEPiBMJ_zszkq3L1M6UzlUidchQnAe8UMCu30VpmyJU6H1WrP0Xj5Zh22OVxgoQeooMNZAPqLZ29ltsFH1TcJC9f_dZJOdkGTzeYG0QpfwVrWi2n1g8MsbWu0Rz69Q4v8Qi7qPPVNSbMwssB7pCT3qE5pXzrYhJDFGR5"/>
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/60 to-transparent flex items-end p-6 lg:p-8 text-white">
                <div class="flex items-center">
                    <span class="material-symbols-outlined mr-3 text-3xl lg:text-4xl" style="font-variation-settings: 'FILL' 1;">map</span>
                    <div>
                        <h3 class="font-h3 text-lg lg:text-h3">Interactive Geofencing</h3>
                        <p class="text-xs lg:text-body-md opacity-80">Precision mapping active after validation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar-nav');
        const overlay = document.getElementById('mobile-overlay');
        
        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.classList.add('opacity-100'), 10);
        } else {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            overlay.classList.remove('opacity-100');
            setTimeout(() => overlay.classList.add('hidden'), 300);
        }
    }
</script>

</body>
</html>