<?php
require('header.php');
title('Dashboard | Webly Technolab');
require('sidebar.php');
require('header2.php'); 

$sql="Select * from customers order by id desc";
$result=mysqli_query($con, $sql);

$sql1="Select * from daybook order by id desc";
$result1=mysqli_query($con, $sql1);

$sql4="Select SUM(Price) from daybook where Method = 'Cash'";
$result4=mysqli_query($con, $sql4);

$sql2="Select * from invoice order by id desc";
$result2=mysqli_query($con, $sql2);

$sql3="Select * from services order by id desc";
$result3=mysqli_query($con, $sql3);

$sql5="Select SUM(Price) from daybook where debit_credit = 'Credit'";
$result5=mysqli_query($con, $sql5);

$sql6="Select SUM(Price) from daybook where debit_credit = 'Debit'";
$result6=mysqli_query($con, $sql6);


if(mysqli_num_rows($result)>0){
    $customer = mysqli_num_rows($result);
    }

    if(mysqli_num_rows($result4)>0){
        $total = mysqli_fetch_assoc($result4);
        }
    if(mysqli_num_rows($result2)>0){
        $invoice = mysqli_num_rows($result2);
        }

        if(mysqli_num_rows($result3)>0){
            $services = mysqli_num_rows($result3);
            }
            if(mysqli_num_rows($result5)>0){
                $credit = mysqli_fetch_assoc($result5);
            }
                if(mysqli_num_rows($result6)>0){
                    $debit = mysqli_fetch_assoc($result6);
                   
                    }
            $left= $credit['SUM(Price)']- $debit['SUM(Price)'];
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
                                <h4 class="text-uppercase mb-0 weight500"><?php echo $customer;?></h4>
                                <span class="text-muted">Customer Created</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="media d-flex align-items-center  mb-4">
                            <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                <i class="vl_form"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500"><?php echo $invoice;?></h4>
                                <span class="text-muted">Invoice Generated</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="media d-flex align-items-center  mb-4">
                            <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                <i class="vl_shopping-bag2"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500"><?php echo $services;?></h4>
                                <span class="text-muted">Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center ">
                    <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                        <i class="vl_money-bag"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500"><?php echo $total['SUM(Price)']; ?></h4>
                        <span class="text-muted">Total Cash Credit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center">
                    <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                        <i class="vl_arrow-down"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500"><?php 
                        if($debit['SUM(Price)']){
                            echo $debit['SUM(Price)']; 
                        }else{
                            echo 00; 
                        }?>
                        </h4>
                        <span class="text-muted">Debit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center">
                    <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                        <i class="vl_arrow-up"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500"><?php 
                        if($credit['SUM(Price)']){
                            echo $credit['SUM(Price)']; 
                        }else{
                            echo 00; 
                        }?></h4>
                        <span class="text-muted">Credit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center">
                    <div class="mr-4 rounded-circle bg-purple-light sr-icon-box bubble-shadow-small">
                        <i class="vl_money"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500"><?php echo $left;?></h4>
                        <span class="text-muted">Amount left</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.php');
