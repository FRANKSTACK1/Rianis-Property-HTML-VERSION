<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rianis Admin | Estate Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
        /* Smooth transition for the sidebar */
        #sidebar { transition: transform 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-slate-50">

    <button id="menuBtn" class="md:hidden fixed top-4 left-4 z-[60] bg-emerald-900 text-white p-3 rounded-xl shadow-lg flex items-center justify-center active:scale-90 transition-transform">
        <span class="material-symbols-outlined" id="menuIcon">menu</span>
    </button>

    <div id="overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 hidden md:hidden"></div>

    <aside id="sidebar" class="h-screen w-64 fixed left-0 top-0 bg-emerald-900 dark:bg-emerald-950 shadow-2xl flex flex-col py-6 z-50 overflow-y-auto -translate-x-full md:translate-x-0">
        
        <div class="px-6 mb-10 flex items-center gap-3">
            <div class="w-10 h-10 bg-emerald-400 rounded-xl flex items-center justify-center text-emerald-900">
                <span class="material-symbols-outlined">domain</span>
            </div>
            <div>
                <h1 class="text-lg font-black text-white tracking-tighter leading-none">Rianis Admin</h1>
                <p class="text-[10px] text-emerald-200/60 font-semibold tracking-widest uppercase mt-1">Estate Manager</p>
            </div>
        </div>

        <nav class="flex-grow space-y-1">
            <a href="../rianis-mgmt/dashboard.php" class="bg-emerald-800 text-white font-medium rounded-lg mx-2 px-4 py-3 flex items-center gap-3">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a href="../rianis-mgmt/listing.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 mx-2 px-4 py-3 rounded-lg flex items-center gap-3 transition-all hover:translate-x-1">
                <span class="material-symbols-outlined">real_estate_agent</span>
                <span>My Listings</span>
            </a>
            <a href="../rianis-mgmt/Inquiries.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 mx-2 px-4 py-3 rounded-lg flex items-center gap-3 transition-all hover:translate-x-1">
                <span class="material-symbols-outlined">mail</span>
                <span>Inquiries</span>
            </a>
            <a href="../rianis-mgmt/market.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 mx-2 px-4 py-3 rounded-lg flex items-center gap-3 transition-all hover:translate-x-1">
                <span class="material-symbols-outlined">trending_up</span>
                <span>Market Trends</span>
            </a>
            <a href="../rianis-mgmt/settings.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 mx-2 px-4 py-3 rounded-lg flex items-center gap-3 transition-all hover:translate-x-1">
                <span class="material-symbols-outlined">settings</span>
                <span>Settings</span>
            </a>
        </nav>

        <div class="mt-auto px-2 space-y-1">
            <div class="px-4 py-4 mb-4 bg-emerald-800/30 rounded-xl mx-2">
                <a href="../rianis-mgmt/add-new-property.php" class="w-full bg-emerald-400 text-emerald-950 font-bold py-3 rounded-lg text-sm flex items-center justify-center gap-2 hover:bg-emerald-300 transition-all active:scale-95">
                    <span class="material-symbols-outlined text-sm">add</span>
                    New Property
                </a>
            </div>
            <a href="../rianis-mgmt/support-center.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 px-4 py-3 rounded-lg flex items-center gap-3">
                <span class="material-symbols-outlined">support</span>
                <span>Support-Center</span>
            </a>
            <a href="../rianis-mgmt/logout.php" class="text-emerald-200/60 hover:text-white hover:bg-emerald-800/40 px-4 py-3 rounded-lg flex items-center gap-3">
                <span class="material-symbols-outlined">logout</span>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- <main class="md:ml-64 p-8">
        <h2 class="text-2xl font-bold text-emerald-900">Welcome back, Admin</h2>
    </main> -->

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const menuIcon = document.getElementById('menuIcon');

        function toggleMenu() {
            const isOpen = sidebar.classList.contains('translate-x-0');
            
            if (isOpen) {
                sidebar.classList.replace('translate-x-0', '-translate-x-full');
                overlay.classList.add('hidden');
                menuIcon.innerText = 'menu';
            } else {
                sidebar.classList.replace('-translate-x-full', 'translate-x-0');
                overlay.classList.remove('hidden');
                menuIcon.innerText = 'close';
            }
        }

        menuBtn.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    </script>
</body>
</html>