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
                                <option>Select Blood Group</option>
                                <option>Sort by popularity</option>
                                <option>Sort by new arrivals</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="ltn__search-widget">
                        <div class="short-by text-center">
                            <select class="w-100 nice-select">
                                <option>Select Hospital</option>
                                <option>Sort by popularity</option>
                                <option>Sort by new arrivals</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
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
<!-- BLOOD BANK AREA START -->
<?php require('footer.php');
