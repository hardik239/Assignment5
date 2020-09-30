SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `student` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `inst` varchar(8) NOT NULL,
  'phone' number(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `student` (`id`, `FirstName`, `LastName`, `Email`, `Country`, `type`, `pwd`) VALUES
(1, 'test', 'test', 'test', 'Australia', 'Faculty', ''),
(2,'hardik', 'test', 'test', 'India', 'Student','');

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;