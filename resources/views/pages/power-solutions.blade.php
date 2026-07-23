@extends('layouts.layoutOne')

@section('title')
Power Solutions
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
        <li>Power Solutions</li>
      </ul>
      <h2>Power Solutions</h2>
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
              <li class="current"><a href="{{ route('power-solutions') }}">Power Solutions<span class="icon-right-arrow1"></span></a>
              </li>
              <li><a href="{{ route('storage-solutions') }}">Storage Solutions<span
                    class="icon-right-arrow1"></span></a></li>
              <li><a href="{{ route('infrastructure-solutions') }}">Infrastructure Solutions<span
                    class="icon-right-arrow1"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-7 wow fadeInUp" data-wow-delay="180ms">
        <div class="insurance-details__right">
          <div class="insurance-details__img-1">
            <video src="{{ asset('assets/images/solutions/PowerSolutions.mp4') }}" autoplay muted loop controls width="100%"
              height="100%" controlslist="nodownload noplaybackrate noremoteplayback"
              webkit-playsinline controls
              disablepictureinpicture disableremoteplayback
              oncontextmenu="return false;"></video>

          </div>
          <h3 class="insurance-details__title-1">Power Solutions</h3>
          <p class="insurance-details__text-4">
            Reliable power is the backbone of any IT environment, and we provide robust power solutions tailored to support critical
            infrastructure. From uninterruptible power supplies (UPS) to power distribution systems, our solutions ensure continuous
            power availability and protection against outages or power quality issues.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Insurance Details End-->



@endsection