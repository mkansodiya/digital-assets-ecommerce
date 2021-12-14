<?php require('inc/header.php');
$query = new query();
?>
<!-- header area end -->

<!-- cart mini area start -->
<?php require('inc/cart.php'); ?>
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
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->

<main>

   <!-- bg shape area start -->
   <div class="bg-shape">
      <img src="assets/img/shape/shape-1.png" alt="">
   </div>
   <!-- bg shape area end -->

   <!-- sign up area start -->
   <section class="signup__area po-rel-z1 pt-100 pb-145">
      <div class="sign__shape">
         <img class="man-1" src="assets/img/icon/sign/man-3.png" alt="">
         <img class="man-2 man-22" src="assets/img/icon/sign/man-2.png" alt="">
         <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
         <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
         <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
         <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
         <img class="flower" src="assets/img/icon/sign/flower.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
               <div class="page__title-wrapper text-center mb-55">
                  <h2 class="page__title-2">Create a free <br> Account</h2>
                  <p>I'm a subhead that goes with a story.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
               <div class="sign__wrapper white-bg">
                  <div class="sign__header mb-35">
                     <div class="sign__in text-center">
                        <a href="#" class="sign__social g-plus text-start mb-15"><i class="fab fa-google-plus-g"></i>Sign Up with Google</a>
                        <p> <span>........</span> Or, <a href="sign-up.php">sign up</a> with your email<span> ........</span> </p>
                     </div>
                  </div>
                  <div class="sign__form">
                     <?php $form = " <form method=\"POST\" action=\"?auth=verify\">
                        <!-- <div class=\"sign__input-wrapper mb-25\">
                           <h5>Full Name</h5>
                           <div class=\"sign__input\">
                              <input type=\"text\" placeholder=\"Full name\">
                              <i class=\"fal fa-user\"></i>
                           </div>
                        </div> -->
                        <!-- <div class=\"sign__input-wrapper mb-10\">
                           <h5>Re-Password</h5>
                           <div class=\"sign__input\">
                              <input type=\"text\" placeholder=\"Re-Password\">
                              <i class=\"fal fa-lock\"></i>
                           </div>
                        </div> -->
                        <div class=\"sign__input-wrapper mb-25\">
                           <h5>Your email</h5>
                           <div class=\"sign__input\">
                              <input name=\"email\" type=\"text\" placeholder=\"e-mail address\">
                              <i class=\"fal fa-envelope\"></i>
                           </div>
                        </div>
                        <div class=\"sign__input-wrapper mb-25\">
                           <h5>Password</h5>
                           <div class=\"sign__input\">
                              <input name=\"password\" type=\"password\" placeholder=\"Password\">
                              <i class=\"fal fa-lock\"></i>
                           </div>
                        </div>
                        <!-- <div class=\"sign__input-wrapper mb-10\">
                           <h5>Re-Password</h5>
                           <div class=\"sign__input\">
                              <input type=\"text\" placeholder=\"Re-Password\">
                              <i class=\"fal fa-lock\"></i>
                           </div>
                        </div> -->
                        <div class=\"sign__action d-flex justify-content-between mb-30\">
                           <div class=\"sign__agree d-flex align-items-center\">
                              <input class=\"m-check-input\" name=\"term\" type=\"checkbox\" id=\"m-agree\">
                              <label class=\"m-check-label\" for=\"m-agree\">I agree to the <a href=\"#\">Terms & Conditions</a>
                              </label>
                           </div>
                        </div>
                        <button name=\"register\" class=\"m-btn m-btn-4 w-100\"> <span></span> Sign Up</button>
                        <div class=\"sign__new text-center mt-20\">
                           <p>Already in GPLdog ? <a href=\"sign-in.php\"> Sign In</a></p>
                        </div>
                     </form>";
                     if (isset($_POST['register'])) {
                        $email = $_POST['email'];
                        $user_count = count($query->fetchData("users", "user_email", "user_email='$email'"));
                        if ($user_count > 0) {
                           echo "user already exists with same email";
                        } else {
                           $key = rndmString(6, "", "1234567890");
                           $pass = $_POST['password'];
                           $pass = $auth->encPass($pass);
                           $data = ["user_pass" => $pass, "user_email" => $email, "user_activation_key" => $key];
                           $created_user_id = $query->insertData("users", $data);
                           $ex_user = $_SESSION['user_id'];
                           $_SESSION['user_id'] = $created_user_id;
                           $user_id = $_SESSION['user_id'];
                           $_SESSION['user_login'] = true;
                           $cart_update = $query->updateData("cart", "user_id='$user_id'", "user_id='$ex_user'");
                        }
                     }
                     if (isset($_GET['auth']) == "verify" && $user_count > 0) {
                        $form = "<form method=\"POST\" >
                           <div class=\"sign__input-wrapper mb-25\">
                              <h5>OTP Verification</h5>
                              <div class=\"sign__input\">
                                 <input name=\"otp\" type=\"text\" placeholder=\"Enter OTP\">
                                 <i class=\"fal fa-lock\"></i>
                              </div>
                             
                           </div>
                     
                           <button name=\"verify\" class=\"m-btn m-btn-4 w-100\"> <span></span> Verify Now</button>
                           
                        </form>";
                        if (isset($_GET['id'])) {
                           $created_user_id = $_GET['id'];
                        } else if (isset($_POST['register'])) {
                           $created_user_id = $created_user_id;
                        } else if (isset($_POST['verify'])) {
                           $user_id = $_SESSION['user_id'];
                           $key = $_POST['otp'];
                           $q = $query->fetchData("users", "user_activation_key", "ID='$user_id'");

                           if ($q[0]['user_activation_key'] == $key) {
                              $q = $query->updateData("users", "user_status=1,user_activation_key=''", "ID='$user_id'");
                           } else {
                              echo "Wrong OTP";
                           }
                        }
                     }
                     echo $form;


                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- sign up area end -->

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