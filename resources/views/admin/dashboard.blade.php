@extends('admin.layout.index')

@section('content')
    <div class="d-flex flex-wrap gap-5 ">
        <div class="card" style="width: 250px">
            <div class="card-body d-flex align-items-center">
                <div class="d-flex gap-4 align-items-center m-auto">
                    <i class="fa-solid fa-inbox fs-3"></i>
                    <span class="fs-1 p-0 m-0">100</span>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent">
                <h5>Total Iventory</h5>
            </div>
        </div>

        <div class="card" style="width: 250px">
            <div class="card-body d-flex align-items-center">
                <div class="d-flex gap-4 align-items-center m-auto">
                    <i class="fa-solid fa-cash-register fs-3"></i>
                    <span class="fs-1 p-0 m-0">100</span>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent">
                <h5>Total Transaksi</h5>
            </div>
        </div>

        <div class="card" style="width: 250px">
            <div class="card-body d-flex align-items-center">
                <div class="d-flex gap-4 align-items-center m-auto">
                    <i class="fa-solid fa-user-tie fs-3"></i>
                    <span class="fs-1 p-0 m-0">100</span>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent">
                <h5>Total Karyawan</h5>
            </div>
        </div>

        <div class="card" style="width: 250px">
            <div class="card-body d-flex align-items-center">
                <div class="d-flex gap-4 align-items-center m-auto">
                    <i class="fa-solid fa-file-invoice-dollar fs-3"></i>
                    <span class="fs-1 p-0 m-0">100</span>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent">
                <h5>Total Profit</h5>
            </div>
        </div>



    </div>
@endsection
