@extends('layouts.template')

@section('content')
<div class="hero py-0">
    <x-organisms.navbar />
    <x-molecules.banner-link/>
</div>

<div class="container">
    <div class="row article-read position-relative" id="__wrapper">

        <div class="col-md-3 col-12">
            <div class="sitemap d-flex flex-column gap-3" id="sidebar">
                <x-molecules.breadcrumb>
                    <x-atoms.link href="{{ route('home') }}">
                        Home
                    </x-atoms.link>
                    <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" width="4.2" alt="">
                    <x-atoms.link href="{{ route('home') }}">
                        Tutorial
                    </x-atoms.link>
                    <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" width="4.2" alt="">
                    <x-atoms.link href="{{ route('home') }}">
                        Hosting
                    </x-atoms.link>
                </x-molecules.breadcrumb>
                <div class="title">
                    4+ Cara Mudah Cek IP Hosting Website
                </div>
                <x-atoms.author-profile avatar="{{ asset('assets/images/user-1.png') }}" name="Nida Regita F"/>
                <x-molecules.article-details category="" date="28 Dec 2021" time="5" />
                <hr/>
                <x-molecules.article-action-button like="218" comment="34" addOnClass="" target="offcanvas1" totalComment="15" />
            </div>
        </div>
        <div class="col-md-9 col-lg-7 col-12">
            <div class="read-article">
                <x-molecules.breadcrumb>
                    <x-atoms.link href="{{ route('home') }}">
                        Home
                    </x-atoms.link>
                    <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" width="4.2" alt="">
                    <x-atoms.link href="{{ route('home') }}">
                        Tutorial
                    </x-atoms.link>
                    <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" width="4.2" alt="">
                    <x-atoms.link href="{{ route('home') }}">
                        Hosting
                    </x-atoms.link>
                    <img src="{{ asset('assets/icons/ic-arrow_right.svg') }}" width="4.2" alt="">
                    <x-atoms.link href="" class="active">
                        4+ Cara Mudah Cek IP Hosting Website
                    </x-atoms.link>
                </x-molecules.breadcrumb>
                <div class="head-section">
                    <div class="title">
                        4+ Cara Mudah Cek IP Hosting Website
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <x-atoms.author-profile name="Nida Regita F" avatar="{{ asset('assets/images/user-1.png') }}"/>
                            <x-atoms.single-dot/>
                            <x-molecules.article-details date="28 Dec 2021" category="" time="5"/>
                        </div>
                        <div>
                            <x-molecules.article-action-button like="111" comment="4" addOnClass="" target="offcanvas2" totalComment="15" />
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/images/illustration.png') }}" class="thumbnail-article" alt="">
                <x-atoms.paragraph>
                    Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat!
                    <br><br>
                    IP hosting adalah barisan angka sebagai identitas unik dari suatu hosting website. Dengan IP tersebut, website Anda dapat dikenali dan diakses melalui jaringan internet.
                    <br><br>
                    Saat Anda mengakses website, Anda memang tidak bisa melihat IP secara langsung. Alasannya, IP tersebut sudah diwakili oleh sebuah domain agar lebih mudah diingat. 
                    <br><br>
                    Kalau begitu, bagaimana cara mengetahui hosting IP suatu website? Yuk, simak panduan lengkap cara cek IP web hosting di bawah ini!
                </x-atoms.paragraph>
                <x-molecules.accordion>
                    <x-molecules.accordion.item target="daftarIsi" title="Daftar Isi">
                        <x-molecules.table-of-contents/>
                    </x-molecules.accordion.item>
                </x-molecules.accordion>

                <x-atoms.h1>Cara Cek IP Hosting</x-atoms.h1>

                <span>
                    <x-atoms.paragraph>Anda dapat melakukan cek IP hosting dengan berbagai cara, diantaranya adalah:</x-atoms.paragraph>
                
                    <ul class="unordered-list">
                        <li>Melihat IP Hosting pada Email Informasi Akun Hosting</li>
                        <li>Melihat IP Hosting Melalui Member Area Niagahoster</li>
                        <li>Melihat IP Hosting Melalui cPanel</li>
                        <li>Mengecek IP Menggunakan CMD</li>
                        <li>Mengecek IP dengan Web-based Tools</li>
                    </ul>
                    <x-atoms.paragraph>
                        Nah, berikut ini penjelasan lengkapnya:
                    </x-atoms.paragraph>
                </span>

                <x-atoms.h1>1. Melihat IP Hosting pada Email Informasi Akun Hosting</x-atoms.h1>

                <x-atoms.paragraph>
                    Ketika Anda membeli layanan hosting, pihak penyedia hosting akan mengirimkan email berupa informasi detail akun hosting Anda. Pada email ini, Anda bisa cek IP di bagian Informasi Akun seperti ini:
                </x-atoms.paragraph>

                <x-atoms.h1>Kesimpulan</x-atoms.h1>

                <x-atoms.paragraph>
                    Nah, itu dia beberapa cara yang bisa Anda coba untuk mengecek hosting IP website. Mulai dari melihat IP pada email yang dikirimkan ketika Anda berhasil melakukan order hosting hingga cek IP hosting dengan bantuan aplikasi website.
                    <br><br>
                    IP hosting merupakan deretan angka yang tentu sulit untuk diingat. Itulah kenapa penggunaan domain website bisa solusi terbaik demi kemudahan. Namun, pastikan nama domain terbaik yang digunakan, ya.
                    <br><br>
                    Untungnya, Anda bisa membeli domain unik dengan mudah dari penyedia hosting di Indonesia seperti Niagahoster.
                    <br><br>
                    Bahkan, di Niagahoster, Anda bisa mendapatkan domain gratis jika berlangganan hosting di hampir semua paket yang ditawarkan dengan durasi tertentu. 
                    <br><br>
                    Tak hanya itu, Anda bisa juga menambahkan banyak domain pada akun hosting Anda berkat fitur Unlimited Addon Domain. Itu pun masih ditambah dengan SSL gratis yang bisa digunakan untuk menjaga keamanan website Anda. 
                    <br><br>
                    Menariknya, semua layanan tersebut bisa Anda dapatkan dengan harga mulai dari Rp21rb/bulan saja. Harga yang cukup murah untuk fitur canggih dan layanan berkualitas, bukan?
                    <br><br><br>
                    Jadi, tunggu apa lagi? Yuk, dapatkan domain gratis dengan berlangganan web hosting Niagahoster sekarang!
                </x-atoms.paragraph>

                <div class="d-grid">
                    <x-atoms.link href="#!" class="btn-hoster-yellow-outline">
                        Berlanganan Hosting Niagahoster Sekarang Juga!
                    </x-atoms.link>
                </div>

                <div class="footer-action">
                    <x-molecules.article-action-button like="123" comment="4" addOnClass="ms-auto" target="offcanvas3" totalComment="15" />
                </div>

            </div>
        </div>

    </div>

    <div class="subscribe__2">
        <x-molecules.banner-subs/>
    </div>

