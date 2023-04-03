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

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  {
$url = "https://";   
}else{
$url = "http://";
}
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
  
if(strpos($url, 'dashboard.php')){
$a ="active";
}elseif(strpos($url, 'add-blood-bank.php')){
    $c="active";
    $j="show";
}elseif(strpos($url, 'blood-bank.php')){
    $b="active";
    $j="show";
   }elseif(strpos($url, 'add-product.php')){
    $d="active";
    $k="show";
   }elseif(strpos($url, 'products.php')){
    $e="active";
    $k="show";
   }elseif(strpos($url, 'add-hospitals.php')){
    $f="active";
    $l="show";
   }elseif(strpos($url, 'hospitals.php')){
    $g="active";
    $l="show";
   }


?><!--responsive nav toggle-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/responsive nav toggle-->

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <!--left side nav-->
            <ul class="navbar-nav left-side-nav" id="accordion">

                <li class="nav-item <?php echo $a ?>" data-toggle="tooltip" data-placement="right" title="Calendar">
                    <a class="nav-link" href="dashboard.php">
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
                        <li class="<?php echo $b ?>"> <a href="blood-bank.php">All Blood Bank</a> </li>
                        <li class="<?php echo $c ?>"> <a href="add-blood-bank.php">Add Blood Bank</a> </li>

                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_user-male"></i>
                        <span class="nav-link-text">Products</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $k ?>" id="d_tables" data-parent="#accordion">
                        <li class="<?php echo $d ?>" > <a href="add-product.php">Add New</a> </li>
                        <li class="<?php echo $e ?>" > <a href="products.php">All Products</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Hospitals</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $l ?>" id="charts" data-parent="#accordion">
                        <li class="<?php echo $f ?>"> <a href="add-hospitals.php">Add New</a> </li>
                        <li class="<?php echo $g ?>"> <a href="hospitals.php">All Hospitals</a> </li>
                    </ul>
                </li>
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
