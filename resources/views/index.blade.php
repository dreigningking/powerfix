@extends('layout')
@section('main')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img/carousel-1.jpg')}}'>">
                <img class="img-fluid" src="{{asset('img/carousel-1.jpg')}}" alt="">
                <div class="owl-carousel-inner" style="background-color: rgb(15 15 13 / 15%);">
                    <div class="container" >
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Reliable & Affordable Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Harness the power of the sun and cutting edge innovative technology to provide clean renewable energy for your home or business
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img/carousel-2.jpg')}}'>">
                <img class="img-fluid" src="{{asset('img/carousel-2.jpg')}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    24/7 Electricity, even during Load Shedding
                                    
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Smart and adaptable state of the art electronic solutions that continually learns, monitors and optimize your power usage, thereby maximizing savings
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img/carousel-3.jpg')}}'>">
                <img class="img-fluid" src="{{asset('img/carousel-3.jpg')}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    Smart, Flexible & Scalable Solutions
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Modular configurations tailored to your specific requirements, making it the ideal solution for diverse scenarios and varying capacity needs 
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">10</h1>
                    </div>
                    <h5 class="mb-3">Years Warranty</h5>
                    <span>On all purchased products from Powerfix Solutions</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-clock text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">15</h1>
                    </div>
                    <h5 class="mb-3">Minutes Installation</h5>
                    <span>A record breaking minimal installation time </span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">5</h1>
                    </div>
                    <h5 class="mb-3">Minutes Commissioning</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1</h1>
                    </div>
                    <h5 class="mb-3">Most Innovative</h5>
                    <span>Energy and technology company in the world</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- About Start -->
    <div id="about" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('img/about_us.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-7 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0 pb-lg-0">
                        <h6 class="text-primary">About Us</h6>
                        <h4 class="mb-4">21<sup>st</sup>  Century Electronic Solutions with AI</h4>
                        <p class=""> Power Fix Solutions has partnered with world leading solar technology company; 
                            Sigenergy to provide Zambia and surrounding Southern African communities 
                            with state of the art solar technology, making reliable & affordable clean energy available,
                            thus helping your business operate at full capacity no matter what is happening with the grid
                             </p>
                        
                        <p class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Perfect 24/7 Electricity</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>AI Smart and Affordable Solution </p>
                        <p class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Tailored to your specific needs</p>
                        <a href="{{route('about')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3 mb-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div id="features" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Features</h6>
                <h1 class="mb-4">Why we are the best</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                       
                        <div class="position-relative p-4 pt-0">
                            <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Scalable Solution</h4>
                            </div>
                            
                            <p>Our deployments are scalable, allowing you to easily increase your energy output</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        
                        <div class="position-relative p-4 pt-0">
                            <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-shoe-prints fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Less Footprint</h4>
                            </div>
                            <p> Compact electronic solutions that takes little square meter area of your space</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        
                        <div class="position-relative p-4 pt-0">
                            <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-tachometer-alt fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Fast Installation</h4>
                            </div>
                            <p>Record breaking 15 minutes installation and commission of setup.</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        
                        <div class="position-relative p-4 pt-0">
                        <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-object-ungroup fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Modular Solutions</h4>
                            </div>
                            <p>Our design approach allows for independent and interchangeable components</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        
                        <div class="position-relative p-4 pt-0">
                            <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-microchip fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Artificial Intelligence</h4>
                            </div>
                            <p>Embedded with smart and the most intelligent ai powered solutions in the market</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More
                                <i class="fa fa-arrow-right ms-2"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        
                        <div class="position-relative p-4 pt-0">
                            <div class="d-flex align-items-center">
                                <div class="service-icon mt-2">
                                    <i class="fa fa-binoculars fa-2x"></i>
                                </div>
                                <h4 class="ms-2 mb-3">Constant Monitoring</h4>
                            </div>
                            
                            <p>Continually learns, monitors and optimize your power usage, thereby maximizing savings with zero downtime</p>
                            <!-- <a class="small fw-medium text-primary" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="pe-lg-5">
                        <h6 class="text-primary">Design Options</h6>
                        <h1 class="mb-4">Flexibility in setup</h1>
                        <p class="mb-4 pb-2">We offer diverse design and configuration options that can be tailored to your specific needs and budget, all of which
                            comes along with our AI powered technology and MySigen App</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                    <svg id="Layer_1" width="20px" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.68 123.12">
                                        <defs><style>.cls-1{fill-rule:evenodd;}</style></defs>
                                        <title>electric-pole</title>
                                        <path class="cls-1" d="M0,16.06H32.7V2.33l.07-.07a5.62,5.62,0,0,1,.55-.54,7.83,7.83,0,0,1,5-1.72,7.45,7.45,0,0,1,4.94,1.76,4.64,4.64,0,0,1,.49.5l.06.07V16.06H76.68V21H63.12a1.4,1.4,0,0,1-.26.39L43.62,40.8v1.32H76.68v4.93H63.25a.52.52,0,0,1-.1.11L43.62,66.88v56.24H32.94V66.8L13.49,47.16l-.1-.11H0V42.12H32.94v-1.4l-18.86-19a1.21,1.21,0,0,1-.33-.69H0V16.06Zm72.9-2.62a.69.69,0,0,1,.29.57h0a.69.69,0,0,1-.68.69H70.46a.69.69,0,0,1-.69-.69h0a.7.7,0,0,1,.3-.57h-.86a1,1,0,0,1-1-1v-.87h6.65v.87a1,1,0,0,1-1,1Zm-3.69-4.1h1a.71.71,0,0,1-.42-.63v0A.69.69,0,0,1,70.46,8h2.05a.69.69,0,0,1,.68.69v0a.7.7,0,0,1-.41.63h1a1,1,0,0,1,1,1.05v.67H68.16v-.67a1,1,0,0,1,1-1.05Zm-62,4.1a.71.71,0,0,1,.29.57h0a.69.69,0,0,1-.69.69h-2A.69.69,0,0,1,4.05,14h0a.7.7,0,0,1,.3-.57H3.49a1,1,0,0,1-1.05-1v-.87H9.09v.87a1.06,1.06,0,0,1-1.06,1ZM3.49,9.34h1a.71.71,0,0,1-.42-.63v0A.69.69,0,0,1,4.74,8h2a.69.69,0,0,1,.69.69v0a.7.7,0,0,1-.41.63H8a1.05,1.05,0,0,1,1.06,1.05v.67H2.44v-.67A1,1,0,0,1,3.49,9.34ZM60,47.05H16.69l16.25,16.4V50.25H43.62V63.53L60,47.05ZM43.62,37.46,59.93,21H16.71L32.94,37.37V23.7H43.62V37.46Z"/>
                                    </svg>
                                        <!-- <i class="fa fa-grid text-white"></i> -->
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">With / Without Grid</h5>  
                                    </div>
                                </div>
                                <p class="mb-0 ms-5 ps-4">Augment the electricity supply from the grid to remain powered on when the grid is out.
                                    <br>You can also choose to go completely off the grid and accurately provision your energy requirement from the power of the sun
                                </p> 
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><circle cx="32" cy="32" r="12" style="fill:none;stroke:#222a33;stroke-width:1.5px"/><path d="M39.682 35.636A8.483 8.483 0 0 1 34.2 40.21M32 16V8M40.907 16.572l2.186-3.785M48.214 23.546l3.785-2.185M48 32h8M49 41.815 52.785 44M42.269 48.214l2.185 3.785M32 48v8M23.093 47.428l-2.186 3.785M17.358 41.361l-3.785 2.185M16 32H8M18.144 24l-3.785-2.185M24.454 17.358l-2.185-3.785" style="fill:none;stroke:#222a33;stroke-width:1.5px"/></svg>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">With / Without Solar </h5>
                                    </div>
                                </div>
                                <p class="mb-0 ms-5 ps-4">Nothing can be compared to generating your own clean energy, however you may start your journey of interrupted
                                    power supply with only energy storage devices
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <!-- <i class="fa fa-drafting-compass text-white"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="35px">
                                            <path style="fill:none;stroke:#222a33;stroke-width:1px" d="M27.47 8H20V5h4v1a1 1 0 0 0 2 0V4.66A1.66 1.66 0 0 0 24.34 3h-4.68A1.66 1.66 0 0 0 18 4.66V8h-4V4.66A1.66 1.66 0 0 0 12.34 3H7.66A1.66 1.66 0 0 0 6 4.66V8H4.53A2.53 2.53 0 0 0 2 10.53v15.94A2.53 2.53 0 0 0 4.53 29H20a1 1 0 0 0 0-2H4.53a.53.53 0 0 1-.53-.53V10.53a.53.53 0 0 1 .53-.53h22.94a.53.53 0 0 1 .53.53v15.94a.53.53 0 0 1-.53.53H24a1 1 0 0 0 0 2h3.47A2.53 2.53 0 0 0 30 26.47V10.53A2.53 2.53 0 0 0 27.47 8zM8 5h4v3H8z"/>
                                            <path d="M7 22.62A2.31 2.31 0 0 0 9.23 25h13.54A2.31 2.31 0 0 0 25 22.62v-2.24A2.31 2.31 0 0 0 22.77 18H9.23A2.31 2.31 0 0 0 7 20.38zm2-2.24c0-.23.14-.38.23-.38h13.54c.09 0 .23.15.23.38v2.24c0 .23-.14.38-.23.38H9.23c-.09 0-.23-.15-.23-.38zM24 15a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2zM10 11a1 1 0 0 0-1 1v1H8a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0v-1h1a1 1 0 0 0 0-2h-1v-1a1 1 0 0 0-1-1z"/>
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">With or Without Batteries</h5>
                                    </div>
                                </div>
                                <p class="mb-0 ms-5 ps-4">Depending on your budget, we have setups that can be commissioned with or without batteries</p>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <!-- <i class="fa fa-headphones text-white"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" viewBox="0 0 64 64" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2">
                                            <path d="M55 38h-2.5M45.5 32h-8M33.75 32H18.5s-.234-4.165 4-8" style="fill:none;stroke:#222a33;stroke-width:1.5px"/>
                                            <circle cx="20" cy="45" r="5.5" style="fill:none;stroke:#222a33;stroke-width:1.5px"/>
                                            <path d="M38.5 45c0-3.036 2.464-5.5 5.5-5.5s5.5 2.464 5.5 5.5-2.464 5.5-5.5 5.5a5.495 5.495 0 0 1-4.609-2.5" style="fill:none;stroke:#222a33;stroke-width:1.5px"/>
                                            <path d="M14.5 45h-3.287A3.212 3.212 0 0 1 8 41.787v-1.559C8 38.997 8.998 38 10.228 38h.002c.456 0 .856-.302.982-.741l2.241-7.845A7.465 7.465 0 0 1 20.63 24h17.191a4.41 4.41 0 0 1 4.184 3.016l.272.815A7.56 7.56 0 0 0 49.449 33h.657c1.298 0 2.543.516 3.461 1.433A4.898 4.898 0 0 1 55 37.894V38a1 1 0 0 1 1 1v2.787A3.212 3.212 0 0 1 52.787 45H49.5M38.5 45H29M53 22.5a4 4 0 0 0 4-4v-3.423a.577.577 0 0 0-.577-.577h-6.846a.577.577 0 0 0-.577.577V18.5a4 4 0 0 0 4 4h0zM56.014 9.5v2M50 9.5v5M53 22.5v1.95A3.55 3.55 0 0 1 49.45 28H45.5" style="fill:none;stroke:#222a33;stroke-width:1.5px"/>
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">With Electric Cars</h5>
                                    </div>
                                </div>
                                <p class="mb-0 ms-5 ps-4">Charging your electric vehicle using our setup is as simple as plug and play</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('img/planning.png')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div id="products" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Products</h6>
                <h1 class="mb-4">See Our Renowned Renewable Energy Products</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Batteries</li>
                        <li class="mx-2" data-filter=".second">Inverters</li>
                        <li class="mx-2" data-filter=".third">Gateway</li>
                        <li class="mx-2" data-filter=".fourth">Ev DC Charger </li>
                        <li class="mx-2" data-filter=".fifth">Others </li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/sigenstor.jpg')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-6.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/sigenstor"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">SigenStor</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">5-in-1 energy storage system, encompassing Battery PCS, Battery Pack, EV DC Charger, PV Inverter, and EMS modules within its modular framework</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/battery.png')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-5.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Sigen Battery</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">State of the art battery with energy storage-specific 280Ah battery cells for home energy storage systems</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/hybrid.jpg')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-4.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/hybrid-inverter"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Sigen Hybrid Inverter</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">Allows you to add Sigen Battery easily down the track when you’re ready to expand your solar system to include energy storage for optimized  energy experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/energy_controller.jpg')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-3.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/pv-inverter"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Sigen Energy Controller</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">A battery ready and future proof inverter with DC/AC ratio upto 1.6. It comes with  upto 4MPP trackers and IP66 protection rating</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/gateway.png')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-2.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/gateway"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Sigen Energy Gateway</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">Supports multiple SigenStor connection for micro-grid system, with a 350 ms reserve power flow protection of grid & generator.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item fourth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/ev_dc.jpg')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">EV DC Charging Module</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">
                        Confidently use solar energy to power your electric vehicle. Optimizes energy savings and gives a smarter charging experience.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/apps.png')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/ac-charger"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">MySigen App</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">
                            Home energy management system that gives you full visibility and control by providing real-time energy monitoring & enriched data graphs
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/communication.png')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Communication Module</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">
                           Ready to use Internet Modem that allows connection of your energy setup to the internet via 2G/3G/4G
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/products/panel.png')}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset('img/img-600x400-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="https://sigenergy.com/en/products/mysigen-app"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h5 class="text-primary mb-0">Solar Panel</h5>
                        <hr class="text-primary w-25 my-2">
                        <p class="lh-base">
                        Higher Efficiency solar panels with upto 620W output, 
                        24.0% efficiency and less than 1% first year degradation. 
                         
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End ok-->


    <!-- Quote Start -->
    <divc id="contact" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('img/quote.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Contact Us</h6>
                        <h1 class="mb-4">Leave us a Message</h1>
                        <p class="mb-4 pb-2">If you have a question about any of our services or you want to know more about your energy requirement, please send us a message and we will gladly get back to you</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>How should we get back to you</option>
                                        <option value="email">Email</option>
                                        <option value="phone">Phone call </option>
                                        <option value="whatsapp">Whatsapp</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="4" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </divc>
    <!-- Quote End -->


    {{--
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Team Member</h6>
                <h1 class="mb-4">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{asset('img/team-1.jpg')}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{asset('img/team-2.jpg')}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{asset('img/team-3.jpg')}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Testimonial</h6>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('img/testimonial-1.jpg')}}">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('img/testimonial-2.jpg')}}">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('img/testimonial-3.jpg')}}">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    --}}
@endsection
