-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 08:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr10_joshuapowell_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be15_cr10_joshuapowell_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr10_joshuapowell_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `isbn` bigint(13) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `author_fname` varchar(50) DEFAULT NULL,
  `author_lname` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `publisher_city` varchar(50) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `isbn`, `type`, `description`, `author_fname`, `author_lname`, `publisher`, `publisher_city`, `publish_date`, `status`) VALUES
(7, 'Love in the Time of Cholera', 'love.jpg', 9780140119909, 'book', 'Published to worldwide critical acclaim, with more than one million copies already in print, this is the lush, wondrous story of an unrequited love that survives half a century and more than 600 distractions.', 'Gabriel Garcia', 'Marquez', 'Penguin Books', 'London', '1989-01-01', 'available'),
(8, 'The Wonderful Wizard of Oz', 'wizard.jpg', 9780486291161, 'book', 'Since it was first published in 1900, The Wonderful Wizard of Oz has enchanted readers of all ages with its lovable characters, gentle humor, and quiet wisdom. This complete and unabridged edition of L. Frank Baum\'s beloved classic invites a new generation of readers to travel down that Yellow Brick Road with the delightful little girl from Kansas and her unusual friends.', 'L. Frank', 'Baum', 'Dover Publications', 'New York', '1996-01-01', 'available'),
(9, 'Attack on Titan: Before the Fall 1', 'titan.jpg', 9781612629100, 'book', 'A prequel series to the number one bestseller in Japan. Humanity has learned to live in complacency behind its high walls, protected from the giant Titans. But when a Titan-worshipping cult opens one of the gates, a Titan wreaks havoc, consuming the cultists. After the rampage is over, two young Survey Corps members are shocked to discover a pregnant woman\'s partially digested corpse - with her baby still alive inside it! What will the fate of this \'child of the Titans\' be? And how will humanity', 'Ryo', 'Suzukaze', 'Kodansha Comics', 'Tokyo', '2014-01-01', 'available'),
(10, 'Oil!', 'oil.jpg', 9780143112266, 'book', 'Penguin Books is proud to now be the sole publisher of Oil!, the classic 1927 novel by Upton Sinclair. After writing The Jungle, his scathing indictment of the meatpacking industry, Sinclair turned his sights on the early days of the California oil industry in a highly entertaining story featuring a cavalcade of characters including senators, oil magnets, Hollywood film starlets, and a crusading evangelist.', 'Upton', 'Sinclair', 'Penguin Books', 'London', '2007-01-01', 'available'),
(11, 'Brief Answers to the Big Questions', 'hawking.jpg', 9781984819192, 'book', 'Will humanity survive? Should we colonize space? Does God exist? These are just a few of the questions Hawking addresses in this wide-ranging, passionately argued final book from one of the greatest minds in history.', 'Stephen', 'Hawking', 'Bantam', 'London', '2018-01-01', 'available'),
(12, 'Alices Adventures In Wonderland', 'alice.jpg', 9780706413120, 'book', 'Source of legend and lyric, reference and conjecture, Alice\'s Adventures in Wonderland is for most children pure pleasure in prose. While adults try to decipher Lewis Carroll\'s putative use of complex mathematical codes in the text, or debate his alleged use of opium, young readers simply dive with Alice through the rabbit hole, pursuing \'The dream-child moving through a land / Of wonders wild and new.\' There they encounter the White Rabbit, the Queen of Hearts, the Mock Turtle, and the Mad Hatt', 'Lewis', 'Carroll', 'Littlehampton Book Services Ltd', 'Worthing', '1980-01-01', 'available'),
(13, 'There Will Be Blood', 'blood.jpg', NULL, 'dvd', 'A sprawling epic about family, faith, power and oil. The story chronicles the life of Daniel Plainview, who transforms himself from a down-and-out silver miner into a self-made oil tycoon.', NULL, NULL, NULL, NULL, NULL, 'available'),
(14, '2001: A Space Odyssey', 'space.png', NULL, 'dvd', 'Stanley Kubrick redefined the limits of filmmaking in his classic science fiction masterpiece, a contemplation on the nature of humanity, 2001: A Space Odyssey. Stone Age Earth: In the presence of a mysterious black obelisk, pre-humans discover the use of tools--and weapons--violently taking first steps toward intelligence. 1999: On Earth\'s moon astronauts uncover another mysterious black obelisk. 2001: Between Earth and Jupiter, the spacecraft\'s intelligent computer makes a mistake that kills m', NULL, NULL, NULL, NULL, NULL, 'reserved'),
(15, 'The Big Lebowski', 'big.jpg', NULL, 'dvd', 'From the Academy Award-winning Coen brothers, The Big Lebowski is a hilariously quirky comedy about bowling, a severed toe, White Russians and a guy named...The Dude. Jeff \'The Dude\' Lebowski doesn\'t want any drama in his life...heck, he can\'t even be bothered with a job. But, he must embark on a quest with his bowling buddies after his rug is destroyed in a twisted case of mistaken identity. Starring Jeff Bridges, John Goodman, Julianne Moore, Steve Buscemi, Philip Seymour Hoffman and John Turt', NULL, NULL, NULL, NULL, NULL, 'available'),
(16, 'Raising Arizona', 'arizona.jpg', NULL, 'dvd', 'Recidivist hold-up man H.I. McDonnough and police woman Edwina marry, only to discover they are unable to conceive a child. Desperate for a baby, the pair decide to kidnap one of the quintuplets of furniture tycoon Nathan Arizona. The McDonnoughs try to keep their crime secret, while friends, co-workers and a feral bounty hunter look to use Nathan Jr. for their own purposes.', NULL, NULL, NULL, NULL, NULL, 'reserved'),
(17, 'Blade Runner', 'blade.png', NULL, 'dvd', '21st-century detective Rick Deckard brings his masculine-yet-vulnerable presence to this stylish noir thriller. In a future of high-tech possibility soured by urban and social decay, Deckard hunts for fugitive, murderous replicants - and is drawn to a mystery woman whose secrets may undermine his soul.', NULL, NULL, NULL, NULL, NULL, 'available'),
(18, 'Ran', 'ran.jpg', NULL, 'dvd', 'Akira Kurosawa\'s brilliantly conceived re-telling of Shakespeare\'s King Lear magically mixes Japanese history, Shakespeare\'s plot and Kurosawa\'s own feelings about loyalty in the epic masterpiece, RAN. Set in 16th century Japan, an aging ruler, Lord Hidetora (Tatsuya Nakadai), announces his intention to divide his land equally among his three sons. Hidetora\'s decision to step down unleashes a power struggle between the three heirs when he falls prey to the false flattery bestowed upon him by the', NULL, NULL, NULL, NULL, NULL, 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
