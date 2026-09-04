<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') || Broadpeak-Intl</title>
  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicons/site.webmanifest">
  <meta name="description" content="Broadpeak-Intl">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/insur-icons/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/insur-two-icon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}  ">
  <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') }}">

  <!-- template styles -->
  <link rel="stylesheet" id="langLtr" href="{{ asset('assets/css/insur.css') }}">
</head>

<body class="custom-cursor ">

  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>

  @if (session('form_success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
      style="z-index: 10050; max-width: 90%;" role="alert">
      {{ session('form_success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
      style="z-index: 10050; max-width: 90%;" role="alert">
      <ul class="mb-0 ps-3">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="page-wrapper">
    <header class="main-header clearfix">

      <!-- main menu -->
      <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
          <div class="container">
            <div class="main-menu__wrapper-inner clearfix">
              <div class="main-menu__left">
                <div class="main-menu__logo">
                  <a href="{{ route('home') }}"><img src="{{ asset('assets/images/header-logo.svg') }}" alt="Broadpeak-Intl"></a>
                </div>
                <div class="main-menu__main-menu-box">
                  <div class="main-menu__main-menu-box-inner">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                      <li @class(['current' => request()->routeIs('home')])>
                        <a href="{{ route('home') }}">Home</a>
                      </li>
                      <li @class(['current' => request()->routeIs('about-us')])>
                        <a href="{{ route('about-us') }}">About Us</a>
                      </li>
                      <li @class([
                          'dropdown',
                          'current' => request()->routeIs(
                              'solutions',
                              'network-solutions',
                              'physical-security',
                              'power-solutions',
                              'storage-solutions',
                              'infrastructure-solutions'
                          ),
                      ])>
                        <a href="{{ route('solutions') }}">Solutions</a>
                        <ul>
                          <li><a href="{{ route('network-solutions') }}">Network Solutions</a></li>
                          <li><a href="{{ route('physical-security') }}">Physical Security</a></li>
                          <li><a href="{{ route('power-solutions') }}">Power Solutions</a></li>
                          <li><a href="{{ route('storage-solutions') }}">Storage Solutions</a></li>
                          <li><a href="{{ route('infrastructure-solutions') }}">Infrastructure Solutions</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#">Vendors</a>
                        <ul>
                          <li><a href="https://securityshells.com/" target="_blank">HID</a></li>
                          <li><a href="https://www.wavelynx.com/" target="_blank">Wavelynx</a></li>
                          <li><a href="https://golmar.es/" target="_blank">Golmar</a></li>
                          <li><a href="https://www.foredgetech.com/" target="_blank">Foredge</a></li>
                          <li><a href="https://www.huawei.com/en/" target="_blank">Huawei</a></li>
                          <li><a href="https://www.ceburu.com/" target="_blank">Ceburu</a></li>
                          <li><a href="https://www.h3c.com/en/" target="_blank">H3C</a></li>
                          <li><a href="https://zerowl.io/" target="_blank">Zerowl</a></li>
                          {{-- <li><a href="https://www.lenovo.com/eg/en/" target="_blank">Lenovo</a></li> --}}
                          {{-- <li><a href="https://www.cisco.com/" target="_blank">Cisco</a></li> --}}
                          <li><a href="https://www.vmware.com/" target="_blank">VMware</a></li>
                        </ul>
                      </li>
                      <li @class(['current' => request()->routeIs('careers')])>
                        <a href="{{ route('careers') }}">Careers</a>
                      </li>
                      <li @class(['current' => request()->routeIs('contact-us')])>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                  <div class="main-menu__main-menu-box-search-get-quote-btn">
                    <div class="main-menu__main-menu-box-get-quote-btn-box">
                      <a href="#" class="thm-btn main-menu__main-menu-box-get-quote-btn" data-bs-toggle="modal"
                        data-bs-target="#requestQuoteModal">Request a Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
      <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->




    @hasSection('content')
    @yield('content')
    @else
    <p>No content found</p>
    @endif



    <!--Site Footer Four Start-->
    <footer class="site-footer-four">
      <div class="container">
        <div class="site-footer-four__top">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
              <div class="footer-widget-four__column footer-widget-four__about">
                <div class="footer-widget-four__logo">
                  <a href="{{ route('home') }}"><img src="{{ asset('assets/images/footer-logo.svg') }}" width="100%" height="70"
                      alt="Broadpeak-Intl"></a>
                </div>
                <div class="footer-widget-four__about-text-box">
                  <p class="footer-widget__about-text">
                    Broadpeak-Intl delivers advanced networking, security, and power solutions across the Gulf and
                    Africa. Headquartered in
                    London, we are a UK-based IT distribution company committed to providing innovative, reliable, and
                    scalable solutions.
                    Our focus on quality, innovation, and customer service positions us as a trusted partner in building
                    resilient,
                    future-ready infrastructure for businesses.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
              <div class="footer-widget-four__column footer-widget-four__services clearfix">
                <h3 class="footer-widget-four__title">Solutions</h3>
                <ul class="footer-widget-four__services-list list-unstyled clearfix">
                  <li>
                    <a href="{{ route('network-solutions') }}">Network Solutions</a>
                  </li>
                  <li>
                    <a href="{{ route('physical-security') }}">Physical Security</a>
                  </li>
                  <li>
                    <a href="{{ route('power-solutions') }}">Power Solutions</a>
                  </li>
                  <li>
                    <a href="{{ route('storage-solutions') }}">Storage Solutions</a>
                  </li>
                  <li>
                    <a href="{{ route('infrastructure-solutions') }}">Infrastructure Solutions</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
              <div class="footer-widget-four__column footer-widget-four__contact">
                <h3 class="footer-widget-four__title">Contact us</h3>
                <ul class="footer-widget-four__contact-list list-unstyled">
                  <li>
                    <div class="icon">
                      <span class="icon-pin"></span>
                    </div>
                    <div class="content">
                      <p>Visit us</p>
                      <h5>Office No 606, Single Business Tower Business Bay Dubai</h5>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="icon-email"></span>
                    </div>
                    <div class="content">
                      <p>Mail us</p>
                      <h5>info@broadpeak-intl.com</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="site-footer-four__bottom">
          <div class="row">
            <div class="col-xl-12">
              <div class="site-footer-four__bottom-inner">
                <p class="site-footer-four__bottom-text">
                  Copyright © 2024 Broadpeak-Intl. All rights reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Site Footer Four End-->


  </div><!-- /.page-wrapper -->

  <!-- Request Quote modal -->
  <div class="modal fade request-quote-modal" id="requestQuoteModal" tabindex="-1"
    aria-labelledby="requestQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="requestQuoteModalLabel">Request Quote?</h5>
          <button type="button" class="request-quote-modal__close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
          </button>
        </div>
        <div class="modal-body contact-page__form">
          <form action="{{ route('quote.submit') }}" method="post" class="comment-one__form">
            @csrf
            <div class="hp-field" aria-hidden="true">
              <label for="quote-website-hp">Website</label>
              <input type="text" name="website" id="quote-website-hp" value="" tabindex="-1" autocomplete="off">
            </div>
            <div class="row">
              <div class="col-12">
                <div class="comment-form__input-box">
                  <input type="text" placeholder="Your Name *" name="name" value="{{ old('name') }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="comment-form__input-box">
                  <input type="email" placeholder="Your Email *" name="email" value="{{ old('email') }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="comment-form__input-box">
                  <input type="text" placeholder="Phone Number *" name="phone" value="{{ old('phone') }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="comment-form__input-box text-message-box">
                  <textarea name="message" placeholder="Message..." rows="4">{{ old('message') }}</textarea>
                </div>
                <div class="comment-form__btn-box">
                  <button type="submit" class="thm-btn comment-form__btn">Submit Form</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

      <div class="logo-box">
        <a href="{{ route('home') }}" aria-label="logo image"><img src="{{ asset('assets/images/footer-logo.svg') }}" alt=" Broadpeak-Intl"></a>
      </div>
      <!-- /.logo-box -->
      <div class="mobile-nav__container"></div>
      <!-- /.mobile-nav__container -->



    </div>
    <!-- /.mobile-nav__content -->
  </div>
  <!-- /.mobile-nav__wrapper -->


  <a href="#" data-target="html" class="scroll-to-target scroll-to-top" aria-label="Back to top" title="Back to top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>


  <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
  <script src="{{ asset('assets/vendors/vanilla-tilt/vanilla-tilt.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
  <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
  <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
  <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>



  <!-- template js -->
  <script src="{{ asset('assets/js/insur.js') }}"></script>
  @if (session('open_request_quote_modal'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('requestQuoteModal');
        if (!el || typeof bootstrap === 'undefined') return;
        bootstrap.Modal.getOrCreateInstance(el).show();
      });
    </script>
  @endif
</body>

</html>