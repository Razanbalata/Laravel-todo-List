@auth
<div class="flex items-center gap-stack-lg ml-gutter-desktop">
        <button
            class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors cursor-pointer">notifications</button>
        <div class="flex items-center gap-2 cursor-pointer group">
            <img alt="User" class="w-8 h-8 rounded-full border border-outline-variant"
                data-alt="A professional headshot of a focused individual in a brightly lit, modern architectural office setting. The lighting is soft and natural, reflecting a clean corporate aesthetic. The overall mood is calm and professional, perfectly aligning with a productivity-focused brand identity using soft blue and white tones."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzZXrwBc7Mg_2WZgmUDKBJNVuasxB8-1X1rN3zKq2xHpp3GcMD2v3Np3NGP4ZIt7jRmvhs0XMqwWeOgT_hyAeYUqT6CQyRTn0SpBMJH_e5FeZjArk4qU90xT9Ka_MhiyomQBDwF69gEGTya5Mzod8CerIYQmZBWMnGNM2BuTI_cc3_J4K6iKo0eGcJIE5zKmSvG1zaDTMPXcG7j1yoExMzPXqVA0Fn37s6Tt9jm_F7ZibjHx8TTTxZWFqfT2Yh_6fzTUvOhkLpbdP4">
            <span
                class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">account_circle</span>
            {{ $user?->name }}
        </div>
    </div>
@endauth
