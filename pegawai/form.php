<?php include '../views/layouts/v_header.php'; ?>

    <section>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Jika ada proses submit
            // Code saat proses submit
            print_r($_POST);
            exit;
        }
        ?>

        <div class="container">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1>Tambah Data Pegawai</h1>
                <a href="<?= base_url('index.php') ?>" class="btn btn-secondary">Kembali</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('pegawai/form.php') ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                   placeholder="Masukkan alamat">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_hp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"
                                   placeholder="Masukkan nomor hp">
                        </div>

                        <div class="mb-3">
                            <label for="nomor_hp" class="form-label">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="laki"
                                           value="L">
                                    <label class="form-check-label" for="laki">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="perempuan"
                                           value="P">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="id_divisi" class="form-label">Divisi</label>
                            <select id="id_divisi" name="id_divisi" class="form-control">
                                <option value="1">Divisi IT</option>
                                <option value="1">Divisi HRD</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>

<?php include '../views/layouts/v_footer.php'; ?>