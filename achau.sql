-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 05:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `achau`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_classes`
--

CREATE TABLE IF NOT EXISTS `auto_classes` (
  `id` int(11) NOT NULL,
  `lv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cl_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startday` date NOT NULL,
  `weeks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `midterm` date NOT NULL,
  `endday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tutors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recieveday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auto_classes`
--

INSERT INTO `auto_classes` (`id`, `lv_name`, `cl_name`, `times`, `days`, `startday`, `weeks`, `midterm`, `endday`, `tutors`, `recieveday`) VALUES
(76, '44', '45', '6', '20', '2018-08-27', '24', '2018-08-29', '2018-09-05', '17', '2018-08-27'),
(77, '44', '46', '6', '21', '2018-08-28', '24', '2018-09-01', '2018-09-06', '', '2018-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `lv_name`, `hide`) VALUES
(45, 'FIRST FRIENDS 1-1', '44', 0),
(46, 'FIRST FRIENDS 1-2', '44', 0),
(47, 'FIRST FRIENDS 1-3', '44', 0),
(48, 'FIRST FRIENDS 1-4', '44', 0),
(49, 'FIRST FRIENDS 1-5', '44', 0),
(50, 'FIRST FRIENDS 2-1', '45', 0),
(51, 'FIRST FRIENDS 2-2', '45', 0),
(52, 'FIRST FRIENDS 2-3', '45', 0),
(53, 'FIRST FRIENDS 2-4', '45', 0),
(54, 'FIRST FRIENDS 2-5', '45', 0),
(55, 'FIRST FRIENDS 3-1', '46', 0),
(56, 'FIRST FRIENDS 3-2', '46', 0),
(57, 'FIRST FRIENDS 3-3', '46', 0),
(58, 'FIRST FRIENDS 3-4', '46', 0),
(59, 'FIRST FRIENDS 3-5', '46', 0),
(60, 'FIRST FRIENDS 4-1', '47', 0),
(61, 'FIRST FRIENDS 4-2', '47', 0),
(62, 'FIRST FRIENDS 4-3', '47', 0),
(63, 'FIRST FRIENDS 4-4', '47', 0),
(64, 'FIRST FRIENDS 4-5', '47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dayoff`
--

CREATE TABLE IF NOT EXISTS `dayoff` (
  `id` int(11) NOT NULL,
  `days` date NOT NULL,
  `weekdays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dayoff`
--

INSERT INTO `dayoff` (`id`, `days`, `weekdays`, `reason`, `apply`, `note`) VALUES
(28, '2018-08-23', 'T5', 'Quá»‘c KhÃ¡nh', '45', 'note'),
(29, '2018-08-29', 'T4', 'Nghá»‰ bÃ¹ Quá»‘c KhÃ¡nh', '51', ''),
(30, '2018-08-29', 'T4', 'Nghá»‰ bÃ¹ Quá»‘c KhÃ¡nh', '47', ''),
(31, '2018-09-03', 'T2', 'Nghá»‰ bÃ¹ Quá»‘c KhÃ¡nh', '45', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `address`, `birthday`, `email`, `name`, `password`, `phone`, `start_day`, `end_day`, `role`) VALUES
(11, 'oanhhth', 'BÃ¬nh TÃ¢n', '2018-08-08', 'hothihoangoanh@gmail.com', 'Há»“ Thá»‹ HoÃ ng Oanh', '', '01261234524', '2018-08-15', '2018-08-08', 3),
(12, 'thinhnp', 'TÃ¢n PhÃº', '2018-08-23', 'nguyenphucthinh@gmail.com,', 'Nguyá»…n PhÃºc Thá»‹nh', '', '01261234524', '2018-08-09', '2018-08-22', 3),
(13, 'tuanlt', 'BÃ¬nh Tháº¡nh', '2018-08-24', 'lethanhtuan@gmail.com', 'LÃª Thanh Tuáº¥n', '', '0936123625', '2018-08-15', '2018-08-10', 3),
(14, 'tuannv', 'Quáº­n 9', '0000-00-00', 'nguyenvantuan@gmail.com', 'Nguyá»…n VÄƒn TuÃ¢n', '', '0169785452', '0000-00-00', '0000-00-00', 3),
(15, 'duyenntm', 'BÃ¬nh Tháº¡nh ', '0000-00-00', 'nguyentrimyduyen@gmail.com', 'Nguyá»…n TrÃ­ Má»¹ DuyÃªn', '', '0169123485', '0000-00-00', '0000-00-00', 3),
(16, 'chinh', 'Quáº­n 11', '0000-00-00', 'nguyenhoaichi@gmail.com', 'Nguyá»…n HoÃ i ChÃ­', '', '0974589512', '0000-00-00', '0000-00-00', 3),
(17, 'lanhdn', 'Quáº­n 5', '0000-00-00', 'dangnhulanh@gmail.com', 'Äáº·ng NhÆ° LÃ nh', '', '0934156785', '0000-00-00', '0000-00-00', 3),
(18, 'quyend', 'Quáº­n 3', '0000-00-00', 'doquyen@gmail.com', 'Äá»— QuyÃªn', '', '0121548795', '0000-00-00', '0000-00-00', 3),
(19, 'haind', 'Thá»§ Äá»©c', '0000-00-00', 'nguyendanghai@gmail.com', 'Nguyá»…n ÄÄƒng Háº£i', '', '0168459723', '0000-00-00', '0000-00-00', 3),
(20, 'trangnhm', 'Quáº­n 9', '0000-00-00', 'nguyenhoangminhtrang@gmail.com', 'Nguyá»…n HoÃ ng Minh Trang', '', '0168125483', '0000-00-00', '0000-00-00', 3),
(21, 'duclh', 'BÃ¬nh TÃ¢n', '0000-00-00', 'lehongduc@gmail.com', 'LÃª Há»“ng Äá»©c', '', '0974851487', '0000-00-00', '0000-00-00', 3),
(22, 'ngocplm', 'BÃ¬nh Tháº¡nh', '0000-00-00', 'phamlemyngoc@gmail.com', 'Pháº¡m LÃª Má»¹ Ngá»c', '', '0974865124', '0000-00-00', '0000-00-00', 3),
(23, 'xuanlk', 'BÃ¬nh Tháº¡nh', '0000-00-00', 'lekimxuan@gmail.com', 'LÃª Kim XuÃ¢n', '', '0169784157', '0000-00-00', '0000-00-00', 3),
(24, 'trongnt', 'PhÃº Nhuáº­n', '0000-00-00', 'nguyentrongtan@gmail.com', 'Nguyá»…n Táº¥n Trá»ng', '', '0934789146', '0000-00-00', '0000-00-00', 3),
(25, 'maidtp', 'Quáº­n 1', '0000-00-00', 'dothiphuongmai@gmail.com', 'Äá»— Thá»‹ PhÆ°Æ¡ng Mai', '', '0169785412', '0000-00-00', '0000-00-00', 3),
(26, 'tramntt', 'Quáº­n 3', '0000-00-00', 'thutram@gmail.com', 'Nguyá»…n Thá»‹ Thu TrÃ¢m', '', '0124587465', '0000-00-00', '0000-00-00', 3),
(27, 'sonmx', 'Quáº­n 4', '0000-00-00', 'maixuanson@gmail.com', 'Mai XuÃ¢n SÆ¡n', '', '0124867458', '0000-00-00', '0000-00-00', 3),
(28, 'tuancv', 'Quáº­n 10', '0000-00-00', 'chuvantuan@gmail.com', 'Chu VÄƒn Tuáº¥n', '', '0169845726', '0000-00-00', '0000-00-00', 3),
(29, 'chuongdh', 'Thá»§ Äá»©c', '0000-00-00', 'dohoangchuong@gmail.com', 'Äá»— HoÃ ng ChÆ°Æ¡ng', '', '0974586148', '0000-00-00', '0000-00-00', 3),
(30, 'hungbt', 'PhÃº Nhuáº­n', '0000-00-00', 'buithanhhung@gmail.com', 'BÃ¹i Thanh HÃ¹ng', '', '0934781549', '0000-00-00', '0000-00-00', 3),
(31, 'tuancv', 'Quáº­n 1', '0000-00-00', 'buithanhhung@gmail.com', 'Chu VÄƒn Tuáº¥n', '', '0934781549', '0000-00-00', '0000-00-00', 3),
(32, 'chuongdh', 'Quáº­n 3', '0000-00-00', 'buithanhhung@gmail.com', 'Äá»— HoÃ ng ChÆ°Æ¡ng', '', '0934781549', '0000-00-00', '0000-00-00', 3),
(33, 'hungbt', 'Quáº­n 4', '0000-00-00', 'buithanhhung@gmail.com', 'BÃ¹i Thanh HÃ¹ng', '', '0934781549', '0000-00-00', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `id` int(11) NOT NULL,
  `id_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `days` date NOT NULL,
  `fees` int(11) NOT NULL,
  `expried` date NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `id_student`, `id_class`, `days`, `fees`, `expried`, `note`) VALUES
(11, '8', '45', '2018-08-13', 1500000, '2018-08-20', 'note'),
(12, '9', '45', '2018-08-27', 2500000, '2018-09-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weeks` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `weeks`, `hide`) VALUES
(44, 'FIRST FRIENDS 1', 24, 0),
(45, 'FIRST FRIENDS 2', 24, 0),
(46, 'FIRST FRIENDS 3', 24, 0),
(47, 'FIRST FRIENDS 4', 24, 0),
(48, 'FIRST FRIENDS 5', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manual_classes`
--

CREATE TABLE IF NOT EXISTS `manual_classes` (
  `id` int(11) NOT NULL,
  `lv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cl_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startday` date NOT NULL,
  `weeks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `midterm` date NOT NULL,
  `endday` date NOT NULL,
  `tutors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recieveday` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manual_classes`
--

INSERT INTO `manual_classes` (`id`, `lv_name`, `cl_name`, `times`, `days`, `startday`, `weeks`, `midterm`, `endday`, `tutors`, `recieveday`) VALUES
(17, '44', '47', '8', '21', '2018-08-02', '24', '2018-08-04', '2018-08-09', '15', ''),
(18, '46', '49', '8', '20', '2018-08-15', '24', '2018-08-17', '2018-08-22', '17', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hide` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `days`, `hide`) VALUES
(20, 'T2 - T4 - T6', 0),
(21, 'T3 - T5 - T7', 0),
(22, 'T7 - CN', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `now_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `re_day` date NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `birthday`, `phone`, `address`, `now_class`, `start_day`, `end_day`, `re_day`, `note`, `result`) VALUES
(8, 'Nguyá»…n Tráº§n Háº¡nh PhÃºc', '02/05/1997', '1277260261', 'Thuáº­n An, BÃ¬nh DÆ°Æ¡ng', '46', '2018-08-23', '2018-08-23', '2018-08-14', '', ''),
(9, 'Äáº·ng LÃª Thanh Tháº£o', '23/03/1998', '0868895261', 'Ã‚u CÆ¡, TÃ¢n PhÃº', '49', '2018-08-15', '2018-08-12', '2018-08-07', '', ''),
(10, 'VÃµ Thanh VÅ©', '03/12/1999', '0124874596', 'Phan ÄÄƒng LÆ°u, PhÃº Nhuáº­n', '45', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(11, 'Huá»³nh Táº¥n PhÃ¡t', '06/04/2001', '0964751248', 'Äiá»‡n BiÃªn Phá»§, Quáº­n 3', '49', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(12, 'LÃª Huá»³nh Äá»©c', '18/08/1997', '0124574896', 'HoÃ ng VÄƒn Thá»¥, TÃ¢n BÃ¬nh', '50', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(13, 'Pháº¡m Táº¥n ChÆ°Æ¡ng', '20/01/2003', '0169478215', 'LÃª VÄƒn Viá»‡t, Quáº­n 9', '49', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(14, 'HoÃ ng Pháº¡m Minh ThÆ°Æ¡ng', '06/04/1998', '0945871262', 'Báº¡ch Äáº±ng, BÃ¬nh Tháº¡nh', '50', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(15, 'LÃª HoÃ ng Dung', '03/02/1996', '0169485124', '3/2,Quáº­n 10', '51', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(16, 'Tráº§n Minh Tiáº¿n', '06/12/1999', '0126478545', 'BÃ¹i ÄÃ¬nh TuÃ½, BÃ¬nh Tháº¡nh', '52', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(17, 'Trá»‹nh Thanh Chi', '16/04/2001', '0974851623', 'Pháº¡m VÄƒn Äá»“ng, Thá»§ Äá»©c', '54', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(18, 'Tá»‘ng Nguyá»…n KhÃ¡nh Linh', '08/07/1997', '0169785413', 'Kha Váº¡n CÃ¢n, Thá»§ Äá»©c', '49', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(19, 'LÃª Báº£o TrÃ¢n', '08/09/1998', '0169458421', 'Äá»—  XuÃ¢n Há»£p, Quáº­n 2', '51', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(20, 'Nguyá»…n VÄƒn Da', '10/12/1998', '0196547824', 'LÃª Lá»£i, Quáº­n 1', '49', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(21, 'Nguyá»…n Thá»‹ Ngá»c Tháº£o', '20/111/1999', '0815479514', 'Ung VÄƒn KhiÃªm, BÃ¬nh Tháº¡nh', '49', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(22, 'Pháº¡m Táº¥n ThÃ nh', '19/09/1996', '0169784513', 'D2,BÃ¬nh Tháº¡nh', '45', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(23, 'Nguyá»…n Thu ThiÃªn', '06/08/2002', '0196487515', 'TrÆ°á»ng Chinh, TÃ¢n BÃ¬nh', '48', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(24, 'Pháº¡m XuÃ¢n Vinh', '20/15/1998', '0196784153', 'Phan ÄÃ¬nh PhÃ¹ng, Quáº­n 9', '45', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(25, 'LÃª Huá»³nh Äáº¡t', '12/06/1997', '0169845246', 'VÃµ VÄƒn NgÃ¢n,Thá»§ Äá»©c', '48', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(26, 'Phan Xi Pan', '09/08/1998', '0169874524', 'Nguyá»…n ThÃ¡i Há»c, Quáº­n 3', '46', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(27, 'Tráº§n Thá»‹ Thu Má»™ng', '12/01/1996', '0974586125', 'Nguyá»…n Thá»‹ Minh Khai, Quáº­n 1', '47', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(28, 'Nguyá»…n Há»“ng Nhung', '12/12/1997', '0916478545', 'VÃµ VÄƒn Kiá»‡t, Quáº­n 4', '56', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
(29, 'Tráº§n Minh Lá»±c', '10/11/200', '0169785412', 'D3,BÃ¬nh Tháº¡nh', '53', '0000-00-00', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `times`, `hide`) VALUES
(6, '18h00 - 19h30', 0),
(7, '17h30 - 19h00', 0),
(8, '9h30 - 11h30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `username`, `address`, `birthday`, `email`, `name`, `password`, `phone`, `start_day`, `end_day`, `role`) VALUES
(19, 'phuclt', 'BÃ¬nh Tháº¡nh', '2017-08-04', 'lethanhphuc@gmail.com', 'LÃª ThÃ nh PhÃºc', '', '01261234524', '2018-08-08', '2018-08-16', 3),
(20, 'oanhhth', 'BÃ¬nh TÃ¢n', '2018-08-30', 'hothihoangoanh@gmail.com', 'Há»“ Thá»‹ HoÃ ng Oanh', '', '01261234524', '2018-08-22', '2018-08-23', 3),
(21, 'thinhnp', 'TÃ¢n PhÃº', '2018-08-23', 'nguyenphucthinh@gmail.com,', 'Nguyá»…n PhÃºc Thá»‹nh', '', '0936146302', '2018-08-09', '2018-08-08', 3),
(22, 'thuylt', 'Quáº­n 9', '2018-08-17', 'lethithuy@gmail.com', 'LÃª Thá»‹ Thuá»·', '', '0963245673', '2018-08-15', '2018-08-31', 3),
(23, 'phuclt', 'BÃ¬nh Tháº¡nh', '0000-00-00', 'lethanhphuc@gmail.com', 'Huá»³nh Thá»‹ PhÆ°Æ¡ng', '', '01261234524', '0000-00-00', '0000-00-00', 3),
(24, 'oanhhth', 'BÃ¬nh TÃ¢n', '0000-00-00', 'hothihoangoanh@gmail.com', 'Nguyá»…n Huá»³nh Thanh', '', '01261234524', '0000-00-00', '0000-00-00', 3),
(25, 'thinhnp', 'TÃ¢n PhÃº', '0000-00-00', 'nguyenphucthinh@gmail.com,', 'HoÃ ng Äá»©c Minh', '', '0936146302', '0000-00-00', '0000-00-00', 3),
(26, 'thuylt', 'Quáº­n 9', '0000-00-00', 'lethithuy@gmail.com', 'Huá»³nh HoÃ ng Hiá»n', '', '0963245673', '0000-00-00', '0000-00-00', 3),
(27, 'phuonght', 'Quáº­n 3', '0000-00-00', 'huynhthiphuong@gmail.com', 'NgÃ´ Thá»‹ NgÃ¢n', '', '0984576546', '0000-00-00', '0000-00-00', 3),
(28, 'thanhnh', 'Quáº­n 5', '0000-00-00', 'thanhnh@gmail.com', 'NgÃ´ Má»¹ Linh', '', '01699856452', '0000-00-00', '0000-00-00', 3),
(29, 'minhhd', 'HÃ³c MÃ´n', '0000-00-00', 'hoangducminh@gmail.com', 'Nguyá»…n KhÃ¡nh Huy', '', '0934156975', '0000-00-00', '0000-00-00', 3),
(30, 'hienhh', 'Quáº­n 5', '0000-00-00', 'hienhh@gmail.com', 'Äinh Ngá»c Tiáº¿n', '', '01698549852', '0000-00-00', '0000-00-00', 3),
(31, 'ngannt', 'QuÃ¢n 6', '0000-00-00', 'ngongan@gmail.com', 'Nguyá»…n Kim Lan', '', '0824612548', '0000-00-00', '0000-00-00', 3),
(32, 'linhnm', 'TÃ¢n BÃ¬nh', '0000-00-00', 'ngomylinh@gmail.com', 'Pháº¡m Tháº£o UyÃªn', '', '0196458985', '0000-00-00', '0000-00-00', 3),
(33, 'huynk', 'PhÃº Nhuáº­n', '0000-00-00', 'nguyenkhanhhuy@gmail.com', 'Nguyá»…n Thá»‹ Má»¹ Trang', '', '0934785126', '0000-00-00', '0000-00-00', 3),
(34, 'tiendn', 'BÃ¬nh Tháº¡nh', '0000-00-00', 'dinhngoctien@gmail.com', 'HoÃ ng Máº¡nh TÃ¢n', '', '0168451245', '0000-00-00', '0000-00-00', 3),
(35, 'lannk', 'Thá»§ Äá»©c', '0000-00-00', 'nguyenkimlan@gmail.com', 'TÃ´n Má»¹ KhÃ¡nh', '', '0984561254', '0000-00-00', '0000-00-00', 3),
(36, 'thaopu', 'Quáº­n 10', '0000-00-00', 'phamthaouyen@gmail.com', 'Huá»³nh TÃ¢m Loan', '', '01968547851', '0000-00-00', '0000-00-00', 3),
(37, 'trangntm', 'Quáº­n 2', '0000-00-00', 'trangnguyen@gmail.com', 'Pháº¡m PhÆ°Æ¡ng Tháº£o', '', '0934875164', '0000-00-00', '0000-00-00', 3),
(38, 'tanhm', 'Quáº­n 1', '0000-00-00', 'hoangmanhtan@gmail.com', 'LÃª Thanh NguyÃªn', '', '0169456785', '0000-00-00', '0000-00-00', 3),
(39, 'khanhtm', 'PhÃº Nhuáº­n', '0000-00-00', 'tonmykhanh@gmail.com', 'VÃµ XuÃ¢n NgÃ¢n', '', '0975486125', '0000-00-00', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `address`, `birthday`, `start_day`, `end_day`, `email`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Hồng Phước', '', '', '', '', '0', '', 1),
(8, 'anhtho', '7e75e6f09360ef4c434c04d3db54b33f', 'Mr. Thọ', '', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_classes`
--
ALTER TABLE `auto_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dayoff`
--
ALTER TABLE `dayoff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manual_classes`
--
ALTER TABLE `manual_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_classes`
--
ALTER TABLE `auto_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `dayoff`
--
ALTER TABLE `dayoff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `manual_classes`
--
ALTER TABLE `manual_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
