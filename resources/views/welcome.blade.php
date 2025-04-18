@extends("layouts.master")
@section("content")

    <div class="th-hero-wrapper hero-1 slider-area" id="hero" style="background-color: #F8F8F8;">

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
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.2s">Reliable Plumbing Solutions, <br></span>
                                            <span class="title2" data-ani="slideinup" data-ani-delay="0.4s">Right When You Need Them.</span>

                                        </h1>
                                        <p class="hero-text" data-ani="slideinup" style="color:#04425b" data-ani-delay="0.8s">
                                            Trusted by property owners since 2006 — from emergency repairs to full installations, Ray & Sons delivers fast, professional service you can count on.
                                        </p>
                                        <a href="service.html" class="th-btn style3" data-ani="slideinup" data-ani-delay="1s">
                                            <i class="fas fa-headset"></i> Emergency Plumbing? Call Now</i>
                                        </a>
{{--                                        <a href="service.html" class="th-btn style3" data-ani="slideinup" data-ani-delay="1s">--}}
{{--                                           Explore Services  <i class="fa fa-arrow-right"></i>--}}
{{--                                        </a>--}}



                                        <div class="hero-social-proof mt-4 d-flex align-items-center gap-4" data-ani="fadeinup" data-ani-delay="1.2s">
                                            <div class="d-flex align-items-center">
                                                <div class="box-review text-gold" style="color: gold">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <span class="ms-2 fw-bold" style="color:#04425b">4.9/5 </span>

                                                <p class="m-0" style="color:#04425b"> Trusted by 10,000+ happy clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Side: Form -->
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-form p-4 p-md-5 color-theme  shadow-lg" style="border-radius: 10px" data-ani="slideinright" data-ani-delay="0.2s">
                                        <h3 class="mb-4">Get Instant Quote</h3>
                                        <form action="https://html.themeholy.com/rakar/demo/mail.php" method="POST" class="input-light ajax-contact">
                                            <div class="row">
                                                <div class="form-group col-md-12 mb-3">
                                                    <input type="text" class="form-control rounded-3" name="name" id="name" placeholder="Your Name">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <input type="email" class="form-control rounded-3" name="email" id="email" placeholder="Email Address">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                                <div class="form-group col-md-12 mb-4">
                                                    <input type="tel" class="form-control rounded-3" name="number" id="number" placeholder="Phone Number">
                                                    <i class="fal fa-phone"></i>
                                                </div>
                                                <div class="form-btn col-12">
                                                    <a class="th-btn style3">Get Quote Now<i class="fa fa-arrow-right ms-2"></i></a>

                                                </div>
                                            </div>
                                            <p class="form-messages mb-0 mt-3"></p>
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

 <div class="overflow-hidden space">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-xl-6 mb-35 mb-xl-0">
                <div class="img-box4" >
                    <div class="comparison-img"  style="border-radius: 10px">
                        <div class="img background-img" data-bg-src="assets/img/normal/before_1.jpg"></div>
                        <div class="img foreground-img" data-bg-src="assets/img/normal/after_1.jpg"></div>
                        <input type="range" min="1" max="100" value="50" class="compslider" name="compslider"
                               id="compslider">
                        <div class="slider-button" style="left: calc(50% - 28px);"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 text-center text-xl-start">
                <div class="pe-xxl-5">
                    <div class="title-area mb-37"><span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                                                                               alt="shape">Who we are</span>
                        <h4 class="sec-title">Residential & Commercial Plumbing Service Provider.</h4>
                        <p class="sec-text">Ray & Sons is a professional plumbing company that offers an extensive range
                            of general and specialist plumbing services to clients across the greater Cape Town area.
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
                        <a href="about.html" class="th-btn style3">Discover
                        More <i class="fa fa-arrow-right" style="color: white"></i></a>
                        <div class="call-btn">
                            <div class="play-btn"><i class="fal fa-phone"></i></div>
                            <div class="media-body"><p class="box-label">Call Us 24/7</p><h6 class="box-link"><a
                                    href="tel:+27 785 575 211">+27 785 575 211</a></h6></div>
                        </div>
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
                                src="assets/img/theme-img/title_icon.svg" alt="Icon">Our Services</span>
                        <h2 class="sec-title">What services we offer</h2>
                        <p class="sec-text">Welcome to Rakar renovation, we provide a robust synopsis for high level
                            overviews. Organically grow the holistic world view of disruptive innovation via workplace
                            diversity and empowerment.</p></div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1"
                     data-slider-options='{"loop":false,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">01</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_1.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Plumbing Services</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">02</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_2.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Wall Painting</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">03</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_3.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Light Fixture Install</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">04</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_4.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Painting Services</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">05</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_5.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Exterior Painting</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">06</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_6.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Home Appliance</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">07</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_7.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">Furniture Assembly</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-number">08</div>
                                <div class="box-icon"><img src="assets/img/icon/service_card_8.svg" alt="Icon"></div>
                                <p class="box-subtitle">Service And Repairs</p>
                                <h3 class="box-title"><a href="service-details.html">AC Installation</a></h3>
                                <p class="box-text">Our Repair all Services best offers quality help programs for corporate
                                    zone studying.</p><a href="service-details.html" class="th-btn btn-sm">Read More<i
                                        class="far fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
