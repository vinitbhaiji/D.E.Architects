@extends('main')
@section("main-section")
    <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                <div class="text text-center w-75">
                    <div class="w-100 mx-auto">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">
                            Our <strong>services</strong>
                        </h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                            Discover a spectrum of services tailored to redefine spaces and elevate experiences. From
                            visionary architectural designs to personalized interior transformations, our services
                            embody excellence in every detail.
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
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="service">
                                <span class="flaticon-architect-2"></span>
                                <h3><a href="{{url('interior')}}">Interior Consultancy</a></h3>
                                <p>
                                    With our creative touch, we can elevate your living spaces
                                    and create interior environments that perfectly capture your
                                    individuality and sense of style.
                                </p>
                                <p><a href="{{url('interior')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service">
                                <span class="flaticon-architect-3"></span>
                                <h3><a href="{{url('architectural')}}">Architectural Consultancy</a></h3>
                                <p>
                                    We create architectural wonders that inspire, endure, and
                                    withstand the test of time by skillfully combining
                                    aesthetics and functionality.
                                </p>
                                <p><a href="{{url('architectural')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service">
                                <span class="flaticon-architecture"></span>
                                <h3><a href="{{url('management')}}">Project Management Consultancy</a></h3>
                                <p>
                                    We optimise resources and deadlines for your peace of mind,
                                    ensuring every project is successful from conception to
                                    completion through our rigorous planning.
                                </p>
                                <p><a href="{{url('management')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="service">
                                <span class="flaticon-architect-6"></span>
                                <h3><a href="{{url('legal')}}">Legal Building Permission</a></h3>
                                <p>
                                    Get professional advice and insights for your building
                                    project, utilising our experience to control expenses,
                                    expedite the procedure, and guarantee high-quality results.
                                </p>
                                <p><a href="{{url('legal')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service">
                                <span class="flaticon-architect"></span>
                                <h3><a href="{{url('realestate')}}">Real Estate Advisory</a></h3>
                                <p>
                                    Harness our industry expertise and strategic insights to make informed real estate
                                    decisions, whether you're buying, selling, or investing in properties, ensuring your
                                    financial goals are met.
                                </p>
                                <p><a href="{{url('realestate')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service">
                                <span class="flaticon-architect-7"></span>
                                <h3><a href="{{url('turnkey')}}">Turnkey with Materials</a></h3>
                                <p>
                                    Leave the heavy lifting to us. Our professional installation
                                    services cover a wide range of needs, ensuring your projects
                                    are completed with precision and finesse.
                                </p>
                                <p><a href="{{url('turnkey')}}" class="more">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section untree_co-section-5 pb-5" style="padding-bottom:0rem;">
    </div>
   @endsection