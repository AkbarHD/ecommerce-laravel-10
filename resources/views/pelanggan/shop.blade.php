@extends('pelanggan.layout.index')

@section('content')
    <div class="row py-4 ">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Kategori
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Pria
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body ">
                                    <div class="d-flex flex-column gap-4">
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Baju Pria
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Jaket Pria
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Celana Pria
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Aksesoris Pria
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Wanita
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Baju Wanita
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Jaket Wanita
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Celana Wanita
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Aksesoris Wanita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Anak-anak
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Baju Anak
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Jaket Anak
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Celana Anak
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa-solid fa-plus"></i> Aksesoris Anak
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9 d-flex flex-wrap gap-4">
            @forelse ($products as $product)
                <div class="card" style="width: 280px">
                    <div class="card-header m-auto" style="border-radius: 5px">
                        <img src="{{ asset('storage/product/' . $product->foto) }}" alt="baju-1" style="width: 100%">
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
                        <p class="m-0" style="font-size: 16px; font-weight: 700">
                            Rp. {{ number_format($product->harga) }}
                        </p>
                        <button class="btn btn-outline-primary" style="font-size: 24px">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            @empty
                <p>Belum ada Product</p>
            @endforelse

            <ul class="pagination">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="showData">
                        Data ditampilkan dari {{ $products->count() }} dari {{ $products->total() }}
                    </div>
                    {{ $products->links() }}
                </div>
            </ul>

        </div>



    </div>
@endsection
