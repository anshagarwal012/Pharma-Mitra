<?php
require('header.php');
title('Generate Invoice | Webly Technolab');
require('sidebar.php');
require('header2.php');
$bill = "";
$msg="";
$sql = "Select * from customers order by id desc";
$result = mysqli_query($con, $sql);

$sql1 = "Select * from invoice order by id desc";
$result1 = mysqli_query($con, $sql1);


if (mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_assoc($result1);
    $bill = $row1['id'] + 1;
} else {
    $bill = 1;
}
if(isset($_POST['submit'])){
    $sql3 = "Select * from invoice order by id desc";
    $result3 = mysqli_query($con, $sql3);

    $c_id=mysqli_real_escape_string($con,$_POST['customer']);
    $category=mysqli_real_escape_string($con,$_POST['category']);
    $service=json_encode($_POST['category1']);
    $qty=json_encode($_POST['qty']);
    $price=json_encode($_POST['price']);
    $advance=mysqli_real_escape_string($con,$_POST['advance']);
    $login_name=$_SESSION['name'];
    $date=date("d/m/Y");
    
$sql="INSERT INTO invoice(i_no, c_id, s_id, category, qty, price, advance, login_name, date) VALUES ('$bill', '$c_id', '$category', '$service', '$qty', '$price', '$advance','$login_name', '$date')";
if(mysqli_query($con, $sql)){
   $msg='<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
                                Data Inserted Successfully
                            </div></div>';?>
                            <script>
setTimeout(function () {
   window.location.href= 'generate-invoice.php';
}, 1500);
</script>
<?php
}else{
    $msg='<div class="col-md-12 py-2">
    <div class="alert alert-danger" role="alert">
                                Data Not Inserted
                            </div></div>';
}
}  
?>
<div class="col-xl-12">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-warning">
                <div class="custom-title">Generate Invoice</div>
            </div>
            <?php echo $msg;?>
        </div>
        <div class="card-body">
            <form id="wizard-validation-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="right-text-label-form" method="POST">
                <div>
                    <section>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" for="userName">Customer Name *</label>
                            <div class="col-sm-6">
                                <select class="require form-control" name="customer">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" for="password">
                                Category *</label>
                            <div class="col-sm-6">
                                <select class="form-control" required name="category">
                                    <option value="Web">Web</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Designing">Designing</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" for="confirm">Bill No. <small>(Auto Generated)</small> *</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bill No." value="<?php echo $bill; ?>" readonly required>
                            </div>
                        </div>

                    </section>
                    <section>
                        <div class="row font-weight-bold">
                            <div class="col-md-1 py-2">
                                <div class="form-group">
                                    <label>Sr.</label>
                                </div>
                            </div>
                            <div class="col-md-5 py-2">
                                <div class="form-group">
                                    <label>Service Name</label>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="form-group">
                                    <label>Qty.</label>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="form-group">
                                    <label>Price.</label>
                                </div>
                            </div>
                        </div>
                        <?php 
                        for($i=1;$i<8; $i++){?>

                        <div class="input_fields_wrap">
                            <div class="row font-weight-bold">
                                <div class="col-md-1 py-2">
                                    <div class="form-group">
                                        <label><?php echo $i;?></label>
                                    </div>
                                </div>
                                <div class="col-md-5 py-2">
                                    <div class="form-group">
                                        <select class="form-control" name="category1[]">
                                        <option value="">Select Service</option>
                                            <?php
                                        $sql2 = "Select * from services order by id desc";
                                        $result2 = mysqli_query($con, $sql2);
                                            if (mysqli_num_rows($result2) > 0) {
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                    <option value="<?php echo $row2['service']; ?>"><?php echo $row2['service']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="qty[]" placeholder="Enter Qty.">
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="price[]" placeholder="Enter Price">
                                    </div>
                                </div>

                            </div>
                           <?php } ?>
                        </div>
                    </section>
                    <section>
                        <div class="form-group row">
                            <label class="required col-sm-4 col-form-label col-form-label-sm" for="confirm">Advanced. <small>(if any)</small> *</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount" name="advance" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2 mx-auto">
                                <input type="submit" class="form-control btn btn-success form-pill" value="Submit" name="submit" required>
                            </div>
                        </div>
                        
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
