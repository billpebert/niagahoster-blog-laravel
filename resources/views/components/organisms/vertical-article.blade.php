<div class="d-flex flex-column position-relative">
    <img src="{{ $thumbnail }}" class="thumbnail-cards" alt="">
    <x-atoms.author-profile name="{{ $author }}" avatar="{{ $avatar }}"/>
    <x-atoms.article-content title="{{ $title }}" paragraph="{{ $paragraph }}" />
    <x-molecules.article-details category="{{ $category }}" date="" time="{{ $time }}" />
    <x-atoms.link href="{{ route('article') }}" class="stretched-link"/>
</div>