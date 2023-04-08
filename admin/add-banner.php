<?php
require('header.php');
title('Add Banner | Pharma Mitra');
require('sidebar.php');
require('header2.php');

$msg = "";
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $above_title = mysqli_real_escape_string($con, $_POST['above_title']);
    $below_title = mysqli_real_escape_string($con, $_POST['below_title']);
    $b_text = mysqli_real_escape_string($con, $_POST['b_text']);
    $b_link = mysqli_real_escape_string($con, $_POST['b_link']);
    $target_dir = "uploads/";
    $product_image = $target_dir . time() .  basename($_FILES["banner_image"]["name"]);
    move_uploaded_file($_FILES["banner_image"]["tmp_name"], $product_image);
    $sql = "INSERT INTO `banners`(`title`, `a_title`, `b_title`, `button_name`, `button_link`, `image_path`) VALUES ('" . $title . "','" . $above_title . "','" . $below_title . "','" . $b_text . "','" . $b_link . "','" . $product_image . "')";
    if (mysqli_query($con, $sql)) {
        $msg = '<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
    Data Inserted Successfully
</div></div>';
?>
        <script>
            window.location.href = 'banners';
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
                <div class="custom-title">Add New Product</div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="above_title" placeholder="Above Title" name="above_title" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="below_title" placeholder="Below Title" name="below_title" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="b_text" placeholder="Button Text" name="b_text" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="b_link" placeholder="Button Link" name="b_link" required>
                        </div>
                    </div>

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
