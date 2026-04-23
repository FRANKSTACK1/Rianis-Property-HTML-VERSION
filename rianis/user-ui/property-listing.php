<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rianis Property Limited | Premium Listings</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .glass-panel {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface">
   <?php 
include '../inc/header.php'; 
?>
<main class="pt-32 pb-24 px-8 max-w-7xl mx-auto">
<header class="mb-12">
<h1 class="font-h1 text-h1 text-primary mb-4">Available Properties</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Discover elite architectural masterpieces and premium land investments in Onitsha's most coveted locations.</p>
</header>
<div class="flex flex-col lg:flex-row gap-8">
<aside class="w-full lg:w-72 flex-shrink-0 space-y-8">
<div class="bg-white rounded-xl p-6 shadow-sm border border-outline-variant/30">
<h2 class="font-h3 text-h3 text-primary mb-6 text-lg">Filters</h2>
<div class="space-y-6">
<div>
<label class="font-label-caps text-label-caps text-outline uppercase block mb-4">Price Range</label>
<input class="w-full h-2 bg-surface-container rounded-lg appearance-none cursor-pointer accent-secondary" type="range"/>
<div class="flex justify-between mt-2 text-sm font-medium text-on-surface-variant">
<span>₦5M</span>
<span>₦500M+</span>
</div>
</div>
<div>
<label class="font-label-caps text-label-caps text-outline uppercase block mb-4">Property Type</label>
<div class="space-y-3">
<label class="flex items-center gap-3 cursor-pointer">
<input checked="" class="rounded border-outline text-secondary focus:ring-secondary" type="checkbox"/>
<span class="text-body-md">Residential</span>
</label>
<label class="flex items-center gap-3 cursor-pointer">
<input class="rounded border-outline text-secondary focus:ring-secondary" type="checkbox"/>
<span class="text-body-md">Commercial</span>
</label>
<label class="flex items-center gap-3 cursor-pointer">
<input class="rounded border-outline text-secondary focus:ring-secondary" type="checkbox"/>
<span class="text-body-md">Land &amp; Plots</span>
</label>
<label class="flex items-center gap-3 cursor-pointer">
<input class="rounded border-outline text-secondary focus:ring-secondary" type="checkbox"/>
<span class="text-body-md">Industrial</span>
</label>
</div>
</div>
<div>
<label class="font-label-caps text-label-caps text-outline uppercase block mb-4">Location</label>
<select class="w-full rounded-lg border-outline-variant bg-surface-container-lowest text-body-md py-3 px-4 focus:ring-2 focus:ring-secondary focus:border-secondary">
<option>All Locations</option>
<option>GRA Onitsha</option>
<option>Fegge</option>
<option>Awada</option>
<option>Obosi</option>
</select>
</div>
<button class="w-full bg-secondary text-on-secondary py-3 rounded-lg font-bold hover:opacity-90 transition-opacity">
                            Apply Filters
                        </button>
</div>
</div>
</aside>
<section class="flex-grow">
<div class="flex justify-between items-center mb-8">
<p class="text-on-surface-variant font-body-md">Showing <span class="font-bold text-primary">24</span> premium listings</p>
<div class="flex items-center gap-2">
<span class="text-sm font-medium text-outline">Sort by:</span>
<select class="border-none bg-transparent font-bold text-primary focus:ring-0 cursor-pointer">
<option>Newest First</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
<option>Most Popular</option>
</select>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8">
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="luxury modern mansion with clean white lines and glass walls surrounded by manicured green lawns at twilight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPQLUW7uHfX1kSFuiEc6tsBlVMmPKrxTAdCnd5x85NOyg4y_2qFSUGGG3b-6VpUtpa5j4dvxaDnb-wJj1ykPEmkCfwDFj7ugwBvvNYPa7BCcAtEup-xUUXLcvLhH0LIYvrQW83z_ITuycWiRfxPpgBcFoF2GRoM_-6r3ybvzU4380XFmSjbUnlEYYpgW6Xpy7QxDgmkOZM-30kG7Q1hRwlCBgEyhZYDQAClTFVPcQvOXcrE22TwJIbB5Fdc2wKJvCwuDJqLZ24EKMu"/>
<div class="absolute top-4 left-4 bg-emerald-900/90 text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest backdrop-blur-md">Featured</div>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">GRA Onitsha</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">The Emerald Vista Mansion</h3>
<p class="text-secondary font-h3 text-xl">₦250M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">Exquisite 6-bedroom fully detached smart home featuring a private cinema and infinity pool.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bed</span>
<span class="text-sm font-semibold">6</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bathtub</span>
<span class="text-sm font-semibold">7</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">square_foot</span>
<span class="text-sm font-semibold">1,200 m²</span>
</div>
</div>
<a href="property-details.php" class="text-secondary font-bold text-sm hover:underline">Details</a>
</div>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="contemporary beachfront property with expansive deck and outdoor lounge areas overlooking clear turquoise water" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaWuMclU0brweUVkMnOWR7YNwPzx5V0TKPFO_I6cix57x_cmgOYcCFpFj3u5d-R-Lc_gm5PSb4h9HI7o9VUUN9jTOp8QMGC3i7ceFahtVtPD9hDgBLNhKWT51o_ENkFGRWsenwS7ZQcxTQyaVszpfi5rA8FPruuDlagHxu8-3-wFv4soa08Ib9eEuG1dVvPfJlKXvS4FKJrhxVUnfygF94m-2CJU-AT1iduBVpzVc3e-b9JScm84BlyAYi_nRpss28lmQqvLdp349P"/>
<div class="absolute top-4 left-4 bg-amber-500/90 text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest backdrop-blur-md">Hot Deal</div>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">River Niger Bank</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">Waterfront Regency</h3>
<p class="text-secondary font-h3 text-xl">₦185M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">Modern waterfront residence with panoramic views of the River Niger and private pier access.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bed</span>
<span class="text-sm font-semibold">5</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bathtub</span>
<span class="text-sm font-semibold">5</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">square_foot</span>
<span class="text-sm font-semibold">950 m²</span>
</div>
</div>
<a href="property-details.php" class="text-secondary font-bold text-sm hover:underline">Details</a>
</div>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="stately traditional luxury home with brick facade and manicured formal gardens under a clear blue sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXZGVliDLDGIAXNhcFT-XLUieMTFTssgiZr-RAcMdAPVb-aJwp72qdoK5jDRIINhc35J4RnRuYmMPpS26jCGTp1qPK4VB7KWLAvDjB1JmyLE3bdZ-bE55fulQ9BsdhKfGOYqTAhxFIJwwG4sogvibZY_MjCBqkrYqitu3-QVYzrJK9T6HgE3H-ukcMWQG6s4lqxOCvYUGmRDfORTJ061vyVs4_Ssxzq6Fs3jcyA7QSTGB7zp3GaDUaykPHBlG0MRTkQYaBfayI1HgA"/>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">Fegge Extension</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">Heritage Estates Lot</h3>
<p class="text-secondary font-h3 text-xl">₦45M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">Prime 1000sqm residential plot in a gated community with 24/7 security and utility connections.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">square_foot</span>
<span class="text-sm font-semibold">1,000 m²</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">verified</span>
<span class="text-sm font-semibold">C of O</span>
</div>
</div>
<a href="property-details.php" class="text-secondary font-bold text-sm hover:underline">Details</a>
</div>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="sleek commercial office building with reflective glass facade and minimalist architectural design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDnBgYGKvuLMpr5mviJNBkWOeiQkmMemIvtYaUV_h9rRfs3qY7h99pJ2zFiqio6JdlKTMyJ6Sdjq-Yfsc6gnzPo2fRH_vN9nyOQVglYKI_gl_NjaqiEOXoQ2_2YnwVxqTZxstqZIHMSGbgjHVdJJAw3TZbseCfb1ALLzJykhCaQQDLJUOk3-Rcp1F9ElY9rn9XS9N88fvXWKZvaiBo-krxSxSKUagxAKAEWCedDdC9NXKs55-AjkmVU0QRRDWVtUiC98pS3aWqGW6K"/>
<div class="absolute top-4 left-4 bg-emerald-900/90 text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest backdrop-blur-md">Commercial</div>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">Main Market Hub</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">Business Central Tower</h3>
<p class="text-secondary font-h3 text-xl">₦420M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">High-yield commercial plaza with 24 individual shops and 4 corporate office suites.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">apartment</span>
<span class="text-sm font-semibold">28 Units</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">square_foot</span>
<span class="text-sm font-semibold">2,500 m²</span>
</div>
</div>
<a href="property-details.php" class="text-secondary font-bold text-sm hover:underline">Details</a>
</div>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="ultra-modern villa with wooden accents and large windows glowing from within at dusk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB524eKhvd01t7oioLHvzXkn_kfdTbCe-n5u_sF3ZxWTCDYTvgOkuTHagkhqohQB9ZL3-kRLCCDs_ApoNUqOLZfukb3PyEWZcpNUiVr_AYWe_NVbVdvK0pvgP6jULB7Rt-e6Rx_amVkRDS3a_veJGUC4dYfIEkc_AUW7rYsBbE1kXm4Uk5MA00f4scTR1tYOOqKEKcE11Fi1XzTrbqlosQ1bk47jvS0qYYmj3fJEi7m3wIKCvb5LLc-Vr04JyKdEUxhDgMlyjSkQRve"/>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">Awada Heights</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">Skyline Terrace Villa</h3>
<p class="text-secondary font-h3 text-xl">₦120M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">Contemporary duplex featuring a massive rooftop terrace and sustainable solar energy system.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bed</span>
<span class="text-sm font-semibold">4</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">bathtub</span>
<span class="text-sm font-semibold">4</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">solar_power</span>
<span class="text-sm font-semibold">Solar Ready</span>
</div>
</div>
<a href="property-details.php" class="text-secondary font-bold text-sm hover:underline">Details</a>
</div>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-sm border border-outline-variant/30 group hover:shadow-xl transition-shadow duration-300">
<div class="relative h-64">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="vast expansive green farmland field under a dramatic sunset sky with rolling hills in the distance" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXFieqOfGZwZxM72q0ftkOMDYmFuRwGDZTAfceq4X3H_aFqJvTUPZUgD-wvpqP8LDssz6kn7NwKYtrj8llU-5UEiW3cOAcuubsN2iSAzTqiK8o039qOyNFq_vzIwYW9yxu9NxLlFPIKSWoRdIPZS2c6hBmmmJyw8_vCHFmDGL8OKMY-jpl5RFOLvpGbpBg7pA47oPiKuHRUzkPkkjKKxsU-gwEFZudSJPXZ-EgRYQtcjYRyo2eCZ3evcScxXq9fVU-CN-ek2tfqREj"/>
<div class="absolute top-4 left-4 bg-secondary text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest backdrop-blur-md">Investment</div>
<div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">location_on</span>
<span class="text-xs font-bold text-primary">Obosi Peripheral</span>
</div>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-h3 text-h3 text-primary text-xl">Agro-Industrial Land</h3>
<p class="text-secondary font-h3 text-xl">₦75M</p>
</div>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-2">Strategically located 5 acres of land ideal for agricultural processing or light manufacturing.</p>
<div class="flex items-center justify-between border-t border-surface-container pt-4">
<div class="flex gap-4">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">square_foot</span>
<span class="text-sm font-semibold">5 Acres</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-emerald-700">assignment</span>
<span class="text-sm font-semibold">Deed of Sale</span>
</div>
</div>
<button class="text-secondary font-bold text-sm hover:underline">Details</button>
</div>
</div>
</div>
</div>
<div class="mt-16 flex justify-center">
<nav class="flex items-center gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-emerald-50 transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-emerald-50 transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-emerald-50 transition-colors">3</button>
<span class="px-2">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-emerald-50 transition-colors">12</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-emerald-50 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</nav>
</div>
</section>
</div>
</main>
<?php 
include '../inc/footer.php'; 
?>
</body></html>