-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 05:51 PM
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
  `Password` varchar(25) NOT NULL,
  `StoreCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1000, 'erwinsmith', 'erwinsmith', 'erwin1014', 'Erwin', 'Smith', 'Male', 107654321, 'G Central Park Commercial Centre 317 Jln Tun Ahmad Zaidi Adruce Central Park ', '', 'Kuching', 'Sarawak', 'Malaysia', 93150),
(1001, 'dprian', 'dprian@gmail.com', '5starCL', 'Christian', 'Yu', 'Male', 191234567, 'Lot 10 Phase Ii Sama Jaya Free Industrial Zone ', '', 'Kuching', 'Sarawak', 'Malaysia', 93450);

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
(16, 'Peach Tea', 'Black tea served with zesty lemon', 100, '7.00'),
(17, 'Plain Water', 'Plain water served with preferred temperature', 100, '2.00'),
(18, 'Coca-Cola', 'Refreshing classic coca cola', 100, '3.00'),
(19, 'A&W', 'Mellow and creamy taste soda', 100, '3.00'),
(20, 'Soda Float', 'Your choice of soda with our homemade vanilla ice cream', 100, '4.50'),
(21, 'Chocolate Milkshake', 'Chocolate ice cream with milk, whipped cream, chocolate chips and syrup', 100, '7.00'),
(22, 'Vanilla Milkshake', 'ice cream with milk, whipped cream', 100, '7.00'),
(23, 'Milkshake', 'Homemade vanilla ice cream with milk, whipped cream and cinnamon powder on top', 100, '7.00'),
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `OrderTime` time(6) NOT NULL,
  `OrderDate` date NOT NULL,
  `Shopping_CartOrder_ItemID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `CustomerID`, `OrderTime`, `OrderDate`, `Shopping_CartOrder_ItemID`) VALUES
(1, 1000, '14:00:10.795000', '2021-01-11', 1),
(2, 1000, '14:00:10.111000', '2021-01-11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `ID` int(10) NOT NULL,
  `ItemCode` int(10) NOT NULL,
  `Qty` int(10) NOT NULL,
  `PriceEach` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`ID`, `ItemCode`, `Qty`, `PriceEach`) VALUES
(1, 33, 2, '10.50'),
(2, 19, 2, '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `OrderQueue` int(10) NOT NULL,
  `OrderID` int(10) NOT NULL,
  `OrderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`OrderQueue`, `OrderID`, `OrderStatus`) VALUES
(1, 1, 'Booked and will be delivered on time.'),
(2, 2, 'Booked and will be delivered on time.');

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

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `Receipt` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `PaymentCheckNum` varchar(255) NOT NULL,
  `OrderID` int(10) NOT NULL,
  `GenerateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `Order_ItemID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`Order_ItemID`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Order_ListOrderQueue` int(10) NOT NULL,
  `StoreCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Code` int(10) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `PostalCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKAdministra475433` (`StoreCode`);

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD KEY `FKMenu452447` (`ItemCode`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKOrder556711` (`CustomerID`),
  ADD KEY `FKOrder625383` (`Shopping_CartOrder_ItemID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKOrder_Item307080` (`ItemCode`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`OrderQueue`),
  ADD KEY `FKOrder_List286387` (`OrderID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`CheckNum`),
  ADD KEY `FKPayment75777` (`CustomerID`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`Receipt`),
  ADD KEY `FKReceipt921862` (`CustomerID`),
  ADD KEY `FKReceipt156158` (`PaymentCheckNum`),
  ADD KEY `FKReceipt25420` (`OrderID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKReview380693` (`CustomerID`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`Order_ItemID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKStaff882782` (`Order_ListOrderQueue`),
  ADD KEY `FKStaff2713` (`StoreCode`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `OrderQueue` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `Receipt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `Code` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `FKAdministra475433` FOREIGN KEY (`StoreCode`) REFERENCES `store` (`Code`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FKMenu452447` FOREIGN KEY (`ItemCode`) REFERENCES `item` (`Code`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FKOrder556711` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `FKOrder625383` FOREIGN KEY (`Shopping_CartOrder_ItemID`) REFERENCES `shopping_cart` (`Order_ItemID`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `FKOrder_Item307080` FOREIGN KEY (`ItemCode`) REFERENCES `item` (`Code`);

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `FKOrder_List286387` FOREIGN KEY (`OrderID`) REFERENCES `order` (`ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FKPayment75777` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `FKReceipt156158` FOREIGN KEY (`PaymentCheckNum`) REFERENCES `payment` (`CheckNum`),
  ADD CONSTRAINT `FKReceipt25420` FOREIGN KEY (`OrderID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `FKReceipt921862` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FKReview380693` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `FKShopping_C101954` FOREIGN KEY (`Order_ItemID`) REFERENCES `order_item` (`ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `FKStaff2713` FOREIGN KEY (`StoreCode`) REFERENCES `store` (`Code`),
  ADD CONSTRAINT `FKStaff882782` FOREIGN KEY (`Order_ListOrderQueue`) REFERENCES `order_list` (`OrderQueue`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
