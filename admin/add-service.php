<?php
require('header.php');
title('Add New Service | Webly Technolab');
require('sidebar.php');
require('header2.php');
$msg="";
if(isset($_POST['submit'])){
$hospital_name=mysqli_real_escape_string($con,$_POST['hospital_name']);
$hospital_email=mysqli_real_escape_string($con,$_POST['hospital_email']);
$hospital_phone=mysqli_real_escape_string($con,$_POST['hospital_phone']);
$hospital_address=mysqli_real_escape_string($con,$_POST['hospital_address']);
$hospital_state=mysqli_real_escape_string($con,$_POST['hospital_state']);
$sql="INSERT INTO `hospital`(`Name`, `Email`, `Phone`, `Address`, `State`) VALUES ('".$hospital_name."','".$hospital_email."','".$hospital_phone."','".$hospital_address."','".$hospital_state."')";
if(mysqli_query($con, $sql)){
   $msg='<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
            Data Inserted Successfully
    </div></div>';
?>
<script>
    window.location.href= 'services.php';
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

<div class="col-xl-12 col-md-12">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Add New Hospital</div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="hospital_name" placeholder="Hospital Name" name="hospital_name" required>
                        </div>
                    </div>                    
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                        <input type="email" class="form-control" id="hospital_email" placeholder="Email" name="hospital_email" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input class="form-control" type="number" name="hospital_phone" id="hospital_phone" placeholder="Phone" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <textarea class="form-control" name="hospital_address" id="hospital_address" cols="5" rows="5"></textarea>
                        </div>
                    </div>                    
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <select class="form-control" name="hospital_state" id="hospital_state" required>
                                <option value="uttar_pradesh">Uttar Pradesh</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php echo $msg;?>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
