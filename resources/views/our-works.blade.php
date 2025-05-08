@extends("layouts.master")
@section("content")
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/contact_bg_6.jpg">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Ray and Sons Plumbing Works</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Home</a></li>
                    <li>Our Works</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space">
        <div class="container text-center">
            <div class="filter-menu style2 mt-0 indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Plumbing Installations</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Drainage Services</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Plumbing Maintenances</button>
{{--                <button data-filter=".cat4" class="tab-btn" type="button">Cooling</button>--}}
{{--                <button data-filter=".cat5" class="tab-btn" type="button">Heating</button>--}}
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
    </div>
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


@endsection
