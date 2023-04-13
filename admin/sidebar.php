<?php
$a = "";
$b = "";
$c = "";
$d = "";
$e = "";
$f = "";
$g = "";
$h = "";
$i = "";
$j = "";
$k = "";
$l = "";
$m = "";
$n = "";
$o = "";
$p = "";

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
}
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];

if (strpos($url, 'dashboard')) {
    $a = "active";
} elseif (strpos($url, 'add-blood-bank')) {
    $c = "active";
    $j = "show";
} elseif (strpos($url, 'blood-bank')) {
    $b = "active";
    $j = "show";
} elseif (strpos($url, 'add-product')) {
    $d = "active";
    $k = "show";
} elseif (strpos($url, 'products')) {
    $e = "active";
    $k = "show";
} elseif (strpos($url, 'add-hospitals')) {
    $f = "active";
    $l = "show";
} elseif (strpos($url, 'hospitals')) {
    $g = "active";
    $l = "show";
} elseif (strpos($url, 'add-banner')) {
    $h = "active";
    $m = "show";
} elseif (strpos($url, 'banners')) {
    $i = "active";
    $m = "show";
} elseif (strpos($url, 'add-about-banner')) {
    $j = "active";
    $n = "show";
} elseif (strpos($url, 'about-banner')) {
    $i = "active";
    $n = "show";
}


?><!--responsive nav toggle-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!--/responsive nav toggle-->

<div class="collapse navbar-collapse" id="navbarResponsive">

    <!--left side nav-->
    <ul class="navbar-nav left-side-nav" id="accordion">
        <?php
        if (!$_SESSION['is_admin']) { ?>
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Calendar">
                <a class="nav-link" href="dashboard">
                    <i class="vl_dashboard"></i>
                    <span class="nav-link-text">Orders</span>
                </a>
            </li>
        <?php
        } else { ?>
            <li class="nav-item <?php echo $a ?>" data-toggle="tooltip" data-placement="right" title="Calendar">
                <a class="nav-link" href="dashboard">
                    <i class="vl_dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms" id="invoice">
                    <i class="vl_form"></i>
                    <span class="nav-link-text">Blood Bank</span>
                </a>
                <ul class="sidenav-second-level collapse <?php echo $j ?>" id="forms" data-parent="#accordion">
                    <li class="<?php echo $b ?>"> <a href="blood-bank">All Blood Bank</a> </li>
                    <li class="<?php echo $c ?>"> <a href="add-blood-bank">Add Blood Bank</a> </li>

                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                    <i class="vl_user-male"></i>
                    <span class="nav-link-text">Products</span>
                </a>
                <ul class="sidenav-second-level collapse <?php echo $k ?>" id="d_tables" data-parent="#accordion">
                    <li class="<?php echo $d ?>"> <a href="add-product">Add New</a> </li>
                    <li class="<?php echo $e ?>"> <a href="products">All Products</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                    <i class="vl_files"></i>
                    <span class="nav-link-text">Hospitals</span>
                </a>
                <ul class="sidenav-second-level collapse <?php echo $l ?>" id="charts" data-parent="#accordion">
                    <li class="<?php echo $f ?>"> <a href="add-hospitals">Add New</a> </li>
                    <li class="<?php echo $g ?>"> <a href="hospitals">All Hospitals</a> </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="banner">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#banner">
                    <i class="vl_files"></i>
                    <span class="nav-link-text">Banners</span>
                </a>
                <ul class="sidenav-second-level collapse <?php echo $m ?>" id="banner" data-parent="#accordion">
                    <li class="<?php echo $h ?>"> <a href="add-banner">Add Banner</a> </li>
                    <li class="<?php echo $i ?>"> <a href="banners">All Banners</a> </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="about_banner">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#about_banner">
                    <i class="vl_files"></i>
                    <span class="nav-link-text">About Banners</span>
                </a>
                <ul class="sidenav-second-level collapse <?php echo $n ?>" id="about_banner" data-parent="#accordion">
                    <li class="<?php echo $j ?>"> <a href="add-about-banner">Add About Banner</a> </li>
                    <li class="<?php echo $i ?>"> <a href="about-banner">All About Banners</a> </li>
                </ul>
            </li>
        <?php }
        ?>
    </ul>
    <!--/left side nav-->

    <!--nav push link-->
    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="left-nav-toggler">
                <i class="fa fa-angle-left"></i>
            </a>
        </li>
    </ul>
    <!--/nav push link-->