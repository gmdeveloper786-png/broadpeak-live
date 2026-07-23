@extends('layouts.layoutOne')

@section('title')
Solutions
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
                        <li>Solutions</li>
                    </ul>
                    <h2>Solutions</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Insurance Page One Start-->
        <section class="insurance-page-one">
            <div class="services-one__container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single" data-tilt>
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/solutions/NetworkSolutions.webp') }}" alt="Network Solutions">
                            </div>
                            <div class="service-one__content">
                                <h2 class="service-one__title"><a href="{{ route('network-solutions') }}">Network Solutions</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single" data-tilt>
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/solutions/PhysicalSecurity.webp') }}" alt="Physical Security">
                            </div>
                            <div class="service-one__content">
                                <h2 class="service-one__title"><a href="{{ route('physical-security') }}">Physical Security</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single" data-tilt>
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/solutions/PowerSolutions.webp') }}" alt="Power Solutions">
                            </div>
                            <div class="service-one__content">
                                <h2 class="service-one__title"><a href="{{ route('power-solutions') }}">Power Solutions</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single" data-tilt>
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/solutions/StorageSolutions.webp') }}" alt="Storage Solutions">
                            </div>
                            <div class="service-one__content">
                                <h2 class="service-one__title"><a href="{{ route('storage-solutions') }}">Storage Solutions</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single" data-tilt>
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/solutions/InfrastructureSolutions.webp') }}" alt="Infrastructure Solutions">
                            </div>
                            <div class="service-one__content">
                                <h2 class="service-one__title"><a href="{{ route('infrastructure-solutions') }}">Infrastructure Solutions</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                   
                  
                   
                </div>
            </div>
        </section>
        <!--Insurance Page One End-->


        @endsection