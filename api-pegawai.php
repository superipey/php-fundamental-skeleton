<?php
include __DIR__ . '/lib/db.php';
$db = connectToDb();

$search = null;

$sql = "SELECT * FROM pegawai";

if (!empty($_GET['q'])) {
    $search = ['%' . $_GET['q'] . '%', '%' . $_GET['q'] . '%'];
    $sql .= " WHERE nama_lengkap LIKE ? OR alamat LIKE ?";
}

$stmt = $db->prepare($sql);
$stmt->execute($search);
$pegawai = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($pegawai);