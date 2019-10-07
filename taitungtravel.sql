-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 12 月 24 日 19:05
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `taitungtravel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `abstractions`
--

CREATE TABLE `abstractions` (
  `spot_name` varchar(10) NOT NULL,
  `location` varchar(5) NOT NULL,
  `spot_type` varchar(10) NOT NULL,
  `near_accommodation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `abstractions`
--

INSERT INTO `abstractions` (`spot_name`, `location`, `spot_type`, `near_accommodation`) VALUES
('三仙台', '成功鎮', '自然與公園', '三仙台星辰民宿'),
('伯朗大道', '池上鄉', '景點與地標', '稻花香民宿'),
('台東森林公園', '台東市', '自然與公園', '樂遊民宿'),
('台東觀光夜市', '台東市', '購物', '台東桂田喜來登酒店'),
('史前文化博物館', '台東市', '博物館', '娜魯灣大酒店'),
('四維路夜市', '台東市', '購物', '旅人驛站'),
('崁頂部落', '海端鄉', '遊覽', '下馬望山樓溫泉民宿'),
('海端鄉布農族文物館', '海端鄉', '博物館', '天龍溫泉飯店'),
('混水摸魚', '長濱鄉', '遊覽', '鹿角海月民宿'),
('綠島石朗', '綠島鄉', '戶外活動', '戀戀火燒島民宿'),
('關山環鎮自行車道', '關山鎮', '戶外活動', '迷路找路民宿'),
('鹿野高台', '鹿野鄉', '景點與地標', '鹿台民宿');

-- --------------------------------------------------------

--
-- 資料表結構 `accommodation`
--

CREATE TABLE `accommodation` (
  `location` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `perNight_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `accommodation`
--

INSERT INTO `accommodation` (`location`, `name`, `perNight_price`) VALUES
('成功鎮', '三仙台星辰民宿', 2000),
('海端鄉', '下馬望山樓溫泉民宿', 1800),
('台東市', '台東桂田喜來登酒店', 4300),
('海端鄉', '天龍溫泉飯店', 2700),
('台東市', '娜魯灣大酒店', 3800),
('綠島鄉', '戀戀火燒島民宿', 2000),
('台東市', '旅人驛站', 1000),
('台東市', '樂遊民宿', 2800),
('池上鄉', '稻花香民宿', 2800),
('關山鎮', '迷路找路民宿', 1500),
('鹿野鄉', '鹿台民宿', 2800),
('長濱鄉', '鹿角海月民宿', 2500);

-- --------------------------------------------------------

--
-- 資料表結構 `restaurant`
--

CREATE TABLE `restaurant` (
  `name` varchar(15) NOT NULL,
  `location` varchar(10) NOT NULL,
  `cuisine` varchar(10) NOT NULL,
  `price_level` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `restaurant`
--

INSERT INTO `restaurant` (`name`, `location`, `cuisine`, `price_level`) VALUES
('原始部落山地美食', '卑南鄉', '台灣美食/台菜', '中等價位'),
('台東七里坡紅藜養生料理', '台東市', '台灣小吃/台菜', '平價美食'),
('吉串燒居酒屋', '台東市', '日式料理', '中等價位'),
('四季海悅海景餐廳', '太麻里', '台灣美食/台菜', '高級餐廳'),
('多福豆花', '台東市', '台灣美食/台菜', '平價美食'),
('大車輪日本料理', '台東市', '日式料理', '中等價位'),
('大頭目野食館', '知本鄉', '台灣美食/台菜', '中等價位'),
('好漁日', '台東市', '亞洲料理', '平價美食'),
('春一枝鹿野76', '鹿野鄉', '台灣美食/台菜', '平價美食'),
('東河包子', '東河鄉', '台灣小吃/美食', '平價美食'),
('藍蜻蜓速食專賣店', '台東市', '速食', '平價美食');

-- --------------------------------------------------------

--
-- 資料表結構 `traffic`
--

CREATE TABLE `traffic` (
  `car_type` varchar(10) NOT NULL,
  `driver_id` int(3) NOT NULL,
  `license_plate` varchar(7) NOT NULL,
  `oneDay_price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `traffic`
--

INSERT INTO `traffic` (`car_type`, `driver_id`, `license_plate`, `oneDay_price`) VALUES
('T5商務9人座', 2, '8K3821H', 2000),
('大型巴士', 6, 'RL52Q43', 5500),
('小型巴士', 4, 'BK54764', 4000),
('現代商務9人座', 3, 'AS5231N', 2000),
('福斯9人座', 5, 'WH57416', 1800),
('豐田7人座', 1, 'RK25761', 1000);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `abstractions`
--
ALTER TABLE `abstractions`
  ADD PRIMARY KEY (`spot_name`);

--
-- 資料表索引 `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`car_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
