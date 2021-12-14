<?php require('inc/header.php');
$query = new query();
$p_data_9 = $query->fetchData("products", "*", "", "", "", 9);
$p_data_6 = $query->fetchData("products", "*", "", "", "", 6);
$html = "";
?>
<!-- header area end -->


<!-- cart mini area start -->
<?php include("inc/cart.php"); ?>
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
               <img class="logo" src="assets/img/logo/logo-white.png" alt="logo">
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
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->


<main>

   <!-- hero area start -->
   <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
      <div class="hero__shape">
         <img class="circle" src="assets/img/icon/hero/hero-circle.png" alt="circle">
         <img class="circle-2" src="assets/img/icon/hero/hero-circle-2.png" alt="circle">
         <img class="square" src="assets/img/icon/hero/hero-square.png" alt="circle">
         <img class="square-2" src="assets/img/icon/hero/hero-square-2.png" alt="circle">
         <img class="dot" src="assets/img/icon/hero/hero-dot.png" alt="circle">
         <img class="triangle" src="assets/img/icon/hero/hero-triangle.png" alt="circle">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
               <div class="hero__content">
                  <h2 class="hero__title">
                     <span>The world’s largest</span>
                     WordPress Themes
                     Collection.
                  </h2>
                  <p>The bee's knees pardon you plastered it's all gone to pot cheeky bugger wind up down.</p>
                  <div class="hero__search">
                     <form action="#">
                        <div class="hero__search-inner d-xl-flex">
                           <div class="hero__search-input">
                              <span><i class="far fa-search"></i></span>
                              <input type="text" placeholder="Search for templates">
                           </div>
                           <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
               <div class="hero__thumb-wrapper scene ml-70">
                  <div class="hero__thumb one d-none d-lg-block">
                     <img class="layer" data-depth="0.2" src="https://themepure.net/template/markit/markit/assets/img/hero/hero-1.jpg" alt="">
                  </div>
                  <div class="hero__thumb two">
                     <img class="layer" data-depth="0.3" src="https://themepure.net/template/markit/markit/assets/img/hero/hero-2.jpg" alt="">
                  </div>
                  <div class="hero__thumb three">
                     <img class="layer" data-depth="0.4" src="https://themepure.net/template/markit/markit/assets/img/hero/hero-3.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- hero area end -->

   <!-- category area start -->
   <section class="category__area pt-105 pb-135">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="section__title-wrapper text-center mb-60">
                  <h2 class="section__title">Browse <br> Popular Categories</h2>
                  <p>Find over 7000 website templates and themes.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
               <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                  <div class="category__icon mb-25">
                     <a href="#"><img src="assets/img/icon/catagory/cat-1.png" alt=""></a>
                  </div>
                  <div class="category__content">
                     <h3 class="category__title">
                        <a href="product.php">WordPress Themes</a>
                     </h3>
                     <a href="product.php" class="link-btn">
                        <i class="far fa-long-arrow-right"></i>
                        Learn More
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
               <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                  <div class="category__icon mb-25">
                     <a href="#"><img src="assets/img/icon/catagory/cat-2.png" alt=""></a>
                  </div>
                  <div class="category__content">
                     <h3 class="category__title">
                        <a href="product.php">Site Templates</a>
                     </h3>
                     <a href="product.php" class="link-btn">
                        <i class="far fa-long-arrow-right"></i>
                        Learn More
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
               <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                  <div class="category__icon mb-25">
                     <a href="#"><img src="assets/img/icon/catagory/cat-3.png" alt=""></a>
                  </div>
                  <div class="category__content">
                     <h3 class="category__title">
                        <a href="product.php">UI Templates</a>
                     </h3>
                     <a href="product.php" class="link-btn">
                        <i class="far fa-long-arrow-right"></i>
                        Learn More
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
               <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".9s">
                  <div class="category__icon mb-25">
                     <a href="#"><img src="assets/img/icon/catagory/cat-4.png" alt=""></a>
                  </div>
                  <div class="category__content">
                     <h3 class="category__title">
                        <a href="product.php">Digital Marketing</a>
                     </h3>
                     <a href="product.php" class="link-btn">
                        <i class="far fa-long-arrow-right"></i>
                        Learn More
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               <div class="category__more mt-30 text-center">
                  <a href="product.php" class="m-btn m-btn-2"> <span></span> View all categories</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- category area end -->

   <!-- trending area start -->
   <section class="trending__area pt-110 pb-110 grey-bg">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-xxl-6 col-xl-6 col-lg col-md-8">
               <div class="section__title-wrapper mb-50">
                  <h2 class="section__title">Trending <br> Landmark Themes</h2>
                  <p>Jeffrey pardon me jolly good.</p>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg col-md-4">
               <div class="trending__more d-flex justify-content-md-end  mb-50">
                  <a href="product.php" class="m-btn m-btn-border"><span></span>Explore Cloneables</a>
               </div>
            </div>
         </div>
         <div class="row">
            <?php
            foreach ($p_data_9 as $key => $value) {
               $product_title =  mb_substr($value['product_title'], 0, 30) . "..";
               $excerpt = mb_substr($value['product_content'], 0, 30) . "..";
               $price = (int)$query->fetchData("product_meta", "min_price", "product_id='{$value['id']}'")[0]['min_price'];
               if ($price == 0) {
                  $price = "FREE!";
               }
               $html = "<div class=\"col-xxl-4 col-xl-4 col-lg-6 col-md-6\">
<div class=\"trending__item d-sm-flex white-bg mb-30 wow fadeInUp\" data-wow-delay=\".3s\">
   <div class=\"trending__thumb mr-25\">
      <div class=\"trending__thumb-inner fix\">
         <a href=\"product-details.php?id={$value['product_image']}\">
            <img src=\"{$value['product_image']}\" alt=\"\" class=\"product_img_102\">
         </a>
      </div>
   </div>
   <div class=\"trending__content\">
      <h3 class=\"trending__title\"><a href=\"product-details.php?id={$value['id']}\">{$product_title}</a></h3>
      <p>Click to see full information.</p>
      <div class=\"trending__meta d-flex justify-content-between\">
         <div class=\"trending__tag\">
            <a href=\"#\">Business</a>
         </div>
         <div class=\"trending__price\">
            <span>₹{$price}</span>
         </div>
      </div>
   </div>
</div>
</div>";
               echo $html;
            }
            echo $html = "</div></div></section>";


            ?>


            <!-- subscribe area start -->
            <section class="subscribe__area p-relative pt-100 pb-110" data-background="assets/img/bg/subscribe-bg.jpg">
               <div class="subscribe__icon">
                  <img class="ps" src="assets/img/icon/subscribe/ps.png" alt="">
                  <img class="wp" src="assets/img/icon/subscribe/wp.png" alt="">
                  <img class="html" src="assets/img/icon/subscribe/html.png" alt="">
                  <img class="f" src="assets/img/icon/subscribe/f.png" alt="">
                  <img class="man" src="assets/img/icon/subscribe/man.png" alt="">
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="subscribe__content text-center wow fadeInUp" data-wow-delay=".5s">
                           <h3 class="subscribe__title">Have a project? <br> Create your website now.</h3>
                           <p>Try our any product for FREE!</p>
                           <div class="subscribe__form wow fadeInUp" data-wow-delay=".7s">
                              <form action="#">
                                 <input type="email" placeholder="Email Address">
                                 <button type="submit" class="m-btn m-btn-black"><span></span> subscribe </button>
                              </form>
                              <p>Join 20,000+ other creators in our Markit community.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe area end -->

            <!-- product area start -->
            <section class="product__area pt-105 pb-110 grey-bg-2">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                           <h2 class="section__title">Latest <br> Premium Products</h2>
                           <p>From multipurpose themes to niche templates</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <?php

                     foreach ($p_data_6 as $key => $value) {
                        $product_title =  mb_substr($value['product_title'], 0, 30) . "..";
                        $excerpt = mb_substr($value['product_content'], 0, 30) . "..";

                        $price = (int)$query->fetchData("product_meta", "min_price", "product_id='{$value['id']}'")[0]['min_price'];
                        if ($price == 0) {
                           $price = "FREE!";
                        }
                        echo $html = "<div class=\"col-xxl-4 col-xl-4 col-lg-4 col-md-6\">
                     <div class=\"product__item white-bg mb-30 wow fadeInUp\" data-wow-delay=\".3s\">
                        <div class=\"product__thumb\">
                           <div class=\"product__thumb-inner fix w-img\">
                              <a href=\"product-details.php?id={$value['id']}\">
                                 <img src=\"{$value['product_image']}\" alt=\"\">
                              </a>
                           </div>
                        </div>
                        <div class=\"product__content\">
                           <div class=\"product__meta mb-10 d-flex justify-content-between align-items-center\">
                              <div class=\"product__tag\">
                                 <a href=\"#\">Business</a>
                              </div>
                              <div class=\"product__price\">
                                 <span>₹{$price}</span>
                              </div>
                           </div>
                           <h3 class=\"product__title\">
                              <a href=\"product-details.php?id={$value['id']}\">{$product_title}</a>
                           </h3>
                           <p class=\"product__author\">by <a href=\"#\">Theme Pure</a> in <a href=\"#\">Templates</a></p>
                        </div>
                     </div>
                  </div>";
                     }

                     ?>

                  </div>
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="product__more text-center mt-30">
                           <a href="product.php" class="m-btn m-btn-2"> <span></span> Explore Premium</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- product area end -->

            <!-- cta area start -->
            <section class="cta__area pt-100 pb-60">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section__title-wrapper text-center mb-45">
                           <h2 class="section__title wow fadeInUp" data-wow-delay=".3s">Grow Your Revenue <span>Today</span></h2>
                           <p class="wow fadeInUp" data-wow-delay=".5s">Thousands of Markit Brands have made the swich.Text marketing with the customer in mind!</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xxl-6 offset-xxl-3">
                        <div class="cta__content text-center wow fadeInUp" data-wow-delay=".7s">
                           <a href="pricing.php" class="m-btn m-btn-border-2 cta__btn active"> <span></span> Start 14 Day Free Trial</a>
                           <a href="pricing.php" class="m-btn m-btn-border-2 cta__btn"> <span></span> Claim Free Demo</a>
                           <p>Start Sending Texts - No Credit Card Necessary</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- cta area end -->

            <!-- brand area start -->
            <div class="brand__area pb-15">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="brand__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                           <div class="brand__thumb">
                              <img src="assets/img/brand/brand-1.png" alt="">
                           </div>
                           <div class="brand__thumb">
                              <img src="assets/img/brand/brand-2.png" alt="">
                           </div>
                           <div class="brand__thumb">
                              <img src="assets/img/brand/brand-3.png" alt="">
                           </div>
                           <div class="brand__thumb">
                              <img src="assets/img/brand/brand-4.png" alt="">
                           </div>
                           <div class="brand__thumb">
                              <img src="assets/img/brand/brand-5.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- brand area end -->

            <!-- testimonial area start -->
            <div class="testimonial__area pt-50 pb-115 fix">
               <div class="container">
                  <div class="testimonial__inner p-relative pb-110">
                     <div class="testimonial__bg p-absolute">
                        <img src="assets/img/bg/testimonial-bg.png" alt="">
                     </div>
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Justin Case</h5>
                                       <span>@justin</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Gunther Beard</h5>
                                       <span>@beard</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Joss Sticks</h5>
                                       <span>@sticks</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-4.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Shahnewaz Sakil</h5>
                                       <span>@Shahnewaz</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Joss Sticks</h5>
                                       <span>@sticks</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Gunther Beard</h5>
                                       <span>@beard</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-4.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                              <div class="testimonial__item white-bg">
                                 <div class="testimonial__person d-flex mb-20">
                                    <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                    </div>
                                 </div>
                                 <div class="testimonial__text">
                                    <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- testimonial area end -->

            <!-- banner area start -->
            <section class="banner__area pb-90">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-6 col-xl-6 col-md-6">
                        <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".3s" data-background="assets/img/banner/banner-1.jpg">
                           <h3 class="banner__title">Designers who changed the web with Markit</h3>
                           <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                           <a href="about.php" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-md-6">
                        <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".7s" data-background="assets/img/banner/banner-2.jpg">
                           <h3 class="banner__title">Professional Websites are made by Markit</h3>
                           <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                           <a href="about.php" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- banner area end -->
