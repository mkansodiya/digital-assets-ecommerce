<?php require('inc/header.php'); ?>
<!-- header area end -->

<!-- cart mini area start -->
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
               <li>
                  <div class="cartmini__thumb">
                     <a href="product-details.html">
                        <img src="assets/img/product/sm/cart-5.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="product-details.html">Findup - Directory & Listing</a></h5>
                     <div class="product-quantity mt-10 mb-10">
                        <span class="cart-minus">-</span>
                        <input class="cart-input" type="text" value="1" />
                        <span class="cart-plus">+</span>
                     </div>
                     <div class="product__sm-price-wrapper">
                        <span>2 <i class="fal fa-times"></i></span>
                        <span class="product__sm-price">$24.00</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
               </li>
               <li>
                  <div class="cartmini__thumb">
                     <a href="product-details.html">
                        <img src="assets/img/product/sm/cart-2.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="product-details.html">TechBuzz - Businesses Agency</a></h5>
                     <div class="product-quantity mt-10 mb-10">
                        <span class="cart-minus">-</span>
                        <input class="cart-input" type="text" value="1" />
                        <span class="cart-plus">+</span>
                     </div>
                     <div class="product__sm-price-wrapper">
                        <span>1 <i class="fal fa-times"></i></span>
                        <span class="product__sm-price">$17.00</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
               </li>
               <li>
                  <div class="cartmini__thumb">
                     <a href="product-details.html">
                        <img src="assets/img/product/sm/cart-3.jpg" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5><a href="product-details.html">Zibber - Agency Template</a></h5>
                     <div class="product-quantity mt-10 mb-10">
                        <span class="cart-minus">-</span>
                        <input class="cart-input" type="text" value="1" />
                        <span class="cart-plus">+</span>
                     </div>
                     <div class="product__sm-price-wrapper">
                        <span>5 <i class="fal fa-times"></i></span>
                        <span class="product__sm-price">$72.00</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
               </li>
            </ul>
         </div>
         <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
               <h4>Subtotal:</h4>
               <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
               <a href="cart.html" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a>
               <a href="checkout.html" class="m-btn m-btn-3 w-100"> <span></span> checkout</a>
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
            <a href="index.html">
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

   <!-- pricing area start -->
   <section class="pricing__area pt-100 pb-110">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
               <div class="page__title-wrapper text-center mb-50">
                  <h2 class="page__title-2">Our Pricing <br>We provide flexible plan</h2>
                  <p>Thousands of Markit Brands have made the swich.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               <div class="pricing__tab mb-40">
                  <ul class="nav nav-tabs justify-content-center" id="priceTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">monthly</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">yearly</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="tab-content wow fadeInUp" id="priceTabContent" data-wow-delay=".5s">
            <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Personal</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>26</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Professional</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>44</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item active text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Pro Store</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>66</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Business</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>89</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Personal</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>26</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Professional</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>44</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Pro Store</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>66</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="pricing__item active text-center transition-3 mb-30">
                        <div class="pricing__header mb-25">
                           <h3>Business</h3>
                           <p>What You Are Looking For!</p>
                        </div>
                        <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                           <span>$</span>
                           <h4>89</h4>
                        </div>
                        <div class="pricing__switch mb-10">
                           <button type="button">Switch to yearly billing</button>
                        </div>
                        <div class="pricing__buy mb-20">
                           <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span> Buy Now</a>
                        </div>
                        <div class="pricing__features text-start">
                           <ul>
                              <li>Powerful Admin Panel</li>
                              <li>1 Native Android App</li>
                              <li>Multi-Language Support</li>
                              <li>Free SSL Certificate</li>
                              <li>1X Allocated Resources</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- pricing area end -->

   <!-- faq area start -->
   <section class="faq__area grey-bg-2 pt-105 pb-125">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
               <div class="section__title-wrapper text-center mb-65">
                  <h2 class="section__title">Frequently Asked Questions</h2>
                  <p>A load of old tosh the full monty sloshed pukka squiffy.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-3">
               <div class="faq__tab wow fadeInLeft" data-wow-delay=".3s">
                  <ul class="nav nav-tabs" id="faqTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="sale-tab" data-bs-toggle="tab" data-bs-target="#sale" type="button" role="tab" aria-controls="sale" aria-selected="true">Sales</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="template-tab" data-bs-toggle="tab" data-bs-target="#template" type="button" role="tab" aria-controls="template" aria-selected="false">Templates</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ui-tab" data-bs-toggle="tab" data-bs-target="#ui" type="button" role="tab" aria-controls="ui" aria-selected="false">UI Design </button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xd-tab" data-bs-toggle="tab" data-bs-target="#xd" type="button" role="tab" aria-controls="xd" aria-selected="false">XD Files</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-9">
               <div class="faq__tab-content wow fadeInRight" data-wow-delay=".7s">
                  <div class="tab-content" id="faqTabContent">
                     <div class="tab-pane fade show active" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                        <div class="accordion" id="sale-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="template" role="tabpanel" aria-labelledby="template-tab">
                        <div class="accordion" id="template-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSix">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSev">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSev" aria-expanded="false" aria-controls="collapseSev">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseSev" class="accordion-collapse collapse" aria-labelledby="headingSev" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEig">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEig" aria-expanded="false" aria-controls="collapseEig">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseEig" class="accordion-collapse collapse" aria-labelledby="headingEig" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingNine">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="ui" role="tabpanel" aria-labelledby="ui-tab">
                        <div class="accordion" id="ui-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEle">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEle" aria-expanded="false" aria-controls="collapseEle">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseEle" class="accordion-collapse collapse show" aria-labelledby="headingEle" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwl">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwl" aria-expanded="false" aria-controls="collapseTwl">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseTwl" class="accordion-collapse collapse" aria-labelledby="headingTwl" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThi">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThi" aria-expanded="false" aria-controls="collapseThi">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseThi" class="accordion-collapse collapse" aria-labelledby="headingThi" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFourth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFiveth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivth" aria-expanded="true" aria-controls="collapseFivth">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseFivth" class="accordion-collapse collapse" aria-labelledby="headingFiveth" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="xd" role="tabpanel" aria-labelledby="xd-tab">
                        <div class="accordion" id="xd-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSixth">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseSixth" class="accordion-collapse collapse show" aria-labelledby="headingSixth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSevth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevth" aria-expanded="false" aria-controls="collapseSevth">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseSevth" class="accordion-collapse collapse" aria-labelledby="headingSevth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEigth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseEigth" class="accordion-collapse collapse" aria-labelledby="headingEigth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingNieth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNieth" aria-expanded="false" aria-controls="collapseNieth">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseNieth" class="accordion-collapse collapse" aria-labelledby="headingNieth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwth" aria-expanded="true" aria-controls="collapseTwth">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseTwth" class="accordion-collapse collapse" aria-labelledby="headingTwth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- faq area end -->
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