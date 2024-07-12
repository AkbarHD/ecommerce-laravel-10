@extends('pelanggan.layout.index')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('checkout.bayar') }}" method="POST">
            @csrf
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
                                <label for="tlp" class="col-form-label col-sm-3">Tlp Penerima</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="tlp" name="tlp"
                                        placeholder="Masukan no telepon ">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                                <div class="col-sm-9">
                                    <select name="ekspedisi" id="ekspedisi" class="form-select eksp">
                                        <option value="" hidden>-- Pilih Ekspedisi --</option>
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

                        <div class="card-body pembayaran">
                            <h3 class="mb-3 fw-bold">{{ $codeTransaksi }}</h3>
                            <input type="hidden" name="code" value="{{ $codeTransaksi }}">
                            <div class="row mb-3">
                                <label for="totalBelanja" class="col-form-label col-sm-4">Total Belanja</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="totalBelanja" id="totalBelanja"
                                        value="{{ $detailBelanja }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="discount" class="col-form-label col-sm-4">Discount</label>
                                <div class="col-sm-8">
                                    @if (auth()->user())
                                        <input type="number" class="form-control" id="discount" value="0">
                                    @else
                                        <input type="number" class="form-control" id="discount" value="0" readonly>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ppn" class="col-form-label col-sm-4">PPN</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control ppn" id="PPn" value="0" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ongkir" class="col-form-label col-sm-4">Ongkir</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control ongkir" id="ongkir" readonly>
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-3">
                                <label for="dibayarkan" class="col-form-label col-sm-4">Total</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="dibayarkan" id="dibayarkan" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dibayarkan" class="col-form-label col-sm-4">Jumlah Barang</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="dibayarkan" readonly
                                        value="{{ $jumlahBarang }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dibayarkan" class="col-form-label col-sm-4">Total Quantity</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="total_qty" id="dibayarkan"
                                        value="{{ $qtyOrder }}" readonly>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
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
                        </div> --}}

                            <button type="submit" class="btn btn-success w-100"> <i class="fas fa-print"></i> Print
                                Struck</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
