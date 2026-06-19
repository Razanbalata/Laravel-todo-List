<x-layout mainClass="md:ml-64 min-h-screen">
    <!-- Main Content Area -->
    <main>

        <!-- Calendar Container -->
        <section class="flex-1 p-gutter-desktop flex flex-col gap-6 w-full max-w-container-max mx-auto">
            <!-- Calendar Controls -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">September 2024</h2>
                    <div class="flex bg-surface-container-low rounded-lg p-1">
                        <button class="p-1 hover:bg-surface-container-highest rounded-md transition-colors">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="p-1 hover:bg-surface-container-highest rounded-md transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                    <button
                        class="px-4 py-2 text-label-md font-bold text-primary hover:bg-primary-fixed rounded-lg transition-colors">Today</button>
                </div>
                <div class="flex items-center gap-2 bg-surface-container-low p-1 rounded-xl">
                    <button
                        class="px-6 py-2 rounded-lg text-label-md font-bold transition-all bg-surface shadow-sm text-primary"
                        id="view-month">Month</button>
                    <button
                        class="px-6 py-2 rounded-lg text-label-md font-medium text-on-surface-variant hover:text-on-surface transition-all"
                        id="view-week">Week</button>
                </div>
            </div>
            <!-- Calendar Grid Card -->
            <div
                class="flex-1 bg-surface border border-outline-variant rounded-2xl shadow-sm overflow-hidden flex flex-col">
                <!-- Day Headers -->
                <div class="grid grid-cols-7 border-b border-outline-variant bg-surface-container-lowest">
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">SUN</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">MON</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">TUE</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">WED</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">THU</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">FRI</div>
                    <div class="py-3 text-center text-label-sm font-bold text-on-surface-variant">SAT</div>
                </div>
                <!-- Days Grid -->
                <div class="flex-1 grid grid-cols-7 auto-rows-fr">
                    <!-- Week 1 (Partial) -->
                    <div
                        class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40 min-h-[120px]">
                        <span class="text-label-md text-on-surface-variant">25</span>
                    </div>
                    <div class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40">
                        <span class="text-label-md text-on-surface-variant">26</span>
                    </div>
                    <div class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40">
                        <span class="text-label-md text-on-surface-variant">27</span>
                    </div>
                    <div class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40">
                        <span class="text-label-md text-on-surface-variant">28</span>
                    </div>
                    <div class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40">
                        <span class="text-label-md text-on-surface-variant">29</span>
                    </div>
                    <div class="border-r border-b border-outline-variant p-2 bg-surface-container-low opacity-40">
                        <span class="text-label-md text-on-surface-variant">30</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">1</span>
                    </div>
                    <!-- Week 2 -->
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">2</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-secondary-container text-on-secondary-fixed-variant text-[10px] font-bold truncate">
                                Project Kickoff</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">3</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">4</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-primary-container text-white text-[10px] font-bold truncate">
                                Design Review</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group bg-primary-fixed/20 relative">
                        <span
                            class="text-label-md font-black text-primary bg-primary-container text-white w-6 h-6 flex items-center justify-center rounded-full -ml-1">5</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-tertiary-container text-on-tertiary-container text-[10px] font-bold truncate">
                                Team Lunch</div>
                            <div
                                class="px-2 py-1 rounded bg-error-container text-on-error-container text-[10px] font-bold truncate">
                                Client Deadline</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">6</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">7</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">8</span>
                    </div>
                    <!-- Week 3 -->
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">9</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">10</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-secondary-container text-on-secondary-fixed-variant text-[10px] font-bold truncate">
                                Sprint Planning</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">11</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">12</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-primary-container text-white text-[10px] font-bold truncate">
                                UX Workshop</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">13</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">14</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">15</span>
                    </div>
                    <!-- Week 4 -->
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">16</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">17</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-primary-container text-white text-[10px] font-bold truncate">
                                Board Meeting</div>
                            <div
                                class="px-2 py-1 rounded bg-tertiary-container text-on-tertiary-container text-[10px] font-bold truncate">
                                Flight to SF</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">18</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">19</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">20</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">21</span>
                        <div class="mt-2 space-y-1">
                            <div
                                class="px-2 py-1 rounded bg-secondary-container text-on-secondary-fixed-variant text-[10px] font-bold truncate">
                                Launch Event</div>
                        </div>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">22</span>
                    </div>
                    <!-- Week 5 -->
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">23</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">24</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">25</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">26</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">27</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">28</span>
                    </div>
                    <div
                        class="border-r border-b border-outline-variant p-2 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <span class="text-label-md font-bold">29</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contextual Activity Feed (Mobile Hidden) -->
        <div
            class="hidden lg:block fixed right-gutter-desktop top-24 w-80 bg-surface-container-lowest border border-outline-variant rounded-2xl shadow-sm p-stack-lg">
            <h3 class="font-headline-md text-headline-md mb-4">Upcoming</h3>
            <div class="space-y-4">
                <div
                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low border border-transparent hover:border-outline-variant transition-all">
                    <div class="w-2 h-10 rounded-full bg-primary mt-1"></div>
                    <div>
                        <p class="font-label-md text-label-md font-bold">Design Sync</p>
                        <p class="text-label-sm text-on-surface-variant">Today • 2:00 PM</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low border border-transparent hover:border-outline-variant transition-all">
                    <div class="w-2 h-10 rounded-full bg-secondary mt-1"></div>
                    <div>
                        <p class="font-label-md text-label-md font-bold">Final Review</p>
                        <p class="text-label-sm text-on-surface-variant">Tomorrow • 10:00 AM</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low border border-transparent hover:border-outline-variant transition-all opacity-50">
                    <div class="w-2 h-10 rounded-full bg-tertiary mt-1"></div>
                    <div>
                        <p class="font-label-md text-label-md font-bold">Weekly Recap</p>
                        <p class="text-label-sm text-on-surface-variant">Sept 7 • 4:30 PM</p>
                    </div>
                </div>
            </div>
            <button
                class="w-full mt-6 py-2 text-label-md font-bold text-primary hover:bg-primary-fixed rounded-lg transition-colors">See
                all events</button>
        </div>
    </main>
    <!-- Mobile Bottom Navigation (Anchor Component) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface border-t border-outline-variant flex items-center justify-around px-4 z-50">
        <button class="flex flex-col items-center gap-1 text-on-surface-variant">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px] font-bold">Home</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-on-surface-variant">
            <span class="material-symbols-outlined">format_list_bulleted</span>
            <span class="text-[10px] font-bold">Tasks</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-primary">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
            <span class="text-[10px] font-bold">Calendar</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-on-surface-variant">
            <span class="material-symbols-outlined">person</span>
            <span class="text-[10px] font-bold">Profile</span>
        </button>
    </nav>
    <script>
        // Simple View Toggling Interaction
        const monthBtn = document.getElementById('view-month');
        const weekBtn = document.getElementById('view-week');

        monthBtn.addEventListener('click', () => {
            monthBtn.classList.add('bg-surface', 'shadow-sm', 'text-primary');
            monthBtn.classList.remove('text-on-surface-variant', 'font-medium');
            weekBtn.classList.remove('bg-surface', 'shadow-sm', 'text-primary');
            weekBtn.classList.add('text-on-surface-variant', 'font-medium');
        });

        weekBtn.addEventListener('click', () => {
            weekBtn.classList.add('bg-surface', 'shadow-sm', 'text-primary');
            weekBtn.classList.remove('text-on-surface-variant', 'font-medium');
            monthBtn.classList.remove('bg-surface', 'shadow-sm', 'text-primary');
            monthBtn.classList.add('text-on-surface-variant', 'font-medium');
        });

        // Hover Effect Micro-interaction
        document.querySelectorAll('.auto-rows-fr > div').forEach(cell => {
            cell.addEventListener('mouseenter', () => {
                cell.style.transform = 'translateY(-2px)';
                cell.style.zIndex = '10';
            });
            cell.addEventListener('mouseleave', () => {
                cell.style.transform = 'translateY(0)';
                cell.style.zIndex = '1';
            });
        });
    </script>

</x-layout>
