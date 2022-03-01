<div {{ $attributes->merge(['class'=>'article-detail d-flex align-items-center']) }} {{ $attributes }}>
    @if ($category != "")
    <div class="niaga-badge">
        {{ $category }}
    </div>
    <x-atoms.single-dot/>
    @endif
    @if ($date != "")
    <div class="date">{{ $date }}</div>
    <x-atoms.single-dot/>
    @endif
    <div class="duration">
        {{ $time }} min read
    </div>
</div> 