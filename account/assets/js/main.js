(function ($) {
    "use strict";
    
    /* Notification */
    $('.notification-close button').on('click', function() {
        $('.notification-area').slideUp();
    });
    
    /*--------------------------
        Newsletter Popup
    ---------------------------*/
    setTimeout(function() {
        $('.popup-wrapper-area').css({
            "opacity": "1",
            "visibility": "visible"
        });
        $('.popup-off').on('click', function() {
            $(".popup-wrapper-area").fadeOut(500);
        })
    }, 1000);
    
    /*----------------------
        search active
    -----------------------*/
    if ($('.header-action-search').length) {
        var $mrBaraDropdown = $('.header-action-search');
        $mrBaraDropdown.on('click', '.search-active', function(e) {
            e.preventDefault();
            var $this = $(this);
            if (!$this.parent().hasClass('show')) {
                $this.siblings('.search-categories-wrap').addClass('show').parent().addClass('show');
            } else {
                $this.siblings('.search-categories-wrap').removeClass('show').parent().removeClass('show');
            }
        });
    }
    
    /*---------------------
        Select2 active
    --------------------- */
    $('.select-active').select2();
    $(window).on('resize', function(){
        $('.select-active').select2()
    });
    
    /*====== SidebarCart ======*/
    function miniCart() {
        var navbarTrigger = $('.cart-active'),
            endTrigger = $('.cart-close'),
            container = $('.sidebar-cart-active'),
            wrapper = $('.main-wrapper');
        
        wrapper.prepend('<div class="body-overlay"></div>');
        
        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper.addClass('overlay-active');
        });
        
        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });
        
        $('.body-overlay').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });
    };
    miniCart();
    
    /*====== Video active ======*/
    $('.video-banner').on('click', '.status', function(e) {
        e.preventDefault();
        var $el = $(this),
            $banner = $el.closest('.video-banner'),
            video = $el.closest('.video-banner').find('video')[0];
        if (video.paused) {
            $banner.addClass('playing');
            video.play();
        } else {
            $banner.removeClass('playing');
            video.pause();
        }
    });
    
    /*====== Slider active 1 ======*/
    var panelSliderOne = new Swiper('.slider-active-1', {
        slidesPerView: 5,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.slider-next-1',
            prevEl: '.slider-prev-1',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                centeredSlides: false,
            },
            480: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 3
            },
            1366: {
                slidesPerView: 5
            }
        },
    });
    
    /*====== Slider active 2 ======*/
    var panelSliderTwo = new Swiper('.slider-active-2', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    /*====== Slider active 2 ======*/
    var heroSlideActiveThree = new Swiper('.hero-slider-active-3', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        navigation: {
            nextEl: '.hero-slider-next-2',
            prevEl: '.hero-slider-prev-2',
        },
    });
    
    /*====== Portfolio slider active ======*/
    var panelSliderThree = new Swiper('.portfolio-slider-active', {
        slidesPerView: 1,
        direction: 'vertical',
        mousewheel: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
    });
    
    /*====== Testimonial active ======*/
    var SliderFour = new Swiper('.testimonial-active', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.slider-next-2',
            prevEl: '.slider-prev-2',
        },
    });
    
    /*====== Testimonial active 2 ======*/
    var SliderFive = new Swiper('.testimonial-active-2', {
        slidesPerView: 1,
        loop: true,
        speed: 500,
        navigation: {
            nextEl: '.slider-next-3',
            prevEl: '.slider-prev-3',
        },
    });
    
    /*====== Testimonial active ======*/
    var SliderSix = new Swiper('.testimonial-active-3', {
        slidesPerView: 1,
        loop: true,
    });
    
    /*------ ScrollUp -------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    /*---- CounterUp ----*/
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });
    
    /*-------------------------
        Smooth Scroll
    --------------------------*/
    $('.scroll-down a').on('click', function(e) {
        e.preventDefault();
        var link = this;
        $.smoothScroll({
            offset: 0,
            scrollTarget: link.hash
        });
    });
    
    /*--------------------------------
        Mouse Parallax
    -----------------------------------*/
    var scene = $('#scene');
    if(scene.length > 0) {
        var parallaxInstance = new Parallax(scene.get(0), {
            relativeInput: true,
        });
    }
    
    /*--------------------------------
        Product Slider Active Two
    -----------------------------------*/
    var productSliderActiveTwo = new Swiper('.product-slider-active-2', {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
            1366: {
                slidesPerView: 4
            }
        },
    });
    
    /*--------------------------------
        Relative product active
    -----------------------------------*/
    var relativeProduct = new Swiper('.relative-product-active', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
        },
    });
    
    /*--------------------------------
        Relative product active 2
    -----------------------------------*/
    var relativeProductTwo = new Swiper('.relative-product-active-2', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 2
            },
            1366: {
                slidesPerView: 3
            },
        },
    });
    
    /*--------------------------------
        Product slider active 3
    -----------------------------------*/
    var productSliderActiveThree = new Swiper('.product-slider-active-3', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
            1366: {
                slidesPerView: 4
            }
        },
    });
    
    /*--------------------------------
        Product slider active 4
    -----------------------------------*/
    var productSliderActiveFour = new Swiper('.product-slider-active-4', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.product-next-1',
            prevEl: '.product-prev-1',
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
        },
    });
    
    /*--------------------------------
        Product slider active 5
    -----------------------------------*/
    var productSliderActiveFive = new Swiper('.product-slider-active-5', {
        slidesPerView: 3,
        spaceBetween: 10,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        navigation: {
            nextEl: '.product-next-2',
            prevEl: '.product-prev-2',
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            },
        },
    });
    /*--------------------------------
        Product slider active 5
    -----------------------------------*/
    var productSliderActiveSix = new Swiper('.product-slider-active-6', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            },
        },
    });
    
    /*--------------------------------
        Product slider active 4
    -----------------------------------*/
    var productSliderActiveEight = new Swiper('.product-slider-active-7', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.product-next-3 , .product-next-4',
            prevEl: '.product-prev-3 , .product-prev-4',
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            479: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
        },
    });
    
    /*--------------------------------
        Product slider active 7
    -----------------------------------*/
    var productSliderActiveSeven = new Swiper('.recent-view-slider-active', {
        slidesPerView: 8,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.recent-pro-next',
            prevEl: '.recent-pro-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            479: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            },
            1200: {
                slidesPerView: 8
            },
        },
    });
    
    
    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = $('.product-quality');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    
    /*------------------------------------
		Product details big img slider
    -----------------------------------*/
    $('#exampleModal').on('shown.bs.modal', function () {
        var productDetailsBig = new Swiper('.product-details-big-img-slider', {
            autoplay: false,
            delay: 5000,
            slidesPerView: 1,
            loop: false,
            navigation: {
                nextEl: '.product-details-next',
                prevEl: '.product-details-prev',
            },
        }); 
    })
    
    /*--------------------------------------
		Product details small img slider
    ---------------------------------------*/
    
    var productDetailsSmall = new Swiper('.product-details-small-img-slider', {
        loop: false,
        spaceBetween: 15,
        slidesPerView: 4,
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 4,
            },
        }
    });
    
    /*--------------------------------------
		Product details big img slider 2
    ---------------------------------------*/
    var productDetailsBigTwo = new Swiper('.product-details-big-img-slider-2', {
        autoplay: false,
        delay: 5000,
        slidesPerView: 1,
        loop: false,
        navigation: {
            nextEl: '.product-details-next',
            prevEl: '.product-details-prev',
        },
        thumbs: {
            swiper: productDetailsSmall
        }
    });
    
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();
    
    /*-----------------
        Menu sticky
    -----------------*/
    var header = $('.sticky-bar');
    var $window = $(window);
    $window.on('scroll', function() {
        var scroll = $window.scrollTop();
        if (scroll < 200) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });
    
    /*---------------------
        Price range
    --------------------- */
    var sliderrange = $('#slider-range');
    var amountprice = $('#amount');
    $(function() {
        sliderrange.slider({
            range: true,
            min: 0,
            max: 400,
            values: [0, 300],
            slide: function(event, ui) {
                amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        amountprice.val("$" + sliderrange.slider("values", 0) +
            " - $" + sliderrange.slider("values", 1));
    }); 
    
    /* NiceSelect */
    $('.nice-select').niceSelect();
    
    /*--------------------------
        Isotope active 1
    ---------------------------- */
    
    $('.grid').imagesLoaded(function() {
        // init Isotope
        $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-sizer',
            }
        });
    });
    
    /*--------------------------
        Isotope active 2
    ---------------------------- */
    $('.grid-2').imagesLoaded(function() {
        // filter items on button click
        $('.isotope-menu-2').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $gridTwo.isotope({ filter: filterValue });
        });	
        // init Isotope
        var $gridTwo = $('.grid-2').isotope({
            itemSelector: '.grid-item-2',
            percentPosition: true,
            layoutMode: 'fitRows',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item-2',
            }
        });
    });
    
    /*--------------------------
        Isotope active 3
    ---------------------------- */
    $('.grid-3').imagesLoaded(function() {
        // filter items on button click
        $('.isotope-menu').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $gridThree.isotope({ filter: filterValue });
        });	
        // init Isotope
        var $gridThree = $('.grid-3').isotope({
            itemSelector: '.grid-item-3',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item-3',
            }
        });
    });
    $('.isotope-menu-active button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });
    
    
    /*---------------------
        Video popup
    --------------------- */
    $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });
    
    /*---------------------------
		Blog img slider
    ----------------------------*/
    var blogImgSlider = new Swiper('.blog-img-slider', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.nav-5-next',
            prevEl: '.nav-5-prev',
        },
    });
    
    /*-----------------------------
		Portfolio details slider
    -------------------------------*/
    var portfolioDetailsSlider = new Swiper('.portfolio-details-slider', {
        loop: true,
        centeredSlides: true,
        spaceBetween: 30,
        navigation: {
            nextEl: '.portfolio-slider-next',
            prevEl: '.portfolio-slider-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 3
            }
        }
    });
    
    /*------------------------
       Coupon code active
    -------------------------*/
    function cartCoupon() {
        var trigger = $('.coupon-active'),
            container = $('.calculate-discount-dropdown');
        trigger.on('click', function(e) {
            e.preventDefault();
            container.toggleClass('active');
        })
    }
    cartCoupon();
    
    /*------------------------
       Coupon code active two
    -------------------------*/
    function cartCouponTwo() {
        var trigger = $('.coupon-active-2'),
            container = $('.calculate-discount-dropdown-2');
        trigger.on('click', function(e) {
            e.preventDefault();
            container.toggleClass('active');
        })
    }
    cartCouponTwo();
    
    /*--- Checkout toggle function ----*/
    $('.checkout-click1').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info').slideToggle(900);
    });
    
    
    /*--- Checkout toggle function ----*/
    $('.checkout-click3').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info3').slideToggle(1000);
    });
    
    /*-------------------------
        Create an account toggle
    --------------------------*/
    $('.checkout-toggle2').on('click', function() {
        $('.open-toggle2').slideToggle(1000);
    });
    
    $('.checkout-toggle').on('click', function() {
        $('.open-toggle').slideToggle(1000);
    });
    
    /*-------------------------------------
        Checkout one click toggle function
    ---------------------------------------*/
    var checked = $( '.sin-payment input:checked' )
    if(checked){
        $(checked).siblings( '.payment-box' ).slideDown(900);
    };
	 $( '.sin-payment input' ).on('change', function() {
        $( '.payment-box' ).slideUp(900);
        $(this).siblings( '.payment-box' ).slideToggle(900);
    });
    
    /*====== Product layout4 slider ======*/
    var productLayout4Slider = new Swiper('.product-layout4-slider', {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.product-layout4-nav-next',
            prevEl: '.product-layout4-nav-prev',
        },
    });
    
    /*====== Product layout6 slider ======*/
    var productLayout5Slider = new Swiper('.product-layout6-slider', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.product-details-next',
            prevEl: '.product-details-prev',
        },
    });
    
    /*----------------------------------------
		Product details small img slider 2
    -----------------------------------------*/
    
    var productDetailsSmallTwo = new Swiper('.product-details-small-img-slider-2', {
        loop: false,
        spaceBetween: 25,
        slidesPerView: 4,
        direction: 'vertical',
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            479: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        }
    });
    
    /*----------------------------------------
		Product details big img slider 3
    -----------------------------------------*/
    var productDetailsBigThree = new Swiper('.product-details-big-img-slider-3', {
        autoplay: false,
        delay: 5000,
        slidesPerView: 1,
        loop: false,
        navigation: {
            nextEl: '.product-details-next',
            prevEl: '.product-details-prev',
        },
        thumbs: {
            swiper: productDetailsSmallTwo
        }
    });
    
    /*--- Slinky menu active ----*/
    const slinky = $('#menu').slinky();
    const slinky2 = $('#mobile-menu').slinky();
    const slinky3 = $('#mobile-currency').slinky();
    const slinky4 = $('#mobile-language').slinky();
    
    /*====== clickable mainmenu active ======*/
    function clickableMainMenu() {
        var menuTrigger = $('.clickable-mainmenu-active'),
            endTrigger = $('button.clickable-mainmenu-close'),
            container = $('.clickable-mainmenu');
        
        menuTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
        });
        
        endTrigger.on('click', function() {
            container.removeClass('inside');
        });
    };
    clickableMainMenu();
    
    /*====== Mobile menu active ======*/
    function mobileMainMenu() {
        var navbarTrigger = $('.mobile-menu-active-button'),
            endTrigger = $('.off-canvas-close'),
            container = $('.off-canvas-active'),
            wrapper = $('.main-wrapper-2');
        
        wrapper.prepend('<div class="body-overlay-2"></div>');
        
        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper.addClass('overlay-active-2');
        });
        
        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active-2');
        });
        
        $('.body-overlay-2').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active-2');
        });
    };
    mobileMainMenu();
    
    
    /*------------------------------
        Mobile menu dropdown active
    -------------------------------- */
    var $offCanvasNav = $('.category-menu-dropdown'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });
    
    /*------------------------------
        Kenburne slider active
    -------------------------------- */
    var swiper = new Swiper('.kenburne-slider-active', {
        autoplay: true,
        centeredSlides: true,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 8500,
        },
    });
    
    
    
})(jQuery);

