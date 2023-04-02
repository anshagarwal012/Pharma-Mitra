<?php
$heading = "Contact Us";
require('header.php');
if (isset($_POST) && !empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = 'INSERT INTO contacts (`datetime`,`name`, `email`, `phone`, `message`)
    VALUES ("' . date("d-m-y h:i:s") . '","' . $name . '", "' . $email . '", "' . $phone . '", "' . $message . '")';
    if (mysqli_query($conn, $sql) === True) {
        echo '<script>alert("Data Submitted Successfully");</script>';
    } else {
        echo '<script>alert("Something Went Wrong");</script>';
    }
    header('location:' . $_SERVER['PHP_SELF']);
}
?>
<div class="contact-area bg-light">
    <div class="image">
        <img src="/assets/img/contact-banner.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <div class="container">
        <div class="row negative-mar">
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="#" class="card" method="post">
                        <div class="head">
                            <div class="head p-2">
                                <h3 class=" text-center">Get In<span> Touch</span></h3>
                            </div>
                        </div> <input type="text" name="name" required placeholder="Enter Your Name">
                        <input type="email" name="email" required placeholder="Enter Your Email">
                        <input type="tel" name="phone" required placeholder="Enter Your Phone">

                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <textarea cols="30" name="message" required rows="10" placeholder="Write Your Message"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p>
                                    <input type="submit" value="Send Message">
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <div class="section-title ">
                    <div class="dicover-list">
                        <ul>
                            <li>
                                <div class="row py-3 my-1">
                                    <div class="col-md-2">
                                        <i style="width: 60px;text-align: center;" class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="col">
                                        <div class="head">
                                            <h3 class="">Office</h3>
                                        </div>
                                        <p>H- 9/5, Malviya Nagar, South Delhi, India - 110017</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row py-3 my-1">
                                    <div class="col-md-2">
                                        <i style="width: 60px;text-align: center;" class="fa fa-comment" aria-hidden="true"></i>
                                    </div>
                                    <div class="col">
                                        <div class="head">
                                            <h3 class="">Contact</h3>
                                        </div>
                                        <p>Email - <a href="mailto:info@oliveventurepartners.in">info@oliveventurepartners.in</a><br>
                                            Phone - <a href="tel://+919582993610">+91 958 299 3610</a><br>
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<a href="tel://+919911480079">+91 991 148 0079</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <a class="viso-btn discover" href="#">View All Features</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.php');
