<?php include __DIR__ . '/../layouts/v_header.php'; ?>

<section>
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
                                value="<?= $pegawai['nama_lengkap'] ?? '' ?>"
                               placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                               value="<?= @$pegawai['nama_lengkap'] ?>"
                               placeholder="Masukkan alamat">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_hp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"
                            value="<?= @$pegawai['nomor_hp'] ?>"   
                            placeholder="Masukkan nomor hp">
                    </div>

                    <div class="mb-3">
                        <label for="nomor_hp" class="form-label">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input 
                                       <?= @$pegawai['jk'] == 'L' ? 'checked' : '' ?>
                                       class="form-check-input" type="radio" name="jk" id="laki"
                                       value="L">
                                <label class="form-check-label" for="laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan"
                                      <?= @$pegawai['jk'] == 'P' ? 'checked' : '' ?>
                                       value="P">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_divisi" class="form-label">Divisi</label>
                        <select id="id_divisi" name="id_divisi" class="form-control">
                            <?php foreach ($divisi as $item) { ?>
                            <option <?= @$pegawai['id_divisi'] == $item['id'] ? 'selected' : '' ?> value="<?= $item['id'] ?>">
                                <?= $item['id'] . '-' . $item['nama_divisi'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="<?= @$pegawai['email'] ?>"
                               placeholder="Masukkan email">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= @$pegawai['id'] ?>" />
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
</section>
<?php include __DIR__ . '/../layouts/v_footer.php'; ?>