<nav class="mb-3 d-flex justify-content-lg-between bg-white p-2 mx-1 rounded">
    <div class="d-flex flex-column">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
            </ol>
            <span>{{ $name }}</span>
        </nav>
    </div>

    <div class="d-flex align-items-center gap-2">
        <div class="icon-notif">
            <i class="fa-solid fa-bell fs-5"></i>
        </div>
        <img class="rounded-circle" width="50px" src="{{ asset('storage/user/' . auth()->user()->foto) }}"
            alt="">
        <div class="d-flex flex-column">
            <p class="m-0 fw-bold" style="font-size: 14px">{{ auth()->user()->name }}</p>
            <p class="m-0" style="font-size: 12px">{{ auth()->user()->email }}</p>

        </div>
    </div>
</nav>
