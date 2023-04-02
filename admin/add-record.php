<?php
date_default_timezone_set('Asia/Kolkata');
require('header.php');
title('Add New Record | Webly Technolab');
require('sidebar.php');
require('header2.php'); 
$msg="";
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$mode=mysqli_real_escape_string($con,$_POST['mode']);
$method=mysqli_real_escape_string($con,$_POST['method']);
$amount=mysqli_real_escape_string($con,$_POST['amount']);
$description=mysqli_real_escape_string($con,$_POST['description']);
$login_name=$_SESSION['name'];
$date=date("d/m/Y");
$sql="insert into daybook(debit_credit, Name, Method, Price, Description, login_name, Date) values('$mode', '$name', '$method', '$amount', '$description', '$login_name', '$date')";
if(mysqli_query($con, $sql)){
   $msg='<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
                                Data Inserted Successfully
                            </div></div>';?>
                            <script>
setTimeout(function () {
   window.location.href= 'add-record.php';
}, 1500);
</script>
<?php
}else{
    $msg='<div class="col-md-12 py-2">
    <div class="alert alert-danger" role="alert">
                                Data Not Inserted
                            </div></div>';
}
}?>

<div class="col-xl-12 col-md-12">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Add Record</div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <select class="form-control" name="method" required>
                                <option value="Cash">Cash</option>
                                <option value="Bank">Bank Tranfer</option>
                                <option value="UPI">UPI</option>
                                <option value="Paytm">Paytm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group mt-1 d-flex justify-content-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="mode" value="Debit" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Debit</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="mode" value="Credit" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Credit</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount" name="amount" required>
                        </div>
                    </div>
                    <div class="col-md-8 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="description" required>
                        </div>
                    </div>
                    <?php echo $msg;?>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
