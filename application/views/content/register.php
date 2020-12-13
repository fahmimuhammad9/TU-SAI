<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('register') ?>">
                                        <div class="form-group">
                                            <label class="small mb-1" for="">Nama</label>
                                            <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Masukkan Nama Lengkap" />
                                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" placeholder="Masukkan Alamat Email" />
                                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Kata Sandi</label>
                                                    <input class="form-control py-4" id="password1" type="password" name="password1" placeholder="Masukkan Kata Sandi" />
                                                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputConfirmPassword">Konfirmasi Kata Sandi</label>
                                                    <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Ulangi Kata Sandi" />
                                                    <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Buat Akun</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?= base_url('login') ?>">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>