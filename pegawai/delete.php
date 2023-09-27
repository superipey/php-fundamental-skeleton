<?php
    include __DIR__ . '/../lib/db.php';
    $db = connectToDb();

    $sql = "DELETE FROM pegawai WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_GET['id']]);
    header('location: ../index.php');
    exit;