<?php
require('conn.php');
if (empty($_SESSION['pass'])) {
    header('location:index.php');
} 

$title="";
if(isset($_GET['id']) && (!empty($_GET['id']))){
    $id=$_GET['id'];
    $sql="Select invoice.date, invoice.qty, invoice.advance, invoice.price, invoice.category, invoice.login_name, customers.name, customers.email, customers.phone, customers.address, invoice.c_id, invoice.i_no from invoice
    LEFT join customers on invoice.c_id = customers.id WHERE invoice.id = $id";
    $result=mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title= $row['name'] . '- Webly technolab';
        $item = array_filter(json_decode($row['category']));
        $qty = array_filter(json_decode($row['qty']));
        $price = array_filter(json_decode($row['price']));
    }
}else{
$title = "Invoice - Webly Technplab";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <title><?php echo $title;?></title>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/print.css" media="print" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-shadow p-5">
                    <div class="card-body">
                        <div class="row py-4">
                            <div class="col-sm-4">
                                <img src="assets/img/logo webly technolab.png" class="mt-2 mb-5" width="80%" alt="Webly Technolab Logo" />

                                <h1 class="text-danger display-4 weight700 my-5 text-uppercase" id="invoice">Invoice</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row mb-5">
                                            <div class="col-8">
                                                <small class="text-muted text-uppercase weight600">date</small>
                                                <h5 class="mb-0"><?php echo $row['date'];?></h5>
                                            </div>
                                            <div class="col-4">
                                                <small class="text-muted text-uppercase weight600">invoice #</small>
                                                <h5 class="mb-0">WT-0<?php echo $row['i_no'];?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <address class="mb-5 col-5">
                                        <strong>Web</strong>
                                        <br> <span class="text-muted"> <a id="t" class="text-secondary" href="https://weblytechnolab.tech">www.weblytechnolab.tech </a></span>
                                        <br> <span class="text-muted"><a id="t" class="text-secondary" href="mailto:ansh@weblytechnolab.tech">ansh@weblytechnolab.tech </a></span>
                                    </address>
                                    <address class="mb-5 col-4">
                                        <strong>Phone</strong>
                                        <br> <span class="text-muted"> <a class="text-secondary" href="tel:+919696084837" id="t">+91 96960 84837</a></span>
                                        <br> <span class="text-muted"><a class="text-secondary" href="tel:+918127916695" id="t">+91 81279 16695</a></span>
                                    </address>

                                    <address class="mb-5 col-3">
                                        <strong>Our Branches</strong>
                                        <br> <span class="text-muted">Aminabad, Hazaratganj</span>
                                        <br> <span class="text-muted">Gomti Nagar</span>
                                    </address>
                                </div>
                                <div class="text-right pr-3 mb-3">
                                    <small class="text-muted text-uppercase weight600">To.</small>
                                    <h3 class="mb-0 text-danger"><?php echo $row['name']?></h3>
                                </div>
                                <div class="text-right pr-3 my-2">
                                    <small class="text-muted text-uppercase weight600">Address :</small>
                                    <h5 class="mb-0 text-muted"><?php echo $row['address']?></h5> <br>
                                    <small class="text-muted text-uppercase weight600">Email & Phone No. :</small>
                                    <h5 class="mb-0 text-muted py-2"><a href="mailto:<?php echo $row['email']?>" id="t" class="text-secondary"><?php echo $row['email']?></a></h5>
                                    <h5 class="mb-0 text-muted"><a href="tel:+91<?php echo $row['phone']?>" id="t" class="text-secondary"><?php echo $row['phone']?></a></h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">SERIAL</th>
                                                <th scope="col">ITEM DESCRITPION</th>
                                                <th scope="col">PRICE</th>
                                                <th scope="col">QUANTITY</th>
                                                <th scope="col">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-muted">
                                            <?php 
                                             $i = 1;
                                             foreach($item as $ITEM => $val ){
                                                $total= array();
                                                foreach(array_combine($qty, $price) as $code => $name){
                                                    $total[]= intval($code) * intval($name);
                                                };
                                                  ?>
                                                <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $val;?></td>
                                                <td><?php echo $price["$ITEM"];?></td>
                                                <td><?php echo $qty["$ITEM"];?></td>
                                                <td><?php echo $total["$ITEM"];?></td>
                                            </tr><?php
                                            $i++;
                                             }
                                            ?>
                                            
                                            <?php  ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="mt-4 mb-5">
                                    <strong class="text-uppercase f12">Terns & Conditioms </strong>
                                    <br> <span class="text-muted">* Thank you for choosing Webly Technolab Services</span>
                                    <br> <span class="text-muted">* Please call us for any Questions</span>
                                    <br> <span class="text-muted">* 50 Percent Payment Advanced and 50 Percent after Delivery.</span>
                                    <br> <span class="text-muted">* 1 Year Technical Support.</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <table class="table invoice-table text-muted" style="margin-top: -1.01rem">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sub Total</th><?php
                                            $totalnew= array_sum($total);
                                            $gtotal = $totalnew - $row['advance'];?>
                                            <th scope="col"><?php echo $totalnew ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-danger">Advanced</td>
                                            <td class="text-danger"><?php echo $row['advance']?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark">Total</th>
                                            <th><span class="f24 text-danger"><?php echo $gtotal?></span></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <h3 class="mb-0 text-danger">Payment Method</h3><br>
                        <div class="row">
                            <address class="mb-5 col-3 mb-0">
                                <h5>Bank Transfer</h5>
                                <span class="text-muted"><strong>Name : </strong>Ansh Agarwal</span>
                                <br> <span class="text-muted"><strong>Bank Name : </strong>Indian Bank</span>
                                <br> <span class="text-muted"><strong>IFSC : </strong>IDIB000R107</span>
                                <br> <span class="text-muted"><strong>Account No : </strong>6487070264</span>
                            </address>

                            <address class="mb-5 col-3 mb-0">
                                <h5>By UPI</h5>
                                <span class="text-muted"><strong>Paytm : </strong>9696084837</span>
                                <br> <span class="text-muted"><strong>Phone Pay : </strong>9696084837</span>
                                <br> <span class="text-muted"><strong>Google Pay : </strong>9696084837</span>
                                <br> <span class="text-muted"><strong>UPI : </strong>9696084837@ybl</span>
                            </address>

                            </address>
                            <address class="mb-5 col-2 mb-0"></address>

                            <address class="mb-5 col-4 mb-0 text-center">
                                <span class="text-muted">This is Computer Generated Invoice</span>
                                <br> <span class="text-muted">No Signature Needed</span><br>
                                <hr style="border : 1px solid">
                                <h3><?php echo $_SESSION['name']?></h3>
                            </address>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <button class="btn btn-success btn-lg mb-4 d-flex mx-auto" id="dis" onclick="window.print()">Print</button>
    </div>
</body>

</html>