<?php
include './conn.php';
$sql = "DELETE FROM `".$_GET['table']."` WHERE ID = " . $_GET['ID'];
mysqli_query($con, $sql);
header('Location: '.$_SERVER['HTTP_REFERER']);