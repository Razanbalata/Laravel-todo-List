<x-layout :showHeader="false" mainClass="ml-64 min-h-screen flex items-center justify-center p-gutter-desktop">
       <!-- Main Content Canvas -->

        <div class="w-full max-w-[700px]">
            <!-- Header Area -->
            <div class="mb-stack-lg text-center">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Create New Task</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">Break your goals down into manageable
                    steps.</p>
            </div>
            <!-- Form Card -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg form-card">
                <form action="{{ $action ?? route('tasks.store') }}" method="POST" class="space-y-stack-lg">
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
                            value="{{ $task->title ?? '' }}" id="task-title" name='title'
                            placeholder="What needs to be done?" type="text" />
                    </div>
                    <!-- Description -->
                    <div>
                        <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                            for="description">Description</label>
                        <textarea
                            class="w-full rounded-lg border border-outline-variant focus:border-primary-container focus:ring-1 focus:ring-primary-container p-3 font-body-md text-body-md bg-white transition-all outline-none resize-none"
                            name='description' id="description" placeholder="Add some details or notes..." rows="3">{{ old('description', $task->description ?? '') }}</textarea>
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
                                    value="{{ isset($task->due_date) ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : '' }}"
                                    name="due_date" id="due-date" type="date" />
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
                                    value="{{ isset($task->due_time) ? $task->due_time : '' }}" name="due_time"
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
                                <button type="button" id="btn-low" onclick="setPriority(3,'low')">
                                    Low
                                </button>

                                <button type="button" id="btn-medium" onclick="setPriority(2,'medium')">
                                    Medium
                                </button>

                                <button type="button" id="btn-high" onclick="setPriority(1,'high')">
                                    High
                                </button><input value="{{ old('priority_id', $task->priority_id ?? '') }}"
                                type="hidden"
                                name="priority_id" id="priority-input">
                            </div>
                        </div>
                        <!-- Category Selection -->
                        <div>
                            <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm"
                                for="category">Category</label>
                            <select name="category_id" id="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category_id', $task->category_id ?? '') ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
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
   
    <script>
        function setPriority(id, level) {
            document.getElementById('priority-input').value = id;
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
        document.addEventListener('DOMContentLoaded', () => {

            const currentPriority =
                document.getElementById('priority-input').value;

            if (currentPriority == 1) {
                setPriority(1, 'low');
            }

            if (currentPriority == 2) {
                setPriority(2, 'medium');
            }

            if (currentPriority == 3) {
                setPriority(3, 'high');
            }

        });
    </script>
</x-layout>
 

