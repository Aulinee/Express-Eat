-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 12:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expresseat`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `FirstName`, `LastName`, `Email`, `Username`, `Password`) VALUES
(1, 'Elon', 'Musk', 'muskelon@gmail.com', 'tesla', 'elon69'),
(2, 'Jeff', 'Bezos', 'jbezos@gmail.com', 'amazonis', 'billion10'),
(3, 'Steve', 'Jobs', 'sjobs@gmail.com', 'appleismine', 'iphone10');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `PostalCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Username`, `Email`, `Password`, `FirstName`, `LastName`, `Gender`, `Phone`, `Address1`, `Address2`, `City`, `State`, `Country`, `PostalCode`) VALUES
(1, 'redscarf', 'mikasaackerman@gmail.com', 'eren1234', 'Mikasa', 'Ackerman', 'Female', 191234567, 'Lot 9A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(2, 'titanlover', 'hangezoe@gmail.com', 'hz1234', 'Hange', 'Zoe', 'Female', 191234567, 'Lot 9B Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(3, 'attacktitan', 'erenyeager@gmail.com', 'forhum4n', 'Eren', 'Yeager', 'Male', 191234567, 'Lot 11A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(4, 'seirinace', 'ktaigan@gmail.com', 'basket4l', 'Kagami', 'Taiga', 'Male', 191234567, 'Lot 6C Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(5, 'phantom6', 'tetsukuro@gmail.com', 'kuroko', 'Kuroko', 'Tetsuya', 'Male', 191234567, 'Lot 9A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(6, 'karbane', 'karbane@gmail.com', 'AS2013', 'Karma', 'Akabane', 'Male', 191234567, 'Lot 5A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(7, 'strawberryman', 'ichigokuro@gmail.com', 'bleachMC', 'Ichigo', 'Kurosaki', 'Male', 191234567, 'Lot 1A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(8, 'rukuchiki', 'rukiableach@gmail.com', 'rukia20', 'Rukia', 'Kuchiki', 'Female', 191234567, 'Lot 11B Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(9, 'zorororo', 'zororo@gmail.com', 'roro1234', 'Zoro', 'Rorornoa', 'Male', 191234567, 'Lot 9634 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(10, 'toushirou', 'thitsugaya@gmail.com', 'touga123', 'Toushirou', 'Hitsugaya', 'Male', 191234567, 'Lot 871 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(11, 'frenchclown', 'hisoka@gmail.com', 'joker867', 'Hisoka', 'Morrow', 'Male', 191234567, 'Lot 34A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(12, 'urahakisu', 'uraharableach@gmail.com', 'kisuk3', 'Urahara', 'Kisuke', 'Male', 191234567, 'Lot 8739 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(13, 'killua', 'zoldyckrebel@gmail.com', 'rebelkid', 'Killua', 'Zoldyck', 'Male', 111534567, 'Lot 19A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(14, 'itachiha', 'uchihaitachi@gmail.com', 'redeyes', 'Itachi', 'Uchiha', 'Male', 191234567, 'Lot 6700 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(15, '50yrsold', 'kakashihatake@gmail.com', 'kakatake', 'Kakashi', 'Hatake', 'Male', 191234567, 'Lot 9909 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(16, 'capedhero', 'baldheadhero@gmail.com', 'hero4fun', 'Saitama', 'Sensei', 'Male', 191234567, 'Lot 12 City Z Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(17, 'futurehokage', 'hokagesama@gmail.com', '9tailfox', 'Naruto', 'Uzumaki', 'Male', 191234567, 'Lot 913A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(18, 'iceshoto', 'shotodoroki@gmail.com', 'endehate', 'Shoto', 'Todoroki', 'Male', 191234123, 'Lot 9841 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(19, 'hunterxgon', 'gonthehunter@gmail.com', 'ging123', 'Gon', 'Freecss', 'Male', 112334567, 'Lot 1293 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(20, 'captainnumber4', 'seijuro4@gmail.com', 'c4pt4in', 'Akashi', 'Seijuro', 'Male', 190987567, 'Lot 3195 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(21, 'shinara', 'shinara@gmail.com', 'nara0045', 'Shikamaru', 'Nara', 'Male', 197654567, 'Lot 760 Kawasan Jag Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(22, 'minatokaze', 'minatoghost@gmail.com', 'min4t0', 'Minato', 'Namikaze', 'Male', 111124567, 'Lot 1010 Kawasan Konoha Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(23, 'metalarm', 'fmabrother@gmail.com', 'fm4bro', 'Edward', 'Elric', 'Male', 185674567, 'Lot 989 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(24, 'kennnny', 'kennyackerman@gmail.com', 'oldg33z', 'Kenny', 'Ackerman', 'Male', 108734567, 'Lot 9A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(25, 'madachiha', 'machiha@gmail.com', 'chiha341', 'Madara', 'Uchiha', 'Male', 191234567, 'Lot 129A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(26, 'hyugamaki', 'hyugahinata@gmail.com', 'hhga1212', 'Hinata', 'Hyuga', 'Female', 191234567, 'Lot 980 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(27, 'leetherock', 'rocklee@gmail.com', '0123456rl', 'Rock', 'Lee', 'Male', 191876567, 'Lot 345 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(28, 'redriot', 'kirishimariot@gmail.com', 'rr107', 'Eijirou', 'Kirishima', 'Male', 178034567, 'Lot 59A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(29, 'nejiga', 'hyuganeji@gmail.com', 'id13d', 'Neji', 'Hyuga', 'Male', 191236390, 'Lot 96C Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(30, 'eraserhead', 'homeroom1a@gmail.com', 'r4z3rHe', 'Shota', 'Aizawa', 'Male', 100937649, 'Lot 49A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(31, 'tobitochiha', 'chihato@gmail.com', 'liveag4in', 'Obito', 'Uchiha', 'Male', 106374567, 'Lot 67C Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(32, 'redzra', 'ftezra@gmail.com', 'ezra1234', 'Ezra', 'Scarlet', 'Female', 191234567, 'Lot 6570 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(33, 'dabi', 'todorokitoya@gmail.com', '44toya44', 'Toya', 'Todoroki', 'Male', 191233457, 'Lot 98Q Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(34, 'dynamight', 'bakugokatsuki@gmail.com', 'bomber0', 'Katsuki', 'Bakugo', 'Male', 191230007, 'Lot 119A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(35, 'graytail', 'ftfullbuster@gmail.com', 'fu11gr4y', 'Gray', 'Fullbuster', 'Male', 101234567, 'Lot 329B Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(36, 'craftykagune', 'sujuuzou@gmail.com', 'st1ch35', 'Juuzou', 'Suzuya', 'Male', 191009567, 'Lot 1A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(37, 'milkbox', 'kingcourt@gmail.com', 'number3', 'Kageyama', 'Tobio', 'Male', 198784567, 'Lot 878 Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(38, 'letleave', 'osamudazai@gmail.com', 'dazki11', 'Osamu', 'Dazai', 'Male', 140294567, 'Lot 90C Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(39, 'mustangman', 'fmabroy@gmail.com', 'roymust9', 'Roy', 'Mustang', 'Male', 199963767, 'Lot 9A Kawasan Miel Sama Jaya Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(40, 'kaiden', 'kaidenwalker@gmail.com', 'm00nwalk', 'Kaiden', 'Walker', 'Male', 109963767, 'Lot 10 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(41, 'hyj9000', 'huanyj0009@gmail.com', 'yueje9', 'Yue Je', 'Huan', 'Male', 199963767, 'Lot 101 Phase 12 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(42, 'eaJ', 'jaej@gmail.com', '#daysix', 'Jae', 'Park', 'Male', 199113767, 'Lot 98 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(43, 'salomadavis', 'sdavis1987@gmail.com', 'davis87', 'Saloma', 'Davis', 'Female', 199963767, 'Lot 10 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(44, 'littlebird', 'lilbirdy@gmail.com', 'caldly00', 'Caleb', 'Castaneda', 'Male', 109863767, 'Lot 11 Phase 12 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(45, 'amaraleman', 'amaratwice12@gmail.com', '1212mara', 'Amara', 'Lashkov', 'Female', 199098767, 'Lot 310 Phase 1 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(46, 'moonchild', 'nicolezefanya@gmail.com', '88upniki', 'Nicole', 'Zefanya', 'Female', 198376920, 'Lot 20 Phase 3 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(47, 'kaguyasama', 'weeb101@gmail.com', 'jjba2012', 'Joseph', 'Joestar', 'Male', 135663767, 'Lot 87 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(48, 'anikiswag', 'akiralily@gmail.com', 'small600', 'Akira', 'Chen', 'Female', 199963767, 'Lot 10 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(49, 'thegr8khalid', 'khalidthegr8@gmail.com', 'eleven11', 'Khalid', 'Robinson', 'Male', 102363767, 'Lot 210 Phase 3 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(50, 'bl90s', 'brucelee@gmail.com', 'nunchuck', 'Bruce', 'Lee', 'Male', 154363767, 'Lot 120 Phase 7 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(51, 'bananafish', 'ashlynx@gmail.com', 'eijibae', 'Ash', 'Lynx', 'Male', 199963767, 'Lot 140 Phase 7 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(52, 'shortwong', 'shorterwong@gmail.com', 'heather1', 'Shorter', 'Wong', 'Male', 198063767, 'Lot 121 Phase 7 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(53, 'kurookun', 'kurootetsuro@gmail.com', 'nekoma12', 'Kuroo', 'Tetsuro', 'Male', 199912767, 'Lot 3 Phase 1 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(54, 'goofball', 'asahiazumane@gmail.com', 'krsnace', 'Asahi', 'Azumane', 'Male', 187963767, 'Lot 92 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(55, 'chibichan', 'hinatashoyo@gmail.com', 'decoy10', 'Hinata', 'Shoyo', 'Male', 145963767, 'Lot 134 Phase 6 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(56, 'karasunodad', 'daichisan@gmail.com', 'karaichi', 'Daichi', 'Sawamura', 'Male', 107763767, 'Lot 410 Phase 9 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(57, 'deantrbl', 'halfmoon@gmail.com', 'what2do', 'Kwon', 'Hyuk', 'Male', 102363767, 'Lot 76 Phase 3 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(58, 'b.i.', 'hanbin@gmail.com', 'lilsis4L', 'Han Bin', 'Kim', 'Male', 197463767, 'Lot 107 Phase 10 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(59, 'boyfriendmaterial', 'takumiusui@gmail.com', 's1still', 'Usui', 'Takumi', 'Male', 199963767, 'Lot 11 Phase 4 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(60, 'maidsama', 'jpnleader@gmail.com', 'pres101', 'Ayuzawa', 'Misaki', 'Female', 107963767, 'Lot 36 Phase 4 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(61, 'liveactionstar', 'yamizakikento@gmail.com', 'hirotaka', 'Kento', 'Yamizaki', 'Male', 174963767, 'Lot 14 Phase 2 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(62, 'nothorseface', 'jeankristchen@gmail.com', 'mikasa10', 'Jean', 'Kristchen', 'Male', 123963767, 'Lot 151 Phase 6 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(63, 'springerC', 'conniespringer@gmail.com', 'cstitan', 'Connie', 'Springer', 'Male', 199963767, 'Lot 176 Phase 7 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(64, 'potatogirl', 'sashabraus@gmail.com', 'foodie', 'Sasha', 'Braus', 'Female', 176463767, 'Lot 105 Phase 4 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450),
(65, 'kookoo', 'kooyin1982@gmail.com', 'ky1982', 'Koo', 'Yin', 'Female', 193763767, 'Lot 109 Phase 5 Sama Jaya Free Industrial Zone', '', 'Kuching', 'Sarawak', 'Malaysia', 93450);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Code` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ItemDescription` varchar(255) NOT NULL,
  `QtyInStock` int(10) NOT NULL,
  `BuyPrice` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Code`, `Name`, `ItemDescription`, `QtyInStock`, `BuyPrice`) VALUES
