<div class="article-item d-flex justify-content-between position-relative">
    <div class="left-side d-flex flex-column gap-3">
        <div class="author d-flex align-items-center">
            <img src="{{ $avatar }}" alt="">
            <span>{{ $author }}</span>
        </div>
        <div class="content">
            <div class="title">
                {{ $title }}
            </div>
            <p class="paragraph mt-2">
                {!! $paragraph !!}
            </p>
        </div>
        <div class="article-detail d-flex align-items-center">
            <div class="niaga-badge">
                {{ $category }}
            </div>
            <span>&#8226;</span>
            <div class="date">{{ $date }}</div>
            <span>&#8226;</span>
            <div class="duration">
                {{ $time }} min read
            </div>
        </div>                                      
    </div>
    <div class="thumbnail">
        <img src="{{ $thumbnail }}" alt="">
    </div>
    <x-atoms.link href={{ $href }} class="stretched-link"></x-atoms.link>
</div>