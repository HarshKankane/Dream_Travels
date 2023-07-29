
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+05:30";

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `User_Id` varchar(40) NOT NULL,
  `picsource` varchar(500) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `email`, `password`, `mobile`, `userType`, `address`, `User_Id`, `picsource`) VALUES
('khushi', 'asd@gh', '8801', 8520369147, 'Passenger', 'purnea', 'khushi', ''),
('SHWETA', 'aloofstar1104@gmail.com', '789', 8999988888, 'Passenger', 'purnea', 'shweta', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
