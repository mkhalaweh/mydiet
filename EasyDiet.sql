-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 08:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EasyDiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(250) NOT NULL,
  `user_last` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_usrname` varchar(250) NOT NULL,
  `user_pswrd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`user_id`, `user_first`, `user_last`, `user_email`, `user_usrname`, `user_pswrd`) VALUES
(1, 'dietitian', 'user', 'dietitian@mydiet.com', 'dietitian', '$2y$10$o9hAglUbsrakLcbl3WNbw.efSdIIDhn8Gowkiauib/ex7MqGywxyG'),
(2, 'admin', 'user', 'admin@mydiet.com', 'admin', '$2y$10$TRGJ9v1i7eDdJWZgLWtef./.pjwLuOSguJdTVwqGqY5T4P2mJuXwK'),
(3, 'Hamza', 'Halaweh', 'hhalaweh@gmail.com', 'hhalaweh', '$2y$10$qjP34z/WIiXCuPl7/bzcG.Vs0PtFdKvtvwscOAR4bXm9DGQwXPKCG'),
(4, 'Hiba', 'ElSayed', 'hibarachid@hotmail.com', 'athletehiba', '$2y$10$EnHyMkM6/2rMDpFmyvdlCuR8CImKrcygz5SNTjRw9/1jPlXBNZd1q'),
(5, 'Ayed', 'Naber', 'ayed.naber@hotmail.com', 'abul3od', '$2y$10$7eSuW/aCeDHNznYNeH8PzuXLpWA.dfmdEqj5xD62XPgdN.kLE7/fG'),
(6, 'Khalid', 'Halaweh', 'khalaweh@gmail.com', 'khalaweh', '$2y$10$oduDqABD68O73jGowEFh8u/sOPxmir1mvZGrokET.jnG7DeTZ2eZm'),
(7, 'User', 'User', 'user@email.com', 'user', '$2y$10$izm2Fs6WDgskdgaufXJHcORu.q7Zz/I3Pbm6WLrwO1AqfBZZToUOi'),
(9, 'Mohamad', 'Halaweh', 'halaweh@gmail.com', 'halaweh', '$2y$10$YeAYwPKYycPrQhCFvoONru5f/LylNcriGdbUlZnWr2.iXbayO.rM2'),
(10, 'Zaid', 'Issa', 'zaid.issa@gmail.com', 'zaidadoo123', '$2y$10$PzxUBRtA8JUCjfBMHQjS2.dDaYNZosmHvVfW7BV4BQCpb7ydOtO8G'),
(11, 'Mohammad', 'Bashabsheh', 'mbash101@fortnite.com', 'mbash101', '$2y$10$j3bmmNlMnfAwyOhio8Uh1eHHOE40EBhpmsyxcOUqQ0N8F05xGVD1e'),
(12, 'Hani', 'Hawari', 'hani.hawari@gmail.com', 'hanihawari', '$2y$10$Y0am9/RSJWBCyzFI1N/6euqOozCwS5mfLeneep/QCyEqLdVFgoG7a'),
(13, 'omar', 'masoud', 'omar.masoud@gmail.com', 'omarmasoud123', '$2y$10$Ai4Xg996Ym.U3BPqOE0RseIeLda.SoX8MOKdJtfhCMKuxzPgc91v6'),
(14, 'David', 'Nash', 'davidnash@gmail.com', 'DavidN123', '$2y$10$5Kn7PDpkPDLig3bnQ/luAugUrG99iPLFVU2rWuat.CnqldNFKPI0i');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `subject` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `senderu` varchar(250) NOT NULL,
  `id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`subject`, `message`, `sender`, `senderu`, `id`) VALUES
('Exercises', 'Dr Ahmad, I was wondering if I had to do any exercises that can help boost my progress?', 'David Nash', 'DavidN123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `infod`
--

CREATE TABLE `infod` (
  `reciever` varchar(250) DEFAULT NULL,
  `reply` varchar(1000) DEFAULT NULL,
  `id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infod`
--

INSERT INTO `infod` (`reciever`, `reply`, `id`) VALUES
('DavidN123', 'if you can do some exercises that would be great, some examples would be .......', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meals2`
--

