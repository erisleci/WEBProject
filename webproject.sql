-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `Title`, `Description`, `img`) VALUES
(1, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus interdum risus, eget ultrices metus gravida id. Nunc hendrerit tincidunt lacus, in consequat nisi malesuada vel. Nam et varius est, quis blandit odio. In sollicitudin nec tellus nec consequat. Mauris molestie blandit malesuada. Vestibulum finibus mollis augue nec faucibus. Vestibulum blandit lacus ligula, vitae molestie elit dapibus id. Curabitur fringilla, lacus eget mollis vestibulum, ligula nisl euismod odio, congue faucibus sapien nunc id elit. Integer pellentesque sed erat quis eleifend. Quisque vehicula nulla ac urna placerat, vel dictum tortor iaculis. Maecenas luctus varius lacus, vel mattis eros mattis sed. Cras mauris ex, bibendum sit amet neque non, bibendum luctus eros. Sed lobortis non velit et lacinia. Nullam est ipsum, tincidunt vel ante a, porta gravida mauris. Sed ultrices vulputate nibh a congue. Etiam ut ex porttitor, sodales justo sed, tincidunt ex. Etiam eu magna rhoncus, pharetra enim id, scelerisque nunc. Sed id aliquet tellus. Vivamus ac odio augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tristique velit at ultricies vestibulum. Nullam vitae dui non purus varius pellentesque. Cras et odio placerat, suscipit neque sed, auctor ligula.', NULL),
(2, 'Our Partners', 'Vestibulum in eros turpis. Aenean luctus sapien ut semper dictum. In tincidunt, dui nec lacinia cursus, diam justo sagittis erat, quis accumsan quam turpis non ex. Duis sit amet finibus enim. Nam feugiat, arcu at posuere sodales, massa sem semper felis, sed sagittis ipsum metus nec leo. Nam at semper sapien. Etiam placerat, nunc eget cursus ullamcorper, enim tellus faucibus libero, id congue odio est vitae ante. Aenean finibus lorem eu erat pulvinar, eget sodales enim aliquam. Cras pretium congue hendrerit. Donec viverra, dui vitae sagittis sagittis, lorem turpis imperdiet nisi, id mattis magna quam nec elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ultrices vulputate nibh a congue. aliquet tellus. Vivamus ac odio augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tristique velit at ultricies vestibulum. Nullam vitae dui non purus varius pellentesque. Cras et odio placerat, suscipit neque sed, auctor ligula. Etiam ut ex porttitor, sodales justo sed, tincidunt ex. Etiam eu magna rhoncus, pharetra enim id, scelerisque nunc. Sed id aliquet tellus.', NULL),
(3, 'Our duty', 'Morbi tempor lorem a ante fermentum, at hendrerit augue aliquam. Curabitur turpis velit, pretium eu consequat sit amet, bibendum ac urna. Vivamus ac tellus nec mauris blandit auctor ut ut mauris. Sed ultrices vulputate nibh a congue. Etiam ut ex porttitor, sodales justo sed, tincidunt ex. Etiam eu magna rhoncus, pharetra enim id, scelerisque nunc. Sed id aliquet tellus. Mauris scelerisque at sem faucibus mattis. Nullam pretium venenatis justo non congue. Sed auctor sed elit non consequat. Donec non augue congue dolor viverra congue. Praesent id leo quam. Phasellus mattis, dolor quis mollis feugiat, tortor urna hendrerit est, at tristique ipsum dolor a lacus. Sed ultrices vulputate nibh a congue. Etiam ut ex porttitor, sodales justo sed, tincidunt ex. Etiam eu magna rhoncus, pharetra enim id, scelerisque nunc. Sed id aliquet tellus. aliquet tellus. Vivamus ac odio augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tristique velit at ultricies vestibulum. Nullam vitae dui non purus varius pellentesque. Cras et odio placerat, suscipit neque sed, auctor ligula.', NULL),
(4, 'Ownership and financ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam pretium venenatis justo non congue. Sed auctor sed elit non consequat. Donec non augue congue dolor viverra congue. Praesent id leo quam. Sed ultrices vulputate nibh a congue. Etiam ut ex porttitor, sodales justo sed, tincidunt ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tristique velit at ultricies vestibulum. Nullam vitae dui non purus varius pellentesque. Cras et odio placerat, suscipit neque sed, auctor ligula. Etiam eu magna rhoncus, pharetra enim id, scelerisque nunc. Sed id aliquet tellus.', NULL),
(9, 'Work for us', 'Sed pretium faucibus augue, eu congue augue malesuada porta. Nam pulvinar vel velit in rhoncus. Proin sit amet gravida est. Phasellus feugiat viverra dignissim. Sed felis nisi, pretium id dui a, efficitur lobortis erat. Aliquam sollicitudin elit a sem rhoncus euismod. Aenean congue tempor tristique. Donec placerat elit at molestie suscipit. In in ante magna. Integer in sem mollis, malesuada augue at, porta libero.', '71-715231_simba-branch-office-man-working-in-office-clipart.png'),
(10, 'Intern for us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus id massa quis rhoncus. Sed consequat ligula vitae tortor ornare finibus. Quisque vel metus ut ligula porta eleifend id sit amet nisl. Quisque a rutrum leo. Nullam rutrum metus quis bibendum interdum. Nullam cursus enim consequat, tristique magna ut, malesuada velit. Morbi metus risus, sodales eu diam vel, consequat elementum odio.', 'conversation-clipart-office-conversation-1.png'),
(11, 'Advertise for us', 'In maximus ut erat eget porttitor. Sed eu sapien ut urna bibendum pretium ac ac dolor. Phasellus consectetur elit nec felis pulvinar interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum rutrum euismod magna, eu hendrerit orci mattis et. Aliquam maximus leo sem, non consectetur elit tincidunt id. Ut blandit lectus pellentesque elit bibendum, in accumsan lacus iaculis. Nam vita.', 'IMG.png');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Subtitle` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `PrimaryCategory` varchar(30) NOT NULL,
  `SecondaryCategory` varchar(30) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `Title`, `Subtitle`, `Description`, `PrimaryCategory`, `SecondaryCategory`, `Photo`, `Link`, `admin`) VALUES
(1, 'Russia reports record daily rise in coronavirus ca', 'MOSCOW (Reuters) - Russia on Friday reported a record daily rise in the number of confirmed coronavi', 'The nationwide case tally rose by 7,933 cases and now stands at 114,431, Russia’s coronavirus crisis response centre said. It said 96 people diagnosed with COVID-19, the respiratory disease caused by the coronavirus, had died in the last 24 hours. That raised the official overall death toll to 1,169. Mishustin told President Vladimir Putin on Thursday that he had been diagnosed with the virus and would self-isolate. First Deputy Prime Minister Andrei Belousov will serve as acting prime minister in his absence. Mishustin, who had been one of the main coordinators of Russia’s response to the new coronavirus, was the first high-ranking Russian official to publicly say they have the virus. On Friday another member of the Russian Cabinet, Construction Minister Vladimir Yakushev, announced he had been diagnosed with the new virus and that he would be treated in hospital. Dmitry Volkov, one of his deputies, also tested positive for the coronavirus, the ministry said. Russia’s outbreak got off to a slower start than many other countries. But cases began to sharply rise last month, and on Thursday surged past the 100,000 mark. Although Russia is rising up the table of nations with the highest number of confirmed cases, it has so far recorded far fewer deaths than many of the hardest-hit countries. Putin has warned the peak of the outbreak has yet to come, and authorities have said there could be a new spike in cases if the population flouts lockdown measures during long public holidays in early May. The world’s largest country by territory, Russia has been on lockdown since Putin announced the closure of most public spaces in late March to limit the scope for the virus to spread.', 'Actual News', 'Coronavirus', 'image.jpg', 'lajmi.php', NULL),
(3, 'Uber must face lawsuit claiming it stifled competi', NULL, 'asdasdad', 'Actual News', 'Tech', 'index.png', NULL, NULL),
(4, 'La Liga to restart training on the 17th', NULL, NULL, 'Actual News', 'Sport', '179488f9238faf1ced463442b8d59857.png', NULL, NULL),
(5, 'Google travel data show lockdown fatigue in U.S., ', NULL, NULL, 'Actual News', 'Tech', 'shutterstock_552493561.jpg', NULL, NULL),
(6, 'Wall Street tumbles as renewed tariff threat adds ', NULL, NULL, 'Actual News', 'Business', 'Photos_NewYork1_032.jpg', NULL, NULL),
(7, 'German Bundesliga returns: What did footballz\'s ne', NULL, NULL, 'Sport', 'Football', 'borussia_vs_schalke.jpg', NULL, NULL),
(8, 'Milot Rashica: Aston Villa, Brighton, West Ham & W', NULL, NULL, 'Sport', 'Football', 'milot_rashica.jpg 	', NULL, NULL),
(9, 'LeBron James, Anthony Davis and other star players', NULL, NULL, 'Sport', 'Basketball', 'nba.jpg', NULL, NULL),
(10, 'Tom Brady leaving isn\'t \'end of the world\' for Dev', NULL, NULL, 'Sport', 'American Football', 'tombrady.jpg', NULL, NULL),
(11, 'Will Baseball Return in 2020? Here’s the Latest Ne', NULL, NULL, 'Sport', 'Baseball', 'baseball.jpg', NULL, NULL),
(12, 'Emmanuel Macron: From political novice to presiden', NULL, NULL, 'Politics', 'French Election', 'french.jpg', NULL, NULL),
(13, 'Obama must pardon Manning and Snowden before Trump', NULL, NULL, 'Politics', 'Opinion', 'snowden.jpg', NULL, NULL),
(14, 'Istanbul attack: Turkey must end blame game and lo', NULL, NULL, 'Politics', 'Europe', 'blast.jpg', NULL, NULL),
(15, 'Trump dumps Russia, woos China instead', NULL, NULL, 'Politics', 'America', 'trump2.jpg', NULL, NULL),
(16, 'Acting intelligence chief has declassified names o', NULL, NULL, 'Politics', 'America', 'grenell.jpg', NULL, NULL),
(17, 'Health and well-being improved by spending time in', NULL, NULL, 'Health', 'Health', 'Garden.jpg', NULL, NULL),
(18, 'Coronavirus may never go away, World Health Organi', NULL, NULL, 'Health', 'Coronavirus', 'coronavirus.jpg', NULL, NULL),
(19, '\'Flexible DNA\' may be key to overcoming fearful me', NULL, NULL, 'Health', 'Studies', 'dna.jpg', NULL, NULL),
(20, 'Our ability to focus may falter after eating one m', NULL, NULL, 'Health', 'Diets', 'diets.jpg', NULL, NULL),
(21, 'Heart attacks, heart failure, stroke: COVID-19\'s d', NULL, NULL, 'Health', 'Coronavirus', 'corona.jpg', NULL, NULL),
(22, 'Coronavirus pushes German economy into recession', NULL, NULL, 'Economy', 'European Economy', 'Germany.jpg', NULL, NULL),
(23, 'Coronavirus could \'cost global economy $8.8tn\' say', NULL, NULL, 'Economy', 'Global Economy', 'economy.jpg', NULL, NULL),
(24, 'JC Penney: US department store files for bankruptc', NULL, NULL, 'Economy', 'American Economy', 'penny.jpg', NULL, NULL),
(25, 'How China plans to lead the computer chip industry', NULL, NULL, 'Economy', 'Global Trade', 'china.jpg', NULL, NULL),
(26, 'Why 5G is critical to the future of industrial com', NULL, NULL, 'Economy', 'Indrustry', '5g.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`ID`, `Email`) VALUES
(1, 'erisleci18@gmail.com'),
(2, ''),
(3, 'erisleci55151@gmail.com'),
(4, 'erisleci55151@gmail.com'),
(5, 'arenaleci1@gmail.com'),
(6, 'aaaa@gmail.com'),
(7, 'erisleci18aaaa@gmail.com'),
(8, 'asdasad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(200) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`ID`, `Name`, `Price`, `Description`, `photo`) VALUES
(1, 'Digital Subscription', 14.99, 'The Eris Daily, Premium access to The Eris app and ad-free reading on Theeris.com', 'phone.png'),
(2, 'Newspaper & Digital Subscription', 19.99, 'The Eris Daily, Premium access to The Eris Newspaper releases, as well as digital app', 'teligazeta.png'),
(3, ' Premium app to the Eris digital app', 5.99, 'Free live-news, follow them as they happen', 'sim.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Mbiemri` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Emri`, `Mbiemri`, `Password`, `Email`, `isAdmin`) VALUES
(1, 'Eris', 'Leci', '222erisi', 'erisleci14@Gmail.com', 1),
(2, 'Eris', 'Eris', 'Eris', '0', 0),
(5, 'Eris', 'Leci', '222erisi', 'erisleci19@gmail.com', 0),
(7, 'Eris', 'Leci', '222erisi', 'erislseci19@gmail.com', 0),
(11, 'Eris', 'Leci', '222erisi', 'asdasdadas@gmail.com', 0),
(14, 'Eris', 'Leci', '222erisi', 'erisleci55123151@gmail.com', 0),
(15, 'Eris', 'Leci', '222erisi', 'erislecisssssss55151@gmail.com', 0),
(16, 'Eris', 'Leci', '222erisi', 'haha@gmail.com', 0),
(17, 'Eris', 'Leci', '222erisi', 'baba@gmail.com', 0),
(18, 'Eris', 'Leci', '222erisi', 'erisleci55151@gmail.com', 0),
(19, 'Eris', 'Leci', '222erisi', 'erisleci111@gmail.com', 0),
(20, 'Eris', 'Leci', '222erisi', 'adsad@dsadsads.com', 0),
(21, 'Eris', 'Leci', '222erisi', 'bababa@gmail.com', 0),
(22, 'Eris', 'Leci', '222erisi', 'eeee@gmail.com', 0),
(23, 'Eris', 'Leci', '222erisi', 'robertwpyles@gmail.com', 0),
(24, 'Eris', 'Leci', '222erisi', 'erisi@gmail.com', 0),
(25, 'Eris', 'Leci', '222erisi', 'erisleci55152221@gmail.com', 0),
(26, 'Eris', 'Leci', '222erisi', 'aaaaa@gmail.com', 0),
(27, 'Eris', 'Leci', '222erisi', 'aa@gmail.com', 0),
(28, 'sadas', 'asdas', '123123', 'sdasdsaasda@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_admin` (`admin`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`admin`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
