@extends('admin.layout.index')

@section('content')
    <div class="card mb-2">
        <div class="card-body d-flex flex-row justify-content-between">
            <div class="d-flex flex-lg-row gap-3">
                <input type="date" class="form-control" name="tgl_awal" id="">
                <input type="date" class="form-control" name="tgl_akhit" id="">
                <button class="btn btn-primary">Filter</button>
            </div>
            <input type="text" class="form-control w-25" placeholder="Search...">
        </div>

    </div>

    <div class="card rounded-full">
        <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-0">
            <button class="btn btn-info text-white" id="addData">
                <i class="fas fa-plus"></i>
                <span class="fw-bold">Tambah Product</span>
            </button>
        </div>

        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Date In</td>
                        <td>SKU</td>
                        <td>Product Name</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Stock Good</td>
                        <td>Stock Bad</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024/15/06</td>
                        <td>BRG9123</td>
                        <td>Celana panjang hitam pria</td>
                        <td>Pakaian Pria</td>
                        <td>200000</td>
                        <td>200</td>
                        <td>10</td>
                        <td>
                            <button class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="tampilData"></div>

    <script>
        $('#addData').click(function(e) {
            $.ajax({
                url: "{{ route('addModal') }}",
                success: function(response) {
                    $('.tampilData').html(response).show();
                    $('#addModal').modal('show');
                }
            });
        });
    </script>
@endsection
