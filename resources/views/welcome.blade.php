@extends("layouts.master")
@section("content")

    <div class="th-hero-wrapper hero-1 slider-area" id="hero" data-bg-src="assets/img/hero/back2.png" >

        <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- Left Side: Heading/Subheading -->
                                <div class="col-xl-7 col-lg-6">
                                    <div class="hero-style1">

                                        <h1 class="sec-title">
                                            <span class="title1" style="color: white" data-ani="slideinup" data-ani-delay="0.2s">Reliable Plumbing Solutions, <br></span>
                                            <span class="title2" style="color: white" data-ani="slideinup" data-ani-delay="0.4s">Right When You Need Them.</span>

                                        </h1>
                                        <p class="" style="color: white" data-ani="slideinup" style="color:#04425b" data-ani-delay="0.8s">
                                            Trusted by property owners since 2006 — from emergency repairs to full installations, Ray & Sons delivers fast, professional service you can count on.
                                        </p>


                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">

                                            <a href="{{ route('contact-us.index') }}" class="th-btn style3" data-ani="slideinup" data-ani-delay="1s">
                                                <i class="fas fa-headset"></i> Emergency Plumbing? Call Now</i>
                                            </a>

                                            <a href="{{ route('plumbing-installations.index') }}" class="th-btn style3"  data-ani="slideinup" data-ani-delay="1s">Explore Our
                                                Services<i class="fas fa-arrow-right ms-2"></i></a>

                                           </div>




                                    </div>
                                </div>

                                <!-- Right Side: Form -->
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-form p-4 p-md-5 color-theme  shadow-lg" style="border-radius: 10px; background-color: #F8F8F8;" data-ani="slideinright" data-ani-delay="0.2s">
                                        <h3 class="mb-4">Get Instant Quote</h3>
                                        <form method="POST" action="{{ url('/instantQuote') }}" class="input-light ">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <input type="text" class="form-control rounded-3" name="fullname" id="fullname" placeholder="Your Name">
                                                    <i class="fal fa-user"></i>
                                                </div>

                                                <div class="form-group col-md-6 mb-4">
                                                    <input type="tel" class="form-control rounded-3" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                                                    <i class="fal fa-phone"></i>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <input type="email" class="form-control rounded-3" name="email" id="email" placeholder="Email Address">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                                <div class="form-group col-md-6 mb-4" >
                                                    <select name="service" id="service" class="form-select form-control rounded-3">
                                                        <option value="" disabled="disabled" selected="selected" hidden>Select Service
                                                        </option>
                                                        <option value="Plumbing Installations">Plumbing Installations</option>
                                                        <option value="Drainage Services">Drainage Services</option>
                                                        <option value="Plumbing Maintenances">Plumbing Maintenances</option>
                                                    </select> <i class="fal fa-chevron-down"></i></div>
                                                <div class="form-group col-md-12 mb-3">
                                                   <textarea rows="2" name="comment" id="comment" class="form-control rounded-3" placeholder="Enter your comment here..."></textarea>


                                                </div>

                                                <div class="form-btn col-12">
                                                    <button class="th-btn style3" type="submit">Get Quote Now<i class="fa fa-arrow-right ms-2"></i></button>

                                                </div>
                                            </div>
                                            <!--<p class="form-messages mb-0 mt-3"></p>-->
                                        </form>
                                    </div>
                                </div>

                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- hero-inner -->
                </div>
            </div>
        </div>
    </div>
	<div class="bg-title space-extra" >
        <div class="container" style="background-color: #ffffff; border-radius: 8px" >

            <div class="swiper th-slider" id="brandSlider2"
                 data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/ok_shop.png" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/dourich.png" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/global_shopfitters.jpg" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/zunzanyika.png" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/masimba.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/nengo.png" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/old_mutual.png" style=" border-radius: 8px;" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/zimre.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/inkaba.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/ocm.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/cebre.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/rio_duo.png" style=" border-radius: 8px;"  alt="Brand Logo"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>

 <div class="overflow-hidden space">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-xl-6 mb-35 mb-xl-0">
                <div class="img-box4" >
                    <div class="comparison-img"  style="border-radius: 10px">
                        <div class="img background-img" data-bg-src="assets/img/gallery/ray4.jpg"></div>
                        <div class="img foreground-img" data-bg-src="assets/img/gallery/ray12.jpg"></div>
                        <input type="range" min="1" max="100" value="50" class="compslider" name="compslider"
                               id="compslider">
                        <div class="slider-button" style="left: calc(50% - 28px);"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 text-center text-xl-start">
                <div class="pe-xxl-5">
                    <div class="title-area mb-37"><span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" class="colored-icon"
                                                                               alt="shape">Who we are</span>
                        <h4 class="sec-title">Residential & Commercial Plumbing Service Provider.</h4>
                        <p class="sec-text">Ray & Sons is a professional plumbing company that offers an extensive range
                            of general and specialist plumbing services to clients across the greater of Harare and others cities in Zimbabwe and South Africa in CapeTown.
                           </p></div>
                    <div class="checklist list-two-column">
                        <ul>
                            <li>24/7 Rapid Response Team</li>
                            <li>Transparent Pricing</li>
                            <li>Certified Technicians</li>
                            <li>Free Instant Estimates</li>
                            <li>Same-Day Service Delivery</li>
                            <li>Client Portal</li>
                        </ul>
                    </div>
                    <div class="btn-group mt-30 justify-content-center">

                        <div class="call-btn">
                            <div class="play-btn"><i class="fal fa-phone"></i></div>
                            <div class="media-body"><p class="box-label">Call Us 24/7</p><h6 class="box-link"><a
                                    href="tel:+263 77 463 1511">+263 77 463 1511</a></h6></div>
                        </div>
                        <a href="{{ route('contact-us.index') }}" class="th-btn style3">Get Instant Quote
                             <i class="fa fa-arrow-right" style="color: white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="overflow-hidden space" style="background-color: #F8F8F8;"  id="service-sec">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center"><span class="sub-title"><img
                                src="assets/img/theme-img/title_icon.svg" class="colored-icon" alt="Icon">Our Services</span>
                        <h2 class="sec-title">Plumbing services we offer</h2>
                        <p class="sec-text">Ray & Sons is a professional plumbing company that offers an extensive range of general and specialist plumbing services.</p></div>
                </div>
            </div>
            <div class="slider-area ">
                <div class="swiper th-slider has-shadow justify-content-center" id="serviceSlider1"
                     data-slider-options='{"loop":false,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card" style="height: 380px">
                                <div class="box-number">01</div>
{{--                                <div class="box-icon"><img src="assets/img/icon/service_card_1.svg" alt="Icon"></div>--}}
                                <div class="box-icon">
                                    <img src="assets/img/icon/plumber.png" class="colored-icon" style="height: 40px" alt="Icon">
                                </div>

                                <p class="box-subtitle">Plumbing Services.</p>
                                <h3 class="box-title"><a href="{{ route('plumbing-installations.index') }}">Plumbing Installations</a></h3>
                                <p class="box-text">We know how stressful plumbing issues can be — especially in your home...</p><a href="{{ route('plumbing-installations.index') }}" class="th-btn btn-sm">Read More<i
                                        class="fa fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card" style="height: 380px">
                                <div class="box-number">02</div>
                                <div class="box-icon">
                                    <img src="assets/img/icon/plumber.png" class="colored-icon" style="height: 40px" alt="Icon">
                                </div>
                                <p class="box-subtitle">Plumbing Services</p>
                                <h3 class="box-title"><a href="{{ route('drainage-services.index') }}">Drainage Services </a></h3>
                                <p class="box-text">We offer a full range of pipe and drain cleaning services to cater for any and all your sewerage, storm water, effluent, sub..</p><a href="{{ route('drainage-services.index') }}" class="th-btn btn-sm">Read More<i
                                        class="fa fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card" style="height: 380px">
                                <div class="box-number">03</div>
                                <div class="box-icon">
                                    <img src="assets/img/icon/plumber.png" class="colored-icon" style="height: 40px" alt="Icon">
                                </div>
                                <p class="box-subtitle">Plumbing Services</p>
                                <h3 class="box-title"><a href="{{ route('plumbing-maintenances.index') }}">Plumbing Maintenance</a></h3>
                                <p class="box-text">A leaking geyser in a ceiling from a small drip to a major leak can be...</p><a href="{{ route('plumbing-maintenances.index') }}" class="th-btn btn-sm">Read More<i
                                        class="fa fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card" style="height: 380px">
                                <div class="box-number">04</div>
                                <div class="box-icon">
                                    <img src="assets/img/icon/plumber.png" class="colored-icon" style="height: 40px" alt="Icon">
                                </div>
                                <p class="box-subtitle">Plumbing Services</p>
                                <h3 class="box-title"><a href="service-details.html">Emergency Plumbing</a></h3>
                                <p class="box-text">Our 24/7 Emergency team is always on standby to serve you whenever you need a fixing.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="fa fa-arrow-right ms-2"></i></a></div>
                        </div>

                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>


