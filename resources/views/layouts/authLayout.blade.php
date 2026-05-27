<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - Ink &amp; Paper</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#e8e8e8",
                        "primary-container": "#7c3aed",
                        "on-primary-fixed-variant": "#5a00c6",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-primary-fixed": "#25005a",
                        "tertiary-fixed": "#ffdcc6",
                        "on-tertiary": "#ffffff",
                        "inverse-on-surface": "#f1f1f1",
                        "surface-tint": "#732ee4",
                        "tertiary-fixed-dim": "#ffb784",
                        "outline": "#7b7487",
                        "surface-container-highest": "#e2e2e2",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-surface": "#1a1c1c",
                        "surface-dim": "#dadada",
                        "secondary-container": "#e2dfde",
                        "secondary-fixed": "#e5e2e1",
                        "on-tertiary-fixed-variant": "#713700",
                        "surface": "#f9f9f9",
                        "surface-container": "#eeeeee",
                        "on-secondary-container": "#636262",
                        "outline-variant": "#ccc3d8",
                        "surface-container-lowest": "#ffffff",
                        "background": "#f9f9f9",
                        "secondary": "#5f5e5e",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed": "#301400",
                        "tertiary-container": "#a15100",
                        "primary-fixed": "#eaddff",
                        "on-primary-container": "#ede0ff",
                        "primary": "#630ed4",
                        "on-tertiary-container": "#ffe0cd",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "on-background": "#1a1c1c",
                        "tertiary": "#7d3d00",
                        "inverse-primary": "#d2bbff",
                        "surface-variant": "#e2e2e2",
                        "surface-container-low": "#f3f3f3",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#4a4455",
                        "surface-bright": "#f9f9f9",
                        "on-secondary-fixed-variant": "#474746",
                        "primary-fixed-dim": "#d2bbff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#2f3131"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1200px",
                        "section-gap": "4rem",
                        "margin-mobile": "1rem",
                        "gutter": "1.5rem",
                        "article-max": "720px"
                    },
                    "fontFamily": {
                        "headline-md": ["Source Serif 4"],
                        "ui-label": ["Inter"],
                        "display-lg": ["Source Serif 4"],
                        "ui-button": ["Inter"],
                        "metadata": ["Inter"],
                        "body-md": ["Source Serif 4"],
                        "display-lg-mobile": ["Source Serif 4"],
                        "body-lg": ["Source Serif 4"]
                    },
                    "fontSize": {
                        "headline-md": ["32px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "ui-label": ["14px", {
                            "lineHeight": "1.4",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "ui-button": ["16px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.02em",
                            "fontWeight": "600"
                        }],
                        "metadata": ["12px", {
                            "lineHeight": "1.4",
                            "fontWeight": "400"
                        }],
                        "body-md": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "display-lg-mobile": ["32px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["20px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        body {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body class="font-body-md text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- Top Navigation (Shell suppressed but branding maintained) -->
    <header class="bg-surface docked full-width top-0 border-b border-outline-variant">
        <div class="flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-16">
            <span class="font-display-lg-mobile text-display-lg-mobile font-bold text-on-surface">Ink &amp; Paper</span>
            <div class="hidden md:flex gap-6 items-center">
                @if ($action)
                    <a class="font-ui-label text-ui-label text-on-surface-variant hover:text-primary transition-colors duration-200 flex items-center gap-2"
                        href="/auth/login">

                        <span class="material-symbols-outlined" data-icon="arrow_back">
                            arrow_back
                        </span>

                        Back to Login
                    </a>
                @else
                    <a class="font-ui-label text-ui-label text-on-surface-variant hover:text-primary transition-colors duration-200"
                        href="#">
                        Help
                    </a>
                @endif
            </div>
        </div>
    </header>
    <main class="@yield('style')">
        @yield('content')
    </main>
    <!-- Footer Component -->
    <footer class="bg-surface full-width border-t border-outline-variant">
        <div
            class="w-full py-section-gap px-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-headline-md text-headline-md text-on-surface">Ink &amp; Paper</span>
            <div class="flex gap-6">
                <a class="font-body-md text-secondary hover:text-on-surface underline transition-all"
                    href="#">About</a>
                <a class="font-body-md text-secondary hover:text-on-surface underline transition-all"
                    href="#">Privacy</a>
                <a class="font-body-md text-secondary hover:text-on-surface underline transition-all"
                    href="#">Terms</a>
                <a class="font-body-md text-secondary hover:text-on-surface underline transition-all"
                    href="#">API</a>
                <a class="font-body-md text-secondary hover:text-on-surface underline transition-all"
                    href="#">Help</a>
            </div>
            <p class="font-metadata text-metadata text-secondary">© 2024 Ink &amp; Paper Platform. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>
