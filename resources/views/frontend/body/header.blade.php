@php
$route  = Route::current()->getName();
@endphp
<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="{{url('home')}}" class="logo__black"><img src="{{asset('logo/logo.png')}}" alt="" height="90"></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{ ($route ==  'frontend.home') ?  'active' : ''}}"><a href="{{route('frontend.home')}}">Home</a></li>
                                    <li class="{{ ($route ==  'frontend.about') ?  'active' : ''}}" ><a href="{{route('frontend.about')}}">About</a></li>
                                    <li class="{{ ($route ==  'frontend.service') ?  'active' : ''}}" ><a href="{{route('frontend.service')}}">Services</a></li>
                                    <li class="{{ ($route ==  'frontend.portfolio') ?  'active' : ''}}"><a href="{{route('frontend.portfolio')}}">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ ($route ==  'frontend.blog') ?  'active' : ''}}"><a href="{{route('frontend.blog')}}">Our Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Our News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ ($route ==  'frontend.contact') ?  'active' : ''}}" ><a href="{{route('frontend.contact')}}">contact me</a></li>
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href="contact.html" class="btn">Contact me</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>