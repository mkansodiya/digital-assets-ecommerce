<?php include("header.php");
// print_r($shopAction->availableDownloads());
?>
<!-- mini cart start -->

<div class="breadcrumb-area section-padding-1 breadcrumb-ptb-1">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>My Account</h2>
        </div>
    </div>
</div>
<div class="my-account-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" class="active" data-bs-toggle="tab">Dashboard</a>
                    <a href="#orders" data-bs-toggle="tab">Orders</a>
                    <a href="#download" data-bs-toggle="tab">Download</a>
                    <a href="#payment-method" data-bs-toggle="tab">Payment Method</a>
                    <a href="#address-edit" data-bs-toggle="tab">Address</a>
                    <a href="#account-info" data-bs-toggle="tab">Account Details</a>
                    <a href="?action=logout">Logout</a>
                </div>
            </div>
            <!-- My Account Tab Menu End -->
            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>
                            <div class="welcome">
                                <?php
                                echo "<p>Hello, <strong>{$auth->logedInuser()['nick_name']}</strong> (If Not <strong>{$auth->logedInuser()['nick_name']} !</strong><a href=\"?action=logout\" class=\"logout\"> Logout</a>)</p>";
                                ?>
                            </div>

                            <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($shopAction->orderData() as $key => $value) {
                                            $date = strtotime($value['order_date']);
                                            $date = date("M d, Y", $date);

                                            $order_table = "  <tr>
                                            <td>{$value['ID']}</td>
                                            <td>{$date}</td>
                                            <td>{$value['order_status']}</td>
                                            <td>₹{$value['order_total']}</td>
                                            <td><a href=\"cart.php\" class=\"check-btn sqr-btn \">View</a></td>
                                        </tr>";
                                            echo $order_table;
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Downloads</h3>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>

                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($downloads = $shopAction->availableDownloads() as $key => $value) {

                                            $id = $value;
                                            $url = "?download=$id";
                                            $product_title = $shopAction->productTitleById($id);
                                            $downloads = " <tr>
                                                <td>{$product_title}</td>
                                                <td>Never</td>

                                                <td><a href=\"$url\" class=\"check-btn sqr-btn \"><i class=\"fa fa-cloud-download\"></i> Download File</a></td>
                                            </tr>";
                                            echo $downloads;
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Payment Method</h3>
                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Billing Address</h3>
                            <address>
                                <p><strong>Alex Tuntuni</strong></p>
                                <p>1355 Market St, Suite 900 <br>
                                    San Francisco, CA 94103</p>
                                <p>Mobile: (123) 456-7890</p>
                            </address>
                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Account Details</h3>
                            <div class="account-details-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">First Name</label>
                                                <input type="text" id="first-name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="last-name" class="required">Last Name</label>
                                                <input type="text" id="last-name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="display-name" class="required">Display Name</label>
                                        <input type="text" id="display-name" />
                                    </div>
                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Addres</label>
                                        <input type="email" id="email" />
                                    </div>
                                    <fieldset>
                                        <legend>Password change</legend>
                                        <div class="single-input-item">
                                            <label for="current-pwd" class="required">Current Password</label>
                                            <input type="password" id="current-pwd" />
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <label for="new-pwd" class="required">New Password</label>
                                                    <input type="password" id="new-pwd" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <label for="confirm-pwd" class="required">Confirm Password</label>
                                                    <input type="password" id="confirm-pwd" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="single-input-item">
                                        <button class="check-btn sqr-btn ">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- Single Tab Content End -->
                </div>
            </div> <!-- My Account Tab Content End -->
        </div>
    </div>
</div>

<!-- Log in start -->

<!-- Log in end -->
<!-- register start -->

<!-- register end -->
<!-- Mobile Menu start -->

</div>
<!-- Global Vendor, plugins JS -->
<script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/waypoints.min.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/plugins/smoothscroll.js"></script>
<script src="assets/js/plugins/mouse-parallax.js"></script>
<script src="assets/js/plugins/slinky.min.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery.mb.ytplayer.min.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>

</html>