-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2023 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `iphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ten` varchar(20) DEFAULT NULL,
  `dung_luong` varchar(5) DEFAULT NULL,
  `mau` varchar(10) DEFAULT NULL,
  `so_luong` int(5) DEFAULT NULL,
  `don_gia` varchar(10) DEFAULT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `ten`, `dung_luong`, `mau`, `so_luong`, `don_gia`, `ngay_nhap`, `img`) VALUES
(1, 'Iphone 14 Pro Max', '128', 'Tím', 50, '26.990.000', '2023-05-10', 'iphone-14-pro-max.png'),
(2, 'Iphone 14 Pro', '128', 'Đen', 50, '24.950.000', '2023-05-10', 'iphone-14-pro.png'),
(3, 'Iphone 14 Plus', '128', 'Hồng', 50, '21.790.000', '2023-05-10', 'iphone-14-plus.png'),
(4, 'Iphone 14', '128', 'Vàng', 50, '19.390.000', '2023-05-10', 'iphone-14.png'),
(5, 'Iphone 13', '128', 'Xanh lá', 50, '16.990.000', '2023-05-10', 'iphone-13.png'),
(6, 'Iphone 12', '128', 'Vàng', 50, '14.899.000', '2023-05-10', 'iphone-12.png'),
(7, 'Iphone 11', '64', 'Đen', 50, '10.299.000', '2023-05-10', 'iphone-11.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
