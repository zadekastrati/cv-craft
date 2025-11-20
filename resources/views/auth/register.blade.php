@extends('layouts.app')

@section('title', 'Sign up — CV Craft')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-20">
    <div class="grid gap-10 rounded-3xl border border-white/10 bg-white/5 p-10 shadow-2xl shadow-black/40 lg:grid-cols-2">
        <div class="space-y-6">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Get started</p>
            <h1 class="text-3xl font-semibold text-white">Create an account in less than a minute.</h1>
            <ul class="space-y-3 text-white/70">
                <li class="flex items-start gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-emerald-300"></span>
                    Unlimited CV versions & AI prompts
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-emerald-300"></span>
                    Designer templates with instant preview
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-emerald-300"></span>
                    PDF exports & shareable profile links
                </li>
            </ul>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-sm text-white/70">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-300">Sign in →</a>
            </div>
        </div>
        <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
            @csrf
            <div>
                <label class="text-sm text-white/70">Full name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
                @error('name')
                    <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm text-white/70">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
                @error('email')
                    <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm text-white/70">Password</label>
                <input type="password" name="password" required class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
                @error('password')
                    <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm text-white/70">Confirm password</label>
                <input type="password" name="password_confirmation" required class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/40">
            </div>
            <button type="submit" class="w-full rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 px-6 py-3 font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:scale-[1.01]">
                Create account
            </button>
        </form>
    </div>
</section>
@endsection

