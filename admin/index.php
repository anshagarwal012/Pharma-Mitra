<?php
session_start();
$err = "";

if (isset($_GET['sub']) && $_GET['sub'] == 'ok') {
    $_SESSION['pass'] = 'yes';
    die();
}

if (!empty($_SESSION['pass'])) {
    header('location:./home');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(bg.jpg);">
    <section class="ftco-section" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Olive Venture Partners</h2>
                    <!-- <h5 style="color: white">By Webly Technolab</h5> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id" id="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="pass" class="form-control" placeholder="Password" required>
                            </div>
                            <br>
                            <?php echo $err; ?>
                            <div class="form-group">
                                <button type="button" name="submit" class="form-control btn btn-primary login_submit submit px-3">Sign In</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <script>
        document.querySelector('.login_submit').addEventListener('click', function() {
            var id = document.querySelector('#username').value;
            var password = document.querySelector('#password-field').value;
            if (id == 'naresh' && password == 'admin@123') {
                fetch("https://oliveventurepartners.in/admin/?sub=ok");
                window.location.href = "https://oliveventurepartners.in/admin/home"
            } else {
                alert("Invalid Details");
            }
        })
    </script>
</body>

</html>
