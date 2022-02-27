<div class="article-detail d-flex align-items-center">
    <div class="niaga-badge">
        {{ $category }}
    </div>
    @if ($date != "")
    <span>&#8226;</span>
    <div class="date">{{ $date }}</div>
    @endif
    <span>&#8226;</span>
    <div class="duration">
        {{ $time }} min read
    </div>
</div> 