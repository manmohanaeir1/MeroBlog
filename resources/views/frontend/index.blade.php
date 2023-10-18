@extends('frontend.main_master')
@section('content')


    <!-- banner-area -->
    @include('frontend.home_all.home_slider')
    <!-- banner-area-end -->

    <!-- about-area -->
    <section id="aboutSection" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="about__icons__wrap">
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/xd_light.png')}}" alt="XD">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/xd.png')}}" alt="XD">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/skeatch_light.png')}}" alt="Skeatch">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/skeatch.png')}}" alt="Skeatch">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/illustrator_light.png')}}" alt="Illustrator">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/illustrator.png')}}" alt="Illustrator">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/hotjar_light.png')}}" alt="Hotjar">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/hotjar.png')}}" alt="Hotjar">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/invision_light.png')}}" alt="Invision">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/invision.png')}}" alt="Invision">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/photoshop_light.png')}}" alt="Photoshop">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/photoshop.png')}}" alt="Photoshop">
                        </li>
                        <li>
                            <img class="light" src="{{asset('frontend/assets/img/icons/figma_light.png')}}" alt="Figma">
                            <img class="dark" src="{{asset('frontend/assets/img/icons/figma.png')}}" alt="Figma">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                            </div>
                            <div class="about__exp__content">
                                <p>20+ Years Experience In this game, Means <br> Product Designing</p>
                            </div>
                        </div>
                        <p class="desc">I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer</p>
                        <a href="about.html" class="btn">Download my resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services">
        <div class="container">
            <div class="services__title__wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section__title">
                            <span class="sub-title">02 - my Services</span>
                            <h2 class="title">Creates amazing digital experiences</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-4">
                        <div class="services__arrow"></div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 services__active">
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img src="{{asset('frontend/assets/img/images/services_img01.jpg')}}" alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon01.png')}}" alt="">
                                <img class="dark" src="{{asset('frontend/assets/img/icons/services_icon01.png')}}" alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            <ul class="services__list">
                                <li>Research & Data</li>
                                <li>Branding & Positioning</li>
                                <li>Business Consulting</li>
                                <li>Go To Market</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img src="{{asset('frontend/assets/img/images/services_img02.jpg')}}" alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon02.png')}}" alt="">
                                <img class="dark" src="{{asset('frontend/assets/img/icons/services_icon02.png')}}" alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img src="{{asset('frontend/assets/img/images/services_img03.jpg')}}" alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon03.png')}}" alt="">
                                <img class="dark" src="{{asset('frontend/assets/img/icons/services_icon03.png')}}" alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img src="{{asset('frontend/assets/img/images/services_img04.jpg')}}" alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon04.png')}}" alt="">
                                <img class="dark" src="{{asset('frontend/assets/img/icons/services_icon04.png')}}" alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img src="{{asset('frontend/assets/img/images/services_img03.jpg')}}" alt=""></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{asset('frontend/assets/img/icons/services_light_icon02.png')}}" alt="">
                                <img class="dark" src="{{asset('frontend/assets/img/icons/services_icon02.png')}}" alt="">
                            </div>
                            <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                            <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                            <ul class="services__list">
                                <li>User Research & Testing</li>
                                <li>UX Design</li>
                                <li>Visual Design</li>
                                <li>Information Architecture</li>
                            </ul>
                            <a href="services-details.html" class="btn border-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

  

  
 

    <!-- testimonial-area -->
    <section class="testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <ul class="testimonial__avatar__img">
                        <li><img src="{{asset('frontend/assets/img/images/testi_img01.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img02.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img03.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img04.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img05.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img06.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/img/images/testi_img07.png')}}" alt=""></li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial__wrap">
                        <div class="section__title">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Happy clients feedback</h2>
                        </div>
                        <div class="testimonial__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog">
        
    </section>
    <!-- blog-area-end -->

     
    @endsection


   
    

