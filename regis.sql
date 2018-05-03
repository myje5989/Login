-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 01:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(4) NOT NULL,
  `faculty_n` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_n`) VALUES
(1000, 'ครุศาสตร์'),
(2000, 'วิทยาศาสตร์และเทคโนโลยี'),
(3000, 'มนุษยศาสตร์และสังคมศาสตร์'),
(4000, 'วิทยาการจัดการ'),
(5000, 'พยาบาลศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `major_id` int(4) NOT NULL,
  `major_n` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `major_l` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`major_id`, `major_n`, `major_l`, `faculty_id`) VALUES
(1404, 'เทคโนโลยีและนวัตกรรมการศึกษา', 'ทล.บ. 4 ป', 1000),
(1501, 'การศึกษาปฐมวัย', 'ค.บ. 5 ปี ', 1000),
(1502, 'พลศึกษา ', 'ค.บ. 5 ปี ', 1000),
(1503, 'การประถมศึกษา', 'ค.บ. 5 ปี ', 1000),
(2327, 'ภาษาไทย', 'ค.บ. 5 ปี ', 3000),
(2411, 'วิทยาศาสตร์และเทคโนโลยีการอาหาร', 'วท.บ. 4 ปี', 2000),
(2412, 'จุลชีววิทยา', 'วท.บ. 4 ปี', 2000),
(2413, 'เทคโนโลยีการผลิตพืช', 'วท.บ. 4 ปี', 2000),
(2414, 'สาธารณสุขศาสตร์', 'วท.บ. 4 ปี', 2000),
(2415, 'วิทยาการคอมพิวเตอร์', 'วท.บ. 4 ปี', 2000),
(2416, 'เคมี', 'วท.บ. 4 ปี', 2000),
(2417, 'เทคโนโลยีสารสนเทศ', 'วท.บ. 4 ปี', 2000),
(2418, 'เทคโนโลยีมัลติมีเดีย', 'วท.บ. 4 ปี', 2000),
(2419, 'เทคโนโลยีคอมพิวเตอร์อุตสาหกรรม', 'วท.บ. 4 ปี', 2000),
(2420, 'เทคโนโลยีคอมพิวเตอร์', 'วท.บ. 4 ปี', 2000),
(2423, 'วิศวกรรมโยธา', 'วท.บ. 4 ปี', 2000),
(2425, 'การจัดการอาหาร', 'วท.บ. 4 ปี', 2000),
(2455, 'อาชีวอนามัยและความปลอดภัย', 'วท.บ. 4 ปี', 2000),
(2456, 'วิศวกรรมไฟฟ้า', 'วท.บ. 4 ปี', 2000),
(2457, 'วิทยาการข้อมูล', 'วท.บ. 4 ปี', 2000),
(2458, 'วิศวกรรมซอฟต์แวร์', 'วท.บ. 4 ปี', 2000),
(2459, 'ฟิสิกส์อุตสาหกรรม', 'วท.บ. 4 ปี', 2000),
(2505, 'คณิตศาสตร์ ', 'ค.บ. 5 ปี ', 2000),
(2506, 'วิทยาศาสตร์ทั่วไป', 'ค.บ. 5 ปี ', 2000),
(2507, 'คอมพิวเตอร์ศึกษา ', 'ค.บ. 5 ปี ', 2000),
(2508, 'ิฟิสิกส์ ', 'ค.บ. 5 ปี ', 2000),
(2509, 'เคมี', 'ค.บ. 5 ปี ', 2000),
(2510, 'ชีววิทยา', 'ค.บ. 5 ปี ', 2000),
(2554, 'อุตสาหกรรมศิลป์', 'ค.บ. 5 ปี ', 2000),
(3432, 'ภาษาอังกฤษธุรกิจ', 'ศศ.บ. 4 ปี', 3000),
(3433, 'การบริการธุรกิจท่องเที่ยวและมัคคุเทศก์', 'ศศ.บ. 4 ปี', 3000),
(3434, 'การพัฒนาชุมชน', 'ศศ.บ. 4 ปี', 3000),
(3435, 'ภาษาอังกฤษ', 'ศศ.บ. 4 ปี', 3000),
(3436, 'บรรณารักษศาสตร์และสารสนเทศศาสตร์', 'ศศ.บ. 4 ปี', 3000),
(3438, 'ออกแบบดิจิทัลอาร์ต', 'ศป.บ. 4 ปี', 3000),
(3439, 'ออกแบบนิเทศศิลป์', 'ศป.บ. 4 ปี', 3000),
(3440, 'รัฐประศาสนศาสตร์', 'รป.บ. 4 ปี', 3000),
(3441, 'นิติศาสตร์', 'น.บ. 4 ปี', 3000),
(3460, 'ภาษาไทยเพื่ออาชีพ', 'ศศ.บ. 4 ปี', 3000),
(3526, 'สังคมศึกษา', 'ค.บ. 5 ปี ', 3000),
(3528, 'ภาษาอังกฤษ', 'ค.บ. 5 ปี ', 3000),
(3529, 'ดนตรีศึกษา', 'ค.บ. 5 ปี ', 3000),
(3530, 'ภาษาจีน', 'ค.บ. 5 ปี ', 3000),
(3531, 'ศิลปศึกษา', 'ค.บ. 5 ปี ', 3000),
(4443, 'การจัดการทั่วไป', 'บธ.บ. 4 ปี', 4000),
(4444, 'การตลาด', 'บธ.บ. 4 ปี', 4000),
(4445, 'การเงินและการธนาคาร', 'บธ.บ. 4 ปี', 4000),
(4446, 'การจัดการทรัพยากรมนุษย์', 'บธ.บ. 4 ปี', 4000),
(4447, 'คอมพิวเตอร์ธุรกิจ', 'บธ.บ. 4 ปี', 4000),
(4448, 'ธุรกิจระหว่างประเทศ', 'บธ.บ. 4 ปี', 4000),
(4449, 'การจัดการโลจิสติกส์และโซ่อุปทาน', 'บธ.บ. 4 ปี', 4000),
(4450, 'การบัญชี', 'บช.บ. 4 ปี', 4000),
(4451, 'นิเทศศาสตร์(ประชาสัมพันธ์)', 'นศ.บ. 4 ปี', 4000),
(4452, 'นิเทศศาสตร์(วิทยุกระจายเสียงและวิทยุโทรทัศน์)', 'นศ.บ. 4 ปี', 4000),
(4542, 'ธุรกิจศึกษา', 'ค.บ. 5 ปี ', 4000),
(5453, 'พยาบาลศาสตร์', 'พย.บ. 4 ปี', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `PROVINCE_ID` int(5) NOT NULL,
  `PROVINCE_CODE` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME_ENG` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`PROVINCE_ID`, `PROVINCE_CODE`, `PROVINCE_NAME`, `PROVINCE_NAME_ENG`, `GEO_ID`) VALUES
