-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:11 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060537_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` bigint(20) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `trinhdo` varchar(50) NOT NULL,
  `chuyenmon` varchar(50) NOT NULL,
  `hocham` varchar(50) NOT NULL,
  `hocvi` varchar(50) NOT NULL,
  `coquan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Pham Van A', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(2, 'Pham Van B', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(3, 'Pham Van C', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(4, 'Pham Van D', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(5, 'Pham Van E', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(6, 'Pham Van G', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(7, 'Pham Van H', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU'),
(8, 'Pham Van I', '12/07/2001', 'NAM', 'TIEN SI', 'IT', 'TIEN SI', 'TIEN SI', 'TLU');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `magv` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
