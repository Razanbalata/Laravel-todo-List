<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Focus - Task List</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
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
            background-color: #f8f9ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .task-checkbox:checked+label {
            text-decoration: line-through;
            color: #777587;
        }

        .task-checkbox:checked {
            background-color: #006c49;
            border-color: #006c49;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d3e4fe;
            border-radius: 10px;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- Side Navigation Shell -->
    <aside
        class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low dark:bg-surface-dim shadow-sm flex flex-col py-stack-lg px-stack-md z-50">
        <div class="mb-10 px-stack-sm">
            <h1 class="text-headline-md font-headline-md font-black text-primary dark:text-primary-fixed-dim">Focus</h1>
            <p class="text-label-md font-label-md text-on-surface-variant">Productivity Workspace</p>
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined mr-3">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <a class="flex items-center px-4 py-3 text-primary font-bold bg-surface-container-highest rounded-lg transition-all duration-200 ease-in-out"
                href="#">
                <span class="material-symbols-outlined mr-3">format_list_bulleted</span>
                <span class="font-label-md text-label-md">Task List</span>
            </a>
            <a class="flex items-center px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined mr-3">calendar_month</span>
                <span class="font-label-md text-label-md">Calendar</span>
            </a>
            <a class="flex items-center px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined mr-3">person</span>
                <span class="font-label-md text-label-md">Profile</span>
            </a>
        </nav>
        <button
            class="mt-4 mx-2 bg-primary text-on-primary py-3 px-4 rounded-lg font-label-md text-label-md flex items-center justify-center gap-2 cursor-pointer active:scale-95 transition-transform">
            <span class="material-symbols-outlined text-[18px]">add</span>
            Create Task
        </button>
        <div class="mt-auto pt-stack-lg border-t border-outline-variant space-y-1">
            <a class="flex items-center px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined mr-3">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined mr-3">help</span>
                <span class="font-label-md text-label-md">Help</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-64 min-h-screen bg-surface">
        <!-- Top Nav Bar -->
        <header
            class="w-full h-16 flex justify-between items-center px-gutter-desktop max-w-container-max mx-auto border-b border-outline-variant dark:border-outline bg-surface sticky top-0 z-40">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative w-full max-w-md">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                    <input
                        class="w-full bg-surface-container-low border border-outline-variant rounded-full py-2 pl-10 pr-4 text-body-md focus:outline-none focus:border-primary transition-all"
                        placeholder="Search tasks, tags, or projects..." type="text">
                </div>
            </div>
            <div class="flex items-center gap-stack-lg ml-gutter-desktop">
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors cursor-pointer">notifications</button>
                <div class="flex items-center gap-2 cursor-pointer group">
                    <img alt="User" class="w-8 h-8 rounded-full border border-outline-variant"
                        data-alt="A professional headshot of a focused individual in a brightly lit, modern architectural office setting. The lighting is soft and natural, reflecting a clean corporate aesthetic. The overall mood is calm and professional, perfectly aligning with a productivity-focused brand identity using soft blue and white tones."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzZXrwBc7Mg_2WZgmUDKBJNVuasxB8-1X1rN3zKq2xHpp3GcMD2v3Np3NGP4ZIt7jRmvhs0XMqwWeOgT_hyAeYUqT6CQyRTn0SpBMJH_e5FeZjArk4qU90xT9Ka_MhiyomQBDwF69gEGTya5Mzod8CerIYQmZBWMnGNM2BuTI_cc3_J4K6iKo0eGcJIE5zKmSvG1zaDTMPXcG7j1yoExMzPXqVA0Fn37s6Tt9jm_F7ZibjHx8TTTxZWFqfT2Yh_6fzTUvOhkLpbdP4">
                    <span
                        class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">account_circle</span>
                </div>
            </div>
        </header>
        <div class="px-gutter-desktop py-stack-lg max-w-container-max mx-auto">
            <!-- Header & Action -->
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Task List</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">You have 8 tasks remaining for today.
                    </p>
                </div>
                <div class="flex gap-stack-md">
                    <button
                        class="px-4 py-2 bg-surface-container-high text-on-surface rounded-lg font-label-md text-label-md border border-outline-variant hover:bg-surface-container-highest transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span>
                        Filters
                    </button>
                    <a href="{{ route('tasks.create') }}"
                        class="px-4 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md flex items-center gap-2 hover:opacity-90 active:scale-95 transition-all shadow-md">
                        <span class="material-symbols-outlined text-[18px]">add</span>
                        Add Task
                    </a>
                </div>
            </div>
            <!-- Filters / Chips -->
            <div class="flex flex-wrap gap-stack-md mb-8">
                <div class="flex items-center gap-2 pr-4 border-r border-outline-variant">
                    <span
                        class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Priority</span>
                    @foreach ($priorities as $priority)
                        <a
                        href="{{ route('tasks.index', ['priority' => strtolower($priority['name'])]) }}"
                            class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-label-sm font-label-sm hover:brightness-95 transition-all">{{ $priority['name'] }}</a>
                    @endforeach
                </div>
                <div class="flex items-center gap-2">
                    <span
                        class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Category</span>
                    @foreach ($categories as $category)
                        <a href="{{ route('tasks.index', ['category' => strtolower($category['name'])]) }}"
                            class="px-3 py-1 bg-surface-container-highest text-primary rounded-full text-label-sm font-label-sm hover:bg-primary hover:text-white transition-all">{{ $category['name'] }}</a>
                    @endforeach
                </div>
            </div>
            <!-- Bento Layout Content -->
            <div class="grid grid-cols-12 gap-gutter-desktop">
                <!-- Main Task List Column -->
                <div class="col-span-12 lg:col-span-8 space-y-4">
                    @foreach ($tasks as $task)
                        <div
                            class="bg-surface-container-lowest border border-outline-variant rounded-xl p-4 flex items-center gap-4 hover:shadow-sm transition-all group">
                            <input
                                class="task-checkbox w-5 h-5 rounded-full border-2 border-outline-variant text-secondary focus:ring-secondary cursor-pointer"
                                id="task{{ $task->id }}" type="checkbox">
                            <div class="flex-grow">
                                <label
                                    class="font-body-lg text-body-lg text-on-surface block cursor-pointer transition-colors"
                                    for="task{{ $task->id }}">{{ $task->title }}</label>
                                <div class="flex items-center gap-4 mt-1">
                                    <span
                                        class="flex items-center gap-1 text-label-sm font-label-sm text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[14px]">calendar_today</span>
                                        {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M j, Y g:i A') : 'No due date' }}
                                    </span>
                                    <span
                                        class="px-2 py-0.5 bg-surface-container-high text-primary rounded text-[10px] font-bold uppercase tracking-tighter">{{ $task->category->name }}</span>
                                </div>
                            </div>
                            <span
                                class="px-2 py-1 bg-error-container text-on-error-container rounded-lg text-label-sm font-label-sm">{{ $task->priority->name }}</span>
                            <div
                                class="md:col-span-2 flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href='{{ route('tasks.edit', $task->id) }}'
                                    class="p-2 text-on-surface-variant hover:bg-surface-container hover:text-primary rounded-lg transition-all"
                                    title="Edit">
                                    <span class="material-symbols-outlined" data-icon="edit">edit</span>
                                </a>

                                <button
                                    onclick="confirm('Are you sure?') ? document.getElementById('deletetask{{ $task->id }}').submit() : null"
                                    class="p-2 text-on-surface-variant hover:bg-surface-container rounded-lg transition-all"
                                    title="More">
                                    <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                </button>
                                <form style="display:none;" id="deletetask{{ $task->id }}"
                                    action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Right Column (Stats & Visual) -->
                <div class="col-span-12 lg:col-span-4 space-y-gutter-desktop">
                    <!-- Progress Card -->
                    <div class="bg-primary text-on-primary rounded-2xl p-6 shadow-lg relative overflow-hidden">
                        <div class="relative z-10">
                            <h3 class="font-headline-md text-headline-md mb-2">Weekly Goal</h3>
                            <p class="font-body-md text-body-md opacity-90 mb-6">You've completed 65% of your tasks
                                this week. Keep it up!</p>
                            <div class="w-full bg-white/20 h-2 rounded-full mb-2">
                                <div class="bg-secondary-fixed w-[65%] h-full rounded-full"></div>
                            </div>
                            <span class="text-label-sm font-label-sm">18/28 tasks finished</span>
                        </div>
                        <div class="absolute -right-4 -bottom-4 opacity-10">
                            <span class="material-symbols-outlined text-[120px]"
                                style="font-variation-settings: 'FILL' 1;">insights</span>
                        </div>
                    </div>
                    <!-- Category Breakdown -->
                    <div class="bg-surface-container-low rounded-2xl p-6 border border-outline-variant">
                        <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-4">
                            Focus by Category</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-primary"></span>
                                    <span class="font-body-md text-body-md">Work</span>
                                </div>
                                <span class="font-label-md text-label-md">12 Tasks</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-secondary"></span>
                                    <span class="font-body-md text-body-md">Personal</span>
                                </div>
                                <span class="font-label-md text-label-md">4 Tasks</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-tertiary"></span>
                                    <span class="font-body-md text-body-md">Health</span>
                                </div>
                                <span class="font-label-md text-label-md">2 Tasks</span>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative/Atmospheric Graphic Card -->
                    <div class="rounded-2xl h-48 relative overflow-hidden group">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A serene, minimalist digital workspace illustration featuring a single sleek laptop on a clean white desk, surrounded by lush green indoor plants. The lighting is ethereal and bright, casting soft, long shadows that suggest a peaceful morning atmosphere. The color palette is composed of soft blues, crisp whites, and vibrant emerald greens, evoking a sense of mental clarity and calm productivity."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuARjmg7Gymep-jXDWnZm751nqu1S2WarD6Nef4xntgKwQShpMx2EBltSxwklKyTblDjx5HaqgmyQG3Mg5lL9rhumi6fn-5DHMbLHH4zxwCvyEF6HGJcGY3w_mYXidJfp0Md861a9qlEBLYYs6CMrgjfxojQIQtHC1v4ZbXjrv4wK90Pm4Vji5LRjn8jLBc4dDbvrr17CgA6JL3au-iREPq4hJH9m6Z7C_2ic03Edt31QAh3dTThyfzqLYJThQAtxlMy3l_AhvSLveN4">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <p class="text-white font-label-md text-label-md italic">"Focus is the art of knowing what
                                to ignore."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Micro-interaction Script -->
    <script>
        document.querySelectorAll('.task-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const parent = this.closest('.bg-surface-container-lowest');
                if (this.checked) {
                    parent.classList.add('opacity-60');
                    // Simple confetti or feedback could be triggered here
                } else {
                    parent.classList.remove('opacity-60');
                }
            });
        });

        // Search highlight effect
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
        });
    </script>
</body>

</html>
