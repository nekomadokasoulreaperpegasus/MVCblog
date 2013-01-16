-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2013 at 10:47 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post`) VALUES
(1, 'Andrew Lee', 'me@andrewleenj.com', 'Just an example of MVC in action!', 1),
(4, 'Andrew Lee', 'me@andrewleenj.com', 'Why hello there.', 1),
(5, 'John Doe', 'your@email.com', 'Testing comments.\nTesting comments.\nTesting comments.\nTesting comments.\nTesting comments.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `author`) VALUES
(1, 'Hello World!', 'My first blog post.', '2013-01-09', 'Andrew Lee'),
(2, 'Hello Again!', 'Hi.', '2013-01-10', 'Demo'),
(3, 'Hello Again!', 'Hi.', '2013-01-10', 'Demo'),
(4, 'Hello Again!', 'Hi.', '2013-01-10', 'Demo'),
(5, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare hendrerit lorem, nec feugiat velit tempor hendrerit. In hac habitasse platea dictumst. Vivamus eleifend tellus vitae purus vehicula ut ornare mi mollis. Cras et neque sapien. Donec molestie enim hendrerit neque pulvinar id auctor nibh luctus. Nulla vulputate leo sed nulla vehicula volutpat. Vestibulum auctor euismod tellus, et luctus erat pellentesque quis. Nunc nec est erat, in pulvinar risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ipsum tellus. Nam feugiat lobortis lectus, ornare commodo mi vestibulum non. Pellentesque sit amet vehicula libero. Sed blandit, velit eu luctus aliquet, orci enim varius nisi, a sollicitudin augue est sit amet lorem.\r\n\r\nNam commodo nunc sed turpis egestas blandit. Nullam interdum lobortis justo et pellentesque. Vestibulum iaculis vehicula mi non commodo. Suspendisse et turpis eget dui commodo consequat. Aliquam scelerisque rutrum massa, sit amet tincidunt justo pretium id. Sed aliquet velit eu leo facilisis laoreet. Mauris dignissim viverra condimentum. Nullam suscipit, massa non vestibulum condimentum, nisi sapien placerat risus, id fermentum metus nisl id mauris. Vestibulum at lacus sem. Morbi eget lorem non arcu porta pulvinar.\r\n\r\nCurabitur ultricies, ligula vel scelerisque aliquet, risus neque vestibulum lacus, sit amet lobortis leo dolor sed diam. Donec facilisis tellus ut arcu venenatis cursus. Aenean lectus mi, adipiscing sed ultricies laoreet, posuere quis lectus. In hac habitasse platea dictumst. Nunc malesuada fringilla lacinia. Curabitur ut lectus a sem semper dictum et eu diam. Nulla nec tortor sapien. Integer vel lectus nec magna vestibulum tempus a vitae tellus. Nam a pulvinar justo. Nam euismod pharetra mauris non dapibus. Integer quis metus at augue adipiscing tincidunt rhoncus eget lacus. Sed at lacus eget nibh venenatis volutpat. Donec a lorem turpis, eget viverra purus. Quisque suscipit, nisl nec viverra molestie, massa urna fringilla sem, non auctor lorem enim eu sem. Maecenas mattis varius imperdiet.\r\n\r\nSed quis mauris accumsan nibh venenatis molestie eleifend sit amet nisl. Ut vel neque non eros dictum vehicula in vitae nibh. Quisque cursus quam quis dolor feugiat laoreet mattis odio tincidunt. Donec ut orci tortor. Sed a nisl mi. Donec viverra egestas luctus. Sed at massa libero, sit amet ultrices massa. Vestibulum porta dui sit amet sapien mollis et rhoncus dolor congue.', '2013-01-11', 'Andrew Lee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
