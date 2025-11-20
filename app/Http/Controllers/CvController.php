<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    public function create(Request $request): View
    {
        return view('cv.create', [
            'templates' => config('cv.templates'),
            'user' => $request->user(),
            'formState' => $this->formState($request),
            'previewDefaults' => $this->previewDefaults($request),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatePayload($request);

        $request->user()->cvs()->create($data);

        return redirect()->route('profile')->with('status', 'CV created successfully.');
    }

    public function edit(Request $request, Cv $cv): View
    {
        $this->authorizeCv($request, $cv);

        return view('cv.edit', [
            'cv' => $cv,
            'templates' => config('cv.templates'),
            'formState' => $this->formState($request, $cv),
            'previewDefaults' => $this->previewDefaults($request),
        ]);
    }

    public function update(Request $request, Cv $cv): RedirectResponse
    {
        $this->authorizeCv($request, $cv);

        $data = $this->validatePayload($request);

        $cv->update($data);

        return redirect()->route('profile')->with('status', 'CV updated.');
    }

    public function download(Request $request, Cv $cv)
    {
        $this->authorizeCv($request, $cv);

        $payload = $this->payloadFromCv($cv);

        $pdf = Pdf::loadView('cv.pdf', [
            'cv' => $cv,
            'payload' => $payload,
            'template' => config('cv.templates.' . $cv->template),
        ])->setPaper('a4', 'portrait');

        return $pdf->download(Str::slug($cv->title ?: 'cv') . '.pdf');
    }

    protected function validatePayload(Request $request): array
    {
        $templates = implode(',', array_keys(config('cv.templates', [])));

        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'template' => ['required', 'in:' . $templates],
            'summary' => ['nullable', 'string'],
            'experience' => ['nullable', 'string'],
            'skills' => ['nullable', 'string'],
            'education' => ['nullable', 'string'],
        ]);
    }

    protected function authorizeCv(Request $request, Cv $cv): void
    {
        abort_if($cv->user_id !== $request->user()->id, 403);
    }

    protected function formState(Request $request, ?Cv $cv = null): array
    {
        return [
            'title' => old('title', $cv?->title ?? ''),
            'template' => old('template', $cv?->template ?? 'aura'),
            'summary' => old('summary', $cv?->summary ?? ''),
            'experience' => old('experience', $cv?->experience ?? ''),
            'skills' => old('skills', $cv?->skills ?? ''),
            'education' => old('education', $cv?->education ?? ''),
        ];
    }

    protected function previewDefaults(Request $request): array
    {
        $user = $request->user();

        return [
            'name' => $user->name,
            'headline' => $user->headline ?? 'Multidisciplinary Professional',
        ];
    }

    protected function payloadFromCv(Cv $cv): array
    {
        $cv->loadMissing('user');
        $user = $cv->user;

        return [
            'name' => $user?->name,
            'headline' => $user?->headline,
            'title' => $cv->title,
            'summary' => $cv->summary,
            'experience' => $this->toLines($cv->experience),
            'skills' => $this->toLines($cv->skills),
            'education' => $this->toLines($cv->education),
        ];
    }

    protected function toLines(?string $value): array
    {
        return collect(preg_split("/\r\n|\n|\r/", (string) $value))
            ->map(fn ($line) => trim($line))
            ->filter()
            ->values()
            ->all();
    }
}

