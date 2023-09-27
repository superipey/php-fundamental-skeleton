<?php
include 'lib/db.php';

$db = connectToDb();

$sql = "SELECT *, pegawai.id as id FROM pegawai INNER JOIN divisi ON divisi.id = pegawai.id_divisi";
$stmt = $db->query($sql);
$pegawai = $stmt->fetchAll(PDO::FETCH_ASSOC);

include __DIR__ . '/views/pegawai/v_index.php';