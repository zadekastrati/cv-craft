@extends('layouts.app')

@section('title', 'Profile — CV Craft')

@section('content')
<section class="mx-auto max-w-6xl px-6 py-16 space-y-12">
    <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-xl shadow-black/40 space-y-6">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Profile</p>
                <h1 class="mt-2 text-3xl font-semibold text-white">{{ $user->name }}</h1>
                <p class="text-sm text-white/60">{{ $user->headline ?? 'Add a headline to showcase your role.' }}</p>
            </div>
            <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label class="text-sm text-white/70">Full name</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">
                    @error('name')
                        <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-sm text-white/70">Headline</label>
                    <input type="text" name="headline" value="{{ old('headline', $user->headline) }}" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">
                </div>
                <div>
                    <label class="text-sm text-white/70">Bio</label>
                    <textarea name="bio" rows="4" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">{{ old('bio', $user->bio) }}</textarea>
                </div>
                <button type="submit" class="w-full rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 px-6 py-3 font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:scale-[1.01]">
                    Save profile
                </button>
            </form>
        </div>
        <div class="space-y-5">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Your CVs</p>
                    <h2 class="text-2xl font-semibold text-white">{{ $cvs->count() ? 'Manage drafts and live versions' : 'Create your first CV' }}</h2>
                </div>
                <a href="{{ route('cv.create') }}" class="rounded-2xl border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-white hover:border-white/40">+ New CV</a>
            </div>

            @if ($cvs->isEmpty())
                <div class="rounded-3xl border border-dashed border-white/15 bg-white/5 p-10 text-center text-white/60">
                    No CVs yet. Start with a template and add your story.
                </div>
            @else
                <div class="grid gap-4">
                    @foreach ($cvs as $cv)
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-lg shadow-black/40">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div>
                                    <p class="text-lg font-semibold text-white">{{ $cv->title }}</p>
                                    <p class="text-sm text-white/60">{{ optional($cv->templateDefinition())['name'] ?? ucfirst($cv->template) }} • Updated {{ $cv->updated_at->diffForHumans() }}</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    <a href="{{ route('cv.download', $cv) }}" class="rounded-2xl border border-white/20 px-4 py-2 text-sm font-semibold text-white/80 transition hover:border-white/60 hover:text-white">
                                        PDF
                                    </a>
                                    <a href="{{ route('cv.edit', $cv) }}" class="rounded-2xl border border-white/20 px-4 py-2 text-sm font-semibold text-white transition hover:border-white/60">
                                        Edit
                                    </a>
                                </div>
                            </div>
                            @if ($cv->summary)
                                <p class="mt-4 text-sm text-white/70 line-clamp-2">{{ $cv->summary }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
@endsection

