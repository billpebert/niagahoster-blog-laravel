@push('styles')
    <style>
        .accordion-button::after, .accordion-button:not(.collapsed)::after {
            background-image: url('{{ asset('assets/icons/ic-arrow_down_dark.svg') }}');
        }
    </style>
@endpush

<div class="accordion-item">
    <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $target }}" aria-expanded="false">
        {{ $title }}
    </button>
    </h2>
    <div id="{{ $target }}" class="accordion-collapse collapse" data-bs-parent="#accordionHoster">
        <div class="accordion-body">
            {!! $body !!}
        </div>
    </div>
</div>