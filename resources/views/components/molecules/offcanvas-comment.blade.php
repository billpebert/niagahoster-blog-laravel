<x-atoms.link class="d-inline-flex align-items-center" data-bs-toggle="offcanvas" href="#{{ $target }}" role="button">
    <img src="{{ asset('assets/icons/ic-comment.svg') }}" alt="">
    <span>{{ $comment }}</span>
</x-atoms.link>

<div class="offcanvas offcanvas-end" tabindex="-1" id="{{ $target }}">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title d-flex align-items-center">
            <img src="{{ asset('assets/icons/ic-chat.svg') }}" alt="">
            <span>Balasan</span>
            <span>{{ $totalComment }}</span>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="reply-placeholder">
            <textarea name="" id="" rows="5" class="form-control"></textarea>
            <div class="btn-row align-items-center gap-3 justify-content-end d-none">
                <x-atoms.link href="#!" class="btn-ghost-blue">
                    Cancel
                </x-atoms.link>
                <x-atoms.link href="#!" class="btn-hoster-yellow fs-6 px-4">
                    Comment
                </x-atoms.link>
            </div>
        </div>

        @if ('slot')
            {{ $slot }}
        @endif
        <div class="reply-section d-flex flex-column">
            <div class="d-flex user-reply">
                <img src="{{ asset('assets/images/user-2.png') }}" alt="">
                <div>
                    <div class="username">
                        Adam Muiz
                    </div>
                    <div class="date">
                        29 hari yang lalu
                    </div>
                </div>
            </div>
            <div class="text d-flex flex-wrap">makasih kak udah berbagi informasi hehe</div>
            <div class="d-flex action-button align-items-center justify-content-between">
                <div class="d-flex gap-2 align-items-center left">
                    <img src="{{ asset('assets/icons/ic-thumb_up.svg') }}" alt="">
                    <img src="{{ asset('assets/icons/ic-arrow_reply.svg') }}" alt="">
                    <span class="ms-0">1</span>
                </div>
            </div>
        </div>

        <div class="reply-section d-flex flex-column">
            <div class="d-flex user-reply">
                <img src="{{ asset('assets/images/user-2.png') }}" alt="">
                <div>
                    <div class="username">
                        Adam Muiz
                    </div>
                    <div class="date">
                        29 hari yang lalu
                    </div>
                </div>
            </div>
            <div class="text d-flex flex-wrap">
                Lagi coba host-tracker trial 30 day, bisa mantau uptime webiste, cukup membantu.
                Sebenarnya kalau mantau juga bisa pakai JetPack, cuma karena berhubung pluginnya berat jadi cari alternatif lain buat pantau.
            </div>
            <div class="d-flex action-button align-items-center justify-content-between">
                <div class="d-flex gap-2 align-items-center left">
                    <img src="{{ asset('assets/icons/ic-thumb_up.svg') }}" alt="">
                    <img src="{{ asset('assets/icons/ic-arrow_reply.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="reply-section d-flex flex-column">
            <div class="d-flex user-reply">
                <img src="{{ asset('assets/images/user-2.png') }}" alt="">
                <div>
                    <div class="username">
                        Adam Muiz
                    </div>
                    <div class="date">
                        29 hari yang lalu
                    </div>
                </div>
            </div>
            <div class="text d-flex flex-wrap">
                kalau untuk cek kesehatan websitenya sendiri bagaimana gan ?
            </div>
            <div class="d-flex action-button align-items-center justify-content-between">
                <div class="d-flex gap-2 align-items-center left">
                    <img src="{{ asset('assets/icons/ic-thumb_up.svg') }}" alt="">
                    <img src="{{ asset('assets/icons/ic-arrow_reply.svg') }}" alt="">
                    <span class="ms-0">1</span>
                </div>
                <x-atoms.link href=#! class="reply-hide">
                    Sembunyikan Balasan
                </x-atoms.link>
            </div>

            <div class="child-reply">
                <div class="d-flex user-reply">
                    <img src="{{ asset('assets/images/user-2.png') }}" alt="">
                    <div>
                        <div class="username">
                            Adam Muiz
                            <x-atoms.single-dot/>
                            <span class="author-tag">Author</span>
                        </div>
                        <div class="date">
                            29 hari yang lalu
                        </div>
                    </div>
                </div>
                <div class="text d-flex flex-wrap">
                    Bisa melakukan pengecekan melalui Urlvoid atau fitur secamanya, bisa juga melalui google di url <x-atoms.link href="#!" class="url">
                    http://www.google.com/safebrowsing/diagnostic?site=namasiteanda
                    </x-atoms.link>
                </div>
                <div class="d-flex action-button align-items-center justify-content-between">
                    <div class="d-flex gap-2 align-items-center left">
                        <img src="{{ asset('assets/icons/ic-thumb_up.svg') }}" alt="">
                        <img src="{{ asset('assets/icons/ic-arrow_reply.svg') }}" alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@push('scripts')
<script>
    $("textarea").focus(function(){
        $(".btn-row").addClass("d-flex").removeClass("d-none");
    })
</script>
@endpush