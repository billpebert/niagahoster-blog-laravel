@extends('layouts.template')

@section('content')
<div class="hero text-light">
    <x-organisms.navbar/>
    <img src="{{ asset('assets/images/circular_ornament.svg') }}" class="ornament" alt="" />

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
        <div class="d-flex flex-column justify-content-center mx-auto">
            <div class="headline">
                Dapatkan Artikel <br class="d-none d-md-block">
                <span>Tutorial Hosting</span> <br class="d-none d-md-block">
                Terbaik Disini
            </div>
            <div class="hero-caption">
                Temukan artikel berisi solusi terbaik untuk segala permasalahan Anda
            </div>
            <x-atoms.input type="name" class="input-search" name="search" placeholder="Cari topic artikel yang ingin Anda cari . . ." style="background-image: url('{{ URL::to('/') }}/assets/icons/ic-search.svg');"  />
        </div>
    </header>
</div>


<div class="container">
    <div class="row articles-preview">
        <div class="col-md-9 col-12">
            <div class="article-section">
                <x-molecules.article--head title="Artikel Terbaru" src="{{ asset('assets/icons/ic-electric.svg') }}"/>
                <div class="articles d-flex flex-column gap-5">
                    <x-organisms.article-section/>
                </div>
                <div class="d-flex justify-content-center">
                    <x-atoms.link href="#" class="toggle-allticle">
                        Lihat Semua Artikel
                    </x-atoms.link>
                </div>
            </div>
            <div class="article-section">
                <x-molecules.article--head title="Artikel Populer" src="{{ asset('assets/icons/ic-fire.svg') }}"/>
                <div class="articles d-flex flex-column gap-5">
                    <x-organisms.article-section/>
                </div>
                <div class="d-flex justify-content-center">
                    <x-atoms.link href="#" class="toggle-allticle">
                        Lihat Semua Artikel
                    </x-atoms.link>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <x-atoms.input type="name" class="input-search w-100" name="search" placeholder="Cari artikel blog . . ." style="background-image: url('{{ URL::to('/') }}/assets/icons/ic-search.svg');"  />

            <div class="blog-category">
                <div class="title">
                    Kategori Blog
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Tutorial
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Digital Marketing
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Web Development & Design
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourth" aria-expanded="false" aria-controls="flush-collapseFourth">
                            Insight Bisnis
                        </button>
                        </h2>
                        <div id="flush-collapseFourth" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifth" aria-expanded="false" aria-controls="flush-collapseFifth">
                            News & Update
                        </button>
                        </h2>
                        <div id="flush-collapseFifth" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection