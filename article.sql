-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 28, 2021 at 05:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `FK_image` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `businesscate`
--

CREATE TABLE `businesscate` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businesscate`
--

INSERT INTO `businesscate` (`id`, `FK_post`) VALUES
(1, 73);

-- --------------------------------------------------------

--
-- Table structure for table `businessright`
--

CREATE TABLE `businessright` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businessright`
--

INSERT INTO `businessright` (`id`, `FK_post`) VALUES
(1, 74),
(2, 75),
(3, 76);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Sự kiện'),
(2, 'Doanh nghiệp'),
(3, 'Tiếp thị'),
(4, 'Kinh tế'),
(5, 'Xã hội'),
(6, 'Pháp luật'),
(7, 'Quốc tế');

-- --------------------------------------------------------

--
-- Table structure for table `categorynews`
--

CREATE TABLE `categorynews` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorynews`
--

INSERT INTO `categorynews` (`id`, `FK_post`) VALUES
(1, 36),
(2, 37),
(3, 38),
(4, 39),
(5, 40),
(6, 41),
(7, 42),
(8, 43),
(9, 44),
(10, 45),
(11, 46),
(12, 47),
(13, 48),
(14, 49),
(15, 50),
(16, 51),
(17, 52),
(18, 53),
(19, 54),
(20, 55),
(21, 56),
(22, 57),
(23, 58),
(24, 59),
(25, 60),
(26, 61),
(27, 63),
(28, 64),
(29, 65),
(30, 66),
(31, 67),
(32, 68),
(33, 69),
(34, 70),
(35, 71),
(36, 72);

-- --------------------------------------------------------

--
-- Table structure for table `emagazine`
--

CREATE TABLE `emagazine` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emagazine`
--

