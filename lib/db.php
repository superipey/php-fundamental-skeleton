<?php
include_once __DIR__ . '/config.php';
function connectToDb()
{
    global $_CONFIG;

    try {
        if ($_CONFIG['DB_DRIVER'] == 'sqlite') {
            $pdo = new PDO("sqlite:./" . $_CONFIG['DB_DATABASE']);
        } else if ($_CONFIG['DB_DRIVER'] == 'mysql') {
            $conString = sprintf(
                "mysql:host=%s;dbname=%s",
                $_CONFIG['DB_HOST'],
                $_CONFIG['DB_DATABASE']
            );
            $pdo = new PDO($conString, $_CONFIG['DB_USERNAME'], $_CONFIG['DB_PASSWORD']);
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error DB: " . $e->getMessage());
    }
}