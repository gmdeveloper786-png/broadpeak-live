@extends('layouts.layoutOne')

@section('title')
About Us
@endsection

@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('assets/images/home/about-bread.jpg') }})">
            </div>
            <div class="container">
                <div class="page-header__inner wow fadeInUp" data-wow-delay="0ms">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="wow slideInLeft" data-wow-delay="100ms" data-wow-duration="900ms">
                                <div class="about-one__img-box" data-tilt>
                                    <div class="about-one__img about-one__img-1">
                                        <img src="{{ asset('assets/images/about/aboutp1.jpg') }}" alt="Broadpeak-Intl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right wow fadeInUp" data-wow-delay="200ms">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Broadpeak is a UK-based IT distribution company</h2>
                            </div>
        
        
                            <p class="about-one__text-2">
                                Broadpeak is a UK-based IT distribution company with its head office located in London. We are dedicated to transforming
                                the technology landscape with innovative, reliable, and future-proof solutions. In the distribution arena, Broadpeak
                                stands apart through its extensive experience, fueled by a highly skilled team of industry professionals. This strong
                                foundation allows us to handle large-scale, high-value projects with ease, providing clients with comprehensive
                                technology solutions that align with their business needs.<br><br>
                                
                                Specializing in Gulf and African markets, Broadpeak ensures maximum breadth and coverage, delivering tailored solutions
                                that empower businesses of all sizes to thrive in a competitive marketplace. Our deep expertise spans critical IT
                                infrastructure domains, including storage, hyper-converged infrastructure (HCI), networking, software-defined wide area
                                networks (SD-WAN), cybersecurity, physical security, and cloud platforms. By offering these advanced solutions, we
                                enable our partners to enhance operational efficiency, security, and scalability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->


                <!--About One Start-->
                <section class="about-one about-section-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="about-one__right wow fadeInUp" data-wow-delay="100ms">
                                    <div class="section-title text-left">
                                        <h2 class="section-title__title">We don’t just distribute products</h2>
                                    </div>
                
                
                                    <p class="about-one__text-2">
                                        we provide value-added services that differentiate us in the market. Our dedicated team of technical experts works
                                        closely with clients to offer personalized support at every stage of the technology lifecycle — from product selection
                                        and procurement to implementation, optimization, and ongoing support. This hands-on approach ensures that we deliver
                                        tailored solutions that fit each client’s unique requirements while driving innovation and growth.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="about-one__left">
                                    <div class="about-one__img-box" data-tilt>
                                        <div class="about-one__img">
                                            <img src="{{ asset('assets/images/about/aboutp2.jpg') }}" alt="Broadpeak-Intl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--About One End-->



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
                        <div class="about-one__right wow fadeInUp" data-wow-delay="200ms">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Our customer-centric philosophy</h2>
                            </div>
        
        
                            <p class="about-one__text-2">
                                Our customer-centric philosophy places us at the forefront of the IT distribution space, allowing us to form
                                long-lasting partnerships based on trust, reliability, and excellence. By continuously expanding our portfolio and
                                keeping pace with the latest advancements in technology, Broadpeak ensures that our clients stay ahead of the curve,
                                ready to tackle future challenges and seize emerging opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

     

       @endsection