INSERT INTO `emagazine` (`id`, `FK_post`) VALUES
(1, 18),
(2, 19),
(3, 20),
(4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `hightlight`
--

CREATE TABLE `hightlight` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hightlight`
--

INSERT INTO `hightlight` (`id`, `FK_post`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hightlightleft`
--

CREATE TABLE `hightlightleft` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hightlightleft`
--

INSERT INTO `hightlightleft` (`id`, `FK_post`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hightlightright`
--

CREATE TABLE `hightlightright` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hightlightright`
--

INSERT INTO `hightlightright` (`id`, `FK_post`) VALUES
(1, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `imgurl`, `FK_post`) VALUES
(1, 'group_b.png', 5),
(2, 'group_c_1.png', 6),
(3, 'group_c_2.png', 7),
(4, 'extra1_col_1.png', 8),
(5, 'extra1_col_2.png', 9),
(6, 'extra1_col_3.png', 10),
(7, 'extra1_col_4.png', 11),
(8, 'extra1_col_5.png', 12),
(9, 'extra1_col_6.png', 13),
(10, 'social_1.png', 14),
(11, 'social_2.png', 15),
(12, 'social_3.png', 16),
(13, 'social_4.png', 17),
(14, 'magazine_normal_1.png', 18),
(15, 'magazine_normal_2.png', 19),
(16, 'magazine_normal_3.png', 20),
(17, 'magazine_normal_4.png', 21),
(18, 'interest_1.png', 22),
(19, 'interest_2.png', 23),
(20, 'interest_3.png', 24),
(21, 'interest_4.png', 25),
(22, 'interest_5.png', 26),
(23, 'new_1.png', 27),
(24, 'new_2.png', 28),
(25, 'new_3.png', 29),
(26, 'new_4.png', 30),
(27, 'Rectangle 17.png', 31),
(28, 'Rectangle 18.png', 32),
(29, 'Rectangle 19.png', 33),
(30, 'Rectangle 20.png', 34),
(31, 'Rectangle 21.png', 35),
(32, 'sukien_left_1.png', 36),
(33, 'sukien_left_2.png', 37),
(34, 'doanhnghiep_1.png', 42),
(35, 'doanhnghiep_2.png', 43),
(36, 'kinhte_1.png', 48),
(37, 'kinhte_2.png', 49),
(38, 'xahoi_1.png', 54),
(39, 'xahoi_2.png', 55),
(40, 'law_1.png', 60),
(41, 'law_2.png', 61),
(42, 'qt_1.png', 67),
(43, 'qt_2.png', 68),
(44, 'group_b.png', 73),
(45, 'news_right.png', 74);

-- --------------------------------------------------------

--
-- Table structure for table `mainnews1`
--

CREATE TABLE `mainnews1` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainnews1`
--

INSERT INTO `mainnews1` (`id`, `FK_post`) VALUES
(1, 14),
(2, 15),
(3, 16),
(4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `mainnews2`
--

CREATE TABLE `mainnews2` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainnews2`
--

INSERT INTO `mainnews2` (`id`, `FK_post`) VALUES
(1, 27),
(2, 28),
(3, 29),
(4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `marketingnews`
--

CREATE TABLE `marketingnews` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketingnews`
--

INSERT INTO `marketingnews` (`id`, `FK_post`) VALUES
(1, 8),
(2, 9),
(3, 10),
(4, 11),
(5, 12),
(6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `mostreading`
--

CREATE TABLE `mostreading` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostreading`
--

INSERT INTO `mostreading` (`id`, `FK_post`) VALUES
(1, 22),
(2, 23),
(3, 24),
(4, 25),
(5, 26);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `brief` text NOT NULL,
  `keyword` text NOT NULL,
  `FK_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `content`, `date`, `brief`, `keyword`, `FK_category`) VALUES
(1, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-01', '', '', 2),
(2, 'Hdbank tham gia Tradeassets nhằm số hóa hoạt động tài trợ thương mại', '', '', '2021-08-02', '', '', 4),
(3, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-03', '', '', 5),
(4, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-10', '', '', 6),
(5, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"\r\n', '', '', '2021-08-09', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 5),
(6, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-11', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để...', '', 4),
(7, 'Hà Nội triển khai một số nhiệm vụ tài chính - ngân sách trong điều kiện ảnh hưởng của dịch bệnh Covid-19', '', '', '2021-08-10', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để...', '', 6),
(8, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-03', '', '', 3),
(9, 'Gam hồng thương mại điện tử trong dịch Covid-19', '', '', '2021-08-02', '', '', 3),
(10, '10 cách giúp doanh nghiệp làm việc hiệu quả trong “Trạng thái bình thường mới”', '', '', '2021-08-17', '', '', 3),
(11, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-10', '', '', 3),
(12, 'Gam hồng thương mại điện tử trong dịch Covid-19', '', '', '2021-08-18', '', '', 3),
(13, '10 cách giúp doanh nghiệp làm việc hiệu quả trong “Trạng thái bình thường”', '', '', '2021-08-03', '', '', 3),
(14, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(15, 'Giảm 50% phí trước bạ ô tô: Xe sang có giá lăn bánh giảm \"khủng\"', '', '', '2021-08-12', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan...', '', 5),
(16, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-17', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(17, 'Doanh nghiệp bất động sản ảnh hưởng ra sao bởi dịch Covid 19?', '', '', '2021-08-04', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(18, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', '', '', 1),
(19, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-03', '', '', 1),
(20, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-26', '', '', 1),
(21, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-29', '', '', 1),
(22, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', '', '', 2),
(23, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-10', '', '', 2),
(24, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-17', '', '', 2),
(25, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-04', '', '', 2),
(26, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-18', '', '', 2),
(27, 'Bắc Kạn: Doanh nghiệp đề xuất nhiều giải pháp vượt khó hậu COVID-19', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 3),
(28, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(29, 'Quảng Nam xây dựng chiến lược phát triển cho cây sâm Ngọc Linh và các dược liệu', '', '', '2021-08-26', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 7),
(30, '\"Lấy cung làm chủ đạo và đẩy mạnh cầu của nền kinh tế”: Hiểu sao cho đúng?', '', '', '2021-08-10', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 5),
(31, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-02', '', '', 7),
(32, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-03', '', '', 7),
(33, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-26', '', '', 7),
(34, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-03', '', '', 7),
(35, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-18', '', '', 7),
(36, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 1),
(37, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-12', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 1),
(38, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-10', '', '', 1),
(39, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19\r\n', '', '', '2021-08-03', '', '', 1),
(40, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-18', '', '', 1),
(41, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-03', '', '', 1),
(42, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 2),
(43, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-03', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 2),
(44, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-17', '', '', 2),
(45, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-03', '', '', 2),
(46, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-18', '', '', 2),
(47, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-03', '', '', 2),
(48, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 4),
(49, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-12', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 4),
(50, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-10', '', '', 4),
(51, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-03', '', '', 4),
(52, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-18', '', '', 4),
(53, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-03', '', '', 4),
(54, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 5),
(55, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-03', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch\r\nCovid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 5),
(56, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-10', '', '', 5),
(57, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-03', '', '', 5),
(58, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-18', '', '', 5),
(59, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-03', '', '', 5),
(60, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch\r\nCovid-19 Hà Nội triệu tập cuộc họp khẩn cấp...\r\n', '', 6),
(61, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-03', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch\r\nCovid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 6),
(63, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-10', '', '', 6),
(64, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-18', '', '', 6),
(65, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-03', '', '', 6),
(66, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-02', '', '', 6),
(67, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch\r\nCovid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 7),
(68, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với NB trong điều kiện', '', '', '2021-08-03', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch\r\nCovid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 7),
(69, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-10', '', '', 7),
(70, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-03', '', '', 7),
(71, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-18', '', '', 7),
(72, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-03', '', '', 7),
(73, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-02', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 2),
(74, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-03', '', '', 2),
(75, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-10', '', '', 2),
(76, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-10', '', '', 2),
(77, 'Hội nghị tập huấn trực tuyến phòng, chống dịch COVID-19 tại các cơ sở khám chữa bệnh', 'Hoàng Anh', 'Hội nghị đã tập trung đánh giá những kết quả tích cực, những tồn tại của công tác quản lý nhà nước trong tháng 9/2018, đồng thời đề ra các giải pháp, mục tiêu cần thực hiện trong tháng 10/2018; chú trọng thúc đẩy phát triển các lĩnh vực trong ngành, gồm 6 lĩnh vực: Bưu chính, Viễn thông, CNTT, An toàn thông tin, Công nghiệp ICT, Báo chí- PTTH-Xuất bản.\r\n\r\nTại Hội nghị, Quyền Bộ trưởng đã phân tích: Bộ phải xây dựng khung pháp lý cho từng lĩnh vực do Chính phủ giao hoặc nằm trong kế hoạch của Bộ. Các cơ quan, đơn vị của Bộ cần thường xuyên nắm bắt xem các đối tượng quản lý và người dân gặp khó khăn gì và phải giải quyết những khó khăn, vướng mắc này ra sao.\r\n\r\nCác văn bản pháp luật chính là công cụ để thúc đẩy các lĩnh vực quản lý nhà nước của Bộ phát triển lành mạnh, Quyền Bộ trưởng nhấn mạnh.\r\nVề mảng KHCN, tiêu chuẩn, công nghiệp CNTT, hiện Bộ Kế hoạch Đầu tư được Chính phủ giao xây dựng Chiến lược quốc gia 4.0. Quyền Bộ trưởng giao Vụ KHCN là đầu mối về 4.0 và khẳng định Bộ TT&TT cần xây dựng phiên bản riêng về chiến lược 4.0 cho đất nước. Vụ KHCN cần tham khảo kinh nghiệm quốc tế về 4.0 và tham khảo ý kiến của các Sở TT&TT.', '2020-02-21', 'Tại Hà Nội, Bộ TT&TT đã tổ chức Hội nghị giao ban quản lý nhà nước tháng 9 năm 2018. Ủy viên Trung ương Đảng, Bí thư Ban Cán sự Đảng, Quyền Bộ trưởng Bộ TT&TT Nguyễn Mạnh Hùng đã chủ trì Hội nghị.', 'gây tiếng ồn vượt ngưỡng, xả khói đen, di dời khỏi nội đô, mùi hóa chất phát tán', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `FK_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `title`, `FK_category`) VALUES
(1, 'Chính trị - Xã hội', 1),
(2, 'Cải cách hành chính', 1),
(3, 'Tiêu điểm', 1),
(4, 'Tin địa phương', 1),
(5, 'Hoạt động của Hội', 1),
(6, 'Diễn đàn', 2),
(7, 'Thương hiệu', 2),
(8, 'Thông tin thương hiệu', 2),
(9, 'Trách nhiệm xã hội', 2),
(10, 'Khởi nghiệp', 2),
(11, 'Nhịp đập thị trường', 3),
(12, 'Tiếp thị số', 3),
(13, 'Dịch vụ', 3),
(14, 'Bảo vệ người tiêu dùng', 3),
(15, 'Kinh doanh', 4),
(16, 'Tài chính - Đầu tư', 4),
(17, 'Ngân hàng', 4),
(18, 'Bất động sản', 4),
(19, 'Chứng khoán', 4),
(20, 'Văn hóa', 5),
(21, 'Giáo dục', 5),
(22, 'Sức khỏe', 5),
(23, 'Du lịch', 5),
(24, 'Ẩm thực', 5),
(25, 'Chính sách mới', 6),
(26, 'Tiếp thị và Pháp luật', 6),
(27, 'Tư vấn', 6),
(28, 'Luật sư của bạn', 6),
(29, 'Đơn thư bạn đọc', 6),
(30, 'Thế giới 24H', 7),
(31, 'Tư liệu', 7),
(32, 'Phân tích - Bình luận', 7);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `FK_post`) VALUES
(1, 31),
(2, 32),
(3, 33),
(4, 34),
(5, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_image` (`FK_image`);

--
-- Indexes for table `businesscate`
--
ALTER TABLE `businesscate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `businessright`
--
ALTER TABLE `businessright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorynews`
--
ALTER TABLE `categorynews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `emagazine`
--
ALTER TABLE `emagazine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `hightlight`
--
ALTER TABLE `hightlight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `hightlightleft`
--
ALTER TABLE `hightlightleft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `hightlightright`
--
ALTER TABLE `hightlightright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `mainnews1`
--
ALTER TABLE `mainnews1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `mainnews2`
--
ALTER TABLE `mainnews2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `marketingnews`
--
ALTER TABLE `marketingnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `mostreading`
--
ALTER TABLE `mostreading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category` (`FK_category`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category` (`FK_category`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businesscate`
--
ALTER TABLE `businesscate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `businessright`
--
ALTER TABLE `businessright`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categorynews`
--
ALTER TABLE `categorynews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `emagazine`
--
ALTER TABLE `emagazine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hightlight`
--
ALTER TABLE `hightlight`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hightlightleft`
--
ALTER TABLE `hightlightleft`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hightlightright`
--
ALTER TABLE `hightlightright`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `mainnews1`
--
ALTER TABLE `mainnews1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mainnews2`
--
ALTER TABLE `mainnews2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marketingnews`
--
ALTER TABLE `marketingnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mostreading`
--
ALTER TABLE `mostreading`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`FK_image`) REFERENCES `image` (`id`);

--
-- Constraints for table `businesscate`
--
ALTER TABLE `businesscate`
  ADD CONSTRAINT `businesscate_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `businessright`
--
ALTER TABLE `businessright`
  ADD CONSTRAINT `businessright_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `categorynews`
--
ALTER TABLE `categorynews`
  ADD CONSTRAINT `categorynews_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `emagazine`
--
ALTER TABLE `emagazine`
  ADD CONSTRAINT `emagazine_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `hightlight`
--
ALTER TABLE `hightlight`
  ADD CONSTRAINT `hightlight_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `hightlightleft`
--
ALTER TABLE `hightlightleft`
  ADD CONSTRAINT `hightlightleft_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `hightlightright`
--
ALTER TABLE `hightlightright`
  ADD CONSTRAINT `hightlightright_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `mainnews1`
--
ALTER TABLE `mainnews1`
  ADD CONSTRAINT `mainnews1_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `mainnews2`
--
ALTER TABLE `mainnews2`
  ADD CONSTRAINT `mainnews2_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `marketingnews`
--
ALTER TABLE `marketingnews`
  ADD CONSTRAINT `marketingnews_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `mostreading`
--
ALTER TABLE `mostreading`
  ADD CONSTRAINT `mostreading_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`FK_category`) REFERENCES `category` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`FK_category`) REFERENCES `category` (`id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
