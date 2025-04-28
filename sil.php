<?php
require 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sorgu = $db->prepare("DELETE FROM urunler WHERE id = ?");
    $sorgu->execute([$id]);
}
header("Location: index.php");
?>