(1, 'Espresso', 'Full-flavored, concentrated form of coffee serve in shots', 100, '5.00'),
(2, 'Cappuccino', 'Even layer of espresso, steamed milk and foamed milk topped with brown sugar', 100, '7.00'),
(3, 'Iced Cappuccino', 'Iced even layer of espresso, steamed milk and foamed milk topped with brown sugar', 100, '8.00'),
(4, 'Latte', 'Steamed milk with shot of espresso', 100, '7.00'),
(5, 'Iced Latte', 'Iced steamed milk with shot of espresso', 100, '8.00'),
(6, 'Mocha', 'Latte and premium cocoa powder with whipped cream drizzled with chocolate syrups', 100, '7.00'),
(7, 'Iced Mocha', 'Iced latte and premium cocoa powder with whipped cream drizzled with chocolate syrups', 100, '8.00'),
(8, 'Americano', 'Espresso and water', 100, '7.00'),
(9, 'Iced Americano', 'Iced espresso and water', 100, '8.00'),
(10, 'Hot Chocolate', 'Hot milk stirred with premium cocoa powder', 100, '7.00'),
(11, 'Iced Chocolate', 'Hot milk stirred with premium cocoa powder and ice', 100, '8.00'),
(12, 'Green Tea Latte', 'Matcha powder with vanilla extract, milk and syrup', 100, '7.00'),
(13, 'Iced Green Tea Latte', 'Matcha powder with vanilla extract, milk, syrup and ice', 100, '8.00'),
(14, 'Choco Frappuccino', '‘Chocolate sauce, milk, mocha and ice topped with whipped cream', 100, '10.00'),
(15, 'Peach Tea', 'Black tea served with homemade peach syrup', 100, '7.00'),
(16, 'Lemon Tea', 'Black tea served with zesty lemon', 100, '7.00'),
(17, 'Plain Water', 'Plain water served with preferred temperature', 100, '2.00'),
(18, 'Coca-Cola', 'Refreshing classic coca cola', 100, '3.00'),
(19, 'A&W', 'Mellow and creamy taste soda', 100, '3.00'),
(20, 'Soda Float', 'Your choice of soda with our homemade vanilla ice cream', 100, '4.50'),
(21, 'Chocolate Milkshake', 'Chocolate ice cream with milk, whipped cream, chocolate chips and syrup', 100, '7.00'),
(23, 'Vanilla Milkshake', 'Homemade vanilla ice cream with milk, whipped cream and cinnamon powder on top', 100, '7.00'),
(24, 'Oreo Milkshake', 'Oreo cream n` cookies ice cream with milk, whipped cream and topped with more Oreo cookies', 100, '7.00'),
(25, 'Strawberry Milkshake', 'Strawberry ice cream with milk, whipped cream and fresh strawberry', 100, '7.00'),
(26, 'Classic Waffle', 'Waffle with honey & butter', 100, '6.00'),
(27, 'Belgian Waffle with Ice cream and Syrup', 'Belgian waffle serve with homemade ice cream and maple syrup', 100, '8.00'),
(28, 'Belgian waffle with Ice cream and Banana', 'Belgian waffle serve with homemade ice cream and banana', 100, '10.00'),
(29, 'Belgian Waffle with Ice cream and Oreo', 'Belgian waffle serve with homemade ice cream and Oreo cookies', 100, '8.00'),
(30, 'Belgian Waffle with Ice cream and Strawberry', 'Belgian waffle serve with homemade ice cream and fresh strawberry', 100, '12.00'),
(31, 'Red Velvet Slice', 'Velvety cake with mild taste of chocolate and buttermilk', 10, '9.50'),
(32, 'Dark Forest Slice', 'Chocolate cake with cherries, and whipped cream covered with chocolate shavings', 10, '10.50'),
(33, 'Blueberry Cheese Slice', 'Cheesecake with homemade berry syrup and crushed blueberry', 10, '10.50'),
(34, 'Chocolate Fudge Slice', 'Dense chocolate cake covered with melted chocolate', 10, '10.50'),
(35, 'Matcha Slice', 'Green tea cake layered cream cheese and rained with matcha powder', 10, '9.50'),
(36, 'Tiramisu Slice', 'Ladyfinger cookies, espresso and chocolate cake with cocoa powder', 10, '10.50'),
(37, 'Cannoli', 'Italian pastry filled with handmade cannoli cream', 10, '3.00'),
(38, 'Churros', 'Spanish styled pastry with chocolate dips', 100, '7.00'),
(39, 'Cinnamon Roll', 'Soft pastry made with a simple homemade dough, super fluffy, sweet, spice and light', 10, '3.00'),
(40, 'Curry Puff', 'Deep-fried crescent shaped pastries filled with spicy, sweet and savoury potato filling', 10, '3.00'),
(41, 'Macaron', 'Colourful delicate, tender, sweet meringue with cream', 20, '1.50'),
(42, 'Classic Pretzel', 'Soft knot shaped pastry covered with egg wash and bits of sesame', 10, '4.00'),
(43, 'Classic House Salad', 'Creamy avocado, vibrant tomatoes, crisp cucumber, bright red onions and fresh herbs', 100, '9.00'),
(44, 'Chicken Salad', 'A cool twist on a simple chicken salad, with poached chicken breasts, roasted red bell peppers, toasted almonds, garlic and parsley', 100, '12.00'),
(45, 'Seafood Salad', 'Shrimp and cherry tomatoes, olives, pepperoncini and bell peppers', 100, '15.00'),
(46, 'Soup and Bread', 'Mushroom soup with crispy garlic bread', 100, '12.00'),
(47, 'Aglio Olio', 'Linguini tossed in olive oil. Packed with fragrant herbs, capsicum, slightly spicy with a dash of vibrant chilli flakes', 100, '13.50'),
(48, 'Carbonara', 'Spaghetti with parmesan cheese, egg yolk and cream', 100, '13.00'),
(49, 'Spaghetti Bolognese', 'Spaghetti topped with Bolognese sauce of minced beef or chicken and mozzarella cheese', 100, '13.00'),
(50, 'Pepperoni Cheese', 'Crusty pizza with pepperoni, mozzarella and grated cheese', 100, '20.00'),
(51, 'Hawaiian Chicken', 'Crusty pizza with pineapple, cheese and chicken ham', 100, '20.00'),
(52, 'Mix Pizza', 'Combination of pepperoni cheese and Hawaiian chicken pizza', 100, '32.00'),
(53, 'Chicken Lasagna', 'Homemade chicken lasagna, served with mixed salad', 100, '13.00'),
(54, 'Beef Lasagna', 'Homemade beef lasagna, served with mixed salad', 100, '15.00'),
(55, 'Chicken Wings', 'Six roasted chicken wings marinated with special sauces', 100, '15.00'),
(56, 'Chicken Sandwiches', 'On grain bread, oven roasted chicken breast, cheese, cherry tomatoes, French mustard, light mayo', 100, '15.00'),
(57, 'Beef Sandwiches', 'On grain bread, oven roasted beef, cheese, cherry tomatoes, French mustard, light mayo', 100, '15.00'),
(58, 'French Fries', 'Golden homemade French fries serve with sauce', 100, '7.00'),
(59, 'Mashed Potato', 'Mashed potato with gravy', 100, '7.00'),
(60, 'Mac n’ Cheese', 'Macaroni pasta with prawns and mushroom topped with loads of mozzarella cheese and grilled till melted', 100, '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `CustomerID` int(10) NOT NULL,
  `ItemCode` int(10) NOT NULL,
  `Qty` int(10) NOT NULL,
  `PriceEach` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`CustomerID`, `ItemCode`, `Qty`, `PriceEach`) VALUES
