<?php
require('header.php');
title('Add New | Pharma Mitra');
require('sidebar.php');
require('header2.php');
$category_sql="SELECT * FROM `category` ORDER BY ID DESC";
$category_result=mysqli_query($con, $category_sql);
$msg="";
if(isset($_POST['submit'])){
$product_name=mysqli_real_escape_string($con,$_POST['product_name']);
$category=mysqli_real_escape_string($con,$_POST['category']);
$product_price=mysqli_real_escape_string($con,$_POST['product_price']);
$target_dir = "uploads/";
$product_image = $target_dir . time() .  basename($_FILES["product_image"]["name"]);
move_uploaded_file($_FILES["product_image"]["tmp_name"], $product_image);
$product_description=mysqli_real_escape_string($con,$_POST['product_description']);
$product_manufacture=mysqli_real_escape_string($con,$_POST['product_manufacture']);
$login_name=$_SESSION['name'];
$date=date("d/m/Y");
$sql="INSERT INTO `products`(`Name`, `Price`, `Image`, `Description`, `Manufacture`, `Category_ID`) VALUES ('".$product_name."','".$product_price."','".$product_image."','".$product_description."','".$product_manufacture."','".$category."')";

if(mysqli_query($con, $sql)){
   $msg='<div class="col-md-12 py-2">
   <div class="alert alert-success" role="alert">
    Data Inserted Successfully
</div></div>';
?>
<script>
    window.location.href= 'products.php';
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
                <div class="custom-title">Add New Product</div>
            </div>
        </div>
        <div class="card-body">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="product_name" placeholder="Name" name="product_name" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="product_price" placeholder="Price" name="product_price" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="file" class="form-control" id="product_image" name="product_image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="product_manufacture" placeholder="Manufacture" name="product_manufacture" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <textarea rows="4" cols="50" class="form-control" id="product_description" placeholder="Description" name="product_description" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <select name="category" id="category" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($category_result)>0){
                                        while($row=mysqli_fetch_assoc($category_result)){
                                            ?>
                                            <option value="<?php echo $row['ID']; ?>"><?php echo $row['Name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                            </select>
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
