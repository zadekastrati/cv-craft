<div class="flex h-full flex-col gap-6 text-sm">
    <div x-show="form.template === 'aura'" x-cloak class="flex h-full flex-col gap-6">
        <header class="rounded-2xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-5 text-white shadow-lg">
            <h2 class="text-2xl font-semibold" x-text="display(defaults.name, 'Alex Morgan')"></h2>
            <p class="text-sm text-white/80" x-text="display(defaults.headline, 'Lead Product Designer')"></p>
        </header>
        <section class="rounded-2xl border border-slate-100 p-5">
            <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Summary</h3>
            <p class="mt-2 text-sm text-slate-700" x-text="display(form.summary, 'Craft a sharp summary that captures your superpower and impact areas.')"></p>
        </section>
        <section class="grid gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-100 p-5">
                <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Experience</h3>
                <ul class="mt-3 list-disc space-y-2 pl-4 text-slate-700">
                    <template x-if="experienceLines.length">
                        <template x-for="(item, index) in experienceLines" :key="`aura-exp-${index}`">
                            <li x-text="item"></li>
                        </template>
                    </template>
                    <template x-if="!experienceLines.length">
                        <li class="text-slate-400">Highlight your most measurable wins.</li>
                    </template>
                </ul>
            </div>
            <div class="rounded-2xl border border-slate-100 p-5 space-y-4">
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Skills</h3>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <template x-if="skillLines.length">
                            <template x-for="(skill, index) in skillLines" :key="`aura-skill-${index}`">
                                <span class="rounded-full bg-slate-900/5 px-3 py-1 text-xs font-semibold text-slate-700" x-text="skill"></span>
                            </template>
                        </template>
                        <template x-if="!skillLines.length">
                            <span class="text-slate-400">Add the stacks you lead with.</span>
                        </template>
                    </div>
                </div>
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Education</h3>
                    <ul class="mt-3 space-y-2 text-slate-700">
                        <template x-if="educationLines.length">
                            <template x-for="(edu, index) in educationLines" :key="`aura-edu-${index}`">
                                <li x-text="edu"></li>
                            </template>
                        </template>
                        <template x-if="!educationLines.length">
                            <li class="text-slate-400">Add your alma mater or certifications.</li>
                        </template>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div x-show="form.template === 'noir'" x-cloak class="flex h-full flex-col gap-6">
        <div class="rounded-2xl border border-slate-200 p-6 shadow-sm">
            <div class="flex flex-col gap-1 border-b border-slate-200 pb-4">
                <span class="text-3xl font-semibold text-slate-900" x-text="display(defaults.name, 'Jordan Blake')"></span>
                <span class="text-sm uppercase tracking-[0.4em] text-slate-500" x-text="display(defaults.headline, 'Strategy & Operations')"></span>
            </div>
            <div class="grid gap-6 pt-4 md:grid-cols-2">
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Profile</h4>
                    <p class="mt-2 text-sm text-slate-700" x-text="display(form.summary, 'Summaries stay sleek and recruiter-ready.')"></p>
                </div>
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Core Skills</h4>
                    <ul class="mt-2 space-y-1 text-sm text-slate-700">
                        <template x-if="skillLines.length">
                            <template x-for="(skill, index) in skillLines" :key="`noir-skill-${index}`">
                                <li>• <span x-text="skill"></span></li>
                            </template>
                        </template>
                        <template x-if="!skillLines.length">
                            <li class="text-slate-400">Leadership • Roadmaps • Analytics</li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-2xl border border-slate-200 p-6 shadow-sm">
            <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Experience</h4>
            <ul class="mt-3 space-y-3 text-sm text-slate-800">
                <template x-if="experienceLines.length">
                    <template x-for="(item, index) in experienceLines" :key="`noir-exp-${index}`">
                        <li>
                            <p class="font-semibold">Impact</p>
                            <p class="text-slate-600" x-text="item"></p>
                        </li>
                    </template>
                </template>
                <template x-if="!experienceLines.length">
                    <li class="text-slate-400">Showcase two to three quantified initiatives.</li>
                </template>
            </ul>
        </div>
        <div class="rounded-2xl border border-slate-200 p-6 shadow-sm">
            <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Education</h4>
            <ul class="mt-3 space-y-2 text-sm text-slate-700">
                <template x-if="educationLines.length">
                    <template x-for="(edu, index) in educationLines" :key="`noir-edu-${index}`">
                        <li x-text="edu"></li>
                    </template>
                </template>
                <template x-if="!educationLines.length">
                    <li class="text-slate-400">Add institutions, programs, or certifications.</li>
                </template>
            </ul>
        </div>
    </div>

    <div x-show="form.template === 'pulse'" x-cloak class="flex h-full flex-col gap-6">
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50/70 p-6 text-emerald-950 shadow-inner">
            <p class="text-sm uppercase tracking-[0.4em] text-emerald-600">Pulse Modern</p>
            <h2 class="mt-2 text-2xl font-semibold" x-text="display(defaults.name, 'Riley Cortez')"></h2>
            <p class="text-sm text-emerald-800" x-text="display(defaults.headline, 'AI Product & Growth')"></p>
        </div>
        <div class="rounded-2xl border border-emerald-100 p-5">
            <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-600">Narrative</h4>
            <p class="mt-2 text-sm text-emerald-900" x-text="display(form.summary, 'Drop a crisp summary that highlights the markets you’ve influenced.')"></p>
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-emerald-100 p-5">
                <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-600">Wins</h4>
                <ul class="mt-3 space-y-2 text-sm text-emerald-900">
                    <template x-if="experienceLines.length">
                        <template x-for="(item, index) in experienceLines" :key="`pulse-exp-${index}`">
                            <li class="rounded-2xl border border-emerald-100 bg-white/80 px-3 py-2 shadow-sm" x-text="item"></li>
                        </template>
                    </template>
                    <template x-if="!experienceLines.length">
                        <li class="text-emerald-400">Capture experiment learnings and KPIs.</li>
                    </template>
                </ul>
            </div>
            <div class="rounded-2xl border border-emerald-100 p-5 space-y-4">
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-600">Stacks</h4>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <template x-if="skillLines.length">
                            <template x-for="(skill, index) in skillLines" :key="`pulse-skill-${index}`">
                                <span class="rounded-xl bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800" x-text="skill"></span>
                            </template>
                        </template>
                        <template x-if="!skillLines.length">
                            <span class="text-emerald-400">List the tools you move fastest with.</span>
                        </template>
                    </div>
                </div>
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-600">Education</h4>
                    <ul class="mt-3 space-y-2 text-sm text-emerald-900">
                        <template x-if="educationLines.length">
                            <template x-for="(edu, index) in educationLines" :key="`pulse-edu-${index}`">
                                <li x-text="edu"></li>
                            </template>
                        </template>
                        <template x-if="!educationLines.length">
                            <li class="text-emerald-400">Add notable programs or certifications.</li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

