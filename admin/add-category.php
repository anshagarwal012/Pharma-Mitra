<?php
require('header.php');
title('Add New | Pharma Mitra');
require('sidebar.php');
require('header2.php');

$msg="";
if(isset($_POST['submit'])){
	$category_name=mysqli_real_escape_string($con,$_POST['category_name']);
	$sql="INSERT INTO `category` (`Name`) VALUES ('".$category_name."')";
	if(mysqli_query($con, $sql)){
		$msg='<div class="col-md-12 py-2">
		<div class="alert alert-success" role="alert">
			Data Inserted Successfully
		</div></div>';
		?>
		<script>
			window.location.href= 'categories.php';
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
                <div class="custom-title">Add New Category</div>
            </div>
        </div>
        <div class="card-body">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="category_name" placeholder="Name" name="category_name" required>
                        </div>
                    </div>
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
