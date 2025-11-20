@extends('layouts.app')

@section('title', 'Edit CV — ' . $cv->title)

@section('content')
<section class="mx-auto max-w-6xl px-6 py-16">
    <div class="mb-10 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">CV Builder</p>
            <h1 class="text-3xl font-semibold text-white">Editing “{{ $cv->title }}”.</h1>
            <p class="text-white/70">Switch templates at any time—your story stays aligned.</p>
        </div>
        <a href="{{ route('cv.download', $cv) }}" class="rounded-2xl border border-white/20 px-5 py-3 text-sm font-semibold text-white transition hover:border-white/60">
            Download PDF
        </a>
    </div>

    <form method="POST"
          action="{{ route('cv.update', $cv) }}"
          x-data="cvCraftBuilder({
                templates: @json($templates),
                defaults: @json($previewDefaults),
                form: @json($formState)
          })"
          class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr]">
        @csrf
        @method('PUT')

        <div class="space-y-8">
            <div class="space-y-4">
                @foreach ($templates as $key => $template)
                    <label class="block cursor-pointer rounded-3xl border border-white/10 bg-white/5 p-5 transition hover:border-white/50"
                           :class="form.template === '{{ $key }}' ? 'border-white/60 bg-white/10' : ''">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-base font-semibold text-white">{{ $template['name'] }}</p>
                                <p class="text-sm text-white/60">{{ $template['description'] }}</p>
                            </div>
                            <input type="radio"
                                   name="template"
                                   value="{{ $key }}"
                                   class="h-5 w-5 border-white/20 bg-transparent text-white focus:ring-indigo-400/60"
                                   x-model="form.template">
                        </div>
                        <span class="mt-4 inline-flex items-center rounded-full border border-white/15 bg-white/5 px-3 py-1 text-xs uppercase tracking-[0.3em] text-white/60">{{ $template['badge'] }}</span>
                        <div class="mt-4 h-32 rounded-2xl bg-gradient-to-r {{ $template['accent'] }} opacity-80 shadow-inner"></div>
                    </label>
                @endforeach
                @error('template')
                    <p class="text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-6">
                <div>
                    <label class="text-sm text-white/70">CV Title</label>
                    <input type="text"
                           name="title"
                           x-model="form.title"
                           value="{{ $formState['title'] }}"
                           class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">
                    @error('title')
                        <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-sm text-white/70">Summary</label>
                    <textarea name="summary"
                              rows="4"
                              x-model="form.summary"
                              class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">{{ $formState['summary'] }}</textarea>
                </div>
                <div>
                    <label class="text-sm text-white/70">Experience Highlights</label>
                    <textarea name="experience"
                              rows="5"
                              x-model="form.experience"
                              class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">{{ $formState['experience'] }}</textarea>
                    <p class="mt-2 text-xs text-white/50">One bullet per line keeps the preview clean.</p>
                </div>
                <div>
                    <label class="text-sm text-white/70">Skills & Stack</label>
                    <textarea name="skills"
                              rows="4"
                              x-model="form.skills"
                              class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">{{ $formState['skills'] }}</textarea>
                </div>
                <div>
                    <label class="text-sm text-white/70">Education</label>
                    <textarea name="education"
                              rows="4"
                              x-model="form.education"
                              class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder-white/40 focus:border-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-400/30">{{ $formState['education'] }}</textarea>
                </div>
                <button type="submit" class="w-full rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 px-6 py-3 font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:scale-[1.01]">
                    Update CV
                </button>
            </div>
        </div>

        <div class="rounded-[32px] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-950 to-black p-6 shadow-2xl shadow-black/50">
            <div class="mb-4 flex items-center justify-between text-xs text-white/50">
                <p>Live template preview</p>
                <p x-text="templates[form.template]?.name"></p>
            </div>
            <div class="aspect-[1/1.414] w-full rounded-[28px] bg-white p-8 text-slate-900 shadow-inner">
                @include('cv.partials.template-preview')
            </div>
        </div>
    </form>
</section>

@include('cv.partials.builder-script')
@endsection

