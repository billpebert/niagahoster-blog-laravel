<a href="{{ $href }}" {{ $attributes->merge(['class'=>'text-decoration-none']) }}>
    @if ('slot')
    {{ $slot }}
    @endif
</a>