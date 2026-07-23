@extends('layouts.layoutOne')

@section('title')
Infrastructure Solutions
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
        <li><a href="{{ route('solutions') }}">Solutions</a></li>
        <li><span>/</span></li>
        <li>Infrastructure Solutions</li>
      </ul>
      <h2>Infrastructure Solutions</h2>
    </div>
  </div>
</section>
<!--Page Header End-->

<!--Insurance Details Start-->
<section class="insurance-details">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-delay="100ms">
        <div class="insurance-details__left">
          <div class="insurance-details__services-box">
            <ul class="insurance-details__services-list list-unstyled">
              <li><a href="{{ route('network-solutions') }}">Network Solutions<span
                    class="icon-right-arrow1"></span></a></li>
              <li><a href="{{ route('physical-security') }}">Physical Security<span
                    class="icon-right-arrow1"></span></a></li>
              <li><a href="{{ route('power-solutions') }}">Power Solutions<span class="icon-right-arrow1"></span></a>
              </li>
              <li><a href="{{ route('storage-solutions') }}">Storage Solutions<span
                    class="icon-right-arrow1"></span></a></li>
              <li class="current"><a href="{{ route('infrastructure-solutions') }}">Infrastructure Solutions<span
                    class="icon-right-arrow1"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-7 wow fadeInUp" data-wow-delay="180ms">
        <div class="insurance-details__right">
          <div class="insurance-details__img-1">
            <video src="{{ asset('assets/images/solutions/InfrastructureSolutions.mp4') }}" autoplay muted loop controls width="100%"
              height="100%" controlslist="nodownload noplaybackrate noremoteplayback"
              webkit-playsinline controls
              disablepictureinpicture disableremoteplayback
              oncontextmenu="return false;"></video>

          </div>
          <h3 class="insurance-details__title-1">Infrastructure Solutions</h3>
          <p class="insurance-details__text-4">
           At Broadpeak, we deliver end-to-end passive infrastructure solutions that support modern enterprise needs. Our expertise
          includes designing and deploying resilient IT & Telecom frameworks, from data centers to cloud infrastructure, ensuring
          optimized performance, scalability, and security. With a deep understanding of enterprise architecture, we help
          businesses transform their operations to meet today’s dynamic market demands.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Insurance Details End-->



@endsection