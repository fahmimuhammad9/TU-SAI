<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Peserta Didik Baru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Peserta Didik</li>
                <li class="breadcrumb-item active">Peserta Didik Baru</li>
            </ol>
            <form action="<?= base_url('muridbaru'); ?>" method="post">
                <div class="form-group">
                    <label class="small mb-1" for="">Nomor Induk Siswa / NIS</label>
                    <input class="form-control" id="nis" name="nis" type="text" placeholder="Masukkan Nomor Induk Siswa / NIS" />
                    <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="">Nama Peserta Didik</label>
                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan Nama Peserta Didik" />
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas" id="kelas">
                        <option selected hidden>Pilih Kelas</option>
                        <?php foreach ($kelas as $key) {
                        ?>
                            <option value="<?= $key['idkelas']; ?>"><?= $key['kelas']; ?></option>
                        <?php
                        } ?>
                    </select>
                    <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-block btn-success ml-auto">Submit Data</button>
            </form>
        </div>
    </main>
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