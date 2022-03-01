<a href="{{ $href }}" {{ $attributes->merge(['class'=>'text-decoration-none']) }} {{ $attributes }}>
    @if ('slot')
    {{ $slot }}
    @endif
</a>