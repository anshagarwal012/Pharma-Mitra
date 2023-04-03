<?php
require('header.php');
title('Add New | Pharma Mitra');
require('sidebar.php');
require('header2.php');
$bill = "";
$msg="";
$sql = "SELECT ID, Name FROM `hospital`";
$result = mysqli_query($con, $sql);
if(isset($_POST['submit'])){
    $sql = "INSERT INTO `blood_bank`(`Hospital_ID`, `Blood_Group`) VALUES (".$_POST['hospital_id'].",'".$_POST['blood_group']."')";

    if(mysqli_query($con, $sql)){
        $msg='<div class="col-md-12 py-2"><div class="alert alert-success" role="alert">Data Inserted Successfully</div></div>';
    }else{
        $msg='<div class="col-md-12 py-2"><div class="alert alert-danger" role="alert">Data Insertion Failed</div></div>';
    }
?>
<script>
    setTimeout(() => {
        window.location.href= 'blood-bank.php';
    }, 1000);
</script>
<?php
}  
?>
<div class="col-xl-12">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-warning">
                <div class="custom-title">Add Blood Bank</div>
            </div>
            <?php echo $msg;?>
        </div>
        <div class="card-body">
            <form id="wizard-validation-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="right-text-label-form" method="POST">
                <div>
                    <section>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" for="userName">Hospital ID</label>
                            <div class="col-sm-6">
                                <select class="require form-control" name="hospital_id">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $row['ID']; ?>"><?php echo $row['Name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" for="password">
                                Blood Group</label>
                            <div class="col-sm-6">
                                <select class="form-control" required name="blood_group">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-purple">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
