<?php
$email="";
$err="";
require('conn.php');
if(!empty($_SESSION['pass'])){
    header('location:dashboard.php');
    }
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    $sql = "select * from credintials where email = '$email' AND pass='$pass'";
    $result = mysqli_query($con, $sql);
       if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['pass'] = $pass;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['dp'] = $row['dp'];
        header('location:dashboard.php');
        die();
    }else{
        $err = '<div class="alert alert-info my-2" role="alert">
        Wrong Password !
      </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">

    <title>Webly Technolab - Admin Login Panel</title>


    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!--custom styles-->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="login-bg">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Admin Login</h4>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                        </div>
                        <?php echo $err;?>

                        <div class="form-group clearfix">

                            <button type="submit" name="submit" class="btn btn-purple float-right">LOGIN</button>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="../assets/img/logo/trans-bg.png" alt="" width="150px">
                        </a>
                        <h1 class="text-white">Pharma Mitra</h1>
                        <p>Committed to Your Well-being</p>
                        <a href="#" class="play-btn mt-4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!--/login promo-->

            </div>
        </div>
    </div>
</body>

</html>