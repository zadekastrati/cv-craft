<div class="noir-wrapper">
    <div style="border-bottom:1px solid rgba(17,17,17,0.08); padding-bottom:16px; margin-bottom:18px;">
        <div class="heading" style="font-size:26px;">{{ $name }}</div>
        @if($headline)
            <div class="subheading" style="letter-spacing:0.4em; margin-top:6px;">{{ strtoupper($headline) }}</div>
        @endif
    </div>

    <div class="grid">
        <div>
            <div class="section-title">PROFILE</div>
            <p>{{ $summary ?: 'Describe your leadership focus and the markets you influence.' }}</p>
        </div>
        <div>
            <div class="section-title">CORE SKILLS</div>
            @if(count($skills))
                <ul class="list" style="list-style:none; padding-left:0;">
                    @foreach($skills as $skill)
                        <li>• {{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Roadmaps • Stakeholder Ops • Analytics</p>
            @endif
        </div>
    </div>
</div>

<div class="section noir-wrapper" style="margin-top:24px;">
    <div class="section-title">EXPERIENCE</div>
    @if(count($experience))
        <ul class="list">
            @foreach($experience as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Capture two to three quantified achievements.</p>
    @endif
</div>

<div class="section noir-wrapper" style="margin-top:24px;">
    <div class="section-title">EDUCATION</div>
    @if(count($education))
        <ul class="list">
            @foreach($education as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Add institutions, programs, or certifications.</p>
    @endif
</div>

