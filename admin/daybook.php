<?php
require('header.php');
title('Daybook | Webly Technolab');
require('sidebar.php');
require('header2.php');
$sql="Select * from daybook order by id desc";
$result=mysqli_query($con, $sql);
?>
<div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">All Records</div>
                            </div>
                        </div>
                        <div class="card-body- pt-3 pb-4">
                            <div class="table-responsive">
                                <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Debit/Credit</th>
                                        <th>Method</th>
                                        <th>Amount</th>
                                        <th>Inserted Name</th>
                                        <th>Description</th>
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
                                            <td><?php echo $row['Date']; ?></td>
                                            <td><?php echo $row['Name']; ?></td>
                                            <td><?php echo $row['debit_credit']; ?></td>
                                            <td><?php echo $row['Method']; ?></td>
                                            <td><?php echo $row['Price']; ?></td>
                                            <td><?php echo $row['login_name']; ?></td>
                                            <td><?php echo $row['Description']; ?></td>
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