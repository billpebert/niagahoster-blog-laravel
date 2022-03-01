<div {{ $attributes->merge(['class'=>'article-content']) }} {{ $attributes }}>
    <div class="content">
        <div class="title">
            {{ $title }}
        </div>
        <p class="paragraph mt-2">
            {!! $paragraph !!}
        </p>
    </div>
</div>