@extends('main')
@section("main-section")
        <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                    <div class="text text-center w-75">
                        <div class="w-100 mx-auto">
                            <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">
                                <strong>Legal Building</strong> Permission
                            </h1>
                            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                                Build with confidence and compliance as our team navigates the complexities of
                                regulations, securing necessary approvals for your designs.
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
                                    <span class="flaticon-architect-6"></span>
                                    <h3><a href="#">Legal Building Permission</a></h3>
                                    <p>
                                        Build with confidence and compliance through our Legal Building Permission
                                        service. Navigating the maze of regulations and permits can be daunting, but
                                        with our expert assistance, your project is in capable hands. We meticulously
                                        handle the legal intricacies, securing the necessary approvals and permissions
                                        for your designs. Our team ensures that every aspect aligns with local building
                                        codes and regulations, offering you peace of mind. From initial applications to
                                        final approvals, we streamline the process, allowing you to focus on the
                                        creative aspects of your project. Partner with us to ensure your designs not
                                        only captivate but also adhere to all legal requirements, embodying a commitment
                                        to excellence and responsible design.
                                    </p>
                                    <p><a href="#" class="more">Get Qoutation PDF</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service">
                                    <img src="images/lb.jpg" alt="Image" class="img-fluid" style="padding-top: 40px;" />
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="service">
                                    <img src="images/lb1.jpg" alt="Image" class="img-fluid" />
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