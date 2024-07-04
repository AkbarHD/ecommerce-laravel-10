<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" placeholder="Masukan email"
                                class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" id="password" placeholder="Masukan password"
                                class="form-control">
                        </div>
                    </div>

                    <div class="button-login">
                        <button type="submit" class="btn btn-success w-100">Login</button>
                        <p class="m-auto text-center p-2">Jika belum ada akun register sekarang ... !</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal"
                            class="btn w-100 btn-primary col-sm-12">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
