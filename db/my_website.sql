-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 01, 2016 at 09:59 PM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_website`
--
CREATE DATABASE IF NOT EXISTS `my_website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_website`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projectName` text NOT NULL,
  `htmlId` text NOT NULL,
  `aboutProject` text NOT NULL,
  `display` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectName`, `htmlId`, `aboutProject`, `display`) VALUES
('GaikBot', 'gaikbot', '<a href=''https://bitbucket.org/gaikema/gaikbot/wiki/Home''>GaikBot</a> is a chatbot, \r\nsort of like the "sequel" to Dank Sinatra.\r\nHe is written in C#, and uses the Microsoft Bot Framework to integrate him with various channels, including SMS, Facebook, and Telegram.', '<iframe src="https://webchat.botframework.com/embed/gaikbot?s=_kROGLOlwLY.cwA.KSI.dyBYCR7BCGOtIE5qj0kSN3V1BWreyDC1oxhn_vAtEG0" style="height: 502px; max-height: 502px;"></iframe>'),
('Math Club Website', 'pme', 'I am the Official webmaster for Math Club, the umbrella organization for all undergraduate societies within the Mathematics Departament at Texas A&M.\r\nI was unanimously elected, and I created the first website for the club from scratch,\r\nwhich is currently hosted <a href="https://peaceful-atoll-84937.herokuapp.com/">here</a>\r\nbut will soon be hosted on the Math Department servers.', NULL),
('PolyRoot', 'polyroot', 'PolyRoot is a Mathematica library which impliments various <a href="https://en.wikipedia.org/wiki/Root-finding_algorithm">root-finding algorithms</a>. The source code can be found <a href="https://github.com/TexAgg/PolyRoot">here</a>.', NULL),
('Aggie Coding Club Website', 'acc', 'I helped design and implement the website for <a href=''http://aggiecodingclub.com/''>Aggie Coding Club.</a> I worked with a group of about 10 other students.', NULL),
('Flap God 2', 'flap', 'Based on <a href=''https://github.com/TexAgg/FlapGod''>Flap God,</a> Flap God 2\r\n				is a game about <a href=''https://en.wikipedia.org/wiki/Pancake_sorting''>pancake sorting.</a>\r\n				The object of the game is to get the pancakes sorted from smallest to largest in as few flips\r\n				as possible.\r\n				Works best on Google Chrome.', '<img id=''pancakes'' class=''proj'' src=''media/pancakes.PNG''></img>'),
('Triangle Calculator', 'triangle', 'Enter three sides of the triangle and, using\r\n				Heron''s formula, this will calculate the area and\r\n				draw the triangle. \r\nClick <a href=''https://github.com/TexAgg/TriangleCalculator''>here</a> for the source code.', '<a href=''https://dl.dropboxusercontent.com/u/222607174/triangle_calculator/index.html'' target=''_blank''>\r\n				<img id=''triangle_img'' class=''proj'' src=''media/triangle.PNG''></img>\r\n				</a>'),
('Bubble', 'bubble', 'Bubbles will float around aimlessly, heading the opposite direction whenever colliding with a wall or another bubble.\r\n				Works best on Google Chrome.\r\nClick <a href=''https://github.com/TexAgg/Bubble''>here</a> for the source code.', '<a href=''https://dl.dropboxusercontent.com/u/222607174/Bubble/index.html''>\r\n				<img id=''bubble_img'' class=''proj'' src=''media/bubbles.PNG''></img>\r\n				</a>'),
('Dank Sinatra', 'dank', '<a href=''https://www.facebook.com/profile.php?id=100010461758967&fref=ts''>Dank Sinatra</a> is a Facebook chatbot.\r\n				He is written in JavaScript (using Node.js) and a smidgen of Python.\r\n				Type ''\\help'' to see a list of his available commands.\r\n				He also pushes relevant messages to a database, sends me email updates,\r\n				and posts weather updates every 3 hours,\r\n				but new features are constantly being added.\r\n				I hope to one day make him a full-on companion, such as Siri or Watson (albiet not as realistic).\r\n				For more information, see <a href="https://bitbucket.org/gaikema/danksinatra/wiki/Home">here.</a>', '<a href=''https://www.facebook.com/profile.php?id=100010461758967&fref=ts''>\r\n				<img class=''proj'' src=''media/fb_icon_325x325.png''></img></a>\r\n				</a>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;