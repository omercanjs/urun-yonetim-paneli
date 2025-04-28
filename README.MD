# 🛒 PHP Ürün Yönetim Sistemi(İlk Php Projem)

Basit bir **ürün yönetim paneli**.  
PHP ve MySQL kullanılarak geliştirilmiştir.  
Ürünleri **ekleyebilir**, **listeleyebilir**, **silebilirsiniz**.

---

## ⚙️ Kurulum

1. **Projeyi klonla veya indir:**

```bash
git clone https://github.com/kullaniciadi/urun-yonetim.git
cd urun-yonetim
```

2. **Veritabanını oluştur:**

- `phpmyadmin` veya terminal üzerinden:

```sql
CREATE DATABASE urun_yonetim;
USE urun_yonetim;

CREATE TABLE urunler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(255) NOT NULL,
    fiyat DECIMAL(10,2) NOT NULL,
    kategori VARCHAR(100),
    stok INT DEFAULT 0,
    eklenme_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

> Alternatif: `urunler.sql` dosyasını **import** et.

3. **Veritabanı bağlantısını ayarla:**

- `db.php` dosyasındaki **kullanıcı adı** ve **şifreyi** kendi ortamına göre güncelle:

```php
$host = 'localhost';
$dbname = 'urun_yonetim';
$user = 'root'; // kendi kullanıcı adın
$pass = '';     // şifren
```

4. **Projeyi tarayıcıda çalıştır:**

```
http://localhost/urun-yonetim/index.php
```

---

## 🌐 Özellikler

- Ürünleri listele  
- Ürün ekle  
- Ürün sil  
- Ürün Güncelleme (ekleyeceğim)
- Ürün Kategoriye Göre Ayırma (Eklenecek)

---

## 🛠️ Kullanılan Teknolojiler

- PHP (PDO ile MySQL bağlantısı)  
- MySQL Veritabanı  
- Basit HTML arayüz

---

## 📝 Geliştirici Notları

Bu proje temel seviyede **CRUD işlemleri** için geliştirilmiştir.  
Ürün güncelleme, kategori filtreleme gibi özellikler eklenebilir.

