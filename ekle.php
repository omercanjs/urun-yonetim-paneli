<?php
require 'db.php';
if ($_POST) {
    $isim = $_POST['isim'];
    $fiyat = $_POST['fiyat'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $sorgu = $db->prepare("INSERT INTO urunler (isim, fiyat, kategori, stok) VALUES (?, ?, ?, ?)");
    $sorgu->execute([$isim, $fiyat, $kategori, $stok]);
    header("Location: index.php");
}
?>
<h2>Yeni Ürün Ekle</h2>
<form method="post">
    İsim: <input type="text" name="isim" required><br><br>
    Fiyat: <input type="number" step="0.01" name="fiyat" required><br><br>
    Kategori: <input type="text" name="kategori"><br><br>
    Stok: <input type="number" name="stok" value="0"><br><br>
    <button type="submit">Kaydet</button>
</form>
<a href="index.php">Geri Dön</a>