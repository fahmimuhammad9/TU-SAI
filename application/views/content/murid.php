<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Peserta Didik</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Peserta Didik</li>
                <li class="breadcrumb-item active">Data Peserta Didik</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Data dibawah ini merupakan data yang terakhir diperbarui oleh Administrator Tata Usaha Sekolah Alam Indramayu. <p class="text-danger">[Terakhir Diperbaharui : <?= date('d-M-Y H:i:s', strtotime(str_replace('-', '/', $last_update['last_updated']))) ?>]</p>
                </div>
            </div>
            <div class="card mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Induk Siswa</th>
                                    <th>Nama Peserta Didik</th>
                                    <th>Kelas </th>
                                    <th>Wali Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nomor Induk Siswa</th>
                                    <th>Nama Peserta Didik</th>
                                    <th>Kelas </th>
                                    <th>Wali Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($murid as $key) {
                                ?>
                                    <tr>
                                        <td><?= $key['nis'] ?></td>
                                        <td><?= $key['nama'] ?></td>
                                        <td><?= $key['kelas'] ?></td>
                                        <td><?= $key['walikelas'] ?></td>
                                        <td><a href=""></a><a href=""></a></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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