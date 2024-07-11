<!-- Modal -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('adddata') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                        <div class="col-sm-10">
                            <input type="text" name="sku" class="form-control" id="sku"
                                value="{{ $sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_product" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_product" name="nama_product">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-2 col-form-label">Type </label>
                        <div class="col-sm-10">
                            <select name="type" id="type" class="form-select">
                                <option value="" selected disabled hidden>Pilih Type</option>
                                <option value="celana">Celana</option>
                                <option value="jaket">Jaket</option>
                                <option value="baju">Baju</option>
                                <option value="aksesoris">Aksesoris</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategory" class="col-sm-2 col-form-label">Karegori </label>
                        <div class="col-sm-10">
                            <select name="kategory" id="kategory" class="form-select">
                                <option value="" selected disabled hidden>Pilih Kategori</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                                <option value="anak-anak">Anak-anak</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="foto"
                                name="foto" onchange="previewImg()">
                            <img src="" width="100px" class="preview">
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
