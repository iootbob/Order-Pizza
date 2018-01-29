-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE `classic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`id`, `name`, `summary`, `product_id`) VALUES
(1, 'Cheese', 'Double layer of Mozarella', 1),
(2, 'NY ', 'Pepperoni', 2),
(3, 'Pepperoni and Mushroom', 'Pepperoni and button Mushrooms', 3),
(4, 'Manhattan Meatlovers', 'Ham, Pepperoni, Italian Sausage, Ground Beef, Salami, and Bacon', 4),
(5, 'Garden Special', 'Fresh tomatoes, Black Olives, Mushrooms, Onions, Red and Green Bell Peppers', 5),
(6, 'Hawaiian', 'Ham, Pineapple, Bacon', 6),
(7, 'NY\'s Finest', 'Italian Sausage, Ham, Pepperoni, Bacon, Ground Beef, Black olives, Mushroom, Onions, Red and Green Bell Peppers', 7);

-- --------------------------------------------------------

--
-- Table structure for table `classic_price`
--

CREATE TABLE `classic_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `medium` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `classic_price`
--

INSERT INTO `classic_price` (`id`, `name`, `small`, `medium`, `large`, `product_id`) VALUES
(1, 'Cheese', 62, 105, 200, 1),
(2, 'NY Classic', 30, 70, 100, 2),
(3, 'Pepperoni and Mushroom', 18, 50, 70, 3),
(4, 'Manhattan Meatlovers', 60, 100, 120, 4),
(5, 'Garden Special', 80, 110, 160, 5),
(6, 'Hawaiian', 90, 120, 150, 6),
(7, 'New York\'s Finest', 35, 70, 119, 7);

-- --------------------------------------------------------

--
-- Table structure for table `order_pizza`
--

CREATE TABLE `order_pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `order_pizza`
--

INSERT INTO `order_pizza` (`id`, `name`, `quantity`, `price`, `subtotal`, `order_id`) VALUES
(7, 'Cheese', 1, 50, 50, 1),
(8, 'NY Classic', 3, 100, 300, 1),
(9, 'Pepperoni and Mushroom', 1, 70, 70, 1),
(10, 'Cheese', 1, 50, 50, 2),
(11, 'NY Classic', 3, 100, 300, 2),
(12, 'Pepperoni and Mushroom', 5, 50, 250, 2),
(13, 'Cheese', 2, 105, 210, 3),
(14, 'Cheese', 3, 50, 150, 4),
(15, 'Anchovy Lovers', 2, 100, 200, 4),
(16, 'Cheese', 2, 200, 400, 5),
(17, 'Cheese', 3, 50, 150, 6),
(18, 'Tribeca Mushroom', 4, 50, 200, 7),
(19, 'Cheese', 2, 10, 20, 8),
(20, 'Cheese', 1, 11, 11, 8),
(21, 'Cheese toppings', 1, 22, 22, 9),
(22, 'NY Classic', 3, 30, 90, 9),
(23, 'Manhattan Meatlovers', 2, 60, 120, 9),
(24, 'Cheese', 2, 200, 400, 10),
(25, 'NY Classic', 1, 100, 100, 10),
(26, 'Cheese toppings', 1, 30, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `summary`, `product_id`) VALUES
(1, 'Tribeca Mushroom', 'Shitake, Button and Oyster Mushroom', 8),
(2, 'Anchovy Lovers', 'Black Olives, Anchovies, Capers Roasted Garlic, Mushroom and Onions', 9),
(3, '#4 Cheese', 'Cheese Heaven! Mozzarella, Cheddar, Fontina and Feta', 10),
(4, 'Corona Chicken Salsa', 'Tangy strips of Chicken with Southwestern Salsa', 11),
(5, 'Gourmet Garden', 'Zucchini, Grilled Eggplant, Fresh tomatoes, Black Olives, Capers, Mushroom and Onions, Red and Green Bell Peppers', 12),
(6, 'Roasted Garlic Shrimp', 'Shrimp, Onions, Roasted Garlic in Wine Butter Sauce', 13),
(7, 'Four Seasons', 'Gourmet Sampler, NY Classic, #4 Cheese, Anchovy lovers, Roasted Garlic and Shrimp', 14);

-- --------------------------------------------------------

--
-- Table structure for table `special_price`
--

CREATE TABLE `special_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `medium` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `special_price`
--

INSERT INTO `special_price` (`id`, `name`, `small`, `medium`, `large`, `product_id`) VALUES
(1, 'Tribeca Mushroom', 55, 105, 200, 8),
(2, 'Anchovy Lovers', 30, 70, 100, 9),
(3, '#4 Cheese', 18, 50, 70, 10),
(4, 'Corona Chicken Salsa', 60, 110, 120, 11),
(5, 'Gourmet Garden', 80, 110, 160, 12),
(6, 'Roasted Garlic and Shrimp', 90, 120, 150, 13),
(7, 'Four Seasons', 35, 70, 120, 14);

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE `toppings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `medium` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppings`
--

INSERT INTO `toppings` (`id`, `name`, `small`, `medium`, `large`, `product_id`) VALUES
(1, 'Cheese toppings', 22, 20, 30, 15),
(2, 'Bacon toppings', 40, 50, 60, 16),
(3, 'Ground Beef toppings', 70, 80, 90, 17),
(4, 'Ham toppings', 100, 110, 120, 18),
(5, 'Italian Sausage toppings', 130, 140, 150, 19),
(6, 'Pepperoni toppings', 160, 170, 180, 20),
(7, 'Salami toppings', 190, 200, 210, 21),
(8, 'Capers toppings', 220, 230, 240, 22),
(9, 'Roasted Garlic toppings', 250, 260, 270, 23),
(10, 'Bell Peppers toppings', 280, 290, 300, 24),
(11, 'Mushrooms toppings', 310, 320, 330, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classic`
--
ALTER TABLE `classic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classic_price`
--
ALTER TABLE `classic_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_pizza`
--
ALTER TABLE `order_pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_price`
--
ALTER TABLE `special_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppings`
--
ALTER TABLE `toppings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classic`
--
ALTER TABLE `classic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `classic_price`
--
ALTER TABLE `classic_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_pizza`
--
ALTER TABLE `order_pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `special_price`
--
ALTER TABLE `special_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `toppings`
--
ALTER TABLE `toppings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
