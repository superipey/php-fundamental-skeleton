<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Jika ada proses submit
    // Code saat proses submit
    print_r($_POST);
    exit;
}

include __DIR__ . '/../views/pegawai/v_form.php';