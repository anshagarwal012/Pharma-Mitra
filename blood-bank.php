<?php
$heading = "Blood Bank";
require('header.php'); ?>
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
        <form action="#">
            <div class="row">
                <div class="col-md-5">
                    <div class="ltn__search-widget">
                        <div class="short-by text-center">
                            <select class="w-100 nice-select">
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
                <div class="col-md-5">
                    <div class="ltn__search-widget">
                        <div class="short-by text-center">
                            <select class="w-100 nice-select">
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
                <div class="col-md-2">
                    <div class="ltn__search-widget">
                        <button type="submit"><i class="fas fa-search"></i></button>
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
            <div class="col-lg-12">
                <div class="ltn__state-location">
                    <h2 class="ltn__state-location-title">Alabama</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__map-item">
                    <h3 class="ltn__location-name">Boston, New York</h3>
                    <h5 class="ltn__location-single-info"><i class="icon-mail"></i>mail.ccco.com</h5>
                    <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                    <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GOOGLE MAP LOCATIONS LIST AREA END -->

<?php require('footer.php');
