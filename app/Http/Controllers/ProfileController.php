<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.show');
    }
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }
    public function update(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->hasFile('avatar')) {

            if (Auth::user()->avatar) {
                Storage::disk('public')->delete(Auth::user()->avatar);
            }

            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        Auth::user()->update($data);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile updated successfully');
    }
    public function editPassword()
    {
        return view('profile.password');
    }
    public function updatePassword(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        // dd('Validation Passed');

        if (! Hash::check(
            $request->current_password,
            Auth::user()->password
        )) {
            // dd(Auth::user()->password);
            return back()->withErrors([
                'current_password' => 'Current password is incorrect.'
            ]);
        }
        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile updated successfully');
    }
    // public function updateAvatar(Request $request)
    // {
    //     $request->validate([
    //         'avatar' => ['required', 'image', 'max:2048'],
    //     ]);

    //     $user = Auth::user();

    //     // حذف الصورة القديمة (إذا موجودة)
    //     if ($user->avatar) {
    //         Storage::disk('public')->delete($user->avatar);
    //     }

    //     // رفع الصورة الجديدة
    //     $path = $request->file('avatar')->store('avatars', 'public');

    //     // حفظ المسار في الداتابيس
    //     $user->update([
    //         'avatar' => $path,
    //     ]);

    //     return back()->with('success', 'Avatar updated successfully');
    // }
}
