-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Haz 2020, 21:46:04
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit_sistemi`
--

CREATE TABLE `kayit_sistemi` (
  `id` int(11) NOT NULL,
  `kitap_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitap_turu` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazar_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `basim_yili` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yayin_evi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kayit_sistemi`
--

INSERT INTO `kayit_sistemi` (`id`, `kitap_adi`, `kitap_turu`, `yazar_adi`, `basim_yili`, `yayin_evi`) VALUES
(78, 'Aç Tırtıl ', 'Hikaye', 'Eric Carle', '2015-11-01', 'Mavi Bulut Yayıncılık'),
(79, 'Yavru Timsah Çipiti', 'hikaye', 'Catherine Rayner', '2017-05-01', 'İş Bankası Kültür Yayınları'),
(80, 'Pandemi ', 'Eğitim', 'Sonia Shah', '2020-03-02', 'Sahi Kitap');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit_sistemi`
--
ALTER TABLE `kayit_sistemi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit_sistemi`
--
ALTER TABLE `kayit_sistemi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
