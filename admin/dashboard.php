<?php
require('header.php');
title('Dashboard | Pharma Mitra');
require('sidebar.php');
require('header2.php'); 

$sql="SELECT COUNT(ID) FROM `blood_bank`";
$blood_bank=mysqli_query($con, $sql);

$sql1="SELECT COUNT(ID) FROM `hospital`";
$hospital=mysqli_query($con, $sql1);

$sql4="SELECT COUNT(ID) FROM `products`";
$products=mysqli_query($con, $sql4);

?>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4 pt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="custom-title-wrap bar-success mt-2 mb-4">
                            <div class="custom-title">Short Reports</div>
                            <div class="custom-post-title">All the details in summery Form</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="media d-flex align-items-center  mb-4">
                            <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                <i class="vl_user-male"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500"><?php echo mysqli_fetch_all($products, MYSQLI_ASSOC)[0]['COUNT(ID)'];?></h4>
                                <span class="text-muted">Products Created</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="media d-flex align-items-center  mb-4">
                            <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                <i class="vl_form"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500"><?php echo mysqli_fetch_all($hospital, MYSQLI_ASSOC)[0]['COUNT(ID)'];?></h4>
                                <span class="text-muted">Total Hospital</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="media d-flex align-items-center  mb-4">
                            <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                <i class="vl_shopping-bag2"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500"><?php echo mysqli_fetch_all($blood_bank, MYSQLI_ASSOC)[0]['COUNT(ID)'];?></h4>
                                <span class="text-muted">All Blood Banks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.php');
