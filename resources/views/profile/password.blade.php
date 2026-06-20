<x-layout :showHeader='false' mainClass="max-w-2xl mx-auto p-4 sm:p-6">
    <div dir="ltr">

        <div
            class="max-w-md mx-auto bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 p-6 sm:p-8 rounded-2xl shadow-sm transition-all duration-200">

            <div class="mb-6">
                <h3 class="text-xl font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-indigo-600 dark:text-indigo-400">lock</span>
                    Update Password
                </h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Ensure your account is using a long, random
                    password to stay secure.</p>
            </div>

            <form action="{{ route('profile.password.update') }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div
                        class="bg-red-50 dark:bg-red-950/30 border border-red-200 dark:border-red-900/50 text-red-700 dark:text-red-400 p-4 rounded-xl text-sm">
                        <div class="flex items-center gap-2 font-bold mb-1">
                            <span class="material-symbols-outlined text-[18px]">error</span>
                            <span>Please correct the errors below:</span>
                        </div>
                        <ul class="list-disc pl-5 space-y-1 text-xs opacity-90">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="space-y-1">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Current Password</label>
                    <input type="password" name="current_password" placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 rounded-xl text-sm text-slate-900 dark:text-white focus:outline-none focus:border-indigo-600 dark:focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50/50 transition-all">
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">New Password</label>
                    <input type="password" name="password" placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 rounded-xl text-sm text-slate-900 dark:text-white focus:outline-none focus:border-indigo-600 dark:focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50/50 transition-all">
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Confirm New Password</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 rounded-xl text-sm text-slate-900 dark:text-white focus:outline-none focus:border-indigo-600 dark:focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50/50 transition-all">
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-xl flex items-center justify-center gap-2 cursor-pointer transition-all duration-200 shadow-sm active:scale-[0.98]">
                        <span class="material-symbols-outlined text-[20px]">save</span>
                        <span class="text-sm">Save Changes</span>
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-layout>
