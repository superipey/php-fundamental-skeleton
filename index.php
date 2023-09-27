<?php include __DIR__ . '/views/layouts/v_header.php'; ?>

    <section>
        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1>Data Pegawai</h1>
                <a href="./pegawai/form.php" class="btn btn-primary">Tambah Data</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Handphone</th>
                                <th>Divisi</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/views/layouts/v_footer.php'; ?>