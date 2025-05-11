@php($hideFooter = true)
@extends("layouts.master")
@section("content")
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/contact_bg_6.jpg">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Talk to us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Home</a></li>
                    <li>Talk to us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">Our Contact Information</h2></div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body"><h5 class="box-title">Our Address</h5>
                            <p class="box-text">45 Workington Rd, Harare Zimbabwe</p></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn"><i class="fas fa-phone"></i></div>
                        <div class="media-body"><h5 class="box-title">Phone Number</h5>
                            <p class="box-text"><a href="tel:+263788716998">+263 78 871 6998</a> <a href="tel:+263774631511">+263 77 463 1511</a></p></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn"><i class="fas fa-envelope"></i></div>
                        <div class="media-body"><h5 class="box-title">Email Address</h5>
                            <p class="box-text"><a href="mailto:info@rayandsons.co.zw">info@rayandsons.co.zw</a> <a
                                    href="mailto:contracts@rayandsons.co.zw">contracts@rayandsons.co.zw</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space" data-bg-src="assets/img/bg/contact_bg_6.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 text-center text-xl-start">
                      <form method="POST" action="{{ url('/instantQuote') }}" class="input-light contact-form ">
                                                                                            @csrf

                          <h2 class="sec-title">Get an Instant Quote</h2>
                        <div class="row">
                            <div class="form-group col-md-6"><input type="text" class="form-control" name="fullname" id="fullname"
                                                                    placeholder="Your Name"> <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                                                    id="email" placeholder="Email Address"> <i
                                    class="fal fa-envelope"></i></div>
                            <div class="form-group col-md-6"><input type="tel" class="form-control" name="phoneNumber"
                                                                    id="phoneNumber" placeholder="Phone Number"> <i
                                    class="fal fa-phone"></i></div>
                            <div class="form-group col-md-6">
                               <select name="service" id="service" class="form-select form-control rounded-3">
                                                                                                                   <option value="" disabled="disabled" selected="selected" hidden>Select Service
                                                                                                                   </option>
                                                                                                                   <option value="Plumbing Installations">Plumbing Installations</option>
                                                                                                                   <option value="Drainage Services">Drainage Services</option>
                                                                                                                   <option value="Plumbing Maintenances">Plumbing Maintenances</option>
                                                                                                               </select> <i class="fal fa-chevron-down"></i></div>
                            <div class="form-group col-12"><textarea name="comment" id="comment" cols="30" rows="2"
                                                                     class="form-control"
                                                                     placeholder="Your Message"></textarea> <i
                                    class="fal fa-pencil"></i></div>
                            <div class="form-btn col-12">
                              <button class="th-btn style3" type="submit">Get Quote Now<i class="fa fa-arrow-right ms-2"></i></button>

                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p></form>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="text-center"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="play-btn style4 popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60763.873378405515!2d30.938160289864722!3d-17.85072147491284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a46a21aa9af5%3A0x9e9403156cb89c29!2sWorkington%2C%20Harare%2C%20Zimbabwe!5e0!3m2!1sen!2sza!4v1746971372002!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <footer class="footer-wrapper footer-layout4" >

        <div class="footer-contact-area">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body"><p class="box-text">45 Workington Rd, Harare Zimbabwe</p></div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="media-body"><h3 class="box-title">Call Us:</h3>
                            <p class="box-text"><a href="tel:+263 78 871 6998">+263 78 871 6998</a></p></div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body"><h3 class="box-title">Email Us:</h3>
                            <p class="box-text"><a href="mailto:info@rayandsons.co.za">info@rayandsons.co.zw</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="home-handyman.html"><img src="assets/img/logo/rayandsons_logo.png"
                                                                                          alt="Ray and Sons"></a></div>
                                <p class="about-text">Ray & Sons is a professional plumbing company that offers an extensive range of general and specialist plumbing services to clients across the greater Harare area.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-instagram"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget"><h3 class="widget_title"><img
                                    src="assets/img/icon/footer_title.svg" alt="icon"> Useful Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about-us.index') }}">About Us</a></li>
                                    {{--                                <li ><a href="{{ route('our-works.index') }}">Our Works</a></li>--}}
                                    <li ><a href="{{ route('contact-us.index') }}">Talk to Us</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget"><h3 class="widget_title"><img
                                    src="assets/img/icon/footer_title.svg" alt="icon"> Our Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('plumbing-installations.index') }}">Plumbing Installations</a></li>
                                    <li><a href="{{ route('drainage-services.index') }}">Drainage Services</a></li>
                                    <li><a href="{{ route('plumbing-maintenances.index') }}">Plumbing Maintenance</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget"><h3 class="widget_title"><img
                                    src="assets/img/icon/footer_title.svg" alt="icon"> Newsletter</h3>
                            <p class="footer-text">Get latest updates and offers.</p>
                            <form class="newsletter-form"><input class="form-control" type="email"
                                                                 placeholder="Enter email address" required="">
                                <button type="submit" class="th-btn style3">Subscribe<i class="fa fa-arrow-right ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6"><p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <script>document.write(new Date().getFullYear())</script>
                            <a
                                href="">Ray and Sons Plumbing (Pty) Ltd.</a> All Rights Reserved.</p></div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-links">
                            <ul>
                                <li><a href="https://shifttechgs.com/">Powered By ShiftTech</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{--<div class="scroll-top">--}}
    {{--    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">--}}
    {{--        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"--}}
    {{--              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>--}}
    {{--    </svg>--}}
    {{--</div>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+263774631511&amp;text=Hi%20Ray.%20I%20am%20on%20your%20website%20and%20need%20some%20help." class="floating" target="_blank"> <i class="fa fa-whatsapp float-button"></i> <div class="chat">Chat With Our Friendly Plumber</div> </a></body>


@endsection
