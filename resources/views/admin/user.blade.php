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
                <span class="fw-bold">Tambah User</span>
            </button>
        </div>

        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Foto</td>
                        <td>Join Date</td>
                        <td>Nama Karyawan</td>
                        <td>Role</td>
                        <td>Status</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($product as $products)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/product/' . $products->foto) }}"
                                    alt="{{ $products->nama_product }}" width="150px">
                            </td>
                            <td>{{ $products->created_at->format('d-m-Y') }}</td>
                            <td>{{ $products->sku }}</td>
                            <td>{{ $products->nama_product }}</td>
                            <td>{{ $products->type . ' ' . $products->kategory }}</td>
                            <td>{{ $products->harga }}</td>
                            <td>{{ $products->quantity }}</td>
                            <td>
                                <button class="btn btn-info editModal" data-id="{{ $products->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger deleteData" data-id="{{ $products->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <p>Belum ada product</p>
                    @endforelse

                </tbody> --}}
            </table>
            {{-- <div class="d-flex justify-content-between align-items-center">
                <div class="showData">
                    Data ditampilkan dari {{ $product->count() }} dari {{ $product->total() }}
                </div>
                {{ $product->links() }}
            </div> --}}
        </div>
    </div>

    <div class="tampilData" style="display: none"></div>
    <div class="tampilEditData" style="display: none"></div>


    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $('#addData').click(function(e) {
            $.ajax({
                url: "{{ route('addModalUser') }}",
                success: function(response) {
                    $('.tampilData').html(response).show();
                    $('#userTambah').modal('show');
                }
            });
        });

        $('.editModal').click(function() {
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('editModal', ['id' => ':id']) }}".replace(':id', id),
                success: function(response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal('show');
                }
            });
        })

        $('.deleteData').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteData', ['id' => ':id']) }}".replace(':id', id),
                        success: function(response) {
                            swal.fire({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                icon: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(response) {
                            swal.fire({
                                title: 'Error!',
                                text: 'There was an error deleting the product.',
                                icon: 'error',
                                timer: 2000,
                                showConfirmButton: false
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
