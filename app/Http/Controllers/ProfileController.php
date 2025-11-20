<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user()->load('cvs');

        return view('profile.index', [
            'user' => $user,
            'cvs' => $user->cvs()->latest()->get(),
            'templates' => config('cv.templates'),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'headline' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
        ]);

        $request->user()->update($data);

        return back()->with('status', 'Profile updated.');
    }
}

