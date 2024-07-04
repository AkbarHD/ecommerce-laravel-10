<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-3 col-form-label">Nama <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id="nama" placeholder="Masukan nama"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" placeholder="Masukan email"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-3 col-form-label">Adress <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="alamat" id="alamat" placeholder="Masukan alamat" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tlp" class="col-sm-3 col-form-label">Phone Number <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="tlp" id="tlp" placeholder="Input your phone"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-3 col-form-label">Date of birth <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">password <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Input your password">
                        </div>
                    </div>

                    <div class="button-login">
                        <button type="submit" class="btn btn-success w-100">Register</button>
                        <p class="m-auto text-center p-2">Jika belum ada akun register sekarang ... !</p>
                        <a href="javascript:;" type="button" class="btn w-100 btn-danger col-sm-12"
                            data-bs-dismiss="modal">Close</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
