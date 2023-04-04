<?php
// session_start();
// $con = mysqli_connect('localhost','root','','blood_bank');
session_start();
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "u154600564_pm";
$password = "Webly@123";
$database = "u154600564_pm";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
