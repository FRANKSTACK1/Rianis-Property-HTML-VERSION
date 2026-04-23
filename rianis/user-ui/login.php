<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rianis Property Limited | Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
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
                },
            },
        }
    </script>
</head>
<body class="bg-surface min-h-screen flex items-center justify-center font-body-md relative overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute top-[-10%] left-[-5%] w-[40%] h-[60%] rounded-full bg-secondary/10 blur-[120px]"></div>
<div class="absolute bottom-[-10%] right-[-5%] w-[40%] h-[60%] rounded-full bg-primary-container/10 blur-[120px]"></div>
</div>
<!--?php 
    // Error handling logic
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Authentication logic here
    }
    ?-->
<main class="relative z-10 w-full max-w-md px-margin-mobile md:px-0">
<div class="glass-card rounded-xl shadow-[0_32px_64px_-12px_rgba(0,53,39,0.12)] p-stack-lg flex flex-col items-center">
<div class="mb-stack-md text-center">
<div class="flex items-center justify-center mb-unit">
<span class="material-symbols-outlined text-primary text-[32px] mr-2" data-icon="real_estate_agent">real_estate_agent</span>
<h1 class="font-h3 text-h3 text-primary tracking-tighter">Rianis Property</h1>
</div>
<h2 class="font-h3 text-h3 text-on-surface">Welcome Back</h2>
<p class="text-on-surface-variant font-body-md mt-unit">Please enter your details to sign in</p>
</div>
<!--?php if ($error): ?-->
<div class="w-full p-stack-sm bg-error-container text-on-error-container rounded-lg mb-stack-md text-sm">
<!--?php echo $error; ?-->
</div>
<!--?php endif; ?-->
<form action="login.php" class="w-full space-y-stack-md" method="POST">
<div class="space-y-unit">
<label class="block font-label-caps text-label-caps text-outline uppercase" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]" data-icon="mail">mail</span>
<input class="w-full h-[52px] pl-12 pr-4 bg-surface-container-low border-transparent focus:border-primary focus:ring-0 rounded-lg transition-all font-body-md" id="email" name="email" placeholder="investor@rianis.com" required="" type="email"/>
</div>
</div>
<div class="space-y-unit">
<div class="flex justify-between items-center">
<label class="font-label-caps text-label-caps text-outline uppercase" for="password">Password</label>
<a class="text-secondary font-label-caps text-label-caps hover:underline" href="#">Forgot Password?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]" data-icon="lock">lock</span>
<input class="w-full h-[52px] pl-12 pr-12 bg-surface-container-low border-transparent focus:border-primary focus:ring-0 rounded-lg transition-all font-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors" id="togglePassword" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility" id="passwordIcon">visibility</span>
</button>
</div>
</div>
<div class="flex items-center space-x-2">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20 cursor-pointer" id="remember" name="remember" type="checkbox"/>
<label class="font-body-md text-on-surface-variant cursor-pointer" for="remember">Remember Me</label>
</div>
<button class="w-full h-[56px] bg-primary text-white font-h3 text-body-lg rounded-lg hover:bg-primary-container transition-all shadow-lg active:scale-[0.98]" type="submit">
                    Login
                </button>
</form>
<div class="w-full flex items-center my-stack-md">
<div class="flex-grow border-t border-outline-variant"></div>
<span class="px-4 font-label-caps text-label-caps text-outline">OR</span>
<div class="flex-grow border-t border-outline-variant"></div>
</div>
<button class="w-full h-[56px] bg-white border border-outline-variant text-on-surface font-body-md rounded-lg flex items-center justify-center space-x-3 hover:bg-surface-container-low transition-all active:scale-[0.98]" type="button">
<img alt="Google Logo" class="w-5 h-5" data-alt="Official Google G logo in standard brand colors red yellow green and blue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAXFi6E-hvzngIF7e54ZcFA2oe27VUZKjtw80PoC-GU2qPE9GLDvO697-zh6L2VS2jIsj11ozFnuVj3U-P3MDoKCXMCteDY-57a01fxBryZDCRX1-cEdZLmIIjYvGMZR6n81vAoWrl13EQLVHc94xcAt4enwxKtgI19uwcld29u9qJJ01VWm21xvKsKd8VB_oD7WuXtWfIXZ1kXC2XynAn2U-jzz4IVP-T_jyDJl0o3lHWKGQF5M2uT9ArWlqIYphfQ7MQ0r_28z66"/>
<span>Continue with Google</span>
</button>
<div class="mt-stack-lg text-center">
<p class="font-body-md text-on-surface-variant">
                    Don't have an account? 
                    <a class="text-secondary font-bold hover:underline" href="signup.php">Sign up</a>
</p>
</div>
</div>
<footer class="mt-stack-md text-center">
<p class="font-label-caps text-label-caps text-outline uppercase tracking-widest opacity-60">© 2024 RIANIS PROPERTY LIMITED</p>
</footer>
</main>
<script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');
        const passwordIcon = document.querySelector('#passwordIcon');

        togglePassword.addEventListener('click', function (e) {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            if (type === 'password') {
                passwordIcon.textContent = 'visibility';
                passwordIcon.dataset.icon = 'visibility';
            } else {
                passwordIcon.textContent = 'visibility_off';
                passwordIcon.dataset.icon = 'visibility_off';
            }
        });
    </script>
</body></html>