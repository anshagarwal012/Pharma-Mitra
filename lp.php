<?php
$heading = "Become An Lp";
require('header.php');
if (isset($_POST) && !empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $linkedin_url = $_POST['linkedin_url'];
    $company_name = $_POST['company_name'];
    $referral = $_POST['referral'];
    $active_investor = $_POST['active_investor'];
    $invest_as = $_POST['invest_as'];
    $radio = $_POST['radio'];
    $declaration = $_POST['declaration'];

    $sql = 'INSERT INTO lp (`datetime`,`name`, `email`, `phone`, `city`, `state`, `country`, `linkedin_url`, `company_name`, `referral`, `active_investor`, `invest_as`, `radio`, `declaration`)
    VALUES ("' . date("d-m-y h:i:s") . '","' . $name . '", "' . $email . '", "' . $phone . '", "' . $city . '", "' . $state . '", "' . $country . '", "' . $linkedin_url . '", "' . $company_name . '", "' . $referral . '", "' . $active_investor . '", "' . $invest_as . '", "' . $radio . '", "' . $declaration . '")';
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
                        <h3 class="pt-3">Invest with us<span>@ zero cost</span></h3>
                    </div>
                    <p>We meticulously evaluate potential investments using a rigorous 12-point criteria, including the depth of the problem being addressed, the scalability of the business model, financial performance, management team, market potential, and the innovative technology being employed.
                        <br><br>
                        Our core purpose is to generate high returns for our investors by providing early exits through investments in high-potential, early-stage companies.
                    </p>
                </div>
            </div>
        </div>
        <div class="form w-50 mx-auto">
            <form class="card" style="background-color: #fffef2;" method="post">
                <div class="form-group py-3">
                    <label class="required">Full Name</label>
                    <input type="text" required class="form-control" name="name" id="" placeholder="Full Name">
                </div>
                <div class="form-group py-3">
                    <label class="required">Email address</label>
                    <input type="email" required class="form-control" name="email" id="" placeholder="Enter Email">
                </div>
                <div class="form-group py-3">
                    <label class="required">Phone Number</label>
                    <input type="text" required class="form-control" name="phone" id="" placeholder="Phone Number">
                </div>
                <div class="form-group py-3">
                    <label class="required">City</label>
                    <input type="text" required class="form-control" name="city" id="" placeholder="City">
                </div>
                <div class="form-group py-3">
                    <label class="required">State</label>
                    <input type="text" required class="form-control" name="state" id="" placeholder="State">
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
                    <label class="">Linkedin Url</label>
                    <input type="text" class="form-control" name="linkedin_url" id="" placeholder="Linkedin Url">
                </div>
                <div class="form-group py-3">
                    <label class="">Company Name</label>
                    <input type="text" class="form-control" name="company_name" id="" placeholder="Company Name">
                </div>
                <div class="form-group py-3">
                    <label class="">Referral (if any)</label>
                    <input type="text" class="form-control" name="referral" id="" placeholder="Referral (if any)">
                </div>
                <div class="form-group py-3">
                    <label class="required">Are you an active investor ?</label>
                    <select class="form-control" required name="active_investor">
                        <option disabled></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="h6 text-center">Accreditation</div>
                <div class="form-group py-3">
                    <label class="required">I am applying to invest as: </label>
                    <select class="form-control" required name="invest_as">
                        <option value="Myself as an individual"> Myself as an individual </option>
                        <option value="Trust"> Trust </option>
                        <option value="LLC"> LLC </option>
                        <option value="S-corp"> S-corp </option>
                        <option value="Fund"> Fund </option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required text-bold">Select one:</label>
                    <div class="form-check py-3">
                        <input type="radio" class="form-check-input" value="1" required name="radio" id="">
                        <label class="form-check-label">Individual with a net worth (either individually or with my spouse, if any), and all property and other assets excluding my primary residence, that exceeds $500,000 including investments.</label>
                    </div>
                    <div class="form-check py-3">
                        <input type="radio" class="form-check-input" value="2" required name="radio" id="">
                        <label class="form-check-label">Individual with an annual income that was at least $50,000 in each of the two most recent years, and I expect such income in the current year.</label>
                    </div>
                    <div class="form-check py-3">
                        <input type="radio" class="form-check-input" value="3" required name="radio" id="">
                        <label class="form-check-label">Individual with an annual income, jointly with my spouse, of at least $75,000 in each of the two most recent years, and I expect such income in the current year.</label>
                    </div>
                    <div class="form-check py-3">
                        <input type="radio" class="form-check-input" value="4" required name="radio" id="">
                        <label class="form-check-label">An Entity (e.g., corporation, partnership, limited liability company, trust,etc.) in which all of the equity owners are accredited investors.</label>
                    </div>
                    <div class="form-check py-3">
                        <input type="radio" class="form-check-input" value="5" required name="radio" id="">
                        <label class="form-check-label">Other</label>
                    </div>
                </div>
                <div class="form-group py-3">
                    <label class="required text-bold">Declaration:</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="declaration" id="" required>
                        <label class="form-check-label">I agree that all the above information is correct, and that <b>Olive Venture Partners</b> may use the above information to contact me using the above information regarding my application as well news, alerts and other promotional materials</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
require('footer.php');
