<?php
require 'db.php';
$urunler = $db->query("SELECT * FROM urunler")->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Ürün Listesi</h2>
<a href="ekle.php">Yeni Ürün Ekle</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>İsim</th>
        <th>Fiyat</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>İşlem</th>
    </tr>
    <?php foreach($urunler as $urun): ?>
    <tr>
        <td><?= $urun['id'] ?></td>
        <td><?= $urun['isim'] ?></td>
        <td><?= $urun['fiyat'] ?></td>
        <td><?= $urun['kategori'] ?></td>
        <td><?= $urun['stok'] ?></td>
        <td>
            <a href="sil.php?id=<?= $urun['id'] ?>" onclick="return confirm('Silmek istediğine emin misin?')">Sil</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>