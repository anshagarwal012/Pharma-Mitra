<?php
require('header.php');
title('All Banners | Pharma Mitra');
require('sidebar.php');
require('header2.php');
$sql = "SELECT * FROM `banners` ORDER BY ID DESC";
$result = mysqli_query($con, $sql);
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
                                <th>Title</th>
                                <th>Above Title</th>
                                <th>Below Title</th>
                                <th>Button Text</th>
                                <th>Button link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <img class="w-100" src="<?php echo $row['image_path']; ?>">
                                        </td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['a_title']; ?></td>
                                        <td><?php echo $row['b_title']; ?></td>
                                        <td><?php echo $row['button_name']; ?></td>
                                        <td><?php echo $row['button_link']; ?></td>
                                        <td>
                                            <a href="delete.php?table=banners&ID=<?php echo $row['id']; ?>"><i class="vl_recycle-bin delete"></i></a>
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