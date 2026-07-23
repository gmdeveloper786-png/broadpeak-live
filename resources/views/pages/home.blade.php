@extends('layouts.layoutOne')

@section('title')
Home
@endsection

@section('content')

<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/hero-section/slider-1.jpg') }});"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title">Integrated Solutions for
                                    Stronger Networks, Safer
                                    Systems, and Sustainable
                                    Power</h2>
                                <p class="main-slider__text">Broadpeak-Intl: Your Trusted Partner in Networking,
                                    Security, and Power
                                    Solutions.</p>
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('about-us') }}" class="thm-btn main-slider__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/hero-section/slider-2.jpg') }});"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title">Strengthening Networks
                                    Safeguarding Systems
                                    Empowering the Future</h2>
                                <p class="main-slider__text">Broadpeak-Intl: Your Trusted Partner in Networking,
                                    Security, and Power
                                    Solutions.</p>
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('about-us') }}" class="thm-btn main-slider__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/hero-section/slider-3.jpg') }});"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title">Empowering Seamless<br> Connectivity
                                    Across <br> Diverse Regions</h2>

                                <p class="main-slider__text">Broadpeak-Intl: Your Trusted Partner in Networking,
                                    Security, and Power
                                    Solutions.</p>
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('about-us') }}" class="thm-btn main-slider__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow1"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--Brand One Start-->
<section class="brand-one wow fadeInUp" data-wow-delay="80ms">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-one__main-content">
                    <div class="thm-swiper__slider swiper-container brand-swiper-autoplay" data-swiper-options='{
                                                    "spaceBetween": 100,
                                                    "slidesPerView": 5,
                                                    "autoplay": { "delay": 3000, "disableOnInteraction": false, "pauseOnMouseEnter": true },
                                                    "breakpoints": {
                                                        "0": {
                                                            "spaceBetween": 30,
                                                            "slidesPerView": 2
                                                        },
                                                        "375": {
                                                            "spaceBetween": 30,
                                                            "slidesPerView": 2
                                                        },
                                                        "575": {
                                                            "spaceBetween": 30,
                                                            "slidesPerView": 3
                                                        },
                                                        "767": {
                                                            "spaceBetween": 50,
                                                            "slidesPerView": 4
                                                        },
                                                        "991": {
                                                            "spaceBetween": 50,
                                                            "slidesPerView": 5
                                                        },
                                                        "1199": {
                                                            "spaceBetween": 100,
                                                            "slidesPerView": 5
                                                        }
                                                    }
                                                }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="https://securityshells.com/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/hid.png') }}" alt="HID">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.wavelynx.com/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/wavelynx.png') }}" alt="Wavelynx">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://golmar.es/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/golmar.png') }}" alt="Golmar">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.foredgetech.com/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/foredge.png') }}" alt="Foredge">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.huawei.com/en/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/huawei.png') }}" alt="Huawei">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.ceburu.com/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/ceburu.png') }}" alt="Ceburu">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.h3c.com/en/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/h3c.png') }}" alt="H3C">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://zerowl.io/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/Zerowl.png') }}" alt="Zerowl">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.lenovo.com/eg/en/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/lenovo.png') }}" alt="Lenovo">
                                </a>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <a href="https://www.cisco.com/" target="_blank">
                                    <img src="{{ asset('assets/images/brand-vendors/cisco.svg') }}" alt="Cisco">
                                </a>
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--About One Start-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="wow slideInLeft" data-wow-delay="100ms" data-wow-duration="900ms">
                        <div class="about-one__img-box" data-tilt>
                            <div class="about-one__img">
                                <img src="{{ asset('assets/images/about/About-us.jpg') }}" alt="Broadpeak-Intl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right wow fadeInUp" data-wow-delay="180ms">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Connecting the Future, Today</p>
                        </div>
                        <h2 class="section-title__title">Leading Provider of Networking and Power Solutions</h2>
                    </div>


                    <p class="about-one__text-2">
                        Broadpeak is a UK-based IT distribution company, dedicated to transforming the technology
                        landscape with
                        innovative,
                        reliable, and future-proof solutions. In distribution arena, Broadpeak stands apart through its
                        extensive experience,
                        fueled by a highly experienced and skilled team of industry professionals. This strong
                        foundation allows
                        us to handle
                        large-scale, high-value projects with ease, providing clients with comprehensive technology
                        solutions
                        that align with
                        their business needs.
                    </p>
                    <div class="about-one__btn-call">
                        <div class="about-one__btn-box">
                            <a href="{{ route('about-us') }}" class="thm-btn about-one__btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->





