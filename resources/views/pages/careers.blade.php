@extends('layouts.layoutOne')

@section('title')
Careers
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
        <li>Careers</li>
      </ul>
      <h2>Careers</h2>
    </div>
  </div>
</section>
<!--Page Header End-->

<!--Careers Intro Start-->
<section class="careers-intro">
  <div class="container">
    <div class="careers-intro__inner text-center wow fadeInUp" data-wow-delay="100ms">
      <h2 class="careers-intro__title">Join the Broadpeak Family</h2>
      <p class="careers-intro__text">
        We provide a sustainable, nurturing, and growth-oriented environment so our people can expand their skills and
        grow into tomorrow’s leaders in IT distribution and technology solutions.
      </p>
    </div>
  </div>
</section>
<!--Careers Intro End-->

<!--Careers Jobs Start-->
<section class="careers-jobs">
  <div class="container">
    <h3 class="careers-jobs__heading wow fadeInUp" data-wow-delay="0ms">Open Jobs List</h3>
    <ul class="careers-jobs__list list-unstyled mb-0">
      <li class="careers-jobs__item wow fadeInUp" data-wow-delay="80ms">
        <a href="{{ route('contact-us') }}" class="careers-jobs__link">
          <span class="careers-jobs__num">01</span>
          <div class="careers-jobs__main">
            <span class="careers-jobs__role">UI/UX Designer</span>
            <span class="careers-jobs__open">(02 Open Roles)</span>
          </div>
          <span class="careers-jobs__icon" aria-hidden="true"><i class="fas fa-arrow-up-right"></i></span>
        </a>
      </li>
      <li class="careers-jobs__item wow fadeInUp" data-wow-delay="120ms">
        <a href="{{ route('contact-us') }}" class="careers-jobs__link">
          <span class="careers-jobs__num">02</span>
          <div class="careers-jobs__main">
            <span class="careers-jobs__role">Frontend Developer</span>
            <span class="careers-jobs__open">(07 Open Roles)</span>
          </div>
          <span class="careers-jobs__icon" aria-hidden="true"><i class="fas fa-arrow-up-right"></i></span>
        </a>
      </li>
      <li class="careers-jobs__item wow fadeInUp" data-wow-delay="160ms">
        <a href="{{ route('contact-us') }}" class="careers-jobs__link">
          <span class="careers-jobs__num">03</span>
          <div class="careers-jobs__main">
            <span class="careers-jobs__role">Product Manager</span>
            <span class="careers-jobs__open">(15 Open Roles)</span>
          </div>
          <span class="careers-jobs__icon" aria-hidden="true"><i class="fas fa-arrow-up-right"></i></span>
        </a>
      </li>
      <li class="careers-jobs__item wow fadeInUp" data-wow-delay="200ms">
        <a href="{{ route('contact-us') }}" class="careers-jobs__link">
          <span class="careers-jobs__num">04</span>
          <div class="careers-jobs__main">
            <span class="careers-jobs__role">JavaScript Engineer</span>
            <span class="careers-jobs__open">(03 Open Roles)</span>
          </div>
          <span class="careers-jobs__icon" aria-hidden="true"><i class="fas fa-arrow-up-right"></i></span>
        </a>
      </li>
      <li class="careers-jobs__item wow fadeInUp" data-wow-delay="240ms">
        <a href="{{ route('contact-us') }}" class="careers-jobs__link">
          <span class="careers-jobs__num">05</span>
          <div class="careers-jobs__main">
            <span class="careers-jobs__role">Joomla Developer</span>
            <span class="careers-jobs__open">(09 Open Roles)</span>
          </div>
          <span class="careers-jobs__icon" aria-hidden="true"><i class="fas fa-arrow-up-right"></i></span>
        </a>
      </li>
    </ul>
  </div>
</section>
<!--Careers Jobs End-->

@endsection
