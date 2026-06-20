@props([
    'showAddTask' => true
])
 <aside
     class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low dark:bg-surface-dim shadow-sm flex flex-col py-stack-lg px-stack-md transition-all duration-200 ease-in-out z-50">
     <div class="mb-stack-lg px-2">
         <h1 class="text-headline-md font-headline-md font-black text-primary dark:text-primary-fixed-dim">Focus</h1>
         <p class="text-label-sm font-label-sm text-on-surface-variant">Productivity Workspace</p>
     </div>
     <nav class="flex-1 space-y-2">
         <!-- Active Tab: Dashboard -->
         <a href="{{ route('dashboard') }}"
             class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
    {{ request()->routeIs('dashboard')
        ? 'text-primary font-bold bg-surface-container-highest'
        : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
             <span class="material-symbols-outlined">dashboard</span>
             <span>Dashboard</span>
         </a>
         <a href="{{ route('tasks.index') }}"
             class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
    {{ request()->routeIs('tasks.*')
        ? 'text-primary font-bold bg-surface-container-highest'
        : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
             <span class="material-symbols-outlined">format_list_bulleted</span>
             <span>Task List</span>
         </a>
         <a href="{{ route('calendar') }}"
             class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
    {{ request()->routeIs('calendar')
        ? 'text-primary font-bold bg-surface-container-highest'
        : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
             <span class="material-symbols-outlined">calendar_month</span>
             <span>Calendar</span>
         </a>
         <a href="{{ route('profile.show') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
    {{ request()->routeIs('profile')
        ? 'text-primary font-bold bg-surface-container-highest'
        : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                <span class="material-symbols-outlined">calendar_month</span>
                <span>Profile</span>
            </a>
     </nav>
     <div class="mt-auto space-y-2 border-t border-outline-variant pt-stack-lg">
         @if (!request()->routeIs('tasks.*'))
         <a href='{{ route('tasks.create') }}'
             class="w-full bg-primary text-on-primary font-bold py-3 rounded-lg flex items-center justify-center gap-2 cursor-pointer active:scale-95 transition-transform">
             <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
             <span class="font-label-md text-label-md">Create Task</span>
         </a>
         @endif
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