</main>

<!-- footer area start -->
<footer>
   <div class="footer__area footer-bg">
      <div class="footer__top pt-90 pb-50">
         <div class="container">
            <div class="row">
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                  <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".3s">
                     <div class="footer__widget-head mb-35">
                        <h4 class="footer__widget-title">Follow our Socials</h4>
                     </div>
                     <div class="footer__widget-content">
                        <div class="footer__social mb-30">
                           <ul>
                              <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                        <div class="footer__lang">
                           <span><a href="#">US</a> English</span>
                           <span><a href="#">ES</a> Spanish</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                  <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".5s">
                     <div class="footer__widget-head">
                        <h4 class="footer__widget-title">Products</h4>
                     </div>
                     <div class="footer__widget-content">
                        <div class="footer__link">
                           <ul>
                              <li><a href="#">Tutor LMS </a></li>
                              <li><a href="#">WP Mega Menu </a></li>
                              <li><a href="#">WP Page Builder </a></li>
                              <li><a href="#">Themes</a></li>
                              <li><a href="#">Interactions</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                  <div class="footer__widget mb-40 wow fadeInUp footer__pl" data-wow-delay=".7s">
                     <div class="footer__widget-head">
                        <h4 class="footer__widget-title">Resources</h4>
                     </div>
                     <div class="footer__widget-content">
                        <div class="footer__link">
                           <ul>
                              <li><a href="#">Promotion </a></li>
                              <li><a href="#">Submit Content</a></li>
                              <li><a href="#">Resources</a></li>
                              <li><a href="#">Design System</a></li>
                              <li><a href="#">Expert</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                  <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".9s">
                     <div class="footer__widget-head">
                        <h4 class="footer__widget-title">Products</h4>
                     </div>
                     <div class="footer__widget-content">
                        <div class="footer__link">
                           <ul>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Support</a></li>
                              <li><a href="#">Pricing</a></li>
                              <li><a href="#">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                  <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay="1.2s">
                     <div class="footer__widget-head">
                        <h4 class="footer__widget-title">Community</h4>
                     </div>
                     <div class="footer__widget-content">
                        <div class="footer__link">
                           <ul>
                              <li><a href="#">Forums</a></li>
                              <li><a href="#">Community</a></li>
                              <li><a href="#">Meetups</a></li>
                              <li><a href="#">Jobs</a></li>
                              <li><a href="#">Careers</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom">
         <div class="container">
            <div class="footer__bottom-inner">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-md-6">
                     <div class="footer__copyright wow fadeInUp" data-wow-delay=".5s">
                        <p>Copyright © 2021 All Rights Reserved, Design by <a href="#">Theme Pure</a></p>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-md-6">
                     <div class="footer__bottom-link wow fadeInUp text-md-end" data-wow-delay=".8s">
                        <ul>
                           <li><a href="#">Licence</a></li>
                           <li><a href="#">Privacy Policy </a></li>
                           <li><a href="#">Affiliate Notice</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer area end -->

<!-- JS here -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/backToTop.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>