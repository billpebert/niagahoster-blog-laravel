<div class="d-flex flex-column position-relative">
    <img src="{{ $thumbnail }}" class="thumbnail-cards" alt="">
    <x-atoms.author-profile name="{{ $author }}" class="px-4 px-md-0" avatar="{{ $avatar }}"/>
    <x-atoms.article-content title="{{ $title }}" class="px-4 px-md-0" paragraph="{{ $paragraph }}" />
    <x-molecules.article-details category="{{ $category }}" class="px-4 px-md-0" date="" time="{{ $time }}" />
    <x-atoms.link href="{{ route('article') }}" class="stretched-link"/>
</div>