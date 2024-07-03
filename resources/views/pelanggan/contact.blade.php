@extends('pelanggan.layout.index')

@section('content')
    <div class="row align-items-center py-5 ">
        <div class="col-lg-6 ">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ratione autem dolorum quibusdam deleniti
                error. Libero ipsa dolor odio reprehenderit mollitia quia voluptatibus minima corrupti suscipit? Unde quis,
                omnis provident voluptate natus, doloremque quisquam quos voluptatibus facere, temporibus assumenda at quod
                adipisci consectetur accusantium cumque atque fugiat! Voluptates, aspernatur deserunt.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia voluptas voluptatum quod doloribus non a
                officiis, impedit, inventore neque nesciunt quasi veritatis expedita tempora laboriosam voluptates,
                architecto ipsum totam sequi?
            </div>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('assets/images/perusahaan1.png') }}" class="img-fluid rounded-5" alt="">
        </div>
    </div>

    {{-- <div class="d-flex justify-content-between mt-5"> --}}
    <div class="container mt-5">
        <div class="row ">
            <div class="col-6 col-md-4 col-lg-4">
                <div class="d-flex mb-5 align-items-center gap-4">
                    <i class="fa fa-users fa-2x"></i>
                    <p class="m-0 fs-5">+ 300 Pelanggan</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4">
                <div class="d-flex mb-5 align-items-center gap-4">
                    <i class="fa fa-home fa-2x"></i>
                    <p class="m-0 fs-5">+ 300 Seller</p>
                </div>
            </div>
            <div class="col-8 col-md-4 col-lg-4 mx-auto">
                <div class="d-flex mb-5 align-items-center gap-4 justify-content-center justify-content-md-start">
                    <i class="fa fa-shirt fa-2x"></i>
                    <p class="m-0 fs-5">+ 300 Product</p>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}

    <div class="contact">
        <div class="container">
            <div class="judul-contact">
                <h1 class="text-center poppins-bold">Contact Us</h1>
            </div>
            <hr class="mb-5">
            <div class="row mb-md-5">
                <div class="col-md-5">
                    <div class="bg bg-secondary size"></div>
                </div>
                <div class="col-md-7">
                    <div class="card-header">
                        <h4>Kritik dan Saran</h4>
                    </div>
                    <div class="card-body">
                        <p class="p-0 mb-5">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat apa yang
                            menjadi kebutuhan
                            anda dan kami dapat berkembang lebih baik lagi
                        </p>
                        <form action="">
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukan email anda">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="saran" class="col-sm-2 col-form-label">Saran</label>
                                <div class="col-sm-10">
                                    <input type="text" name="saran" id="saran" class="form-control"
                                        placeholder="Masukan saran anda">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary w-100 ">Kirim Pesan Anda</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
