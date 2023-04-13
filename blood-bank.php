<?php
$heading = "Blood Bank";
require('header.php'); 

$blood_bank_sql="SELECT hospital.*, blood_bank.Blood_Group FROM hospital INNER JOIN blood_bank ON hospital.ID=blood_bank.Hospital_ID";
$blood_bank_result = mysqli_query($con, $blood_bank_sql);
?>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Blood Bank</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Blood Bank</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOOD BANK AREA START -->
<div class="ltn__feature-area pb-90">
    <div class="container">
        <h4 class="ltn__widget-title ltn__widget-title-border">Search Blood Bank</h4>
        <form action="#" method="POST">
            <div class="row">

                <div class="col-md-6">
                    <div class="ltn__search-widget">
                        <div class="short-by text-center">
                            <select name="blood_group" class="w-100 nice-select">
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ltn__search-widget">
                        <div class="short-by text-center">
                            <select class="w-100 nice-select" name="blood_bank_state">
                                <option>Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- BLOOD BANK AREA END -->


<!-- GOOGLE MAP LOCATIONS LIST AREA START -->
<div class="ltn__google-map-locations-list-area mb-70">
    <div class="container">
        <div class="row">
            <table id="blood_bank_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Address</th>
                        <th>Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = isset($result) && !empty($result) ? $result : $blood_bank_result;
                    if (isset($data) && !empty($data)) {
                        if (mysqli_num_rows($data) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($data)) {
                                ?>
                                <tr>
                                    <th><?php echo $i;?></th>
                                    <td><?php echo $row['Name'];?></td>
                                    <td><?php echo $row['Email'];?></td>
                                    <td><?php echo $row['Phone'];?></td>
                                    <td><?php echo $row['State'];?></td>
                                    <td><?php echo $row['Address'];?></td>
                                    <td><?php echo $row['Blood_Group'];?></td>
                                </tr>
                                <?php
                                $i++;
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- GOOGLE MAP LOCATIONS LIST AREA END -->

<?php require('footer.php');
