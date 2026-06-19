<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Focus - Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#2a1700",
                        "surface-bright": "#f8f9ff",
                        "on-secondary": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "surface-container": "#e5eeff",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#6ffbbe",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed-dim": "#ffb95f",
                        "tertiary": "#684000",
                        "inverse-primary": "#c3c0ff",
                        "on-primary-container": "#dad7ff",
                        "surface-container-low": "#eff4ff",
                        "secondary": "#006c49",
                        "primary-fixed-dim": "#c3c0ff",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#464555",
                        "error": "#ba1a1a",
                        "primary-fixed": "#e2dfff",
                        "inverse-on-surface": "#eaf1ff",
                        "on-primary-fixed": "#0f0069",
                        "on-secondary-fixed": "#002113",
                        "on-secondary-container": "#00714d",
                        "outline-variant": "#c7c4d8",
                        "surface-tint": "#4d44e3",
                        "secondary-fixed-dim": "#4edea3",
                        "primary": "#3525cd",
                        "tertiary-fixed": "#ffddb8",
                        "background": "#f8f9ff",
                        "surface-variant": "#d3e4fe",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#ffd4a4",
                        "error-container": "#ffdad6",
                        "on-surface": "#0b1c30",
                        "surface-container-highest": "#d3e4fe",
                        "on-error-container": "#93000a",
                        "surface-container-high": "#dce9ff",
                        "on-secondary-fixed-variant": "#005236",
                        "tertiary-container": "#885500",
                        "primary-container": "#4f46e5",
                        "surface": "#f8f9ff",
                        "inverse-surface": "#213145",
                        "on-primary-fixed-variant": "#3323cc",
                        "on-tertiary-fixed-variant": "#653e00",
                        "outline": "#777587",
                        "on-background": "#0b1c30",
                        "secondary-container": "#6cf8bb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "stack-md": "12px",
                        "container-max": "1200px",
                        "stack-lg": "24px",
                        "gutter-desktop": "24px",
                        "gutter-mobile": "16px",
                        "stack-sm": "4px"
                    },
                    "fontFamily": {
                        "headline-md": ["Geist"],
                        "label-md": ["Geist"],
                        "label-sm": ["Geist"],
                        "body-md": ["Geist"],
                        "headline-lg": ["Geist"],
                        "headline-lg-mobile": ["Geist"],
                        "body-lg": ["Geist"]
                    },
                    "fontSize": {
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.03em",
                            "fontWeight": "500"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Geist', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .card-elevation {
            box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.05), 0px 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen">
<!-- SideNavBar (Shared Component) -->
    <aside
        class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low dark:bg-surface-dim shadow-sm flex flex-col py-stack-lg px-stack-md transition-all duration-200 ease-in-out z-50">
        <div class="mb-stack-lg px-2">
            <h1 class="text-headline-md font-headline-md font-black text-primary dark:text-primary-fixed-dim">Focus</h1>
            <p class="text-label-sm font-label-sm text-on-surface-variant">Productivity Workspace</p>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Active Tab: Dashboard -->
            <a class="flex items-center gap-3 px-4 py-3 text-primary font-bold bg-surface-container-highest rounded-lg transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="format_list_bulleted">format_list_bulleted</span>
                <span class="font-label-md text-label-md">Task List</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-label-md text-label-md">Calendar</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-label-md text-label-md">Profile</span>
            </a>
        </nav>
        <div class="mt-auto space-y-2 border-t border-outline-variant pt-stack-lg">
            <button
                class="w-full bg-primary text-on-primary font-bold py-3 rounded-lg flex items-center justify-center gap-2 cursor-pointer active:scale-95 transition-transform">
                <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
                <span class="font-label-md text-label-md">Create Task</span>
            </button>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-label-md text-label-md">Help</span>
            </a>
        </div>
    </aside>
    
    
    <main class="{{ $mainClass }}">
      <!-- TopNavBar (Shared Component) -->
    <header
        class="w-full h-16 bg-surface border-b border-outline-variant flex justify-between items-center px-gutter-desktop max-w-container-max mx-auto sticky top-0 z-40">
        <div class="flex items-center gap-stack-lg">
            <div class="relative w-64 group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant"
                    data-icon="search">search</span>
                <input
                    class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:border-primary transition-all"
                    placeholder="Search tasks..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-4">
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors"
                    data-icon="notifications">notifications</button>
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors"
                    data-icon="account_circle">account_circle</button>
            </div>
            <button
                class="bg-primary text-on-primary px-6 py-2 rounded-full font-label-md text-label-md hover:bg-primary-container transition-colors active:scale-95">Create
                Task</button>
        </div>
    </header>
        {{ $slot }}
    </main>

    <!-- Micro-interaction Scripts -->
    <script>
        // Simple animation on load
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.animate-fade-in');
            items.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    el.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Toggle hover effect for navigation
        const navItems = document.querySelectorAll('nav a');
        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                navItems.forEach(i => {
                    i.classList.remove('text-primary', 'font-bold', 'bg-surface-container-highest');
                    i.classList.add('text-on-surface-variant');
                });
                item.classList.add('text-primary', 'font-bold', 'bg-surface-container-highest');
                item.classList.remove('text-on-surface-variant');
            });
        });
    </script>
</body>

</html>
