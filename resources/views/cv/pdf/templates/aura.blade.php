<div class="aura-header">
    <div class="heading">{{ $name }}</div>
    @if($headline)
        <p>{{ $headline }}</p>
    @endif
</div>

<div class="section">
    <div class="section-title">SUMMARY</div>
    <p>{{ $summary ?: 'Add a concise overview of your impact and specialties.' }}</p>
</div>

<div class="grid">
    <div class="card">
        <div class="section-title">EXPERIENCE</div>
        @if(count($experience))
            <ul class="list">
                @foreach($experience as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">Share two to three quantified wins.</p>
        @endif
    </div>
    <div class="card">
        <div class="section-title">SKILLS</div>
        @if(count($skills))
            <div>
                @foreach($skills as $skill)
                    <span class="pill">{{ $skill }}</span>
                @endforeach
            </div>
        @else
            <p class="text-muted">Add the stacks and practices you lead with.</p>
        @endif
        <div class="section-title" style="margin-top:18px;">EDUCATION</div>
        @if(count($education))
            <ul class="list">
                @foreach($education as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">List your alma mater or certifications.</p>
        @endif
    </div>
</div>

