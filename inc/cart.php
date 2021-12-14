<?php
//include_once("functions.php");
$cart_data = $query->fetchData("cart", "*", "user_id='$user_id'");

?>
<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>
                    <?php
                    $cart_total = 0;
                    foreach ($cart_data as $key => $value) {

                        $product_id = $value['product_id'];
                        $p_data = $query->fetchData("products", "*", "id='$product_id'");
                        $cart_total = ($cart_total) + ($value['price']);
                        echo $html = "    <li>
                        <div class=\"cartmini__thumb\">
                            <a href=\"product-details.php\">
                                <img src=\"{$p_data[0]['product_image']}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"cartmini__content\">
                            <h5><a href=\"product-details.php?id={$product_id}\">{$p_data[0]['product_title']}</a></h5>
                            <div class=\"product-quantity mt-10 mb-10\">
                                <!-- <span class=\"cart-minus\">-</span>
                                <input class=\"cart-input\" type=\"text\" value=\"1\" />
                                <span class=\"cart-plus\">+</span> -->
                            </div>
                            <div class=\"product__sm-price-wrapper\">
                                <!-- <span>5 <i class=\"fal fa-times\"></i></span> -->
                                <span class=\"product__sm-price\">₹{$value['price']}</span>
                            </div>
                        </div>
                        <a href=\"product-details.php?id={$product_id}&remove_cart={$product_id}&msg=msg\" class=\"cartmini__del\"><i class=\"fal fa-times\"></i></a>
                    </li>";
                    } ?>


                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>₹<?php echo $cart_total; ?></span>
                </div>
                <div class="cartmini__checkout-btn">
                    <!-- <a href="cart.php" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a> -->
                    <a href="?action=checkout" class="m-btn m-btn-3 w-100"> <span></span> checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- cart mini area end -->


<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="index.php">
                    <img src="assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="sidebar__action mt-330">
                <div class="sidebar__login mt-15">
                    <a href="#"><i class="far fa-unlock"></i> Log In</a>
                </div>
                <div class="sidebar__cart mt-20">
                    <a href="javascript:void(0);" class="cart-toggle-btn">
                        <i class="far fa-shopping-cart"></i>
                        <span>2</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>