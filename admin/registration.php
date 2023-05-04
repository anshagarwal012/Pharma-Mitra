<?php
$email = "";
$name = "";
$err = "";
require('conn.php');
if (!empty($_SESSION['pass'])) {
    header('location:dashboard.php');
}
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
    if ($pass == $cpass) {
        $sql = "INSERT INTO `credintials`(`email`, `pass`, `name`) VALUES ('$email','$pass','$name')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            send_mail($name, $email, $pass);
            echo '<script>alert("Registerd Successfully");window.location.href="index"</script>';
            die();
        }
    } else {
        $err = '<div class="alert alert-info my-2" role="alert">
       Password Doesn\'t Match
      </div>';
    }
}

function send_mail($name, $email, $pass)
{
    $recipient = "registration.data@pharmamitra.in";

    // Set the email subject.
    $subject = "New Registration from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Password: $pass\n\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";
    mail($recipient, $subject, $email_content, $email_headers);
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

    <title>Pharma Mitra - Registration Panel</title>


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
                    <h4 class="text-uppercase text-purple text-center mb-5">Register</h4>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?php echo $Name ?>" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="cpass" class="form-control" id="exampleInputcPassword1" placeholder="Enter Confirm Password" required>
                        </div>
                        <?php echo $err; ?>

                        <div class="form-group clearfix">

                            <button type="submit" name="submit" class="btn btn-purple float-right">REGISTER</button>
                        </div>
                        <div class="text-center mt-4 f12">
                            Already have and account ? <a href="/admin/index" class="btn-link text-capitalize">Login</a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient py-5 text-white position-relative" style="min-height: 530px">
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