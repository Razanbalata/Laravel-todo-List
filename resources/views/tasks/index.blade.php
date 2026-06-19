<x-layout mainClass="ml-64 min-h-screen bg-surface">


    <!-- Main Content Area -->
    <main>

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
                        <a href="{{ route('tasks.index', ['priority' => strtolower($priority['name'])]) }}"
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
</x-layout>