<section class="cta-sec1" data-bg-src="assets/img/bg/pattern_bg_3.png">
    <div class="cta-img1"><img src="assets/img/normal/cta_1.png" alt="CTA"></div>
    <div class="cta-content"><h5 class="sec-title text-white mb-37">Need a Fix? Get Reliable Emergency Plumbing Service with Fair rates.</h5>
        <div class="btn-group justify-content-center"><a href="contact.html" class="th-btn style3">Get Instant Quote <i
                class="fa fa-arrow-right"></i></a>
            <div class="call-btn">
                <div class="play-btn"><i class="fal fa-phone"></i></div>
                <div class="media-body"><p class="box-label text-white">Call Us 24/7</p><h6 class="box-link text-white">
                    <a href="tel:+27 785 575 211">+27 785 575 211</a></h6></div>
            </div>
        </div>
    </div>
</section>


    <section class="overflow-hidden space " style="background-color: #F8F8F8;">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start"><span class="sub-title"><img
                                src="assets/img/theme-img/title_icon.svg" alt="shape">Our Projects</span>
                        <h4 class="sec-title">Our Recent Projects</h4></div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0"><a href="project.html" class="th-btn style4">View All Projects<i
                                class="fa fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
            <div class="row gy-30 filter-active overlay-direction load-more-active">
                <div class="cat2 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_1.jpg"><img
                                src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 cat5 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_2.jpg"><img
                                src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat3 cat5 col-xl-6 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_3.jpg"><img
                                src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-6 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_4.jpg"><img
                                src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat4 cat3 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_5.jpg"><img
                                src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_6.jpg"><img
                                src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat5 cat4 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_7.jpg"><img
                                src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-6 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_8.jpg"><img
                                src="assets/img/gallery/gallery_1_8.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 cat3 col-xl-3 col-md-6 filter-item">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_9.jpg"><img
                                src="assets/img/gallery/gallery_1_9.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_1.jpg"><img
                                src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 cat5 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_2.jpg"><img
                                src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat3 cat5 col-xl-6 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_3.jpg"><img
                                src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-6 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_4.jpg"><img
                                src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat4 cat3 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_5.jpg"><img
                                src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_6.jpg"><img
                                src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat5 cat4 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_7.jpg"><img
                                src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat2 col-xl-6 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_8.jpg"><img
                                src="assets/img/gallery/gallery_1_8.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
                <div class="cat1 cat3 col-xl-3 col-md-6 filter-item d-none">
                    <div class="gallery-card"><a class="box-img popup-image" href="assets/img/gallery/gallery_1_9.jpg"><img
                                src="assets/img/gallery/gallery_1_9.jpg" alt="gallery image">
                            <div class="box-content"><span class="box-btn"><i class="fal fa-plus"></i></span></div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="space" id="testi-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start"><span class="sub-title"><img
                                src="assets/img/theme-img/title_icon.svg" alt="shape">Testimonial</span>
                        <h4 class="sec-title">What our clients say</h4></div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0"><a href="testimonial.html" class="th-btn style4">View All Reviews<i
                                class="fa fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider1"
                     data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img"><img src="assets/img/testimonial/testi_b_1.jpg" alt="Image"></div>
                                <div class="box-content">
                                    <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent scelerisque.</p>
                                    <div class="box-profile">
                                        <div class="box-avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                                     alt="Avater"></div>
                                        <div class="media-body"><h3 class="box-title">Sumaiya Zara</h3>
                                            <p class="box-desig">CEO Of Company</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img"><img src="assets/img/testimonial/testi_b_2.jpg" alt="Image"></div>
                                <div class="box-content">
                                    <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent in Rakar.</p>
                                    <div class="box-profile">
                                        <div class="box-avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                                     alt="Avater"></div>
                                        <div class="media-body"><h3 class="box-title">Alex Simon</h3>
                                            <p class="box-desig">Managing Director</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img"><img src="assets/img/testimonial/testi_b_1.jpg" alt="Image"></div>
                                <div class="box-content">
                                    <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent scelerisque.</p>
                                    <div class="box-profile">
                                        <div class="box-avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                                     alt="Avater"></div>
                                        <div class="media-body"><h3 class="box-title">Agelina Margret</h3>
                                            <p class="box-desig">CEO Of Company</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img"><img src="assets/img/testimonial/testi_b_2.jpg" alt="Image"></div>
                                <div class="box-content">
                                    <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent in Rakar.</p>
                                    <div class="box-profile">
                                        <div class="box-avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                                     alt="Avater"></div>
                                        <div class="media-body"><h3 class="box-title">Robert Danials</h3>
                                            <p class="box-desig">Managing Director</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>


    <div class="video-sec2" data-bg-src="assets/img/normal/video_2.jpg">
        <div class="container">
            <div class="video-content2"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                           class="play-btn style3 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                <h4 class="sec-title text-white"><span class="text-theme">20 Years</span> of Experience in All Residential, Industrial and Commercial Plumbing & Drain Services and Maintenance
                   </h4>
        </div>
        <div class="">
            <div class="container">
                <div class="counter-card-wrap style2">
                    <div class="counter-card">
                        <div class="box-icon"><img src="assets/img/icon/counter_card_5.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="box-number text-white"><span class="counter-number">1250</span>+
                            </h2>
                            <p class="box-text text-white">Completed Projects</p></div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="assets/img/icon/counter_card_2.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="box-number text-white"><span class="counter-number">180</span>+
                            </h2>
                            <p class="box-text text-white">Happy Clients</p></div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="assets/img/icon/counter_card_3.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="box-number text-white"><span class="counter-number">85</span>+
                            </h2>
                            <p class="box-text text-white">Expert Team</p></div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card">
                        <div class="box-icon"><img src="assets/img/icon/counter_card_4.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="box-number text-white"><span class="counter-number">158</span>+
                            </h2>
                            <p class="box-text text-white">Awards Won</p></div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="overflow-hidden space-bottom">
        <div class="shape-mockup moving d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="assets/img/shape/man_shape_2.png" alt="shape"></div>
        <div class="container">
            <div class="contact-area area-rounded">
                <div class="row">
                    <div class="col-xl-5 mb-35 mb-xl-0">
                        <div class="contact-media-area">

                            <div class="contact-media-wrap"><h3 class="box-title">Quick Contact</h3>
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-location-dot" style="color: white"></i></div>
                                    <div class="media-body"><p class="box-text">45 Workington Rd, Harare, Zimbabwe</p></div>
                                </div>
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-phone-volume" style="color: white"></i></div>
                                    <div class="media-body"><h4 class="box-label">Call Us:</h4>
                                        <p class="box-text"><a href="tel:+27 785 575 211">+27 785 575 211</a></p></div>
                                </div>
                                <div class="contact-media">
                                    <div class="icon-btn"><i class="fas fa-envelope" style="color: white"></i></div>
                                    <div class="media-body"><h4 class="box-label">Email Us:</h4>
                                        <p class="box-text"><a href="info@rayandsons.co.za">info@rayandsons.co.za</a></p>
                                    </div>
                                </div>
                            </div>
                            <h6 class="contact-info-text">We will get back to you within 24 hours, or Call us everyday,
                                08:00AM - 18:00PM</h6></div>
                    </div>
                    <div class="col-xl-7 text-center text-xl-start">
                        <div class="ps-xxl-4 ms-xl-3">
                            <div class="title-area"><span class="sub-title"><span class="line"></span> <img
                                        src="assets/img/theme-img/title_icon3.svg" alt="shape">Need a Fix? Book a Plumber Today!</span>
                                <h2 class="sec-title">Request instant quote</h2></div>
                            <form action="https://html.themeholy.com/rakar/demo/mail.php" method="POST"
                                  class="contact-form2 ajax-contact">
                                <div class="row">
                                    <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                                                            id="name" placeholder="Your Name"> <i
                                            class="fal fa-user"></i></div>
                                    <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                                                            id="email" placeholder="Email Address"> <i
                                            class="fal fa-envelope"></i></div>
                                    <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                                                            id="number" placeholder="Phone Number"> <i
                                            class="fal fa-phone"></i></div>
                                    <div class="form-group col-md-6"><select name="subject" id="subject"
                                                                             class="form-select">
                                            <option value="" disabled="disabled" selected="selected" hidden>Select Subject
                                            </option>
                                            <option value="General Query">General Query</option>
                                            <option value="Help Support">Help Support</option>
                                            <option value="Sales Support">Sales Support</option>
                                        </select> <i class="fal fa-chevron-down"></i></div>
                                    <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                                                             class="form-control"
                                                                             placeholder="Your Message"></textarea> <i
                                            class="fal fa-pencil"></i></div>
                                    <div class="form-btn col-12">
                                        <button class="th-btn">Get Quote Now<i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-title space-extra" data-bg-src="assets/img/bg/brand_bg_1.png">
        <div class="container"><h2 class="sec-title text-white text-center mb-35">our trusted Clients</h2>
            <div class="swiper th-slider" id="brandSlider2"
                 data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_1.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_2.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_3.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_4.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_5.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_6.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_1.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_2.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_3.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_4.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_5.svg" alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card"><img src="assets/img/brand/brand_2_6.svg" alt="Brand Logo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" >
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box4">
                        <div class="comparison-img"  style="border-radius: 10px">
                            <div class="img background-img" data-bg-src="assets/img/normal/before_1.jpg"></div>
                            <div class="img foreground-img" data-bg-src="assets/img/normal/after_1.jpg"></div>
                            <input type="range" min="1" max="100" value="50" class="compslider" name="compslider"
                                   id="compslider">
                            <div class="slider-button" style="left: calc(50% - 28px);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-37"><span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                                                                                   alt="shape">FAQ</span>
                            <h4 class="sec-title">Answers to Common Plumbing Concerns</h4>
                        </div>
                        <div class="accordion-1 accordion load-more-active" id="faqAccordion">
                            <div class="accordion-card active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Q1. How
                                        do I start the process of renovation a home?
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Q2.
                                        What factors should I consider when choosing a neighborhood?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Q3.
                                        How can I determine the right price for selling my property?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Q4.
                                        What are closing costs and who is responsible for paying them?
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>

                            <div class="accordion-card d-none">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Q6.
                                        What are the pros and cons of buying a fixer-upper?
                                    </button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card d-none">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">Q7.
                                        How can I stage my home to sell quickly and for the best price?
                                    </button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card d-none">
                                <div class="accordion-header" id="collapse-item-8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">Q8.
                                        What are the key features to look for when buying a new home?
                                    </button>
                                </div>
                                <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>
                            <div class="accordion-card d-none">
                                <div class="accordion-header" id="collapse-item-9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">Q9.
                                        How can I ensure my renovation project stays within budget?
                                    </button>
                                </div>
                                <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><p class="faq-text">The open-concept layout seamlessly connects
                                            the living room with the fully equipped kitchen, boasting top-of-the-line appliances and
                                            all the essentials for preparing delicious meals.</p></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
