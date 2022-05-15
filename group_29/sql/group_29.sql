-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-15 13:05:10
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `group_29`
--
CREATE DATABASE IF NOT EXISTS `group_29` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `group_29`;

-- --------------------------------------------------------

--
-- 資料表結構 `bulletin`
--

CREATE TABLE `bulletin` (
  `bul_No` int(10) NOT NULL,
  `intro_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `intro_content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `intro_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `slider_title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `slider_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `goods_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `bulletin`
--

INSERT INTO `bulletin` (`bul_No`, `intro_title`, `intro_content`, `intro_picture`, `type`, `slider_title`, `slider_picture`, `goods_No`) VALUES
(1, '週日搶下殺 $200', '日本原裝進口 不鏽鋼鑰匙圈 <br> 立即 GO GO !!', 'picture/m-project1.jpg', 'discount', '週日搶下殺 <br> 最高折 $200', './picture/Product/key_ring1.jpg', '001'),
(2, '瑞克特殺折 $500', '百搭小白鞋 <br> 立即 GO GO !!', 'picture/Product/show_white_1_2.jpg', 'discount', '週日搶下殺 <br> 最高折 $500', './picture/Product/show_white_1_2.jpg', '009'),
(3, '全新上市', '柔軟質感<br>男女適用', 'picture/Product/coat_gray.jpg', 'new', '新品上市<br>柔軟舒適', 'picture/Product/coat_gray3.webp', '006'),
(4, '全新上市', '精心打造<br>疾如閃電', 'picture/Product/ps5_3.webp', 'new', '新品上市<br>搶先訂購', 'picture/Product/ps5_4.jpg', '012');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mem_account` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_birth` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mem_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mem_email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mem_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_location` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mem_level` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `mem_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`mem_account`, `mem_code`, `mem_birth`, `mem_name`, `mem_email`, `mem_mobile`, `mem_phone`, `mem_location`, `mem_level`, `mem_no`) VALUES
('member', 'member123456', '2002/03/21', '王小明', 'allen@gmail.com', '041234567', '0987654321', '彰化市行天宮125號', '1', '1'),
('admin', 'admin123456', '1989/05/06', '王大明', 'kspksp@gmail.com', '061234567', '0912345678', '南投市阿里山22號', '2', '2');

-- --------------------------------------------------------

--
-- 資料表結構 `product_list`
--

CREATE TABLE `product_list` (
  `goods_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `goods_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `specification` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product_list`
--

INSERT INTO `product_list` (`goods_No`, `goods_name`, `type`, `describe`, `specification`, `price`, `picture`) VALUES
('001', '日本原裝進口 不鏽鋼鑰匙圈', 'other', '金鍊鑰匙拉鍊,\r\n半圓開口更大更方便', '材質 不鏽鋼\r\n尺寸 寬 2 X 2 公分\r\n製造國家 日本', 10000, 'picture/m-project1.jpg'),
('002', '無印良品 小杯杯', 'other', '底部設有高台容易拿取，容量稍大，\r\n方便盛裝更多食物。', '伊賀燒小缽/白釉/\r\n約直徑13×高5cm 約直徑13×高5cm/\r\n約300ml', 150, 'picture/project1.jpg'),
('003', '無印良品 小筷筷', 'other', '竹筷子10雙組 23cm 天然竹經高壓熱處理、質輕堅韌。', '竹筷子10雙組 23cm\r\n表面塗層：聚氨酯塗層基材種類：天然竹', 130, 'picture/Product/stick.webp'),
('004', '【男女適用】休閒衫', 'cloth', '有機棉混緊密編織裏毛連帽上衣 銀灰XXS~XS\r\n男女適用】保有裏毛素材舒適的肌膚觸感，高密度織法呈現出適度的硬挺感與厚度。使用有機棉製成。', '本體：棉72%(使用有機棉100%)、聚酯纖維28%。螺紋：棉82%(使用有機棉100%)、聚酯纖維18%。後領貼：棉100%(使用有機棉100%)', 1600, 'picture/Product/sweater_white.webp'),
('005', '有機棉舒適休閒鞋柔白', 'cloth', '撥水加工有機棉舒適休閒鞋柔白22.0cm 柔白22.0cm\r\n採用對足弓有良好支撐力的鞋墊，使足部不易感到疲憊。使用有機棉製成。', '鞋面：棉100%(使用有機棉100%)。\r\n鞋底材質：橡膠鞋底', 699, 'picture/Product/shoe_white.jpg'),
('006', '【男女適用】連帽外套', 'cloth', '有機棉混緊密編織裏毛拉鍊連帽外套 灰色XXS~XS\r\n【男女適用】保有裏毛素材舒適的肌膚觸感，高密度織法呈現出適度的硬挺感與厚度。使用有機棉製成。', '本體：棉72%(使用有機棉100%)、聚酯纖維28%。螺紋：棉82%(使用有機棉100%)、聚酯纖維18%。後領貼：棉100%(使用有機棉100%)', 899, 'picture/Product/coat_gray.jpg'),
('007', '有機棉舒適休閒鞋', 'cloth', '撥水加工有機棉舒適休閒鞋 黑色25.5cm\r\n採用對足弓有良好支撐力的鞋墊，使足部不易感到疲憊。使用有機棉製成。', '鞋面：棉100%(使用有機棉100%)。\r\n鞋底材質：橡膠鞋底', 699, 'picture/Product/shoe_black.webp'),
('008', '棉束口袋/文字 原色NONE', 'other', '數量限定，可作為禮物包裝可收納拖鞋或小物的束口袋也可當作收納袋。', '棉100% (使用100%有機棉)', 69, 'picture/Product/bag.webp'),
('009', '有機棉舒適基本便鞋', 'cloth', '女撥水加工有機棉舒適基本便鞋 柔白23.0cm\r\n採用對足弓有良好支撐力的鞋墊，使足部不易感到疲憊。使用有機棉製成。', '鞋面：棉100%(使用有機棉100%)。\r\n鞋底材質：橡膠鞋底', 699, 'picture/Product/show_white_1_.jpg'),
('010', '不易變形坐墊/方形/混淺棕', 'other', '改為縱向聚酯纖維，成型後反彈性佳的坐墊。', '表面面料:棉100% (使用100%有機棉)硬棉:聚酯纖維100%', 540, 'picture/Product/cushion.webp'),
('011', 'PS5無線手柄', 'game', '創新的 PS5 控制器，發掘更深度的遊戲體驗<br>刺激您的感官體驗', '<i>觸覺回饋：</i><br>&emsp;雙致動器取代傳統震動馬達，讓您在遊戲內行動時感受到物理回饋。<br>\r\n<i>自適應扳機：</i><br>&emsp;與遊戲中的裝備和環境互動時，能體驗到不同程度的力量和張力。<br>', 2180, 'picture\\Product\\controler1.webp'),
('012', 'PlayStation5', 'game', '超高速 SSD，實現疾如閃電的載入速度；觸覺回饋、自適應扳機、3D 音效支援與所有難以置信的新一代', '光線追蹤<br>&emsp;在支援的 PS5™ 遊戲中，每道光線都個別模擬生成，創造出栩栩如生的陰影與反光，為您帶來全新層次的沉浸式寫實體驗。\r\n<br><br>4K 電視遊戲<br>&emsp;在畫質令人驚豔的 4K 電視上，暢玩自己最喜愛的 PS5™ 遊戲。', 16000, 'picture\\Product\\ps5_2.jpg'),
('013', 'IOT智慧冰箱', 'appliance', '500公升一級能效玻璃四門變頻冰箱(翡翠白)', '-3℃微凍結<br>R600a環保新冷媒<br>IOT智慧家電<br>', 44927, 'picture/Product/refig1.jpg'),
('014', '車站時鐘 白', 'appliance', '沿用與日本車站、街頭時鐘相同的數字盤設計。造型簡約，可融入室內擺設環境。', '車站時鐘 白.寬31.5x深4.3x高22.5cm', 1990, 'picture\\Product\\clock1.webp');

-- --------------------------------------------------------

--
-- 資料表結構 `shoppingcar`
--

CREATE TABLE `shoppingcar` (
  `member_No` varchar(10) NOT NULL,
  `goods_No` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `complete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shoppingcar`
--

INSERT INTO `shoppingcar` (`member_No`, `goods_No`, `amount`, `complete`) VALUES
('1', '002', '1', 0),
('1', '010', '1', 0),
('1', '013', '1', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_no`);

--
-- 資料表索引 `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`goods_No`);

--
-- 資料表索引 `shoppingcar`
--
ALTER TABLE `shoppingcar`
  ADD PRIMARY KEY (`member_No`,`goods_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
