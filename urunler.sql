CREATE DATABASE IF NOT EXISTS urun_yonetim;
USE urun_yonetim;
CREATE TABLE IF NOT EXISTS urunler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(255) NOT NULL,
    fiyat DECIMAL(10,2) NOT NULL,
    kategori VARCHAR(100),
    stok INT DEFAULT 0,
    eklenme_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);