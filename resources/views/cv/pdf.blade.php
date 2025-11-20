<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $cv->title }} — CV Craft</title>
    <style>
        :root {
            --primary: #4f46e5;
            --secondary: #111827;
            --muted: #6b7280;
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-family: "Space Grotesk", "Inter", sans-serif;
            margin: 0;
            padding: 0;
            color: #111827;
            background: #f4f6fb;
        }
        .sheet {
            background: #ffffff;
            padding: 32px 40px;
            min-height: 100vh;
        }
        h1, h2, h3, h4 {
            margin: 0;
        }
        .heading {
            font-size: 28px;
            font-weight: 600;
        }
        .subheading {
            font-size: 13px;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: var(--muted);
        }
        .section {
            margin-top: 24px;
        }
        .section-title {
            font-size: 12px;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 10px;
        }
        .list {
            margin: 0;
            padding-left: 16px;
        }
        .list li {
            margin-bottom: 6px;
        }
        .pill {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 999px;
            background: #eef2ff;
            font-size: 11px;
            margin: 2px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }
        .card {
            border: 1px solid rgba(15,23,42,0.08);
            border-radius: 20px;
            padding: 16px 18px;
            background: rgba(249,250,251,0.8);
        }
        .text-muted {
            color: var(--muted);
            font-size: 12px;
        }
        .aura-header {
            border-radius: 20px;
            padding: 18px;
            color: white;
            background: linear-gradient(120deg, #6366f1, #a855f7, #ec4899);
        }
        .noir-wrapper {
            border: 1px solid rgba(17,17,17,0.08);
            border-radius: 24px;
            padding: 22px;
        }
        .pulse-border {
            border: 1px solid rgba(16,185,129,0.4);
            border-radius: 24px;
            padding: 22px;
            background: rgba(236,253,245,0.8);
        }
    </style>
</head>
<body>
@php
    $name = $payload['name'] ?? $cv->title;
    $headline = $payload['headline'] ?? '';
    $summary = $payload['summary'] ?? '';
    $experience = $payload['experience'] ?? [];
    $skills = $payload['skills'] ?? [];
    $education = $payload['education'] ?? [];
    $title = $payload['title'] ?? $cv->title;
@endphp
<div class="sheet">
    @include('cv.pdf.templates.' . ($cv->template ?? 'aura'), compact('name', 'headline', 'summary', 'experience', 'skills', 'education', 'title'))
</div>
</body>
</html>

