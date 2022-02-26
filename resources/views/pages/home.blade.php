@extends('layouts.template')

@section('content')
<div class="hero text-light">
    <x-organism.navbar/>
    <img src="{{ asset('assets/images/circular_ornament.svg') }}" class="ornament" alt="">

    <div class="banner-link container-fluid">
        <a href="#" class="d-flex align-items-center gap-2 items">
            Tutorial <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" alt="">
        </a>
        <a href="#" class="d-flex align-items-center gap-2 items">
            Digital Marketing <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" alt="">
        </a>
        <a href="#" class="d-flex align-items-center gap-2 items">
            Web Development & Design <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" alt="">
        </a>
        <a href="#" class="d-flex align-items-center gap-2 items">
            Insight Bisnis <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" alt="">
        </a>
        <a href="#" class="d-flex align-items-center gap-2 items">
            News & Updates <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" alt="">
        </a>
    </div>

    <header>
        Niagahoster Blog
    </header>
</div>
@endsection