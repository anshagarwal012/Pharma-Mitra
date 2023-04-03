<?php
require('header.php');
title('Add New | Pharma Mitra');
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
    window.location.href= 'hospitals.php';
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
                            <textarea class="form-control" name="hospital_address" id="hospital_address" cols="5" rows="5" placeholder="Enter Address"></textarea>
                        </div>
                    </div>                    
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <select class="form-control" name="hospital_state" id="hospital_state" required>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
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
