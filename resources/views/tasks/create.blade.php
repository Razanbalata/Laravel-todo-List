<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/geist@1.3.0/dist/fonts/geist.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#c7c4d8",
                        "surface-container-high": "#dce9ff",
                        "surface-bright": "#f8f9ff",
                        "secondary-fixed": "#6ffbbe",
                        "background": "#f8f9ff",
                        "on-background": "#0b1c30",
                        "tertiary-container": "#885500",
                        "surface-variant": "#d3e4fe",
                        "surface-container-low": "#eff4ff",
                        "surface": "#f8f9ff",
                        "secondary": "#006c49",
                        "on-tertiary-fixed-variant": "#653e00",
                        "tertiary": "#684000",
                        "primary-fixed-dim": "#c3c0ff",
                        "on-error-container": "#93000a",
                        "surface-dim": "#cbdbf5",
                        "inverse-on-surface": "#eaf1ff",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#c3c0ff",
                        "on-secondary-container": "#00714d",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#ffb95f",
                        "on-tertiary-fixed": "#2a1700",
                        "primary-fixed": "#e2dfff",
                        "primary-container": "#4f46e5",
                        "on-primary-container": "#dad7ff",
                        "secondary-fixed-dim": "#4edea3",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#213145",
                        "tertiary-fixed": "#ffddb8",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#464555",
                        "outline": "#777587",
                        "on-tertiary-container": "#ffd4a4",
                        "on-secondary-fixed-variant": "#005236",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#0b1c30",
                        "secondary-container": "#6cf8bb",
                        "on-primary-fixed": "#0f0069",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed": "#002113",
                        "surface-container-highest": "#d3e4fe",
                        "primary": "#3525cd",
                        "on-primary-fixed-variant": "#3323cc",
                        "surface-tint": "#4d44e3",
                        "surface-container": "#e5eeff",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-lg": "24px",
                        "stack-md": "12px",
                        "gutter-desktop": "24px",
                        "gutter-mobile": "16px",
                        "stack-sm": "4px",
                        "container-max": "1200px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Geist"],
                        "body-lg": ["Geist"],
                        "headline-md": ["Geist"],
                        "headline-lg-mobile": ["Geist"],
                        "label-md": ["Geist"],
                        "label-sm": ["Geist"],
                        "body-md": ["Geist"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.02em",
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
            vertical-align: middle;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }

        .form-card {
            box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.05), 0px 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen overflow-x-hidden">
    <!-- SideNavBar (Shared Component Anchor) -->
    <aside
        class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low dark:bg-surface-dim shadow-sm flex flex-col h-full py-stack-lg px-stack-md z-50">
        <div class="mb-stack-lg px-4">
            <h1 class="text-headline-md font-headline-md font-black text-primary dark:text-primary-fixed-dim">Focus</h1>
            <p class="text-label-md font-label-md text-on-surface-variant">Productivity Workspace</p>
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center gap-stack-md px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg group"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <!-- Task List is mapped as the Active State for an "Add Task" page -->
            <a class="flex items-center gap-stack-md px-4 py-3 text-primary font-bold bg-surface-container-highest rounded-lg transition-all duration-200 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="format_list_bulleted">format_list_bulleted</span>
                <span class="font-label-md text-label-md">Task List</span>
            </a>
            <a class="flex items-center gap-stack-md px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-label-md text-label-md">Calendar</span>
            </a>
            <a class="flex items-center gap-stack-md px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-label-md text-label-md">Profile</span>
            </a>
        </nav>
        <div class="mt-auto pt-stack-lg border-t border-outline-variant space-y-1">
            <a class="flex items-center gap-stack-md px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center gap-stack-md px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 rounded-lg"
                href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-label-md text-label-md">Help</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="ml-64 min-h-screen flex items-center justify-center p-gutter-desktop">
        <div class="w-full max-w-[700px]">
            <!-- Header Area -->
            <div class="mb-stack-lg text-center">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Create New Task</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">Break your goals down into manageable
                    steps.</p>
            </div>
            <!-- Form Card -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg form-card">
                <form action="{{ $action }}" method="POST" class="space-y-stack-lg">
                    @csrf
                    @if (isset($method))
                        @method($method)
                    @endif
                    <!-- Task Title -->
                    <div>
                        <label
                            class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm uppercase tracking-wider"
                            for="task-title">Task Title</label>
                        <input
                            class="w-full bg-transparent border-b-2 border-outline-variant focus:border-primary-container py-3 font-headline-md text-headline-md outline-none transition-all placeholder:text-outline"
                            value="{{ $task->title ?? '' }}"
                            id="task-title" name='title' placeholder="What needs to be done?" type="text" />
                    </div>
                    <!-- Description -->
                    <div>
                        <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                            for="description">Description</label>
                        <textarea
                            class="w-full rounded-lg border border-outline-variant focus:border-primary-container focus:ring-1 focus:ring-primary-container p-3 font-body-md text-body-md bg-white transition-all outline-none resize-none"
                            value="{{ $task->description ?? '' }}"
                            name='description' id="description" placeholder="Add some details or notes..." rows="3"></textarea>
                    </div>
                    <!-- Grid for Date, Time, and Priority -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg">
                        <!-- Due Date -->
                        <div class="relative">
                            <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                                for="due-date">Due Date</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary-container">event</span>
                                <input
                                    class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-outline-variant focus:border-primary-container focus:ring-1 focus:ring-primary-container font-body-md text-body-md bg-white outline-none transition-all"
                                    id="due-date" type="date" />
                            </div>
                        </div>
                        <!-- Due Time -->
                        <div class="relative">
                            <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                                for="due-time">Time</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary-container">schedule</span>
                                <input
                                    class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-outline-variant focus:border-primary-container focus:ring-1 focus:ring-primary-container font-body-md text-body-md bg-white outline-none transition-all"
                                    id="due-time" type="time" />
                            </div>
                        </div>
                    </div>
                    <!-- Priority & Category -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg">
                        <!-- Priority -->
                        <div>
                            <label
                                class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Priority</label>
                            <div class="flex p-1 bg-surface-container rounded-lg gap-1">
                                <button
                                    class="flex-1 py-1.5 rounded-md text-label-md font-label-md transition-all bg-white text-secondary shadow-sm"
                                    id="btn-low" onclick="setPriority('low')" type="button">Low</button>
                                <button
                                    class="flex-1 py-1.5 rounded-md text-label-md font-label-md transition-all text-on-surface-variant hover:bg-surface-container-high"
                                    id="btn-medium" onclick="setPriority('medium')" type="button">Medium</button>
                                <button
                                    class="flex-1 py-1.5 rounded-md text-label-md font-label-md transition-all text-on-surface-variant hover:bg-surface-container-high"
                                    id="btn-high" onclick="setPriority('high')" type="button">High</button>
                            </div>
                        </div>
                        <!-- Category Selection -->
                        <div>
                            <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                                for="category">Category</label>
                            <select
                                class="w-full px-4 py-2.5 rounded-lg border border-outline-variant focus:border-primary-container focus:ring-1 focus:ring-primary-container font-body-md text-body-md bg-white outline-none transition-all appearance-none cursor-pointer"
                                id="category">
                                <option value="work">💼 Work</option>
                                <option value="personal">🏠 Personal</option>
                                <option value="health">🧘 Health</option>
                                <option value="finance">💳 Finance</option>
                                <option value="other">✨ Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="pt-stack-md flex flex-col sm:flex-row items-center justify-end gap-stack-md">
                        <button
                            class="w-full sm:w-auto px-6 py-2.5 font-label-md text-label-md text-primary-container hover:bg-surface-container transition-colors rounded-lg"
                            type="button">
                            Cancel
                        </button>
                        <button
                            class="w-full sm:w-auto px-8 py-3 bg-primary-container text-on-primary-container hover:bg-primary transition-all rounded-lg font-headline-md text-headline-md active:scale-95 flex items-center justify-center gap-2"
                            type="submit">
                            <span class="material-symbols-outlined" data-icon="add_task">add_task</span>
                            Create Task
                        </button>
                    </div>
                </form>
            </div>
            <!-- Contextual Hint -->
            <div class="mt-stack-lg flex items-center justify-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-[20px]" data-icon="lightbulb">lightbulb</span>
                <span class="text-label-sm font-label-sm italic">Pro-tip: Tasks with due times send notifications 15
                    minutes before.</span>
            </div>
        </div>
    </main>
    <script>
        function setPriority(level) {
            const btns = {
                low: document.getElementById('btn-low'),
                medium: document.getElementById('btn-medium'),
                high: document.getElementById('btn-high')
            };

            // Reset styles
            Object.values(btns).forEach(btn => {
                btn.classList.remove('bg-white', 'text-secondary', 'text-tertiary', 'text-error', 'shadow-sm',
                    'font-bold');
                btn.classList.add('text-on-surface-variant');
            });

            // Apply active styles
            const active = btns[level];
            active.classList.remove('text-on-surface-variant');
            active.classList.add('bg-white', 'shadow-sm', 'font-bold');

            if (level === 'low') active.classList.add('text-secondary');
            if (level === 'medium') active.classList.add('text-tertiary');
            if (level === 'high') active.classList.add('text-error');
        }

        // Simple scale effect for the card on entry
        document.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.form-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
            card.style.transition = 'all 0.4s ease-out';

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>

</html>