(15, 1, 2, '5.00'),
(45, 2, 2, '7.00'),
(48, 3, 3, '8.00'),
(3, 4, 2, '7.00'),
(58, 5, 2, '8.00'),
(35, 6, 3, '7.00'),
(9, 7, 2, '8.00'),
(51, 8, 2, '7.00'),
(13, 9, 4, '8.00'),
(56, 15, 3, '7.00'),
(10, 10, 3, '7.00'),
(28, 11, 2, '8.00'),
(4, 12, 4, '7.00'),
(1, 13, 3, '8.00'),
(22, 14, 2, '10.00'),
(64, 16, 3, '7.00'),
(50, 15, 6, '7.00'),
(32, 60, 4, '10.00'),
(30, 28, 2, '10.00'),
(54, 26, 5, '6.00'),
(7, 31, 4, '9.50'),
(49, 32, 2, '10.50'),
(36, 60, 3, '10.00'),
(44, 51, 2, '20.00'),
(11, 52, 3, '32.00'),
(61, 20, 7, '4.50'),
(8, 10, 6, '7.00'),
(13, 37, 3, '3.00'),
(52, 38, 4, '7.00'),
(30, 39, 5, '3.00'),
(38, 41, 6, '1.50'),
(65, 42, 4, '4.00'),
(7, 43, 3, '9.00'),
(10, 44, 3, '12.00'),
(15, 47, 7, '13.50'),
(25, 48, 4, '13.00'),
(22, 31, 2, '9.50'),
(6, 53, 2, '13.00'),
(59, 54, 3, '15.00'),
(4, 58, 4, '7.00'),
(40, 59, 3, '7.00'),
(31, 1, 4, '5.00'),
(21, 51, 3, '20.00'),
(44, 55, 2, '15.00'),
(50, 56, 4, '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `CheckNum` varchar(255) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Amount` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`CheckNum`, `CustomerID`, `PaymentDate`, `Amount`) VALUES
('1ok15HRo1a95j1xj', 28, '2020-07-01', '16.00'),
('4dPvKkAU6TrVJR9A', 15, '2020-10-09', '94.50'),
('5X5jCQSK05jO4eWB', 10, '2020-06-30', '21.00'),
('7SyIzZfgO411cEMf', 49, '2020-08-08', '21.00'),
('9BWxHAMmdnN7FHpB', 54, '2020-07-30', '30.00'),
('9eXCmaKc0qm0mK3n', 35, '2020-06-15', '21.00'),
('Apo2IhigtMbU3iqW', 56, '2020-06-25', '21.00'),
('aU8Rioh86ttK0sdf', 30, '2020-09-05', '15.00'),
('BHx5CVgsVt3hQ8B8', 51, '2020-06-24', '14.00'),
('BJwC0owztkpZYwqm', 50, '2021-01-07', '60.00'),
('C6DBXg6qiiWE01qe', 4, '2020-07-05', '28.00'),
('cfSJGYJkdD9P6vis', 40, '2020-11-13', '21.00'),
('cXgX9BwyKhB1s1Ls', 52, '2020-08-19', '28.00'),
('fRCEk4NDLjXmY4VD', 11, '2020-08-15', '96.00'),
('gYVlyZqslIRjDSKk', 6, '2020-10-16', '26.00'),
('HSeJZ3816Nq2SbBT', 1, '2020-07-07', '24.00'),
('Hyi1I8WiyKCAfeGa', 25, '2020-10-12', '52.00'),
('IhENlysfvI6c9RZB', 22, '2020-07-08', '20.00'),
('ioTLKPILGEWSfORb', 44, '2020-08-10', '40.00'),
('JkFgL3vxl2TLGYwB', 4, '2020-10-18', '28.00'),
('JMUMmPgtudM8Orvr', 13, '2020-06-25', '32.00'),
('KDGoJyneWMm5cqjb', 15, '2021-01-12', '10.00'),
('mIZSFE0aLywk5tqM', 7, '2020-08-01', '38.00'),
('O7EydzydBE7IcIxg', 30, '2020-07-19', '20.00'),
('oKGlx26cYceuUQ6E', 8, '2020-08-18', '42.00'),
('oqY04p0ydJhfbzTN', 9, '2020-06-23', '16.00'),
('P9OKzDUd0NFU4Fx6', 22, '2020-10-15', '19.00'),
('r0PQkuwLjpDQqibK', 44, '2020-12-20', '30.00'),
('RIbMOb9Ii1lBafsl', 9, '2021-01-10', '16.00'),
('ROAgj6ubZkCyiFBa\r\n', 3, '2020-06-12', '14.00'),
('sEOiaatkf1fi8wAC', 58, '2020-06-12', '16.00'),
('TETE9P4RALoYoj7U', 13, '2020-08-19', '9.00'),
('tGw4S5NANSXzcX0d', 3, '2021-01-10', '14.00'),
('tZORXbFW5vNJMyqb', 38, '2020-09-09', '9.00'),
('ulLPa5pUgXFBKSIX', 64, '2020-07-09', '21.00'),
('utDQZdQeCkiGtcUj', 50, '2020-07-01', '42.00'),
('vbi3T8fe5GeqI9EN', 65, '2020-09-12', '12.00'),
('vEfx5S3J16V1mprs', 61, '2020-08-17', '31.50'),
('VlRbuVblczjz3sDG', 7, '2020-09-18', '27.00'),
('VPHzimiCCIpN1y0Z', 31, '2020-11-19', '20.00'),
('w3KdFahLESDm9eZG', 21, '2020-12-17', '60.00'),
('Wv11txiTJGMez0eU', 10, '2020-10-09', '36.00'),
('xTiD5keYnBZoRSxE', 32, '2020-07-12', '40.00'),
('ZTMIyrsiXhpRPQQZ', 59, '2020-10-17', '45.00'),
('zzhuzAtape6nCdss', 36, '2020-08-09', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `Rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `CustomerID`, `Comment`, `Rating`) VALUES
(1, 15, 'My food arrive warm and delicious! Thank You!', 5),
(2, 20, 'I stumbled on this undiscovered gem right in our neighborhood. I want to hire their decorator to furnish my house. Try out the huge selection of incredible appetizers. I was happy to see how clean everything was. Everything was mostly decadent.', 5),
(3, 39, 'nyaman ehh makseh', 5),
(4, 2, 'the ice cream was sooooo goood but my waffle was a bit soggy, i hope they can separate the packaging ', 4),
(5, 40, 'I hope the pandemic is over because I would love to dine-in here with my family. The pizza was hella good', 5),
(6, 56, 'Definitely will order here again!', 5),
(7, 38, 'i can\'t get enough with your peach tea!!!!', 5),
(8, 37, 'the coffee selection always hot, rich and aromatic, but the other day the taste changed a bit. perhaps different barista?', 5),
(9, 19, 'thank you for accepting my last minute large order! such efficient and reliable also the food is just *chef\'s kiss*!', 5),
(10, 38, 'Oh! My! God! So yummy! Everything was simply decadent. Everything I tried was bursting with flavor. This is definitely a spot I\'ll be frequenting.', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD KEY `FKOrder556711` (`CustomerID`),
  ADD KEY `FKOrder511704` (`ItemCode`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`CheckNum`),
  ADD KEY `FKPayment75777` (`CustomerID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKReview380693` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FKOrder511704` FOREIGN KEY (`ItemCode`) REFERENCES `item` (`Code`),
  ADD CONSTRAINT `FKOrder556711` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FKPayment75777` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FKReview380693` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
