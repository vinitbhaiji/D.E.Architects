@extends('main')
@section("main-section")
        <div class="untree_co-hero overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="hero-inner text-center d-flex align-items-center justify-content-center">
                    <div class="text text-center w-75">
                        <div class="w-100 mx-auto">
                            <h1 data-aos="fade-up" data-aos-delay="100" class="mb-4">
                                <strong>Architectural </strong>Services
                            </h1>
                            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                                Unleash the power of innovative design with our comprehensive architectural services,
                                where creativity meets functionality across a spectrum of segments, shaping environments
                                that inspire and endure.
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
                                    <span class="flaticon-architect-3"></span>
                                    <h3><a href="#">Architectural Consultancy</a></h3>
                                    <p>
                                        Elevate your space with our expert architectural consultancy services. Our
                                        seasoned architects blend creativity with functionality to craft designs that
                                        resonate with your vision and lifestyle. From conceptualization to realization,
                                        we collaborate closely with you, ensuring every detail aligns with your
                                        preferences. Whether it's residential or commercial, our team is dedicated to
                                        transforming spaces into harmonious, aesthetically pleasing environments. With a
                                        focus on innovation and sustainability, our architectural consultancy brings a
                                        touch of sophistication to your projects. Partner with us to redefine your
                                        spaces and create lasting impressions that reflect the essence of your firm's
                                        commitment to excellence.
                                    </p>
                        
                                    <p><a href="../pdf/CONSULTATION QOUTATION.pdf"  class="more" target="blank">Get Qoutation PDF</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="service">
                                   
                                    <img src="images/ar1.jpg" alt="Image" class="img-fluid" style="padding-top:30px;" />
                                </div>
                            </div>
                            
                            <div class="col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="service">
                                    <img src="images/ar2.png" alt="Image" class="img-fluid" />
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