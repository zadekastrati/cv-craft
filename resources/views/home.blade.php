@extends('layouts.app')

@section('title', 'CV Craft — Intelligent CV Builder')

@section('content')
  <!-- Hero -->
  <section class="relative overflow-hidden border-b border-white/10">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 via-purple-500/10 to-transparent blur-3xl"></div>
    <div class="relative mx-auto grid max-w-6xl gap-16 px-6 py-24 md:grid-cols-[1.1fr_0.9fr]">
      <div class="space-y-8">
        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">AI CV studio</p>
        <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
          Build uncompromising CVs with precision, design control, and AI polish.
        </h1>
        <p class="text-lg text-white/70">
          CV Craft pairs designer-grade layouts with guided prompts so you can launch recruiter-ready CVs in under five minutes.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#builder" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-500 px-6 py-3 font-semibold shadow-lg shadow-indigo-500/30 transition hover:scale-[1.01]">
            Start crafting
          </a>
          <a href="#features" class="inline-flex items-center justify-center rounded-2xl border border-white/20 px-6 py-3 font-semibold text-white/80 transition hover:border-white/50 hover:text-white">
            See showcase
          </a>
        </div>
        <dl class="grid gap-6 text-sm sm:grid-cols-3">
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <dt class="text-white/50">Recruiter-approved</dt>
            <dd class="text-2xl font-semibold text-white">92%</dd>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <dt class="text-white/50">PDF delivery</dt>
            <dd class="text-2xl font-semibold text-white">Instant</dd>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <dt class="text-white/50">Global users</dt>
            <dd class="text-2xl font-semibold text-white">38k+</dd>
          </div>
        </dl>
      </div>
      <div class="relative rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-950 p-8 shadow-2xl shadow-indigo-950/40">
        <div class="mb-6 flex items-center justify-between text-xs text-white/50">
          <span>Realtime Preview</span>
          <span>v2.4</span>
        </div>
        <div class="space-y-6">
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <p class="text-xs uppercase tracking-[0.3em] text-white/60">Headline</p>
            <p class="mt-2 text-lg font-semibold text-white">Lead Product Designer • AI Systems</p>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <p class="text-xs uppercase tracking-[0.3em] text-white/60">Impact Snapshot</p>
            <p class="mt-2 text-sm text-white/80">Scaled global design system that increased hiring conversion by 32% for 70+ enterprise clients.</p>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <p class="text-xs uppercase tracking-[0.3em] text-white/60">Skills matrix</p>
            <div class="mt-3 grid grid-cols-2 gap-3 text-sm">
              <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2 text-white/80">UX Strategy</span>
              <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2 text-white/80">AI Copilot</span>
              <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2 text-white/80">Systems Thinking</span>
              <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2 text-white/80">Stakeholder Ops</span>
            </div>
          </div>
        </div>
        <div class="mt-8 flex items-center justify-between rounded-2xl border border-white/10 bg-white/5 p-4 text-xs text-white/70">
          <span>Live PDF Sync</span>
          <span class="inline-flex items-center gap-2 text-emerald-300">
            <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-300"></span>
            Ready
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Builder Steps -->
  <section id="builder" class="mx-auto grid max-w-6xl gap-10 px-6 py-20 md:grid-cols-2">
    <div class="space-y-6">
      <span class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Workflow</span>
      <h2 class="text-3xl font-semibold text-white">Ship your CV in three guided steps.</h2>
      <p class="text-white/70">Every section gets expert prompts, inline AI rewrite suggestions, and layout controls that keep your story sharp and skimmable.</p>
      <div class="space-y-4 text-sm text-white/70">
        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 shadow-lg shadow-black/40">
          <p class="text-xs uppercase tracking-[0.3em] text-white/50">01 — Context</p>
          <p class="mt-2 text-base text-white">Drop your experience, achievements, and goals. We surface quantified bullet prompts instantly.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 shadow-lg shadow-black/40">
          <p class="text-xs uppercase tracking-[0.3em] text-white/50">02 — Design</p>
          <p class="mt-2 text-base text-white">Switch between editorial, compact, or bold templates. Fine tune spacing, accents, and typography.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 shadow-lg shadow-black/40">
          <p class="text-xs uppercase tracking-[0.3em] text-white/50">03 — Deliver</p>
          <p class="mt-2 text-base text-white">Export pixel-perfect PDFs or share responsive web profiles with live analytics.</p>
        </div>
      </div>
    </div>
    <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-950 p-8 shadow-2xl shadow-black/50">
      <div class="space-y-6 text-sm text-white/80">
        <div class="flex items-center justify-between">
          <span class="text-white/60">Template</span>
          <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-white/70">Aura Bold</span>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
          <p class="text-xs uppercase tracking-[0.3em] text-white/50">Experience highlight</p>
          <p class="mt-3 text-base text-white">Scaled product intelligence suite to 14 markets, leading a 12-person org and unlocking $18M ARR.</p>
          <div class="mt-4 flex gap-2 text-xs">
            <span class="rounded-full bg-indigo-500/20 px-3 py-1 text-indigo-200">Leadership</span>
            <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-emerald-200">Growth</span>
          </div>
        </div>
        <div class="rounded-2xl border border-dashed border-white/15 bg-white/5 p-6">
          <p class="text-xs uppercase tracking-[0.3em] text-white/50">AI boost</p>
          <p class="mt-3 text-base text-white">“Quantify the business impact of your last launch.”</p>
          <button class="mt-4 inline-flex items-center gap-2 rounded-2xl bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-white hover:bg-white/20">
            Generate response
          </button>
        </div>
        <div class="grid gap-3 text-xs text-white/60 sm:grid-cols-3">
          <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2">Live suggestions</span>
          <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2">ATS safe</span>
          <span class="rounded-xl border border-white/10 bg-slate-900 px-3 py-2">PDF + web</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="border-t border-white/5 bg-slate-950">
    <div class="mx-auto max-w-6xl px-6 py-20">
      <div class="flex flex-col gap-4">
        <span class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Capability suite</span>
        <h2 class="text-3xl font-semibold text-white">Power features for ambitious professionals.</h2>
        <p class="max-w-3xl text-white/70">From AI voice drift control to precise grids, every tool is tuned for clarity, credibility, and measurable outcomes.</p>
      </div>
      <div class="mt-14 grid gap-8 md:grid-cols-3">
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl shadow-black/40">
          <p class="text-sm font-semibold text-white">Adaptive AI Drafts</p>
          <p class="mt-3 text-sm text-white/70">Turn bullet points into quantified stories with recruiter-calibrated prompts.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl shadow-black/40">
          <p class="text-sm font-semibold text-white">Template DNA</p>
          <p class="mt-3 text-sm text-white/70">Switch aesthetics without reformatting. Layouts stay perfectly aligned.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl shadow-black/40">
          <p class="text-sm font-semibold text-white">Analytics Pulse</p>
          <p class="mt-3 text-sm text-white/70">Share trackable CV links and understand who reads your story.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="reviews" class="mx-auto max-w-6xl px-6 py-20">
    <div class="flex flex-col gap-4">
      <span class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300/80">Signals</span>
      <h2 class="text-3xl font-semibold text-white">Built for high-velocity careers.</h2>
    </div>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
      <blockquote class="rounded-3xl border border-white/10 bg-white/5 p-6 text-sm text-white/80">
        “I rebuilt my entire CV in 12 minutes and closed two FAANG interviews that week. The layout feels crafted, not templated.”
        <footer class="mt-4 text-xs text-white/50">Ava — Staff Engineer</footer>
      </blockquote>
      <blockquote class="rounded-3xl border border-white/10 bg-white/5 p-6 text-sm text-white/80">
        “The AI prompts pushed punchier bullets than any career coach I’ve paid for. Saved hours.”
        <footer class="mt-4 text-xs text-white/50">Daniel — Product Lead</footer>
      </blockquote>
      <blockquote class="rounded-3xl border border-white/10 bg-white/5 p-6 text-sm text-white/80">
        “Switching templates mid-application is now effortless. Portfolio-worthy exports every time.”
        <footer class="mt-4 text-xs text-white/50">Mei — Brand Strategist</footer>
      </blockquote>
    </div>
  </section>

  <!-- Call to action -->
  <section class="mx-auto max-w-5xl rounded-3xl border border-white/10 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 px-8 py-16 text-center shadow-2xl shadow-purple-900/40">
    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-white/80">Ready when you are</p>
    <h2 class="mt-4 text-3xl font-semibold">Launch a CV that commands attention.</h2>
    <p class="mt-3 text-white/80">Unlimited revisions • Instant PDF • Shareable profiles • ATS-safe</p>
    <div class="mt-6 flex flex-wrap justify-center gap-4">
      <a href="#builder" class="rounded-2xl bg-white px-6 py-3 font-semibold text-slate-900 transition hover:bg-slate-100">Start free</a>
      <a href="mailto:hello@cvcraft.io" class="rounded-2xl border border-white/30 px-6 py-3 font-semibold text-white transition hover:border-white/70">Book demo</a>
    </div>
  </section>

@endsection
