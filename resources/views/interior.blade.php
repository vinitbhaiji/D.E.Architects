@extends('main')
@section("main-section")
        <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                    <div class="text text-center w-75">
                        <div class="w-100 mx-auto">
                            <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">
                                <strong>Interior</strong> Services
                            </h1>
                            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                                With our creative touch, we can elevate your living spaces and create interior
                                environments that perfectly capture your individuality and sense of style.
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
                                    <span class="flaticon-architect-2"></span>
                                    <h3><a href="">Interior Consultancy</a></h3>
                                    <p>
                                        Welcome to our exceptional interior design service, where we create rooms that
                                        tell distinctive stories by fusing creativity and utility. In order to ensure
                                        that every design is a unique representation of your taste and goals, our
                                        committed team of talented designers works in tandem with you to understand your
                                        vision, tastes, and lifestyle. We create interiors that not only captivate the
                                        eye but also improve the whole living experience by bringing harmony to every
                                        element—color, texture, lighting, and furnishings—from conception to final
                                        execution. Our interior design service is customised to your needs, converting
                                        spaces into aesthetically pleasing, useful works of art, whether you're going
                                        for a modern, minimalist retreat or a warm, traditional atmosphere. Discover the
                                        endless possibilities with our knowledge, where each element has been
                                        painstakingly chosen.
                                    </p>
                                    <!-- <p><a href="#" class="more">Learn more</a></p> -->
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service">
                                    <img src="images/id1.jpg" alt="Image" class="img-fluid"
                                        style="padding-top: 50px;" />
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="service">
                                    <img src="images/id2.jpg" alt="Image" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" data-aos="fade-up" data-aos-delay="0">
                            <div class="col-lg-4">
                                <a href="{{url('services')}}" class="btn btn-primary">Our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="untree_co-section untree_co-section-5 pb-5" style="padding-bottom:0rem;">
        </div>
    @endsection