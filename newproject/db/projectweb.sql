-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2021 lúc 12:26 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `datesave`) VALUES
(1, '111', '111', 'devtai', '2018-06-14 11:39:15'),
(2, '222', '222', 'waiyawut', '2018-06-14 11:39:26'),
(4, '444', '444', 'sss', '2018-06-14 11:39:56'),
(5, '555', '555', 'peenu', '2018-06-14 11:41:37'),
(6, 'aaa', 'aaa', 'thaidev', '2018-06-14 11:41:55'),
(7, 'ssss', 'ssss', 'devtaiwai', '2018-06-14 11:42:13'),
(8, '4110', '1411', 'toon', '2018-06-14 11:42:36'),
(9, 'admin', 'admin', 'devtai', '2018-06-14 11:42:50'),
(10, '44444', '22009', 'waiyawut', '2018-06-14 11:43:04'),
(15, 'user2', '23061997', 'khankeo', '2021-01-26 09:04:08'),
(16, '333', '333', 'laos2', '2021-02-20 15:28:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_name`, `m_email`, `m_tel`, `m_address`, `date_save`) VALUES
(14, '111', '111', 'member1', 'member1@gmail.com', '2333221', 'lpb,Laos', '2021-02-05 07:00:40'),
(25, '1234', '1234', 'Khankeo', 'khankeo@gmail.com', '01357979', 'LAOS LPQ', '2021-05-28 16:29:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `or_user` varchar(20) NOT NULL,
  `or_pass` varchar(20) NOT NULL,
  `or_name` varchar(100) NOT NULL,
  `or_email` varchar(100) NOT NULL,
  `or_tel` varchar(20) NOT NULL,
  `or_address` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp(),
  `or_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `or_user`, `or_pass`, `or_name`, `or_email`, `or_tel`, `or_address`, `date_save`, `or_price`) VALUES
(5, 'khankeo', '111', 'kkfnfkng', 'msnf@gmail.com', '232323', 'kdmfpvmv', '2021-05-14 09:57:54', '1000000'),
(8, 'laos', 'laos123', 'laptop', 'laos@gmail.com', '123123', 'laos', '2021-05-28 14:42:24', '2000000'),
(9, 'laos', 'laos123', 'laptop', 'laos@gmail.com', '2222333', 'lasokkkk', '2021-05-28 14:45:47', '1500000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_status` int(1) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_detail`, `p_img`, `p_price`, `p_status`, `datesave`) VALUES
(15, 'x', 2, '<p><strong>Casio</strong><br />\r\nบริษัทนาฬิกา&nbsp;Casio&nbsp;เป็นต้น&nbsp;ถ้าให้คุณเดาว่าผลิตภัณฑ์ชิ้นแรกของ&nbsp;Casio&nbsp;คืออะไร คุณอาจจะคิดว่าเป็นเครื่องคิดเลขหรือไม่ก็ผลิตภัณฑ์ที่เกี่ยวกับอิเลคทรอนิคส์ทั่วๆ ไป คุณคิดผิด!!!&nbsp;บริษัท Casio ก่อตั้งขึ้นโดย มิสเตอร์ Tadao Kashio&nbsp;ในปี ค.ศ. 1946&nbsp;ซึ่งเข้าใจได้ว่าก่อตั้งขึ้นนั้นภายหลังประเทศญี่ปุ่นได้ประกาศเข้าร่วมสงครามโลกครั้งที่ 2 ซึ่ง ณ. ตอนนั้นสถานการณ์ทางการเงินในประเทศญี่ปุ่นค่อนข้างย่ำแย่มากเมื่อ มิสเตอร์ Kashio เริ่มงานในบริษัทของเขา เขาเป็นเพียงวิศวกรประกอบซึ่งคาดหวังว่าอยากหาเวลาพักผ่อนยาวๆ&nbsp;</p>\r\n', '49580582620180801_173328.jpg', 25500, 0, '2018-06-22 10:34:52'),
(16, 'Casio', 2, '<p><strong>Casio</strong><br />\r\nบริษัทนาฬิกา&nbsp;Casio&nbsp;เป็นต้น&nbsp;ถ้าให้คุณเดาว่าผลิตภัณฑ์ชิ้นแรกของ&nbsp;Casio&nbsp;คืออะไร คุณอาจจะคิดว่าเป็นเครื่องคิดเลขหรือไม่ก็ผลิตภัณฑ์ที่เกี่ยวกับอิเลคทรอนิคส์ทั่วๆ ไป คุณคิดผิด!!!&nbsp;บริษัท Casio ก่อตั้งขึ้นโดย มิสเตอร์ Tadao Kashio&nbsp;ในปี ค.ศ. 1946&nbsp;ซึ่งเข้าใจได้ว่าก่อตั้งขึ้นนั้นภายหลังประเทศญี่ปุ่นได้ประกาศเข้าร่วมสงครามโลกครั้งที่ 2 ซึ่ง ณ. ตอนนั้นสถานการณ์ทางการเงินในประเทศญี่ปุ่นค่อนข้างย่ำแย่มากเมื่อ มิสเตอร์ Kashio เริ่มงานในบริษัทของเขา เขาเป็นเพียงวิศวกรประกอบซึ่งคาดหวังว่าอยากหาเวลาพักผ่อนยาวๆ&nbsp;</p>\r\n', '49580582620180801_173328.jpg', 25500, 0, '2018-06-22 10:34:52'),
(17, 'Casio', 2, '<p><strong>Casio</strong><br />\r\nบริษัทนาฬิกา&nbsp;Casio&nbsp;เป็นต้น&nbsp;ถ้าให้คุณเดาว่าผลิตภัณฑ์ชิ้นแรกของ&nbsp;Casio&nbsp;คืออะไร คุณอาจจะคิดว่าเป็นเครื่องคิดเลขหรือไม่ก็ผลิตภัณฑ์ที่เกี่ยวกับอิเลคทรอนิคส์ทั่วๆ ไป คุณคิดผิด!!!&nbsp;บริษัท Casio ก่อตั้งขึ้นโดย มิสเตอร์ Tadao Kashio&nbsp;ในปี ค.ศ. 1946&nbsp;ซึ่งเข้าใจได้ว่าก่อตั้งขึ้นนั้นภายหลังประเทศญี่ปุ่นได้ประกาศเข้าร่วมสงครามโลกครั้งที่ 2 ซึ่ง ณ. ตอนนั้นสถานการณ์ทางการเงินในประเทศญี่ปุ่นค่อนข้างย่ำแย่มากเมื่อ มิสเตอร์ Kashio เริ่มงานในบริษัทของเขา เขาเป็นเพียงวิศวกรประกอบซึ่งคาดหวังว่าอยากหาเวลาพักผ่อนยาวๆ&nbsp;</p>\r\n', '49580582620180801_173328.jpg', 25500, 0, '2018-06-22 10:34:52'),
(18, 'Casio', 2, '<p><strong>Casio</strong><br />\r\nบริษัทนาฬิกา&nbsp;Casio&nbsp;เป็นต้น&nbsp;ถ้าให้คุณเดาว่าผลิตภัณฑ์ชิ้นแรกของ&nbsp;Casio&nbsp;คืออะไร คุณอาจจะคิดว่าเป็นเครื่องคิดเลขหรือไม่ก็ผลิตภัณฑ์ที่เกี่ยวกับอิเลคทรอนิคส์ทั่วๆ ไป คุณคิดผิด!!!&nbsp;บริษัท Casio ก่อตั้งขึ้นโดย มิสเตอร์ Tadao Kashio&nbsp;ในปี ค.ศ. 1946&nbsp;ซึ่งเข้าใจได้ว่าก่อตั้งขึ้นนั้นภายหลังประเทศญี่ปุ่นได้ประกาศเข้าร่วมสงครามโลกครั้งที่ 2 ซึ่ง ณ. ตอนนั้นสถานการณ์ทางการเงินในประเทศญี่ปุ่นค่อนข้างย่ำแย่มากเมื่อ มิสเตอร์ Kashio เริ่มงานในบริษัทของเขา เขาเป็นเพียงวิศวกรประกอบซึ่งคาดหวังว่าอยากหาเวลาพักผ่อนยาวๆ&nbsp;</p>\r\n', '49580582620180801_173328.jpg', 25500, 0, '2018-06-22 10:34:52'),
(30, 'Casio', 2, '<p><strong>Casio</strong><br />\r\nบริษัทนาฬิกา&nbsp;Casio&nbsp;เป็นต้น&nbsp;ถ้าให้คุณเดาว่าผลิตภัณฑ์ชิ้นแรกของ&nbsp;Casio&nbsp;คืออะไร คุณอาจจะคิดว่าเป็นเครื่องคิดเลขหรือไม่ก็ผลิตภัณฑ์ที่เกี่ยวกับอิเลคทรอนิคส์ทั่วๆ ไป คุณคิดผิด!!!&nbsp;บริษัท Casio ก่อตั้งขึ้นโดย มิสเตอร์ Tadao Kashio&nbsp;ในปี ค.ศ. 1946&nbsp;ซึ่งเข้าใจได้ว่าก่อตั้งขึ้นนั้นภายหลังประเทศญี่ปุ่นได้ประกาศเข้าร่วมสงครามโลกครั้งที่ 2 ซึ่ง ณ. ตอนนั้นสถานการณ์ทางการเงินในประเทศญี่ปุ่นค่อนข้างย่ำแย่มากเมื่อ มิสเตอร์ Kashio เริ่มงานในบริษัทของเขา เขาเป็นเพียงวิศวกรประกอบซึ่งคาดหวังว่าอยากหาเวลาพักผ่อนยาวๆ&nbsp;</p>\r\n', '49580582620180801_173328.jpg', 25500, 0, '2018-06-22 10:34:52'),
(34, 'it', 12, '<p>lalsdm</p>\r\n', 'img214257904620210202_165441.jpg', 0, 0, '2021-02-02 09:54:41'),
(35, 'iphone', 12, '<p>iphone is so good</p>\r\n', 'img194562046220210202_173902.png', 0, 0, '2021-02-02 10:39:02'),
(36, 'The one', 13, '<p>Miễn ph&iacute; vận chuyển tối đa 40k với đơn h&agrave;ng từ 150k tại H&agrave; Nội v&agrave; từ 250k tại c&aacute;c tỉnh v&agrave; th&agrave;nh phố kh&aacute;c. Bạn nhớ chọn m&atilde; vận chuyển miễn ph&iacute; để được &aacute;p dụng chương tr&igrave;nh nh&eacute;! Lily BookShop &ndash; Thế giới S&aacute;ch ! Nơi giao lưu, chia sẻ những cuốn s&aacute;ch hay ???????????? Giữ g&igrave;n v&agrave; ph&aacute;t triển văn ho&aacute; đọc ❤️❤️❤️ C&ugrave;ng lan toả t&igrave;nh y&ecirc;u với S&aacute;ch ???????????? Chia sẻ Tri thức, n&acirc;ng tầm Tr&iacute; Tuệ ❤️❤️❤️ Hotline: 0964737788</p>\r\n', 'img153108805220210202_225658.jpg', 0, 0, '2021-02-02 15:56:58'),
(37, 'oppo', 11, '200', 'img62831812220210203_140826.png', 0, 0, '2021-02-03 07:08:26'),
(38, 'iphone', 4, '', 'img142354168820210203_141446.png', 0, 0, '2021-02-03 07:14:46'),
(39, 'test', 12, '', 'img201502833720210203_144126.jpg', 0, 0, '2021-02-03 07:41:26'),
(40, 'oppo', 12, '<p>lallals</p>\r\n', 'img21456428620210205_132747.png', 0, 0, '2021-02-05 06:27:47'),
(41, 'acer swift3', 18, '<p>Swift 3 t&iacute;ch hợp những CPU mới nhất, đi đầu về mặt c&ocirc;ng nghệ, c&oacute; 2 lựa chọn l&agrave; Intel&reg; Core&trade; Processors hoặc AMD Ryzen&trade; Mobile 4000 Series Processors gi&uacute;p xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ văn ph&ograve;ng v&agrave; giải tr&iacute;. Thiết kế CPU được tối ưu h&oacute;a trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng c&oacute;, cải tiến đ&aacute;ng kể v&agrave; hiệu quả năng lượng đ&aacute;ng kinh ngạc.</p>\r\n', 'img157021808020210205_140545.jpg', 23000000, 0, '2021-02-05 07:05:45'),
(42, 'acer swift3', 18, '<p>Swift 3 t&iacute;ch hợp những CPU mới nhất, đi đầu về mặt c&ocirc;ng nghệ, c&oacute; 2 lựa chọn l&agrave; Intel&reg; Core&trade; Processors hoặc AMD Ryzen&trade; Mobile 4000 Series Processors gi&uacute;p xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ văn ph&ograve;ng v&agrave; giải tr&iacute;. Thiết kế CPU được tối ưu h&oacute;a trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng c&oacute;, cải tiến đ&aacute;ng kể v&agrave; hiệu quả năng lượng đ&aacute;ng kinh ngạc.</p>\r\n', 'img106185159620210205_141535.jpg', 22000000, 0, '2021-02-05 07:15:35'),
(50, 'swift5', 16, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen™ Mobile 4000 Series Processors giúp xử lý mượt mà các tác vụ văn phòng và giải trí. Thiết kế CPU được tối ưu hóa trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng có, cải tiến đáng kể và hiệu quả năng lượng đáng kinh ngạc.', 'img113980849720210514_151313.jpg', 10000000, 0, '2021-05-14 08:13:13'),
(51, 'swift5', 17, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen™ Mobile 4000 Series Processors giúp xử lý mượt mà các tác vụ văn phòng và giải trí. Thiết kế CPU được tối ưu hóa trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng có, cải tiến đáng kể và hiệu quả năng lượng đáng kinh ngạc.', 'img154161738920210514_151436.jpg', 25000000, 0, '2021-05-14 08:14:36'),
(52, 'swift7', 18, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen™ Mobile 4000 Series Processors giúp xử lý mượt mà các tác vụ văn phòng và giải trí. Thiết kế CPU được tối ưu hóa trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng có, cải tiến đáng kể và hiệu quả năng lượng đáng kinh ngạc.', 'img80992975020210514_151537.jpg', 23000000, 0, '2021-05-14 08:15:37'),
(53, 'swift7', 18, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen™ Mobile 4000 Series Processors giúp xử lý mượt mà các tác vụ văn phòng và giải trí. Thiết kế CPU được tối ưu hóa trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng có, cải tiến đáng kể và hiệu quả năng lượng đáng kinh ngạc.', 'img33319301420210514_151740.png', 25000000, 0, '2021-05-14 08:17:40'),
(54, 'swift5', 17, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen\r\n', 'img133581559620210514_151903.jpg', 10000000, 0, '2021-05-14 08:19:03'),
(55, 'swift7', 16, 'Swift 3 tích hợp những CPU mới nhất, đi đầu về mặt công nghệ, có 2 lựa chọn là Intel® Core™ Processors hoặc AMD Ryzen™ Mobile 4000 Series Processors giúp xử lý mượt mà các tác vụ văn phòng và giải trí. Thiết kế CPU được tối ưu hóa trong thiết kế, hứa hẹn cung cấp mức hiệu năng chưa từng có, cải tiến đáng kể và hiệu quả năng lượng đáng kinh ngạc.', 'img1879944420210514_151941.png', 25000000, 0, '2021-05-14 08:19:41'),
(56, 'swift7', 17, 'Giảm ngay 5% tối đa 300.000đ khi thanh toán Online 100% qua VNPAY-QR. Mã khuyến mại VNPAY300 (Chọn hình thức thanh toán ATM nội địa/QR CODE/Internet Banking)', 'img137213830620210528_233828.jpg', 25000000, 0, '2021-05-28 16:38:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(16, 'Dell'),
(17, 'Asus'),
(18, 'Acer'),
(19, 'Mac');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Chỉ mục cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
