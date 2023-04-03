<?php
$heading = "Shop";
require('header.php'); ?>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Shop</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-search-2 mb-120">
                    <form id="#123" method="get" action="#">
                        <input type="text" name="search" value="" placeholder="Search Medicines">
                        <button type="submit">
                            <span><i class="icon-search"></i></span>
                        </button>
                    </form>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                <?php

                                $page = isset($_GET['page']) ? $_GET['page'] : 0;
                                $sql = "SELECT * FROM products order by id desc Limit $page,20";
                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    $s = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                                <div class="ltn__product-item ltn__product-item-3 text-center">
                                                    <div class="product-img">
                                                        <a href="/products?id=<?= $row['ID'] ?>"><img src="<?= 'admin/' . $row['Image'] ?>"></a>
                                                        <div class="product-badge">
                                                            <ul>
                                                                <li class="sale-badge">New</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="product-title"><a href="/products?id=<?= $row['ID'] ?>"><?= $row['Name'] ?></a></h2>
                                                        <div class="product-price">
                                                            <span><?= '₹' . $row['Price'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $s++;
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            <!-- <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li> -->
                            <li><a href="/shop">1</a></li>
                            <li><a href="./shop?page=20">2</a></li>
                            <li><a href="./shop?page=40">3</a></li>
                            <!-- <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->

<?php require('footer.php');
