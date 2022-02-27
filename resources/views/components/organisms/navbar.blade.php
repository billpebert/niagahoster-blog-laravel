<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logo-navbar.svg') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-4    mt-lg-0" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Home
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            VPS
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Domain
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Website
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Kemitraan
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Wawasan
        </x-atoms.link>
        <x-atoms.link href="{{ route('home') }}" class="nav-link">
            Acara
        </x-atoms.link>
      </div>
      <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-4 my-3 my-lg-0">
        <x-atoms.link href="#">
            <img src="{{ asset('assets/icons/ic-cart.svg') }}" alt="">
        </x-atoms.link>
        <x-atoms.link href="#" class="d-flex align-items-center">
            ID <img src="{{ asset('assets/icons/ic-arrow_down.svg') }}" class="ms-2" alt="">
        </x-atoms.link>
        <x-atoms.link href="#" class="btn-login">
            <span>Login</span>
        </x-atoms.link>
      </div>
    </div>
  </div>
</nav>