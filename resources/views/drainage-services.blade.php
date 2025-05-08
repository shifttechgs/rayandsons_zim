@extends("layouts.master")
@section("content")
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/contact_bg_6.jpg">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Our Plumbing Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Drainage Services</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tab-content" id="highPressure">
                        <div class="page-single mb-30">
                            <div class="page-content">
                                <h2 class="h3 sec-title page-title">High Pressure Jetting.</h2>

                                <p class=""> Ray and Sons offers a full range of pipe and drain cleaning services to cater for any and all your sewerage, storm water, effluent, sub soil and tank type drainage requirements. We assist customers with drain cleaning in the domestic, corporate, commercial, industrial, government, municipal, insurance and marine (including offshore work) sectors throughout Harare.</p>

                                <div class="pe-xxl-5">
                                    <div class="title-area mb-37">
                                        <h4 class="sec-title">Why Homeowners Choose Us</h4>

                                    </div>
                                    <div class="checklist list-two-column">
                                        <ul>
                                            <li>Trusted & Experienced Technicians</li>
                                            <li>Upfront, Fair Pricing</li>
                                            <li>Minimal Disruption, Maximum Efficiency</li>
                                            <li>Health & Safety Compliance</li>
                                            <li>24/7 Emergency Plumbing</li>

                                        </ul>
                                    </div>
                                    <div class="hero-social-proof mt-4 d-flex align-items-center gap-4" data-ani="fadeinup" data-ani-delay="1.2s">
                                        <div class="row align-items-center">
                                            <!-- Left: Stacked Avatars -->
                                            <div class="col-auto">
                                                <div class="d-flex">
                                                    <img src="assets/img/testimonial/testi_1_2.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_1_1.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_3.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_4.jpg" class="rounded-circle" style="width:40px; height:40px; border: 2px solid #fff;" alt="User">
                                                </div>
                                            </div>

                                            <!-- Right: Rating & Text -->
                                            <div class="col ps-3">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center text-warning">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="ms-2 fw-bold text-dark">4.9 Rating</span>
                                                    </div>
                                                    <p class="mb-0 text-muted">Trusted by 5000+ Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <h4 class="mt-40 mb-4">Our residential services include:</h4>--}}


                                {{--                                <div class="choose-feature-wrap">--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_1.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Showers & Bathtubs</h3></div>--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_2.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Leak Detection & Repair</h3></div>--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_3.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Water Meter Installation</h3></div>--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_4.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Water Lines & Pipework</h3></div>--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_4.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Washer & Dryer Hook-Ups</h3></div>--}}
                                {{--                                    <div class="choose-feature">--}}
                                {{--                                        <div class="box-icon"><img src="assets/img/icon/choose_feature_4.svg" alt="Icon"></div>--}}
                                {{--                                        <h3 class="box-title">Garbage Disposal Services</h3></div>--}}
                                {{--                                </div>--}}

                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="sunflo" style="display: none;">
                        <div class="page-single mb-30">
                            <div class="page-content">
                                <h2 class="h3 sec-title page-title">Sanflo Pump Installations.</h2>

                                <p class=""> Ray and Sons offers a full range of sanfo pumps installations. We assist customers with sanfo pumps in the domestic, corporate, commercial, industrial, government, municipal, insurance and marine (including offshore work) sectors throughout Harare.</p>


                                <div class="pe-xxl-5">
                                    <div class="title-area mb-37">
                                        <h4 class="sec-title">Why Industrial Clients Trust Us</h4>

                                    </div>
                                    <div class="checklist list-two-column">
                                        <ul>
                                            <li>Heavy-Duty Systems Expertise</li>
                                            <li>Transparent Pricing</li>
                                            <li>Minimal Disruption, Maximum Efficiency</li>
                                            <li>Health & Safety Compliance</li>
                                            <li>Custom Maintenance Plans</li>

                                        </ul>
                                    </div>
                                    <div class="hero-social-proof mt-4 d-flex align-items-center gap-4" data-ani="fadeinup" data-ani-delay="1.2s">
                                        <div class="row align-items-center">
                                            <!-- Left: Stacked Avatars -->
                                            <div class="col-auto">
                                                <div class="d-flex">
                                                    <img src="assets/img/testimonial/testi_1_2.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_1_1.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_3.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_4.jpg" class="rounded-circle" style="width:40px; height:40px; border: 2px solid #fff;" alt="User">
                                                </div>
                                            </div>

                                            <!-- Right: Rating & Text -->
                                            <div class="col ps-3">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center text-warning">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="ms-2 fw-bold text-dark">4.9 Rating</span>
                                                    </div>
                                                    <p class="mb-0 text-muted">Trusted by 5000+ Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="drainCamera" style="display: none;">
                        <div class="page-single mb-30">
{{--                            <div class="page-img"><img src="assets/img/gallery/project_2_4.jpg" alt="Service Image"></div>--}}

                            <div class="page-content">
                                <h2 class="h3 sec-title page-title">Drain Camera.</h2>
                                {{--                                <p>Professional, Efficient & Built for Business.</p>--}}

                                <p class="">Knowing the current condition of pipelines is essential for maintaining wastewater and storm water network systems. We offer a comprehensive, technical and environmentally-friendly solution to pipeline inspection.</p>
                                <p class="">Ray and Sons plumbers has a variety of system’s that can cater for these needs. In conjunction with our various suppliers we can design and install a Grey Water System suited to your needs.Water is power and with it been such a precious commodity we need to save every drop.</p>

                                <div class="pe-xxl-5">
                                    <div class="title-area mb-37">
                                        <h4 class="sec-title">Why Businesses Trust Us</h4>

                                    </div>
                                    <div class="checklist list-two-column">
                                        <ul>
                                            <li>Quick Response & Timely Service</li>
                                            <li>Tailored Commercial Solutions</li>
                                            <li>Disruption-Free Work Approach</li>
                                            <li>Health & Safety Compliance</li>
                                            <li>Licensed, Insured & Code-Compliant</li>

                                        </ul>
                                    </div>
                                    <div class="hero-social-proof mt-4 d-flex align-items-center gap-4" data-ani="fadeinup" data-ani-delay="1.2s">
                                        <div class="row align-items-center">
                                            <!-- Left: Stacked Avatars -->
                                            <div class="col-auto">
                                                <div class="d-flex">
                                                    <img src="assets/img/testimonial/testi_1_2.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_1_1.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_3.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_4.jpg" class="rounded-circle" style="width:40px; height:40px; border: 2px solid #fff;" alt="User">
                                                </div>
                                            </div>

                                            <!-- Right: Rating & Text -->
                                            <div class="col ps-3">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center text-warning">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="ms-2 fw-bold text-dark">4.9 Rating</span>
                                                    </div>
                                                    <p class="mb-0 text-muted">Trusted by 5000+ Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="greyWater" style="display: none;">
                        <div class="page-single mb-30">
                            <div class="page-content">
                                <h2 class="h3 sec-title page-title">Shower Replacements and Installations.</h2>
                                {{--                                <p>Professional, Efficient & Built for Business.</p>--}}

                                <p class="">A leaking shower can cause severe damage to the structure of a home. Some common signs of the leaky shower are moldy plaster, rotting skirting or a damp smell that require immediate repair to avoid further damage.</p>
                                <p class="">Ray and Sons Plumbing specializes in shower installments, repairs and replacement services and can handle any kind of shower repair work. If the shower recess has not been sealed correctly to begin with or the sealants and grouts have degraded to the point of failing then water will penetrate the tiles. Water, which is trapped underneath tiles, will eventually make them lose their adhesion with the substrate and lift.</p>

                                <div class="pe-xxl-5">
                                    <div class="title-area mb-37">
                                        <h4 class="sec-title">Why Businesses Trust Us</h4>

                                    </div>
                                    <div class="checklist list-two-column">
                                        <ul>
                                            <li>Quick Response & Timely Service</li>
                                            <li>Tailored Commercial Solutions</li>
                                            <li>Disruption-Free Work Approach</li>
                                            <li>Health & Safety Compliance</li>
                                            <li>Licensed, Insured & Code-Compliant</li>

                                        </ul>
                                    </div>
                                    <div class="hero-social-proof mt-4 d-flex align-items-center gap-4" data-ani="fadeinup" data-ani-delay="1.2s">
                                        <div class="row align-items-center">
                                            <!-- Left: Stacked Avatars -->
                                            <div class="col-auto">
                                                <div class="d-flex">
                                                    <img src="assets/img/testimonial/testi_1_2.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_1_1.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_3.jpg" class="rounded-circle" style="width:40px; height:40px; margin-right: -10px; border: 2px solid #fff;" alt="User">
                                                    <img src="assets/img/testimonial/testi_2_4.jpg" class="rounded-circle" style="width:40px; height:40px; border: 2px solid #fff;" alt="User">
                                                </div>
                                            </div>

                                            <!-- Right: Rating & Text -->
                                            <div class="col ps-3">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center text-warning">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="ms-2 fw-bold text-dark">4.9 Rating</span>
                                                    </div>
                                                    <p class="mb-0 text-muted">Trusted by 5000+ Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_tag_cloud"><h3 class="widget_title">Featured Drainage Services </h3>
                            <div class="tagcloud">
                                <a class="th-btn style4 tab-btn active" style="color: white" data-tab="highPressure" href="javascript:void(0)">High Pressure Jetting</a>
                                <a class="tab-btn" data-tab="sunflo" href="javascript:void(0)">Sunflo Pump Installation</a>
                                <a class="tab-btn" data-tab="drainCamera" href="javascript:void(0)">Drain Camera</a>
                                <a class="tab-btn" data-tab="greyWater" href="javascript:void(0)">Grey Water Systems</a>
                            </div>
                        </div>
                        <div class="widget widget_banner" id="residential" data-bg-src="assets/img/bg/widget_banner.jpg">
                            <div class="widget-banner">
                                <h3 class="box-title">Need a Plumber? We're Just a Call Away.</h3>

                                <h3 class="box-link">
                                    <a href="tel:+27785575211">+27 785 575 211</a>
                                </h3>

                                <p class="box-title text-center fw-semibold">Or</p>

                                <a href="contact.html" class="th-btn style3">
                                    Get Instant Quote <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>

                        </div>


                    </aside>
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

    <script>
        function activateTab(tabId) {
            // Remove 'active' class from all buttons
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => content.style.display = 'none');

            // Add 'active' to selected button
            const activeBtn = document.querySelector(`.tab-btn[data-tab="${tabId}"]`);
            const activeContent = document.getElementById(tabId);

            if (activeBtn && activeContent) {
                activeBtn.classList.add('active');
                activeContent.style.display = 'block';
            }
        }

        // On click switch
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                activateTab(tabId);
            });
        });

        // On page load - detect ?tab=value in URL
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab') || 'highPressure'; // default to residential
            activateTab(tab);
        });
    </script>
@endsection
