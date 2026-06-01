<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div class="max-w-2xl mx-auto p-4 sm:p-6" dir="ltr">

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 sm:p-8">

            {{-- Header Section --}}
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-slate-800">
                    Edit Profile
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Update your account details and email address.
                </p>
            </div>

            {{-- Success Message --}}
            @if (session('success'))
                <div
                    class="bg-emerald-50 border border-emerald-200 text-emerald-700 p-4 rounded-xl mb-6 text-sm flex items-center gap-2.5">
                    <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">

                @csrf
                @method('PUT')

                {{-- Avatar --}}
                <div class="flex flex-col items-center mb-6">

                    <input type="file" name="avatar" id="avatarInput" class="hidden" onchange="previewImage(event)">

                    <img id="avatarPreview"
                        src="{{ auth()->user()->avatar
                            ? asset('storage/' . auth()->user()->avatar)
                            : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}"
                        alt="Avatar" class="w-12 h-12 rounded-full object-cover border-2 border-slate-300" />

                    <button type="button" onclick="document.getElementById('avatarInput').click()"
                    class="mt-3 text-sm text-indigo-600 font-medium hover:underline">
                    Change Photo
                </button>

                    @error('avatar')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                {{-- Name Field --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Full Name
                    </label>

                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                        class="w-full border border-slate-200 rounded-xl p-3 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50/50 transition-all duration-200 @error('name') border-red-300 focus:border-red-500 focus:ring-red-50/50 @enderror"
                        placeholder="John Doe">

                    @error('name')
                        <p class="text-red-500 text-xs font-medium mt-1.5 flex items-center gap-1.5">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-red-500"></span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Email Field --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Email Address
                    </label>

                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                        class="w-full border border-slate-200 rounded-xl p-3 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50/50 transition-all duration-200 @error('email') border-red-300 focus:border-red-500 focus:ring-red-50/50 @enderror"
                        placeholder="johndoe@example.com">

                    @error('email')
                        <p class="text-red-500 text-xs font-medium mt-1.5 flex items-center gap-1.5">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-red-500"></span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Form Actions --}}
                <div class="pt-2 flex justify-end">
                    <button type="submit"
                        class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-xl shadow-sm hover:shadow transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-indigo-100 active:scale-[0.98]">
                        Save Changes
                    </button>
                </div>

            </form>

        </div>
        <script>
            function previewImage(event) {
                const image = document.getElementById('avatarPreview');

                image.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
    </div>
</body>

</html>
