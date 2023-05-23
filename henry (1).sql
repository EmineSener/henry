-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 May 2023, 23:11:01
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `henry`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urun` varchar(80) NOT NULL,
  `model` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `fiyat` int(8) UNSIGNED NOT NULL,
  `stok` int(16) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `urun`, `model`, `kategori`, `fiyat`, `stok`, `img`) VALUES
(35, 'Samsung A 30 telefon', 'A 30', 'Telefon', 6000, 1500, './productImage/a30.jpg'),
(36, 'Apple iMac Desktop', 'Apple iMac ', 'Masaüstü', 25000, 4400, './productImage/apple.jpg'),
(37, 'Sony', 'Sony', 'Kulaklık', 700, 430, './productImage/sony.jpg'),
(38, 'Lenovo Gaming 3 Bilgisayar', 'Lenovo Gaming 3', 'Bilgisayar', 28000, 6000, './productImage/lenovo.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

CREATE TABLE `satis` (
  `id` bigint(20) NOT NULL,
  `urun_id` int(30) NOT NULL,
  `employee_id` int(30) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `fiyat` int(10) NOT NULL,
  `adet` int(10) NOT NULL,
  `hasilat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`id`, `urun_id`, `employee_id`, `isim`, `tel`, `date`, `time`, `fiyat`, `adet`, `hasilat`) VALUES
(6, 35, 7, 'Hatice', '555555555555', '2023-05-23', '10:12:00', 6000, 2, 12000),
(7, 37, 7, 'Ebru', '11111111111', '2023-05-13', '17:04:00', 500, 1, 500),
(8, 36, 8, 'Tugba', '3333', '2023-02-12', '12:32:00', 25000, 4, 100000),
(9, 38, 8, 'Rıdvan', '555555555555', '2023-09-21', '09:09:00', 25000, 1, 25000),
(10, 35, 8, 'Enes', '1111', '2023-05-21', '12:30:00', 6000, 3, 1800),
(11, 37, 8, 'Yunus', '555555555555', '2023-04-12', '09:09:00', 700, 4, 2800);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `succes`
--

CREATE TABLE `succes` (
  `id` bigint(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `tarih` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `succes`
--

INSERT INTO `succes` (`id`, `img`, `info`, `tarih`) VALUES
(1, './succes/succes1.jpg', '2023 yılı bilişim ödülünün sahibi olduk.', '2023-09-03 12:00:00.0000'),
(2, './succes/succes2.jpg', 'En yenilikçi ilk 50 şirketin arasındayız', '2023-05-05 09:00:00.0000'),
(3, './succes/succes3.jpg', 'Müşteri hizmetleri ve iş performansı gibi kategorilerde başarılarımız sayesinde Stevie Ödüllü kazandık.', '2023-01-10 00:00:00.0000'),
(4, './succes/succes2.jpg', 'bilisim odulumuz', '0000-00-00 00:00:00.0000'),
(5, './succes/succes2.jpg', 'bilisim odulumuz', '0000-00-00 00:00:00.0000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `password` int(128) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `sube` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `adres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `surname`, `email`, `tel`, `password`, `type`, `img`, `job`, `sube`, `country`, `adres`) VALUES
(1, '', 'John', '', 'john@example.com', '', 123, '', '', '', '', '', ''),
(3, '', 'Yüksel ', '', 'yukselsener9@gmail.com', '', 123, '', '', '', '', '', ''),
(4, '', 'emine', '', 'eminesener063@gmail.com', '', 123, '', '', '', '', '', ''),
(5, 'eminesener', 'emine', 'sener', 'eminesener063@gmail.com', '5310850945', 1234, 'yonetici', '', '', '', '', ''),
(7, 'mustafasener', 'Mustafa', 'Şener', '21360859058@ogrenci.btu.edu.tr', '5310850945', 12345, 'calisan', '', '', '', '', ''),
(8, 'koray', 'Koray', 'Ormankıran', 'koray@gmail.com', '33333', 1234, 'calisan', './user/koray.jpg', 'Satış Temsilcisi', 'Henry İtalya', 'Türkiye', 'Erdek/Balıkesir');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `satis`
--
ALTER TABLE `satis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `succes`
--
ALTER TABLE `succes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `satis`
--
ALTER TABLE `satis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `succes`
--
ALTER TABLE `succes`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
