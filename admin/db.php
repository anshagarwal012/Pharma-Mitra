<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$database = "wt_riya";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// $sql = "CREATE TABLE IF NOT EXISTS `contacts` (
// 	`id` INT(50) NOT NULL AUTO_INCREMENT,
// 	`datetime` VARCHAR(50),
// 	`name` VARCHAR(255),
// 	`email` VARCHAR(255),
// 	`phone` VARCHAR(255),
// 	`message` LONGTEXT,
// 	PRIMARY KEY (`id`)
// )";
// mysqli_query($conn, $sql);

// $sql = "CREATE TABLE IF NOT EXISTS `lp` (
// 	`id` INT(50) NOT NULL AUTO_INCREMENT,
// 	`datetime` VARCHAR(50),
// 	`name` VARCHAR(255),
// 	`email` VARCHAR(255),
// 	`phone` VARCHAR(255),
// 	`city` VARCHAR(255),
// 	`state` VARCHAR(255),
// 	`country` VARCHAR(255),
// 	`linkedin_url` VARCHAR(255),
// 	`company_name` VARCHAR(255),
// 	`referral` VARCHAR(255),
// 	`active_investor` VARCHAR(255),
// 	`invest_as` VARCHAR(255),
// 	`radio` VARCHAR(255),
// 	`declaration` VARCHAR(255),
// 	PRIMARY KEY (`id`)
// )";
// mysqli_query($conn, $sql);

// $sql = "CREATE TABLE IF NOT EXISTS `funding` (
// 	`id` INT(50) NOT NULL AUTO_INCREMENT,
// 	`datetime` VARCHAR(50),
// 	`sname` VARCHAR(255),
// 	`fname` VARCHAR(255),
// 	`email` VARCHAR(255),
// 	`phone` VARCHAR(255),
// 	`position` VARCHAR(255),
// 	`startupdesc` VARCHAR(255),
// 	`industry` VARCHAR(255),
// 	`website` VARCHAR(255),
// 	`country` VARCHAR(255),
// 	`stage` VARCHAR(255),
// 	`funding` VARCHAR(255),
// 	`pitch_desk` VARCHAR(255),
// 	`sdocuments` VARCHAR(255),
// 	PRIMARY KEY (`id`)
// )";
// mysqli_query($conn, $sql);
