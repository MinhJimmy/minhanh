-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2022 lúc 02:32 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `parisspa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_baner` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_baner`, `name`, `img`, `created`, `status`) VALUES
(1, 'banner_23', 'banner_23', '2022-09-28 15:03:58', 1),
(2, 'banner_28', 'banner_28', '2022-09-28 15:03:58', 1),
(3, 'banner_29', 'banner_29', '2022-09-28 15:04:16', 1),
(4, 'banner_32', 'banner_32', '2022-09-28 15:06:24', 1),
(5, 'banner14', 'banner14', '2022-09-28 15:06:24', 1),
(6, 'banner16', 'banner16', '2022-09-28 15:06:24', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_spa` int(11) NOT NULL,
  `time` datetime DEFAULT NULL,
  `id_room` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id_book`, `id_user`, `id_spa`, `time`, `id_room`, `name`, `phone`, `updated`, `status`, `code`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', 1, 'Phạm Nguyễn Huy Hoàng', '0373988255', '2022-11-15 13:44:57', 1, 0),
(2, 2, 2, '0000-00-00 00:00:00', 2, 'Lê Hoàng Phát', '0234334666', '2022-11-15 14:05:27', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `name`, `country`, `created`, `status`) VALUES
(1, 'Shiseido', 'Nhật bản', '2022-11-15 14:24:26', 1),
(2, 'The Face Shop', 'Hàn quốc', '2022-11-15 14:24:26', 1),
(3, 'La Roche-Posay', 'Pháp', '2022-11-15 14:24:26', 1),
(4, 'Eau Thermale Avène', 'Pháp', '2022-11-15 14:24:26', 1),
(5, 'Hadalabo', 'Nhật bản', '2022-11-15 14:24:26', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `order_id`, `product_id`, `product_qty`, `created_at`, `updated_at`) VALUES
(220, 1, 49, 1, 3, '2022-12-16 08:35:40', '2022-12-16 08:36:34'),
(219, 1, 49, 2, 7, '2022-12-16 08:35:37', '2022-12-16 08:36:34'),
(218, 1, 48, 6, 6, '2022-12-16 08:34:13', '2022-12-16 08:34:27'),
(217, 1, 48, 11, 2, '2022-12-16 08:34:06', '2022-12-16 08:34:27'),
(216, 1, 47, 2, 1, '2022-12-16 08:33:35', '2022-12-16 15:36:47'),
(215, 1, 47, 1, 3, '2022-12-16 08:33:32', '2022-12-16 15:36:51'),
(221, 3, 50, 28, 1, '2022-12-16 11:05:56', '2022-12-16 11:06:13'),
(222, 3, 50, 29, 1, '2022-12-16 11:05:58', '2022-12-16 11:06:13'),
(223, 2, 51, 28, 1, '2022-12-16 11:25:41', '2022-12-16 11:31:51'),
(224, 2, 52, 28, 1, '2022-12-16 11:33:16', '2022-12-16 11:33:33'),
(225, 2, 53, 28, 1, '2022-12-16 11:36:52', '2022-12-16 11:37:55'),
(226, 2, 53, 29, 2, '2022-12-16 11:36:54', '2022-12-16 11:37:55'),
(227, 2, 54, 28, 1, '2022-12-16 11:38:27', '2022-12-16 11:38:44'),
(228, 2, 55, 28, 1, '2022-12-16 11:39:06', '2022-12-16 11:39:14'),
(229, 2, 56, 28, 1, '2022-12-16 11:40:22', '2022-12-16 11:40:39'),
(230, 2, 57, 28, 5, '2022-12-16 12:08:03', '2022-12-16 12:09:21'),
(231, 2, 58, 28, 1, '2022-12-16 12:10:49', '2022-12-16 12:10:59'),
(233, 6, 59, 29, 1, '2022-12-16 12:33:59', '2022-12-16 12:34:15'),
(196, 1, 39, 1, 2, '2022-12-01 03:52:09', '2022-12-09 09:14:15'),
(197, 1, 39, 2, 4, '2022-12-01 03:52:13', '2022-12-09 09:14:15'),
(198, 1, 39, 1, 3, '2022-12-02 23:25:39', '2022-12-09 09:14:15'),
(206, 1, 39, 2, 1, '2022-12-04 03:02:17', '2022-12-09 09:14:15'),
(205, 1, 39, 1, 2, '2022-12-04 03:02:11', '2022-12-09 09:14:15'),
(204, 1, 39, 2, 1, '2022-12-04 03:01:22', '2022-12-09 09:14:15'),
(203, 1, 39, 1, 4, '2022-12-04 03:01:20', '2022-12-09 09:14:15'),
(207, 1, 39, 1, 6, '2022-12-04 03:02:31', '2022-12-09 09:14:15'),
(208, 1, 39, 2, 5, '2022-12-04 03:02:34', '2022-12-09 09:14:15'),
(209, 1, 39, 11, 18, '2022-12-04 03:02:37', '2022-12-09 09:14:15'),
(210, 1, 39, 1, 2, '2022-12-09 05:54:03', '2022-12-09 09:14:15'),
(211, 1, 39, 2, 3, '2022-12-09 05:54:09', '2022-12-09 09:14:15'),
(212, 1, 39, 2, 1, '2022-12-09 09:14:01', '2022-12-09 09:14:15'),
(213, 2, 51, 28, 1, '2022-12-09 09:30:53', '2022-12-09 12:33:13'),
(214, 2, 51, 24, 1, '2022-12-09 09:30:55', '2022-12-09 12:33:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name`, `created`, `status`) VALUES
(1, 'Sữa rửa mặt', '2022-11-15 14:35:19', 1),
(2, 'Kem chống nắng', '2022-11-15 14:35:19', 1),
(3, 'Toner/ Nước cân bằng', '2022-11-15 14:35:19', 1),
(4, 'Tẩy da chết', '2022-11-15 14:35:19', 1),
(5, 'Mặt nạ đất sét', '2022-11-15 14:35:19', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_product` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` mediumint(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_method` tinyint(1) NOT NULL DEFAULT 1,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_method`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(47, 1, 1, '123', '123', 0, '2022-12-16 08:33:51', '2022-12-16 08:33:51'),
(48, 1, 1, 'TP.HCM', '12345', 1, '2022-12-16 08:34:27', '2022-12-16 09:35:59'),
(49, 1, 1, 'BD', '123', 2, '2022-12-16 08:36:34', '2022-12-16 08:36:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personnel`
--

CREATE TABLE `personnel` (
  `id_personnel` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `personnel`
--

INSERT INTO `personnel` (`id_personnel`, `fullname`, `username`, `password`, `email`, `gender`, `phone`, `img`, `status`) VALUES
(1, 'Gói Vip', 'Gói Vip', '1234', 'tamanh@gmail.com', 2, '0234334666', '', 1),
(2, 'Gói Thường ', 'Gói Thường ', 'nhoinhoi', 'phuongngan@gmail.com', 2, '0898232454', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `detail` longtext NOT NULL,
  `price` float NOT NULL,
  `pricesale` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_catalog`, `name`, `img`, `detail`, `price`, `pricesale`, `created`, `status`, `number`) VALUES
(1, 1, 'Serum Chống Nắng Dưỡng Thể Bioré Sáng Mịn Mát Lạnh 150ml\nUV Anti-Pollution Body Care Serum Refresh Bright SPF 50+/PA+++', 'SP_1.jpg', 'Chắc hẳn ai trong chúng ta cũng đã hơn một lần cùng tìm hiểu và nghe qua những ảnh hưởng xấu, tác hại lên làn da từ các tia cực tím (UV) tồn tại trong ánh nắng mặt trời, dễ dàng khiến da bị đen sạm, lão hóa, thậm chí dẫn đến viêm da hay ung thư da. Cho nên chọn cho mình một loại kem chống nắng thích hợp và hiệu quả để bảo vệ làn da là rất cần thiết, đặc biệt là làn da cơ thể. Serum Chống Nắng Body Bioré SPF50/PA+++ đến từ thương hiệu Bioré với chỉ số chống nắng cao, thẩm thấu nhanh và không gây bóng nhờn, không thấm nước, sẽ là trợ thủ đắc lực che chắn cho làn da bạn trước tác hại từ ánh nắng mặt trời và giúp da bạn luôn căng mọng, rạng rỡ. Sản phẩm thích hợp sử dụng cho mọi loại da.', 216000, 45, '2022-11-27 07:10:43', 1, 12),
(2, 1, 'Serum làm trắng dưỡng da Alpha Arbutin Collagen 3 Plus Collagen Serum', 'SP_2.jpg', 'CÔNG DỤNG:\r\nBổ sung dinh dưỡng thiếu hụt cho làn da lão hóa, sạm, lỗ chân lông to\r\nNgăn ngừa tình trạng lão hóa sớm, cho da trẻ trung hơn.\r\nĐiều trị và phòng ngừa nám sạm, tàn nhang, nếp nhăn, chống oxi hóa\r\nGiúp tăng trưởng tế bào và biểu bì da… \r\nBảo vệ tế bào khỏi sự nguy hại của các gốc tự do, ngăn cản sự phát triển của Melanin. Đây nguyên nhân tạo nên sắc tố da, vết thâm nám và ko đều màu\r\nDưỡng da trắng sáng, săn chắc, cải thiện da trở nên đều màu, tăng đàn hồi cho da\r\nGiúp da vùng mắt tươi trẻ khiến những nếp nhăn quanh mắt biến mất, tình trạng thâm quầng trở nên mờ dần\r\nChống lão hoá, làm lành vết thương không để lại sẹo giúp những tế bào đang bị lão hóa hồi phục lại thay thế bằng lớp tế bào non giúp da trở nên khỏe mạnh hơn.\r\n', 230000, 89, '2022-11-27 07:11:17', 1, 12),
(3, 1, 'Kem Orlane làm đẹp vùng da dưới cánh tay và nách Orlane Refining Arm Cream 200ml', 'SP_9.jpg', 'Orlane sử dụng công thức bí mật đặc biệt của mình để tạo ra những sản phẩm dưỡng da cao cấp với nền tảng chính của Orlane chính là giáo dục lại tế bào, chỉ ra cho tế bào cách hoạt  động đúng đồng thời nuôi dưỡng các tế bào hoạt động  trở về như hồi còn trẻ. Tất cả các sản phẩm của Orlane đều được bào chế theo một công thức độc quyền đặc biệt giúp cung cấp những tinh chất hoàn hảo mang lại sự trẻ hóa cho làn da.', 2682000, 64, '2022-11-27 07:17:54', 1, 12),
(4, 1, 'Kem chống nhăn công nghệ tự sinh, tự làm đầy vết nhăn ban đêm Orlane Night Extreme Anti-Wrinkle Regenerating Night Care 50ml', 'SP_10.jpg', 'Orlane sử dụng công thức bí mật đặc biệt của mình để tạo ra những sản phẩm dưỡng da cao cấp với nền tảng chính của Orlane chính là giáo dục lại tế bào, chỉ ra cho tế bào cách hoạt  động đúng đồng thời nuôi dưỡng các tế bào hoạt động  trở về như hồi còn trẻ. Tất cả các sản phẩm của Orlane đều được bào chế theo một công thức độc quyền đặc biệt giúp cung cấp những tinh chất hoàn hảo mang lại sự trẻ hóa cho làn da.', 520000, 0, '2022-11-02 14:36:02', 1, 12),
(5, 1, 'Kem dưỡng da Loreal Revitalift Night Cream – 50ml, ban đêm, dưỡng ẩm, săn chắc da', 'SP_11.jpg', 'Kem dưỡng da ban đêm Loreal Revitalift Night Cream giúp cải thiện độ đàn hồi của da, làm mờ và ngăn chặn sự hình thành của các nếp nhăn, cho bạn làn da luôn săn chắc, khỏe mạnh và trẻ trung cùng thời gian.', 5000000, 379, '2022-11-02 14:36:22', 1, 12),
(6, 1, 'Kem Dưỡng Ban Ngày Cấp Ẩm, Giảm Nếp Nhăn L\'oreal Revitalift Hyaluronic Acid Plumping Cream Day', 'SP_12.jpg', 'Kem Dưỡng Ban Ngày Cấp Ẩm, Giảm Nếp Nhăn L\'oreal Revitalift Hyaluronic Acid Plumping Cream Day 50ml là kem dưỡng ban ngày sản phẩm mang đến giải pháp chăm sóc da hiệu quả, giúp cấp ẩm vượt trội, tạo độ ẩm tự nhiên cho da, giúp da luôn ẩm mịn và căng mướt đồng thời hỗ trợ ngăn ngừa lão hóa, làm giảm nếp nhăn trên da thuộc thương hiệu L\'Oreal  đến từ Pháp.', 329000, 69, '2022-11-27 07:12:58', 1, 12),
(7, 1, 'Kem dưỡng chuyên dùng cho da đang nhạy cảm, rất mỏng Orlane Oligo Vitamin Antioxidant Cream 50ml', 'SP_14.jpg', 'Cream Oligo: Kem dưỡng làm dịu da, chăm sóc làn da đang mỏng manh, nhạy cảm sau laser trở nên khỏe hơn, cung cấp axitamin,  dưỡng chất hỗ trợ quá trình nuôi da.', 2172000, 0, '2022-11-02 14:36:22', 1, 12),
(8, 1, 'Mặt nạ dưỡng da tẩy tế bào chế dành cho da mỏng và nhạy cảm Orlane Oligo Vitamin Vitality Radiance Mask 75ml', 'SP_13.jpg', 'Mặt Nạ Giảm Nhạy Cảm Cao Cấp Orlane Mask Oligo S1012 (75ml) giúp cung cấp những vitamin, khoáng chất tạm thời cho da. Đối với những da đang bị tổn thương nặng, dùng mặt nạ Mask Oligo để tẩy tế bào chết, giảm nhạy cảm và giảm kích ứng cho da trong quá trình nuôi dưỡng da sau đó. Thành phần an toàn cho làn da của người sử dụng.', 1776000, 0, '2022-11-02 14:36:22', 1, 12),
(9, 2, 'Serum Chống Nắng Dưỡng Thể Bioré Da Sáng Mịn Màng 150ml\r\nUV Anti-Pollution Body Care Serum Intensive Aura SPF 50+/PA+++', 'SP_1.jpg', 'Serum Chống Nắng Body Bioré SPF50/PA+++ là sản phẩm chống nắng toàn thân đến từ thương hiệu mỹ phẩm Bioré thuộc tập đoàn KAO của Nhật Bản, áp dụng công nghệ Anti-Pollution giúp kháng bụi bẩn tạo màng chắn bảo vệ da và công nghệ Moisture Pack dưỡng da ẩm mượt, mềm mại. Ngoài ra, chống nắng toàn thân còn chứa các thành phần thiên nhiên mang lại hiệu quả dưỡng sáng, dưỡng ẩm vượt trội.', 216000, 151000, '2022-11-02 14:42:22', 1, 12),
(10, 2, 'Kem Kích Trắng Alpha Arbutin Collagen Cream', 'SP_2.jpg', 'Alpha Arbutin Body Cream 3+ chứa các hoạt chất Alpha Arbutin và Glutathione gấp 3 lần là hoạt chất dưỡng trắng hiệu quả và an toàn thông qua cơ chế ức chế quá trình chuyển hoá Tyrosine thành Melanocyte - chính là các hắc sắc tố khiến cho làn da bị sạm, nám, đồi mồi.', 134000, 110000, '2022-11-02 14:42:22', 1, 12),
(11, 2, 'Kem Dưỡng Sáng Da Eveline Dành Cho Mặt Và Toàn Thân 200ml', 'SP_3.jpg', 'Một làn da sáng, mịn màng như em bé là mơ ước của bất kỳ cô gái nào. Và với vô số các loại kem dưỡng sáng da được quảng cáo rầm rộ như hiện nay, bạn chắc hẳn rất phân vân không biết nên lựa chọn sản phẩm nào an toàn và mang tới hiệu quả cao khi sử dụng. Eveline Extra Soft Whitening Face & Body Cream - sản phẩm Hasaki muốn giới thiệu đến bạn ngay sau với thành phần tự nhiên như chiết xuất dưa leo, tinh dầu lê,...cùng nhiều dưỡng chất khác sẽ giúp dưỡng sáng các vùng da sạm màu, đồng thời giúp da khỏe mạnh, mịn màng và hạn chế được tình trạng kích ứng da.', 219000, 59, '2022-11-27 07:12:24', 1, 12),
(12, 2, 'Kem Dưỡng Ẩm Cerave Moisturizing Cream', 'SP_4.jpg', 'Kem dưỡng ẩm Cerave Moisturizing Cream - xuất xứ Mỹ, khối lượng 453gr - dành cho bạn nào da thường đến khô, cực kỳ tốt, rate 4.8/5 với 580 vote, được bình chọn là 1 trong 10 loại kem tốt nhất, dưỡng ẩm, phục hồi và tạo lớp chắn bảo vệ da hiệu quả với công thức Multivesicular Emulsion đã được cấp bằng sáng chế. Sản phẩm được phát triển và recommend bởi các bác sĩ chuyên khoa da.', 441000, 420000, '2022-11-02 15:48:02', 1, 12),
(13, 2, 'Sữa Dưỡng Thể CeraVe Cho Da Khô Đến Rất Khô 473ml\r\nMoisturising Lotion', 'SP_5.jpg', 'Sữa Dưỡng Thể Cerave Cho Da Khô Đến Rất Khô là sản phẩm dưỡng ẩm toàn thân đến từ thương hiệu mỹ phẩm Cerave của Mỹ, là một loại kem dưỡng ẩm nhẹ, không chứa dầu, giúp cấp ẩm cho da và phục hồi hàng rào tự nhiên của da. Sản phẩm với thành phần chứa 3 loại Ceramides (1, 3, 6-II) và áp dụng công nghệ MVE độc quyền có công dụng khóa độ ẩm cho da và giúp khôi phục hàng rào bảo vệ da. Sữa dưỡng thể sử dụng hàng ngày mang lại cho da cảm giác thoải mái và nhẹ nhàng, cung cấp dưỡng ẩm suốt 24 giờ. ', 425000, 423000, '2022-11-02 15:48:02', 1, 12),
(14, 2, 'Sáp Dưỡng Ẩm Phục Hồi Da Khô, Nứt Nẻ Vaseline Pure Petroleum Jelly Original 100ml', 'SP_6.jpg', 'Sáp Dưỡng Ẩm Phục Hồi Da Khô, Nứt Nẻ Vaseline Pure Petroleum Jelly Original là sáp dưỡng thuộc thương hiệu Vaseline được xem là kem chống nẻ, kem dưỡng ẩm số 1 tại Mỹ, với lượng tiêu thụ lớn, được làm từ dầu khoáng tự nhiên, cô đặc lại dưới dạng sáp (jelly) mềm, tan ở nhiệt độ cơ thể, giúp chống việc bong tróc, khô nứt nẻ của da, tạo mối liên kết giữa các tế bào da khỏe mạnh và săn chắc, giúp da mềm mại, mịn màng hơn.', 112000, 99000, '2022-11-02 15:48:02', 1, 12),
(15, 3, '[Mini 15ml] Kem Chống Nắng Dưỡng Sáng Da L\'Oreal UV Perfect Rosy White SPF50/PA++++', 'SP_15.jpg', 'Kem Chống Nắng Dưỡng Sáng Da L\'Oreal UV Perfect Rosy White SPF50/PA++++ là kem chống nắng vật lý lai hoá học với chỉ số chống nắng vượt trội giúp bảo vệ da mạnh mẽ dưới tác động của ánh nắng mặt trời. Đồng thời chứa thành phần dưỡng trắng da giúp cải thiện làn da tối màu thuộc thương hiệu L\'Oreal  đến từ Pháp.', 129000, 47, '2022-11-27 07:18:47', 1, 12),
(16, 3, 'Kem Chống Nắng L’Oréal Paris UV Defender SPF50+ PA++++ Matte & Fresh Kiềm Dầu Thoáng Mịn 50ml', 'SP_16.jpg', 'Thành Phần Chính và Công Dụng:- Tinh chất chống nắng L’Oréal Paris UV Defender SPF50+ PA++++ Matte & Fresh giúp bảo vệ da trước tác hại của ánh nắng mặt trời, che khuyết điểm trên da, với chỉ số chống nắng SPF50+ PA++++ Long UVA.', 259000, 75, '2022-11-27 07:19:22', 1, 12),
(17, 3, 'BLANCHE NEIGE WHITENING CREAM hàn quốc', 'SP_17.jpg', 'Hàng trăm năm nay trải qua bao nhiêu sự thay đổi của tiêu chuẩn cái đẹp thì làn da trắng vẫn luôn được yêu chuộng nhất. Trong mắt nhìn của người Việt, cụ thể làn đàn ông Việt, một cô gái có làn da trắng luôn gợi lên vẻ ngây thơ, trong sáng, thuần khiết, khiêm nhường. Cô gái nào sở hữu làn da trắng cũng sẽ dễ dàng hấp dẫn người khác giới, có được nhiều cơ hội hơn trong cuộc sống cũng như trong công việc. Nước da trắng hồng không tỳ vết là điểm cộng cho vẻ bề ngoài của một cô gái rất nhiều điểm đáng yêu, ngọt ngào.', 700000, 89, '2022-11-27 07:19:43', 1, 12),
(18, 3, 'Chống Nắng Ngăn Ngừa Sạm Nám Omar Sharif BLANCHE NEIGE SUN CREAM SPF 50 PA+++', 'SP_18.jpg', 'Sản phẩm chống nắng bảo vệ da dạng gel sữa mát lạnh dành cho mọi loại da với 3 công dụng:\r\n*Thành phần Vitamin C đậm đặc chiết xuất từ Kakadu Plum cho da trắng sáng\r\n*Bee Vemon phòng tránh các tổn thương da do tia UV gây ra. Cung cấp sợi Collagen cho da lớp phủ mịn màng, sáng óng ánh.\r\n*SPF50 PA+++ bảo vệ da an toàn với cảm giác, không nặng mặt, hút nhờn tuyệt đối. An toàn cả khi đi hồ bơi và tắm biển.\r\nKem chống nắng giúp bảo vệ 100% da khỏi tia cực tím và chống lão hóa da, ngăn chặn hình thành đốm đen, nám, tàn nhang trên da.\r\nNếu dưới ánh nắng trên 4 giờ nên thoa lại lần nữa.\r\nThành phần: Vitamin C. Bee Vemon', 880000, 87, '2022-11-27 07:22:07', 1, 12),
(19, 3, 'Kem Chống Nắng L’Oreal Mịn Nhẹ Kiềm Dầu Thoáng Mịn Da 50ml\r\nUV Defender Matte & Fresh SPF 50+ PA ++++', 'SP_19', 'Kem Chống Nắng L’Oreal Paris UV Defender UV Serum Protector SPF 50+ PA++++ là dòng sản phẩm chống nắng mới nhất năm 2021 vừa được ra mắt từ thương hiệu L’Oreal Paris nổi tiếng của Pháp, với công nghệ chống nắng bền bỉ và thành phần vàng bảo vệ da, dưỡng sáng giảm thâm nám sẽ giúp cản nắng tối đa, ngăn ngừa lão hóa da đến 5 năm.\r\n\r\nCó thể bạn chưa biết: 75% các dấu hiệu lão hóa da do tia cực tím (UVB và UVA) trong ánh nắng mặt trời gây ra. Bộ sưu tập Kem Chống Nắng UV Defender MỚI từ L’Oreal Paris sẽ là giải pháp bảo vệ tối ưu nhất cho da mặt, với chỉ số chống nắng mạnh mẽ SPF50+ và PA++++ giúp ngăn ngừa lão hóa, đốm nâu và tình trạng da xỉn màu do tia UV gây ra, đồng thời chăm sóc và dưỡng ẩm da. Công nghệ chống nắng thế hệ mới chứa 2 lớp màng bảo vệ bao gồm màng lọc Mexoryl SX và Mexoryl XL giúp cản tia UVA và UVB bền bỉ tối ưu suốt cả ngày dài.', 259000, 189000, '2022-11-02 15:48:02', 1, 12),
(20, 3, 'Kem Chống Nắng Loreal Paris UV Defender Matte & Fresh 50Ml - Kiềm Dầu Thoáng Mịn Da', 'SP_20.jpg', 'Kem Chống Nắng Loreal Paris UV Perfect Aqua Essence SPF50+ PA++++ 30ml bảo vệ da khỏi tác hại của tia UV với chỉ số chống nắng cao SPF50+ PA++++ và màng lọc quang phổ rộng MeroxylTM SX/XL bảo vệ da suốt 12h, giúp ngăn ngừa đốm nâu, vết thâm nám, sạm da, lão hóa.', 85000, 85, '2022-11-27 07:20:59', 1, 12),
(21, 4, 'ORLANE PARIS Extreme Line Reducing Re-Plumping Cream, 1.7 oz\r\n', 'SP_22.jpg', 'Extreme Line Reducing Re-Plumping Cream. An innovative new formula that addresses deep lines and wrinkles and takes into account damage from environmental and biological trauma. An exceptional treatment that fights deep wrinkles at their very source. Plumps up lines by guiding healthy fibroblasts to damaged areas. Triple action formula with an all-new active ingredient derived from elastin is combined with Memoxyle to stimulate skin regeneration. Black tea extract rebuilds the skin\'s underlying support while combating lipid loss. Ceramides provide essential lipids to moisturize and nourish uncomfortable skin, with lasting effect. Results in rejuvenated skin. Wrinkles fade and the skin is renewed from within to give it visibly fuller, shapelier contours. 1.7 oz.', 82000, 82, '2022-11-27 07:13:29', 1, 12),
(22, 4, 'Sữa làm ẩm da toàn thân Orlane Moisturizing Body Milk 500ml', 'SP_23.jpg', 'Orlane sử dụng công thức bí mật đặc biệt của mình để tạo ra những sản phẩm dưỡng da cao cấp với nền tảng chính của Orlane chính là giáo dục lại tế bào, chỉ ra cho tế bào cách hoạt  động đúng đồng thời nuôi dưỡng các tế bào hoạt động  trở về như hồi còn trẻ. Tất cả các sản phẩm của Orlane đều được bào chế theo một công thức độc quyền đặc biệt giúp cung cấp những tinh chất hoàn hảo mang lại sự trẻ hóa cho làn da.', 1320000, 84, '2022-11-27 07:30:33', 1, 12),
(23, 4, 'Mặt nạ dưỡng da tẩy tế bào chế dành cho da mỏng và nhạy cảm Orlane Oligo Vitamin Vitality Radiance Mask 75ml', 'SP_24.jpg', 'Mặt Nạ Giảm Nhạy Cảm Cao Cấp Orlane Mask Oligo S1012 (75ml) giúp cung cấp những vitamin, khoáng chất tạm thời cho da.\r\nĐối với những da đang bị tổn thương nặng, dùng mặt nạ Mask Oligo để tẩy tế bào chết, giảm nhạy cảm và giảm kích ứng cho da trong quá trình nuôi dưỡng da sau đó.\r\nThành phần an toàn cho làn da của người sử dụng.', 1776000, 75, '2022-11-27 07:57:10', 1, 12),
(24, 4, 'Kem Chống Nắng Maria Galland 194 Ultra Protective Care for the Face SPF 50', 'SP_25.jpg', 'Kem Chống Nắng Maria Galland 194 Ultra Protective Care for the Face SPF 50 có chứa màng lọc tia UV sẽ ngăn chặn bức xạ tia UV tác động đến làn da. Chỉ số chống nắng dạng cao SPF 50 sẽ chống nắng tối đa cho làn da trong suốt ngày dài (khoảng hơn 500 phút).\r\n\r\nTitanium dioxide có trong thành phần Kem Chống Nắng Maria Galland 194 Ultra Protective Care for the Face SPF 50 là một trong 21 hóa chất chống nắng được FDA công nhận với ngưỡng sử dụng ở mức từ 2 – 25%, bảo vệ làn da tối ưu trước tác hại của tia UV. Tác dụng chống nắng của titanium dioxide hoạt động tốt cả trên làn da nhạy cảm và cả những vùng da mỏng như quanh mắt mà không gây ra bất cứ kích ứng nào.\r\n\r\nKem Chống Nắng Maria Galland 194 Ultra Protective Care for the Face SPF 50 với kết cấu dạng kem mịn nhẹ, chỉ một lớp kem mỏng thoa lên da sẽ tạo lớp màng bao phủ toàn bộ bề mặt da, chống nắng cho da toàn diện.', 1395000, 86, '2022-11-27 07:36:02', 1, 12),
(25, 4, 'Kem Nền L\'Oréal Mịn Nhẹ Dưỡng Da Dạng Lỏng F2 30ml', 'SP_26.jpg', 'Kem Nền L\'Oréal Paris Mịn Nhẹ Dưỡng Da Dạng Lỏng True Match Super-Blendable Foundation 30ml chính là sản phẩm rất phù hợp với làn da châu Á. Được tích hợp các thành phần dưỡng ẩm giúp bổ sung độ ẩm đầy đủ cho làn da cùng với các hạt màu siêu mềm mịn, sản phẩm sẽ tạo độ che phủ và mang đến cho bạn làn da mịn màng, tươi sáng thật tự nhiên. Đặc biệt, lớp phấn còn có khả năng kiềm dầu hiệu quả cho bạn sự thông thoáng suốt cả ngày. ', 218000, 68, '2022-11-27 07:59:33', 1, 12),
(26, 4, 'Dưỡng thể nước hoa YSL Mon Paris body lotion', 'SP_27', 'Dưỡng thể nước hoa YSL Mon Paris body lotion 50ml\r\nNước hoa dòng YSL Mon Paris thì thơm nứt tiếng nhà YSL rồi nhé, Nếu dùng thêm cái lotion dưỡng thể này thì mùi giữ cực lâu nhé. Dùng riêng cũng thơm ngất ngây rồi.\r\nHàng tách set không hộp 1 tuýt duy nhất ạ.', 210000, 88, '2022-11-27 07:52:43', 1, 12),
(27, 5, 'Kem Dưỡng The Lab Oligo Hyaluronic Acid Calming Cream 50ml', 'SP_28.jpg', 'Kem Dưỡng The Lab Oligo Hyaluronic Acid Calming Cream 50ml là kem dưỡng giúp cấp ẩm chuyên sâu đồng thời phục hồi và bảo vệ da. Công thức độc quyền DERMA-CLERA™ từ thương hiệu The Lab by blanc doux và phân tử Oligo HA trọng lượng thấp, không những giúp da luôn ẩm mịn mà còn tăng cường hàng rào bảo vệ da, khóa ẩm giữ nước cho làn da căng mướt chỉ sau 72h.', 570000, 88, '2022-11-27 07:53:17', 1, 12),
(28, 5, 'Kem Collagen tái tạo da lão hóa ngày đêm Orlanne Paris Collagen Moisture Filler Day/ Night Cream 48g', 'SP_29.jpg', 'Thông thường, phần lớn các bạn trẻ cứ nghĩ rằng phải bước qua tuổi trung niên mới bắt đầu sử dụng các sản phẩm chống lão hóa. Đó là một suy nghĩ vô cùng sai lầm. Da bắt đầu quá trình lão hóa từ những năm 24, 25 tuổi, nên đây là thời gian hợp lý để bạn bổ sung thêm các dưỡng chất chống lão hóa cho da. Collagen là một chất chống oxy hóa và liên kết chặt chẽ các mô trong cơ thể, đặc biệt là da nên nó sẽ hiệu quả trong việc ngăn ngừa lão hóa.', 377000, 99, '2022-11-27 08:18:00', 1, 12),
(29, 5, 'Kem Dưỡng L’Oreal Paris Revitalift Hyaluronic Acid Plumping Cream Day 50ml', 'SP_30.jpg', 'Kem Dưỡng Orlanne Paris B21< Revitalift Hyaluronic Acid Plumping Cream Day 50ml thuộc dòng sản phẩm giúp làm giảm sự xuất hiện nếp nhăn, tăng cường độ đàn hồi cho da và củng cố độ ẩm tự nhiên trên làn da. Kem chứa hàm lượng Hyaluronic Acid đậm đặc nhất trong số các dòng kem dưỡng ra đời từ L’Oreal Paris, sản phẩm sẽ bảo vệ làn da bạn trong suốt cả ngày.', 329000, 88, '2022-11-27 08:19:13', 1, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `name`, `status`) VALUES
(1, 'Chi Nhánh 1: 45 Võ Thị Sáu , DaKao Quận 1,TP.HCM', 1),
(2, 'Chi Nhánh 2: 88  Hồng Hà ,Quận Tân Bình,TP.HCM', 1),
(3, 'Chi Nhánh 3: 334 Lý Chiến Thắng,Quận 3,TP.HCM', 1),
(4, 'Chi Nhánh 4: 88 Nguyễn Oanh,Quận Gò Vấp,TP.HCM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spa`
--

CREATE TABLE `spa` (
  `id_spa` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `price` float NOT NULL,
  `pricesale` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spa`
--

INSERT INTO `spa` (`id_spa`, `id_catalog`, `name`, `img`, `detail`, `price`, `pricesale`, `status`, `created`) VALUES
(1, 0, 'Combo Lấy Mụn Tăm Bông Chuẩn Y Khoa\r\nLấy mụn + Đắp mặt nạ + Chiếu ánh sáng sinh học', 'banner_27.jpg', 'Quy trình Combo Lấy Mụn Tăm Bông Chuẩn Y Khoa tại Paris Spa:\r\nBước 1: Bác sĩ Da Liễu thăm khám và soi da miễn phí.\r\n\r\nBước 2: Tẩy trang, rửa mặt làm sạch da.\r\n\r\nBước 3: Tẩy tế bào chết.\r\n\r\nBước 4: Xông nóng, hút dầu và mụn cám.\r\n\r\nBước 5: Sát khuẩn da lần 1.\r\n\r\nBước 6: Lấy nhân mụn bằng tăm bông chuẩn y khoa.\r\n\r\nBước 7: Sát khuẩn da lần 2.\r\n\r\nBước 8: Đi điện tím giúp diệt khuẩn gây mụn, kháng viêm.\r\n\r\nBước 9: Đắp mặt nạ Jean D\'Arcel (từ Đức) giúp giảm sưng, se khít lỗ chân lông.\r\n\r\nBước 10: Chiếu ánh sáng sinh học tái tạo tế bào và kết thúc quy trình.', 400000, 250000, 1, '2022-09-28 15:29:39'),
(2, 0, 'Thư Giãn Toàn Thân Với Đá Nóng\r\nHot Stone Therapy', 'banner_28.jpg', 'Quy trình thư giãn với đá nóng\r\n Bước 1: Thư giãn lưng bằng tinh dầu kết hợp ấn huyệt, đi lưng.\r\n\r\n Bước 2: Khởi động toàn thân.\r\n\r\n Bước 3: Day ấn huyệt 2 bên vai, gáy và cổ thư giãn.\r\n\r\n Bước 4: Day ấn huyệt bàn chân và 2 bên chân.\r\n\r\n Bước 5: Chườm đá nóng lên lưng.\r\n\r\n Bước 6: Nằm ngửa thư giãn mặt trước và 2 bên chân.\r\n\r\n Bước 7: Thư giãn 2 bên tay và cánh tay.\r\n\r\n Bước 8: Thư giãn ấn huyệt đầu vai gáy và kết thúc quy trình.\r\n\r\nLợi ích của liệu trình thư giãn đá nóng\r\nGiảm triệu chứng mất ngủ,giải tỏa căng thẳng tối đa, kích thích lưu thông khí huyết,\r\n\r\nLoại bỏ độc tố trong cơ thể mang lại sự khỏe khoắn nhờ vào năng lượng đá nóng kết hợp với tinh dầu thảo dược thiên nhiên.\r\n\r\nCân bằng trạng thái tâm lý ổn định, chống trầm cảm, hỗ trợ điều trị các vấn đề về cơ xương.\r\n\r\nNăng lượng từ đá nóng giúp thư giãn vô cùng hiệu quả và thay đổi tâm trạng con người.', 500000, 400000, 1, '2022-09-28 15:29:39'),
(3, 0, 'Thư Giãn Toàn Thân Hasaki\r\nGinger & Mugwort Therapy', 'banner_29.jpg', 'Quy trình thực hiện\r\nBước 1: Nằm sấp, khởi động cơ thể trong vòng 10 phút.\r\n\r\nBước 2: Thư giãn vai bằng rượu Haki có tác dụng giảm đau nhức, giải tỏa căng thẳng và phục hồi năng lượng cơ thể.\r\n\r\nBước 3: Xoa bóp, thư giãn và ấn huyệt kết hợp đi lưng với đá nóng, túi gừng ngãi.\r\n\r\nBước 4: Nằm ngửa, chườm mắt và chườm bụng kết hợp thư giãn, ấn huyệt mặt ngửa.\r\n\r\nBước 5: Chườm túi ngãi khô lên đầu gối, nhượng mắt cá chân lần lượt 2 bên.\r\n\r\nBước 6: Thư giãn tay bằng rượu Haki kết hợp đá nóng, gừng ngãi.\r\n\r\nBước 7: Thư giãn đầu cổ.\r\n\r\nBước 8: Dở túi chườm ra và kết thúc quy trình.\r\n\r\nSau liệu trình\r\nCơ thể được thư giãn hoàn toàn với thảo dược, đá nóng và tinh dầu giúp tăng sự tuần hoàn máu.\r\n\r\nHệ thần kinh được giải tỏa, các cơ, khớp được giảm nhức mỏi, cải thiện giấc ngủ tốt hơn.\r\n\r\nLàn da có thêm sức sống nhờ máu lưu thông tốt.\r\n\r\nThực hiện đều đặn liệu trình giúp loại bỏ độc tố trong cơ thể và hạn chế tình trạng tích tụ mỡ thừa.\r\n\r\nNhững trường hợp không nên dùng liệu trình\r\nKhách hàng đang gặp vấn đề về sức khỏe như: tụt huyết áp, suy nhược cơ thể.\r\n\r\nĐang trong chu kì kinh nguyệt.\r\n\r\nKhông sử dụng liệu trình cho phụ nữ đang mang thai.', 500000, 450000, 1, '2022-09-28 15:29:39'),
(4, 0, 'Thư Giãn Toàn Thân Với Tinh Dầu\r\nEssential Oil Body Therapy', 'Banner_30.jpg', 'Nâng Cao Sức Khỏe - Đánh Bay Căng Thẳng Với Tinh Dầu\r\n\r\nThời gian: 60 phút\r\n\r\nHiệu quả: Thư giãn cơ thể, thoải mái tinh thân sau liệu trình.\r\n\r\nLiệu trình thích hợp với\r\nDân văn phòng thường xuyên phải ngồi nhiều gây hiện tượng đau mỏi vai gáy, đau lưng,..\r\n\r\nKhách hàng có nhu cầu thư giãn do stress, thường xuyên căng thẳng cần được thư giãn,..\r\n\r\nLưu ý: chỉ áp dụng cho khách nữ.\r\n\r\nLiệu trình thư giãn tinh dầu là gì?\r\nĐây là liệu trình giúp giảm stress đáng kể về cả mức độ thể chất và tâm lý bằng các động tác xoa bóp, bấm huyệt, véo,... lên các huyệt chính của cơ thể. Từ đó hỗ trợ cân bằng toàn bộ cơ thể do ngồi làm việc quá lâu hoặc stress quá độ dẫn đến. Sử dụng liệu trình đều đặng hằng tuần để không chỉ nạp lại năng lượng cho cơ thể mà còn giúp dễ ngủ, giảm sự căng cơ, đau nhức vai lưng do ngồi nhiều. Bên cạnh đó tinh dầu còn giúp làm dịu da, tăng sự đàn hồi và mềm mịn khi kết hợp các động tác day, miết, thúc đẩy tuần hoàn máu lưu thông.\r\n\r\nQuy trình thư giãn toàn thân với tinh dầu\r\nBước 1: Thư giãn vùng lưng, nằm sấp, thoa tinh dầu ấn huyệt lưng, đi lưng trong khoảng 10 phút.\r\n\r\nBước 2: Khởi động bằng cách day ấn huyệt lưng.\r\n\r\nBước 3: Day ấn huyệt 2 bên vai, gáy và cổ trong khoảng 10 phút.\r\n\r\nBước 4: Day ấn huyệt bàn chân và 2 bên chân trong khoảng 10 phút.\r\n\r\nBước 5: Nằm ngửa và thư giãn mặt trước 2 bên chân trong khoảng 10 phút.\r\n\r\nBước 6: Thư giãn 2 bên tay và cánh tay.\r\n\r\nBước 7: Thư giãn ấn huyệt đầu vai gáy trong khoảng 10 phút.\r\n\r\nLưu ý: Liệu trình không áp dụng khi có kinh nguyệt, tụt huyết áp, phụ nữ đang mang thai.', 300000, 250000, 1, '2022-09-28 15:29:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `time`
--

CREATE TABLE `time` (
  `id_time` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `time`
--

INSERT INTO `time` (`id_time`, `name`, `time`) VALUES
(1, 'Ca 1', '8:00 am - 9:00 am'),
(2, 'Ca 2', '10:00 am - 11:00 am '),
(3, 'Ca 3', '14:00 pm - 15:00 pm'),
(4, 'Ca 4', '16:00 pm - 17:00 pm'),
(5, 'Ca 5', '18:00 pm - 19:00 pm'),
(6, 'Ca 6', '20:00 pm - 21:00 pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `time_setting`
--

CREATE TABLE `time_setting` (
  `id` int(11) NOT NULL,
  `time_start` int(2) NOT NULL,
  `time_end` int(2) NOT NULL,
  `time_step` int(2) NOT NULL,
  `limit_order` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `time_setting`
--

INSERT INTO `time_setting` (`id`, `time_start`, `time_end`, `time_step`, `limit_order`) VALUES
(1, 8, 21, 30, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `access` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `username`, `password`, `email`, `gender`, `phone`, `img`, `access`, `created`, `status`) VALUES
(1, 'lu1234', 'lu1234', '$2y$10$AurOwtYpEvqU6X2rRU/b4.dmaWwauoj5L7wlt..1U7kvia5Yy5MFW', 'lu1234@gmail.com', NULL, NULL, NULL, 1, '2022-12-01 11:32:26', 1),
(2, 'Minh', 'Minh', '$2y$10$AurOwtYpEvqU6X2rRU/b4.dmaWwauoj5L7wlt..1U7kvia5Yy5MFW', 'Minhanh4222@gmail.com', NULL, NULL, NULL, 1, '2022-12-16 19:29:29', 1),
(3, 'Huy', 'Huy', '$2y$10$AurOwtYpEvqU6X2rRU/b4.dmaWwauoj5L7wlt..1U7kvia5Yy5MFW', 'Huydz44888@gmail.com', NULL, NULL, NULL, 1, '2022-12-16 19:30:08', 1),
(4, 'Kiên', 'Kiên', '$2y$10$AurOwtYpEvqU6X2rRU/b4.dmaWwauoj5L7wlt..1U7kvia5Yy5MFW', 'Kientran4444@gmail.com', NULL, NULL, NULL, 1, '2022-12-16 19:30:53', 1),
(5, 'Hoàng', 'Hoàng', '$2y$10$AurOwtYpEvqU6X2rRU/b4.dmaWwauoj5L7wlt..1U7kvia5Yy5MFW', 'Huyhoang888422@gmail.com', NULL, NULL, NULL, 1, '2022-12-16 19:31:45', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_baner`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id_personnel`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Chỉ mục cho bảng `spa`
--
ALTER TABLE `spa`
  ADD PRIMARY KEY (`id_spa`);

--
-- Chỉ mục cho bảng `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

--
-- Chỉ mục cho bảng `time_setting`
--
ALTER TABLE `time_setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_baner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `spa`
--
ALTER TABLE `spa`
  MODIFY `id_spa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `time`
--
ALTER TABLE `time`
  MODIFY `id_time` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
