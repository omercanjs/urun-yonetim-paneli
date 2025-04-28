<?php
$host = 'localhost';
$dbname = 'urun_yonetim';
$user = 'root';
$pass = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo "hata: " . $e->getMessage();
    exit;
}
?>