<section class="cta-sec1" >
    <div class="cta-img1"><img src="assets/img/normal/black2.jpg" alt="CTA"></div>
    <div class="cta-content"><h5 class="sec-title text-white mb-37">Need a Fix? Get Reliable Emergency Plumbing Service with Fair rates.</h5>
        <div class="btn-group justify-content-center"><a href="{{ route('contact-us.index') }}" class="th-btn style3" style="background-color: whitesmoke"><span style="color: #04425b">Get Instant Quote</span> <i
                class="fa fa-arrow-right"></i></a>
            <div class="call-btn">
                <div class="play-btn"><i class="fal fa-phone"></i></div>
                <div class="media-body"><p class="box-label text-white">Call Us 24/7</p><h6 class="box-link text-white">
                    <a href="tel:+263 77 463 1511">+263 77 463 1511</a></h6></div>
            </div>
        </div>
    </div>
</section>




    <section class="overflow-hidden space " style="background-color: #F8F8F8;" >

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start"><span class="sub-title"><img
                                src="assets/img/theme-img/title_icon.svg" class="colored-icon" alt="shape">Our Projects</span>
                        <h4 class="sec-title">Our Recent Projects</h4></div>
                </div>
{{--                <div class="col-md-auto">--}}
{{--                    <div class="sec-btn mt-n3 mt-md-0"><a href="" class="th-btn style4">View All Projects<i--}}
{{--                                class="fa fa-arrow-right ms-2"></i></a></div>--}}
{{--                </div>--}}
            </div>
            <div class="row gy-30 filter-active overlay-direction load-more-active">
                <div class="cat4 cat3 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray5.jpg"><img
                                src="assets/img/gallery/ray5.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray6.jpg"><img
                                src="assets/img/gallery/ray6.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat3 cat5 col-xl-6 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray3.jpg"><img
                                src="assets/img/gallery/ray3.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-6 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray4.jpg"><img
                                src="assets/img/gallery/ray4.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>

                <div class="cat5 cat4 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray7.jpg"><img
                                src="assets/img/gallery/ray7.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
{{--                <div class="cat2 col-xl-6 col-md-6 filter-item">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray8.jpg"><img--}}
{{--                                src="assets/img/gallery/ray8.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
                <div class="cat1 cat3 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray9.jpg"><img
                                src="assets/img/gallery/ray9.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
{{--                <div class="cat2 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray10.jpg"><img--}}
{{--                                src="assets/img/gallery/ray10.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat1 cat5 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray12.jpg"><img--}}
{{--                                src="assets/img/gallery/ray12.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat3 cat5 col-xl-6 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray13.jpg"><img--}}
{{--                                src="assets/img/gallery/ray13.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat2 col-xl-6 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray14.jpg"><img--}}
{{--                                src="assets/img/gallery/ray14.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat4 cat3 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray15.jpg"><img--}}
{{--                                src="assets/img/gallery/ray15.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat1 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray16.jpg"><img--}}
{{--                                src="assets/img/gallery/ray16.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat5 cat4 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray17.jpg"><img--}}
{{--                                src="assets/img/gallery/ray17.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat2 col-xl-6 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray18.jpg"><img--}}
{{--                                src="assets/img/gallery/ray18.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--                <div class="cat1 cat3 col-xl-3 col-md-6 filter-item d-none">--}}
{{--                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/ray19.jpg"><img--}}
{{--                                src="assets/img/gallery/ray19.jpg" alt="gallery image">--}}
{{--                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>


@endsection
