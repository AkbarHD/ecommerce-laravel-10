<!-- Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updateData', $product->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                        <div class="col-sm-10">
                            <input type="text" name="sku" class="form-control" id="sku"
                                value="{{ $product->sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_product" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_product" name="nama_product"
                                value="{{ $product->nama_product }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-2 col-form-label">Type </label>
                        <div class="col-sm-10">
                            <select name="type" id="type" class="form-select">
                                <option value="" selected disabled hidden>Pilih Type</option>
                                <option value="celana" {{ $product->type == 'celana' ? 'selected' : '' }}>Celana
                                </option>
                                <option value="celana" {{ $product->type == 'jaket' ? 'selected' : '' }}>Jaket
                                </option>
                                <option value="baju" {{ $product->type == 'baju' ? 'selected' : '' }}>Baju</option>
                                <option value="aksesoris" {{ $product->type == 'aksesoris' ? 'selected' : '' }}>
                                    Aksesoris</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategory" class="col-sm-2 col-form-label">Karegori </label>
                        <div class="col-sm-10">
                            <select name="kategory" id="kategory" class="form-select">
                                <option value="" selected disabled hidden>Pilih Kategori</option>
                                <option value="pria" {{ $product->kategory == 'pria' ? 'selected' : '' }}>Pria
                                </option>
                                <option value="wanita" {{ $product->kategory == 'wanita' ? 'selected' : '' }}>Wanita
                                </option>
                                <option value="anak-anak" {{ $product->kategory == 'anak-anak' ? 'selected' : '' }}>
                                    Anak-anak</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga"
                                value="{{ $product->harga }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="foto" value="{{ $product->foto }}">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="foto"
                                name="foto" onchange="previewImg()">
                            <img src="{{ asset('storage/product/' . $product->foto) }}"
                                alt="{{ $product->nama_product }}" width="100px" class="preview mt-3">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const preview = document.querySelector('.preview');
        preview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);
        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
