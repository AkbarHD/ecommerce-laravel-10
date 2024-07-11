@extends('pelanggan.layout.index')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <div class="container mt-5">
        <h1 class="mb-3">Keranjang Belanja</h1>
        @forelse ($co as $co)
            <div class="card">
                <div class="card-body d-flex align-items-center gap-4">
                    <img height="300px" width="300px" src="{{ asset('storage/product/' . $co->product->foto) }}"
                        alt="">
                    <form action="{{ route('checkout.product', $co->id) }}" method="POST">
                        @csrf
                        <div class="desc">
                            <p class="fs-4 fw-bold">{{ $co->product->nama_product }}</p>
                            <input type="hidden" name="id_barang" value="{{ $co->product->id }}">
                            <input type="number" name="harga" id="harga" class="form-control border-0 fs-1"
                                value="{{ $co->product->harga }}">
                            {{-- <h3>Rp. 200.000</h3> --}}
                            <div class="row mb-2">
                                <label for="qty" class="col-form-label fs-5 col-sm-4">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    {{-- <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button> --}}
                                    <button class="plus rounded-start bg-secondary p-2 border border-0">+</button>
                                    {{-- <input type="number" name="qty" class="form-control w-50 text-center" id="qty"
                                        min="0" max="9999" value="1"> --}}
                                    <input type="number" name="qty" class="form-control w-50 text-center"
                                        id="qty" value="1">
                                    {{-- <button class="rounded-end bg-secondary p-2 border border-0" id="minus"
                                        disabled>-</button> --}}
                                    <button class="minus rounded-end bg-secondary p-2 border border-0" disabled>-</button>
                                </div>
                            </div>

                            <div class="row">
                                <label for="price" class="col-sm-4 col-form-label fs-5">Total</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control border-0 fs-4" name="total" id="total"
                                        readonly>
                                    <input type="text" name="total" id="total-hidden">
                                </div>
                            </div>

                            <div class="row ">
                                <button type="submit" class="btn btn-success col-sm-5 me-2 mb-3 mb-md-0"> <i
                                        class="fa fa-shopping-cart"></i>
                                    Checkout</button>
                                <button class="btn btn-danger col-sm-5"> <i class="fa fa-trash-alt me-2"></i>Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @empty
            <p>Belum ada Product yang kamu Checkout</p>
        @endforelse
    </div>
@endsection
