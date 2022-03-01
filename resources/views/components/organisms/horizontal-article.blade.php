<div class="article-item d-flex justify-content-between position-relative">
    <div class="left-side d-flex flex-column gap-3">
        <x-atoms.author-profile avatar="{{ $avatar }}" name="{{ $author }}" />
        <x-atoms.article-content title="{{ $title }}" paragraph="{{ $paragraph }}" />
        <x-molecules.article-details category="{{ $category }}" date="{{ $date }}" time="{{ $time }}" />
    </div>
    <div class="thumbnail d-none d-md-block">
        <img src="{{ $thumbnail }}" alt="">
    </div>
    <x-atoms.link href="{{ $href }}" class="stretched-link"/>
</div>