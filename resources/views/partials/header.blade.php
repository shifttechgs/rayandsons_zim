<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fa fa-times"></i></button>
        <div class="mobile-logo"><a href="home-handyman.html"><img src="assets/img/logo/rayandsons_logo.png" alt="Ray"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="#">Home</a>

                </li>
                <li><a href="#">About Us</a></li>
                <li ><a href="#">Our Services</a>

                </li>


                <li ><a href="#">Our Works</a>

                </li>

                <li ><a href="#">Talk to Us</a>

                </li>
            </ul>
        </div>
    </div>
</div>
<header class="th-header header-layout2 ">
    <div class="header-top sticky-wrapper" style="background-color: #04425b">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-location-dot" style="color:  whitesmoke"></i> 45 Workington Rd, Harare Zimbabwe</li>
                            <li><i class="fas fa-clock" style="color:  whitesmoke"></i> Mon to Sat: 8.00 am - 7.00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-md-inline-block">
                                <i class="fas fa-envelope" style="color:  whitesmoke"></i> <a href="mailto:info@rayandsons.co.za">info@rayandsons.co.za</a>
                            </li>
                            <li>
                                <i class="fas fa-headset" style="color:  whitesmoke"></i> <a href="tel:1234567890">Emergency? Call Now</a>
                            </li>
                            <li>
                                <i class="fa fa-user" style="color:  whitesmoke"></i> <a href="contact.html">Portal</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href="home-handyman.html"><img src="assets/img/logo/rayandsons_logo.png"
                                                                                   alt="Ray and Sons"></a></div>
                    </div>
                    <div class="col">
                        <div class="menu-area ">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>


                                    </li>
                                    <li><a href="{{ route('about-us.index') }}">About Us</a></li>
{{--                                    <li ><a href="{{ route('our_services.index') }}">Our Services</a>--}}
{{--                                    <li ><a href="{{ route('our_services.index') }}">Our Services</a>--}}
                                    <li class="menu-item-has-children"><a href="#">Our Plumbing Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('plumbing-installations.index') }}">Plumbing Installations</a></li>
                                            <li><a href="{{ route('drainage-services.index') }}">Drainage Services</a></li>
                                            <li><a href="{{ route('plumbing-maintenances.index') }}">Plumbing Maintenance</a></li>
                                        </ul>
                                    </li>
                                    </li>


                                    <li ><a href="{{ route('our-works.index') }}">Our Works</a>

                                    </li>

                                    <li ><a href="{{ route('contact-us.index') }}">Talk to Us</a>

                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <form action="#" class="header-search"><input type="text"
                                                                              placeholder="Search Services...">
                                    <button type="button" class="icon-btn"><i class="fal fa-search"></i></button>
                                </form>
                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xxl-block"><a href="contact.html" class="th-btn style3">Get Instant Quote<i
                                class="fas fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</header>
