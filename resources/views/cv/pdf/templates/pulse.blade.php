<div class="pulse-border">
    <div class="subheading" style="color:#059669;">Pulse Modern</div>
    <div class="heading" style="color:#065f46;">{{ $name }}</div>
    @if($headline)
        <p style="color:#047857; margin-top:4px;">{{ $headline }}</p>
    @endif
</div>

<div class="section pulse-border" style="margin-top:18px;">
    <div class="section-title" style="color:#047857;">NARRATIVE</div>
    <p style="color:#064e3b;">{{ $summary ?: 'Drop a crisp summary that highlights the markets you’ve influenced.' }}</p>
</div>

<div class="grid" style="margin-top:18px;">
    <div class="pulse-border" style="background:rgba(209,250,229,0.5);">
        <div class="section-title" style="color:#047857;">WINS</div>
        @if(count($experience))
            <ul class="list" style="color:#064e3b;">
                @foreach($experience as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-muted" style="color:#047857;">Capture experiment learnings and KPIs.</p>
        @endif
    </div>
    <div class="pulse-border" style="background:rgba(236,253,245,0.9);">
        <div class="section-title" style="color:#047857;">STACKS</div>
        @if(count($skills))
            <div>
                @foreach($skills as $skill)
                    <span class="pill" style="background:#d1fae5; color:#065f46;">{{ $skill }}</span>
                @endforeach
            </div>
        @else
            <p class="text-muted" style="color:#047857;">List the tools you move fastest with.</p>
        @endif

        <div class="section-title" style="color:#047857; margin-top:16px;">EDUCATION</div>
        @if(count($education))
            <ul class="list" style="color:#064e3b;">
                @foreach($education as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-muted" style="color:#047857;">Add notable programs or certifications.</p>
        @endif
    </div>
</div>

