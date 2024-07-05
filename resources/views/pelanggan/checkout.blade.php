@extends('pelanggan.layout.index')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Masukan alamat Penerima</h3>
                        <div class="row mb-3">
                            <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penemerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_penerima" name="namaPenerima"
                                    placeholder="Masukan nama penerima">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat_penerima" name="alamatPenerima"
                                    placeholder="Masukan alamat penerima">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tlp" class="col-form-label col-sm-3">Alamat Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tlp" name="tlp"
                                    placeholder="Masukan no telepon ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                            <div class="col-sm-9">
                                <select name="ekspedisi" id="ekspedisi" class="form-select">
                                    <option value="">-- Pilih Ekspedisi --</option>
                                    <option value="jnt">J&T Ekspress</option>
                                    <option value="jne">JNE Ekspress</option>
                                    <option value="sicepat">Sicepat Ekspress</option>
                                    <option value="ninja">Ninja Ekspress</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="fw-bold pt-2">Total Belanja</h4>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="totalBelanja" class="col-form-label col-sm-4">Total Belanja</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="totalBelanja" id="totalBelanja"
                                    value="200000" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="discount" class="col-form-label col-sm-4">Discount</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="discount" id="discount" value="0">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ppn" class="col-form-label col-sm-4">PPN</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="ppn" id="ppn" value="2200">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ongkir" class="col-form-label col-sm-4">Ongkir</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="ongkir" id="ongkir" value="10000">
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label for="dibayarkan" class="col-form-label col-sm-4">Total</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="dibayarkan" id="dibayarkan" value="212200">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="diterima" class="col-form-label col-sm-4">Bayar</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="diterima" id="diterima"
                                    value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dikembalikan" class="col-form-label col-sm-4"> Kembalian</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="dikembalikan" id="dikembalikan"
                                    value="" readonly>
                            </div>
                        </div>

                        <button class="btn btn-success w-100"> <i class="fas fa-print"></i> Print Struck</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
