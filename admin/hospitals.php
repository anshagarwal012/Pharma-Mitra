<?php
require('header.php');
title('All Hospitals | Pharma Mitra');
require('sidebar.php');
require('header2.php');
$sql="SELECT * FROM `hospital` ORDER BY ID DESC";
$result=mysqli_query($con, $sql);
?>
<div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">All Hospitals</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>State</th>
                                        <th>Address</th>
                                        <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['Name']; ?></td>
                                            <td><?php echo $row['Email']; ?></td>
                                            <td><?php echo $row['Phone']; ?></td>
                                            <td><?php echo $row['State']; ?></td>
                                            <td><?php echo $row['Address']; ?></td>
                                            <td>
                                                <a href="delete.php?table=hospital&ID=<?php echo $row['ID'];?>"><i class="vl_recycle-bin delete"></i></a>
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