<nav class="navbar navbar-dark navbar-expand-lg hijau-tua">
    <div class="container">
        <a class="navbar-brand fs-3 fw-bold" href="#">NadyaStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-lg-4" id="navbarSupportedContent">
            <ul class="navbar-nav gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('beranda') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact
                        Us</a>
                </li>

            </ul>
            <div class="d-flex gap-4 align-items-center">
                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Login | Register</button>
                <div class="notif">
                    <a href="{{ route('transaksi') }}" class="fs-4">
                        <i class="fa-solid fa-bag-shopping icon-nav "></i>
                    </a>
                    @if ($count_keranjang)
                        <div class="circle">{{ $count_keranjang }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
