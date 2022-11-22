-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2022 at 12:03 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acorntrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_bitwallet`
--

CREATE TABLE `mastertraderfx_bitwallet` (
  `id` int(11) NOT NULL,
  `btc_wallet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_bitwallet`
--

INSERT INTO `mastertraderfx_bitwallet` (`id`, `btc_wallet`) VALUES
(1, '18yjfkLoZxfcFhytmkxY5koMbrjxzEdx'),
(2, 'o9o'),
(3, 'o9o'),
(4, 'o9o'),
(5, 'o9o'),
(6, 'uoeerjoiejroerieorjeorneui'),
(7, '18yjfkLoZxfcFhytmkxY5koMbrjxzEdx');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_countdays`
--

CREATE TABLE `mastertraderfx_countdays` (
  `id` int(225) NOT NULL,
  `date_1` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_countdays`
--

INSERT INTO `mastertraderfx_countdays` (`id`, `date_1`) VALUES
(1, 'Sun/Nov/2020'),
(2, 'Sat/Nov/2020'),
(3, 'Mon/Nov/2020'),
(4, 'Tue/Dec/2020'),
(5, 'Wed/Dec/2020'),
(6, 'Sat/Jan/2021'),
(7, 'Mon/Jan/2021');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_invest`
--

CREATE TABLE `mastertraderfx_invest` (
  `id` int(11) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `invest_id` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `plan` varchar(225) NOT NULL,
  `duration` varchar(225) NOT NULL,
  `due_duration` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `payment_mode` varchar(225) NOT NULL,
  `date1` varchar(225) NOT NULL,
  `time1` varchar(225) NOT NULL,
  `earn_amount` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_invest`
--

INSERT INTO `mastertraderfx_invest` (`id`, `user_id`, `invest_id`, `status`, `fullname`, `email`, `plan`, `duration`, `due_duration`, `amount`, `payment_mode`, `date1`, `time1`, `earn_amount`) VALUES
(1, '89838877', '117364HYU', 'active', 'acorns', 'ofogoziechisom@gmail.com', 'START PACK', '', '', '57', 'Riple', 'Sun, 28-03-2021', '11:36:06pm', '285'),
(2, '89838877', '515388HYU', 'active', 'acorns', 'ofogoziechisom@gmail.com', 'SILVER', '', '', '4000', 'Lite Coin', 'Fri, 20-08-2021', '02:20:31pm', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_ipadress`
--

CREATE TABLE `mastertraderfx_ipadress` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_ipadress`
--

INSERT INTO `mastertraderfx_ipadress` (`id`, `ip_address`, `date1`) VALUES
(1, 'my address', 'Sat/Nov/2020');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_member`
--

CREATE TABLE `mastertraderfx_member` (
  `id` int(11) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `reg_date` varchar(225) NOT NULL,
  `reg_time` varchar(225) NOT NULL,
  `reg_downlineCode` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `s_question` varchar(225) NOT NULL,
  `s_answer` varchar(225) NOT NULL,
  `user_downline` varchar(225) NOT NULL,
  `btc_walletAddress` varchar(225) NOT NULL,
  `user_ipaddress` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `last_seen` varchar(225) NOT NULL,
  `downline_username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_member`
--

INSERT INTO `mastertraderfx_member` (`id`, `user_id`, `reg_date`, `reg_time`, `reg_downlineCode`, `fullname`, `email`, `password`, `s_question`, `s_answer`, `user_downline`, `btc_walletAddress`, `user_ipaddress`, `status`, `last_seen`, `downline_username`) VALUES
(1, '78393794', '27/11/2020', '12:29:19pm', '-45681', 'acorntrade', 'acorntrade@gmail.com', 'acorntrade778558', '-', '-', '', '18yjfkLoZxfcFhytmkxY5koMbrjxzEdx', 'main ip address', 'admin', '27/11/2020 by 12:29:19pm', '-'),
(22, '89838877', '14/03/2021', '10:10:39pm', 'acorns1245632634', 'acorns', 'ofogoziechisom@gmail.com', '1234', '', '', '', 'ktrgvjotkghljioeyktknhonymtfgojhktbmfkfjhg', 'main ip address', 'active', '20/08/2021 by 02:22:33pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_testimony`
--

CREATE TABLE `mastertraderfx_testimony` (
  `id` int(11) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `testimony_id` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertraderfx_testimony`
--

INSERT INTO `mastertraderfx_testimony` (`id`, `user_id`, `testimony_id`, `fullname`, `message`, `status`) VALUES
(1, '20044833', '45892', 'adams oh', 'Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth', 'pending'),
(2, '20044833', '98795', 'adams oh', 'Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth', 'active'),
(3, '20044833', '26135', 'adams oh', 'Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth', 'active'),
(4, '81732380', '10405', 'Sancti mohmeeh', 'Z<>k', 'active'),
(5, '81732380', '50268', 'Sancti mohmeeh', 'x,.m,.zx', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `mastertraderfx_withdraw`
--

CREATE TABLE `mastertraderfx_withdraw` (
  `id` int(11) NOT NULL,
  `date_withdraw` varchar(225) NOT NULL,
  `withdrawal_id` varchar(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `wallet_address` varchar(225) NOT NULL,
  `amout_withdrawn` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mastertraderfx_bitwallet`
--
ALTER TABLE `mastertraderfx_bitwallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_countdays`
--
ALTER TABLE `mastertraderfx_countdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_invest`
--
ALTER TABLE `mastertraderfx_invest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_ipadress`
--
ALTER TABLE `mastertraderfx_ipadress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_member`
--
ALTER TABLE `mastertraderfx_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_testimony`
--
ALTER TABLE `mastertraderfx_testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertraderfx_withdraw`
--
ALTER TABLE `mastertraderfx_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mastertraderfx_bitwallet`
--
ALTER TABLE `mastertraderfx_bitwallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mastertraderfx_countdays`
--
ALTER TABLE `mastertraderfx_countdays`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mastertraderfx_invest`
--
ALTER TABLE `mastertraderfx_invest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mastertraderfx_ipadress`
--
ALTER TABLE `mastertraderfx_ipadress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mastertraderfx_member`
--
ALTER TABLE `mastertraderfx_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mastertraderfx_testimony`
--
ALTER TABLE `mastertraderfx_testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mastertraderfx_withdraw`
--
ALTER TABLE `mastertraderfx_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
