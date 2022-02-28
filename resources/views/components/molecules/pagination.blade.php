<div class="page-pagination d-flex justify-content-center">
    <div class="item-links disabled">
        <img src="{{ asset('assets/icons/ic-arrow_left_disabled.svg') }}" alt="">
    </div>
    <x-atoms.link href="#!" class="item-links active">
        1
    </x-atoms.link>
    <x-atoms.link href="{{ route('home') }}?page=2" class="item-links">
        2
    </x-atoms.link>
    <x-atoms.link href="#!" class="item-links">
        3
    </x-atoms.link>
    <div href="#!" class="item-dots">
        <span>&#8226;&#8226;&#8226;</span>
    </div>
    <x-atoms.link href="#!" class="item-links">
        13
    </x-atoms.link>
    <div class="item-links disabled">
        <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" alt="">
    </div>
</div>