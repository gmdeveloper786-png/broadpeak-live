@extends('layouts.layoutOne')

@section('title')
Contact Us
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
                        <li>Contact Us</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


                <!--Get Insurance Four Start-->
                <section class="get-insurance-four">
                    <div class="get-insurance-four__shape-1"
                        style="background-image: url(assets/images/shape.webp);">
                    </div>
                    <div class="get-insurance-four__shape-2 float-bob-y">
                        <img src="assets/images/update-10-02-2023/shapes/get-insurance-four-shape-2.png" alt="">
                    </div>
                    <div class="container">
                        <div class="section-title-three text-left wow fadeInUp" data-wow-delay="0ms">
                            <div class="section-title-three__sub-title-box">
                                <p class="section-title-three__sub-title">Our Offices</p>
                                <div class="section-title-three__shape"></div>
                            </div>
                            <h2 class="section-title-three__title">Visit Our Offices</h2>
                        </div>
                        <div class="get-insurance-four__main-tab-box tabs-box">
                            <div class="row">
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#head-office" class="tab-btn active-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/uae.svg" alt="Head Office" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Head Office</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#oman" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/oman.svg" alt="Oman" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Oman</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#myanmar" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/myanmar.svg" alt="Myanmar" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Myanmar</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#cambodia" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/cambodia.svg" alt="Cambodia" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Cambodia</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#laos" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/laos.svg" alt="Laos" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Laos</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#afghanistan" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/afghanistan.svg" alt="Afghanistan" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Afghanistan</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#singapore" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/singapore.svg" alt="Singapore" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Singapore</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#bangladesh" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/bangladesh.svg" alt="Bangladesh" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Bangladesh</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#srilanka" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/srilanka.svg" alt="Srilanka" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Srilanka</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#nepal" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/nepal.svg" alt="Nepal" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Nepal</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#bhutan" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/bhutan.svg" alt="Bhutan" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Bhutan</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="180ms">
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="head-office">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>Unit No. 117-03, BCW, First Floor, Jafza 
                                                            View18, Jebel Ali Free Zone 
                                                            Dubai, United Arab Emirates</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="myanmar">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Myanmar</p>
                                                            <h5>Al Harm, Barka 320, Oman</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="oman">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Oman</p>
                                                            <h5>Al Harm, Barka 320, Oman</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="cambodia">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Cambodia</p>
                                                            <h5>AG, Grace plaza, Addis Ababa, Ethiopia</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="laos">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Laos</p>
                                                            <h5>Crescent Business Centre, The Crescent, Nairobi, Kenya</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="afghanistan">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>3rd Street, Ansari Square, Rahmat Tower, Shahr-e-Naw, Kabul Afghanistan</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="singapore">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>68 CIRCULAR ROAD, #02-01, SINGAPORE 049422</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="bangladesh">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>1001, 10th Floor, Aftab Tower, 196/A, Kemal Ataturk Avenue, Dhaka 1212, Bangladesh</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="srilanka">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>No. 110, 1st Floor, Weliweriya Road, Nawala, Sri Lanka</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="nepal">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>216/1, 2nd Floor, Jorpati, Kathmandu, Nepal</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="bhutan">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    {{-- <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Visit us</p>
                                                            <h5>Tashichho Dzong, Thimphu, Bhutan</h5>
                                                        </div>
                                                    </div> --}}
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeak-intl.com</h5>
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
                <!--Get Insurance Four End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__left">
                            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact us</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get in touch with us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="120ms">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="{{ route('contact.submit') }}" method="post" class="comment-one__form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="hp-field" aria-hidden="true">
                                        <label for="contact-website-hp">Website</label>
                                        <input type="text" name="website" id="contact-website-hp" value="" tabindex="-1" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name *" name="name" value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address *" name="email" value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Company Name" name="company" value="{{ old('company') }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box contact-page__cv-box">
                                                <span class="contact-page__cv-heading">Upload CV (optional)</span>
                                                <div class="contact-page__cv-field">
                                                    <input id="contact-cv" class="contact-page__cv-input" type="file" name="cv"
                                                        accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                                        aria-describedby="contact-cv-hint">
                                                    <div class="contact-page__cv-inner">
                                                        <span class="contact-page__cv-pick">Choose file</span>
                                                        <span class="contact-page__cv-filename" id="contact-cv-filename" role="status" aria-live="polite">No file selected</span>
                                                    </div>
                                                </div>
                                                <p id="contact-cv-hint" class="contact-page__cv-hint">PDF, DOC or DOCX — max 5 MB</p>
                                                @error('cv')
                                                    <p class="text-danger small mb-0 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message *" required>{{ old('message') }}</textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

  <script>
    (function () {
      var input = document.getElementById('contact-cv');
      var nameEl = document.getElementById('contact-cv-filename');
      if (!input || !nameEl) return;
      input.addEventListener('change', function () {
        nameEl.textContent = (this.files && this.files[0]) ? this.files[0].name : 'No file selected';
      });
    })();
  </script>

@endsection