<?php
require('header.php');
title('All Invoices | Webly Technolab');
require('sidebar.php');
require('header2.php');
$paid="";
$sql = "Select invoice.date, invoice.qty, invoice.advance, invoice.price, customers.name, customers.email, invoice.c_id, invoice.id from invoice inner join customers on invoice.c_id = customers.id order by invoice.id desc";
$result = mysqli_query($con, $sql);

?>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">All Invoice</div>
                </div>
            </div>
            <div class="card-body- pt-3 pb-4">
                <div class="table-responsive">
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Advance</th>
                                <th>Total Bill</th>
                                <th>Balance</th>
                                <th>Reprint Invoice</th>
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
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <?php $qty=json_decode($row['qty']);
                                                  $price=json_decode($row['price']);
                                                  $total= array();
                                                  foreach(array_combine($qty, $price) as $code => $name){
                                                    $total[]= intval($code) * intval($name);
                                                };
                                                $advance = intval($row['advance']);
                                                $totalnew= array_sum($total);

                                                ?> <td><?php echo $advance; ?></td>
                                                <td><?php echo $totalnew; ?></td><?php
                                                $balance=$totalnew-$advance;
                                                if(($totalnew-$advance)==0){
                                                    $paid = '<button type="button" class="btn btn-success btn-lg">Full Paid</button>';
                                                }else{
                                                    $paid = '<button type="button" class="btn btn-info btn-lg">'.$balance.'</button>';
                                                }?>
                                                <td><?php echo $paid; ?></td>
                                        <td><a href="invoiceprint.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-outline-success"><i class="fa fa-desktop mr-2"></i>Reprint</button></a></td>
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