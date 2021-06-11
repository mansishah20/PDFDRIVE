-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdfdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `addto_carts`
--

CREATE TABLE `addto_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bauthor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpage` int(11) NOT NULL,
  `bsize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blanguage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpubdate` date NOT NULL,
  `bdescribe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bname`, `bauthor`, `bpage`, `bsize`, `bcover`, `bpdf`, `blanguage`, `bpubdate`, `bdescribe`, `catid`, `created_at`, `updated_at`) VALUES
(1, 'Basic of C language', 'Balagruhswami', 623, '2 MB', 'Basic Of C Language.jpg', 'Basic of C Language.pdf', 'English', '2019-08-14', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 1, NULL, NULL),
(2, 'C language by Technical Publication', 'A.B.Thakar', 230, '255 KB', 'C language by Technical Publication.jpg', 'C language by Technical Publication.pdf', 'English', '2020-12-02', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 1, NULL, NULL),
(3, 'Object Oriented Programming with Java', 'K.S.Desai', 450, '500 KB', 'Object Oriented Programming with Java.jpg', 'Object Oriented Programming with Java.pdf', 'English', '2019-10-23', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 2, NULL, NULL),
(4, 'Core Java', 'R K Shah', 450, '500 KB', 'core java.jpg', 'core java.pdf', 'English', '2019-10-23', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 2, NULL, NULL),
(5, 'Object Oriented PHP', 'Junade Ali', 240, '123 KB', 'Object Oriented PHP.jpg', 'Object Oriented PHP.pdf', 'English', '2016-07-27', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 3, NULL, NULL),
(6, 'PHP and MYSQL', 'Larry Ullman', 623, '874 KB', 'PHP and MYSQL.jpg', 'PHP and MYSQL.pdf', 'English', '2019-11-30', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 3, NULL, NULL),
(7, 'Python Programming', 'Cal Baron', 890, '2 MB', 'python programming.jpg', 'python programming.pdf', 'English', '2017-12-20', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 4, NULL, NULL),
(8, 'Begin to Code with Python', 'Rob Miles', 243, '423 KB', 'Begin to Code with Python.jpg', 'Begin to Code with Python.pdf', 'English', '2020-11-30', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 4, NULL, NULL),
(9, 'Javascript Programming', 'Ethem Mining', 421, '321 KB', 'Javascript Programming.jpg', 'Javascript Programming.pdf', 'English', '2013-10-12', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 5, NULL, NULL),
(10, 'Pro Javascript Design Patterns', 'Ross Harms', 267, '183 KB', 'Pro Javascript Design Patterns.jpg', 'Pro Javascript Design Patterns.pdf', 'English', '2014-01-18', 'This is a book about C language.Anyone can learn C language with the help of book.Many Example and solution is there in book.', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caticon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `caticon`, `created_at`, `updated_at`) VALUES
(1, 'C language', 'C.jpg', NULL, NULL),
(2, 'Java', 'java.jpg', NULL, NULL),
(3, 'PHP', 'php.jpg', NULL, NULL),
(4, 'Python', 'python.jpg', NULL, '2021-02-22 00:44:27'),
(5, 'Javascript', 'Javascript.jpg', NULL, '2021-02-22 00:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `userid`, `bookid`, `star`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 4, 'Practical design and programming guide for C programmers and introduction to \"little languages\".', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 5, 4, 'I\'ve tried to learn object oriented programming (OOP) before on my own. I understood the concepts, but was still unable to apply the concepts to something usable. The most appealing aspect of this book, to me, was the fact the author did not use the ol\' \"', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 7, 3, 'I wish i could have the hard copy of this book. So that i may write a comprehensive review over this book.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 8, 2, 'I read this book to figure out why I would want to use Python, and not as a how-to. For that, this book served its purpose adequately. ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 6, 4, 'Great tutorial for PHP & MYSQL. Thanks for this', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 1, 3, 'Very great and friendly to all reader. Won\'t make you sleep. Excellent book.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 6, 4, 'This book will give you a basic grounding in PHP and MySQL, but it doesn\'t go into much depth in any of the topics. I found it to be a good entry into starting off with PHP and MySQL. I\'d recommend using Wrox Beginning PHP 5.3 to go with this book. The Wr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 2, 5, 'Excellent Beginner\'s Book in its category. Best in the town for the novice in this field. Step by step learning resource. I am happy to get this.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 3, 2, 5, 'This is a very interesting book purely about the way problems are broken down, irrespective of syntax or language. Especially love the problem/quizzes about task completion though context displacement. To be able to adopt that mentality has certainly help', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 3, 4, 'i can understand the concepts with this book verywell', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 4, 4, 'Good book for begginers in programming.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 9, 5, 'Great book on JavaScript. Good for beginners, but also gets into some really useful advanced examples. Author has no hesitation about getting into jquery, since that\'s how you can do some advanced effects. Highly recommended!', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telephone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mansi Shah', 'mansi@gmail.com', '1234123412', 'abcd', '2021-05-19 05:01:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `bookid`, `userid`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_30_094645_create_categories_table', 1),
(5, '2020_12_30_094839_create_books_table', 1),
(6, '2020_12_30_100257_create_downloads_table', 1),
(7, '2020_12_30_100440_create_addto_carts_table', 1),
(8, '2020_12_30_100710_create_user_masters_table', 1),
(9, '2020_12_30_100743_create_comments_table', 1),
(10, '2020_12_31_095903_create_order_masters_table', 1),
(11, '2021_05_19_060735_create_contact_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`id`, `bookid`, `userid`, `email`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'mansishah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 1, 'yashshah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 4, 'anshshah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 2, 'princyshah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 8, 3, 'abhishah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_masters`
--

CREATE TABLE `user_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_masters`
--

INSERT INTO `user_masters` (`id`, `uname`, `uemail`, `upassword`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Mansi Shah', 'mansi@gmail.com', 'Mansi@1234', 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Princy Shah', 'princy@gmail.com', 'Princy@1234', 'User', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Abhi Shah', 'abhi@gmail.com', 'Abhi@1234', 'User', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ansh Shah', 'ansh@gmail.com', 'Ansh@1234', 'User', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'rajvi shah', 'rajvi@gmail.com', 'rajvi1234', 'user', '2021-04-10 11:53:49', '2021-04-10 11:53:49'),
(6, 'Mansi', 'mansi@yahoo.com', '1234', 'User', '2021-05-23 22:07:39', '2021-05-23 22:07:39'),
(7, 'Mansi', 'mansi@yahoo.com', '1234', 'User', '2021-05-23 23:59:31', '2021-05-23 23:59:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addto_carts`
--
ALTER TABLE `addto_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_masters`
--
ALTER TABLE `user_masters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addto_carts`
--
ALTER TABLE `addto_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_masters`
--
ALTER TABLE `user_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
