<?php
$heading = "Hospitals";
require('header.php'); 

$blood_bank_sql="SELECT hospital.* FROM hospital";
$blood_bank_result = mysqli_query($con, $blood_bank_sql);
?>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Hospitals</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Hospitals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- GOOGLE MAP LOCATIONS LIST AREA START -->
<div class="ltn__google-map-locations-list-area mb-70">
    <div class="container">
        <div class="row">

            <table id="hospitals_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Address</th>
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
