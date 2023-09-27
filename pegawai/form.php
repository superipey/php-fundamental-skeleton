<?php
include __DIR__ . '/../lib/db.php';
include_once __DIR__ . '/../vendor/autoload.php';

$db = connectToDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Jika ada proses submit
    // Code saat proses submit
    if (!empty($_POST['id'])) {
        $sql = "UPDATE pegawai SET
                nama_lengkap = ?,
                alamat = ?, 
                nomor_hp = ?, 
                jk = ?,
                id_divisi = ?,
                email = ?
                WHERE id = ?";
    } else {
        $sql = "INSERT INTO pegawai(nama_lengkap, alamat, nomor_hp, jk, id_divisi, email)
                VALUES(?, ?, ?, ?, ?, ?)";
        unset($_POST['id']);
   }
    $stmt = $db->prepare($sql);
    $stmt->execute(array_values($_POST));

    header('location: ../index.php');
    exit;
}

if (isset($_GET['id'])) { // Jika ada parameter ID
    $sql = "SELECT * FROM pegawai WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $pegawai = $stmt->fetch(PDO::FETCH_ASSOC);
}

$sql = "SELECT id, nama_divisi FROM divisi";
$stmt = $db->query($sql);
$divisi = $stmt->fetchAll(PDO::FETCH_ASSOC);

include __DIR__ . '/../views/pegawai/v_form.php';