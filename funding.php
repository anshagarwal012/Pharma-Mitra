<?php

$heading = "Apply For Membership";
require('header.php');
if (isset($_POST) && !empty($_POST)) {
    $target_dir = "admin/uploads/";
    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $startupdesc = $_POST['startupdesc'];
    $industry = $_POST['industry'];
    $website = $_POST['website'];
    $country = $_POST['country'];
    $stage = $_POST['stage'];
    $funding = $_POST['funding'];
    $pitch_desk = $target_dir .  time() . basename($_FILES["pitch_desk"]["name"]);
    $sdocuments ='';
    if(isset($_FILES["sdocuments"]["name"]) && $_FILES["sdocuments"]["name"] != ''){
    $sdocuments = $target_dir .  time() . basename($_FILES["sdocuments"]["name"]);
    move_uploaded_file($_FILES["sdocuments"]["tmp_name"], $sdocuments);
    }
    move_uploaded_file($_FILES["pitch_desk"]["tmp_name"], $pitch_desk);
    $sql = 'INSERT INTO funding (`datetime`,`sname`,`fname`,`email`,`phone`,`position`,`startupdesc`,`industry`,`website`,`country`,`stage`,`funding`,`pitch_desk`,`sdocuments`)
    VALUES ("' . date("d-m-y h:i:s") . '","' . $sname . '","' . $fname . '","' . $email . '","' . $phone . '","' . $position . '","' . $startupdesc . '","' . $industry . '","' . $website . '","' . $country . '","' . $stage . '","' . $funding . '","' . $pitch_desk . '","' . $sdocuments . '")';
    if (mysqli_query($conn, $sql) === True) {
        echo '<script>alert("Thank you for submitting, we will get back to you shortly.");</script>';
    } else {
        echo '<script>alert("Something Went Wrong");</script>';
    }
    header('location:' . $_SERVER['PHP_SELF']);
}
?>

<div class="team-area">
    <div class="container section-padding">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title text-center">
                    <div class="head p-2">
                        <h3 class="pt-3">Apply For <span>Funding Now.</span></h3>
                    </div>
                    <p>Our streamlined funding process ensures that you have access to smart money quickly, allowing you to concentrate on growing your business.</p>
                </div>
            </div>
        </div>
        <div class="form w-50 mx-auto">
            <form class="card" style="background-color: #fffef2;" method="post" enctype="multipart/form-data">
                <div class="form-group py-3">
                    <label class="required">Startup Name</label>
                    <input type="text" required name="sname" class="form-control" id="" placeholder="Startup Name">
                </div>
                <div class="form-group py-3">
                    <label class="required">Founder Name</label>
                    <input type="text" required name="fname" class="form-control" id="" placeholder="Founder Name">
                </div>
                <div class="form-group py-3">
                    <label class="required">Email address</label>
                    <input type="email" required name="email" class="form-control" id="" placeholder="Enter Email">
                </div>
                <div class="form-group py-3">
                    <label class="required">Phone Number</label>
                    <input type="text" required name="phone" class="form-control" id="" placeholder="Phone Number">
                </div>
                <div class="form-group py-3">
                    <label class="required">Position</label>
                    <input type="text" required name="position" class="form-control" id="" placeholder="Position">
                </div>
                <div class="form-group py-3">
                    <label class="required">Startup Description</label>
                    <textarea class="form-control" name="startupdesc" requiredrows="3"></textarea>
                </div>
                <div class="form-group py-3">
                    <label class="required">Industry</label>
                    <select class="form-control" required name="industry">
                        <option value="AgriTech">AgriTech</option>
                        <option value="AI & Machine Learning">AI & Machine Learning</option>
                        <option value="E-Commerce">E-Commerce</option>
                        <option value="EdTech">EdTech</option>
                        <option value="eKYC">eKYC</option>
                        <option value="ERP">ERP</option>
                        <option value="FinTech">FinTech</option>
                        <option value="Franshise">Franshise</option>
                        <option value="Hardware">Hardware</option>
                        <option value="HealthTech">HealthTech</option>
                        <option value="InsurTech">InsurTech</option>
                        <option value="Lending & Financing">Lending & Financing</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Media">Media</option>
                        <option value="NFT">NFT</option>
                        <option value="PropTech">PropTech</option>
                        <option value="Recruting">Recruting</option>
                        <option value="RegTech">RegTech</option>
                        <option value="Retail-Tech / B2B">Retail-Tech / B2B</option>
                        <option value="Ride Hailing">Ride Hailing</option>
                        <option value="Sales Management Platform">Sales Management Platform</option>
                        <option value="Smart Transport">Smart Transport</option>
                        <option value="Social Network">Social Network</option>
                        <option value="Tracking">Tracking</option>
                        <option value="Wholesale E-Commerce">Wholesale E-Commerce</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="">Website</label>
                    <input type="text" class="form-control" name="website" id="" placeholder="Enter Website">
                </div>
                <div class="form-group py-3">
                    <label class="required">Country</label>
                    <select class="form-control" required name="country">
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Greece">Greece</option>
                        <option value="Hong Kong SAR">Hong Kong SAR</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Malta">Malta</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Norway">Norway</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Taiwan Province of China">Taiwan Province of China</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Startup Stage</label>
                    <select class="form-control" required name="stage">
                        <option value="Idea Stage">Idea Stage</option>
                        <option value="Development Stage">Development Stage</option>
                        <option value="Generating Revenue">Generating Revenue</option>
                        <option value="Expansion Stage">Expansion Stage</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Funding Stage</label>
                    <select class="form-control" required name="funding">
                        <option value="Pre-Seed">Pre-Seed</option>
                        <option value="Seed">Seed</option>
                        <option value="Pre-A">Pre-A</option>
                        <option value="Series A">Series A</option>
                        <option value="Pre-B">Pre-B</option>
                        <option value="Series B">Series B</option>
                        <option value="Series B+">Series B+</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Pitch Deck</label>
                    <input type="file" required class="form-control" name="pitch_desk" id="" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <div class="form-group py-3">
                    <label class="">Supporting Documents (Optional)</label>
                    <input type="file" class="form-control" id="" name="sdocuments" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
require('footer.php');
