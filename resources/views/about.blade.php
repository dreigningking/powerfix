@extends('layout')
@section('main')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header Ender -->


    <div class="container" style="margin-top: -8rem;">
        <div class="row">
			<div class="col-11 col-lg-10 mx-auto" >
				<div class="bg-body border border-opacity-10 shadow rounded position-relative p-4 p-sm-5">
					<h3 class="">Who we are</h3>
                    <p style="text-align: justify;"> Power Fix Solutions Ltd is a Zambian company, partnering with world leading solar technology company; 
                        Sigenergy, to provide Zambia and her surrounding Southern African communities with clean renewable and 
                        safe energy, using smart sustainable state of the art solar technology
                    </p>
                    <p style="text-align: justify;margin-bottom:4rem;">
                        As an indigenous company, we understand the energy challenges prevalent in the country, and we have positioned ourselves to be the go-to solution for every home, office or establishment, regardless of how large or small the energy requirement or consumption of such facilities are.
                        Our goal is to make reliable and affordable clean energy available to corporate organizations, residential homes, hospitals, banks, mines etc. 
                    </p>
                    <h3 class="">Why we're the best in the industry</h3>
                    <p style="text-align: justify;"> 
                        We have 21st Century electronic solutions with artificial intelligence (AI), which monitors and learns from your business or home activities to continually optimize energy usage, and supply the exact energy that you need at any time. The system is truly “set and forget”; giving you peace of mind and letting you get on with your core business or life without worries. 
                    </p>
                    <p style="text-align: justify;">
                        Your setup can be provisioned with a monitoring service via the Internet to alert you should an issue arise such as contamination of the solar modules or extra power or energy usage beyond the design parameters which you might like to address. The system is future proof via its unique modularity and can grow as your business grows.
                    </p>
				</div>
			</div>
		</div>
    </div>

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-4 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h4 class="mb-4 text-primary">For Businesses</h4>
                        <p style="text-align: justify;">
                            As a business owner, we can guarantee that Power Fix Solutions will help your business operate at full capacity with perfect electricity 24/7, no matter what is happening with the electricity grid.
                        </p>
                        <p style="text-align: justify;">
                        Regardless of how large or how small your operation, we can provide a tailor made solution with excellent performances. All of our products come with at least 10 years warranty.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-4 about-text wow fadeIn" data-wow-delay="1s">
                    <div class="p-lg-5 pe-lg-0">
                        <h4 class="mb-4 text-primary">For Homes</h4>
                        <p style="text-align: justify;">
                            We know your home is more than just where you live. It’s your place of refuge and safe haven. Unfortunately, unreliable supply of electricity can quickly dim the light on the picture of the comfort you want at home.
                        </p>
                        <p style="text-align: justify;">
                        Letting us power your home with our award winning and industry leading energy products will make your home truly your dream place, while also reducing your overhead expenses on electricity. 
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
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
                            <img class="img-fluid w-75" src="img/team-1.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="tel:"><i class="fas fa-phone"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="mailto:frank@powerfixsolutions.net"><i class="fas fa-envelope"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Frank</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-2.jpg" alt="">
                            <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fas fa-phone"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fas fa-envelope"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Les</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-3.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fas fa-phone"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fas fa-envelope"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Christabel</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

   

@endsection 

    