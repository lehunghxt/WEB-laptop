-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2019 lúc 07:15 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(16, 'banner2', '7fz9p52wit.jpg', 'banner2', 1, NULL, NULL),
(17, 'banner3', 'e237ibruym.jpg', 'banner3', 1, NULL, NULL),
(18, 'banner4', '3eu8nmqrzw.jpg', 'banner4', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dell', 'Laptop Dell', 'dell', NULL, 1, '2019-08-08 08:17:46', '2019-08-08 08:17:46'),
(2, 'Asus', 'Laptop Asus', 'asus', NULL, 1, '2019-08-08 09:25:24', '2019-08-08 09:25:24'),
(3, 'Hp', 'Laptop HP', 'hp', NULL, 1, '2019-08-08 09:25:46', '2019-08-08 09:25:46'),
(4, 'ThinkPad', 'Laptop ThinkPad', 'thinkpad', NULL, 1, '2019-08-08 09:26:12', '2019-08-08 09:26:12'),
(5, 'Acer', 'Laptop Acer', 'acer', NULL, 1, '2019-08-08 09:26:29', '2019-08-08 09:26:29'),
(6, 'Microsolf', 'Laptop Microsolf', 'microsolf', NULL, 1, '2019-08-08 09:26:56', '2019-08-08 09:26:56'),
(7, 'Sony', 'Laptop Sony', 'sony', NULL, 1, '2019-08-08 09:27:12', '2019-08-08 09:27:12'),
(8, 'SamSung', 'Laptop SamSung', 'samsung', NULL, 1, '2019-08-08 09:27:37', '2019-08-08 09:27:37'),
(9, 'Apple', 'Laptop Apple', 'apple', NULL, 1, '2019-08-08 09:28:00', '2019-08-08 09:28:00'),
(10, 'TOSIBA', 'Laptop TOSIBA', 'TOSIBA', NULL, 1, '2019-08-08 09:28:54', '2019-08-08 09:28:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Liên Hệ', '<p><strong>ĐT :&nbsp;0941 80 81 82&nbsp;( đt, zalo, fb &hellip; )</strong></p>\r\n\r\n<p><strong>Đ/c :&nbsp;60/26 Đồng Đen , P.14 , Q.TB</strong><br />\r\n<strong>Th&ocirc;ng tin t&agrave;i khoản :</strong></p>\r\n\r\n<p><strong>STK :&nbsp;025 100 274 4784</strong></p>\r\n\r\n<p><strong>Chủ t&agrave;i khoản :&nbsp;Nguyễn Minh Nhật</strong></p>\r\n\r\n<p><strong>Ng&acirc;n h&agrave;ng Vietcombank &ndash; Chi nh&aacute;nh B&igrave;nh T&acirc;y</strong></p>\r\n', 1, '2019-08-15 22:46:01', '2019-08-16 11:27:17'),
(2, 'Nội dung liên hệ 1', '<p>Nội dung li&ecirc;n hệ 1</p>\r\n', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cpu`
--

CREATE TABLE `cpu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpu_name` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cpu`
--

INSERT INTO `cpu` (`id`, `cpu_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AMD', 1, '2019-08-08 09:44:53', '2019-08-15 09:15:29'),
(2, 'Celeron', 1, '2019-08-08 09:45:24', '2019-08-08 09:45:24'),
(3, 'Core i3', 1, '2019-08-08 09:45:38', '2019-08-08 09:45:38'),
(4, 'Core i5', 1, '2019-08-08 09:46:41', '2019-08-08 09:46:41'),
(5, 'Core i7', 1, '2019-08-08 09:46:59', '2019-08-08 09:46:59'),
(6, 'Core i9', 1, '2019-08-08 09:47:11', '2019-08-08 09:47:11'),
(7, 'Core M', 1, '2019-08-08 09:47:51', '2019-08-08 09:47:51'),
(8, 'Core M5', 1, '2019-08-08 09:48:07', '2019-08-08 09:48:07'),
(9, 'Core M7', 1, '2019-08-08 09:48:24', '2019-08-08 09:48:24'),
(10, 'Xeon', 1, '2019-08-08 09:48:33', '2019-08-08 09:48:33'),
(11, 'alert(\"boom\")', 1, '2019-08-16 02:38:56', '2019-08-16 11:27:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_06_151056_create_category_table', 2),
(5, '2019_08_07_045458_create_products_table', 3),
(6, '2019_08_07_050430_create_cpu_table', 3),
(7, '2019_08_07_050524_create_vga_table', 3),
(8, '2019_08_07_050610_create_monitor_table', 3),
(10, '2019_08_13_111313_create_banner_table', 4),
(11, '2019_08_13_180638_create_news_table', 5),
(12, '2019_08_16_052954_create_contact_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monitor`
--

CREATE TABLE `monitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monitor_name` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monitor`
--

INSERT INTO `monitor` (`id`, `monitor_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '11.6 inch', 1, '2019-08-08 10:04:32', '2019-08-08 10:04:32'),
(2, '12 inch', 1, '2019-08-08 10:04:54', '2019-08-08 10:04:54'),
(3, '12.5 inch', 1, '2019-08-08 10:05:05', '2019-08-08 10:05:05'),
(4, '13.3 inch', 1, '2019-08-08 10:05:21', '2019-08-08 10:05:21'),
(5, '14 inch', 1, '2019-08-08 10:05:38', '2019-08-08 10:05:38'),
(6, '15.6 inch', 1, '2019-08-08 10:05:56', '2019-08-08 10:05:56'),
(7, '16.4 inch', 1, '2019-08-08 10:06:37', '2019-08-08 10:06:37'),
(8, '17.3 inch', 1, '2019-08-08 10:06:50', '2019-08-08 10:06:50'),
(9, '16.4 inch', 1, '2019-08-08 10:07:09', '2019-08-08 10:07:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `views` int(255) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `views`, `url`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Những điều bạn chưa biết về laptop cũ giá rẻ', '5fhpvx9qze.jpg', '<h2>Những điều bạn chưa biết về laptop cũ giá rẻ</h2>\r\n\r\n<p>Laptop cũ – một khái niệm mà hầu như ai muốn mua một chiếc máy tính đều biết đến. Hiểu nôm na là những chiếc máy tính đã qua sử dụng. Có thể còn mới hay đã trầy xước nhiều. Thế nhưng không phải ai cũng biết những lợi ích mà chiếc laptop cũ mang lại. Hãy tìm hiểu những điều bạn chưa biết về laptop cũ giá rẻ. Bạn sẽ thấy có nhất thiết phải mua một chiếc máy mới hay mua máy cũ nhé.</p>\r\n\r\n<p><img alt=\"Những điều bạn chưa biết về laptop cũ giá rẻ\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2019/08/Yoga-920-Star-Wars-i7-15.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<h3>Vì sao nên mua laptop cũ?</h3>\r\n\r\n<p>Trong thời buổi kinh tế khó khăn, tiết kiệm tối đa chi phí là vấn đề đáng quan tâm. Có nhiều lý do mà bạn không nên bỏ qua một chiếc laptop cũ:</p>\r\n\r\n<p>+ Tiết kiệm chi phí so với mua một chiếc máy mới cùng cấu hình.</p>\r\n\r\n<p>+ Bạn có thể test sản phẩm một cách kỹ càng hơn. Được so sánh tỉ mỉ các máy với nhau, từ đó chọn ra một chiếc máy ưng ý nhất.</p>\r\n\r\n<p>+ Có thể tùy ý nâng cấp chiếc máy lên cấu hình cao hơn. Điều mà thật sự khó khăn khi bạn mua một chiếc máy mới. Điều này không hề ảnh hưởng đến chính sách bảo hành khi mua máy cũ.</p>\r\n\r\n<p>+ Một số laptop cũ còn rất mới, còn chế độ bảo hành chính hãng. Bạn hoàn toàn có thể an tâm khi sử dụng.</p>\r\n\r\n<p><img alt=\"Những điều bạn chưa biết về laptop cũ giá rẻ\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2019/08/Yoga-920-Star-Wars-i7-9.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<h3>Chế độ bảo hành của laptop cũ</h3>\r\n\r\n<p>Tuy không có chế độ bảo hành dài hạn như laptop mới. Ngoại trừ một số laptop còn chế độ bảo hành chính hãng. Những chiếc laptop cũ vẫn có chế độ bảo hành riêng của cửa hàng.</p>\r\n\r\n<p>Bên cạnh đó, bạn còn có thể nhận được những quà tặng hấp dẫn nữa. Ngoài chế độ bảo hành cho máy, bạn cũng có thể mua các gói bảo hành khác để đảm bảo yên tâm sử dụng lâu dài.</p>\r\n\r\n<p><img alt=\"Những điều bạn chưa biết về laptop cũ giá rẻ\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2019/03/X1-carbon-gen-6-QHD-9.jpg\" style=\"height:525px; width:700px\" /></p>\r\n\r\n<p>Rất nhiều người vì chưa hiểu rõ về laptop cũ mà bỏ qua những chiếc máy tốt với giá cả phải chăng. Với bài viết <strong>những điều bạn chưa biết về laptop cũ giá rẻ</strong>. Ắt hẳn bạn đã biết được những lợi ích mà laptop cũ mang lại rồi đúng không nào?</p>\r\n', 0, 'Nhung-dieu-ban-chua-biet-ve-laptop-cu-gia-re', 1, NULL, NULL),
(8, 'Những lý do laptop cũ được yêu thích', '7i5wd1x0zm.jpg', '<h2>Những lý do laptop cũ được yêu thích</h2>\r\n\r\n<p><em>Có nhiều người không lựa chọn sử dụng laptop cũ. Bởi họ nghĩ rằng laptop cũ là laptop đã qua sử dụng, hư hỏng nhiều. Thế nhưng đây là quan điểm hết sức sai lầm. Vì sao? Bạn hãy cũng theo dõi <a href=\"https://laptopcugiare.com.vn/nhung-ly-do-laptop-cu-duoc-yeu-thich\"><strong>những lý do laptop cũ được yêu thích</strong></a> nhé.</em></p>\r\n\r\n<h3>Tiết kiệm chi phí</h3>\r\n\r\n<p>Thật ra, laptop cũ là tên gọi chung của những chiếc laptop đã qua sử dụng. Thậm chí, có những chiếc laptop còn rất mới. Nó đem tới cho khách hàng một sản phẩm chất lượng nhưng giá cả lại rất phải chăng.</p>\r\n\r\n<p>Hiện nay trên thị trường có rất nhiều loại laptop cũ. Từ những hàng đã sử dụng 1-3 năm hoặc cũng có những sản phẩm sử dụng 1-2 tháng. Những chiếc máy này có giá thành mềm hơn rất nhiều so với việc mua một chiếc mới cùng loại.</p>\r\n\r\n<p><img alt=\"Những lý do laptop cũ được yêu thích\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2019/06/Asus-FX504-i5-11.jpg\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<p>Bạn đừng nghĩ rằng laptop cũ chỉ phù hợp với những người có thu nhập thấp. Có những chiếc máy cũ cấu hình cao có giá lên đến hàng chục triệu đồng.</p>\r\n\r\n<h3>Đáp ứng được nhu cầu của người dùng</h3>\r\n\r\n<p>Mỗi công việc khác nhau, người dùng sẽ tìm cho mình một chiếc máy có cấu hình phù hợp. Với những chiếc máy cũ, bạn cũng có thể kiếm được cho mình một chiếc máy có cấu hình cao phù hợp cho những công việc nặng nhọc như chơi game, đồ họa,… Với một mức giá thấp hơn rất nhiều so với một chiếc máy mới. Sẽ rất lãng phí khi bỏ ra một số tiền lớn mua chiếc máy mới tinh có cùng cấu hình với chiếc máy cũ giá rẻ hơn đúng không nào.</p>\r\n\r\n<p><img alt=\"Những lý do laptop cũ được yêu thích\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2019/07/M17x-R4-Core-i7-1.jpg\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<h3>Nhiều sự lựa chọn về thương hiệu, giá cả</h3>\r\n\r\n<p>Những chiếc laptop cũ cũng đa dạng về thương hiệu. Chúng ta có thể kể đến những thương hiệu nổi tiếng như: Dell, Sony, Samsung, HP, Lenovo, <a href=\"http://laptopcugiare.com.vn/macbook/\" title=\"Macbook\">Macbook</a>,… Bạn có thể thoải mái lựa chọn cho mình một sản phẩm phù hợp với nhu cầu và sở thích cá nhân.</p>\r\n\r\n<p>Với một số máy cũ, bạn cũng có thể dễ dàng nâng cấp ram, ổ cứng,… cho máy để có thể hoạt động tốt hơn. Trên đây là những <strong>lý do laptop cũ được yêu thích</strong>. Hi vọng rằng nó sẽ giúp ích cho bạn trong việc lựa chọn và tìm mua một chiếc laptop phù hợp. Nếu như bạn đang tìm kiếm một địa chỉ uy tín, hãy liên hệ ngay <strong><a href=\"https://laptopcugiare.com.vn/\">laptopcugiare.com.vn</a></strong>. Một địa chỉ mua bán laptop cũ được nhiều người tìm đến. Liên hệ ngay cho chúng tôi để được hỗ trợ một cách tốt nhất nhé.</p>\r\n', 0, 'Nhung-ly-do-laptop-cu-duoc-yeu-thich', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cpu` int(11) NOT NULL,
  `vga` int(11) NOT NULL,
  `monitor` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `image`, `url`, `description`, `price`, `quantity`, `cpu`, `vga`, `monitor`, `status`, `created_at`, `updated_at`) VALUES
(21, 1, 'Dell 15-3567, i3 – 6006u, 4G, 1T, 15,6in', 'nq6zm4yfua.jpg', 'Dell-15-3567-i3--6006u-4G-1T-156in', '<p><strong><a href=\"http://laptopcugiare.com.vn/asus/\">laptop ASUS</a> X550L, i5 4210u, 4G, 500G, GT820, 15,6in, giá r?</strong></p>\r\n\r\n<p><strong>Dòng laptop siêu b?n</strong></p>\r\n\r\n<p><strong>Máy ??p, zin 100%, c?u hình m?nh.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>+ OS </strong><strong>windown 10.</strong></p>\r\n\r\n<p><strong>+ cpu</strong><strong> i5 – 4210u, </strong><strong>t?c ?? </strong><strong>4X1,7G</strong><strong>, turbo lên 2,7G, (4cpus).</strong></p>\r\n\r\n<p><strong>+ ram </strong><strong>4G.</strong></p>\r\n\r\n<p><strong>+ </strong><strong>HDD </strong><strong>500G.</strong></p>\r\n\r\n<p><strong>+ lcd </strong><strong>15,6in led</strong><strong>.</strong></p>\r\n\r\n<p><strong>+ Vga có 2vga:</strong></p>\r\n\r\n<p><strong>==&gt; vga intel HD4400 upto 4G.</strong></p>\r\n\r\n<p><strong>==&gt; vga r?i </strong><strong>Nvida GT820M</strong><strong> =</strong><strong> 2G</strong><strong>, upto 4G, ch?i game ok</strong></p>\r\n\r\n<p><strong>+ </strong><strong>DVDWR, usb 3.0, webcam, HDMI….</strong></p>\r\n\r\n<p><strong>+ Pin 2h.</strong></p>\r\n\r\n<p><strong>+ </strong><strong>phím chiclet, Full phím s?.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Giá : 6.9</strong><strong>tr</strong></p>\r\n\r\n<p><strong> </strong></p>\r\n\r\n<p><strong>Website:</strong><br />\r\n<a href=\"http://laptopcugiare.com.vn/\"><strong>http://laptopcugiare.com.vn</strong></a></p>\r\n\r\n<p><strong>—?T : </strong><strong>0941 80 81 82 ( ?t , zalo , fb )</strong><br />\r\n<strong>—?C : </strong><strong>60/26 ??ng ?en, P.14, Q. Tân Bình , TP HCM</strong></p>\r\n\r\n<p><img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá»? cÃ³: mÃ n hÃ¬nh vÃ  mÃ¡y tÃ­nh xÃ¡ch tay\" src=\"https://scontent.fsgn5-7.fna.fbcdn.net/v/t1.0-9/67337396_2179729005468924_137271063200399360_n.jpg?_nc_cat=101&amp;_nc_eui2=AeG-Hiobe2nByGYaoIRc3MHLDfqcIaoM_ROHiL2VpyqsfxCt56MF8XsYSI8XnXsy2Fj987v5ftZb8O4YFqlhXHjb9KLwXyXkw4co_wybg7YcHw&amp;_nc_oc=AQn42JybBH0KCDrn55_psH35e6XZijuL7UiUqTbqEI_ViiXVOxUNKgAi9trHp0Ed91TBmpNB5r3ZYRMRbJt3LDA3&amp;_nc_ht=scontent.fsgn5-7.fna&amp;oh=5b31352abe8a6023ca15db35c5b798d3&amp;oe=5DAFF07A\" /><br />\r\n<img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá»? cÃ³: mÃ n hÃ¬nh\" src=\"https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/67084740_2179729015468923_5703663010845818880_n.jpg?_nc_cat=102&amp;_nc_eui2=AeFUM835xXkAhJO36d1pFEvFw_Wmftvpnl_occFEP12nQI2z1LKxUh91hCqaQw4vhxPVoHZca6_zsha4eCHAC8shTSuKFob3wb2U5PIudO9gOg&amp;_nc_oc=AQltnjA-r02cWGEH3-fhvykCWWsQ0U67jhc7ZI2YtMhUL7JC77G_4w_mrk3o8dQJTbDBbIuxKJ_S_D1efgY4SbPy&amp;_nc_ht=scontent.fsgn5-4.fna&amp;oh=6dc608dbf47c8087dedca36c3a8f0466&amp;oe=5DAF8B2A\" /><br />\r\n<img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá»? cÃ³: mÃ n hÃ¬nh, Ä?iá»?n thoáº¡i vÃ  trong nhÃ \" src=\"/editor/ckfinder/userfiles/images/123123.jpg\" style=\"height:438px; width:700px\" /></p>\r\n', '7000000', 2, 1, 1, 1, 1, NULL, NULL),
(22, 1, 'Asus Zenbook ux370, i7 8550u, 8G, 512G,', 'oqzkmh640x.jpg', 'Asus-Zenbook-ux370-i7-8550u-8G-512G', '<p> </p>\r\n\r\n<p><strong><a href=\"http://laptopcugiare.com.vn/asus/\">Laptop Asus</a> zenbook ux370, i7 8550u, 8G, 512G, 13.3in, 99%, giá rẻ</strong></p>\r\n\r\n<p><strong>Dòng laptop asus cao cấp, siêu mỏng nhẹ</strong></p>\r\n\r\n<p><strong>Nặng 1.1Kg, pin khủng 10h</strong></p>\r\n\r\n<p><strong>màn hình tràn viền, cảm ứng, xoay 360 độ, vỏ nhôm nguyên khối</strong></p>\r\n\r\n<p><strong>Viền mạ màu vàng sang trọng, BH hãng đến 2 – 2020</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>+ OS windown 10 bản quyền, còn recovery.</strong></p>\r\n\r\n<p><strong>+ cpu</strong><strong> </strong><strong>core i7 – 8550u</strong><strong> tốc độ </strong><strong>8X1.8G</strong><strong>, turbo lên </strong><strong>4.0G </strong><strong>(8cpus). thế hệ mới nhất</strong></p>\r\n\r\n<p><strong>+ ram </strong><strong>8G.</strong></p>\r\n\r\n<p><strong>+ </strong><strong>ssd 512G</strong></p>\r\n\r\n<p><strong>+ lcd </strong><strong>13,3in </strong><strong>led, </strong><strong>Full HD IPS ( 1920 x 1080 ), tràn viền, cảm ứng xoay 360 độ.</strong></p>\r\n\r\n<p><strong>+ Vga intel UHD620</strong></p>\r\n\r\n<p><strong>+</strong><strong> </strong><strong>webcam, usb type C, Finger</strong></p>\r\n\r\n<p><strong>+ Pin khủng </strong><strong>Max 10h</strong><strong>.</strong></p>\r\n\r\n<p><strong>+ Phím chiclet, có đèn phím làm việc ban đêm tiện lợi</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Giá : </strong><strong>24,9tr</strong></p>\r\n\r\n<p><br />\r\n<img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá» cÃ³: báº§u trá»i\" src=\"https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.0-9/65207731_2129490677159424_8818247949579452416_n.jpg?_nc_cat=111&amp;_nc_oc=AQl6jpoqJFhFZM3SPjAbuDvmk8mCU-h-Wr7MP8a6Y3dAhMiT7Q6FKR0iw4PdZBwinKQ&amp;_nc_ht=scontent.fsgn5-5.fna&amp;oh=e436dfb10cbe592a7db80951168f5de3&amp;oe=5DC07323\" /><br />\r\n<br />\r\n<img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá» cÃ³: mÃ n hÃ¬nh, Äiá»n thoáº¡i vÃ  trong nhÃ \" src=\"https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.0-9/64579722_2129490760492749_4467783439822618624_o.jpg?_nc_cat=100&amp;_nc_oc=AQn3J3dFOULwEDX5-JLD21easF3Ftg28czObMNMS3DeD5WJW_TGiLwWyRppy1iRGXuo&amp;_nc_ht=scontent.fsgn5-5.fna&amp;oh=0f5883ad6f7b56b019cf884b434ac3e3&amp;oe=5DBDF299\" style=\"height:375px; width:500px\" /><br />\r\n<br />\r\n<img alt=\"Trong hÃ¬nh áº£nh cÃ³ thá» cÃ³: mÃ¡y tÃ­nh xÃ¡ch tay\" src=\"https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/64806840_2129490947159397_6590079922130124800_o.jpg?_nc_cat=105&amp;_nc_oc=AQkbT1CUBAyBTsdVJ1yGl9x47oe6gUFBR89qi9HjsuPj9qg0Sfe6ta0fRU2ysSpQfFg&amp;_nc_ht=scontent.fsgn5-2.fna&amp;oh=aa8387881ee989cc438230b86f60d0b7&amp;oe=5DC6E01C\" style=\"height:375px; width:500px\" /><br />\r\n </p>\r\n', '24900000', 12, 1, 1, 8, 1, NULL, NULL),
(23, 5, 'Acer TravelMate 8481T, i7 2637M, 4G, 128G, pin 6h', 'y3lsefnxqm.jpg', 'Acer-TravelMate-8481T-i7-2637M-4G-128G-pin-6h', '<p><strong>laptop Acer TravelMate 8481T, i7 2637M, 4G, 128G, pin 6h, giá rẻ</strong></p>\r\n\r\n<p><strong>Dòng <a href=\"http://laptopcugiare.com.vn/acer/\">laptop acer</a> cao cấp, siêu bền</strong></p>\r\n\r\n<p><strong>Máy đẹp, zin 100%, pin KHỦNG max 6 tiếng</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>+ OS windown 10</strong></p>\r\n\r\n<p><strong>+ cpu core </strong><strong>i7 – 2637M</strong><strong> tốc độ </strong><strong>4X1.7G</strong><strong>, turbo lên </strong><strong>2,8G</strong><strong>, (4cpus), chạy cực mạnh</strong></p>\r\n\r\n<p><strong>+ ram</strong><strong> 4G</strong></p>\r\n\r\n<p><strong>+ ssd</strong><strong> 128G</strong></p>\r\n\r\n<p><strong>+ lcd </strong><strong>14in </strong><strong>led HD</strong></p>\r\n\r\n<p><strong>+ vga intel HD3000</strong></p>\r\n\r\n<p><strong>+ HDMI, webcam, usb 3.0</strong></p>\r\n\r\n<p><strong>+ Pin</strong><strong> 6h</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Giá : </strong><strong>7,9tr</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-1.jpg\" style=\"float:left; height:933px; width:700px\" /> <img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-2.jpg\" style=\"float:left; height:933px; width:700px\" /> <img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-3.jpg\" style=\"float:left; height:933px; width:700px\" /> <img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-4.jpg\" style=\"float:left; height:933px; width:700px\" /> <img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-5.jpg\" style=\"float:left; height:525px; width:700px\" /> <img alt=\"\" src=\"https://laptopcugiare.com.vn/wp-content/uploads/2018/03/Acer-8481T-i7-6.jpg\" style=\"float:left; height:525px; width:700px\" /></p>\r\n', '7900000', 12, 1, 1, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hung le', 'leehxt@gmail.com', NULL, '$2y$10$tTR1KhTsgmr5UGXnCXrq6ejYijDWkhWIxrbVsdB8CKglnXv/oIhja', 1, NULL, '2019-08-05 06:53:16', '2019-08-06 07:16:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vga`
--

CREATE TABLE `vga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vga_name` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vga`
--

INSERT INTO `vga` (`id`, `vga_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Onboard', 1, '2019-08-08 09:49:52', '2019-08-08 09:49:52'),
(2, 'Card Rời', 1, '2019-08-08 09:50:14', '2019-08-08 09:50:14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vga`
--
ALTER TABLE `vga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
