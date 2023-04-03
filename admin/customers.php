<?php
require('header.php');
title('All Customers | Webly Technolab');
require('sidebar.php');
require('header2.php');
$sql="SELECT * FROM `products` ORDER BY ID DESC";
$result=mysqli_query($con, $sql);
?>
<div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">All Products</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Manufacture</th>
                                        <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 1;
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <img class="w-100" src="<?php echo $row['Image']; ?>">
                                            </td>
                                            <td><?php echo $row['Name']; ?></td>
                                            <td><?php echo $row['Price']; ?></td>
                                            <td><?php echo $row['Description']; ?></td>
                                            <td><?php echo $row['Manufacture']; ?></td>
                                            <td>
                                                <i class="vl_pencil"></i>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                <a href="delete.php?table=products&ID=<?php echo $row['ID'];?>"><i class="vl_recycle-bin delete"></i></a>
                                            </td>
                                            </tr>
                                        <?php
                                        $i++;
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require('footer.php'); ?>