<?php
require('header.php');
title('Subscribe Newsletter List | Webly Technolab');
require('sidebar.php');
require('header2.php');
$sql="Select * from subscribe order by id desc";
$result=mysqli_query($con, $sql);
?>
<div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Subscribe Newsletter Query</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Date</th>
                                        <th>Email</th>
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
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
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