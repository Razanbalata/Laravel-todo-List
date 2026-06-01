<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap');

        body {
            font-family: 'Geist', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
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
</head>

<body class="bg-background text-on-surface min-h-screen custom-scrollbar">
    <!-- Sidebar Navigation -->
    <aside
        class="hidden md:flex flex-col h-full py-stack-lg px-stack-md bg-surface-container-low dark:bg-surface-dim shadow-sm h-screen w-64 fixed left-0 top-0 z-50">
        <div class="mb-stack-lg px-stack-md flex items-center gap-stack-md">
            <div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center text-white">
                <span class="material-symbols-outlined">bolt</span>
            </div>
            <div>
                <h1 class="text-headline-md font-headline-md font-black text-primary dark:text-primary-fixed-dim">Focus
                </h1>
                <p class="text-label-sm font-label-sm text-on-surface-variant">Productivity Workspace</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-stack-md py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined text-[20px]">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-stack-md py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined text-[20px]">format_list_bulleted</span>
                <span class="font-label-md text-label-md">Task List</span>
            </a>
            <a class="flex items-center gap-3 px-stack-md py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                <span class="font-label-md text-label-md">Calendar</span>
            </a>
            <a class="flex items-center gap-3 px-stack-md py-3 text-primary font-bold bg-surface-container-highest rounded-lg transition-all duration-200 ease-in-out"
                href="#">
                <span class="material-symbols-outlined text-[20px]"
                    style="font-variation-settings: 'FILL' 1;">person</span>
                <span class="font-label-md text-label-md">Profile</span>
            </a>
        </nav>
        <div class="mt-auto pt-stack-lg border-t border-outline-variant space-y-2">
            <a class="flex items-center gap-3 px-stack-md py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined text-[20px]">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-stack-md py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined text-[20px]">help</span>
                <span class="font-label-md text-label-md">Help</span>
            </a>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="md:ml-64 min-h-screen p-gutter-mobile md:p-gutter-desktop">
        <div class="max-w-container-max mx-auto space-y-stack-lg">
            <!-- Profile Header Card -->
            <div
                class="glass-card rounded-xl p-8 flex flex-col md:flex-row items-center gap-8 animate-in fade-in slide-in-from-bottom-4 duration-700">
                <form>

                    <div class="relative group">



                        <img alt="User Profile"
                            class="w-32 h-32 rounded-full border-4 border-white shadow-md object-cover transition-transform group-hover:scale-105"
                            data-alt="A professional headshot of a person with a warm and approachable expression, set against a soft, out-of-focus modern office background. The lighting is natural and flattering, emphasizing a professional yet calm aura. The overall aesthetic is clean and high-end, utilizing a light-mode color palette with subtle blue and grey undertones, perfectly suited for a productivity app interface."
                            src="{{ auth()->user()->avatar
                                ? asset('storage/' . auth()->user()->avatar)
                                : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}">
                        <button {{-- onclick="document.getElementById('avatarInput').click()" --}}
                            class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg hover:scale-110 active:scale-95 transition-all">
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                    </div>
                </form>
                <div class="text-center md:text-left flex-1">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">{{ auth()->user()->name }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-4">{{ auth()->user()->email }}</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-2">
                        <span
                            class="px-3 py-1 bg-secondary-container text-on-secondary-fixed-variant rounded-full text-label-md font-label-md">Pro
                            Member</span>
                        <span
                            class="px-3 py-1 bg-surface-container-high text-on-surface-variant rounded-full text-label-md font-label-md">New
                            York, US</span>
                    </div>
                </div>
                <adiv class="flex gap-3">
                    <a href="{{ route('profile.edit') }}"
                        class="px-6 py-2.5 bg-primary text-white rounded-lg font-label-md hover:opacity-90 active:scale-95 transition-all">
                        Edit Profile
                    </a>
                </adiv>
            </div>
            <!-- Bento Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter-desktop">
                <div
                    class="md:col-span-2 glass-card rounded-xl p-6 flex flex-col justify-between hover:shadow-lg transition-shadow">
                    <div class="flex justify-between items-start mb-6">
                        <div class="p-3 bg-primary-container/10 rounded-lg text-primary">
                            <span class="material-symbols-outlined">task_alt</span>
                        </div>
                        <span
                            class="text-on-secondary-fixed-variant font-label-md bg-secondary-container px-2 py-1 rounded-md">+12%
                            this week</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total
                            Tasks Completed</p>
                        <h3 class="font-headline-lg text-headline-lg text-on-surface">450</h3>
                    </div>
                    <div class="mt-4 w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
                        <div class="bg-secondary h-full transition-all duration-1000" style="width: 75%"></div>
                    </div>
                </div>
                <div class="glass-card rounded-xl p-6 flex flex-col justify-between hover:shadow-lg transition-shadow">
                    <div class="mb-6">
                        <div class="p-3 bg-tertiary-fixed-dim/20 rounded-lg text-tertiary w-fit">
                            <span class="material-symbols-outlined">timer</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Focus
                            Hours</p>
                        <h3 class="font-headline-lg text-headline-lg text-on-surface">120</h3>
                    </div>
                    <p class="text-label-sm font-label-sm text-on-surface-variant mt-2">Avg. 4.2h / day</p>
                </div>
                <div class="glass-card rounded-xl p-6 flex flex-col justify-between hover:shadow-lg transition-shadow">
                    <div class="mb-6">
                        <div class="p-3 bg-secondary-container/30 rounded-lg text-secondary w-fit">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
                            Efficiency Score</p>
                        <h3 class="font-headline-lg text-headline-lg text-on-surface">94%</h3>
                    </div>
                    <p class="text-label-sm font-label-sm text-on-surface-variant mt-2">Top 5% of users</p>
                </div>
            </div>
            <!-- Settings & Preferences Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter-desktop">
                <!-- Main Settings -->
                <div class="lg:col-span-2 space-y-stack-lg">
                    <div class="glass-card rounded-xl overflow-hidden">
                        <div class="p-6 border-b border-outline-variant">
                            <h4 class="font-headline-md text-headline-md text-on-surface">Preferences</h4>
                        </div>
                        <div class="divide-y divide-outline-variant">
                            <!-- Notification Preference -->
                            <div
                                class="p-6 flex items-center justify-between hover:bg-surface-container-low transition-colors group cursor-pointer">
                                <div class="flex gap-4 items-center">
                                    <div
                                        class="p-2 bg-surface-container text-on-surface-variant rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">notifications_active</span>
                                    </div>
                                    <div>
                                        <p class="font-body-lg text-body-lg text-on-surface">Push Notifications</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Manage how you
                                            receive alerts and updates</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox">
                                    <div
                                        class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>
                            <!-- Theme Selection -->
                            <div
                                class="p-6 flex items-center justify-between hover:bg-surface-container-low transition-colors group cursor-pointer">
                                <div class="flex gap-4 items-center">
                                    <div
                                        class="p-2 bg-surface-container text-on-surface-variant rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">contrast</span>
                                    </div>
                                    <div>
                                        <p class="font-body-lg text-body-lg text-on-surface">App Theme</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Switch between
                                            Light, Dark, or System mode</p>
                                    </div>
                                </div>
                                <div class="flex bg-surface-container p-1 rounded-lg">
                                    <button
                                        class="px-3 py-1 bg-white shadow-sm rounded-md text-label-sm font-label-md">Light</button>
                                    <button
                                        class="px-3 py-1 text-on-surface-variant text-label-sm font-label-md hover:text-on-surface">Dark</button>
                                </div>
                            </div>
                            <!-- Focus Mode -->
                            <div
                                class="p-6 flex items-center justify-between hover:bg-surface-container-low transition-colors group cursor-pointer">
                                <div class="flex gap-4 items-center">
                                    <div
                                        class="p-2 bg-surface-container text-on-surface-variant rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">do_not_disturb_on</span>
                                    </div>
                                    <div>
                                        <p class="font-body-lg text-body-lg text-on-surface">Auto Focus Mode</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Automatically
                                            enable DND during scheduled hours</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input class="sr-only peer" type="checkbox">
                                    <div
                                        class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Secondary Info -->
                <div class="space-y-stack-lg">
                    <div class="glass-card rounded-xl p-6">
                        <h4 class="font-headline-md text-headline-md text-on-surface mb-6">Security</h4>
                        <div class="space-y-4">
                            <button
                                class="w-full flex items-center justify-between p-3 rounded-lg border border-outline-variant hover:bg-surface-container transition-all">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">key</span>
                                    <a href="{{ route('profile.password.edit') }}"
                                        class="font-label-md text-label-md">Change Password</a>
                                </div>
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                            </button>
                            <button
                                class="w-full flex items-center justify-between p-3 rounded-lg border border-outline-variant hover:bg-surface-container transition-all">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">verified_user</span>
                                    <span class="font-label-md text-label-md">Two-Factor Auth</span>
                                </div>
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-primary-container p-6 rounded-xl text-white relative overflow-hidden group">
                        <div class="relative z-10">
                            <h4 class="font-headline-md text-headline-md mb-2">Upgrade to Team</h4>
                            <p class="font-body-md text-body-md opacity-80 mb-4">Collaborate with your team and unlock
                                advanced workflows.</p>
                            <button
                                class="bg-white text-primary px-4 py-2 rounded-lg font-label-md hover:shadow-xl transition-shadow">Learn
                                More</button>
                        </div>
                        <!-- Abstract Background Decoration -->
                        <div
                            class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                        </div>
                        <div class="absolute -left-4 top-0 w-16 h-16 bg-white/5 rounded-full blur-xl"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Action -->
            <div
                class="flex justify-between items-center pt-stack-lg border-t border-outline-variant text-on-surface-variant">
                <p class="font-label-sm text-label-sm">Last login: 2 hours ago from Chrome (macOS)</p>
                <button
                    class="text-error font-label-md flex items-center gap-2 hover:bg-error-container/20 px-4 py-2 rounded-lg transition-colors">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Sign Out
                </button>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 bg-surface-container-low border-t border-outline-variant px-stack-md py-stack-sm flex justify-around items-center z-50">
        <button class="flex flex-col items-center gap-1 p-2 text-on-surface-variant">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-label-sm font-label-sm">Home</span>
        </button>
        <button class="flex flex-col items-center gap-1 p-2 text-on-surface-variant">
            <span class="material-symbols-outlined">format_list_bulleted</span>
            <span class="text-label-sm font-label-sm">Tasks</span>
        </button>
        <button class="flex flex-col items-center gap-1 p-2 text-primary">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">person</span>
            <span class="text-label-sm font-label-sm">Profile</span>
        </button>
        <button class="flex flex-col items-center gap-1 p-2 text-on-surface-variant">
            <span class="material-symbols-outlined">settings</span>
            <span class="text-label-sm font-label-sm">Settings</span>
        </button>
    </nav>
    <script>
        // Simple micro-interaction for checkboxes and buttons
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const parent = this.closest('.group');
                if (this.checked) {
                    parent.style.borderColor = 'var(--primary)';
                } else {
                    parent.style.borderColor = 'transparent';
                }
            });
        });

        // Hover effect for bento cards
        const cards = document.querySelectorAll('.glass-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-2px)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>

</html>
