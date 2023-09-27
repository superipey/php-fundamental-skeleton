<?php include __DIR__ . '/../layouts/v_header.php'; ?>
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
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pegawai as $item) { ?>
                            <tr>
                                <td><?= isset($i) ? ++$i : $i = 1 ?></td>
                                <td><?php echo $item['nama_lengkap'] ?></td>
                                <td><?= $item['jk'] ?></td>
                                <td><?= $item['alamat'] ?></td>
                                <td><?= $item['nomor_hp'] ?></td>
                                <td><?= $item['nama_divisi'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td>
                                    <a
                                            href="<?= base_url('pegawai/form.php?id=' . $item['id']) ?>"
                                            class="btn btn-icon btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>

                                    <a
                                            href="<?= base_url('pegawai/delete.php?id=' . $item['id']) ?>"
                                            class="btn btn-icon btn-danger btnDelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </a>

                                    <a
                                            href="<?= base_url('pegawai/email.php?id=' . $item['id']) ?>"
                                            class="btn btn-icon btn-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z"/>
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016Z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../layouts/v_footer.php'; ?>

<script>
  $("body").on("click", ".btnDelete", (e) => {
    e.preventDefault();

    Swal.fire({
      title: 'Apakah yakin ingin menghapus data ini?',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      denyButtonText: 'Tidak',
    }).then((result) => {
      if (result.isConfirmed) {
        location.href = $(e.currentTarget).attr('href')
      }
    })
  })
</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"></script>
<script rel src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script rel src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $("table").DataTable()
</script>