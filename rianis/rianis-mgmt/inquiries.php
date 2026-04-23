<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#003527",
                        "secondary": "#006c4a",
                        "on-surface-variant": "#404944",
                        "outline": "#707974",
                        "surface": "#f8faf6",
                        "surface-container-low": "#f2f4f1",
                        "secondary-container": "#82f5c1",
                        "on-secondary-container": "#00714e",
                        "primary-container": "#064e3b",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a"
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        /* Hide scrollbar for clean UI but allow scrolling */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-surface font-sans text-on-background antialiased">

    <?php include 'inc/sidebar.php'; ?>

    <header class="fixed top-0 right-0 left-0 md:left-64 h-16 border-b border-gray-100 bg-white/80 backdrop-blur-xl flex justify-between items-center px-4 md:px-8 z-40 shadow-sm transition-all">
        <div class="flex items-center flex-grow max-w-xl ml-12 md:ml-0">
            <div class="relative w-full group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 text-xs md:text-sm focus:ring-2 focus:ring-secondary/20 transition-all" placeholder="Search..." type="text"/>
            </div>
        </div>
        
        <div class="flex items-center space-x-2 md:space-x-4">
            <button class="hover:bg-gray-50 rounded-full p-2 text-outline-variant transition-all hidden sm:block">
                <span class="material-symbols-outlined text-xl">notifications</span>
            </button>
            <div class="h-8 w-px bg-gray-200 mx-1 hidden sm:block"></div>
            <div class="flex items-center space-x-2">
                <div class="text-right hidden xs:block">
                    <p class="text-[10px] md:text-xs font-bold text-primary leading-none">Chief Admin</p>
                    <p class="text-[8px] md:text-[10px] text-outline">Superuser</p>
                </div>
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDimFxG2cbdCDBLhdq-yMuomPngUhikkzUCWS6TWhkhSqqIGX43G8AhS0dswq3LfPlijIwFXpUPIvWyFuIk9w2YlG_UjWxQEhHTcuO_BPTqT9BYIXqckpKp6mTwgINS1Y32isUMvHuICPUH_4ZiVu6iQXprE4572hYEKgOpLnsAAnlV72GKmDAkPXq-hmYHbrI8cqbp6xm7_m2q9y74C26ULB7G2xOFij3dh3UnEc7h8QF1De0X3h_Gl08SzZaSJeKFuFK4ZKb8NzVE" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover border border-secondary/20" alt="Admin"/>
            </div>
        </div>
    </header>

    <main class="md:ml-64 pt-20 px-4 md:px-12 pb-12 bg-surface min-h-screen transition-all">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end mb-8 gap-4">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-primary tracking-tight">Client Inquiries</h2>
                    <p class="text-sm text-on-surface-variant mt-1">Manage incoming leads and requests.</p>
                </div>
                <div class="flex space-x-2">
                    <button class="flex-1 sm:flex-none flex items-center justify-center px-4 py-2.5 bg-white border border-outline-variant rounded-xl text-secondary text-sm font-semibold hover:bg-secondary/5 transition-all">
                        <span class="material-symbols-outlined text-sm mr-2">file_download</span>
                        Export
                    </button>
                    <button class="flex-1 sm:flex-none flex items-center justify-center px-4 py-2.5 bg-secondary text-white rounded-xl text-sm font-semibold hover:opacity-90 shadow-lg shadow-secondary/10">
                        <span class="material-symbols-outlined text-sm mr-2">refresh</span>
                        Sync
                    </button>
                </div>
            </div>

            <div class="flex overflow-x-auto no-scrollbar sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8 pb-2">
                <div class="glass-panel p-4 rounded-2xl flex items-center min-w-[200px] sm:min-w-0 shadow-sm shrink-0">
                    <div class="w-10 h-10 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary-container mr-3">
                        <span class="material-symbols-outlined text-xl">inbox</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-outline uppercase tracking-wider font-bold">Total</p>
                        <p class="text-lg font-bold text-primary">1,284</p>
                    </div>
                </div>
                <div class="glass-panel p-4 rounded-2xl flex items-center min-w-[200px] sm:min-w-0 shadow-sm border-l-4 border-amber-400 shrink-0">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 mr-3">
                        <span class="material-symbols-outlined text-xl">new_releases</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-outline uppercase tracking-wider font-bold">New</p>
                        <p class="text-lg font-bold text-primary">42</p>
                    </div>
                </div>
                <div class="glass-panel p-4 rounded-2xl flex items-center min-w-[200px] sm:min-w-0 shadow-sm shrink-0">
                    <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-white mr-3">
                        <span class="material-symbols-outlined text-xl">verified</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-outline uppercase tracking-wider font-bold">Contacted</p>
                        <p class="text-lg font-bold text-primary">1,120</p>
                    </div>
                </div>
                <div class="glass-panel p-4 rounded-2xl flex items-center min-w-[200px] sm:min-w-0 shadow-sm shrink-0">
                    <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center text-outline mr-3">
                        <span class="material-symbols-outlined text-xl">timer</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-outline uppercase tracking-wider font-bold">Response</p>
                        <p class="text-lg font-bold text-primary">1.4h</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[800px]">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Client</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Contact</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Property</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Status</th>
                                <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-gray-50/80 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-9 w-9 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold mr-3 text-xs">CO</div>
                                        <div>
                                            <p class="text-sm font-bold text-primary">Chinedu Okafor</p>
                                            <span class="text-[8px] px-1 py-0.5 rounded bg-amber-100 text-amber-700 font-bold uppercase">Priority</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-xs text-primary font-medium">c.okafor@prime.ng</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center text-secondary font-bold text-xs">
                                        <span class="material-symbols-outlined text-xs mr-1">apartment</span> Z-104 Riverview
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-0.5 bg-amber-100 text-amber-800 text-[9px] font-black rounded-full">NEW</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-1">
                                        <button class="p-1.5 bg-secondary text-white rounded-lg"><span class="material-symbols-outlined text-xs">done_all</span></button>
                                        <button class="p-1.5 bg-error-container text-on-error-container rounded-lg"><span class="material-symbols-outlined text-xs">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="glass-panel p-6 rounded-3xl shadow-sm">
                    <h3 class="text-lg font-bold text-primary mb-4">Inquiry Trends</h3>
                    <div class="h-24 w-full flex items-end space-x-2">
                        <div class="flex-1 bg-secondary/20 h-[40%] rounded-t-md"></div>
                        <div class="flex-1 bg-secondary/40 h-[70%] rounded-t-md"></div>
                        <div class="flex-1 bg-secondary h-[90%] rounded-t-md"></div>
                        <div class="flex-1 bg-secondary/60 h-[50%] rounded-t-md"></div>
                    </div>
                </div>
                <div class="glass-panel p-6 rounded-3xl shadow-sm">
                    <h3 class="text-lg font-bold text-primary mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <button class="p-3 bg-white border rounded-xl text-xs font-bold text-primary hover:bg-gray-50 flex items-center">
                            <span class="material-symbols-outlined mr-2 text-sm text-secondary">mail</span> Email Summary
                        </button>
                        <button class="p-3 bg-white border rounded-xl text-xs font-bold text-primary hover:bg-gray-50 flex items-center">
                            <span class="material-symbols-outlined mr-2 text-sm text-secondary">schedule</span> Reminders
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>
</html>