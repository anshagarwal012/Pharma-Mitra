<?php
require('conn.php');
if (empty($_SESSION['pass'])) {
    header('location:index');
}
if (!$_SESSION['is_admin']) {
    if ($_SERVER['REQUEST_URI'] != '/admin/orders') {
        header('location:orders');
    }
}
function title($title)
{ ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Ansh Agarwal">

        <!--favicon icon-->
        <link rel="icon" type="image/png" href="../assets/img/logo/trans-bg.png">

        <title><?php echo $title; ?></title>

        <!--web fonts-->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <!--bootstrap styles-->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!--icon font -->
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
        <!--jquery dropdown-->
        <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

        <!-- data-Table -->
        <link href="assets/vendor/Data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="assets/vendor/Data-tables/buttons.dataTables.min.css" rel="stylesheet">

        <!--custom styles-->
        <link href="assets/css/main.css" rel="stylesheet">

    </head>

    <body class="fixed-nav leftnav-floating">

        <!--navigation : sidebar & header-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

            <!--brand name-->
            <a class="navbar-brand" href="dashboard.php">
                <img width="200" class="pr-3 float-left" src="../assets/img/logo/logo1.png" />
                <!-- <div>Pharma Mitra</div>
                <span class="page-direction f12 weight300">
                    <span>Committed to Your Well-being</span>
                </span> -->
            </a><!--/brand name--><?php };
                                    ?>