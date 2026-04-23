<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rianis Property Limited | Reset Password</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#6b342d",
                        "primary-fixed": "#b0f0d6",
                        "on-surface": "#191c1b",
                        "on-tertiary-fixed": "#380d08",
                        "on-surface-variant": "#404944",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#2b6954",
                        "outline-variant": "#bfc9c3",
                        "on-error-container": "#93000a",
                        "secondary-container": "#82f5c1",
                        "surface": "#f8faf6",
                        "tertiary-fixed-dim": "#ffb4a9",
                        "secondary-fixed-dim": "#68dba9",
                        "surface-container-high": "#e7e9e5",
                        "primary-fixed-dim": "#95d3ba",
                        "surface-variant": "#e1e3e0",
                        "on-primary-fixed-variant": "#0b513d",
                        "surface-bright": "#f8faf6",
                        "on-primary-container": "#80bea6",
                        "secondary-fixed": "#85f8c4",
                        "on-secondary-container": "#00714e",
                        "surface-container-highest": "#e1e3e0",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#ea9e93",
                        "inverse-surface": "#2e312f",
                        "primary": "#003527",
                        "on-secondary-fixed-variant": "#005137",
                        "on-error": "#ffffff",
                        "on-background": "#191c1b",
                        "surface-dim": "#d8dbd7",
                        "on-tertiary-fixed-variant": "#6e372f",
                        "tertiary": "#4f1f19",
                        "inverse-on-surface": "#eff1ee",
                        "on-primary-fixed": "#002117",
                        "background": "#f8faf6",
                        "tertiary-fixed": "#ffdad5",
                        "outline": "#707974",
                        "error": "#ba1a1a",
                        "secondary": "#006c4a",
                        "primary-container": "#064e3b",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed": "#002114",
                        "surface-container-low": "#f2f4f1",
                        "inverse-primary": "#95d3ba",
                        "on-primary": "#ffffff",
                        "error-container": "#ffdad6",
                        "surface-container": "#eceeeb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "12px",
                        "margin-mobile": "16px",
                        "stack-lg": "48px",
                        "unit": "8px",
                        "margin-desktop": "48px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "stack-md": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "h3": ["Inter"],
                        "h2": ["Inter"],
                        "label-caps": ["Inter"],
                        "body-lg": ["Inter"],
                        "h1": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0", "fontWeight": "700"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}]
                    }
                }
            }
        }
    </script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(6, 78, 59, 0.1);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-background min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 border-b border-emerald-100/20 bg-white/80 backdrop-blur-xl shadow-[0_8px_32px_0_rgba(6,78,59,0.1)] h-20">
<div class="flex justify-between items-center px-8 h-full max-w-7xl mx-auto w-full">
<div class="text-xl font-bold tracking-tighter text-emerald-900 font-h3">Rianis Property</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">Properties</a>
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">Buy</a>
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">Rent</a>
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">Sell</a>
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">About Us</a>
<a class="text-emerald-800/70 hover:text-emerald-900 transition-colors font-body-md" href="#">Contact</a>
</div>
<div class="flex items-center gap-4">
<button class="text-emerald-800/70 hover:text-emerald-900 font-semibold px-4 py-2 transition-all">Login</button>
<button class="bg-primary text-white px-6 py-2.5 rounded-lg font-semibold hover:opacity-90 transition-all shadow-md">List Property</button>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center pt-20 px-4 relative overflow-hidden">
<!-- Background Decorative Elements -->
<div class="absolute top-0 left-0 w-full h-full -z-10">
<div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-secondary-container/20 rounded-full blur-[120px]"></div>
<div class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-primary-fixed/30 rounded-full blur-[100px]"></div>
</div>
<!-- Glassmorphic Card Container -->
<div class="glass-card w-full max-w-[480px] rounded-xl p-stack-lg md:p-12 animate-in fade-in zoom-in duration-700">
<div class="mb-stack-lg text-center">
<span class="inline-flex items-center justify-center w-12 h-12 bg-primary-container rounded-full mb-stack-sm shadow-inner">
<span class="material-symbols-outlined text-on-primary-container" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
</span>
<h1 class="font-h2 text-h2 text-primary mb-2">Create New Password</h1>
<p class="text-on-surface-variant font-body-md">Ensure your account stays secure with a strong, unique password.</p>
</div>
<!-- PHP Token Handling -->
<!--?php $token = $_GET['token'] ?? ''; ?-->
<form action="reset-password-process.php" class="space-y-stack-md" method="POST">
<input name="token" type="hidden" value="&lt;?php echo htmlspecialchars($token); ?&gt;"/>
<!-- Password Field -->
<div class="space-y-2">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="password">New Password</label>
<div class="relative">
<input class="w-full h-12 bg-surface-container-low border border-outline-variant rounded-lg px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline cursor-pointer hover:text-primary">visibility</span>
</div>
</div>
<!-- Confirm Password Field -->
<div class="space-y-2">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="confirm_password">Confirm Password</label>
<div class="relative">
<input class="w-full h-12 bg-surface-container-low border border-outline-variant rounded-lg px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md" id="confirm_password" name="confirm_password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<!-- Primary CTA -->
<button class="w-full h-[52px] bg-primary text-on-primary rounded-lg font-h3 text-body-md hover:shadow-lg active:scale-[0.98] transition-all flex items-center justify-center gap-2 mt-4" type="submit">
                    Reset Password
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</form>
<!-- Secondary Action / Redirect -->
<div class="mt-stack-lg pt-stack-md border-t border-emerald-100/50 text-center">
<p class="text-on-surface-variant font-body-md mb-2">Remembered your password?</p>
<a class="text-secondary font-semibold hover:underline flex items-center justify-center gap-1 group" href="login.php">
                    Back to Login
                    <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform">login</span>
</a>
</div>
<!-- Success Message (Hidden by default, shown via logic) -->
<div class="hidden mt-stack-md p-4 bg-secondary-container/30 border border-secondary/20 rounded-lg text-on-secondary-container flex items-start gap-3">
<span class="material-symbols-outlined text-secondary">check_circle</span>
<div>
<p class="font-semibold text-sm">Password Updated!</p>
<p class="text-xs opacity-80">You will be redirected to the login page in 5 seconds.</p>
</div>
</div>
</div>
</main>
<!-- Footer -->

<?php 
include '../inc/contact-footer.php'; 
?>
<!-- Decorative Bottom Detail -->
<div class="fixed bottom-8 right-8 hidden lg:block opacity-20 hover:opacity-50 transition-opacity">
<img alt="minimalist geometric monogram of R and P intertwined with elegant serif lines" class="w-24 h-24" data-alt="minimalist geometric monogram of R and P intertwined with elegant serif lines in a sophisticated emerald and gold style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrnWW8xO1pj_J2wFEZHkoUD5oXt0ecD4nBEyNiNW19ToqVlxj8yAj8AI48CWZwSLSOyKRCTgZ6qnICvENYNZGF8P9oOZK8cUVe0MqK-QoCWoZLy2I9hp2qkG8mc4oNyaVXLoRSFh8BI__g9cP7vjsng8LZGLyyq00pOKkRgeTmEZjj71G0KSKwtZ6alX1CIUDhDOpgc0UOS_81HABb4pzfpjDqgde8Jdk-SzckCV5hr037EOiMXtxCaqQIsoUqUAScwPjJS6ge7hNr"/>
</div>
</body></html>