(1, '10', 'กรุงเทพมหานคร   ', 'Bangkok', 2),
(2, '11', 'สมุทรปราการ   ', 'Samut Prakan', 2),
(3, '12', 'นนทบุรี   ', 'Nonthaburi', 2),
(4, '13', 'ปทุมธานี   ', 'Pathum Thani', 2),
(5, '14', 'พระนครศรีอยุธยา   ', 'Phra Nakhon Si Ayutthaya', 2),
(6, '15', 'อ่างทอง   ', 'Ang Thong', 2),
(7, '16', 'ลพบุรี   ', 'Loburi', 2),
(8, '17', 'สิงห์บุรี   ', 'Sing Buri', 2),
(9, '18', 'ชัยนาท   ', 'Chai Nat', 2),
(10, '19', 'สระบุรี', 'Saraburi', 2),
(11, '20', 'ชลบุรี   ', 'Chon Buri', 5),
(12, '21', 'ระยอง   ', 'Rayong', 5),
(13, '22', 'จันทบุรี   ', 'Chanthaburi', 5),
(14, '23', 'ตราด   ', 'Trat', 5),
(15, '24', 'ฉะเชิงเทรา   ', 'Chachoengsao', 5),
(16, '25', 'ปราจีนบุรี   ', 'Prachin Buri', 5),
(17, '26', 'นครนายก   ', 'Nakhon Nayok', 2),
(18, '27', 'สระแก้ว   ', 'Sa Kaeo', 5),
(19, '30', 'นครราชสีมา   ', 'Nakhon Ratchasima', 3),
(20, '31', 'บุรีรัมย์   ', 'Buri Ram', 3),
(21, '32', 'สุรินทร์   ', 'Surin', 3),
(22, '33', 'ศรีสะเกษ   ', 'Si Sa Ket', 3),
(23, '34', 'อุบลราชธานี   ', 'Ubon Ratchathani', 3),
(24, '35', 'ยโสธร   ', 'Yasothon', 3),
(25, '36', 'ชัยภูมิ   ', 'Chaiyaphum', 3),
(26, '37', 'อำนาจเจริญ   ', 'Amnat Charoen', 3),
(27, '39', 'หนองบัวลำภู   ', 'Nong Bua Lam Phu', 3),
(28, '40', 'ขอนแก่น   ', 'Khon Kaen', 3),
(29, '41', 'อุดรธานี   ', 'Udon Thani', 3),
(30, '42', 'เลย   ', 'Loei', 3),
(31, '43', 'หนองคาย   ', 'Nong Khai', 3),
(32, '44', 'มหาสารคาม   ', 'Maha Sarakham', 3),
(33, '45', 'ร้อยเอ็ด   ', 'Roi Et', 3),
(34, '46', 'กาฬสินธุ์   ', 'Kalasin', 3),
(35, '47', 'สกลนคร   ', 'Sakon Nakhon', 3),
(36, '48', 'นครพนม   ', 'Nakhon Phanom', 3),
(37, '49', 'มุกดาหาร   ', 'Mukdahan', 3),
(38, '50', 'เชียงใหม่   ', 'Chiang Mai', 1),
(39, '51', 'ลำพูน   ', 'Lamphun', 1),
(40, '52', 'ลำปาง   ', 'Lampang', 1),
(41, '53', 'อุตรดิตถ์   ', 'Uttaradit', 1),
(42, '54', 'แพร่   ', 'Phrae', 1),
(43, '55', 'น่าน   ', 'Nan', 1),
(44, '56', 'พะเยา   ', 'Phayao', 1),
(45, '57', 'เชียงราย   ', 'Chiang Rai', 1),
(46, '58', 'แม่ฮ่องสอน   ', 'Mae Hong Son', 1),
(47, '60', 'นครสวรรค์   ', 'Nakhon Sawan', 2),
(48, '61', 'อุทัยธานี   ', 'Uthai Thani', 2),
(49, '62', 'กำแพงเพชร   ', 'Kamphaeng Phet', 2),
(50, '63', 'ตาก   ', 'Tak', 4),
(51, '64', 'สุโขทัย   ', 'Sukhothai', 2),
(52, '65', 'พิษณุโลก   ', 'Phitsanulok', 2),
(53, '66', 'พิจิตร   ', 'Phichit', 2),
(54, '67', 'เพชรบูรณ์   ', 'Phetchabun', 2),
(55, '70', 'ราชบุรี   ', 'Ratchaburi', 4),
(56, '71', 'กาญจนบุรี   ', 'Kanchanaburi', 4),
(57, '72', 'สุพรรณบุรี   ', 'Suphan Buri', 2),
(58, '73', 'นครปฐม   ', 'Nakhon Pathom', 2),
(59, '74', 'สมุทรสาคร   ', 'Samut Sakhon', 2),
(60, '75', 'สมุทรสงคราม   ', 'Samut Songkhram', 2),
(61, '76', 'เพชรบุรี   ', 'Phetchaburi', 4),
(62, '77', 'ประจวบคีรีขันธ์   ', 'Prachuap Khiri Khan', 4),
(63, '80', 'นครศรีธรรมราช   ', 'Nakhon Si Thammarat', 6),
(64, '81', 'กระบี่   ', 'Krabi', 6),
(65, '82', 'พังงา   ', 'Phangnga', 6),
(66, '83', 'ภูเก็ต   ', 'Phuket', 6),
(67, '84', 'สุราษฎร์ธานี   ', 'Surat Thani', 6),
(68, '85', 'ระนอง   ', 'Ranong', 6),
(69, '86', 'ชุมพร   ', 'Chumphon', 6),
(70, '90', 'สงขลา   ', 'Songkhla', 6),
(71, '91', 'สตูล   ', 'Satun', 6),
(72, '92', 'ตรัง   ', 'Trang', 6),
(73, '93', 'พัทลุง   ', 'Phatthalung', 6),
(74, '94', 'ปัตตานี   ', 'Pattani', 6),
(75, '95', 'ยะลา   ', 'Yala', 6),
(76, '96', 'นราธิวาส   ', 'Narathiwat', 6),
(77, '97', 'บึงกาฬ', 'buogkan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `title_name`
--

CREATE TABLE `title_name` (
  `title_id` int(11) NOT NULL,
  `title_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `title_name`
--

INSERT INTO `title_name` (`title_id`, `title_name`, `title_en`) VALUES
(1, 'นาย', 'Mr.'),
(2, 'นาง', 'Mrs.'),
(3, 'นางสาว', 'Miss');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_title` int(11) NOT NULL,
  `th_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `th_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `en_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `en_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `gender`, `name_title`, `th_name`, `th_lname`, `en_name`, `en_lname`, `birth`, `pro_id`, `pw`, `major_id`) VALUES
('4444444444444', '123@hotmail.com', 'ชาย', 1, 'คน', 'นำยำยำ', 'pwpwp', 'pewpep', '2018-04-03', 3, '$2y$10$lyJR0CD8xitCDmbyuWuIpOEBmK8ram7BTii62KeuslfcqnsVbxO9e', 2415);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`major_id`),
  ADD KEY `f` (`faculty_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`PROVINCE_ID`);

--
-- Indexes for table `title_name`
--
ALTER TABLE `title_name`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`name_title`),
  ADD KEY `provinces` (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `PROVINCE_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `title_name`
--
ALTER TABLE `title_name`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `major`
--
ALTER TABLE `major`
  ADD CONSTRAINT `f` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `provinces` FOREIGN KEY (`pro_id`) REFERENCES `provinces` (`PROVINCE_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `title` FOREIGN KEY (`name_title`) REFERENCES `title_name` (`title_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;
