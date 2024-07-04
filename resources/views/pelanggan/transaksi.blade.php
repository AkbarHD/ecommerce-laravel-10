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
        <div class="card ">
            <div class="card-body d-flex align-items-center gap-4">
                <img height="300px" src="{{ asset('assets/images/baju-1.png') }}" alt="">
                <div class="desc">
                    <p class="fs-4 fw-bold">Baju Cotton warna hitam us</p>
                    <h3>Rp. 200.000</h3>
                    <div class="row mb-2">
                        <label for="qty" class="col-form-label fs-5 col-sm-4">Quantity</label>
                        <div class="col-sm-5 d-flex">
                            <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                            <input type="number" name="qty" class="form-control w-50  text-center" id="qty"
                                min="0" max="9999" value="1">
                            <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                        </div>
                    </div>
                    <div class="row">
                        <label for="price" class="col-sm-4 col-form-label fs-5">Total</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control  border-0 fs-5" name="price" id="price" readonly
                                value="Rp. 200.000">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
