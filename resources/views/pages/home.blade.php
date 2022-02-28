@extends('layouts.template')

@section('content')
<div class="hero text-light">
    <x-organisms.navbar id="niaga-nav"/>
    <img src="{{ asset('assets/images/circular_ornament01.svg') }}" class="landing-ornament" alt="" />

    <x-molecules.banner-link/>

    <x-molecules.header/>
</div>

{{-- Section Blog / Articles --}}
<div class="container">

    <div class="row articles-preview" id="__articles">
        <div class="col-md-9 col-12">
            @if (Request::get('page') < 2)
            <div class="article-section">
                <x-molecules.article--head title="Artikel Terbaru" src="{{ asset('assets/icons/ic-electric.svg') }}"/>
                <x-organisms.articles/>
                <div class="d-flex justify-content-center">
                    <x-atoms.link href="#!" class="toggle-allticle">
                        Lihat Semua Artikel
                    </x-atoms.link>
                </div>
            </div>

            <div class="article-section">
                <x-molecules.article--head title="Artikel Populer" src="{{ asset('assets/icons/ic-fire.svg') }}"/>
                <div class="articles d-flex flex-column gap-5">
                    <x-organisms.articles/>
                </div>
                <div class="d-flex justify-content-center">
                    <x-atoms.link href="{{ route('article') }}" class="toggle-allticle">
                        Lihat Semua Artikel
                    </x-atoms.link>
                </div>
            </div>

            <x-molecules.banner-subs/>
            @endif

            <section class="all-articles">
                <div class="all-article-title {{ Request::get('page') < 2 ? '' : 'pt-0' }}">
                    Semua Artikel
                </div>
                <div class="row cards-all-article">
                    @for ($b = 1; $b < 13; $b++)
                    <div class="col-lg-4 col-12 col-md-6">
                        <x-organisms.vertical-article thumbnail="{{ asset('assets/images/illustration.png') }}" author="Nida Regita F" avatar="{{ asset('assets/images/user-1.png') }}" title="4+ Cara Mudah Cek IP Hosting Website" paragraph="Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat! IP hosting adalah barisan angka sebagai identitas unik dari suatu hosting ..." category="Hosting" date="" time="5" />
                    </div>
                    @endfor
                </div>
                <x-molecules.pagination/>
            </section>

        </div>

        <div class="col-md-3 col-12">
            <div id="category">
                <x-atoms.input type="name" class="input-search w-100" name="search" placeholder="Cari artikel blog . . ." style="background-image: url('{{ URL::to('/') }}/assets/icons/ic-search.svg');"  />

                <div class="blog-category">
                    <div class="title">
                        Kategori Blog
                    </div>
                    <x-molecules.accordion.index>
                        <x-molecules.accordion.item target="catTutorial" title="Tutorial" body="Ini adalah tutorial tentang membuat blog sederhana..."/>
                        <x-molecules.accordion.item target="catDigitalMarketing" title="Digital Marketing" body="Ini adalah tutorial tentang membuat blog sederhana..."/>
                        <x-molecules.accordion.item target="catWebDev" title="Web Development & Design" body="Ini adalah tutorial tentang membuat blog sederhana..."/>
                        <x-molecules.accordion.item target="catBisnis" title="Insight Bisnis" body="Ini adalah tutorial tentang membuat blog sederhana..."/>
                        <x-molecules.accordion.item target="catNews" title="News & Update" body="Ini adalah tutorial tentang membuat blog sederhana..."/>
                    </x-molecules.accordion.index>
                </div>
            </div>
        </div>
    </div>
</div>

<x-molecules.get-started/>

@endsection

@push('scripts')
<script>
var articles = $("#__articles");
var category = $("#category");

console.log(articles.height())
  $(function () {
    $(document).scroll(function () {
      if($(this).scrollTop() > articles.height() + 400){
          category.addClass("position-relative").removeClass("category-bar");
      }else if($(this).scrollTop() > category.height() + 200){
          category.addClass("category-bar").removeClass("position-relative");
      }else{
          category.addClass("position-relative").removeClass("category-bar");
      }
    });
  });
</script>
@endpush