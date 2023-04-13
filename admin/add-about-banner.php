<?php
require('header.php');
title('Add About Banner | Pharma Mitra');
require('sidebar.php');
require('header2.php');

$msg = "";
if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $product_image = $target_dir . time() .  basename($_FILES["banner_image"]["name"]);
    move_uploaded_file($_FILES["banner_image"]["tmp_name"], $product_image);
    $sql = "INSERT INTO `about_banner`(`image`) VALUES ('" . $product_image . "')";
    if (mysqli_query($con, $sql)) {
        $msg = '<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
    Data Inserted Successfully
</div></div>';
?>
        <script>
            window.location.href = 'about-banner';
        </script>
<?php
    } else {
        $msg = '<div class="col-md-12 py-2">
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
                <div class="custom-title">Add New Banner</div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="file" class="form-control" required id="banner_image" name="banner_image">
                        </div>
                    </div>
                </div>
                <?php echo $msg; ?>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
