@extends('main')
@section("main-section")
        <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                    <div class="text text-center w-75">
                        <div class="w-100 mx-auto">
                            <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">
                                <strong>Project Management </strong>Consultancy
                            </h1>
                            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                                Seamlessly navigate your interior design projects with our experienced project managers,
                                ensuring efficiency, clear communication, and successful outcomes.
                            </p>
                            <p><a href="{{url('contact')}}" class="btn btn-primary">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="untree_co-section untree_co-section-4" style="padding-bottom:0rem;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto contents">
                        <div class="row mb-5">
                            <div class="col-lg-3 mt-2" data-aos="fade-up" data-aos-delay="0">
                                <h3 class="sub-title border-bot text-black">Our services</h3>
                            </div>
                            <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="section-title text-black my-0 py-0 mb-3">
                                    We build timeless architecture and lavishing interiors with excellence
                                </h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-8 mb-4" data-aos="fade-up" data-aos-delay="0">
                                <div class="service">
                                    <span class="flaticon-architecture"></span>
                                    <h3><a href="#">Project Management Consultancy</a></h3>
                                    <p>
                                        Navigate your interior design projects seamlessly with our Project Management
                                        Consultancy. We specialize in orchestrating the intricate dance of timelines,
                                        budgets, and resources to ensure your vision comes to life on schedule and
                                        within scope. Our experienced project managers streamline processes, mitigate
                                        risks, and foster clear communication among all stakeholders. From inception to
                                        completion, we're your dedicated partners, providing oversight that ensures
                                        efficiency and quality craftsmanship. Trust us to deliver not just spaces, but
                                        an experience – where your design dreams materialize effortlessly under the
                                        expert guidance of our project management consultancy services. Your vision, our
                                        commitment, and successful outcomes.
                                    </p>
                                    <p><a href="#" class="more">Get Qoutation PDF</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service">
                                    <img src="images/pm1.jpg" alt="Image" height="350px" width="300px"
                                        style="padding-top:50px" />
                                </div>
                            </div>
                            <div class="col-12 mb-4 mt-0" data-aos="fade-up" data-aos-delay="200">
                                <div class="service">
                                    <img src="images/pr2.jpg" alt="Image" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" data-aos="fade-up" data-aos-delay="0">
                            <div class="col-lg-4">
                                <a href="{{URL('services')}}" class="btn btn-primary">Our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="untree_co-section untree_co-section-5 pb-5" style="padding-bottom:0rem;">
           
        </div>
  @endsection