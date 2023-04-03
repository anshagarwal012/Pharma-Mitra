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
  
if(strpos($url, 'dashboard.php') == true){
$a ="active";
}elseif(strpos($url, 'invoices.php') == true){
 $b="active";
 $j="show";
}elseif(strpos($url, 'generate-invoice.php') == true){
    $c="active";
    $j="show";
   }elseif(strpos($url, 'add-customer.php') == true){
    $d="active";
    $k="show";
   }elseif(strpos($url, 'customers.php') == true){
    $e="active";
    $k="show";
   }elseif(strpos($url, 'add-service.php') == true){
    $f="active";
    $l="show";
   }elseif(strpos($url, 'services.php') == true){
    $g="active";
    $l="show";
   }elseif(strpos($url, 'add-record.php') == true){
    $h="active";
    $m="show";
   }elseif(strpos($url, 'daybook.php') == true){
    $i="active";
    $m="show";
   }elseif(strpos($url, 'connectus.php') == true){
    $n="active";
    $o="show";
   }elseif(strpos($url, 'subscribe.php') == true){
    $p="active";
    $o="show";
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

                <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms" id="invoice">
                        <i class="vl_form"></i>
                        <span class="nav-link-text">Invoice</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $j ?>" id="forms" data-parent="#accordion">
                        <li class="<?php echo $b ?>"> <a href="invoices.php">All Invoice</a> </li>
                        <li class="<?php echo $c ?>"> <a href="generate-invoice.php">Generate Invoice</a> </li>

                    </ul>
                </li> -->

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_user-male"></i>
                        <span class="nav-link-text">Products</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $k ?>" id="d_tables" data-parent="#accordion">
                        <li class="<?php echo $d ?>" > <a href="add-customer.php">Add New</a> </li>
                        <li class="<?php echo $e ?>" > <a href="customers.php">All Products</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Hospitals</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $l ?>" id="charts" data-parent="#accordion">
                        <li class="<?php echo $f ?>"> <a href="add-service.php">Add New</a> </li>
                        <li class="<?php echo $g ?>"> <a href="services.php">All Hospitals</a> </li>
                    </ul>
                </li>

                <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#extra_pages">
                        <i class="vl_book"></i>
                        <span class="nav-link-text">Day Book</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $m ?>" id="extra_pages" data-parent="#accordion">
                        <li class="<?php echo $h ?>"> <a href="add-record.php">Add Record</a> </li>
                        <li class="<?php echo $i ?>"> <a href="daybook.php">All Records</a> </li>
                    </ul>
                </li> -->
                
                <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#connect">
                        <i class="vl_accordion-vertical"></i>
                        <span class="nav-link-text">Contact Us Form</span>
                    </a>
                    <ul class="sidenav-second-level collapse <?php echo $o ?>" id="connect" data-parent="#accordion">
                        <li class="<?php echo $n ?>"> <a href="connectus.php">Contact Us</a> </li>
                        <li class="<?php echo $p ?>"> <a href="subscribe.php">Subscribe</a> </li>
                    </ul>
                </li> -->
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
