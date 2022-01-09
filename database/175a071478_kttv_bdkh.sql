-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `175a071478_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `maduan` int(10) UNSIGNED NOT NULL,
  `tenduan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namthuchien` date DEFAULT NULL,
  `linhvuc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhiemvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquanthuchien` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Cong vien nuoc', '0000-00-00', 'Giai Trí', 'Khao Sat', 'Cong ty TNHH T3H'),
(2, 'Biet thu Sunhose', '0000-00-00', 'Xay Dung', 'Thi Cong', 'Cong Ty TNHH V3'),
(3, 'Cau Thang Long', '0000-00-00', 'Xay Dung', 'Thi Cong', 'Cong Ty TNHH Male'),
(4, 'Cau Trang Tien', '0000-00-00', 'Xay Dung', 'Thi Cong', 'Cong Ty TNHH Female'),
(5, 'VinCity', '0000-00-00', 'Xay Dung', 'Khao Sat', ' Cong Ty TNHH Female'),
(6, 'Bien doi khi hau tai Viet Nam', '0000-00-00', 'Bien doi khi hau', 'Male', 'Cong Ty TNHHMale'),
(7, 'Shitanten', '0000-00-00', 'Do Uong', 'Khao Sat', 'Cong Ty TNHH Male'),
(8, 'T Billiards', '0000-00-00', 'Kinh Doanh', 'Thi Cong', 'Cong Ty TNHH V3'),
(9, 'Hill Bar', '0000-00-00', 'Kinh Doanh', 'Khao Sat', 'Cong ty TNHH T3H'),
(10, 'TocoToco', '0000-00-00', 'Do Uong', 'Khao Sat', 'Cong ty TNHH T3H');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
