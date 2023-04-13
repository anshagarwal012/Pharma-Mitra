<?php
require('header.php');
title('All About Banners | Pharma Mitra');
require('sidebar.php');
require('header2.php');
$sql = "SELECT * FROM `about_banner` ORDER BY ID DESC";
$result = mysqli_query($con, $sql);
?>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">All About Banners</div>
                </div>
            </div>
            <div class="card-body- pt-3 pb-4">
                <div class="table-responsive">
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
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
                                            <img class="w-100" src="<?php echo $row['image']; ?>">
                                        </td>
                                        <td>
                                            <a href="delete.php?table=about_banner&ID=<?php echo $row['id']; ?>"><i class="vl_recycle-bin delete"></i></a>
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