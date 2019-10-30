-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2019 lúc 09:00 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_question_answer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhapp`
--

CREATE TABLE `cauhinhapp` (
  `id` int(10) UNSIGNED NOT NULL,
  `co_hoi_sai` int(11) NOT NULL,
  `thoi_gian_tra_loi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhdiemcauhoi`
--

CREATE TABLE `cauhinhdiemcauhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhtrogiup`
--

CREATE TABLE `cauhinhtrogiup` (
  `id` int(10) UNSIGNED NOT NULL,
  `loai_tro_giup` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linh_vuc_id` int(10) UNSIGNED NOT NULL,
  `phuong_an_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `noi_dung`, `linh_vuc_id`, `phuong_an_a`, `phuong_an_b`, `phuong_an_c`, `phuong_an_d`, `dap_an`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cầu thủ trưởng thành từ lò Southampton, thành danh ở Tottenham và hiện khoác áo Real Madrid ?', 15, 'Alvaro Arbeloa', 'James Rodriguez', 'Gareth Bale', ' Cristiano Ronaldo', 'Gareth Bale', '2019-10-17 02:12:46', '2019-10-17 02:12:46', NULL),
(2, 'a', 6, 'a', 'a', 'a', 'a', 'a', '2019-10-17 07:22:30', '2019-10-22 09:13:06', '2019-10-22 09:13:06'),
(3, 'b', 2, 'b', 'b', 'b', 'b', 'b', '2019-10-17 07:28:54', '2019-10-29 20:21:02', '2019-10-29 20:21:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietluotchoi`
--

CREATE TABLE `chitietluotchoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `luot_choi_id` int(10) UNSIGNED NOT NULL,
  `cau_hoi_id` int(10) UNSIGNED NOT NULL,
  `phuong_an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goicredit`
--

CREATE TABLE `goicredit` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_goi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `goicredit`
--

INSERT INTO `goicredit` (`id`, `ten_goi`, `credit`, `so_tien`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gói A', 100, 50000, '2019-10-16 02:24:34', '2019-10-16 02:24:34', NULL),
(2, 'Gói B', 200, 90000, '2019-10-16 02:24:34', '2019-10-16 02:24:34', NULL),
(3, 'Gói C', 300, 140000, '2019-10-16 02:24:34', '2019-10-16 02:24:34', NULL),
(5, 'gói V', 122, 20000000, '2019-10-22 09:05:56', '2019-10-22 09:06:14', '2019-10-22 09:06:14'),
(6, 'gói Z', 122, 20000000, '2019-10-22 09:08:34', '2019-10-22 09:08:47', '2019-10-22 09:08:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsumuacredit`
--