<!--Feature Two Start-->
<section class="feature-two">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0ms">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Innovative Products for Every Connectivity Need</p>
                </div>
                <h2 class="section-title__title">Explore Our Comprehensive Range of Networking and Power Solutions</h2>
                <p class="why-choose-one__text">Discover a diverse selection of high-quality products designed to
                    enhance
                    connectivity and power management. From
                    advanced networking switches to reliable UPS systems, our solutions are crafted to meet the demands
                    of
                    businesses
                    seeking efficiency, security, and scalability.</p>
            </div>
            </div>
            <!--Feature Two Single Start-->
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__single" data-tilt>
                    <div class="feature-two__img">
                        <img src="{{ asset('assets/images/home/networking-switches.jpg') }}" alt="Networking Switches">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">
                                <span class="icon-cash-flow"></span>
                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text">Networking Switches
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__single" data-tilt>
                    <div class="feature-two__img">
                        <img src="{{ asset('assets/images/home/wifi-products.jpg') }}" alt="WiFi Products">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">
                                <span class="icon-profits"></span>
                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text">WiFi Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__single" data-tilt>
                    <div class="feature-two__img">
                        <img src="{{ asset('assets/images/home/ups-systems.jpg') }}" alt="UPS Systems">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">
                                <span class="icon-insurance-2"></span>
                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text">UPS Systems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="feature-two__single" data-tilt>
                    <div class="feature-two__img">
                        <img src="{{ asset('assets/images/home/access-control-readers.jpg') }}" alt="Access Control Readers">
                    </div>
                    <div class="feature-two__content">
                        <div class="feature-two__content-inner">
                            <div class="feature-two__icon">
                                <span class="icon-insurance-2"></span>
                            </div>
                            <div class="feature-two__text-box">
                                <p class="feature-two__text">Access Control
                                    Readers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->

        </div>
</section>
<!--Feature Two End-->


<!--Services Two Start-->
<section class="services-two">
    <div class="container">
        <div class="services-two__top">
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="0ms">
                    <div class="services-two__top-left">
                        <div class="section-title text-center">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Why Choose Broadpeak-Intl?</p>
                            </div>
                            <h2 class="section-title__title">Excellence in Every Connection</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-two__bottom">
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-two__single" data-tilt>
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <img src="{{ asset('assets/images/home/1.svg') }}" alt="Expertise">
                            </div>
                        </div>
                        <h3 class="services-two__title">Expertise</h3>
                        <p class="services-two__text">A team of professionals with extensive industry knowledge.</p>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__single" data-tilt>
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <img src="{{ asset('assets/images/home/2.svg') }}" alt="Quality Products">
                            </div>
                        </div>
                        <h3 class="services-two__title">Quality Products</h3>
                        <p class="services-two__text">We provide only the best products from trusted manufacturers.</p>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-two__single" data-tilt>
                        <div class="services-two__icon-box">
                            <div class="services-two__icon">
                                <img src="{{ asset('assets/images/home/3.svg') }}" alt="Exceptional Support">
                            </div>
                        </div>
                        <h3 class="services-two__title">Exceptional Support</h3>
                        <p class="services-two__text">24/7 customer support to ensure your operations run smoothly.</p>
                    </div>
                </div>
                <!--Services Two Single End-->




            </div>
        </div>
    </div>
</section>
<!--Services Two End-->


<!--Portfolio Carousel Page Start-->
<section class="portfolio-carousel-page wow fadeInUp" data-wow-delay="100ms">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0ms">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our Products</p>
                    </div>
                    <h2 class="section-title__title">Tailored Solutions to Power Your Business Needs</h2>
                </div>
            </div>
            <div class="thm-owl__carousel owl-theme owl-carousel portfolio-carousel carousel-dot-style"
                data-owl-options='{
                                                "items": 3,
                                                "margin": 30,
                                                "smartSpeed": 700,
                                                "loop":true,
                                                "autoplay": 6000,
                                                "nav":false,
                                                "dots":true,
                                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                                "responsive":{
                                                    "0":{
                                                        "items":1
                                                    },
                                                    "768":{
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 3
                                                    }
                                                }
                                            }'>
                <!--Portfolio Single Start-->
                <div class="item">
                    <div class="portfolio__single">
                        <div class="portfolio__img">
                            <img src="{{ asset('assets/images/products/p-1.jpg') }}" alt="Product 1">
                            <div class="portfolio__plus">
                                <a href="{{ asset('assets/images/products/p-1.jpg') }}" class="img-popup"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Single End-->
                <!--Portfolio Single Start-->
                <div class="item">
                    <div class="portfolio__single">
                        <div class="portfolio__img">
                            <img src="{{ asset('assets/images/products/p-2.jpg') }}" alt="Product 2">
                            <div class="portfolio__plus">
                                <a href="{{ asset('assets/images/products/p-2.jpg') }}" class="img-popup"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Single End-->
                <!--Portfolio Single Start-->
                <div class="item">
                    <div class="portfolio__single">
                        <div class="portfolio__img">
                            <img src="{{ asset('assets/images/products/p-3.jpg') }}" alt="Product 3">
                            <div class="portfolio__plus">
                                <a href="{{ asset('assets/images/products/p-3.jpg') }}" class="img-popup"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Single End-->
                <!--Portfolio Single Start-->
                <div class="item">
                    <div class="portfolio__single">
                        <div class="portfolio__img">
                            <img src="{{ asset('assets/images/products/p-4.jpg') }}" alt="Product 4">
                            <div class="portfolio__plus">
                                <a href="{{ asset('assets/images/products/p-4.jpg') }}" class="img-popup"><span
                                        class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Single End-->


            </div>
        </div>
    </div>
</section>
<!--Portfolio Carousel Page End-->



@endsection