CREATE TABLE `meals2` (
  `name` varchar(250) NOT NULL,
  `mealname` varchar(60) DEFAULT NULL,
  `sunday` varchar(60) DEFAULT NULL,
  `monday` varchar(60) DEFAULT NULL,
  `tuesday` varchar(60) DEFAULT NULL,
  `wednesday` varchar(60) DEFAULT NULL,
  `thursday` varchar(60) DEFAULT NULL,
  `friday` varchar(60) DEFAULT NULL,
  `saturday` varchar(60) DEFAULT NULL,
  `reminder` int(20) DEFAULT NULL,
  `cmnt` varchar(500) DEFAULT NULL,
  `id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals2`
--

INSERT INTO `meals2` (`name`, `mealname`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `reminder`, `cmnt`, `id`) VALUES
('athletehiba', 'Snack', '', 'asdasdasad', '', 'asdasdasdsa', '', '', '', 0, 'Hello whats up boii here is a comment, enjoy my friend\r\ndont forget to do some exercises,\r\nsuch as some pushups and setup to burn the fat in your body', 86),
('athletehiba', 'Lunch', '', '', 'asdasdadsa', '', 'asddasdad', 'asdasdasdas', 'asasdasas', 0, 'Hello whats up boii here is a comment, enjoy my friend\r\ndont forget to do some exercises,\r\nsuch as some pushups and setup to burn the fat in your body', 87),
('athletehiba', 'Snack', '', '', '', 'dsadadsa', '', '', '', 0, 'Hello whats up boii here is a comment, enjoy my friend\r\ndont forget to do some exercises,\r\nsuch as some pushups and setup to burn the fat in your body', 88),
('athletehiba', 'Dinner', 'dsasdasdas', 'asdasasd', 'saddsadas', '', 'adssadsas', '', 'asdasdad', 0, 'Hello whats up boii here is a comment, enjoy my friend\r\ndont forget to do some exercises,\r\nsuch as some pushups and setup to burn the fat in your body', 89),
('athletehiba', 'Snack', '', '', '', 'dsadadsa', '', '', '', 0, 'Hello whats up boii here is a comment, enjoy my friend\r\ndont forget to do some exercises,\r\nsuch as some pushups and setup to burn the fat in your body', 90),
('hhalaweh', 'Breakfast', 'Avocado', 'Eggs', 'Sandwich', 'Waffles', 'Cereal', 'Salad', 'Avocado', 0, '', 91),
('hhalaweh', 'Snack', 'Apple', 'Orange', 'Banana', 'Peach', 'Strawberry', 'Grapes', 'Watermelon', 0, '', 92),
('hhalaweh', 'Lunch', 'Chicken', 'Meat', 'Turkey', 'Mlokheyeh', 'Fish', 'Meat', 'Chicken', 0, '', 93),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 94),
('hhalaweh', 'Dinner', 'Sandwich', 'Sandwich', 'Fruits', 'Cereal', 'Vegetables', 'Eggs', 'Fruits', 0, '', 95),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 96),
('hhalaweh', 'Breakfast', 'Avocado', 'sandwich', 'Labneh with Olive Oil', 'Waffle', 'Eggs', 'Salad', 'Ceral', 0, '', 97),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 98),
('hhalaweh', 'Lunch', 'Meat', 'Chicken', 'Meat', 'Chicken', 'Chicken', 'Chicken', 'Chicken', 0, '', 99),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 100),
('hhalaweh', 'Dinner', 'Labneh', 'Cereal', 'Sandwich', 'Eggs', 'Waffles', 'Rice', 'Meat', 0, '', 101),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 102),
('hhalaweh', 'Breakfast', 'Avocado', 'Eggs', 'Sandwich', 'Cereal', 'Waffles', 'Pancakes', 'Sandwich', 0, '', 103),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 104),
('hhalaweh', 'Lunch', 'Meat', 'Chicken', 'Meat', 'Chicken', 'Meat', 'Chicken', 'Meat', 0, '', 105),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 106),
('hhalaweh', 'Dinner', 'Sandwich', 'Fruits', 'Fruits', 'Vegetables', 'Avocado', 'Salmon', 'Fruits', 0, '', 107),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, '', 108),
('athletehiba', 'Breakfast', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, 'test test test test test test test test test test test', 109),
('athletehiba', 'Snack', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 110),
('athletehiba', 'Lunch', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 111),
('athletehiba', 'Snack', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 112),
('athletehiba', 'Dinner', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 113),
('athletehiba', 'Snack', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 114),
('athletehiba', 'Breakfast', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, '16', 115),
('athletehiba', 'Snack', '', '', '', '', '', '', '', 0, NULL, 116),
('athletehiba', 'Lunch', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 117),
('athletehiba', 'Snack', '', '', '', '', '', '', '', 0, NULL, 118),
('athletehiba', 'Dinner', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 119),
('athletehiba', 'Snack', '', '', '', '', '', '', '', 0, NULL, 120),
('hhalaweh', 'Breakfast', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, '$date', 121),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, NULL, 122),
('hhalaweh', 'Lunch', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 123),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, NULL, 124),
('hhalaweh', 'Dinner', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, NULL, 125),
('hhalaweh', 'Snack', '', '', '', '', '', '', '', 0, NULL, 126),
('abul3od', 'Breakfast', '', '', '', '', '', '', '', 1575558865, '', 163),
('abul3od', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 164),
('abul3od', 'Lunch', '', '', '', '', '', '', '', NULL, NULL, 165),
('abul3od', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 166),
('abul3od', 'Dinner', '', '', '', '', '', '', '', NULL, NULL, 167),
('abul3od', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 168),
('khalaweh', 'Breakfast', '', '', '', '', '', '', '', 1540390230, '', 169),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 170),
('khalaweh', 'Lunch', '', '', '', '', '', '', '', NULL, NULL, 171),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 172),
('khalaweh', 'Dinner', '', '', '', '', '', '', '', NULL, NULL, 173),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 174),
('User', 'Breakfast', 'Sandwich', 'Yogurt', 'Eggs', 'Bacon', 'Cereal', 'Toast and Butter', 'Waffles', 1542390368, '', 175),
('User', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 176),
('User', 'Lunch', '3 Pieces of Chicken', 'Ground Beef with Rice', 'Chicken Curry', 'Salmon Fish', '300g of Turkey and Rice', 'Burger', 'Chicken Wings', NULL, NULL, 177),
('User', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 178),
('User', 'Dinner', 'Baked Beans', 'Marinated Steak', 'Oatmeal with Fruits', 'Hotdogs', 'Tex Mex', 'Fish Tacos with Mango Salsa', 'Mac and Cheese', NULL, NULL, 179),
('User', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 180),
('khalaweh', 'Breakfast', 'lololol', '', '', '', '', '', '', 1542463119, '', 181),
('khalaweh', 'Snack', '', 'lolololol', '', '', '', '', '', NULL, NULL, 182),
('khalaweh', 'Lunch', '', '', 'lololol', '', '', '', '', NULL, NULL, 183),
('khalaweh', 'Snack', '', '', '', 'lololol', '', '', '', NULL, NULL, 184),
('khalaweh', 'Dinner', '', '', '', '', 'lololol', '', 'lololol', NULL, NULL, 185),
('khalaweh', 'Snack', '', '', '', 'lololol', '', '', '', NULL, NULL, 186),
('khalaweh', 'Breakfast', 'lololol', '', '', '', '', '', '', 1542463183, '', 187),
('khalaweh', 'Snack', '', 'lolololol', '', '', '', '', '', NULL, NULL, 188),
('khalaweh', 'Lunch', '', '', 'lololol', '', '', '', '', NULL, NULL, 189),
('khalaweh', 'Snack', '', '', '', 'lololol', '', '', '', NULL, NULL, 190),
('khalaweh', 'Dinner', '', '', '', '', 'lololol', '', 'lololol', NULL, NULL, 191),
('khalaweh', 'Snack', '', '', '', 'lololol', '', '', '', NULL, NULL, 192),
('khalaweh', 'Breakfast', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 1548784974, '', 193),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 194),
('khalaweh', 'Lunch', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', NULL, NULL, 195),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 196),
('khalaweh', 'Dinner', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', 'lololol', NULL, NULL, 197),
('khalaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 198),
('halaweh', 'Breakfast', 'Sandwich', 'Cereal', 'Cheeses and Jam', 'Oatmeal', 'Cereal', 'Oatmeal', 'Pancakes', 1548839745, '', 199),
('halaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 200),
('halaweh', 'Lunch', 'Chicken', 'Meat', 'Fish', 'Chicken', 'Meat', 'Fish', 'Chicken', NULL, NULL, 201),
('halaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 202),
('halaweh', 'Dinner', 'Avocado', 'Sandwich', 'Oatmeal with Fruits', 'Eggs', 'Fruits', 'Eggs', 'Avocado', NULL, NULL, 203),
('halaweh', 'Snack', '', '', '', '', '', '', '', NULL, NULL, 204),
('zaidadoo123', 'Breakfast', 'Eggs', 'Sandwich', 'Cereal', 'Oatmeal', 'Eggs', 'Cheesecake', 'Oatmeal', 1549212046, '', 205),
('zaidadoo123', 'Snack', 'Sandwich', 'Biscuits', 'Sardine', 'Tuna', 'Toast', 'Chocolate Bar', 'Chips', NULL, NULL, 206),
('zaidadoo123', 'Lunch', 'Chicken', 'Meat', 'Fish', 'Chicken', 'Meat', 'Fish', 'Pork', NULL, NULL, 207),
('zaidadoo123', 'Snack', 'Crackers', 'Biscuits', 'Chips', 'Cake', 'Yoghurt', 'Tuna', 'Beef Bacon', NULL, NULL, 208),
('zaidadoo123', 'Dinner', 'Fish', 'Sandwich', 'Fruits', 'Avocado', 'Tuna', 'Oatmeal', 'Fruits', NULL, NULL, 209),
('zaidadoo123', 'Snack', 'Tuna', 'Sardine', 'Crackers', 'Biscuit', 'Chocolate Bar', 'Toast', 'Chips', NULL, NULL, 210),
('zaidadoo123', 'Breakfast', 'Eggs', 'Oatmeal', 'Eggs', 'Oatmeal', 'Eggs', 'Cereal', 'Fruits', 1549213528, '', 211),
('zaidadoo123', 'Snack1', 'Biscuits', 'Labaneh', 'Sandwich', 'Avocado', 'Fruits', 'Chocolate Bar', 'Pudding', NULL, NULL, 212),
('zaidadoo123', 'Lunch', 'Chicken Curry', 'Meatballs', 'Turkey', 'Fish', 'Hotdogs', 'Indomi', 'Pasta', NULL, NULL, 213),
('zaidadoo123', 'Snack2', 'Biscuits', 'Chocolate', 'Pudding', 'Yoghurt', 'Laban', 'Sandwich', 'Fishy', NULL, NULL, 214),
('zaidadoo123', 'Dinner', 'Sandwich', 'Fruits', 'Eggs', 'Pizza', 'Pasta', 'Oatmeal', 'Tuna', NULL, NULL, 215),
('zaidadoo123', 'Snack3', 'Biscuits', 'Avocado', 'Oatmeal', 'Cereal', 'Chocolate', 'Tuna', 'Sandwich', NULL, NULL, 216),
('mbash101', 'Breakfast', '21', '18', '15', '12', '9', '6', '3', 1551644454, '', 217),
('mbash101', 'Snack1', '', '', '', '', '', '', '', NULL, '', 218),
('mbash101', 'Lunch', '20', '17', '14', '11', '8', '5', '2', NULL, '', 219),
('mbash101', 'Snack2', '', '', '', '', '', '', '', NULL, '', 220),
('mbash101', 'Dinner', '19', '16', '13', '10', '7', '4', '1', NULL, '', 221),
('mbash101', 'Snack3', '', '', '', '', '', '', '', NULL, '', 222),
('hanihawari', 'Breakfast', '21', '18', '15', '12', '9', '6', '3', 1551521026, '', 223),
('hanihawari', 'Snack1', '', '', '', '', '', '', '', NULL, '', 224),
('hanihawari', 'Lunch', '20', '17', '14', '400', '8', '5', '2', NULL, '', 225),
('hanihawari', 'Snack2', '', '', '', '', '', '', '', NULL, '', 226),
('hanihawari', 'Dinner', '19', '16', '13', '10', '7', '7', '1', NULL, '', 227),
('hanihawari', 'Snack3', '', '', '', '', '', '', '', NULL, '', 228),
('omarmasoud123', 'Breakfast', '1', '4', '7', '10', '13', '16', '19', 1551642582, '', 229),
('omarmasoud123', 'Snack1', '', '', '', '', '', '', '', NULL, NULL, 230),
('omarmasoud123', 'Lunch', '2', '5', '8', '11', '14', '17', '20', NULL, NULL, 231),
('omarmasoud123', 'Snack2', '', '', '', '', '', '', '', NULL, NULL, 232),
('omarmasoud123', 'Dinner', '3', '6', '9', '12', '15', '18', '21', NULL, NULL, 233),
('omarmasoud123', 'Snack3', '', '', '', '', '', '', '', NULL, NULL, 234),
('DavidN123', 'Breakfast', '1', '4', '7', '10', '13', '16', '19', 1551643358, '', 235),
('DavidN123', 'Snack1', '', '', '', '', '', '', '', NULL, NULL, 236),
('DavidN123', 'Lunch', '2', '5', '8', '11', '14', '17', '20', NULL, NULL, 237),
('DavidN123', 'Snack2', '', '', '', '', '', '', '', NULL, NULL, 238),
('DavidN123', 'Dinner', '3', '6', '6', '12', '15', '18', '21', NULL, NULL, 239),
('DavidN123', 'Snack3', '', '', '', '', '', '', '', NULL, NULL, 240);

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(100) NOT NULL,
  `famnt` int(60) NOT NULL,
  `wamnt` int(60) NOT NULL,
  `musclem` int(60) NOT NULL,
  `bonem` int(60) NOT NULL,
  `bmi` int(60) NOT NULL,
  `height` int(60) NOT NULL,
  `weight` int(60) NOT NULL,
  `sender` varchar(60) NOT NULL,
  `senderu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statusinfo`
--

CREATE TABLE `statusinfo` (
  `id` int(255) NOT NULL,
  `weekday` text NOT NULL,
  `meal` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `sender` varchar(80) NOT NULL,
  `senderu` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infod`
--
ALTER TABLE `infod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals2`
--
ALTER TABLE `meals2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusinfo`
--
ALTER TABLE `statusinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infod`
--
ALTER TABLE `infod`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meals2`
--
ALTER TABLE `meals2`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statusinfo`
--
ALTER TABLE `statusinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