CREATE TABLE `lichsumuacredit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `goi_credit_id` int(10) UNSIGNED NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_linh_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `ten_linh_vuc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Toán', '2019-10-16 02:24:02', '2019-10-16 08:57:45', NULL),
(3, 'Vật lí', '2019-10-16 02:24:02', '2019-10-16 08:58:44', NULL),
(4, 'Địa lý', '2019-10-16 02:24:02', '2019-10-16 02:24:02', NULL),
(5, 'Lịch sử', '2019-10-16 02:24:02', '2019-10-16 02:24:02', NULL),
(6, 'Hóa', '2019-10-16 07:02:49', '2019-10-16 07:02:49', NULL),
(15, 'Thể Thao', '2019-10-16 10:16:27', '2019-10-16 10:16:27', NULL),
(63, 'viet nam', '2019-10-22 01:26:42', '2019-10-22 07:47:22', '2019-10-22 07:47:22'),
(65, '123456666666', '2019-10-22 01:29:25', '2019-10-24 00:31:20', NULL),
(66, 'aaaa', '2019-10-22 01:34:49', '2019-10-29 20:22:02', NULL),
(67, 'âm nhạc', '2019-10-22 02:04:11', '2019-10-24 00:09:12', NULL),
(68, 'khoa học', '2019-10-22 02:04:40', '2019-10-22 02:04:40', NULL),
(69, 'vũ trụ 4', '2019-10-22 02:06:04', '2019-10-24 00:08:59', NULL),
(72, 'bhhihihihi', '2019-10-22 02:14:45', '2019-10-29 20:18:57', NULL),
(73, 'ghi dai di', '2019-10-22 02:15:07', '2019-10-22 02:15:07', NULL),
(74, '123456', '2019-10-22 03:04:58', '2019-10-22 03:04:58', NULL),
(75, 'viet nam', '2019-10-22 03:12:05', '2019-10-22 03:12:05', NULL),
(76, 'hehe', '2019-10-22 08:13:30', '2019-10-22 08:13:30', NULL),
(77, 'minh nhut', '2019-10-22 18:38:01', '2019-10-24 00:04:56', NULL),
(78, 'aaa', '2019-10-29 20:22:58', '2019-10-29 20:22:58', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luotchoi`
--

CREATE TABLE `luotchoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `so_cau` int(11) NOT NULL,
  `diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_gio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_16_055919_create_linhvucs_table', 1),
(2, '2019_10_16_060816_create_nguoichois_table', 1),
(3, '2019_10_16_061305_create_goicredits_table', 1),
(4, '2019_10_16_061321_create_cauhois_table', 1),
(5, '2019_10_16_061359_create_luotchois_table', 1),
(6, '2019_10_16_061421_create_cauhinhdiemcauhois_table', 1),
(7, '2019_10_16_061437_create_cauhinhapps_table', 1),
(8, '2019_10_16_061458_create_quantriviens_table', 1),
(9, '2019_10_16_061523_create_cauhinhtrogiups_table', 1),
(10, '2019_10_16_061243_create_lichsumuacredits_table', 2),
(11, '2019_10_16_061342_create_chitietluotchois_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoichoi`
--

CREATE TABLE `nguoichoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_dai_dien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_cao_nhat` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoichoi`
--

INSERT INTO `nguoichoi` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `hinh_dai_dien`, `diem_cao_nhat`, `credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'huuthongit', '123456', 'huuthongit@gmail.com', 'huuthongit.jpg', 10000, 200, '2019-10-18 10:22:58', '2019-10-18 10:22:58', NULL),
(14, 'PABbYURl', '$2y$10$7UY6/MWFt6fLascLOiiBEuePj3toPxwilzKB01VMxUJOFL1hBGiBK', 'PABbYURl@gmail.com', 'PABbYURl.jpg', 1996, 130, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(15, 'iPPcGsrn', '$2y$10$CcRira0oXy45sQjjY.g/o.Yzi5gXFhANB1vdrKex9Pt5C2kR40zVa', 'iPPcGsrn@gmail.com', 'iPPcGsrn.jpg', 1250, 55, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(16, 'WrVks6LU', '$2y$10$DADSKLsBz77UmKMuvPRUg.ts4wUjbvNXZCvUO.0ZAs4Y.aY3a1UXe', 'WrVks6LU@gmail.com', 'WrVks6LU.jpg', 2748, 24, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(17, 'jZKuj0te', '$2y$10$Cp5N7Wat1BwRrQJY3uOdvOD5JZ90WS5VXJQ5op.ibhv0U28u6n8E2', 'jZKuj0te@gmail.com', 'jZKuj0te.jpg', 3456, 49, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(18, '0P8FN3dw', '$2y$10$jaGgojIPssjltw/Mb4EYh.YcSYO58pHBcFDK5GkLzMashImbbcywy', '0P8FN3dw@gmail.com', '0P8FN3dw.jpg', 2518, 322, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(19, 'B9a44ZTo', '$2y$10$rXoY7Elc3FjfsFg9ZiFDnuX4rlgH3m21U6b.TDSeZR3RE3UGQ6YsK', 'B9a44ZTo@gmail.com', 'B9a44ZTo.jpg', 3598, 392, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(20, 'jIhtSVta', '$2y$10$6PXewLpiXlZID1aQCMa8EODTSnVpqQ5Tt4vqvjlbywzRW9y5M2utO', 'jIhtSVta@gmail.com', 'jIhtSVta.jpg', 1043, 275, '2019-10-28 23:30:13', '2019-10-28 23:30:13', NULL),
(21, 'GSTZm5yh', '$2y$10$0C60pLJhoze78dmEcRZnW.CoeC7BYzs7XyhVQRkjOcHdv5bAmk82C', 'GSTZm5yh@gmail.com', 'GSTZm5yh.jpg', 4748, 372, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(22, '5ZhCOy0K', '$2y$10$EqGMu1MbpbFGe/hWj9oCsuVMJx6DE64DSfdHoaHYIGqCCR6HPVsqe', '5ZhCOy0K@gmail.com', '5ZhCOy0K.jpg', 4783, 146, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(23, 'x2Bt2HQr', '$2y$10$mkb/VXrXmJ1jmLaKM/dsx.r47NUpRV9WFz9VK0UhLyAFzDI0ZuNEO', 'x2Bt2HQr@gmail.com', 'x2Bt2HQr.jpg', 2872, 291, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(24, 'md1nAx2W', '$2y$10$E7Qdl/5OBN96c1KNZCQWeO2ai4q7qwZDUZHNjr8fz69vZlOGiugKK', 'md1nAx2W@gmail.com', 'md1nAx2W.jpg', 3688, 127, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(25, 'HvGoq6tp', '$2y$10$fCr/IdndIHY7AQNm5pfCe.tyjDOS45BEz7GiQbF.MuHZhUxPsgKYC', 'HvGoq6tp@gmail.com', 'HvGoq6tp.jpg', 2380, 496, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(26, 'oQ8LX86V', '$2y$10$k5v7Xjbvd8Afa53PPNPpuOFt53lmOEPrTRlT22.21/U7WRYYPUzNm', 'oQ8LX86V@gmail.com', 'oQ8LX86V.jpg', 3516, 445, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(27, 'sML4Q4Nc', '$2y$10$ZPd2mcVRinA8JPHhYCRjk.uD9lA1AQMH.rAqTr8ezFkh2nYzfLWbi', 'sML4Q4Nc@gmail.com', 'sML4Q4Nc.jpg', 2764, 295, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(28, 'T1jYwtBP', '$2y$10$9mAkR8iwt6AQnSMRvcD3v.4Qv1yaiB9sVXYPc.jbOMzRkP5S41CZS', 'T1jYwtBP@gmail.com', 'T1jYwtBP.jpg', 4059, 296, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(29, 'NlTLntq2', '$2y$10$dz1yY.E0EoKMh1etamqjwOi.t6LDwMiRBGz1QQKTCMntZWCNf9wK6', 'NlTLntq2@gmail.com', 'NlTLntq2.jpg', 2618, 78, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(30, '5AI5ibvE', '$2y$10$f8vP0OfA.FClHgkmqd2aOewzdHmFOZ2hOad.Pbl5nYMXGqq8A/mzq', '5AI5ibvE@gmail.com', '5AI5ibvE.jpg', 1658, 429, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(31, 'gJhMLPjL', '$2y$10$TMD5q3AGblnzUxt.fd3UiusQlGNcN.Ya0U2OBDcLF5QyP/71BIfAC', 'gJhMLPjL@gmail.com', 'gJhMLPjL.jpg', 1705, 86, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(32, 'nw5lBdQV', '$2y$10$ARgWOCU5.OPDktMW1c6yqOBWMf2Pzo1UR8TtRymXdk0Z8y0Dl3LVO', 'nw5lBdQV@gmail.com', 'nw5lBdQV.jpg', 3821, 453, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(33, 'oQ0ScT6K', '$2y$10$jpvlkg/p7Ur73CPIAz9hKeHXQYhl5fYtYC.5ZqLmGUUzq0MQMMdFi', 'oQ0ScT6K@gmail.com', 'oQ0ScT6K.jpg', 3772, 172, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(34, 'YGY9sW8Y', '$2y$10$YKqS8PogEFVGZ5wqIXPnou.EetxBmZ.pn38M3ZNculL4dFjFIsc.G', 'YGY9sW8Y@gmail.com', 'YGY9sW8Y.jpg', 4991, 301, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(35, 'JTbfrwD4', '$2y$10$Hrv8yq295rNYstqQbPu/x.ku5L0vFjk6ZpntJU8fkpX9qcT0YS29a', 'JTbfrwD4@gmail.com', 'JTbfrwD4.jpg', 2596, 254, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(36, 'bXg6b2lW', '$2y$10$IXFMMtJoNE9ECiq45LMiVOMQX58.7iHW5QpMvj2AGX2OlUa16V6tW', 'bXg6b2lW@gmail.com', 'bXg6b2lW.jpg', 1689, 412, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(37, 'SLzs6sCV', '$2y$10$PEJfyJQRHXILvTdRB7th9u7QsvzdOS9i3uVqrxbEF/xY7bv8tboEO', 'SLzs6sCV@gmail.com', 'SLzs6sCV.jpg', 3002, 498, '2019-10-28 23:30:14', '2019-10-28 23:30:14', NULL),
(38, 'PMejNyjV', '$2y$10$LWr/yNbGBKd2q.a9WXCmP.SfbWrRqQNndaw4EU4vaTEcs096ZlJxS', 'PMejNyjV@gmail.com', 'PMejNyjV.jpg', 3820, 136, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(39, 'fwAgKwlX', '$2y$10$xdRuOAt4jgQtKrvx9ZPW2O/y5V.zDOcyubrTqlnKfb59y7u2QUVeO', 'fwAgKwlX@gmail.com', 'fwAgKwlX.jpg', 3565, 430, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(40, 'yUnUwN6W', '$2y$10$4e8S4U3KhKEhlfwqmmeG5.aAs9OlQ8D6LLrDHAq3mM6tWhxLE7k5y', 'yUnUwN6W@gmail.com', 'yUnUwN6W.jpg', 2536, 178, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(41, 'ahJZwa4z', '$2y$10$cAgaSlqZSsMP6jqajqh2fuzZa0tEUixtsiQPgFVmTOwkwlKuLL1T6', 'ahJZwa4z@gmail.com', 'ahJZwa4z.jpg', 3886, 424, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(42, 'a5u8ODGS', '$2y$10$r9nhUBzqhM09KuQe/bzF9.R28jpGvt2qIuMGheNwTteUQS1vsY7Be', 'a5u8ODGS@gmail.com', 'a5u8ODGS.jpg', 3169, 236, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(43, 'xeY7UFvO', '$2y$10$hCVh/VvPslvuJyft0S.nQ.eKdj5vC7e3jgrcxTaM4.77sz0vJb6Xi', 'xeY7UFvO@gmail.com', 'xeY7UFvO.jpg', 1215, 27, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(44, 'M8ZldvL3', '$2y$10$F7gjL87DGwOH8k06ky8CBu/s/dsr.3VuAlknsxM91eXXsU5h5oUoK', 'M8ZldvL3@gmail.com', 'M8ZldvL3.jpg', 1016, 319, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(45, 'Uh113KC5', '$2y$10$m0/UAeIjebXYTwkvPYO9j.U4nV89lSPnRq/3ZfAEmpDwEq4E05zxS', 'Uh113KC5@gmail.com', 'Uh113KC5.jpg', 1008, 374, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(46, '197qRGEt', '$2y$10$xfradCTU2IJVIwXP/BCgT.0v3jcIC5glXoGBOhZ3LXtoic49AnSde', '197qRGEt@gmail.com', '197qRGEt.jpg', 1005, 431, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(47, 'ZN0K0XA7', '$2y$10$PRS4ldVpfFll0oCqUvAUr.wGzBzRL0KO4zK2I0oslgOM3NeKNhGWi', 'ZN0K0XA7@gmail.com', 'ZN0K0XA7.jpg', 1240, 213, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(48, 's9Qb8MDh', '$2y$10$chfzOdeVotIjcGFWMiCm3uwByDCgQhL4B0GHcLQ.QGMTjjAP44zAG', 's9Qb8MDh@gmail.com', 's9Qb8MDh.jpg', 1157, 51, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(49, 'TpVwwEF2', '$2y$10$1HMA0XxeSZbxu6FLzr9nPOeROB.8zv.INGN.4HHK1HO/ijFY2LOk.', 'TpVwwEF2@gmail.com', 'TpVwwEF2.jpg', 4033, 391, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(50, 'Ie7Jozb5', '$2y$10$6DriDf.O0fqIuH8DOp22jOD5BVcYVhyhSl.8BpF6dMH1RUIinWcZm', 'Ie7Jozb5@gmail.com', 'Ie7Jozb5.jpg', 3719, 339, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(51, 'kXCcWW6l', '$2y$10$Fy2LKQHAL4IawcxzEM87l.M4/yYXaQ/FRgAwJQcLP6b2qllhIzFX.', 'kXCcWW6l@gmail.com', 'kXCcWW6l.jpg', 3242, 222, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(52, 'uTu84CM3', '$2y$10$QIWzIUtfdPiK72mC0ayT0e5LaCWSZUJjSXbPyArOasvziR6l7y34q', 'uTu84CM3@gmail.com', 'uTu84CM3.jpg', 1833, 234, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(53, '7hlatOCg', '$2y$10$zzk9iUjeFL6LJM3RnGrX2eiI.JWkvGnxkzR7X4A3rkVeI0v5ZggVO', '7hlatOCg@gmail.com', '7hlatOCg.jpg', 3708, 369, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(54, 'jnrpA7bt', '$2y$10$R1qPjJc7T90nWO77QzVDhOSZeBxpxpV5h.Wn53vM495IFACasqBKa', 'jnrpA7bt@gmail.com', 'jnrpA7bt.jpg', 1167, 201, '2019-10-28 23:30:15', '2019-10-28 23:30:15', NULL),
(55, '0ACqDB6U', '$2y$10$7ppY774qLH5CN.qVGW1rxu7lT7OekGmftzBBfqeTZVUm0SjTNMB5i', '0ACqDB6U@gmail.com', '0ACqDB6U.jpg', 3666, 370, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(56, 'YPxpHOxe', '$2y$10$qRxJAJsZVwApBER/rZT9fO0vLYyPsZ1Eaw1Ex3R0L2CZ/JzerIqzi', 'YPxpHOxe@gmail.com', 'YPxpHOxe.jpg', 3168, 47, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(57, 'EfyERw3O', '$2y$10$Oyro7fF/NaIkPxTZW6.UOOCzio/MAYoXR.bMhdkfv836hbVw2qu3m', 'EfyERw3O@gmail.com', 'EfyERw3O.jpg', 1167, 38, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(58, 'AWyyiii4', '$2y$10$BHOU1U2LyyQunLt9N7TeFe9U2UjzXR0WPFYkgH8x7EgBA3rSDzhuC', 'AWyyiii4@gmail.com', 'AWyyiii4.jpg', 3043, 191, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(59, 'tpRQkrUi', '$2y$10$CiMyJCi2tluByouc8O1Sy.iwg67/8pf/HzpixIXvEaIbSLqAsjecu', 'tpRQkrUi@gmail.com', 'tpRQkrUi.jpg', 4360, 373, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(60, 'PplbiG3B', '$2y$10$zBpx5JAseIQ/XfuKYBgUh..agxKPldCqU0H.uXoUE4v56tEMgjaZm', 'PplbiG3B@gmail.com', 'PplbiG3B.jpg', 3882, 318, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(61, 'UNmDV4MB', '$2y$10$4Hze7a7N2/kUPKMjKbfzhe4hRR2VLLF6i8h9qadINMmtw81RqOWQS', 'UNmDV4MB@gmail.com', 'UNmDV4MB.jpg', 4391, 265, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(62, 'PeQuRKbI', '$2y$10$TvYGyo6mcmb39PUkzU3/zeWi4KOzWvhg5gfMq3TFE62cljem.igky', 'PeQuRKbI@gmail.com', 'PeQuRKbI.jpg', 4957, 224, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL),
(63, 'vurTrbmJ', '$2y$10$00kPLtrWM0NyzSww.G0/veNPKZ4nD67oj.4U02aDCtLALmxufERvO', 'vurTrbmJ@gmail.com', 'vurTrbmJ.jpg', 3077, 140, '2019-10-28 23:30:16', '2019-10-28 23:30:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin1', '$2y$10$Hi9PZV/z7lZCj6CzRAETpOF0R4.TIefoBM.43UQGIS7ED3UdzpgqK', 'quan tri vien 1', '2019-10-27 18:24:37', '2019-10-27 18:24:37', NULL),
(4, 'admin2', '$2y$10$7w42AKflZUr1I9w7Khcx0uH9YDn4GJC22HlQ9bCN.eW9oHGoqUBZ.', 'quan tri vien 2', '2019-10-27 18:24:37', '2019-10-27 18:24:37', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhinhapp`
--
ALTER TABLE `cauhinhapp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhinhdiemcauhoi`
--
ALTER TABLE `cauhinhdiemcauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhinhtrogiup`
--
ALTER TABLE `cauhinhtrogiup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cauhoi_linh_vuc_id_foreign` (`linh_vuc_id`);

--
-- Chỉ mục cho bảng `chitietluotchoi`
--
ALTER TABLE `chitietluotchoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietluotchoi_luot_choi_id_foreign` (`luot_choi_id`),
  ADD KEY `chitietluotchoi_cau_hoi_id_foreign` (`cau_hoi_id`);

--
-- Chỉ mục cho bảng `goicredit`
--
ALTER TABLE `goicredit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichsumuacredit`
--
ALTER TABLE `lichsumuacredit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lichsumuacredit_nguoi_choi_id_foreign` (`nguoi_choi_id`),
  ADD KEY `lichsumuacredit_goi_credit_id_foreign` (`goi_credit_id`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luotchoi`
--
ALTER TABLE `luotchoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `luotchoi_nguoi_choi_id_foreign` (`nguoi_choi_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoichoi`
--
ALTER TABLE `nguoichoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhinhapp`
--
ALTER TABLE `cauhinhapp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhinhdiemcauhoi`
--
ALTER TABLE `cauhinhdiemcauhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhinhtrogiup`
--
ALTER TABLE `cauhinhtrogiup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietluotchoi`
--
ALTER TABLE `chitietluotchoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `goicredit`
--
ALTER TABLE `goicredit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lichsumuacredit`
--
ALTER TABLE `lichsumuacredit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `luotchoi`
--
ALTER TABLE `luotchoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nguoichoi`
--
ALTER TABLE `nguoichoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_linh_vuc_id_foreign` FOREIGN KEY (`linh_vuc_id`) REFERENCES `linhvuc` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitietluotchoi`
--
ALTER TABLE `chitietluotchoi`
  ADD CONSTRAINT `chitietluotchoi_cau_hoi_id_foreign` FOREIGN KEY (`cau_hoi_id`) REFERENCES `cauhoi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietluotchoi_luot_choi_id_foreign` FOREIGN KEY (`luot_choi_id`) REFERENCES `nguoichoi` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lichsumuacredit`
--
ALTER TABLE `lichsumuacredit`
  ADD CONSTRAINT `lichsumuacredit_goi_credit_id_foreign` FOREIGN KEY (`goi_credit_id`) REFERENCES `goicredit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lichsumuacredit_nguoi_choi_id_foreign` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoichoi` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `luotchoi`
--
ALTER TABLE `luotchoi`
  ADD CONSTRAINT `luotchoi_nguoi_choi_id_foreign` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoichoi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
