<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        /* Custom Sidebar Transitions */
.sidebar-transition {
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Sidebar behavior classes */
.sidebar-open {
    transform: translateX(0) !important;
}

.overlay-visible {
    display: block !important;
    opacity: 1 !important;
}

/* Nav Link Base Styles */
.nav-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    border-radius: 8px;
    color: rgba(209, 250, 229, 0.7); /* text-emerald-100/70 */
    transition: all 0.2s ease;
    cursor: pointer;
}

.nav-link:hover {
    color: #ffffff;
    background: rgba(6, 78, 59, 0.4); /* subtle emerald tint */
}

/* Active Link State */
.nav-link.active {
    background: rgba(6, 95, 70, 0.5); /* bg-emerald-800/50 */
    color: #fbbf24; /* amber-400 */
    border-left: 4px solid #f59e0b; /* border-amber-500 */
    padding-left: 12px; /* Adjusted for border thickness */
}

/* Scale effect on click */
.nav-link:active {
    transform: scale(0.97);
}

/* Custom scrollbar for the nav area */
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(251, 191, 36, 0.1);
    border-radius: 10px;
}

/* Accessibility: Hide mobile bar on desktop */
@media (min-width: 768px) {
    #sidebar-overlay, #menu-open, #menu-close {
        display: none !important;
    }
}
    </style>
</head>
<body class="bg-slate-50">

    <div class="md:hidden fixed top-0 left-0 w-full bg-emerald-900 p-4 flex items-center z-40 shadow-lg">
        <button id="menu-open" class="text-amber-400 p-1 flex items-center justify-center rounded-lg hover:bg-emerald-800 transition-colors" aria-label="Open Menu">
            <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
        <span class="ml-4 text-white font-bold">Rianis Playbook</span>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-emerald-950/60 backdrop-blur-sm z-[45] hidden transition-opacity duration-300 opacity-0"></div>

    <aside id="main-sidebar" class="sidebar-transition bg-emerald-900 dark:bg-emerald-950 text-amber-400 font-inter antialiased border-r border-emerald-800 shadow-2xl fixed left-0 top-0 h-screen w-72 flex flex-col z-[50] -translate-x-full md:translate-x-0">
        
        <div class="px-6 py-8 flex flex-col h-full">
            
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-amber-400 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-emerald-900" style="font-variation-settings: 'FILL' 1;">domain</span>
                    </div>
                    <div>
                        <h1 class="text-white font-black text-xl leading-none">Rianis Playbook</h1>
                        <p class="text-emerald-300/60 text-xs mt-1">Internal Admin Hub</p>
                    </div>
                </div>
                <button id="menu-close" class="md:hidden text-emerald-300 hover:text-white transition-colors" aria-label="Close Menu">
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>

            <nav class="flex-1 flex flex-col gap-1 overflow-y-auto custom-scrollbar">
                <a href="../document/admin-playbook.php" class="nav-link active">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-semibold">Dashboard</span>
                </a>
                <a href="../document/daily-operations.php" class="nav-link">
                    <span class="material-symbols-outlined">inventory_2</span>
                    <span class="font-medium">Daily Operations</span>
                </a>
                <a href="../document/scaling-strategies.php" class="nav-link">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span class="font-medium">Scaling Strategies</span>
                </a>
                <a href="../document/legal-framework.php" class="nav-link">
                    <span class="material-symbols-outlined">gavel</span>
                    <span class="font-medium">Legal Framework</span>
                </a>
            </nav>

            <div class="mt-auto border-t border-emerald-800/50 pt-6 flex flex-col gap-1">
                <a href="../support-center.php" class="nav-link text-sm py-2">
                    <span class="material-symbols-outlined text-lg">help_outline</span>
                    <span>Support</span>
                </a>
                <a href="../logout.php" class="nav-link text-sm py-2">
                    <span class="material-symbols-outlined text-lg">logout</span>
                    <span>Sign Out</span>
                </a>
            </div>
        </div>
    </aside>

    <main class="md:ml-72 p-8 pt-24 md:pt-8 transition-all duration-300">
        </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('main-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const openBtn = document.getElementById('menu-open');
    const closeBtn = document.getElementById('menu-close');
    const navLinks = document.querySelectorAll('.nav-link');

    // Function to Toggle Sidebar
    const toggleSidebar = (state) => {
        if (state === 'open') {
            sidebar.classList.add('sidebar-open');
            overlay.classList.add('overlay-visible');
            document.body.style.overflow = 'hidden'; // Prevent scrolling background
        } else {
            sidebar.classList.remove('sidebar-open');
            overlay.classList.remove('overlay-visible');
            document.body.style.overflow = '';
        }
    };

    // Event Listeners
    openBtn.addEventListener('click', () => toggleSidebar('open'));
    closeBtn.addEventListener('click', () => toggleSidebar('close'));
    overlay.addEventListener('click', () => toggleSidebar('close'));

    // Handle Active Link Highlighting based on current URL
    const currentPath = window.location.pathname;
    navLinks.forEach(link => {
        if (link.getAttribute('href') !== "#" && currentPath.includes(link.getAttribute('href'))) {
            // Remove active class from others first
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        }

        // Close sidebar when a link is clicked on mobile
        link.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                toggleSidebar('close');
            }
        });
    });

    // Close sidebar on window resize if moving to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            toggleSidebar('close');
        }
    });
});
    </script>
</body>
</html>