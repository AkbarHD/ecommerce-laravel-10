@extends('pelanggan.layout.index')

@section('content')
    <div class="container">
        @if ($bests)
            <div class="best-seler">
                <h3 class="mt-4">Best Seler</h3>
                <div class="row">
                    @forelse ($bests as $product)
                        <div class="col-md-3">
                            <div class="content mt-3 ">
                                <div class="card" style="width: 280px">
                                    <div class="card-header " style="height: 100%">
                                        <img src="{{ asset('storage/product/' . $product->foto) }}"
                                            alt="{{ $product->nama_product }}"
                                            style="width: 100%; height: 250px; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0 text-justify">{{ $product->nama_product }} </p>
                                        <span>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        </span>
                                    </div>
                                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                        <p class="m-0" style="font-size: 16px; font-weight: 700">Rp.
                                            {{ number_format($product->harga) }}</p>
                                        <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-outline-primary" style="font-size: 24px">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>



                            </div>


                        </div>
                    @empty
                        <p>Belum ada Product Best Seller</p>
                    @endforelse
                </div>
            </div>
        @endif

        <div class="new-product mt-5">
            <h3 class="mt-4">New Product</h3>
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-md-3">
                        <div class="content mt-3 ">
                            <div class="card" style="width: 280px">
                                <div class="card-header " style="height: 100%">
                                    <img src="{{ asset('storage/product/' . $product->foto) }}"
                                        alt="{{ $product->nama_product }}"
                                        style="width: 100%; height: 250px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <p class="m-0 text-justify">{{ $product->nama_product }} </p>
                                    <span>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                    </span>
                                </div>
                                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                    <p class="m-0" style="font-size: 16px; font-weight: 700">Rp.
                                        {{ number_format($product->harga) }}</p>
                                    <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary" style="font-size: 24px">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>



                        </div>


                    </div>
                @empty
                    <p>Belum ada Product</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
