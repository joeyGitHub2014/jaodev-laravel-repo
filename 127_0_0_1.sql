-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 05:10 PM
-- Server version: 5.6.17-log
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel-8`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `migrations`
--

/*INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_09_07_174653_create_projects_table', 1),
(10, '2014_10_12_000000_create_users_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(12, '2019_08_19_000000_create_failed_jobs_table', 2),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(14, '2021_09_07_174654_create_projects_table', 3),
(15, '2021_09_08_215722_create_categories_table', 4);*/ 

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created_at`, `updated_at`, `title`, `image`, `description`, `excerpt`, `skills`, `type`) VALUES
(1, '2021-09-09 06:39:43', '2021-09-09 06:39:43', 'Medication Adherence', 'mmar.jpg', 'Designed and developed PHP application using the Laravel framework.  This is a web application that allows medical and pharmaceutical institutions to test how patients are using their medications. The system uses a MySQL database to store test results, patient information and account information. The application also has a number of API’s that clients can use to integrate into existing systems.', 'Designed and developed PHP application using the Laravel framework.', 'Laravel, VUE . JS', 'PHP Laravel'),
(2, '2021-09-09 06:55:59', '2021-09-09 06:55:59', 'ABC DISNEY', 'abc.jpg', 'Part of a development team that was responsible for rebuilding abc.go.com website using PHP Phalcon framework. The site is MVC design built with JSON API’s feeds. Also was responsible for creating PHP unit test cases. SourceTree was used for version control.', 'Part of a development team that was responsible for rebuilding abc.go.com website using PHP Phalcon framework.', 'PHP,  JS', 'PHP'),
(3, '2021-09-09 07:15:20', '2021-09-09 07:15:20', 'Breathe Clear Institute', 'bbc.jpg', 'The application stores user data, allergy test results, and generates reports for both patients and doctors. Software used in the development: PHP/MySQL, Bootstrap CSS, HTML, JavaScript, Ajax.', 'Developed PHP/MySQL content management application for BCIs’ allergy testing center.', 'PHP JAvascript', 'PHP'),
(4, '2021-09-09 07:49:58', '2021-09-09 07:49:58', 'infiniti digital brochures', 'thumbinfiniti.jpg', 'dsfgsdfg', 'fgdgfd', 'JS, Angular', 'ANG'),
(5, '2021-09-09 09:35:45', '2021-09-09 09:35:45', 'subaru digital brochers', 'outback4.jpg', 'Helped develop a new app for the 2019 Subaru Ascent. The app was developed with Angular 5 framework. I was responsible for coding and debugging the major components.\r\nI was also responsible for creating HTML5 banner ads for Amazon Prime campaign.', 'Helped develop a new app for the 2019 Subaru Ascent.', 'javascript php', 'ANG'),
(7, '2021-09-09 09:44:04', '2021-09-09 09:44:04', 'paint the dude', 'thedude1.jpg', 'Create with javascript', 'Like it say''s  ''paint the dude'' a fun Javascript  game.', 'javascript', 'JS'),
(8, '2021-09-09 09:47:13', '2021-09-09 09:47:13', 'Card football', 'cf1.jpg', 'Javascript Game', 'Javascript Game', 'Javascript', 'JS'),
(9, '2021-09-09 09:57:39', '2021-09-09 09:57:39', 'world of circles game', 'worldOfCircles.jpg', 'This is a JavaScript game using the Phaser framework.', 'This is a JavaScript game using the Phaser framework.', 'JavaScript, Phaser, HTML5, CSS, Design', 'JavaScript /Phaser/HTML5/CSS/Design');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
