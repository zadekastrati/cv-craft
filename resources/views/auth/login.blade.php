@extends('layouts.app')

@section('title', 'Login — CV Craft')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-20">
    <div class="grid gap-10 rounded-3xl border border-white/10 bg-white/5 p-10 shadow-2xl shadow-black/40 lg:grid-cols-2">
        <div class="space-y-6">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Welcome back</p>
            <h1 class="text-3xl font-semibold text-white">Sign in to keep editing.</h1>
            <p class="text-white/70">Continue refining your CVs, switch templates, and share live links.</p>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-sm text-white/70">
                <p class="font-semibold text-white">Need an account?</p>
                <p class="mt-1">Register in seconds and unlock AI prompts and PDF exports.</p>
                <a href="{{ route('register') }}" class="mt-4 inline-flex items-center text-indigo-300">Create account →</a>
            </div>
        </div>
        <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
            @csrf
            <div>
                <label class="text-sm text-white/70">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
                @error('email')
                    <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm text-white/70">Password</label>
                <input type="password" name="password" required class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
            </div>
            <label class="flex items-center gap-2 text-sm text-white/70">
                <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/20 bg-transparent text-indigo-400 focus:ring-indigo-400/40">
                Remember me
            </label>
            <button type="submit" class="w-full rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 px-6 py-3 font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:scale-[1.01]">
                Sign in
            </button>
        </form>
    </div>
</section>
@endsection

