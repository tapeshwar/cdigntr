-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpagebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `layout` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `layout`, `data`, `updated_at`, `created_at`) VALUES
(1, 'About us', 'master', '{\"html\":[\"[block slug=\\\"header_block\\\" id=\\\"IDKLG9UQT6S3QZP0\\\"][block slug=\\\"body_block\\\" id=\\\"IDKLGAR8UQG4VDZ0\\\"]\"],\"components\":[[{\"tagName\":\"phpb-block\",\"content\":\"\",\"attributes\":{\"slug\":\"header_block\",\"id\":\"IDKLG9UQT6S3QZP0\"}},{\"tagName\":\"phpb-block\",\"content\":\"\",\"attributes\":{\"slug\":\"body_block\",\"id\":\"IDKLGAR8UQG4VDZ0\"}}]],\"css\":\"* { box-sizing: border-box; } body {margin: 0;}\",\"style\":[],\"blocks\":{\"en\":{\"IDKLG9UQT6S3QZP0\":{\"settings\":{\"attributes\":{\"style-identifier\":\"IDKLG9T07ZUJQC21\"}},\"blocks\":[],\"html\":\"<div class=\\\"w3l-bootstrap-header fixed-top IDKLG9T07ZUJQC21\\\">\\n    <nav class=\\\"navbar navbar-expand-lg navbar-light p-2 IDKLG9T080DZ0A02\\\">\\n        <div class=\\\"container\\\"><a href=\\\"index.html\\\" class=\\\"navbar-brand IDKLG9T082FBW5A3\\\"><span class=\\\"fa fa-diamond\\\"><\\/span>Market<\\/a>\\n            <!-- if logo is image enable this   \\n      <a class=\\\"navbar-brand\\\" href=\\\"#index.html\\\">\\n          <img src=\\\"image-path\\\" alt=\\\"Your logo\\\" title=\\\"Your logo\\\" style=\\\"height:35px;\\\" \\/>\\n      <\\/a> --><button type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarSupportedContent\\\" aria-controls=\\\"navbarSupportedContent\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\" data-raw-content=\\\"true\\\" class=\\\"navbar-toggler IDKLG9T083JXKIS4\\\"><span class=\\\"navbar-toggler-icon\\\"><\\/span><\\/button>\\n            <div id=\\\"navbarSupportedContent\\\" class=\\\"collapse navbar-collapse\\\">\\n                <ul data-raw-content=\\\"true\\\" class=\\\"navbar-nav mr-auto\\\">\\n                    <li class=\\\"nav-item active\\\"><a data-cke-saved-href=\\\"index.html\\\" href=\\\"index.html\\\" class=\\\"nav-link\\\">Home<\\/a><\\/li>\\n                    <li class=\\\"nav-item\\\"><a data-cke-saved-href=\\\"about.html\\\" href=\\\"about.html\\\" class=\\\"nav-link\\\">About<\\/a><\\/li>\\n                    <li class=\\\"nav-item dropdown\\\"><a data-cke-saved-href=\\\"#\\\" href=\\\"#\\\" role=\\\"button\\\" data-toggle=\\\"dropdown\\\" aria-haspopup=\\\"true\\\" aria-expanded=\\\"false\\\" id=\\\"navbarDropdown\\\" class=\\\"nav-link dropdown-toggle\\\">Pages<\\/a>\\n                        <div aria-labelledby=\\\"navbarDropdown\\\" class=\\\"dropdown-menu\\\"><a data-cke-saved-href=\\\"pricing.html\\\" href=\\\"pricing.html\\\" class=\\\"dropdown-item\\\">Pricing<\\/a><a data-cke-saved-href=\\\"career.html\\\" href=\\\"career.html\\\" class=\\\"dropdown-item\\\">Join the Team<\\/a><a data-cke-saved-href=\\\"learn.html\\\" href=\\\"learn.html\\\" class=\\\"dropdown-item\\\">Learning Center<\\/a><a data-cke-saved-href=\\\"blog.html\\\" href=\\\"blog.html\\\" class=\\\"dropdown-item\\\">Blog Posts<\\/a><a data-cke-saved-href=\\\"job-overview.html\\\" href=\\\"job-overview.html\\\" class=\\\"dropdown-item\\\">Job Overview<\\/a><\\/div>\\n                    <\\/li>\\n                    <li class=\\\"nav-item\\\"><a data-cke-saved-href=\\\"blog.html\\\" href=\\\"blog.html\\\" class=\\\"nav-link\\\">Blog<\\/a><\\/li>\\n                    <li class=\\\"nav-item\\\"><a data-cke-saved-href=\\\"contact.html\\\" href=\\\"contact.html\\\" class=\\\"nav-link\\\">Contact<\\/a><\\/li>\\n                <\\/ul>\\n                <div class=\\\"form-inline\\\"><a href=\\\"login.html\\\" class=\\\"login mr-4 IDKLG9T08GOA95I5\\\">Log in<\\/a><a href=\\\"signup.html\\\" class=\\\"btn btn-primary btn-theme IDKLG9T08HB7T706\\\">Create Free Account<\\/a><\\/div>\\n            <\\/div>\\n        <\\/div>\\n    <\\/nav>\\n<\\/div>\",\"is_html\":true},\"IDKLGAR8UQG4VDZ0\":{\"settings\":{\"attributes\":{\"style-identifier\":\"IDKLGA44XX3NFLN1\"}},\"blocks\":[],\"html\":\"<div class=\\\"w3l-index-block1 IDKLGA44XX3NFLN1\\\">\\n    <div class=\\\"content py-5 IDKLGA44XZ81E282\\\">\\n        <div class=\\\"container\\\">\\n            <div class=\\\"row align-items-center py-md-5 py-3\\\">\\n                <div class=\\\"col-md-5 content-left pt-md-0 pt-5\\\">\\n                    <h1 data-raw-content=\\\"true\\\">Meet with us to success dream business<\\/h1>\\n                    <p data-raw-content=\\\"true\\\" class=\\\"mt-3 mb-md-5 mb-4\\\">Making use of the respective industries and our team works. Build an online presence with this professional\\n                        bootstrap 4 template.<\\/p><a href=\\\"login.html\\\" class=\\\"btn btn-primary btn-theme IDKLGA44YEFXTAL3\\\">Get Started<\\/a>\\n                <\\/div>\\n                <div class=\\\"col-md-7 content-photo mt-md-0 mt-5\\\"><img src=\\\"assets\\/images\\/main.jpg\\\" alt=\\\"main image\\\" class=\\\"img-fluid\\\"><\\/div>\\n            <\\/div>\\n            <div class=\\\"clear\\\"><\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\",\"is_html\":true}}}}', '2021-02-22 08:07:17', '2021-02-20 10:15:39'),
(2, 'Services', 'master_two', '{\"html\":[\"[block slug=\\\"header_block\\\" id=\\\"IDKLGB79XNBMDOV5\\\"][block slug=\\\"body_block\\\" id=\\\"IDKLGB79XZS3WAK6\\\"][block slug=\\\"footer_block\\\" id=\\\"IDKLGB79YG7VFJ07\\\"]\"],\"components\":[[{\"tagName\":\"phpb-block\",\"content\":\"\",\"attributes\":{\"slug\":\"header_block\",\"id\":\"IDKLGB79XNBMDOV5\"}},{\"tagName\":\"phpb-block\",\"content\":\"\",\"attributes\":{\"slug\":\"body_block\",\"id\":\"IDKLGB79XZS3WAK6\"}},{\"tagName\":\"phpb-block\",\"content\":\"\",\"attributes\":{\"slug\":\"footer_block\",\"id\":\"IDKLGB79YG7VFJ07\"}}]],\"css\":\"* { box-sizing: border-box; } body {margin: 0;}.btn.btn-primary.btn-theme.IDKLGAYW74GBIMO3{background-color:#1f27c3;}.content.py-5.IDKLGAYW6OP60DS2{margin:0 0 50px 0;}\",\"style\":[{\"selectors\":[{\"name\":\"btn\",\"label\":\"btn\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false},{\"name\":\"btn-primary\",\"label\":\"btn-primary\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false},{\"name\":\"btn-theme\",\"label\":\"btn-theme\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false},{\"name\":\"IDKLGAYW74GBIMO3\",\"label\":\"IDKLGAYW74GBIMO3\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false}],\"style\":{\"background-color\":\"#1f27c3\"}},{\"selectors\":[{\"name\":\"content\",\"label\":\"content\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false},{\"name\":\"py-5\",\"label\":\"py-5\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false},{\"name\":\"IDKLGAYW6OP60DS2\",\"label\":\"IDKLGAYW6OP60DS2\",\"type\":1,\"active\":true,\"private\":false,\"protected\":false}],\"style\":{\"margin\":\"0 0 50px 0\"}}],\"blocks\":{\"en\":{\"IDKLGB79XNBMDOV5\":{\"settings\":{\"attributes\":{\"style-identifier\":\"IDKLGAYYDIPWFRD5\"}},\"blocks\":[],\"html\":\"<div class=\\\"w3l-bootstrap-header fixed-top IDKLGAYYDIPWFRD5\\\">\\n    <nav class=\\\"navbar navbar-expand-lg navbar-light p-2 IDKLGAYYDK21WB96\\\">\\n        <div class=\\\"container\\\"><a href=\\\"index.html\\\" class=\\\"navbar-brand IDKLGAYYDL8ZU0G7\\\"><span class=\\\"fa fa-diamond\\\"><\\/span>Market<\\/a>\\n            <!-- if logo is image enable this   \\n      <a class=\\\"navbar-brand\\\" href=\\\"#index.html\\\">\\n          <img src=\\\"image-path\\\" alt=\\\"Your logo\\\" title=\\\"Your logo\\\" style=\\\"height:35px;\\\" \\/>\\n      <\\/a> --><button type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarSupportedContent\\\" aria-controls=\\\"navbarSupportedContent\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\" data-raw-content=\\\"true\\\" class=\\\"navbar-toggler IDKLGAYYDNBK46I8\\\"><span class=\\\"navbar-toggler-icon\\\"><\\/span><\\/button>\\n            <div id=\\\"navbarSupportedContent\\\" class=\\\"collapse navbar-collapse\\\">\\n                <ul data-raw-content=\\\"true\\\" class=\\\"navbar-nav mr-auto\\\">\\n                    <li class=\\\"nav-item active\\\"><a href=\\\"index.html\\\" class=\\\"nav-link\\\">Home<\\/a><\\/li>\\n                    <li class=\\\"nav-item\\\"><a href=\\\"about.html\\\" class=\\\"nav-link\\\">About<\\/a><\\/li>\\n                    <li class=\\\"nav-item dropdown\\\"><a href=\\\"#\\\" role=\\\"button\\\" data-toggle=\\\"dropdown\\\" aria-haspopup=\\\"true\\\" aria-expanded=\\\"false\\\" id=\\\"navbarDropdown\\\" class=\\\"nav-link dropdown-toggle\\\">Pages<\\/a>\\n                        <div aria-labelledby=\\\"navbarDropdown\\\" class=\\\"dropdown-menu\\\"><a href=\\\"pricing.html\\\" class=\\\"dropdown-item\\\"><span aria-hidden=\\\"true\\\" class=\\\"fa fa-usd\\\"><\\/span>Pricing<\\/a><a href=\\\"career.html\\\" class=\\\"dropdown-item\\\"><span aria-hidden=\\\"true\\\" class=\\\"fa fa-users\\\"><\\/span>Join the Team<\\/a><a href=\\\"learn.html\\\" class=\\\"dropdown-item\\\"><span aria-hidden=\\\"true\\\" class=\\\"fa fa-graduation-cap\\\"><\\/span>Learning Center<\\/a><a href=\\\"blog.html\\\" class=\\\"dropdown-item\\\"><span aria-hidden=\\\"true\\\" class=\\\"fa fa-newspaper-o\\\"><\\/span>Blog Posts<\\/a><a href=\\\"job-overview.html\\\" class=\\\"dropdown-item\\\"><span aria-hidden=\\\"true\\\" class=\\\"fa fa-briefcase\\\"><\\/span>Job Overview<\\/a><\\/div>\\n                    <\\/li>\\n                    <li class=\\\"nav-item\\\"><a href=\\\"blog.html\\\" class=\\\"nav-link\\\">Blog<\\/a><\\/li>\\n                    <li class=\\\"nav-item\\\"><a href=\\\"contact.html\\\" class=\\\"nav-link\\\">Contact<\\/a><\\/li>\\n                <\\/ul>\\n                <div class=\\\"form-inline\\\"><a href=\\\"login.html\\\" class=\\\"login mr-4 IDKLGAYYE24J6I19\\\">Log in<\\/a><a href=\\\"signup.html\\\" class=\\\"btn btn-primary btn-theme IDKLGAYYE3S01GD10 IDKLGB9HUTCJVT20\\\">Create Free Account<\\/a><\\/div>\\n            <\\/div>\\n        <\\/div>\\n    <\\/nav>\\n<\\/div>\",\"is_html\":true},\"IDKLGB79XZS3WAK6\":{\"settings\":{\"attributes\":{\"style-identifier\":\"IDKLGAYW6LYMPL41\"}},\"blocks\":[],\"html\":\"<div class=\\\"w3l-index-block1 IDKLGAYW6LYMPL41\\\">\\n    <div class=\\\"content py-5 IDKLGAYW6OP60DS2\\\">\\n        <div class=\\\"container\\\">\\n            <div class=\\\"row align-items-center py-md-5 py-3\\\">\\n                <div class=\\\"col-md-5 content-left pt-md-0 pt-5\\\">\\n                    <h1 data-raw-content=\\\"true\\\">Meet with us to success dream business<\\/h1>\\n                    <p data-raw-content=\\\"true\\\" class=\\\"mt-3 mb-md-5 mb-4\\\">Making use of the respective industries and our team works. Build an online presence with this professional bootstrap 4 template.sfsdf sdfsdf<\\/p><a href=\\\"login.html\\\" class=\\\"btn btn-primary btn-theme IDKLGAYW74GBIMO3\\\">Get Started<\\/a>\\n                <\\/div>\\n                <div class=\\\"col-md-7 content-photo mt-md-0 mt-5\\\"><img src=\\\"\\/uploads\\/b870f40f36f73cb4911e93ff12ed3b2c91ff7e0b\\/img_01_l.jpg\\\" alt=\\\"main image\\\" class=\\\"img-fluid\\\"><\\/div>\\n            <\\/div>\\n            <div class=\\\"clear\\\"><\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\",\"is_html\":true},\"IDKLGB79YG7VFJ07\":{\"settings\":{\"attributes\":{\"style-identifier\":\"IDKLGB9HV4LU1Y01\"}},\"blocks\":[],\"html\":\"<div class=\\\"IDKLGB4H3MOTFYA17 IDKLGB9HV4LU1Y01\\\">\\n    <!-- footer-28 block -->\\n    <section class=\\\"w3l-market-footer\\\">\\n        <footer class=\\\"footer-28 IDKLGB4H3Q336FQ18 IDKLGB9HV6750TA2\\\">\\n            <div class=\\\"footer-bg-layer\\\">\\n                <div class=\\\"container py-lg-3\\\">\\n                    <div class=\\\"row footer-top-28\\\">\\n                        <div class=\\\"col-md-6 footer-list-28 mt-5\\\">\\n                            <h6 data-raw-content=\\\"true\\\" class=\\\"footer-title-28\\\">Contact information<\\/h6>\\n                            <ul data-raw-content=\\\"true\\\">\\n                                <li>\\n                                    <p><strong>Address<\\/strong> : #135 block, Barnard St. Brooklyn, NY 10036, USA<\\/p>\\n                                <\\/li>\\n                                <li>\\n                                    <p><strong>Phone<\\/strong> : <a data-cke-saved-href=\\\"tel:+404-11-22-89\\\" href=\\\"tel:+404-11-22-89\\\">+404-11-22-89<\\/a>&nbsp;sf dfsd sdfsdf<\\/p>\\n                                <\\/li>\\n                                <li>\\n                                    <p><strong>Email<\\/strong> : <a data-cke-saved-href=\\\"mailto:example@mail.com\\\" href=\\\"mailto:example@mail.com\\\">example@mail.com<\\/a><\\/p>\\n                                <\\/li>\\n                            <\\/ul>\\n                            <div class=\\\"main-social-footer-28 mt-3\\\">\\n                                <ul data-raw-content=\\\"true\\\" class=\\\"social-icons\\\">\\n                                    <li class=\\\"facebook\\\"><br><\\/li>\\n                                    <li class=\\\"twitter\\\"><br><\\/li>\\n                                    <li class=\\\"dribbble\\\"><br><\\/li>\\n                                    <li class=\\\"google\\\"><br><\\/li>\\n                                <\\/ul>\\n                            <\\/div>\\n                        <\\/div>\\n                        <div class=\\\"col-md-6\\\">\\n                            <div class=\\\"row\\\">\\n                                <div class=\\\"col-md-4 footer-list-28 mt-5\\\">\\n                                    <h6 data-raw-content=\\\"true\\\" class=\\\"footer-title-28\\\">Company<\\/h6>\\n                                    <ul data-raw-content=\\\"true\\\">\\n                                        <li><a data-cke-saved-href=\\\"about.html\\\" href=\\\"about.html\\\">About<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"blog.html\\\" href=\\\"blog.html\\\">Blog Posts<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"pricing.html#faq\\\" href=\\\"pricing.html#faq\\\">FAQ<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"pricing.html\\\" href=\\\"pricing.html\\\">Pricing<\\/a><\\/li>\\n                                    <\\/ul>\\n                                <\\/div>\\n                                <div class=\\\"col-md-4 footer-list-28 mt-5\\\">\\n                                    <h6 data-raw-content=\\\"true\\\" class=\\\"footer-title-28\\\">Support<\\/h6>\\n                                    <ul data-raw-content=\\\"true\\\">\\n                                        <li><a data-cke-saved-href=\\\"contact.html\\\" href=\\\"contact.html\\\">Contact Us<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"signup.html\\\" href=\\\"signup.html\\\">Create account<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"learn.html\\\" href=\\\"learn.html\\\">Learning Center<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"career.html#team\\\" href=\\\"career.html#team\\\">Team<\\/a><\\/li>\\n                                    <\\/ul>\\n                                <\\/div>\\n                                <div class=\\\"col-md-4 footer-list-28 mt-5\\\">\\n                                    <h6 data-raw-content=\\\"true\\\" class=\\\"footer-title-28\\\">Product<\\/h6>\\n                                    <ul data-raw-content=\\\"true\\\">\\n                                        <li><a data-cke-saved-href=\\\"#URL\\\" href=\\\"#URL\\\">Market<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"#URL\\\" href=\\\"#URL\\\">VIP<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"#URL\\\" href=\\\"#URL\\\">Resources<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"#URL\\\" href=\\\"#URL\\\">Sale<\\/a><\\/li>\\n                                        <li><a data-cke-saved-href=\\\"#URL\\\" href=\\\"#URL\\\">Admin UI<\\/a><\\/li>\\n                                    <\\/ul>\\n                                <\\/div>\\n                            <\\/div>\\n                        <\\/div>\\n                    <\\/div>\\n                <\\/div>\\n                <div class=\\\"midd-footer-28 align-center py-lg-4 py-3 mt-5 IDKLGB4H5A049C819 IDKLGB9HW6VLW753\\\">\\n                    <div class=\\\"container\\\">\\n                        <p data-raw-content=\\\"true\\\" class=\\\"copy-footer-28 text-center\\\">\\u00a9 2020 Market. All Rights Reservedsfsd. Design by <a data-cke-saved-href=\\\"https:\\/\\/w3layouts.com\\/\\\" href=\\\"https:\\/\\/w3layouts.com\\/\\\">W3Layouts<\\/a><\\/p>\\n                    <\\/div>\\n                <\\/div>\\n            <\\/div>\\n        <\\/footer><!-- move top --><button onclick=\\\"topFunction()\\\" title=\\\"Go to top\\\" data-raw-content=\\\"true\\\" id=\\\"movetop\\\" class=\\\"IDKLGB4H5H5NXR120\\\">\\n            \\u2934\\n        <\\/button>\\n        <script>\\n            \\/\\/ When the user scrolls down 20px from the top of the document, show the button\\n            window.onscroll = function () {\\n              scrollFunction()\\n            };\\n            \\n            function scrollFunction() {\\n              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {\\n                document.getElementById(\\\"movetop\\\").style.display = \\\"block\\\";\\n              } else {\\n                document.getElementById(\\\"movetop\\\").style.display = \\\"none\\\";\\n              }\\n            }\\n            \\n            \\/\\/ When the user clicks on the button, scroll to the top of the document\\n            function topFunction() {\\n              document.body.scrollTop = 0;\\n              document.documentElement.scrollTop = 0;\\n            }\\n        <\\/script><!-- \\/move top -->\\n    <\\/section><!-- \\/\\/footer-28 block -->\\n<\\/div>\",\"is_html\":true}}}}', '2021-02-22 08:23:07', '2021-02-22 08:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `route`, `updated_at`, `created_at`) VALUES
(2, 1, 'en', 'About us', 'http://localhost/boilerplate/about_us', '2021-02-20 10:52:08', '2021-02-20 10:52:08'),
(3, 2, 'en', 'Services', 'http://localhost/boilerplate/services', '2021-02-22 08:12:53', '2021-02-22 08:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(50) NOT NULL,
  `value` mediumtext NOT NULL,
  `is_array` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`, `is_array`) VALUES
(1, 'languages', 'en', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `public_id` varchar(50) NOT NULL,
  `original_file` varchar(512) NOT NULL,
  `mime_type` varchar(50) NOT NULL,
  `server_file` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `public_id`, `original_file`, `mime_type`, `server_file`) VALUES
(2, 'b870f40f36f73cb4911e93ff12ed3b2c91ff7e0b', 'img_01_l.jpg', 'image/jpeg', 'b870f40f36f73cb4911e93ff12ed3b2c91ff7e0b/img_01_l.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_id` (`page_id`,`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting` (`setting`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `public_id` (`public_id`),
  ADD UNIQUE KEY `server_file` (`server_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