</div>

<section class="related-article">
    <div class="container">
        <div class="heading">
            Baca Artikel Terkait
        </div>
        <div class="row cards-vertical-article">
            @for ($i = 0 ; $i < 4 ; $i++)
            <div class="col-lg-3 col-md-4 col-12">
                <x-organisms.vertical-article thumbnail="{{ asset('assets/images/illustration.png') }}" title="4+ Cara Mudah Cek IP Hosting Website" author="Nida Regita F" avatar="{{ asset('assets/images/user-1.png') }}" paragraph="Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat! IP hosti..." category="Hosting" time="5" date="" />
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- Section Blog / Articles --}}
<div class="container">
    <div class="article-body">
    </div>
</div>

<x-molecules.get-started/>

@endsection

@push('scripts')
<script>
var wrapper = $("#__wrapper");
var sidebar = $("#sidebar");

$(function () {
    $(document).scroll(function () {
        if ($(this).scrollTop() > wrapper.height() - 450) {
            sidebar.css({
                "position": "absolute",
                "bottom": "0",
                "opacity": "1"
            });
        } else if ($(this).scrollTop() > 600 && $(this).scrollTop() < wrapper.height() - 500 ) {
            sidebar.css({
                "position": "fixed",
                "top": "50px",
                "opacity": "1"
            });
        } else if($(this).scrollTop() < 350) {
            sidebar.css({
                "position": "relative",
                "top": "0",
                "opacity": "0"
            });
        }
    });
});
</script>
@endpush